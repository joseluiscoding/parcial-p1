function btnIniciar(){
    document.form.method = "GET";
    document.form.op.value = "2";
    document.form.action = "../controlador/controllerPersonal.php";
    document.form.submit();
}
