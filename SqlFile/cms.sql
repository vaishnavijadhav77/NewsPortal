-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 08, 2020 at 08:30 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

DROP TABLE IF EXISTS `ads`;
CREATE TABLE IF NOT EXISTS `ads` (
  `id` text NOT NULL,
  `title` varchar(600) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `title`, `image`, `date`) VALUES
('5da6d7251197d', 'पथनाट्याच्या माध्यमातून संमेलनाचा जागर', 'images.jpg', '2019-10-16'),
('5da6d743086c5', 'fgh', '20150822_110402.jpg', '2019-10-16');

-- --------------------------------------------------------

--
-- Table structure for table `agriculture_post`
--

DROP TABLE IF EXISTS `agriculture_post`;
CREATE TABLE IF NOT EXISTS `agriculture_post` (
  `id` text NOT NULL,
  `title` varchar(600) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(500) NOT NULL,
  `content` text CHARACTER SET utf8,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `agriculture_video`
--

DROP TABLE IF EXISTS `agriculture_video`;
CREATE TABLE IF NOT EXISTS `agriculture_video` (
  `id` text NOT NULL,
  `title` varchar(600) CHARACTER SET utf8 DEFAULT NULL,
  `link` varchar(500) NOT NULL,
  `descr` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commertial_post`
--

DROP TABLE IF EXISTS `commertial_post`;
CREATE TABLE IF NOT EXISTS `commertial_post` (
  `id` text NOT NULL,
  `title` varchar(600) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(500) NOT NULL,
  `content` text CHARACTER SET utf8,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commertial_video`
--

DROP TABLE IF EXISTS `commertial_video`;
CREATE TABLE IF NOT EXISTS `commertial_video` (
  `id` text NOT NULL,
  `title` varchar(600) CHARACTER SET utf8 DEFAULT NULL,
  `link` varchar(500) NOT NULL,
  `descr` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `crime_post`
--

DROP TABLE IF EXISTS `crime_post`;
CREATE TABLE IF NOT EXISTS `crime_post` (
  `id` text NOT NULL,
  `title` varchar(600) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(500) NOT NULL,
  `content` text CHARACTER SET utf8,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crime_post`
--

INSERT INTO `crime_post` (`id`, `title`, `image`, `content`, `date`) VALUES
('5d7d30bb4b53e', 'पथनाट्याच्या माध्यमातून संमेलनाचा जागर', 'a.jpg', 'news post..............', '2019-09-14');

-- --------------------------------------------------------

--
-- Table structure for table `crime_video`
--

DROP TABLE IF EXISTS `crime_video`;
CREATE TABLE IF NOT EXISTS `crime_video` (
  `id` text NOT NULL,
  `title` varchar(600) CHARACTER SET utf8 DEFAULT NULL,
  `link` varchar(500) NOT NULL,
  `descr` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `entertainment_post`
--

DROP TABLE IF EXISTS `entertainment_post`;
CREATE TABLE IF NOT EXISTS `entertainment_post` (
  `id` text NOT NULL,
  `title` varchar(600) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(500) NOT NULL,
  `content` text CHARACTER SET utf8,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entertainment_post`
--

INSERT INTO `entertainment_post` (`id`, `title`, `image`, `content`, `date`) VALUES
('5c0f3173e0133', 'dcfvbnm', 'uv-creations-brings-good-news-for-prabhas-fans_201812168303.jpg', 'fvgbnm', '2018-12-11'),
('5c0f4d447c779', 'भाजपच्या विजयरथाला ध', 'modi.jpg', 'गेल्या डिसेंबरमध्ये राहुल गांधी यांनी काँग्रेसच्या अध्यक्षपदाची सूत्रे अधिकृतरित्या स्वीकारली. त्यानंतर प्रथमच निवडणुकीमध्ये 24 अकबर रोड येथे जल्लोष सुरू झाला आहे. सकाळी मतमोजणीच्या पहिल्या तासाभरात काँग्रेसला पाचही राज्यांमध्ये आघाडी मिळाली होती. तेव्हापासून काँग्रेसच्या कार्यकर्त्यांचा जल्लोष सुरू झाला होता; तर दुसरीकडे भाजपच्या गोटात तुलनेने सामसूम आहे. \r\n\r\nतेलंगणामध्येही काँग्रेसने सुरवातीला आघाडी घेतली होती. मात्र, टीआरएसने पुढील तासाभरात मुसंडी मारत पुन्हा सत्ता स्थापनेच्या जवळ मजल मारली. सकाळी दहापर्यंतच्या कौलांनुसार, तेलंगणामध्ये टीआरएसने 76 जागांवर आघाडी घेतली आहे. येथे काँग्रेसला 30, तर भाजपला तीन जागा मिळाल्या आहेत. \r\n\r\nमध्य प्रदेशमध्ये भाजपला 109, काँग्रसला 108, तर इतरांना 13 जागांवर आघाडी आहे. छत्तीसगडमध्ये काँग्रेसमध्ये 58, भाजपला 23 आणि इतरांना नऊ जागांवर आघाडी मिळाली आहेत. राजस्थानमध्ये काँग्रेस 98, भाजप 79 तर इतरांना 17 जागांवर आघाडी आहे. ', '2018-12-11'),
('5c0f4d96c7754', 'तेलंगणामध्येही काँग्रेसने सुरवातीला आघाडी घेतली होती. मात्र, टीआरएसने पुढील तासाभरात मुसंडी ', 'ajit-jogi-21_201811157990.jpg', 'गेल्या डिसेंबरमध्ये राहुल गांधी यांनी काँग्रेसच्या अध्यक्षपदाची सूत्रे अधिकृतरित्या स्वीकारली. त्यानंतर प्रथमच निवडणुकीमध्ये 24 अकबर रोड येथे जल्लोष सुरू झाला आहे. सकाळी मतमोजणीच्या पहिल्या तासाभरात काँग्रेसला पाचही राज्यांमध्ये आघाडी मिळाली होती. तेव्हापासून काँग्रेसच्या कार्यकर्त्यांचा जल्लोष सुरू झाला होता; तर दुसरीकडे भाजपच्या गोटात तुलनेने सामसूम आहे. \r\n\r\nतेलंगणामध्येही काँग्रेसने सुरवातीला आघाडी घेतली होती. मात्र, टीआरएसने पुढील तासाभरात मुसंडी मारत पुन्हा सत्ता स्थापनेच्या जवळ मजल मारली. सकाळी दहापर्यंतच्या कौलांनुसार, तेलंगणामध्ये टीआरएसने 76 जागांवर आघाडी घेतली आहे. येथे काँग्रेसला 30, तर भाजपला तीन जागा मिळाल्या आहेत. \r\n\r\nमध्य प्रदेशमध्ये भाजपला 109, काँग्रसला 108, तर इतरांना 13 जागांवर आघाडी आहे. छत्तीसगडमध्ये काँग्रेसमध्ये 58, भाजपला 23 आणि इतरांना नऊ जागांवर आघाडी मिळाली आहेत. राजस्थानमध्ये काँग्रेस 98, भाजप 79 तर इतरांना 17 जागांवर आघाडी आहे .\r\nगेल्या डिसेंबरमध्ये राहुल गांधी यांनी काँग्रेसच्या अध्यक्षपदाची सूत्रे अधिकृतरित्या स्वीकारली. त्यानंतर प्रथमच निवडणुकीमध्ये 24 अकबर रोड येथे जल्लोष सुरू झाला आहे. सकाळी मतमोजणीच्या पहिल्या तासाभरात काँग्रेसला पाचही राज्यांमध्ये आघाडी मिळाली होती. तेव्हापासून काँग्रेसच्या कार्यकर्त्यांचा जल्लोष सुरू झाला होता; तर दुसरीकडे भाजपच्या गोटात तुलनेने सामसूम आहे. \r\n\r\nतेलंगणामध्येही काँग्रेसने सुरवातीला आघाडी घेतली होती. मात्र, टीआरएसने पुढील तासाभरात मुसंडी मारत पुन्हा सत्ता स्थापनेच्या जवळ मजल मारली. सकाळी दहापर्यंतच्या कौलांनुसार, तेलंगणामध्ये टीआरएसने 76 जागांवर आघाडी घेतली आहे. येथे काँग्रेसला 30, तर भाजपला तीन जागा मिळाल्या आहेत. \r\n\r\nमध्य प्रदेशमध्ये भाजपला 109, काँग्रसला 108, तर इतरांना 13 जागांवर आघाडी आहे. छत्तीसगडमध्ये काँग्रेसमध्ये 58, भाजपला 23 आणि इतरांना नऊ जागांवर आघाडी मिळाली आहेत. राजस्थानमध्ये काँग्रेस 98, भाजप 79 तर इतरांना 17 जागांवर आघाडी आहे ', '2018-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `entertainment_video`
--

DROP TABLE IF EXISTS `entertainment_video`;
CREATE TABLE IF NOT EXISTS `entertainment_video` (
  `id` text NOT NULL,
  `title` varchar(600) CHARACTER SET utf8 DEFAULT NULL,
  `link` varchar(500) NOT NULL,
  `descr` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `health_post`
--

DROP TABLE IF EXISTS `health_post`;
CREATE TABLE IF NOT EXISTS `health_post` (
  `id` text NOT NULL,
  `title` varchar(600) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(500) NOT NULL,
  `content` text CHARACTER SET utf8,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `health_video`
--

DROP TABLE IF EXISTS `health_video`;
CREATE TABLE IF NOT EXISTS `health_video` (
  `id` text NOT NULL,
  `title` varchar(600) CHARACTER SET utf8 DEFAULT NULL,
  `link` varchar(500) NOT NULL,
  `descr` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `polytics_post`
--

DROP TABLE IF EXISTS `polytics_post`;
CREATE TABLE IF NOT EXISTS `polytics_post` (
  `id` text NOT NULL,
  `title` varchar(600) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(500) NOT NULL,
  `content` text CHARACTER SET utf8,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `polytics_post`
--

INSERT INTO `polytics_post` (`id`, `title`, `image`, `content`, `date`) VALUES
('5c0f629b12ad6', 'भाजपच्या विजयरथाला धक्का; छत्तीसगड, राजस्थान गमावले ', 'aagri_201811155242.jpg', 'गेल्या डिसेंबरमध्ये राहुल गांधी यांनी काँग्रेसच्या अध्यक्षपदाची सूत्रे अधिकृतरित्या स्वीकारली. त्यानंतर प्रथमच निवडणुकीमध्ये 24 अकबर रोड येथे जल्लोष सुरू झाला आहे. सकाळी मतमोजणीच्या पहिल्या तासाभरात काँग्रेसला पाचही राज्यांमध्ये आघाडी मिळाली होती. तेव्हापासून काँग्रेसच्या कार्यकर्त्यांचा जल्लोष सुरू झाला होता; तर दुसरीकडे भाजपच्या गोटात तुलनेने सामसूम आहे. \r\n\r\nतेलंगणामध्येही काँग्रेसने सुरवातीला आघाडी घेतली होती. मात्र, टीआरएसने पुढील तासाभरात मुसंडी मारत पुन्हा सत्ता स्थापनेच्या जवळ मजल मारली. सकाळी दहापर्यंतच्या कौलांनुसार, तेलंगणामध्ये टीआरएसने 76 जागांवर आघाडी घेतली आहे. येथे काँग्रेसला 30, तर भाजपला तीन जागा मिळाल्या आहेत. \r\n\r\nमध्य प्रदेशमध्ये भाजपला 109, काँग्रसला 108, तर इतरांना 13 जागांवर आघाडी आहे. छत्तीसगडमध्ये काँग्रेसमध्ये 58, भाजपला 23 आणि इतरांना नऊ जागांवर आघाडी मिळाली आहेत. राजस्थानमध्ये काँग्रेस 98, भाजप 79 तर इतरांना 17 जागांवर आघाडी आहे गेल्या डिसेंबरमध्ये राहुल गांधी यांनी काँग्रेसच्या अध्यक्षपदाची सूत्रे अधिकृतरित्या स्वीकारली. त्यानंतर प्रथमच निवडणुकीमध्ये 24 अकबर रोड येथे जल्लोष सुरू झाला आहे. सकाळी मतमोजणीच्या पहिल्या तासाभरात काँग्रेसला पाचही राज्यांमध्ये आघाडी मिळाली होती. तेव्हापासून काँग्रेसच्या कार्यकर्त्यांचा जल्लोष सुरू झाला होता; तर दुसरीकडे भाजपच्या गोटात तुलनेने सामसूम आहे. \r\n\r\nतेलंगणामध्येही काँग्रेसने सुरवातीला आघाडी घेतली होती. मात्र, टीआरएसने पुढील तासाभरात मुसंडी मारत पुन्हा सत्ता स्थापनेच्या जवळ मजल मारली. सकाळी दहापर्यंतच्या कौलांनुसार, तेलंगणामध्ये टीआरएसने 76 जागांवर आघाडी घेतली आहे. येथे काँग्रेसला 30, तर भाजपला तीन जागा मिळाल्या आहेत. \r\n\r\nमध्य प्रदेशमध्ये भाजपला 109, काँग्रसला 108, तर इतरांना 13 जागांवर आघाडी आहे. छत्तीसगडमध्ये काँग्रेसमध्ये 58, भाजपला 23 आणि इतरांना नऊ जागांवर आघाडी मिळाली आहेत. राजस्थानमध्ये काँग्रेस 98, भाजप 79 तर इतरांना 17 जागांवर आघाडी आहे ', '2018-12-11'),
('5da6d5a3b11d9', 'a', 'images.jpg', 'z', '2019-10-16'),
('5e3f15c9d0628', 'b', '52b330ba8dfa5ae14e733abbddc3bf6e.png', 'bc', '2020-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `polytics_video`
--

DROP TABLE IF EXISTS `polytics_video`;
CREATE TABLE IF NOT EXISTS `polytics_video` (
  `id` text NOT NULL,
  `title` varchar(600) CHARACTER SET utf8 DEFAULT NULL,
  `link` varchar(500) NOT NULL,
  `descr` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `polytics_video`
--

INSERT INTO `polytics_video` (`id`, `title`, `link`, `descr`, `date`) VALUES
('5e111969df00d', 'b', 'https://www.youtube.com/watch?v=0eWrpsCLMJQ&list=PLC3y8-rFHvwhBRAgFinJR8KHIrCdTkZcZ', 'b', '2020-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `realestate_post`
--

DROP TABLE IF EXISTS `realestate_post`;
CREATE TABLE IF NOT EXISTS `realestate_post` (
  `id` text NOT NULL,
  `title` varchar(600) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(500) NOT NULL,
  `content` text CHARACTER SET utf8,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `realestate_video`
--

DROP TABLE IF EXISTS `realestate_video`;
CREATE TABLE IF NOT EXISTS `realestate_video` (
  `id` text NOT NULL,
  `title` varchar(600) CHARACTER SET utf8 DEFAULT NULL,
  `link` varchar(500) NOT NULL,
  `descr` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `viral_post`
--

DROP TABLE IF EXISTS `viral_post`;
CREATE TABLE IF NOT EXISTS `viral_post` (
  `id` text NOT NULL,
  `title` varchar(600) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(500) NOT NULL,
  `content` text CHARACTER SET utf8,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `viral_video`
--

DROP TABLE IF EXISTS `viral_video`;
CREATE TABLE IF NOT EXISTS `viral_video` (
  `id` text NOT NULL,
  `title` varchar(600) CHARACTER SET utf8 DEFAULT NULL,
  `link` varchar(500) NOT NULL,
  `descr` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
