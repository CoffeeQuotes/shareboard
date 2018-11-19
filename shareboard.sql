-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 18, 2018 at 10:22 AM
-- Server version: 5.7.19
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shareboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `shares`
--

CREATE TABLE `shares` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shares`
--

INSERT INTO `shares` (`id`, `user_id`, `title`, `body`, `link`, `create_date`) VALUES
(1, 1, 'I think you know what', 'Marie, I said Cheetos, not Fritos. I must\'ve said Cheetos like ten times. You need me to write it down for you? Well, I\'m just saying, y\'know, I said Cheetos. Ch-ch-ch sound. Virtually impossible to confuse Cheetos with Fritos it seems to me. Where are you going?\r\n\r\nSo things are quiet, y\'know? Not a lot of crystal on the streets right now. Well, we keep hearing a name. Heisenberg. Lately pretty much every dimebagger we come across. Yeah, I know. Maybe it\'s a tweaker urban legend. Still, somebody somewhere is cooking that big blue we keep finding. Come here... closer... Asshole.\r\n\r\nI think you know who Tuco Salamanca was. I think your car was there because you were there. Tuco had a bullet in him when I got there and I think you know something about that, too. \r\n\r\nSky, the, um... I know it\'s none of my business, but uh... keeping him away from the kids? Whoa, whoa, no heavy lifting. I got it. Jesus, what you got in there - cinder blocks? If I have to guess, I\'d say that\'s Spanish for asshole. You? No. Only shooting that you do is into a Kleenex. ', 'https://mashable.com/2013/07/11/lorem-ipsum/#_HDdf9N2Qiq5', '2018-11-17 13:04:29'),
(2, 1, 'I don\'t think we\'re alike ', 'Tyrus told me what\'s happening - the sick child. I understand your preoccupation, but Jesse, I am running a business. I need you back at the lab to complete the cook. You can return when you\'re done. It is, as you must know, in both of our best interests. \r\n\r\nI... am very sorry. Is there anything I can do? I am on the board of this hospital. I can recommend doctors. Make sure he gets whatever he needs. The best treatment. How did that happen? This current batch is surely ruined now, correct? Stay with the boy. Tyrus will dump what\'s there and clean the tanks. You will start a new batch when you are ready to return. Next week. \r\n\r\nWhat kind of man talks to the DEA? No man. No man at all. A crippled little rata. What a reputation to leave behind. Is that how you want to be remembered? Last chance to look at me, Hector. Can I help you sir? What can I do for you? I\'m... sorry, I\'m not following. I... think that you\'re confusing me for someone else. Sir, if you have a complaint, I suggest you submit it through our email system. I will be happy to refer you to our website. \r\n\r\nI don\'t think we\'re alike at all, Mr. White. You are not a cautious man at all. Your partner was late and he was high. He\'s high often, isn\'t he? You have poor judgement. I can\'t work with someone with poor judgement. I\'ve been told, it\'s excellent. That is not the only factor. I have to ask... why? Why him? How much product do you have on hand? I have your numbers. You can never trust a drug addict. ', 'http://heisenbergipsum.com/', '2018-11-17 13:04:06'),
(3, 1, 'cab companies', 'He went to the police station, to the newspapers, to offer a reward, to the cab companies, everywhere that a ray of hope impelled him.\r\n\r\nShe waited all day long, in the same state of bewilderment at this fearful catastrophe.\r\n\r\nLoisel came home at night, his face lined and pale; he had discovered nothing.', 'https://getbootstrap.com/', '2018-11-18 01:13:32'),
(4, 1, 'Mary Story', 'Mary, through her agitation, was aware that they were both designating the unknown visitor by a vague pronoun, instead of the conventional formula which, till then, had kept their allusions within the bounds of custom. And at the same moment her mind caught at the suggestion of the folded paper.\r\n', 'https://en.wikipedia.org/wiki/Christian_views_on_Hell', '2018-11-18 03:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `register_date`) VALUES
(1, 'Shishir', 'sky8052785942ocean@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2018-11-18 12:42:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shares`
--
ALTER TABLE `shares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shares`
--
ALTER TABLE `shares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
