CREATE DATABASE review_db2;

USE review_db2;

CREATE TABLE reviews (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nama_pengulas VARCHAR(255) NOT NULL,
    rating_bintang TINYINT(1) NOT NULL,
    teks_ulasan TEXT NOT NULL,
    topik_utama VARCHAR(255) NOT NULL,
    sentimen ENUM('Positif', 'Negatif', 'Netral') NOT NULL,
    nama_cafe VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);
