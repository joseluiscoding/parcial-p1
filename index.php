<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ParcialP1</title>

    <link rel="stylesheet" href="style.css">
    <script src="controllerIndex.js"></script>
</head>
<body>
    <header>
        <div class="nombreUniv">
            <h1>Universidad Peruana Simon Bolivar</h1>
        </div>
        <div class="nombreSist">
            <h2>Sistema Virtual de Evaluación en Linea</h2>
        </div>
    </header>
    <main>
        <section class="section1">
            <img src="img/icon-accesSystem.png" alt="imgCandado">
            <div class="text-section1">
                <p>Acceso al Sistema</p>
            </div>  
        </section>
        <hr />
        <form name="form" >
            <input type="hidden" name="op">
                <section class="section2">
                    <div class="personal" onclick="btnPersonal()">
                        <img   src="img/icon-personal.png" alt="iconPersonal" >
                        <p>Personal</p>
                    </div>
                    <div class="alumno" onclick="btnAlumno()">
                        <img src="img/icon-alumno.png" alt="iconAlumno">
                        <p>Alumno</p>
                    </div>
                </section>
        </form>
    </main>
</form>
    <footer>
        <p>Sistema Virtual en Linea - Derechos reservados &copy 2015-2016</p>
    </footer>
</body>
</html>
