DROP DATABASE IF EXISTS sqlinj;
CREATE DATABASE sqlinj;
USE sqlinj;

CREATE TABLE users(
    id int AUTO_INCREMENT PRIMARY KEY,
    username varchar(50),
    passwd varchar(50),
    ruolo ENUM('admin', 'slave')
);

CREATE TABLE ordini(
    id int AUTO_INCREMENT PRIMARY KEY,
    intestatario varchar(50),
    prodotto varchar(50),
    quantita int
);

INSERT INTO users (username, passwd, ruolo) VALUES ('admin', 'admin', 'admin');

INSERT INTO ordini (intestatario, prodotto, quantita) VALUES ('Mario Rossi', 'Laptop', 1);
INSERT INTO ordini (intestatario, prodotto, quantita) VALUES ('Luca Bianchi', 'Smartphone', 2);
INSERT INTO ordini (intestatario, prodotto, quantita) VALUES ('Giulia Verdi', 'Tablet', 1);
INSERT INTO ordini (intestatario, prodotto, quantita) VALUES ('Anna Neri', 'Monitor', 2);
INSERT INTO ordini (intestatario, prodotto, quantita) VALUES ('Francesco Gialli', 'Stampante', 1);
INSERT INTO ordini (intestatario, prodotto, quantita) VALUES ('Elena Blu', 'Mouse', 5);
INSERT INTO ordini (intestatario, prodotto, quantita) VALUES ('Paolo Viola', 'Tastiera', 3);
INSERT INTO ordini (intestatario, prodotto, quantita) VALUES ('Sara Marrone', 'Cuffie', 4);
INSERT INTO ordini (intestatario, prodotto, quantita) VALUES ('Davide Rosa', 'Webcam', 1);
INSERT INTO ordini (intestatario, prodotto, quantita) VALUES ('Chiara Argento', 'Hard Disk', 2);

