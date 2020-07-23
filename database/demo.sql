-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 20, 2020 lúc 04:01 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webnhom5`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Mobile` varchar(50) DEFAULT NULL,
  `Fax` varchar(50) DEFAULT NULL,
  `YearEstablish` int(3) DEFAULT NULL,
  `Offer` text DEFAULT NULL,
  `Salary` varchar(50) DEFAULT NULL,
  `Numbers` int(10) DEFAULT NULL,
  `Bonus` text DEFAULT NULL,
  `StartDayOffer` date DEFAULT NULL,
  `EndDayOffer` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `StudentCode` int(10) DEFAULT NULL,
  `Birth` date DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Mobile` varchar(50) DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL,
  `Major` varchar(50) DEFAULT NULL,
  `Level` varchar(50) DEFAULT NULL,
  `TrainingSystem` varchar(50) DEFAULT NULL,
  `TrainingProgram` varchar(50) DEFAULT NULL,
  `GPA` varchar(4) DEFAULT NULL,
  `YearOfCourse` varchar(50) DEFAULT NULL,
  `Forte` text DEFAULT NULL,
  `Skill` text DEFAULT NULL,
  `Favourite` text DEFAULT NULL,
  `Nation` varchar(50) DEFAULT NULL,
  `District` varchar(50) DEFAULT NULL,
  `Commune` varchar(50) DEFAULT NULL,
  `Street` varchar(50) DEFAULT NULL,
  `HomeNumber` varchar(50) DEFAULT NULL,
  `Prize` text DEFAULT NULL,
  `NumberCMT` int(50) DEFAULT NULL,
  `CompanyID` int(11) NOT NULL,
  `TeacherID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `Age` int(10) DEFAULT NULL,
  `Gender` int(3) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Mobile` varchar(50) DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL,
  `Major` varchar(50) DEFAULT NULL,
  `NumberCMT` varchar(50) DEFAULT NULL,
  `Position` varchar(50) DEFAULT NULL,
  `Office` varchar(50) DEFAULT NULL,
  `Offer` text DEFAULT NULL,
  `TopicResearch` text DEFAULT NULL,
  `Numbers` int(10) DEFAULT NULL,
  `StartDayOffer` date DEFAULT NULL,
  `EndDayOffer` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Nickname` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `category` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_students_company` (`CompanyID`),
  ADD KEY `FK_students_teacher` (`TeacherID`);

--
-- Chỉ mục cho bảng `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Nickname` (`Nickname`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `FK_company_id_user` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `FK_students_company` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`id`),
  ADD CONSTRAINT `FK_students_id_user` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_students_teacher` FOREIGN KEY (`TeacherID`) REFERENCES `teacher` (`id`);

--
-- Các ràng buộc cho bảng `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `FK_teacher_id_user` FOREIGN KEY (`id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
