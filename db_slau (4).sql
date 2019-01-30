-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2019 at 01:07 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_slau`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('e3khm5smeadhd82b8c4suprlrp', '139.194.10.167', 1539068008, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533393036383030383b),
('8r9ddf3d0trb7ffghq39lshtdm', '139.194.10.167', 1539068027, ''),
('lff8ie21n83t5rhu5ebmjp6ffr', '139.194.10.167', 1539068035, ''),
('oj1q4v94769nlhahpanrdgl1mu', '139.194.10.167', 1539068049, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533393036383034383b737563636573737c733a35343a225468616e6b20596f7520466f7220436f6e746163742055732e20546865204461746120486173204265656e2050726f6365737365642e223b5f5f63695f766172737c613a313a7b733a373a2273756363657373223b733a333a226e6577223b7d),
('jie1hrhqqqefj6q6u5vhih52c3', '139.194.10.167', 1539068049, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533393036383034393b),
('l4f7g1co369prvvfpj98acn14f', '139.194.10.167', 1539070869, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533393037303836393b),
('k9nbm07nvnguh2s810s37dih47', '139.194.10.167', 1539070872, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533393037303837323b),
('uoibglov5aakfs6alf9dmho4q4', '114.124.244.196', 1539086035, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533393038363033353b),
('nkukrqatcek8pgpvtdgpf8jle0', '114.124.244.117', 1539086096, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533393038363039363b),
('j5heso0lm2qh3rphnl2q2r6ped', '114.124.214.245', 1539086099, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533393038363039393b),
('urviin2nj0g0qf4isvalk504t4', '114.124.213.28', 1539086100, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533393038363130303b),
('jk9ic6urgt8gq9lq88gbrlv19d', '118.136.7.198', 1539126397, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533393132363339373b),
('jv2mpqj6943f52ess475as2isq', '36.84.71.126', 1539134856, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533393133343835363b),
('oscj9pjfben32cu6ffh0de3d2o', '139.194.10.112', 1539165236, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533393136353233363b),
('56vb1aio8ib6rlj471i85r6o96', '36.78.92.40', 1544255124, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343235353132343b);

-- --------------------------------------------------------

--
-- Table structure for table `dt_item_laundry`
--

CREATE TABLE `dt_item_laundry` (
  `id` int(11) NOT NULL,
  `id_laundry` int(11) NOT NULL,
  `item` varchar(256) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL,
  `price_dryclean` bigint(20) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(256) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_item_laundry`
--

INSERT INTO `dt_item_laundry` (`id`, `id_laundry`, `item`, `type`, `price`, `price_dryclean`, `qty`, `is_active`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 1, 'BAJU', 'satuan', 2500, 2000, 1, 1, '1', '2018-10-10 00:00:00', NULL, NULL),
(2, 1, 'CELANA', 'satuan', 3000, 6000, 1, 1, '1', '2018-10-10 00:00:00', NULL, NULL),
(3, 2, 'BAJU', 'satuan', 3000, 6000, 4, 1, '1', '2018-10-10 00:00:00', NULL, NULL),
(4, 2, 'Jaket', 'satuan', 3000, 6000, 1, 1, '1', '2018-10-10 00:00:00', NULL, NULL),
(5, 3, 'Jaket', 'satuan', 5000, 7000, 1, 1, '1', '2018-10-10 00:00:00', NULL, NULL),
(6, 3, 'Jaket', 'satuan', 5000, 7000, 1, 1, '1', '2018-10-10 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dt_item_laundry_history`
--

CREATE TABLE `dt_item_laundry_history` (
  `id` int(11) NOT NULL,
  `id_laundry` int(11) NOT NULL,
  `item` varchar(256) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `price` bigint(20) NOT NULL,
  `price_dryclean` bigint(20) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(256) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dt_payment_deposit`
--

CREATE TABLE `dt_payment_deposit` (
  `id` int(11) NOT NULL,
  `id_laundry` int(11) NOT NULL,
  `nominal_transaction` bigint(20) NOT NULL,
  `current_deposit` bigint(20) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(256) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dt_payment_deposit_history`
--

CREATE TABLE `dt_payment_deposit_history` (
  `id` int(11) NOT NULL,
  `id_laundry` int(11) NOT NULL,
  `nominal_transaction` bigint(20) NOT NULL,
  `current_deposit` bigint(20) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(256) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dt_payment_laundry`
--

CREATE TABLE `dt_payment_laundry` (
  `id` int(11) NOT NULL,
  `id_laundry` int(11) NOT NULL,
  `type` varchar(50) NOT NULL COMMENT 'down_payment;lunas;full_payment',
  `payment_type` varchar(50) NOT NULL COMMENT 'debit;cash;transfer',
  `amount` bigint(20) NOT NULL,
  `account_bank` varchar(256) DEFAULT NULL,
  `account_holder` varchar(256) DEFAULT NULL,
  `payment_date` datetime NOT NULL,
  `is_active` tinyint(4) NOT NULL COMMENT '0=inactive;1=active;2=deleted',
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(256) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_payment_laundry`
--

INSERT INTO `dt_payment_laundry` (`id`, `id_laundry`, `type`, `payment_type`, `amount`, `account_bank`, `account_holder`, `payment_date`, `is_active`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 1, 'down_payment', 'debit', 50000, NULL, 'tina', '2018-10-21 10:00:00', 1, '1', '2018-10-21 10:00:00', NULL, NULL),
(2, 1, 'lunas', 'debit', 70000, NULL, 'tina', '2018-10-22 10:00:00', 1, '1', '2018-10-22 10:00:00', NULL, NULL),
(3, 2, 'down_payment', 'debit', 70000, NULL, 'Ando', '2018-10-22 10:00:00', 1, '1', '2018-10-22 10:00:00', NULL, NULL),
(4, 2, 'lunas', 'debit', 70000, NULL, 'Ando', '2018-10-22 10:00:00', 1, '1', '2018-10-22 10:00:00', NULL, NULL),
(5, 3, 'down_payment', 'cash', 5000, NULL, 'Logam', '2018-10-22 10:00:00', 1, '1', '2018-10-22 10:00:00', NULL, NULL),
(6, 3, 'lunas', 'cash', 2000, NULL, 'Logam', '2018-10-22 10:00:00', 1, '1', '2018-10-22 10:00:00', NULL, NULL),
(7, 1, 'lunas', 'debit', 123123, 'BCA', 'Titis', '2018-10-10 00:00:00', 1, '1', '2018-12-03 06:46:04', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dt_payment_laundry_history`
--

CREATE TABLE `dt_payment_laundry_history` (
  `id` int(11) NOT NULL,
  `id_laundry` int(11) NOT NULL,
  `type` varchar(50) NOT NULL COMMENT 'down_payment;lunas;full_payment',
  `payment_type` varchar(50) NOT NULL COMMENT 'debit;cash;transfer',
  `amount` bigint(20) NOT NULL,
  `account_bank` varchar(256) DEFAULT NULL,
  `account_holder` varchar(256) DEFAULT NULL,
  `payment_date` datetime NOT NULL,
  `is_active` tinyint(4) NOT NULL COMMENT '0=inactive;1=active;2=deleted',
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(256) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_payment_laundry_history`
--

INSERT INTO `dt_payment_laundry_history` (`id`, `id_laundry`, `type`, `payment_type`, `amount`, `account_bank`, `account_holder`, `payment_date`, `is_active`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 1, 'down_payment', 'debit', 50000, NULL, 'tina', '2018-10-21 10:00:00', 1, '1', '2018-10-21 10:00:00', NULL, NULL),
(2, 1, 'lunas', 'debit', 70000, NULL, 'tina', '2018-10-22 10:00:00', 1, '1', '2018-10-22 10:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dt_picture_laundry`
--

CREATE TABLE `dt_picture_laundry` (
  `id` int(11) NOT NULL,
  `id_laundry` int(11) NOT NULL,
  `picture` longtext,
  `picture_type` varchar(50) DEFAULT NULL,
  `picture_url` longtext,
  `caption` text,
  `is_active` tinyint(4) NOT NULL,
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(256) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_picture_laundry`
--

INSERT INTO `dt_picture_laundry` (`id`, `id_laundry`, `picture`, `picture_type`, `picture_url`, `caption`, `is_active`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(3, 1, 'Prod_1.jpg', 'JPEG', 'http://54.169.69.159/open-picture/Prod_1.jpg', '', 1, '1', '2018-11-14 09:36:27', NULL, NULL),
(4, 1, 'LIGHTBOX_DEVELOPMENT_-_OPTIK_MELAWAI.jpg', 'JPEG', 'http://54.169.69.159/open-picture/LIGHTBOX_DEVELOPMENT_-_OPTIK_MELAWAI.jpg', '', 1, '1', '2018-11-15 09:45:07', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dt_picture_laundry_history`
--

CREATE TABLE `dt_picture_laundry_history` (
  `id` int(11) NOT NULL,
  `id_laundry` int(11) NOT NULL,
  `picture` longtext,
  `picture_type` varchar(50) DEFAULT NULL,
  `picture_url` longtext,
  `caption` text,
  `is_active` tinyint(4) NOT NULL,
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(256) DEFAULT NULL,
  `modified_date` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dt_survey_form`
--

CREATE TABLE `dt_survey_form` (
  `id` int(11) NOT NULL,
  `nama_laundry` varchar(255) NOT NULL,
  `alamat_laundry` text NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `no_telp` varchar(15) NOT NULL,
  `foto_1` varchar(255) DEFAULT NULL,
  `foto_2` varchar(255) DEFAULT NULL,
  `any_system` int(11) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `question_1` text,
  `question_2` text,
  `question_3` varchar(10) DEFAULT NULL,
  `question_4` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_survey_form`
--

INSERT INTO `dt_survey_form` (`id`, `nama_laundry`, `alamat_laundry`, `nama_lengkap`, `no_telp`, `foto_1`, `foto_2`, `any_system`, `created_by`, `created_date`, `modified_by`, `modified_date`, `question_1`, `question_2`, `question_3`, `question_4`) VALUES
(1, 'Sun Wash.', 'Villa Dago Pamulang', 'Ibu Yuni', '081213316839', '9ccd1801bc3625dcd099f3fbff91b1b0.jpg', '34ef13aa783e97f97edf7ce16f7d8398.jpg', 1, 'Dery suhe', '2018-10-21 09:22:45', NULL, NULL, 'GoWash Express. Cuma reporting kaya cms.', 'Ask owner', 'Saat openi', 'Tidak.'),
(2, 'Laundri nayla', 'Jl.antara jatimakmur masjid alarifiah pondok gede bekasi', 'Nayla', '081288561565', 'a9c086df3ccd490a07e61cb80d667529.jpg', 'cc5bb62eb1b92db678b6545a71839dc3.jpg', 0, 'Eko', '2018-10-30 13:37:25', NULL, NULL, 'Tidak punya', 'Di pikir dulu', 'Tidak ada ', 'Tidak ada');

-- --------------------------------------------------------

--
-- Table structure for table `dt_task_laundry`
--

CREATE TABLE `dt_task_laundry` (
  `id` int(11) NOT NULL,
  `id_laundry` int(11) NOT NULL,
  `outlet_user` varchar(256) NOT NULL,
  `comment` text,
  `status` varchar(50) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(256) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_task_laundry`
--

INSERT INTO `dt_task_laundry` (`id`, `id_laundry`, `outlet_user`, `comment`, `status`, `is_active`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 1, 'Staff Outlet A1', NULL, 'KERANJANG', 1, '1', '2018-10-09 00:00:00', NULL, NULL),
(2, 1, 'Staff Outlet A2', NULL, 'CUCI', 1, '2', '2018-10-09 00:00:00', NULL, NULL),
(3, 1, 'Staff Outlet A1', NULL, 'KERING', 1, '1', '2018-10-09 00:00:00', NULL, NULL),
(4, 1, 'Staff Outlet A2', NULL, 'SETRIKA', 1, '2', '2018-10-09 00:00:00', NULL, NULL),
(5, 2, 'Staff Outlet A1', NULL, 'KERANJANG', 1, '1', '2018-10-09 00:00:00', NULL, NULL),
(6, 2, 'Staff Outlet A1', NULL, 'CUCI', 1, '1', '2018-10-09 00:00:00', NULL, NULL),
(7, 2, 'Staff Outlet A1', NULL, 'KERING', 1, '1', '2018-10-09 00:00:00', NULL, NULL),
(8, 2, 'Staff Outlet A1', NULL, 'SETRIKA', 1, '1', '2018-10-09 00:00:00', NULL, NULL),
(9, 3, 'Staff Outlet A2', NULL, 'KERANJANG', 1, '2', '2018-10-09 00:00:00', NULL, NULL),
(10, 3, 'Staff Outlet A2', NULL, 'CUCI', 1, '2', '2018-10-09 00:00:00', NULL, NULL),
(11, 3, 'Staff Outlet A2', NULL, 'KERING', 1, '2', '2018-10-09 00:00:00', NULL, NULL),
(12, 3, 'Staff Outlet A2', NULL, 'SETRIKA', 1, '2', '2018-10-09 00:00:00', NULL, NULL),
(17, 1, 'wati', NULL, 'dicuci', 1, '1', '2018-11-26 09:22:43', NULL, NULL),
(18, 2, 'wati', NULL, 'disetrika', 1, '1', '2018-11-26 09:22:43', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dt_task_laundry_history`
--

CREATE TABLE `dt_task_laundry_history` (
  `id` int(11) NOT NULL,
  `id_laundry` int(11) NOT NULL,
  `outlet_user` varchar(256) NOT NULL,
  `comment` text,
  `status` varchar(50) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(256) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lw_data_sponsor`
--

CREATE TABLE `lw_data_sponsor` (
  `id` int(13) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `periode_pengajuan` date NOT NULL,
  `pengajuan_omset` int(30) NOT NULL,
  `diskon` int(11) DEFAULT '0',
  `omset_yang_diajukan` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(20) NOT NULL,
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lw_data_sponsor`
--

INSERT INTO `lw_data_sponsor` (`id`, `tgl_pengajuan`, `nama_dokter`, `periode_pengajuan`, `pengajuan_omset`, `diskon`, `omset_yang_diajukan`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(6, '2019-01-23', 'Vanessa', '2019-01-23', 1234, 10, 'asd', '2019-01-25 06:52:36', '2', '2019-01-30 10:51:57', '2'),
(7, '2019-01-17', 'asd', '2019-01-17', 12, 1, '', '2019-01-25 15:18:57', '2', '2019-01-25 15:18:57', NULL),
(8, '2019-01-09', 'asd', '2019-01-14', 2000, 21, 'asd', '2019-01-30 10:52:16', '2', '2019-01-30 10:52:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lw_detail_trans_order`
--

CREATE TABLE `lw_detail_trans_order` (
  `id` int(11) NOT NULL,
  `id_trans_order` int(13) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kemasan` varchar(50) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `qty` int(5) NOT NULL,
  `harga` int(20) NOT NULL,
  `total_harga` int(20) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(50) NOT NULL,
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lw_detail_trans_order`
--

INSERT INTO `lw_detail_trans_order` (`id`, `id_trans_order`, `nama_barang`, `kemasan`, `ukuran`, `qty`, `harga`, `total_harga`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(1, 123, '', 'Box', '2 gram', 2, 500000, 0, '2019-01-26 00:04:36', '', '2019-01-26 00:04:36', NULL),
(3, 456, '', 'Plastik', '2 gram', 6, 10000, 0, '2019-01-26 00:05:39', '', '2019-01-26 00:05:39', NULL),
(4, 456, '', 'Kantong', '1 kilo', 2, 100000, 0, '2019-01-26 00:05:39', '', '2019-01-26 00:05:39', NULL),
(5, 456, '', 'Bon Cabe', '12', 1, 1234, 0, '2019-01-25 18:57:19', '2', '2019-01-25 18:57:19', NULL),
(8, 123, '', 'Sepatu', '123', 123, 120, 0, '2019-01-25 19:08:53', '2', '2019-01-25 19:08:53', NULL),
(17, 1548452192, '', 'tesa', '31', 3, 31, 0, '2019-01-25 20:39:55', '2', '2019-01-25 20:45:39', '2'),
(19, 1548452192, '', '123', '123', 123, 123, 0, '2019-01-25 20:50:48', '2', '2019-01-25 20:50:48', NULL),
(20, 1548453749, '', '12', '12', 12, 8, 0, '2019-01-25 21:02:54', '2', '2019-01-25 21:02:54', NULL),
(21, 1548453979, '', 'jagungs', '1', 1, -3, 0, '2019-01-25 21:12:29', '2', '2019-01-25 21:12:48', '2'),
(22, 1548453979, '', 'kelapas', '1', 1, 1, 0, '2019-01-25 21:12:37', '2', '2019-01-25 21:12:44', '2'),
(23, 1548453979, '', 'kopi', '1', 1, 1, 0, '2019-01-25 21:14:48', '2', '2019-01-25 21:14:48', NULL),
(24, 1548454664, '', 'asde', '1', 1, 1, 0, '2019-01-25 21:18:00', '2', '2019-01-25 21:43:09', '2'),
(30, 1548454826, '', '55', '5', 52, 5, 0, '2019-01-25 21:39:10', '2', '2019-01-25 21:39:36', '2'),
(31, 1548486774, '', 'baju', '3', 3, 3000, 0, '2019-01-26 06:13:19', '2', '2019-01-26 06:13:19', NULL),
(32, 1548486774, '', 'celana', '2', 2, 2000, 0, '2019-01-26 06:13:31', '2', '2019-01-26 06:13:31', NULL),
(34, 1548489363, '', 'Baju', '1', 1, 1, 0, '2019-01-26 06:56:22', '2', '2019-01-26 06:56:22', NULL),
(35, 1548492085, '', 'basatu', '111', 111, 111, 0, '2019-01-26 07:41:55', '2', '2019-01-26 07:41:55', NULL),
(36, 1548492085, '', 'badua', '222', 222, 222, 0, '2019-01-26 07:42:03', '2', '2019-01-26 07:42:03', NULL),
(37, 1548492270, '', 'hhhh', '7', 67, 7, 0, '2019-01-26 07:45:04', '2', '2019-01-26 07:45:04', NULL),
(38, 1548664350, '', 'Panadol', '1', 1, 123, 0, '2019-01-28 07:32:49', '2', '2019-01-28 07:50:12', '2'),
(39, 1548664350, '', 'Para123', '21', 3, 1, 0, '2019-01-28 07:42:52', '2', '2019-01-28 07:54:52', '2'),
(41, 1548665707, '', 'asdweaaaae', '1', 1, 1, 0, '2019-01-28 07:56:10', '2', '2019-01-28 07:56:25', '2'),
(42, 1548666731, '', 'qwe', '1', 1, 1, 0, '2019-01-28 08:12:35', '2', '2019-01-28 08:12:35', NULL),
(43, 1548670988, '', 'asdda', '1', 1, 1, 0, '2019-01-28 09:23:22', '2', '2019-01-28 09:23:22', NULL),
(44, 1548671627, '', '1', '1', 1, 1, 0, '2019-01-28 09:33:58', '2', '2019-01-28 09:33:58', NULL),
(45, 1548672539, '', 'sda', '1', 1, 1, 0, '2019-01-28 09:49:15', '2', '2019-01-28 09:49:15', NULL),
(46, 1548672939, '', 'baju', '1', 1, 1, 0, '2019-01-28 09:55:48', '2', '2019-01-28 09:55:57', '2'),
(47, 1548673960, '', '1', '1', 1, 1, 0, '2019-01-28 10:12:49', '2', '2019-01-28 10:12:49', NULL),
(48, 1548677852, '', 'asd', '1', 1, 1, 0, '2019-01-28 11:17:45', '2', '2019-01-28 11:17:45', NULL),
(50, 1548677852, '', 'asd', '1', 1, 1, 0, '2019-01-28 11:20:02', '2', '2019-01-28 11:20:02', NULL),
(51, 1548677852, '', 'asd', '1', 1, 1, 0, '2019-01-28 11:20:37', '2', '2019-01-28 11:20:37', NULL),
(52, 1548737663, '', 'asd', '1', 1, 1, 0, '2019-01-29 03:54:52', '2', '2019-01-29 03:54:52', NULL),
(53, 1548750977, '', 'asd', '1', 1, 1, 0, '2019-01-29 07:36:33', '2', '2019-01-29 08:05:38', '2'),
(54, 1548759078, '', 'Paramek', '1', 1, 1, 1000, '2019-01-29 09:52:07', '2', '2019-01-29 17:02:20', NULL),
(55, 1548759078, '', 'panadol', '2', 2, 2000, 4000, '2019-01-29 10:01:22', '2', '2019-01-29 10:01:22', NULL),
(56, 1548759853, '', 'Paramek', '2', 2, 2000, 4000, '2019-01-29 10:12:24', '2', '2019-01-29 10:12:24', NULL),
(57, 1548759853, '', 'panadol', 'ml', 2, 2000, 4000, '2019-01-29 10:12:51', '2', '2019-01-29 10:12:51', NULL),
(59, 1548822015, '', 'Panadol', '1', 2, 1999, 3998, '2019-01-30 03:27:23', '2', '2019-01-30 03:27:23', NULL),
(66, 1548822760, 'Panadol', 'Botol', 'ml', 2, 20000, 40000, '2019-01-30 03:48:34', '2', '2019-01-30 03:48:34', NULL),
(67, 1548822760, 'Konimek', 'Botol', '1ml', 10, 2000, 20000, '2019-01-30 03:49:04', '2', '2019-01-30 03:49:04', NULL),
(68, 1548824282, 'tokoa', '1', '1', 1, 1000, 1000, '2019-01-30 04:00:11', '2', '2019-01-30 04:00:11', NULL),
(69, 1548824282, 'qrqa', '1', '1', 2, 2800, 5600, '2019-01-30 04:00:23', '2', '2019-01-30 04:00:23', NULL),
(70, 1548824474, 'Komar', '1', '2', 1, 1000, 1000, '2019-01-30 04:01:31', '2', '2019-01-30 04:01:31', NULL),
(71, 1548824474, 'agar', '1', '3', 2, 2000, 4000, '2019-01-30 04:01:43', '2', '2019-01-30 04:01:43', NULL),
(72, 1548825575, 'asd', '11', '1', 1, 10000, 10000, '2019-01-30 04:19:52', '2', '2019-01-30 04:19:52', NULL),
(73, 1548825575, 'dsas', '2', '2', 2, 200000, 400000, '2019-01-30 04:20:01', '2', '2019-01-30 04:20:01', NULL),
(74, 1548827367, 'asdd', 'botol', 'ml', 1, 2000, 2000, '2019-01-30 04:49:49', '2', '2019-01-30 04:49:49', NULL),
(75, 1548827516, '22', '2', '2', 2, 2, 4, '2019-01-30 04:52:06', '2', '2019-01-30 04:52:06', NULL),
(76, 1548827723, '1', '1', '1', 1, 20000, 20000, '2019-01-30 04:56:51', '2', '2019-01-30 04:56:51', NULL),
(77, 1548827841, '5', '4', '3', 33, 10000, 330000, '2019-01-30 04:57:41', '2', '2019-01-30 04:57:41', NULL),
(78, 1548833020, 'qwe', '22222', '2', 2, 22000, 44000, '2019-01-30 06:23:55', '2', '2019-01-30 06:23:55', NULL),
(79, 1548835446, 'asd', '1', '1', 1, 20000, 20000, '2019-01-30 07:04:23', '2', '2019-01-30 07:04:23', NULL),
(80, 1548835446, 'ewq', '1', '2', 2, 20000, 40000, '2019-01-30 07:04:32', '2', '2019-01-30 07:04:32', NULL),
(81, 1548836660, 'Asd', '1', '1', 1, 2000, 2000, '2019-01-30 07:24:38', '2', '2019-01-30 07:24:38', NULL),
(82, 1548845744, 'asd', '1', 'as', 1, 2000, 2000, '2019-01-30 09:55:57', '2', '2019-01-30 09:55:57', NULL),
(83, 1548845744, 'asd', '2', '2', 2, 2000, 4000, '2019-01-30 09:56:05', '2', '2019-01-30 09:56:05', NULL),
(84, 1548846243, 'asdad', '1', '2', 2, 2000, 4000, '2019-01-30 10:04:15', '2', '2019-01-30 10:04:15', NULL),
(85, 1548846610, 'asd', 'asd', '1', 1, 23300, 23300, '2019-01-30 10:10:27', '2', '2019-01-30 10:10:27', NULL),
(86, 1548846610, 'awe', '22', '2', 2, 2000, 4000, '2019-01-30 10:10:37', '2', '2019-01-30 10:10:37', NULL),
(88, 1548847321, 'Panadol', 'Botol', '100ml', 5, 100000000, 500000000, '2019-01-30 10:23:30', '2', '2019-01-30 10:23:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lw_mast_brosur`
--

CREATE TABLE `lw_mast_brosur` (
  `id` int(13) UNSIGNED NOT NULL,
  `tgl_brosur_upload` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(20) NOT NULL,
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lw_mast_brosur`
--

INSERT INTO `lw_mast_brosur` (`id`, `tgl_brosur_upload`, `deskripsi`, `lampiran`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(2, '2019-01-18', 'Desk Lampiran', 'brosur1548848284.pdf', '2019-01-25 08:05:09', '2', '2019-01-30 11:38:04', '2'),
(3, '2019-01-09', 'pdf', 'brosur1548847351.pdf', '2019-01-30 11:22:31', '2', '2019-01-30 11:22:31', NULL),
(4, '2019-01-03', 'asdaaaaa', 'brosur1548847650.pdf', '2019-01-30 11:27:30', '2', '2019-01-30 11:27:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lw_mast_dokter`
--

CREATE TABLE `lw_mast_dokter` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `alamat_praktek` varchar(255) NOT NULL,
  `jam_praktek` varchar(10) NOT NULL,
  `riwayat_pengambilan` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(20) NOT NULL,
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lw_mast_dokter`
--

INSERT INTO `lw_mast_dokter` (`id`, `nama_dokter`, `alamat`, `telp`, `tempat_lahir`, `tgl_lahir`, `bidang`, `alamat_praktek`, `jam_praktek`, `riwayat_pengambilan`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(1, 'Vanessa', 'Bogor', '085718841359', 'Bogor', '1990-01-09', 'Mata', 'Jaksel', '4 jam', 'lorem Ipsuma', '2019-01-24 14:28:30', '', '2019-01-25 09:05:29', '2'),
(2, 'Evendi', 'asd', 'a213123123123', 'Kota Bogor', '2019-01-23', 'asd', 'asd', 'asd', 'asd', '2019-01-25 09:08:15', '2', '2019-01-26 00:06:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lw_mast_kunjungan`
--

CREATE TABLE `lw_mast_kunjungan` (
  `id` int(13) UNSIGNED NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `topik` text NOT NULL,
  `komplain` text NOT NULL,
  `order` varchar(255) NOT NULL,
  `aktifitas_kompetitor` text NOT NULL,
  `photo_upload` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(20) NOT NULL,
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lw_mast_kunjungan`
--

INSERT INTO `lw_mast_kunjungan` (`id`, `nama_dokter`, `tgl_kunjungan`, `topik`, `komplain`, `order`, `aktifitas_kompetitor`, `photo_upload`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(3, 'w', '2019-01-09', 'ww', 'w', 'w', 'ww', 'kunjungan1548849973.jpg', '2019-01-30 11:53:21', '2', '2019-01-30 12:06:13', '2');

-- --------------------------------------------------------

--
-- Table structure for table `lw_mast_makloon`
--

CREATE TABLE `lw_mast_makloon` (
  `id` int(13) UNSIGNED NOT NULL,
  `nama_dokter` varchar(20) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `tahun_makloon` varchar(12) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `stok` int(5) NOT NULL,
  `riwayat_pengambilan` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(20) NOT NULL,
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lw_mast_makloon`
--

INSERT INTO `lw_mast_makloon` (`id`, `nama_dokter`, `merk`, `tahun_makloon`, `nama_produk`, `stok`, `riwayat_pengambilan`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(1, 'Vanessa', 'Kalbee', '2015', 'Kalbe Penjernih Mataa', 15, 'aaaaa', '2019-01-24 14:31:38', '', '2019-01-30 10:57:01', '2'),
(2, 'asd', 'asd', 'asd', 'asd', 1, 'asdasdas', '2019-01-25 09:32:24', '2', '2019-01-30 17:56:53', NULL),
(3, 'asd', 'aaa', '12', 'asd', 1, 'aaaaaaa', '2019-01-30 10:57:19', '2', '2019-01-30 10:57:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lw_mast_medrep`
--

CREATE TABLE `lw_mast_medrep` (
  `id` int(13) UNSIGNED NOT NULL,
  `nama_medrep` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(20) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(20) NOT NULL,
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lw_mast_medrep`
--

INSERT INTO `lw_mast_medrep` (`id`, `nama_medrep`, `tempat_lahir`, `tgl_lahir`, `alamat`, `telp`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(1, 'Lona', 'Jakartaa', '2019-02-25', '', '', '2019-01-24 14:34:17', '', '2019-01-25 09:38:56', '2'),
(2, 'aasd', 'Kota Bogor', '2019-01-21', '', '', '2019-01-25 09:40:12', '2', '2019-01-25 09:40:12', NULL),
(3, 'asd', 'Kota Bogor', '2019-01-16', '', '', '2019-01-25 09:40:32', '2', '2019-01-25 09:40:32', NULL),
(4, 'asd', 'bogor', '2019-01-24', 'bogor', '085718484', '2019-01-30 11:01:24', '2', '2019-01-30 11:01:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lw_mast_status`
--

CREATE TABLE `lw_mast_status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lw_mast_status`
--

INSERT INTO `lw_mast_status` (`id`, `status_name`) VALUES
(1, 'order'),
(2, 'tagihan'),
(3, 'pembayaran'),
(4, 'pembayaran l'),
(5, 'Penerimaan');

-- --------------------------------------------------------

--
-- Table structure for table `lw_trans_order`
--

CREATE TABLE `lw_trans_order` (
  `id` int(11) NOT NULL,
  `id_trans_order` int(13) UNSIGNED NOT NULL,
  `id_medrep` int(13) NOT NULL,
  `id_dokter` int(13) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `tgl_so` date DEFAULT NULL,
  `no_so` int(11) DEFAULT NULL,
  `tgl_trans_order` date NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(255) NOT NULL,
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(255) DEFAULT NULL,
  `is_active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lw_trans_order`
--

INSERT INTO `lw_trans_order` (`id`, `id_trans_order`, `id_medrep`, `id_dokter`, `status`, `tgl_so`, `no_so`, `tgl_trans_order`, `created_date`, `created_by`, `modified_date`, `modified_by`, `is_active`) VALUES
(1, 123, 1, 2, 1, '2019-01-18', 0, '2019-01-17', '2019-01-26 00:03:27', '', '2019-01-25 21:15:14', '2', 0),
(2, 456, 2, 2, 1, '2019-01-11', 0, '2019-01-11', '2019-01-26 00:06:22', '', '2019-01-25 21:15:11', '2', 0),
(3, 1548449661, 1, 1, 1, '2019-01-05', 0, '2019-01-05', '2019-01-25 19:54:42', '2', '2019-01-25 21:16:14', NULL, 0),
(4, 1548450864, 2, 1, 1, '2019-01-16', 0, '2019-01-16', '2019-01-25 20:14:45', '2', '2019-01-25 21:19:09', NULL, 0),
(5, 1548451161, 2, 2, 1, '2019-01-26', 0, '2019-01-29', '2019-01-25 20:19:29', '2', '2019-01-25 20:19:29', NULL, 0),
(6, 1548452192, 1, 2, 1, '2019-01-14', 0, '2019-01-14', '2019-01-25 20:36:46', '2', '2019-01-25 20:36:46', NULL, 0),
(7, 1548453456, 1, 1, 1, '2019-01-01', 0, '2019-01-01', '2019-01-25 20:57:48', '2', '2019-01-25 20:57:48', NULL, 0),
(8, 1548453478, 1, 2, 1, '2019-01-16', 0, '2019-01-17', '2019-01-25 20:58:10', '2', '2019-01-25 20:58:10', NULL, 0),
(9, 1548453512, 1, 1, 1, '2019-01-22', 0, '2019-01-23', '2019-01-25 20:58:43', '2', '2019-01-25 20:58:43', NULL, 0),
(10, 1548453652, 1, 2, 1, '2019-01-22', 0, '2019-01-17', '2019-01-25 21:00:59', '2', '2019-01-25 21:00:59', NULL, 0),
(11, 1548453749, 2, 2, 1, '2019-01-28', 0, '2019-01-22', '2019-01-25 21:02:38', '2', '2019-01-25 21:02:38', NULL, 0),
(12, 1548453903, 2, 1, 1, '2019-01-30', 0, '2019-01-10', '2019-01-25 21:05:10', '2', '2019-01-25 21:05:10', NULL, 0),
(13, 1548453979, 1, 1, 1, '2019-01-22', 0, '2019-01-30', '2019-01-25 21:06:29', '2', '2019-01-25 21:15:08', '2', 0),
(14, 1548454664, 1, 1, 1, '2019-01-31', 0, '2019-01-31', '2019-01-25 21:17:52', '2', '2019-01-25 21:46:16', '2', 0),
(15, 1548454826, 1, 1, 1, '2019-01-23', 2, '2019-11-27', '2019-01-25 21:20:35', '2', '2019-01-26 06:55:52', '2', 1),
(16, 1548486774, 1, 2, 1, '2019-01-16', 4, '2019-01-18', '2019-01-26 06:13:07', '2', '2019-01-26 06:55:56', '2', 1),
(17, 1548489363, 3, 2, 1, '2019-01-16', 32, '2019-01-23', '2019-01-26 06:56:13', '2', '2019-01-26 06:56:24', '2', 1),
(18, 1548492085, 1, 2, 1, '2019-01-01', 111, '2019-01-01', '2019-01-26 07:41:44', '2', '2019-01-26 07:42:06', '2', 1),
(19, 1548492270, 1, 2, 1, '2019-01-18', 9, '2019-01-04', '2019-01-26 07:44:54', '2', '2019-01-26 07:45:10', '2', 1),
(20, 1548662517, 1, 2, 1, '2019-01-09', 1, '2019-01-02', '2019-01-28 07:11:20', '2', '2019-01-28 07:11:20', NULL, 0),
(21, 1548663802, 1, 1, 1, NULL, NULL, '2019-01-14', '2019-01-28 07:23:30', '2', '2019-01-28 07:23:30', NULL, 0),
(22, 1548663802, 1, 1, 1, NULL, NULL, '2019-01-14', '2019-01-28 07:25:02', '2', '2019-01-28 07:25:02', NULL, 0),
(23, 1548663802, 1, 1, 1, NULL, NULL, '2019-01-14', '2019-01-28 07:26:16', '2', '2019-01-28 07:26:16', NULL, 0),
(24, 1548664053, 1, 1, 1, NULL, NULL, '2019-01-14', '2019-01-28 07:27:39', '2', '2019-01-28 07:27:39', NULL, 0),
(25, 1548664163, 2, 1, 1212, NULL, NULL, '2019-01-15', '2019-01-28 07:29:29', '2', '2019-01-28 07:32:57', NULL, 0),
(26, 1548664350, 1, 2, 1, NULL, NULL, '2019-01-18', '2019-01-28 07:32:36', '2', '2019-01-28 08:12:56', '2', 0),
(27, 1548665707, 2, 1, 1, NULL, NULL, '2019-01-28', '2019-01-28 07:55:12', '2', '2019-01-28 08:10:58', '2', 0),
(28, 1548666731, 1, 1, 3, '2019-01-28', 21221, '2019-01-21', '2019-01-28 08:12:15', '2', '2019-01-30 04:21:47', '2', 0),
(29, 1548670988, 1, 1, 3, '2019-01-29', 1, '2019-01-01', '2019-01-28 09:23:15', '2', '2019-01-30 04:21:44', '2', 0),
(30, 1548671627, 2, 1, 3, '2019-01-15', 21212, '2019-02-05', '2019-01-28 09:33:52', '2', '2019-01-28 11:15:49', '2', 0),
(31, 1548672539, 2, 2, 2, '2019-01-30', 1, '2019-01-22', '2019-01-28 09:49:07', '2', '2019-01-28 10:37:44', '2', 0),
(32, 1548672939, 1, 2, 3, '2019-01-23', 1, '2019-01-22', '2019-01-28 09:55:43', '2', '2019-01-28 11:15:42', '2', 0),
(33, 1548673960, 2, 2, 1, NULL, NULL, '2019-01-08', '2019-01-28 10:12:44', '2', '2019-01-28 11:20:47', '2', 0),
(34, 1548677805, 1, 1, 1, NULL, NULL, '2019-01-17', '2019-01-28 11:16:52', '2', '2019-01-28 11:16:52', NULL, 0),
(35, 1548677805, 1, 1, 1, NULL, NULL, '2019-01-17', '2019-01-28 11:17:27', '2', '2019-01-28 11:17:27', NULL, 0),
(36, 1548677852, 1, 2, 3, '2019-01-22', 1, '2019-01-22', '2019-01-28 11:17:37', '2', '2019-01-30 04:21:42', '2', 0),
(37, 1548737663, 1, 1, 2, '2019-01-21', 1, '2019-01-16', '2019-01-29 03:54:27', '2', '2019-01-30 04:21:40', '2', 0),
(38, 1548750977, 1, 1, 1, NULL, NULL, '2019-01-22', '2019-01-29 07:36:23', '2', '2019-01-30 04:02:19', '2', 0),
(39, 1548754121, 2, 1, 1, NULL, NULL, '2019-01-14', '2019-01-29 09:35:48', '2', '2019-01-29 09:35:48', NULL, 0),
(40, 1548758848, 1, 1, 1, NULL, NULL, '2019-01-22', '2019-01-29 09:47:34', '2', '2019-01-29 09:47:34', NULL, 0),
(41, 1548758949, 1, 2, 1, NULL, NULL, '2019-01-15', '2019-01-29 09:49:14', '2', '2019-01-29 09:49:14', NULL, 0),
(42, 1548758949, 1, 2, 1, NULL, NULL, '2019-01-15', '2019-01-29 09:51:05', '2', '2019-01-29 09:51:05', NULL, 0),
(43, 1548759078, 1, 1, 1, NULL, NULL, '2019-01-22', '2019-01-29 09:51:22', '2', '2019-01-29 09:51:22', NULL, 0),
(44, 1548759078, 1, 1, 1, NULL, NULL, '2019-01-22', '2019-01-29 09:51:36', '2', '2019-01-29 09:51:36', NULL, 0),
(45, 1548759853, 1, 1, 1, NULL, NULL, '2019-01-22', '2019-01-29 10:04:19', '2', '2019-01-29 10:04:19', NULL, 0),
(46, 1548822015, 1, 1, 1, NULL, NULL, '2019-01-06', '2019-01-30 03:20:22', '2', '2019-01-30 03:20:22', NULL, 0),
(47, 1548822760, 1, 1, 1, NULL, NULL, '2019-01-15', '2019-01-30 03:32:44', '2', '2019-01-30 04:02:17', '2', 0),
(48, 1548824282, 1, 1, 1, NULL, NULL, '2019-01-22', '2019-01-30 03:58:07', '2', '2019-01-30 04:02:13', '2', 0),
(49, 1548824474, 1, 1, 1, NULL, NULL, '2019-01-15', '2019-01-30 04:01:18', '2', '2019-01-30 04:19:33', '2', 0),
(50, 1548824643, 1, 2, 1, NULL, NULL, '2019-01-29', '2019-01-30 04:04:10', '2', '2019-01-30 04:04:10', NULL, 0),
(51, 1548825575, 1, 1, 2, '2019-01-24', 2, '2019-01-15', '2019-01-30 04:19:40', '2', '2019-01-30 04:47:53', '2', 1),
(52, 1548825683, 1, 1, 1, NULL, NULL, '2019-01-29', '2019-01-30 04:21:27', '2', '2019-01-30 04:21:27', NULL, 0),
(53, 1548827367, 1, 1, 3, '2019-01-21', 1111, '2019-01-08', '2019-01-30 04:49:31', '2', '2019-01-30 10:17:26', '2', 1),
(54, 1548827516, 1, 1, 4, '2019-01-30', 5, '2019-01-15', '2019-01-30 04:51:59', '2', '2019-01-30 10:17:09', '2', 0),
(55, 1548827723, 1, 2, 2, '2019-01-18', 2, '2019-01-30', '2019-01-30 04:55:45', '2', '2019-01-30 09:37:08', '2', 0),
(56, 1548827841, 1, 1, 2, '2019-01-28', 2, '2019-01-30', '2019-01-30 04:57:28', '2', '2019-01-30 09:37:04', '2', 0),
(57, 1548833020, 1, 1, 2, '2019-01-16', 22, '2019-01-30', '2019-01-30 06:23:44', '2', '2019-01-30 09:37:06', '2', 0),
(58, 1548835446, 1, 1, 2, '2019-01-30', 3, '2019-01-30', '2019-01-30 07:04:11', '2', '2019-01-30 09:35:36', '2', 0),
(59, 1548836660, 2, 2, 2, '2019-01-22', 222, '2019-01-30', '2019-01-30 07:24:27', '2', '2019-01-30 09:18:52', '2', 0),
(60, 1548845744, 1, 1, 1, NULL, NULL, '2019-01-30', '2019-01-30 09:55:47', '2', '2019-01-30 10:04:33', '2', 0),
(61, 1548846243, 1, 1, 3, '2019-01-30', 2, '2019-01-30', '2019-01-30 10:04:06', '2', '2019-01-30 10:09:05', '2', 1),
(62, 1548846567, 1, 2, 1, NULL, NULL, '2019-01-30', '2019-01-30 10:09:30', '2', '2019-01-30 10:09:30', NULL, 0),
(63, 1548846610, 2, 1, 1, NULL, NULL, '2019-01-30', '2019-01-30 10:10:14', '2', '2019-01-30 10:10:39', '2', 1),
(64, 1548847321, 1, 1, 3, '2019-01-31', 2, '2019-01-30', '2019-01-30 10:22:05', '2', '2019-01-30 10:24:19', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lw_trans_pembayaran`
--

CREATE TABLE `lw_trans_pembayaran` (
  `id` int(11) NOT NULL,
  `id_trans_order` int(11) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `penerima` varchar(255) DEFAULT NULL,
  `pemberi` varchar(255) DEFAULT NULL,
  `tgl_pembayaran` datetime DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(255) NOT NULL,
  `modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lw_trans_pembayaran`
--

INSERT INTO `lw_trans_pembayaran` (`id`, `id_trans_order`, `jumlah`, `penerima`, `pemberi`, `tgl_pembayaran`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(1, 1548759078, NULL, NULL, NULL, NULL, '2019-01-29 09:51:36', '2', '2019-01-29 09:51:36', NULL),
(2, 1548759853, NULL, NULL, NULL, NULL, '2019-01-29 10:04:19', '2', '2019-01-29 10:04:19', NULL),
(3, 1548822015, NULL, NULL, NULL, NULL, '2019-01-30 03:20:22', '2', '2019-01-30 03:20:22', NULL),
(4, 1548822760, NULL, NULL, NULL, NULL, '2019-01-30 03:32:44', '2', '2019-01-30 03:32:44', NULL),
(5, 1548824282, NULL, NULL, NULL, NULL, '2019-01-30 03:58:07', '2', '2019-01-30 03:58:07', NULL),
(6, 1548824474, NULL, NULL, NULL, NULL, '2019-01-30 04:01:18', '2', '2019-01-30 04:01:18', NULL),
(7, 1548824643, NULL, NULL, NULL, NULL, '2019-01-30 04:04:10', '2', '2019-01-30 04:04:10', NULL),
(8, 1548825575, NULL, NULL, NULL, NULL, '2019-01-30 04:19:40', '2', '2019-01-30 04:19:40', NULL),
(9, 1548825683, NULL, NULL, NULL, NULL, '2019-01-30 04:21:27', '2', '2019-01-30 04:21:27', NULL),
(10, 1548827367, NULL, NULL, NULL, NULL, '2019-01-30 04:49:31', '2', '2019-01-30 04:49:31', NULL),
(11, 1548827516, NULL, NULL, NULL, NULL, '2019-01-30 04:51:59', '2', '2019-01-30 04:51:59', NULL),
(12, 1548827723, NULL, NULL, NULL, NULL, '2019-01-30 04:55:46', '2', '2019-01-30 04:55:46', NULL),
(13, 1548827841, NULL, NULL, NULL, NULL, '2019-01-30 04:57:28', '2', '2019-01-30 04:57:28', NULL),
(15, 1548835446, NULL, NULL, NULL, NULL, '2019-01-30 07:04:11', '2', '2019-01-30 07:04:11', NULL),
(17, 1548836660, 100, 'w', 'w', '2019-01-29 00:00:00', '2019-01-30 09:10:43', '2', '2019-01-30 09:10:43', NULL),
(18, 1548836660, 200, 'ew', 'wq', '2019-01-30 09:11:15', '2019-01-30 09:11:15', '2', '2019-01-30 09:11:15', NULL),
(19, 1548833020, 1000, 'Lutfi', 'Yudi', '2019-01-30 09:19:42', '2019-01-30 09:19:42', '2', '2019-01-30 09:19:42', NULL),
(20, 1548833020, 1000, 'Sandi', 'Lutfi', '2019-01-30 09:20:19', '2019-01-30 09:20:19', '2', '2019-01-30 09:20:19', NULL),
(21, 1548833020, 10000, 'Sandi', 'Lutfi', '2019-01-30 09:20:45', '2019-01-30 09:20:45', '2', '2019-01-30 09:20:45', NULL),
(22, 1548833020, 32000, 'ada', 'ada', '2019-01-30 09:23:15', '2019-01-30 09:23:15', '2', '2019-01-30 09:23:15', NULL),
(23, 1548833020, 1200, 'asad', 'das', '2019-01-30 09:27:37', '2019-01-30 09:27:37', '2', '2019-01-30 09:27:37', NULL),
(24, 1548827841, 33000, 'sanusi', 'asd', '2019-01-30 09:33:37', '2019-01-30 09:33:37', '2', '2019-01-30 09:33:37', NULL),
(25, 1548827841, 297000, 'asad', 'adad', '2019-01-30 09:34:05', '2019-01-30 09:34:05', '2', '2019-01-30 09:34:05', NULL),
(26, 1548827516, 3, 'wer', 'ew', '2019-01-30 09:50:24', '2019-01-30 09:50:24', '2', '2019-01-30 09:50:24', NULL),
(27, 1548827516, 2, 'awd', 'ad', '2019-01-30 09:50:34', '2019-01-30 09:50:34', '2', '2019-01-30 09:50:34', NULL),
(28, 1548847321, 50000000, 'Lutfi', 'Sandi', '2019-01-30 10:25:07', '2019-01-30 10:25:07', '2', '2019-01-30 10:25:07', NULL),
(29, 1548847321, 20000000, 'Lutfi', 'Sandi', '2019-01-30 10:25:55', '2019-01-30 10:25:56', '2', '2019-01-30 10:25:56', NULL),
(30, 1548847321, 430000000, 'Lutfi', 'Sandi', '2019-01-30 10:26:17', '2019-01-30 10:26:17', '2', '2019-01-30 10:26:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lw_trans_penerimaan`
--

CREATE TABLE `lw_trans_penerimaan` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_trans_order` int(13) NOT NULL,
  `nama_penerima` varchar(255) DEFAULT NULL,
  `tgl_terima` date DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(255) NOT NULL,
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lw_trans_penerimaan`
--

INSERT INTO `lw_trans_penerimaan` (`id`, `id_trans_order`, `nama_penerima`, `tgl_terima`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(1, 1548663802, '', '0000-00-00', '2019-01-28 07:26:16', '2', '2019-01-28 07:26:16', NULL),
(2, 1548664053, '', '0000-00-00', '2019-01-28 07:27:39', '2', '2019-01-28 07:27:39', NULL),
(3, 1548664163, '', '0000-00-00', '2019-01-28 07:29:29', '2', '2019-01-28 07:29:29', NULL),
(4, 1548664350, '', '0000-00-00', '2019-01-28 07:32:36', '2', '2019-01-28 07:32:36', NULL),
(5, 1548665707, '', '0000-00-00', '2019-01-28 07:55:12', '2', '2019-01-28 07:55:12', NULL),
(6, 1548666731, 'asd', '1900-12-13', '2019-01-28 08:12:16', '2', '2019-01-28 11:15:09', '2'),
(7, 1548670988, '', '0000-00-00', '2019-01-28 09:23:15', '2', '2019-01-28 09:23:15', NULL),
(8, 1548671627, '', '0000-00-00', '2019-01-28 09:33:52', '2', '2019-01-28 09:33:52', NULL),
(9, 1548672539, '', '0000-00-00', '2019-01-28 09:49:08', '2', '2019-01-28 09:49:08', NULL),
(10, 1548672939, 'adan', '1900-12-27', '2019-01-28 09:55:43', '2', '2019-01-28 11:15:20', '2'),
(11, 1548673960, '', '0000-00-00', '2019-01-28 10:12:44', '2', '2019-01-28 10:12:44', NULL),
(12, 1548677805, NULL, NULL, '2019-01-28 11:17:27', '2', '2019-01-28 11:17:27', NULL),
(13, 1548677852, NULL, NULL, '2019-01-28 11:17:37', '2', '2019-01-28 11:17:37', NULL),
(14, 1548737663, NULL, NULL, '2019-01-29 03:54:28', '2', '2019-01-29 03:54:28', NULL),
(15, 1548750977, NULL, NULL, '2019-01-29 07:36:23', '2', '2019-01-29 07:36:23', NULL),
(16, 1548754121, NULL, NULL, '2019-01-29 09:35:48', '2', '2019-01-29 09:35:48', NULL),
(17, 1548758848, NULL, NULL, '2019-01-29 09:47:34', '2', '2019-01-29 09:47:34', NULL),
(18, 1548759078, NULL, NULL, '2019-01-29 09:51:36', '2', '2019-01-29 09:51:36', NULL),
(19, 1548759853, NULL, NULL, '2019-01-29 10:04:20', '2', '2019-01-29 10:04:20', NULL),
(20, 1548822015, NULL, NULL, '2019-01-30 03:20:22', '2', '2019-01-30 03:20:22', NULL),
(21, 1548822760, NULL, NULL, '2019-01-30 03:32:44', '2', '2019-01-30 03:32:44', NULL),
(22, 1548824282, NULL, NULL, '2019-01-30 03:58:07', '2', '2019-01-30 03:58:07', NULL),
(23, 1548824474, NULL, NULL, '2019-01-30 04:01:18', '2', '2019-01-30 04:01:18', NULL),
(24, 1548824643, NULL, NULL, '2019-01-30 04:04:10', '2', '2019-01-30 04:04:10', NULL),
(25, 1548825575, NULL, NULL, '2019-01-30 04:19:40', '2', '2019-01-30 04:19:40', NULL),
(26, 1548825683, NULL, NULL, '2019-01-30 04:21:27', '2', '2019-01-30 04:21:27', NULL),
(27, 1548827367, NULL, NULL, '2019-01-30 04:49:31', '2', '2019-01-30 04:49:31', NULL),
(28, 1548827516, NULL, NULL, '2019-01-30 04:52:00', '2', '2019-01-30 04:52:00', NULL),
(29, 1548827723, NULL, NULL, '2019-01-30 04:55:46', '2', '2019-01-30 04:55:46', NULL),
(30, 1548827841, NULL, NULL, '2019-01-30 04:57:28', '2', '2019-01-30 04:57:28', NULL),
(31, 1548833020, NULL, NULL, '2019-01-30 06:23:44', '2', '2019-01-30 06:23:44', NULL),
(32, 1548835446, NULL, NULL, '2019-01-30 07:04:11', '2', '2019-01-30 07:04:11', NULL),
(33, 1548836660, NULL, NULL, '2019-01-30 07:24:27', '2', '2019-01-30 07:24:27', NULL),
(34, 1548845744, NULL, NULL, '2019-01-30 09:55:48', '2', '2019-01-30 09:55:48', NULL),
(35, 1548846243, NULL, NULL, '2019-01-30 10:04:07', '2', '2019-01-30 10:04:07', NULL),
(36, 1548846567, NULL, NULL, '2019-01-30 10:09:30', '2', '2019-01-30 10:09:30', NULL),
(37, 1548846610, NULL, NULL, '2019-01-30 10:10:14', '2', '2019-01-30 10:10:14', NULL),
(38, 1548847321, 'asa', '2019-01-29', '2019-01-30 10:22:05', '2', '2019-01-30 10:39:40', '2');

-- --------------------------------------------------------

--
-- Table structure for table `lw_trans_tagihan`
--

CREATE TABLE `lw_trans_tagihan` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_trans_order` int(11) NOT NULL,
  `tgl_tagihan` date DEFAULT NULL,
  `id_faktur` int(13) DEFAULT NULL,
  `is_lunas` int(4) DEFAULT '0',
  `tgl_faktur` date DEFAULT NULL,
  `sisa_bayar` int(11) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(255) NOT NULL,
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lw_trans_tagihan`
--

INSERT INTO `lw_trans_tagihan` (`id`, `id_trans_order`, `tgl_tagihan`, `id_faktur`, `is_lunas`, `tgl_faktur`, `sisa_bayar`, `total_bayar`, `created_date`, `created_by`, `modified_date`, `modified_by`) VALUES
(1, 1548489363, '2019-01-03', 123, 0, '2019-01-08', 0, 0, '2019-01-26 14:19:52', '', '2019-01-26 07:36:43', '2'),
(2, 1548492085, '2019-01-02', 211, 1, '2019-01-02', 0, 0, '2019-01-26 07:41:44', '2', '2019-01-26 07:42:23', '2'),
(3, 1548492270, '2019-01-17', 99, 0, '2019-01-24', 0, 0, '2019-01-26 07:44:55', '2', '2019-01-26 07:44:55', NULL),
(4, 1548662517, '2019-02-05', 1, 1, '2019-01-23', 0, 0, '2019-01-28 07:11:21', '2', '2019-01-28 07:11:21', NULL),
(5, 1548662517, '2019-02-05', 1, 1, '2019-01-23', 0, 0, '2019-01-28 07:11:21', '2', '2019-01-28 07:11:21', NULL),
(6, 1548663802, NULL, NULL, NULL, NULL, 0, 0, '2019-01-28 07:25:03', '2', '2019-01-28 07:25:03', NULL),
(7, 1548663802, NULL, NULL, NULL, NULL, 0, 0, '2019-01-28 07:26:16', '2', '2019-01-28 07:26:16', NULL),
(8, 1548664053, NULL, NULL, NULL, NULL, 0, 0, '2019-01-28 07:27:39', '2', '2019-01-28 07:27:39', NULL),
(9, 1548664163, NULL, NULL, NULL, NULL, 0, 0, '2019-01-28 07:29:29', '2', '2019-01-28 07:29:29', NULL),
(10, 1548664350, NULL, NULL, NULL, NULL, 0, 0, '2019-01-28 07:32:36', '2', '2019-01-28 07:32:36', NULL),
(11, 1548665707, NULL, NULL, NULL, NULL, 0, 0, '2019-01-28 07:55:12', '2', '2019-01-28 07:55:12', NULL),
(12, 1548666731, '2019-01-30', 3, 1, '2019-01-25', 0, 0, '2019-01-28 08:12:15', '2', '2019-01-28 10:23:42', '2'),
(13, 1548670988, '2019-01-16', 1, 1, '2019-01-22', 0, 0, '2019-01-28 09:23:15', '2', '2019-01-28 10:36:55', '2'),
(14, 1548671627, '2019-01-22', 1, 1, '2019-01-09', 0, 0, '2019-01-28 09:33:52', '2', '2019-01-28 10:37:24', '2'),
(15, 1548672539, '2019-01-22', 1, 0, '2019-01-15', 0, 0, '2019-01-28 09:49:07', '2', '2019-01-28 10:33:48', '2'),
(16, 1548672939, '2019-01-31', 12345, 1, '2019-01-31', 0, 0, '2019-01-28 09:55:43', '2', '2019-01-28 10:10:44', '2'),
(17, 1548673960, NULL, NULL, NULL, NULL, 0, 0, '2019-01-28 10:12:44', '2', '2019-01-28 10:12:44', NULL),
(18, 1548677805, NULL, NULL, NULL, NULL, 0, 0, '2019-01-28 11:16:52', '2', '2019-01-28 11:16:52', NULL),
(19, 1548677805, NULL, NULL, NULL, NULL, 0, 0, '2019-01-28 11:17:27', '2', '2019-01-28 11:17:27', NULL),
(20, 1548677852, '2019-01-25', 123, 1, '2019-01-02', 0, 0, '2019-01-28 11:17:37', '2', '2019-01-28 11:21:39', '2'),
(21, 1548737663, '2019-01-30', 1, 0, '2019-01-23', 0, 0, '2019-01-29 03:54:28', '2', '2019-01-29 03:56:15', '2'),
(22, 1548750977, NULL, NULL, NULL, NULL, 0, 0, '2019-01-29 07:36:23', '2', '2019-01-29 07:36:23', NULL),
(23, 1548754121, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-29 09:35:48', '2', '2019-01-29 09:35:48', NULL),
(24, 1548758848, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-29 09:47:34', '2', '2019-01-29 09:47:34', NULL),
(25, 1548758949, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-29 09:49:14', '2', '2019-01-29 09:49:14', NULL),
(26, 1548758949, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-29 09:51:05', '2', '2019-01-29 09:51:05', NULL),
(27, 1548759078, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-29 09:51:22', '2', '2019-01-29 09:51:22', NULL),
(28, 1548759078, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-29 09:51:36', '2', '2019-01-29 09:51:36', NULL),
(29, 1548759853, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-29 10:04:19', '2', '2019-01-29 10:04:19', NULL),
(30, 1548822015, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-30 03:20:22', '2', '2019-01-30 03:20:22', NULL),
(31, 1548822760, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-30 03:32:44', '2', '2019-01-30 03:53:25', '2'),
(32, 1548824282, NULL, NULL, NULL, NULL, 0, 6600, '2019-01-30 03:58:07', '2', '2019-01-30 04:00:37', '2'),
(33, 1548824474, NULL, NULL, NULL, NULL, 5000, 5000, '2019-01-30 04:01:18', '2', '2019-01-30 04:01:49', '2'),
(34, 1548824643, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-30 04:04:10', '2', '2019-01-30 04:04:10', NULL),
(35, 1548825575, NULL, NULL, NULL, NULL, 410000, 410000, '2019-01-30 04:19:40', '2', '2019-01-30 04:20:06', '2'),
(36, 1548825683, NULL, NULL, NULL, NULL, NULL, NULL, '2019-01-30 04:21:27', '2', '2019-01-30 04:21:27', NULL),
(37, 1548827367, '2019-01-30', 2, NULL, '2019-01-23', 2000, 2000, '2019-01-30 04:49:31', '2', '2019-01-30 10:17:26', '2'),
(38, 1548827516, '2019-01-30', 2, 1, '2019-01-30', -1, 4, '2019-01-30 04:51:59', '2', '2019-01-30 09:50:34', '2'),
(39, 1548827723, '2019-01-30', 21331, 0, '2019-01-15', 20000, 20000, '2019-01-30 04:55:45', '2', '2019-01-30 06:36:44', '2'),
(40, 1548827841, '2019-01-30', 1222, 1, '2019-01-16', 0, 330000, '2019-01-30 04:57:28', '2', '2019-01-30 09:34:05', '2'),
(41, 1548833020, '2019-01-30', 2, 1, '2019-01-16', -200, 44000, '2019-01-30 06:23:44', '2', '2019-01-30 09:27:37', '2'),
(42, 1548835446, '2019-01-30', 2, 1, '2019-01-22', 60000, 60000, '2019-01-30 07:04:11', '2', '2019-01-30 14:14:42', '2'),
(43, 1548836660, '2019-01-30', 123, 0, '2019-01-22', 2000, 2000, '2019-01-30 07:24:27', '2', '2019-01-30 07:34:08', '2'),
(44, 1548845744, NULL, NULL, 0, NULL, 6000, 6000, '2019-01-30 09:55:47', '2', '2019-01-30 09:56:07', '2'),
(45, 1548846243, '2019-01-30', 3, 0, '2019-01-28', 4000, 4000, '2019-01-30 10:04:07', '2', '2019-01-30 10:20:36', '2'),
(46, 1548846567, NULL, NULL, 0, NULL, NULL, NULL, '2019-01-30 10:09:30', '2', '2019-01-30 10:09:30', NULL),
(47, 1548846610, NULL, NULL, 0, NULL, 27300, 27300, '2019-01-30 10:10:14', '2', '2019-01-30 10:10:39', '2'),
(48, 1548847321, '2019-01-30', 201, 1, '2019-01-31', 0, 500000000, '2019-01-30 10:22:05', '2', '2019-01-30 10:26:17', '2');

-- --------------------------------------------------------

--
-- Table structure for table `lw_user`
--

CREATE TABLE `lw_user` (
  `id` int(13) UNSIGNED NOT NULL,
  `id_usergroup` int(13) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_superadmin` int(4) NOT NULL,
  `is_active` int(4) NOT NULL,
  `created_date` date NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `modified_date` date NOT NULL,
  `modified_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lw_user_group`
--

CREATE TABLE `lw_user_group` (
  `id` int(13) UNSIGNED NOT NULL,
  `usergorup` varchar(255) NOT NULL,
  `description` varchar(50) NOT NULL,
  `is_active` int(4) NOT NULL,
  `created_date` date NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `modified_date` date NOT NULL,
  `modified_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ms_additional_service`
--

CREATE TABLE `ms_additional_service` (
  `id` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `item` varchar(256) NOT NULL,
  `price` bigint(20) DEFAULT NULL,
  `description` text,
  `is_active` tinyint(4) NOT NULL COMMENT '0=inactive;1=active;2=deleted',
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(256) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_additional_service`
--

INSERT INTO `ms_additional_service` (`id`, `id_outlet`, `item`, `price`, `description`, `is_active`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 1, 'Parfurm A', 5111, 'Parfum A dengan aroma A', 1, 'SYSTEM', '2018-10-01 00:00:00', NULL, '2018-10-23 09:45:37'),
(2, 1, 'Parfurm B', 4000, 'Parfum B dengan aroma B', 1, 'SYSTEM', '2018-10-23 09:52:29', NULL, '2018-10-23 09:52:38'),
(3, 1, 'test12', 1231232, 'test description2', 2, '1', '2018-10-29 07:43:38', '12', '2018-10-29 08:51:16');

-- --------------------------------------------------------

--
-- Table structure for table `ms_coupon`
--

CREATE TABLE `ms_coupon` (
  `id` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL COMMENT 'nominal or percentage',
  `value` int(10) NOT NULL,
  `description` text NOT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `is_used` int(11) NOT NULL COMMENT '0=not used yet;1=already used',
  `is_active` int(11) NOT NULL COMMENT '0=inactive;1=active;2=deleted',
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(256) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ms_customer`
--

CREATE TABLE `ms_customer` (
  `id` int(11) NOT NULL,
  `id_mscustomer` varchar(50) DEFAULT NULL,
  `id_outlet` int(11) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `handphone` varchar(20) NOT NULL,
  `email` varchar(256) NOT NULL,
  `address` text NOT NULL,
  `provinsi` varchar(256) DEFAULT NULL,
  `kecamatan` varchar(256) DEFAULT NULL,
  `kelurahan` varchar(256) DEFAULT NULL,
  `kab_kota` varchar(256) DEFAULT NULL,
  `kodepos` varchar(10) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `reset_password` varchar(256) DEFAULT NULL,
  `link_verification` varchar(256) DEFAULT NULL,
  `is_membership` tinyint(4) NOT NULL,
  `is_active` tinyint(4) NOT NULL COMMENT '0=inactive;1=active;2=deleted',
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(256) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_customer`
--

INSERT INTO `ms_customer` (`id`, `id_mscustomer`, `id_outlet`, `fullname`, `gender`, `handphone`, `email`, `address`, `provinsi`, `kecamatan`, `kelurahan`, `kab_kota`, `kodepos`, `username`, `password`, `reset_password`, `link_verification`, `is_membership`, `is_active`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'CS0000001', 1, 'Cust 1 Outlet A', 'wanita', '085716044222', 'febi', 'Gramayuda', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, 0, 1, '', '2018-10-01 00:00:00', NULL, NULL),
(2, 'CS0000002', 1, 'Cust 2 Outlet A', 'wanita', '087880995535', 'susi_asik@yahoo.com', 'Blok M Square', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, 0, 1, '', '2018-10-01 00:00:00', NULL, NULL),
(3, 'CS0000001', 2, 'Cust 1 Outlet B', 'pria', '09898980898', 'joko_wow@yahoo.com', 'Pondok Indah', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, 0, 1, '', '2018-10-01 00:00:00', NULL, NULL),
(4, 'CS0000002', 2, 'Cust 2 Outlet B', 'pria', '08789898', 'sss', 'Pondok Gede', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, 0, 1, '', '2018-10-01 00:00:00', NULL, NULL),
(5, 'CS0000003', 2, 'Cust 3 Outlet B', 'pria', '09797907', 'khhnl', 'Pamulang', NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, 0, 0, '', '2018-10-01 00:00:00', NULL, NULL),
(6, 'CS0000001', 1, 'f', 'Man', '085748884448', 'fhebriantz@gmail.com', '<p>asdd</p>', '1', '1', '1', '1', '123412', 'superadmin', '123123123', NULL, NULL, 0, 0, 'admin', '2018-10-22 07:38:14', NULL, '2018-10-23 06:33:47'),
(7, 'CS0000001', 1, 'fakih', 'Man', '085748884448', 'adast@gmail.com', 'aceh', '2', '2', '2', '2', '123412', 'admin', 'c129b324aee662b04eccf68babba85851346dff9', NULL, NULL, 0, 0, 'admin', '2018-10-22 07:49:24', NULL, '2018-10-23 06:28:56'),
(8, 'CS1540302472', 1, 'Lutfi1234', 'Pria', '085748884448', 'lutfi@gmail.com', '<p>Bogor</p>', '1', '1', '11234', '2', '123412', 'fhebriantz1004', '12341234', NULL, NULL, 0, 1, 'admin', '2018-10-23 03:47:52', NULL, '2018-10-23 07:09:39'),
(9, 'CS1540315948', 1, 'Lutfi Febriantos', 'Pria', '085718841359', 'lutfi@gmail.com', '<p>Bogorsss</p>', 'Jawa Barat', 'Bogor Selatan', 'Ranggamekarssss', 'Bogor', '16133', 'fhebriantzs', 'c129b324aee662b04eccf68babba85851346dff9', NULL, NULL, 0, 1, 'admin', '2018-10-23 07:32:28', NULL, '2018-10-23 07:47:18'),
(11, NULL, 1, 'test1', 'pria', '08123123123', 'deby.natazha@gmail.com', 'jl. 123 xyz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '1', '2018-10-26 02:46:17', NULL, NULL),
(12, NULL, 1, 'test1', 'pria', '081231231233', 'deby.natazha@gmail.com', 'jl. 123 xyz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '1', '2018-10-26 07:01:57', NULL, NULL),
(13, NULL, 1, 'test1', 'pria', '0812312312', 'deby.natazha@gmail.com', 'jl. 123 xyz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '1', '2018-10-26 07:03:37', NULL, NULL),
(14, NULL, 1, 'test12', 'pria', '081231231232', 'deby.natazha@gmail.com', 'jl. 123 xyz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '1', '2018-10-26 07:09:23', NULL, NULL),
(15, NULL, 1, 'test1', 'pria', '081231231265', 'deby.natazha@gmail.com', 'jl. 123 xyz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '1', '2018-10-26 07:09:51', NULL, NULL),
(16, NULL, 1, 'test1', 'pria', '081231231265', 'deby.natazha@gmail.com', 'jl. 123 xyz', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '1', '2018-10-26 07:13:38', NULL, NULL),
(17, NULL, 1, 'test1', 'pria', '081231231265', 'deby.natazha@gmail.com', 'jl. 123 xyz', '', '', '', '', '', NULL, NULL, NULL, NULL, 0, 1, '1', '2018-10-26 07:27:42', NULL, NULL),
(18, NULL, 1, 'test12', 'wanita', '081111', 'deby1.natazha@gmail.com', 'jl.  xyz', '1', '2', '3', '4', '5', NULL, NULL, NULL, NULL, 1, 2, '1', '2018-10-26 07:28:00', '2', '2018-11-16 07:52:28'),
(19, NULL, 1, 'Yudhi', 'pria', '081231231265', 'deby.natazha@gmail.com', 'jl. 123 xyz', '', '', '', '', '', NULL, NULL, NULL, NULL, 0, 1, '1', '2018-11-15 02:54:36', NULL, NULL),
(20, NULL, 1, '', 'pria', '081231231265', 'deby.natazha@gmail.com', 'jl. 123 xyz', '', '', '', '', '', NULL, NULL, NULL, NULL, 0, 1, '1', '2018-11-15 03:45:47', NULL, NULL),
(21, NULL, 1, 'ryehdhd', '', 'pria', '5658638388', 'dhdhdhdhdjd', '', '', '', '', '', NULL, NULL, NULL, NULL, 1, 1, '1', '2018-11-15 10:34:38', NULL, NULL),
(22, NULL, 1, 'yudhi bowo', '', 'pria', '65591332', 'jalan masjid nurul hidyayah', '', '', '', '', '', NULL, NULL, NULL, NULL, 1, 1, '1', '2018-11-15 10:35:27', NULL, NULL),
(23, NULL, 1, 'oyoyo', '', 'pria', '8686098', 'fhfjfififidieie rjfjf', '', '', '', '', '', NULL, NULL, NULL, NULL, 1, 1, '1', '2018-11-15 10:39:26', NULL, NULL),
(24, NULL, 1, 'jam 541', '', 'pria', '86868', 'fffff', '', '', '', '', '', NULL, NULL, NULL, NULL, 1, 1, '1', '2018-11-15 10:41:45', NULL, NULL),
(25, NULL, 1, 'jangan ditest bro', '', 'pria', '068695', 'indidndifninfinfi', '', '', '', '', '', NULL, NULL, NULL, NULL, 1, 1, '1', '2018-11-15 10:44:35', NULL, NULL),
(26, NULL, 1, 'rff sae aaa', '', 'pria', 'pria', 'gsnti ', '', '', '', '', '', NULL, NULL, NULL, NULL, 1, 1, '1', '2018-11-15 10:51:55', '1', '2018-11-19 08:30:52'),
(27, NULL, 1, 'DIKANTOR', '', 'pria', '72323', 'asdasdasdasdasd', '', '', '', '', '', NULL, NULL, NULL, NULL, 1, 1, '1', '2018-11-16 09:23:46', NULL, NULL),
(28, NULL, 1, 'teyeydyh a', '', 'pria', 'pria', 'yyuyuuu yyyy', '', '', '', '', '', NULL, NULL, NULL, NULL, 1, 1, '1', '2018-11-19 08:31:32', '1', '2018-11-19 09:02:47'),
(29, NULL, 1, 'yyyyyyuuuuu', '', 'pria', '6808869888', 'gghhvvvgv', '', '', '', '', '', NULL, NULL, NULL, NULL, 1, 1, '1', '2018-11-19 08:32:21', NULL, NULL),
(30, NULL, 1, 'd', '', 'pria', '88', 'fgg\n', '', '', '', '', '', NULL, NULL, NULL, NULL, 1, 1, '1', '2018-11-19 09:03:06', NULL, NULL),
(31, NULL, 1, 'hddv', '', 'pria', '5665', 'f  rr', '', '', '', '', '', NULL, NULL, NULL, NULL, 1, 1, '1', '2018-11-19 09:03:49', NULL, NULL),
(32, NULL, 1, 'uuhvcf', '', 'pria', '88888', 'cffggttt', '', '', '', '', '', NULL, NULL, NULL, NULL, 1, 1, '1', '2018-11-19 09:06:19', NULL, NULL),
(33, NULL, 1, 'tui fff', '', 'pria', 'pria', 'ggg', '', '', '', '', '', NULL, NULL, NULL, NULL, 1, 1, '1', '2018-11-19 09:06:45', '1', '2018-11-19 09:16:20'),
(34, NULL, 1, 'hhfff', '', 'pria', '232656', '3y73737373', '', '', '', '', '', NULL, NULL, NULL, NULL, 1, 1, '1', '2018-11-19 09:14:22', NULL, NULL),
(35, NULL, 1, 'ttt', '', 'pria', '5588', 'vcvv', '', '', '', '', '', NULL, NULL, NULL, NULL, 1, 1, '1', '2018-11-19 09:17:58', NULL, NULL),
(36, NULL, 1, 'rrr', '', 'pria', '555', 'frtt', '', '', '', '', '', NULL, NULL, NULL, NULL, 1, 1, '1', '2018-11-19 09:20:49', NULL, NULL),
(37, NULL, 1, 'test 234', '', 'pria', '89850', 'xhxhdgdvd', '', '', '', '', '', NULL, NULL, NULL, NULL, 1, 1, '1', '2018-11-19 09:23:54', NULL, NULL),
(38, NULL, 1, '2333', '', 'pria', '5555', 'fffff', '', '', '', '', '', NULL, NULL, NULL, NULL, 1, 1, '1', '2018-11-19 09:27:27', NULL, NULL),
(39, NULL, 1, 'test1246 6677', '', 'pria', 'pria', 'jl. 123 xyz', '', '', '', '', '', NULL, NULL, NULL, NULL, 1, 1, '1', '2018-11-19 09:34:18', '1', '2018-11-19 09:59:10'),
(40, NULL, 1, 'test78', 'pria', '081231231265', 'deby.natazha@gmail.com', 'jl. 123 xyz', '', '', '', '', '', NULL, NULL, NULL, NULL, 0, 1, '1', '2018-11-19 09:40:34', NULL, NULL),
(41, NULL, 1, ' test db 191118 A', 'pria', '081231231265', 'deby.natazha@gmail.com', 'jl. 123 xyz', '', '', '', '', '', NULL, NULL, NULL, NULL, 0, 1, '1', '2018-11-19 12:41:06', NULL, NULL),
(42, NULL, 1, ' test db 191118 B', 'pria', '081231231265', 'deby.natazha@gmail.com', 'jl. 123 xyz', '', '', '', '', '', NULL, NULL, NULL, NULL, 0, 1, '1', '2018-11-19 12:42:00', NULL, NULL),
(43, NULL, 1, ' test db 191118 ', '', 'pria', 'pria', 'jl. 123 xyz', '', '', '', '', '', NULL, NULL, NULL, NULL, 1, 1, '1', '2018-11-19 12:50:31', '1', '2018-11-19 15:51:12'),
(44, NULL, 1, '6555444 obe', '', 'pria', 'pria', 'vtttgggg', '', '', '', '', '', NULL, NULL, NULL, NULL, 1, 1, '1', '2018-11-19 15:51:25', '1', '2018-11-20 04:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `ms_laundry_service`
--

CREATE TABLE `ms_laundry_service` (
  `id` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `item` varchar(256) NOT NULL,
  `type` varchar(10) NOT NULL COMMENT 'satuan or kiloan',
  `description` varchar(256) DEFAULT NULL,
  `price` bigint(20) NOT NULL COMMENT 'price laundry',
  `price_dryclean` bigint(20) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL COMMENT '0=inactive;1=active;2=deleted',
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(256) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_laundry_service`
--

INSERT INTO `ms_laundry_service` (`id`, `id_outlet`, `item`, `type`, `description`, `price`, `price_dryclean`, `is_active`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 1, 'CUCI KILOAN', 'kiloan', 'dengan pewangi', 5000, 91000, 1, 'SYSTEM', '2018-10-10 00:00:00', '2', '2018-10-25 03:55:29'),
(2, 1, 'SETRIKA', 'all', 'ok', 7000, 0, 1, 'SYSTEM', '2018-10-10 00:00:00', NULL, NULL),
(3, 1, 'CUCI', 'all', 'ok', 5000, 0, 0, 'SYSTEM', '2018-10-10 00:00:00', NULL, '2018-10-25 04:02:33'),
(4, 1, 'SETRIKA DAN CUCI', 'all', 'ok', 10000, 0, 1, 'SYSTEM', '2018-10-10 00:00:00', NULL, NULL),
(5, 1, 'JAKET', 'satuan', 'ok', 10000, 0, 1, 'SYSTEM', '2018-10-10 00:00:00', NULL, NULL),
(6, 1, 'KAOS', 'satuan', 'ok', 10000, 0, 1, 'SYSTEM', '2018-10-10 00:00:00', NULL, NULL),
(7, 1, 'CELANA JEANS', 'satuan', 'ok', 10000, 0, 1, 'SYSTEM', '2018-10-10 00:00:00', NULL, NULL),
(8, 1, 'CELANA BAHAN', 'satuan', 'ok', 10000, 0, 1, 'SYSTEM', '2018-10-10 00:00:00', NULL, NULL),
(9, 1, 'KEMEJA', 'satuan', 'ok', 10000, 0, 1, 'SYSTEM', '2018-10-10 00:00:00', NULL, NULL),
(10, 1, 'JAS', 'satuan', 'ok', 10000, 20000, 1, 'SYSTEM', '2018-10-10 00:00:00', NULL, NULL),
(11, 1, 'Kilat Karpet', 'satuan', '<p>ok</p>', 10000, 20000, 1, '2', '2018-10-25 04:02:02', NULL, '2018-10-25 04:02:02'),
(12, 1, 'Cuci', 'satuan', '<p>ok</p>', 5000, 0, 1, '2', '2018-10-25 04:03:32', NULL, '2018-10-25 04:03:32'),
(13, 1, 'test12', 'satuan', 'test description2', 1231232, 4564562, 2, '1', '2018-10-29 07:08:31', '1', '2018-10-29 08:48:21');

-- --------------------------------------------------------

--
-- Table structure for table `ms_outlet`
--

CREATE TABLE `ms_outlet` (
  `id` int(11) NOT NULL,
  `id_msoutlet` varchar(50) NOT NULL,
  `id_headoffice` int(11) DEFAULT NULL,
  `outlet_name` varchar(256) NOT NULL,
  `address` text,
  `phone_number` varchar(20) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `deposit_nominal` bigint(20) DEFAULT NULL,
  `is_headoffice` tinyint(4) DEFAULT NULL,
  `is_branch` tinyint(4) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL COMMENT '0=inactive;1=active;2=deleted',
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(256) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_outlet`
--

INSERT INTO `ms_outlet` (`id`, `id_msoutlet`, `id_headoffice`, `outlet_name`, `address`, `phone_number`, `email`, `deposit_nominal`, `is_headoffice`, `is_branch`, `is_active`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'OT0000001', NULL, 'OUTLET TEST A', 'Address Test A', '123123123', 'outlet.a@email.com', NULL, NULL, NULL, 1, 'SYSTEM', '2018-10-01 00:00:00', NULL, NULL),
(2, 'OT0000002', NULL, 'OUTLET TEST B', 'Address Test B', '987987987', 'outlet.b@email.com', NULL, NULL, NULL, 1, 'SYSTEM', '2018-10-01 00:00:00', NULL, NULL),
(3, 'OT1540319853', NULL, 'Syari Laundrya', '<p>Blok M</p>', '0251234561', 'lutfi@gmail.coms', NULL, NULL, NULL, 1, 'admin', '2018-10-23 08:37:33', NULL, '2018-10-23 08:46:18');

-- --------------------------------------------------------

--
-- Table structure for table `ms_outlet_user`
--

CREATE TABLE `ms_outlet_user` (
  `id` int(11) NOT NULL,
  `id_msoutlet_user` varchar(50) DEFAULT NULL,
  `id_user_group` int(11) DEFAULT NULL,
  `id_outlet` int(11) DEFAULT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` text,
  `gender` varchar(15) DEFAULT NULL,
  `handphone` varchar(20) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `verification_code` text,
  `is_verified` tinyint(4) NOT NULL,
  `is_superadmin` tinyint(4) NOT NULL,
  `is_active` tinyint(4) NOT NULL COMMENT '0=inactive;1=active;2=deleted',
  `last_login` datetime DEFAULT NULL,
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(256) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_outlet_user`
--

INSERT INTO `ms_outlet_user` (`id`, `id_msoutlet_user`, `id_user_group`, `id_outlet`, `fullname`, `address`, `gender`, `handphone`, `email`, `username`, `password`, `verification_code`, `is_verified`, `is_superadmin`, `is_active`, `last_login`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'EM0000001', 2, 1, 'Staff Outlet A1', 'Jalan buntu', 'pria', '08888999221', 'deby.natazha@gmail.com', 'admin_a1', '8cb2237d0679ca88db6464eac60da96345513964', NULL, 0, 0, 1, NULL, 'SYSTEM', '2018-10-09 00:00:00', '2', '2018-10-25 09:48:24'),
(2, 'EM0000002', 2, 1, 'Staff Outlet A2', 'Pondok Indah', 'pria', '909080123123', 'deby.natazha@gmail.com', 'admin_a2', '8cb2237d0679ca88db6464eac60da96345513964', NULL, 0, 0, 1, NULL, 'SYSTEM', '2018-10-09 00:00:00', '2', '2018-10-25 09:54:07'),
(3, 'EM0000001', 2, 2, 'Staff Outlet B1', 'Pondok Indah', 'wanita', '909080', 'deby.natazha@gmail.com', 'admin_b1', '8cb2237d0679ca88db6464eac60da96345513964', NULL, 0, 0, 1, NULL, 'SYSTEM', '2018-10-09 00:00:00', NULL, NULL),
(4, 'EM0000002', 2, 2, 'Staff Outlet B2', 'Pondok Indah', 'wanita', '123412341234', 'deby.natazha@gmail.com', 'admin_b2', '8cb2237d0679ca88db6464eac60da96345513964', NULL, 0, 0, 1, NULL, 'SYSTEM', '2018-10-09 00:00:00', '2', '2018-10-25 09:55:48'),
(9, '2', 2, 1, 'test1', '2', '2', NULL, 'deby.natazha@gmail.com', 'admin_a3', '3da541559918a808c2402bba5012f6c60b27661c', '11ba74cea24065c13017b6a74045bb55', 0, 1, 0, NULL, 'SYSTEM', '2018-10-18 04:16:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ms_package`
--

CREATE TABLE `ms_package` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `price` bigint(20) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(256) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_package`
--

INSERT INTO `ms_package` (`id`, `title`, `description`, `type`, `price`, `is_active`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'PACKAGE A', 'Berlangganan Sistem 1 Tahun<br/>Mobile Application & Website Application<br/>FREE. Laundry Marketplace', 'perbulan', 130000, 1, 'SYSTEM', '2018-10-10 00:00:00', NULL, NULL),
(2, 'PACKAGE B', 'Berlangganan Sistem 1 Tahun<br/>Mobile Application & Website Application<br/>Bluetooth Thermal Mini Printer<br/>FREE. Laundry Marketplace', 'perbulan', 165000, 1, 'SYSTEM', '2018-10-10 00:00:00', NULL, NULL),
(3, 'Paket C', '<p>Setahun diskon 50%</p>', 'pertahun', 2000000, 1, '2', '2018-10-24 09:52:12', '2', '2018-10-24 09:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `ms_promo`
--

CREATE TABLE `ms_promo` (
  `id` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `promo_code` varchar(50) NOT NULL,
  `promo_name` varchar(256) NOT NULL,
  `nominal` bigint(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` text,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `is_active` int(11) NOT NULL,
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(256) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_promo`
--

INSERT INTO `ms_promo` (`id`, `id_outlet`, `promo_code`, `promo_name`, `nominal`, `type`, `description`, `start_date`, `end_date`, `is_active`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 1, 'Tanpa Promo', 'Tanpa Promo', 0, 'potongan_harga', '<p>tes</p>', '2018-10-09 00:10:00', '2018-10-09 23:10:00', 1, 'SYSTEM', '2018-10-10 00:00:00', '2', '2018-10-26 08:52:39'),
(2, 1, 'LEBARAN18', 'Promo Hari Lebaran 2018', 50, 'diskon', NULL, '2018-10-10 00:00:00', '2018-10-10 00:00:00', 1, 'SYSTEM', '2018-10-10 00:00:00', 'SYSTEM', '2018-10-10 00:00:00'),
(3, 1, 'LIBUR25', 'LIBUR DISKON 25 %', 25, 'diskon', '<p>OK</p>', '2018-10-26 00:10:00', '2018-11-08 23:11:00', 1, '2', '2018-10-26 09:54:57', NULL, '2018-10-26 09:54:57');

-- --------------------------------------------------------

--
-- Table structure for table `ms_user_group`
--

CREATE TABLE `ms_user_group` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` text,
  `is_active` tinyint(4) DEFAULT NULL,
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(256) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_user_group`
--

INSERT INTO `ms_user_group` (`id`, `title`, `description`, `is_active`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'Owner', 'Owner of laundry outlet', 1, 'SYSTEM', '2018-10-14 00:00:00', '2', '2018-10-25 07:39:50'),
(2, 'Staff', 'Staff works in laundry outlet', 1, 'SYSTEM', '2018-10-14 00:00:00', '2', '2018-10-25 07:39:42'),
(3, 'Superadmin', '<p>All Akses</p>', 0, '2', '2018-10-25 07:47:36', NULL, '2018-10-25 07:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `ms_user_mgmt`
--

CREATE TABLE `ms_user_mgmt` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `is_superadmin` tinyint(4) NOT NULL,
  `is_active` tinyint(4) NOT NULL COMMENT '0=inactive;1=active;2=deleted',
  `last_login` datetime DEFAULT NULL,
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(256) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_user_mgmt`
--

INSERT INTO `ms_user_mgmt` (`id`, `fullname`, `username`, `password`, `is_superadmin`, `is_active`, `last_login`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'MIA000001', 'admin_a1', '8cb2237d0679ca88db6464eac60da96345513964', 0, 1, NULL, 'SYSTEM', '2018-10-01 00:00:00', NULL, NULL),
(2, 'MIA000002', 'admin', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 0, 1, NULL, 'SYSTEM', '2018-10-01 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_log`
--

CREATE TABLE `system_log` (
  `id` int(11) NOT NULL,
  `platform` varchar(50) DEFAULT NULL,
  `value` text,
  `module` text,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tr_laundry`
--

CREATE TABLE `tr_laundry` (
  `id` int(11) NOT NULL,
  `id_trlaundry` varchar(50) DEFAULT NULL,
  `id_outlet` int(11) NOT NULL,
  `employee_name` varchar(256) NOT NULL,
  `cust_fullname` varchar(256) DEFAULT NULL,
  `cust_gender` varchar(15) DEFAULT NULL,
  `cust_handphone` varchar(20) DEFAULT NULL,
  `cust_address` text,
  `cust_provinsi` varchar(256) DEFAULT NULL,
  `cust_kecamatan` varchar(256) DEFAULT NULL,
  `cust_kelurahan` varchar(256) DEFAULT NULL,
  `cust_kabkota` varchar(256) DEFAULT NULL,
  `cust_kodepos` varchar(10) DEFAULT NULL,
  `addservice_item` varchar(256) DEFAULT NULL,
  `addservice_price` bigint(20) DEFAULT NULL,
  `date_in` datetime NOT NULL COMMENT 'laundry in',
  `date_start` datetime DEFAULT NULL COMMENT 'beginning of laundry process',
  `date_end` datetime DEFAULT NULL COMMENT 'laundry process is finished',
  `date_end_estimated` datetime DEFAULT NULL COMMENT 'Estimated date while transaction',
  `date_out` datetime NOT NULL COMMENT 'laundry out',
  `date_pickup` datetime DEFAULT NULL,
  `date_delivery` datetime DEFAULT NULL,
  `promo_code` varchar(50) DEFAULT NULL,
  `promo_name` varchar(256) DEFAULT NULL,
  `promo_nominal` bigint(20) DEFAULT NULL,
  `promo_type` varchar(50) DEFAULT NULL,
  `total_payment` bigint(20) DEFAULT NULL,
  `qty_satuan` int(11) DEFAULT NULL,
  `qty_kiloan` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'belum_diambil',
  `is_express` tinyint(4) NOT NULL,
  `is_pickup` tinyint(4) NOT NULL,
  `is_delivery` tinyint(4) NOT NULL,
  `is_active` tinyint(4) NOT NULL COMMENT '0=inactive;1=active;2=deleted',
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(256) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_laundry`
--

INSERT INTO `tr_laundry` (`id`, `id_trlaundry`, `id_outlet`, `employee_name`, `cust_fullname`, `cust_gender`, `cust_handphone`, `cust_address`, `cust_provinsi`, `cust_kecamatan`, `cust_kelurahan`, `cust_kabkota`, `cust_kodepos`, `addservice_item`, `addservice_price`, `date_in`, `date_start`, `date_end`, `date_end_estimated`, `date_out`, `date_pickup`, `date_delivery`, `promo_code`, `promo_name`, `promo_nominal`, `promo_type`, `total_payment`, `qty_satuan`, `qty_kiloan`, `status`, `is_express`, `is_pickup`, `is_delivery`, `is_active`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'TR0000001', 1, 'Staff Outlet A1', 'Udin', 'Pria', '085718841359', 'Samping Indomaret', 'Jawa Barat', 'Bogor Selatan', 'Ranggamekar', 'Bogor', '16132', 'Parfum', 2500, '2018-10-09 00:00:00', '2018-10-09 00:00:00', '2018-10-09 00:00:00', '2018-12-30 20:00:00', '2018-10-16 00:00:00', NULL, NULL, 'LEBARAN50', 'Diskon Lebaran 50%', 50, 'diskon', 50000, 2, 5, 'dicuci', 1, 1, 1, 1, 'Lutfi', '2018-12-30 00:00:00', '1', '2018-11-26 09:22:43'),
(2, 'TR0000002', 1, 'Staff Outlet A2', 'Sanusi', 'Pria', '085718841359', 'Samping Indomaret', 'Jawa Barat', 'Bogor Selatan', 'Ranggamekar', 'Bogor', '16132', '-', 0, '2018-10-09 00:00:00', '2018-10-09 00:00:00', '2018-10-09 00:00:00', '2018-10-09 00:00:00', '2018-10-16 00:00:00', NULL, NULL, 'POTONG7RB', 'Potongan 7000', 7000, 'potongan_harga', 20000, 0, 4, 'selesai', 0, 0, 0, 1, 'Lutfi', '2018-09-18 00:00:00', '1', '2018-11-26 09:22:43'),
(3, 'TR0000003', 1, 'Staff Outlet A2', 'Logam', 'Pria', '085718841359', 'Samping Indomaret', 'Jawa Barat', 'Bogor Selatan', 'Ranggamekar', 'Bogor', '16132', NULL, 0, '2018-10-09 00:00:00', '2018-09-09 00:00:00', '2018-10-01 00:00:00', '2018-10-20 00:00:00', '2018-10-16 00:00:00', '2018-11-30 17:00:00', NULL, 'POTONG7RB', 'Potongan 7000', 7000, 'potongan_harga', 7000, 0, 3, 'baru', 0, 1, 0, 1, 'Lutfi', '2018-11-30 17:00:00', NULL, NULL),
(4, 'TP0000004', 1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-09 00:00:00', NULL, NULL, '2018-12-01 10:00:00', '2018-10-16 00:00:00', NULL, '2018-10-16 17:00:00', 'LEBARAN50', 'Diskon Lebaran 50%', 50, 'diskon', 7000, 0, NULL, 'belum_diambil', 0, 0, 1, 1, '', '2018-09-18 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tr_laundry_history`
--

CREATE TABLE `tr_laundry_history` (
  `id` int(11) NOT NULL,
  `id_trlaundry` varchar(50) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `employee_name` varchar(256) NOT NULL,
  `cust_fullname` varchar(256) DEFAULT NULL,
  `cust_gender` varchar(15) DEFAULT NULL,
  `cust_handphone` varchar(20) DEFAULT NULL,
  `cust_address` text,
  `cust_provinsi` varchar(256) DEFAULT NULL,
  `cust_kecamatan` varchar(256) DEFAULT NULL,
  `cust_kelurahan` varchar(256) DEFAULT NULL,
  `cust_kabkota` varchar(256) DEFAULT NULL,
  `cust_kodepos` varchar(10) DEFAULT NULL,
  `addservice_item` varchar(256) DEFAULT NULL,
  `addservice_price` bigint(20) DEFAULT NULL,
  `date_in` datetime NOT NULL COMMENT 'laundry in',
  `date_start` datetime DEFAULT NULL COMMENT 'beginning of laundry process',
  `date_end` datetime DEFAULT NULL COMMENT 'laundry process is finished',
  `date_end_estimated` datetime DEFAULT NULL COMMENT 'Estimated date while transaction',
  `date_out` datetime NOT NULL COMMENT 'laundry out',
  `id_promo` int(11) DEFAULT NULL,
  `total_payment` bigint(20) NOT NULL,
  `qty_satuan` int(11) DEFAULT NULL,
  `qty_kiloan` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'belum_diambil',
  `is_express` tinyint(4) NOT NULL,
  `is_pickup` tinyint(4) NOT NULL,
  `is_delivery` tinyint(4) NOT NULL,
  `is_active` tinyint(4) NOT NULL COMMENT '0=inactive;1=active;2=deleted',
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(256) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_laundry_history`
--

INSERT INTO `tr_laundry_history` (`id`, `id_trlaundry`, `id_outlet`, `employee_name`, `cust_fullname`, `cust_gender`, `cust_handphone`, `cust_address`, `cust_provinsi`, `cust_kecamatan`, `cust_kelurahan`, `cust_kabkota`, `cust_kodepos`, `addservice_item`, `addservice_price`, `date_in`, `date_start`, `date_end`, `date_end_estimated`, `date_out`, `id_promo`, `total_payment`, `qty_satuan`, `qty_kiloan`, `status`, `is_express`, `is_pickup`, `is_delivery`, `is_active`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(1, 'TR0000001', 1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-09 00:00:00', NULL, NULL, NULL, '2018-10-16 00:00:00', 0, 0, 0, NULL, 'belum_diambil', 0, 1, 0, 1, '', '2018-09-18 00:00:00', NULL, NULL),
(2, 'TR0000002', 1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-09 00:00:00', NULL, NULL, NULL, '2018-10-16 00:00:00', 0, 0, 0, NULL, 'belum_diambil', 0, 0, 1, 1, '', '2018-09-18 00:00:00', NULL, NULL),
(3, 'TR0000003', 1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-09 00:00:00', NULL, NULL, NULL, '2018-10-16 00:00:00', 0, 0, 0, NULL, 'belum_diambil', 0, 1, 0, 1, '', '2018-09-18 00:00:00', NULL, NULL),
(4, 'TR0000004', 1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-10-09 00:00:00', NULL, NULL, NULL, '2018-10-16 00:00:00', 0, 0, 0, NULL, 'belum_diambil', 0, 0, 1, 1, '', '2018-09-18 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tr_user_deposit`
--

CREATE TABLE `tr_user_deposit` (
  `id` int(11) NOT NULL,
  `id_truser_deposit` varchar(50) DEFAULT NULL,
  `id_outlet` int(11) NOT NULL,
  `nominal` bigint(20) DEFAULT NULL,
  `payment_no_acc` varchar(50) DEFAULT NULL,
  `payment_name` varchar(256) DEFAULT NULL,
  `payment_bank` varchar(50) DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(256) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tr_user_package`
--

CREATE TABLE `tr_user_package` (
  `id` int(11) NOT NULL,
  `id_truser_package` varchar(50) DEFAULT NULL,
  `id_outlet_user` int(11) NOT NULL,
  `id_package` int(11) DEFAULT NULL,
  `reserve_date` datetime DEFAULT NULL,
  `payment_no_acc` varchar(50) DEFAULT NULL,
  `payment_name` varchar(256) DEFAULT NULL,
  `payment_bank` varchar(50) DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `is_trial` tinyint(4) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(256) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `id` int(11) NOT NULL,
  `description` text,
  `item` varchar(256) DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL,
  `created_by` varchar(256) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`id`, `description`, `item`, `ip_address`, `created_by`, `created_date`) VALUES
(1, 'User Login', '', '172.31.25.148', '1', '2018-10-16 08:15:08'),
(2, 'Create New Account', '', '172.31.25.148', '6', '2018-10-16 08:15:17'),
(3, 'Email verification has been sent', 'email address: deby.natazha@gmail.com', '172.31.25.148', '6', '2018-10-16 08:15:19'),
(4, 'Create New Account', '', '172.31.25.148', '7', '2018-10-16 10:10:44'),
(5, 'Email verification has been sent', 'email address: deby.natazha@gmail.com', '172.31.25.148', '7', '2018-10-16 10:10:47'),
(8, 'Verification by email', '', '172.31.25.148', '7', '2018-10-17 07:56:07'),
(9, 'Create New Account', '', '172.31.25.148', '8', '2018-10-18 03:16:00'),
(10, 'Email verification has been sent', 'email address: deby.natazha@gmail.com', '172.31.25.148', '8', '2018-10-18 03:16:02'),
(11, 'Verification by email', '', '172.31.25.148', '8', '2018-10-18 03:16:33'),
(12, 'Create New Account', '', '172.31.25.148', '9', '2018-10-18 04:16:13'),
(13, 'Email verification has been sent', 'email address: deby.natazha@gmail.com', '172.31.25.148', '9', '2018-10-18 04:16:16'),
(14, 'User Login', '', '172.31.25.148', '1', '2018-10-18 06:41:09'),
(15, 'Create New Customer Data', '10', '172.31.25.148', '1', '2018-10-26 02:44:35'),
(16, 'Create New Customer Data', '11', '172.31.25.148', '1', '2018-10-26 02:46:17'),
(17, 'Create New Customer Data', 'id_customer: 13', '172.31.25.148', '1', '2018-10-26 07:03:37'),
(18, 'Create New Customer Data', 'id_customer: 14', '172.31.25.148', '1', '2018-10-26 07:09:23'),
(19, 'Create New Customer Data', 'id_customer: 15', '172.31.25.148', '1', '2018-10-26 07:09:51'),
(20, 'Create New Customer Data', 'id_customer: 16', '172.31.25.148', '1', '2018-10-26 07:13:38'),
(21, 'Create New Customer Data', 'ID Customer: 17', '172.31.25.148', '1', '2018-10-26 07:27:42'),
(22, 'Create New Customer Data', 'ID Customer: 18', '172.31.25.148', '1', '2018-10-26 07:28:00'),
(23, 'Update Customer Data', 'ID Customer: 0', '172.31.25.148', '2', '2018-10-26 07:52:30'),
(24, 'Update Customer Data', 'ID Customer: 0', '172.31.25.148', '2', '2018-10-26 07:53:08'),
(25, 'Create New Item Service Laundry', 'ID Item Service: 13', '172.31.25.148', '1', '2018-10-29 07:08:31'),
(26, 'Update Item Service Laundry Data', 'ID Customer: 13', '172.31.25.148', '1', '2018-10-29 07:23:17'),
(27, 'Update Item Service Laundry Data', 'ID Customer: 13', '172.31.25.148', '1', '2018-10-29 07:23:29'),
(28, 'Create New Additional Service Laundry', 'ID Additional Service: 3', '172.31.25.148', '1', '2018-10-29 07:43:38'),
(29, 'Update Additional Service Laundry Data', 'ID Additional Service: 3', '172.31.25.148', '12', '2018-10-29 07:56:23'),
(30, 'Delete Item Service Laundry', 'ID Item Service: 13', '172.31.25.148', '1', '2018-10-29 08:48:21'),
(31, 'Delete Additional Service Laundry', 'ID Additional Service: 3', '172.31.25.148', '12', '2018-10-29 08:51:16'),
(32, 'Create New Promo', 'ID Promo: 5', '172.31.25.148', '1', '2018-10-30 06:17:31'),
(33, 'Create New Promo', 'ID Promo: 6', '172.31.25.148', '1', '2018-10-30 06:18:30'),
(34, 'Update Promo Data', 'ID Promo: 5', '172.31.25.148', '1', '2018-10-30 06:21:38'),
(35, 'Delete Promo', 'ID Promo: 6', '172.31.25.148', '1', '2018-10-30 06:37:29'),
(36, 'Delete Customer', 'ID Customer: 18', '172.31.25.148', '1', '2018-10-30 07:19:36'),
(37, 'User Login', '', '172.31.25.148', '2', '2018-11-02 06:57:56'),
(39, 'Add New Transaction', 'ID Transaction: 27', '172.31.25.148', '1', '2018-11-07 04:09:08'),
(40, 'Delete Transaction', 'ID Transaction: 27', '172.31.25.148', '1', '2018-11-07 09:25:31'),
(41, 'Upload Picture', 'ID Transaction: 1', '172.31.25.148', '1', '2018-11-14 09:33:47'),
(42, 'Upload Picture', 'ID Transaction: 1', '172.31.25.148', '1', '2018-11-14 09:35:26'),
(43, 'Upload Picture', 'ID Transaction: 1', '172.31.25.148', '1', '2018-11-14 09:36:28'),
(44, 'Create New Customer Data', 'ID Customer: 19', '172.31.25.148', '1', '2018-11-15 02:54:36'),
(45, 'Create New Customer Data', 'ID Customer: 20', '172.31.25.148', '1', '2018-11-15 03:45:47'),
(46, 'Upload Picture', 'ID Transaction: 1', '172.31.25.148', '1', '2018-11-15 09:45:08'),
(47, 'Create New Customer Data', 'ID Customer: 21', '172.31.25.148', '1', '2018-11-15 10:34:38'),
(48, 'Create New Customer Data', 'ID Customer: 22', '172.31.25.148', '1', '2018-11-15 10:35:27'),
(49, 'Create New Customer Data', 'ID Customer: 23', '172.31.25.148', '1', '2018-11-15 10:39:26'),
(50, 'Create New Customer Data', 'ID Customer: 24', '172.31.25.148', '1', '2018-11-15 10:41:45'),
(51, 'Create New Customer Data', 'ID Customer: 25', '172.31.25.148', '1', '2018-11-15 10:44:35'),
(52, 'Create New Customer Data', 'ID Customer: 26', '172.31.25.148', '1', '2018-11-15 10:51:55'),
(53, 'Update Customer Data', 'ID Customer: 0', '172.31.25.148', '2', '2018-11-15 15:33:17'),
(54, 'Update Customer Data', 'ID Customer: 0', '172.31.25.148', '2', '2018-11-15 15:34:05'),
(55, 'Update Customer Data', 'ID Customer: 0', '172.31.25.148', '2', '2018-11-16 01:47:11'),
(56, 'Update Customer Data', 'ID Customer: 18', '172.31.25.148', '2', '2018-11-16 01:48:32'),
(57, 'Update Customer Data', 'ID Customer: 18', '172.31.25.148', '2', '2018-11-16 07:51:51'),
(58, 'Update Customer Data', 'ID Customer: 18', '172.31.25.148', '2', '2018-11-16 07:52:28'),
(59, 'Create New Customer Data', 'ID Customer: 27', '172.31.25.148', '1', '2018-11-16 09:23:46'),
(60, 'Update Customer Data', 'ID Customer: 26', '172.31.25.148', '1', '2018-11-19 07:46:20'),
(61, 'Update Customer Data', 'ID Customer: 26', '172.31.25.148', '1', '2018-11-19 07:47:25'),
(62, 'Update Customer Data', 'ID Customer: 26', '172.31.25.148', '1', '2018-11-19 07:50:03'),
(63, 'Update Customer Data', 'ID Customer: 26', '172.31.25.148', '1', '2018-11-19 07:51:07'),
(64, 'Update Customer Data', 'ID Customer: 26', '172.31.25.148', '1', '2018-11-19 08:30:41'),
(65, 'Update Customer Data', 'ID Customer: 26', '172.31.25.148', '1', '2018-11-19 08:30:52'),
(66, 'Create New Customer Data', 'ID Customer: 28', '172.31.25.148', '1', '2018-11-19 08:31:32'),
(67, 'Create New Customer Data', 'ID Customer: 29', '172.31.25.148', '1', '2018-11-19 08:32:21'),
(68, 'Update Customer Data', 'ID Customer: 28', '172.31.25.148', '1', '2018-11-19 08:33:04'),
(69, 'Update Customer Data', 'ID Customer: 28', '172.31.25.148', '1', '2018-11-19 08:35:44'),
(70, 'Update Customer Data', 'ID Customer: 28', '172.31.25.148', '1', '2018-11-19 09:02:47'),
(71, 'Create New Customer Data', 'ID Customer: 30', '172.31.25.148', '1', '2018-11-19 09:03:06'),
(72, 'Create New Customer Data', 'ID Customer: 31', '172.31.25.148', '1', '2018-11-19 09:03:49'),
(73, 'Create New Customer Data', 'ID Customer: 32', '172.31.25.148', '1', '2018-11-19 09:06:19'),
(74, 'Create New Customer Data', 'ID Customer: 33', '172.31.25.148', '1', '2018-11-19 09:06:45'),
(75, 'Create New Customer Data', 'ID Customer: 34', '172.31.25.148', '1', '2018-11-19 09:14:22'),
(76, 'Update Customer Data', 'ID Customer: 33', '172.31.25.148', '1', '2018-11-19 09:16:20'),
(77, 'Create New Customer Data', 'ID Customer: 35', '172.31.25.148', '1', '2018-11-19 09:17:58'),
(78, 'Create New Customer Data', 'ID Customer: 36', '172.31.25.148', '1', '2018-11-19 09:20:49'),
(79, 'Create New Customer Data', 'ID Customer: 37', '172.31.25.148', '1', '2018-11-19 09:23:54'),
(80, 'Create New Customer Data', 'ID Customer: 38', '172.31.25.148', '1', '2018-11-19 09:27:27'),
(81, 'Create New Customer Data', 'ID Customer: 39', '172.31.25.148', '1', '2018-11-19 09:34:18'),
(82, 'Create New Customer Data', 'ID Customer: 40', '172.31.25.148', '1', '2018-11-19 09:40:34'),
(83, 'Update Customer Data', 'ID Customer: 39', '172.31.25.148', '1', '2018-11-19 09:47:21'),
(84, 'Update Customer Data', 'ID Customer: 39', '172.31.25.148', '1', '2018-11-19 09:51:18'),
(85, 'Update Customer Data', 'ID Customer: 39', '172.31.25.148', '1', '2018-11-19 09:53:05'),
(86, 'Update Customer Data', 'ID Customer: 39', '172.31.25.148', '1', '2018-11-19 09:57:50'),
(87, 'Update Customer Data', 'ID Customer: 39', '172.31.25.148', '1', '2018-11-19 09:59:10'),
(88, 'Create New Customer Data', 'ID Customer: 41', '172.31.25.148', '1', '2018-11-19 12:41:06'),
(89, 'Create New Customer Data', 'ID Customer: 42', '172.31.25.148', '1', '2018-11-19 12:42:00'),
(90, 'Create New Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 12:50:31'),
(91, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 13:05:52'),
(92, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 13:09:28'),
(93, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 13:24:12'),
(94, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 13:25:13'),
(95, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 14:04:03'),
(96, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 14:11:36'),
(97, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 14:14:23'),
(98, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 14:17:35'),
(99, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 14:21:12'),
(100, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 14:27:36'),
(101, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 14:31:43'),
(102, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 14:32:00'),
(103, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 14:35:15'),
(104, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 14:38:01'),
(105, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 14:40:24'),
(106, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 14:42:25'),
(107, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 14:51:26'),
(108, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 14:52:39'),
(109, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 14:54:56'),
(110, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 14:57:15'),
(111, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 14:59:09'),
(112, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 15:01:01'),
(113, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 15:03:24'),
(114, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 15:05:49'),
(115, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 15:06:35'),
(116, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 15:11:10'),
(117, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 15:11:56'),
(118, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 15:38:04'),
(119, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 15:44:36'),
(120, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 15:45:58'),
(121, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 15:47:15'),
(122, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 15:48:11'),
(123, 'Update Customer Data', 'ID Customer: 43', '172.31.25.148', '1', '2018-11-19 15:51:12'),
(124, 'Create New Customer Data', 'ID Customer: 44', '172.31.25.148', '1', '2018-11-19 15:51:25'),
(125, 'Update Customer Data', 'ID Customer: 44', '172.31.25.148', '1', '2018-11-20 01:20:01'),
(126, 'Update Customer Data', 'ID Customer: 44', '172.31.25.148', '1', '2018-11-20 01:25:02'),
(127, 'Update Customer Data', 'ID Customer: 44', '172.31.25.148', '1', '2018-11-20 01:48:30'),
(128, 'Update Customer Data', 'ID Customer: 44', '172.31.25.148', '1', '2018-11-20 04:12:00'),
(129, 'Create New Promo', 'ID Promo: 13', '172.31.25.148', '1', '2018-11-26 04:09:37'),
(134, 'Change Transaction\'s Task', 'ID Transaction: 1, ID Task: 17, Status: dicuci', '172.31.25.148', '1', '2018-11-26 09:22:43'),
(135, 'Change Transaction\'s Task', 'ID Transaction: 2, ID Task: 18, Status: disetrika', '172.31.25.148', '1', '2018-11-26 09:22:43'),
(136, 'Create New Payment', 'ID Transaction: 1', '172.31.25.148', '1', '2018-12-03 06:46:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `dt_item_laundry`
--
ALTER TABLE `dt_item_laundry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dt_item_laundry_history`
--
ALTER TABLE `dt_item_laundry_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dt_payment_deposit`
--
ALTER TABLE `dt_payment_deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dt_payment_deposit_history`
--
ALTER TABLE `dt_payment_deposit_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dt_payment_laundry`
--
ALTER TABLE `dt_payment_laundry`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `dt_payment_laundry` ADD FULLTEXT KEY `idx_dt_payment_laundry_type` (`type`);
ALTER TABLE `dt_payment_laundry` ADD FULLTEXT KEY `idx_dt_payment_laundry_payment_type` (`payment_type`);

--
-- Indexes for table `dt_payment_laundry_history`
--
ALTER TABLE `dt_payment_laundry_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dt_picture_laundry`
--
ALTER TABLE `dt_picture_laundry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dt_picture_laundry_history`
--
ALTER TABLE `dt_picture_laundry_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dt_survey_form`
--
ALTER TABLE `dt_survey_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dt_task_laundry`
--
ALTER TABLE `dt_task_laundry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dt_task_laundry_history`
--
ALTER TABLE `dt_task_laundry_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lw_data_sponsor`
--
ALTER TABLE `lw_data_sponsor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lw_detail_trans_order`
--
ALTER TABLE `lw_detail_trans_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_trans_order` (`id_trans_order`);

--
-- Indexes for table `lw_mast_brosur`
--
ALTER TABLE `lw_mast_brosur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lw_mast_dokter`
--
ALTER TABLE `lw_mast_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lw_mast_kunjungan`
--
ALTER TABLE `lw_mast_kunjungan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lw_mast_makloon`
--
ALTER TABLE `lw_mast_makloon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lw_mast_medrep`
--
ALTER TABLE `lw_mast_medrep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lw_mast_status`
--
ALTER TABLE `lw_mast_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lw_trans_order`
--
ALTER TABLE `lw_trans_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_trans_order` (`id_trans_order`);

--
-- Indexes for table `lw_trans_pembayaran`
--
ALTER TABLE `lw_trans_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lw_trans_penerimaan`
--
ALTER TABLE `lw_trans_penerimaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lw_trans_tagihan`
--
ALTER TABLE `lw_trans_tagihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lw_user`
--
ALTER TABLE `lw_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lw_user_group`
--
ALTER TABLE `lw_user_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_additional_service`
--
ALTER TABLE `ms_additional_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_coupon`
--
ALTER TABLE `ms_coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_customer`
--
ALTER TABLE `ms_customer`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `ms_customer` ADD FULLTEXT KEY `idx_ms_customer_fullname_handphone` (`fullname`,`handphone`);

--
-- Indexes for table `ms_laundry_service`
--
ALTER TABLE `ms_laundry_service`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `ms_laundry_service` ADD FULLTEXT KEY `idx_ms_laundry_service_item` (`item`);

--
-- Indexes for table `ms_outlet`
--
ALTER TABLE `ms_outlet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_outlet_user`
--
ALTER TABLE `ms_outlet_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_package`
--
ALTER TABLE `ms_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_promo`
--
ALTER TABLE `ms_promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_user_group`
--
ALTER TABLE `ms_user_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_user_mgmt`
--
ALTER TABLE `ms_user_mgmt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_log`
--
ALTER TABLE `system_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tr_laundry`
--
ALTER TABLE `tr_laundry`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `tr_laundry` ADD FULLTEXT KEY `idx_tr_laundry_cust_fullname` (`cust_fullname`);
ALTER TABLE `tr_laundry` ADD FULLTEXT KEY `idx_tr_laundry_cust_handphone` (`cust_handphone`);
ALTER TABLE `tr_laundry` ADD FULLTEXT KEY `idx_tr_laundry_cust_fullname_cust_handphone` (`cust_fullname`,`cust_handphone`);

--
-- Indexes for table `tr_laundry_history`
--
ALTER TABLE `tr_laundry_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tr_user_deposit`
--
ALTER TABLE `tr_user_deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tr_user_package`
--
ALTER TABLE `tr_user_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dt_item_laundry`
--
ALTER TABLE `dt_item_laundry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dt_item_laundry_history`
--
ALTER TABLE `dt_item_laundry_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dt_payment_deposit`
--
ALTER TABLE `dt_payment_deposit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dt_payment_deposit_history`
--
ALTER TABLE `dt_payment_deposit_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dt_payment_laundry`
--
ALTER TABLE `dt_payment_laundry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dt_payment_laundry_history`
--
ALTER TABLE `dt_payment_laundry_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dt_picture_laundry`
--
ALTER TABLE `dt_picture_laundry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dt_picture_laundry_history`
--
ALTER TABLE `dt_picture_laundry_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dt_survey_form`
--
ALTER TABLE `dt_survey_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dt_task_laundry`
--
ALTER TABLE `dt_task_laundry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `dt_task_laundry_history`
--
ALTER TABLE `dt_task_laundry_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lw_data_sponsor`
--
ALTER TABLE `lw_data_sponsor`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lw_detail_trans_order`
--
ALTER TABLE `lw_detail_trans_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `lw_mast_brosur`
--
ALTER TABLE `lw_mast_brosur`
  MODIFY `id` int(13) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lw_mast_dokter`
--
ALTER TABLE `lw_mast_dokter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lw_mast_kunjungan`
--
ALTER TABLE `lw_mast_kunjungan`
  MODIFY `id` int(13) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lw_mast_makloon`
--
ALTER TABLE `lw_mast_makloon`
  MODIFY `id` int(13) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lw_mast_medrep`
--
ALTER TABLE `lw_mast_medrep`
  MODIFY `id` int(13) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lw_mast_status`
--
ALTER TABLE `lw_mast_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lw_trans_order`
--
ALTER TABLE `lw_trans_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `lw_trans_pembayaran`
--
ALTER TABLE `lw_trans_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `lw_trans_penerimaan`
--
ALTER TABLE `lw_trans_penerimaan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `lw_trans_tagihan`
--
ALTER TABLE `lw_trans_tagihan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `lw_user`
--
ALTER TABLE `lw_user`
  MODIFY `id` int(13) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lw_user_group`
--
ALTER TABLE `lw_user_group`
  MODIFY `id` int(13) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ms_additional_service`
--
ALTER TABLE `ms_additional_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ms_coupon`
--
ALTER TABLE `ms_coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ms_customer`
--
ALTER TABLE `ms_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `ms_laundry_service`
--
ALTER TABLE `ms_laundry_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ms_outlet`
--
ALTER TABLE `ms_outlet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ms_outlet_user`
--
ALTER TABLE `ms_outlet_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ms_package`
--
ALTER TABLE `ms_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ms_promo`
--
ALTER TABLE `ms_promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ms_user_group`
--
ALTER TABLE `ms_user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ms_user_mgmt`
--
ALTER TABLE `ms_user_mgmt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `system_log`
--
ALTER TABLE `system_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tr_laundry`
--
ALTER TABLE `tr_laundry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tr_laundry_history`
--
ALTER TABLE `tr_laundry_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tr_user_deposit`
--
ALTER TABLE `tr_user_deposit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tr_user_package`
--
ALTER TABLE `tr_user_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
