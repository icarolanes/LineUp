$("#logar").submit(function (e) {
    e.preventDefault();
    var request = new XMLHttpRequest();
    $form = $(this);
    var formdata = new FormData($form[0]);
    request.open("POST", "banco/logar.php");
    request.send(formdata);
    request.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var response = request.responseText;
            if (response == "true") {
                window.location.href = "index.php";
            } else {
                document.getElementById("senha").value = "";
                document.getElementById("mensagem").innerHTML = ('<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Usuario Incorreto</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            }
        }
    }
});