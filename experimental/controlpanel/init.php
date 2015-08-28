<?php
CREATE TABLE `CatsUnited_main`.`members` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(30) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `password` CHAR(128) NOT NULL,
    `salt` CHAR(128) NOT NULL
)    ENGINE = InnoDB;
CREATE TABLE `CatsUnited_main`.`log_attempts` (
    `user_id` INT(11) NOT NULL,
    `time` VARCHAR(30) NOT NULL
)   ENGINE=InnoDB;
CREATE TABLE `CatsUnited_main`.`projects` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `project_name` CHAR(128) NOT NULL,
  `content` CHAR(131072)
  `extension_name` CHAR(128) NOT NULL
) ENGINE = InnoDB;
CREATE TABLE `CatsUnited_main`.`news` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `title` CHAR(128) NOT NULL,
  `content` CHAR(131072) NOT NULL
) ENGINE = InnoDB;
INSERT INTO `CatsUnited_main`.`members` VALUES(1, 'CatsUnited', 'CENSORED',
'CENSORED','CENSORED');
echo'meow';
?>
