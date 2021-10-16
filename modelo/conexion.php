<?php
class conexion
{
    static function conectar()
    {
        $dsn = 'mysql:dbname=estudiooctubre2021;host=localhost';
        $usuario = 'root';
        $contraseña = '';
        try {
            $mbd = new PDO($dsn, $usuario, $contraseña);
            $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $mbd;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}