-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия на сървъра:            10.1.35-MariaDB - mariadb.org binary distribution
-- ОС на сървъра:                Win32
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дъмп структура за таблица onlinemagazine.addresses
CREATE TABLE IF NOT EXISTS `addresses` (
  `user_id` int(11) NOT NULL,
  `address_name` varchar(150) NOT NULL,
  PRIMARY KEY (`user_id`,`address_name`),
  CONSTRAINT `FK_address` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дъмп данни за таблица onlinemagazine.addresses: ~22 rows (approximately)
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
INSERT INTO `addresses` (`user_id`, `address_name`) VALUES
	(1, 'Alaska'),
	(1, 'America'),
	(1, 'Chikago'),
	(1, 'Hawai'),
	(1, 'Madrit'),
	(1, 'Maldivi'),
	(1, 'Mexico'),
	(1, 'Moscow'),
	(1, 'Paris'),
	(1, 'Peru'),
	(1, 'Plovdiv 58'),
	(1, 'Sidney'),
	(1, 'Smolqn 42'),
	(1, 'Sofiq Boqna'),
	(1, 'Sofiq kv Iztok Raiko Aleksiev'),
	(1, 'Varna'),
	(2, 'Dubai'),
	(2, 'Kanarian Islands'),
	(2, 'Kosta Rika'),
	(2, 'Lisabon'),
	(2, 'London'),
	(2, 'Martini'),
	(2, 'Oregon'),
	(2, 'Plovdiv 12'),
	(2, 'Poland');
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;

-- Дъмп структура за таблица onlinemagazine.basket
CREATE TABLE IF NOT EXISTS `basket` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`product_id`),
  KEY `FK_product` (`product_id`),
  CONSTRAINT `FK_basket` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `FK_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дъмп данни за таблица onlinemagazine.basket: ~0 rows (approximately)
/*!40000 ALTER TABLE `basket` DISABLE KEYS */;
/*!40000 ALTER TABLE `basket` ENABLE KEYS */;

-- Дъмп структура за таблица onlinemagazine.colors
CREATE TABLE IF NOT EXISTS `colors` (
  `color_id` int(11) NOT NULL AUTO_INCREMENT,
  `color_name` varchar(50) NOT NULL,
  PRIMARY KEY (`color_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Дъмп данни за таблица onlinemagazine.colors: ~6 rows (approximately)
/*!40000 ALTER TABLE `colors` DISABLE KEYS */;
INSERT INTO `colors` (`color_id`, `color_name`) VALUES
	(1, 'Бял\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
	(2, 'Син\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
	(3, 'Червен\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
	(4, 'Сив\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
	(5, 'Черен\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
	(6, 'Розов\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0');
/*!40000 ALTER TABLE `colors` ENABLE KEYS */;

-- Дъмп структура за таблица onlinemagazine.dimentions
CREATE TABLE IF NOT EXISTS `dimentions` (
  `id` int(11) NOT NULL,
  `small_dimention` smallint(6) NOT NULL DEFAULT '0',
  `medium_dimention` smallint(6) NOT NULL DEFAULT '0',
  `large_dimention` smallint(6) NOT NULL DEFAULT '0',
  `extra_large_dimention` smallint(6) NOT NULL DEFAULT '0',
  `dimention_34` smallint(6) NOT NULL DEFAULT '0',
  `dimention_35` smallint(6) NOT NULL DEFAULT '0',
  `dimention_36` smallint(6) NOT NULL DEFAULT '0',
  `dimention_37` smallint(6) NOT NULL DEFAULT '0',
  `dimention_38` smallint(6) NOT NULL DEFAULT '0',
  `dimention_39` smallint(6) NOT NULL DEFAULT '0',
  `dimention_40` smallint(6) NOT NULL DEFAULT '0',
  `dimention_41` smallint(6) NOT NULL DEFAULT '0',
  `dimention_42` smallint(6) NOT NULL DEFAULT '0',
  `dimention_43` smallint(6) NOT NULL DEFAULT '0',
  `dimention_44` smallint(6) NOT NULL DEFAULT '0',
  `dimention_45` smallint(6) NOT NULL DEFAULT '0',
  `dimention_46` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дъмп данни за таблица onlinemagazine.dimentions: ~29 rows (approximately)
/*!40000 ALTER TABLE `dimentions` DISABLE KEYS */;
INSERT INTO `dimentions` (`id`, `small_dimention`, `medium_dimention`, `large_dimention`, `extra_large_dimention`, `dimention_34`, `dimention_35`, `dimention_36`, `dimention_37`, `dimention_38`, `dimention_39`, `dimention_40`, `dimention_41`, `dimention_42`, `dimention_43`, `dimention_44`, `dimention_45`, `dimention_46`) VALUES
	(18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 8, 0, 3, 5, 15),
	(19, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 5, 8, 0, 3, 5, 15),
	(20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 5, 8, 0, 3, 5, 15),
	(21, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 5, 8, 0, 3, 5, 15),
	(22, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 8, 0, 3, 5, 15),
	(23, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 8, 0, 3, 5, 15),
	(24, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 5, 8, 0, 3, 5, 15),
	(25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 8, 0, 3, 5, 15),
	(26, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 8, 0, 3, 5, 15),
	(27, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 5, 8, 0, 3, 5, 15),
	(28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 8, 0, 3, 5, 15),
	(29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 5, 8, 0, 3, 5, 15),
	(30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 5, 8, 0, 3, 5, 15),
	(31, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 8, 0, 3, 5, 15),
	(32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 5, 8, 0, 3, 5, 15),
	(33, 5, 3, 8, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(34, 5, 3, 8, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(35, 5, 3, 8, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(36, 5, 3, 8, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(37, 5, 3, 8, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(38, 5, 3, 8, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(39, 5, 3, 8, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(40, 5, 3, 8, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(42, 5, 3, 8, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(43, 5, 3, 8, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(44, 5, 3, 8, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(45, 5, 3, 8, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(46, 5, 3, 8, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
	(47, 5, 3, 8, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
/*!40000 ALTER TABLE `dimentions` ENABLE KEYS */;

-- Дъмп структура за таблица onlinemagazine.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  PRIMARY KEY (`id`,`image`),
  UNIQUE KEY `image` (`image`),
  CONSTRAINT `FK_image` FOREIGN KEY (`id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дъмп данни за таблица onlinemagazine.images: ~24 rows (approximately)
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`id`, `image`) VALUES
	(18, '610c6efd9faca3e76e0d3aead7cc2f25.jpg'),
	(18, '9fa168b897f1e0e5f3993cb4308dd657.jpg'),
	(20, 'c84954e6aa4c1a38d2e857261ed6280f.jpg'),
	(21, '5bcb5d91ca4cadbba8b12f7adb65cde1.jpg'),
	(22, '05a17633e07167f21f9ab4261c3200ce.jpg'),
	(25, '49319ce57670da10ed68966a39f821d9.jpg'),
	(26, '647d68a104dcc15dab526ae2a8e5fdfd.jpg'),
	(28, 'e06f75d1c66ba2923eb0ea68c89d9761.jpg'),
	(29, 'ebfe8b01732a1e00358a0c5c7787b6ce.jpg'),
	(30, '2d046e322aa68ed1c07fee10ee6c188c.jpg'),
	(31, '3cd23d3717b617448f2246bd1c572574.jpg'),
	(31, 'e0fc7a684d1ea92fd7884c2f03c88f02.jpg'),
	(32, 'e8f1a6352ae1dd9d9c6450249a38aba7.jpg'),
	(33, '48cb9d0586a26f20eaf05c213f9b3b34.jpg'),
	(34, 'ad630367879be79e06c84fb096a4e5a0.jpg'),
	(35, '1bbfe4af6fa4a6f4efb57aa1008a1959.jpg'),
	(36, 'abb691c3b1f56843f94ed6deebea1a62.jpg'),
	(40, '16469fcd3f790cb812e23a3036c75147.jpg'),
	(44, '86d955f3c6724f603ad752cad38d7f21.jpg'),
	(45, '695e3bd75836cb6195954ed55067d616.jpg'),
	(45, 'f75885811d9153b58b3dc0e046db55cf.jpg'),
	(46, '27489efbb6f09630f83d4218a9d0e0b3.jpg'),
	(47, '10028d5a8654bdf9fa565e082d08b9c6.jpg'),
	(47, '7597029f15a1d8258a3675d62e10a789.jpg');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

-- Дъмп структура за procedure onlinemagazine.procedure_add_sale
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `procedure_add_sale`(
	IN `id` INT
)
BEGIN

	SELECT `sells` FROM products WHERE products.id = id LIMIT 1 INTO @a;

	SET @b = @a + 1;
	
	UPDATE products SET `sells` = @b WHERE products.id = id;


END//
DELIMITER ;

-- Дъмп структура за procedure onlinemagazine.procedure_add_view
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `procedure_add_view`(
	IN `id` INT











)
BEGIN

	SELECT `reviews` FROM products WHERE products.id = id LIMIT 1 INTO @a;

	SET @b = @a + 1;
	
	UPDATE products SET `reviews` = @b WHERE products.id = id;
	
END//
DELIMITER ;

-- Дъмп структура за procedure onlinemagazine.procedure_insert_product
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `procedure_insert_product`(
	IN `price` INT,
	IN `front_image_1` VARCHAR(100),
	IN `front_image_2` VARCHAR(100),
	IN `color` INT,
	IN `sex` VARCHAR(50),
	IN `promotion_percent` INT,
	IN `promotion` VARCHAR(50),
	IN `type` INT




,
	IN `image_3` VARCHAR(100),
	IN `image_4` VARCHAR(100)





,
	IN `small_dimention` INT,
	IN `medium_dimention` INT,
	IN `large_dimention` INT,
	IN `extra_large_dimention` INT,
	IN `dimention_34` INT,
	IN `dimention_35` INT,
	IN `dimention_36` INT,
	IN `dimention_37` INT,
	IN `dimention_38` INT,
	IN `dimention_39` INT,
	IN `dimention_40` INT,
	IN `dimention_41` INT,
	IN `dimention_42` INT,
	IN `dimention_43` INT,
	IN `dimention_44` INT,
	IN `dimention_45` INT,
	IN `dimention_46` INT



)
BEGIN
	
	START TRANSACTION;
	
		INSERT INTO products(price, front_image_1, front_image_2, 
		color, sex, promotion_percent, promotion, type) 
		VALUES (price, front_image_1, front_image_2, color, sex, promotion_percent, promotion, type);
		
		SELECT `id` FROM products ORDER BY `id` DESC LIMIT 1 INTO @id;
		
		IF (image_3 IS NOT NULL) THEN
			INSERT INTO images(id, image) VALUES(@id, image_3);
		END IF;
		
		IF (image_4 IS NOT NULL) THEN
			INSERT INTO images(id, image) VALUES(@id, image_4);
		END IF;
		
		INSERT INTO dimentions(id, small_dimention, medium_dimention, large_dimention, extra_large_dimention, dimention_34, dimention_35,
		dimention_36, dimention_37, dimention_38, dimention_39, dimention_40, dimention_41, dimention_42, dimention_43, dimention_44,
		dimention_45, dimention_46)
		VALUES (@id, small_dimention, medium_dimention, large_dimention, extra_large_dimention, dimention_34, dimention_35,
		dimention_36, dimention_37, dimention_38, dimention_39, dimention_40, dimention_41, dimention_42, dimention_43, dimention_44,
		dimention_45, dimention_46);
	
	COMMIT;
END//
DELIMITER ;

-- Дъмп структура за procedure onlinemagazine.procedure_register_user
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `procedure_register_user`(
	IN `email` VARCHAR(50),
	IN `first_name` VARCHAR(50),
	IN `last_name` VARCHAR(50),
	IN `password` VARCHAR(150),
	IN `username` VARCHAR(50),
	IN `born_on` VARCHAR(150),
	IN `town` INT,
	IN `cookie` VARCHAR(150),
	IN `address1` VARCHAR(50),
	IN `address2` VARCHAR(50)


,
	IN `status` VARCHAR(50)



















)
BEGIN
	
	START TRANSACTION;
		
	   UPDATE users 
		SET email = email, first_name = first_name, last_name = last_name, 
		password = password, username = username, born_on = born_on, town = town, status = status
		WHERE users.cookie = cookie;
	 
	   SELECT `id` FROM users WHERE `cookie` = cookie LIMIT 1 INTO @user_id;
	   
	   INSERT INTO addresses (`user_id`, `address_name`)
	   VALUES (@user_id, address1);
		
		IF (address2 IS NOT NULL) THEN
			INSERT INTO addresses (`user_id`, `address_name`)
			VALUES (@user_id, address2);
		END IF;
		
   COMMIT;
END//
DELIMITER ;

-- Дъмп структура за таблица onlinemagazine.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` int(11) NOT NULL,
  `front_image_1` varchar(150) NOT NULL,
  `front_image_2` varchar(150) NOT NULL,
  `reviews` int(11) NOT NULL DEFAULT '0',
  `sells` int(11) NOT NULL DEFAULT '0',
  `color` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `sex` enum('Male','Female') NOT NULL,
  `promotion_percent` tinyint(4) NOT NULL DEFAULT '0',
  `promotion` enum('true','false') NOT NULL DEFAULT 'false',
  PRIMARY KEY (`id`),
  UNIQUE KEY `front_image_1` (`front_image_1`),
  UNIQUE KEY `front_image_2` (`front_image_2`),
  KEY `FK_color` (`color`),
  KEY `FK_type` (`type`),
  CONSTRAINT `FK_color` FOREIGN KEY (`color`) REFERENCES `colors` (`color_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_type` FOREIGN KEY (`type`) REFERENCES `types` (`type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

-- Дъмп данни за таблица onlinemagazine.products: ~29 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `price`, `front_image_1`, `front_image_2`, `reviews`, `sells`, `color`, `type`, `sex`, `promotion_percent`, `promotion`) VALUES
	(18, 253, '90727bcd64acc13f5a3cf5a8664c5ccb.jpg', 'd62fb3beaf4fcd8379fba8cfb46c39f4.jpg', 45, 7, 5, 2, 'Male', 17, 'true'),
	(19, 150, 'c9a3664831b26034daee57f3b599132f.jpg', 'b9854226afc867a17b175d53b54ccc76.jpg', 13, 0, 4, 2, 'Male', 0, 'false'),
	(20, 175, '010b6822f43c6b56b944341371c7c209.jpg', 'c3b4ea6b7b5e552a2f8250716e64247c.jpg', 15, 0, 5, 2, 'Male', 5, 'true'),
	(21, 87, '0f22886d23a6088eabbf8b50c97164ae.jpg', 'd38a5718dfa44002757e187ae32acd12.jpg', 22, 0, 4, 2, 'Male', 0, 'false'),
	(22, 99, 'e2d4af91c292ed8f1d201998d88f20f9.jpg', '90cd35eae5d31e9d4ff29f4328ea29a6.jpg', 22, 0, 5, 2, 'Male', 9, 'true'),
	(23, 145, '69b1ca2e283f3428ec68fee64abeb39c.jpg', 'f82fd02e8e1d79169ee30bd7fcb90afe.jpg', 15, 0, 2, 2, 'Male', 9, 'true'),
	(24, 170, 'bb3d9040b8b29decb4b42d22953d22d4.jpg', 'd4e69fb24a7103c812f3dca61e0af532.jpg', 19, 13, 1, 2, 'Male', 14, 'true'),
	(25, 124, 'c8d9de3ce2d2c05ae4e2c52333edee5f.jpg', '045542a5862ebcccf2223c9269b83223.jpg', 16, 0, 5, 2, 'Male', 19, 'true'),
	(26, 187, '70c2b86018940375631da5a00d523681.jpg', 'e7326fab92c7727ddba7d5ab2c4a175d.jpg', 17, 0, 2, 2, 'Male', 0, 'false'),
	(27, 99, 'eff3eedb31c2fb4a0488cae0b633c0b5.jpg', '571ac42ac35e0c1bbb42a2d293c61eeb.jpg', 13, 0, 4, 2, 'Male', 0, 'false'),
	(28, 160, 'a424de5f42a462f49839a9d87779faa6.jpg', '06723f1fd559e6c7df5c1d7d172fba80.jpg', 12, 0, 4, 2, 'Male', 0, 'false'),
	(29, 250, 'ccb0390b65cf18fb15ae835fa3d8e3c8.jpg', '12ffa712fefd9f490d0527873e17c89a.jpg', 14, 0, 4, 2, 'Male', 0, 'false'),
	(30, 150, '1af6348e38c5c254adf15d0ff75ce38c.jpg', 'ba6e99b36395491ab94f814894e91621.jpg', 23, 0, 1, 2, 'Male', 0, 'false'),
	(31, 211, '975f3e1a7e7ef6c089dcdb8a42f3f150.jpg', '568fb376f61fa7dff0da57754f0c88e2.jpg', 19, 0, 1, 2, 'Male', 0, 'false'),
	(32, 150, 'aa2c3fec2818975133d48036f3012685.jpg', '091896800e8abd68738e1bfd7897a8d6.jpg', 18, 1, 2, 2, 'Male', 0, 'false'),
	(33, 25, '589b63b1c6565c7470d34aeb59c6b2a1.jpg', 'ac732cd449bbe4b0eb8bd8a21008fba6.jpg', 25, 0, 5, 4, 'Male', 5, 'true'),
	(34, 25, '5b618d5f5f88b81a5f71bf827b84a8fa.jpg', '2a69f9c149958f0f8b58fa3d93f2d37f.jpg', 15, 1, 1, 4, 'Male', 0, 'false'),
	(35, 36, '415c410f3d91d4bc9d93b4407458bf5a.jpg', '9b35bef41265564ddc214bfabbd0e68c.jpg', 13, 0, 2, 4, 'Male', 0, 'false'),
	(36, 42, '5a3333e7889bc91aa50d15d28d592c1d.jpg', 'b1e0899cd0e67899be7d596f73106610.jpg', 44, 0, 5, 4, 'Male', 0, 'false'),
	(37, 52, '0fbe2e9f0c1c7850eab15eed7c48c7c1.jpg', '1bd78b4397e8327c7c01b60c4f677aeb.jpg', 14, 0, 4, 1, 'Female', 23, 'false'),
	(38, 54, 'c9dcdc12100f3eba805345b57f365813.jpg', 'f71efb533d0d5a90b5bd4919eb09e3e7.jpg', 17, 5, 5, 1, 'Female', 4, 'true'),
	(39, 36, 'ba3282f56b2b4e7ff161e19530d9603f.jpg', '66a1c69c9b33a3d1174ae725852e0c9a.jpg', 12, 0, 6, 1, 'Female', 0, 'false'),
	(40, 23, 'e97556513651d932236044e2f7b221ca.jpg', '5ac0624f8dab0372da6c02638c6a0a69.jpg', 14, 0, 1, 1, 'Female', 0, 'false'),
	(42, 278, 'a6c4af6ffdbc49de86c356c6f33cf3c7.jpg', '5fe7e213ce2b73d581e262aaf42e56a1.jpg', 3, 0, 2, 3, 'Male', 0, 'false'),
	(43, 180, 'f44d3e0fee55f7661184d00c64634787.jpg', 'b0d2ad321f0ff4bffcb072f05c0d77c4.jpg', 1, 0, 5, 3, 'Male', 0, 'false'),
	(44, 290, '18392198d96e7a638a28265ffcbcaeaf.jpg', 'a01825136d1585ea0b2ff2d887037d55.jpg', 1, 0, 5, 3, 'Male', 8, 'true'),
	(45, 320, '70ec2bc881828f777ddb7f5793233209.jpg', '167c903b295965002c5f690240ab7b03.jpg', 3, 0, 5, 3, 'Male', 0, 'false'),
	(46, 449, '39f2276764bdd75ded16570ed36247ac.jpg', 'c5161a199784cf7d48aaec870670f306.jpg', 2, 0, 2, 3, 'Male', 0, 'false'),
	(47, 399, '6e0340a66a800906ca4b3b7f099a58ae.jpg', 'e3104c5298ec99e0e16d2d64c3d0a45d.jpg', 1, 0, 4, 3, 'Male', 0, 'false');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Дъмп структура за view onlinemagazine.product_view
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `product_view` (
	`id` INT(11) NOT NULL,
	`frontImage1` VARCHAR(150) NOT NULL COLLATE 'utf8_general_ci',
	`frontImage2` VARCHAR(150) NOT NULL COLLATE 'utf8_general_ci',
	`reviews` INT(11) NOT NULL,
	`color` INT(11) NOT NULL,
	`type` INT(11) NOT NULL,
	`sex` ENUM('Male','Female') NOT NULL COLLATE 'utf8_general_ci',
	`price` INT(11) NOT NULL,
	`colorName` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`promotion` ENUM('true','false') NOT NULL COLLATE 'utf8_general_ci',
	`promotionPercent` TINYINT(4) NOT NULL,
	`smallDimention` SMALLINT(6) NOT NULL,
	`mediumDimention` SMALLINT(6) NOT NULL,
	`largeDimention` SMALLINT(6) NOT NULL,
	`extraLargeDimention` SMALLINT(6) NOT NULL,
	`dimention34` SMALLINT(6) NOT NULL,
	`dimention35` SMALLINT(6) NOT NULL,
	`dimention36` SMALLINT(6) NOT NULL,
	`dimention37` SMALLINT(6) NOT NULL,
	`dimention38` SMALLINT(6) NOT NULL,
	`dimention39` SMALLINT(6) NOT NULL,
	`dimention40` SMALLINT(6) NOT NULL,
	`dimention41` SMALLINT(6) NOT NULL,
	`dimention42` SMALLINT(6) NOT NULL,
	`dimention43` SMALLINT(6) NOT NULL,
	`dimention44` SMALLINT(6) NOT NULL,
	`dimention45` SMALLINT(6) NOT NULL,
	`dimention46` SMALLINT(6) NOT NULL
) ENGINE=MyISAM;

-- Дъмп структура за таблица onlinemagazine.security_image
CREATE TABLE IF NOT EXISTS `security_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(150) NOT NULL,
  `code` varchar(150) NOT NULL,
  `question` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Дъмп данни за таблица onlinemagazine.security_image: ~7 rows (approximately)
/*!40000 ALTER TABLE `security_image` DISABLE KEYS */;
INSERT INTO `security_image` (`id`, `image_name`, `code`, `question`) VALUES
	(3, '8ee75798e621fd699a11e0061cb9d113.jpg', '3', 'Колко пингвина има на картинката?'),
	(4, '0d9ef7403fe7a7af0bdc5f17a8f3dbb9.jpg', 'Черен', 'Какъв е цвета на коня на картинката?'),
	(5, '22e7e6f334ef2d2bcd4b95b3623d1743.jpg', 'Слон', 'Какво виждате на картинката?'),
	(6, 'dc9ec3b3ecc33a818115edb3314cb89d.jpg', 'Лъв', 'Какво виждате на картинката?'),
	(7, '2b34903d0ad8ee0e683822884a6ef99b.jpg', 'Коала', 'Какво виждате на картинката?'),
	(8, '7d39ae7ee4d1dc52ef7c41915cd780f1.jpg', 'Тигър', 'Какво виждате на картинката?'),
	(9, 'f1e9af32f7e9a726ed15ca39de1f6818.jpg', 'Къща', 'Какво виждате на картинката?');
/*!40000 ALTER TABLE `security_image` ENABLE KEYS */;

-- Дъмп структура за таблица onlinemagazine.sells
CREATE TABLE IF NOT EXISTS `sells` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дъмп данни за таблица onlinemagazine.sells: ~0 rows (approximately)
/*!40000 ALTER TABLE `sells` DISABLE KEYS */;
/*!40000 ALTER TABLE `sells` ENABLE KEYS */;

-- Дъмп структура за таблица onlinemagazine.towns
CREATE TABLE IF NOT EXISTS `towns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `town_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `town_name` (`town_name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Дъмп данни за таблица onlinemagazine.towns: ~6 rows (approximately)
/*!40000 ALTER TABLE `towns` DISABLE KEYS */;
INSERT INTO `towns` (`id`, `town_name`) VALUES
	(4, 'Бургас'),
	(3, 'Варна'),
	(2, 'Пловдив\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
	(5, 'Сливница'),
	(7, 'Смолян'),
	(1, 'София\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
	(6, 'Стара Загора');
/*!40000 ALTER TABLE `towns` ENABLE KEYS */;

-- Дъмп структура за таблица onlinemagazine.types
CREATE TABLE IF NOT EXISTS `types` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(50) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Дъмп данни за таблица onlinemagazine.types: ~4 rows (approximately)
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` (`type_id`, `type_name`) VALUES
	(1, 'Панталони'),
	(2, 'Обувки'),
	(3, 'Костюми'),
	(4, 'Тениски'),
	(5, 'Очила');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;

-- Дъмп структура за таблица onlinemagazine.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `born_on` datetime DEFAULT NULL,
  `first_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `town` int(11) DEFAULT NULL,
  `cookie` varchar(150) NOT NULL,
  `status` enum('guest','user','admin') NOT NULL DEFAULT 'guest',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `FK_town` (`town`),
  CONSTRAINT `FK_town` FOREIGN KEY (`town`) REFERENCES `towns` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дъмп данни за таблица onlinemagazine.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `password`, `username`, `born_on`, `first_login`, `town`, `cookie`, `status`) VALUES
	(1, 'david_786@abv.bg', 'David', 'Ivanov', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', 'testoviqasddddd', '1998-12-15 13:17:37', '2018-12-15 13:17:38', 4, 'fksjanfkjdnsafkndjsa', 'admin'),
	(2, 'david@abv.bg', 'David', 'Ivanov', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', NULL, '1998-05-04 00:00:00', '2018-12-23 13:22:47', 2, '40b244112641dd78dd4f93b6c9190dd46e0099194d5a44257b7efad6ef9ff4683da1eda0244448cb343aa688f5d3efd7314dafe580ac0bcbf115aeca9e8dc114', 'user');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Дъмп структура за view onlinemagazine.product_view
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `product_view`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_view` AS SELECT id, front_image_1 AS frontImage1, front_image_2 AS frontImage2, reviews, color, type, sex, price, colors.color_name AS colorName,
promotion, promotion_percent AS promotionPercent, dimentions.small_dimention AS smallDimention, dimentions.medium_dimention AS mediumDimention, 
dimentions.large_dimention AS largeDimention, dimentions.extra_large_dimention AS extraLargeDimention,
dimentions.dimention_34 AS dimention34, dimentions.dimention_35 AS dimention35, dimentions.dimention_36 AS dimention36, dimentions.dimention_37 AS dimention37,
dimentions.dimention_38 AS dimention38, dimentions.dimention_39 AS dimention39, dimentions.dimention_40 AS dimention40, dimentions.dimention_41 AS dimention41,
dimentions.dimention_42 AS dimention42, dimentions.dimention_43 AS dimention43, dimentions.dimention_44 AS dimention44, dimentions.dimention_45 AS dimention45,
dimentions.dimention_46 AS dimention46 FROM products INNER JOIN dimentions USING(id) INNER JOIN colors ON products.color = colors.color_id ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
