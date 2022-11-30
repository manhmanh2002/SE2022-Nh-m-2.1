
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
DROP DATABASE IF EXISTS `login_data`;
CREATE DATABASE `login_data`;

CREATE TABLE `users` (
  `id` varchar(10) NOT NULL,
  `account` varchar(35) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `name_users` varchar(30) DEFAULT NULL,
  `gioitinh` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

  
INSERT INTO `users` (`id`, `account`, `password`, `name_users`, `gioitinh`) VALUES
('ID01', 'account1', '1234', 'Chinh', 'nam'),
('ID02', 'account2', '1234', 'Duc Anh', 'nam'),
('ID03', 'account3', '1234', 'Dat', 'nam');

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

///abccccc
////bvbvbvbvbvbvbvvbvb
//vnvnvv
