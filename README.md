Trabalho de Reposicao
Projeto EEPD-BH: Portal Institucional Web
Visão Geral do Projeto
Este projeto é um portal web para a Escola Estadual Presidente Dutra (EEPD-BH), desenvolvido como parte do trabalho de recomposição. O sistema foi construído com PHP Puro e MySQL para criar uma plataforma de comunicação e informação responsiva e dinâmica.

O objetivo é cumprir o wireframe fornecido, implementando as funcionalidades essenciais de um site escolar moderno.

 Tecnologias e Ferramentas
O projeto utiliza o seguinte stack tecnológico para desenvolvimento e operação:

Front-end & Estrutura
HTML5: Estrutura base das páginas.

Bootstrap 5.3: Framework CSS utilizado para garantir a responsividade e o design dos componentes (Navbar, Carrossel, Cards, etc.).

CSS Puro: Estilização customizada (arquivo css/style.css).

Back-end & Banco de Dados
PHP Puro: Linguagem de programação do lado do servidor.

MySQL / MariaDB: Sistema de gerenciamento de banco de dados (SGBD) para armazenamento de usuários, imagens e cursos.

XAMPP / Apache: Ambiente local de desenvolvimento e servidor web.

Ferramentas de Desenvolvimento
Visual Studio Code (VS Code): Editor de código.

Git: Sistema de controle de versão.

GitHub: Repositório remoto para hospedagem.

Nota de Implementação: As tecnologias React.js, Vue.js e Springboot listadas no wireframe não foram implementadas, pois a base do projeto é estritamente PHP Puro e Bootstrap.

 Módulos e Funcionalidades Implementadas
O projeto inclui todas as páginas e funcionalidades listadas no wireframe:

Módulo	Arquivo PHP	Descrição da Funcionalidade
Escola	index.php	Exibe a história, origem da escola e um carrossel dinâmico com 8 imagens randômicas buscadas do MySQL.
Cursos	cursos.php	Apresenta a listagem e os detalhes dos 8 cursos técnicos oferecidos.
Blog	blog.php	Página destinada a notícias e eventos (estrutura básica).
Contato	contato.php	Página para informações de contato e formulário.
Login/Cadastro	login.php, cadastro.php, logout.php	Módulos de autenticação de usuários e gerenciamento de sessão.
Áreas	professores.php, alunos.php	Páginas de listagem ou áreas restritas (estrutura básica).

Exportar para as Planilhas

⚙️ Instruções de Instalação Local
Para executar o projeto em seu ambiente local, siga as seguintes etapas:

1. Preparação do Servidor
Inicie os serviços Apache e MySQL no Painel de Controle do XAMPP.

Coloque a pasta do projeto (ex: eepd-bh) dentro do diretório C:\xampp\htdocs\.

Acesse o projeto pelo navegador utilizando a URL: http://localhost/eepd-bh/.

2. Configuração do Banco de Dados
Acesse o MySQL Workbench ou phpMyAdmin.

Crie o banco de dados com o nome exato: eepd_bh.

Execute o script SQL completo fornecido para criar as tabelas necessárias (imagens_carrossel, usuarios, cursos) e inserir os dados iniciais do carrossel.

Verifique a conexão no arquivo config/database.php para garantir que as credenciais de acesso ao MySQL (usuário, senha, nome do banco) estão corretas.

 Informações Institucionais (Footer)
As informações abaixo são exibidas de forma padronizada no rodapé de todas as páginas do portal:

Campo	Detalhe
Instituição	Escola Estadual Presidente Dutra - BH
CNPJ	18.715.599/0001-05
SRE	METROPOLITANA - A
CEP	31.035-536
Endereço Rua Carlos Tomoyose, Nº 2000, Belo Horizonte - Minas Gerais - Brasil
Desenvolvimento	Desenvolvido pelo Desenvolvimento de Sistemas
Direitos	© Todos os direitos reservados a EEPD
