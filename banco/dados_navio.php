<?php
include('../../conexao_ln.php');


     function busca_navio($busca, $con)
     {
         $query = "call consulta_navio(:navio)";
         $prepare = $con->prepare($query);
         $prepare->bindParam(':navio', $busca, PDO::PARAM_STR);
         $prepare->execute();
         $ret = $prepare->RowCount();

         if ($ret>0) {
             while ($resultado = $prepare->fetch(PDO::FETCH_ASSOC)) {
                 $navio[] = $resultado;
             }
             $prepare->closeCursor();
             return json_encode($navio);
         }
     }
$naviopost = $_GET['navio'];
$busca = filter_var($naviopost, FILTER_SANITIZE_STRING);
if (isset($_GET['navio'])) {
    echo busca_navio($busca, $con);
}
