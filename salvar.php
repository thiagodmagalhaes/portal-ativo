<?php
$host = 'localhost';
$usuario = 'root_new';
$senha = 'Dev@123456';
$banco = 'formulario_db';

$conn = new mysqli($host, $usuario, $senha, $banco);
if ($conn->connect_error) {
    die('Erro de conexão: ' . $conn->connect_error);
}

$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$solicitacao = $_POST['solicitacao'] ?? '';

$stmt = $conn->prepare('INSERT INTO solicitacoes (nome, email, telefone, solicitacao) VALUES (?, ?, ?, ?)');
$stmt->bind_param('ssss', $nome, $email, $telefone, $solicitacao);

if ($stmt->execute()) {
    header('Location: obrigado.html');
    exit();
} else {
    echo 'Erro ao enviar solicitação.';
}

$stmt->close();
$conn->close();
?>
