-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 03 Août 2018 à 01:53
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `hajjsmartservice`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_type` longtext COLLATE utf8_unicode_ci NOT NULL,
  `username` longtext CHARACTER SET utf8 NOT NULL,
  `fname` longtext CHARACTER SET utf8 NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext COLLATE utf8_unicode_ci NOT NULL,
  `language` longtext COLLATE utf8_unicode_ci NOT NULL,
  `text_align` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email_code` longtext CHARACTER SET utf8 NOT NULL,
  `photo_extension` longtext CHARACTER SET utf8 NOT NULL,
  `font_type` longtext CHARACTER SET utf8 NOT NULL,
  `font_size` longtext CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` longtext CHARACTER SET utf8 NOT NULL,
  `email` longtext NOT NULL,
  `password` longtext NOT NULL,
  `language` longtext NOT NULL,
  `text_align` longtext NOT NULL,
  `photo_extension` longtext CHARACTER SET utf8 NOT NULL,
  `font_type` longtext CHARACTER SET utf8 NOT NULL,
  `font_size` longtext CHARACTER SET utf8 NOT NULL,
  `address` longtext NOT NULL,
  `phone` longtext NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` longtext CHARACTER SET utf8 NOT NULL,
  `email` longtext CHARACTER SET utf8 NOT NULL,
  `message` longtext CHARACTER SET utf8 NOT NULL,
  `fname` longtext CHARACTER SET utf8 NOT NULL,
  `lname` longtext CHARACTER SET utf8 NOT NULL,
  `contact_type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `devices`
--

CREATE TABLE IF NOT EXISTS `devices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` longtext CHARACTER SET utf8 NOT NULL,
  `level_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
  `email_id` int(11) NOT NULL AUTO_INCREMENT,
  `email_from` longtext CHARACTER SET utf8 NOT NULL,
  `email_to` longtext CHARACTER SET utf8 NOT NULL,
  `sender_level` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `date` longtext CHARACTER SET utf8 NOT NULL,
  `email_sub` longtext CHARACTER SET utf8 NOT NULL,
  `email_text` longtext CHARACTER SET utf8 NOT NULL,
  `email_msg` longtext CHARACTER SET utf8 NOT NULL,
  `sent` int(11) NOT NULL,
  `receiver_level` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `file` longtext CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `hospital_id` int(11) NOT NULL AUTO_INCREMENT,
  `hospital_type` longtext COLLATE utf8_unicode_ci NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext COLLATE utf8_unicode_ci NOT NULL,
  `language` longtext COLLATE utf8_unicode_ci NOT NULL,
  `text_align` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email_code` longtext CHARACTER SET utf8 NOT NULL,
  `photo_extension` longtext CHARACTER SET utf8 NOT NULL,
  `font_type` longtext CHARACTER SET utf8 NOT NULL,
  `font_size` longtext CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`hospital_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` longtext CHARACTER SET utf8 NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext COLLATE utf8_unicode_ci NOT NULL,
  `language` longtext COLLATE utf8_unicode_ci NOT NULL,
  `text_align` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email_code` longtext CHARACTER SET utf8 NOT NULL,
  `photo_extension` longtext CHARACTER SET utf8 NOT NULL,
  `font_type` longtext CHARACTER SET utf8 NOT NULL,
  `font_size` longtext CHARACTER SET utf8 NOT NULL,
  `logo` longtext COLLATE utf8_unicode_ci NOT NULL,
  `comercial_name` longtext CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `phrase_id` int(11) NOT NULL AUTO_INCREMENT,
  `phrase` longtext COLLATE utf8_unicode_ci NOT NULL,
  `english` longtext COLLATE utf8_unicode_ci NOT NULL,
  `arabic` longtext COLLATE utf8_unicode_ci NOT NULL,
  `french` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`phrase_id`),
  UNIQUE KEY `phrase_id` (`phrase_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `login_data`
--

CREATE TABLE IF NOT EXISTS `login_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `devise` longtext NOT NULL,
  `browser` longtext NOT NULL,
  `browser_version` longtext NOT NULL,
  `operating_system` longtext NOT NULL,
  `ip` longtext NOT NULL,
  `region` longtext NOT NULL,
  `city` longtext NOT NULL,
  `org` longtext NOT NULL,
  `country` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Contenu de la table `login_data`
--

INSERT INTO `login_data` (`id`, `level_id`, `user_id`, `devise`, `browser`, `browser_version`, `operating_system`, `ip`, `region`, `city`, `org`, `country`) VALUES
(67, 1, 1, 'Mobile', 'Google Chrome', '55.0.2883.', 'Linux', '', '', '', '', ''),
(68, 1, 1, 'Computer', 'Google Chrome', '56.0.2924.', 'Linux', '', '', '', '', ''),
(69, 1, 1, 'Computer', 'Google Chrome', '56.0.2924.', 'Linux', '', '', '', '', ''),
(70, 1, 1, 'Computer', 'Google Chrome', '57.0.2987.', 'Linux', '', '', '', '', ''),
(71, 1, 1, 'Computer', 'Google Chrome', '56.0.2924.', 'Linux', '', '', '', '', ''),
(72, 1, 1, 'Computer', 'Google Chrome', '57.0.2987.', 'Linux', '', '', '', '', ''),
(73, 1, 1, 'Computer', 'Google Chrome', '56.0.2924.', 'Linux', '', '', '', '', ''),
(74, 1, 1, 'Computer', 'Google Chrome', '57.0.2987.', 'Linux', '', '', '', '', ''),
(75, 1, 1, 'Computer', 'Google Chrome', '57.0.2987.', 'Linux', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message_thread_code` longtext NOT NULL,
  `message` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sender` longtext NOT NULL,
  `timestamp` longtext NOT NULL,
  `read_status` int(11) NOT NULL DEFAULT '0' COMMENT '0 unread 1 read',
  `reciever` varchar(10) NOT NULL,
  `sender_level` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciever_level` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `notif_song` int(11) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `message_thread`
--

CREATE TABLE IF NOT EXISTS `message_thread` (
  `message_thread_id` int(11) NOT NULL AUTO_INCREMENT,
  `message_thread_code` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sender` longtext COLLATE utf8_unicode_ci NOT NULL,
  `reciever` longtext COLLATE utf8_unicode_ci NOT NULL,
  `last_message_timestamp` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`message_thread_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `pharmacies`
--

CREATE TABLE IF NOT EXISTS `pharmacies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` longtext CHARACTER SET utf8 NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext COLLATE utf8_unicode_ci NOT NULL,
  `language` longtext COLLATE utf8_unicode_ci NOT NULL,
  `text_align` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email_code` longtext CHARACTER SET utf8 NOT NULL,
  `photo_extension` longtext CHARACTER SET utf8 NOT NULL,
  `font_type` longtext CHARACTER SET utf8 NOT NULL,
  `font_size` longtext CHARACTER SET utf8 NOT NULL,
  `logo` longtext COLLATE utf8_unicode_ci NOT NULL,
  `comercial_name` longtext CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `settings_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`settings_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Contenu de la table `settings`
--

INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES
(1, 'system_name', 'Hajj-Smart-service'),
(2, 'system_title', 'Hajj-Smart-service'),
(4, 'phone', '0553556185'),
(7, 'system_email', 'Hajj-Smart-service@gmail.com'),
(8, 'upload_limit_size', '3000000'),
(17, 'FIREBASE_API_KEY', 'AAAAejctthY:APA91bFHRMwMLSzqRX-x_iX6q5kSeURRleDSggo7AXmiZfcu_uUtQlWksrTxY8bUXvqCY69KdJhpZsz-XRzm_gjWh8lTmv4PJo7tbz1wySwjfE0qn2rIGPfZele75wDzRn6pIdc74X_c');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
