<?php

class Conexion {

    static public function conectar() {

        try {
            // $link = new PDO("mysql:host=localhost;dbname=belencantarini", "root", "");
            $link = new PDO("mysql:host=localhost;dbname=id19969330_belencantarini", "id19969330_belencantarini", "B3l3nC@nt@rini");
            $link->exec("set names utf8");
            return $link;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

    }

}
