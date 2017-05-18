-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2017 at 03:40 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `author_issue_papers`
--

CREATE TABLE `author_issue_papers` (
  `id` int(11) NOT NULL,
  `issue_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `paper` varchar(400) NOT NULL,
  `copyright` varchar(400) NOT NULL,
  `reviewer_new` varchar(600) DEFAULT NULL,
  `reviewer_id` varchar(300) DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL,
  `comment` varchar(300) DEFAULT NULL,
  `recievedDate` datetime DEFAULT NULL,
  `reviewDate` datetime DEFAULT NULL,
  `acceptDate` datetime DEFAULT NULL,
  `rejectDate` datetime DEFAULT NULL,
  `modifyDate` datetime DEFAULT NULL,
  `resubmittedDate` datetime DEFAULT NULL,
  `tn_no` bigint(20) DEFAULT NULL,
  `tn_photo` varchar(300) DEFAULT NULL,
  `transactionSubmittedDate` datetime DEFAULT NULL,
  `paidDate` datetime DEFAULT NULL,
  `publishedDate` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author_issue_papers`
--

INSERT INTO `author_issue_papers` (`id`, `issue_id`, `user_id`, `paper`, `copyright`, `reviewer_new`, `reviewer_id`, `status`, `comment`, `recievedDate`, `reviewDate`, `acceptDate`, `rejectDate`, `modifyDate`, `resubmittedDate`, `tn_no`, `tn_photo`, `transactionSubmittedDate`, `paidDate`, `publishedDate`, `created_at`, `updated_at`) VALUES
(4, 1, 2, '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/03\\/1111f-3.pdf","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/03\\/1111f-3.pdf","type":"application\\/pdf"}', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/03\\/6.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/03\\/6.jpg","type":"image\\/jpeg"}', '', '', 'transactionSubmitted', 'Great', NULL, NULL, '2017-04-30 14:40:13', NULL, '2017-03-18 07:08:58', '2017-03-18 07:09:50', 63464646, NULL, '2017-04-30 14:40:46', NULL, NULL, '2017-03-18 05:58:36', '2017-04-30 14:40:46'),
(5, 1, 2, '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/03\\/1111f-3.pdf","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/03\\/1111f-3.pdf","type":"application\\/pdf"}', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/03\\/6.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/03\\/6.jpg","type":"image\\/jpeg"}', '', '', 'transactionSubmitted', 'Great', NULL, NULL, '2017-04-30 14:42:14', NULL, '2017-04-04 02:39:26', '2017-03-18 07:09:50', NULL, '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/04\\/F5-Slider-Image-3-12.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/04\\/F5-Slider-Image-3-12.jpg","type":"image\\/jpeg"}', '2017-04-30 15:06:26', NULL, NULL, '2017-03-18 05:58:36', '2017-04-30 15:06:26'),
(6, 3, 2, '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/04\\/Copyright_Form.docx","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/04\\/Copyright_Form.docx","type":"application\\/vnd.openxmlformats-officedocument.wordprocessingml.document"}', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/04\\/Copyright_Form-1.docx","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/04\\/Copyright_Form-1.docx","type":"application\\/vnd.openxmlformats-officedocument.wordprocessingml.document"}', '', '', 'recieved', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-04-05 02:25:02', '2017-04-05 02:25:02'),
(7, 1, 23, '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/04\\/Copyright_Form-1-1.docx","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/04\\/Copyright_Form-1-1.docx","type":"application\\/vnd.openxmlformats-officedocument.wordprocessingml.document"}', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/04\\/Copyright_Form-2.docx","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/04\\/Copyright_Form-2.docx","type":"application\\/vnd.openxmlformats-officedocument.wordprocessingml.document"}', '{"1":{"reviewer1_name":"reviewer3@gmail.com","reviewer1_email":"rbalabca@gmail.com","reviewer1_phno":"9994859797"},"2":{"reviewer2_name":"","reviewer2_email":"","reviewer2_phno":""},"3":{"reviewer3_name":"","reviewer3_email":"","reviewer3_phno":""}}', '', 'transactionSubmitted', '', NULL, '2017-04-23 10:20:37', '2017-04-23 10:32:00', NULL, NULL, NULL, 111, '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/04\\/F5-Slider-Image-3-2.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/04\\/F5-Slider-Image-3-2.jpg","type":"image\\/jpeg"}', '2017-05-13 22:50:35', NULL, NULL, '2017-04-23 10:18:47', '2017-05-13 22:50:35'),
(9, 3, 23, '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/05\\/Paper-Template-1-1.doc","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/05\\/Paper-Template-1-1.doc","type":"application\\/msword"}', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/05\\/Paper-Template-2.doc","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/05\\/Paper-Template-2.doc","type":"application\\/msword"}', '', '', 'review', NULL, NULL, '2017-05-13 23:08:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-13 23:06:34', '2017-05-13 23:08:27');

-- --------------------------------------------------------

--
-- Table structure for table `author_issue_paper_reviewers`
--

CREATE TABLE `author_issue_paper_reviewers` (
  `id` int(11) NOT NULL,
  `author_issue_paper_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author_issue_paper_reviewers`
--

INSERT INTO `author_issue_paper_reviewers` (`id`, `author_issue_paper_id`, `user_id`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(14, 9, 22, 'accept', 'Very good work', '2017-05-13 23:08:27', '2017-05-13 23:09:38'),
(13, 7, 22, 'accept', 'Good', '2017-04-23 10:20:37', '2017-04-23 10:30:34'),
(12, 4, 22, 'reject', 'Super', '2017-03-18 06:08:26', '2017-03-18 07:03:46');

-- --------------------------------------------------------

--
-- Table structure for table `carosel_sliders`
--

CREATE TABLE `carosel_sliders` (
  `id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carosel_sliders`
--

INSERT INTO `carosel_sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
(5, '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/05\\/F5-Slider-Image-3-10.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/05\\/F5-Slider-Image-3-10.jpg","type":"image\\/jpeg"}', '2017-05-13 07:19:08', '2017-05-13 07:19:08');

-- --------------------------------------------------------

--
-- Table structure for table `conferences`
--

CREATE TABLE `conferences` (
  `id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conferences`
--

INSERT INTO `conferences` (`id`, `image`, `description`, `created_at`, `updated_at`) VALUES
(3, '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/05\\/F5-Slider-Image-3-9.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/05\\/F5-Slider-Image-3-9.jpg","type":"image\\/jpeg"}', 'Sample Applicaion', '2017-05-13 11:08:11', '2017-05-13 11:08:11'),
(4, '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/05\\/pranitha-5.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/05\\/pranitha-5.jpg","type":"image\\/jpeg"}', 'sdvbdjsvbujdsvbjisdvbij\r\nbdvjbvdsoijbdvsoij\r\nokbnvjoksbvjibdvsji', '2017-05-13 12:05:48', '2017-05-13 12:05:48');

-- --------------------------------------------------------

--
-- Table structure for table `editors`
--

CREATE TABLE `editors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `email_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `files` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `photo` varchar(300) NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `editors`
--

INSERT INTO `editors` (`id`, `name`, `phone_no`, `email_id`, `files`, `photo`, `is_verified`, `created_at`, `updated_at`) VALUES
(1, 'ydgcvyd', 89849459545, 'rbalabca@gmail.com', '8338383821', '', 1, '2017-01-08 18:27:56', '2017-01-08 19:32:18'),
(2, 'Bala', 9994859797, 'rbalabca@gmail.com', 'Array', '', 1, '2017-01-08 18:29:12', '2017-01-08 19:32:48'),
(3, 'Bala', 9994859797, 'rbalabca@gmail.com', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/01\\/sample-2.txt","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/01\\/sample-2.txt","type":"text\\/plain"}', '', 1, '2017-01-08 18:30:28', '2017-01-08 19:41:11'),
(4, 'Bala', 4994043212, 'ifniofni@gmail.com', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/01\\/sample-3.txt","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/01\\/sample-3.txt","type":"text\\/plain"}', '', 1, '2017-01-08 18:31:44', '2017-01-27 02:17:24'),
(6, 'Bala1', 3333223, 'Sam@gmail.com', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/03\\/1111f-11.pdf","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/03\\/1111f-11.pdf","type":"application\\/pdf"}', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/03\\/blank-profile-picture-973460_640-7.png","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/03\\/blank-profile-picture-973460_640-7.png","type":"image\\/png"}', 0, '2017-03-21 21:46:19', '2017-03-21 21:46:19'),
(7, 'Bala', 9994859797, 'nbf@gmail.com', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/04\\/Copyright_Form-4.docx","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/04\\/Copyright_Form-4.docx","type":"application\\/vnd.openxmlformats-officedocument.wordprocessingml.document"}', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/04\\/F5-Slider-Image-3.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/04\\/F5-Slider-Image-3.jpg","type":"image\\/jpeg"}', 0, '2017-04-26 12:59:10', '2017-04-26 12:59:10'),
(8, 'Bala', 9994859797, 'nbf@gmail.com', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/04\\/Copyright_Form-5.docx","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/04\\/Copyright_Form-5.docx","type":"application\\/vnd.openxmlformats-officedocument.wordprocessingml.document"}', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/04\\/F5-Slider-Image-3-1.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/04\\/F5-Slider-Image-3-1.jpg","type":"image\\/jpeg"}', 0, '2017-04-26 12:59:35', '2017-04-26 12:59:35'),
(9, 'Balacheck', 9994859797, 'rbala11@gmail.com', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/04\\/F5-Slider-Image-3-3.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/04\\/F5-Slider-Image-3-3.jpg","type":"image\\/jpeg"}', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/04\\/pranitha-1.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/04\\/pranitha-1.jpg","type":"image\\/jpeg"}', 0, '2017-04-30 09:02:02', '2017-04-30 09:02:02'),
(10, 'Siva Check', 9997864648, 'baladevi@gmail.com', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/04\\/Paper-Template-1.doc","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/04\\/Paper-Template-1.doc","type":"application\\/msword"}', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/04\\/pranitha-2.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/04\\/pranitha-2.jpg","type":"image\\/jpeg"}', 0, '2017-04-30 09:04:33', '2017-04-30 09:04:33');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `email`, `comments`, `created_at`, `updated_at`) VALUES
(1, 'Sam', 'rbala111@gmail.com', 'Sample', '2017-05-07 09:10:44', '2017-05-07 09:10:44'),
(2, 'SamSSiva', 'balachandranr@ihorsetechnologies.com', 'Sample jidvsbijdsv ijsdv ijsdv ijs dvij sdvij', '2017-05-07 10:02:26', '2017-05-07 10:02:26');

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `id` int(11) NOT NULL,
  `issue_no` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `start_date` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `volume_id` int(11) NOT NULL,
  `journal_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`id`, `issue_no`, `name`, `start_date`, `volume_id`, `journal_id`, `status`, `active`, `published`, `created_at`, `updated_at`) VALUES
(1, 1001, 'Issue Name1', 'June 2016', 1, 5, 0, 1, 0, '2017-01-01 22:00:28', '2017-05-13 17:14:35'),
(2, 1002, 'Issue Name2', 'January 2017', 3, 1, 1, 0, 1, '2017-01-01 22:01:25', '2017-05-13 17:14:35'),
(3, 1003, 'Issue Name3', 'June 2017', 3, 3, 0, 1, 1, '2017-01-01 22:11:04', '2017-05-13 17:14:35'),
(4, 1005, 'Issue Name5', '22 Apr 2016', 1, 1, 1, 0, 1, '2017-03-23 19:03:22', '2017-05-13 17:14:35');

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `issn_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `color` varchar(10) NOT NULL,
  `des` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `images` varchar(300) NOT NULL,
  `impact_no` varchar(300) NOT NULL,
  `header_img` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`id`, `name`, `issn_no`, `color`, `des`, `images`, `impact_no`, `header_img`, `created_at`, `updated_at`) VALUES
(1, 'Mechanical Enginnering', 'ISSN 2395-6453', '60AB1B', '<div class="component-bg">\r\n<div class="container">\r\n\r\n&nbsp;\r\n<h2><span style="font-weight: bold;">             Aim and Scope</span></h2>\r\n<p style="text-align: justify; text-justify: inter-word;"><span style="font-weight: bold;">International Journal of Research in Engineering, Science and Technologies – Mechanical Engineering is</span> a monthly journal published online, open-access and having double-blind peer reviewed.  The motive and aim is to create awareness, re-shaping the knowledge already created and challenge the existing theories related to the field of Mechanical Engineering. It invites academicians, scientists, research scholars, Technical consultants, construction &amp; site engineers, students to submit their novel ideas &amp; knowledge in the domain of Mechanical Engineering in the form of research articles, case studies, review articles and personal opinions that can benefit the Mechanical Engineering fraternity and the society as a whole.</p>\r\nThis online journal aims to cover the latest technological developments in the field of<span style="font-weight: bold;"> Mechanical Engineering</span> in the following areas;\r\n\r\n&nbsp;\r\n<table style="width: 60%; padding: 5px; border: 0px #00A300 solid; background: #ffffff;" border="0" cellspacing="2" cellpadding="5" align="center">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<ul>\r\n 	<li>Coastal Engineering</li>\r\n</ul>\r\n</td>\r\n<td>\r\n<ul>\r\n 	<li>Construction Engineering</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<ul>\r\n 	<li>Disaster management</li>\r\n</ul>\r\n</td>\r\n<td>\r\n<ul>\r\n 	<li>Engineering Management</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<ul>\r\n 	<li>Environmental Engineering</li>\r\n</ul>\r\n</td>\r\n<td>\r\n<ul>\r\n 	<li>Geotechnical Engineering</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<ul>\r\n 	<li>Green Building</li>\r\n</ul>\r\n</td>\r\n<td>\r\n<ul>\r\n 	<li>Materials Engineering</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<ul>\r\n 	<li>Project Management</li>\r\n</ul>\r\n</td>\r\n<td>\r\n<ul>\r\n 	<li>Structural Engineering</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<ul>\r\n 	<li>Surveying</li>\r\n</ul>\r\n</td>\r\n<td>\r\n<ul>\r\n 	<li>Town Planning &amp; Urban Development</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<ul>\r\n 	<li>Transportation Engineering</li>\r\n</ul>\r\n</td>\r\n<td>\r\n<ul>\r\n 	<li>Water Resources Engineering</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n&nbsp;\r\n\r\n&nbsp;\r\n\r\n</div>\r\n</div>', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/04\\/pranitha.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/04\\/pranitha.jpg","type":"image\\/jpeg"}', '895985', NULL, '2016-12-18 22:38:31', '2017-04-13 23:20:44'),
(3, 'Civil Enginnering', 'ISSN 2395-7879', '94A7FF', '<div class="component-bg">\n<div class="container">\n\n&nbsp;\n<h2><span style="font-weight: bold;">            Aim and Scope</span></h2>\n<p style="text-align: justify; text-justify: inter-word;"><span style="font-weight: bold;">International Journal of Research in Engineering, Science and Technologies – Civil Engineering is</span> a monthly journal published online, open-access and having double-blind peer reviewed.  The motive and aim is to create awareness, re-shaping the knowledge already created and challenge the existing theories related to the field of Civil Engineering. It invites academicians, scientists, research scholars, Technical consultants, construction &amp; site engineers, students to submit their novel ideas &amp; knowledge in the domain of Civil Engineering in the form of research articles, case studies, review articles and personal opinions that can benefit the Civil Engineering fraternity and the society as a whole.</p>\nThis online journal aims to cover the latest technological developments in the field of<span style="font-weight: bold;"> Civil Engineering</span> in the following areas;\n\n&nbsp;\n<table style="width: 60%; padding: 5px; border: 0px #00A300 solid; background: #ffffff;" border="0" cellspacing="2" cellpadding="5" align="center">\n<tbody>\n<tr>\n<td>\n<ul>\n 	<li>Coastal Engineering</li>\n</ul>\n</td>\n<td>\n<ul>\n 	<li>Construction Engineering</li>\n</ul>\n</td>\n</tr>\n<tr>\n<td>\n<ul>\n 	<li>Disaster management</li>\n</ul>\n</td>\n<td>\n<ul>\n 	<li>Engineering Management</li>\n</ul>\n</td>\n</tr>\n<tr>\n<td>\n<ul>\n 	<li>Environmental Engineering</li>\n</ul>\n</td>\n<td>\n<ul>\n 	<li>Geotechnical Engineering</li>\n</ul>\n</td>\n</tr>\n<tr>\n<td>\n<ul>\n 	<li>Green Building</li>\n</ul>\n</td>\n<td>\n<ul>\n 	<li>Materials Engineering</li>\n</ul>\n</td>\n</tr>\n<tr>\n<td>\n<ul>\n 	<li>Project Management</li>\n</ul>\n</td>\n<td>\n<ul>\n 	<li>Structural Engineering</li>\n</ul>\n</td>\n</tr>\n<tr>\n<td>\n<ul>\n 	<li>Surveying</li>\n</ul>\n</td>\n<td>\n<ul>\n 	<li>Town Planning &amp; Urban Development</li>\n</ul>\n</td>\n</tr>\n<tr>\n<td>\n<ul>\n 	<li>Transportation Engineering</li>\n</ul>\n</td>\n<td>\n<ul>\n 	<li>Water Resources Engineering</li>\n</ul>\n</td>\n</tr>\n</tbody>\n</table>\n&nbsp;\n\n&nbsp;\n\n</div>\n</div>', '', '', NULL, '2016-12-29 05:41:19', '2017-01-01 18:43:42'),
(5, 'Circuit Branches', 'ISSN 2395-9090', 'AD33FF', '<div class="component-bg">\r\n<div class="container">\r\n\r\n&nbsp;\r\n<h2><span style="font-weight: bold;">             Aim and Scope</span></h2>\r\n<p style="text-align: justify; text-justify: inter-word;"><span style="font-weight: bold;">International Journal of Research in Engineering, Science and Technologies – Circuit Branches is</span> a monthly journal published online, open-access and having double-blind peer reviewed.  The motive and aim is to create awareness, re-shaping the knowledge already created and challenge the existing theories related to the field of Mechanical Engineering. It invites academicians, scientists, research scholars, Technical consultants, construction &amp; site engineers, students to submit their novel ideas &amp; knowledge in the domain of Mechanical Engineering in the form of research articles, case studies, review articles and personal opinions that can benefit the Mechanical Engineering fraternity and the society as a whole.</p>\r\nThis online journal aims to cover the latest technological developments in the field of<span style="font-weight: bold;"> Mechanical Engineering</span> in the following areas;\r\n\r\n&nbsp;\r\n<table style="width: 60%; padding: 5px; border: 0px #00A300 solid; background: #ffffff;" border="0" cellspacing="2" cellpadding="5" align="center">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<ul>\r\n 	<li>Coastal Engineering</li>\r\n</ul>\r\n</td>\r\n<td>\r\n<ul>\r\n 	<li>Construction Engineering</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<ul>\r\n 	<li>Disaster management</li>\r\n</ul>\r\n</td>\r\n<td>\r\n<ul>\r\n 	<li>Engineering Management</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<ul>\r\n 	<li>Environmental Engineering</li>\r\n</ul>\r\n</td>\r\n<td>\r\n<ul>\r\n 	<li>Geotechnical Engineering</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<ul>\r\n 	<li>Green Building</li>\r\n</ul>\r\n</td>\r\n<td>\r\n<ul>\r\n 	<li>Materials Engineering</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<ul>\r\n 	<li>Project Management</li>\r\n</ul>\r\n</td>\r\n<td>\r\n<ul>\r\n 	<li>Structural Engineering</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<ul>\r\n 	<li>Surveying</li>\r\n</ul>\r\n</td>\r\n<td>\r\n<ul>\r\n 	<li>Town Planning &amp; Urban Development</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<ul>\r\n 	<li>Transportation Engineering</li>\r\n</ul>\r\n</td>\r\n<td>\r\n<ul>\r\n 	<li>Water Resources Engineering</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n&nbsp;\r\n\r\n&nbsp;\r\n\r\n</div>\r\n</div>', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/05\\/pranitha-1.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/05\\/pranitha-1.jpg","type":"image\\/jpeg"}', '646499', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/05\\/F5-Slider-Image-3.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/05\\/F5-Slider-Image-3.jpg","type":"image\\/jpeg"}', '2017-01-22 05:52:30', '2017-05-13 17:10:29'),
(6, 'Sam1', 'Sample1', 'FFFFFF', 'SDmsdvomvio', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/03\\/F5-Slider-Image-3-2.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/03\\/F5-Slider-Image-3-2.jpg","type":"image\\/jpeg"}', '446546548', NULL, '2017-03-23 23:02:50', '2017-03-23 23:06:33'),
(7, 'Issue Name 5', 'Sample', '6CAD15', 'Sampledv jhdvbsibdvsibdibijdsbijdvsbijb', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/04\\/pranitha-3.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/04\\/pranitha-3.jpg","type":"image\\/jpeg"}', '26565419', NULL, '2017-04-30 11:46:05', '2017-04-30 11:46:05'),
(8, 'Sample Jor', '455495984', 'FF9133', 'dgdgsdsgdsg', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/05\\/F5-Slider-Image-3-1.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/05\\/F5-Slider-Image-3-1.jpg","type":"image\\/jpeg"}', '5151515', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/05\\/F5-Slider-Image-3-1.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/05\\/F5-Slider-Image-3-1.jpg","type":"image\\/jpeg"}', '2017-05-07 19:26:21', '2017-05-07 19:26:21'),
(9, 'sdvdvsdv', '1515165', 'FFE92E', 'vddvsdvs', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/05\\/F5-Slider-Image-3-2.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/05\\/F5-Slider-Image-3-2.jpg","type":"image\\/jpeg"}', '11515', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/05\\/pranitha-3.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/05\\/pranitha-3.jpg","type":"image\\/jpeg"}', '2017-05-07 19:27:22', '2017-05-07 19:27:22');

-- --------------------------------------------------------

--
-- Table structure for table `journal_editors`
--

CREATE TABLE `journal_editors` (
  `id` int(11) NOT NULL,
  `image` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `type` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `qualification` varchar(250) NOT NULL,
  `job_nature` varchar(250) NOT NULL,
  `experience` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `place` varchar(250) NOT NULL,
  `city_country` varchar(250) NOT NULL,
  `emailid` varchar(250) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `journal_id` int(11) NOT NULL,
  `fb_url` varchar(200) NOT NULL,
  `tw_url` varchar(200) NOT NULL,
  `gp_url` varchar(200) NOT NULL,
  `ln_url` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journal_editors`
--

INSERT INTO `journal_editors` (`id`, `image`, `type`, `name`, `qualification`, `job_nature`, `experience`, `department`, `place`, `city_country`, `emailid`, `mobile_no`, `journal_id`, `fb_url`, `tw_url`, `gp_url`, `ln_url`, `created_at`, `updated_at`) VALUES
(1, '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/01\\/rao-7.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/01\\/rao-7.jpg","type":"image\\/jpeg"}', 1, 'Dr Y.R.M.Rao', 'B.E(civil)., M.E(Env.Engg)., Ph.D ', '', '29+ yrs Academic, Research & Adiministration ', 'Environmental Engineering', '', 'INDIA', '', '', 3, 'https://www.fb.com', 'https://www.twitter.co.in', 'https://www.google.co.in', 'https://www.ln.co.in', '2017-01-08 23:11:20', '2017-05-13 17:22:35'),
(2, '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/01\\/3.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/01\\/3.jpg","type":"image\\/jpeg"}', 2, 'Dr A.G.Bhole', '', 'Former HOD, VNIT & Emeritus Professor', '45+ years Academic, Research & Administration', 'Consulting in Environmental Engineering', '', 'Nagpur, INDIA.', '', '', 3, '', '', '', '', '2017-01-26 23:32:11', '2017-01-26 23:32:11'),
(3, '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/01\\/7.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/01\\/7.jpg","type":"image\\/jpeg"}', 3, 'Dr D K Parbat', '', '', '', 'Civil Engg Dept', 'Government Polytechnic', 'Nagpur (MS) 440 001,INDIA', 'parbatdk@gmail.com', ' 09422126000', 3, '', '', '', '', '2017-01-26 23:46:54', '2017-01-26 23:46:54'),
(4, '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/01\\/6.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/01\\/6.jpg","type":"image\\/jpeg"}', 4, 'Prof.N.Chandrasekharan ', '', 'Former Dean', '', '', 'Dr.Pauls Engineering College', 'Villupuram Dist. Tamilnadu, INDIA.', '', '', 3, '', '', '', '', '2017-01-26 23:49:02', '2017-01-26 23:49:02'),
(5, '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/03\\/4-1.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/03\\/4-1.jpg","type":"image\\/jpeg"}', 2, 'Sam', 'Sam', 'Sam', 'Sam', 'Sam', 'Sam', 'Sam', 'Sam@gmail.com', '4343424543', 3, '', 'http://www.tw.co.in', 'https://www.google.co.in', 'http://www.ln.co.in', '2017-03-21 20:45:39', '2017-05-07 18:47:01');

-- --------------------------------------------------------

--
-- Table structure for table `journal_issue_publishes`
--

CREATE TABLE `journal_issue_publishes` (
  `id` int(10) NOT NULL,
  `sno` int(11) NOT NULL,
  `issue_id` int(10) NOT NULL,
  `paper_title` varchar(400) NOT NULL,
  `author` varchar(500) NOT NULL,
  `page_no` varchar(15) NOT NULL,
  `pdf_file` varchar(300) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journal_issue_publishes`
--

INSERT INTO `journal_issue_publishes` (`id`, `sno`, `issue_id`, `paper_title`, `author`, `page_no`, `pdf_file`, `status`, `created_at`, `updated_at`) VALUES
(5, 1, 2, 'Paper Title', 'Author', 'Page No', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/02\\/1111f.pdf","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/02\\/1111f.pdf","type":"application\\/pdf"}', 1, '2017-02-11 17:34:20', '2017-05-13 06:45:38'),
(4, 2, 1, 'Paper Title', 'Author', '561651651', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/02\\/1111f-1.pdf","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/02\\/1111f-1.pdf","type":"application\\/pdf"}', 1, '2017-02-11 17:26:31', '2017-05-13 22:43:13'),
(6, 101, 4, 'Sample Paper', 'Sam', '1 to 100', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/03\\/1111f-12.pdf","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/03\\/1111f-12.pdf","type":"application\\/pdf"}', 0, '2017-03-24 03:56:59', '2017-05-07 23:41:38'),
(7, 102, 4, 'Sample Paper 2', 'Anderson', '101 to 200', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/03\\/1111f-1-1.pdf","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/03\\/1111f-1-1.pdf","type":"application\\/pdf"}', 1, '2017-03-24 03:58:15', '2017-03-24 03:58:15'),
(8, 3, 1, 'Sample', 'Balachandran', '4674674', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/05\\/papertemplate.pdf","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/05\\/papertemplate.pdf","type":"application\\/pdf"}', 1, '2017-05-07 23:27:41', '2017-05-07 23:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `publish_paper_downloads`
--

CREATE TABLE `publish_paper_downloads` (
  `user_id` int(11) NOT NULL,
  `paper_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publish_paper_downloads`
--

INSERT INTO `publish_paper_downloads` (`user_id`, `paper_id`, `created_at`, `updated_at`) VALUES
(2, 5, '2017-05-07 03:12:54', '2017-05-07 03:12:54'),
(20, 5, '2017-05-07 04:21:43', '2017-05-07 04:21:43'),
(2, 7, '2017-05-07 10:08:53', '2017-05-07 10:08:53');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `slidername` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slidername`, `description`, `image`, `created_at`, `updated_at`) VALUES
(19, 'Home Page Slider', 'Home Page Slider to alla', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/03\\/deepam-2-Year.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/03\\/deepam-2-Year.jpg","type":"image\\/jpeg"}', '2017-03-21 20:59:08', '2017-05-13 17:15:38');

-- --------------------------------------------------------

--
-- Table structure for table `volumes`
--

CREATE TABLE `volumes` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volumes`
--

INSERT INTO `volumes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Volume 1', '2017-01-01 17:18:07', '2017-05-13 17:11:24'),
(3, 'Volume 2', '2017-01-01 17:19:22', '2017-01-01 18:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `wp_commentmeta`
--

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_comments`
--

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'A WordPress Commenter', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2016-12-13 20:48:01', '2016-12-13 20:48:01', 'Hi, this is a comment.\r\nTo get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.\r\nCommenter avatars come from <a href="https://gravatar.com">Gravatar</a>.', 0, '1', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_links`
--

CREATE TABLE `wp_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_options`
--

CREATE TABLE `wp_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'yes'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://localhost/college', 'yes'),
(2, 'home', 'http://localhost/college', 'yes'),
(3, 'blogname', 'IJRESTS', 'yes'),
(4, 'blogdescription', 'Just another WordPress site', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'contact@ijrests.org', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '1', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'F j, Y', 'yes'),
(24, 'time_format', 'g:i a', 'yes'),
(25, 'links_updated_date_format', 'F j, Y g:i a', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:121:{s:11:"^wp-json/?$";s:22:"index.php?rest_route=/";s:14:"^wp-json/(.*)?";s:33:"index.php?rest_route=/$matches[1]";s:47:"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:42:"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:23:"category/(.+?)/embed/?$";s:46:"index.php?category_name=$matches[1]&embed=true";s:35:"category/(.+?)/page/?([0-9]{1,})/?$";s:53:"index.php?category_name=$matches[1]&paged=$matches[2]";s:17:"category/(.+?)/?$";s:35:"index.php?category_name=$matches[1]";s:44:"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:39:"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:20:"tag/([^/]+)/embed/?$";s:36:"index.php?tag=$matches[1]&embed=true";s:32:"tag/([^/]+)/page/?([0-9]{1,})/?$";s:43:"index.php?tag=$matches[1]&paged=$matches[2]";s:14:"tag/([^/]+)/?$";s:25:"index.php?tag=$matches[1]";s:45:"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:40:"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:21:"type/([^/]+)/embed/?$";s:44:"index.php?post_format=$matches[1]&embed=true";s:33:"type/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?post_format=$matches[1]&paged=$matches[2]";s:15:"type/([^/]+)/?$";s:33:"index.php?post_format=$matches[1]";s:36:"smgl_cpt/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:46:"smgl_cpt/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:66:"smgl_cpt/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:61:"smgl_cpt/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:61:"smgl_cpt/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:42:"smgl_cpt/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:25:"smgl_cpt/([^/]+)/embed/?$";s:41:"index.php?smgl_cpt=$matches[1]&embed=true";s:29:"smgl_cpt/([^/]+)/trackback/?$";s:35:"index.php?smgl_cpt=$matches[1]&tb=1";s:37:"smgl_cpt/([^/]+)/page/?([0-9]{1,})/?$";s:48:"index.php?smgl_cpt=$matches[1]&paged=$matches[2]";s:44:"smgl_cpt/([^/]+)/comment-page-([0-9]{1,})/?$";s:48:"index.php?smgl_cpt=$matches[1]&cpage=$matches[2]";s:33:"smgl_cpt/([^/]+)(?:/([0-9]+))?/?$";s:47:"index.php?smgl_cpt=$matches[1]&page=$matches[2]";s:25:"smgl_cpt/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:35:"smgl_cpt/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:55:"smgl_cpt/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:50:"smgl_cpt/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:50:"smgl_cpt/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:31:"smgl_cpt/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:36:"ugml_cpt/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:46:"ugml_cpt/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:66:"ugml_cpt/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:61:"ugml_cpt/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:61:"ugml_cpt/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:42:"ugml_cpt/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:25:"ugml_cpt/([^/]+)/embed/?$";s:41:"index.php?ugml_cpt=$matches[1]&embed=true";s:29:"ugml_cpt/([^/]+)/trackback/?$";s:35:"index.php?ugml_cpt=$matches[1]&tb=1";s:37:"ugml_cpt/([^/]+)/page/?([0-9]{1,})/?$";s:48:"index.php?ugml_cpt=$matches[1]&paged=$matches[2]";s:44:"ugml_cpt/([^/]+)/comment-page-([0-9]{1,})/?$";s:48:"index.php?ugml_cpt=$matches[1]&cpage=$matches[2]";s:33:"ugml_cpt/([^/]+)(?:/([0-9]+))?/?$";s:47:"index.php?ugml_cpt=$matches[1]&page=$matches[2]";s:25:"ugml_cpt/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:35:"ugml_cpt/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:55:"ugml_cpt/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:50:"ugml_cpt/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:50:"ugml_cpt/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:31:"ugml_cpt/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:48:".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$";s:18:"index.php?feed=old";s:20:".*wp-app\\.php(/.*)?$";s:19:"index.php?error=403";s:18:".*wp-register.php$";s:23:"index.php?register=true";s:32:"feed/(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:27:"(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:8:"embed/?$";s:21:"index.php?&embed=true";s:20:"page/?([0-9]{1,})/?$";s:28:"index.php?&paged=$matches[1]";s:41:"comments/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:36:"comments/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:17:"comments/embed/?$";s:21:"index.php?&embed=true";s:44:"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:40:"index.php?s=$matches[1]&feed=$matches[2]";s:39:"search/(.+)/(feed|rdf|rss|rss2|atom)/?$";s:40:"index.php?s=$matches[1]&feed=$matches[2]";s:20:"search/(.+)/embed/?$";s:34:"index.php?s=$matches[1]&embed=true";s:32:"search/(.+)/page/?([0-9]{1,})/?$";s:41:"index.php?s=$matches[1]&paged=$matches[2]";s:14:"search/(.+)/?$";s:23:"index.php?s=$matches[1]";s:47:"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:42:"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:23:"author/([^/]+)/embed/?$";s:44:"index.php?author_name=$matches[1]&embed=true";s:35:"author/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?author_name=$matches[1]&paged=$matches[2]";s:17:"author/([^/]+)/?$";s:33:"index.php?author_name=$matches[1]";s:69:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:64:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:45:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$";s:74:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true";s:57:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]";s:39:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$";s:63:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]";s:56:"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:51:"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:32:"([0-9]{4})/([0-9]{1,2})/embed/?$";s:58:"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true";s:44:"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:65:"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]";s:26:"([0-9]{4})/([0-9]{1,2})/?$";s:47:"index.php?year=$matches[1]&monthnum=$matches[2]";s:43:"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:38:"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:19:"([0-9]{4})/embed/?$";s:37:"index.php?year=$matches[1]&embed=true";s:31:"([0-9]{4})/page/?([0-9]{1,})/?$";s:44:"index.php?year=$matches[1]&paged=$matches[2]";s:13:"([0-9]{4})/?$";s:26:"index.php?year=$matches[1]";s:58:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:68:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:88:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:83:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:83:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:64:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:53:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$";s:91:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true";s:57:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$";s:85:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1";s:77:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]";s:72:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]";s:65:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$";s:98:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]";s:72:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$";s:98:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]";s:61:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$";s:97:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]";s:47:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:57:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:77:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:72:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:72:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:53:"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:64:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]";s:51:"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$";s:65:"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]";s:38:"([0-9]{4})/comment-page-([0-9]{1,})/?$";s:44:"index.php?year=$matches[1]&cpage=$matches[2]";s:27:".?.+?/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:37:".?.+?/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:57:".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:33:".?.+?/attachment/([^/]+)/embed/?$";s:43:"index.php?attachment=$matches[1]&embed=true";s:16:"(.?.+?)/embed/?$";s:41:"index.php?pagename=$matches[1]&embed=true";s:20:"(.?.+?)/trackback/?$";s:35:"index.php?pagename=$matches[1]&tb=1";s:40:"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:35:"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:28:"(.?.+?)/page/?([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&paged=$matches[2]";s:35:"(.?.+?)/comment-page-([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&cpage=$matches[2]";s:24:"(.?.+?)(?:/([0-9]+))?/?$";s:47:"index.php?pagename=$matches[1]&page=$matches[2]";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:5:{i:0;s:19:"college/college.php";i:1;s:41:"currency-converter/currency-converter.php";i:2;s:30:"easy-visitor-counter/index.php";i:3;s:20:"smtp-mailer/main.php";i:4;s:38:"wp-change-default-from-email/WCDFE.php";}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '0', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', '', 'no'),
(40, 'template', 'twentyfourteen', 'yes'),
(41, 'stylesheet', 'twentyfourteen', 'yes'),
(42, 'comment_whitelist', '1', 'yes'),
(43, 'blacklist_keys', '', 'no'),
(44, 'comment_registration', '0', 'yes'),
(45, 'html_type', 'text/html', 'yes'),
(46, 'use_trackback', '0', 'yes'),
(47, 'default_role', 'subscriber', 'yes'),
(48, 'db_version', '37965', 'yes'),
(49, 'uploads_use_yearmonth_folders', '1', 'yes'),
(50, 'upload_path', '', 'yes'),
(51, 'blog_public', '1', 'yes'),
(52, 'default_link_category', '2', 'yes'),
(53, 'show_on_front', 'posts', 'yes'),
(54, 'tag_base', '', 'yes'),
(55, 'show_avatars', '1', 'yes'),
(56, 'avatar_rating', 'G', 'yes'),
(57, 'upload_url_path', '', 'yes'),
(58, 'thumbnail_size_w', '150', 'yes'),
(59, 'thumbnail_size_h', '150', 'yes'),
(60, 'thumbnail_crop', '1', 'yes'),
(61, 'medium_size_w', '300', 'yes'),
(62, 'medium_size_h', '300', 'yes'),
(63, 'avatar_default', 'mystery', 'yes'),
(64, 'large_size_w', '1024', 'yes'),
(65, 'large_size_h', '1024', 'yes'),
(66, 'image_default_link_type', 'none', 'yes'),
(67, 'image_default_size', '', 'yes'),
(68, 'image_default_align', '', 'yes'),
(69, 'close_comments_for_old_posts', '0', 'yes'),
(70, 'close_comments_days_old', '14', 'yes'),
(71, 'thread_comments', '1', 'yes'),
(72, 'thread_comments_depth', '5', 'yes'),
(73, 'page_comments', '0', 'yes'),
(74, 'comments_per_page', '50', 'yes'),
(75, 'default_comments_page', 'newest', 'yes'),
(76, 'comment_order', 'asc', 'yes'),
(77, 'sticky_posts', 'a:0:{}', 'yes'),
(78, 'widget_categories', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(79, 'widget_text', 'a:2:{i:1;a:0:{}s:12:"_multiwidget";i:1;}', 'yes'),
(80, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:"_multiwidget";i:1;}', 'yes'),
(81, 'uninstall_plugins', 'a:0:{}', 'no'),
(82, 'timezone_string', '', 'yes'),
(83, 'page_for_posts', '0', 'yes'),
(84, 'page_on_front', '0', 'yes'),
(85, 'default_post_format', '0', 'yes'),
(86, 'link_manager_enabled', '0', 'yes'),
(87, 'finished_splitting_shared_terms', '1', 'yes'),
(88, 'site_icon', '0', 'yes'),
(89, 'medium_large_size_w', '768', 'yes'),
(90, 'medium_large_size_h', '0', 'yes'),
(91, 'initial_db_version', '37965', 'yes'),
(92, 'wp_user_roles', 'a:9:{s:13:"administrator";a:2:{s:4:"name";s:13:"Administrator";s:12:"capabilities";a:61:{s:13:"switch_themes";b:1;s:11:"edit_themes";b:1;s:16:"activate_plugins";b:1;s:12:"edit_plugins";b:1;s:10:"edit_users";b:1;s:10:"edit_files";b:1;s:14:"manage_options";b:1;s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:6:"import";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:8:"level_10";b:1;s:7:"level_9";b:1;s:7:"level_8";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;s:12:"delete_users";b:1;s:12:"create_users";b:1;s:17:"unfiltered_upload";b:1;s:14:"edit_dashboard";b:1;s:14:"update_plugins";b:1;s:14:"delete_plugins";b:1;s:15:"install_plugins";b:1;s:13:"update_themes";b:1;s:14:"install_themes";b:1;s:11:"update_core";b:1;s:10:"list_users";b:1;s:12:"remove_users";b:1;s:13:"promote_users";b:1;s:18:"edit_theme_options";b:1;s:13:"delete_themes";b:1;s:6:"export";b:1;}}s:6:"editor";a:2:{s:4:"name";s:6:"Editor";s:12:"capabilities";a:34:{s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;}}s:6:"author";a:2:{s:4:"name";s:6:"Author";s:12:"capabilities";a:10:{s:12:"upload_files";b:1;s:10:"edit_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:4:"read";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;s:22:"delete_published_posts";b:1;}}s:11:"contributor";a:2:{s:4:"name";s:11:"Contributor";s:12:"capabilities";a:5:{s:10:"edit_posts";b:1;s:4:"read";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;}}s:10:"subscriber";a:2:{s:4:"name";s:10:"Subscriber";s:12:"capabilities";a:2:{s:4:"read";b:1;s:7:"level_0";b:1;}}s:7:"journal";a:2:{s:4:"name";s:7:"Journal";s:12:"capabilities";a:2:{s:4:"read";b:1;s:7:"level_0";b:1;}}s:4:"user";a:2:{s:4:"name";s:4:"User";s:12:"capabilities";a:2:{s:4:"read";b:1;s:7:"level_0";b:1;}}s:7:"reviwer";a:2:{s:4:"name";s:7:"Reviwer";s:12:"capabilities";a:2:{s:4:"read";b:1;s:7:"level_0";b:1;}}s:8:"reviewer";a:2:{s:4:"name";s:8:"Reviewer";s:12:"capabilities";a:2:{s:4:"read";b:1;s:7:"level_0";b:1;}}}', 'yes'),
(93, 'widget_search', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(94, 'widget_recent-posts', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(95, 'widget_recent-comments', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(96, 'widget_archives', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(97, 'widget_meta', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(98, 'sidebars_widgets', 'a:5:{s:19:"wp_inactive_widgets";a:0:{}s:9:"sidebar-1";a:1:{i:0;s:20:"currency_converter-2";}s:9:"sidebar-2";a:1:{i:0;s:28:"vistorcounterplugin_widget-3";}s:9:"sidebar-3";a:1:{i:0;s:28:"vistorcounterplugin_widget-2";}s:13:"array_version";i:3;}', 'yes'),
(99, 'widget_pages', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(100, 'widget_calendar', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(101, 'widget_tag_cloud', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(102, 'widget_nav_menu', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(103, 'cron', 'a:4:{i:1495054081;a:3:{s:16:"wp_version_check";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:17:"wp_update_plugins";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:16:"wp_update_themes";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}}i:1495054105;a:1:{s:19:"wp_scheduled_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1495054143;a:1:{s:30:"wp_scheduled_auto_draft_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}s:7:"version";i:2;}', 'yes'),
(119, 'can_compress_scripts', '1', 'no'),
(1252, '_transient_timeout_plugin_slugs', '1495131452', 'no'),
(163, '_site_transient_update_core', 'O:8:"stdClass":4:{s:7:"updates";a:3:{i:0;O:8:"stdClass":10:{s:8:"response";s:7:"upgrade";s:8:"download";s:59:"https://downloads.wordpress.org/release/wordpress-4.7.5.zip";s:6:"locale";s:5:"en_US";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:59:"https://downloads.wordpress.org/release/wordpress-4.7.5.zip";s:10:"no_content";s:70:"https://downloads.wordpress.org/release/wordpress-4.7.5-no-content.zip";s:11:"new_bundled";s:71:"https://downloads.wordpress.org/release/wordpress-4.7.5-new-bundled.zip";s:7:"partial";b:0;s:8:"rollback";b:0;}s:7:"current";s:5:"4.7.5";s:7:"version";s:5:"4.7.5";s:11:"php_version";s:5:"5.2.4";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"4.7";s:15:"partial_version";s:0:"";}i:1;O:8:"stdClass":11:{s:8:"response";s:10:"autoupdate";s:8:"download";s:59:"https://downloads.wordpress.org/release/wordpress-4.7.5.zip";s:6:"locale";s:5:"en_US";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:59:"https://downloads.wordpress.org/release/wordpress-4.7.5.zip";s:10:"no_content";s:70:"https://downloads.wordpress.org/release/wordpress-4.7.5-no-content.zip";s:11:"new_bundled";s:71:"https://downloads.wordpress.org/release/wordpress-4.7.5-new-bundled.zip";s:7:"partial";b:0;s:8:"rollback";b:0;}s:7:"current";s:5:"4.7.5";s:7:"version";s:5:"4.7.5";s:11:"php_version";s:5:"5.2.4";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"4.7";s:15:"partial_version";s:0:"";s:9:"new_files";s:1:"1";}i:2;O:8:"stdClass":11:{s:8:"response";s:10:"autoupdate";s:8:"download";s:59:"https://downloads.wordpress.org/release/wordpress-4.6.6.zip";s:6:"locale";s:5:"en_US";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:59:"https://downloads.wordpress.org/release/wordpress-4.6.6.zip";s:10:"no_content";s:70:"https://downloads.wordpress.org/release/wordpress-4.6.6-no-content.zip";s:11:"new_bundled";s:71:"https://downloads.wordpress.org/release/wordpress-4.6.6-new-bundled.zip";s:7:"partial";s:69:"https://downloads.wordpress.org/release/wordpress-4.6.6-partial-1.zip";s:8:"rollback";s:70:"https://downloads.wordpress.org/release/wordpress-4.6.6-rollback-1.zip";}s:7:"current";s:5:"4.6.6";s:7:"version";s:5:"4.6.6";s:11:"php_version";s:5:"5.2.4";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"4.7";s:15:"partial_version";s:5:"4.6.1";s:9:"new_files";s:0:"";}}s:12:"last_checked";i:1495044977;s:15:"version_checked";s:5:"4.6.1";s:12:"translations";a:0:{}}', 'no'),
(1248, '_site_transient_timeout_theme_roots', '1495046783', 'no'),
(1249, '_site_transient_theme_roots', 'a:3:{s:13:"twentyfifteen";s:7:"/themes";s:14:"twentyfourteen";s:7:"/themes";s:13:"twentysixteen";s:7:"/themes";}', 'no'),
(516, 'auto_core_update_notified', 'a:4:{s:4:"type";s:6:"manual";s:5:"email";s:19:"contact@ijrests.org";s:7:"version";s:5:"4.7.1";s:9:"timestamp";i:1484899569;}', 'no'),
(630, '_site_transient_timeout_browser_051ae1977d3915025b1552af0a2aa769', '1486456821', 'no'),
(631, '_site_transient_browser_051ae1977d3915025b1552af0a2aa769', 'a:9:{s:8:"platform";s:7:"Windows";s:4:"name";s:6:"Chrome";s:7:"version";s:12:"55.0.2883.87";s:10:"update_url";s:28:"http://www.google.com/chrome";s:7:"img_src";s:49:"http://s.wordpress.org/images/browsers/chrome.png";s:11:"img_src_ssl";s:48:"https://wordpress.org/images/browsers/chrome.png";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;}', 'no'),
(118, 'recently_activated', 'a:0:{}', 'yes'),
(203, '_transient_twentysixteen_categories', '1', 'yes'),
(1076, '_site_transient_timeout_browser_2d70b4ffa221a0fcab90b4c714a3f5ea', '1491963965', 'no'),
(1077, '_site_transient_browser_2d70b4ffa221a0fcab90b4c714a3f5ea', 'a:9:{s:8:"platform";s:7:"Windows";s:4:"name";s:6:"Chrome";s:7:"version";s:13:"57.0.2987.133";s:10:"update_url";s:28:"http://www.google.com/chrome";s:7:"img_src";s:49:"http://s.wordpress.org/images/browsers/chrome.png";s:11:"img_src_ssl";s:48:"https://wordpress.org/images/browsers/chrome.png";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;}', 'no'),
(1145, 'about_us_image', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/04\\/F5-Slider-Image-3-13.jpg","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/04\\/F5-Slider-Image-3-13.jpg","type":"image\\/jpeg"}', 'yes'),
(1152, '_site_transient_timeout_browser_c804c5de4c818209cbbc308ed95f22a5', '1494732643', 'no'),
(1153, '_site_transient_browser_c804c5de4c818209cbbc308ed95f22a5', 'a:9:{s:8:"platform";s:7:"Windows";s:4:"name";s:6:"Chrome";s:7:"version";s:12:"58.0.3029.96";s:10:"update_url";s:28:"http://www.google.com/chrome";s:7:"img_src";s:49:"http://s.wordpress.org/images/browsers/chrome.png";s:11:"img_src_ssl";s:48:"https://wordpress.org/images/browsers/chrome.png";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;}', 'no'),
(1044, '_site_transient_timeout_browser_8c11cc887210d4b2156b834e7360c561', '1491353677', 'no'),
(1045, '_site_transient_browser_8c11cc887210d4b2156b834e7360c561', 'a:9:{s:8:"platform";s:7:"Windows";s:4:"name";s:6:"Chrome";s:7:"version";s:12:"56.0.2924.87";s:10:"update_url";s:28:"http://www.google.com/chrome";s:7:"img_src";s:49:"http://s.wordpress.org/images/browsers/chrome.png";s:11:"img_src_ssl";s:48:"https://wordpress.org/images/browsers/chrome.png";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;}', 'no'),
(727, 'smtp_mailer_options', 'a:9:{s:9:"smtp_host";s:14:"smtp.gmail.com";s:9:"smtp_auth";s:4:"true";s:13:"smtp_username";s:8:"rbalabca";s:13:"smtp_password";s:16:"VmlkeWFyYWp1QDI=";s:18:"type_of_encryption";s:3:"tls";s:9:"smtp_port";s:3:"587";s:10:"from_email";s:19:"contact@ijrests.com";s:9:"from_name";s:7:"IJRESTS";s:24:"disable_ssl_verification";s:0:"";}', 'yes'),
(137, 'buzz_page_alias', 'a:43:{s:9:"demo_page";s:1:"4";s:13:"college_login";s:1:"9";s:15:"college_journal";s:2:"11";s:16:"college_about_us";s:2:"21";s:18:"college_contact_us";s:2:"19";s:14:"college_slider";s:2:"14";s:19:"college_slider_list";s:2:"17";s:20:"college_journal_list";s:2:"23";s:14:"college_volume";s:2:"26";s:19:"college_volume_list";s:2:"28";s:13:"college_issue";s:2:"31";s:18:"college_issue_list";s:2:"33";s:14:"college_editor";s:2:"40";s:19:"college_editor_list";s:2:"43";s:22:"college_journal_editor";s:2:"45";s:27:"college_journal_editor_list";s:2:"47";s:20:"college_editor_board";s:2:"50";s:22:"college_call_for_paper";s:2:"35";s:24:"college_general_settings";s:2:"53";s:23:"college_processing_fees";s:2:"55";s:20:"college_journal_view";s:2:"58";s:22:"college_carosel_slider";s:2:"61";s:27:"college_carosel_slider_list";s:2:"63";s:16:"college_document";s:2:"65";s:28:"college_withdrawal_procedure";s:2:"69";s:25:"college_guidelines_author";s:2:"71";s:17:"college_user_list";s:2:"73";s:27:"college_jounal_issues_pages";s:2:"77";s:29:"college_jounal_issues_publish";s:2:"79";s:34:"college_jounal_issues_publish_list";s:2:"81";s:16:"college_reviewer";s:2:"86";s:21:"college_reviewer_list";s:2:"88";s:26:"college_author_issue_paper";s:2:"97";s:25:"college_author_paper_list";s:2:"92";s:20:"college_author_paper";s:2:"90";s:26:"college_reviewer_dashboard";s:3:"102";s:23:"college_admin_dashboard";s:3:"105";s:26:"college_admin_paper_status";s:3:"108";s:19:"college_certificate";s:3:"119";s:16:"college_feedback";s:3:"115";s:18:"college_conference";s:3:"122";s:24:"college_publish_download";s:3:"113";s:23:"college_conference_list";s:3:"126";}', 'yes'),
(138, 'demo_option', 'Sample', 'yes'),
(1253, '_transient_plugin_slugs', 'a:6:{i:0;s:19:"akismet/akismet.php";i:1;s:19:"college/college.php";i:2;s:41:"currency-converter/currency-converter.php";i:3;s:20:"smtp-mailer/main.php";i:4;s:30:"easy-visitor-counter/index.php";i:5;s:38:"wp-change-default-from-email/WCDFE.php";}', 'no'),
(962, 'widget_currency_converter', 'a:2:{i:2;a:16:{s:13:"currency_code";s:0:"";s:13:"currency_name";s:0:"";s:12:"country_code";s:0:"";s:5:"title";s:0:"";s:6:"length";s:6:"medium";s:10:"label_type";s:0:"";s:16:"background_color";s:7:"#FFFFFF";s:12:"border_color";s:7:"#BBBBBB";s:10:"text_color";s:7:"#000000";s:6:"layout";s:8:"vertical";s:5:"width";s:3:"150";s:14:"default_amount";s:3:"100";s:12:"default_from";s:3:"USD";s:10:"default_to";s:3:"EUR";s:15:"transparentflag";s:0:"";s:5:"tflag";s:0:"";}s:12:"_multiwidget";i:1;}', 'yes'),
(963, 'vcp_db_version', '‘1’', 'yes'),
(964, 'widget_vistorcounterplugin_widget', 'a:2:{i:3;a:4:{s:14:"textfontfamily";s:12:"Merriweather";s:9:"textcolor";s:4:"#000";s:17:"headingfontfamily";s:12:"Merriweather";s:12:"headingcolor";s:4:"#000";}s:12:"_multiwidget";i:1;}', 'yes'),
(1254, '_transient_timeout_dash_88ae138922fe95674369b1cb3d215a2b', '1495088252', 'no'),
(1255, '_transient_dash_88ae138922fe95674369b1cb3d215a2b', '<div class="rss-widget"><p><strong>RSS Error</strong>: WP HTTP Error: cURL error 28: Operation timed out after 10000 milliseconds with 35194 bytes received</p></div><div class="rss-widget"><p><strong>RSS Error</strong>: WP HTTP Error: cURL error 28: Operation timed out after 10000 milliseconds with 3818 bytes received</p></div><div class="rss-widget"><ul></ul></div>', 'no'),
(1220, '_site_transient_timeout_browser_7b4fb083b04390f6ff485892d3977a9a', '1495275627', 'no'),
(1221, '_site_transient_browser_7b4fb083b04390f6ff485892d3977a9a', 'a:9:{s:8:"platform";s:7:"Windows";s:4:"name";s:6:"Chrome";s:7:"version";s:13:"58.0.3029.110";s:10:"update_url";s:28:"http://www.google.com/chrome";s:7:"img_src";s:49:"http://s.wordpress.org/images/browsers/chrome.png";s:11:"img_src_ssl";s:48:"https://wordpress.org/images/browsers/chrome.png";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;}', 'no'),
(783, 'copyright', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/04\\/Copyright_Form-3.docx","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/04\\/Copyright_Form-3.docx","type":"application\\/vnd.openxmlformats-officedocument.wordprocessingml.document"}', 'yes'),
(782, 'withdraw', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/04\\/Withdrawal_form.docx","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/04\\/Withdrawal_form.docx","type":"application\\/vnd.openxmlformats-officedocument.wordprocessingml.document"}', 'yes'),
(784, 'samplepaper', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/04\\/sample.doc","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/04\\/sample.doc","type":"application\\/msword"}', 'yes'),
(785, 'papertemplates', '{"file":"C:\\\\wamp64\\\\www\\\\college\\/wp-content\\/uploads\\/2017\\/04\\/papertemplate.pdf","url":"http:\\/\\/localhost\\/college\\/wp-content\\/uploads\\/2017\\/04\\/papertemplate.pdf","type":"application\\/pdf"}', 'yes'),
(582, 'action', 'college_general_settings', 'yes'),
(583, 'about_us', '<img class=\\"alignnone size-medium wp-image-111\\" src=\\"http://localhost/college/wp-content/uploads/2017/01/F5-Slider-Image-3-300x75.jpg\\" alt=\\"f5-slider-image-3\\" width=\\"300\\" height=\\"75\\" />The International Journal of Research in Engineering, Science and Technologies (IJRESTs) is an online journal in English published monthly. This academic journal is an open access, peer reviewed and fully refereed international journal. We focus on Engineering, Science, Humanities, Technology and Management related topics. Papers will be published only after thorough review by the reviewers. All our journals will cover papers on review, case studies, research, survey, etc.\n\nIJRESTs expects that academicians, researchers, scholars, industrialists, practicing engineers, managers, etc. would make use of this journal publication for the development of Engineering, Sciences, Humanities, Mangement Studies and Technologies.', 'yes'),
(584, 'contact_address', 'Pondicherry,\nIndia.', 'yes'),
(585, 'contact_mobile', '+91-9786777229', 'yes'),
(586, 'contact_email', 'editor@ijrests.org', 'yes'),
(587, 'indian_standard', '2000', 'yes'),
(588, 'indian_editor', '1000', 'yes'),
(589, 'indian_student', '1000', 'yes'),
(590, 'foriegn_standard', '75', 'yes'),
(591, 'foriegn_editor', '50', 'yes'),
(592, 'bank_name', 'HDFC Bank', 'yes'),
(593, 'bank_address', '100 Feet Road, Pondicherry', 'yes'),
(594, 'bank_code', '000407', 'yes'),
(595, 'account_name', 'International Journal of Research in Engineering, \nScience and Technologies (IJRESTs)', 'yes'),
(596, 'account_no', '50200013501101', 'yes'),
(597, 'account_type', 'Current Account', 'yes'),
(598, 'ifsc', 'HDFC0000407', 'yes'),
(599, 'micr', '605240002', 'yes'),
(600, 'foriegn_student', '50', 'yes'),
(734, 'wcdfe_settings', 'a:2:{s:9:"from_name";s:7:"IJRESTS";s:10:"from_email";s:19:"contact@ijrests.org";}', 'yes'),
(1104, '_site_transient_timeout_browser_b91896fd12ba9dcb721015de594cb08b', '1493539589', 'no'),
(1105, '_site_transient_browser_b91896fd12ba9dcb721015de594cb08b', 'a:9:{s:8:"platform";s:7:"Windows";s:4:"name";s:6:"Chrome";s:7:"version";s:12:"58.0.3029.81";s:10:"update_url";s:28:"http://www.google.com/chrome";s:7:"img_src";s:49:"http://s.wordpress.org/images/browsers/chrome.png";s:11:"img_src_ssl";s:48:"https://wordpress.org/images/browsers/chrome.png";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;}', 'no'),
(1250, '_site_transient_update_themes', 'O:8:"stdClass":4:{s:12:"last_checked";i:1495045014;s:7:"checked";a:3:{s:13:"twentyfifteen";s:3:"1.6";s:14:"twentyfourteen";s:3:"1.9";s:13:"twentysixteen";s:3:"1.3";}s:8:"response";a:1:{s:13:"twentyfifteen";a:4:{s:5:"theme";s:13:"twentyfifteen";s:11:"new_version";s:3:"1.7";s:3:"url";s:43:"https://wordpress.org/themes/twentyfifteen/";s:7:"package";s:59:"https://downloads.wordpress.org/theme/twentyfifteen.1.7.zip";}}s:12:"translations";a:0:{}}', 'no'),
(1251, '_site_transient_update_plugins', 'O:8:"stdClass":4:{s:12:"last_checked";i:1495044997;s:8:"response";a:2:{s:19:"akismet/akismet.php";O:8:"stdClass":8:{s:2:"id";s:2:"15";s:4:"slug";s:7:"akismet";s:6:"plugin";s:19:"akismet/akismet.php";s:11:"new_version";s:5:"3.3.2";s:3:"url";s:38:"https://wordpress.org/plugins/akismet/";s:7:"package";s:56:"https://downloads.wordpress.org/plugin/akismet.3.3.2.zip";s:6:"tested";s:5:"4.7.5";s:13:"compatibility";O:8:"stdClass":1:{s:6:"scalar";O:8:"stdClass":1:{s:6:"scalar";b:0;}}}s:38:"wp-change-default-from-email/WCDFE.php";O:8:"stdClass":9:{s:2:"id";s:5:"58711";s:4:"slug";s:28:"wp-change-default-from-email";s:6:"plugin";s:38:"wp-change-default-from-email/WCDFE.php";s:11:"new_version";s:5:"1.1.1";s:3:"url";s:59:"https://wordpress.org/plugins/wp-change-default-from-email/";s:7:"package";s:71:"https://downloads.wordpress.org/plugin/wp-change-default-from-email.zip";s:14:"upgrade_notice";s:20:"Updated tested up to";s:6:"tested";s:5:"4.7.5";s:13:"compatibility";O:8:"stdClass":1:{s:6:"scalar";O:8:"stdClass":1:{s:6:"scalar";b:0;}}}}s:12:"translations";a:0:{}s:9:"no_update";a:3:{s:41:"currency-converter/currency-converter.php";O:8:"stdClass":6:{s:2:"id";s:5:"13143";s:4:"slug";s:18:"currency-converter";s:6:"plugin";s:41:"currency-converter/currency-converter.php";s:11:"new_version";s:5:"2.3.1";s:3:"url";s:49:"https://wordpress.org/plugins/currency-converter/";s:7:"package";s:67:"https://downloads.wordpress.org/plugin/currency-converter.2.3.1.zip";}s:20:"smtp-mailer/main.php";O:8:"stdClass":8:{s:2:"id";s:5:"67448";s:4:"slug";s:11:"smtp-mailer";s:6:"plugin";s:20:"smtp-mailer/main.php";s:11:"new_version";s:5:"1.0.3";s:3:"url";s:42:"https://wordpress.org/plugins/smtp-mailer/";s:7:"package";s:54:"https://downloads.wordpress.org/plugin/smtp-mailer.zip";s:6:"tested";s:5:"4.7.5";s:13:"compatibility";b:0;}s:30:"easy-visitor-counter/index.php";O:8:"stdClass":6:{s:2:"id";s:5:"69584";s:4:"slug";s:20:"easy-visitor-counter";s:6:"plugin";s:30:"easy-visitor-counter/index.php";s:11:"new_version";s:3:"1.0";s:3:"url";s:51:"https://wordpress.org/plugins/easy-visitor-counter/";s:7:"package";s:63:"https://downloads.wordpress.org/plugin/easy-visitor-counter.zip";}}}', 'no'),
(624, 'home_page_content', '<img class=\\"alignnone size-medium wp-image-111\\" src=\\"http://localhost/college/wp-content/uploads/2017/01/F5-Slider-Image-3-300x75.jpg\\" alt=\\"f5-slider-image-3\\" width=\\"300\\" height=\\"75\\" />Published monthly, online, open-access and having double-blind peer reviewed, International Journal of Research in Engineering, Science and Technologies (IJRESTs) is an emerging academic journal in the field of Engineering, Technology, Sciences, Humanities and Management Studies. This journal\\\'s motive and aim is to create an awareness, re-shaping the knowledge already created and challenge the existing theories related to the field of Academic Research in any discipline in Engineering, Technology, Sciences, Humanities and Management Studies. International Journal of Research in Engineering, Science and Technologies (IJRESTs) has a primary aim to publish novel research being conducted and carried out in the domain of Engineering, Technology, Sciences, Humanities and Management Studies as a whole. It invites engineering, professors, researchers, professionals, academicians, managers and research scholars to submit their novel and conjectural ideas in the domain of Engineering, Technology, Sciences, Humanities and Management Studies in the form of research articles, book reviews, case studies, review articles and personal opinions that can benefit the Engineering, Technology, Sciences, Humanities and Management Studies researchers in general and society as a whole. As earlier stated, there is no special emphasis on just one topic but emphasis is given on all the aspects that can be covered in the domain of Engineering, Technology, Sciences, Humanities and Management Studies.', 'yes'),
(250, '_site_transient_timeout_poptags_40cd750bba9870f18aada2478b24840a', '1482086496', 'no'),
(251, '_site_transient_poptags_40cd750bba9870f18aada2478b24840a', 'a:100:{s:6:"widget";a:3:{s:4:"name";s:6:"widget";s:4:"slug";s:6:"widget";s:5:"count";s:4:"6110";}s:4:"post";a:3:{s:4:"name";s:4:"Post";s:4:"slug";s:4:"post";s:5:"count";s:4:"3747";}s:6:"plugin";a:3:{s:4:"name";s:6:"plugin";s:4:"slug";s:6:"plugin";s:5:"count";s:4:"3738";}s:5:"admin";a:3:{s:4:"name";s:5:"admin";s:4:"slug";s:5:"admin";s:5:"count";s:4:"3244";}s:5:"posts";a:3:{s:4:"name";s:5:"posts";s:4:"slug";s:5:"posts";s:5:"count";s:4:"2869";}s:9:"shortcode";a:3:{s:4:"name";s:9:"shortcode";s:4:"slug";s:9:"shortcode";s:5:"count";s:4:"2546";}s:7:"sidebar";a:3:{s:4:"name";s:7:"sidebar";s:4:"slug";s:7:"sidebar";s:5:"count";s:4:"2229";}s:6:"google";a:3:{s:4:"name";s:6:"google";s:4:"slug";s:6:"google";s:5:"count";s:4:"2155";}s:4:"page";a:3:{s:4:"name";s:4:"page";s:4:"slug";s:4:"page";s:5:"count";s:4:"2104";}s:7:"twitter";a:3:{s:4:"name";s:7:"twitter";s:4:"slug";s:7:"twitter";s:5:"count";s:4:"2089";}s:6:"images";a:3:{s:4:"name";s:6:"images";s:4:"slug";s:6:"images";s:5:"count";s:4:"2044";}s:11:"woocommerce";a:3:{s:4:"name";s:11:"woocommerce";s:4:"slug";s:11:"woocommerce";s:5:"count";s:4:"2025";}s:8:"comments";a:3:{s:4:"name";s:8:"comments";s:4:"slug";s:8:"comments";s:5:"count";s:4:"1965";}s:5:"image";a:3:{s:4:"name";s:5:"image";s:4:"slug";s:5:"image";s:5:"count";s:4:"1937";}s:8:"facebook";a:3:{s:4:"name";s:8:"Facebook";s:4:"slug";s:8:"facebook";s:5:"count";s:4:"1756";}s:3:"seo";a:3:{s:4:"name";s:3:"seo";s:4:"slug";s:3:"seo";s:5:"count";s:4:"1653";}s:9:"wordpress";a:3:{s:4:"name";s:9:"wordpress";s:4:"slug";s:9:"wordpress";s:5:"count";s:4:"1625";}s:6:"social";a:3:{s:4:"name";s:6:"social";s:4:"slug";s:6:"social";s:5:"count";s:4:"1469";}s:7:"gallery";a:3:{s:4:"name";s:7:"gallery";s:4:"slug";s:7:"gallery";s:5:"count";s:4:"1380";}s:5:"links";a:3:{s:4:"name";s:5:"links";s:4:"slug";s:5:"links";s:5:"count";s:4:"1299";}s:5:"email";a:3:{s:4:"name";s:5:"email";s:4:"slug";s:5:"email";s:5:"count";s:4:"1296";}s:7:"widgets";a:3:{s:4:"name";s:7:"widgets";s:4:"slug";s:7:"widgets";s:5:"count";s:4:"1152";}s:5:"pages";a:3:{s:4:"name";s:5:"pages";s:4:"slug";s:5:"pages";s:5:"count";s:4:"1136";}s:9:"ecommerce";a:3:{s:4:"name";s:9:"ecommerce";s:4:"slug";s:9:"ecommerce";s:5:"count";s:4:"1065";}s:5:"media";a:3:{s:4:"name";s:5:"media";s:4:"slug";s:5:"media";s:5:"count";s:4:"1027";}s:6:"jquery";a:3:{s:4:"name";s:6:"jquery";s:4:"slug";s:6:"jquery";s:5:"count";s:4:"1017";}s:5:"video";a:3:{s:4:"name";s:5:"video";s:4:"slug";s:5:"video";s:5:"count";s:3:"969";}s:7:"content";a:3:{s:4:"name";s:7:"content";s:4:"slug";s:7:"content";s:5:"count";s:3:"964";}s:5:"login";a:3:{s:4:"name";s:5:"login";s:4:"slug";s:5:"login";s:5:"count";s:3:"963";}s:4:"ajax";a:3:{s:4:"name";s:4:"AJAX";s:4:"slug";s:4:"ajax";s:5:"count";s:3:"932";}s:10:"responsive";a:3:{s:4:"name";s:10:"responsive";s:4:"slug";s:10:"responsive";s:5:"count";s:3:"929";}s:3:"rss";a:3:{s:4:"name";s:3:"rss";s:4:"slug";s:3:"rss";s:5:"count";s:3:"916";}s:10:"javascript";a:3:{s:4:"name";s:10:"javascript";s:4:"slug";s:10:"javascript";s:5:"count";s:3:"861";}s:10:"e-commerce";a:3:{s:4:"name";s:10:"e-commerce";s:4:"slug";s:10:"e-commerce";s:5:"count";s:3:"851";}s:8:"security";a:3:{s:4:"name";s:8:"security";s:4:"slug";s:8:"security";s:5:"count";s:3:"841";}s:10:"buddypress";a:3:{s:4:"name";s:10:"buddypress";s:4:"slug";s:10:"buddypress";s:5:"count";s:3:"821";}s:5:"photo";a:3:{s:4:"name";s:5:"photo";s:4:"slug";s:5:"photo";s:5:"count";s:3:"788";}s:5:"share";a:3:{s:4:"name";s:5:"Share";s:4:"slug";s:5:"share";s:5:"count";s:3:"783";}s:7:"youtube";a:3:{s:4:"name";s:7:"youtube";s:4:"slug";s:7:"youtube";s:5:"count";s:3:"783";}s:4:"spam";a:3:{s:4:"name";s:4:"spam";s:4:"slug";s:4:"spam";s:5:"count";s:3:"770";}s:4:"link";a:3:{s:4:"name";s:4:"link";s:4:"slug";s:4:"link";s:5:"count";s:3:"759";}s:4:"feed";a:3:{s:4:"name";s:4:"feed";s:4:"slug";s:4:"feed";s:5:"count";s:3:"751";}s:9:"analytics";a:3:{s:4:"name";s:9:"analytics";s:4:"slug";s:9:"analytics";s:5:"count";s:3:"749";}s:6:"slider";a:3:{s:4:"name";s:6:"slider";s:4:"slug";s:6:"slider";s:5:"count";s:3:"743";}s:3:"css";a:3:{s:4:"name";s:3:"CSS";s:4:"slug";s:3:"css";s:5:"count";s:3:"736";}s:8:"category";a:3:{s:4:"name";s:8:"category";s:4:"slug";s:8:"category";s:5:"count";s:3:"731";}s:4:"form";a:3:{s:4:"name";s:4:"form";s:4:"slug";s:4:"form";s:5:"count";s:3:"725";}s:5:"embed";a:3:{s:4:"name";s:5:"embed";s:4:"slug";s:5:"embed";s:5:"count";s:3:"718";}s:6:"search";a:3:{s:4:"name";s:6:"search";s:4:"slug";s:6:"search";s:5:"count";s:3:"718";}s:6:"photos";a:3:{s:4:"name";s:6:"photos";s:4:"slug";s:6:"photos";s:5:"count";s:3:"710";}s:6:"custom";a:3:{s:4:"name";s:6:"custom";s:4:"slug";s:6:"custom";s:5:"count";s:3:"701";}s:9:"slideshow";a:3:{s:4:"name";s:9:"slideshow";s:4:"slug";s:9:"slideshow";s:5:"count";s:3:"656";}s:4:"menu";a:3:{s:4:"name";s:4:"menu";s:4:"slug";s:4:"menu";s:5:"count";s:3:"652";}s:6:"button";a:3:{s:4:"name";s:6:"button";s:4:"slug";s:6:"button";s:5:"count";s:3:"640";}s:5:"stats";a:3:{s:4:"name";s:5:"stats";s:4:"slug";s:5:"stats";s:5:"count";s:3:"635";}s:5:"theme";a:3:{s:4:"name";s:5:"theme";s:4:"slug";s:5:"theme";s:5:"count";s:3:"629";}s:7:"comment";a:3:{s:4:"name";s:7:"comment";s:4:"slug";s:7:"comment";s:5:"count";s:3:"616";}s:9:"dashboard";a:3:{s:4:"name";s:9:"dashboard";s:4:"slug";s:9:"dashboard";s:5:"count";s:3:"615";}s:4:"tags";a:3:{s:4:"name";s:4:"tags";s:4:"slug";s:4:"tags";s:5:"count";s:3:"614";}s:6:"mobile";a:3:{s:4:"name";s:6:"mobile";s:4:"slug";s:6:"mobile";s:5:"count";s:3:"612";}s:10:"categories";a:3:{s:4:"name";s:10:"categories";s:4:"slug";s:10:"categories";s:5:"count";s:3:"601";}s:6:"editor";a:3:{s:4:"name";s:6:"editor";s:4:"slug";s:6:"editor";s:5:"count";s:3:"585";}s:10:"statistics";a:3:{s:4:"name";s:10:"statistics";s:4:"slug";s:10:"statistics";s:5:"count";s:3:"585";}s:3:"ads";a:3:{s:4:"name";s:3:"ads";s:4:"slug";s:3:"ads";s:5:"count";s:3:"584";}s:4:"user";a:3:{s:4:"name";s:4:"user";s:4:"slug";s:4:"user";s:5:"count";s:3:"580";}s:12:"social-media";a:3:{s:4:"name";s:12:"social media";s:4:"slug";s:12:"social-media";s:5:"count";s:3:"563";}s:5:"users";a:3:{s:4:"name";s:5:"users";s:4:"slug";s:5:"users";s:5:"count";s:3:"553";}s:4:"list";a:3:{s:4:"name";s:4:"list";s:4:"slug";s:4:"list";s:5:"count";s:3:"549";}s:12:"contact-form";a:3:{s:4:"name";s:12:"contact form";s:4:"slug";s:12:"contact-form";s:5:"count";s:3:"546";}s:6:"simple";a:3:{s:4:"name";s:6:"simple";s:4:"slug";s:6:"simple";s:5:"count";s:3:"540";}s:9:"affiliate";a:3:{s:4:"name";s:9:"affiliate";s:4:"slug";s:9:"affiliate";s:5:"count";s:3:"540";}s:7:"plugins";a:3:{s:4:"name";s:7:"plugins";s:4:"slug";s:7:"plugins";s:5:"count";s:3:"538";}s:9:"multisite";a:3:{s:4:"name";s:9:"multisite";s:4:"slug";s:9:"multisite";s:5:"count";s:3:"534";}s:4:"shop";a:3:{s:4:"name";s:4:"shop";s:4:"slug";s:4:"shop";s:5:"count";s:3:"522";}s:7:"picture";a:3:{s:4:"name";s:7:"picture";s:4:"slug";s:7:"picture";s:5:"count";s:3:"519";}s:9:"marketing";a:3:{s:4:"name";s:9:"marketing";s:4:"slug";s:9:"marketing";s:5:"count";s:3:"509";}s:3:"api";a:3:{s:4:"name";s:3:"api";s:4:"slug";s:3:"api";s:5:"count";s:3:"507";}s:7:"contact";a:3:{s:4:"name";s:7:"contact";s:4:"slug";s:7:"contact";s:5:"count";s:3:"496";}s:3:"url";a:3:{s:4:"name";s:3:"url";s:4:"slug";s:3:"url";s:5:"count";s:3:"484";}s:10:"navigation";a:3:{s:4:"name";s:10:"navigation";s:4:"slug";s:10:"navigation";s:5:"count";s:3:"471";}s:10:"newsletter";a:3:{s:4:"name";s:10:"newsletter";s:4:"slug";s:10:"newsletter";s:5:"count";s:3:"469";}s:8:"pictures";a:3:{s:4:"name";s:8:"pictures";s:4:"slug";s:8:"pictures";s:5:"count";s:3:"467";}s:4:"html";a:3:{s:4:"name";s:4:"html";s:4:"slug";s:4:"html";s:5:"count";s:3:"462";}s:6:"events";a:3:{s:4:"name";s:6:"events";s:4:"slug";s:6:"events";s:5:"count";s:3:"459";}s:8:"tracking";a:3:{s:4:"name";s:8:"tracking";s:4:"slug";s:8:"tracking";s:5:"count";s:3:"448";}s:10:"shortcodes";a:3:{s:4:"name";s:10:"shortcodes";s:4:"slug";s:10:"shortcodes";s:5:"count";s:3:"447";}s:8:"calendar";a:3:{s:4:"name";s:8:"calendar";s:4:"slug";s:8:"calendar";s:5:"count";s:3:"443";}s:4:"meta";a:3:{s:4:"name";s:4:"meta";s:4:"slug";s:4:"meta";s:5:"count";s:3:"438";}s:8:"lightbox";a:3:{s:4:"name";s:8:"lightbox";s:4:"slug";s:8:"lightbox";s:5:"count";s:3:"436";}s:3:"tag";a:3:{s:4:"name";s:3:"tag";s:4:"slug";s:3:"tag";s:5:"count";s:3:"430";}s:6:"paypal";a:3:{s:4:"name";s:6:"paypal";s:4:"slug";s:6:"paypal";s:5:"count";s:3:"427";}s:11:"advertising";a:3:{s:4:"name";s:11:"advertising";s:4:"slug";s:11:"advertising";s:5:"count";s:3:"426";}s:6:"upload";a:3:{s:4:"name";s:6:"upload";s:4:"slug";s:6:"upload";s:5:"count";s:3:"425";}s:12:"notification";a:3:{s:4:"name";s:12:"notification";s:4:"slug";s:12:"notification";s:5:"count";s:3:"424";}s:4:"news";a:3:{s:4:"name";s:4:"News";s:4:"slug";s:4:"news";s:5:"count";s:3:"422";}s:7:"sharing";a:3:{s:4:"name";s:7:"sharing";s:4:"slug";s:7:"sharing";s:5:"count";s:3:"422";}s:5:"flash";a:3:{s:4:"name";s:5:"flash";s:4:"slug";s:5:"flash";s:5:"count";s:3:"421";}s:9:"thumbnail";a:3:{s:4:"name";s:9:"thumbnail";s:4:"slug";s:9:"thumbnail";s:5:"count";s:3:"417";}s:16:"custom-post-type";a:3:{s:4:"name";s:16:"custom post type";s:4:"slug";s:16:"custom-post-type";s:5:"count";s:3:"414";}s:8:"linkedin";a:3:{s:4:"name";s:8:"linkedin";s:4:"slug";s:8:"linkedin";s:5:"count";s:3:"413";}}', 'no'),
(164, '_site_transient_timeout_browser_bbe17f0a746d1d92d88f5944fc82bf7f', '1482515959', 'no'),
(157, 'theme_mods_twentysixteen', 'a:2:{s:18:"custom_css_post_id";i:-1;s:16:"sidebars_widgets";a:2:{s:4:"time";i:1481912594;s:4:"data";a:2:{s:19:"wp_inactive_widgets";a:0:{}s:9:"sidebar-1";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}}}}', 'yes'),
(165, '_site_transient_browser_bbe17f0a746d1d92d88f5944fc82bf7f', 'a:9:{s:8:"platform";s:7:"Windows";s:4:"name";s:6:"Chrome";s:7:"version";s:12:"54.0.2840.99";s:10:"update_url";s:28:"http://www.google.com/chrome";s:7:"img_src";s:49:"http://s.wordpress.org/images/browsers/chrome.png";s:11:"img_src_ssl";s:48:"https://wordpress.org/images/browsers/chrome.png";s:15:"current_version";s:2:"18";s:7:"upgrade";b:0;s:8:"insecure";b:0;}', 'no'),
(182, 'current_theme', 'Twenty Fourteen', 'yes');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(183, 'theme_mods_fortune', 'a:2:{i:0;b:0;s:16:"sidebars_widgets";a:2:{s:4:"time";i:1481912095;s:4:"data";a:3:{s:19:"wp_inactive_widgets";a:0:{}s:14:"sidebar-widget";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}s:13:"footer-widget";N;}}}', 'yes'),
(184, 'theme_switched', '', 'yes'),
(185, 'widget_fortune_footer_contact_widget', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes'),
(196, 'yit_recently_activated', 'a:1:{i:0;s:40:"yith-woocommerce-zoom-magnifier/init.php";}', 'yes'),
(197, '_transient_timeout_yit_panel_sidebar_remote_widgets', '1482065998', 'no'),
(198, '_transient_yit_panel_sidebar_remote_widgets', 'a:0:{}', 'no'),
(199, '_transient_timeout_yit_panel_sidebar_remote_widgets_update', '1482065998', 'no'),
(200, '_transient_yit_panel_sidebar_remote_widgets_update', '1', 'no'),
(204, 'theme_mods_twentyfourteen', 'a:1:{i:0;b:0;}', 'yes'),
(205, 'widget_widget_twentyfourteen_ephemera', 'a:1:{s:12:"_multiwidget";i:1;}', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `wp_postmeta`
--

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 4, '_edit_last', '1'),
(3, 4, '_edit_lock', '1482040450:1'),
(4, 9, '_edit_last', '1'),
(5, 9, '_edit_lock', '1482040888:1'),
(6, 9, '_wp_page_template', 'page-templates/full-width.php'),
(7, 11, '_edit_last', '1'),
(8, 11, '_edit_lock', '1483309066:1'),
(9, 11, '_wp_page_template', 'page-templates/full-width.php'),
(10, 14, '_edit_last', '1'),
(11, 14, '_edit_lock', '1482709960:1'),
(12, 14, '_wp_page_template', 'page-templates/full-width.php'),
(13, 17, '_edit_last', '1'),
(14, 17, '_edit_lock', '1482804436:1'),
(15, 17, '_wp_page_template', 'page-templates/full-width.php'),
(16, 19, '_edit_last', '1'),
(17, 19, '_edit_lock', '1482879470:1'),
(18, 19, '_wp_page_template', 'page-templates/full-width.php'),
(19, 21, '_edit_last', '1'),
(20, 21, '_edit_lock', '1490749371:1'),
(21, 21, '_wp_page_template', 'page-templates/full-width.php'),
(22, 23, '_edit_last', '1'),
(23, 23, '_edit_lock', '1483309136:1'),
(24, 23, '_wp_page_template', 'page-templates/full-width.php'),
(25, 26, '_edit_last', '1'),
(26, 26, '_edit_lock', '1483309207:1'),
(27, 26, '_wp_page_template', 'page-templates/full-width.php'),
(28, 28, '_edit_last', '1'),
(29, 28, '_edit_lock', '1483313529:1'),
(30, 28, '_wp_page_template', 'page-templates/full-width.php'),
(31, 31, '_edit_last', '1'),
(32, 31, '_edit_lock', '1483325997:1'),
(33, 31, '_wp_page_template', 'page-templates/full-width.php'),
(34, 33, '_edit_last', '1'),
(35, 33, '_edit_lock', '1483326101:1'),
(36, 33, '_wp_page_template', 'page-templates/full-width.php'),
(37, 35, '_edit_last', '1'),
(38, 35, '_edit_lock', '1483330124:1'),
(39, 35, '_wp_page_template', 'page-templates/full-width.php'),
(40, 40, '_edit_last', '1'),
(41, 40, '_edit_lock', '1483778434:1'),
(42, 40, '_wp_page_template', 'page-templates/full-width.php'),
(43, 43, '_edit_last', '1'),
(44, 43, '_edit_lock', '1483778539:1'),
(45, 43, '_wp_page_template', 'page-templates/full-width.php'),
(46, 45, '_edit_last', '1'),
(47, 45, '_edit_lock', '1483933081:1'),
(48, 45, '_wp_page_template', 'page-templates/full-width.php'),
(49, 47, '_edit_last', '1'),
(50, 47, '_wp_page_template', 'page-templates/full-width.php'),
(51, 47, '_edit_lock', '1483933194:1'),
(52, 50, '_edit_last', '1'),
(53, 50, '_edit_lock', '1483934112:1'),
(54, 50, '_wp_page_template', 'page-templates/full-width.php'),
(55, 53, '_edit_last', '1'),
(56, 53, '_edit_lock', '1485047721:1'),
(57, 53, '_wp_page_template', 'page-templates/full-width.php'),
(58, 55, '_edit_last', '1'),
(59, 55, '_wp_page_template', 'page-templates/full-width.php'),
(60, 55, '_edit_lock', '1485047715:1'),
(61, 58, '_edit_last', '1'),
(62, 58, '_edit_lock', '1485315730:1'),
(63, 58, '_wp_page_template', 'page-templates/full-width.php'),
(64, 61, '_edit_last', '1'),
(65, 61, '_edit_lock', '1485943159:1'),
(66, 61, '_wp_page_template', 'page-templates/full-width.php'),
(67, 63, '_edit_last', '1'),
(68, 63, '_edit_lock', '1485943249:1'),
(69, 63, '_wp_page_template', 'page-templates/full-width.php'),
(70, 65, '_edit_last', '1'),
(71, 65, '_wp_page_template', 'page-templates/full-width.php'),
(72, 65, '_edit_lock', '1486277743:1'),
(73, 69, '_edit_last', '1'),
(74, 69, '_edit_lock', '1486278693:1'),
(75, 69, '_wp_page_template', 'page-templates/full-width.php'),
(76, 71, '_edit_last', '1'),
(77, 71, '_edit_lock', '1486277847:1'),
(78, 71, '_wp_page_template', 'page-templates/full-width.php'),
(79, 73, '_edit_last', '1'),
(80, 73, '_edit_lock', '1486278425:1'),
(81, 73, '_wp_page_template', 'page-templates/full-width.php'),
(82, 77, '_edit_lock', '1486815155:1'),
(83, 77, '_edit_last', '1'),
(84, 77, '_wp_page_template', 'page-templates/full-width.php'),
(85, 79, '_edit_lock', '1486811224:1'),
(86, 79, '_edit_last', '1'),
(87, 79, '_wp_page_template', 'page-templates/full-width.php'),
(88, 81, '_edit_lock', '1486834172:1'),
(89, 81, '_edit_last', '1'),
(90, 81, '_wp_page_template', 'page-templates/full-width.php'),
(91, 86, '_edit_lock', '1487482524:1'),
(92, 86, '_edit_last', '1'),
(93, 86, '_wp_page_template', 'page-templates/full-width.php'),
(94, 88, '_edit_lock', '1487482771:1'),
(95, 88, '_edit_last', '1'),
(96, 88, '_wp_page_template', 'page-templates/full-width.php'),
(97, 90, '_edit_lock', '1487961127:1'),
(98, 90, '_edit_last', '1'),
(99, 90, '_wp_page_template', 'page-templates/full-width.php'),
(100, 92, '_edit_lock', '1488254902:1'),
(101, 92, '_edit_last', '1'),
(102, 92, '_wp_page_template', 'page-templates/full-width.php'),
(103, 97, '_edit_lock', '1491359306:1'),
(104, 97, '_edit_last', '1'),
(105, 97, '_wp_page_template', 'page-templates/full-width.php'),
(106, 102, '_edit_lock', '1490753028:1'),
(107, 102, '_edit_last', '1'),
(108, 102, '_wp_page_template', 'page-templates/full-width.php'),
(109, 105, '_edit_lock', '1491359292:1'),
(110, 105, '_edit_last', '1'),
(111, 105, '_wp_page_template', 'page-templates/full-width.php'),
(112, 108, '_edit_lock', '1491359276:1'),
(113, 108, '_edit_last', '1'),
(114, 108, '_wp_page_template', 'page-templates/full-width.php'),
(115, 111, '_wp_attached_file', '2017/01/F5-Slider-Image-3.jpg'),
(116, 111, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:1200;s:6:"height";i:300;s:4:"file";s:29:"2017/01/F5-Slider-Image-3.jpg";s:5:"sizes";a:6:{s:9:"thumbnail";a:4:{s:4:"file";s:29:"F5-Slider-Image-3-150x150.jpg";s:5:"width";i:150;s:6:"height";i:150;s:9:"mime-type";s:10:"image/jpeg";}s:6:"medium";a:4:{s:4:"file";s:28:"F5-Slider-Image-3-300x75.jpg";s:5:"width";i:300;s:6:"height";i:75;s:9:"mime-type";s:10:"image/jpeg";}s:12:"medium_large";a:4:{s:4:"file";s:29:"F5-Slider-Image-3-768x192.jpg";s:5:"width";i:768;s:6:"height";i:192;s:9:"mime-type";s:10:"image/jpeg";}s:5:"large";a:4:{s:4:"file";s:30:"F5-Slider-Image-3-1024x256.jpg";s:5:"width";i:1024;s:6:"height";i:256;s:9:"mime-type";s:10:"image/jpeg";}s:14:"post-thumbnail";a:4:{s:4:"file";s:29:"F5-Slider-Image-3-672x300.jpg";s:5:"width";i:672;s:6:"height";i:300;s:9:"mime-type";s:10:"image/jpeg";}s:25:"twentyfourteen-full-width";a:4:{s:4:"file";s:30:"F5-Slider-Image-3-1038x300.jpg";s:5:"width";i:1038;s:6:"height";i:300;s:9:"mime-type";s:10:"image/jpeg";}}s:10:"image_meta";a:12:{s:8:"aperture";s:1:"0";s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";s:1:"0";s:9:"copyright";s:18:"www.quincydein.com";s:12:"focal_length";s:1:"0";s:3:"iso";s:1:"0";s:13:"shutter_speed";s:1:"0";s:5:"title";s:0:"";s:11:"orientation";s:1:"0";s:8:"keywords";a:0:{}}}'),
(117, 113, '_edit_lock', '1495045241:1'),
(118, 113, '_edit_last', '1'),
(119, 113, '_wp_page_template', 'page-templates/full-width.php'),
(120, 115, '_edit_lock', '1495045557:1'),
(121, 115, '_edit_last', '1'),
(122, 115, '_wp_page_template', 'page-templates/full-width.php'),
(123, 117, '_edit_lock', '1495045249:1'),
(124, 117, '_edit_last', '1'),
(125, 117, '_wp_page_template', 'page-templates/full-width.php'),
(126, 119, '_edit_lock', '1495045115:1'),
(127, 119, '_edit_last', '1'),
(128, 119, '_wp_page_template', 'page-templates/full-width.php'),
(129, 122, '_edit_lock', '1494214661:1'),
(130, 122, '_edit_last', '1'),
(131, 122, '_wp_page_template', 'page-templates/full-width.php'),
(132, 124, '_edit_lock', '1495045112:1'),
(133, 124, '_edit_last', '1'),
(134, 124, '_wp_page_template', 'page-templates/full-width.php'),
(135, 126, '_edit_lock', '1495045585:1'),
(136, 126, '_edit_last', '1'),
(137, 126, '_wp_page_template', 'page-templates/full-width.php');

-- --------------------------------------------------------

--
-- Table structure for table `wp_posts`
--

CREATE TABLE `wp_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2016-12-13 20:48:01', '2016-12-13 20:48:01', 'Welcome to WordPress. This is your first post. Edit or delete it, then start writing!', 'Hello world!', '', 'publish', 'open', 'open', '', 'hello-world', '', '', '2016-12-13 20:48:01', '2016-12-13 20:48:01', '', 0, 'http://localhost/college/?p=1', 0, 'post', '', 1),
(2, 1, '2016-12-13 20:48:01', '2016-12-13 20:48:01', 'This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:\r\n\r\n<blockquote>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</blockquote>\r\n\r\n...or something like this:\r\n\r\n<blockquote>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</blockquote>\r\n\r\nAs a new WordPress user, you should go to <a href="http://localhost/college/wp-admin/">your dashboard</a> to delete this page and create new pages for your content. Have fun!', 'Sample Page', '', 'publish', 'closed', 'open', '', 'sample-page', '', '', '2016-12-13 20:48:01', '2016-12-13 20:48:01', '', 0, 'http://localhost/college/?page_id=2', 0, 'page', '', 0),
(14, 1, '2016-12-25 23:52:33', '2016-12-25 23:52:33', '[COLLEGE_SLIDER]', 'Home Page Slider', '', 'publish', 'closed', 'closed', '', 'home-page-slider', '', '', '2016-12-25 23:52:33', '2016-12-25 23:52:33', '', 0, 'http://localhost/college/?page_id=14', 0, 'page', '', 0),
(4, 1, '2016-12-13 20:49:49', '2016-12-13 20:49:49', '[COLLEGE_DEMO]', 'Demo', '', 'publish', 'closed', 'closed', '', 'demo', '', '', '2016-12-13 20:49:49', '2016-12-13 20:49:49', '', 0, 'http://localhost/college/?page_id=4', 0, 'page', '', 0),
(5, 1, '2016-12-13 20:49:49', '2016-12-13 20:49:49', '[COLLEGE_DEMO]', 'Demo', '', 'inherit', 'closed', 'closed', '', '4-revision-v1', '', '', '2016-12-13 20:49:49', '2016-12-13 20:49:49', '', 4, 'http://localhost/college/2016/12/13/4-revision-v1/', 0, 'revision', '', 0),
(15, 1, '2016-12-25 23:52:33', '2016-12-25 23:52:33', '[COLLEGE_SLIDER]', 'Home Page Slider', '', 'inherit', 'closed', 'closed', '', '14-revision-v1', '', '', '2016-12-25 23:52:33', '2016-12-25 23:52:33', '', 14, 'http://localhost/college/2016/12/25/14-revision-v1/', 0, 'revision', '', 0),
(9, 1, '2016-12-18 05:57:17', '2016-12-18 05:57:17', '[COLLEGE_LOGIN]', 'Login', '', 'publish', 'closed', 'closed', '', 'login', '', '', '2016-12-18 05:57:17', '2016-12-18 05:57:17', '', 0, 'http://localhost/college/?page_id=9', 0, 'page', '', 0),
(10, 1, '2016-12-18 05:57:17', '2016-12-18 05:57:17', '[COLLEGE_LOGIN]', 'Login', '', 'inherit', 'closed', 'closed', '', '9-revision-v1', '', '', '2016-12-18 05:57:17', '2016-12-18 05:57:17', '', 9, 'http://localhost/college/2016/12/18/9-revision-v1/', 0, 'revision', '', 0),
(11, 1, '2016-12-18 15:36:44', '2016-12-18 15:36:44', '[COLLEGE_JOURNAL]', 'Journal', '', 'publish', 'closed', 'closed', '', 'journal', '', '', '2016-12-19 03:53:04', '2016-12-19 03:53:04', '', 0, 'http://localhost/college/?page_id=11', 0, 'page', '', 0),
(12, 1, '2016-12-18 15:36:44', '2016-12-18 15:36:44', '[COLLEGE_JOURNAL]', 'journal', '', 'inherit', 'closed', 'closed', '', '11-revision-v1', '', '', '2016-12-18 15:36:44', '2016-12-18 15:36:44', '', 11, 'http://localhost/college/2016/12/18/11-revision-v1/', 0, 'revision', '', 0),
(13, 1, '2016-12-19 03:53:04', '2016-12-19 03:53:04', '[COLLEGE_JOURNAL]', 'Journal', '', 'inherit', 'closed', 'closed', '', '11-revision-v1', '', '', '2016-12-19 03:53:04', '2016-12-19 03:53:04', '', 11, 'http://localhost/college/2016/12/19/11-revision-v1/', 0, 'revision', '', 0),
(128, 1, '2017-05-17 18:16:52', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2017-05-17 18:16:52', '0000-00-00 00:00:00', '', 0, 'http://localhost/college/?p=128', 0, 'post', '', 0),
(17, 1, '2016-12-27 01:52:39', '2016-12-27 01:52:39', '[COLLEGE_SLIDER_LIST]', 'Home Slider List', '', 'publish', 'closed', 'closed', '', 'home-slider-list', '', '', '2016-12-27 01:52:39', '2016-12-27 01:52:39', '', 0, 'http://localhost/college/?page_id=17', 0, 'page', '', 0),
(18, 1, '2016-12-27 01:52:39', '2016-12-27 01:52:39', '[COLLEGE_SLIDER_LIST]', 'Home Slider List', '', 'inherit', 'closed', 'closed', '', '17-revision-v1', '', '', '2016-12-27 01:52:39', '2016-12-27 01:52:39', '', 17, 'http://localhost/college/2016/12/27/17-revision-v1/', 0, 'revision', '', 0),
(19, 1, '2016-12-27 23:00:08', '2016-12-27 23:00:08', '[COLLEGE_CONTACT_US]', 'Contact us', '', 'publish', 'closed', 'closed', '', 'contact-us', '', '', '2016-12-27 23:00:08', '2016-12-27 23:00:08', '', 0, 'http://localhost/college/?page_id=19', 0, 'page', '', 0),
(20, 1, '2016-12-27 23:00:08', '2016-12-27 23:00:08', '[COLLEGE_CONTACT_US]', 'Contact us', '', 'inherit', 'closed', 'closed', '', '19-revision-v1', '', '', '2016-12-27 23:00:08', '2016-12-27 23:00:08', '', 19, 'http://localhost/college/2016/12/27/19-revision-v1/', 0, 'revision', '', 0),
(21, 1, '2016-12-27 23:00:45', '2016-12-27 23:00:45', '[COLLEGE_ABOUT_US]', 'About Us', '', 'publish', 'closed', 'closed', '', 'about-us', '', '', '2016-12-27 23:00:45', '2016-12-27 23:00:45', '', 0, 'http://localhost/college/?page_id=21', 0, 'page', '', 0),
(22, 1, '2016-12-27 23:00:45', '2016-12-27 23:00:45', '[COLLEGE_ABOUT_US]', 'About Us', '', 'inherit', 'closed', 'closed', '', '21-revision-v1', '', '', '2016-12-27 23:00:45', '2016-12-27 23:00:45', '', 21, 'http://localhost/college/2016/12/27/21-revision-v1/', 0, 'revision', '', 0),
(23, 1, '2016-12-29 08:40:16', '2016-12-29 08:40:16', '[COLLEGE_JOURNAL_LIST]', 'Journal List', '', 'publish', 'closed', 'closed', '', 'journal-list', '', '', '2016-12-29 08:40:16', '2016-12-29 08:40:16', '', 0, 'http://localhost/college/?page_id=23', 0, 'page', '', 0),
(24, 1, '2016-12-29 08:40:16', '2016-12-29 08:40:16', '[COLLEGE_JOURNAL_LIST]', 'Journal List', '', 'inherit', 'closed', 'closed', '', '23-revision-v1', '', '', '2016-12-29 08:40:16', '2016-12-29 08:40:16', '', 23, 'http://localhost/college/2016/12/29/23-revision-v1/', 0, 'revision', '', 0),
(45, 1, '2017-01-09 03:40:12', '2017-01-09 03:40:12', '[COLLEGE_JOURNAL_EDITOR]', 'Journal Editor', '', 'publish', 'closed', 'closed', '', 'journal-editor', '', '', '2017-01-09 03:40:12', '2017-01-09 03:40:12', '', 0, 'http://localhost/college/?page_id=45', 0, 'page', '', 0),
(26, 1, '2017-01-01 22:20:38', '2017-01-01 22:20:38', '[COLLEGE_VOLUME]', 'Volume', '', 'publish', 'closed', 'closed', '', 'volume', '', '', '2017-01-01 22:22:24', '2017-01-01 22:22:24', '', 0, 'http://localhost/college/?page_id=26', 0, 'page', '', 0),
(27, 1, '2017-01-01 22:20:38', '2017-01-01 22:20:38', '[COLLEGE_VOLUME]', 'volume', '', 'inherit', 'closed', 'closed', '', '26-revision-v1', '', '', '2017-01-01 22:20:38', '2017-01-01 22:20:38', '', 26, 'http://localhost/college/2017/01/01/26-revision-v1/', 0, 'revision', '', 0),
(28, 1, '2017-01-01 22:21:48', '2017-01-01 22:21:48', '[COLLEGE_VOLUME_LIST]', 'Volume List', '', 'publish', 'closed', 'closed', '', 'volume-list', '', '', '2017-01-01 22:21:48', '2017-01-01 22:21:48', '', 0, 'http://localhost/college/?page_id=28', 0, 'page', '', 0),
(29, 1, '2017-01-01 22:21:48', '2017-01-01 22:21:48', '[COLLEGE_VOLUME_LIST]', 'Volume List', '', 'inherit', 'closed', 'closed', '', '28-revision-v1', '', '', '2017-01-01 22:21:48', '2017-01-01 22:21:48', '', 28, 'http://localhost/college/2017/01/01/28-revision-v1/', 0, 'revision', '', 0),
(30, 1, '2017-01-01 22:22:24', '2017-01-01 22:22:24', '[COLLEGE_VOLUME]', 'Volume', '', 'inherit', 'closed', 'closed', '', '26-revision-v1', '', '', '2017-01-01 22:22:24', '2017-01-01 22:22:24', '', 26, 'http://localhost/college/2017/01/01/26-revision-v1/', 0, 'revision', '', 0),
(31, 1, '2017-01-02 03:02:15', '2017-01-02 03:02:15', '[COLLEGE_ISSUE]', 'Issue', '', 'publish', 'closed', 'closed', '', 'issue', '', '', '2017-01-02 03:02:15', '2017-01-02 03:02:15', '', 0, 'http://localhost/college/?page_id=31', 0, 'page', '', 0),
(32, 1, '2017-01-02 03:02:15', '2017-01-02 03:02:15', '[COLLEGE_ISSUE]', 'Issue', '', 'inherit', 'closed', 'closed', '', '31-revision-v1', '', '', '2017-01-02 03:02:15', '2017-01-02 03:02:15', '', 31, 'http://localhost/college/2017/01/02/31-revision-v1/', 0, 'revision', '', 0),
(33, 1, '2017-01-02 03:02:54', '2017-01-02 03:02:54', '[COLLEGE_ISSUE_LIST]', 'Issue List', '', 'publish', 'closed', 'closed', '', 'issue-list', '', '', '2017-01-02 03:02:54', '2017-01-02 03:02:54', '', 0, 'http://localhost/college/?page_id=33', 0, 'page', '', 0),
(34, 1, '2017-01-02 03:02:54', '2017-01-02 03:02:54', '[COLLEGE_ISSUE_LIST]', 'Issue List', '', 'inherit', 'closed', 'closed', '', '33-revision-v1', '', '', '2017-01-02 03:02:54', '2017-01-02 03:02:54', '', 33, 'http://localhost/college/2017/01/02/33-revision-v1/', 0, 'revision', '', 0),
(35, 1, '2017-01-02 04:08:43', '2017-01-02 04:08:43', '[COLLEGE_CALL_FOR_PAPER]', 'Call for Paper', '', 'publish', 'closed', 'closed', '', 'call-for-paper', '', '', '2017-01-02 04:08:43', '2017-01-02 04:08:43', '', 0, 'http://localhost/college/?page_id=35', 0, 'page', '', 0),
(36, 1, '2017-01-02 04:08:43', '2017-01-02 04:08:43', '[COLLEGE_CALL_FOR_PAPER]', 'Call for Paper', '', 'inherit', 'closed', 'closed', '', '35-revision-v1', '', '', '2017-01-02 04:08:43', '2017-01-02 04:08:43', '', 35, 'http://localhost/college/2017/01/02/35-revision-v1/', 0, 'revision', '', 0),
(54, 1, '2017-01-22 01:06:22', '2017-01-22 01:06:22', '[COLLEGE_GENERAL_SETTINGS]', 'General Settings', '', 'inherit', 'closed', 'closed', '', '53-revision-v1', '', '', '2017-01-22 01:06:22', '2017-01-22 01:06:22', '', 53, 'http://localhost/college/2017/01/22/53-revision-v1/', 0, 'revision', '', 0),
(53, 1, '2017-01-22 01:06:22', '2017-01-22 01:06:22', '[COLLEGE_GENERAL_SETTINGS]', 'General Settings', '', 'publish', 'closed', 'closed', '', 'general-settings', '', '', '2017-01-22 01:06:22', '2017-01-22 01:06:22', '', 0, 'http://localhost/college/?page_id=53', 0, 'page', '', 0),
(40, 1, '2017-01-07 08:42:33', '2017-01-07 08:42:33', '[COLLEGE_EDITOR]', 'Editor', '', 'publish', 'closed', 'closed', '', 'editor', '', '', '2017-01-07 08:42:33', '2017-01-07 08:42:33', '', 0, 'http://localhost/college/?page_id=40', 0, 'page', '', 0),
(90, 1, '2017-02-19 10:09:47', '2017-02-19 10:09:47', '[COLLEGE_AUTHOR_PAPER]', 'Author Paper', '', 'publish', 'closed', 'closed', '', 'author-paper', '', '', '2017-02-24 16:22:59', '2017-02-24 16:22:59', '', 0, 'http://localhost/college/?page_id=90', 0, 'page', '', 0),
(42, 1, '2017-01-07 08:42:33', '2017-01-07 08:42:33', '[COLLEGE_EDITOR]', 'Editor', '', 'inherit', 'closed', 'closed', '', '40-revision-v1', '', '', '2017-01-07 08:42:33', '2017-01-07 08:42:33', '', 40, 'http://localhost/college/2017/01/07/40-revision-v1/', 0, 'revision', '', 0),
(43, 1, '2017-01-07 08:43:24', '2017-01-07 08:43:24', '[COLLEGE_EDITOR_LIST]', 'Editor List', '', 'publish', 'closed', 'closed', '', 'editor-list', '', '', '2017-01-07 08:43:32', '2017-01-07 08:43:32', '', 0, 'http://localhost/college/?page_id=43', 0, 'page', '', 0),
(44, 1, '2017-01-07 08:43:24', '2017-01-07 08:43:24', '[COLLEGE_EDITOR_LIST]', 'Editor List', '', 'inherit', 'closed', 'closed', '', '43-revision-v1', '', '', '2017-01-07 08:43:24', '2017-01-07 08:43:24', '', 43, 'http://localhost/college/2017/01/07/43-revision-v1/', 0, 'revision', '', 0),
(46, 1, '2017-01-09 03:40:12', '2017-01-09 03:40:12', '[COLLEGE_JOURNAL_EDITOR]', 'Journal Editor', '', 'inherit', 'closed', 'closed', '', '45-revision-v1', '', '', '2017-01-09 03:40:12', '2017-01-09 03:40:12', '', 45, 'http://localhost/college/2017/01/09/45-revision-v1/', 0, 'revision', '', 0),
(47, 1, '2017-01-09 03:40:57', '2017-01-09 03:40:57', '[COLLEGE_JOURNAL_EDITOR_LIST]', 'Journal Editor List', '', 'publish', 'closed', 'closed', '', 'journal-editor-list', '', '', '2017-01-09 03:42:09', '2017-01-09 03:42:09', '', 0, 'http://localhost/college/?page_id=47', 0, 'page', '', 0),
(48, 1, '2017-01-09 03:40:57', '2017-01-09 03:40:57', '[COLLEGE_JOURNAL_EDITOR_LIST]', '', '', 'inherit', 'closed', 'closed', '', '47-revision-v1', '', '', '2017-01-09 03:40:57', '2017-01-09 03:40:57', '', 47, 'http://localhost/college/2017/01/09/47-revision-v1/', 0, 'revision', '', 0),
(49, 1, '2017-01-09 03:42:09', '2017-01-09 03:42:09', '[COLLEGE_JOURNAL_EDITOR_LIST]', 'Journal Editor List', '', 'inherit', 'closed', 'closed', '', '47-revision-v1', '', '', '2017-01-09 03:42:09', '2017-01-09 03:42:09', '', 47, 'http://localhost/college/2017/01/09/47-revision-v1/', 0, 'revision', '', 0),
(50, 1, '2017-01-09 03:43:08', '2017-01-09 03:43:08', '[COLLEGE_EDITOR_BOARD]', 'Editor Board', '', 'publish', 'closed', 'closed', '', 'editor-board', '', '', '2017-01-09 03:43:08', '2017-01-09 03:43:08', '', 0, 'http://localhost/college/?page_id=50', 0, 'page', '', 0),
(51, 1, '2017-01-09 03:43:08', '2017-01-09 03:43:08', '[COLLEGE_EDITOR_BOARD]', 'Editor Board', '', 'inherit', 'closed', 'closed', '', '50-revision-v1', '', '', '2017-01-09 03:43:08', '2017-01-09 03:43:08', '', 50, 'http://localhost/college/2017/01/09/50-revision-v1/', 0, 'revision', '', 0),
(55, 1, '2017-01-22 01:15:42', '2017-01-22 01:15:42', '[COLLEGE_PROCESSING_FEES]', 'Processing Fees', '', 'publish', 'closed', 'closed', '', 'processing-fees', '', '', '2017-01-22 01:15:42', '2017-01-22 01:15:42', '', 0, 'http://localhost/college/?page_id=55', 0, 'page', '', 0),
(56, 1, '2017-01-22 01:14:11', '2017-01-22 01:14:11', '', 'Pay Fees', '', 'inherit', 'closed', 'closed', '', '55-revision-v1', '', '', '2017-01-22 01:14:11', '2017-01-22 01:14:11', '', 55, 'http://localhost/college/2017/01/22/55-revision-v1/', 0, 'revision', '', 0),
(57, 1, '2017-01-22 01:15:42', '2017-01-22 01:15:42', '[COLLEGE_PROCESSING_FEES]', 'Processing Fees', '', 'inherit', 'closed', 'closed', '', '55-revision-v1', '', '', '2017-01-22 01:15:42', '2017-01-22 01:15:42', '', 55, 'http://localhost/college/2017/01/22/55-revision-v1/', 0, 'revision', '', 0),
(58, 1, '2017-01-25 03:35:51', '2017-01-25 03:35:51', '[COLLEGE_JOURNAL_VIEW]', 'Journal View', '', 'publish', 'closed', 'closed', '', 'journal-view', '', '', '2017-01-25 03:35:51', '2017-01-25 03:35:51', '', 0, 'http://localhost/college/?page_id=58', 0, 'page', '', 0),
(59, 1, '2017-01-25 03:35:51', '2017-01-25 03:35:51', '[COLLEGE_JOURNAL_VIEW]', 'Journal View', '', 'inherit', 'closed', 'closed', '', '58-revision-v1', '', '', '2017-01-25 03:35:51', '2017-01-25 03:35:51', '', 58, 'http://localhost/college/2017/01/25/58-revision-v1/', 0, 'revision', '', 0),
(61, 1, '2017-02-01 04:22:50', '2017-02-01 04:22:50', '[COLLEGE_CAROSEL_SLIDER]', 'Carosel Slider', '', 'publish', 'closed', 'closed', '', 'carosel-slider', '', '', '2017-02-01 04:22:50', '2017-02-01 04:22:50', '', 0, 'http://localhost/college/?page_id=61', 0, 'page', '', 0),
(62, 1, '2017-02-01 04:22:50', '2017-02-01 04:22:50', '[COLLEGE_CAROSEL_SLIDER]', 'Carosel Slider', '', 'inherit', 'closed', 'closed', '', '61-revision-v1', '', '', '2017-02-01 04:22:50', '2017-02-01 04:22:50', '', 61, 'http://localhost/college/2017/02/01/61-revision-v1/', 0, 'revision', '', 0),
(63, 1, '2017-02-01 04:23:43', '2017-02-01 04:23:43', '[COLLEGE_CAROSEL_SLIDER_LIST]', 'Carosel Slider List', '', 'publish', 'closed', 'closed', '', 'carosel-slider-list', '', '', '2017-02-01 04:23:43', '2017-02-01 04:23:43', '', 0, 'http://localhost/college/?page_id=63', 0, 'page', '', 0),
(64, 1, '2017-02-01 04:23:43', '2017-02-01 04:23:43', '[COLLEGE_CAROSEL_SLIDER_LIST]', 'Carosel Slider List', '', 'inherit', 'closed', 'closed', '', '63-revision-v1', '', '', '2017-02-01 04:23:43', '2017-02-01 04:23:43', '', 63, 'http://localhost/college/2017/02/01/63-revision-v1/', 0, 'revision', '', 0),
(65, 1, '2017-02-02 03:51:09', '2017-02-02 03:51:09', '[COLLEGE_DOCUMENT]', 'College Document', '', 'publish', 'closed', 'closed', '', 'college-document', '', '', '2017-02-02 03:52:10', '2017-02-02 03:52:10', '', 0, 'http://localhost/college/?page_id=65', 0, 'page', '', 0),
(66, 1, '2017-02-02 03:51:09', '2017-02-02 03:51:09', '[COLLEGE_DOCUMENT_FORM]', '', '', 'inherit', 'closed', 'closed', '', '65-revision-v1', '', '', '2017-02-02 03:51:09', '2017-02-02 03:51:09', '', 65, 'http://localhost/college/2017/02/02/65-revision-v1/', 0, 'revision', '', 0),
(67, 1, '2017-02-02 03:51:58', '2017-02-02 03:51:58', '[COLLEGE_DOCUMENT_FORM]', 'College Document', '', 'inherit', 'closed', 'closed', '', '65-revision-v1', '', '', '2017-02-02 03:51:58', '2017-02-02 03:51:58', '', 65, 'http://localhost/college/2017/02/02/65-revision-v1/', 0, 'revision', '', 0),
(68, 1, '2017-02-02 03:52:10', '2017-02-02 03:52:10', '[COLLEGE_DOCUMENT]', 'College Document', '', 'inherit', 'closed', 'closed', '', '65-revision-v1', '', '', '2017-02-02 03:52:10', '2017-02-02 03:52:10', '', 65, 'http://localhost/college/2017/02/02/65-revision-v1/', 0, 'revision', '', 0),
(69, 1, '2017-02-04 21:14:49', '2017-02-04 21:14:49', '[COLLEGE_WITHDRAWAL_PROCEDURE]', 'Withdrawal Procedure', '', 'publish', 'closed', 'closed', '', 'withdrawal-procedure', '', '', '2017-02-04 21:14:49', '2017-02-04 21:14:49', '', 0, 'http://localhost/college/?page_id=69', 0, 'page', '', 0),
(70, 1, '2017-02-04 21:14:49', '2017-02-04 21:14:49', '[COLLEGE_WITHDRAWAL_PROCEDURE]', 'Withdrawal Procedure', '', 'inherit', 'closed', 'closed', '', '69-revision-v1', '', '', '2017-02-04 21:14:49', '2017-02-04 21:14:49', '', 69, 'http://localhost/college/2017/02/04/69-revision-v1/', 0, 'revision', '', 0),
(71, 1, '2017-02-04 21:15:35', '2017-02-04 21:15:35', '[COLLEGE_GUIDELINES_AUTHOR]', 'Guidelines to Author', '', 'publish', 'closed', 'closed', '', 'guidelines-to-author', '', '', '2017-02-04 21:15:35', '2017-02-04 21:15:35', '', 0, 'http://localhost/college/?page_id=71', 0, 'page', '', 0),
(72, 1, '2017-02-04 21:15:35', '2017-02-04 21:15:35', '[COLLEGE_GUIDELINES_AUTHOR]', 'Guidelines to Author', '', 'inherit', 'closed', 'closed', '', '71-revision-v1', '', '', '2017-02-04 21:15:35', '2017-02-04 21:15:35', '', 71, 'http://localhost/college/2017/02/04/71-revision-v1/', 0, 'revision', '', 0),
(73, 1, '2017-02-04 21:16:33', '2017-02-04 21:16:33', '[COLLEGE_USER_LIST]', 'User List', '', 'publish', 'closed', 'closed', '', 'user-list', '', '', '2017-02-04 21:16:33', '2017-02-04 21:16:33', '', 0, 'http://localhost/college/?page_id=73', 0, 'page', '', 0),
(74, 1, '2017-02-04 21:16:33', '2017-02-04 21:16:33', '[COLLEGE_USER_LIST]', 'User List', '', 'inherit', 'closed', 'closed', '', '73-revision-v1', '', '', '2017-02-04 21:16:33', '2017-02-04 21:16:33', '', 73, 'http://localhost/college/2017/02/04/73-revision-v1/', 0, 'revision', '', 0),
(86, 1, '2017-02-19 05:32:28', '2017-02-19 05:32:28', '[COLLEGE_REVIEWER]', 'Reviewer', '', 'publish', 'closed', 'closed', '', 'reviewer', '', '', '2017-02-19 05:32:28', '2017-02-19 05:32:28', '', 0, 'http://localhost/college/?page_id=86', 0, 'page', '', 0),
(77, 1, '2017-02-11 11:02:11', '2017-02-11 11:02:11', '[COLLEGE_JOURNAL_ISSUES_PAGES]', 'Journal Issue Page', '', 'publish', 'closed', 'closed', '', 'journal-issue-page', '', '', '2017-02-11 11:02:11', '2017-02-11 11:02:11', '', 0, 'http://localhost/college/?page_id=77', 0, 'page', '', 0),
(78, 1, '2017-02-11 11:02:11', '2017-02-11 11:02:11', '[COLLEGE_JOURNAL_ISSUES_PAGES]', 'Journal Issue Page', '', 'inherit', 'closed', 'closed', '', '77-revision-v1', '', '', '2017-02-11 11:02:11', '2017-02-11 11:02:11', '', 77, 'http://localhost/college/2017/02/11/77-revision-v1/', 0, 'revision', '', 0),
(79, 1, '2017-02-11 11:04:45', '2017-02-11 11:04:45', '[COLLEGE_JOURNAL_ISSUE_PUBLISH]', 'Journal Issue Publish', '', 'publish', 'closed', 'closed', '', 'journal-issue-publish', '', '', '2017-02-11 11:09:21', '2017-02-11 11:09:21', '', 0, 'http://localhost/college/?page_id=79', 0, 'page', '', 0),
(80, 1, '2017-02-11 11:04:45', '2017-02-11 11:04:45', '[COLLEGE_JOURNAL_ISSUES_PUBLISH]', 'Journal Issue Publish', '', 'inherit', 'closed', 'closed', '', '79-revision-v1', '', '', '2017-02-11 11:04:45', '2017-02-11 11:04:45', '', 79, 'http://localhost/college/2017/02/11/79-revision-v1/', 0, 'revision', '', 0),
(81, 1, '2017-02-11 11:05:25', '2017-02-11 11:05:25', '[COLLEGE_JOURNAL_ISSUE_PUBLISH_LIST]', 'Journal Issue Publish List', '', 'publish', 'closed', 'closed', '', 'journal-issue-publish-list', '', '', '2017-02-11 11:09:50', '2017-02-11 11:09:50', '', 0, 'http://localhost/college/?page_id=81', 0, 'page', '', 0),
(82, 1, '2017-02-11 11:05:25', '2017-02-11 11:05:25', '[COLLEGE_JOURNAL_ISSUES_PUBLISH_LIST]', 'Journal Issue Publish List', '', 'inherit', 'closed', 'closed', '', '81-revision-v1', '', '', '2017-02-11 11:05:25', '2017-02-11 11:05:25', '', 81, 'http://localhost/college/2017/02/11/81-revision-v1/', 0, 'revision', '', 0),
(83, 1, '2017-02-11 11:09:21', '2017-02-11 11:09:21', '[COLLEGE_JOURNAL_ISSUE_PUBLISH]', 'Journal Issue Publish', '', 'inherit', 'closed', 'closed', '', '79-revision-v1', '', '', '2017-02-11 11:09:21', '2017-02-11 11:09:21', '', 79, 'http://localhost/college/2017/02/11/79-revision-v1/', 0, 'revision', '', 0),
(84, 1, '2017-02-11 11:09:50', '2017-02-11 11:09:50', '[COLLEGE_JOURNAL_ISSUE_PUBLISH_LIST]', 'Journal Issue Publish List', '', 'inherit', 'closed', 'closed', '', '81-revision-v1', '', '', '2017-02-11 11:09:50', '2017-02-11 11:09:50', '', 81, 'http://localhost/college/2017/02/11/81-revision-v1/', 0, 'revision', '', 0),
(87, 1, '2017-02-19 05:32:28', '2017-02-19 05:32:28', '[COLLEGE_REVIEWER]', 'Reviewer', '', 'inherit', 'closed', 'closed', '', '86-revision-v1', '', '', '2017-02-19 05:32:28', '2017-02-19 05:32:28', '', 86, 'http://localhost/college/2017/02/19/86-revision-v1/', 0, 'revision', '', 0),
(88, 1, '2017-02-19 05:38:48', '2017-02-19 05:38:48', '[COLLEGE_REVIEWER_LIST]', 'Reviewer List', '', 'publish', 'closed', 'closed', '', 'reviewer-list', '', '', '2017-02-19 05:38:48', '2017-02-19 05:38:48', '', 0, 'http://localhost/college/?page_id=88', 0, 'page', '', 0),
(89, 1, '2017-02-19 05:38:48', '2017-02-19 05:38:48', '[COLLEGE_REVIEWER_LIST]', 'Reviewer List', '', 'inherit', 'closed', 'closed', '', '88-revision-v1', '', '', '2017-02-19 05:38:48', '2017-02-19 05:38:48', '', 88, 'http://localhost/college/2017/02/19/88-revision-v1/', 0, 'revision', '', 0),
(91, 1, '2017-02-19 10:09:47', '2017-02-19 10:09:47', '[COLLEGE_AUTHOR_PAPER]', 'Author Paper', '', 'inherit', 'closed', 'closed', '', '90-revision-v1', '', '', '2017-02-19 10:09:47', '2017-02-19 10:09:47', '', 90, 'http://localhost/college/2017/02/19/90-revision-v1/', 0, 'revision', '', 0),
(92, 1, '2017-02-19 10:11:06', '2017-02-19 10:11:06', '[COLLEGE_AUTHOR_ISSUE_PAPER_LIST]', 'Author paper list', '', 'publish', 'closed', 'closed', '', 'author-paper-list', '', '', '2017-02-19 12:58:32', '2017-02-19 12:58:32', '', 0, 'http://localhost/college/?page_id=92', 0, 'page', '', 0),
(93, 1, '2017-02-19 10:11:06', '2017-02-19 10:11:06', '[COLLEGE_AUTHOR_PAPER_LIST]', 'Author paper list', '', 'inherit', 'closed', 'closed', '', '92-revision-v1', '', '', '2017-02-19 10:11:06', '2017-02-19 10:11:06', '', 92, 'http://localhost/college/2017/02/19/92-revision-v1/', 0, 'revision', '', 0),
(94, 1, '2017-02-19 12:57:51', '2017-02-19 12:57:51', '[COLLEGE_AUTHOR__PAPER]', 'Author Paper', '', 'inherit', 'closed', 'closed', '', '90-autosave-v1', '', '', '2017-02-19 12:57:51', '2017-02-19 12:57:51', '', 90, 'http://localhost/college/2017/02/19/90-autosave-v1/', 0, 'revision', '', 0),
(95, 1, '2017-02-19 12:57:56', '2017-02-19 12:57:56', '[COLLEGE_AUTHOR_ISSUE_PAPER]', 'Author Paper', '', 'inherit', 'closed', 'closed', '', '90-revision-v1', '', '', '2017-02-19 12:57:56', '2017-02-19 12:57:56', '', 90, 'http://localhost/college/2017/02/19/90-revision-v1/', 0, 'revision', '', 0),
(96, 1, '2017-02-19 12:58:32', '2017-02-19 12:58:32', '[COLLEGE_AUTHOR_ISSUE_PAPER_LIST]', 'Author paper list', '', 'inherit', 'closed', 'closed', '', '92-revision-v1', '', '', '2017-02-19 12:58:32', '2017-02-19 12:58:32', '', 92, 'http://localhost/college/2017/02/19/92-revision-v1/', 0, 'revision', '', 0),
(97, 1, '2017-02-24 16:06:30', '2017-02-24 16:06:30', '[COLLEGE_AUTHOR_ISSUE_PAPER]', 'Author Issue Paper', '', 'publish', 'closed', 'closed', '', 'author-issue-paper', '', '', '2017-02-24 16:06:30', '2017-02-24 16:06:30', '', 0, 'http://localhost/college/?page_id=97', 0, 'page', '', 0),
(98, 1, '2017-02-24 16:06:30', '2017-02-24 16:06:30', '[COLLEGE_AUTHOR_ISSUE_PAPER]', 'Author Issue Paper', '', 'inherit', 'closed', 'closed', '', '97-revision-v1', '', '', '2017-02-24 16:06:30', '2017-02-24 16:06:30', '', 97, 'http://localhost/college/2017/02/24/97-revision-v1/', 0, 'revision', '', 0),
(99, 1, '2017-02-24 16:22:59', '2017-02-24 16:22:59', '[COLLEGE_AUTHOR_PAPER]', 'Author Paper', '', 'inherit', 'closed', 'closed', '', '90-revision-v1', '', '', '2017-02-24 16:22:59', '2017-02-24 16:22:59', '', 90, 'http://localhost/college/2017/02/24/90-revision-v1/', 0, 'revision', '', 0),
(102, 1, '2017-03-29 01:06:12', '2017-03-29 01:06:12', '[COLLEGE_REVIEWER_DASHBOARD]', 'Reviewer Dashboard', '', 'publish', 'closed', 'closed', '', 'reviewer-dashboard', '', '', '2017-03-29 01:06:12', '2017-03-29 01:06:12', '', 0, 'http://localhost/college/?page_id=102', 0, 'page', '', 0),
(103, 1, '2017-03-29 01:06:12', '2017-03-29 01:06:12', '[COLLEGE_REVIEWER_DASHBOARD]', 'Reviewer Dashboard', '', 'inherit', 'closed', 'closed', '', '102-revision-v1', '', '', '2017-03-29 01:06:12', '2017-03-29 01:06:12', '', 102, 'http://localhost/college/2017/03/29/102-revision-v1/', 0, 'revision', '', 0),
(105, 1, '2017-04-05 02:27:22', '2017-04-05 02:27:22', '[COLLEGE_ADMIN_DASHBOARD]', 'Admin Dashboard', '', 'publish', 'closed', 'closed', '', 'admin-dashboard', '', '', '2017-04-05 02:28:10', '2017-04-05 02:28:10', '', 0, 'http://localhost/college/?page_id=105', 0, 'page', '', 0),
(106, 1, '2017-04-05 02:27:22', '2017-04-05 02:27:22', '[COLLEGE_AUTHOR_ISSUE_PAPER]', 'Admin Dashboard', '', 'inherit', 'closed', 'closed', '', '105-revision-v1', '', '', '2017-04-05 02:27:22', '2017-04-05 02:27:22', '', 105, 'http://localhost/college/2017/04/05/105-revision-v1/', 0, 'revision', '', 0),
(107, 1, '2017-04-05 02:28:10', '2017-04-05 02:28:10', '[COLLEGE_ADMIN_DASHBOARD]', 'Admin Dashboard', '', 'inherit', 'closed', 'closed', '', '105-revision-v1', '', '', '2017-04-05 02:28:10', '2017-04-05 02:28:10', '', 105, 'http://localhost/college/2017/04/05/105-revision-v1/', 0, 'revision', '', 0),
(108, 1, '2017-04-05 02:28:49', '2017-04-05 02:28:49', '[COLLEGE_ADMIN_PAPER_STATUS]', 'Admin Paper Status', '', 'publish', 'closed', 'closed', '', 'admin-paper-status', '', '', '2017-04-05 02:28:49', '2017-04-05 02:28:49', '', 0, 'http://localhost/college/?page_id=108', 0, 'page', '', 0),
(109, 1, '2017-04-05 02:28:49', '2017-04-05 02:28:49', '[COLLEGE_ADMIN_PAPER_STATUS]', 'Admin Paper Status', '', 'inherit', 'closed', 'closed', '', '108-revision-v1', '', '', '2017-04-05 02:28:49', '2017-04-05 02:28:49', '', 108, 'http://localhost/college/2017/04/05/108-revision-v1/', 0, 'revision', '', 0),
(111, 1, '2017-04-26 18:21:45', '2017-04-26 18:21:45', '', 'f5-slider-image-3', '', 'inherit', 'open', 'closed', '', 'f5-slider-image-3', '', '', '2017-04-26 18:21:45', '2017-04-26 18:21:45', '', 53, 'http://localhost/college/wp-content/uploads/2017/01/F5-Slider-Image-3.jpg', 0, 'attachment', 'image/jpeg', 0),
(113, 1, '2017-05-07 03:32:44', '2017-05-07 03:32:44', '[COLLEGE_PUBLISH_DOWNLOAD]', 'Publish Paper Download', '', 'publish', 'closed', 'closed', '', 'publish-paper-download', '', '', '2017-05-07 03:32:44', '2017-05-07 03:32:44', '', 0, 'http://localhost/college/?page_id=113', 0, 'page', '', 0),
(114, 1, '2017-05-07 03:32:44', '2017-05-07 03:32:44', '[COLLEGE_PUBLISH_DOWNLOAD]', 'Publish Paper Download', '', 'inherit', 'closed', 'closed', '', '113-revision-v1', '', '', '2017-05-07 03:32:44', '2017-05-07 03:32:44', '', 113, 'http://localhost/college/2017/05/07/113-revision-v1/', 0, 'revision', '', 0),
(115, 1, '2017-05-07 06:51:51', '2017-05-07 06:51:51', '[COLLEGE_FEEDBACK]', 'College FeedBack', '', 'publish', 'closed', 'closed', '', 'college-feedback', '', '', '2017-05-07 06:51:51', '2017-05-07 06:51:51', '', 0, 'http://localhost/college/?page_id=115', 0, 'page', '', 0),
(116, 1, '2017-05-07 06:51:51', '2017-05-07 06:51:51', '[COLLEGE_FEEDBACK]', 'College FeedBack', '', 'inherit', 'closed', 'closed', '', '115-revision-v1', '', '', '2017-05-07 06:51:51', '2017-05-07 06:51:51', '', 115, 'http://localhost/college/2017/05/07/115-revision-v1/', 0, 'revision', '', 0),
(117, 1, '2017-05-07 09:57:53', '2017-05-07 09:57:53', '[COLLEGE_FEEDBACK_LIST]', 'Feedback List', '', 'publish', 'closed', 'closed', '', 'feedback-list', '', '', '2017-05-07 09:57:53', '2017-05-07 09:57:53', '', 0, 'http://localhost/college/?page_id=117', 0, 'page', '', 0),
(118, 1, '2017-05-07 09:57:53', '2017-05-07 09:57:53', '[COLLEGE_FEEDBACK_LIST]', 'Feedback List', '', 'inherit', 'closed', 'closed', '', '117-revision-v1', '', '', '2017-05-07 09:57:53', '2017-05-07 09:57:53', '', 117, 'http://localhost/college/2017/05/07/117-revision-v1/', 0, 'revision', '', 0),
(119, 1, '2017-05-07 10:29:02', '2017-05-07 10:29:02', '<div>\r\n<div>[COLLEGE_CERTIFICATE]</div>\r\n</div>', 'College Certificate', '', 'publish', 'closed', 'closed', '', 'college-certificate', '', '', '2017-05-07 10:29:02', '2017-05-07 10:29:02', '', 0, 'http://localhost/college/?page_id=119', 0, 'page', '', 0),
(120, 1, '2017-05-07 10:29:02', '2017-05-07 10:29:02', '<div>\r\n<div>[COLLEGE_CERTIFICATE]</div>\r\n</div>', 'College Certificate', '', 'inherit', 'closed', 'closed', '', '119-revision-v1', '', '', '2017-05-07 10:29:02', '2017-05-07 10:29:02', '', 119, 'http://localhost/college/2017/05/07/119-revision-v1/', 0, 'revision', '', 0),
(122, 1, '2017-05-08 03:39:59', '2017-05-08 03:39:59', '[COLLEGE_ADVERTISE_US]', 'Advertise us', '', 'publish', 'closed', 'closed', '', 'advertise-us', '', '', '2017-05-08 03:39:59', '2017-05-08 03:39:59', '', 0, 'http://localhost/college/?page_id=122', 0, 'page', '', 0),
(123, 1, '2017-05-08 03:39:59', '2017-05-08 03:39:59', '[COLLEGE_ADVERTISE_US]', 'Advertise us', '', 'inherit', 'closed', 'closed', '', '122-revision-v1', '', '', '2017-05-08 03:39:59', '2017-05-08 03:39:59', '', 122, 'http://localhost/college/2017/05/08/122-revision-v1/', 0, 'revision', '', 0),
(124, 1, '2017-05-08 03:41:04', '2017-05-08 03:41:04', '<div>\r\n<div>[COLLEGE_CERTIFICATE]</div>\r\n</div>', 'College Certificate', '', 'publish', 'closed', 'closed', '', 'college-certificate-2', '', '', '2017-05-08 03:41:04', '2017-05-08 03:41:04', '', 0, 'http://localhost/college/?page_id=124', 0, 'page', '', 0),
(125, 1, '2017-05-08 03:41:04', '2017-05-08 03:41:04', '<div>\r\n<div>[COLLEGE_CERTIFICATE]</div>\r\n</div>', 'College Certificate', '', 'inherit', 'closed', 'closed', '', '124-revision-v1', '', '', '2017-05-08 03:41:04', '2017-05-08 03:41:04', '', 124, 'http://localhost/college/2017/05/08/124-revision-v1/', 0, 'revision', '', 0),
(126, 1, '2017-05-13 11:02:59', '2017-05-13 11:02:59', '[COLLEGE_CONFERENCE_LIST]', 'Advertise List', '', 'publish', 'closed', 'closed', '', 'advertise-list', '', '', '2017-05-13 11:02:59', '2017-05-13 11:02:59', '', 0, 'http://localhost/college/?page_id=126', 0, 'page', '', 0),
(127, 1, '2017-05-13 11:02:59', '2017-05-13 11:02:59', '[COLLEGE_CONFERENCE_LIST]', 'Advertise List', '', 'inherit', 'closed', 'closed', '', '126-revision-v1', '', '', '2017-05-13 11:02:59', '2017-05-13 11:02:59', '', 126, 'http://localhost/college/2017/05/13/126-revision-v1/', 0, 'revision', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_termmeta`
--

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_terms`
--

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Uncategorized', 'uncategorized', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_taxonomy`
--

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_usermeta`
--

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'ijrests'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'comment_shortcuts', 'false'),
(7, 1, 'admin_color', 'fresh'),
(8, 1, 'use_ssl', '0'),
(9, 1, 'show_admin_bar_front', 'true'),
(10, 1, 'wp_capabilities', 'a:1:{s:13:"administrator";b:1;}'),
(11, 1, 'wp_user_level', '10'),
(12, 1, 'dismissed_wp_pointers', ''),
(13, 1, 'show_welcome_panel', '1'),
(26, 2, 'nickname', 'Bala'),
(27, 2, 'first_name', ''),
(28, 2, 'last_name', ''),
(29, 2, 'description', ''),
(30, 2, 'rich_editing', 'true'),
(31, 2, 'comment_shortcuts', 'false'),
(17, 1, 'wp_user-settings', 'editor=tinymce&libraryContent=browse'),
(18, 1, 'wp_user-settings-time', '1494127838'),
(127, 10, 'first_name', ''),
(128, 10, 'last_name', ''),
(129, 10, 'description', ''),
(130, 10, 'rich_editing', 'true'),
(131, 10, 'comment_shortcuts', 'false'),
(132, 10, 'admin_color', 'fresh'),
(111, 8, 'wp_capabilities', 'a:1:{s:4:"user";b:1;}'),
(112, 8, 'wp_user_level', '0'),
(113, 8, 'dismissed_wp_pointers', ''),
(114, 9, 'nickname', 'rbalabca@gmail.com'),
(115, 9, 'first_name', ''),
(116, 9, 'last_name', ''),
(117, 9, 'description', ''),
(118, 9, 'rich_editing', 'true'),
(119, 9, 'comment_shortcuts', 'false'),
(120, 9, 'admin_color', 'fresh'),
(121, 9, 'use_ssl', '0'),
(122, 9, 'show_admin_bar_front', 'true'),
(123, 9, 'wp_capabilities', 'a:1:{s:4:"user";b:1;}'),
(124, 9, 'wp_user_level', '0'),
(125, 9, 'dismissed_wp_pointers', ''),
(126, 10, 'nickname', 'rbalabca@gmail.com'),
(15, 1, 'wp_dashboard_quick_press_last_post_id', '128'),
(32, 2, 'admin_color', 'fresh'),
(33, 2, 'use_ssl', '0'),
(34, 2, 'show_admin_bar_front', 'true'),
(35, 2, 'wp_capabilities', 'a:1:{s:6:"author";b:1;}'),
(36, 2, 'wp_user_level', '2'),
(37, 2, 'dismissed_wp_pointers', ''),
(41, 3, 'nickname', 'rbalabca@gmail.com'),
(42, 3, 'first_name', ''),
(43, 3, 'last_name', ''),
(44, 3, 'description', ''),
(45, 3, 'rich_editing', 'true'),
(46, 3, 'comment_shortcuts', 'false'),
(39, 2, 'wp_dashboard_quick_press_last_post_id', '75'),
(47, 3, 'admin_color', 'fresh'),
(48, 3, 'use_ssl', '0'),
(49, 3, 'show_admin_bar_front', 'true'),
(50, 3, 'wp_capabilities', 'a:1:{s:4:"user";b:1;}'),
(51, 3, 'wp_user_level', '0'),
(52, 3, 'dismissed_wp_pointers', ''),
(53, 4, 'nickname', 'rbalabca@gmail.com'),
(54, 4, 'first_name', ''),
(55, 4, 'last_name', ''),
(56, 4, 'description', ''),
(57, 4, 'rich_editing', 'true'),
(58, 4, 'comment_shortcuts', 'false'),
(59, 4, 'admin_color', 'fresh'),
(60, 4, 'use_ssl', '0'),
(61, 4, 'show_admin_bar_front', 'true'),
(62, 4, 'wp_capabilities', 'a:1:{s:4:"user";b:1;}'),
(63, 4, 'wp_user_level', '0'),
(64, 4, 'dismissed_wp_pointers', ''),
(65, 5, 'nickname', 'rbalabca@gmail.com'),
(66, 5, 'first_name', ''),
(67, 5, 'last_name', ''),
(68, 5, 'description', ''),
(69, 5, 'rich_editing', 'true'),
(70, 5, 'comment_shortcuts', 'false'),
(71, 5, 'admin_color', 'fresh'),
(72, 5, 'use_ssl', '0'),
(73, 5, 'show_admin_bar_front', 'true'),
(74, 5, 'wp_capabilities', 'a:1:{s:4:"user";b:1;}'),
(75, 5, 'wp_user_level', '0'),
(76, 5, 'dismissed_wp_pointers', ''),
(77, 6, 'nickname', 'rbalabca@gmail.com'),
(78, 6, 'first_name', ''),
(79, 6, 'last_name', ''),
(80, 6, 'description', ''),
(81, 6, 'rich_editing', 'true'),
(82, 6, 'comment_shortcuts', 'false'),
(83, 6, 'admin_color', 'fresh'),
(84, 6, 'use_ssl', '0'),
(85, 6, 'show_admin_bar_front', 'true'),
(86, 6, 'wp_capabilities', 'a:1:{s:4:"user";b:1;}'),
(87, 6, 'wp_user_level', '0'),
(88, 6, 'dismissed_wp_pointers', ''),
(89, 6, 'session_tokens', 'a:1:{s:64:"b8f250e7e0b9e9cc75ce7249438c091a33e37453a51c2bf1b47e47807f4384c4";a:4:{s:10:"expiration";i:1486421458;s:2:"ip";s:3:"::1";s:2:"ua";s:113:"Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36";s:5:"login";i:1486248658;}}'),
(90, 7, 'nickname', 'rbalabca@gmail.com'),
(91, 7, 'first_name', ''),
(92, 7, 'last_name', ''),
(93, 7, 'description', ''),
(94, 7, 'rich_editing', 'true'),
(95, 7, 'comment_shortcuts', 'false'),
(96, 7, 'admin_color', 'fresh'),
(97, 7, 'use_ssl', '0'),
(98, 7, 'show_admin_bar_front', 'true'),
(99, 7, 'wp_capabilities', 'a:1:{s:4:"user";b:1;}'),
(100, 7, 'wp_user_level', '0'),
(101, 7, 'dismissed_wp_pointers', ''),
(102, 8, 'nickname', 'rbalabca@gmail.com'),
(103, 8, 'first_name', ''),
(104, 8, 'last_name', ''),
(105, 8, 'description', ''),
(106, 8, 'rich_editing', 'true'),
(107, 8, 'comment_shortcuts', 'false'),
(108, 8, 'admin_color', 'fresh'),
(109, 8, 'use_ssl', '0'),
(110, 8, 'show_admin_bar_front', 'true'),
(133, 10, 'use_ssl', '0'),
(134, 10, 'show_admin_bar_front', 'true'),
(135, 10, 'wp_capabilities', 'a:1:{s:4:"user";b:1;}'),
(136, 10, 'wp_user_level', '0'),
(137, 10, 'dismissed_wp_pointers', ''),
(140, 11, 'nickname', 'rbalabca@gmail.com'),
(141, 11, 'first_name', ''),
(142, 11, 'last_name', ''),
(143, 11, 'description', ''),
(144, 11, 'rich_editing', 'true'),
(145, 11, 'comment_shortcuts', 'false'),
(146, 11, 'admin_color', 'fresh'),
(147, 11, 'use_ssl', '0'),
(148, 11, 'show_admin_bar_front', 'true'),
(149, 11, 'wp_capabilities', 'a:1:{s:6:"author";b:1;}'),
(150, 11, 'wp_user_level', '2'),
(151, 11, 'dismissed_wp_pointers', ''),
(372, 24, 'nickname', 'reviewerbala@gmail.com'),
(373, 24, 'first_name', ''),
(374, 24, 'last_name', ''),
(375, 24, 'description', ''),
(154, 12, 'nickname', 'rbalabca@gmail.com'),
(155, 12, 'first_name', ''),
(156, 12, 'last_name', ''),
(157, 12, 'description', ''),
(158, 12, 'rich_editing', 'true'),
(159, 12, 'comment_shortcuts', 'false'),
(160, 12, 'admin_color', 'fresh'),
(161, 12, 'use_ssl', '0'),
(162, 12, 'show_admin_bar_front', 'true'),
(163, 12, 'wp_capabilities', 'a:1:{s:4:"user";b:1;}'),
(164, 12, 'wp_user_level', '0'),
(165, 12, 'dismissed_wp_pointers', ''),
(166, 13, 'nickname', 'rbalabca@gmail.com'),
(167, 13, 'first_name', ''),
(168, 13, 'last_name', ''),
(169, 13, 'description', ''),
(170, 13, 'rich_editing', 'true'),
(171, 13, 'comment_shortcuts', 'false'),
(172, 13, 'admin_color', 'fresh'),
(173, 13, 'use_ssl', '0'),
(174, 13, 'show_admin_bar_front', 'true'),
(175, 13, 'wp_capabilities', 'a:1:{s:4:"user";b:1;}'),
(176, 13, 'wp_user_level', '0'),
(177, 13, 'dismissed_wp_pointers', ''),
(178, 14, 'nickname', 'rbalabca@gmail.com'),
(179, 14, 'first_name', ''),
(180, 14, 'last_name', ''),
(181, 14, 'description', ''),
(182, 14, 'rich_editing', 'true'),
(183, 14, 'comment_shortcuts', 'false'),
(184, 14, 'admin_color', 'fresh'),
(185, 14, 'use_ssl', '0'),
(186, 14, 'show_admin_bar_front', 'true'),
(187, 14, 'wp_capabilities', 'a:1:{s:4:"user";b:1;}'),
(188, 14, 'wp_user_level', '0'),
(189, 14, 'dismissed_wp_pointers', ''),
(190, 14, 'phone_no', '9994859797'),
(193, 2, 'is_disable', '0'),
(194, 15, 'nickname', 'rbalabca@gmail.com'),
(195, 15, 'first_name', ''),
(196, 15, 'last_name', ''),
(197, 15, 'description', ''),
(198, 15, 'rich_editing', 'true'),
(199, 15, 'comment_shortcuts', 'false'),
(200, 15, 'admin_color', 'fresh'),
(201, 15, 'use_ssl', '0'),
(202, 15, 'show_admin_bar_front', 'true'),
(203, 15, 'wp_capabilities', 'a:1:{s:4:"user";b:1;}'),
(204, 15, 'wp_user_level', '0'),
(205, 15, 'dismissed_wp_pointers', ''),
(206, 15, 'phone_no', '9994859797'),
(207, 15, 'is_disable', '0'),
(209, 15, 'session_tokens', 'a:1:{s:64:"ad2798687ca7807fabff626f600d7f1a18390c847e3a41416b9418285408bb85";a:4:{s:10:"expiration";i:1486448704;s:2:"ip";s:3:"::1";s:2:"ua";s:113:"Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36";s:5:"login";i:1486275904;}}'),
(269, 19, 'is_disable', '0'),
(267, 19, 'dismissed_wp_pointers', ''),
(268, 19, 'phone_no', '9994859797'),
(265, 19, 'wp_capabilities', 'a:1:{s:8:"reviewer";b:1;}'),
(266, 19, 'wp_user_level', '0'),
(264, 19, 'show_admin_bar_front', 'true'),
(261, 19, 'comment_shortcuts', 'false'),
(262, 19, 'admin_color', 'fresh'),
(263, 19, 'use_ssl', '0'),
(260, 19, 'rich_editing', 'true'),
(259, 19, 'description', ''),
(258, 19, 'last_name', ''),
(257, 19, 'first_name', ''),
(256, 19, 'nickname', 'rbalabca@gmail.com'),
(270, 20, 'nickname', 'Reviewer1'),
(271, 20, 'first_name', 'Reviewer1'),
(272, 20, 'last_name', 'Reviewer1'),
(273, 20, 'description', ''),
(274, 20, 'rich_editing', 'true'),
(275, 20, 'comment_shortcuts', 'false'),
(276, 20, 'admin_color', 'fresh'),
(277, 20, 'use_ssl', '0'),
(278, 20, 'show_admin_bar_front', 'true'),
(279, 20, 'wp_capabilities', 'a:1:{s:8:"reviewer";b:1;}'),
(280, 20, 'wp_user_level', '0'),
(281, 20, 'dismissed_wp_pointers', ''),
(282, 21, 'nickname', 'Reviewer2'),
(283, 21, 'first_name', 'Reviewer2'),
(284, 21, 'last_name', 'Reviewer2'),
(285, 21, 'description', ''),
(286, 21, 'rich_editing', 'true'),
(287, 21, 'comment_shortcuts', 'false'),
(288, 21, 'admin_color', 'fresh'),
(289, 21, 'use_ssl', '0'),
(290, 21, 'show_admin_bar_front', 'true'),
(291, 21, 'wp_capabilities', 'a:1:{s:8:"reviewer";b:1;}'),
(292, 21, 'wp_user_level', '0'),
(293, 21, 'dismissed_wp_pointers', ''),
(294, 22, 'nickname', 'reviewer3'),
(295, 22, 'first_name', 'Reviewer3'),
(296, 22, 'last_name', 'Reviewer3'),
(297, 22, 'description', ''),
(298, 22, 'rich_editing', 'true'),
(299, 22, 'comment_shortcuts', 'false'),
(300, 22, 'admin_color', 'fresh'),
(301, 22, 'use_ssl', '0'),
(302, 22, 'show_admin_bar_front', 'true'),
(303, 22, 'wp_capabilities', 'a:1:{s:8:"reviewer";b:1;}'),
(304, 22, 'wp_user_level', '0'),
(305, 22, 'dismissed_wp_pointers', ''),
(367, 1, 'session_tokens', 'a:1:{s:64:"60a60eb6074e1af7c3e849ded6939281a717406043767c46dd63be459033388d";a:4:{s:10:"expiration";i:1495217787;s:2:"ip";s:3:"::1";s:2:"ua";s:114:"Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36";s:5:"login";i:1495044987;}}'),
(347, 23, 'nickname', 'author'),
(348, 23, 'first_name', 'author'),
(349, 23, 'last_name', ''),
(350, 23, 'description', ''),
(351, 23, 'rich_editing', 'true'),
(352, 23, 'comment_shortcuts', 'false'),
(353, 23, 'admin_color', 'fresh'),
(354, 23, 'use_ssl', '0'),
(355, 23, 'show_admin_bar_front', 'true'),
(356, 23, 'wp_capabilities', 'a:1:{s:6:"author";b:1;}'),
(357, 23, 'wp_user_level', '2'),
(358, 23, 'dismissed_wp_pointers', ''),
(376, 24, 'rich_editing', 'true'),
(377, 24, 'comment_shortcuts', 'false'),
(378, 24, 'admin_color', 'fresh'),
(379, 24, 'use_ssl', '0'),
(380, 24, 'show_admin_bar_front', 'true'),
(381, 24, 'wp_capabilities', 'a:1:{s:8:"reviewer";b:1;}'),
(382, 24, 'wp_user_level', '0'),
(383, 24, 'dismissed_wp_pointers', ''),
(384, 24, 'phone_no', '456645654'),
(385, 24, 'is_disable', '0'),
(386, 25, 'nickname', 'dfjibvdsjkbdvj@gmail.com'),
(387, 25, 'first_name', ''),
(388, 25, 'last_name', ''),
(389, 25, 'description', ''),
(390, 25, 'rich_editing', 'true'),
(391, 25, 'comment_shortcuts', 'false'),
(392, 25, 'admin_color', 'fresh'),
(393, 25, 'use_ssl', '0'),
(394, 25, 'show_admin_bar_front', 'true'),
(395, 25, 'wp_capabilities', 'a:1:{s:8:"reviewer";b:1;}'),
(396, 25, 'wp_user_level', '0'),
(397, 25, 'dismissed_wp_pointers', ''),
(398, 25, 'phone_no', '969569054'),
(399, 25, 'is_disable', '0');

-- --------------------------------------------------------

--
-- Table structure for table `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'ijrests', '$P$BKoVilCJ3sJwnteNynuo2g2FukYrvM1', 'ijrests', 'contact@ijrests.org', '', '2016-12-13 20:48:00', '', 0, 'ijrests'),
(2, 'bala@gmail.com', '$P$BzbbuzIw88hk6Mqy.Zm1U4V1nn7Gtq/', 'balagmail-com', 'bala@gmail.com', '', '2017-02-04 22:03:20', '', 0, 'bala@gmail.com'),
(15, 'rbalabca1@gmail.com', '$P$BKoVilCJ3sJwnteNynuo2g2FukYrvM1', 'bala', 'rbalabca1@gmail.com', '', '2017-02-05 06:04:03', '', 0, 'rbalabca@gmail.com'),
(19, 'rbalabca@gmail.com', '$P$B2o7MBxgBlqLSzyPuupsPaf3P3inz3/', 'bala-2', 'rbalabca@gmail.com', '', '2017-02-19 07:49:13', '', 0, 'rbalabca@gmail.com'),
(20, 'Reviewer1', '$P$B6TpghXESWmvK8liJALzsjhafL/WAo.', 'reviewer1', 'reviewer1@gmail.com', '', '2017-02-26 11:06:07', '', 0, 'Reviewer1 Reviewer1'),
(21, 'Reviewer2', '$P$BYCpejMdpTZCizG8UMnHZ5EUZMxzz00', 'reviewer2', 'reviewer2@gmail.com', '', '2017-02-26 11:07:49', '', 0, 'Reviewer2 Reviewer2'),
(22, 'reviewer3', '$P$BguK8Hy8/jRG/ytLzcUT1ilQvfDWMK/', 'reviewer3', 'reviewer3@gmail.com', '', '2017-02-26 11:08:27', '', 0, 'Reviewer3 Reviewer3'),
(23, 'author', '$P$BEaiu0vDxLTR4R62l8RHZhACHtwjui.', 'author', 'author@gmail.com', '', '2017-04-23 10:15:00', '1492942505:$P$BDujZ3.XLawpLA0ksP/yvNUbb8Ibg//', 0, 'author'),
(24, 'reviewerbala@gmail.com', '$P$BB4zVreCV5B4u0FDnYI1zB.8cekOlV.', 'baladddd', 'reviewerbala@gmail.com', '', '2017-05-13 22:54:05', '', 0, 'reviewerbala@gmail.com'),
(25, 'dfjibvdsjkbdvj@gmail.com', '$P$Bugw/MNGuUZ9ni6YZtZVEGKd.516K8.', 'vjihdvhij', 'dfjibvdsjkbdvj@gmail.com', '', '2017-05-13 22:55:21', '', 0, 'dfjibvdsjkbdvj@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `wp_vcp_log`
--

CREATE TABLE `wp_vcp_log` (
  `LogID` int(11) NOT NULL,
  `IP` varchar(20) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author_issue_papers`
--
ALTER TABLE `author_issue_papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author_issue_paper_reviewers`
--
ALTER TABLE `author_issue_paper_reviewers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carosel_sliders`
--
ALTER TABLE `carosel_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conferences`
--
ALTER TABLE `conferences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editors`
--
ALTER TABLE `editors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal_editors`
--
ALTER TABLE `journal_editors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal_issue_publishes`
--
ALTER TABLE `journal_issue_publishes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volumes`
--
ALTER TABLE `volumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_comments`
--
ALTER TABLE `wp_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10));

--
-- Indexes for table `wp_links`
--
ALTER TABLE `wp_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Indexes for table `wp_options`
--
ALTER TABLE `wp_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`);

--
-- Indexes for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_posts`
--
ALTER TABLE `wp_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Indexes for table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Indexes for table `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Indexes for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Indexes for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- Indexes for table `wp_vcp_log`
--
ALTER TABLE `wp_vcp_log`
  ADD PRIMARY KEY (`LogID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author_issue_papers`
--
ALTER TABLE `author_issue_papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `author_issue_paper_reviewers`
--
ALTER TABLE `author_issue_paper_reviewers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `carosel_sliders`
--
ALTER TABLE `carosel_sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `conferences`
--
ALTER TABLE `conferences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `editors`
--
ALTER TABLE `editors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `journal_editors`
--
ALTER TABLE `journal_editors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `journal_issue_publishes`
--
ALTER TABLE `journal_issue_publishes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `volumes`
--
ALTER TABLE `volumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wp_comments`
--
ALTER TABLE `wp_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1256;
--
-- AUTO_INCREMENT for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
--
-- AUTO_INCREMENT for table `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;
--
-- AUTO_INCREMENT for table `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `wp_vcp_log`
--
ALTER TABLE `wp_vcp_log`
  MODIFY `LogID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
