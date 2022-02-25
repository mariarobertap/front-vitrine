<?php
//print_r ($_POST);
$nome = trim($_POST['nome']) ?? 0;
$dataNascimento = trim($_POST['dataNascimento']) ?? 0;
$genero = trim($_POST['genero']) ?? 0;
$estadoCivil = trim($_POST['estadoCivil']) ?? 0;
$mensagem = trim($_POST['mensagem']) ?? 0;
$email = trim($_POST['email']) ?? 0;


if (!empty($dataNascimento)) {
    $data = explode("-", $dataNascimento);

    $ano = $data[0];
    $mes = $data[1];
    $dia = $data[2];

    $dataNascimento = "{$dia}/{$mes}/{$ano}";
}

if (empty($nome)) {
    echo "<script>alert('Preencha o nome'); history.back(); </script>";
    exit;
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Preencha um email valido'); history.back(); </script>";
    exit;
}
echo "Nome: {$nome} <br>";
echo "Data de nascimento: {$dataNascimento} <br>";
echo "Genero: {$genero} <br>";
echo "Estado Civil: {$estadoCivil} <br>";
echo "Mensagem: {$mensagem} <br>";
echo "Email: {$email} <br>";
