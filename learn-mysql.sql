Query Type
	DDL - Definition (  Database, Table, Column )
	DCL - Control ( Account )
	DML - Manipulation ( Record CRUD )

-- DDL - Data Definition Language --

CREATE DATABASE `db-name`;

SHOW DATABASES;

USE `db-name`;

SHOW TABLES;

EXPLAIN `table-name`;

DESCRIBE `table-name`;

SHOW COLUMNS FROM `table-name`;

CREATE TABLE `post` (
	`id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`title` VARCHAR(50) NOT NULL,
	`content` TEXT NOT NULL,
	`author` VARCHAR(50) NOT NULL
	);

DROP TABLE `post`;

DROP DATABASE IF EXISTS `db-name`;


-- DML - Data Manipulation Language --

INSERT INTO `post` (`title`, `content`, `author`) 
VALUES ('Hello World 2', 'This is Hello World 2', 'John Reginald');

SELECT * FROM `post`;

SELECT * FROM `post` WHERE `id` = 1;

SELECT `title` FROM `post` WHERE `id` = 1;

UPDATE `post`
SET `title` = 'Hello World 1', `content` = 'This is Hello World 1'
WHERE `id` = 8;

DELETE FROM `post` WHERE `id` = 1;

DELETE FROM `post`;


-- DCL - Data Control Language --

CREATE USER 'john'@'%' IDENTIFIED BY '1234';

SET PASSWORD FOR 'john'@'%' = PASSWORD('1234');

DROP USER 'john'@'%';

-- ON DATABASE.TABLE --
GRANT ALL PRIVILEGES ON `testdb`.* TO 'john'@'%';

GRANT ALL PRIVILEGES ON *.* TO 'root'@'%';
GRANT ALL PRIVILEGES ON `testdb`.* TO 'root'@'192.168.1.1';
GRANT ALL PRIVILEGES ON *.* TO 'john'@'%' WITH GRANT OPTION;

REVOKE ALL PRIVILEGES, GRANT OPTION ON *.* FROM 'john'@'%';
REVOKE ALL PRIVILEGES ON *.* FROM 'root'@'%';

FLUSH PRIVILEGES;

mysql -u john -p -h 192.168.1.1

mysqldump -u root -p > backup.sql

mysqldump -u root -p testdb > backup.sql

mysql -u root -p < backup.sql

mysql -u root -p testdb < backup.sql

-- REFERENCE : http://dev.mysql.com/doc/ --