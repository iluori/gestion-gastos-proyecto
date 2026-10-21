// Crear usuario
// Comprobar si el usuario está login
// Cerrar sesión
<?php
    //Si le doy a logout, cierra sesión y me redirige al index
    if(isset($_GET['logout'])){
        session_destroy();
        header('location:index.php');
        exit;
    }

    //form de registro
    if(isset($_POST['register'])){
        if(isset($_POST['nameRegister']) && isset($_POST['email'])){

        }
    }

?>