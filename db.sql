
create table tipoUsuario(idTipo int identity primary key, tipo varchar(25));
create table proveedor(
    idProvedor int identity primary key,
    rfc char(13),
    nombre varchar(50),
    direccion varchar(100),
    provincia varchar(50),
    email varchar(125),
    telefono char(10),
    cp varchar(5),
    password varchar(100) not null
);

create table productos(
    idProd int identity primary key,
    nombre varchar(100),
    descripcion varchar(500),
    precioMayoreo numeric,
    precioMenudeo numeric,
    cantidad numeric,
    idProvedor integer,
    foreign key(idProvedor) references proveedor(idProvedor)
);
create table usuarios(
    idUser int  identity primary key,
    idTipo integer,
    usuario varchar(125),
    password varchar(125)
);
create table cliente(
    idCliente int identity primary key,
    email varchar(100),
    nombre varchar(100),
    tel char(10),
    direccion varchar(100),
    rfc char(13),
    password varchar(125)
);

create table pedidos(
    idPedido int identity primary key,
    idProducto integer,
    idCliente integer,
    cantidad numeric,
    fecha date,
    status integer,
    foreign key (idProducto) references productos(idProd),
    foreign key (idCliente) references cliente(idCliente)
);

create table solicitud(
    idSolicitud int identity primary key,
    idProducto integer,
    pregunta1 text,
    pregunta2 text
);


alter proc checkHashUser
@email varchar(250)
as
BEGIN
	if EXISTS (SELECT * from proveedor where email = @email)
	BEGIN
		Select 1 as 'status',1 as 'tipo',password from proveedor where email=@email
	END
	else
	BEGIN
		IF EXISTS (SELECT * from cliente where email =@email)
		BEGIN 
			select 1 as 'status',0 as 'tipo', password from cliente where email = @email
		END
		ELSE
		BEGIN
			SELECT 0 as 'status';
		END
	END
END