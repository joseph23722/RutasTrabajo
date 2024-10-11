<?php

require_once "../config/Server.php";

class Conexion
{

  /**
   * Retorna una conexión a la base de datos
   */
  protected static function getConexion()
  {
    try {
      $pdo = new PDO(SGBD, USER, PASS);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
    } catch (Exception $e) {
      error_log($e->getMessage());
    }
  }

  public function encrypt($string)
  {
    return md5($string);
  }


  public function decrypt($string)
  {
    return md5($string);
  }


  public function getAll($storeProcedure) {}


  public function search($data = []) {}
}
