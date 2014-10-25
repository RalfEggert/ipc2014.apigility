SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;

START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Users Table' AUTO_INCREMENT=8 ;

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`) VALUES
(1, 'Ralf', 'Eggert', 'ralf@travello.com', ''),
(2, 'Horst', 'Tester', 'horst@tester.de', ''),
(3, 'Peter', 'Lustig', 'peter@lustig.de', ''),
(4, 'Manfred', 'Mustermann', 'manfred@mustermann.de', ''),
(5, 'Flitz', 'Piepe', 'flitz@piepe.de', ''),
(6, 'Peter', 'Alexander', 'peter@alexander.de', ''),
(7, 'Peter', 'Petersen', 'peter@petersen.de', '');

DROP TABLE IF EXISTS `user_contacts`;
CREATE TABLE IF NOT EXISTS `user_contacts` (
  `user_id_1` smallint(5) unsigned NOT NULL,
  `user_id_2` smallint(5) unsigned NOT NULL,
  UNIQUE KEY `user_id_1` (`user_id_1`,`user_id_2`),
  KEY `user_id_2` (`user_id_2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='User Contacts Table';

INSERT INTO `user_contacts` (`user_id_1`, `user_id_2`) VALUES
(2, 1),
(6, 1),
(7, 1),
(1, 2),
(5, 2),
(1, 3),
(2, 3),
(5, 3),
(1, 4),
(2, 4),
(2, 5),
(4, 5),
(1, 6),
(3, 6),
(7, 6),
(1, 7);

DROP TABLE IF EXISTS `user_websites`;
CREATE TABLE IF NOT EXISTS `user_websites` (
  `user_id` smallint(5) unsigned NOT NULL,
  `website_id` smallint(5) unsigned NOT NULL,
  UNIQUE KEY `user_id` (`user_id`,`website_id`),
  KEY `website_id` (`website_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User Websites Table';

INSERT INTO `user_websites` (`user_id`, `website_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

DROP TABLE IF EXISTS `websites`;
CREATE TABLE IF NOT EXISTS `websites` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Websites Table' AUTO_INCREMENT=6 ;

--
-- Daten für Tabelle `websites`
--

INSERT INTO `websites` (`id`, `url`) VALUES
(1, 'http://de.travello.com'),
(2, 'http://www.tester.de'),
(3, 'http://www.lustig.de'),
(4, 'http://www.mustermann.de'),
(5, 'http://www.piepe.de');

SET FOREIGN_KEY_CHECKS=1;

COMMIT;
