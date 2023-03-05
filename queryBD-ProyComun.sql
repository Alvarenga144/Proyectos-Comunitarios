/*
	BASE DE DATOS DEL PROYECTO DE DESARROLLO DE APLICACIONES WEB
    PROYECTO FINAL: GESTION DE PROYECTOS COMUNITARIOS
    INTEGRANTES: Esteban, Flor, Ernesto y Grace
    VERSION DEL SCRIPT: 2.0
*/

CREATE DATABASE proyectosComunitarios;
USE proyectosComunitarios;

CREATE TABLE usuarios (
	id_Usuario int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre_User varchar(50) NOT NULL,
    fecha_Nac varchar(10) NOT NULL,
    correo varchar(50) NOT NULL,
    password_user varchar(50) UNIQUE NOT NULL  
);

CREATE TABLE tipoAcontecimiento (
	id_tipoAcont int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    acontecimiento varchar(10) NOT NULL
);

CREATE TABLE responsables (
	id_Responsable int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre_Responsable varchar(50) NOT NULL,
    fecha_nacimiento varchar(50) NOT NULL,
    correo_Responsable varchar(50) NOT NULL,
    password_respon varchar(50)  UNIQUE NOT NULL,
    cargo varchar(25) NOT NULL
);

CREATE TABLE departamentos (
	id_Departamento int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre_Departamento varchar(25) NOT NULL
);

CREATE TABLE municipios (
	id_Municipio int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre_Municipio varchar (50) NOT NULL,
    id_Departamento int NOT NULL,
    FOREIGN KEY (id_Departamento) REFERENCES departamentos (id_Departamento)
);

CREATE TABLE acontecimientos (
	id_Acontecimiento int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_TipoAcont int NOT NULL,
    nombre_Acont varchar(50) NOT NULL,
    fecha_Inicio varchar(10) NOT NULL,
    fecha_Fin varchar(10) NOT NULL,
    descripcion varchar(50) NOT NULL,
    cantidad_Beneficiados int NOT NULL,
    ubicacion int NOT NULL,
    empleado int NOT NULL,
    estado varchar(20) NOT NULL,
    FOREIGN KEY (id_TipoAcont) REFERENCES tipoAcontecimiento (id_tipoAcont),
    FOREIGN KEY (ubicacion) REFERENCES municipios (id_Municipio),
    FOREIGN KEY (empleado) REFERENCES responsables (id_Responsable)
);


/* Insercciones de datos en las tablas departamentos y municipios */

INSERT INTO departamentos(nombre_Departamento) VALUES 
('Ahuachapan'),
('Cabañas'),
('Chalatenango'),
('Cuscatlán'),
('La Libertad'),
('Morazán'),
('La Paz'),
('Santa Ana'),
('San Miguel'),
('San Salvador'),
('San Vicente'),
('Sonsonate'),
('La Unión'),
('Usulután');

INSERT INTO municipios(nombre_Municipio, id_Departamento) VALUES
/* AHUACHAPAN */
('Ahuachapán', 1),
('Apaneca', 1),
('Atiquizaya', 1),
('Concepción de ataco', 1),
('El Refugio',1),
('Guaymango',1),
('Jujutla',1),
('San Francisco Menéndez',1),
('San Lorenzo',1),
('San Pedro puxtla',1),
('Tacuba',1),
('Turín',1);

INSERT INTO municipios(nombre_Municipio, id_Departamento) VALUES
/* CABAÑAS */
('Sensuntepeque',2),
('Cinquera',2),
('Dolores',2),
('Guacotecti',2),
('Ilobasco',2),
('Jutiapa',2),
('San Isidro',2),
('Tejutepeque',2),
('Victoria',2);

INSERT INTO municipios(nombre_Municipio, id_Departamento) VALUES
/* CHALATENANGO */
('Chalatenango',3),
('Agua Caliente',3),
('Arcatao',3),
('Azacualpa',3),
('Cancasque',3),
('Citalá',3),
('Comalapa',3),
('Concepción Quezaltepeque',3),
('Dulce Nombre de María',3),
('El Carrizal',3),
('El Paraíso',3),
('La Laguna',3),
('La Palma',3),
('La Reina',3),
('Las Flores',3),
('Las Vueltas',3),
('Nombre de Jesús',3),
('Nueva Concepción',3),
('Nueva Trinidad',3),
('Ojos de Agua',3),
('Potonico',3),
('San Antonio de la Cruz',3),
('San Antonio Los Ranchos',3),
('San Fernando',3),
('San Francisco Lempa',3),
('San Francisco Morazán',3),
('San Ignacio',3),
('San Isidro Labrador',3),
('San Luis del Carmen',3),
('San Miguel de Mercedes',3),
('San Rafael',3),
('Santa Rita',3),
('Tejutla',3);

INSERT INTO municipios(nombre_Municipio, id_Departamento) VALUES
/* CUSCATLAN */
('Cojutepeque', 4),
('Candelaria', 4),
('El Carmen', 4),
('El Rosario', 4),
('Monte San Juan', 4),
('Oratorio de Concepción', 4),
('San Bartolomé Perulapía', 4),
('San Cristóbal', 4),
('San José Guayabal', 4),
('San Pedro Perulapán', 4),
('San Rafael Cedros', 4),
('San Ramón', 4),
('Santa Cruz Analquito', 4),
('Santa Cruz Michapa', 4),
('Suchitoto', 4),
('Tenancingo', 4);

INSERT INTO municipios(nombre_Municipio, id_Departamento) VALUES
/* LA LIBERTAD */
('Santa Tecla', 5),
('Antiguo Cuscatlán', 5),
('Chiltiupán', 5),
('Ciudad Arce', 5),
('Colón', 5),
('Comasagua', 5),
('Huizucar', 5),
('Jayaque', 5),
('Jicalapa', 5),
('La Libertad', 5),
('Nuevo Cuscatlán', 5),
('Quezaltepeque', 5),
('San Juan Opico', 5),
('Sacacoyo', 5),
('San José Villanueva', 5),
('San Matías', 5),
('San José Tacachico', 5),
('Talnique', 5),
('Tamanique', 5),
('Teotepeque', 5),
('Tepecoyo', 5),
('Zaragoza', 5);

INSERT INTO municipios(nombre_Municipio, id_Departamento) VALUES
/* MORAZAN */
('San Francisco Gotera', 6),
('Arambala', 6),
('Cacaopera', 6),
('Chilanga', 6),
('Corinto', 6),
('Delicias de Concepción', 6),
('El Divisadero', 6),
('El Rosario', 6),
('Gualococti', 6),
('Guatajiagua', 6),
('Joateca', 6),
('Jocoaitique', 6),
('Jocoro', 6),
('Lolotiquillo', 6),
('Meanguera', 6),
('Osicala', 6),
('Perquín', 6),
('San Carlos', 6),
('San Fernando', 6),
('San Isidro', 6),
('San Simón', 6),
('Sensembra', 6),
('Sociedad', 6),
('Torola', 6),
('Yamabal', 6),
('Yoloaiquín', 6),
('Ziquilas', 6);

INSERT INTO municipios(nombre_Municipio, id_Departamento) VALUES
/* LA PAZ */
('Zacatecoluca', 7),
('Cuyultitán', 7),
('El Rosario', 7),
('Jerusalén', 7),
('Mercedes La Ceiba', 7),
('Olocuilta', 7),
('Paraíso de Osorio', 7),
('San Antonio Masahuat', 7),
('San Emigdio', 7),
('San Francisco Chinameca', 7),
('San Pedro Masahuat', 7),
('San Juan Nonualco', 7),
('San Juan Talpa', 7),
('San Juan Tepezontes', 7),
('San Luis La Herradura', 7),
('San Luis Talpa', 7),
('San Miguel Tepezontes', 7),
('San Pedro Nonualco', 7),
('San Rafael Obrajuelo', 7),
('Santa María Ostuma', 7),
('Santiago Nonualco', 7),
('Tapalhuaca', 7);

INSERT INTO municipios(nombre_Municipio, id_Departamento) VALUES
/* SANTA ANA */
('Santa Ana', 8),
('Candelaria de la Frontera', 8),
('Chalchuapa', 8),
('Coatepeque', 8),
('El Congo', 8),
('El Porvenir', 8),
('Masahuat', 8),
('Metapán', 8),
('San Antonio Pajonal', 8),
('San Sebastián Salitrillo', 8),
('Santa Rosa Guachipilín', 8),
('Santiago de la Frontera', 8),
('Texistepeque', 8);

INSERT INTO municipios(nombre_Municipio, id_Departamento) VALUES
/* SAN MIGUEL */
('San Miguel', 9),
('Carolina', 9),
('Chapeltique', 9),
('Chinameca', 9),
('Chirilagua', 9),
('Ciudad Barrios', 9),
('Comacarán', 9),
('El Tránsito', 9),
('Fundación', 9),
('Lolotique', 9),
('Moncagua', 9),
('Nueva Guadalupe', 9),
('Nuevo Edén de San Juan', 9),
('Quelepa', 9),
('San Antonio', 9),
('San Gerardo', 9),
('San Jorge', 9),
('San Luis de la Reina', 9),
('San Rafael Oriente', 9),
('Sesori', 9),
('Uluazapa', 9);

INSERT INTO municipios(nombre_Municipio, id_Departamento) VALUES
/* SAN SALVADOR */
('San Salvador', 10),
('Aguilares', 10),
('Apopa', 10),
('Ayutuxtepeque', 10),
('Ciudad Delgado', 10),
('Cuscatancingo', 10),
('El Paisnal', 10),
('Guazapa', 10),
('Ilopango', 10),
('Intur', 10),
('Mejicanos', 10),
('Nejapa', 10),
('Panchimalco', 10),
('Rosario de Mora', 10),
('San Marcos', 10),
('San Martín', 10),
('Santiago Texacuangos', 10),
('Santo Tomás', 10),
('Soyapango', 10),
('Tonacatepeque', 10);

INSERT INTO municipios(nombre_Municipio, id_Departamento) VALUES
/* SAN VICENTE */
('San Vicente', 11),
('Apastepeque', 11),
('Guadalupe', 11),
('San Cayetano Istepeque', 11),
('San Esteban Catarina', 11),
('San Ildefonso', 11),
('San Lorenzo', 11),
('San Sebastián', 11),
('Santa Clara', 11),
('Santo Domingo', 11),
('Tecoluca', 11),
('Tepetitán', 11),
('Verapaz', 11);

INSERT INTO municipios(nombre_Municipio, id_Departamento) VALUES
/* SONSONATE */
('Sonsonate', 12),
('Acajutla', 12),
('Armenia', 12),
('Caluco', 12),
('Cuisnahuat', 12),
('Izalco', 12),
('Juayúa', 12),
('Nahuizalco', 12),
('Nahulingo', 12),
('Salcoatitán', 12),
('San Antonio del Monte', 12),
('San Julián', 12),
('Santa Catarina Masahuat', 12),
('Santa Isabel Ishuatán', 12),
('Santo Domingo de Guzmán', 12),
('Sonzacate', 12);

INSERT INTO municipios(nombre_Municipio, id_Departamento) VALUES
/* LA UNION */
('La Unión', 13),
('Anamorós', 13),
('Bolívar', 13),
('Concepción de Oriente', 13),
('Conchagua', 13),
('El Carmen', 13),
('El Sauce', 13),
('Intipucá', 13),
('Lislique', 13),
('Meanguera del Golfo', 13),
('Nueva Esparta', 13),
('Pasaquina', 13),
('Polorós', 13),
('San Alejo', 13),
('San José', 13),
('Santa Rosa de Lima', 13),
('Yayantique', 13),
('Yucuaiquín', 13);

INSERT INTO municipios(nombre_Municipio, id_Departamento) VALUES
/* USULUTAN */
('Usulután', 14),
('Alegría', 14),
('Berlín', 14),
('California', 14),
('Concepción Batres', 14),
('El Triunfo', 14),
('Ereguayquín', 14),
('Estanzuelas', 14),
('Jiquilisco', 14),
('Jucuapa', 14),
('Jucuarán', 14),
('Mercedes Umaña', 14),
('Nueva Granada', 14),
('Ozatlán', 14),
('Puerto El Triunfo', 14),
('San Agustín', 14),
('San Buenaventura', 14),
('San Dionisio', 14),
('San Francisco Javier', 14),
('Santa Elena', 14),
('Santa María', 14),
('Santiago de María', 14),
('Tecapán', 14);

use  proyectoscomunitarios;

INSERT INTO tipoAcontecimiento(acontecimiento) VALUES('Curso'), ('Evento'), ('Proyecto');

INSERT INTO usuarios (nombre_User, fecha_Nac, correo, password_user)VALUES('Angel Moran', '2022-05-11', 'angelmoran@gmail.com', 'demo-21');
INSERT INTO usuarios (nombre_User, fecha_Nac, correo, password_user)VALUES('Benjamin Garcia', '1997-05-11', 'benjagarcia@gmail.com', 'demo@87');
INSERT INTO usuarios (nombre_User, fecha_Nac, correo, password_user)VALUES('Cecilia Hernandez', '1997-05-11', 'cecihndz@gmail.com', 'demo!98');
INSERT INTO usuarios (nombre_User, fecha_Nac, correo, password_user)VALUES('Duoglas Orellana', '1993-05-11', 'douglasore@gmail.com', 'demo_ore');

INSERT INTO responsables(nombre_Responsable, fecha_nacimiento, correo_Responsable, password_respon, cargo)VALUES('Sandra Olivares', '2007-05-09', 'sandra@gmail.com', '2637!', 'Administrador');
INSERT INTO responsables(nombre_Responsable, fecha_nacimiento, correo_Responsable, password_respon, cargo)VALUES('Karen Menjivar', '1987-05-05', 'karenmenjivar@gmail.com', '6778@karen', 'Coordinador');
INSERT INTO responsables(nombre_Responsable, fecha_nacimiento, correo_Responsable, password_respon, cargo)VALUES('Antonio Salazares', '2001-05-03', 'antonioo@gmail.com', '783_anto', 'Director');
INSERT INTO responsables(nombre_Responsable, fecha_nacimiento, correo_Responsable, password_respon, cargo)VALUES('Luis Caseres', '2000-05-02', 'luis_caseres@gmail.com', '212_903', 'Coordinador');

INSERT INTO usuarios (nombre_User,fecha_Nac,correo,password_user) VALUES ('Santiago Morales','2002-05-11','santiafo@gmail.com','Dem0234');
INSERT INTO usuarios (nombre_User,fecha_Nac,correo,password_user) VALUES ('Diego Carcamo','1987-05-11','Diego@Hotmail.com','@1234');
INSERT INTO usuarios (nombre_User,fecha_Nac,correo,password_user) VALUES ('Nicolas Fuentes','1990-05-11','Nicolas@gmail.com','Nico@34D');
INSERT INTO usuarios (nombre_User,fecha_Nac,correo,password_user) VALUES ('Angel Serrano','2001-05-11','Angel@gmail.com','A@3423');
INSERT INTO usuarios (nombre_User,fecha_Nac,correo,password_user) VALUES ('Tomas Morales ','2001-05-11','Morales@gmail.com','@@demo');
INSERT INTO usuarios (nombre_User,fecha_Nac,correo,password_user) VALUES ('David Menjivar','1987-05-11','David@gmail.com','David2323@');
INSERT INTO usuarios (nombre_User,fecha_Nac,correo,password_user) VALUES ('Andres Alvarez','1960-05-11','Andresito@gmail.com','AA@dres');
INSERT INTO usuarios (nombre_User,fecha_Nac,correo,password_user) VALUES ('Joaquin Guzman','1995-05-11','Guzman@gmail.com','GuzGuz@');
INSERT INTO usuarios (nombre_User,fecha_Nac,correo,password_user) VALUES ('Antonio Marquez','1992-05-11','Antonio@gmail.com','MarquezD@34');
INSERT INTO usuarios (nombre_User,fecha_Nac,correo,password_user) VALUES ('Michelle Huezo','1996-05-11','Grace@gmail.com','0123');
INSERT INTO usuarios (nombre_User,fecha_Nac,correo,password_user) VALUES ('Flor Mendez','1997-05-11','Flor_Mendez@gmail.com','029521');
INSERT INTO usuarios (nombre_User,fecha_Nac,correo,password_user) VALUES ('Leonardo DiCaprio','2000-05-11','Leo@gmail.com','075423');
INSERT INTO usuarios (nombre_User,fecha_Nac,correo,password_user) VALUES ('Esteban Alvarenga','2001-05-11','Esteban@gmail.com','@21Esteban');

INSERT INTO usuarios (nombre_User,fecha_Nac,correo,password_user) VALUES ('Mauricio Funes','1997-05-02','Mauricio@gmail.com','ri@23');
INSERT INTO usuarios (nombre_User,fecha_Nac,correo,password_user) VALUES ('Juan Balladares','1997-05-01','juan@gmail.com','D45');
INSERT INTO usuarios (nombre_User,fecha_Nac,correo,password_user) VALUES ('Marcos Aguirre','1997-05-04','Marcos@gmail.com','Du@34');
INSERT INTO usuarios (nombre_User,fecha_Nac,correo,password_user) VALUES ('Alvaro Gutierrez','1997-07-11','Alvaro@gmail.com','Ma823');
INSERT INTO usuarios (nombre_User,fecha_Nac,correo,password_user) VALUES ('Luciano Mendez','1997-10-11','Luciano@gmail.com','M23@@');
INSERT INTO usuarios (nombre_User,fecha_Nac,correo,password_user) VALUES ('Pedro Funes','1997-05-01','pedro@gmail.com','Mai@23');
INSERT INTO usuarios (nombre_User,fecha_Nac,correo,password_user) VALUES ('Ezequiel Balladares','1997-05-10','ezequiel@gmail.com','D@205');
INSERT INTO usuarios (nombre_User,fecha_Nac,correo,password_user) VALUES ('Santos Aguirre','2001-05-11','Santos@gmail.com','D3334');
INSERT INTO usuarios (nombre_User,fecha_Nac,correo,password_user) VALUES ('Ramiro Gutierrez','2001-05-12','Ramiro@gmail.com','Ma826');
INSERT INTO usuarios (nombre_User,fecha_Nac,correo,password_user) VALUES ('Jose Mendez','2008-05-09','JOse@gmail.com','M2312@@');

INSERT INTO responsables(nombre_Responsable, fecha_nacimiento, correo_Responsable, password_respon, cargo)VALUES('Alfredo Olivares', '1995-03-02', 'alfredo@gmail.com', '237!', 'Administrador');
INSERT INTO responsables(nombre_Responsable, fecha_nacimiento, correo_Responsable, password_respon, cargo)VALUES('Valentin Perez', '1997-05-11', 'valentin@gmail.com', '@123!', 'Director');
INSERT INTO responsables(nombre_Responsable, fecha_nacimiento, correo_Responsable, password_respon, cargo)VALUES('Duglas Mendez', '1983-05-11', 'duglas@gmail.com', '029621', 'Coordinador');
INSERT INTO responsables(nombre_Responsable, fecha_nacimiento, correo_Responsable, password_respon, cargo)VALUES('Hugo Solorzano', '2001-05-11', 'hugo@gmail.com', 'hugo23', 'Administrador');
INSERT INTO responsables(nombre_Responsable, fecha_nacimiento, correo_Responsable, password_respon, cargo)VALUES('Ricardo Mancia', '2000-05-11', 'ricardo@gmail.com', '2001!', 'Director');
INSERT INTO responsables(nombre_Responsable, fecha_nacimiento, correo_Responsable, password_respon, cargo)VALUES('Bruno Escobar', '1999-05-11', 'bruno@gmail.com', '30080!', 'Coordinador');
INSERT INTO responsables(nombre_Responsable, fecha_nacimiento, correo_Responsable, password_respon, cargo)VALUES('Ernesto Escobar', '1968-05-11', 'escobar@gmail.com', '9900!', 'Coordinador');
INSERT INTO responsables(nombre_Responsable, fecha_nacimiento, correo_Responsable, password_respon, cargo)VALUES('Grace Rivera', '1987-05-11', 'grace@gmail.com', '029643', 'Administrador');
INSERT INTO responsables(nombre_Responsable, fecha_nacimiento, correo_Responsable, password_respon, cargo)VALUES('Jeremias Aguilar', '1997-05-11', 'jeremias@gmail.com', '@mi123!', 'Administrador');
INSERT INTO responsables(nombre_Responsable, fecha_nacimiento, correo_Responsable, password_respon, cargo)VALUES('Esteban Alvarenga', '1995-05-11', 'esteban@gmail.com', 'esteman!', 'Adimintrador');
INSERT INTO responsables(nombre_Responsable, fecha_nacimiento, correo_Responsable, password_respon, cargo)VALUES('Raisa Escobar', '1995-05-11', 'raisa@gmail.com', '8080!', 'Directora');
INSERT INTO responsables(nombre_Responsable, fecha_nacimiento, correo_Responsable, password_respon, cargo)VALUES('Bruno Escobar', '1996-05-11', 'bruno@gmail.com', '237000!', 'Coordinador');

INSERT INTO acontecimientos(id_TipoAcont, nombre_Acont, fecha_Inicio, fecha_Fin, descripcion, cantidad_Beneficiados, ubicacion, empleado, estado) VALUES
(1,'Arte Municipal','2022-02-26','2022-08-10','Practicas para insentivar el dibujo y pintura', 45, 50, 2, 'Aprobado'),
(1,'Reforestacion','2021-06-19','2022-05-10','Eliminar Arboles dañinos para construcciones', 100, 76, 5, 'Ejecucion'),
(1,'Dia D','2022-02-26','2022-06-01','La población limpiará recipientes de agua', 88, 89, 4, 'Aprobado'),
(1,'Recoleccion de Basura','2022-05-31','2022-06-10','Se Limpiaran las calles del municipio', 45, 50, 2, 'Finalizado'),
(1,'Consientisación de las ITS','2022-06-15','2022-06-25','Charlas en institutos para estudiantes', 45, 50, 7, 'Aprobado');


/*
SELECT * FROM acontecimientos;
SELECT * FROM municipios;
SELECT * FROM departamentos;
SELECT * FROM responsables;
*/
