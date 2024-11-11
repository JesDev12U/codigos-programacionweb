DROP DATABASE IF EXISTS tienda;
CREATE DATABASE tienda;
USE tienda;

CREATE TABLE productos(
  id INT PRIMARY KEY AUTO_INCREMENT,
  nombre TEXT NOT NULL,
  precio DOUBLE NOT NULL
);

INSERT INTO productos VALUES (DEFAULT, "Sabritas", 20);
INSERT INTO productos VALUES (DEFAULT, "Gansito", 25);
INSERT INTO productos VALUES (DEFAULT, "Ruffles", 23);
INSERT INTO productos VALUES (DEFAULT, "Coca-Cola", 37);
INSERT INTO productos VALUES (DEFAULT, "Pepsi-Cola", 20);
INSERT INTO productos VALUES (DEFAULT, "Red-Cola", 23);
INSERT INTO productos VALUES (DEFAULT, "Cheetos", 12);
INSERT INTO productos VALUES (DEFAULT, "Tarrito", 15);
INSERT INTO productos VALUES (DEFAULT, "Magnum", 25);
INSERT INTO productos VALUES (DEFAULT, "Tux", 9999);

SELECT * FROM productos;