<?php
session_start();
require_once 'config/database.php';

// Buscar imagens aleatórias para o carrossel
$stmt = $pdo->query("SELECT * FROM imagens_carrossel ORDER BY RAND() LIMIT 8");
$imagens = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EEPD-BH - Escola Estadual Presidente Dutra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">EEPD-BH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Escola</a></li>
                    <li class="nav-item"><a class="nav-link" href="cursos.php">Cursos</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
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

    <!-- Carrossel -->
    <div id="carouselEEPD" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php for($i = 0; $i < count($imagens); $i++): ?>
                <button type="button" data-bs-target="#carouselEEPD" data-bs-slide-to="<?php echo $i; ?>" 
                    <?php echo $i === 0 ? 'class="active"' : ''; ?>></button>
            <?php endfor; ?>
        </div>
        <div class="carousel-inner">
            <?php foreach($imagens as $index => $img): ?>
                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                    <img src="<?php echo $img['caminho']; ?>" class="d-block w-100" alt="<?php echo $img['descricao']; ?>">
                    <div class="carousel-caption">
                        <h3><?php echo $img['titulo']; ?></h3>
                        <p><?php echo $img['descricao']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselEEPD" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselEEPD" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- História da Escola -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Nossa História</h2>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <p class="text-justify">
                        A Escola Estadual Presidente Dutra (EEPD-BH) foi fundada em 1965, com o objetivo de oferecer educação 
                        profissional de qualidade para os jovens de Belo Horizonte e região metropolitana. Ao longo de mais de 
                        50 anos de história, a instituição consolidou-se como referência em formação técnica no estado de Minas Gerais.
                    </p>
                    <p class="text-justify">
                        Localizada no coração de Belo Horizonte, a EEPD nasceu da necessidade de formar profissionais capacitados 
                        para atender às demandas do mercado de trabalho em constante evolução. Iniciando suas atividades com cursos 
                        voltados para a área industrial, a escola expandiu gradualmente seu portfólio, incorporando tecnologias 
                        emergentes e adaptando-se às transformações do cenário educacional e profissional.
                    </p>
                    <p class="text-justify">
                        Hoje, a EEPD-BH oferece cursos técnicos integrados ao ensino médio e subsequentes nas áreas de Desenvolvimento 
                        de Sistemas, Informática, Logística, Fabricação Mecânica, Energias Renováveis, Segurança do Trabalho, 
                        Propedêutica e Eletrônica. Com infraestrutura moderna, laboratórios equipados e corpo docente qualificado, 
                        a escola prepara milhares de estudantes anualmente para os desafios do mercado de trabalho e da vida acadêmica.
                    </p>
                    <p class="text-justify">
                        Nossa missão é promover uma educação transformadora, que alie conhecimento técnico, pensamento crítico e 
                        valores éticos, formando cidadãos conscientes e profissionais competentes para contribuir com o desenvolvimento 
                        social e econômico do país.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Destaques -->
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Destaques</h2>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title">Infraestrutura Moderna</h5>
                            <p class="card-text">Laboratórios equipados com tecnologia de ponta para formação prática.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title">Professores Qualificados</h5>
                            <p class="card-text">Corpo docente especializado com experiência no mercado de trabalho.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title">Parceria com Empresas</h5>
                            <p class="card-text">Convênios que facilitam estágios e inserção no mercado de trabalho.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
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