-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 18, 2013 at 11:23 PM
-- Server version: 5.5.29
-- PHP Version: 5.3.10-1ubuntu3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `_bookworm`
--

-- --------------------------------------------------------

--
-- Table structure for table `ask_question`
--

CREATE TABLE IF NOT EXISTS `ask_question` (
  `user_id` int(50) NOT NULL,
  `question` varchar(500) NOT NULL,
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bookshelf`
--

CREATE TABLE IF NOT EXISTS `bookshelf` (
  `user_id` int(50) NOT NULL,
  `book_id` int(50) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `books_pull`
--

CREATE TABLE IF NOT EXISTS `books_pull` (
  `user_id` int(50) NOT NULL,
  `book_id` varchar(50) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `state` int(1) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pull_id` int(50) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`pull_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `books_push`
--

CREATE TABLE IF NOT EXISTS `books_push` (
  `push_book_id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id_push` int(50) NOT NULL,
  `pull_id` int(50) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`push_book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `book_comment`
--

CREATE TABLE IF NOT EXISTS `book_comment` (
  `book_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book_recomm`
--

CREATE TABLE IF NOT EXISTS `book_recomm` (
  `user_id` int(50) NOT NULL,
  `book_id` int(50) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_data`
--

CREATE TABLE IF NOT EXISTS `login_data` (
  `email_id` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id` int(50) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE IF NOT EXISTS `msg` (
  `user_id_1` int(50) NOT NULL,
  `user_id_2` int(50) NOT NULL,
  `msg_id` int(50) NOT NULL AUTO_INCREMENT,
  `msg` varchar(1000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `question_answer`
--

CREATE TABLE IF NOT EXISTS `question_answer` (
  `question_id` int(11) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
