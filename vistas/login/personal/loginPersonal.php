<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPersonal</title>

    <link rel="stylesheet" href="loginPersonal.css">
    <script src="scriptPersonal.js"></script>
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
            <input type="hidden" name="op">             <!--Mandamos el op -->
            <h3> Tipo: </h3>
            <select class="controls">
                <option>------------------</option>
                <option>Docente Curso</option>
                <option>Coordinador Curso</option>
                <option>Administrador Sistema</option>
            </select>
            <h3> Usuario: </h3>
            <input class="controls" type="usuario" name="usuario" id="usuario" placeholder="Ingrese su codigo de usuario">
            <h3> Clave: </h3>
            <input class="controls" type="password" name="clave" id="clave" placeholder="Ingrese su Clave">
            <hr />
            <div class="botonIniciarSesion">
                <button onclick="btnIniciar()">
                    <img src="../../../img/candado.png" alt="imgCando"> Iniciar Sesión
                </button>
            </div>
        </form>
    </main>
</body>
</html>