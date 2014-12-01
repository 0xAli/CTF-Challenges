
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `IP` varchar(15) NOT NULL,
  `time` varchar(30) NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(180) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

INSERT INTO `hackme`.`users` (`id`, `name`, `email`, `password`) VALUES ('1', '7amamaberg', '7amamaberg@facebook.com', '123sd9a7tsy7d82hdid');