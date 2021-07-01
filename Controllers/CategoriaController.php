<?php

class CategoriaController
{
    static public function getCategoria()
    {
      $respuesta = CategoriaModel::getCategoria();
      return $respuesta;
    }
}