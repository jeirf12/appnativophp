create database bdproductos;

create table producto (codigo serial primary key, nombre varchar(100) null, precio float(8) null);
insert into producto (nombre, precio) values ('aceite', 1800.78);
insert into producto (nombre, precio) values ('pasta', 3570.52);

create table persona (codigo serial primary key, nombre varchar(100) not null, usuario varchar(100) not null, clave varchar(100) not null, rol varchar(100) check(rol in ('admin', 'no-admin')) not null);
insert into persona (nombre, usuario, clave, rol) values ('jhonfer', 'jruiz', 'jruiz', 'admin');
insert into persona (nombre, usuario, clave, rol) values ('adrian', 'avelasco', 'avelasco', 'no-admin');
