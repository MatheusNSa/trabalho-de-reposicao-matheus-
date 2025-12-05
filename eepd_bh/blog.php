<?php
session_start();
require_once 'config/database.php';
// Lógica do Blog: Buscar posts, se houver
// $stmt = $pdo->query("SELECT * FROM posts ORDER BY data DESC LIMIT 5");
// $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EEPD-BH - Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">EEPD-BH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Escola</a></li>
                    <li class="nav-item"><a class="nav-link" href="cursos.php">Cursos</a></li>
                    <li class="nav-item"><a class="nav-link active" href="blog.php">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="professores.php">Professores</a></li>
                    <li class="nav-item"><a class="nav-link" href="alunos.php">Alunos</a></li>
                    <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
                    <?php if(isset($_SESSION['usuario'])): ?>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Sair</a></li>
                    <?php else: ?>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="cadastro.php">Cadastro</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">💡 Notícias e Eventos da EEPD-BH</h2>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <article class="mb-4 p-4 border rounded shadow-sm">
                        <h3>Inscrições Abertas para o Técnico em Desenvolvimento de Sistemas</h3>
                        <p class="text-muted">Publicado em 03 de Dezembro de 2025</p>
                        <p>O curso mais procurado da EEPD-BH está com vagas limitadas para o próximo semestre. Aprenda a programar em PHP, JavaScript e MySQL com professores especializados. Não perca a chance!</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Leia Mais</a>
                    </article>

                    <article class="mb-4 p-4 border rounded shadow-sm">
                        <h3>Feira de Ciências 2025: Destaques em Energias Renováveis</h3>
                        <p class="text-muted">Publicado em 20 de Novembro de 2025</p>
                        <p>A Feira de Ciências deste ano bateu recordes de inovação, com projetos de alunos que buscam soluções sustentáveis para a região metropolitana. Veja os vencedores e como foi o evento.</p>
                        <a href="#" class="btn btn-sm btn-outline-primary">Leia Mais</a>
                    </article>
                    
                    <?php 
                    /*
                    if (!empty($posts)) {
                        foreach ($posts as $post) {
                            echo '<article class="mb-4 p-4 border rounded shadow-sm">';
                            echo '<h3>' . htmlspecialchars($post['titulo']) . '</h3>';
                            echo '<p class="text-muted">Publicado em ' . date('d/m/Y', strtotime($post['data'])) . '</p>';
                            echo '<p>' . substr(htmlspecialchars($post['conteudo']), 0, 150) . '...</p>';
                            echo '<a href="post.php?id=' . $post['id'] . '" class="btn btn-sm btn-outline-primary">Leia Mais</a>';
                            echo '</article>';
                        }
                    }
                    */
                    ?>

                    <div class="text-center mt-5">
                        <a href="#" class="btn btn-primary">Carregar Mais Notícias</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Escola Estadual Presidente Dutra - BH</h5>
                    <p class="mb-1">CNPJ:18.715.599/0001-05</p>
                    <p class="mb-1">SRE - METROPOLITANA - A</p>
                    <p class="mb-1">CEP: 31.035-536</p>
                    <p class="mb-1">Endereço: Rua Carlos Tomoyose, Nº 2000</p>
                    <p>Belo Horizonte - Minas Gerais - Brasil</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">Desenvolvido pelo Desenvolvimento de Sistemas</p>
                    <p>&copy; Todos os direitos reservados a EEPD</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>