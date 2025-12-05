-- PARTE 2: USO, CRIAÇÃO DE TABELAS E INSERÇÃO DE DADOS
-- Execute este bloco APÓS a criação do banco de dados na PARTE 1.

-- Este comando garante que as tabelas sejam criadas dentro do banco 'eepd_bh'
USE eepd_bh;

-- 1. Tabela para o Carrossel (Usada em index.php)
CREATE TABLE IF NOT EXISTS imagens_carrossel (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100) NOT NULL,
    descricao VARCHAR(255),
    caminho VARCHAR(255) NOT NULL
);

-- 2. Tabela de Usuários (Usada em login.php e cadastro.php)
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    tipo ENUM('aluno', 'professor', 'admin') DEFAULT 'aluno',
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 3. Tabela de Cursos (Usada em cursos.php)
CREATE TABLE IF NOT EXISTS cursos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    duracao_meses INT
);

-- 4. Insere os cursos fixos solicitados
INSERT INTO cursos (nome) VALUES
('Desenvolvimento De Sistemas'),
('Informatica'),
('Logistica'),
('Fabricação Mecanica'),
('Energia Renováveis'),
('Segurança do trabalho'),
('Propedeutica'),
('Eletronica');


-- 5. Insere 8 imagens de exemplo para o carrossel
INSERT INTO imagens_carrossel (titulo, descricao, caminho) VALUES
('Novos Laboratórios', 'Tecnologia de ponta para sua formação.', 'img/carousel_1.jpg'),
('Aula Prática em Campo', 'Alunos de Logística visitam centro de distribuição.', 'img/carousel_2.jpg'),
('Projetos de Robótica', 'Destaque para o curso de Eletrônica.', 'img/carousel_3.jpg'),
('Formatura 2024', 'Celebração da nova turma de técnicos.', 'img/carousel_4.jpg'),
('Energias Limpas', 'Módulo de Energias Renováveis em ação.', 'img/carousel_5.jpg'),
('Segurança em Primeiro Lugar', 'Treinamento prático de Segurança do Trabalho.', 'img/carousel_6.jpg'),
('Hackathon EEPD', 'Maratona de programação do curso de Sistemas.', 'img/carousel_7.jpg'),
('Visita à Indústria', 'Alunos de Fabricação Mecânica na linha de produção.', 'img/carousel_8.jpg');