CREATE DATABASE futebol_db;

USE futebol_db;

CREATE TABLE timis(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(120) NOT NULL UNIQUE,
    cidade VARCHAR(120)
);

CREATE TABLE jogadores(
    id INT AUTO_INCREMENT PRIMARY KEY,
    time_id INT NOT NULL,
    nome VARCHAR(120) NOT NULL,
    posicao ENUM('GOL', 'ZAG', 'LAT', 'VOL', 'MEI', 'ATA', 'PON') NOT NULL,
    numero_camisa INT NOT NULL,
    CONSTRAINT fk_jog_time FOREING KEY (time_id) REFERENCES timis(id)
);

CREATE TABLE partidas(
    id INT AUTO_INCREMENT PRIMARY KEY,
    data_partida DATE NOT NULL,
    visitante_id INT NOT NULL,
    mandante_id INT NOT NULL,
    gols_mandantes INT DEFAULT 0,
    gols_visitante INT DEFAULT 0,

    CONSTRAINT fk_par_mand FOREING KEY (mandante_id) REFERENCES timis(id),
    CONSTRAINT fk_par_vis FOREING KEY (visitante_id) REFERENCES timis(id)
);