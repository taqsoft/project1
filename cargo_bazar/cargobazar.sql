-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: cargobazar.cargobazar.avragontech.com
-- Generation Time: Aug 02, 2016 at 02:32 AM
-- Server version: 5.6.25-log
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cargobazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fcl_detail`
--

CREATE TABLE `tbl_fcl_detail` (
  `id` int(11) NOT NULL,
  `no_of_container` float NOT NULL,
  `container_size` varchar(25) NOT NULL,
  `container_weight` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fcl_detail`
--

INSERT INTO `tbl_fcl_detail` (`id`, `no_of_container`, `container_size`, `container_weight`, `project_id`, `created_date`, `updated_date`) VALUES
(1, 5, '2', 0, 2, '2016-07-26 06:31:16', NULL),
(2, 5, '3', 0, 2, '2016-07-26 06:31:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE `tbl_profile` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `ntn_no` varchar(255) NOT NULL,
  `chember_of_commerce_no` varchar(255) DEFAULT NULL,
  `business_address` text NOT NULL,
  `city` int(11) NOT NULL,
  `telephone_no` varchar(255) NOT NULL,
  `company_website` varchar(255) DEFAULT NULL,
  `about_company` text,
  `hear_about` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) NOT NULL,
  `contact_designation` varchar(255) DEFAULT NULL,
  `contact_phone_no` varchar(255) DEFAULT NULL,
  `contact_mobile_no` varchar(255) NOT NULL,
  `primary_email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `doc_chemeber_commerce` varchar(255) DEFAULT NULL,
  `doc_ntn` varchar(255) DEFAULT NULL,
  `doc_cnic` varchar(255) DEFAULT NULL,
  `piffa` varchar(255) DEFAULT NULL,
  `iata` varchar(200) NOT NULL,
  `fiata` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_detail`
--

CREATE TABLE `tbl_project_detail` (
  `id` int(11) NOT NULL,
  `unit_of_measurement` varchar(25) NOT NULL,
  `length` float NOT NULL,
  `width` float NOT NULL,
  `height` float NOT NULL,
  `no_of_boxes` int(11) NOT NULL,
  `volumetric_weight` float NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_project_detail`
--

INSERT INTO `tbl_project_detail` (`id`, `unit_of_measurement`, `length`, `width`, `height`, `no_of_boxes`, `volumetric_weight`, `project_id`, `created_date`, `updated_date`) VALUES
(1, 'Inch', 25, 25, 25, 2, 85.38, 1, '2016-07-22 05:34:01', NULL),
(2, 'Inch', 15, 15, 15, 1, 9.22, 1, '2016-07-22 05:34:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_info`
--

CREATE TABLE `tbl_project_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `transit_type` varchar(10) NOT NULL,
  `shipment_type` varchar(15) NOT NULL,
  `import_export` varchar(10) NOT NULL,
  `origin_pickup_point` varchar(250) NOT NULL,
  `origin_pickup` varchar(250) NOT NULL,
  `deliver_pickup_point` varchar(250) NOT NULL,
  `deliver_pickup` varchar(250) NOT NULL,
  `shipment_ready_startdate` date NOT NULL,
  `shipment_ready_starttime` time NOT NULL,
  `shipment_target_startdate` date NOT NULL,
  `shipment_target_starttime` time NOT NULL,
  `bid_closing_startdate` date NOT NULL,
  `bid_closing_starttime` time NOT NULL,
  `commodity` varchar(250) NOT NULL,
  `num_of_packages` int(11) NOT NULL,
  `weight` float NOT NULL,
  `chb_required` tinyint(1) NOT NULL,
  `service_type` varchar(25) NOT NULL,
  `inco_terms` varchar(50) NOT NULL,
  `remarks` text NOT NULL,
  `payment` varchar(25) NOT NULL,
  `tos` tinyint(1) NOT NULL,
  `is_deleted` int(11) DEFAULT '0',
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_project_info`
--

INSERT INTO `tbl_project_info` (`id`, `user_id`, `transit_type`, `shipment_type`, `import_export`, `origin_pickup_point`, `origin_pickup`, `deliver_pickup_point`, `deliver_pickup`, `shipment_ready_startdate`, `shipment_ready_starttime`, `shipment_target_startdate`, `shipment_target_starttime`, `bid_closing_startdate`, `bid_closing_starttime`, `commodity`, `num_of_packages`, `weight`, `chb_required`, `service_type`, `inco_terms`, `remarks`, `payment`, `tos`, `is_deleted`, `created_date`, `updated_date`) VALUES
(1, 1, 'by_air', '', 'import', 'Faisal Town, Lahore, Punjab, Pakistan', 'lahore', 'Lahore Grammar School, Multan, Punjab, Pakistan', 'lahore', '2016-07-21', '01:00:00', '2016-07-28', '02:00:00', '2016-07-27', '03:01:00', 'Sergican Instrument', 2, 5, 1, 'Airport to Door', 'CIP - Carriage and Insurance Paid to', 'Surgical Instrument', 'paypal', 1, 0, '2016-07-22 05:34:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_info_back`
--

CREATE TABLE `tbl_project_info_back` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `pick_up_point` text,
  `destination_city` int(11) DEFAULT NULL,
  `destination_country` int(11) DEFAULT NULL,
  `delivery_point` text,
  `category_of_goods` int(11) DEFAULT NULL,
  `commodity` varchar(50) DEFAULT NULL,
  `no_of_packages` varchar(10) DEFAULT NULL,
  `weight` varchar(10) DEFAULT NULL,
  `chb` varchar(5) DEFAULT NULL,
  `shipment_ready_date` date DEFAULT NULL,
  `shipment_ready_time` time DEFAULT NULL,
  `target_delivery_date` date DEFAULT NULL,
  `bid_closing_date` date DEFAULT NULL,
  `bid_closing_time` varchar(0) DEFAULT NULL,
  `priority` varchar(50) DEFAULT NULL,
  `service_type` varchar(50) DEFAULT NULL,
  `Inco_terms` varchar(50) DEFAULT NULL,
  `remarks` text,
  `is_deleted` int(11) DEFAULT '0',
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `type` enum('sea','air') DEFAULT NULL,
  `shipment_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_info`
--

CREATE TABLE `tbl_users_info` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_type` varchar(50) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'inactive',
  `company_name` varchar(255) DEFAULT NULL,
  `varification_key` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users_info`
--

INSERT INTO `tbl_users_info` (`id`, `email`, `mobile_no`, `user_name`, `password`, `user_type`, `status`, `company_name`, `varification_key`) VALUES
(1, 'zahidislam08@gmail.com', '03317780115', 'zahidislam08@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 'active', 'zee tech', '2b675a5f35312df067e930abf5c187a3'),
(24, 'chhameed2006@gmail.com', '03030303030', 'chhameed', 'e10adc3949ba59abbe56e057f20f883e', 'importer_exporter', 'inactive', 'kh', 'd5304b2c9843babc4bb7d5fb66800822');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_type`
--

CREATE TABLE `tbl_user_type` (
  `id` int(11) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_type`
--

INSERT INTO `tbl_user_type` (`id`, `user_type`) VALUES
(1, 'importer_exporter'),
(2, 'fraight_forwarder');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fcl_detail`
--
ALTER TABLE `tbl_fcl_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_project_detail`
--
ALTER TABLE `tbl_project_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_project_info`
--
ALTER TABLE `tbl_project_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_project_info_back`
--
ALTER TABLE `tbl_project_info_back`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users_info`
--
ALTER TABLE `tbl_users_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_type`
--
ALTER TABLE `tbl_user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_fcl_detail`
--
ALTER TABLE `tbl_fcl_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_project_detail`
--
ALTER TABLE `tbl_project_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_project_info`
--
ALTER TABLE `tbl_project_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_project_info_back`
--
ALTER TABLE `tbl_project_info_back`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_users_info`
--
ALTER TABLE `tbl_users_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `tbl_user_type`
--
ALTER TABLE `tbl_user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
