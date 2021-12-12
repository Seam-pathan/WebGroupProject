-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 09:49 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `Comment` varchar(255) NOT NULL,
  `News_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_name`, `Comment`, `News_id`) VALUES
(14, 'onim12', 'Great News ', 4);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` mediumtext NOT NULL,
  `Author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `Title`, `Description`, `Author`) VALUES
(1, 'Humans halted ozone depletion. Now let’s end global warming.', 'Humans were once on track to destroy Earth’s ozone shield. Collective action averted disaster. Global warming demands the same global cooperation.Humans were once on track to destroy Earth’s ozone shield. Collective action averted disaster. Global warmingHumans were once on track to destroy Earth’s ozone shield. Collective action averted disaster. Global warming demands the same global cooperation.Humans were once on track to destroy Earth’s ozone shield. Collective action averted disaster. Glob', 'Tereza Epps'),
(2, 'With indecisive COP26, climate crisis is at a turning point', 'The COP26 climate summit offered scant relief to developing nations. If political will for a grand bargain is lacking, can solutions emerge to save Earth?The COP26 climate summit offered scant relief to developing nations. If political will for a grand bargain is lacking, can solutions emerge to save Earth?The COP26 climate summit offered scant relief to developing nations. If political will for a grand bargain is lacking, can solutions emerge to save Earth?The COP26 climate summit offered scant relief to developing nations. If political will for a grand bargain is lacking, can solutions emerge to save Earth?The COP26 climate summit offered scant relief to developing nations. If political will for a grand bargain is lacking, can solutions emerge to save Earth?', 'Malcolm Davidson'),
(3, 'We saw ice caps, icebergs and climate change in Greenland', 'On a trip to Greenland, we camped on an ice cap, saw towering icebergs and witnessed the effects of climate change on the world’s biggest island.On a trip to Greenland, we camped on an ice cap, saw towering icebergs and witnessed the effects of climate change on the world’s biggest island.On a trip to Greenland, we camped on an ice cap, saw towering icebergs and witnessed the effects of climate change on the world’s biggest island.On a trip to Greenland, we camped on an ice cap, saw towering icebergs and witnessed the effects of climate change on the world’s biggest island.On a trip to Greenland, we camped on an ice cap, saw towering icebergs and witnessed the effects of climate change on the world’s biggest island.', 'Simikka Dueholm Jensen'),
(4, 'Breaking News ', 'ABCD', 'Rafin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `username`, `Email`, `Password`, `Role`) VALUES
(3, 'Onim1', 'onim55', 'onim@gmail.com', 'Onim@123456', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
