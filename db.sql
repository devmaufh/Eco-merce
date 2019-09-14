create table tipoUsuario(idTipo serial primary key, tipo varchar(25));
create table proveedor(
    idProvedor serial primary key,
    rfc char(13),
    nombre varchar(50),
    direccion varchar(100),
    provincia varchar(50),
    email varchar(125),
    telefono char(10),
    cp varchar(5)
);

create table prodcutos(
    idProd serial primary key,
    nombre varchar(100),
    descripcion varchar(500),
    precioMayoreo number,
    precioMenudeo number,
    cantidad number,
    idProvedor number,
    foreign key(idProvedor) references proveedor(idProvedor)
);
create table usuarios(
    idUser serial primary key,
    idTipo number,
    usuario varchar(125),
    password varchar(125),
    id_n number
);


/*
cambio de mau
*(