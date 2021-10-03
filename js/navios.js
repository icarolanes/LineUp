$("#navios").ready(function () {
    $.ajax({
        type: "POST",
        url: "banco/lineup.php?tipo=2",
        dataType: "json",
        success: function (data) {
            for (let index = 0; index < data.length; index++) {
                dados = data[index];
                console.log(dados);
                $('#navios > tbody:last-child').append('<tr><td><a href="https://www.marinetraffic.com/en/ais/details/ships/' + dados.imo + '"><i class="fas fa-ship"></i></a></td><td>' + dados.navio + '</td><td>' + dados.imo + '</td><td>' + dados.atracacoes + '</td></tr>');
            }
        }
    });
});