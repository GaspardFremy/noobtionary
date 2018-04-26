# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Hôte: 127.0.0.1 (MySQL 5.6.38)
# Base de données: noobtionary
# Temps de génération: 2018-04-26 21:56:40 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Affichage de la table comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `authorID` int(11) DEFAULT NULL,
  `content` text,
  `definitionID` int(11) DEFAULT NULL,
  `ranking` int(11) DEFAULT NULL,
  `totalUpvotes` int(11) DEFAULT NULL,
  `totalDownvotes` int(11) DEFAULT NULL,
  `createdDate` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;

INSERT INTO `comments` (`id`, `authorID`, `content`, `definitionID`, `ranking`, `totalUpvotes`, `totalDownvotes`, `createdDate`)
VALUES
	(2,2,'This is a great comment. Very usefull !',4,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table definitions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `definitions`;

CREATE TABLE `definitions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `authorID` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `synonym` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT NULL,
  `ranking` int(11) DEFAULT NULL,
  `totalUpvotes` int(11) DEFAULT NULL,
  `totalDownvotes` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `definitions` WRITE;
/*!40000 ALTER TABLE `definitions` DISABLE KEYS */;

INSERT INTO `definitions` (`id`, `authorID`, `title`, `content`, `synonym`, `creationDate`, `ranking`, `totalUpvotes`, `totalDownvotes`)
VALUES
	(1,1,'RESTful API','REST technology is generally preferred to the more robust Simple Object Access Protocol (SOAP) technology because REST leverages less bandwidth, making it more suitable for internet usage. \n\nAn API for a website is code that allows two software programs to communicate with each another. The API spells out the proper way for a developer to write a program requesting services from an operating system or other application. \n\nThe REST used by browsers can be thought of as the language of the internet. With cloud use on the rise, APIs are emerging to expose web services. REST is a logical choice for building APIs that allow users to connect and interact with cloud services. RESTful APIs are used by such sites as Amazon, Google, LinkedIn and Twitter.','kjn','2018-04-02 21:57:22',1,2,1),
	(4,2,'Design Pattern','REST technology is generally preferred to the more robust Simple Object Access Protocol (SOAP) technology because REST leverages less bandwidth, making it more suitable for internet usage. \n\nAn API for a website is code that allows two software programs to communicate with each another. The API spells out the proper way for a developer to write a program requesting services from an operating system or other application. \n\nThe REST used by browsers can be thought of as the language of the internet. With cloud use on the rise, APIs are emerging to expose web services. REST is a logical choice for building APIs that allow users to connect and interact with cloud services. RESTful APIs are used by such sites as Amazon, Google, LinkedIn and Twitter.','kjn','2018-04-07 21:57:22',0,2,2),
	(5,2,'Lint','REST technology is generally preferred to the more robust  Simple Object Access Protocol (SOAP) technology because REST leverages less bandwidth, making it more suitable for internet usage. \r\n\r\nAn API for a website is code that allows two software programs to communicate with each another. The API spells out the proper way for a developer to write a program requesting services from an operating system or other application. \r\n\r\nThe REST used by browsers can be thought of as the language of the internet. With cloud use on the rise, APIs are emerging to expose web services. REST is a logical choice for building APIs that allow users to connect and interact with cloud services. RESTful APIs are used by such sites as Amazon, Google, LinkedIn and Twitter.','kjn','2018-04-09 21:57:22',0,2,2),
	(12,2,'Content Delivery Network','A   content delivery network or content distribution network (CDN) is a geographically distributed network of proxy servers and their data centers. The goal is to distribute service spatially relative to end-users to provide high availability and high performance. CDNs serve a large portion of the Internet content today, including web objects (text, graphics and scripts), downloadable objects (media files, software, documents), applications (e-commerce, portals), live streaming media, on-demand streaming media, and social networks.','CDN','2018-04-13 19:16:18',0,2,2),
	(19,6,'DevOps','DevOps is the offspring of agile software development – born from the need to keep up with the increased software velocity and throughput agile methods have achieved. Advancements in agile culture and methods over the last decade exposed the need for a more holistic approach to the end-to-end software delivery lifecycle.','CALMS','2018-04-16 12:51:35',2,2,0),
	(20,6,'Agile Development ','Agile Development is an umbrella term for several iterative and incremental software development methodologies. The most popular agile methodologies include Scrum, Kanban, Scaled Agile Framework® (SAFe®), Lean Development and Extreme Programming (XP).','Lean Development','2018-04-16 12:52:43',1,2,1),
	(21,7,'HTTPS','Stands for \"HyperText Transport Protocol Secure.\" HTTPS is the same thing as HTTP, but uses a secure socket layer (SSL) for security purposes. Some examples of sites that use HTTPS include banking and investment websites, e-commerce websites, and most websites that require you to log in.\r\n\r\nWebsites that use the standard HTTP protocol transmit and receive data in an unsecured manner. This means it is possible for someone to eavesdrop on the data being transferred between the user and the Web server. While this is highly unlikely, it is not a comforting thought that someone might be capturing your credit card number or other personal information that you enter on a website. Therefore, secure websites use the HTTPS protocol to encrypt the data being sent back and forth with SSL encryption. If someone were to capture the data being transferred via HTTPS, it would be unrecognizable.','HTTPS','2018-04-16 12:55:50',2,3,1),
	(22,7,'IP','Stands for \"Internet Protocol.\" IP provides a standard set of rules for sending and receiving data over the Internet. It allows devices running on different platforms to communicate with each other as long as they are connected to the Internet.\r\n\r\nIn order for a Internet-connected host to be recognized by other devices, it must have an IP address. This may be either an IPv4 or IPv6 address, but either way it uniquely defines a device on the Internet.','IP','2018-04-16 12:57:05',-1,1,2),
	(23,7,'JSON','Stands for \"JavaScript Object Notation\" and is pronounced like the name \"Jason.\" JSON is a text-based data interchange format designed for transmitting structured data. It is most commonly used for transferring data between web applications and web servers.\r\n\r\nJSON is often viewed as an alternative to XML, another plain text data interchange format. In most cases, the JSON representation of an object is more compact than the XML representation because it does not require tags for each element. Below is an example of an object named \"Gaming PC\" defined in both JSON and XML.','JavaScript Object Notation','2018-04-16 12:57:45',1,2,1),
	(24,7,'MVC (Model Vue Controller)','Stands for \"Model-View-Controller.\" MVC is an application design model comprised of three interconnected parts. They include the model (data), the view (user interface), and the controller (processes that handle input).\r\n\r\n\r\nThe MVC model or \"pattern\" is commonly used for developing modern user interfaces. It is provides the fundamental pieces for designing a programs for desktop or mobile, as well as web applications. It works well with object-oriented programming, since the different models, views, and controllers can be treated as objects and reused within an application.','MVC','2018-04-16 12:58:51',0,2,2),
	(28,2,'Design Pattern','REST technology is generally preferred to the more robust Simple Object Access Protocol (SOAP) technology because REST leverages less bandwidth, making it more suitable for internet usage. \n\nAn API for a website is code that allows two software programs to communicate with each another. The API spells out the proper way for a developer to write a program requesting services from an operating system or other application. \n\nThe REST used by browsers can be thought of as the language of the internet. With cloud use on the rise, APIs are emerging to expose web services. REST is a logical choice for building APIs that allow users to connect and interact with cloud services. RESTful APIs are used by such sites as Amazon, Google, LinkedIn and Twitter.','kjn','2018-04-07 21:57:22',-2,0,2),
	(29,5,'HTTPS','An other definitions','Protocol','2018-04-24 10:29:13',0,2,2),
	(30,5,'Blockchain','A blockchain is a digital record of transactions. The name comes from its structure, in which individual records, called blocks, are linked together in single list, called a chain. Blockchains are used for recording transactions made with cryptocurrencies, such as Bitcoin, and have many other applications.','Blockchain','2018-04-24 10:30:01',2,3,1),
	(31,5,'Bitcoin','Bitcoin is a digital currency that was introduced in 2009. There is no physical version of the currency, so all Bitcoin transactions take place over the Internet. Unlike traditional currencies, Bitcoin is decentralized, meaning it is not controlled by a single bank or government. Instead, Bitcoin uses a peer-to-peer (P2P) payment network made up of users with Bitcoin accounts.','crypto','2018-04-24 10:30:25',-2,1,3),
	(32,5,'Cryptography','Cryptography is the science of protecting information by transforming it into a secure format. This process, called encryption, has been used for centuries to prevent handwritten messages from being read by unintended recipients. Today, cryptography is used to protect digital data. It is a division of computer science that focuses on transforming data into formats that cannot be recognized by unauthorized users.','Cryptography','2018-04-24 10:30:51',0,2,2),
	(33,5,'Hash','A hash is a function that converts one value to another. Hashing data is a common practice in computer science and is used for several different purposes. Examples include cryptography, compression, checksum generation, and data indexing.','Hash','2018-04-24 10:31:13',2,3,1),
	(34,5,'Encryption','Encryption is the process of converting data to an unrecognizable or \"encrypted\" form. It is commonly used to protect sensitive information so that only authorized parties can view it. This includes files and storage devices, as well as data transferred over wireless networks and the Internet.\r\n\r\n','Encryption','2018-04-24 10:31:38',-2,1,3),
	(35,5,'NFC','Stands for \"Near Field Communication.\" NFC is a short-range wireless technology that enables simple and secure communication between electronic devices. It may be used on its own or in combination with other wireless technologies, such as Bluetooth.','Near Field Communication','2018-04-24 10:32:24',0,2,2),
	(36,5,'RFID','Stands for \"Radio-Frequency Identification.\" RFID is a system used to track objects, people, or animals using tags that respond to radio waves. RFID tags are integrated circuits that include a small antenna. The are typically small enough that they are not easily noticeable and therefore can be placed on many types of objects.','Radio-Frequency Identification','2018-04-24 10:33:02',0,2,2),
	(37,6,'Encryption','An other definition','Encryption','2018-04-24 10:33:52',-1,1,2),
	(38,6,'Blockchain','an other definition','Blockchain','2018-04-24 10:34:23',-3,3,6),
	(39,6,'P2P','Stands for \"Peer to Peer.\" In a P2P network, the \"peers\" are computer systems which are connected to each other via the Internet. Files can be shared directly between systems on the network without the need of a central server. In other words, each computer on a P2P network becomes a file server as well as a client.','Peer to Peer','2018-04-24 10:36:11',1,2,1);

/*!40000 ALTER TABLE `definitions` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table upvotes_downvotes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `upvotes_downvotes`;

CREATE TABLE `upvotes_downvotes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` int(1) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `defID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `upvotes_downvotes` WRITE;
/*!40000 ALTER TABLE `upvotes_downvotes` DISABLE KEYS */;

INSERT INTO `upvotes_downvotes` (`id`, `type`, `userID`, `defID`)
VALUES
	(43,1,2,1),
	(44,1,2,4),
	(45,1,2,5),
	(46,1,2,12),
	(47,2,2,18),
	(48,2,5,4),
	(49,2,5,12),
	(50,2,5,18),
	(51,1,6,1),
	(52,2,6,4),
	(53,1,6,5),
	(54,2,6,12),
	(55,2,6,18),
	(56,2,7,1),
	(57,1,7,4),
	(58,2,7,5),
	(59,1,7,12),
	(60,2,7,18),
	(61,1,7,19),
	(62,1,7,20),
	(63,1,7,21),
	(64,2,7,22),
	(65,1,7,23),
	(66,1,7,24),
	(67,2,2,24),
	(68,1,2,23),
	(69,2,2,22),
	(70,1,2,21),
	(71,1,2,20),
	(72,2,5,21),
	(73,2,7,0),
	(74,1,7,26),
	(75,2,5,5),
	(76,2,2,28),
	(77,1,5,29),
	(78,1,5,31),
	(79,1,5,30),
	(80,1,5,34),
	(81,1,5,33),
	(82,2,5,32),
	(83,1,5,35),
	(84,2,5,36),
	(85,2,6,36),
	(86,1,6,35),
	(87,2,6,34),
	(88,2,6,33),
	(89,1,6,32),
	(90,2,6,31),
	(91,2,6,30),
	(92,1,6,37),
	(93,1,6,38),
	(94,1,2,38),
	(95,2,2,37),
	(96,1,2,36),
	(97,2,2,35),
	(98,2,2,34),
	(99,1,2,33),
	(100,2,2,32),
	(101,2,2,31),
	(102,1,2,30),
	(103,2,2,29),
	(104,1,6,39),
	(105,1,7,39),
	(106,2,7,38),
	(107,2,7,37),
	(108,1,7,36),
	(109,2,7,35),
	(110,2,7,34),
	(111,1,7,33),
	(112,1,7,32),
	(113,2,7,31),
	(114,1,7,30),
	(115,1,7,29),
	(116,2,NULL,38),
	(117,2,NULL,38),
	(118,2,NULL,38),
	(119,2,NULL,38),
	(120,2,NULL,38),
	(121,1,NULL,38),
	(122,1,6,22),
	(123,2,6,28),
	(124,1,6,21),
	(125,1,6,19),
	(126,1,6,24),
	(127,2,6,23),
	(128,2,6,20),
	(129,2,6,29),
	(130,2,5,24),
	(131,2,2,39);

/*!40000 ALTER TABLE `upvotes_downvotes` ENABLE KEYS */;
UNLOCK TABLES;


# Affichage de la table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `date_inscription` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `date_inscription`)
VALUES
	(1,'test','test','$2y$10$KokmlJm7MRMPuBaZlm44Pebw1rzNxqAQX5w8mFLxqQcKV4fBWovmG','2018-04-11 00:00:00'),
	(2,'Gaspard','gaspardfremy123@gmail.com','$2y$10$ogQqq0fpgttj4q9kjeERT.bJUTLHuS/KyEnvyYolzD5CA8diX0XvS','2018-04-11 00:00:00'),
	(5,'Toto','1','$2y$10$4smqjpcQ1.W3tvfZuVBkzuhK0sfg1wgfhS6uU90Ua4uR/tvbAZOfG','2018-04-16 00:00:00'),
	(6,'Tartanpion','2','$2y$10$PtUGSpzBP.U3CTUdnY2wFuOmkpdARzkf/fDL3rz3kirwmiFQuqEpO','2018-04-16 00:00:00'),
	(7,'John Doe','3','$2y$10$IriopeVRQ66X.lpDckEqA.PLx/b0xJt3FD2/UQmtIRyk0.C8DGLCe','2018-04-16 00:00:00'),
	(8,'','','$2y$10$1RTDoy6popMSyysfeF9lCekpALKTpK7CA76v5qrJo3GgaeFSqtc0i','2018-04-25 00:00:00');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
