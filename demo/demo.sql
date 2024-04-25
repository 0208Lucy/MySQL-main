-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-01-07 16:47:52
-- 伺服器版本： 10.1.38-MariaDB
-- PHP 版本： 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `demo`
--

-- --------------------------------------------------------

--
-- 資料表結構 `client`
--

CREATE TABLE `client` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `mail` text NOT NULL,
  `ps` text CHARACTER SET utf8 NOT NULL,
  `taketime` date NOT NULL,
  `ordertime` date NOT NULL,
  `price` int(50) NOT NULL,
  `id` text NOT NULL,
  `food` text NOT NULL,
  `num` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `client`
--

INSERT INTO `client` (`name`, `phone`, `mail`, `ps`, `taketime`, `ordertime`, `price`, `id`, `food`, `num`) VALUES
('施婉柔', '0975721501', '123', '333', '2023-01-06', '2023-01-06', 440, '1372420917', '脆皮厚切雞排', 1),
('施婉柔', '0975721501', '123', '333', '2023-01-06', '2023-01-06', 440, '1372420917', '黃金地瓜薯條', 2),
('施婉柔', '0975721501', '123', '333', '2023-01-06', '2023-01-06', 440, '1372420917', '黃金起司豬排', 1),
('施婉柔', '0975721501', '123', '333', '2023-01-06', '2023-01-06', 440, '1372420917', '檸檬厚切雞排', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `order`
--

CREATE TABLE `order` (
  `name` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `num` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
