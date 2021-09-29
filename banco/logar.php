<?php
//utilizar objeto para realizar login...
session_start();
include('../../conexao_ln.php');
$usuario = $_POST['usuario'];
$usuariofilter = filter_var($usuario, FILTER_SANITIZE_STRING);
$senhat = base64_encode($_POST['senha']);

class usuario
{
    private $retornos;
    public function __construct($usuariofilter, $senha, $con)
    {
        $queryuser = "call logar(:usuario, :senha)";
        $prepare = $con->prepare($queryuser);
        $prepare->bindParam(':usuario', $usuariofilter, PDO::PARAM_STR);
        $prepare->bindParam(':senha', $senha, PDO::PARAM_STR);
        $prepare->execute();
        $ret = $prepare->RowCount();

        if ($ret>0) {
            $user = $prepare->fetch();
            $_SESSION['id'] = $user['id'];
            $_SESSION['pessoa'] = $user['nome'];
            $_SESSION['nivel'] = $user['nivel'];
            $_SESSION['tipo'] = $user['tipo'];
            $_SESSION['usuario'] = $user['usuario'];
            echo $this->retornos = "true";
        } else {
            echo $this->retornos = "false";
        }
        $prepare->closeCursor();
    }
}
$usuario = new usuario($usuariofilter, $senhat, $con);