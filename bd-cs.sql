CREATE DATABASE IF NOT EXISTS  DB_CS;
USE DB_CS;
CREATE TABLE IF NOT EXISTS ARTISTA(
COD_ARTISTA INT NULL DEFAULT NULL,
NOME VARCHAR(100) NULL DEFAULT NULL,
SOBRENOME VARCHAR(100) NULL DEFAULT NULL,
USUARIO VARCHAR(100) NULL DEFAULT NULL,
NASCIMENTO DATE NULL DEFAULT NULL,
EMAIL VARCHAR(50) NULL DEFAULT NULL,
SENHA VARCHAR(100) NULL DEFAULT NULL,
GENERO VARCHAR(20) NULL DEFAULT NULL,
PRONOME VARCHAR(20) NULL DEFAULT NULL,
ESTADO VARCHAR(100) NULL DEFAULT NULL,
CIDADE VARCHAR(100) NULL DEFAULT NULL,
BAIRRO VARCHAR(100) NULL DEFAULT NULL,
TIPOARTE VARCHAR(100) NULL DEFAULT NULL,
INSTAGRAM VARCHAR(100) NULL DEFAULT NULL,
FACEBOOK VARCHAR(100) NULL DEFAULT NULL,
PINTEREST VARCHAR(100) NULL DEFAULT NULL,
TIKTOK VARCHAR(100) NULL DEFAULT NULL,
X VARCHAR(100) NULL DEFAULT NULL,
YOUTUBE VARCHAR(100) NULL DEFAULT NULL,
 PRIMARY KEY (`COD_ARTISTA`))
