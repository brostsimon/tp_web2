<?php
require_once("controlador/controlador.php");
require_once("controlador/login.controller.php");
require_once("controlador/controladorABM.php");

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {

    $action = 'carta';
}

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');



$params = explode('/', $action);

$controlador = new controlador();
$controladorABM = new controladorABM();
$controller = new LoginController();

switch ($params[0]) {

        //la primera parte del ruter direcciona la vista sin restricciones

    case 'login':
        
        $controller->showLogin();
        break;

    case 'verify':
        
        $controller->verifyUser();
        break;

    case 'logout':
        
        $controller->logout();
        break;

    case 'carta':

        $controlador->show_carta();
        break;
    case 'clase':


        $controlador->show_carta_opciones($params);

        break;
    case 'ver_todas':

        $controlador->show_opciones();

        break;
    case 'ver_detalle':


        $controlador->show_una_opcion($params);

        break;

        // comienza la seccion del router que direcciona al ABM

        //carta

    case 'cartaABM':

        $controladorABM->showABMcarta();
        break;

    case 'modificar_carta':

        $controladorABM->show_modificar_carta($params);
        break;

    case 'agregar_carta':

        $controladorABM->showAGREGARcarta();
        break;

    case 'borrar_carta':

        $controladorABM->show_borrar_carta($params);
        break;

        //opciones

    case 'opcionABM':

        $controladorABM->showABMopcion();
        break;

    case 'agregar_opcionABM':

        $controladorABM->show_agregar_opcionABM();
        break;
    case 'borrar_opcion':

        $controladorABM->borrar_opcionABM($params);
        break;
    case 'modificar_opcion':

        $controladorABM->show_modificar_opcion($params);
        break;

    default:
        echo ('error parametros incorrectos');
        break;
}
