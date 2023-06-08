-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-05-28 15:14:08
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `booking`
--

CREATE TABLE `booking` (
  `Member_ID` varchar(10) DEFAULT NULL,
  `Product_ID` varchar(10) DEFAULT NULL,
  `Address` varchar(10) DEFAULT NULL,
  `Order_Number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `coupon`
--

CREATE TABLE `coupon` (
  `Coupon` varchar(10) NOT NULL,
  `Member_ID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `information`
--

CREATE TABLE `information` (
  `Title` varchar(10) DEFAULT NULL,
  `Update_Content` varchar(10) DEFAULT NULL,
  `Release_Date` varchar(10) DEFAULT NULL,
  `News_Number` varchar(10) DEFAULT NULL,
  `Information_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 傾印資料表的資料 `information`
--

INSERT INTO `information` (`Title`, `Update_Content`, `Release_Date`, `News_Number`, `Information_ID`) VALUES
(NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `manager`
--

CREATE TABLE `manager` (
  `Employee_ID` varchar(10) NOT NULL,
  `Employee_Account` varchar(10) DEFAULT NULL,
  `Employee_Password` varchar(10) DEFAULT NULL,
  `Employee_Level` varchar(10) DEFAULT NULL,
  `Order_Number` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `Category` varchar(10) DEFAULT NULL,
  `Product_Name` varchar(10) NOT NULL,
  `Product_Price` varchar(10) DEFAULT NULL,
  `Product_ID` varchar(10) NOT NULL,
  `Product_Description` varchar(10) DEFAULT NULL,
  `Inventory` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `purchase_history`
--

CREATE TABLE `purchase_history` (
  `Order_Number` varchar(10) NOT NULL,
  `Member_ID` varchar(10) DEFAULT NULL,
  `Amount` varchar(10) DEFAULT NULL,
  `Quantity` varchar(10) DEFAULT NULL,
  `Status_Update` varchar(10) DEFAULT NULL,
  `Order_Date` varchar(10) DEFAULT NULL,
  `Cart_Number` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `questionnaire`
--

CREATE TABLE `questionnaire` (
  `Member_ID` varchar(10) DEFAULT NULL,
  `Questionnaire` varchar(10) NOT NULL,
  `Questionnaire_topic` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `shopping_car`
--

CREATE TABLE `shopping_car` (
  `Cart_Number` varchar(10) NOT NULL,
  `Member_ID` varchar(10) DEFAULT NULL,
  `Product_ID` varchar(10) DEFAULT NULL,
  `Amount` varchar(10) DEFAULT NULL,
  `Quantity` varchar(10) DEFAULT NULL,
  `Order_Number` varchar(10) DEFAULT NULL,
  `Questionnaire` varchar(10) NOT NULL,
  `Coupon` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `account` text NOT NULL,
  `name` longtext NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Member_ID` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Line_ID` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Coupon` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Order_Number`),
  ADD UNIQUE KEY `Product_ID` (`Product_ID`),
  ADD KEY `Member_ID` (`Member_ID`);

--
-- 資料表索引 `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`Coupon`),
  ADD UNIQUE KEY `Member_ID` (`Member_ID`);

--
-- 資料表索引 `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`Information_ID`);

--
-- 資料表索引 `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`Employee_ID`),
  ADD UNIQUE KEY `Order_Number` (`Order_Number`),
  ADD UNIQUE KEY `Order_Number_2` (`Order_Number`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`);

--
-- 資料表索引 `purchase_history`
--
ALTER TABLE `purchase_history`
  ADD PRIMARY KEY (`Order_Number`),
  ADD UNIQUE KEY `Member_ID` (`Member_ID`),
  ADD UNIQUE KEY `Cart_Number` (`Cart_Number`),
  ADD UNIQUE KEY `Amount` (`Amount`);

--
-- 資料表索引 `questionnaire`
--
ALTER TABLE `questionnaire`
  ADD PRIMARY KEY (`Questionnaire`),
  ADD UNIQUE KEY `Member_ID` (`Member_ID`);

--
-- 資料表索引 `shopping_car`
--
ALTER TABLE `shopping_car`
  ADD PRIMARY KEY (`Cart_Number`),
  ADD UNIQUE KEY `Questionnaire` (`Questionnaire`),
  ADD UNIQUE KEY `Member_ID` (`Member_ID`),
  ADD UNIQUE KEY `Product_ID` (`Product_ID`),
  ADD UNIQUE KEY `Order_Number` (`Order_Number`),
  ADD UNIQUE KEY `Amount` (`Amount`),
  ADD UNIQUE KEY `Coupon` (`Coupon`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Member_ID`),
  ADD UNIQUE KEY `Coupon` (`Coupon`);

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`Order_Number`) REFERENCES `manager` (`Order_Number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`Order_Number`) REFERENCES `purchase_history` (`Order_Number`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- 資料表的限制式 `purchase_history`
--
ALTER TABLE `purchase_history`
  ADD CONSTRAINT `purchase_history_ibfk_1` FOREIGN KEY (`Cart_Number`) REFERENCES `shopping_car` (`Cart_Number`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_history_ibfk_2` FOREIGN KEY (`Amount`) REFERENCES `shopping_car` (`Amount`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `shopping_car`
--
ALTER TABLE `shopping_car`
  ADD CONSTRAINT `shopping_car_ibfk_1` FOREIGN KEY (`Product_ID`) REFERENCES `product` (`Product_ID`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `shopping_car_ibfk_2` FOREIGN KEY (`Order_Number`) REFERENCES `booking` (`Order_Number`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shopping_car_ibfk_4` FOREIGN KEY (`Questionnaire`) REFERENCES `questionnaire` (`Questionnaire`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shopping_car_ibfk_5` FOREIGN KEY (`Member_ID`) REFERENCES `users` (`Member_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shopping_car_ibfk_6` FOREIGN KEY (`Coupon`) REFERENCES `coupon` (`Coupon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`Coupon`) REFERENCES `coupon` (`Coupon`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
