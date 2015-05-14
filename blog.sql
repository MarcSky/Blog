-- phpMyAdmin SQL Dump
-- version 4.4.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2015 at 02:13 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `date_create` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `text` text
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `author`, `date_create`, `image`, `text`) VALUES
(1, 'ЕГЭ по математике', 'Министерство образования', 1431544791, 'ege.jpg', 'Для того чтобы получить школьный аттестат, выпускнику школ текущего года необходимо сдать два обязательных экзамена в форме ЕГЭ русский язык и математику. \n\nПо каждому из них нужно набрать не ниже минимального количества баллов. \n\nВ соответствии с Концепцией развития математического образования в Российской Федерации ЕГЭ по математике в новом учебном году будет разделен на два уровня: базовый и профильный. \n\nУспешная сдача ЕГЭ по математике базового уровня позволяет поступить в вузы, у которых в перечне вступительных испытаний при приеме на обучение по образовательным программам высшего образования – программам бакалавриата и программам специалитета отсутствует предмет «Математика».\n\nРезультаты ЕГЭ по математике профильного уровня позволяют поступать в вузы, имеющие в перечне вступительных испытаний при приеме на обучение по образовательным программам высшего образования – программам бакалавриата и программам специалитета предмет «Математика».'),
(2, 'Реформа образования', 'Министерство образования', 1431026391, 'reform.jpg', 'Сфера образования в последние годы стала полем самого настоящего сражения между сторонниками его реформирования и их противниками. Противники - профессионалы, родители, общественность; сторонники - главным образом чиновники и обслуживающие их интересы «исследовательские структуры» - продавливают «реформу» несмотря на широкие протесты. Пишу слово «реформа» в кавычках, поскольку реформа - это нечто созидательное. То, что делают с образованием в РФ - это разрушение, сознательное или по глупости, некомпетентности и непрофессионализму, но разрушение. Отсюда - кавычки.\r\n\r\nОдной из линий противостояния «реформе» образования была и есть критика закона об образовании, других нормативных актов, выявление их слабых мест, нестыковок и т.д. Здесь уже сделано немало и с большой пользой.'),
(3, 'Поступление в ЮФУ', 'ЮФУ', 1430507991, 'sfedu.jpg', 'На основании поставления Правительства РФ №756 от 31 августа 2013 года объявляется набор групп молодых мам до 23 лет для обучения на подготовительных отделениях федеральных государственных образовательных организаций высшего образования.\r\nСлушателями курса могут стать молодые мамы, возрастом не более 23 лет на момент приема документов, имеющие гражданство Российской Федерации, наличие одного и более детей, не имеющие высшего, но со средним общим образованием. Обучение ведется по очной (выплачивается стипендия), очно-заочной и заочной форме обучения.\r\n\r\nПериод обучения: ноябрь 2014- май 2015 гг\r\n\r\nПрием документов: 14 октября - 31 октября 2014 года по адресу приемной комиссии ЮФУ: г. Ростов-на-Дону, ул. Большая Садовая, 105, к. 107, тел (863) 2-370-370\r\n'),
(4, 'Олимпиада по программированию', 'АСМ', 1430680791, 'ruby.png', 'Крупнейшая международная студенческая командная олимпиада по программированию называется ACM International Collegiate Programming Contest. Генеральными спонсорами чемпионата выступают такие гиганты как Microsoft и IBM. В 2004 году в ней участвовало 3150 команд из 75 стран.\r\n\r\nКоманды из России неоднократно становились победителями этого престижного соревнования[7][8][9][10][11]. По итогам удачных выступлений команды удостаивались встречи с Президентом РФ[12][13][14]. Один из тренеров и организаторов этих олимпиад в России был награждён Премиями Президента РФ и Правительства РФ в области образования[15].\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
