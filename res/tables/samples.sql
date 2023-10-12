SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `samples` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `createAt` datetime DEFAULT CURRENT_TIMESTAMP,
  `testId` varchar(255) NOT NULL,
  `testType` varchar(10) NOT NULL,
  `testName` varchar(255) NOT NULL,
  `testDescription` varchar(255) NOT NULL,
  `testResults` text,
  `testInCharge` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `shelf` varchar(255) NOT NULL,
  `custCompany` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `custName` varchar(255) NOT NULL,
  `custSurname` varchar(255) NOT NULL,
  `custSex` varchar(255) NOT NULL,
  `custCompany` varchar(255) NOT NULL,
  `custCell` varchar(255) NOT NULL,
  `sampleId` varchar(255) NOT NULL,
  `sampleType` varchar(10) NOT NULL,
  `testResults` text,
  `createAt` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
  /*FOREIGN KEY (custCompany) REFERENCEs samples(custCompany),*/
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;