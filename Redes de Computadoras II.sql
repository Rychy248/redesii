--CODE FOR LOCALHOST
-- CREATE DATABASE redesii;
--

-- https://cursoprogramador.wordpress.com/2014/01/16/tabla-para-almacenar-usuario-y-contrasena-de-aplicacion/
CREATE TABLE usuarios_login(
    usuario VARCHAR(30) PRIMARY KEY,
    contrasena VARCHAR(40),
    metodo VARCHAR(5),
    estado BOOLEAN DEFAULT 1
);

/**
INSERT INTO `usuarios_login` (`usuario`, `contrasena`, `metodo`,estado) 
  VALUES ('fulanito', MD5('fulanito1'), 'md5',1);

INSERT INTO `usuarios_login` (`usuario`, `contrasena`, `metodo`,estado) 
  VALUES ('periquito', SHA1('periquito1'), 'sha1',1);

INSERT INTO `usuarios_login` (`usuario`, `contrasena`, `metodo`,estado)
  VALUES ('profesor', 'contraprofe', 'texto',1);

**/
/*
SELECT *
FROM usuarios_login
WHERE 
    usuario='fulanito' AND
    contrasena=MD5('fulanito1')
;
*/