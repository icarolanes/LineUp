<?php
include('../../conexao_ln.php');

$valores['nome']     = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
$valores['usuario']  = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
$valores['senha']    = filter_var($_POST['senha'], FILTER_SANITIZE_STRING);
$valores['tipo']     = filter_var($_POST['tipo'], FILTER_SANITIZE_STRING);


function cadd_user($con, $valores)
{
    $quer = "call novo_usuario(:nome,:usuario,:senha,:tipo)";
    $prepare = $con->prepare($quer);
    $prepare->bindParam(':nome', $valores['nome'], PDO::PARAM_STR);
    $prepare->bindParam(':usuario', $valores['usuario'], PDO::PARAM_STR);
    $prepare->bindParam(':senha', $valores['senha'], PDO::PARAM_STR);
    $prepare->bindParam(':tipo', $valores['tipo'], PDO::PARAM_STR);
    $prepare->execute();
    $ret = $prepare->RowCount();
    if ($ret>0) {
        return("1");
    } else {
        return("0");
    }
}

$cadastro  = cadd_user($con,$valores);