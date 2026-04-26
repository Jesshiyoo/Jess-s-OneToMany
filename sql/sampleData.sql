create table developer(
    devID int auto_increment primary key,
    devName VARCHAR(100) not null,
    experience int NOT NULL,
    specialization VARCHAR(50) not null
);

create table game(
    gameID int auto_increment primary key,
    devID int,
    gameTitle VARCHAR(100) not null,
    genre VARCHAR(50) not null,
    releaseYear INT,
    Foreign Key (devID) REFERENCES developer(devID)
);  