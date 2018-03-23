-- setup all tables and db
CREATE DATABASE blogtastic

DROP TABLE IF EXISTS 'article';
CREATE TABLE `article` (
    `article_id` int(5) NOT NULL auto_increment,
    `name` varchar(255) NOT NULL default ”,
    `title` varchar(255) NOT NULL default ”,
    `comments` text NOT NULL,
    `date_posted` date NOT NULL default ‘0000-00-00’,
    `categoryID` int(4) NOT NULL default ‘0’,
    `article_child` int(5) NOT NULL default ‘0’,
    PRIMARY KEY (`artid`)
) TYPE = MyISAM AUTO_INCREMENT = 30 ;

DROP TABLE IF EXISTS 'categories';
CREATE TABLE `categories` (
    `category_id` int(5) NOT NULL auto_increment,
    `category` varchar(255) NOT NULL default ”,
    PRIMARY KEY (`catid`)
) TYPE = MyISAM AUTO_INCREMENT = 3 ;