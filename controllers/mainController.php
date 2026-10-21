<?php
    // cargar modelos
    require_once("models/User.php");
    require_once("models/Expense.php");

    session_start();

    if(isset($_GET['c'])){
        require_once("controllers/".$_GET['c']."View.php");
    }

    // ver login
    if(isset($_GET['login'])){
        require_once("views/".$_GET['login']."View.php");
    }
    // ver registro
    if(isset($_GET['register'])){
        require_once("views/".$_GET['c']."View.php");
    }
    // ver gastos
    if(isset($_GET['expenses'])){
        require_once("views/".$_GET['c']."View.php");
    }

    //vista por defecto
    require_once("views/mainView.phtml");
?>