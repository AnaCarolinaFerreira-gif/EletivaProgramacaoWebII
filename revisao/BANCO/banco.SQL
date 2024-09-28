CREATE TABLE funcionarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    valor_hora DECIMAL(10,2)
);

CREATE TABLE registros_ponto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    funcionario_id INT,
    data DATE,
    hora_entrada TIME,
    hora_saida TIME,
    FOREIGN KEY (funcionario_id) REFERENCES funcionarios(id)
);

CREATE TABLE desempenho (
    id INT AUTO_INCREMENT PRIMARY KEY,
    funcionario_id INT,
    mes INT,
    ano INT,
    nota_desempenho INT,
    FOREIGN KEY (funcionario_id) REFERENCES funcionarios(id)
);

CREATE TABLE lucros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mes INT,
    ano INT,
    valor DECIMAL(10,2)
);

CREATE TABLE tarefas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    descricao TEXT,
    tempo_estimado INT,
    complexidade INT,
    habilidades_necessarias TEXT
);

CREATE TABLE funcionarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    habilidades TEXT
);

CREATE TABLE alocacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tarefa_id INT,
    funcionario_id INT,
    data_alocacao DATE,
    FOREIGN KEY (tarefa_id) REFERENCES tarefas(id),
    FOREIGN KEY (funcionario_id) REFERENCES funcionarios(id)
);

ALTER TABLE funcionarios 
ADD COLUMN data_admissao DATE;

CREATE TABLE projetos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    descricao TEXT
);

CREATE TABLE tarefas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    projeto_id INT,
    nome VARCHAR(100),
    horas_estimadas INT,
    FOREIGN KEY (projeto_id) REFERENCES projetos(id)
);

CREATE TABLE funcionarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    valor_hora DECIMAL(10,2)
);

CREATE TABLE custos_adicionais (
    id INT AUTO_INCREMENT PRIMARY KEY,
    projeto_id INT,
    descricao VARCHAR(100),
    valor DECIMAL(10,2),
    FOREIGN KEY (projeto_id) REFERENCES projetos(id)
);

CREATE TABLE projetos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    data_inicio DATE,
    data_fim DATE
);

CREATE TABLE tarefas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    projeto_id INT,
    nome VARCHAR(100),
    prazo DATE,
    status ENUM('pendente', 'em andamento', 'concluída'),
    FOREIGN KEY (projeto_id) REFERENCES projetos(id)
);

CREATE TABLE funcionarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    produtividade INT
);

CREATE TABLE alocacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tarefa_id INT,
    funcionario_id INT,
    horas_trabalhadas INT,
    FOREIGN KEY (tarefa_id) REFERENCES tarefas(id),
    FOREIGN KEY (funcionario_id) REFERENCES funcionarios(id)
);
