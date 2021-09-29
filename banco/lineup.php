<?php
include_once('../../conexao_ln.php');
function retorna($con){
    $queryln = "call lineup()";
    $prepara = $con->prepare($queryln);
    $prepara->execute();
    $contar = $prepara->RowCount();

    if($contar>0){
        while($linha = $prepara->fetch(PDO::FETCH_ASSOC)){
            $linhas[] = $linha;
        }
        $prepara->closeCursor();
        return json_encode($linhas);
    }
}
echo retorna($con);
?>