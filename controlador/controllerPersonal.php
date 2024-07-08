<?php

    $op = $_GET['op'];
    switch($op){
    
        case 1:
            $pagina = "../vistas/login/personal/loginPersonal.php";
            break;

        case 2:
            $usuario = "renzo";
            $contraseña = "123";
            if($usuario == $_GET['username'] && $contraseña == $_GET['password']){
                $pagina = "../vistas/Personal/ventanaPersonal.php";
            }else{
                $pagina = "../vistas/login/personal/loginPersonal.php";
            }
            
    }
    header('Location:'.$pagina);

?>