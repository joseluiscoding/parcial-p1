<?php
    $op = $_GET['op'];
    switch($op){
        case 1:
            $pagina = "../vistas/login/alumno/loginAlumno.php";
            break;

        case 2:
            $usuario = "neil";
            $contraseña = "123";
            if($usuario == $_GET['usuario'] && $contraseña == $_GET['clave']){
                $pagina = "../vistas/Alumno/ventanaAlumno.php";
            }else{
                $pagina = "../vistas/login/alumno/loginAlumno.php";
            }
        break;
    }
    header('Location:'.$pagina);
?>