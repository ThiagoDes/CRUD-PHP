-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para universidade
CREATE DATABASE IF NOT EXISTS `universidade` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `universidade`;

-- Copiando estrutura para tabela universidade.estudante
CREATE TABLE IF NOT EXISTS `estudante` (
  `RA` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Pessoa_idPessoa` int(11) NOT NULL,
  `Replubica_idReplubica` int(11) NOT NULL,
  PRIMARY KEY (`RA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela universidade.fonepessoa
CREATE TABLE IF NOT EXISTS `fonepessoa` (
  `idPessoa` int(11) NOT NULL,
  `DDD` varchar(3) NOT NULL,
  `Prefixo` varchar(4) NOT NULL,
  `Nro` varchar(4) NOT NULL,
  PRIMARY KEY (`idPessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela universidade.pessoa
CREATE TABLE IF NOT EXISTS `pessoa` (
  `IdPessoa` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Nome` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Endereco` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`IdPessoa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela universidade.replubica
CREATE TABLE IF NOT EXISTS `replubica` (
  `IdRep` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) DEFAULT NULL,
  `endereco` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`IdRep`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
