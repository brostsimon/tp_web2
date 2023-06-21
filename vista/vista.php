<?php
require_once("libs/smarty/smarty.class.php");


class vista
{
    private $smarty;

    function __construct()
    {
        $this->smarty= new Smarty();
        $this->smarty->assign('base',BASE_URL);
    }

   

    public function mostrar_carta($param)
    {

        $this->smarty->assign('carta',$param);

        $this->smarty->display('templates/carta.tpl');

    }
    
    public function mostrar_opciones($param)
    {
        
        $this->smarty->assign('opciones',$param);

        $this->smarty->display('templates/opciones.tpl');
    }

    public function mostrar_carta_opciones($param)
    {
        
        $this->smarty->assign('opciones',$param);

        $this->smarty->display('templates/carta_opcion.tpl');
    }
   
   
    public function ver_opcion($param)
    {
        
        $this->smarty->assign('opcion',$param);

        $this->smarty->display('templates/opcion.tpl');
    }

}
