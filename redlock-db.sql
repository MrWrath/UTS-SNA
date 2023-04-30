CREATE DATABASE redlock;
USE redlock;

CREATE TABLE users (
  ID INT PRIMARY KEY NOT NULL,
  Nama VARCHAR(50) NOT NULL,
  Alamat VARCHAR(50) NOT NULL,
  Jabatan VARCHAR(50) NOT NULL
);

INSERT INTO users VALUES
(1, "Felix", "Jalan Barata I No.2", "Mahasiswa"),
(2, "Rafael", "Jalan Mangga Besar II No.2", "Dosen"),
(3, "Junio", "Jalan Pademangan III No.8", "Pegawai");
