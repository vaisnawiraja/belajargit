CREATE DATABASE IF NOT EXISTS sistem_pelajar;
USE sistem_pelajar;

CREATE TABLE pengguna (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(255)
);

INSERT INTO pengguna (username, password) VALUES ('admin', MD5('admin123'));

CREATE TABLE pelajar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    ic VARCHAR(20),
    kursus VARCHAR(100)
);
sistem_pelajar