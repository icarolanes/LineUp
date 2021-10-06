$("#usuarios").ready(function () {
    $.ajax({
        type: "POST",
        url: "banco/lineup.php?tipo=4",
        dataType: "json",
        success: function (data) {
            for (let index = 0; index < data.length; index++) {
                dados = data[index];
                console.log(dados);
                $('#usuarios > tbody:last-child').append('<tr><td><i class="fas fa-user-edit text-warning"></i><i class="fas fa-user-slash text-danger"></i></td><td>' + dados.pessoa + '</td><td>' + dados.usuario + '</td><td>' + dados.nivel + '</td></tr>');
            }
        }
    });
});