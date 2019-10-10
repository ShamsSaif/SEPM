

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_task`
--

CREATE TABLE `admin_task` (
  `username` varchar(50) NOT NULL,
  `accepted` tinyint(1) NOT NULL default '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_task`
--


-- --------------------------------------------------------

--
-- Table structure for table `group_title`
--

CREATE TABLE `group_title` (
  `group_name` varchar(50) NOT NULL,
  `group_leader` varchar(50) NOT NULL,
  PRIMARY KEY  (`group_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_title`
--

INSERT INTO `group_title` (`group_name`, `group_leader`) VALUES
('admin', 'admin'),
('server', 'philip'),
('computer_lab_tech', 'reintje'),
('telephone_tech', 'brian'),
('admin_tech', 'lyndon');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `groups` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `group_task` varchar(50) NOT NULL,
  `individ_task` varchar(50) NOT NULL,
  `task_status_indi` varchar(50) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`username`, `password`, `groups`, `position`, `group_task`, `individ_task`, `task_status_indi`) VALUES
('admin', 'admin', 'admin', 'admin', '', '', ''),

('aman', '1234', 'admin_tech', 'member', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `messaging`
--

CREATE TABLE `messaging` (
  `ctrl_no` int(255) NOT NULL auto_increment,
  `date_send` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `to_receiver` varchar(50) NOT NULL,
  `from_sender` varchar(50) NOT NULL,
  `opened` tinyint(1) NOT NULL default '0',
  `mail_subject` varchar(50) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY  (`ctrl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=262 ;

--
-- Dumping data for table `messaging`
--

INSERT INTO `messaging` (`ctrl_no`, `date_send`, `to_receiver`, `from_sender`, `opened`, `mail_subject`, `message`) VALUES
(258, '2019-10-15 20:13:45', 'brian', 'alex', 0, ' notification', 'Administrator assigned you to be a leader. Go to TASK to know your task.'),
(259, '2019-10-15 20:26:19', 'amoy', 'reintje', 0, ' notification', 'Your leader give you task. Go to TASK to know your task.');

-- --------------------------------------------------------

--
-- Table structure for table `networking`
--

CREATE TABLE `networking` (
  `username` varchar(50) NOT NULL,
  `accepted` tinyint(1) NOT NULL default '0',
  `network_simlab` varchar(255) NOT NULL,
  `network_ict_dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `networking`
--

INSERT INTO `networking` (`username`, `accepted`, `network_simlab`, `network_ict_dept`) VALUES
('boyit', 1, 'working', ''),
('amoy', 1, '', 'working');

-- --------------------------------------------------------

--
-- Table structure for table `resolve_telephone`
--

CREATE TABLE `resolve_telephone` (
  `username` varchar(50) NOT NULL,
  `accepted` tinyint(1) NOT NULL default '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resolve_telephone`
--


-- --------------------------------------------------------

--
-- Table structure for table `sent_items`
--

CREATE TABLE `sent_items` (
  `ctrl_no` int(255) NOT NULL auto_increment,
  `date_send` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `to_receiver` varchar(50) NOT NULL,
  `from_sender` varchar(50) NOT NULL,
  `opened` tinyint(1) NOT NULL default '0',
  `mail_subject` varchar(50) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY  (`ctrl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `sent_items`
--

INSERT INTO `sent_items` (`ctrl_no`, `date_send`, `to_receiver`, `from_sender`, `opened`, `mail_subject`, `message`) VALUES
(55, '2009-10-15 20:13:44', 'reintje', 'alex', 0, ' notification', 'Administrator assigned you to be a leader. Go to TASK to know your task.'),
(60, '2009-10-15 20:27:41', 'bryan', 'philip', 0, ' notification', 'Your leader give you task. Go to TASK to know your task.');

-- --------------------------------------------------------

--
-- Table structure for table `server_maintenace`
--

CREATE TABLE `server_maintenace` (
  `username` varchar(50) NOT NULL,
  `accepted` tinyint(1) NOT NULL default '0',
  `backup_all_files` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `server_maintenace`
--

INSERT INTO `server_maintenace` (`username`, `accepted`, `backup_all_files`) VALUES
('bryan', 1, 'working');

-- --------------------------------------------------------

--
-- Table structure for table `task_list`
--

CREATE TABLE `task_list` (
  `taskname` varchar(50) NOT NULL,
  `ds` text NOT NULL,
  PRIMARY KEY  (`taskname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task_list`
--

INSERT INTO `task_list` (`taskname`, `ds`) VALUES
('networking', 'network all desktop computer in campus (MUST)'),
('resolve_telephone', 'resolve telephone line in ICT department'),
('server_maintenace', 'maintain server...upgrade server'),
('admin_task', 'network all computers in admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `verification_code` varchar(50) NOT NULL,
  PRIMARY KEY  (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`email`, `username`, `password`, `fname`, `lname`, `verification_code`) VALUES

('c', 'philip', '1234', 'philip', 'abamonga', '16298'),
('a', 'reintje', '1234', 'reintje', 'francisco', '30745');
