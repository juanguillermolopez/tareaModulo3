-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: diseño_web
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `info_pagina`
--

DROP TABLE IF EXISTS `info_pagina`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `info_pagina` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `favicon` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `saludo_jumbotron` text DEFAULT NULL,
  `subtitulo` text DEFAULT NULL,
  `texto_intermedio1` text DEFAULT NULL,
  `texto_intermedio2` text DEFAULT NULL,
  `carpeta` text DEFAULT NULL,
  `imagen` text DEFAULT NULL,
  `titulo` text DEFAULT NULL,
  `contenido` text DEFAULT NULL,
  `footer_name` text DEFAULT NULL,
  `footer_link` text DEFAULT NULL,
  `titulo_cuento` varchar(45) DEFAULT NULL,
  `relato` text DEFAULT NULL,
  `fin_cuento` text DEFAULT NULL,
  `idioma` varchar(2) DEFAULT NULL,
  `label_idioma` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info_pagina`
--

LOCK TABLES `info_pagina` WRITE;
/*!40000 ALTER TABLE `info_pagina` DISABLE KEYS */;
INSERT INTO `info_pagina` VALUES (1,'favicon.png','Star Trek Fanpage Chile','Greetings!','Bienvenidos a la Fanpage chilena de Star Trek.','Esta es una pequeña muestra de la historia de la serie en las figuras de sus personajes.','Los siguientes son algunos de sus principales personajes y su icónica nave espacial.','img/','img0.jpg','USS Enterprise','Con su designación NCC 1701-D, es la nave más conocida de toda la saga de la serie. Apareció en la película \'Generaciones\', y en el capítulo final de la nueva serie \'Picard\'. Esta nave fue destruida durante la película en Veridian 3 por un ataque Klingon (eternos enemigos de la federación) y restaurada por Geordi La Forge para la serie \'Picard\'.','2023 Juan Guillermo López García','https://susistema.cl','El pequeño conejito aventurero','Había una vez un pequeño conejito llamado Benito. Benito vivía en un bosque mágico rodeado de árboles altos y flores coloridas. Un día, Benito decidió explorar más allá de su madriguera y descubrir nuevas aventuras.	Con sus largas orejas y saltitos rápidos, Benito se adentró en el bosque. Pasó por arroyos cristalinos y se encontró con pájaros cantores. Pero de repente, oyó un ruido extraño. Siguió el sonido y encontró a una tortuguita perdida. Benito la ayudó a regresar a su hogar y se hicieron amigos para siempre. Juntos, Benito y la tortuguita exploraron el bosque y vivieron muchas aventuras emocionantes. Descubrieron un lago secreto, construyeron una casita en un árbol y hasta encontraron un tesoro escondido. Benito aprendió que la amistad y la valentía hacen que la vida sea aún más maravillosa.','¡Y así, Benito y la tortuguita vivieron felices para siempre, compartiendo risas y nuevas travesuras en el mágico bosque!  ¡Fin!','es','Español'),(2,NULL,NULL,'',NULL,'',NULL,'img/','img1.jpg','The Original Series (TOS)','Esta es la serie de 1966. Incluye a los inolvidables Kirk y al vulcano Señor Spock. Al principio no se apostaba nada por el éxito de la producción, sin embargo, la serie tocó problemas serios y profundos de la sociedad de ese momento, tales como la pena de muerte, las guerras, las dictaduras. Todo ello cautivó al público joven con la idea de que trabajando juntos los problemas se podían superar. Ese es su gran valor.',NULL,NULL,'The little adventurous bunny','Once upon a time there was a little bunny named Benito. Benito lived in a magical forest surrounded by tall trees and colorful flowers. One day, Benito decided to explore beyond his burrow and discover new adventures. With his long ears and quick hops, Benito entered the forest. He passed through crystal clear streams and met songbirds. But suddenly, he heard a strange noise. He followed the sound and found a lost baby turtle. Benito helped her return to her home and they became friends forever. Together, Benito and the little turtle explored the forest and had many exciting adventures. They discovered a secret lake, built a treehouse, and even found hidden treasure. Benito learned that friendship and courage make life even more wonderful.','And so, Benito and the little turtle lived happily ever after, sharing laughter and new mischief in the magical forest! End!','en','Inglés'),(3,NULL,NULL,NULL,NULL,NULL,NULL,'img/','img2.jpg','La Nueva Generación','Este es el Staff de personajes de la segunda serie Star Trek. Esta nueva historia tiene lugar 80 años después de la serie original. Su personaje principal es el capitán Jean Luc Picard, interpretado por Sir Patrick Stewart, Jonathan Frakes, Gates McFadden, entre otros.',NULL,NULL,'Маленький предприимчивый кролик','Жил-был маленький кролик по имени Бенито. Бенито жил в волшебном лесу, окруженном высокими деревьями и яркими цветами. Однажды Бенито решил отправиться за пределы своей норы и открыть для себя новые приключения.	Со своими длинными ушами и быстрыми прыжками Бенито вошел в лес. Он миновал кристально чистые ручьи и был встречен певчими птицами. Но вдруг он услышал странный шум. Он пошел на звук и нашел потерявшуюся черепаху. Бенито помог ей вернуться домой, и они навсегда подружились. Вместе Бенито и маленькая черепашка исследовали лес и пережили множество захватывающих приключений. Они обнаружили секретное озеро, построили дом на дереве и даже нашли спрятанные сокровища. Бенито понял, что дружба и мужество делают жизнь еще прекраснее.','Так и жили Бенито и маленькая черепашка долго и счастливо, делясь смехом и новыми проказами в волшебном лесу! Конец!','ru','Ruso'),(4,NULL,NULL,NULL,NULL,NULL,NULL,'img/','img3.jpg','Voyager','Esta es la tercera serie que compone el universo de Star Trek. Se caracteriza porque su principal protagonista es una mujer, la capitán Kathryn Janeway. La historia se centra en el viaje de retorno a la Tierra, después de ser desplazados 70.000 años luz al otro extremo de la galaxia Vía Láctea. En su viaje de retorno conocen cientos de nuevas civilizaciones con aventuras e historias de vida de cada uno de los personajes.',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,NULL,NULL,NULL,NULL,NULL,NULL,'img/','img4.jpg','3 generaciones','Estas son las figuras que representan 3 épocas en la línea de tiempo de Star Trek. La Comandante Michael Burnham, anterior a la historia de Kirk y Spock. Después está el reboot de la serie original con James T. Kirk, y la Nueva Generación con Jean Luc Picard.',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,NULL,NULL,NULL,NULL,NULL,NULL,'img/','benito.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `info_pagina` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-18  2:45:06
