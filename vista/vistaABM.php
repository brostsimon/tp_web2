<?php

class vistaABM
{

    private $smarty;

    function __construct()
    {


        $this->smarty = new Smarty();
        $this->smarty->assign('base', BASE_URL);
       
    }

    public function mostrar_error($error){

        $this->smarty->assign('error', $error);
        $this->smarty->display('templatesABM/errorABM.tpl');
    }

    public function ABM_carta($param,$mensaje=null)
    {

        $this->smarty->assign('arreglo', $param);
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('templatesABM/cartaABM.tpl');
    }

    public function modificarCarta($param)
    {

        $this->smarty->assign('carta', $param);
        $this->smarty->display('templatesABM/modificarCartaABM.tpl');
    }


    public function opcionesABM($opciones, $carta,$mensaje=null)
    {

        $this->smarty->assign('opciones', $opciones);
        $this->smarty->assign('carta', $carta);
        $this->smarty->assign('mensaje', $mensaje);

        $this->smarty->display('templatesABM/opcionesABM.tpl');
    }

    public function modificaropcion($opcion, $carta)
    {

        $this->smarty->assign('opcion', $opcion);
        $this->smarty->assign('carta', $carta);

        $this->smarty->display('templatesABM/modificaropcion.tpl');
    }
}
