<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginAlumno</title>

    <link rel="stylesheet" href="loginAlumno.css">
    <script src="loginAlumno.js"></script>
    
</head>
<body>
    <header>
        <div class="nombreSist">
            <h2>Sistema Virtual de Evaluación en Linea</h2>
        </div>
    </header>
    <main>
        <div class="imgUPSB">
            <img src="../../../img/logo-UPSB.png" alt="logo-UPSB">
        </div>
        <form name="form" class="form-login">
            <h3> Usuario: </h3>
            <input class="controls" type="usuario" name="usuario" id="usuario" placeholder="Ingrese su codigo de usuario">
            <h3> Clave: </h3>
            <input class="controls" type="password" name="clave" id="clave" placeholder="Ingrese su Clave">
            <hr />
            <div class="botonIniciarSesion">
                <button type="submit" onclick="btnIniciar()">
                    <img src="../../../img/candado.png" alt="imgCando"> Iniciar Sesión
                </button>
            </div>
        </form>
    </main>
</body>
</html>