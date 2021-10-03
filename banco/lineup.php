<?php
include_once('../../conexao_ln.php');
function retorna($con, $tipo)
{
    switch ($tipo) {
case '1':
    $queryln = "call lineup()";
    $prepara = $con->prepare($queryln);
    $prepara->execute();
    $contar = $prepara->RowCount();
    if ($contar>0) {
        while ($linha = $prepara->fetch(PDO::FETCH_ASSOC)) {
            $linhas[] = $linha;
        }
        $prepara->closeCursor();
        return json_encode($linhas);
    }
break;
case '2':
    $queryln = "call navios()";
    $prepara = $con->prepare($queryln);
    $prepara->execute();
    $contar = $prepara->RowCount();
    if ($contar>0) {
        while ($linha = $prepara->fetch(PDO::FETCH_ASSOC)) {
            $linhas[] = $linha;
        }
        $prepara->closeCursor();
        return json_encode($linhas);
    }
break;
case '3':
    $queryln = "call atracacoes()";
    $prepara = $con->prepare($queryln);
    $prepara->execute();
    $contar = $prepara->RowCount();
    if ($contar>0) {
        while ($linha = $prepara->fetch(PDO::FETCH_ASSOC)) {
            $linhas[] = $linha;
        }
        $prepara->closeCursor();
        return json_encode($linhas);
    }
break;
case '4':
    $queryln = "call usuarios()";
    $prepara = $con->prepare($queryln);
    $prepara->execute();
    $contar = $prepara->RowCount();
    if ($contar>0) {
        while ($linha = $prepara->fetch(PDO::FETCH_ASSOC)) {
            $linhas[] = $linha;
        }
        $prepara->closeCursor();
        return json_encode($linhas);
    }
break;
    }
}
echo retorna($con, $_GET['tipo']);
