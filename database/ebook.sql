-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2020 at 08:37 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `b_id` varchar(10) NOT NULL,
  `b_nm` varchar(30) NOT NULL,
  `b_cat` varchar(30) NOT NULL,
  `b_subcat` varchar(10) NOT NULL,
  `b_desc` varchar(200) NOT NULL,
  `b_publisher` varchar(40) NOT NULL,
  `b_edition` varchar(20) NOT NULL,
  `b_isbn` varchar(20) NOT NULL,
  `b_page` varchar(20) NOT NULL,
  `b_price` varchar(20) NOT NULL,
  PRIMARY KEY (`b_nm`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`b_id`, `b_nm`, `b_cat`, `b_subcat`, `b_desc`, `b_publisher`, `b_edition`, `b_isbn`, `b_page`, `b_price`) VALUES
('1', 'A Dictionary of Architecture ', 'Architecture', '1', 'Containing over 5,000 entries from Aalto to ziggurat, this is the most comprehensive and up-to-date dictionary of architecture in paperback. Beautifully illustrated and written in a clear and concise ', 'THE BOOK SHOP', '2007', '89564636 ', '200', '500'),
('2', 'Elephant Kingdom : Sculptures ', 'Forest', '3', 'Elephants occupy a special place in the life and art of India. Since ancient times, they have been treasured and pampered as the ultimate beasts of burden, venerated as the vehicles of gods and kings ', 'Vikramjit Ram', '2006', '81-88204-6', '250', '1000'),
('3', 'Close to Events-Works of Bikas', 'Art and Culture', '2', 'Launching his creative career in the late ?50s, Bikash Bhattacharjee stood out among his contemporaries by making hard-edged chiseled realism the core appeal of his canvases when realism or naturalism', 'Manasij Majumder', '2008', '978818973', '250', '2000'),
('4', 'A Social History of Indian Arc', 'Architecture', '1', 'Studies in Indian architecture have been confined to those exploring the building techniques of palaces, temples, and tombs. Little attention has traditionally been paid by scholars to the patterns an', 'V.S. Pramar ', '2007', '87558769 ', '300', '1000'),
('5', 'YOGIS, DESTINY & THE WHEEL OF ', 'Astrology', '5', 'Contents: Dedication; Acknowledgements; About the author; Preface; Preface to the 2nd edition; 1. That great guru; 2. Profile of a guru''s life; 3. Prabhu bejoy Krishna Goswami; 4. I meet my guru; 5. A', 'K.N. Rao', '2005', '2589697 ', '285', '300'),
('6', 'You Deserve, We Conserve A Bio', 'Forest', '3', 'There is a tremendous wealth of mega-biodiversity in the world. But the very existence of this wealth is under threat due to habitat destruction, pushing animals towards inbreeding depression and ther', 'M W Pandit / S Shivaji', '2006', '9788189866', '160', '659'),
('7', 'Visual Basic 2005', 'Computer Science', '17', '''VB connectivity''', 'Pearson', '2009', 'VB111', '350', '120'),
('8', 'Java & Xml', 'Computer Science', '17', '''Complete Reference''', 'TATA Mcgerw Hill', '2010', 'JJ123', '1800', '500'),
('9', 'Microsoft Windows Powershell S', 'Computer Science', '17', '''Learn Microsoft Windows PowerShell step by step with hands-on instruction from a leading Microsoft scripting trainer. This guide features self-paced labs, timesaving tips, and dozens of sample script', 'Wilson', '2006', '9788120332', '755', '295'),
('10', 'C# Programming', 'Computer Science', '17', '''C# is platform independent,includes namespace,garbage collection,automatic memory management''', 'Pearson', '1999', 'c#abd', '450', '300'),
('11', 'Java Server Programming', 'Computer Science', '17', '''jsp uses  html tags and run on java platform''', 'BPB Prakashan', '2000', 'jsp123', '1800', '560'),
('12', 'Programming with Perl', 'Computer Science', '17', 'Perl is programming langauge which is not comfortable to handle.', 'Wrox', '1995', 'perl123', '560', '450'),
('13', 'HTML for world wide web', 'Computer Science', '17', 'html uses tags,it''''s  not case sensitive,work with own html tagswhich must be enclosed.', 'Elizabeth', '2005', 'htmlabc12', '560', '400'),
('14', 'ASP Server Pages 3.0', 'Computer Science', '17', 'Active server pages uses xml files ,it run on internet explorer or other browser..', 'Microsoft', '1995', 'asp123', '1150', '950'),
('15', 'Perl and CGI', 'Computer Science', '17', 'CGI for graphics purpose', 'Pearson', '1999', 'pc2343', '450', '300'),
('16', 'A Biological Survey for the Na', 'Science', '19', 'The National Biological Survey will produce the map we need to avoid the\r\neconomic and environmental train wrecks we see scattered across the country.\r\nNBS will provide the scientific knowledge Americ', 'National Research Council', '1994', '0-309-5860', '224', '450'),
('17', 'Book of Tea', 'Cooking', '18', 'The Philosophy of Tea is not mere aestheticism in the ordinary acceptance of the term, for it expresses conjointly with ethics and religion our whole point of view about man and nature. It is hygiene,', 'Kakuzo Okakura', '2008', 'tea1', '80', '100'),
('18', 'Coffee : Scrumptious Drinks', 'Cooking', '18', 'Every day, millions search for The Perfect Cup of Coffee in caf s, diners, and kitchens around the world. Here, coffee guru Betty Rosbottom offers easy-to-follow recipes guaranteed to please \r\nanyone ', 'Chronicle Books', '2007', 'cofee1', '96', '100'),
('19', 'Stone Soup', 'Cooking', '18', 'A hungry traveler tricks a little old lady into cooking him soup starting with a stone.', 'Marcia Brown', '1970', 'soup45', '120', '350'),
('20', 'Pasta Perfection', 'Cooking', '18', 'This new series will help you get back into the kitchen and experience the fun of creating sensationalmouth-watering meals thought he simplicity of easy-to-read, step-by-step ...', 'Belina Jeffer', '2004', 'p12', '80', '100'),
('21', 'Bhartiya Vynjano ka khajana', 'Cooking', '18', 'Vyanjan made by Sanjeev kapoor,he makes very sweet and delicious dishes', 'Sanjeev Kapoor', '2009', 'vya12', '120', '350'),
('22', 'Your Income-Tax 2010', 'Economics', '7', 'A guide to income tax returns provides information on the most recent tax legislation, tax-filing tips, advice on how to reduce tax liabilities, helpful financial advice, and sample tax forms, workshe', 'J K Lasser Institute', '2009', 'it-3433', '848', '1000'),
('23', 'The Mad, Mad World of Cricket', 'Sports', '4', 'The funny side of the gentleman?s game?captured by a master cartoonist In India cricket is more than a game; it is a national obsession. And with a World Cup always around the corner, there is no bett', 'Sudhir Dar', '2005', '0143101846', '96', '125'),
('24', 'Dream Team India: The Best Wor', 'Sports', '4', 'Are you one of those who just knows India will win the match the moment the game starts? Do you drown yourself in cricket and cricket-related trivia every four years and dream of seeing India win the ', 'Book shop', '2007', '014333015', '147', '200'),
('25', 'A TEXTBOOK OF COST AND MANAGEM', 'Management', '12', ' Student friendly and examination oriented approach # Innovative, comprehensive and systematic presentation of the subject matter # Use of diagrams and exhibits to help students understand concepts ea', 'M N ARORA', '2006', '812910945', '400', '395'),
('26', 'Investing for Beginners', 'Business', '6', 'Investment Risks and Rewards: How to overcome the fear of investment risk and how taking a few risks can reap long-term benefits. Your Starting Point: How to assess your investment goals. Diversificat', 'Kathy Kristof', '2006', '8170944821', '140', '195'),
('27', 'Games Lawyers need to Play - M', 'Law Books', '8', 'The Raj Anand Moot Court Competition was initiated in 1998 with its focus centrally on Intellectual Property law. Over the years the scope of the Competition has widened though Intellectual Property r', 'Raj Anand Moot Court Competition ', '2006', '818028025X', '424', '595'),
('28', 'Safe and Simple Steps to Fruit', 'Yoga', '10', 'Meditation has been widely accepted as a tested method to reduce mental tensions and achieve inner peace and tranquillity, leading to spiritual growth. In this book, various techniques are presented i', 'Dr. N. K. Srinivasan', '2003', '8122308910', '150', '80'),
('29', 'STATISTICS FOR BUSINESS AND EC', 'Economics', '7', 'This book covers various aspects of the field of statistics in 20 chapters, making each topic relevant and useful. A unique feature of this book is the inclusion of databases to be utilized by compute', 'J S CHANDAN ', '2007', '8125904182', '212', '372'),
('30', 'Himalayan Vignettes : The Garh', 'Tracking', '14', 'In the 1950s Himalayan trekking was not as popular as it is now. The network of roads deep into the Himalayas did not exist and the hills were more pristine and undeveloped.', 'Kekoo Naoroji ', '2004', '8188204234', '300', '2000'),
('31', 'Insight Guide Iceland', 'Tourism', '9', 'A travel series unlike any other, Insight Guides go beyond the sights and into reality.', 'Perrottet, Tony (Edt)', '0887291767', '0887291767', '300', '935'),
('32', 'SPIDER MAN', 'Comics', '16', 'second 100 issues as May Mayday Parker learns that she can''t escape her great responsibilities! Featuring the original Hobgoblin, the Black Tarantula and more! Plus: the saga of Spider-Girl! Collects ', 'Marvel Comics ', '2001', '0785123415', '160', '606'),
('33', 'Bhagavata Purana ', 'Religion', '11', 'Even after he has composed the awesome Mahabharata, the Maharishi Vyasa finds no peace.', 'Ramesh Menon ', '2004', '8129109956', '1500', '99'),
('34', 'PAKISTAN`S DRIFT INTO EXTREMIS', 'Terroism', '13', 'The book studies the rise of religious extremism in pakistan and analyses its connection to the pakistani army policies and fluctuating US - Pakistani Relationship. It is a book which readers as well ', 'Hassan Abbas ', '2001', '8182741580', '350', '600'),
('35', 'HOW TO PREPARE FOR QUANTITATIV', 'Competitive Exams', '20', 'More than 3000 questions categorised into three levels of difficulty - LOD1, LOD2 and LOD3 * Notes emphasising relative importance of topics in the CAT, at appropriate places in the book * Short-cut m', 'Arun Sharma', '2006', '0070483493', '310', '325'),
('36', 'HOW TO PREPARE FOR THE CAT, 2/', 'Competitive Exams', '20', 'More than 3000 questions categorised into three levels of difficulty - LOD1, LOD2 and LOD3 * Notes emphasising relative importance of topics in the CAT, at appropriate places in the book * Short-cut m', 'MUNEER, MUHAMED', '2006', '0070528462', '380', '499'),
('37', 'An Orphan''s War', 'Fiction', '15', 'War rages,but the women and children cannot give up hope.It is a gripping saga about love and loss on the Home Front', 'Avon', '2018', '098756', '433', '700');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(4) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Architecture'),
(2, 'Art and Culture'),
(3, 'Forest'),
(4, 'Sports'),
(5, 'Astrology'),
(6, 'Business'),
(7, 'Economics'),
(8, 'Law Books'),
(9, 'Tourism'),
(10, 'Yoga'),
(11, 'Religion'),
(12, 'Management'),
(13, 'Terroism'),
(14, 'Tracking'),
(15, 'Fiction'),
(16, 'Comics'),
(17, 'Computer Science'),
(18, 'Cooking'),
(19, 'Science'),
(20, 'Competitive Exams');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `con_nm` varchar(30) NOT NULL,
  `con_email` varchar(20) NOT NULL,
  `con_query` varchar(40) NOT NULL,
  PRIMARY KEY (`con_email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_nm`, `con_email`, `con_query`) VALUES
('Rashi', 'sakshirastogi.2216@g', 'Designing is AWESOME.....');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user1` varchar(30) NOT NULL,
  `pass1` varchar(10) NOT NULL,
  `choice` varchar(10) NOT NULL,
  PRIMARY KEY (`pass1`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user1`, `pass1`, `choice`) VALUES
('Sakshi', 'S@kshi', 'Admin'),
('Rashi', 'R@shi', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `fullname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `confpassword` varchar(10) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `email` varchar(10) NOT NULL,
  `contact` int(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fullname`, `username`, `password`, `confpassword`, `gender`, `email`, `contact`, `city`) VALUES
('Sakshi', 'Sakshi16', 'S@kshi', 'S@kshi', 'Female', 'sakshirast', 2147483647, 'Lucknow');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE IF NOT EXISTS `shipping` (
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `payment` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`name`, `address`, `postal_code`, `mobile`, `payment`) VALUES
('Rashi', 'Ganj Muradabad', '209869', '7081642555', 'Cash On De');

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE IF NOT EXISTS `subcat` (
  `subcat_id` varchar(4) NOT NULL,
  `parent_id` varchar(4) NOT NULL,
  `subcat_nm` varchar(35) NOT NULL,
  PRIMARY KEY (`subcat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subcat` (`subcat_id`, `parent_id`, `subcat_nm`) VALUES
('1', '1', 'Architecture'),
('2', '2', 'Art and Culture'),
('3', '3', 'Forest'),
('4', '4', 'Sports'),
('5', '5', 'Astrology'),
('6', '6', 'Business'),
('7', '7', 'Economics'),
('8', '8', 'Law Books'),
('9', '9', 'Tourism'),
('10', '10', 'Yoga'),
('11', '11', 'Religion'),
('12', '12', 'Management'),
('13', '13', 'Terrorism'),
('14', '14', 'Tracking'),
('15', '15', 'Fiction'),
('16', '16', 'Comics'),
('17', '17', 'Programming'),
('18', '17', 'Database'),
('19', '17', 'Web-Design'),
('20', '17', 'Networking'),
('21', '18', 'Pasta'),
('22', '18', 'Tea - Coffee'),
('23', '18', 'Soup - Sauce'),
('24', '18', 'Vegetarian Item'),
('25', '19', 'Physics'),
('26', '19', 'Biology'),
('27', '19', 'Medical'),
('28', '17', 'O.S.'),
('29', '20', 'CAT'),
('30', '20', 'GMAT'),
('31', '20', 'MBA'),
('32', '20', 'BBA'),
('36', '13', 'Pakistan'),
('35', '10', 'Steps'),
('34', '2', 'Events'),
('33', '1', 'Dictionary'),
('37', '9', 'Guide'),
('38', '14', 'Himalaya'),
('39', '1', 'History'),
('40', '4', 'Cricket'),
('41', '7', 'Tax'),
('42', '11', 'Hindu'),
('43', '3', 'Wildlife'),
('44', '6', 'Establishment'),
('45', '11', 'Christian'),
('46', '16', 'Spiderman'),
('47', '3', 'Nature'),
('48', '8', 'Articles'),
('49', '7', 'Savings'),
('50', '4', 'Badminton'),
('51', '8', 'Beginner'),
('52', '5', 'Destiny'),
('53', '16', 'Novels'),
('54', '6', 'Advance'),
('55', '15', 'Legend');

-- --------------------------------------------------------

--
-- Table structure for table `uregister`
--

CREATE TABLE IF NOT EXISTS `uregister` (
  `fullname1` varchar(30) NOT NULL,
  `username1` varchar(20) NOT NULL,
  `password1` varchar(10) NOT NULL,
  `confpassword1` varchar(10) NOT NULL,
  `gender1` varchar(10) NOT NULL,
  `email1` varchar(20) NOT NULL,
  `contact1` varchar(10) NOT NULL,
  `city1` varchar(20) NOT NULL,
  PRIMARY KEY (`username1`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uregister`
--

INSERT INTO `uregister` (`fullname1`, `username1`, `password1`, `confpassword1`, `gender1`, `email1`, `contact1`, `city1`) VALUES
('Rashi', 'Rashi07', 'R@shi', 'R@shi', 'Female', 'sakshirastogi.2216@g', '7081642555', 'Lucknow');
