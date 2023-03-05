use  proyectoscomunitarios;

#select * from  usuarios;

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

INSERT INTO tipoAcontecimiento(acontecimiento) VALUES('Curso'), ('Evento'), ('Proyecto');

INSERT INTO acontecimientos(id_TipoAcont, nombre_Acont, fecha_Inicio, fecha_Fin, descripcion, cantidad_Beneficiados, ubicacion, empleado, estado) VALUES
(1,'Arte Municipal','2022-02-26','2022-08-10','Practicas para insentivar el dibujo y pintura', 45, 50, 2, 'Aprobado'),
(1,'Reforestacion','2021-06-19','2022-05-10','Eliminar Arboles dañinos para construcciones', 100, 76, 5, 'Ejecucion'),
(1,'Dia D','2022-02-26','2022-06-01','La población limpiará recipientes de agua', 88, 89, 4, 'Aprobado'),
(1,'Recoleccion de Basura','2022-05-31','2022-06-10','Se Limpiaran las calles del municipio', 45, 50, 2, 'Finalizado'),
(1,'Consientisación de las ITS','2022-06-15','2022-06-25','Charlas en institutos para estudiantes', 45, 50, 7, 'Aprobado');

#/*
SELECT * FROM acontecimientos;
SELECT * FROM municipios;
SELECT * FROM departamentos;
SELECT * FROM responsables;
#*/

/*
SELECT d.id, nombres, apellidos, m.materia as materias
FROM docente d INNER JOIN materia m ON d.id = m.id WHERE m.id = 4;
*/



