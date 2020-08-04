-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 03, 2020 lúc 04:42 AM
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
-- Cơ sở dữ liệu: `demo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `name`, `address`, `created_at`, `updated_at`) VALUES
(1, 'trong@gmail.com', '$2y$10$Dp1reWl.S..F.99BqHj8dOuJUJkNJyW6aFY6XRAfrOmpvbyntsXXm', 'Trọng', '123 Xuân Thuỷ', '2020-07-30 06:37:13', '2020-07-30 06:37:13'),
(2, 'admin1@gmail.com', '$2y$10$aC5DZ3Yk68Z6KiaJR9njEuxFMgC.8tZV9FX9XmwYEN8i/YcBIn34u', 'admin1', 'Nam Dinh', '2020-08-01 01:29:56', '2020-08-01 01:29:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `content` text DEFAULT NULL,
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `address` text DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `yearEstablish` int(3) DEFAULT NULL,
  `offer` text DEFAULT NULL,
  `salary` varchar(50) DEFAULT NULL,
  `numbers` int(10) DEFAULT NULL,
  `bonus` text DEFAULT NULL,
  `startDayOffer` date DEFAULT NULL,
  `endDayOffer` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `Hinh` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `company`
--

INSERT INTO `company` (`id`, `address`, `mobile`, `fax`, `yearEstablish`, `offer`, `salary`, `numbers`, `bonus`, `startDayOffer`, `endDayOffer`, `created_at`, `updated_at`, `Hinh`) VALUES
(1, '6F, 8F, AC Building, 78 Duy Tân, Cầu Giấy, Hà Nội', '0247.3039.996', '03-6261-5637', 1991, 'Thực tập tại VTI với các vị trí:\r\n10 Fresher IOS\r\n10 Fresher Android\r\n05 Fresher Ruby\r\n05 Fresher Tester\r\n20 Fresher Java\r\n10 Fresher AWS', '1000$ - 5000$', 10, 'Môi trường làm việc tại VTI vô cùng năng động, chuyên nghiệp, luôn cập nhật những xu hướng công nghệ mới nhất (AI, Cloud Computing, Robotics, DeepLens).\r\nHệ thống đánh giá năng lực review 2 lần/ năm, chế độ đãi ngộ cạnh tranh, tăng lương đột biến theo kết quả thực hiện.\r\nHàng năm VTI dành tặng 100% chi phí chuyến du lịch Nhật Bản cho 02 cá nhân đạt thành tích xuất sắc nhất năm.\r\nNhân viên được hưởng chế độ nghỉ mát hàng năm, teambuilding 3 lần/ năm, các hoạt động thể thao và giải trí, đào tạo phong phú (Yoga, bơi lội, Kendo, Zumba...).\r\nĐến với VTI, bạn sẽ được tham gia khóa học tiếng Nhật, các buổi Seminar công nghệ miễn phí và cơ hội Onsite làm việc tại Nhật Bản.\r\nVTi hỗ trợ nhân viên tham gia các kì thi chứng chỉ công nghệ (CMMi, Scrum, Agile, AWS, v.v...).', '2020-07-23', '2021-02-10', NULL, NULL, NULL),
(2, '2nd Floor, CT1-CT2 Green Park Tower, Dương Đình Nghệ, Yên Hòa, Cầu Giấy, Hà Nội', '0962.623.140', NULL, 2017, 'Tuyển thực tập sinh vị trí: Fullstack Developer', '2000$', 15, 'HONEST - ENTHUSIASM - RESPONSIBILITY - CREATION', '2020-07-15', '2022-07-15', NULL, NULL, NULL),
(3, '4th floor, Tòa nhà Tây Hà, 19 Tố Hữu, Hà Nội, Việt Nam', '0982171732', NULL, 2009, 'Thực tập sinh app:\r\ngame Quy Kiem 3D\r\ngame Nhat Kiem Giang Ho\r\ngame Vua Tam Quoc\r\ngame Tinh Kiem 3D', '1500$ - 2000$', 30, 'fb.com/FuntapCorpCareers', '2020-07-03', '2025-02-21', NULL, NULL, NULL),
(4, 'Toà nhà FPT, 17 Duy Tân, Dịch Vọng Hậu, Cầu Giấy, HN', '096 912 52 48', NULL, 1990, 'Fullstack Java Web Developer: https://bitly.com.vn/kdX3y\r\nJava SE Developer: https://bitly.com.vn/DzTli\r\nFullstack .Net Web Developer: https://bitly.com.vn/NzLdb\r\nFront-end Developer: https://bitly.com.vn/Dbugn\r\nEmbedded Developer: https://bitly.com.vn/tATGj\r\nWeb Application Testing: https://bit.ly/2NS8vMM\r\nProfessional React Developer: https://bit.ly/2CzP756', '1000$ - 2500$', 45, '6 LÝ DO nên học lập trình tại FPT Software Academy:\r\n✅ Đào tạo để làm việc: chương trình đào tạo thực tế với yêu cầu của công việc được xây dựng bởi đội ngũ chuyên gia hàng đầu làm việc tại FPT Software - công ty phần mềm số 1 Việt Nam.\r\n✅ Hình thức đào tạo linh hoạt: kết hợp học offline tại Trung tâm và online tại nhà (Blended Learning ).\r\n✅ Mô hình đào tạo 3 chiều: ngoài đội ngũ giảng viên (Trainer) FPT Software Acadmey còn có các trợ giảng (Mentor) và quản lý lớp (Admin) giúp tăng tương tác, hỗ trợ học viên tốt nhất.\r\n✅ Thực chiến với chuyên gia: Hơn 60% thời lượng thực hành giúp học viên nắm vững kiến thức, thực hành trên các dự án thật.\r\n✅ 100% cam kết việc làm sau tốt nghiệp với mức thu nhập khởi điểm lên tới 14M/tháng\r\n✅ Miễn phí khóa học kỹ năng mềm dành cho lập trình viên (trị giá 3.000.000 VNĐ): Tiếng anh chuyên ngành IT, kỹ năng trình bày, kỹ năng viết mail, kỹ năng tạo CV, kỹ năng trả lời phỏng vấn, làm việc nhóm và báo cáo công việc', NULL, NULL, NULL, NULL, NULL),
(5, 'Tầng 5 - TTTM, Tòa Ecolife - 58 Tố Hữu, Nam Từ Liêm, Hà Nội\r\nTầng 6 - Tòa Bạch Đằng - 51 Xô Viết Nghệ Tĩnh, Hòa Cường Nam, Hải Châu, Đà Nằng', '02466874606', NULL, 2015, 'Internship (Frontend/backend/AI)\r\nFresher (Frontend/Backend/Game Developer)\r\nJunior/Senior (Mobile/ Tester)', '2200$ - 3000$', 5, 'Môi trường trẻ\r\nLàm việc vì đam mê\r\nTrách nhiệm và kỉ luật cao\r\nTinh thần tự học và chia sẻ kiến thức\r\nTin tưởng - Chia sẻ - Trung thực.', '2020-07-21', NULL, NULL, NULL, NULL),
(6, NULL, '090 515 15 55', NULL, 2016, 'Devops Engineer\r\nFullstack Developer\r\nQA Tester (Auto/Manual)', '1000$ - 2000$', 17, 'Tuyển dụng OPEN COMMERCE GROUP (BEEKETING PREVIOUSLY)\r\nWebsite: http://opencommercegroup.com/', NULL, NULL, NULL, NULL, NULL),
(99990019, 'abc', '0866867299', '12345', NULL, NULL, NULL, NULL, NULL, '2020-07-22', '2020-07-24', '2020-07-30 12:06:06', '2020-08-03 02:03:44', 'dwJY_eanV_5XDQ_K0Vo_3uoc_cancel.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `studentCode` int(10) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `major` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `trainingSystem` varchar(50) DEFAULT NULL,
  `trainingProgram` varchar(50) DEFAULT NULL,
  `gpa` varchar(4) DEFAULT NULL,
  `yearOfCourse` varchar(50) DEFAULT NULL,
  `forte` text DEFAULT NULL,
  `skill` text DEFAULT NULL,
  `favourite` text DEFAULT NULL,
  `nation` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `commune` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `homeNumber` varchar(50) DEFAULT NULL,
  `prize` text DEFAULT NULL,
  `numberCMT` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Hinh` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `students`
--

INSERT INTO `students` (`id`, `studentCode`, `birth`, `gender`, `mobile`, `department`, `major`, `level`, `trainingSystem`, `trainingProgram`, `gpa`, `yearOfCourse`, `forte`, `skill`, `favourite`, `nation`, `district`, `commune`, `street`, `homeNumber`, `prize`, `numberCMT`, `created_at`, `updated_at`, `Hinh`) VALUES
(18020001, 18020001, '2000-07-21', '0', '0919001009', 'K63-2018-CLC', 'chơi game', '2', 'Hệ chuẩn', '4.0 năm', '3.45', '2019-2020', 'Code, nghiên cứu khoa học', 'pro all', 'code', 'Việt Nam', 'Hà Nội', 'Cầu Giấy', 'Xuân Thủy', '144', 'Giải nhất toàn quốc môn toán 2020', '012345678909', '2020-07-26 09:00:44', '2020-07-26 09:00:44', NULL),
(18021290, 18021290, '2000-03-27', '1', '0943934631', 'Công Nghệ Thông tin', 'Mạng Máy Tính Và Truyền Thông Dữ Liệu', '2', 'Chuẩn', '4,5 năm', '4.0', '2019-2020', 'chắm chỉ, ngoan khỏi nói', 'Code web', 'đi dạo', 'Việt Nam', 'Nam Định', 'Mỹ Thắng', 'Bườn 3', NULL, 'Giải bét môn toán 2018-2019', '036200002548', '2020-07-26 09:00:44', '2020-07-26 09:00:44', NULL),
(18021313, 18021313, '2000-01-14', '1', '0369180227', 'Công nghệ thông tin', 'Truyền thông và Mạng máy tính', '2', 'chuẩn', '4,5 năm', '3,44', '2019-2020', 'Học nhanh, chăm chỉ', 'tìm hiểu và làm bài tập nhóm tốt', 'code app, code web', 'Việt Nam', 'Nam Định', 'Vụ Bản', 'Vụ Nữ', '12', 'Học Bổng Salary Học kì 1 năm học 2018-2019', '039810108374', '2020-07-26 09:00:44', '2020-07-26 09:00:44', NULL),
(99990020, 123456, NULL, 'Nữ', NULL, 'Vật lý kỹ thuật', NULL, 'Cao đẳng', 'Chính quy', 'Chuẩn', NULL, 'QH-2014', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-02 09:14:30', '2020-08-02 09:14:30', 'QROK_7D4Z_d.jpg'),
(99990022, 12345678, '2020-07-17', 'Nam', NULL, 'Hàng không vũ trụ', NULL, 'Cao đẳng', 'Tại chức', 'Chuẩn', '3.5', 'QH-2014', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-30 09:07:17', '2020-07-30 09:07:17', NULL),
(99990025, 123456, NULL, 'Nam', NULL, 'Điện tử viễn thông', NULL, 'Cao đẳng', 'Chính quy', 'Chuẩn', NULL, 'QH-2014', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-02 09:09:02', '2020-08-02 09:09:02', '7D4Z_d.jpg'),
(99990026, 12345678, '2020-07-16', 'Khác', NULL, 'Công nghệ thông tin', NULL, 'Cao đẳng', 'Chính quy', 'Chuẩn', NULL, 'QH-2014', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-31 14:42:35', '2020-07-31 14:42:35', '1jLO_5XDQ_K0Vo_3uoc_cancel.png'),
(99990028, NULL, NULL, 'Nam', NULL, 'Công nghệ thông tin', NULL, 'Cao đăng', 'Chính quy', 'Chuẩn', NULL, 'QH-2014', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-02 16:26:07', '2020-08-02 16:26:07', 'RmoI_og1l_5XDQ_K0Vo_3uoc_cancel.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `age` int(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `major` varchar(50) DEFAULT NULL,
  `numberCMT` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `office` varchar(50) DEFAULT NULL,
  `offer` text DEFAULT NULL,
  `topicResearch` text DEFAULT NULL,
  `numbers` int(10) DEFAULT NULL,
  `startDayOffer` date DEFAULT NULL,
  `endDayOffer` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Hinh` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `teacher`
--

INSERT INTO `teacher` (`id`, `age`, `gender`, `mobile`, `department`, `major`, `numberCMT`, `position`, `office`, `offer`, `topicResearch`, `numbers`, `startDayOffer`, `endDayOffer`, `created_at`, `updated_at`, `Hinh`) VALUES
(99990000, 40, '1', '096 912 52 49', 'Electronics and Computer Engineering', 'Research Interests: Intelligent Robots (Fuzzy Logi', '036200002222', 'Head of Electronics and Computer Engineering Depar', '404-SS3', 'Nhóm nghiên cứu khoa học bộ khoa Điện Tử viễn Thông \r\nLab: thí nghiệm thông minh', 'Robot thông minh (Logic mờ, Fusion Fusion, Robot nối mạng); Kiến trúc máy tính và hệ thống dựa trên bộ vi xử lý; Đo lường và Kiểm soát dựa trên Máy tính và Vi điều khiển; Thiết bị điện tử.', 5, '2020-07-21', '2022-07-21', '2020-07-26 09:01:09', '2020-07-26 09:01:09', NULL),
(99990001, 36, '0', '0943115555', 'Truyền thông không dây', 'Công nghệ tần số siêu cao Anten thông minh Kỹ thuậ', '033302022569', NULL, NULL, 'Sinh viên tham gia nhóm Lab nghiên cứu công nghệ tần số siêu cao phục vụ 5G', 'Công nghệ tần số siêu cao Anten thông minh', 3, NULL, NULL, '2020-07-26 09:01:09', '2020-07-26 09:01:09', NULL),
(99990003, 45, '1', '0379180000', 'Network and Communication Systems', 'Research Interests: Intelligent Robots (Fuzzy Logi', '036612', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-26 09:01:09', '2020-07-26 09:01:09', NULL),
(99990004, 40, '0', '096 912 52 99', 'Bộ môn Các Hệ thống Thông tin', 'Cơ sở dữ liệu Thực hành Phân tích thiết kế các hệ ', NULL, 'Quan lý dữ liệu không gian, Tối ưu hóa truy vấn, C', '404-GD9', 'Xử lý dữ liệu lớn', 'Tối ưu hóa truy vấn, Cơ sở dữ liệu quy mô lớn', 5, NULL, NULL, '2020-07-26 09:01:09', '2020-07-26 09:01:09', NULL),
(99990005, 48, '1', '0943933889', 'Phòng Thí nghiệm An toàn thông tin', 'An ninh mạng An toàn và an ninh mạng', '03956464131', 'Các mạng không dây và di động Chủ đề lựa chọn về a', '403-G2', 'Sinh viên nghiên cứu Security', 'An ninh mạng\r\nAn toàn và an ninh mạng', 5, '2020-07-21', '2022-07-25', '2020-07-26 09:01:09', '2020-07-26 09:01:09', NULL),
(99990006, 30, '1', '09876543210', 'Bộ môn Các Hệ thống Thông tin', 'Khai phá quy trình nghiệp vụ', '012345678912', 'Khai phá quy trình nghiệp vụ', NULL, 'Quy trình nghiệp vụ', NULL, 1, NULL, NULL, '2020-07-26 09:01:09', '2020-07-26 09:01:09', NULL),
(99990007, 36, '1', '012344567899', 'Truyền thông và Mạng máy tính', 'Mạng máy tính Các hệ phân tán', NULL, 'Internet of Things, các hệ thống nhúng', '403-G2', 'Lab nghiên cứu Internetofthigs', 'IOT', 15, '2020-07-20', NULL, '2020-07-26 09:01:09', '2020-07-26 09:01:09', NULL),
(99990023, 13, 'Nữ', NULL, 'Vật lý kỹ thuật', NULL, NULL, NULL, NULL, 'abc', NULL, 7, '2020-07-25', '2020-07-21', '2020-07-30 23:23:05', '2020-08-02 13:08:31', 'eckS_1jLO_5XDQ_K0Vo_3uoc_cancel.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `category` int(3) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `category`, `updated_at`, `created_at`) VALUES
(1, 'VTI Technology', 'hr@vti.com.vn', 'congnghetrongtamtay', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'MIICHISOFT', 'phuongdtt@miichisoft.com', 'honest', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'FunTap', 'hr@funtap.vn', 'gamenumber1', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'FPT_Software', 'FA@Fsoft.com.vn', 'fpt123ghio', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'ncc_company', 'hr@ncc.asia', 'ctycophan12ncc', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'OpenCommerce', 'jobs@brodev.com', 'opencommercevn', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18020001, 'Trần Thị Thu Trang', 'trangtri@gmail.com', 'trangclc', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18020002, 'Nguyễn Hoài Thu', 'thunguyen@gmail.com', 'nguyenthu1234', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18020003, 'Trần Ngọc Linh', 'Linhc@gmail.com', 'ccclinh1111', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18020004, 'Hoàng Trung Thực', 'ThucAplus@gmail.com', 'apluskonoinhieu', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18020005, 'Phạm Văn Huy', 'huythaibinh@gmail.com', 'thaibinhmohoiroi', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18020006, 'Nguyễn Văn An', 'anbinh@gmail.com', 'anggaming', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18020007, 'Hoàng Tuấn Vũ', 'vuoppa@gmail.com', 'oppanhinho', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18021212, 'Võ Thị Vân', 'vanmmt@gmail.com', 'vanvo', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18021290, 'Trần Đức Toản', 'ductoan2732000@gmail.com', 'toantran', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18021313, 'Phạm Văn Trọng', 'trongnt@gmail.com', 'trongnt', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990000, 'Trần Quang Vinh', 'vinhtq@vnu.edu.vn', 'quangvinhvnu', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990001, 'Trần Thị Thúy Quỳnh', 'quynhttt@vnu.edu.vn', 'quynhdtvt', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990003, 'Lâm Sinh Công', 'congls@vnu.edu.vn', 'congdhcn', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990004, 'Dư Phương Hạnh', 'duphuonghanh@vnu.edu.vn', 'hanhdhcn', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990005, 'Lê Đại Thọ', 'ledaitho@vnu.edu.vn', 'thosecurity', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990006, 'Lê Đức Trọng', 'trongduc@vnu.vn', 'trong_nlhdh', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990007, 'Phạm Mạnh Linh', 'linhpm.vn@gmail.com', 'linh_mmt', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990008, 'Nguyễn Trí Thành', 'ntthanhvn@vnu.edu.vn', 'thanh_ktmt', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990009, 'Dương Lê Minh', 'duongleminh@gmail.com', 'minh_cvht', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990010, 'Nguyễn Quang Minh', 'Minh_97', 'minhml', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990011, 'Hoàng Xuân Tùng', 'TS.Hoang xuan tung', 'tung_ttvmmt', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990012, 'Hồ Đắc Phương', 'Ho Dac Phuong', 'phuong_mmt', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99990013, 'CompanyA', 'CompanyA@gmail.com', '$2y$10$oSfehctx0vdKrxfqTYitie.RgIdd3rF0mz5Mc/emTg9DecDBrRnS2', 1, '2020-07-25 17:00:00', '2020-07-25 17:00:00'),
(99990015, 'teacherA', 'teacher@gmail.com', '$2y$10$d4HoLgRI5lRmNSJT4YHEn.r46sYIrZeeiNiuqM1FWkDr0/9jBWPmW', 2, '2020-07-25 17:00:00', '2020-07-25 17:00:00'),
(99990016, 'student A', 'studentA@gmail.com', '$2y$10$Gj.eu8n5ykh2Q3VMb9w4a.r/WKSSzwPv2rhLk6jCSV8Cl3cBqW6jK', 3, '2020-07-25 17:00:00', '2020-07-25 17:00:00'),
(99990017, 'student b', 'studentb@gmail.com', '$2y$10$BnVLmLzr9d6.R8vqPB/YrezlxmJYvUc5o4vB9QeeAMC4w2Ksyx7gC', 3, '2020-07-25 17:00:00', '2020-07-25 17:00:00'),
(99990018, 'Phạm Văn Trọng', 'phamvantrong.va@gmail.com', '$2y$10$CvbT4iLxOSaITq12h3eBOek1rRrnqoihKvz1mi0SyaI7VqWEMhx7C', 3, '2020-07-27 06:38:20', '2020-07-27 06:38:20'),
(99990019, 'companyC', 'companyC@gmail.com', '$2y$10$GPyFBv0ap6tnWsGB0d5fle70JJlnFhYeAi5l3C3Vws/SHcGYJsoLa', 1, '2020-07-27 06:47:35', '2020-07-27 06:47:35'),
(99990020, 'student2', 'student2@gmail.com', '$2y$10$OHQQW1XJR3nNW1ki5EyT9O6TB2j2f56W5XvhHH3TLg0dqyf0ud8hO', 3, '2020-07-30 00:42:51', '2020-07-30 00:42:51'),
(99990021, 'Phạm', 'pham@gmail.com', '$2y$10$Hv5fHi1naQZZI2FfyGxAHuV9aMnADNK3Ib6SXdEB.MHrtxAJ60L.C', 3, '2020-07-30 02:32:33', '2020-07-30 02:32:33'),
(99990022, 'student3', 'student3@gmail.com', '$2y$10$cTPzONnJGurpZMWNkxRCaeGWz6eoCABdHYyyZsWUl4ldF22cDjE5G', 3, '2020-07-30 03:57:20', '2020-07-30 03:57:20'),
(99990023, 'teacher1', 'teacher1@gmail.com', '$2y$10$ZcZTliqAV/3W6Q.D3J9LROELmL7WqQf3WpG.RBSqElRl.N3gvcGIa', 2, '2020-07-30 14:07:52', '2020-07-30 14:07:52'),
(99990024, 'company1', 'company1@gmail.com', '$2y$10$CH1jdIXx5Cumu2rKqBqdEOQJq9y9XytKostNe50YRv43i5WB66fyu', 1, '2020-07-31 02:52:37', '2020-07-31 02:52:37'),
(99990025, 'student4', 'student4@gmail.com', '$2y$10$NuJCYQAy2/AkF0W7mqCtLuSUcQpU1rww/zCCZwtYhCBzAG7Xc7c1.', 3, '2020-07-31 14:02:07', '2020-07-31 14:02:07'),
(99990026, 'student5', 'student5@gmail.com', '$2y$10$Yq/0R5Qh4YIuBA9hMLKJ2.0RTQ6GkvOma5Yto/73BkVRp/UPvzZ0W', 3, '2020-07-31 14:40:52', '2020-07-31 14:40:52'),
(99990027, 'student6', 'student6@gmail.com', '$2y$10$fRnzNq2sYPmIqyTPPXNceeaM/4GCofKo37.33Yr744e.s8SltpEBa', 3, '2020-08-02 14:56:33', '2020-08-02 14:56:33'),
(99990028, 'student7', 'student7@gmail.com', '$2y$10$7kWhKjYyamNtSY9zUI/UPeVwJHb23jC6P.CPfN2IfRSZHDmkSA/L2', 3, '2020-08-02 16:21:13', '2020-08-02 16:21:13');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`(100));

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `Nickname` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99990020;

--
-- AUTO_INCREMENT cho bảng `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99990029;

--
-- AUTO_INCREMENT cho bảng `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99990024;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99990029;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `FK_company_id_user` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `FK_students_id_user` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `FK_teacher_id_user` FOREIGN KEY (`id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
