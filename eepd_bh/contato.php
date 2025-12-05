<?php
session_start();
require_once 'config/database.php';

// Lógica de envio do formulário, se for implementada
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mensagem_sucesso = "Mensagem enviada com sucesso! Em breve entraremos em contato.";
    // Aqui seria a lógica para enviar o email ou salvar no banco
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EEPD-BH - Contato</title>
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
                    <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="professores.php">Professores</a></li>
                    <li class="nav-item"><a class="nav-link" href="alunos.php">Alunos</a></li>
                    <li class="nav-item"><a class="nav-link active" href="contato.php">Contato</a></li>
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
            <h2 class="text-center mb-5">📞 Fale Conosco</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h3>Envie uma Mensagem</h3>
                    <?php if(isset($mensagem_sucesso)): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $mensagem_sucesso; ?>
                        </div>
                    <?php endif; ?>
                    
                    <form action="contato.php" method="POST">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="assunto" class="form-label">Assunto</label>
                            <input type="text" class="form-control" id="assunto" name="assunto" required>
                        </div>
                        <div class="mb-3">
                            <label for="mensagem" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="mensagem" name="mensagem" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                    </form>
                </div>
                <div class="col-md-6 mb-4">
                    <h3>Informações de Contato</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2"><strong>Endereço:</strong> Endereço: Rua Carlos Tomoyose, Nº 2000 - Belo Horizonte - MG</li>
                        <li class="mb-2"><strong>Telefone:</strong>  (31) 3486-1515 e (31) 99957-2716</li>
                        <li class="mb-2"><strong>E-mail:</strong> escola.302@educacao.mg.gov.br.</li>
                        <li class="mb-2"><strong>Horário de Funcionamento:</strong> Segunda a Sexta, 07:00h às 22:00h</li>
                    </ul>
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