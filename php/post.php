<?php
require 'conexao.php';

$id = (int) $_GET['id']; // pega o id da URL, forçando número (evita SQL injection básica)

$stmt = $conexao->prepare("SELECT * FROM posts WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$post = $stmt->get_result()->fetch_assoc();

if (!$post) {
    die("Post não encontrado.");
}
?>

<h1><?= htmlspecialchars($post['titulo']) ?></h1>
<img src="uploads/<?= htmlspecialchars($post['imagem']) ?>">
<div class="conteudo"><?= $post['conteudo'] ?></div>