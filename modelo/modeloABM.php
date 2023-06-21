<?php


class modeloABM
{
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;' . 'dbname=restaurante;charset=utf8', 'root', '');
  }

  // manejo abm tabla carta 

  public function agregar_carta($carta, $img)
  {
    $para = $this->db->prepare("INSERT INTO carta (clase, img) VALUES (?,?)");


    if ($para->execute(array($carta, $img))) {
      return true;
    } else {
      return false;
    }
  }
  public function get_carta()
  {

    $consulta = $this->db->prepare('SELECT * FROM carta');

    $consulta->execute();

    return $consulta->fetchAll(PDO::FETCH_OBJ);
  }

  public function borrar_carta($id)
  {

    $this->db->setAttribute(
      PDO::ATTR_ERRMODE,
      PDO::ERRMODE_EXCEPTION
    );

    $consulta = $this->db->prepare("DELETE FROM carta WHERE id_carta=?");
    try {

      if ($consulta->execute(array($id))) {
        return true;
      } else {
        return false;
      }
    } catch (exception $e) {
      return false;
    }
  }

  public function modificar_carta($carta, $img, $id)
  {
    $consulta = $this->db->prepare("UPDATE carta SET clase=?, img=? WHERE id_carta=?");

    if ($consulta->execute(array($carta, $img, $id))) {
      return true;
    } else {
      return false;
    }
  }

  public function get_una_carta($id)
  {

    $consulta = $this->db->prepare('SELECT * FROM carta WHERE id_carta=?');

    $consulta->execute(array($id));

    return $consulta->fetch(PDO::FETCH_OBJ);
  }









  // manejo abm tabla opciones 

  public function get_opciones()
  {

    $consulta = $this->db->prepare('SELECT * FROM opcion');

    $consulta->execute();

    return $consulta->fetchAll(PDO::FETCH_OBJ);
  }

  public function get_clase_id_carta()
  {

    $consulta = $this->db->prepare('SELECT clase, id_carta FROM carta');

    $consulta->execute();

    return $consulta->fetchAll(PDO::FETCH_OBJ);
  }


  public function agregar_opcion($nombre, $desc, $img_op, $precio, $id_carta)
  {

    $sentencia = $this->db->prepare("INSERT INTO opcion (nombre, descripcion, img_opcion, precio, id_carta) VALUES (?,?,?,?,?)");

    if ($sentencia->execute(array($nombre, $desc, $img_op, $precio, $id_carta))) {

      return true;
    } else {
      return false;
    }
  }

  public function borrar_opcion($id)
  {

    $sentencia = $this->db->prepare("DELETE FROM opcion WHERE id_opcion=?");
    if ($sentencia->execute(array($id))) {
      return true;
    } else {
      return false;
    }
  }

  public function modificar_opcion($nombre, $desc, $img_op, $precio, $id_carta, $id_opcion)
  {

    $sentencia = $this->db->prepare("UPDATE opcion SET nombre=?, descripcion=?, img_opcion=?, precio=?, id_carta=? WHERE id_opcion=?");

    if ($sentencia->execute(array($nombre, $desc, $img_op, $precio, $id_carta, $id_opcion))) {
      return true;
    } else {
      return false;
    }
  }

  public function traer_una_opcion($id)
  {

    $consulta = $this->db->prepare('SELECT * FROM opcion WHERE id_opcion=?');

    $consulta->execute(array($id));

    return $consulta->fetch(PDO::FETCH_OBJ);
  }
}
