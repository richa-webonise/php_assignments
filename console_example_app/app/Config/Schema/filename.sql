

DROP TABLE IF EXISTS `first_cakephp_db`.`posts`;


CREATE TABLE `first_cakephp_db`.`posts` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`title` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`body` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=latin1,
	COLLATE=latin1_swedish_ci,
	ENGINE=MyISAM;

