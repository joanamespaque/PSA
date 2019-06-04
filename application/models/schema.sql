CREATE TABLE aluno (
	id serial,
	nome varchar(150) NOT NULL, 
	sobrenome varchar(150) NOT NULL,
	senha varchar(20) NOT NULL,
	username varchar(150) NOT NULL UNIQUE,

	CONSTRAINT "alunoPK" PRIMARY KEY (id)
); 

-- SELECT * FROM aluno

CREATE TABLE professor (
	id serial,
	nome varchar(150) NOT NULL, 
	sobrenome varchar(150) NOT NULL,
	username varchar(150) NOT NULL UNIQUE,
	senha varchar(20) NOT NULL,
	email varchar(200) NOT NULL UNIQUE,

	CONSTRAINT "professorPK" PRIMARY KEY (id)
); 

-- SELECT * FROM professor

CREATE TABLE atividade (
	id serial, 
	idprofessor int NOT NULL,
	nome varchar(200) NOT NULL,

	CONSTRAINT "atividadePK" PRIMARY KEY (id),
	CONSTRAINT "atividadeprofessorFK" FOREIGN KEY (idprofessor)
		REFERENCES professor (id)
		ON DELETE CASCADE
		ON UPDATE CASCADE
);

-- SELECT * FROM atividade

CREATE TABLE turma (
	id serial,
	idprofessor int NOT NULL,
	nome varchar(200) NOT NULL,

	CONSTRAINT "turmaPK" PRIMARY KEY (id),
	CONSTRAINT "turmaprofessorFK" FOREIGN KEY (idprofessor)
		REFERENCES professor (id)
		ON DELETE CASCADE
		ON UPDATE CASCADE
);

-- SELECT * FROM turma

CREATE TABLE turmaatividade (
	idturma int NOT NULL,
	idatividade int NOT NULL,

	CONSTRAINT "turmaatividadePK" PRIMARY KEY (idturma, idatividade),
	CONSTRAINT "turmaatividadeturmaFK" FOREIGN KEY (idturma)
		REFERENCES turma(id)
		ON DELETE CASCADE
		ON UPDATE CASCADE,
	CONSTRAINT "turmaatividadeatividadeFK" FOREIGN KEY (idatividade)
		REFERENCES atividade(id)
		ON DELETE CASCADE
		ON UPDATE CASCADE
);	

-- SELECT * FROM turmaatividade

CREATE TABLE alunoatividade (
	idaluno int NOT NULL,
	idatividade int NOT NULL,

	CONSTRAINT "alunoatividadePK" PRIMARY KEY (idaluno, idatividade),
	CONSTRAINT "alunoatividadealunoFK" FOREIGN KEY (idaluno)
		REFERENCES aluno (id)
		ON DELETE SET NULL
		ON UPDATE CASCADE,
	CONSTRAINT "alunoatividadeatividadeFK" FOREIGN KEY (idatividade)
		REFERENCES atividade (id)
		ON DELETE CASCADE
		ON UPDATE CASCADE
);

-- SELECT * FROM alunoatividade

CREATE TABLE alunoturma (
	idaluno int NOT NULL,
	idturma int NOT NULL,

	CONSTRAINT "alunoturmaPK" PRIMARY KEY (idaluno, idturma),
	CONSTRAINT "alunoturmaalunoFK" FOREIGN KEY (idaluno)
		REFERENCES aluno (id)
		ON DELETE SET NULL 
		ON UPDATE CASCADE,
	CONSTRAINT "alunoturmaturmaFK" FOREIGN KEY (idturma)
		REFERENCES turma (id)
		ON DELETE SET NULL
		ON UPDATE CASCADE
);

-- SELECT * FROM alunoturma
