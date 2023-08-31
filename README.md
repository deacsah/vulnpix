# vulnpix
A basic vulnerable php/mysql web application for pentesting purposes. Don't put it on an internet facing server, obviously. 

## Installation
1. Dump the files onto a webserver (`public_html/` being the webroot)
2. Execute these queries:
```sql
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
```
3. Edit `index.php` to reflect the correct database settings

# Docker

Starting should be as simple as running:

```bash
docker compose up -d
```

To use different ports, change them in docker-compose.yml