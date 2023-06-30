create database Pap_Login;
use Pap_Login;

create table pap_registar(
pap_id int auto_increment primary key,
pap_tipo varchar(255),
pap_nome varchar(255),
pap_email varchar(255),
pap_passe varchar(255)
);

create table noticias(
n_id int auto_increment primary key,
n_titulo varchar(255),
n_descricao varchar(255),
n_data date,
n_imagem varchar(255)
);

create table recrutamento(
r_id int auto_increment primary key,
r_nome varchar (255),
r_genero varchar (255),
r_data date,
r_morada varchar (255),
r_postal int,
r_telefone int,
r_email varchar (255),
r_carta varchar (255)
);

create table medalhas(
m_imagem varchar (255)
);

