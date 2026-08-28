<?php
require 'conexao.php'; // seu arquivo de conexão com o MySQL

$resultado = $conexao->query("SELECT id, titulo, imagem, data_publicacao FROM posts ORDER BY data_publicacao DESC");
?>

<div class="lista-posts">
  <?php while ($post = $resultado->fetch_assoc()): ?>
    <div class="card-post">
      <img src="uploads/<?= htmlspecialchars($post['imagem']) ?>">
      <h3><?= htmlspecialchars($post['titulo']) ?></h3>
      <a href="post.php?id=<?= $post['id'] ?>">Ler mais</a>
    </div>
  <?php endwhile; ?>
</div>