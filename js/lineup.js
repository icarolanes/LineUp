$("#lineup").ready(function () {
    $.ajax({
        type: "POST",
        url: "banco/lineup.php?tipo=1",
        dataType: "json",
        success: function (data) {
            for (let index = 0; index < data.length; index++) {
                dados = data[index];
                console.log(dados);
                $('#lineup > tbody:last-child').append('<tr><td><a href="https://www.marinetraffic.com/en/ais/details/ships/' + dados.imo + '"><i class="fas fa-ship"></i></a></td><td>' + dados.navio + '</td><td><span class="badge rounded-pill ' + dados.bootstrap_class + '">' + dados.situacao + '</span></td><td>' + dados.eta + '</td><td>' + dados.etb + '</td><td>' + dados.ets + '</td><td>' + dados.wtime + '</td><td>' + dados.cargo + '</td><td>' + dados.agency + '</td><td>' + dados.qtd + '</td></tr>');
            }
        }
    });
});