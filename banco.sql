DROP DATABASE pji;
CREATE DATABASE pji;
USE pji;



CREATE TABLE tblAlunos(
idAlunos INT AUTO_INCREMENT,
nomeAluno VARCHAR(60),

email VARCHAR(60),
prontuario VARCHAR(7),
senha VARCHAR(20),
PRIMARY KEY(idAlunos)
) engine = innodb;

CREATE TABLE tblObras(
idObra INT AUTO_INCREMENT,
descricao VARCHAR(60),
nomeObra VARCHAR(60),
autorObra VARCHAR(60),
editoraObra VARCHAR(60),

PRIMARY KEY (idObra)
) engine = innodb;

CREATE TABLE tblEmprestimos(
idEmprestimo INT AUTO_INCREMENT,
idObra INT,
dono VARCHAR(60),
cliente VARCHAR(60),

PRIMARY KEY(idEmprestimo),
FOREIGN KEY (idObra) REFERENCES tblObras (idObra)


) engine = innodb;

