<?php
require_once("modelo/modelo.php");
require_once("vista/vista.php");


class controlador
{

   private $modelo;
   private $vista;

   function __construct()
   {

      $this->modelo = new modelo();
      $this->vista = new vista();
   }

   public function show_carta()
   {
      $carta = $this->modelo->traer_carta();
      $this->vista->mostrar_carta($carta);
   }

   public function show_opciones()
   {
      $opciones = $this->modelo->traer_opciones();
      $this->vista->mostrar_opciones($opciones);
   }


   public function show_carta_opciones($params)
   {
      if (isset($params[1]) && !empty($params[1]) && is_numeric($params[1])) {

         $opselec = $this->modelo->traer_tabla_opciones($params[1]);

         if (!empty($opselec)) {

            $this->vista->mostrar_carta_opciones($opselec);
         } else
            $this->show_carta();
      } else {
         echo ("error en los parametros");
      }
   }

   public function show_una_opcion($params)
   {

      if (isset($params[1]) && !empty($params[1]) && is_numeric($params[1])) {

         $opcion = $this->modelo->una_opcion($params[1]);

         $this->vista->ver_opcion($opcion);
      } else {
         echo ("error en los parametros");
      }
   }
}
