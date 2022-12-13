
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
DROP DATABASE IF EXISTS `login_data`;
CREATE DATABASE `login_data`;

CREATE TABLE `users` (
  `id` int NOT NULL auto_increment,
  `account` varchar(35) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `name_users` varchar(30) DEFAULT NULL,
  `gioitinh` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

  
INSERT INTO `users` (`id`, `account`, `password`, `name_users`, `gioitinh`) VALUES
('1', 'account1', '1234', 'Chinh', 'nam'),
('2', 'account2', '1234', 'Duc Anh', 'nam'),
('3', 'account3', '1234', 'Dat', 'nam');

