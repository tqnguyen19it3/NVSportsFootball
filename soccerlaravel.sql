-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 05, 2021 lúc 11:00 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `soccerlaravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_pay`
--

CREATE TABLE `admin_pay` (
  `ad_pay_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `ad_pay_account` varchar(255) NOT NULL,
  `ad_pay_code` varchar(255) NOT NULL,
  `ad_pay_bank` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin_pay`
--

INSERT INTO `admin_pay` (`ad_pay_id`, `admin_id`, `ad_pay_account`, `ad_pay_code`, `ad_pay_bank`) VALUES
(1, 1, 'Trần Quốc Nguyên', '9704 1517 2223 9036', 'ViettinBank');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_11_174155_tbl_user', 1),
(5, '2020_11_22_030922_tbl_profile_team', 2),
(6, '2020_11_23_181440_tbl_list_of_team', 3),
(7, '2020_12_05_143644_tbl_admin', 4),
(8, '2020_12_09_083248_tbl_yard_system', 5),
(9, '2020_12_09_084407_tbl_yard', 6),
(10, '2021_01_08_131654_tbl_schedule', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_phone`, `admin_email`, `admin_password`) VALUES
(1, 'Trần Quốc Nguyên', '0819682325', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'Nguyên Trần', '0939898539', 'admin1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'RumTQN', '0935016149', 'admin2@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_list_of_team`
--

CREATE TABLE `tbl_list_of_team` (
  `list_team_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `clb_captain` int(11) NOT NULL,
  `profile_team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_list_of_team`
--

INSERT INTO `tbl_list_of_team` (`list_team_id`, `user_id`, `clb_captain`, `profile_team_id`) VALUES
(2, 6, 1, 10),
(10, 8, 1, 18),
(11, 9, 1, 19),
(18, 11, 0, 10),
(30, 1, 1, 1),
(39, 12, 1, 24),
(41, 16, 1, 27);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_post_yardsys`
--

CREATE TABLE `tbl_post_yardsys` (
  `post_yardsys_id` int(10) UNSIGNED NOT NULL,
  `post_yardsys_metakeyword` varchar(255) NOT NULL,
  `post_yardsys_content` text NOT NULL,
  `post_yardsys_status` int(10) UNSIGNED NOT NULL,
  `yard_system_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_post_yardsys`
--

INSERT INTO `tbl_post_yardsys` (`post_yardsys_id`, `post_yardsys_metakeyword`, `post_yardsys_content`, `post_yardsys_status`, `yard_system_id`) VALUES
(1, 'he thong san Tuyen Son, san Tuyen Son, Khu phức hợp thể thao Tuyên Sơn, khu phuc hop the thao Tuyen Son, hệ thống sân Tuyên Sơn, sân Tuyên Sơn, tuyen son', '<ul>\r\n	<li>Địa chỉ: số 22&nbsp; đường 2/9 &ndash; Quận Hải Ch&acirc;u &ndash; TP Đ&agrave; Nẵng.</li>\r\n	<li>Thời gian: 6h00 đến 21h30 h&agrave;ng ng&agrave;y</li>\r\n	<li>Gi&aacute;: Từ 180.000 &ndash; 310.000 VNĐ/h.</li>\r\n	<li>SĐT:&nbsp;0511 3.630.666 &ndash; 0932.247.998.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đ&acirc;y cũng l&agrave; một lựa chọn l&yacute; tưởng trong số c&aacute;c&nbsp;<strong>s&acirc;n b&oacute;ng đ&aacute; mini Đ&agrave; Nẵng</strong>. Cụm s&acirc;n cỏ nh&acirc;n tạo n&agrave;y nằm trong l&agrave;ng thể thao Tuy&ecirc;n Sơn.&nbsp; S&acirc;n trang bị hệ thống đ&egrave;n đ&aacute; ban đ&ecirc;m, cho thu&ecirc; trang phục thi đấu, thu&ecirc; trọng t&agrave;i v&agrave; phục vụ đồ uống. Ph&ograve;ng thay đồ, b&atilde;i gửi xe chất lượng kh&aacute; tốt. Tuy nhi&ecirc;n, một nhược điểm của s&acirc;n n&agrave;y l&agrave; chất lượng bao quanh s&acirc;n kh&aacute; xuống cấp.&nbsp;B&oacute;ng dễ bị bay từ s&acirc;n n&agrave;y sang s&acirc;n kh&aacute;c. Do đ&oacute;, khi thi đấu tại đ&acirc;y bạn phải chịu kh&oacute; chạy sang s&acirc;n kh&aacute;c nhặt b&oacute;ng.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:2509/SoccerLaravel/public/../public/uploads/YardSystemImg/IMGckeditor/sb2_1609301456.jpg\" style=\"border-style:solid; border-width:1px; height:225px; width:300px\" /></p>\r\n\r\n<p>S&acirc;n b&oacute;ng Tuy&ecirc;n Sơn Đ&agrave; Nẵng l&agrave; địa điểm l&yacute; tưởng để tổ chức c&aacute;c trận đấu phong tr&agrave;o.</p>\r\n\r\n<p>S&acirc;n b&oacute;ng Tuy&ecirc;n Sơn Đ&agrave; Nẵng l&agrave; địa điểm l&yacute; tưởng để tổ chức c&aacute;c trận đấu phong tr&agrave;o.</p>\r\n\r\n<p>S&acirc;n b&oacute;ng Tuy&ecirc;n Sơn Đ&agrave; Nẵng l&agrave; địa điểm l&yacute; tưởng để tổ chức c&aacute;c trận đấu phong tr&agrave;o.</p>', 1, 1),
(2, 'he thong san Viet Han, san Viet Han, Khu phức hợp thể thao Việt Hàn, khu phuc hop the thao Viet Han, hệ thống sân Tuyên Sơn, sân Việt Hàn, Viet Han the thao', '<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://localhost:2509/fa80248f-a956-4d08-aa04-f7621e53dd5b\" width=\"720\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>Đ&acirc;y l&agrave; hệ thống s&acirc;n b&oacute;ng nh&acirc;n tạo bao gồm 2 s&acirc;n b&oacute;ng chuẩn 5 người&nbsp;nằm trong khu đại học Việt H&agrave;n đường Nam Kỳ Khởi Nghĩa - H&ograve;a Hải&nbsp;- Ngũ H&agrave;nh Sơn&nbsp;&ndash; TP. Đ&agrave; Nẵng. L&agrave; một trong những lựa chọn h&agrave;ng đầu khi bạn muốn t&igrave;m kiếm một&nbsp;<strong>s&acirc;n b&oacute;ng đ&aacute; mini Đ&agrave; Nẵng</strong>. S&acirc;n b&oacute;ng Việt H&agrave;n Đ&agrave; Nẵng c&oacute; chất lượng mặt cỏ đảm bảo, hệ thống đ&egrave;n chiếu s&aacute;ng tốt, nh&acirc;n vi&ecirc;n phục vụ th&acirc;n thiện, nhiệt t&igrave;nh. Bạn cũng c&oacute; thể thu&ecirc; quần &aacute;o tập, gi&agrave;y đ&aacute; b&oacute;ng v&agrave; sử dụng dịch vụ ăn uống tại chỗ.</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://localhost:2509/fa80248f-a956-4d08-aa04-f7621e53dd5b\" width=\"720\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p><em>B&oacute;ng đ&aacute; phủi được rất nhiều người ưa chuộng. Nếu như bạn chưa t&igrave;m được đội đ&aacute; b&oacute;ng th&igrave; h&atilde;y tham khảo qua s&acirc;n Việt H&agrave;n nh&eacute;! Bạn sẽ kh&ocirc;ng thất vọng đ&acirc;u.</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://localhost:2509/fa80248f-a956-4d08-aa04-f7621e53dd5b\" width=\"720\" />\r\n<figcaption></figcaption>\r\n</figure>', 1, 13),
(6, 'he thong san Chuyen Viet, san Chuyen Viet, hệ thống sân Chuyên Việt, sân Chuyên Việt', '<p>S&acirc;n b&oacute;ng đ&aacute; Chuy&ecirc;n Việt l&agrave; một trong những s&acirc;n b&oacute;ng đ&aacute; mini chất lượng tốt nhất tại Đ&agrave; Nẵng m&agrave; c&aacute;c bạn n&ecirc;n tham khảo. S&acirc;n b&oacute;ng n&agrave;y c&oacute; độ rộng s&acirc;n, lề s&acirc;n cũng như lưới được bao bọc xung quanh hợp l&yacute; hơn so với c&aacute;c s&acirc;n kh&aacute;c. Th&ecirc;m nữa, s&acirc;n b&oacute;ng Chuy&ecirc;n Việt c&oacute; hệ thống đ&egrave;n chiếu s&aacute;ng tốt, chất lượng mặt cỏ đảm bảo, nh&acirc;n vi&ecirc;n phục vụ th&acirc;n thiện, nhiệt t&igrave;nh. Ngo&agrave;i ra, bạn cũng c&oacute; thể thu&ecirc; gi&agrave;y đ&aacute; b&oacute;ng, quần &aacute;o tập, sử dụng dịch vụ ăn uống tại chỗ&hellip;.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:2509/SoccerLaravel/public/../public/uploads/YardSystemImg/IMGckeditor/dia-chi-san-bong-trang-hoang-da-nang_1610198907.jpg\" style=\"height:120px; width:280px\" /></p>\r\n\r\n<ul>\r\n	<li>Địa chỉ: Số 98, Tiểu La, Hải Ch&acirc;u, Đ&agrave; Nẵng</li>\r\n	<li>SĐT: 0236. 363.8555</li>\r\n	<li>Thời gian: từ 6h00 &ndash; 23h00 tất cả c&aacute;c ng&agrave;y trong tuần.</li>\r\n	<li>Gi&aacute;: Từ 150.000 &ndash; 250.000 VNĐ/h.</li>\r\n</ul>', 1, 14),
(7, 'he thong san duy tan, san Duy Tan, hệ thống sân Duy Tân, sân Duy Tân', '<ul>\r\n	<li>Số 7 Duy T&acirc;n, Hải Ch&acirc;u, Đ&agrave; Nẵng, ph&iacute;a trong Qu&acirc;n khu 5.</li>\r\n	<li>SĐT: 0511.6555.197.</li>\r\n	<li>Thời gian: 6h00 đến 23h00</li>\r\n	<li>Gi&aacute; th&agrave;nh: 150.000 &ndash;&nbsp; 300.000 VNĐ/h</li>\r\n	<li><img alt=\"img desc\" src=\"http://localhost:2509/SoccerLaravel/public/../public/uploads/YardSystemImg/IMGckeditor/img-04_1609301177.jpg\" style=\"border-style:solid; border-width:1px; height:106px; margin-left:50px; margin-right:50px; width:200px\" /></li>\r\n	<li>Với hệ thống đ&egrave;n chiếu s&aacute;ng hiện đại v&agrave; chất lượng mặt cỏ tốt, s&acirc;n Duy T&acirc;n thu h&uacute;t kh&aacute; đ&ocirc;ng những người y&ecirc;u b&oacute;ng đ&aacute;. Hiện tại, hệ thống s&acirc;n b&oacute;ng đ&aacute; Duy T&acirc;n Đ&agrave; Nẵng bao gồm 7 s&acirc;n. Trong đ&oacute; c&oacute; 1 s&acirc;n 37mx54m, 4 s&acirc;n 22,5mx40m, 2 s&acirc;n 40mx45m.</li>\r\n	<li>Ngo&agrave;i ra, tại đ&acirc;y cũng cung cấp dịch vụ cho thu&ecirc; gi&agrave;y, quần &aacute;o tập, dịch vụ nước uống giải kh&aacute;t. Khu vệ sinh v&agrave; ph&ograve;ng thay đồ được đ&aacute;nh gi&aacute; l&agrave; kh&aacute; sạch sẽ, b&atilde;i gửi xe an to&agrave;n.</li>\r\n</ul>', 1, 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_profile_team`
--

CREATE TABLE `tbl_profile_team` (
  `profile_team_id` int(10) UNSIGNED NOT NULL,
  `profile_team_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_team_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_team_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_team_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_team_gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_team_age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_team_city` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_profile_team`
--

INSERT INTO `tbl_profile_team` (`profile_team_id`, `profile_team_name`, `profile_team_level`, `profile_team_desc`, `profile_team_logo`, `profile_team_gender`, `profile_team_age`, `profile_team_city`) VALUES
(1, 'SHB Đà Nẵng', 'Đá Hay', 'Đội sinh viên giao lưu vui vẻ, đá lấy mồ hôi!', 'logo22(60).jpg', 'Nam', 'U15-U20', 'Quận Sơn Trà'),
(10, 'CLB Striker Football', 'Đá Vừa', 'Đội bóng nữ muốn đá giao lưu vui vẻ nhé HAHA !!!', 'logo13(18).jpg', 'Nữ', 'U30-U35', 'Quận Sơn Trà'),
(18, 'Manchester UTD', 'Đá Yếu', 'CLB số 1 lớn nhất TG hiện nay nhé !!!!!', 'logo(65).png', 'Nam', 'U20-U30', 'Quận Hải Châu'),
(19, 'Miami FC', 'Đá Vừa', 'Thử', 'logo17(82).jpg', 'Nam', 'U30-U35', 'Quận Thanh Khê'),
(24, 'Tiger FC', 'Đá Hay', 'GGwp!', 'logo5(56).png', 'Nam', 'U35-U40', 'Quận Sơn Trà');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_quanhuyen`
--

CREATE TABLE `tbl_quanhuyen` (
  `quan_id` int(11) UNSIGNED NOT NULL,
  `quan_ten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_quanhuyen`
--

INSERT INTO `tbl_quanhuyen` (`quan_id`, `quan_ten`) VALUES
(1, 'Ngũ Hành Sơn'),
(2, 'Sơn Trà'),
(3, 'Cẩm Lệ'),
(4, 'Hải Châu'),
(5, 'Thanh Khê'),
(6, 'Liên Chiểu'),
(7, 'Huyện Hòa Vang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_schedule`
--

CREATE TABLE `tbl_schedule` (
  `schedule_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `yard_system_id` int(10) UNSIGNED NOT NULL,
  `yard_id` int(11) NOT NULL,
  `schedule_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `time_price_id` int(10) UNSIGNED NOT NULL,
  `date_time_current` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_schedule`
--

INSERT INTO `tbl_schedule` (`schedule_id`, `user_id`, `yard_system_id`, `yard_id`, `schedule_date`, `created_at`, `updated_at`, `time_price_id`, `date_time_current`) VALUES
(28, 8, 15, 18, '14 - 1 - 2021', NULL, NULL, 55, '2021-01-10 23:11:17'),
(30, 12, 15, 20, '13 - 1 - 2021', NULL, NULL, 72, '2021-01-10 23:13:22'),
(31, 12, 1, 9, '13 - 1 - 2021', NULL, NULL, 15, '2021-01-10 23:19:19'),
(32, 6, 14, 14, '18 - 1 - 2021', NULL, NULL, 95, '2021-01-10 23:20:24'),
(33, 11, 13, 12, '18 - 1 - 2021', NULL, NULL, 36, '2021-01-10 23:21:24'),
(34, 16, 1, 1, '12 - 1 - 2021', NULL, NULL, 119, '2021-01-10 23:22:59'),
(35, 16, 15, 19, '12 - 1 - 2021', NULL, NULL, 69, '2021-01-10 23:24:36'),
(37, 27, 15, 19, '21 - 1 - 2021', NULL, NULL, 71, '2021-01-21 05:03:55'),
(38, 27, 14, 16, '13 - 2 - 2021', NULL, NULL, 78, '2021-02-11 04:52:39'),
(39, 27, 15, 20, '25 - 4 - 2021', NULL, NULL, 73, '2021-04-25 02:37:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_social`
--

CREATE TABLE `tbl_social` (
  `customer_id` int(11) NOT NULL,
  `provider_customer_id` varchar(255) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `customer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_social`
--

INSERT INTO `tbl_social` (`customer_id`, `provider_customer_id`, `provider`, `customer`) VALUES
(4, '113956090413798146005', 'GOOGLE', 8),
(5, '115709332834982721378', 'GOOGLE', 16),
(16, '111192653827368292764', 'GOOGLE', 9),
(17, '109326143753477962393', 'GOOGLE', 26),
(18, '2848142192072031', 'FACEBOOK', 27);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_time_price`
--

CREATE TABLE `tbl_time_price` (
  `time_price_id` int(10) UNSIGNED NOT NULL,
  `yard_system_id` int(10) UNSIGNED NOT NULL,
  `yard_id` int(10) UNSIGNED NOT NULL,
  `time_price_hours` varchar(255) NOT NULL,
  `time_price_pay` varchar(255) NOT NULL,
  `time_price_status` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_time_price`
--

INSERT INTO `tbl_time_price` (`time_price_id`, `yard_system_id`, `yard_id`, `time_price_hours`, `time_price_pay`, `time_price_status`) VALUES
(1, 1, 10, '05:30 - 06:30', '180000', 1),
(3, 1, 10, '06:30 - 07:30', '180000', 1),
(4, 1, 10, '15:30 - 16:30', '180000', 1),
(6, 1, 10, '17:30 - 18:30', '200000', 1),
(7, 1, 10, '18:30 - 19:30', '230000', 1),
(8, 1, 10, '19:30 - 20:30', '250000', 1),
(9, 1, 10, '20:30 - 21:30', '250000', 1),
(10, 1, 10, '21:30 - 22:30', '250000', 1),
(11, 1, 10, '16:30 - 17:30', '200000', 1),
(12, 1, 9, '05:30 - 06:30', '200000', 1),
(13, 1, 9, '06:30 - 07:30', '200000', 0),
(14, 1, 9, '15:30 - 16:30', '230000', 1),
(15, 1, 9, '16:30 - 17:30', '250000', 2),
(17, 1, 9, '17:30 - 18:30', '250000', 1),
(18, 1, 9, '18:30 - 19:30', '300000', 1),
(19, 1, 9, '19:30 - 20:30', '300000', 1),
(20, 1, 9, '20:30 - 21:30', '300000', 1),
(21, 1, 9, '21:30 - 22:30', '300000', 1),
(22, 1, 6, '05:30 - 06:30', '180000', 1),
(23, 1, 6, '06:30 - 07:30', '180000', 1),
(24, 1, 6, '15:30 - 16:30', '180000', 1),
(30, 1, 6, '16:30 - 17:30', '200000', 1),
(33, 13, 12, '06:30 - 07:30', '150000', 1),
(34, 13, 12, '05:30 - 06:30', '150000', 1),
(35, 13, 12, '20:30 - 21:30', '250000', 1),
(36, 13, 12, '21:30 - 22:30', '220000', 2),
(37, 13, 13, '05:30 - 06:30', '150000', 1),
(38, 13, 13, '06:30 - 07:30', '150000', 1),
(39, 13, 13, '15:30 - 16:30', '150000', 1),
(40, 13, 13, '16:30 - 17:30', '200000', 1),
(41, 13, 13, '17:30 - 18:30', '220000', 1),
(43, 15, 15, '21:30 - 22:30', '280000', 1),
(45, 15, 15, '05:30 - 06:30', '180000', 1),
(46, 15, 15, '06:30 - 07:30', '180000', 1),
(47, 15, 15, '15:30 - 16:30', '180000', 1),
(48, 15, 15, '16:30 - 17:30', '200000', 1),
(51, 15, 15, '17:30 - 18:30', '230000', 1),
(52, 15, 15, '18:30 - 19:30', '250000', 1),
(53, 15, 15, '19:30 - 20:30', '250000', 1),
(54, 15, 15, '20:30 - 21:30', '280000', 1),
(55, 15, 18, '05:30 - 06:30', '200000', 2),
(56, 15, 18, '15:30 - 16:30', '250000', 1),
(57, 15, 18, '18:30 - 19:30', '300000', 1),
(58, 15, 18, '21:30 - 22:30', '330000', 1),
(59, 15, 18, '06:30 - 07:30', '200000', 1),
(60, 15, 18, '17:30 - 18:30', '280000', 1),
(61, 15, 18, '16:30 - 17:30', '280000', 1),
(62, 15, 19, '05:30 - 06:30', '200000', 1),
(63, 15, 19, '06:30 - 07:30', '200000', 1),
(64, 15, 19, '15:30 - 16:30', '230000', 1),
(65, 15, 19, '16:30 - 17:30', '250000', 1),
(67, 15, 19, '20:30 - 21:30', '330000', 1),
(68, 15, 19, '17:30 - 18:30', '280000', 1),
(69, 15, 19, '18:30 - 19:30', '300000', 2),
(70, 15, 19, '21:30 - 22:30', '330000', 1),
(71, 15, 19, '19:30 - 20:30', '300000', 2),
(72, 15, 20, '05:30 - 06:30', '250000', 2),
(73, 15, 20, '15:30 - 16:30', '300000', 2),
(74, 15, 20, '17:30 - 18:30', '330000', 1),
(75, 15, 20, '19:30 - 20:30', '350000', 1),
(76, 15, 20, '21:30 - 22:30', '380000', 1),
(77, 14, 16, '05:30 - 06:30', '150000', 1),
(78, 14, 16, '06:30 - 07:30', '150000', 2),
(79, 14, 16, '15:30 - 16:30', '180000', 1),
(80, 14, 16, '16:30 - 17:30', '180000', 1),
(81, 14, 16, '17:30 - 18:30', '200000', 1),
(82, 14, 16, '18:30 - 19:30', '220000', 1),
(83, 14, 16, '19:30 - 20:30', '250000', 1),
(84, 14, 16, '20:30 - 21:30', '250000', 1),
(85, 14, 16, '21:30 - 22:30', '250000', 0),
(92, 14, 14, '19:30 - 20:30', '250000', 1),
(93, 14, 14, '20:30 - 21:30', '250000', 1),
(94, 14, 14, '21:30 - 22:30', '250000', 1),
(95, 14, 14, '05:30 - 06:30', '150000', 2),
(96, 14, 14, '06:30 - 07:30', '150000', 1),
(97, 14, 14, '15:30 - 16:30', '180000', 1),
(98, 14, 14, '16:30 - 17:30', '180000', 1),
(99, 14, 14, '18:30 - 19:30', '220000', 1),
(100, 14, 14, '17:30 - 18:30', '200000', 1),
(101, 1, 2, '05:30 - 06:30', '250000', 1),
(102, 1, 2, '06:30 - 07:30', '250000', 1),
(103, 1, 2, '15:30 - 16:30', '280000', 1),
(104, 1, 2, '16:30 - 17:30', '300000', 1),
(105, 1, 2, '17:30 - 18:30', '330000', 1),
(106, 1, 2, '18:30 - 19:30', '330000', 1),
(107, 1, 2, '19:30 - 20:30', '350000', 1),
(108, 1, 2, '20:30 - 21:30', '350000', 1),
(109, 1, 2, '21:30 - 22:30', '380000', 1),
(110, 1, 1, '05:30 - 06:30', '180000', 1),
(111, 1, 1, '06:30 - 07:30', '180000', 1),
(112, 1, 1, '15:30 - 16:30', '200000', 1),
(113, 1, 1, '16:30 - 17:30', '220000', 1),
(115, 1, 1, '17:30 - 18:30', '250000', 1),
(116, 1, 1, '18:30 - 19:30', '280000', 1),
(118, 1, 1, '19:30 - 20:30', '280000', 1),
(119, 1, 1, '20:30 - 21:30', '300000', 2),
(121, 1, 1, '21:30 - 22:30', '300000', 1),
(122, 1, 6, '17:30 - 18:30', '200000', 1),
(123, 1, 6, '18:30 - 19:30', '230000', 1),
(124, 1, 6, '19:30 - 20:30', '250000', 1),
(125, 1, 6, '20:30 - 21:30', '250000', 1),
(126, 1, 6, '21:30 - 22:30', '250000', 1),
(127, 13, 13, '18:30 - 19:30', '250000', 1),
(128, 13, 13, '19:30 - 20:30', '280000', 1),
(129, 13, 13, '20:30 - 21:30', '280000', 1),
(130, 13, 13, '21:30 - 22:30', '300000', 1),
(131, 13, 12, '15:30 - 16:30', '180000', 1),
(132, 13, 12, '16:30 - 17:30', '180000', 1),
(133, 13, 12, '17:30 - 18:30', '220000', 1),
(134, 13, 12, '18:30 - 19:30', '220000', 1),
(135, 13, 12, '19:30 - 20:30', '250000', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_age` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_clb_vt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_email`, `user_name`, `user_password`, `user_phone`, `user_gender`, `user_city`, `user_age`, `user_avatar`, `user_clb_vt`) VALUES
(1, 'admin@gmail.com', 'Trần Quốc Nguyên', '827ccb0eea8a706c4c34a16891f84e7b', '0819682325', 'Nam', 'Quận Ngũ Hành Sơn', 'U15-U20', 'img-07(1).jpg', 'Tiền đạo'),
(6, 'havy@gmail.com', 'hạ vy', 'c8837b23ff8aaa8a2dde915473ce0991', '0935016149', 'Nữ', 'Quận Sơn Trà', 'U20-U30', 'img-09(8).jpg', 'Tiền vệ trung tâm'),
(8, 'tqnguyen.19it3@vku.udn.vn', 'TQNguyen 19IT3', 'b0baee9d279d34fa1dfd71aadb908c3f', '0939898539', 'Nam', 'Quận Hải Châu', 'U30-U35', 'img-03(20).png', 'Tiền vệ trung tâm'),
(9, 'drhappykun@gmail.com', 'drhappykun', '93279e3308bdbbeed946fc965017f67a', '05113967129', 'Nam', 'Quận Cẩm Lệ', 'U35-U40', 'img-03(54).jpg', 'Thủ môn'),
(11, 'rumtqn@gmail.com', 'Rumtqn', '666deba53d7d9cff8ecd12634c7ea124', '01207829134', 'Nữ', 'Quận Sơn Trà', 'U20-U30', 'img-04(4).jpg', 'Tiền vệ cánh'),
(12, 'tqnguyen@gmail.com', 'nguyên1', '3d2172418ce305c7d16d4b05597c6a59', '0123456789', 'Nam', 'Huyện Hoà Vang', 'U15-U20', 'img-02(86).jpg', 'Tiền đạo'),
(16, 'tqnguyen.19it3@sict.udn.vn', 'Nguyên Trần Quốc', '', '...', 'Nam', 'Quận Sơn Trà', 'U15-U20', 'ad(23).jpg', 'Tiền đạo'),
(26, 'tqnguyen259@gmail.com', 'Nguyên Trần Quốc', '', '...', '...', '...', '...', '...', '...'),
(27, 'drhappykun.tqn@gmail.com', 'Trần Quốc Nguyên', '', '05113967129', 'Nam', 'Huyện Hoà Vang', 'U15-U20', 'ava_fb(79).jpg', 'Tiền đạo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_yard`
--

CREATE TABLE `tbl_yard` (
  `yard_id` int(10) UNSIGNED NOT NULL,
  `yard_system_id` int(11) UNSIGNED NOT NULL,
  `yard_mss` varchar(255) CHARACTER SET utf8 NOT NULL,
  `yard_slug` varchar(255) CHARACTER SET utf8 NOT NULL,
  `quan_id` int(10) UNSIGNED NOT NULL,
  `yard_surface` varchar(255) CHARACTER SET utf8 NOT NULL,
  `yard_img` varchar(255) CHARACTER SET utf8 NOT NULL,
  `yard_desc` text CHARACTER SET utf8 NOT NULL,
  `yard_utilities` varchar(255) CHARACTER SET utf8 NOT NULL,
  `yard_limit` varchar(255) CHARACTER SET utf8 NOT NULL,
  `yard_status` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_yard`
--

INSERT INTO `tbl_yard` (`yard_id`, `yard_system_id`, `yard_mss`, `yard_slug`, `quan_id`, `yard_surface`, `yard_img`, `yard_desc`, `yard_utilities`, `yard_limit`, `yard_status`) VALUES
(1, 1, 'CTTTS SB6 F1', 'cttts-sb6-f1', 4, 'Sân cỏ nhân tạo', 'tuyenson(1).jpg', 'Với hệ thống sân cỏ nhân tạo cùng hệ thống đèn chiếu sáng, đây có thể là địa chỉ để bạn tổ chức những trận bóng tập thể.', 'Không tốn phí nước, Không tốn phí mượn bóng, cho thuê trang phục thi đấu, thuê trọng tài và phục vụ đồ uống', 'Sân 6', 1),
(2, 1, 'CTTTS SB11 J1', 'cttts-sb11-j1', 4, 'Sân cỏ nhân tạo', 'tuyenson1(90).jpg', 'Với hệ thống sân cỏ nhân tạo cùng hệ thống đèn chiếu sáng, đây có thể là địa chỉ để bạn tổ chức những trận bóng tập thể.', 'Không tốn phí nước, Không tốn phí mượn bóng, cho thuê trang phục thi đấu, thuê trọng tài và phục vụ đồ uống', 'Sân 11', 1),
(6, 1, 'CTTTS SB5 E2', 'cttts-sb5-e2', 4, 'Sân cỏ nhân tạo', 'tuyenson3(54).jpg', 'Với hệ thống sân cỏ nhân tạo cùng hệ thống đèn chiếu sáng, đây có thể là địa chỉ để bạn tổ chức những trận bóng tập thể.', 'Không tốn phí nước, Không tốn phí mượn bóng, cho thuê trang phục thi đấu, thuê trọng tài và phục vụ đồ uống', 'Sân 5', 1),
(9, 1, 'CTTTS SB7 G1', 'cttts-sb7-g1', 4, 'Sân cỏ nhân tạo', 'tuyenson4(36).jpg', 'Với hệ thống sân cỏ nhân tạo cùng hệ thống đèn chiếu sáng, đây có thể là địa chỉ để bạn tổ chức những trận bóng tập thể.', 'Không tốn phí nước, Không tốn phí mượn bóng, cho thuê trang phục thi đấu, thuê trọng tài và phục vụ đồ uống', 'Sân 7', 1),
(10, 1, 'CTTTS SB5 E1', 'cttts-sb5-e1', 4, 'Sân cỏ nhân tạo', 'tuyenson5(13).jpg', 'Với hệ thống sân cỏ nhân tạo cùng hệ thống đèn chiếu sáng, đây có thể là địa chỉ để bạn tổ chức những trận bóng tập thể.', 'Không tốn phí nước, Không tốn phí mượn bóng, cho thuê trang phục thi đấu, thuê trọng tài và phục vụ đồ uống', 'Sân 5', 1),
(12, 13, 'HTSVH SB5 E1', 'htsvh-sb5-e1', 1, 'Sân cỏ nhân tạo', 'vh1(30).jpg', 'Với hệ thống đèn chiếu sáng hiện đại và chất lượng mặt cỏ tốt, khung thành mới sẽ giúp bạn có những trải nghiệm thể thao tuyệt vời.', 'Không tốn phí nước, Không tốn mượn bóng, Đèn cực sáng', 'Sân 5', 1),
(13, 13, 'HTSVH SB5 E2', 'htsvh-sb5-e2', 1, 'Sân cỏ thường', 'vh2(49).jpg', 'Với hệ thống đèn chiếu sáng hiện đại và chất lượng mặt cỏ tốt, khung thành mới sẽ giúp bạn có những trải nghiệm thể thao tuyệt vời.', 'Không tốn phí nước, Không tốn mượn bóng, Đèn cực sáng', 'Sân 5', 1),
(14, 14, 'CV SB5 E2', 'cv-sb5-e2', 4, 'Sân cỏ nhân tạo', 'sb(43).jpg', 'Sân bóng đá Chuyên Việt – một trong những sân bóng đá mini Đà Nẵng uy tín nhất', 'Miễn phí nước và bóng, có cho thuê giày', 'Sân 5', 1),
(15, 15, 'DT SB5 E1', 'dt-sb5-e1', 4, 'Sân cỏ nhân tạo', 'sb5(33).jpg', 'Sân cỏ nhân tạo với tính năng ưu việt, giống với cỏ thật, có khả năng chống chọi với thời tiết, hệ thống đèn bốn gốc sân khi trời tối', 'Cho thuê giày, quần áo tập, dịch vụ nước uống giải khát, cho thuê bóng miễn phí', 'Sân 5', 1),
(16, 14, 'CV SB5 E1', 'cv-sb5-e1', 4, 'Sân cỏ nhân tạo', 'sbcv(66).jpg', 'Sân bóng đá Chuyên Việt – một trong những sân bóng đá mini Đà Nẵng uy tín nhất', 'Miễn phí nước và bóng, có cho thuê giày', 'Sân 5', 1),
(18, 15, 'DT SB6 F1', 'dt-sb6-f1', 4, 'Sân cỏ nhân tạo', 'sb6(70).jpg', 'Sân cỏ nhân tạo với tính năng ưu việt, giống với cỏ thật, có khả năng chống chọi với thời tiết, hệ thống đèn bốn gốc sân khi trời tối', 'Cho thuê giày, quần áo tập, dịch vụ nước uống giải khát, cho thuê bóng miễn phí', 'Sân 6', 1),
(19, 15, 'DT SB7 G1', 'dt-sb7-g1', 4, 'Sân cỏ nhân tạo', 'sb1(45).jpg', 'Sân cỏ nhân tạo với tính năng ưu việt, giống với cỏ thật, có khả năng chống chọi với thời tiết, hệ thống đèn bốn gốc sân khi trời tối', 'Cho thuê giày, quần áo tập, dịch vụ nước uống giải khát, cho thuê bóng miễn phí', 'Sân 7', 1),
(20, 15, 'DT SB11 J1', 'dt-sb11-j1', 4, 'Sân cỏ nhân tạo', 'sb4(41).jpg', 'Sân cỏ nhân tạo với tính năng ưu việt, giống với cỏ thật, có khả năng chống chọi với thời tiết, hệ thống đèn bốn gốc sân khi trời tối', 'Cho thuê giày, quần áo tập, dịch vụ nước uống giải khát, cho thuê bóng miễn phí', 'Sân 11', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_yard_system`
--

CREATE TABLE `tbl_yard_system` (
  `yard_system_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(11) UNSIGNED NOT NULL,
  `quan_id` int(11) UNSIGNED NOT NULL,
  `yard_system_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `yard_system_slug` varchar(255) CHARACTER SET utf8 NOT NULL,
  `yard_system_desc` text CHARACTER SET utf8 NOT NULL,
  `yard_system_img` varchar(255) CHARACTER SET utf8 NOT NULL,
  `yard_system_address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `yard_system_maps` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_yard_system`
--

INSERT INTO `tbl_yard_system` (`yard_system_id`, `admin_id`, `quan_id`, `yard_system_name`, `yard_system_slug`, `yard_system_desc`, `yard_system_img`, `yard_system_address`, `yard_system_maps`) VALUES
(1, 1, 4, 'Khu phức hợp thể thao Tuyên Sơn', 'khu-phuc-hop-the-thao-tuyen-son', 'Cung Thể thao Tiên Sơn được xây dựng trên diện tích hơn 94.000m2 nằm trên ... Các khu vực khác như quầy bán lẻ thiết bị, khu vệ sinh, hành lang, phòng .. Làng thể thao Tuyên Sơn - khu thể thao giải trí lớn nhất ở Đà Nẵng. Làng thể thao Tuyên Sơn nằm trên đường 2 tháng 9, gần cầu Tiên Sơn và Cung Văn Hóa.', 'htsTuyenSon(42).jpg', '22 Đường 2/9, Quận Hải Châu, Thành Phố Đà Nẵng', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1917.2957101547267!2d108.22680626795756!3d16.03477096321192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219e5e599f565%3A0x1e766cbc16295cc2!2zTMOgbmcgVGjhu4MgdGhhbyBUdXnDqm4gU8ahbg!5e0!3m2!1svi!2s!4v1607531006413!5m2!1svi!2s\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>'),
(13, 1, 1, 'Hệ thống sân Việt Hàn', 'he-thong-san-viet-han', 'Hệ thống sân Việt Hàn đẹp ngon, sân bóng đá Việt Hàn gồm 2 sân cỏ nhân tạo chuẩn fifa.', 'hts2(50).jpg', 'Hòa Quý, Ngũ Hành Sơn, Đà Nẵng 550000, Việt Nam', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44664.550107771676!2d108.24853848305492!3d15.990657622810087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108f210177eb%3A0xa2b68b2829065847!2zVHLGsOG7nW5nIENhbyDEkOG6s25nIFZp4buHdCBIw6BuIE5hbSBL4buzIEto4bufaSBOZ2jEqWE!5e0!3m2!1svi!2s!4v1608466412268!5m2!1svi!2s\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>'),
(14, 1, 4, 'Hệ thống sân Chuyên Việt', 'he-thong-san-chuyen-viet', 'Đây là sân bóng nhân tạo nằm trong trung tâm thể dục thể thao Quốc Phòng 3 – Tiểu La – Quận Hải Châu – TP. Đà Nẵng. Là một trong những lựa chọn hàng đầu khi bạn muốn tìm kiếm một sân bóng đá mini Đà Nẵng. Sân bóng Chuyên Việt Đà Nẵng có chất lượng mặt cỏ đảm bảo, hệ thống đèn chiếu sáng tốt, nhân viên phục vụ thân thiện, nhiệt tình. Bạn cũng có thể thuê quần áo tập, giày đá bóng và sử dụng dịch vụ ăn uống tại chỗ', 'hts3(50).png', 'Số 98, Tiểu La, Hải Châu, Đà Nẵng', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.403219183061!2d108.21142361394519!3d16.044552488896237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219c0801817c3%3A0x1702bb03f6985b2f!2zU8OibiBiw7NuZyDEkcOhIENodXnDqm4gVmnhu4d0!5e0!3m2!1svi!2s!4v1610198661170!5m2!1svi!2s\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>'),
(15, 3, 4, 'Hệ thống sân Duy Tân', 'he-thong-san-duy-tan', 'Sân có vị trí khá gần với sân bóng Chân bóng Chuyên Việt Đà Nẵng. Đây là một trong những sân bóng đá mini Đà Nẵng chất lượng khá tốt bạn có thể lựa chọn để tổ chức các trận đấu giao hữu. Sân nằm trong khu trung tâm bóng đá của thành phố.', 'hts4(39).jpg', 'Số 7 Duy Tân, Hải Châu, Đà Nẵng, phía trong Quân khu 5', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.3309242169003!2d108.21412741394526!3d16.048308388893865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219c6cd536e63%3A0xb7f147b3c3d05265!2zU8OibiB24bqtbiDEkeG7mW5nIFF1w6JuIGtodSA1!5e0!3m2!1svi!2s!4v1610018543381!5m2!1svi!2s\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin_pay`
--
ALTER TABLE `admin_pay`
  ADD PRIMARY KEY (`ad_pay_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_list_of_team`
--
ALTER TABLE `tbl_list_of_team`
  ADD PRIMARY KEY (`list_team_id`);

--
-- Chỉ mục cho bảng `tbl_post_yardsys`
--
ALTER TABLE `tbl_post_yardsys`
  ADD PRIMARY KEY (`post_yardsys_id`);

--
-- Chỉ mục cho bảng `tbl_profile_team`
--
ALTER TABLE `tbl_profile_team`
  ADD PRIMARY KEY (`profile_team_id`);

--
-- Chỉ mục cho bảng `tbl_quanhuyen`
--
ALTER TABLE `tbl_quanhuyen`
  ADD PRIMARY KEY (`quan_id`);

--
-- Chỉ mục cho bảng `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Chỉ mục cho bảng `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_time_price`
--
ALTER TABLE `tbl_time_price`
  ADD PRIMARY KEY (`time_price_id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `tbl_yard`
--
ALTER TABLE `tbl_yard`
  ADD PRIMARY KEY (`yard_id`);

--
-- Chỉ mục cho bảng `tbl_yard_system`
--
ALTER TABLE `tbl_yard_system`
  ADD PRIMARY KEY (`yard_system_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin_pay`
--
ALTER TABLE `admin_pay`
  MODIFY `ad_pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_list_of_team`
--
ALTER TABLE `tbl_list_of_team`
  MODIFY `list_team_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `tbl_post_yardsys`
--
ALTER TABLE `tbl_post_yardsys`
  MODIFY `post_yardsys_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_profile_team`
--
ALTER TABLE `tbl_profile_team`
  MODIFY `profile_team_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `tbl_quanhuyen`
--
ALTER TABLE `tbl_quanhuyen`
  MODIFY `quan_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  MODIFY `schedule_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tbl_time_price`
--
ALTER TABLE `tbl_time_price`
  MODIFY `time_price_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `tbl_yard`
--
ALTER TABLE `tbl_yard`
  MODIFY `yard_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tbl_yard_system`
--
ALTER TABLE `tbl_yard_system`
  MODIFY `yard_system_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
