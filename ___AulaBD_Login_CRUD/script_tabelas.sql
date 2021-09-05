-- Criar BD: empresax

CREATE TABLE IF NOT EXISTS tblusuario (
     id_tblusuario INT(111) NOT NULL AUTO_INCREMENT PRIMARY KEY,
     nome_tblusuario VARCHAR(150) NOT NULL ,
     email_tblusuario VARCHAR(150) NOT NULL ,
     senha_tblusuario LONGTEXT NOT NULL ,
     UNIQUE (email_tblusuario)
) ENGINE= InnoDB;
