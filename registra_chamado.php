<?php

session_start();

//montagem do texto
$titulo = str_replace(';', '-', $_POST['titulo']);
$categoria = str_replace(';', '-', $_POST['categoria']);
$descrição = str_replace(';', '-', $_POST['descrição']);
$email = str_replace(';', '-', $_SESSION['email']);

echo $email;

$dados_chamado = $_SESSION['id'] . ';' . $titulo . ';' . $categoria . ';' . $descrição . ';' . $email . PHP_EOL;

//abre o arquivo
$arquivo = fopen('../../../../appHelpDesk/arquivo.hd', 'a');

//escreve no arquivo // PHP_EOL faz a quebra de linha 
fwrite($arquivo, $dados_chamado);

//fecha o arquivo
fclose($arquivo);

header('Location: abrir_chamado.php')

?>