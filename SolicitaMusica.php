<?php
include_once ("BancoConexao.php");


$usuario = $_POST['nome'];
$email = $_POST['email'];
$musica = $_POST['musica'];


$result_usuario = "INSERT INTO musicas_solicitadas(nome, email, musica, Data) VALUES ('$usuario','$email','$musica',now())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if (mysqli_affected_rows($conn) != 0) {

    echo $Concluido = 'Concluido com Sucesso';
   header('Location: index.html');



} else {

    echo $Concluido = 'Erro ao Concluir';
   header('Location: index.html');

}




?>