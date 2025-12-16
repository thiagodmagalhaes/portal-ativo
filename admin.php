<?php
$host = 'localhost';
$usuario = 'root_new';
$senha = 'Dev@123456';
$banco = 'formulario_db';

$conn = new mysqli($host, $usuario, $senha, $banco);
if ($conn->connect_error) {
    die('Erro de conexão: ' . $conn->connect_error);
}

// Deletar solicitação se solicitado
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM solicitacoes WHERE id = $id");
    header("Location: admin.php");
    exit();
}

// Buscar todas as solicitações
$result = $conn->query("SELECT * FROM solicitacoes ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Admin - Solicitações</title>
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>
    <main>
        <h1>Solicitações Cadastradas</h1>
        <?php if ($result->num_rows > 0): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Solicitação</th>
                <th>Ações</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><?= htmlspecialchars($row['nome']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= htmlspecialchars($row['telefone']) ?></td>
                <td><?= nl2br(htmlspecialchars($row['solicitacao'])) ?></td>
                <td>
                    <a href="?delete=<?= $row['id'] ?>" class="delete-btn" onclick="return confirm('Tem certeza que deseja deletar esta solicitação?');">Deletar</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
        <?php else: ?>
            <p>Nenhuma solicitação cadastrada.</p>
        <?php endif; ?>
    </main>
</body>
</html>
<?php
$conn->close();
?>