-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2025 at 04:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '5c428d8875d2948607f3e3fe134d71b4', '2024-07-01 11:42:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartments`
--

CREATE TABLE `tbldepartments` (
  `id` int(11) NOT NULL,
  `DepartmentName` varchar(150) DEFAULT NULL,
  `DepartmentShortName` varchar(100) DEFAULT NULL,
  `DepartmentCode` varchar(50) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbldepartments`
--

INSERT INTO `tbldepartments` (`id`, `DepartmentName`, `DepartmentShortName`, `DepartmentCode`, `CreationDate`) VALUES
(1, 'Human Resource', 'HR', 'HR01', '2023-09-01 14:50:20'),
(2, 'Information Technology', 'IT', 'IT01', '2023-09-01 14:50:20'),
(3, 'Accounts', 'Accounts', 'ACCNT01', '2023-09-01 14:50:20'),
(4, 'ADMIN', 'Admin', 'ADMN01', '2023-09-01 14:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployees`
--

CREATE TABLE `tblemployees` (
  `id` int(11) NOT NULL,
  `EmpId` varchar(100) NOT NULL,
  `FirstName` varchar(150) DEFAULT NULL,
  `LastName` varchar(150) DEFAULT NULL,
  `EmailId` varchar(200) DEFAULT NULL,
  `Password` varchar(180) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `Dob` varchar(100) DEFAULT NULL,
  `Department` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(200) DEFAULT NULL,
  `Country` varchar(150) DEFAULT NULL,
  `Phonenumber` char(11) DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblemployees`
--

INSERT INTO `tblemployees` (`id`, `EmpId`, `FirstName`, `LastName`, `EmailId`, `Password`, `Gender`, `Dob`, `Department`, `Address`, `City`, `Country`, `Phonenumber`, `Status`, `RegDate`) VALUES
(1, '10805121', 'Rahul', 'Kumar', 'rk1995@test.com', 'f925916e2754e5e03f75dd58a5733251', 'Male', '3 August, 1995', 'Information Technology', 'A 123 XYZ Apartment ', 'New Delhi', 'India', '12121212', 1, '2024-09-10 14:56:23'),
(2, '10235612', 'Garima', 'Yadav', 'grama123@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 'Female', '2 January, 1997', 'Accounts', 'Hno 123 ABC Colony', 'New Delhi', 'India', '7485963210', 1, '2024-09-10 14:56:23'),
(5, '7856214', 'John', 'Doe', 'jhn12@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 'Male', '3 January, 1995', 'Accounts', 'H no 1', 'San Pablo', 'Philippines', '23232323', 1, '2024-09-10 14:56:23');

-- --------------------------------------------------------

--
-- Table structure for table `tblleaves`
--

CREATE TABLE `tblleaves` (
  `id` int(11) NOT NULL,
  `LeaveType` varchar(110) DEFAULT NULL,
  `ToDate` varchar(120) DEFAULT NULL,
  `FromDate` varchar(120) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT NULL,
  `AdminRemarkDate` varchar(120) DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  `IsRead` int(1) DEFAULT NULL,
  `empid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblleaves`
--

INSERT INTO `tblleaves` (`id`, `LeaveType`, `ToDate`, `FromDate`, `Description`, `PostingDate`, `AdminRemark`, `AdminRemarkDate`, `Status`, `IsRead`, `empid`) VALUES
(11, 'Casual Leaves', '17/09/2024', '10/09/2024', 'I need leave to visit my home town. ', '2024-09-11 15:06:21', 'Approved', '2024-09-13 20:39:40 ', 1, 1, 1),
(12, 'Casual Leaves', '15/09/2024', '09/09/2024', 'Need casual leaves for some personal work.', '2024-09-12 11:42:40', 'Leave approved', '2024-09-13 20:39:40', 1, 1, 5),
(13, 'Sick Leave', '04/05/2025', '30/04/2025', 'gusto ko eh', '2025-04-30 01:17:13', 'ot', '2025-04-30 6:48:56 ', 2, 1, 5),
(14, 'Sick Leave', '09/05/2025', '01/05/2025', 'gusto ko', '2025-04-30 01:18:07', 'sure', '2025-04-30 6:49:16 ', 1, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tblleavetype`
--

CREATE TABLE `tblleavetype` (
  `id` int(11) NOT NULL,
  `LeaveType` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblleavetype`
--

INSERT INTO `tblleavetype` (`id`, `LeaveType`, `Description`, `CreationDate`) VALUES
(5, 'Vacation Leave', '(Sec. 51, Rule XVI, Omnibus Rules Implementing E.O. No. 292) - 5days', '2025-04-30 01:09:19'),
(6, 'Mandatory/Forced Leave', '(Sec. 25, Rule XVI, Omnibus Rules Implementing E.O. No. 292) 1 day or more vocational leave', '2025-04-30 01:09:39'),
(7, 'Sick Leave', '(Sec. 43, Rule XVI, Omnibus Rules Implementing E.O. No. 292) 5 days', '2025-04-30 01:09:52'),
(8, 'Maternity Leave', '(R.A. No. 11210 / IRR issued by CSC, DOLE and SSS) 105 days', '2025-04-30 01:10:12'),
(9, 'Paternity Leave', '(R.A. No. 8187 / CSC MC No. 71, s. 1998, as amended) 7 days', '2025-04-30 01:10:25'),
(10, 'Special Privilege Leave', '(Sec. 21, Rule XVI, Omnibus Rules Implementing E.O. No. 292) 3 days', '2025-04-30 01:10:56'),
(11, 'Solo Parent Leave', '(RA No. 8972 / CSC MC No. 8, s. 2004) 7days', '2025-04-30 01:11:14'),
(12, 'Study Leave', '(Sec. 68, Rule XVI, Omnibus Rules Implementing E.O. No. 292) upto 6 months', '2025-04-30 01:11:30'),
(13, '10-Day VAWC Leave', '(RA No. 9262 / CSC MC No. 15, s. 2005) 10 days', '2025-04-30 01:11:44'),
(14, 'Rehabilitation Privilege leave', '(Sec. 55, Rule XVI, Omnibus Rules Implementing E.O. No. 292)upto 6 months', '2025-04-30 01:12:04'),
(15, 'Special Leave Benefits for Women', '(RA No. 9710 / CSC MC No. 25, s. 2010) upto 2 months', '2025-04-30 01:12:17'),
(16, 'Special Emergency (Calamity) Leave', '(CSC MC No. 2, s. 2012, as amended) up to 5 days', '2025-04-30 01:12:34'),
(17, 'Terminal leave', '(Proof of employee’s resignation or retirement or separation\r\nfrom the service.)', '2025-04-30 01:13:08'),
(18, 'Adoption Leave', '(R.A. No. 8552)-\r\n(Application for adoption leave shall be filed with an\r\nauthenticated copy of the Pre-Adoptive Placement\r\nAuthority issued by the Department of Social Welfare and\r\nDevelopment (DSWD)', '2025-04-30 01:13:27');

-- --------------------------------------------------------

--
-- Table structure for table `tblpdf`
--

CREATE TABLE `tblpdf` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `MiddleName` varchar(100) DEFAULT NULL,
  `info` text DEFAULT NULL,
  `C4_signature` varchar(255) DEFAULT NULL,
  `C4_Picture` varchar(255) DEFAULT NULL,
  `C3Signature` varchar(255) DEFAULT NULL,
  `C4signature` varchar(255) DEFAULT NULL,
  `C4Picture` varchar(255) DEFAULT NULL,
  `date_column` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpdf`
--

INSERT INTO `tblpdf` (`id`, `user_id`, `Surname`, `Firstname`, `MiddleName`, `info`, `C4_signature`, `C4_Picture`, `C3Signature`, `C4signature`, `C4Picture`, `date_column`, `is_active`) VALUES
(0, 5, '', '', '', '{\"CSID\":\"1\",\"Surname\":\"\",\"Firstname\":\"\",\"NameExtension\":\"\",\"MiddleName\":\"\",\"DateOfBirth\":\"\",\"PlaceOfBirth\":\"\",\"Sex\":\"Male\",\"CivilStatus\":\"Single\",\"Height\":\"\",\"Weight\":\"\",\"BloodType\":\"\",\"GSIS\":\"\",\"PagIBIG\":\"\",\"PHILHEALTH\":\"\",\"SSS\":\"\",\"TIN\":\"\",\"AgencyNo\":\"\",\"Citizenship1\":\"Filipino\",\"Citizenship2\":\"by birth\",\"DualCountry\":\"\",\"ResHouse_Block_LotNo\":\"\",\"ResStreet\":\"\",\"ResSubdivision_Village\":\"\",\"ResBarangay\":\"\",\"ResCity_Municipality\":\"\",\"ResProvince\":\"\",\"ResZipCode\":\"\",\"PerHouse_Block_LotNo\":\"\",\"PerStreet\":\"\",\"PerSubdivision_Village\":\"\",\"PerBarangay\":\"\",\"PerCity_Municipality\":\"\",\"PerProvince\":\"\",\"PerZipCode\":\"\",\"TelephoneNumber\":\"\",\"MobileNumber\":\"\",\"EmailAdd\":\"\",\"Spouse_Surname\":\"\",\"Spouse_Firstname\":\"\",\"Spouse_NameExtension\":\"\",\"Spouse_Middlename\":\"\",\"Spouse_Occupation\":\"\",\"Spouse_Employer_Businessname\":\"\",\"Spouse_BusinessAddress\":\"\",\"Spouse_TelephoneNumber\":\"\",\"Spouse_Children\":[],\"Father_Surname\":\"\",\"Father_Firstname\":\"\",\"Father_NameExtension\":\"\",\"Father_Middlename\":\"\",\"Mother_MaidenName\":\"\",\"Mother_Surname\":\"\",\"Mother_Firstname\":\"\",\"Mother_Middlename\":\"\",\"NOF_Elementary\":\"\",\"NOF_Secondary\":\"\",\"NOF_Vocational\":\"\",\"NOF_College\":\"\",\"NOF_Graduate\":\"\",\"BE_D_C_Elementary\":\"\",\"BE_D_C_Secondary\":\"\",\"BE_D_C_Vocational\":\"\",\"BE_D_C_College\":\"\",\"BE_D_C_Graduate\":\"\",\"POA_From_Elementary\":\"\",\"POA_To_Elementary\":\"\",\"POA_From_Secondary\":\"\",\"POA_To_Secondary\":\"\",\"POA_From_Vocational\":\"\",\"POA_To_Vocational\":\"\",\"POA_From_College\":\"\",\"POA_To_College\":\"\",\"POA_From_Graduate\":\"\",\"POA_To_Graduate\":\"\",\"HL_UE_Elementary\":\"\",\"HL_UE_Secondary\":\"\",\"HL_UE_Vocational\":\"\",\"HL_UE_College\":\"\",\"HL_UE_Graduate\":\"\",\"YR_G_Elementary\":\"\",\"YR_G_Secondary\":\"\",\"YR_G_Vocational\":\"\",\"YR_G_College\":\"\",\"YR_G_Graduate\":\"\",\"Scho_AHR_Elementary\":\"\",\"Scho_AHR_Secondary\":\"\",\"Scho_AHR_Vocational\":\"\",\"Scho_AHR_College\":\"\",\"Scho_AHR_Graduate\":\"\",\"CivilService\":[],\"WorkExperience\":[],\"VoluntaryWork\":[],\"LAD\":[],\"O_SSH\":\"\",\"O_SSH1\":\"\",\"O_SSH2\":\"\",\"O_SSH3\":\"\",\"O_SSH4\":\"\",\"O_SSH5\":\"\",\"O_SSH6\":\"\",\"O_AR\":\"\",\"O_AR1\":\"\",\"O_AR2\":\"\",\"O_AR3\":\"\",\"O_AR4\":\"\",\"O_AR5\":\"\",\"O_AR6\":\"\",\"O_MAO\":\"\",\"O_MAO1\":\"\",\"O_MAO2\":\"\",\"O_MAO3\":\"\",\"O_MAO4\":\"\",\"O_MAO5\":\"\",\"O_MAO6\":\"\",\"TD\":\"Yes\",\"FD\":\"Yes\",\"FDDetails\":\"\",\"AO\":\"Yes\",\"AODetails\":\"\",\"CC\":\"Yes\",\"CCDate\":\"\",\"CCSOC\":\"\",\"CoV\":\"Yes\",\"CoVDetails\":\"\",\"SFTS\":\"Yes\",\"SFTSDetails\":\"\",\"CNOLE\":\"Yes\",\"CNOLEDetails\":\"\",\"RGS\":\"Yes\",\"RGSDetails\":\"\",\"SIoPS\":\"Yes\",\"SIoPSDetails\":\"\",\"IG\":\"Yes\",\"IGDetails\":\"\",\"PwD\":\"Yes\",\"PwDDetails\":\"\",\"SP\":\"Yes\",\"SPDetails\":\"\",\"References\":[],\"GIID\":\"\",\"ID_L_PNO\":\"\",\"D_Pol\":\"\"}', '', NULL, NULL, NULL, '', '2025-04-29 04:05:14', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblemployees`
--
ALTER TABLE `tblemployees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblleaves`
--
ALTER TABLE `tblleaves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserEmail` (`empid`);

--
-- Indexes for table `tblleavetype`
--
ALTER TABLE `tblleavetype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblemployees`
--
ALTER TABLE `tblemployees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblleaves`
--
ALTER TABLE `tblleaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblleavetype`
--
ALTER TABLE `tblleavetype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
