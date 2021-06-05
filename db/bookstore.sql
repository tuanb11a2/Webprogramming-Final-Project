-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 06:06 PM
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
(14, 'Sapiens: A Brief History of Humankind', 'Yuval Noah Harari', 'A Summer Reading Pick for President Barack Obama, Bill Gates, and Mark Zuckerberg', 0, 0, 'Harper', 'fileupload/thumbnail/841ede7008f16592c073384acf61dbc2.jpg', 'fileupload/bookPDF/7e51148422b0ce950e04df599d32b801.pdf'),
(15, '21 Lessons for the 21st Century', 'Yuval Noah Harari', 'An Amazon Best Book of September 2018', 0, 0, 'Harper', 'fileupload/thumbnail/84ed450b396794192a21d0cbc9692464.jpg', 'fileupload/bookPDF/66af5399873d1e78f2fb1dc5f8dc88d5.pdf'),
(16, 'The Alchemist', ' Paulo Coelho', 'This story, dazzling in its simplicity and wisdom, is about an Andalusian shepherd boy named Santiago who travels from his homeland in Spain to the Egyptian desert in search of treasure buried in the Pyramids. ', 0, 0, 'Harper', 'fileupload/thumbnail/41ad675002ef81596d27a0ac86bef59d.jpg', 'fileupload/bookPDF/7817cfcf186a9437565570e7473dfa6f.pdf'),
(22, 'SAPIENS: A GRAPHIC HISTORY, VOLUME I', 'Yuval Noah Harari', 'Sapiens: A Graphic History is an epic, radical adaptation of Yuval Noah Harari’s bestselling book, bursting with wit, humor, and colorful illustrations.', 0, 0, 'Albin Michel Publishing', 'fileupload/thumbnail/bb79d13fb89687c3504e457eec940ea3.jpg', 'fileupload/bookPDF/f6c2e0ab503298ad003e076c1ceb4391.pdf'),
(23, 'The Subtle Art of Not Giving a Fuck', 'Mark Manson', 'In my life, I have given a fuck about many people and many things. I have also not given a fuck about many people and many things. ', 0, 0, 'Albin Michel Publishing', 'fileupload/thumbnail/cd2b31156bcd3351dee98215aca10e89.jpg', 'fileupload/bookPDF/e71f192b6be1bf13beadeae889848f4d.pdf'),
(25, 'Mastering Bitcoin', 'Andreas M. Antonopoulos', 'Join the technological revolution that’s taking the world of finance by storm. Mastering Bitcoin is your guide through the seemingly complex world of bitcoin, providing the knowledge you need to participate in the internet of money.', 0, 0, 'OReilly', 'fileupload/thumbnail/1255df0792a731a64d20fd43c0c32f01.jpg', 'fileupload/bookPDF/0a0977bf20a05367aff422d8ec929518.pdf'),
(27, 'Mastering Ethereum', 'Gavin Wood', 'Mastering Ethereum is a book for developers, offering a guide to the operation and use of the Ethereum, Ethereum Classic, RootStock (RSK) and other compatible EVM-based open blockchains', 0, 0, 'OReilly', 'fileupload/thumbnail/11b545e54dfa4fe3fc13ffd0906e7e45.png', 'fileupload/bookPDF/7d11bdb535345e63c77630a569f6a175.pdf'),
(28, ' Guide to Stoicism: Tools for Emotional Resilience', 'Matthew Van Natta', 'Being a stoic means embracing positivity and self-control through the ability to accept the uncertainty of outcomes.', 0, 0, 'Harper', 'fileupload/thumbnail/1361718c13a1e04fc08d396ff2bcbc78.jpg', 'fileupload/bookPDF/075b5dffd466f32a63c1da329ea2419b.pdf'),
(29, '13 Reasons Why', 'JAY ASHER', 'The theme behind the book is bullying and in some ways also the stigma related to suicide.', 0, 0, 'Harper', 'fileupload/thumbnail/7cd8a4c6cfb6cc439b0280c934bca51a.jpeg', 'fileupload/bookPDF/e880c5caaaf14a1e50a4b27bccc2bd60.pdf'),
(30, 'The Old Man And The Sea', 'Ernest Hemingway', 'This tale of an aged Cuban fisherman going head-to-head (or hand-to-fin) with a magnificent marlin encapsulates Hemingway’s favorite motifs of physical and moral challenge.', 0, 0, 'Penguin Random House US', 'fileupload/thumbnail/887e208f078beac4e69987340f8a8fb8.jpg', 'fileupload/bookPDF/4356ae3cbbf0ad7cc07375fb050be23c.pdf'),
(31, 'Twenty Thousand Leagues Under The Sea', 'Jules Verne ', 'Vingt mille lieues sous les mers. English', 0, 0, '	 Penguin Random House US', 'fileupload/thumbnail/6dfe4a5976111c09d7bdcf37deb36101.jpg', 'fileupload/bookPDF/006e2d1a1ebd587acb58ed3fcc9e9ac2.pdf'),
(32, 'Nobodys boy', 'Hector Malot', 'Story of a young boy who discovers, at the age of eight, that he was a foundling. When his foster father sends him away he must find a way to survive and also discover his true identity', 0, 0, ' University of Illinois Urbana-Champaign', 'fileupload/thumbnail/58165b75fbf86dc583300ea8bf75ab40.jpg', 'fileupload/bookPDF/57b4c046a2edf94c098e366c8a4cf7ce.pdf'),
(33, 'Uncle Toms Cabin', 'Hammatt Billings', 'Uncle Toms Cabin tells the story of Uncle Tom, depicted as a saintly, dignified slave. While being transported by boat to auction in New Orleans, Tom saves the life of Little Eva, whose grateful father then purchases Tom.', 0, 0, ' Penguin Random House US', 'fileupload/thumbnail/568810374a970a61ad30846882c9c503.jpg', 'fileupload/bookPDF/e5bbafe887e189fccc70b74e9bb5ff06.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
