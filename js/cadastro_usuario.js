$("#cad_usuario").submit(function (e) {
    e.preventDefault();
    var request = new XMLHttpRequest();
    $form = $(this);
    var formdata = new FormData($form[0]);
    request.open("POST", "banco/cadastrar_usuario.php");
    request.send(formdata);
    console.clear();
    console.log(request);
})
