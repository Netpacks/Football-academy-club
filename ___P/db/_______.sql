-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 10:44 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutt_us`
--

CREATE TABLE `aboutt_us` (
  `id` int(11) UNSIGNED NOT NULL,
  `banner` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `hero` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `texte` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `registered_agent` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `profesional_player` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `global_office` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `academy_player` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) UNSIGNED NOT NULL,
  `banner` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `hero` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `texte` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `registered_agent` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `profesional_player` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `global_office` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `academy_player` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `banner`, `hero`, `texte`, `registered_agent`, `profesional_player`, `global_office`, `academy_player`, `date`) VALUES
(1, 'aboutvideo.mp4', 'ACHIEVE YOUR FOOTBALL DREAM WITH US', 'TOPKONNECT provide broadcast and sports equipment purchase services to individuals and corporate organisations as well as organize world class soccer tours, trials and tournaments for individual players and teams in Africa, Europe and the United States.\n\n\n\nOur Mission is to produce the next generation of big stars and talents in the world of football and give them the best education of the game that will last them for the rest of their lives.\n\n\n\nOur Vision is to become the biggest football academy in Nigeria and Africa, to have branches and centers in every part of the world, to become the most successful football academy with the type of players that will be produced for National teams and football world.', '15', '24', '5', '40', '2022-03-15 12:13:55');

-- --------------------------------------------------------

--
-- Table structure for table `anti`
--

CREATE TABLE `anti` (
  `user282200123` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `password282200123` varchar(100) COLLATE armscii8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `anti`
--

INSERT INTO `anti` (`user282200123`, `password282200123`) VALUES
('Netpackagez@gmail.com', '$2y$10$NOGnx/olR2gbPEF2s.dEp..5qM8cWmwuf9b.WpdQrbBD7oE0zoMnW');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) UNSIGNED NOT NULL,
  `banner` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `hero` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `text` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner`, `hero`, `text`, `date`) VALUES
(8, '@Space-package16474226991638909125.jpg', '  WELCOME TO TOPKONNECT', '  Dreams become possible or impossible by our actions. Your\r\n                      dream of playing professional football depends on your\r\n                      action today. Make that dream possible, join TOPKONNECT today.', '2022-03-16 09:24:59'),
(9, '@Space-package16474231551069783084.jpg', '   WELCOME TO TOPKONNECT', '   Dreams become possible or impossible by our actions. Your dream of playing professional football depends on your action today. Make that dream possible, join TOPKONNECT today.', '2022-03-16 09:32:35'),
(12, '@Space-package16474225233701937.jpg', 'WELCOME TO TOPKONNECT', 'Dreams become possible or impossible by our actions. Your dream of playing professional football depends on your action today. Make that dream possible, join TOPKONNECT today.\r\n', '2022-03-16 09:22:03');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) UNSIGNED NOT NULL,
  `img1` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `topic` mediumtext CHARACTER SET utf8mb4 NOT NULL,
  `textbox` mediumtext CHARACTER SET utf8mb4 NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `img1`, `topic`, `textbox`, `date`) VALUES
(11, '@Space-package164733982679248083.jpg', 'What should i eat as a footballer ?', 'Follow our series of top tips for footballers to gradually but dramatically improve your game.\r\nToday we concentrate on nutrition.\r\n\r\nIt’s All About Your Diet\r\nYou need to start to reflect on what food you are eating. What you put into your body will determine what you can expect to get out of it. At IHM Football Academy our coaching staff are trained to be able to provide players with responsible advice on what to eat and drink to help them keep in good physical shape.\r\n\r\nTake control\r\n\r\nYour diet is your responsibility. It’s ultimately up to you what and how much you eat and drink. Being strict with your diet is going to get you into the best shape possible if you also train well. But, please do not get too worried about it. You can treat yourself to something just because it tastes good every so often. It’s fine to reward yourself every so often.\r\n\r\nWhole grain carbs, protein and limit your fat intake\r\n\r\nSo, what is the best diet for a young footballer?  Carbohydrates and Proteins a', '2022-03-15 10:23:46'),
(12, '@Space-package16473400031329343729.png', 'What makes the best academy?', 'It cannot be disputed that the future belongs to the youth. This rings true with football also. Nurturing talent from a young age has always been key to the success of any football club. However, there is no golden rule on how to develop young players into the football stars of tomorrow. This is not a bad thing, on the contrary, this allows for flexibility: what works for one, doesn’t always work for another. So too is it important to engage with new ventures which come to market and to explore the unexplored, allowing for the application of their own models, culminating in a synthesis of the new and the old.\r\nCompetition among clubs is great and under some of the recent changes made by FIFA, relating to ?Financial Fair Play’ and ?Squad-size limit’, the focus on youth development is even greater. Effective and productive football academies are becoming more of a necessity and clubs are having to pay even more attention to the correct development of their youth on their books.\r\nIn light', '2022-03-15 10:26:43'),
(14, '@Space-package16474181021076273398.jpg', 'PHYSIOTHERAPY IN FOOTBALL', 'Football is nowadays one of the most popular sports in our country and one of the most economically active. Its practice requires the athlete to make the most of his or her conditional qualities, such as basic movement patterns, strength, flexibility, speed and power, which means that the athlete must assume a great sporting commitment. The level of competitiveness is higher every day due to the demands of the game and the competition.\nFor this, there must be several people capable of optimising this performance. Among these professionals we find the figure of the physiotherapist.\n<br>\nThe role of the physiotherapist in football\nHis work consists of planning and executing therapeutic strategies so that the athlete can optimise both the results and the time spent. The task of recovering the functionality of the athlete as soon as possible will always be complex, as the processes have their own physiological process of recovery and repair, but it will be essential or of great importance to be able to count on this professional.\n<br>\nRole of the physiotherapist in football\nIn the practice of this sport we often find football players who have been out of the game for several months, sometimes without knowing how to measure the time of the injury process or the loads for their gradual return to the field of play. Their work is carried out both on and off the pitch in order to be in optimum condition to meet the athlete’s performance requirements.\n<br>\nThe athlete, generally, wants a short recovery process, without thinking that the adaptive process of the damaged structures for a guaranteed return is of vital importance. There is a large percentage of footballers who, if they do not maintain the recovery process within the established time, relapse in their injury.\n<br>\nWhat is the role of the physiotherapist in football?\nDissemination: Ethical duty to advise the athlete in carrying out actions that contribute to improving prevention conditions.\nPlanning: Participate in the planning from the pre-season of the teams together with the staff area, coaching staff and the rest of the team’s professionals.\nPrevention: Avoiding those factors that could cause injuries caused by sporting activity, associated injuries and/or sequelae of the primary injury, and their possible recurrence. <br>\nRecovery: The sports physiotherapist will apply the treatment considered for the injury and associated injuries, trying to alleviate the pain and keep the player away from the field of play for the shortest possible time.\nLearn more about physiotherapy<br>\nReadaptation: The process that must take place in order for the athlete to start practising sport in the appropriate conditions, similar to the one he/she had before the injury. These strategies of physical preparation physiotherapy techniques can range from stretcher work to prevention and strength sessions.<br>\nWhat are the most common injuries in football?\nWhen talking about the most frequent injuries in football, we must refer to muscle injuries before others such as fibrillar ruptures.\n<br>\nFirstly, it is a sport that requires explosive efforts and repeated changes of rhythm, which generate great demands of intensity to the musculature, or there are moments of a large number of accumulated matches, whether we are talking about grassroots football or the components of the Spanish national team, based on this… it is necessary to have professionals such as the physiotherapist, who together with other professionals such as retrainers or physical trainers can help the athlete to maintain the necessary conditional demands.\n<br>\nThe muscle is stressed and excessive sweating occurs. This generates a loss of minerals such as sodium, potassium, magnesium, in addition to the loss of water, so the body suffers dehydration processes. If we do not rehydrate sufficiently or follow a good diet, the muscle suffers and can be a cause of possible injuries.\n<br>\nOther factors influencing injuries\nThe temperature in the environment when playing. If it gets colder there is less blood supply to the muscle or blood circulation, which, when a contraction occurs, there is an increased risk of injury.<br>\nNutrition. We can help prevent muscle injuries (the most common injury in this sport) by having optimal levels of collagen. We have foods that provide us with collagen naturally and that are rich in protein and vitamins C, E, B1, B2, B6, coenzyme Q10 and magnesium. The excess of acidifying foods can produce acidosis in the tissues, that is to say, toxins accumulate that make the tissues more rigid and, therefore, there is a greater risk of suffering fibrillar breaks and tendon degeneration.<br>\nThe surface. In this case, it is the tendons that suffer the most, as they are the ones that adapt to the hardness of the terrain. Training should be carried out on suitable surfaces.', '2022-03-16 08:16:09');

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `idn` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `cartsession`
--

CREATE TABLE `cartsession` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `cartid` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `uid` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `size` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `amt` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_name` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `cuppon_store`
--

CREATE TABLE `cuppon_store` (
  `id` int(11) UNSIGNED NOT NULL,
  `price` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `cuppon` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `dural_filemanager`
--

CREATE TABLE `dural_filemanager` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `file` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `dural_post`
--

CREATE TABLE `dural_post` (
  `id` int(11) UNSIGNED NOT NULL,
  `pro_topic` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `pro_price` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `pic1` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `pic2` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `pic3` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `pic4` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `decription` mediumtext CHARACTER SET utf8mb4 NOT NULL,
  `post_type` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `idn` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) UNSIGNED NOT NULL,
  `gallery` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gallery`, `date`) VALUES
(27, '@Space-package1647423221626063628.jpg', '2022-03-16 09:33:41'),
(28, '@Space-package16474232241014318017.jpg', '2022-03-16 09:33:44'),
(29, '@Space-package16474232271316730606.jpg', '2022-03-16 09:33:47'),
(31, '@Space-package164742323383072321.jpg', '2022-03-16 09:33:53');

-- --------------------------------------------------------

--
-- Table structure for table `hashed_cuppon`
--

CREATE TABLE `hashed_cuppon` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `post_id` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `cuppon` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `our_footballer`
--

CREATE TABLE `our_footballer` (
  `id` int(11) UNSIGNED NOT NULL,
  `player_profile` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `player_name` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `player_weight` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `player_height` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `player_age` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `player_value` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `player_country` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `player_position` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `player_achievement` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `our_service`
--

CREATE TABLE `our_service` (
  `id` int(11) UNSIGNED NOT NULL,
  `banner` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `hero` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `text` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `reviewer`
--

CREATE TABLE `reviewer` (
  `id` int(11) UNSIGNED NOT NULL,
  `img1` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `name` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `textbox` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `reviewer`
--

INSERT INTO `reviewer` (`id`, `img1`, `name`, `textbox`, `date`) VALUES
(4, '@Space-package1647320746764367133.jpg', 'Micheal Wiliams', 'It was fantastic to receive genuine and honest advise from someone who knows the industry.\r\nI found TOPKONNECT and it extremely helpful, trustworthy and accessible and they would bend over backwards for me and my son and time was no object for our family.', '2022-03-15 05:05:46'),
(5, '@Space-package1647320985464921020.jpg', 'Adewale Jimoh', 'I found the people at TOPKONNECT extremely approachable and understanding, as well as being great listeners. They were very patient and welcomed my viewpoint and they didn\'t try to force their own opinion on me or my son.', '2022-03-15 05:09:45'),
(6, '@Space-package1647321315913128814.jpg', 'Rose Jada', 'At 16, my son was still growing and developing as a person, as well as a footballer. As a parent I simply wanted the best for him and through the guidance of MyFirstAgent I feel that we definitely turned to the right people.\r\n\r\nI found Ross to be professional, yet not pushy and he would never force his opinion onto us.', '2022-03-15 05:15:15'),
(7, '@Space-package16473214191890202734.jpg', 'Sarah White', 'TOPKONNECT was able to relate closely to my son and had a welcoming and caring personality which shone through. He was very straight down the line with my son and advised him practically and realistically what options he had available.', '2022-03-15 05:16:59'),
(8, '@Space-package16473217861105199962.jpg', 'Adam James', 'I would strongly recommend the service that TOPKONNECT provides as they are a realistic and down to earth set of people who don\'t fill people with empty promises.', '2022-03-15 05:23:06');

-- --------------------------------------------------------

--
-- Table structure for table `soci`
--

CREATE TABLE `soci` (
  `wat` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `fb` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `inst` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `Phone` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `TWEETER` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `linke` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `email` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `adress` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `soci`
--

INSERT INTO `soci` (`wat`, `fb`, `inst`, `Phone`, `TWEETER`, `linke`, `email`, `adress`, `date`) VALUES
('http://whatsapp.pend.com', 'http://facebook.pend.com', 'http://insatgram.pend', '081-0757-5785 , 0802-932-2941 , 0803-326-1315 , +34-632-263-962', 'http://tweeter.pend', 'http://linkedin.pend', 'info@topkonnect.net', 'No 10, Alara Street, , iwaya ,\n\nLagos , Nigeria.', '2022-03-15 11:24:53');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` int(11) UNSIGNED NOT NULL,
  `gallery` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `gallery`, `date`) VALUES
(13, '@Space-package1647329143949461507.png', '2022-03-15 07:25:43'),
(16, '@Space-package16473291712147331321.png', '2022-03-15 07:26:11'),
(17, '@Space-package1647329243368806515.jpg', '2022-03-15 07:27:23'),
(19, '@Space-package16474148461154703555.png', '2022-03-16 07:14:06'),
(20, '@Space-package16474148681146973552.jpg', '2022-03-16 07:14:28');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `id` int(11) UNSIGNED NOT NULL,
  `post_id` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `user_ip` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_dural_282200123`
--

CREATE TABLE `user_dural_282200123` (
  `id` int(11) UNSIGNED NOT NULL,
  `fname` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `lname` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `email` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `pass` varchar(10000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `user_dural_282200123`
--

INSERT INTO `user_dural_282200123` (`id`, `fname`, `lname`, `email`, `pass`, `date`) VALUES
(46, 'durallite', 'ademola', 'durallite@gmail.com', '$2y$10$dQnQ.BYPDJ6d8WNI3tK0k.N6cQ7igEmOkJk4xJscJT8tAzmSHud7q', '2021-11-23 20:33:12');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `date`) VALUES
(1, 'DESKTOP-DDR1HLM', '2021-11-14 12:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `webd`
--

CREATE TABLE `webd` (
  `id` int(11) UNSIGNED NOT NULL,
  `img1` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `img2` varchar(1000) COLLATE armscii8_bin NOT NULL,
  `webname` mediumtext CHARACTER SET utf8mb4 NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `webd`
--

INSERT INTO `webd` (`id`, `img1`, `img2`, `webname`, `date`) VALUES
(1, '@Space-package1647344484535572972.png', '@Space-package164734448482021416.jpg', 'Topkonect', '2022-03-15 11:41:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cartsession`
--
ALTER TABLE `cartsession`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cuppon_store`
--
ALTER TABLE `cuppon_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dural_filemanager`
--
ALTER TABLE `dural_filemanager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dural_post`
--
ALTER TABLE `dural_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hashed_cuppon`
--
ALTER TABLE `hashed_cuppon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_footballer`
--
ALTER TABLE `our_footballer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_service`
--
ALTER TABLE `our_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviewer`
--
ALTER TABLE `reviewer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_dural_282200123`
--
ALTER TABLE `user_dural_282200123`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webd`
--
ALTER TABLE `webd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cartsession`
--
ALTER TABLE `cartsession`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cuppon_store`
--
ALTER TABLE `cuppon_store`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dural_filemanager`
--
ALTER TABLE `dural_filemanager`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dural_post`
--
ALTER TABLE `dural_post`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `hashed_cuppon`
--
ALTER TABLE `hashed_cuppon`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_footballer`
--
ALTER TABLE `our_footballer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `our_service`
--
ALTER TABLE `our_service`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviewer`
--
ALTER TABLE `reviewer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_dural_282200123`
--
ALTER TABLE `user_dural_282200123`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `webd`
--
ALTER TABLE `webd`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
