CREATE DATABASE jdi CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE jdi;

CREATE TABLE `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `folder_id` INT(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(1000),
  `size` int(11) NOT NULL,
  `created_time` DATETIME NOT NULL,
  `modified_time` DATETIME,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE `folders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11),
  `name` varchar(255) NOT NULL,
  `created_time` DATETIME NOT NULL,
  `path` varchar(1000),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

ALTER TABLE files
ADD CONSTRAINT FK_files_to_folders
FOREIGN KEY (folder_id) REFERENCES folders(id)
ON UPDATE CASCADE
ON DELETE CASCADE;

ALTER TABLE folders
ADD CONSTRAINT FK_folders_to_parent_folders
FOREIGN KEY (parent_id) REFERENCES folders(id)
ON UPDATE RESTRICT
ON DELETE CASCADE;


