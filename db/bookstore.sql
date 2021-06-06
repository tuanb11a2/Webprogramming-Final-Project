-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 11:04 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` double NOT NULL,
  `number_of_review` int(11) DEFAULT 0,
  `publisher` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_address` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bookPDF` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `title`, `author`, `description`, `rating`, `number_of_review`, `publisher`, `thumbnail_address`, `bookPDF`) VALUES
(1, 'The Rage of Dragons', 'Evan Winter', 'Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in Reading at the age of 15, where she went to secretarial school and then into an insurance office. After moving to London and then Hampton, she eventually married her next door neighbour from Reading, John Cook. He was an officer in the Merchant Navy and after he left the sea in 1956, they bought a pub for a year before John took a job in Southern Rhodesia with a motor company. Beryl bought their young son a box of watercolours, and when showing him how to use it, she decided that she herself quite enjoyed painting. John subsequently bought her a child’s painting set for her birthday and it was with this that she produced her first significant work, a half-length portrait of a dark-skinned lady with a vacant expression and large drooping breasts. It was aptly named ‘Hangover’ by Beryl’s husband and\r\n\r\nIt is often frustrating to attempt to plan meals that are designed for one. Despite this fact, we are seeing more and more recipe books and Internet websites that are dedicated to the act of cooking for one. Divorce and the death of spouses or grown children leaving for college are all reasons that someone accustomed to cooking for more than one would suddenly need to learn how to adjust all the cooking practices utilized before into a streamlined plan of cooking that is more efficient for one person creating less.', 4, 0, 'NXB Kim Dong', '#', '#'),
(12, 'Linh con', 'Tuấn con', 'Sách về Linh óc chó', 0, 0, 'NXB Kim Đồng', 'fileupload/thumbnail/d4d11c86b511eda92f3d26514f68f038.png', 'fileupload/bookPDF/c3e8990f9cec919f8a707292dd84e45d.png'),
(13, 'Linh con', 'Tuấn con', 'đâsd', 0, 0, 'NXB Kim Đồng', 'fileupload/thumbnail/9d1384efe4a366212a063fa0a1625d41.png', 'fileupload/bookPDF/d926de850a7bbcfc85ef9bcfde9cdb0f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bookcategory`
--

CREATE TABLE `bookcategory` (
  `book_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'History'),
(2, 'Science Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `salt` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `email`, `name`, `password`, `role_id`, `salt`) VALUES
(1, 'admin@gmail.com', 'admin', '7ca5f60595c92613c127995592c1a7abd2a925e7493d77b8ae7536bd769b6571', 1, 'IdxVcp05vp5m8GktioBwIdxVcp05vp5m'),
(2, 'user@gmail.com', 'user', '53a96b198cf0c22fc034fe7c5156b6ff418ba014adacced2fa44b8a79bd6abf9', 2, 'cJPH7lhD9ZE0iKzXTy5jcJPH7lhD9ZE0'),
(12, 'dpth@gmail.com', 'dpth', 'c0ca52f231e9ce67f8036990b091864b6d0eca9e6829b37c6dc305e471beaac4', 2, '7557a3b6572174c406d8fa177ec30ad0');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `book_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `rold_id` int(11) NOT NULL,
  `rold_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`rold_id`, `rold_name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `subcribelist`
--

CREATE TABLE `subcribelist` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `bookcategory`
--
ALTER TABLE `bookcategory`
  ADD PRIMARY KEY (`book_id`,`category_id`),
  ADD KEY `fk_category_book_category` (`category_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_client_role_id` (`role_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`book_id`,`client_id`),
  ADD KEY `fk_client_review` (`client_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`rold_id`);

--
-- Indexes for table `subcribelist`
--
ALTER TABLE `subcribelist`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `rold_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookcategory`
--
ALTER TABLE `bookcategory`
  ADD CONSTRAINT `fk_book_book_category` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_category_book_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `fk_client_role_id` FOREIGN KEY (`role_id`) REFERENCES `role` (`rold_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_book_review` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_client_review` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
