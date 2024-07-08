function btnIniciar(){
    document.form.method = "GET";
    document.form.op.value = "2";
    document.form.action = "../controlador/controllerAlumno.php";
    document.form.submit();
}
