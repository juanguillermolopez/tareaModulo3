CREATE TABLE usuarios (
  nombre_usuario VARCHAR(50) PRIMARY KEY,
  contraseña VARCHAR(80)
);

CREATE TABLE noticias (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  titulo TEXT,
  imagen TEXT,
  contenido TEXT
);

INSERT INTO noticias (titulo, imagen, contenido) VALUES 
  ('Noticia 1', 'imagen1.jpg', 'Contenido de la noticia 1'),
  ('Noticia 2', 'imagen2.jpg', 'Contenido de la noticia 2'),
  ('Noticia 3', 'imagen3.jpg', 'Contenido de la noticia 3'),
  ('Noticia 4', 'imagen4.jpg', 'Contenido de la noticia 4'),
  ('Noticia 5', 'imagen5.jpg', 'Contenido de la noticia 5'),
  ('Noticia 6', 'imagen6.jpg', 'Contenido de la noticia 6');

select * from noticias;



CREATE TABLE info_pagina (
	imagen VARCHAR(255),
	titulo VARCHAR(255),
	contenido TEXT
);

select * from info_pagina;




