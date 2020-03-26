-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 11:38 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appjhv_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_03_20_043916_create_portal_post_group_table', 1),
(12, '2020_03_20_063719_create_portal_post_table', 2),
(13, '2020_03_20_063810_create_portal_file_table', 2),
(14, '2020_03_20_092245_create_users_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `portal_file`
--

CREATE TABLE `portal_file` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `edited_user_id` int(11) NOT NULL,
  `edited_user_fullname` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portal_file`
--

INSERT INTO `portal_file` (`id`, `post_id`, `user_id`, `user_fullname`, `file`, `filename`, `status`, `created`, `modified`, `edited_user_id`, `edited_user_fullname`) VALUES
(1, 18, 4, 'Lâm Quế Bình', '/portal/public/upload/files/2019/EHS/luatlaodongvietnamzhongwen.pdf', '/portal/public/upload/files/2019/EHS/luatlaodongvietnamzhongwen.pdf', 1, '2020-03-20 09:15:48', '2020-03-20 09:15:48', 1, ''),
(2, 20, 2, 'Le Duy', '/portal/public/upload/files/2019/EHS/luatlaodongvietnamzhongwen.pdf', 'sample.docx', 1, '2020-03-20 09:15:49', '2020-03-20 09:15:49', 1, ''),
(3, 18, 4, 'Lâm Quế Bình', '/portal/public/upload/files/2019/EHS/luatlaodongvietnamzhongwen.pdf', '/portal/public/upload/files/2019/EHS/luatlaodongvietnamzhongwen.pdf', 1, '2020-03-20 09:15:50', '2020-03-20 09:15:50', 1, ''),
(4, 20, 2, 'Le Duy', '/portal/public/upload/files/2019/EHS/luatlaodongvietnamzhongwen.pdf', 'sample.docx', 1, '2020-03-20 09:15:50', '2020-03-20 09:15:50', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `portal_post`
--

CREATE TABLE `portal_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_dept` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_group` int(11) NOT NULL DEFAULT '1',
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `news` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `edited_user_id` int(11) NOT NULL,
  `edited_user_fullname` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` datetime DEFAULT NULL,
  `deleted_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portal_post`
--

INSERT INTO `portal_post` (`id`, `user_id`, `user_fullname`, `user_dept`, `post_group`, `title`, `description`, `picture`, `content`, `date_start`, `date_end`, `news`, `status`, `created`, `modified`, `edited_user_id`, `edited_user_fullname`, `deleted`, `deleted_user_id`) VALUES
(1, 1, 'John Nguyen', '', 0, '16/04/2019 Đội PCCC thử chuông báo cháy, CB-CNV vẫn làm việc bình thường', '', '', '', NULL, NULL, 0, 1, '2020-03-20 09:13:20', '2020-03-23 06:35:26', 2, 'Le Duy', NULL, 1),
(2, 4, 'Lâm Quế Bình', '', 7, 'Tạp chí công ty tháng 01/2019 ', '', '', 'Tạp ch&iacute; c&ocirc;ng ty th&aacute;ng 01/2019', NULL, NULL, 1, 1, '2020-03-20 09:13:20', '2020-03-20 09:13:20', 4, 'Lâm Quế Bình', NULL, 1),
(3, 1, 'John Nguyen', '', 0, '16/04/2019 Đội PCCC thử chuông báo cháy, CB-CNV vẫn làm việc bình thường', '', '', '', NULL, NULL, 0, 1, '2020-03-20 09:13:52', '2020-03-23 06:35:44', 2, 'Le Duy', NULL, NULL),
(4, 4, 'Lâm Quế Bình', '', 7, 'Tạp chí công ty tháng 02/2019 ', '', '', 'Tạp ch&iacute; c&ocirc;ng ty th&aacute;ng 02/2019', NULL, NULL, 1, 1, '2020-03-20 09:13:52', '2020-03-23 07:38:28', 4, 'Lâm Quế Bình', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portal_post_group`
--

CREATE TABLE `portal_post_group` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portal_post_group`
--

INSERT INTO `portal_post_group` (`id`, `name`) VALUES
(1, 'Chính Sách Công Ty'),
(2, 'Sự Kiện');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_extend` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `code`, `pass`, `fullname`, `role_code`, `com_code`, `dept_code`, `email`, `phone_extend`, `status`) VALUES
(1, 'I13042', '$2y$08$V2U2TlN3K1J0elhrbFRmV.5gC5huJ/Z4EdKUQoTP05m.', 'Lê Duy', 'ADM', 'JHV', 'IT', 'Duy.Le@jiahsin.com.vn', '1159', 1),
(2, 'I12758', '$2y$08$V2U2TlN3K1J0elhrbFRmV.5gC5huJ/Z4EdKUQoTP05m.', 'John Nguyễn', 'ADM', 'JHV', 'IT', 'PhucNguyen.Pham@jiahsin.com.vn', '1159', 1),
(3, 'steven', '$2y$08$V2U2TlN3K1J0elhrbFRmV.5gC5huJ/Z4EdKUQoTP05m.', 'Steven Chang', 'ADM', 'JHV', 'IT', 'steven.chang@jiahsin.com.vn', '1159', 1),
(4, 'user_test', '$2y$10$gp1HRb0EPk5T3ygYsdplseXAcuak1n3Y/xfLvDHwPJvN5tqgGibZm', 'Test', 'ADM', 'JHV', 'IT', 'Test@jiahsin.com.vn', '1159', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portal_file`
--
ALTER TABLE `portal_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portal_post`
--
ALTER TABLE `portal_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portal_post_group`
--
ALTER TABLE `portal_post_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `portal_file`
--
ALTER TABLE `portal_file`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portal_post`
--
ALTER TABLE `portal_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portal_post_group`
--
ALTER TABLE `portal_post_group`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
