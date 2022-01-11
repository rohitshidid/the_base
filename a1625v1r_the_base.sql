-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 11, 2022 at 11:11 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a1625v1r_the_base`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_tb`
--

CREATE TABLE `activity_tb` (
  `id` int(100) NOT NULL,
  `roll_no` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `event_name` varchar(45) NOT NULL,
  `event_desc` varchar(45) NOT NULL,
  `event_venue` varchar(45) NOT NULL,
  `start_date` varchar(45) NOT NULL,
  `end_date` varchar(45) NOT NULL,
  `certificate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity_tb`
--

INSERT INTO `activity_tb` (`id`, `roll_no`, `name`, `event_name`, `event_desc`, `event_venue`, `start_date`, `end_date`, `certificate`) VALUES
(14, '184016', 'Aryan Bhingare', 'Python Coding', ' Reverse Coding', 'Wadia College Campus', '2021-07-23', '2021-07-25', 'IMG-60fa7ea37f46c8.44641838.jpg'),
(15, '184026', 'Atharva Pawar', 'Paper Presentation', ' Environment Awarness', 'College Of Engineering Pune', '2021-07-23', '2021-07-26', 'IMG-60fa7f7da79e64.67468763.jpg'),
(16, '184026', 'Atharva Pawar', 'Quiz On Natrual Disaster', 'Quetions On Natural calamities Such as Floods', 'Wadia College Campus', '2021-07-27', '2021-07-29', 'IMG-60fa80670f9bf6.15021691.jpg'),
(17, '184030', 'Rohan Marale', 'Dance Competition', ' Break Dance', 'Dance India Dance Mumbai', '2021-07-24', '2021-07-25', 'IMG-60fa815b9e8185.93546371.jpg'),
(18, '184030', 'Rohan Marale', 'Athletics', '400 x 400m', 'Balewadi Stadium', '2021-07-24', '2021-07-25', 'IMG-60fa8207440c12.85461362.jpg'),
(19, '184038', 'Uttkarsh Chavan', 'Battleground Mobile India ', ' Battleground Mobile Indian Series ', 'Mumbai ', '2021-07-23', '2021-07-26', 'IMG-60fa82d7429cb4.94231834.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `id` int(11) NOT NULL,
  `a_username` varchar(45) NOT NULL,
  `a_password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`id`, `a_username`, `a_password`) VALUES
(1, 'Admin', 'admin'),
(2, 'Admin2', 'Admin2'),
(3, 'Admin3', 'Admin3'),
(4, 'Admin4', 'admin4'),
(5, 'Admin5', 'admin5'),
(6, 'Admin6', 'admin6');

-- --------------------------------------------------------

--
-- Table structure for table `curriculam_tb`
--

CREATE TABLE `curriculam_tb` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `flag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `curriculam_tb`
--

INSERT INTO `curriculam_tb` (`id`, `name`, `link`, `date`, `flag`) VALUES
(24, 'MPECS 18 CURRICULUM_COMPUTER', 'MPECS 18 CURRICULUM_COMPUTER.pdf', '2021-07-20 17:14:31', '0'),
(26, 'MPECS 18 CURRICULUM_MECH', 'R18_Final Curriculum_MECHANICAL.pdf', '2021-07-23 12:35:47', '0'),
(27, 'MPECS 18 CURRICULUM_ENTC', 'E & TC_MPES_2018 _ curriculum all courses_November 2019.pdf', '2021-07-23 12:36:29', '0'),
(28, 'MPECS 18 CURRICULUM_ELECTRICAL', 'MPECS R2018 ELECTRICAL.pdf', '2021-07-23 12:36:55', '0'),
(29, 'MPECS 18 CURRICULUM_Civil', 'Curriculum of Civil Dept  MPECS 18.pdf', '2021-07-23 12:37:30', '0');

-- --------------------------------------------------------

--
-- Table structure for table `issued_books_history_tb`
--

CREATE TABLE `issued_books_history_tb` (
  `ID` int(100) NOT NULL,
  `rollno` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone_no` varchar(12) NOT NULL,
  `name_of_the_book` varchar(45) NOT NULL,
  `code_of_the_book` varchar(45) NOT NULL,
  `pending_payment` varchar(45) NOT NULL,
  `issue_date` varchar(45) NOT NULL,
  `return_date` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issued_books_history_tb`
--

INSERT INTO `issued_books_history_tb` (`ID`, `rollno`, `name`, `email`, `phone_no`, `name_of_the_book`, `code_of_the_book`, `pending_payment`, `issue_date`, `return_date`) VALUES
(10, '184001', 'Manpreet Kaur', 'Sidhumanusid2001@gmail.com', '8379802925', 'PHP', 'C34ee3', '', '2021-06-27', '2021-06-30'),
(11, '184001', 'Manpreet Kaur', 'Sidhumanusid2001@gmail.com', '8379802925', 'JAVA', 'C40aa1', '', '2021-06-27', '2021-06-30'),
(12, '184002', 'Prathamesh Hargude', 'prathameshhargude10@gmail.com', '8379001210', 'JAVA', 'C40aa1', '', '2021-06-27', '2021-06-30'),
(13, '184004', 'Aishwarya Doiphode', 'aishdoiphode2112@gmail.com', '9146522521', 'DS', 'C50qs2', '', '2021-06-27', '2021-06-30'),
(14, '184010', 'Pooja Gadekar', 'poojagadekar9370@gmail.com', '9370590408', 'PHP', 'C34ee3', '50', '2021-06-26', '2021-06-26'),
(15, '184001', 'Manpreet Kaur', 'Sidhumanusid2001@gmail.com', '8379802925', 'PHP', 'C34ee3', '50', '2021-06-30', '2021-07-02'),
(16, '184038', 'Uttkarsh Chavan', 'uttkarshchavan24@gmail.com', '7758833461', 'DS', 'C50qs2', '', '2021-07-01', '2021-07-12'),
(17, '204001', 'Uttkarsh  Chavan', 'rohanm814@gmail.com', '7030863664', 'PHP', '401203', '', '2021-07-20', '2021-07-20'),
(18, '184035', 'Suraj Sakhare', 'surajsakhare142002@gmail.com', '8600011630', 'The One Sided Mind', 'OS2422', '50', '2021-07-10', '2021-07-17'),
(19, '184032', 'Atharv patil', 'at@gmail.com', '8108181326', 'PHP', 'C34ee3', '50', '2021-06-27', '2021-06-30'),
(20, '184023', 'Vaibhav Shinde', 'vaibhavbshinde02@gmail.com', '9021512959', 'IOM Basics', 'OD3432', '50', '2021-07-01', '2021-07-08'),
(21, '184007', 'Manasi Kamath', 'manasi.kamath927@gmail.com', '7385314975', 'Java', 'JA1323', '50', '2021-07-09', '2021-07-09'),
(22, '184030', 'Rohan Marale', 'rohanm814@gmail.com', '8108181327', 'LINUX', 'LN3909', '50', '2021-07-08', '2021-07-12'),
(23, '184012', 'Lavanya Bbagave', 'lavanyabagave@gmail.com', '9823770938', 'The one Sided Mind', 'OS9928', '50', '2021-07-09', '2021-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `marks_tb`
--

CREATE TABLE `marks_tb` (
  `s_roll` int(100) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_marks` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notice_tb`
--

CREATE TABLE `notice_tb` (
  `ID` int(100) NOT NULL,
  `student_no` varchar(45) NOT NULL,
  `teacher_id` varchar(10) NOT NULL,
  `teacher_name` varchar(45) NOT NULL,
  `notice_txt` varchar(500) NOT NULL,
  `notice_img` varchar(45) NOT NULL,
  `start_date` varchar(45) NOT NULL,
  `end_date` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice_tb`
--

INSERT INTO `notice_tb` (`ID`, `student_no`, `teacher_id`, `teacher_name`, `notice_txt`, `notice_img`, `start_date`, `end_date`) VALUES
(75, '', '', '', 'Notice about online Payment of Exam Fee', 'IMG-60fa8011e61ce1.96978517.jpg', '2021-07-23', '2021-07-24'),
(78, '184016', '', '', 'Please Complete your profile till 30 July 2021', '', '2021-07-23', '2021-07-30'),
(79, '18', '', '', 'Notice About Mock Test', 'IMG-60fa915bbf0e06.35659006.jpeg', '2021-07-23', '2021-07-25'),
(81, '', '', '', 'Online theory time table SUMMER 2021', 'IMG-60fa968f9c2e72.23504831.pdf', '2021-07-19', '2021-07-30'),
(82, '184022', '', '', ' Upload All documents till 30 July 2020', '', '2021-07-24', '2021-07-28'),
(83, '', '', '', 'Conduction of WINTER EXAM 2021', 'IMG-60fa9c4eda0fb8.54304409.pdf', '2021-07-23', '2021-07-25'),
(84, '18', '', '', 'Notice for Industrial Training ', 'IMG-60fa9d9e928f94.32284407.pdf', '2021-07-20', '2021-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `student_tb`
--

CREATE TABLE `student_tb` (
  `rollno` int(11) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone_no` varchar(12) NOT NULL,
  `address` varchar(45) NOT NULL,
  `dob` varchar(12) NOT NULL,
  `blood_group` varchar(12) NOT NULL,
  `nationality` varchar(45) NOT NULL,
  `caste` varchar(45) NOT NULL,
  `latest_marks` varchar(5) NOT NULL,
  `sem1_marks` varchar(5) NOT NULL,
  `sem2_marks` varchar(5) NOT NULL,
  `sem3_marks` varchar(5) NOT NULL,
  `sem4_marks` varchar(5) NOT NULL,
  `sem5_marks` varchar(5) NOT NULL,
  `sem6_marks` varchar(5) NOT NULL,
  `name_of_book` varchar(45) NOT NULL,
  `code_of_book` varchar(45) NOT NULL,
  `issue_date` varchar(45) NOT NULL,
  `return_date` varchar(45) NOT NULL,
  `payment_pending` varchar(10) NOT NULL,
  `password` varchar(45) NOT NULL,
  `profile_img` varchar(45) NOT NULL,
  `adhar_card` varchar(45) NOT NULL,
  `passport` varchar(45) NOT NULL,
  `birth_certificate` varchar(45) NOT NULL,
  `caste_certificate` varchar(45) NOT NULL,
  `ssc_marksheet` varchar(45) NOT NULL,
  `hsc_marksheet` varchar(45) NOT NULL,
  `jee_marksheet` varchar(45) NOT NULL,
  `passport_size_photo` varchar(45) NOT NULL,
  `domicile` varchar(45) NOT NULL,
  `non_cremiliear` varchar(45) NOT NULL,
  `physical_handicap` varchar(45) NOT NULL,
  `1_sem_marksheet` varchar(45) NOT NULL,
  `2_sem_marksheet` varchar(45) NOT NULL,
  `3_sem_marksheet` varchar(45) NOT NULL,
  `4_sem_marksheet` varchar(45) NOT NULL,
  `5_sem_marksheet` varchar(45) NOT NULL,
  `6_sem_marksheet` varchar(45) NOT NULL,
  `1_year_receipt` varchar(45) NOT NULL,
  `2_year_receipt` varchar(45) NOT NULL,
  `3_year_receipt` varchar(45) NOT NULL,
  `certificate_1` varchar(45) NOT NULL,
  `certificate_2` varchar(45) NOT NULL,
  `certificate_3` varchar(45) NOT NULL,
  `certificate_4` varchar(45) NOT NULL,
  `certificate_5` varchar(45) NOT NULL,
  `certificate_6` varchar(45) NOT NULL,
  `certificate_7` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `comment` varchar(45) NOT NULL,
  `flag` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 PACK_KEYS=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `student_tb`
--

INSERT INTO `student_tb` (`rollno`, `first_name`, `last_name`, `email`, `phone_no`, `address`, `dob`, `blood_group`, `nationality`, `caste`, `latest_marks`, `sem1_marks`, `sem2_marks`, `sem3_marks`, `sem4_marks`, `sem5_marks`, `sem6_marks`, `name_of_book`, `code_of_book`, `issue_date`, `return_date`, `payment_pending`, `password`, `profile_img`, `adhar_card`, `passport`, `birth_certificate`, `caste_certificate`, `ssc_marksheet`, `hsc_marksheet`, `jee_marksheet`, `passport_size_photo`, `domicile`, `non_cremiliear`, `physical_handicap`, `1_sem_marksheet`, `2_sem_marksheet`, `3_sem_marksheet`, `4_sem_marksheet`, `5_sem_marksheet`, `6_sem_marksheet`, `1_year_receipt`, `2_year_receipt`, `3_year_receipt`, `certificate_1`, `certificate_2`, `certificate_3`, `certificate_4`, `certificate_5`, `certificate_6`, `certificate_7`, `status`, `comment`, `flag`) VALUES
(184001, 'Manpreet', 'Kaur', 'Sidhumanusid2001@gmail.com', '8379802925', 'Maharashtra Pune - 411028', '2002-10-02', 'B+', 'INDIAN', 'OPEN', '67', '88', '67', '67', '67', '', '', '', '', '', '', '', '184001', '184001_profile_img.png', '184001_adhar_card.png', '184001_passport.png', '184001_birth_certificate.png', '184001_caste_certificate.png', '184001_ssc_marksheet.png', '184001_hsc_marksheet.png', '184001_jee_marksheet.png', '184001_passport_size_photo.png', '184001_domicile.png', '184001_non_cremiliear.png', '184001_physical_handicap.png', '184001_sem_1_marksheet.png', '184001_sem_2_marksheet.png', '184001_sem_3_marksheet.png', '184001_sem_4_marksheet.png', '184001_sem_5_marksheet.png', '184001_sem_6_marksheet.png', '184001_year_1_receipt.png', '184001_year_2_receipt.png', '184001_year_3_receipt.png', '184001_certificate_1.png', '', '', '', '', '', '', 'Verified', 'Basic Profile Completed', '1'),
(184002, 'Prathamesh', 'Hargude', 'prathameshhargude10@gmail.com', '8964792040', 'Maharashtra Pune - 411028', '2001-02-04', 'A+', 'INDIAN', 'OPEN', '56', '89', '56', '56', '56', '', '', 'PHP', 'C34ee3', '2021-07-16', '2021-07-23', '50', '184002', 'default_profile.png', '184002_adhar_card.png', '184002_passport.png', '184002_birth_certificate.png', '184002_caste_certificate.png', '184002_ssc_marksheet.png', '184002_hsc_marksheet.png', '184002_jee_marksheet.png', '184002_passport_size_photo.png', '184002_domicile.png', '184002_non_cremiliear.png', '184002_physical_handicap.png', '184002_sem_1_marksheet.png', '184002_sem_2_marksheet.png', '184002_sem_3_marksheet.png', '184002_sem_4_marksheet.png', '184002_sem_5_marksheet.png', '184002_sem_6_marksheet.png', '184002_year_1_receipt.png', '184002_year_2_receipt.png', '184002_year_3_receipt.png', '184002_certificate_1.png', '', '', '', '', '', '', 'Verified', 'Basic Profile Completed', '1'),
(184003, 'Prajwal', 'Dinde', 'prajwal1758dinde@gmail.com', '8600849904', 'Maharashtra Pune - 411028', '2001-08-14', 'AB+', 'INDIAN', 'OPEN', '45', '90', '34', '45', '34', '', '', '', '', '', '', '', '184003', 'default_profile.png', '184003_adhar_card.png', '184003_passport.png', '184003_birth_certificate.png', '184003_caste_certificate.png', '184003_ssc_marksheet.png', '184003_hsc_marksheet.png', '184003_jee_marksheet.png', '184003_passport_size_photo.png', '184003_domicile.png', '184003_non_cremiliear.png', '184003_physical_handicap.png', '184003_sem_1_marksheet.png', '184003_sem_2_marksheet.png', '184003_sem_3_marksheet.png', '184003_sem_4_marksheet.png', '184003_sem_5_marksheet.png', '184003_sem_6_marksheet.png', '184003_year_1_receipt.png', '184003_year_2_receipt.png', '184003_year_3_receipt.png', '184003_certificate_1.png', '184003_certificate_2.png', '', '', '', '', '', 'Verified', 'Basic Profile Completed', '1'),
(184004, 'Aishwarya', 'Doiphode', 'aishdoiphode2112@gmail.com', '9146522521', 'Maharashtra Pune - 411028', '2002-01-29', 'A+', 'INDIAN', 'OPEN', '34', '91', '78', '34', '78', '', '', '', '', '', '', '', '184004', 'default_profile.png', '184004_adhar_card.png', '184004_passport.png', '184004_birth_certificate.png', '184004_caste_certificate.png', '184004_ssc_marksheet.png', '184004_hsc_marksheet.png', '184004_jee_marksheet.png', '184004_passport_size_photo.png', '184004_domicile.png', '184004_non_cremiliear.png', '184004_physical_handicap.png', '184004_sem_1_marksheet.png', '184004_sem_2_marksheet.png', '184004_sem_3_marksheet.png', '184004_sem_4_marksheet.png', '184004_sem_5_marksheet.png', '184004_sem_6_marksheet.png', '184004_year_1_receipt.png', '184004_year_2_receipt.png', '184004_year_3_receipt.png', '184004_certificate_1.png', '184004_certificate_2.png', '', '', '', '', '', 'Verified', 'Basic Profile Completed', '1'),
(184005, 'Ruchika', 'Suryawanshi', 'ruchikasuryawanshi710@gmail.com', '9168086288', 'Maharashtra Pune - 411028', '2002-10-09', 'B+', 'INDIAN', 'OBC', '23', '92', '45', '23', '45', '', '', '', '', '', '', '', '184005', 'default_profile.png', '184005_adhar_card.png', '184005_passport.png', '184005_birth_certificate.png', '184005_caste_certificate.png', '184005_ssc_marksheet.png', '184005_hsc_marksheet.png', '184005_jee_marksheet.png', '184005_passport_size_photo.png', '184005_domicile.png', '184005_non_cremiliear.png', '184005_physical_handicap.png', '184005_sem_1_marksheet.png', '184005_sem_2_marksheet.png', '184005_sem_3_marksheet.png', '184005_sem_4_marksheet.png', '184005_sem_5_marksheet.png', '184005_sem_6_marksheet.png', '184005_year_1_receipt.png', '184005_year_2_receipt.png', '184005_year_3_receipt.png', '184005_certificate_1.png', '184005_certificate_2.png', '', '', '', '', '', 'Verified', 'Basic Profile Completed', '1'),
(184006, '', '', '', '', '', '', '', '', '', '45', '93', '56', '45', '56', '', '', '', '', '', '', '', '184006', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Rejected', 'Wrong Passport', '0'),
(184007, 'Manasi', 'Kamath', 'manasi.kamath927@gmail.com', '7385314975', 'Maharashtra Pune - 411028', '2002-11-01', 'B+', 'INDIAN', 'OPEN', '23', '94', '45', '23', '45', '', '', 'Data Structure', 'C50qs2', '2021-07-17', '2021-07-24', '50', '184007', 'default_profile.png', '184007_adhar_card.png', '184007_passport.png', '184007_birth_certificate.png', '184007_caste_certificate.png', '184007_ssc_marksheet.png', '184007_hsc_marksheet.png', '184007_jee_marksheet.png', '184007_passport_size_photo.png', '184007_domicile.png', '184007_non_cremiliear.png', '184007_physical_handicap.png', '184007_sem_1_marksheet.png', '184007_sem_2_marksheet.png', '184007_sem_3_marksheet.png', '184007_sem_4_marksheet.png', '184007_sem_5_marksheet.png', '184007_sem_6_marksheet.png', '184007_year_1_receipt.png', '184007_year_2_receipt.png', '184007_year_3_receipt.png', '184007_certificate_1.png', '184007_certificate_2.png', '', '', '', '', '', 'Verified', 'Basic Profile Completed', '1'),
(184008, 'Ragini', 'Mankeshware', 'raghini@gmail.com', '8830312478', 'Maharashtra Pune - 411028', '2002-03-11', 'AB+', 'INDIAN', 'OBC', '44', '95', '66', '44', '66', '', '', '', '', '', '', '', '184008', 'default_profile.png', '184008_adhar_card.png', '184008_passport.png', '184008_birth_certificate.png', '184008_caste_certificate.png', '184008_ssc_marksheet.png', '184008_hsc_marksheet.png', '184008_jee_marksheet.png', '184008_passport_size_photo.png', '184008_domicile.png', '184008_non_cremiliear.png', '184008_physical_handicap.png', '184008_sem_1_marksheet.png', '184008_sem_2_marksheet.png', '184008_sem_3_marksheet.png', '184008_sem_4_marksheet.png', '184008_sem_5_marksheet.png', '184008_sem_6_marksheet.png', '184008_year_1_receipt.png', '184008_year_2_receipt.png', '184008_year_3_receipt.png', '184008_certificate_1.png', '', '', '', '', '', '', 'Rejected', 'Wrong Birth Certificate', '0'),
(184009, 'Shree', 'Shama', 'shreeshama1234@gmail.com', '9834261898', 'Maharashtra Pune - 411028', '2002-12-11', 'A+', 'INDIAN', 'OBC', '34', '96', '64', '34', '64', '', '', '', '', '', '', '', '184009', 'default_profile.png', '184009_adhar_card.png', '184009_passport.png', '184009_birth_certificate.png', '184009_caste_certificate.png', '184009_ssc_marksheet.png', '184009_hsc_marksheet.png', '184009_jee_marksheet.png', '184009_passport_size_photo.png', '184009_domicile.png', '184009_non_cremiliear.png', '184009_physical_handicap.png', '184009_sem_1_marksheet.png', '184009_sem_2_marksheet.png', '184009_sem_3_marksheet.png', '184009_sem_4_marksheet.png', '184009_sem_5_marksheet.png', '184009_sem_6_marksheet.png', '184009_year_1_receipt.png', '184009_year_2_receipt.png', '184009_year_3_receipt.png', '184009_certificate_1.png', '184009_certificate_2.png', '', '', '', '', '', 'Rejected', 'Wrong Addhar card ', '0'),
(184010, 'Pooja', 'Gadekar', 'poojagadekar9370@gmail.com', '9370590408', 'Maharashtra Pune - 411028', '2002-02-05', 'B+', 'INDIAN', 'OPEN', '78', '97', '67', '78', '67', '', '', '', '', '', '', '', '184010', 'default_profile.png', '184010_adhar_card.png', '184010_passport.png', '184010_birth_certificate.png', '184010_caste_certificate.png', '184010_ssc_marksheet.png', '184010_hsc_marksheet.png', '184010_jee_marksheet.png', '184010_passport_size_photo.png', '184010_domicile.png', '184010_non_cremiliear.png', '184010_physical_handicap.png', '184010_sem_1_marksheet.png', '184010_sem_2_marksheet.png', '184010_sem_3_marksheet.png', '184010_sem_4_marksheet.png', '184010_sem_5_marksheet.png', '184010_sem_6_marksheet.png', '184010_year_1_receipt.png', '184010_year_2_receipt.png', '184010_year_3_receipt.png', '184010_certificate_1.png', '184010_certificate_2.png', '', '', '', '', '', 'Verified', 'Basic Profile Completed', '1'),
(184012, 'Lavanya', 'Bbagave', 'lavanyabagave@gmail.com', '9823770938', 'Maharashtra Pune - 411028', '2001-12-04', 'A+', 'INDIAN', 'OBC', '56', '99', '34', '56', '34', '', '', '', '', '', '', '', '184012', 'default_profile.png', '184012_adhar_card.png', '184012_passport.png', '184012_birth_certificate.png', '184012_caste_certificate.png', '184012_ssc_marksheet.png', '184012_hsc_marksheet.png', '184012_jee_marksheet.png', '184012_passport_size_photo.png', '184012_domicile.png', '184012_non_cremiliear.png', '184012_physical_handicap.png', '184012_sem_1_marksheet.png', '184012_sem_2_marksheet.png', '184012_sem_3_marksheet.png', '184012_sem_4_marksheet.png', '184012_sem_5_marksheet.png', '184012_sem_6_marksheet.png', '184012_year_1_receipt.png', '184012_year_2_receipt.png', '184012_year_3_receipt.png', '184012_certificate_1.png', '184012_certificate_2.png', '', '', '', '', '', 'Verified', 'Basic Profile Completed', '1'),
(184013, 'Arpita', 'Patil', 'arpitapatil1007@gmail.com', '8830298617', 'Maharashtra Pune - 411028', '2001-12-08', 'A+', 'INDIAN', 'OPEN', '45', '45', '45', '45', '45', '', '', '', '', '', '', '', '184013', 'default_profile.png', '184013_adhar_card.png', '184013_passport.png', '184013_birth_certificate.png', '184013_caste_certificate.png', '184013_ssc_marksheet.png', '184013_hsc_marksheet.png', '184013_jee_marksheet.png', '184013_passport_size_photo.png', '184013_domicile.png', '184013_non_cremiliear.png', '184013_physical_handicap.png', '184013_sem_1_marksheet.png', '184013_sem_2_marksheet.png', '184013_sem_3_marksheet.png', '184013_sem_4_marksheet.png', '184013_sem_5_marksheet.png', '184013_sem_6_marksheet.png', '184013_year_1_receipt.png', '184013_year_2_receipt.png', '184013_year_3_receipt.png', '184013_certificate_1.png', '184013_certificate_2.png', '', '', '', '', '', 'Rejected', 'Please Upload all documents', '0'),
(184014, 'Tazeen', 'Sayed', 'tazeengsayed15@gmail.com', '8806196786', 'Maharashtra Pune - 411028', '2002-07-11', 'A+', 'INDIAN', 'OPEN', '66', '34', '55', '66', '55', '', '', '', '', '', '', '', '184014', 'default_profile.png', '184014_adhar_card.png', '184014_passport.png', '184014_birth_certificate.png', '184014_caste_certificate.png', '184014_ssc_marksheet.png', '184014_hsc_marksheet.png', '184014_jee_marksheet.png', '184014_passport_size_photo.png', '184014_domicile.png', '184014_non_cremiliear.png', '184014_physical_handicap.png', '184014_sem_1_marksheet.png', '184014_sem_2_marksheet.png', '184014_sem_3_marksheet.png', '184014_sem_4_marksheet.png', '184014_sem_5_marksheet.png', '184014_sem_6_marksheet.png', '184014_year_1_receipt.png', '184014_year_2_receipt.png', '184014_year_3_receipt.png', '184014_certificate_1.png', '184014_certificate_2.png', '', '', '', '', '', 'Under Scrutiny', '', '0'),
(184015, 'Srushti', 'Jejurikar', 'srushtijejurikar1829@gmail.com', '8411842564', 'Maharashtra Pune - 411028', '2001-06-22', 'AB+', 'INDIAN', 'OBC', '64', '45', '34', '64', '34', '', '', '', '', '', '', '', '184015', 'default_profile.png', '184015_adhar_card.png', '184015_passport.png', '184015_birth_certificate.png', '184015_caste_certificate.png', '184015_ssc_marksheet.png', '184015_hsc_marksheet.png', '184015_jee_marksheet.png', '184015_passport_size_photo.png', '184015_domicile.png', '184015_non_cremiliear.png', '184015_physical_handicap.png', '184015_sem_1_marksheet.png', '184015_sem_2_marksheet.png', '184015_sem_3_marksheet.png', '184015_sem_4_marksheet.png', '184015_sem_5_marksheet.png', '184015_sem_6_marksheet.png', '184015_year_1_receipt.png', '184015_year_2_receipt.png', '184015_year_3_receipt.png', '184015_certificate_1.png', '184015_certificate_2.png', '', '', '', '', '', 'Under Scrutiny', '', '0'),
(184016, 'Aryan', 'Bhingare', 'aryanbhingare02@gmail.com', '9096850298', 'Maharashtra Pune - 411028', '2002-08-30', 'B+', 'INDIAN', 'OBC', '67', '56', '77', '67', '77', '', '', 'Java Programming', 'C40aa1', '2021-07-17', '2021-07-24', '50', '184016', 'default_profile.png', '184016_adhar_card.png', '184016_passport.png', '184016_birth_certificate.png', '184016_caste_certificate.png', '184016_ssc_marksheet.png', '184016_hsc_marksheet.png', '184016_jee_marksheet.png', '184016_passport_size_photo.png', '184016_domicile.png', '184016_non_cremiliear.png', '184016_physical_handicap.png', '184016_sem_1_marksheet.png', '184016_sem_2_marksheet.png', '184016_sem_3_marksheet.png', '184016_sem_4_marksheet.png', '184016_sem_5_marksheet.png', '184016_sem_6_marksheet.png', '184016_year_1_receipt.png', '184016_year_2_receipt.png', '184016_year_3_receipt.png', '184016_certificate_1.png', '184016_certificate_2.png', '', '', '', '', '', 'Verified', 'Basic Profile Completed', '1'),
(184017, 'Sumit', 'Nemade', 'sumitnemade1112@gmail.com', '9325962860', 'Maharashtra Pune - 411028', '2001-05-19', 'AB+', 'INDIAN', 'OPEN', '54', '23', '77', '54', '77', '', '', '', '', '', '', '', '184017', 'default_profile.png', '184017_adhar_card.png', '184017_passport.png', '184017_birth_certificate.png', '184017_caste_certificate.png', '184017_ssc_marksheet.png', '184017_hsc_marksheet.png', '184017_jee_marksheet.png', '184017_passport_size_photo.png', '184017_domicile.png', '184017_non_cremiliear.png', '184017_physical_handicap.png', '184017_sem_1_marksheet.png', '184017_sem_2_marksheet.png', '184017_sem_3_marksheet.png', '184017_sem_4_marksheet.png', '184017_sem_5_marksheet.png', '184017_sem_6_marksheet.png', '184017_year_1_receipt.png', '184017_year_2_receipt.png', '184017_year_3_receipt.png', '184017_certificate_1.png', '184017_certificate_2.png', '', '', '', '', '', 'Verified', 'Basic Profile Completed', '1'),
(184018, 'Yash', 'Jadhav', 'yash.s.jadhav124@gmail.com', '9823305648', 'Maharashtra Pune - 411028', '2001-11-22', 'A+', 'INDIAN', 'OPEN', '34', '66', '78', '34', '78', '', '', '', '', '', '', '', '184018', 'default_profile.png', '184018_adhar_card.png', '184018_passport.png', '184018_birth_certificate.png', '184018_caste_certificate.png', '184018_ssc_marksheet.png', '184018_hsc_marksheet.png', '184018_jee_marksheet.png', '184018_passport_size_photo.png', '184018_domicile.png', '184018_non_cremiliear.png', '184018_physical_handicap.png', '184018_sem_1_marksheet.png', '184018_sem_2_marksheet.png', '184018_sem_3_marksheet.png', '184018_sem_4_marksheet.png', '184018_sem_5_marksheet.png', '184018_sem_6_marksheet.png', '184018_year_1_receipt.png', '184018_year_2_receipt.png', '184018_year_3_receipt.png', '184018_certificate_1.png', '184018_certificate_2.png', '', '', '', '', '', 'Under Scrutiny', '', '0'),
(184019, '', '', '', '', '', '', '', '', '', ' ', ' ', '', '', ' ', '', '', '', '', '', '', '', '184019', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(184020, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '184020', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(184021, 'Sara', 'Shaikh', 'sarassk21@gmail.com', '7210110121', 'Maharashtra Pune - 411028', '2002-11-11', 'A+', 'INDIAN', 'OPEN', '', '', '', '', '', '', '', 'Linux', 'LN3909', '2021-07-18', '2021-07-25', '50', '184021', 'default_profile.png', '184021_adhar_card.png', '184021_passport.png', '184021_birth_certificate.png', '184021_caste_certificate.png', '184021_ssc_marksheet.png', '184021_hsc_marksheet.png', '184021_jee_marksheet.png', '184021_passport_size_photo.png', '184021_domicile.png', '184021_non_cremiliear.png', '184021_physical_handicap.png', '184021_sem_1_marksheet.png', '184021_sem_2_marksheet.png', '184021_sem_3_marksheet.png', '184021_sem_4_marksheet.png', '184021_sem_5_marksheet.png', '184021_sem_6_marksheet.png', '184021_year_1_receipt.png', '184021_year_2_receipt.png', '184021_year_3_receipt.png', '184021_certificate_1.png', '184021_certificate_2.png', '', '', '', '', '', 'Verified', 'Basic Profile Completed', '1'),
(184022, 'Sanket', 'Shendge', 'archanashendge88.as@gmail.com', '9325364363', 'Maharashtra Pune - 411028', '2002-05-21', 'A+', 'INDIAN', 'OBC', '', '', '', '', '', '', '', 'PHP', 'PD3439', '2021-07-12', '2021-07-19', '50', '184022', 'default_profile.png', '184022_adhar_card.png', '184022_passport.png', '184022_birth_certificate.png', '184022_caste_certificate.png', '184022_ssc_marksheet.png', '184022_hsc_marksheet.png', '184022_jee_marksheet.png', '184022_passport_size_photo.png', '184022_domicile.png', '184022_non_cremiliear.png', '184022_physical_handicap.png', '184022_sem_1_marksheet.png', '184022_sem_2_marksheet.png', '184022_sem_3_marksheet.png', '184022_sem_4_marksheet.png', '184022_sem_5_marksheet.png', '184022_sem_6_marksheet.png', '184022_year_1_receipt.png', '184022_year_2_receipt.png', '184022_year_3_receipt.png', '184022_certificate_1.png', '184022_certificate_2.png', '', '', '', '', '', 'Verified', 'Basic Profile Completed', '1'),
(184023, 'Vaibhav', 'Shinde', 'vaibhavbshinde02@gmail.com', '9021512959', 'Maharashtra Pune - 411028', '2002-08-12', 'B+', 'INDIAN', 'OPEN', '', '', '', '', '', '', '', '', '', '', '', '', '184023', 'default_profile.png', '184023_adhar_card.png', '184023_passport.png', '184023_birth_certificate.png', '184023_caste_certificate.png', '184023_ssc_marksheet.png', '184023_hsc_marksheet.png', '184023_jee_marksheet.png', '184023_passport_size_photo.png', '184023_domicile.png', '184023_non_cremiliear.png', '184023_physical_handicap.png', '184023_sem_1_marksheet.png', '184023_sem_2_marksheet.png', '184023_sem_3_marksheet.png', '184023_sem_4_marksheet.png', '184023_sem_5_marksheet.png', '184023_sem_6_marksheet.png', '184023_year_1_receipt.png', '184023_year_2_receipt.png', '184023_year_3_receipt.png', '184023_certificate_1.png', '184023_certificate_2.png', '', '', '', '', '', 'Verified', 'Basic Profile Completed', '1'),
(184024, 'Aditya', 'kamble', 'adityakamble2809@gmail.com', '7887648894', 'Maharashtra Pune - 411028', '2001-05-22', 'A+', 'INDIAN', 'OBC', '', '', '', '', '', '', '', '', '', '', '', '', '184024', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Under Scrutiny', '', '0'),
(184025, 'Shruti', 'Inamdar', 'shrutiinamdar500@gmail.com', '9405841326', 'Maharashtra Pune - 411028', '2002-11-10', 'O+', 'INDIAN', 'OPEN', '', '', '', '', '', '', '', '', '', '', '', '', '184025', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Under Scrutiny', '', '0'),
(184026, 'Atharva', 'Pawar', 'atharvapawar2905@gmail.com', '8888482905', 'Maharashtra Pune - 411028', '2001-11-12', 'B+', 'INDIAN', 'OBC', '', '', '', '', '', '', '', '', '', '', '', '', '184026', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Under Scrutiny', '', '0'),
(184027, 'Aniruddha', 'Kamble', 'andykamble90@gmail.com', '7066430858', 'Maharashtra Pune - 411028', '2002-11-22', 'B+', 'INDIAN', 'OBC', '', '', '', '', '', '', '', '', '', '', '', '', '184027', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Under Scrutiny', '', '0'),
(184028, 'Kauntey', 'Waghmare', 'kauntey4646@gmail.com', '8766835018', 'Maharashtra Pune - 411028', '2001-11-08', 'A+', 'INDIAN', 'OBC', '', '', '', '', '', '', '', '', '', '', '', '', '184028', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Under Scrutiny', '', '0'),
(184029, 'Rushikesh', 'Sonmale', 'rsonmale14@gmail.com', '9373341067', 'Maharashtra Pune - 411028', '2001-11-04', 'B+', 'INDIAN', 'OPEN', '', '', '', '', '', '', '', '', '', '', '', '', '184029', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Under Scrutiny', '', '0'),
(184030, 'Rohan', 'Marale', 'rohanm814@gmail.com', '8108181327', 'Magarpatta', '2002-05-11', 'A+', 'INDIAN', 'OBC', '', '', '', '', '', '', '', 'IOM', 'OD3432', '2021-07-25', '2021-07-18', '50', '184030', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '184030_sem_5_marksheet.png', '184030_sem_6_marksheet.png', '184030_year_1_receipt.png', '', '', '', '', '', '', '', '', '', 'Verified', 'Basic Profile Completed', '1'),
(184031, 'Priyanka ', 'Rokade', 'rokadepriyanka2002@gmail.com', '9322359083', 'Maharashtra Pune - 411028', '2002-11-04', 'B+', 'INDIAN', 'OBC', '', '', '', '', '', '', '', '', '', '', '', '', '184031', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Under Scrutiny', '', '0'),
(184032, 'Atharv', 'patil', 'at@gmail.com', '8108181326', 'Nashik, Maharashtra.', '2001-09-23', 'A+', 'INDIAN', 'OPEN', '', '', '', '', '', '', '', '', '', '', '', '', '184032', 'default_profile.png', '184032_adhar_card.png', '184032_passport.png', '184032_birth_certificate.png', '184032_caste_certificate.png', '184032_ssc_marksheet.png', '184032_hsc_marksheet.png', '184032_jee_marksheet.png', '184032_passport_size_photo.png', '184032_domicile.png', '184032_non_cremiliear.png', '184032_physical_handicap.png', '184032_sem_1_marksheet.png', '184032_sem_2_marksheet.png', '', '', '', '', '', '', '', '184032_certificate_1.png', '', '', '', '', '', '', 'Verified', 'Basic Profile Completed', '1'),
(184033, 'Smruti', 'Rokade', 'sumurokade09@gmail.com', '7218134829', 'Maharashtra Pune - 411028', '2001-06-11', 'A+', 'INDIAN', 'OPEN', '', '', '', '', '', '', '', '', '', '', '', '', '184033', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Under Scrutiny', '', '0'),
(184034, 'Shivam', 'Bendre', 'shivambendre55555@gmail.com', '7387117084', 'Maharashtra Pune - 411028', '2000-02-01', 'A+', 'INDIAN', 'OBC', '', '', '', '', '', '', '', '', '', '', '', '', '184034', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Under Scrutiny', '', '0'),
(184035, 'Suraj', 'Sakhare', 'surajsakhare142002@gmail.com', '8600011630', 'Maharashtra Pune - 411028', '2002-05-22', 'O+', 'INDIAN', 'OPEN', '', '', '', '', '', '', '', '', '', '', '', '', '184035', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Verified', 'Basic Profile Completed', '1'),
(184036, 'Chaitralee', 'Bhosale', 'bhosalechaitralee@gmail.com', '9860136165', 'Maharashtra Pune - 411028', '2001-11-01', 'A+', 'INDIAN', 'OBC', '', '', '', '', '', '', '', '', '', '', '', '', '184036', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Under Scrutiny', '', '0'),
(184037, 'Shreya', 'Bhumkar ', 'shreyabhumkar0105@gmail.com', '8637788421', 'Maharashtra Pune - 411028', '2002-10-14', 'A+', 'INDIAN', 'OPEN', '', '', '', '', '', '', '', '', '', '', '', '', '184037', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Under Scrutiny', '', '0'),
(184038, 'Uttkarsh', 'Chavan', 'uttkarshchavan24@gmail.com', '7758833461', '74/1 Ambodi Road Mhada Society Building No.-M', '2002-10-15', 'O+', 'INDIAN', 'OPEN', '', '', '', '', '', '', '', '', '', '', '', '', '184038', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Under Scrutiny', '', '0'),
(184039, 'Mamta', 'Patil', 'mamta184039@gmail.com', '7796363377', 'Maharashtra Pune - 411028', '2002-09-22', 'A+', 'INDIAN', 'OBC', '', '', '', '', '', '', '', '', '', '', '', '', '184039', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Under Scrutiny', '', '0'),
(184040, 'Tanaya', 'Naik', 'tanayanaik23@gmail.com', '9421663167', 'Maharashtra Pune - 411028', '2003-02-23', 'O-', 'INDIAN', 'OPEN', '', '', '', '', '', '', '', '', '', '', '', '', '184040', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Under Scrutiny', '', '0'),
(194001, 'Rohit ', 'Shidid', 'Rohitshidid1@gmail.com', '', 'Koregaon Park', '2021-07-01', 'B+', 'INDIAN', 'OPEN', '', '', '', '', '', '', '', '', '', '', '', '', '194001', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Rejected', 'enter correct adharcard', '0'),
(194002, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '194002', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(194003, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '194003', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(194004, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '194004', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(194005, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '194005', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(194006, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '194006', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(194007, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '194007', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(194008, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '194008', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(194009, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '194009', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(194010, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '194010', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(194011, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '194011', 'default_profile.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_tb`
--

CREATE TABLE `teacher_tb` (
  `email` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `t_password` varchar(45) NOT NULL,
  `c_password` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `teacher_id` varchar(45) NOT NULL,
  `phone_number` varchar(45) NOT NULL,
  `category` varchar(45) NOT NULL,
  `department` varchar(45) NOT NULL,
  `qualification` varchar(45) NOT NULL,
  `join_date` varchar(45) NOT NULL,
  `dob` varchar(45) NOT NULL,
  `designation` varchar(45) NOT NULL,
  `blood_group` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `profile_img` varchar(45) NOT NULL,
  `flag` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_tb`
--

INSERT INTO `teacher_tb` (`email`, `first_name`, `last_name`, `t_password`, `c_password`, `address`, `teacher_id`, `phone_number`, `category`, `department`, `qualification`, `join_date`, `dob`, `designation`, `blood_group`, `gender`, `profile_img`, `flag`) VALUES
('vitthalkamble@gmail.com', 'Vitthal', 'Kamble', 'a', 'a', 'Maharashtra', 'CP2001', '9822902511', 'Department', 'Computer', 'ME Computer', '19/12/2006', '09/03/1980', 'Lecturer', 'B+', 'Male', 'CP2001.png', '1'),
('sayalidomare@gmail.com', 'Sayali', 'Domare', 'A', 'A', 'NASHIK', 'CP2002', '9823059590', 'Department', 'Computer', 'ME Computers', '2021-06-22', '1995-02-01', 'Lecturer', 'B+', 'Female', 'CP2232.png', '0'),
('arunjamble@gmail.com', 'Arun', 'Jambhale', 'a', 'a', 'MAHARASHTRA, PUNE', 'CP2003', '9403772195', 'Department', 'Computer', 'ME Computer', '29/09/1999', '09/03/1980', 'Lecturer', 'A-', 'Male', 'CP2321.png', '1'),
('dhanshreepatil@gmail.com', 'Dhanashree', 'Patil', 'a', 'a', 'Maharashtra', 'CP2004', '9822354357', 'Department', 'Computer', 'ME Computer', '01/01/2006', '09/03/1980', 'Lecturer', 'B+', 'Female', 'CP2002.png', '0'),
('komal@gmail.com', 'Komal ', 'Jakotiya', 'a', 'a', 'Pune Maharashtra', 'CP2324', '8080150456', 'Department', 'Computer', 'ME Computer', '01/08/2006', '09/03/1980', 'Lecturer', 'A-', 'Female', 'CP2324.png', '0'),
('samirkale@gmail.com', 'Samir', 'Kale', 'a', 'a', 'MAHARASHTRA, PUNE', 'LI1002', '9888828888', 'Department', 'Science', 'ME Science', '01/01/2006', '09/03/1980', 'Lecturer', 'B+', 'Male', 'SC4444.png', '1'),
('ashkothari@gmail.com', 'Ashwin', 'Kothari', 'a', 'a', 'Pune maharashtra', 'LI2002', '9999977777', 'Library', 'Library', 'ME Management', '23/09/2002', '19/09/1975', 'Library Head', 'B+', 'Male', 'LI2002.png', '1'),
('maya@gmail.com', 'Maya', 'Chavan', 'a', 'a', 'MAHARASHTRA, PUNE', 'OF3001', '880614361', 'Office', 'Computer', 'ME Computer', '01/01/2002', '09/03/1980', 'Lecturer', 'B+', 'Female', 'CP2325.png', '0'),
('deepa@gmail.com', 'Deepa', 'Bapat', 'a', 'a', 'MAHARASHTRA, PUNE', 'OF3002', '9834248760', 'Office', 'Office', 'MBA', '03/02/2010', '10/07/1975', 'Office Head', 'B+', 'Female', 'OF3002.png', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_tb`
--
ALTER TABLE `activity_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curriculam_tb`
--
ALTER TABLE `curriculam_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issued_books_history_tb`
--
ALTER TABLE `issued_books_history_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `marks_tb`
--
ALTER TABLE `marks_tb`
  ADD UNIQUE KEY `s_roll` (`s_roll`);

--
-- Indexes for table `notice_tb`
--
ALTER TABLE `notice_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student_tb`
--
ALTER TABLE `student_tb`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `teacher_tb`
--
ALTER TABLE `teacher_tb`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_tb`
--
ALTER TABLE `activity_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `curriculam_tb`
--
ALTER TABLE `curriculam_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `issued_books_history_tb`
--
ALTER TABLE `issued_books_history_tb`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `notice_tb`
--
ALTER TABLE `notice_tb`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
