CREATE TABLE tipoUsuario (
    idTipoUsuario int AUTO_INCREMENT PRIMARY KEY,
    nombreTipoUsuario varchar(16)
);

CREATE TABLE usuario (
    idUsuario int AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(32),
    apellido varchar(32),
    direccion varchar(32),
    correo varchar(32),
    numCuenta integer(16),
    tipoUsuario integer,
    saldoBancario decimal(15,2),
    contraseña varchar(16),
    CONSTRAINT FK_tipoUsuario FOREIGN KEY (tipoUsuario) REFERENCES tipoUsuario(idTipoUsuario)
);

CREATE TABLE telefono (
    idTelefono int AUTO_INCREMENT PRIMARY KEY,
    usuario INT,
    saldoTelefono decimal(15,2),
    estadoTelefono BOOLEAN,
    numDesvio integer(10),
    CONSTRAINT FK_usuario FOREIGN KEY (usuario) REFERENCES usuario(idUsuario)
);

CREATE TABLE mensaje (
    idMensaje int AUTO_INCREMENT PRIMARY KEY,
    telEmisor int(10),
    telReceptor int(10),
    contMensaje varchar(140),
    fechaEnvio date,
    costo decimal(15,2),
    CONSTRAINT FK_telEmisor FOREIGN KEY (telEmisor)
    REFERENCES telefono(idTelefono),
    CONSTRAINT FK_telReceptor FOREIGN KEY (telReceptor)
    REFERENCES telefono(idTelefono)
);





INSERT INTO `usuario`(`nombre`, `apellido`, `direccion`, `correo`, `numCuenta`, `contraseña`) 
VALUES 
('Edgar','de Dios','Maranatha','one@gmail.com',4523456585136547,'12345'),
('Jared','Torres','Los Fresnos','hacha@gmail.com',452345211122154,'12345'),
('Cesar','Aleman','Los Fresnos','presi@gmail.com',4523456585133456,'12345'),
('Harry','Vargas','Universidad','harry@gmail.com',4523456585136567,'12345')