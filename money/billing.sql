-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-09-03 18:41:15
-- 伺服器版本: 10.1.21-MariaDB
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `money`
--

-- --------------------------------------------------------

--
-- 資料表結構 `billing`
--

CREATE TABLE `billing` (
  `id` int(11) NOT NULL COMMENT '編號',
  `category` varchar(2) NOT NULL COMMENT '分類',
  `date` date NOT NULL COMMENT '日期',
  `subcategory` varchar(8) NOT NULL COMMENT '子分類',
  `content` text NOT NULL COMMENT '內容',
  `cash` int(11) NOT NULL COMMENT '金額',
  `ticket` varchar(10) DEFAULT NULL COMMENT '發票'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `billing`
--

INSERT INTO `billing` (`id`, `category`, `date`, `subcategory`, `content`, `cash`, `ticket`) VALUES
(1, '食', '2017-08-30', '三餐外食', '我的豆花', 30, NULL),
(2, '食', '2017-09-02', '三餐外食', 'M 麥當勞', 200, NULL),
(3, '衣', '2017-09-02', '送洗費', 'ㄏㄏ', 777, NULL);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `billing`
--
ALTER TABLE `billing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '編號', AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
