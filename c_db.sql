-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2019 年 3 月 02 日 12:44
-- サーバのバージョン： 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `c_table`
--

CREATE TABLE `c_table` (
  `id` int(11) NOT NULL,
  `i_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `item` text COLLATE utf8_unicode_ci NOT NULL,
  `i_comp` text COLLATE utf8_unicode_ci NOT NULL,
  `country` text COLLATE utf8_unicode_ci NOT NULL,
  `price` text COLLATE utf8_unicode_ci NOT NULL,
  `w_price` text COLLATE utf8_unicode_ci NOT NULL,
  `stock` text COLLATE utf8_unicode_ci NOT NULL,
  `day` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `c_table`
--

INSERT INTO `c_table` (`id`, `i_desc`, `item`, `i_comp`, `country`, `price`, `w_price`, `stock`, `day`) VALUES
(1, 'a', 'a', 'a', 'a', '111', '1111', '11', '2019-02-10 13:44:21'),
(2, 'a', 'a', 'a', 'a', '111', '1111', '11', '2019-02-10 13:44:29'),
(3, 'gg', 'あ', 'kj', 'jk', 'j', 'j', 'j', '2019-02-10 13:45:05'),
(4, 'h', 'aa', 'あ', 'm', 'iu', 'i', 'i', '2019-02-10 13:47:02'),
(5, 'aaa', 'qqq', 'qqq', 'qqq', 'qqq', 'qqq', 'qqq', '2019-02-10 13:48:28'),
(6, '化粧シート　王道', 'ダイノックフィルム', '', 'qqq', 'qqq', 'qqq', 'qqq', '2019-02-10 13:59:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c_table`
--
ALTER TABLE `c_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c_table`
--
ALTER TABLE `c_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
