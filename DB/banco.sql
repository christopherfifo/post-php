CREATE DATABASE cadastro_usuario;

use cadastro_usuario;

CREATE TABLE usuarios (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    sobrenome VARCHAR(100),
    cpf VARCHAR(11),
    rg VARCHAR(10),
    nsacimento DATE,
    telefone VARCHAR(15),
    contato VARCHAR(15),
    endereco VARCHAR(255),
    cidade VARCHAR(100),
    estado VARCHAR(100),
    cep VARCHAR(10),
    url_perfil VARCHAR(255)
);

select * from usuarios;