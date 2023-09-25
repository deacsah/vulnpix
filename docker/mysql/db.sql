CREATE DATABASE `vulnpix`;

USE `vulnpix`;

CREATE TABLE `user` (
`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
`username` varchar(32) DEFAULT NULL,
`password` varchar(32) DEFAULT NULL,
`admin` varchar(32) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO user (id, username, password, admin)
VALUES (NULL, 'admin', 'password', 'yes'),
(NULL, 'user1', '123456', 'no'),
(NULL, 'user2', 'asdf', 'no');