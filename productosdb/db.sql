DROP DATABASE IF EXISTS tienda;
CREATE DATABASE tienda;
USE tienda;

CREATE TABLE producto (
  producto INTEGER PRIMARY KEY AUTO_INCREMENT,
  nombre TEXT NOT NULL,
  precio DOUBLE NOT NULL
);

INSERT INTO producto VALUES(DEFAULT, "Sabritas", 20);
INSERT INTO producto VALUES(DEFAULT, "Bubulubu", 10);
INSERT INTO producto VALUES(DEFAULT, "Ruffles", 25);
INSERT INTO producto VALUES(DEFAULT, "Takis", 15);
INSERT INTO producto VALUES(DEFAULT, "Cacahuates", 17);
INSERT INTO producto VALUES(DEFAULT, "Chocorroles", 20);
INSERT INTO producto VALUES(DEFAULT, "Gansito", 25);
INSERT INTO producto VALUES(DEFAULT, "Coca-cola", 37);
INSERT INTO producto VALUES(DEFAULT, "Red-Cola", 13);
INSERT INTO producto VALUES(DEFAULT, "Pepsi-Cola", 24);
INSERT INTO producto VALUES(DEFAULT, "Tarrito", 4);

SELECT * FROM producto;