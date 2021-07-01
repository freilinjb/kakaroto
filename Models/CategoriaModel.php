<?php

require_once "Conection.php";

class CategoriaModel
{
    static public function getCategoria($idCategoria)
    {
        $respuesta = null;
        if($idCategoria == null) {
            $respuesta = Conection::connect()->prepare("
            SELECT 
              c.idCategoria, 
              c.descripcion AS categoria,
              CASE WHEN c.estado IS TRUE THEN 'Activo' ELSE 'Inactivo' END AS estado,
              COALESCE(u.user, ' - ')  AS creado_por
          FROM categoria c
          LEFT JOIN user u ON u.idUser = c.creado_por");
          $respuesta->execute();
             return $respuesta->fetchAll();
        } else {
            $respuesta = Conection::connect()->prepare("
            SELECT 
                c.idCategoria,
                c.descripcion AS categoria, 
                c.estado  
             FROM categoria c WHERE c.idCategoria = $idCategoria");
             $respuesta->execute();
             return $respuesta->fetch();
        }

  

    }
}