CREATE DATABASE BDMM_DB2;
USE BDMM_DB2;
DROP TABLE usuarios;

CREATE TABLE usuarios (
    Usuario_Id INT UNIQUE AUTO_INCREMENT COMMENT 'Identificacion numerica para los usuarios de la tienda online',
    Usuario_NombreUsuario VARCHAR(255) COMMENT "Nombre de Usuario",
    Usuario_Rol VARCHAR(255) COMMENT "Rol del usuario, este puede ser de Administrador, Vendedor y Comprador. Tambien se puede que sean Vendedor y Comprador al mismo tiempo",
    Usuario_Email VARCHAR(255) COMMENT "Email del usuario",
    Usuario_Contraseña VARCHAR(255) COMMENT "Contraseña del usuario. Esta debe ser min. de 8 caracteres y con al menos una mayuscula, minuscula, numero y caracter especial",
    Usuario_Nombre VARCHAR(255) COMMENT "Nombre(s) del usuario",
    Usuario_ApellidoP VARCHAR(255) COMMENT "Apellido Paterno del usuario",
    Usuario_ApellidoM VARCHAR(255) COMMENT "Apellido Materno del usuario",
    Usuario_FechaNacimiento DATE COMMENT "Fecha de nacimiento del usuario",
    Usuario_Genero bit NOT NULL COMMENT "Genero del usuario. Se puede escoger de la lista.",
    Usuario_Imagen VARCHAR(255) COMMENT "Imagen de perfil del usuario",
    Usuario_FechaCreacion DATE COMMENT "Fecha en el que se creo el usuario",
    PRIMARY KEY (Usuario_Id)
);

CREATE TABLE Producto (
    Producto_Id INT UNIQUE AUTO_INCREMENT COMMENT "El numero de registro para los productos",
    Producto_Usuario_id int COMMENT "El numero de registro para el usuario",
    Producto_Nombre VARCHAR(255) COMMENT "Nombre del producto disponible",
    Producto_Descripcion VARCHAR(255) COMMENT "Informacion general o tecnica del producto",
    Producto_Precio FLOAT4 COMMENT "Precio del producto",
    Producto_Imagen VARCHAR(255) COMMENT "Imagen(es) del producto",
    Producto_Video VARCHAR(255) COMMENT "Video para mostrar el producto",
    Producto_CategoriaId INT COMMENT "Numero de registro para las categorias",
    Producto_PalabraClave1 VARCHAR(255) COMMENT "Palabra clave para busqueda del producto #1",
	Producto_PalabraClave2 VARCHAR(255) COMMENT "Palabra clave para busqueda del producto #2",
    Producto_PalabraClave3 VARCHAR(255) COMMENT "Palabra clave para busqueda del producto #3",
    Producto_Subasta BOOL COMMENT "Indica si el producto esta disponible para subasta",
    Producto_Cantidad INT COMMENT "Cantidad de producto disponible",
    Producto_Valoracion INT COMMENT "Calificacion promedio del producto. Este se calcula por medio de todo sumar los comentarios.",
    Producto_Comentarios VARCHAR(255) COMMENT "Comentarios acerca del producto",
    PRIMARY KEY (Producto_Id),
    FOREIGN KEY (Producto_CategoriaId)
        REFERENCES Categoria (Categoria_Id),
	FOREIGN KEY (Producto_Usuario_id)
        REFERENCES usuarios (Usuario_id)
);

CREATE TABLE MetodoPago (
    Metodo_Id INT UNIQUE AUTO_INCREMENT COMMENT "Numero de registro para los metodos de pago",
    Metodo_Usuario INT COMMENT "Numero de registro de los usuarios",
    Metodo_tipo int NOT NULL COMMENT "Que tipo de pago seria el que se registrara para el usuario. 1.Tarjeta de Credito, 2.Tarjeta de Debito, 3.PayPal",
    Metodo_numerotarjeta int COMMENT "Numero de la tarjeta(si disponible) del usuario",
    Metodo_fechatarjeta date COMMENT "Fecha en el que se usa la tarjeta",
    Metodo_cvvtarjeta smallint COMMENT "Numero CVV de la tarjeta",
    Metodo_Nombre VARCHAR(255) COMMENT "Nombre costumatizable para el metodo de pago",
    PRIMARY KEY (Metodo_Id),
    FOREIGN KEY (Metodo_Usuario)
        REFERENCES usuarios (Usuario_Id)
);

CREATE TABLE Lista (
    Lista_Id int UNIQUE AUTO_INCREMENT COMMENT "Numero de registro para las listas",
    Lista_Usuario int NOT NULL COMMENT "Numero de registro para los usuarios",
    Lista_Nombre VARCHAR (255) COMMENT "Nombre de la lista",
    Lista_Descripcion VARCHAR(255) COMMENT "Descripcion acerca de la lista",
    Lista_Imagen VARCHAR(255) COMMENT "Imagen adjuntada para la lista",
    PRIMARY KEY (Lista_Nombre),
        FOREIGN KEY (Lista_Usuario)
        REFERENCES usuarios (Usuario_Id)
);

CREATE TABLE Categoria (
    Categoria_Id INT UNIQUE AUTO_INCREMENT COMMENT "Numero de registro para las categorias",
    Categoria_Nombre VARCHAR(255) COMMENT "Nombre de la categoria",
    Categoria_Descripcion VARCHAR(255) COMMENT "Descripcion de la categoria",
    PRIMARY KEY (Categoria_Id)
);

CREATE TABLE Cotizacion (
    Cotizacion_Id INT UNIQUE AUTO_INCREMENT COMMENT "Numero de registro para las cotizaciones hechas",
    Cotizacion_Precio FLOAT4 COMMENT "Precio establecido por parte del vendedor para ofrecer al comprador",
    Cotizacion_Usuario int NOT NULL COMMENT "Numero de registro para los usuarios",
    Cotizacion_Producto int NOT NULL COMMENT "Numero de registro para los productos",
    PRIMARY KEY (Cotizacion_Id),
    FOREIGN KEY (Cotizacion_Producto)
        REFERENCES Producto (Producto_Id),
    FOREIGN KEY (Cotizacion_Usuario)
        REFERENCES usuarios (Usuario_Id)
);

CREATE TABLE Carrito (
    Carrito_Id INT UNIQUE AUTO_INCREMENT COMMENT "Numero de registro para el carrito del comprador",
    Carrito_Usuario INT NOT NULL COMMENT "Numero de registro para los usuarios",
    Carrito_Subtotal FLOAT4 NOT NULL COMMENT "Resultado subtotal para los productos en el carrito",
    Carrito_IVA FLOAT4 NOT NULL COMMENT "Resultado estatico para el IVA",
    Carrito_Total FLOAT4 NOT NULL COMMENT "Resultado total para los productos en el carrito",
    PRIMARY KEY (Carrito_Id),
    FOREIGN KEY (Carrito_Usuario)
        REFERENCES usuarios (Usuario_Id)
);

CREATE TABLE Venta (
    Venta_Id INT UNIQUE AUTO_INCREMENT COMMENT "Numero de registro para las Ventas realizadas",
    Venta_Producto INT COMMENT "Numero de registro de los productos",
    PRIMARY KEY (Venta_Id),
    FOREIGN KEY (Venta_Producto)
        REFERENCES Producto (Producto_Id)
);

CREATE TABLE Recibo (
    Recibo_Id INT UNIQUE AUTO_INCREMENT COMMENT "Numero de registro para los recibos realizados",
    Recibo_CarritoId INT COMMENT "Numero de registro para el carrito del comprador",
    Recibo_UsuarioId INT COMMENT "Numero de registro para los usuario registrados",
    Recibo_Fecha DATE COMMENT "Fecha en el que se crea el recibo",
    Recibo_Subtotal FLOAT4 COMMENT "Subtotal del carrito mostrado en el recibo",
    Recibo_IVA FLOAT4 COMMENT "Resultado estatico para el IVA",
    Recibo_Total FLOAT4 COMMENT "Total del carrito mostrado en el recibo",
    PRIMARY KEY (Recibo_Id),
    FOREIGN KEY (Recibo_UsuarioId)
        REFERENCES usuarios (Usuario_Id),
    FOREIGN KEY (Recibo_CarritoId)
        REFERENCES Carrito (Carrito_Id)
);

CREATE TABLE Carrito_Producto(
    CarritoP_CarritoId int COMMENT "Numero de registro para el carrito del cliente",
    CarritoP_ProductoId int COMMENT "Numero de registro para el producto",
    CarritoP_Cantidad int COMMENT "Cantidad de productos puestos en el carrito",
	FOREIGN KEY (CarritoP_CarritoId)
        REFERENCES Carrito (Carrito_Id),
    FOREIGN KEY (CarritoP_ProductoId)
        REFERENCES Producto (Producto_Id)
    );
    
CREATE TABLE Venta_Producto(
VentaP_VentaId int COMMENT "Numero de registro para las ventas realizadas",
VentaP_ProductoId int COMMENT "Numero de registro para los productos",
VentaP_Cantidad int COMMENT "Cantidad de productos vendidos",
VentaP_Subtotal float4 NOT NULL COMMENT "Subtotal de la venta del producto",
VentaP_IVA FLOAT4 NOT NULL COMMENT "Resultado estatico para el IVA",
VentaP_Total float4 NOT NULL COMMENT "Total de la venta del producto",
FOREIGN KEY (VentaP_VentaId)
        REFERENCES Venta (Venta_Id),
FOREIGN KEY (VentaP_ProductoId)
        REFERENCES Producto (Producto_Id)
);

CREATE TABLE Lista_Producto(
ListaP_ListaId int COMMENT "Numero de registro de las listas creadas",
ListaP_ProductoId int COMMENT "Numero de registro para los productos",
FOREIGN KEY (ListaP_ListaId)
        REFERENCES Lista (Lista_Id),
FOREIGN KEY (ListaP_ProductoId)
        REFERENCES Producto (Producto_Id)
);

CREATE TABLE Comentario_Producto(
ComentarioP_Id int UNIQUE AUTO_INCREMENT COMMENT "Numero de Registro para los comentarios hechos en el sitio web",
ComentarioP_UsuarioId INT COMMENT "Numero de registro para los usuarios registrados",
ComentarioP_ProductoId INT COMMENT "Numero de registro para los productos",
ComentarioP_texto VARCHAR(255),
    PRIMARY KEY (ComentarioP_Id),
FOREIGN KEY (ComentarioP_UsuarioId)
        REFERENCES usuarios (Usuario_Id),
FOREIGN KEY (ComentarioP_ProductoId)
        REFERENCES Producto (Producto_Id)
);

CREATE TABLE Valoracion_Producto(
Valoracion_Id int UNIQUE AUTO_INCREMENT COMMENT "Numero de registro para las valoraciones hechas a los productos",
Valoracion_rate int COMMENT "Calificacion dada a los productos por medio de estrellas. Rango de 1 a 5",
Valoracion_ProductoId int COMMENT "Numero de registro para los productos",
Valoracion_UsuarioId int COMMENT "Numero de registro para los usuarios registrados",
PRIMARY KEY (Valoracion_Id),
FOREIGN KEY (Valoracion_ProductoId)
        REFERENCES Producto (Producto_Id),
FOREIGN KEY (Valoracion_UsuarioId)
        REFERENCES usuarios (Usuario_Id)
);