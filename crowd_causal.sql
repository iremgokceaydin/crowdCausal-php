-- phpMyAdmin SQL Dump
-- version 4.4.15.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2016 at 05:09 PM
-- Server version: 5.7.13
-- PHP Version: 5.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crowd_causal`
--

-- --------------------------------------------------------

--
-- Table structure for table `chunk`
--

CREATE TABLE IF NOT EXISTS `chunk` (
  `chunk_id` int(11) NOT NULL,
  `chunk_text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chunk_highlights`
--

CREATE TABLE IF NOT EXISTS `chunk_highlights` (
  `chunk_highlights_id` int(11) NOT NULL,
  `chunkId` int(11) NOT NULL,
  `highlightId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `highlight`
--

CREATE TABLE IF NOT EXISTS `highlight` (
  `highlight_id` int(11) NOT NULL,
  `index_in_chunk` int(11) NOT NULL,
  `value` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `referencedPostId` int(11) NOT NULL,
  `referencedPost` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE IF NOT EXISTS `training` (
  `training_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `post` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `training_chunks`
--

CREATE TABLE IF NOT EXISTS `training_chunks` (
  `training_chunk_id` int(11) NOT NULL,
  `trainingId` int(11) NOT NULL,
  `chunkId` int(11) NOT NULL,
  `workerId` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `worker_testing`
--

CREATE TABLE IF NOT EXISTS `worker_testing` (
  `worker_id` int(11) NOT NULL,
  `worker_amazon_id` int(11) NOT NULL,
  `testing_1_p` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `testing_1_a` int(11) NOT NULL,
  `testing_1_a_text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `testing_2_p` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `testing_2_a` int(11) NOT NULL,
  `testing_2_a_text` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker_testing`
--

INSERT INTO `worker_testing` (`worker_id`, `worker_amazon_id`, `testing_1_p`, `testing_1_a`, `testing_1_a_text`, `testing_2_p`, `testing_2_a`, `testing_2_a_text`, `created_at`, `updated_at`) VALUES
(93, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 2, 'Lorem ipsum dolor sit amet.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 0, 'Lorem ipsum dolor sit amet.', '2016-08-02 19:34:01', '2016-09-04 22:13:13'),
(94, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 2, 'Lorem ipsum dolor sit amet.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 0, 'Lorem ipsum dolor sit amet.', '2016-08-02 21:49:24', '2016-09-04 22:13:13'),
(95, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 2, 'Lorem ipsum dolor sit amet.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 0, 'Lorem ipsum dolor sit amet.', '2016-08-02 21:51:02', '2016-09-04 22:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `worker_training`
--

CREATE TABLE IF NOT EXISTS `worker_training` (
  `worker_training_id` int(11) NOT NULL,
  `worker_amazon_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `step` int(11) NOT NULL,
  `order_index` int(11) NOT NULL,
  `highlights` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker_training`
--

INSERT INTO `worker_training` (`worker_training_id`, `worker_amazon_id`, `type`, `step`, `order_index`, `highlights`, `text`, `created_at`) VALUES
(105, 1, 2, 1, 0, '[{"index":0,"value":"s a criminal record th","referencedPost":"post-1"},{"index":1,"value":"b in order to make the money they nee","referencedPost":"post-0"},{"index":2,"value":"epending o","referencedPost":"post-1"},{"index":3,"value":" up selling ","referencedPost":"post-0"}]', 'shdjshdjhsjdhjshdjshjdhdjs,', '2016-08-03 10:16:26'),
(106, 1, 3, 1, 0, '[{"index":0,"value":"foods can cont","referencedPost":"post-1"},{"index":1,"value":"ut themselves and it","referencedPost":"post-0"},{"index":2,"value":" these genetic","referencedPost":"post-1"}]', 'dkfkdnfkdnkfndknfkdnkfnkdnfd,', '2016-08-03 10:17:02'),
(113, 1, 1, 1, 0, '[{"index":0,"value":"increasing industrialization","referencedPost":"post-0"},{"index":1,"value":"factory jobs","referencedPost":"post-0"},{"index":2,"value":"population lives in urban areas","referencedPost":"post-0"}]', 'dfdfdfdfdfdfdfdfdfdfdf,', '2016-08-19 10:55:34'),
(114, 1, 1, 1, 1, '[{"index":0,"value":"alcohol","referencedPost":"post-1"},{"index":1,"value":"severe illness","referencedPost":"post-1"}]', 'dfdfdfdfdfdfdfdfdfdfdf,', '2016-08-19 10:55:34'),
(115, 1, 1, 1, 2, '[{"index":0,"value":"alcohol","referencedPost":"post-1"},{"index":1,"value":"addiction","referencedPost":"post-1"},{"index":2,"value":"fatal car accident","referencedPost":"post-1"}]', 'dfdfdfdfdfdfdfdfdfdfdf,', '2016-08-19 10:55:34'),
(135, 0, 2, 1, 0, '[{"index":0,"value":"under ","referencedPost":"post-1"},{"index":1,"value":"employer","referencedPost":"post-1"}]', 'dfkjdkfjdkjfkdjkfjkdjfkjdkf,', '2016-09-02 13:10:30'),
(136, 0, 3, 1, 0, '[{"index":0,"value":", econom","referencedPost":"post-1"},{"index":1,"value":"ntribute t","referencedPost":"post-1"}]', 'lklklklklkklkklklklklkkl,', '2016-09-02 13:11:14'),
(137, 0, 1, 1, 0, '[{"index":0,"value":"increasing industrialization","referencedPost":"post-0"},{"index":1,"value":"factory jobs","referencedPost":"post-0"},{"index":2,"value":"population lives in urban areas","referencedPost":"post-0"}]', 'cccccccccccccccccccccc,', '2016-09-04 22:26:27'),
(138, 0, 1, 1, 1, '[{"index":0,"value":"alcohol","referencedPost":"post-1"},{"index":1,"value":"severe illness","referencedPost":"post-1"}]', 'cccccccccccccccccccccc,', '2016-09-04 22:26:27'),
(139, 0, 1, 1, 2, '[{"index":0,"value":"alcohol","referencedPost":"post-1"},{"index":1,"value":"addiction","referencedPost":"post-1"},{"index":2,"value":"fatal car accident","referencedPost":"post-1"}]', 'vvvvvvvvvvvvvvvvvvvvvv,', '2016-09-04 22:26:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chunk`
--
ALTER TABLE `chunk`
  ADD PRIMARY KEY (`chunk_id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`training_id`);

--
-- Indexes for table `training_chunks`
--
ALTER TABLE `training_chunks`
  ADD PRIMARY KEY (`training_chunk_id`);

--
-- Indexes for table `worker_testing`
--
ALTER TABLE `worker_testing`
  ADD PRIMARY KEY (`worker_id`),
  ADD UNIQUE KEY `worker_amazon_id` (`worker_amazon_id`);

--
-- Indexes for table `worker_training`
--
ALTER TABLE `worker_training`
  ADD PRIMARY KEY (`worker_training_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chunk`
--
ALTER TABLE `chunk`
  MODIFY `chunk_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `training_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `training_chunks`
--
ALTER TABLE `training_chunks`
  MODIFY `training_chunk_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `worker_testing`
--
ALTER TABLE `worker_testing`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `worker_training`
--
ALTER TABLE `worker_training`
  MODIFY `worker_training_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=140;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
