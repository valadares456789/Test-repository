-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.5.62 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para producstest
CREATE DATABASE IF NOT EXISTS `producstest` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `producstest`;

-- Copiando estrutura para tabela producstest.products
CREATE TABLE IF NOT EXISTS `products` (
  `prod_ID` int(11) NOT NULL AUTO_INCREMENT,
  `prod_SDK` int(11) NOT NULL,
  `prod_NAME` varchar(255) NOT NULL,
  `prod_PRICE` varchar(255) NOT NULL DEFAULT '',
  `prod_SIZE` varchar(255) DEFAULT '',
  `prod_HEIGHT` varchar(255) DEFAULT '',
  `prod_WIDTH` varchar(255) DEFAULT '',
  `prod_LENGTH` varchar(255) DEFAULT '',
  `prod_WEIGHT` varchar(255) DEFAULT '',
  PRIMARY KEY (`prod_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
