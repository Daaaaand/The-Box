/* 
		DATABASE CREATION
*/

create database if not exists Parcial;
use Parcial;


/*------------------------------------------------------------------------*/
/*							TABLAS									
/*------------------------------------------------------------------------*/


create table if not exists Persona(
ci char(8) not null primary key,
nombre varchar(10) not null,
apellido varchar(10) not null,
cel int not null,
direccion varchar(25),
EstadoPersona bool
);
select * from Persona;
/*------------------------------------------------------------------------*/
/*							:PERSONAS									
/*------------------------------------------------------------------------*/

create table if not exists Administrador(
contraseñaAdmin varchar(50),
usuarioAdmin varchar(30),
ci char(8) not null primary key,
foreign key (ci) references Persona(ci)
);

create table if not exists Recepcionista(
contraseñaRecepcionista varchar(50),
usuarioRecepcionista varchar(30),
ci char(8) not null primary key,
IDE char(8) not null,
foreign key (ci) references Persona(ci),
foreign key (IDE) references Encomienda(IDE)
);

create table if not exists Cliente(
ci char(8) not null primary key,
foreign key (ci) references Persona(ci)
);
/*------------------------------------------------------------------------*/
/*							:EMPRESA									
/*------------------------------------------------------------------------*/

create table if not exists Sucursal(
IDS char(8) primary key not null,
localidad varchar(30) not null,
ciudad varchar(30) not null,
direccionSucursal varchar(30) not null 
);

create table if not exists Encomienda (
IDE char(8) primary key not null,
tipo varchar(30) not null,
observaciones varchar(30) not null,
estado enum('Pendiente','Ruta','Despachada','Cancelada'),
origenSucursal char(8) not null,
destinoSucursal char(8) not null,
foreign key (origenSucursal) references Sucursal(IDS),
foreign key (destinoSucursal) references Sucursal(IDS)
);

create table if not exists Historial (
IDE char(8) not null,
ci char(8) not null,
foreign key (ci) references Cliente(ci),
foreign key (IDE) references Encomienda(IDE)
);


/*------------------------------------------------------------------------*/
/*							VALORES									
/*------------------------------------------------------------------------*/



insert into Persona 			/* 				PERSONA:admin				*/
(ci, nombre, apellido, cel, direccion, EstadoPersona)
Values 
('56350574', 'Ezequiel', 'Villalba', '092719999', 'Juana de Arco 7896', '0');


insert into Persona 			/* 				PERSONA:recepcionista				*/
(ci, nombre, apellido, cel, direccion, EstadoPersona)
Values 
('56473869', 'Martin', 'Garrix', '096572834', 'Paysandu 9876', '0');


insert into Persona 			/* 				PERSONA:cliente				*/
(ci, nombre, apellido, cel, direccion, EstadoPersona)
Values 
('46175846', 'Sol', 'Cardial', '097584261', 'La Paz 1696', '1'),
('14725692', 'Luis', 'Ford', '091647284', 'Colon 9812', '1'),
('17447558', 'Fernando', 'Moreira', '09871441', 'Regimiento 9 5554', '1'),
('16475826', 'Matias', 'Moreira', '091647265', 'Lopez 3784', '1');


insert into Administrador 			/* 				Administrador				*/
(contraseñaAdmin, usuarioAdmin, ci)
values
('21ty678et_g-bhndf6_v-12!', 'admin', '56350574');

insert into Recepcionista 			/* 				Recepcionista				*/
(contraseñaRecepcionista, usuarioRecepcionista, ci, IDE)
values
('hdaskl71´gfa_-1as--_12!', 'recepcionista', '56473869', '67815264');

insert into Cliente 			/* 				Cliente				*/
(ci)
values
('46175846'), ('14725692'), ('17447558'), ('16475826');

insert into Sucursal 			/* 				Sucursal: Origen				*/
(IDS, localidad, ciudad, direccionSucursal)
values
('82746580', 'Uruguay', 'Montevideo', 'San Martin 4938');

insert into Sucursal 			/* 				Sucursal: Destino				*/
(IDS, localidad, ciudad, direccionSucursal)
values
('16472957', 'Uruguay', 'Salto', 'Camnio 15');


insert into Encomienda 			/* 				Encomienda				*/
(IDE, tipo, observaciones, estado, origenSucursal, destinoSucursal)
values
('67815264', 'Tributo', 'Ninguna', 'Pendiente', '82746580', '16472957');


insert into Historial 			/* 				Historial				*/
(IDE, ci)
values
('67815264', '46175846');
