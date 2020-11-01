<?php

class Conection {
    static public function connect() {
        $link = new PDO("mysql:host=localhost;dbname=kakaroto","root","");

        $link->exec("set names utf8");
        return $link;
    }
}