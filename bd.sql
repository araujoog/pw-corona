-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.11-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para corona_crud
CREATE DATABASE IF NOT EXISTS `corona_crud` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `corona_crud`;

-- Copiando estrutura para tabela corona_crud.pessoa
CREATE TABLE IF NOT EXISTS `pessoa` (
  `rg` int(9) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `sexo` varchar(11) DEFAULT NULL,
  `dtNasc` date DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `logradouro` varchar(60) DEFAULT NULL,
  `numPessoa` varchar(30) DEFAULT NULL,
  `resultado` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`rg`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela corona_crud.pessoa: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
INSERT INTO `pessoa` (`rg`, `nome`, `sexo`, `dtNasc`, `estado`, `logradouro`, `numPessoa`, `resultado`) VALUES
	(111111111, 'Normando Araújo', 'Masculino', '2020-06-10', 'São Paulo', 'Pariquera-Açú', '5', 'Positivo'),
	(111222444, 'Teste Update', 'Feminino', '2020-07-03', 'Acre', 'Lugar Nenhum', '2', 'Positivo'),
	(123123123, 'Davi Torres', 'Masculino', '2020-07-01', 'São Paulo', 'Pariquera-Açú', '5', 'Negativo');
/*!40000 ALTER TABLE `pessoa` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
