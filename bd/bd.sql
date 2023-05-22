create table alumnos_informatica(
    alumnos_id serial not null,
    alumnos_nombre varchar(50) not null,
    alumnos_apellido varchar(50) not null,
    alumnos_fecha_naci varchar(50) not null,
    alumnos_telefono integer not null,
    alumnos_correo varchar(50) not null,
    primary key (alumnos_id)
);