-- setup all tables and db
DROP DATABASE IF EXISTS blogtastic;
CREATE DATABASE blogtastic;
USE blogtastic;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
    id int(11) AUTO_INCREMENT PRIMARY KEY,
    username varchar(40) NOT NULL,
    pass varchar(40) NOT NULL,
    UNIQUE(id)
);

DROP TABLE IF EXISTS list;
CREATE TABLE users (
    id int(11) AUTO_INCREMENT PRIMARY KEY,
    details text NOT NULL,
    date_posted varchar(30) NOT NULL,
    time_posted Time NOT NULL,
    date_edited varchar(30) NOT NULL,
    time_edited time NOT NULL,
    public varchar(5) NOT NULL,
    UNIQUE(id)
);

