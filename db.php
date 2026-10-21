<?php

class DB {
    public static function connect(){
        return new mysqli("localhost","root", "1234", "gestor_gastos");
    }
}

?>