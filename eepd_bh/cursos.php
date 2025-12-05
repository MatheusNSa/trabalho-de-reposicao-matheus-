<?php
session_start();
require_once 'config/database.php';

// Lista DETALHADA dos cursos
$cursos = [
    [
        "nome" => "Desenvolvimento de Sistemas", 
        "icone" => "💻",
        "descricao" => "O profissional atua na **programação de softwares** para web, mobile e desktop, gerência de bancos de dados e aplicação de padrões de usabilidade e segurança. Foco em lógica de programação e novas tecnologias.",
        "foco" => "Programação Web, SQL, Lógica e Desenvolvimento Mobile."
    ],
    [
        "nome" => "Informática", 
        "icone" => "🖥️",
        "descricao" => "Oferece a base para atuar em TI, com foco em **manutenção de hardware, redes de computadores**, instalação e configuração de sistemas operacionais e softwares. É a porta de entrada para a área tecnológica.",
        "foco" => "Redes de Computadores, Suporte Técnico, Manutenção e Sistemas Operacionais."
    ],
    [
        "nome" => "Logística", 
        "icone" => "🚚",
        "descricao" => "Responsável pelo **planejamento, execução e controle do transporte, armazenamento e distribuição** de materiais. Otimiza processos para reduzir custos e garantir a entrega eficiente de produtos e serviços.",
        "foco" => "Gestão de Estoque, Transporte, Cadeia de Suprimentos (Supply Chain) e Otimização de Processos."
    ],
    [
        "nome" => "Fabricação Mecânica", 
        "icone" => "🔩",
        "descricao" => "Envolve a **criação e produção de peças e ferramentas** utilizando máquinas convencionais e CNC. O aluno aprende sobre desenho técnico, usinagem, soldagem e controle de qualidade industrial.",
        "foco" => "Usinagem, Máquinas CNC, Desenho Técnico (CAD) e Processos de Produção Industrial."
    ],
    [
        "nome" => "Energias Renováveis", 
        "icone" => "☀️",
        "descricao" => "Focado na **instalação, manutenção e projeto de sistemas de geração de energia limpa**, como painéis solares (fotovoltaicos) e turbinas eólicas. Essencial para o futuro sustentável da indústria.",
        "foco" => "Sistemas Fotovoltaicos, Energia Eólica, Eficiência Energética e Sustentabilidade."
    ],
    [
        "nome" => "Segurança do Trabalho", 
        "icone" => "⛑️",
        "descricao" => "Identifica e avalia **riscos ambientais e ocupacionais** (físicos, químicos e biológicos) no ambiente de trabalho. Atua na elaboração e fiscalização de normas para prevenir acidentes e promover a saúde do trabalhador.",
        "foco" => "Normas Regulamentadoras (NRs), Prevenção de Acidentes e Gestão de Riscos Ocupacionais."
    ],
    [
        "nome" => "Propedêutica", 
        "icone" => "📚",
        "descricao" => "Oferece a **formação do Ensino Médio integrada ao curso técnico**, garantindo uma base sólida em Ciências, Linguagens e Humanidades. Prepara o aluno tanto para o mercado de trabalho quanto para o vestibular.",
        "foco" => "Base Nacional Comum Curricular (BNCC), Ensino Médio Integrado e Preparação para o ENEM/Vestibular."
    ],
    [
        "nome" => "Eletrônica", 
        "icone" => "💡",
        "descricao" => "Desenvolve, instala e faz a **manutenção de circuitos e sistemas eletrônicos**, tanto analógicos quanto digitais. Inclui conhecimentos em microcontroladores, automação e telecomunicações.",
        "foco" => "Circuitos Elétricos, Microcontroladores (Arduíno/PIC), Eletrônica Digital e Automação."
    ]
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EEPD-BH - Cursos Técnicos</title>
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
                    <li class="nav-item"><a class="nav-link active" href="cursos.php">Cursos</a></li>
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
    
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 text-primary">Nossos Cursos Técnicos</h2>
            <p class="text-center lead">Conheça o foco de cada curso e o futuro profissional que o espera.</p>
            <div class="row mt-4">
                <?php foreach($cursos as $curso): ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 shadow-lg border-primary">
                            <div class="card-header text-center bg-primary text-white">
                                <h5 class="card-title mb-0"><?php echo $curso['icone']; ?> <?php echo $curso['nome']; ?></h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text text-muted"><?php echo $curso['descricao']; ?></p>
                                <hr>
                                <h6>Foco Principal:</h6>
                                <p class="small text-dark fw-bold"><?php echo $curso['foco']; ?></p>
                            </div>
                            <div class="card-footer text-center">
                                <a href="contato.php" class="btn btn-primary btn-block">Saiba Mais e Inscreva-se</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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