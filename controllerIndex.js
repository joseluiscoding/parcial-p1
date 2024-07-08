function btnPersonal(){
    document.form.method = "GET";
    document.form.op.value = "1";
    document.form.action = "controlador/controllerPersonal.php";
    document.form.submit();
}

    function btnAlumno(){
    document.form.method = "GET";
    document.form.op.value = "1";
    document.form.action = "controlador/controllerAlumno.php";
    document.form.submit();
}
