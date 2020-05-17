CREATE DATABASE `db_oop`;

CREATE TABLE IF NOT EXISTS `tbl_jbtn` (
    `id_jbtn` INT(5) NOT NULL AUTO_INCREMENT,
    `nama_jbtn` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`id_jbtn`)
);

CREATE TABLE IF NOT EXISTS `tbl_pegawai`(
    `id_pegawai` INT(5) NOT NULL,
    `nama_pegawai` VARCHAR(100) NOT NULL,
    `jk` ENUM('L','P') NULL,
    `tgl_lahir` DATE NULL,
    `id_jbtn` INT(5) NULL,
    `foto` VARCHAR(100) NULL,
    `ket` TEXT NULL,
    PRIMARY KEY(`id_pegawai`)
);