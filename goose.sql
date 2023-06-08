-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-06-03 08:37:24
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
-- 資料庫： `goose`
--

-- --------------------------------------------------------

--
-- 資料表結構 `booking`
--

CREATE TABLE `booking` (
  `Cart_ID` int(45) NOT NULL,
  `Booking_ID` int(45) NOT NULL,
  `Date` date NOT NULL,
  `Order_Status` varchar(45) NOT NULL,
  `Remark` varchar(255) NOT NULL,
  `BookingTotalPrice` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `business_info`
--

CREATE TABLE `business_info` (
  `Location` varchar(255) NOT NULL,
  `TimeDate` date NOT NULL,
  `Title` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `coupon`
--

CREATE TABLE `coupon` (
  `Coupon_ID` int(45) NOT NULL,
  `Member_ID` int(45) NOT NULL,
  `Discount_period` date NOT NULL,
  `Discount` double NOT NULL,
  `Coupon_Discount` varchar(45) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `income_statement`
--

CREATE TABLE `income_statement` (
  `Booking_ID` int(45) NOT NULL,
  `Product_ID` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `information`
--

CREATE TABLE `information` (
  `Date` date NOT NULL,
  `Title` double NOT NULL,
  `Content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `manager`
--

CREATE TABLE `manager` (
  `Employee_ID` int(45) NOT NULL,
  `Employee_Account` varchar(255) NOT NULL,
  `Employee_Password` varchar(255) NOT NULL,
  `Employee_LV` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `purchase_history`
--

CREATE TABLE `purchase_history` (
  `Member_ID` int(45) NOT NULL,
  `Booking_ID` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `purchase_order`
--

CREATE TABLE `purchase_order` (
  `Product_ID` int(45) NOT NULL,
  `ProductName` varchar(45) NOT NULL,
  `Purchase_OrderID` int(45) NOT NULL,
  `Purchase_Quantity` int(45) NOT NULL,
  `Purchase_Price` int(45) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `sales_list`
--

CREATE TABLE `sales_list` (
  `Booking` int(45) NOT NULL,
  `Sales_ID` int(45) NOT NULL,
  `Member_ID` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `Cart_ID` int(45) NOT NULL,
  `Member_ID` int(45) NOT NULL,
  `Product_ID` int(45) NOT NULL,
  `Sales_Quantity` int(45) NOT NULL,
  `Coupon_ID` int(45) NOT NULL,
  `TotalPrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `Account` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` int(45) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Member_ID` int(45) NOT NULL,
  `Line_ID` varchar(255) NOT NULL,
  `Coupon_ID` int(45) NOT NULL,
  `Booking` int(45) NOT NULL,
  `Gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
