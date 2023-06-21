<?php
class modelo
{

  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;' . 'dbname=restaurante;charset=utf8', 'root', '');
  }

  public function traer_carta()
  {

    $consulta = $this->db->prepare('SELECT * FROM carta');

    $consulta->execute();

    return $consulta->fetchAll(PDO::FETCH_OBJ);
  }

  public function traer_opciones()
  {

    $consulta = $this->db->prepare('SELECT opcion.*, carta.clase as carta FROM opcion JOIN carta ON opcion.id_carta = carta.id_carta');

    $consulta->execute();
    return $consulta->fetchAll(PDO::FETCH_OBJ);
  }



  public function traer_tabla_opciones($id)
  {

    $consulta = $this->db->prepare("SELECT opcion.*, carta.clase as carta FROM opcion JOIN carta ON opcion.id_carta = carta.id_carta WHERE carta.id_carta=?");

    $consulta->execute(array($id));

    return $consulta->fetchAll(PDO::FETCH_OBJ);
  }

  public function una_opcion($id)
  {

    $consulta = $this->db->prepare("SELECT opcion.*, carta.clase as carta FROM opcion JOIN carta ON opcion.id_carta = carta.id_carta WHERE opcion.id_opcion=?");

    $consulta->execute(array($id));

    return $consulta->fetch(PDO::FETCH_OBJ);
  }
}
