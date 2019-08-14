-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th8 14, 2019 lúc 03:49 PM
-- Phiên bản máy phục vụ: 5.7.24
-- Phiên bản PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`admin`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`admin`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `Id` varchar(10) NOT NULL,
  `Logo` varchar(100) NOT NULL,
  `Website` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id` (`Id`),
  KEY `Id_2` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`Id`, `Logo`, `Website`, `Phone`, `Email`, `Name`) VALUES
('B1', 'img/IPhone.jpg', 'http://Iphone.com', '0123456789', 'iphone@gmail.com', 'IPhone'),
('B2', 'img/Xiaomi.png', 'http://xiaomi.com', '1234567890', 'Xiaomi@gmail.com', 'Xiaomi'),
('B3', 'img/Vsmart.png', 'http://Vsmart.com', '0135345693', 'vsmart@gmail.com', 'Vsmart'),
('B4', 'img/Samsung.jpg', 'http://SamSung.com', '23456789345', 'SamSung@gmail.com', 'SamSung'),
('B5', 'img/Oppo.jpg', 'http://oppo.com', '0345934592', 'oppo@gmail.com', 'Oppo'),
('B6', 'img/Nokia.jpg', 'http://nokia.com', '0342185937', 'nokia@gmail.com', 'Nokia');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`Id`, `Name`, `Password`, `Phone`, `Email`, `Address`) VALUES
(17, 'Bao', 'zxcv', '0327338076', 'bao@gmail.com.vn', '123123'),
(18, 'Duy', 'vbnmk', '1234567890', 'duy@gmail.com', 'Quan 4'),
(25, 'Nhan', 'asdasd', '123456789', 'bao@gmail.com', 'Quan 3'),
(38, 'HoangBao', 'kakaka', '0327338076', 'bao@gmail.com', '123123'),
(41, 'BaoNguyen', 'asdfg', '0327338076', 'bao@gmail.com', 'Quan 3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `Id` varchar(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` int(20) NOT NULL,
  `Image` varchar(256) NOT NULL,
  `Idbrand` varchar(10) NOT NULL,
  `Specification` varchar(800) NOT NULL,
  `Year` int(10) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Idbrand` (`Idbrand`),
  KEY `Idbrand_2` (`Idbrand`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`Id`, `Name`, `Price`, `Image`, `Idbrand`, `Specification`, `Year`) VALUES
('I1', 'IPhone Xs Max 256GB', 1590, 'img/iphone-xs-max-256gb-white-600x600.jpg', 'B1', 'Screen: OLED, 6.5\", Super Retina,Operating System:  iOS 12,Rear Camera: Main 12 MP & 12 MP Spare,Front camera: 7 MP,CPU: Apple A12 Bionic 6 Core,RAM:4 GB,ROM:256 GB,Battery capacity: 3174 mAh, with fast charging', 2019),
('I10', 'IPhone 7', 800, 'img/iphone-7-.jpg', 'B1', '\r\nScreen: LED-backlit IPS LCD, 4.7 \", Retina HD,Operating system: iOS 12,Rear camera: 12 MP, Front camera: 7 MP, CPU: Apple A10 Fusion 4-core 64-bit, RAM: 2 GB,ROM: 32 GB, Battery capacity: 1960 mAh', 2019),
('I2', 'IPhone Xs Max 512GB', 1700, 'img/iphone-xs-max-512gb-gold-600x600.jpg', 'B1', 'Screen:OLED, 6.5\", Super Retina,Operating System:	IOS 12,Rear Camera: Main 12 MP & 12 MP Spare,Front camera: 7 MP,CPU: Apple A12 Bionic 6 Core,RAM:4 GB,ROM:512 GB,Battery capacity: 3174 mAh, with fast charging', 2019),
('I3', 'IPhone Xs Gold', 1199, 'img/iphone-xs-gold-600x600.jpg', 'B1', 'Screen:OLED, 5.8\", Super Retina,Operating System: IOS 12,Rear Camera: Main 12 MP & 12 MP Spare,Front camera: 7MP,CPU: Apple A12 Bionic 6 core,RAM:4 GB,ROM:64 GB,Battery capacity: 2658 mAh, with fast charging', 2019),
('I4', 'IPhone Xr 128GB', 990, 'img/iphone-xr-128gb-red-600x600.jpg', 'B1', 'Screen:IPS LCD, 6.1\", Liquid Retina,Operating System: IOS 12,Rear Camera: 12 MP,Front camera: 7 MP,CPU: Apple A12 Bionic 6 Core,RAM:3 GB,ROM:128GB GB,Battery capacity: 4000 mAh, with fast charging', 2019),
('I5', 'IPhone Xr 256GB', 1099, 'img/iphone-xr-256gb-white-600x600.jpg', 'B1', 'Screen:IPS LCD, 6.1\", Liquid Retina,Operating System: IOS 12,Rear Camera: 12 MP, Front camera: 7 MP,CPU: Apple A12 Bionic 6 Core,RAM: 3 GB,ROM: 256 GB,Battery capacity: 2942 mAh, With fast charging', 2019),
('I6', 'IPhone Xs Max Gray', 1300, 'img/iphone-xs-max-gray-600x600.jpg', 'B1', 'Screen:OLED, 6.5\", Super Retina\r\n,Operating System: IOS 12,Rear Camera: Main 12 MP & 12 MP Side,Front camera: 7 MP,CPU: Apple A12 Bionic 6 Core,RAM: 4 GB,ROM: 64 GB,Battery capacity: 3174 mAh, With fast charging', 2019),
('I7', 'Ihone 8 Plus 256GB', 1199, 'img/iphone-8-plus-256gb-hh-600x600-600x600.jpg', 'B1', 'Screen:LED-backlit IPS LCD, 5.5\", Retina HD,Operating System: IOS 12,Rear Camera: Main 12 MP & 12 MP Side,Font Camera: 7 MP,CPU: Apple A11 Bionic 6 Core,RAM:	3 GB,ROM:256GB GB,Battery capacity: 2691 mAh, with fast charging', 2019),
('I8', 'IPhone 8 Plus 64GB', 800, 'img/iphone-8-plus-hh-600x600.jpg', 'B1', 'Screen:	LED-backlit IPS LCD, 5.5\", Retina HD,Operating System: IOS 12,Rear Camera: Main 12 MP & 12 MP Spare,Front camera: 7 MP,CPU: Apple A11 Bionic 6 Core,RAM: 3 GB,ROM: 64 GB,Battery capacity: 2691 mAh, With fast charging', 2019),
('I9', 'IPhone 7 Plus 32GB', 510, 'img/iphone-7-plus-32gb.jpg', 'B1', 'Screen: LED-backlit IPS LCD, 5.5\", Retina HD,Operating System: IOS 12,Rear Camera: Main 12 MP & 12 MP Spare,Front camera: 7 MP,CPU:  Apple A10 Fusion 4 Core 64-bit,RAM:	3 GB,ROM:	32 GB,Battery capacity: 2900 mAh', 2019),
('N1', 'Nokia 8.1', 349, 'img/nokia-81.jpg', 'B6', 'Screen:	IPS LCD, 6.18â€, Full HD+,Operating System: Android 9 Pie , Rear Camera:Main 12 MP & 13 MP Spare , Front camera:20 MP,CPU: Snapdragon 710 8 nhÃ¢n 64-bit,RAM:6 GB,ROM:64 GB,Battery capacity: 3500 mAh, with fast charging', 2019),
('N10', 'Nokia 8810', 145, 'img/nokia-8810.jpg', 'B6', 'Screen: TFT, 2.4 \", QVGA,Operating System: KaiOS,Camera: 2 MP ,CPU:Qualcomm Snapdragon 205 Mobile Platform,RAM: 512MB,ROM: 4 GB,Battery capacity: 1500 mAh', 2019),
('N2', 'Nokia 6.1 Plus', 260, 'img/nokia-61-plus.jpg', 'B6', 'Screen:	IPS LCD, 5.8\", Full HD+,Operating System:Android 8 Oreo,Rear Camera: Main 16 MP & 5 MP Spare ,Front camera: 16 MP,CPU:Qualcomm Snapdragon 636 8-core, RAM:	6 GB, ROM:	64 GB, Battery capacity: 3060 mAh, with fast charging', 2019),
('N3', 'Nokia 5.1 Plus', 189, 'img/nokia-51-plus.jpg', 'B6', 'Screen:	IPS LCD, 5.8\", HD+,Operating System:Android 8 Oreo,Rear Camera: Main 13 MP & 5 MP Spare,Front camera: 8 MP, CPU:MediaTek Helio P60 8 nhÃ¢n 64-bit,RAM:	3 GB,ROM:	32 GB,Battery capacity: 3060 mAh, with fast charging', 2019),
('N4', 'Nokia 3.2 32GB', 160, 'img/nokia-32-16gbjpg.jpg', 'B6', 'Screen:	IPS LCD, 6.2\", HD+,Operating System:Android 9 Pie ,Rear Camera: 13 MP,Front camera: 5 MP,CPU: Qualcomm Snapdragon 429 4-core,RAM:	3 GB,ROM:	32 GB,Battery capacity: 4000 mAh', 2019),
('N5', 'Nokia 3.2 16GB', 130, 'img/nokia-31.jpg', 'B6', 'Screen:	IPS LCD, 6.2\", HD+,Operating System: Android 9 Pie,Rear Camera:13 MP,Front camera: 5 MP, CPU: Qualcomm Snapdragon 429 4-core, RAM: 2 GB, ROM: 16 GB, Battery capacity: 4000 mAh', 2019),
('N6', 'Nokia 3.1 Plus', 169, 'img/nokia-31-plus.jpg', 'B6', 'Screen:	IPS LCD, 6.0\", HD+,Operating System:	Android 8 Oreo,Rear Camera: Main 13 MP & 5 MP Spare,Front camera: 8 MP,CPU: MediaTek MT6762 8 core 64-bit, RAM: 3 GB,ROM: 32 GB,Battery capacity:3500 mAh', 2019),
('N7', 'Nokia 3.1', 143, 'img/nokia-31.jpg', 'B6', 'Screen:	IPS LCD, 5.2\", HD+,Operating System:	Android 8.0,Rear Camera: 13 MP,Font Camera: 8 MP, CPU: MediaTek MT6750N 8 core, RAM:	3 GB, ROM:	32 GB,Battery capacity: 2990 mAh', 2019),
('N8', 'Nokia 2.1', 90, 'img/nokia-21.jpg', 'B6', 'Screen:	IPS LCD, 5.5\", HD,Operating System: Android 8 Oreo,Rear Camera: 8 MP,Font Camera: 5 MP,CPU:Qualcomm Snapdragon 425 4 core 64-bit, RAM:	1 GB,ROM:	8 GB, Battery capacity: 4000 mAh', 2019),
('N9', 'Nokia 230', 55, 'img/nokia-230.jpg', 'B6', 'Screen: TFT, 2.8 \", 65,536 colors,Phonebook:	1000 number, External memory card: MicroSD, 32GB,Camera: 2 MP,Headphone jack: 3.5 mm,FM radio: Yes,ROM: No, Battery capacity: 1200 mAh', 2019),
('O1', 'Oppo R17 Pro', 609, 'img/oppo-r17-pro.jpg', 'B5', 'Screen: AMOLED, 6.4\", Full HD+,Operating System: ColorOS 5.2 (Android 8.1),Rear Camera:Main 12 MP & 20 MP, TOF 3D ,Front camera:25 MP,CPU: Snapdragon 710 8 nhÃ¢n 64-bit,RAM:8 GB,ROM:128 GB,Battery capacity: 3700 mAh, with fast charging', 2019),
('O10', 'Oppo A3s 32 GB', 165, 'img/oppo-a3s-32gb.jpg', 'B5', 'Screen:	IPS LCD, 6.2\", HD+,Operating System:	Android 8.1 (Oreo), Rear Camera: Main 13 MP & 2 MP Spare,Front camera: 8 MP,CPU:Qualcomm Snapdragon 450 8-core 64-bit,RAM: 3 GB,ROM: 32 GB,Battery capacity: 4320 mAh', 2019),
('O11', 'Oppo A3s 16 GB', 130, 'img/oppo-a3s.jpg', 'B5', 'Screen:IPS LCD, 6.2\", HD+,Operating System:	Android 8.1 (Oreo),Rear Camera: Main 13 MP & 2 MP Spare,Front camera: 8 MP,CPU:Qualcomm Snapdragon 450 8-core 64-bit,RAM: 2 GB,ROM: 16 GB,Battery capacity: 4320 mAh', 2019),
('O12', 'Oppo A1K', 138, 'img/oppo-a1k.jpg', 'B5', 'Screen:IPS LCD, 6.1\", HD+,Operating System:Android 9.0 (Pie),Rear Camera: 8 MP,Front camera: 5 MP,CPU: MediaTek MT6762R 8 cores,RAM:2 GB,ROM:32 GB,Battery capacity: 4000 mAh, with fast charging', 2019),
('O13', 'Oppo F9', 269, 'img/oppo-f9.jpg', 'B5', 'Screen:LTPS LCD, 6.3\", Full HD+,Operating System:ColorOS 5.2 (Android 8.1),Rear Camera: Main 16 MP & Extra 2 MP,Front camera:	25 MP,CPU: MediaTek Helio P60 8 nhÃ¢n 64-bit,RAM: 4 GB,ROM: 64 GB,Battery capacity: 3500 mAh, with fast charger', 2019),
('O2', 'Oppo Find X', 659, 'img/oppo-find-x.jpg', 'B5', 'Screen: AMOLED, 6.42\", Full HD+, Operating System: Android 8.1 (Oreo),Rear Camera: Main 16 MP & 20 MP Side ,Front camera: 25 MP,CPU: Snapdragon 845 8 core, RAM: 8 GB,ROM: 256 GB,Battery capacity: 3730 mAh, with fast charging', 2019),
('O3', 'Oppo Reno', 565, 'img/oppo-reno.jpg', 'B5', 'Screen: AMOLED, 6.4\", Full HD+,Operating System:Android 9Pie(Android One),Rear Camera: Main 48 MP & 5 MP Spare,Front camera: 16 MP,CPU:Snapdragon 710 8 nhÃ¢n 64-bit,RAM:	6 GB,ROM:	256 GB,Battery capacity: 3765 mAh, with fast charging', 2019),
('O4', 'Oppo F11 Pro 128GB', 370, 'img/oppo-f11-pro-128gb.jpg', 'B5', 'Screen: LTPS LCD, 6.5\", Full HD+,Operating System: Android 9.0 (Pie),Rear Camera: Main 48 MP & 5 MP Spare,Front camera: 16 MP,CPU: 8-core MediaTek Helio P70, RAM:	6 GB,ROM:	128 GB,Battery capacity: 4000 mAh, with fast charging', 2019),
('O5', 'Oppo F9 6GB', 309, 'img/oppo-f9-6gb.jpg', 'B5', 'Screen:LTPS LCD, 6.3\", Full HD+,Operating System:ColorOS 5.2 (Android 8.1),Rear Camera: Main 16 MP & Extra 2 MP,Front camera: 25 MP, CPU: MediaTek Helio P60 8-core,RAM: 6 GB,ROM: 64 GB,Battery capacity: 3500 mAh,with fast charging', 2019),
('O6', 'Oppo F7', 238, 'img/oppo-f7-red.jpg', 'B5', 'Screen:LTPS LCD, 6.23\", Full HD+,Operating System:ColorOS 5.0 (Android 8.1),Rear Camera: 16 MP,Front camera: 25 M,CPU: MediaTek Helio P60 8 nhÃ¢n 64-bit,RAM: 4 GB, ROM: 64 GB,Battery capacity:3400 mAh', 2019),
('O7', 'Oppo A7 32GB', 179, 'img/oppo-a7-32gb.jpg', 'B5', 'Screen:IPS LCD, 6.2\", HD+, Operating System:ColorOS 5.2 (Android 8.1),Rear Camera: Main 13 MP & 2 MP Spare,Font Camera: 16MP,CPU:Qualcomm Snapdragon 450 8-core 64-bit,RAM:3 GB,ROM:32 GB,Battery capacity: 4230 mAh', 2019),
('O8', 'Oppo A7 64 GB', 225, 'img/oppo-a7.jpg', 'B5', 'Screen:	IPS LCD, 6.2\", HD+,Operating System:ColorOS 5.2 (Android 8.1),Rear Camera: Main 13 MP & 2 MP Spare,Font Camera: 16MP,CPU:Qualcomm Snapdragon 450 8-core 64-bit,RAM:4 GB,ROM:64 GB,Battery capacity: 4230 mAh', 2019),
('O9', 'Oppo A5s', 173, 'img/oppo-a5s.jpg', 'B5', 'Screen:	IPS LCD, 6.2\", HD+,Operating System:	Android 8.1 (Oreo),Rear Camera: Main 13 MP & 2 MP Spare,Front camera: 8 MP,CPU: MediaTek Helio P35 is 8-bit 64-bit,RAM: 3 GB,ROM: 32 GB,Battery capacity: 4320 mAh', 2019),
('S1', 'SamSung Galaxy S10 +', 1130, 'img/samsung-galaxy-s10-plus-512gb.jpg', 'B4', 'Screen: Dynamic AMOLED, 6.4\", Quad HD+,Operating System:Android 9.0 (Pie),Rear Camera: Main 12 MP & 12 MP, 16 MP ,Front camera: Main 10 MP & 8 MP Spare,CPU: Exynos 9820 8-core 64-bit,RAM:8 GB,ROM:512 GB,Battery capacity: 4100 mAh,with fast charging', 2019),
('S10', 'SamSung Galaxy A30 32GB', 259, 'img/samsung-galaxy-a30-32gb.jpg', 'B4', 'Screen:Super AMOLED, 6.4\", Full HD+,Operating System: Android 9.0 (Pie),Rear Camera: Main 16 MP & 5 MP Side,Front camera: 16 MP,CPU:Exynos 7904 8-bit 64-bit,RAM: 4 GB,ROM: 64 GB,Battery capacity: 4000 mAh, with fast charging', 2019),
('S11', 'SamSung Galaxy A20', 182, 'img/samsung-galaxy-a20-red.jpg', 'B4', 'Screen: Super AMOLED, 6.4\", HD+,Operating System:Android 9.0 (Pie),Rear Camera: Main 13 MP & 5 MP Side,Font Camera: 8 MP,CPU: Exynos 7884 8 cores,RAM:3 GB,ROM:32 GB,Battery capacity: 4000 mAh, with fast charging', 2019),
('S12', 'SamSung Galaxy A9', 325, 'img/samsung-galaxy-a9.jpg', 'B4', 'Screen:Super AMOLED, 6.3\", Full HD+,Operating System:Android 8.0 (Oreo),Rear Camera: Main 24 MP & Extra 10 MP, 8 MP, 5 MP, Front camera: 	24 MP,CPU: Qualcomm Snapdragon 660 8 core,RAM:6 GB,ROM:128 GB,Battery capacity: 3800 mAh, with fast charging', 2019),
('S13', 'SamSung Galaxy A6+', 349, 'img/samsung-galaxy-a6-plus.jpg', 'B4', 'Screen:Super AMOLED, 6\", Full HD+,Operating System:Android 8.0 (Oreo),Rear Camera: Main 16 MP & 5 MP Spare,Front camera:24 MP,CPU: Qualcomm Snapdragon 450 8-core 64-bit, RAM: 4 GB,ROM: 32 GB,Battery capacity: 3500 mAh', 2019),
('S14', 'SamSung Galaxy A10', 134, 'img/samsung-galaxy-a10-red.jpg', 'B4', 'Screen:IPS LCD, 6.2\", HD+,Operating System:Android 9.0 (Pie),Rear Camera: 13MP,Front camera: 5 MP,CPU:Exynos 7884 8 cores,RAM: 2 GB,ROM: 32 GB,Battery capacity: 3400 mAh', 2019),
('S15', 'SamSung Galaxy J4+', 138, 'img/samsung-galaxy-j4-plus.jpg', 'B4', 'Screen:IPS LCD, 6.0\", HD+,Operating System:	Android 8.1 (Oreo),Rear Camera: 13MP,Font Camera: 5 MP, CPU: Qualcomm Snapdragon 425 4-bit 64-bit,RAM:2 GB,ROM:16 GB,Battery capacity: 3300 mAh', 2019),
('S2', 'SamSung Galaxy S10', 789, 'img/samsung-galaxy-s10.jpg', 'B4', 'Screen:	Dynamic AMOLED, 6.1\", Quad HD+,Operating System:Android 8.1 (Oreo), Rear Camera: Main 12 MP & 12 MP, 16 MP ,Front camera: 10 MP,CPU: Exynos 9820 8-core 64-bit,RAM:8 GB,ROM:128 GB,Battery capacity: 34000 mAh,with fast charging', 2019),
('S3', 'SamSung Galaxy Note 9 512GB', 935, 'img/samsung-galaxy-note-9-512gb-blue.jpg', 'B4', 'Screen: Super AMOLED, 6.4\", Quad HD+,Operating System: Android 8.1 (Oreo),Rear Camera: Main 12 MP & 12 MP Spare,Front camera: 8 MP, CPU: Exynos 9810 8-core 64-bit,RAM:8 GB,ROM:512 GB,Battery capacity: 4000 mAh,with fast charging', 2019),
('S4', 'SamSung Galaxy Note 9', 829, 'img/samsung-galaxy-note-9-.jpg', 'B4', 'Screen:	Super AMOLED, 6.4\", Quad HD+,Operating System:	Android 8.1 (Oreo), Rear Camera: Main 12 MP & 12 MP Spare,Front camera: 8 MP,CPU: Exynos 9810 8-core 64-bit,RAM:6 GB,ROM:128 GB,Battery capacity: 4000 mAh,with fast charging', 2019),
('S5', 'SamSung Galaxy Note 8', 525, 'img/samsung-galaxy-note8-.jpg', 'B4', 'Screen:	Super AMOLED, 6.3\", Quad HD+,Operating System:	Android 7.1 (Nougat),Rear Camera: Main 12 MP & 12 MP Spare,Front camera: 8 MP,CPU: Exynos 8895 8-core 64-bit,RAM: 6 GB,ROM: 64 GB,Battery capacity: 3300 mAh,with fast charging', 2019),
('S6', 'SamSung Galaxy M20', 209, 'img/samsung-galaxy-m20.jpg', 'B4', 'Screen: PLS TFT LCD, 6.3\", Full HD+,Operating System: Android 8.1 (Oreo),Rear Camera: Main 13 MP & 5 MP Side,Front camera: 8 MP,CPU: Exynos 7904 8-bit 64-bit,RAM: 3 GB,ROM: 32 GB,Battery capacity:5000 mAh, with fast charging', 2019),
('S7', 'SamSung Galaxy J6+', 173, 'img/samsung-galaxy-j6-plus.jpg', 'B4', 'Screen:	IPS LCD, 6.0\", HD+,Operating System: Android 8.1 (Oreo),Rear Camera: Main 13 MP & 5 MP Side,Font Camera: 8 MP,CPU: Qualcomm Snapdragon 425 4-bit 64-bit,RAM:	3 GB,ROM:	32 GB,Battery capacity: 3300 mAh', 2019),
('S8', 'SamSung Galaxy A70', 409, 'img/samsung-galaxy-a70.jpg', 'B4', 'Screen: Super AMOLED, 6.7\", Full HD+,Operating System:Android 9.0 (Pie),Rear Camera: Main 32 MP & Extra 8 MP, 5 MP,Front camera: 32 MP,CPU: Snapdragon 675 8 nhÃ¢n 64-bit,RAM:	6 GB,ROM:128 GB,Battery capacity: 4500 mAh, with fast charging', 2019),
('S9', 'SamSung Galaxy A50', 349, 'img/samsung-galaxy-a50-128gb.jpg', 'B4', 'Screen:Super AMOLED, 6.4\", Full HD+,Operating System:Android 9.0 (Pie),Rear Camera: Main 25 MP & Extra 8 MP, 5 MP,Front camera: 25 MP,CPU: Exynos 9610 8 core 64-bit,RAM: 6 GB,ROM: 128 GB,Battery capacity: 4000 mAh, with fast charging', 2019),
('V1', 'Vsmart Active 1+ Blue', 349, 'img/vsmart-active-1-plus-blue-400x460.png', 'B3', 'Screen: IPS LCD, 6.18 \", Full HD +,Operating System: Android 8.1 (Oreo),Rear Camera: Main 12 MP & 24 MP Side,Front camera: 20 MP,CPU: Qualcomm Snapdragon 660 8 cores,RAM: 6 GB,Internal memory: 64 GB,Battery capacity: 3650 mAh, with fast charging', 2019),
('V2', 'Vsmart Active 1+ Pink', 260, 'img/vsmart-active-1-plus-hong-400x460.png', 'B3', 'Screen: IPS LCD, 6.18 \", Full HD +,Operating System: Android 8.1 (Oreo),Rear Camera: Main 12 MP & 24 MP Side,Front camera: 20 MP,CPU: Qualcomm Snapdragon 660 8 cores,RAM: 6 GB,Internal memory: 64 GB,Battery capacity: 3650 mAh, with fast charging', 2019),
('V3', 'Vsmart Active 1+ While', 189, 'img/vsmart-active-1-white-400x460.png', 'B3', 'Screen: IPS LCD, 5.65 \", Full HD +,Operating System: Android 8.1 (Oreo),Rear Camera: Main 12 MP & 5 MP Spare,Front camera: 8 MP,CPU: Qualcomm Snapdragon 660 8 cores,RAM: 4 GB,Internal memory: 64 GB,Battery capacity: 3100 mAh, with fast charging', 2019),
('V4', 'Vsmart Joy 1+ 32GB', 160, 'img/vsmart-joy-1-plus-black-400x460.png', 'B3', 'Screen: IPS LCD, 6.18 \", HD +,Operating System: Android 8.1 (Oreo),Rear Camera: Main 13 MP & 2 MP Side,Front camera: 16 MP,CPU: Qualcomm Snapdragon 430 8-bit 64 bit,RAM: 3 GB,Internal memory: 32 GB,Battery capacity: 4000 mAh', 2019),
('V5', 'Vsmart Joy 1+ 16GB', 130, 'img/vsmart-joy-1-16gb-white-400x460.png', 'B3', 'Screen: IPS LCD, 6.18 \", HD +,Operating System: Android 8.1 (Oreo),Rear Camera: Main 13 MP & 2 MP Side,Front camera: 16 MP,CPU: Qualcomm Snapdragon 430 8-bit 64 bit,RAM: 2 GB,Internal memory: 16 GB,Battery capacity: 4000 mAh', 2019),
('V6', 'Vsmart Joy 1+ 16GB Blue', 169, 'img/vsmart-joy-1-plus-16gb-blue-400x460.png', 'B3', 'Screen: IPS LCD, 5.45 \", HD +,Operating System: Android 8.1 (Oreo),Rear camera: 13 MP,Front camera: 5 MP,CPU: Snapdragon 435 8-bit 64-bit,RAM: 2 GB,Internal memory: 16 GB,Battery capacity: 3000 mAh', 2019),
('X1', 'Xiaomi Mi8', 510, 'img/xiaomi-8jpg.jpg', 'B2', 'Screen: IPS LCD, 6.26\", Full HD+,Operating System:	Android 8.1 (Oreo), Rear Camera: Main 12 MP & 5 MP Spare, Front camera: 24 MP, CPU: Qualcomm Snapdragon 660 8 cores, RAM:6 GB, ROM:128 GB, Battery capacity: 3350 mAh, with fast charging', 2019),
('X2', 'Xiaomi Mi8 Lite', 350, 'img/xiaomi-mi-8-lite.jpg', 'B2', 'Screen: IPS LCD, 6.26\", Full HD+,Operating System:	Android 8.1 (Oreo), Rear Camera: Main 12 MP & 5 MP Spare, Front camera: 24 MP, CPU: Qualcomm Snapdragon 660 8 cores, RAM:3 GB, ROM:64 GB, Battery capacity: 3350 mAh, with fast charging', 2019),
('X3', 'Xiaomi Redmi Note 6', 250, 'img/xiaomi-redmi-note-6.jpg', 'B2', 'Screen:	IPS LCD, 6.26\", Full HD++, Operating System:	Android 8.1 (Oreo), Rear Camera: Main 12 MP & 5 MP Spare, Front camera: Main 20 MP & 2 MP Side,CPU: Qualcomm Snapdragon 636 8-core, RAM: 4 GB, ROM: 64 GB, Battery capacity: 4000 mAh', 2019),
('X4', 'Xiaomi Redmi 7 Black', 140, 'img/xiaomi-redmi-7-16gb-blackjpg.jpg', 'B2', 'Screen: IPS LCD, 6.26\", HD+,Operating System:	Android 9.0 (Pie),Rear Camera: Main 12 MP & 2 MP Side,Front camera: 8 MP,CPU: Qualcomm Snapdragon 632 8-bit,RAM: 2 GB,ROM: 16 GB,Battery capacity: 4000 mAh', 2019),
('X5', 'Xiaomi Redmi 7 Blue', 490, 'img/xiaomi-redmi-7-blue-.jpg', 'B2', 'Screen:	IPS LCD, 6.26\", HD+,Operating System:	Android 9.0 (Pie),Rear Camera: Main 12 MP & 2 MP Side,Font Camera: 8 MP,CPU: Qualcomm Snapdragon 632 8-bit,RAM:	3 GB,ROM:	32 GB,Battery capacity: 4000 mAh, with fast charging', 2019),
('X6', 'Xiaomi Redmi Note 6 Pro', 190, 'img/xiaomi-redmi-note-6-pro-32gb.jpg', 'B2', 'Screen:	IPS LCD, 6.26\", Full HD+, Operating System:	Android 8.1 (Oreo),Rear Camera: Main 12 MP & 5 MP Spare,Front camera: Main 20 MP & 2 MP Side,CPU: Qualcomm Snapdragon 636 8-core,RAM:	3 GB,ROM:	32 GB,Battery capacity: 4000 mAh', 2019),
('X7', 'Xiaomi Redmi Note 7', 240, 'img/xiaomi-redmi-7-16gb-blackjpg.jpg', 'B2', 'Screen:	IPS LCD, 6.3\", Full HD+, Operating System:Android 9.0 (Pie),Rear Camera: Main 48 MP & 5 MP Spare,Front camera: 13 M,CPU: Qualcomm Snapdragon 660 8 cores,RAM:4 GB,ROM:	64 GB,Battery capacity: 4000 mAh, with fast charging', 2019);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Idbrand`) REFERENCES `brand` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
