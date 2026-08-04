CREATE TABLE `users` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `bestpassword` varchar(300) DEFAULT NULL,
  `coins` int(8) DEFAULT NULL,
  `age` int(8) DEFAULT NULL,
  `sleep` varchar(20) DEFAULT NULL,
  `exercise` varchar(20) DEFAULT NULL,
  `water` varchar(20) DEFAULT NULL,
  `screen` varchar(20) DEFAULT NULL,
  `avatar` varchar(20) DEFAULT NULL,
  `approved` int(11) DEFAULT NULL,
  `createdOn` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;