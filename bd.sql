CREATE TABLE ESPECIALIDAD(
		ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		DESCRIPCION VARCHAR(200) NOT NULL,
		ESTADO BOOLEAN NOT NULL
);

CREATE TABLE SECCION(
		ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		DESCRIPCION VARCHAR(200) NOT NULL,
		ESTADO BOOLEAN NOT NULL
);

CREATE TABLE ESTUDIANTE(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NOMBRE VARCHAR(200) NOT NULL,
    PRIMERAPELLIDO VARCHAR(200) NOT NULL,
    SEGUNDOAPELLIDO VARCHAR(200) NOT NULL,
    CEDULA VARCHAR(200) NOT NULL,
		SALDO FLOAT NOT NULL,
    IDESPECIALIDAD INT NOT NULL,
    IDSECCION INT NOT NULL,
    ESTADO BOOLEAN NOT NULL,
		BECADO BOOLEAN NOT NULL
);

CREATE TABLE PROFESOR(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    NOMBRE VARCHAR(200) NOT NULL,
    PRIMERAPELLIDO VARCHAR(200) NOT NULL,
    SEGUNDOAPELLIDO VARCHAR(200) NOT NULL,
    CEDULA VARCHAR(200) NOT NULL,
		SALDO FLOAT NOT NULL,
    ESTADO BOOLEAN NOT NULL,
);

CREATE TABLE ASISTENCIA(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		IDUSUARIO INT NOT NULL,
		FECHA DATE NOT NULL,
		ESTADO BOOLEAN NOT NULL
);

CREATE TABLE TIQUETE(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		MONTO FLOAT NOT NULL,
		IDPERFIL INT NOT NULL,
		ESTADO BOOLEAN NOT NULL
);

CREATE TABLE FUNCIONARIO(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		PERFIL INT NOT NULL, -- 1 -> Administrador | 2 -> Cobros
		NOMBRE VARCHAR(200) NOT NULL,
		PRIMERAPELLIDO VARCHAR(200) NOT NULL,
		SEGUNDOAPELLIDO VARCHAR(200) NOT NULL,
		CORREO VARCHAR(200) NOT NULL,
		CONTRASENA VARCHAR(200) NOT NULL,
		ESTADO BOOLEAN NOT NULL
);

ALTER TABLE ESTUDIANTE ADD FOREIGN KEY (IDSECCION) REFERENCES SECCION(ID);
ALTER TABLE ESTUDIANTE ADD FOREIGN KEY (IDESPECIALIDAD) REFERENCES ESPECIALIDAD(ID);

ALTER TABLE ASISTENCIA ADD FOREIGN KEY (IDUSUARIO) REFERENCES ESTUDIANTE(ID);
ALTER TABLE ASISTENCIA ADD FOREIGN KEY (IDUSUARIO) REFERENCES PROFESOR(ID);
