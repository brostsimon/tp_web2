<?php
require_once("modelo/modeloABM.php");
require_once("vista/vistaABM.php");


class controladorABM
{


    private $modeloABM;
    private $vistaABM;



    function __construct()
    {
        $this->modeloABM = new modeloABM();
        $this->vistaABM = new vistaABM();
    }


    private function start()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }


    private function checkLoggedIn()
    {

        $this->start();

        if (!isset($_SESSION['ID_USER'])) {
            header('Location: login');
            die();
        } elseif (time() - $_SESSION['LAST_ACTIVITY'] > 900) {

            header('Location: logout');
            die();
        } else {
            $_SESSION['LAST_ACTIVITY'] = time();
        }
    }



    public function showABMcarta($mensaje = null)
    {


        $this->checkLoggedIn();
        $carta = $this->modeloABM->get_carta();
        if (!empty($carta)) {
            $this->vistaABM->ABM_carta($carta, $mensaje);
        }
        else{
            $this->vistaABM->mostrar_error("no se encontraron elementos en la carta");
        }
    }


    public function showAGREGARcarta()
    {
        $this->checkLoggedIn();

        if (isset($_GET['action']) && !empty($_GET['clase']) && !empty($_GET['img'])) {

            $clase = $_GET['clase'];
            $img = $_GET['img'];

            if ($this->modeloABM->agregar_carta($clase, $img)) {
                $this->showABMcarta("se agrego bien");
            } else {
                $this->showABMcarta("no se pudo agregar");
            }
        }
    }


    public function show_borrar_carta($params)
    {
        $this->checkLoggedIn();
        if (isset($params[1]) && !empty($params[1]) && is_numeric($params[1])) {

            if ($this->modeloABM->borrar_carta($params[1])) {
                $this->showABMcarta("se borro correctamente de la carta");
            } else {
                $this->showABMcarta("no se pudo borrar");
            }
        }
    }


    public function show_modificar_carta($params)
    {
        $this->checkLoggedIn();


        if (isset($params) && !empty($params[1])) {

            $carta = $this->modeloABM->get_una_carta($params[1]);
            if (!empty($carta)) {
                $this->vistaABM->modificarCarta($carta);
            }
        }


        if (isset($_GET['action']) && !empty($_GET['clase']) && !empty($_GET['img']) && !empty($_GET['id_carta'])) {


            $clase = $_GET['clase'];
            $img = $_GET['img'];
            $id = $_GET['id_carta'];

            if ($this->modeloABM->modificar_carta($clase, $img, $id)) {

                $this->showABMcarta("se modifico correctamente");
            } else {
                $this->showABMcarta("no se pudo modificar");
            }
        }
    }


    //manejo abm tabla opcion

    public function showABMopcion($mensaje=null)
    {
        $this->checkLoggedIn();

        $opciones = $this->modeloABM->get_opciones();
        $carta = $this->modeloABM->get_clase_id_carta();

        if (!empty($opciones) && !empty($carta)) {
            $this->vistaABM->opcionesABM($opciones, $carta,$mensaje);
        } else {
           $this->vistaABM->mostrar_error("no se encontraron opciones disponibles");
        }
    }
    public function show_agregar_opcionABM()
    {
        $this->checkLoggedIn();

        if (
            isset($_GET['action']) && !empty($_GET['nombre']) && !empty($_GET['descripcion'])
            && !empty($_GET['img_opcion']) && !empty($_GET['precio']) && !empty($_GET['clase']&& $_GET['clase']!="")
        ) {

            $nombre = $_GET['nombre'];
            $desc = $_GET['descripcion'];
            $img_op = $_GET['img_opcion'];
            $precio = $_GET['precio'];
            $id_carta = $_GET['clase'];

            if($this->modeloABM->agregar_opcion($nombre, $desc, $img_op, $precio, $id_carta)){
                $this->showABMopcion("se agrego correctamente una nueva opcion");
            }else{
                $this->showABMopcion("no se pudo agregar la opcion");
            }
        }
        else{
            $this->vistaABM->mostrar_error("error en el tipo de datos ingresados");
        }
    }

    public function borrar_opcionABM($params)
    {
        $this->checkLoggedIn();

        if (isset($params) && !empty($params[1])) {
            $this->modeloABM->borrar_opcion($params[1]);
            $this->showABMopcion("se borro correctamente la opcion");
        } else {
            $this->showABMopcion("no se pudo borrar la opcion");
        }
    }

    public function show_modificar_opcion($params)
    {
        $this->checkLoggedIn();

        if (isset($params) && !empty($params[1])) {

            $carta = $this->modeloABM->get_clase_id_carta();
            $opcion = $this->modeloABM->traer_una_opcion($params[1]);

            if (!empty($carta) && !empty($opcion)) {
                $this->vistaABM->modificaropcion($opcion, $carta);
            }
        }


        else if (
            isset($_GET['action']) && !empty($_GET['nombre']) && !empty($_GET['descripcion'])
            && !empty($_GET['img_opcion']) && !empty($_GET['precio']) && !empty($_GET['clase']) && !empty($_GET['id_opcion'])&& $_GET['clase']!=""
        ) {

            $nombre = $_GET['nombre'];
            $desc = $_GET['descripcion'];
            $img_op = $_GET['img_opcion'];
            $precio = $_GET['precio'];
            $id_carta = $_GET['clase'];
            $id_opcion = $_GET['id_opcion'];

            if($this->modeloABM->modificar_opcion($nombre, $desc, $img_op, $precio, $id_carta, $id_opcion)){
                $this->showABMopcion("se modifico correctamente la opcion");
            }else{
                $this->showABMopcion("no se pudo modificar");
            }
            
        }else{
            $this->vistaABM->mostrar_error("error en el tipo de datos ingresados");
        }
    }
}
