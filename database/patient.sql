-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 10:03 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ktgk`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `patient`
--

CREATE TABLE `patient` (
  `patientid` int(10) NOT NULL,
  `firstname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `blood_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_on` date NOT NULL,
  `modified_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `patient`
--

INSERT INTO `patient` (`patientid`, `firstname`, `lastname`, `dateofbirth`, `gender`, `mobile`, `email`, `height`, `weight`, `blood_type`, `created_on`, `modified_on`) VALUES
(1, 'Quân', 'Hồ Hồng       ', '2001-11-25', '       Nam', '0346785893', 'aqdz01@gmail.com', 1.64, 55, 'AB', '2021-08-12', '2021-10-07'),
(3, 'Vương', 'Nguyễn Minh ', '2001-07-25', ' Nam', ' 034324234', ' vuong@gmail.com', 1.65, 55, 'O', '2021-10-19', '2021-10-03'),
(4, 'Tân', 'Nguyễn Văn Tân', '2001-03-02', 'Nam', ' 0342424324', ' tan@gmail.com', 1.64, 55, 'O', '2021-10-04', '2021-10-25'),
(5, 'Hiếu ', 'Hồ Đức', '2001-01-30', 'Nam', ' 0335785981', ' hieu@gmail.com', 1.7, 59, 'O', '2021-10-06', '2021-10-25');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `patient`
--
ALTER TABLE `patient`
  MODIFY `patientid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
