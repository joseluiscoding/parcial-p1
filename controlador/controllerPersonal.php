<?php

    $op = $_GET['op'];
    switch($op){
    
        case 1:
            $pagina = "../vistas/login/personal/loginPersonal.php";
            break;

        case 2:
            $usuario = "petrlik";
            $contraseña = "petrlik1234";
            if($usuario == $_GET['usuario'] && $contraseña == $_GET['clave']){
                $pagina = "../vistas/Personal/ventanaPersonal.php";
            }else{
                $pagina = "../vistas/login/personal/loginPersonal.php";
            }
            
            break;
            
    }
    header('Location:'.$pagina);

?>