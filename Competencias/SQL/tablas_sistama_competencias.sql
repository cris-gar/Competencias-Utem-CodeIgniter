BEGIN TRANSACTION;

DROP TABLE IF EXISTS facultades CASCADE;
CREATE TABLE facultades (
	facultad_id serial NOT NULL,
	facultad varchar(100) NOT NULL,
	
	PRIMARY KEY (facultad_id)
);

DROP TABLE IF EXISTS departamentos CASCADE;
CREATE TABLE departamentos (
	departamento_id serial NOT NULL,
	departamento varchar(100) NOT NULL,
	facultad_id int NOT NULL REFERENCES facultades(facultad_id) ON UPDATE CASCADE ON DELETE CASCADE,

	PRIMARY KEY (departamento_id)
);

DROP TABLE IF EXISTS usuarios CASCADE;
CREATE TABLE usuarios (
    usuario_id serial NOT NULL,
    nombre varchar(100) NOT NULL,
    permiso boolean DEFAULT false NOT NULL,
    email varchar(150),
    telefono int,
    genero varchar(1) NOT NULL,
    nacionalidad varchar(50) NOT NULL,
    estado_civil varchar(50) NOT NULL,
    fecha_nacimiento date NOT NULL,
    fecha_actualizacion timestamp with time zone DEFAULT now() NOT NULL,
    
    UNIQUE (email),
    PRIMARY KEY (usuario_id)
);


DROP TABLE IF EXISTS accesos CASCADE;
CREATE TABLE accesos (
    acceso_id bigserial NOT NULL,
    usuario_fk int NOT NULL REFERENCES usuarios(usuario_id) ON UPDATE CASCADE ON DELETE CASCADE,
    fecha timestamp NOT NULL DEFAULT NOW(),
    ip inet NOT NULL DEFAULT '127.0.0.1',
    PRIMARY KEY (acceso_id)
);


DROP TABLE IF EXISTS estudios CASCADE;
CREATE TABLE estudios (
    estudio_id bigserial NOT NULL,
    usuario_fk int NOT NULL REFERENCES usuarios(usuario_id) ON UPDATE CASCADE ON DELETE CASCADE,
    titulo varchar(150) NOT NULL,
    grado_academico varchar(100) NOT NULL,
    institucion varchar(100) NOT NULL,
	especialidades varchar(255) NOT NULL,
    fecha date NOT NULL,
    pais varchar(100) NOT NULL,
    fecha_actualizacion timestamp with time zone DEFAULT now() NOT NULL,

    PRIMARY KEY (estudio_id)
);


COMMIT;
