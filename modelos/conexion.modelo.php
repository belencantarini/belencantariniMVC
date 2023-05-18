<?php

class Conexion {

    static public function conectar() {

        try {
            $link = new PDO("mysql:host=localhost;dbname=belencantarini", "root", "");
            // $link = new PDO("mysql:host=localhost;dbname=id19969330_dbbelencantarini", "id19969330_userbelencantarini", "Q[x<[b3A+F/]^W<0");
            $link->exec("set names utf8");
            return $link;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

    }

}
