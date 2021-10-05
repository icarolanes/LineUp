$("#navio").on('input', function () {
    navio = $("#navio").val();

    if (navio.length >= 1) {
        $.getJSON("banco/dados_navio.php", { navio }, function (n) {
            var lista = [];
            $("#lista_navios").empty();
            for (let index = 0; index < n.length; index++) {
                select = document.getElementById('lista_navios');
                var opcoes = document.createElement('option');
                opcoes.value = n[index].nome;
                select.appendChild(opcoes);
            }
        })
    }
});


$("#navio").on('focusout', function () {

});

$('textarea').on('input', function () {
    text = $('textarea').val();
    $('div').html(text);
});

$("#cad_atracacao").submit(function (e) {
    e.preventDefault();
    var request = new XMLHttpRequest();
    $form = $(this);
    console.log("sdas")
    var formdata = new FormData($form[0]);
    request.open("POST", "banco/cadastrar_atracacao.php");
    request.send(formdata);
    console.clear();
    console.log(request);

})
