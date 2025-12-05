<?php
session_start();
require_once 'config/database.php';

$mensagem = '';
$sucesso = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirma_senha = $_POST['confirma_senha'];

    if ($senha !== $confirma_senha) {
        $mensagem = 'As senhas não coincidem.';
    } else {
        // Criptografar a senha antes de salvar
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
        
        try {
            // Verifica se o email já existe
            $stmt_check = $pdo->prepare("SELECT COUNT(*) FROM usuarios WHERE email = ?");
            $stmt_check->execute([$email]);
            if ($stmt_check->fetchColumn() > 0) {
                $mensagem = 'Este e-mail já está cadastrado.';
            } else {
                // Insere o novo usuário (tabela 'usuarios' - precisa ser criada)
                $stmt_insert = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
                $stmt_insert->execute([$nome, $email, $senha_hash]);
                
                $mensagem = 'Cadastro realizado com sucesso! Você já pode fazer login.';
                $sucesso = true;
            }
        } catch (PDOException $e) {
            $mensagem = 'Erro ao cadastrar: ' . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EEPD-BH - Cadastro</title>
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
                    <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link active" href="cadastro.php">Cadastro</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-header bg-primary text-white text-center">
                            <h3>📝 Cadastre-se</h3>
                        </div>
                        <div class="card-body p-4">
                            <?php if ($mensagem): ?>
                                <div class="alert <?php echo $sucesso ? 'alert-success' : 'alert-danger'; ?>">
                                    <?php echo $mensagem; ?>
                                </div>
                            <?php endif; ?>

                            <form action="cadastro.php" method="POST">
                                <div class="mb-3">
                                    <label for="nome" class="form-label">Nome Completo</label>
                                    <input type="text" class="form-control" id="nome" name="nome" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="senha" class="form-label">Senha</label>
                                    <input type="password" class="form-control" id="senha" name="senha" required>
                                </div>
                                <div class="mb-3">
                                    <label for="confirma_senha" class="form-label">Confirmar Senha</label>
                                    <input type="password" class="form-control" id="confirma_senha" name="confirma_senha" required>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-success">Finalizar Cadastro</button>
                                </div>
                            </form>
                            <hr>
                            <p class="text-center mt-3">Já possui conta? <a href="login.php">Faça login aqui</a>.</p>
                        </div>
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