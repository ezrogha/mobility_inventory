-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2017 at 03:02 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fathersheart2`
--

-- --------------------------------------------------------

--
-- Table structure for table `2017_aug`
--

CREATE TABLE IF NOT EXISTS `2017_aug` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `date` varchar(20) NOT NULL,
  `back` int(11) NOT NULL,
  `thigh` int(11) NOT NULL,
  `leg` int(11) NOT NULL,
  `hips` int(11) NOT NULL,
  `disabilitystory` text NOT NULL,
  `disability` varchar(100) NOT NULL,
  `causeofdisability` varchar(100) NOT NULL,
  `currentmobility` varchar(100) NOT NULL,
  `alreadyhas` varchar(3) NOT NULL,
  `whyhas` varchar(100) NOT NULL,
  `everhad` varchar(3) NOT NULL,
  `whyhad` varchar(100) NOT NULL,
  `whywantchair` varchar(100) NOT NULL,
  `givemobility` varchar(64) NOT NULL,
  `notgiven` text NOT NULL,
  `audio` varchar(100) NOT NULL,
  `followup` varchar(3) NOT NULL,
  `sit_alone` varchar(100) NOT NULL,
  `often_movement` varchar(100) NOT NULL,
  `did_you_expect` varchar(100) NOT NULL,
  `live_with` varchar(100) NOT NULL,
  `helps_you` varchar(100) NOT NULL,
  `work_school` varchar(100) NOT NULL,
  `not_work_school` varchar(100) NOT NULL,
  `how_life_change` varchar(100) NOT NULL,
  `thanks` varchar(200) NOT NULL,
  `already_saved` varchar(100) NOT NULL,
  `got_saved` varchar(100) NOT NULL,
  `family_saved` varchar(100) NOT NULL,
  `did_pray` varchar(100) NOT NULL,
  `distrib_id` varchar(20) NOT NULL,
  `subcounty` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `beforee` varchar(100) NOT NULL,
  `afterr` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `2017_aug`
--

INSERT INTO `2017_aug` (`id`, `fullname`, `phone`, `age`, `gender`, `date`, `back`, `thigh`, `leg`, `hips`, `disabilitystory`, `disability`, `causeofdisability`, `currentmobility`, `alreadyhas`, `whyhas`, `everhad`, `whyhad`, `whywantchair`, `givemobility`, `notgiven`, `audio`, `followup`, `sit_alone`, `often_movement`, `did_you_expect`, `live_with`, `helps_you`, `work_school`, `not_work_school`, `how_life_change`, `thanks`, `already_saved`, `got_saved`, `family_saved`, `did_pray`, `distrib_id`, `subcounty`, `district`, `beforee`, `afterr`) VALUES
(1, 'Otim Paul', '0758378992', 72, 'male', '08/15/2017', 7, 7, 7, 7, 'Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas', 'Hydrocephalus', 'Stroke', 'Walks with difficulty', 'no', '', 'no', '', 'Becoz', 'gen2_m_17', '', '', '0', 'no', 'Evening', 'yes', 'Cousin', 'Cousin', 'yes', '', 'Alot', 'What can''t give back to replay fathers heart!!', 'no', 'yes', 'no', 'no', 'distrib_id', '', 'Tororo', 'images/bef1.jpg', 'images/aft16991646_1421486357890979_7636821233877371618_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `2017_august`
--

CREATE TABLE IF NOT EXISTS `2017_august` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `date` varchar(20) NOT NULL,
  `back` int(11) NOT NULL,
  `thigh` int(11) NOT NULL,
  `leg` int(11) NOT NULL,
  `hips` int(11) NOT NULL,
  `disabilitystory` text NOT NULL,
  `disability` varchar(100) NOT NULL,
  `causeofdisability` varchar(100) NOT NULL,
  `currentmobility` varchar(100) NOT NULL,
  `alreadyhas` varchar(3) NOT NULL,
  `whyhas` varchar(100) NOT NULL,
  `everhad` varchar(3) NOT NULL,
  `whyhad` varchar(100) NOT NULL,
  `whywantchair` varchar(100) NOT NULL,
  `givemobility` varchar(64) NOT NULL,
  `notgiven` text NOT NULL,
  `audio` varchar(100) NOT NULL,
  `followup` varchar(3) NOT NULL,
  `sit_alone` varchar(100) NOT NULL,
  `often_movement` varchar(100) NOT NULL,
  `did_you_expect` varchar(100) NOT NULL,
  `live_with` varchar(100) NOT NULL,
  `helps_you` varchar(100) NOT NULL,
  `work_school` varchar(100) NOT NULL,
  `not_work_school` varchar(100) NOT NULL,
  `how_life_change` varchar(100) NOT NULL,
  `thanks` varchar(200) NOT NULL,
  `already_saved` varchar(100) NOT NULL,
  `got_saved` varchar(100) NOT NULL,
  `family_saved` varchar(100) NOT NULL,
  `did_pray` varchar(100) NOT NULL,
  `distrib_id` varchar(20) NOT NULL,
  `subcounty` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `beforee` varchar(100) NOT NULL,
  `afterr` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `2017_august`
--

INSERT INTO `2017_august` (`id`, `fullname`, `phone`, `age`, `gender`, `date`, `back`, `thigh`, `leg`, `hips`, `disabilitystory`, `disability`, `causeofdisability`, `currentmobility`, `alreadyhas`, `whyhas`, `everhad`, `whyhad`, `whywantchair`, `givemobility`, `notgiven`, `audio`, `followup`, `sit_alone`, `often_movement`, `did_you_expect`, `live_with`, `helps_you`, `work_school`, `not_work_school`, `how_life_change`, `thanks`, `already_saved`, `got_saved`, `family_saved`, `did_pray`, `distrib_id`, `subcounty`, `district`, `beforee`, `afterr`) VALUES
(2, 'Jumani Dickson', '078977377', 94, 'male', '08/15/2017', 32, 56, 67, 77, 'Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas', 'Spinal Bifida', 'Old Age', 'Old Wheel Chair', 'no', '', 'no', '', 'I want move properly', 'hb_11', '', '', '0', 'no', 'Often', 'no', 'Brother', 'Uncle', 'yes', '', 'ALot', 'God Bless Father''s Heart', 'yes', 'yes', 'yes', 'no', 'distrib_id', 'Kawempe', 'Kampala', 'images/bef16991646_1421486357890979_7636821233877371618_o.jpg', 'images/aft16991736_1421485774557704_9152562232985701331_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `2017_feb`
--

CREATE TABLE IF NOT EXISTS `2017_feb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `date` varchar(20) NOT NULL,
  `back` int(11) NOT NULL,
  `thigh` int(11) NOT NULL,
  `leg` int(11) NOT NULL,
  `hips` int(11) NOT NULL,
  `disabilitystory` text NOT NULL,
  `disability` varchar(100) NOT NULL,
  `causeofdisability` varchar(100) NOT NULL,
  `currentmobility` varchar(100) NOT NULL,
  `alreadyhas` varchar(3) NOT NULL,
  `whyhas` varchar(100) NOT NULL,
  `everhad` varchar(3) NOT NULL,
  `whyhad` varchar(100) NOT NULL,
  `whywantchair` varchar(100) NOT NULL,
  `givemobility` varchar(64) NOT NULL,
  `notgiven` text NOT NULL,
  `audio` varchar(100) NOT NULL,
  `followup` int(11) NOT NULL,
  `sit_alone` varchar(100) NOT NULL,
  `often_movement` varchar(100) NOT NULL,
  `did_you_expect` varchar(100) NOT NULL,
  `live_with` varchar(100) NOT NULL,
  `helps_you` varchar(100) NOT NULL,
  `work_school` varchar(100) NOT NULL,
  `not_work_school` varchar(100) NOT NULL,
  `how_life_change` varchar(100) NOT NULL,
  `thanks` varchar(200) NOT NULL,
  `already_saved` varchar(100) NOT NULL,
  `got_saved` varchar(100) NOT NULL,
  `family_saved` varchar(100) NOT NULL,
  `did_pray` varchar(100) NOT NULL,
  `distrib_id` varchar(20) NOT NULL,
  `subcounty` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `beforee` varchar(100) NOT NULL,
  `afterr` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `2017_feb`
--

INSERT INTO `2017_feb` (`id`, `fullname`, `phone`, `age`, `gender`, `date`, `back`, `thigh`, `leg`, `hips`, `disabilitystory`, `disability`, `causeofdisability`, `currentmobility`, `alreadyhas`, `whyhas`, `everhad`, `whyhad`, `whywantchair`, `givemobility`, `notgiven`, `audio`, `followup`, `sit_alone`, `often_movement`, `did_you_expect`, `live_with`, `helps_you`, `work_school`, `not_work_school`, `how_life_change`, `thanks`, `already_saved`, `got_saved`, `family_saved`, `did_pray`, `distrib_id`, `subcounty`, `district`, `beforee`, `afterr`) VALUES
(3, 'Kato Peter', '078293893', 6, 'male', '08/15/2017', 5, 5, 5, 5, 'Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas', 'Amputation', 'Accident', 'crawls', 'no', '', 'no', '', 'Becoz', 'gen2_s_13', '', '', 0, 'no', 'Afternoon', 'yes', 'Sister', 'Cousin', 'yes', '', 'Alot', 'Am so thankful, I can be able to walk now', 'no', 'yes', 'yes', 'no', 'distrib_id', 'Nsangi', 'Wakiso', 'images/befaft10-19-15-Blog-Pic.jpg', 'images/aft17504271_1443449035694711_8353984230339078369_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `2017_jan`
--

CREATE TABLE IF NOT EXISTS `2017_jan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `date` varchar(20) NOT NULL,
  `back` int(11) NOT NULL,
  `thigh` int(11) NOT NULL,
  `leg` int(11) NOT NULL,
  `hips` int(11) NOT NULL,
  `disabilitystory` text NOT NULL,
  `disability` varchar(100) NOT NULL,
  `causeofdisability` varchar(100) NOT NULL,
  `currentmobility` varchar(100) NOT NULL,
  `alreadyhas` varchar(3) NOT NULL,
  `whyhas` varchar(100) NOT NULL,
  `everhad` varchar(3) NOT NULL,
  `whyhad` varchar(100) NOT NULL,
  `whywantchair` varchar(100) NOT NULL,
  `givemobility` varchar(64) NOT NULL,
  `notgiven` text NOT NULL,
  `audio` varchar(100) NOT NULL,
  `followup` varchar(3) NOT NULL,
  `sit_alone` varchar(100) NOT NULL,
  `often_movement` varchar(100) NOT NULL,
  `did_you_expect` varchar(100) NOT NULL,
  `live_with` varchar(100) NOT NULL,
  `helps_you` varchar(100) NOT NULL,
  `work_school` varchar(100) NOT NULL,
  `not_work_school` varchar(100) NOT NULL,
  `how_life_change` varchar(100) NOT NULL,
  `thanks` varchar(200) NOT NULL,
  `already_saved` varchar(100) NOT NULL,
  `got_saved` varchar(100) NOT NULL,
  `family_saved` varchar(100) NOT NULL,
  `did_pray` varchar(100) NOT NULL,
  `distrib_id` varchar(20) NOT NULL,
  `subcounty` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `beforee` varchar(100) NOT NULL,
  `afterr` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `2017_jan`
--

INSERT INTO `2017_jan` (`id`, `fullname`, `phone`, `age`, `gender`, `date`, `back`, `thigh`, `leg`, `hips`, `disabilitystory`, `disability`, `causeofdisability`, `currentmobility`, `alreadyhas`, `whyhas`, `everhad`, `whyhad`, `whywantchair`, `givemobility`, `notgiven`, `audio`, `followup`, `sit_alone`, `often_movement`, `did_you_expect`, `live_with`, `helps_you`, `work_school`, `not_work_school`, `how_life_change`, `thanks`, `already_saved`, `got_saved`, `family_saved`, `did_pray`, `distrib_id`, `subcounty`, `district`, `beforee`, `afterr`) VALUES
(2, 'Janet Jane', '0797328788', 79, 'female', '08/15/2017', 24, 45, 65, 77, 'It has really been a hard experience for me since i had to drag my body all the time to get where i wanted to go. Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas..', 'Hydrocephalus', 'Old Age', 'crawls', 'no', '', 'no', '', 'I wont be able to wash clothes all the time', 'gen3_m_17', '', '', '0', 'no', 'Night', 'no', 'Sister', 'Sister', 'yes', '', 'I will be able to move faster', 'May the Whole mighty bless you', 'yes', 'yes', 'yes', 'no', 'distrib_id', 'Central', 'Kampala', 'images/bef17504271_1443449035694711_8353984230339078369_o.jpg', 'images/aft17620334_1455447251161556_8613098223181446941_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `2017_march`
--

CREATE TABLE IF NOT EXISTS `2017_march` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `date` varchar(20) NOT NULL,
  `back` int(11) NOT NULL,
  `thigh` int(11) NOT NULL,
  `leg` int(11) NOT NULL,
  `hips` int(11) NOT NULL,
  `disabilitystory` text NOT NULL,
  `disability` varchar(100) NOT NULL,
  `causeofdisability` varchar(100) NOT NULL,
  `currentmobility` varchar(100) NOT NULL,
  `alreadyhas` varchar(3) NOT NULL,
  `whyhas` varchar(100) NOT NULL,
  `everhad` varchar(3) NOT NULL,
  `whyhad` varchar(100) NOT NULL,
  `whywantchair` varchar(100) NOT NULL,
  `givemobility` varchar(64) NOT NULL,
  `notgiven` text NOT NULL,
  `audio` varchar(100) NOT NULL,
  `followup` varchar(3) NOT NULL,
  `sit_alone` varchar(100) NOT NULL,
  `often_movement` varchar(100) NOT NULL,
  `did_you_expect` varchar(100) NOT NULL,
  `live_with` varchar(100) NOT NULL,
  `helps_you` varchar(100) NOT NULL,
  `work_school` varchar(100) NOT NULL,
  `not_work_school` varchar(100) NOT NULL,
  `how_life_change` varchar(100) NOT NULL,
  `thanks` varchar(200) NOT NULL,
  `already_saved` varchar(100) NOT NULL,
  `got_saved` varchar(100) NOT NULL,
  `family_saved` varchar(100) NOT NULL,
  `did_pray` varchar(100) NOT NULL,
  `distrib_id` varchar(20) NOT NULL,
  `subcounty` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `beforee` varchar(100) NOT NULL,
  `afterr` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `2017_march`
--

INSERT INTO `2017_march` (`id`, `fullname`, `phone`, `age`, `gender`, `date`, `back`, `thigh`, `leg`, `hips`, `disabilitystory`, `disability`, `causeofdisability`, `currentmobility`, `alreadyhas`, `whyhas`, `everhad`, `whyhad`, `whywantchair`, `givemobility`, `notgiven`, `audio`, `followup`, `sit_alone`, `often_movement`, `did_you_expect`, `live_with`, `helps_you`, `work_school`, `not_work_school`, `how_life_change`, `thanks`, `already_saved`, `got_saved`, `family_saved`, `did_pray`, `distrib_id`, `subcounty`, `district`, `beforee`, `afterr`) VALUES
(2, 'Aketch Joyce', '0788819893', 8, 'female', '08/15/2017', 32, 78, 9, 90, 'Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas', 'Hydrocephalus', 'Polio', 'crawls', 'no', '', 'no', '', 'Becoz', 'gen2_xl_20', '', '', '0', 'no', 'Night', 'no', 'Uncle', 'Brother', 'yes', '', 'Alot', 'Thankz to the Lord', 'no', 'no', 'no', 'no', 'distrib_id', '', 'Pallisa', 'images/bef6.jpg', 'images/aft20286837_1586843288021951_7774978701358374385_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `all_districts`
--

CREATE TABLE IF NOT EXISTS `all_districts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `district` varchar(100) NOT NULL,
  `distribution` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=114 ;

--
-- Dumping data for table `all_districts`
--

INSERT INTO `all_districts` (`id`, `district`, `distribution`) VALUES
(1, 'Kampala', 'kpla'),
(2, 'Wakiso', 'wkso'),
(3, 'Kitgum', 'kitg'),
(4, 'Kaabong', 'kaab'),
(5, 'Kotido', 'koti'),
(6, 'Moroto', 'moro'),
(7, 'Abim', 'abim'),
(8, 'Amuria', 'amur'),
(9, 'Nakapiripirit', 'nkpt'),
(10, 'Kumi', 'kumi'),
(11, 'Katakwi', 'ktkw'),
(12, 'Kapchorwa', 'kapc'),
(13, 'Buikwe', 'buik'),
(14, 'Bukomansimbi', 'buko'),
(15, 'Butambala', 'buta'),
(16, 'Buvuma', 'buvu'),
(17, 'Gomba', 'gomb'),
(18, 'Kalangala', 'klgl'),
(19, 'Kalungu', 'kalu'),
(20, 'Kayunga', 'kayu'),
(21, 'Kiboga', 'kibo'),
(22, 'Kyankwanzi', 'kyan'),
(23, 'Luweero', 'luwe'),
(24, 'Lwengo', 'lwen'),
(25, 'Lyantonde', 'lyan'),
(26, 'Masaka', 'masa'),
(27, 'Mityana', 'mity'),
(28, 'Mpigi', 'mpig'),
(29, 'Mubende', 'mube'),
(30, 'Mukono', 'muko'),
(31, 'Nakaseke', 'naks'),
(32, 'Nakasongola', 'nkso'),
(33, 'Rakai', 'raka'),
(34, 'Ssembabule', 'semb'),
(35, 'Budaka', 'buda'),
(36, 'Bududa', 'budu'),
(37, 'Bugiri', 'bugi'),
(38, 'Bukedea', 'buke'),
(39, 'Bukwa', 'bukw'),
(40, 'Bulambuli', 'bula'),
(41, 'Busia', 'busi'),
(42, 'Butaleja', 'buta'),
(43, 'Buyende', 'buye'),
(44, 'Iganga', 'igan'),
(45, 'Jinja', 'jinj'),
(46, 'Kaberamaido', 'kabe'),
(47, 'Kaliro', 'kali'),
(48, 'Kamuli', 'kamu'),
(49, 'Kibuku', 'kibu'),
(50, 'Kween', 'kwen'),
(51, 'Luuka', 'luka'),
(52, 'Manafwa', 'manf'),
(53, 'Mayuge', 'mayu'),
(54, 'Mbale', 'mbal'),
(55, 'Namayingo', 'nama'),
(56, 'Namutumba', 'namu'),
(57, 'Ngora', 'ngor'),
(58, 'Pallisa', 'pali'),
(59, 'Serere', 'sere'),
(60, 'Sironko', 'siro'),
(61, 'Soroti', 'soro'),
(62, 'Tororo', 'torr'),
(63, 'Adjumani	', 'adju'),
(64, 'Agago', 'agag'),
(65, 'Alebtong', 'aleb'),
(66, 'Amolatar', 'amol'),
(67, 'Amudat', 'amud'),
(68, 'Amuru', 'amur'),
(69, 'Apac', 'apac'),
(70, 'Arua', 'arua'),
(71, 'Dokolo', 'doko'),
(72, 'Gulu', 'gulu'),
(74, 'Koboko', 'kobo'),
(75, 'Kole', 'kole'),
(76, 'Lamwo', 'lamw'),
(77, 'Lira', 'lira'),
(78, 'Maracha', 'mara'),
(79, 'Moyo', 'moyo'),
(80, 'Napak', 'napk'),
(81, 'Nebbi', 'nebi'),
(82, 'Nwoya', 'nwoy'),
(83, 'Otuke', 'otuk'),
(84, 'Oyam', 'oyam'),
(85, 'Pader', 'padr'),
(86, 'Yumbe', 'yumb'),
(87, 'Zombo', 'zomb'),
(88, 'Buhweju', 'buhw'),
(89, 'Buliisa', 'buli'),
(90, 'Bundibugyo', 'bund'),
(91, 'Bushenyi', 'bush'),
(92, 'Hoima', 'hoim'),
(93, 'Ibanda', 'iban'),
(94, 'Isingiro', 'isin'),
(95, 'Kabale', 'kabl'),
(96, 'Kabarole', 'kbrl'),
(97, 'Kamwenge', 'kmwg'),
(98, 'Kanungu', 'kanu'),
(99, 'Kasese', 'kass'),
(100, 'Kibaale', 'kiba'),
(101, 'Kiruhura', 'kiru'),
(102, 'Kiryandongo	', 'kiry'),
(103, 'Kisoro', 'kiso'),
(104, 'Kyegegwa', 'kyeg'),
(105, 'Kyenjojo', 'kyen'),
(106, 'Masindi', 'masi'),
(107, 'Mbarara', 'mbar'),
(108, 'Mitooma', 'mito'),
(109, 'Ntoroko', 'ntor'),
(110, 'Ntungamo', 'ntun'),
(111, 'Rubirizi', 'rubi'),
(112, 'Rukungiri', 'ruku'),
(113, 'Sheema', 'shem');

-- --------------------------------------------------------

--
-- Table structure for table `cane`
--

CREATE TABLE IF NOT EXISTS `cane` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `added` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `given` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cane`
--

INSERT INTO `cane` (`id`, `date`, `added`, `available`, `given`) VALUES
(1, '0', 0, 0, 0),
(2, '22/07/2017', 2, 2, 0),
(3, '', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `crutches`
--

CREATE TABLE IF NOT EXISTS `crutches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `added` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `given` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `crutches`
--

INSERT INTO `crutches` (`id`, `date`, `added`, `available`, `given`) VALUES
(1, '0', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `distribution`
--

CREATE TABLE IF NOT EXISTS `distribution` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `distribution` varchar(30) NOT NULL,
  `district` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `distribution`
--

INSERT INTO `distribution` (`id`, `distribution`, `district`) VALUES
(6, '2017_jan', 'Kampala'),
(7, '2017_feb', 'Wakiso'),
(8, '2017_march', 'Pallisa'),
(9, '2017_august', 'Kampala'),
(10, '2017_Aug', 'Tororo');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subcounty` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `subcounty`, `district`) VALUES
(1, 'Central', 'Kampala'),
(2, 'Rubaga', 'Kampala'),
(3, 'Nakawa', 'Kampala'),
(4, 'Makindye', 'Kampala'),
(5, 'Kawempe', 'Kampala'),
(7, 'Nsangi', 'Wakiso');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `username`, `password`) VALUES
(1, 'fathersheart', '8cb2237d0679ca88db6464eac60da96345513964');

-- --------------------------------------------------------

--
-- Table structure for table `gen1`
--

CREATE TABLE IF NOT EXISTS `gen1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `added` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `given` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gen1`
--

INSERT INTO `gen1` (`id`, `date`, `added`, `available`, `given`) VALUES
(1, '0', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gen2_l_18_5`
--

CREATE TABLE IF NOT EXISTS `gen2_l_18_5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `added` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `given` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gen2_l_18_5`
--

INSERT INTO `gen2_l_18_5` (`id`, `date`, `added`, `available`, `given`) VALUES
(1, '0', 0, -1, 1),
(2, '22/07/2017', 1, 0, 1),
(3, '', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gen2_m_17`
--

CREATE TABLE IF NOT EXISTS `gen2_m_17` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `added` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `given` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gen2_m_17`
--

INSERT INTO `gen2_m_17` (`id`, `date`, `added`, `available`, `given`) VALUES
(1, '0', 0, -1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gen2_s_13`
--

CREATE TABLE IF NOT EXISTS `gen2_s_13` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `added` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `given` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gen2_s_13`
--

INSERT INTO `gen2_s_13` (`id`, `date`, `added`, `available`, `given`) VALUES
(1, '0', 0, -1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gen2_xl_20`
--

CREATE TABLE IF NOT EXISTS `gen2_xl_20` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `added` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `given` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gen2_xl_20`
--

INSERT INTO `gen2_xl_20` (`id`, `date`, `added`, `available`, `given`) VALUES
(1, '0', 0, -1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gen3_l_18_5`
--

CREATE TABLE IF NOT EXISTS `gen3_l_18_5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `added` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `given` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gen3_l_18_5`
--

INSERT INTO `gen3_l_18_5` (`id`, `date`, `added`, `available`, `given`) VALUES
(1, '0', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gen3_m_17`
--

CREATE TABLE IF NOT EXISTS `gen3_m_17` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `added` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `given` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gen3_m_17`
--

INSERT INTO `gen3_m_17` (`id`, `date`, `added`, `available`, `given`) VALUES
(1, '0', 0, -1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gen3_s_13`
--

CREATE TABLE IF NOT EXISTS `gen3_s_13` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `added` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `given` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gen3_s_13`
--

INSERT INTO `gen3_s_13` (`id`, `date`, `added`, `available`, `given`) VALUES
(1, '0', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gen3_xl_20`
--

CREATE TABLE IF NOT EXISTS `gen3_xl_20` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `added` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `given` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gen3_xl_20`
--

INSERT INTO `gen3_xl_20` (`id`, `date`, `added`, `available`, `given`) VALUES
(1, '0', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hb_11`
--

CREATE TABLE IF NOT EXISTS `hb_11` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `added` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `given` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hb_11`
--

INSERT INTO `hb_11` (`id`, `date`, `added`, `available`, `given`) VALUES
(1, '0', 0, -1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hb_13`
--

CREATE TABLE IF NOT EXISTS `hb_13` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `added` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `given` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hb_13`
--

INSERT INTO `hb_13` (`id`, `date`, `added`, `available`, `given`) VALUES
(1, '0', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL,
  `before` varchar(100) NOT NULL,
  `after` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `before`, `after`) VALUES
(1497915628, 'images/387926_287153681327805_1505794624_n.jpg', 'images/308173_264646803578493_2092216388_n.jpg'),
(1497916592, 'images/befsnapshot20150428004756.jpg', 'images/befsnapshot20150429195819.jpg'),
(1499857537, 'images/bef1497535656.jpg', 'images/aft1497535673.jpg'),
(1500140670, 'images/bef2015_lamborghini_aventador_lp700_4_pirelli_edition-wide.jpg', 'images/aft2007_ford_shelby_gt500_logo-wallpaper-1280x800.jpg'),
(1500142435, 'images/befadv_1_corvette_z06-wallpaper-1280x800.jpg', 'images/aft26480-mercedes-benz-cls63-amg-1366x768-car-wallpaper.jpg'),
(1500142664, 'images/bef2014_vorsteiner_lamborghini_aventador_v_zaragoza_5-wide.jpg', 'images/aft26480-mercedes-benz-cls63-amg-1366x768-car-wallpaper.jpg'),
(1500142848, 'images/bef2014_vorsteiner_lamborghini_aventador_v_zaragoza_5-wide.jpg', 'images/aft26480-mercedes-benz-cls63-amg-1366x768-car-wallpaper.jpg'),
(1500142987, 'images/bef2014_vorsteiner_lamborghini_aventador_v_zaragoza_5-wide.jpg', 'images/aft26480-mercedes-benz-cls63-amg-1366x768-car-wallpaper.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `Cane` int(11) NOT NULL,
  `White_canes` int(11) NOT NULL,
  `Walkers` int(11) NOT NULL,
  `Crutches` int(11) NOT NULL,
  `GEN1` int(11) NOT NULL,
  `GEN2_S_13` int(11) NOT NULL,
  `GEN2_M_17` int(11) NOT NULL,
  `GEN2_L_18_5` int(11) NOT NULL,
  `GEN2_XL_20` int(11) NOT NULL,
  `GEN3_S_13` int(11) NOT NULL,
  `GEN3_M_17` int(11) NOT NULL,
  `GEN3_L_18_5` int(11) NOT NULL,
  `GEN3_XL_20` int(11) NOT NULL,
  `JAF` int(11) NOT NULL,
  `HB_11` int(11) NOT NULL,
  `HB_13` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `date`, `Cane`, `White_canes`, `Walkers`, `Crutches`, `GEN1`, `GEN2_S_13`, `GEN2_M_17`, `GEN2_L_18_5`, `GEN2_XL_20`, `GEN3_S_13`, `GEN3_M_17`, `GEN3_L_18_5`, `GEN3_XL_20`, `JAF`, `HB_11`, `HB_13`) VALUES
(1, '10/07/2017', 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, '16/07/2017', 102, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, '17/07/2017', 105, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, '17/07/2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, '17/07/2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, '17/07/2017', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, '17/07/2017', 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jaf`
--

CREATE TABLE IF NOT EXISTS `jaf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `added` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `given` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `jaf`
--

INSERT INTO `jaf` (`id`, `date`, `added`, `available`, `given`) VALUES
(1, '0', 0, -1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `staff` varchar(100) NOT NULL,
  `recipient` varchar(100) NOT NULL,
  `rating` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `staff`, `recipient`, `rating`) VALUES
(1, 'Welishe Enock', 'Semwanga Paul', '4'),
(3, 'Admin', 'Semwanga Paul', '5'),
(4, 'Admin', 'Janet Jane', '4'),
(5, 'Admin', 'Janet Janee', '3'),
(6, 'Welishe Enock', 'Janet Jane', '2');

-- --------------------------------------------------------

--
-- Table structure for table `recipients`
--

CREATE TABLE IF NOT EXISTS `recipients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `date` varchar(20) NOT NULL,
  `back` int(11) NOT NULL,
  `thigh` int(11) NOT NULL,
  `leg` int(11) NOT NULL,
  `hips` int(11) NOT NULL,
  `disabilitystory` text NOT NULL,
  `disability` varchar(100) NOT NULL,
  `causeofdisability` varchar(100) NOT NULL,
  `currentmobility` varchar(100) NOT NULL,
  `alreadyhas` varchar(3) NOT NULL,
  `whyhas` varchar(100) NOT NULL,
  `everhad` varchar(3) NOT NULL,
  `whyhad` varchar(100) NOT NULL,
  `whywantchair` varchar(100) NOT NULL,
  `givemobility` varchar(64) NOT NULL,
  `notgiven` text NOT NULL,
  `audio` varchar(100) NOT NULL,
  `followup` varchar(3) NOT NULL,
  `sit_alone` varchar(100) NOT NULL,
  `did_you_expect` varchar(100) NOT NULL,
  `live_with` varchar(100) NOT NULL,
  `helps_you` varchar(100) NOT NULL,
  `work_school` varchar(100) NOT NULL,
  `not_work_school` varchar(100) NOT NULL,
  `how_life_change` varchar(100) NOT NULL,
  `thanks` varchar(100) NOT NULL,
  `already_saved` varchar(100) NOT NULL,
  `got_saved` varchar(100) NOT NULL,
  `family_saved` varchar(100) NOT NULL,
  `did_pray` varchar(100) NOT NULL,
  `distribution` varchar(20) NOT NULL,
  `distrib_id` varchar(20) NOT NULL,
  `subcounty` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `img_id` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `recipients`
--

INSERT INTO `recipients` (`id`, `fullname`, `phone`, `age`, `gender`, `date`, `back`, `thigh`, `leg`, `hips`, `disabilitystory`, `disability`, `causeofdisability`, `currentmobility`, `alreadyhas`, `whyhas`, `everhad`, `whyhad`, `whywantchair`, `givemobility`, `notgiven`, `audio`, `followup`, `sit_alone`, `did_you_expect`, `live_with`, `helps_you`, `work_school`, `not_work_school`, `how_life_change`, `thanks`, `already_saved`, `got_saved`, `family_saved`, `did_pray`, `distribution`, `distrib_id`, `subcounty`, `district`, `img_id`) VALUES
(10, 'Namusoke Deborah', '89820232', 5, 'Female', '06/20/2017', 4, 4, 4, 4, 'This is my story Namusoke. On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.\r\nYou can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you \\e looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.\r\n', 'Amputation', 'Accident', 'crutches', 'no', ' ewk', 'no', ' ekwl', ' ekw', ' ', ' ', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', 'kpla1', 'kpla1_10', 'Central', 'Kampala', 1497915628),
(11, 'Denis Micheal', '89685787', 7, 'Male', '06/20/2017', 5, 5, 5, 5, 'This is Musoke''s Story.\r\nOn the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.\r\nYou can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.\r\nTo change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command. Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.\r\n', 'Hydrocephalus', 'Accident', 'carried', 'no', ' ', 'yes', ' dslijdsp', ' dso', ' ', ' ', '', 'yes', '', '', '', '', '', '', '', '', '', '', '', '', 'kpla1', 'kpla1_11', 'Nsangi', 'Wakiso', 1497916592),
(15, 'fdsf', '678219', 56, 'male', '07/12/2017', 3, 3, 3, 3, 'faipj', 'Hydrocephalus', 'Malaria', 'crawls', 'no', '', 'no', '', 'fd', 'GEN2_M17', '', '', 'no', 'yes', 'yes', 'Sister', 'Sister', 'yes', '', '', 'thanx', 'yes', 'yes', 'yes', 'yes', 'kpla2', 'kpla2_15', '', 'Kampala', 1499853842),
(17, 'wio', '897979', 7, 'male', '07/12/2017', 5, 5, 5, 2, 'ewioio', 'Celebral Paisy', 'Birth Defect/Trauma', 'carried', 'no', '', 'yes', '', 'fdeds', 'GEN2_XL20', '', '', 'no', 'yes', 'yes', 'Sister', 'Sister', 'no', '', '', 'fedfw', 'yes', 'yes', 'yes', 'yes', 'kpla2', 'kpla2_17', '', 'Kampala', 1499854307),
(19, 'TY', 'IU', 6, 'male', '07/12/2017', 2, 2, 2, 2, 'ODSIP', 'Celebral Paisy', 'Accident', 'crawls', 'no', '', 'yes', '', 'DS', 'GEN2_M17', '', '', 'no', 'yes', 'yes', 'Sister', 'Brother', 'yes', '', '', 'DS', 'yes', 'yes', 'yes', 'no', 'kpla2', 'kpla2_19', '', 'Kampala', 1499857656),
(20, 'TU', '08', 7, 'male', '07/12/2017', 3, 3, 3, 3, 'OSDIPK', 'Hydrocephalus', 'Birth Defect/Trauma', 'crutches', 'yes', '', 'yes', '', 'DOS', 'GEN2_L18_5', '', '', 'no', 'yes', 'yes', 'Sister', 'Brother', 'yes', '', '', 'DF', 'yes', 'yes', 'yes', 'yes', 'kpla1', 'kpla1_20', '', 'Kampala', 1499857842),
(21, 'ERWQ', '234212', 39, 'male', '07/15/2017', 3, 3, 3, 3, 'GTFRGWRT', 'Muscular Dystrophy', 'Birth Defect/Trauma', 'Walks with difficulty', 'yes', 'T43', 'yes', '', 'T43TET', 'GEN2_L18_5', '', '', 'no', 'yes', 'yes', 'Sister', 'Cousin', 'yes', '', 'TYWY', 'QRETRGE', 'yes', 'yes', 'yes', 'yes', 'july_2017', 'july_2017_21', '', 'Kampala', 1500135598),
(23, 'fga', '78689', 75, 'male', '07/16/2017', 5, 5, 5, 5, 'jsbknjlv', 'Amputation', 'Accident', 'crawls', 'no', '', 'no', '', 'dsds', 'GEN2_S13', '', '', 'no', 'yes', 'yes', 'Father', 'Gurdian', 'yes', '', 'dassadsdd', 'sdls;', 'yes', 'yes', 'yes', 'yes', '2016_march', '2016_march_22', '', 'Kampala', 1500203695);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `firstname`, `lastname`, `username`, `phone`, `password`) VALUES
(1, 'welishe', 'Enock', 'wenock', '0789399933', 'b234ff822fce16cc094f970cd2ab7fb36d46597e');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `firstname`, `lastname`, `username`, `phone`, `password`) VALUES
(1, 'Timo', 'Warner', 'Tiwa', '0703277282', '57fca03af44a7f08d536e36f4763f472afdff761');

-- --------------------------------------------------------

--
-- Table structure for table `walkers`
--

CREATE TABLE IF NOT EXISTS `walkers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `added` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `given` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `walkers`
--

INSERT INTO `walkers` (`id`, `date`, `added`, `available`, `given`) VALUES
(1, '0', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `white_cane`
--

CREATE TABLE IF NOT EXISTS `white_cane` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `added` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `given` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `white_cane`
--

INSERT INTO `white_cane` (`id`, `date`, `added`, `available`, `given`) VALUES
(1, '0', 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
