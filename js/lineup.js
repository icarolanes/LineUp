//listar operações por meio de ajax
$("document").ready(function () {
    $.ajax({
        type: "POST",
        url: "banco/lineup.php",
        dataType: "json",
        success: function (data) {
            for (let index = 0; index < data.length; index++) {
                dados = data[index];
                console.log(dados);
                $('#lista > tbody:last-child').append('<tr><td><a href="https://www.marinetraffic.com/en/ais/details/ships/' + dados.imo + '"><i data-feather="anchor"></i></a></td><td>' + dados.navio + '</td><td>' + dados.status + '</td><td>' + dados.eta + '</td><td>' + dados.etb + '</td><td>' + dados.ets + '</td><td>' + dados.wtime + '</td><td>' + dados.cargo + '</td><td>' + dados.agency + '</td><td>' + dados.qtd + '</td></tr>');
                feather.replace()
            }
        }
    });
});