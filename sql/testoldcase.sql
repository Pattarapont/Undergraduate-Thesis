-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 15, 2017 at 07:10 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `et_cbr`
--

-- --------------------------------------------------------

--
-- Table structure for table `testoldcase`
--

CREATE TABLE `testoldcase` (
  `id` int(11) NOT NULL,
  `gender` text COLLATE utf8_unicode_ci NOT NULL,
  `age` text COLLATE utf8_unicode_ci NOT NULL,
  `homeland` text COLLATE utf8_unicode_ci NOT NULL,
  `career` text COLLATE utf8_unicode_ci NOT NULL,
  `congenital_dis` text COLLATE utf8_unicode_ci NOT NULL,
  `name_congenital_dis` text COLLATE utf8_unicode_ci,
  `body_movement` text COLLATE utf8_unicode_ci NOT NULL,
  `saving` text COLLATE utf8_unicode_ci,
  `tourism` int(3) DEFAULT NULL,
  `code_province` int(6) DEFAULT NULL,
  `travel_form` text COLLATE utf8_unicode_ci,
  `vehicle` text COLLATE utf8_unicode_ci,
  `travel_time` text COLLATE utf8_unicode_ci,
  `camp` text COLLATE utf8_unicode_ci,
  `charges` text COLLATE utf8_unicode_ci,
  `score` int(5) DEFAULT NULL,
  `facilities` text COLLATE utf8_unicode_ci,
  `location` text COLLATE utf8_unicode_ci,
  `province` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testoldcase`
--

INSERT INTO `testoldcase` (`id`, `gender`, `age`, `homeland`, `career`, `congenital_dis`, `name_congenital_dis`, `body_movement`, `saving`, `tourism`, `code_province`, `travel_form`, `vehicle`, `travel_time`, `camp`, `charges`, `score`, `facilities`, `location`, `province`) VALUES
(1, 'ชาย', '50 - 60 ปี', 'ตาก', 'อื่นๆ', 'ไม่มี', '', 'เดินได้ปกติ', 'ไม่มี', 1, 1, 'เพื่อน', 'รถตู้', '2 - 3 วัน', 'บ้านญาติ', '3,000 – 5,000 บาท', 4, '1', 'น้ำตกแก่งโสภา', 'พิษณุโลก'),
(2, 'ชาย', '50 - 60 ปี', 'พิษณุโลก', 'รับราชการ', 'ไม่มี', '', 'เดินได้ปกติ', 'มี', 0, 1, 'ครอบครัว', 'รถส่วนตัว', '2 - 3 วัน', 'รีสอร์ท', '3,000 – 5,000 บาท', 4, '1', 'วัดพระศรีรัตนมหาธาตุฯ (วัดใหญ่)', 'พิษณุโลก'),
(3, 'ชาย', '50 - 60 ปี', 'พิษณุโลก', 'รับราชการ', 'ไม่มี', '', 'เดินได้ปกติ', 'มี', 1, 1, 'ครอบครัว', 'รถส่วนตัว', '2 - 3 วัน', 'รีสอร์ท', '3,000 – 5,000 บาท', 4, '1', 'วัดพระศรีรัตนมหาธาตุฯ (วัดใหญ่)', 'พิษณุโลก'),
(4, 'หญิง', '50 - 60 ปี', 'พิษณุโลก', 'เกษตรกรรม', 'ไม่มี', '', 'เดินได้ปกติ', 'มี', 1, 3, 'แพคเกจท่องเที่ยว', 'รถบัส', '2 - 3 วัน', 'โรงแรม', '3,000 – 5,000 บาท', 5, '1', 'อนุเสาวรีย์ครูบาเจ้าศรีวิชัย', 'เชียงใหม่'),
(5, 'หญิง', '70 ปีขึ้นไป', 'นครสวรรค์', 'เกษตรกรรม', 'มี', 'เบาหวาน', 'เดินได้ปกติ', 'ไม่มี', 1, 4, 'ครอบครัว', 'รถส่วนตัว', '2 - 3 วัน', 'รีสอร์ท', '1,000 - 3,000 บาท', 2, '1', 'พระตำหนักดอยตุง', 'เชียงราย'),
(6, 'หญิง', '50 - 60 ปี', 'พิษณุโลก', 'อื่นๆ', 'ไม่มี', '', 'เดินได้ปกติ', 'มี', 1, 4, 'แพคเกจท่องเที่ยว', 'รถส่วนตัว', '2 - 3 วัน', 'โรงแรม', '1,000 - 3,000 บาท', 4, '1', 'พระตำหนักดอยตุง', 'เชียงราย'),
(7, 'หญิง', '60 - 70 ปี', 'นครสวรรค์', 'อื่นๆ', 'มี', 'โรคหัวใจ, ความดันโลหิต, จอประสาทตาเสื่อม', 'เดินได้ปกติ', 'ไม่มี', 1, 3, 'ครอบครัว', 'รถส่วนตัว', '4 – 5 วัน', 'บ้านญาติ', 'มากกว่า 5,000 บาท', 4, '1', 'พระตำหนักภูพิงค์ราชนิเวศน์', 'เชียงใหม่'),
(8, 'ชาย', '50 - 60 ปี', 'พิษณุโลก', 'ค้าขาย', 'มี', 'ข้อเข่าเสื่อม', 'เดินได้ปกติ', 'มี', 1, 4, 'กลุ่มผู้สูงอายุ', 'รถบัส', '2 - 3 วัน', 'โรงแรม', '1,000 - 3,000 บาท', 4, '1', 'สามเหลี่ยมทองคำ', 'เชียงราย');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `testoldcase`
--
ALTER TABLE `testoldcase`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `testoldcase`
--
ALTER TABLE `testoldcase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
