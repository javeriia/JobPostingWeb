-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2024 at 02:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobform`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jobtitle` varchar(255) NOT NULL,
  `experiance` varchar(255) NOT NULL,
  `Qualification` varchar(255) NOT NULL,
  `Amount` int(11) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `proposal` varchar(255) NOT NULL,
  `applicant_count` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `username`, `email`, `jobtitle`, `experiance`, `Qualification`, `Amount`, `resume`, `contact`, `country`, `proposal`, `applicant_count`) VALUES
(37, 'shahm.eermughal', 'shahmeer.mughal.2002@gmail.com', '', '', '', 12, 'Fee_Receipt_Javeria Mughal_95.pdf', 0, 'Pakistan', 'fdsafdsadfsadsdfsa', 0),
(38, 'shahm.eermughal', 'shahmeer.mughal.2002@gmail.com', '', '', '', 12, 'Fee_Receipt_Javeria Mughal_95.pdf', 0, 'Pakistan', 'fdsafdsadfsadsdfsa', 0),
(39, 'shahm.eermughal', 'shahmeer.mughal.2002@gmail.com', '', '', '', 12, 'Fee_Receipt_Javeria Mughal_95.pdf', 0, 'Pakistan', 'fdsafdsadfsadsdfsa', 0),
(40, 'shahm.eermughal', 'shahmeer.mughal.2002@gmail.com', '', '', '', 12, 'Fee_Receipt_Javeria Mughal_95.pdf', 0, 'Pakistan', 'fdsafdsadfsadsdfsa', 0),
(41, 'rida', 'shahmeer.mughal.2002@gmail.com', '', '', '', 0, 'Fee_Receipt_Javeria Mughal_95.pdf', 0, '', '', 0),
(42, 'rida', 'shahmeer.mughal.2002@gmail.com', '', '', '', 0, 'Fee_Receipt_Javeria Mughal_95.pdf', 0, '', '', 0),
(43, 'usman', 'usman@gmail.com', 'logo Deisgning', '2 years', 'Bachlor\'s in CS', 22, 'Fee_Receipt_Javeria Mughal_95.pdf', 84783948, 'Pakistan', 'sjlslsjdfslfjdalsdjfaslfjd', 0),
(44, '', '', '', '', '', 0, 'Class 10.pdf', 0, '', '', 0),
(45, 'hamima', '', 'logo Deisgning', '', '', 0, 'Fee_Receipt_Javeria Mughal_95.pdf', 0, '', '', 0),
(46, 'hamima', 'hamimamirza0@gmail.com', 'logo Deisgning', '2 years', 'Bachlor\'s in CS', 32, 'Fee_Receipt_Javeria Mughal_95.pdf', 3242342, 'Pakistan', 'Physically Upright: When something is \"erected,\" it is standing or positioned in a vertical or upright manner. For example, \"He erected a tent in the camping ground.\"\r\n\r\nConstructed or Built: It can also refer to the act of building or constructing someth', 0),
(47, 'fiza', 'fiza@gmail.com', 'logo Deisgning', '2 years', 'Bachlor\'s in CS', 33, 'Class 10.pdf', 32424234, 'Pakistan', 'Physically Upright: When something is \"erected,\" it is standing or positioned in a vertical or upright manner. For example, \"He erected a tent in the camping ground.\"\r\n\r\nConstructed or Built: It can also refer to the act of building or constructing someth', 0),
(48, 'faizan', 'fiza@gmail.com', 'logo Deisgning', '2 years', 'Bachlor\'s in CS', 22, 'Class 10.pdf', 32424234, 'Pakistan', 'Physically Upright: When something is \"erected,\" it is standing or positioned in a vertical or upright manner. For example, \"He erected a tent in the camping ground.\"\r\n\r\nConstructed or Built: It can also refer to the act of building or constructing someth', 0),
(49, 'kashif Ahmed', 'KashifAhmed@gmail.com', 'logo Deisgning', '2 years', 'Bachlor\'s in CS', 34, 'Fee_Receipt_Javeria Mughal_95.pdf', 543254352, 'Pakistan', 'Physically Upright: When something is \\\"erected,\\\" it is standing or positioned in a vertical or upright manner. For example, \\\"He erected a tent in the camping ground.\\\"\\r\\n\\r\\nConstructed or Built: It can also refer to the act of building or constructin', 0),
(50, 'kashif Ahmed', 'KashifAhmed@gmail.com', 'logo Deisgning', '2 years', 'Bachlor\'s in CS', 34, 'Fee_Receipt_Javeria Mughal_95.pdf', 543254352, 'Pakistan', 'Physically Upright: When something is \\\"erected,\\\" it is standing or positioned in a vertical or upright manner. For example, \\\"He erected a tent in the camping ground.\\\"\\r\\n\\r\\nConstructed or Built: It can also refer to the act of building or constructin', 0),
(51, 'hafsa', 'hafsa@gmail.com', 'SEO', '3 Years', '', 12, 'my cv', 3424243, 'pakistan', 'hehjfsjfljdf', 0),
(52, 'hafsa', 'hafsa@gmail.com', 'SEO', '3 Years', '', 12, 'my cv', 3424243, 'pakistan', 'hehjfsjfljdf', 0),
(53, 'Abdullah', 'Abdullah@gmail.com', 'web Designing', '2 years', 'Bachlor\'s in CS', 23, 'Class 10.pdf', 342424, 'Pakistan', 'hysically Upright: When something is \\\\\\\"erected,\\\\\\\" it is standing or positioned in a vertical or upright manner. For example, \\\\\\\"He erected a tent in the camping ground.\\\\\\\"\\\\r\\\\n\\\\r\\\\nConstructed or Built: It can also refer to the act of building or ', 0),
(54, 'Abdullah', 'Abdullah@gmail.com', 'web Designing', '2 years', 'Bachlor\'s in CS', 23, 'Class 10.pdf', 342424, 'Pakistan', 'hysically Upright: When something is \\\\\\\"erected,\\\\\\\" it is standing or positioned in a vertical or upright manner. For example, \\\\\\\"He erected a tent in the camping ground.\\\\\\\"\\\\r\\\\n\\\\r\\\\nConstructed or Built: It can also refer to the act of building or ', 0),
(55, 'rida', 'rida@gmail.com', 'Wordpress', '2 years', 'Bachlor\'s in CS', 21, 'Fee_Receipt_Javeria Mughal_95.pdf', 234243, 'Pakistan', 'By adding these debugging statements, you can better identify any issues with the SQL query construction or execution. Additionally, ensure that the form fields\' names are correct and match the variables used in the PHP script. If there are still issues, ', 0),
(56, 'rida', 'rida@gmail.com', 'logo Deisgning', '2 years', 'Bachlor\'s in CS', 32, 'Fee_Receipt_Javeria Mughal_95.pdf', 2147483647, 'Pakistan', 'dhfuend', 0);

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `jbTitle` varchar(255) NOT NULL,
  `jbDescription` varchar(400) NOT NULL,
  `Cname` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `AbCompany` varchar(500) NOT NULL,
  `EmpType` varchar(255) NOT NULL,
  `EduReq` varchar(255) NOT NULL,
  `ExpReq` varchar(255) NOT NULL,
  `SkillReq` varchar(255) NOT NULL,
  `AppDeadline` varchar(255) NOT NULL,
  `TimeDur` varchar(255) NOT NULL,
  `WorkSche` varchar(255) NOT NULL,
  `salary` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `jbTitle`, `jbDescription`, `Cname`, `location`, `AbCompany`, `EmpType`, `EduReq`, `ExpReq`, `SkillReq`, `AppDeadline`, `TimeDur`, `WorkSche`, `salary`) VALUES
(2, 'ffffffff', 'ffffff', 'ffffffff', 'ffffffffff', '', 'fffffffffff', 'ffff', 'fffffff', 'ffffff', 'ssss', 'ssss', 'sss', 2147483647),
(3, 'UI/UX Designer', 'dfsfds', 'sdfsfds', 'dfsfds', '', 'dsfds', 'dfsfds', 'sdfsdf', 'dfsdsds', 'sdsdf', 'sdfsdf', 'sdfsdfs', 5000),
(6, 'Frontend Developer', 'Company Description Lorem ipsum dolor sit amet consectetur adipisicing elit. Est adipisci nobis nihil, aperiam doloremque odio recusandae. Nisi repudiandae quo eum neque magnam maxime quaerat necessitatibus sint voluptate iste. Hic, magnam. Magnam at facilis, suscipit sequi rerum beatae numquam laudantium, in omnis placeat, minus laborum. Quidem asperiores nesciunt dolor omnis necessitatibus modi ', 'Abc Limited', 'New Yourk', '', 'Frontend Developer ', 'Master in CS', 'must be 3 year', 'Development', '1-march 2024', '2 years', '9-5 Timing', 250),
(7, 'desinger', 'No problem! If you need assistance with CSS styling for your webpage, please provide the correct HTML structure along with specific details on how you want the page to look. I\'ll be happy to help you with the CSS coding.', 'ghh Company', 'lahore', ' problem! If you need assistance with CSS styling for your webpage, please provide the correct HTML structure along with specific details on how you want the page to look. I\'ll be happy to help you with the CSS coding.', 'rangbharna', ' 5 class', 'zara sa bhi nahi', 'painting', '23 june 2024', '3 year', '9-5', 4000),
(9, 'jlsdfjl', '\r\nNo problem! If you need assistance with CSS styling for your webpage, please provide the correct HTML structure along with specific details on how you want the page to look. I\'ll be happy to help you with the CSS coding.', 'fsdfd', 'dfsdfs', ' No problem! If you need assistance with CSS styling for your webpage, please provide the correct HTML structure along with specific details on how you want the page to look. I\'ll be happy to help you with the CSS coding.', 'sfddf', 'dsdfs', 'sdfsad', 'sfsadf', 'dsadf', 'dasf', 'fdsdfs', 22222),
(10, 'php Dev', '\r\nAgar aapke paas card ki coding hai, toh pagination ka logic uss coding mein integrate karna hoga. Aap mujhe card ki coding de sakte hain aur main usme pagination logic add karke aapko wapas de sakta hoon. Aap card ki coding yahan paste kar sakte hain.', 'ggg limited', 'dfsdf', ' Agar aapke paas card ki coding hai, toh pagination ka logic uss coding mein integrate karna hoga. Aap mujhe card ki coding de sakte hain aur main usme pagination logic add karke aapko wapas de sakta hoon. Aap card ki coding yahan paste kar sakte hain.', 'dfsdfdsds', 'dsdfad', 'sdfsad', 'sdfasd', 'sdfsad', 'dsadfas', 'sdfas', 200),
(11, 'Social Media + Marketing', 'Marketing technologists are like the peanut butter that holds the crackers together, the crackers being a stellar business plan and the technology that makes it happen.\r\n\r\nTasks: As a marketing technologist, you’ll spend your days coming up with marketing strategies and finding, testing, and selecting the technology that powers it.', 'SS TRades', 'USA', 'Marketing technologists are like the peanut butter that holds the crackers together, the crackers being a stellar business plan and the technology that makes it happen.  Tasks: As a marketing technologist, you’ll spend your days coming up with marketing strategies and finding, testing, and selecting the technology that powers it.', 'Social media manager', 'Bacholar\'s', '1 year', 'Management of Accounts', '24-june-2024', '2 months', 'remote job', 25),
(13, 'Social Media Marketing', 'We need a social media marketer who can do maketing of our brands through different platform ....', 'SM birds', 'Karachi', 'jalsdjsldjfsaldfjaslfasjfljalsdjsldjfsaldfjaslfasjfljalsdjsldjfsaldfjaslfasjflvjalsdjsldjfsaldfjaslfasjfljalsdjsldjfsaldfjaslfasjfljalsdjsldjfsaldfjaslfasjfljalsdjsldjfsaldfjaslfasjfljalsdjsldjfsaldfjaslfasjfljalsdjsldjfsaldfjaslfasjfl', 'marketer', 'bachlor', '2 year', 'marketing', '2-11-2014', '-----', '9-5', 23),
(14, 'Tranlation', 'we need someone who can translate the French books into arabic', 'Tarnslation .ease.com', 'Dubai', 'ye translate books ', 'translator', 'Bachlor\'s', '----', '-----', '2-3-2034', '----', 'remote', 11),
(15, 'Tranlation', 'we need someone who can translate the French books into arabic', 'Tarnslation .ease.com', 'Dubai', 'ye translate books ', 'translator', 'Bachlor\'s', '----', '-----', '2-3-2034', '----', 'remote', 11),
(17, 'Tranlation', 'we need someone who can translate the French books into arabic', 'Tarnslation .ease.com', 'Dubai', 'ye translate books ', 'translator', 'Bachlor\'s', '----', '-----', '2-3-2034', '----', 'remote', 11),
(18, 'translation', 'sdfsdf', 'dsadfsa', 'sdfadfs', 'dfsfdsafd', 'dsafda', 'dsafdsa', 'dfsafdsa', 'dfasfdas', '2342', '3424', 'fsdfda', 22),
(19, 'Mobile App Developer', 'need a mobile app Developer', 'dsafdsa', 'fdsadfas', 'fdsafdaw', 'dfasd', 'dfasfdsa', 'dfsafd', 'dsafdas', '32242', '432342', 'dfsfd', 34),
(20, 'Mobile App Developer', 'need a mobile app Developer', 'dsafdsa', 'fdsadfas', 'fdsafdaw', 'dfasd', 'dfasfdsa', 'dfsafd', 'dsafdas', '32242', '432342', 'dfsfd', 34),
(21, 'fds', 'dsafd', 'dfsfsdfs', '', '', 'sdfsa', 'dfs', '', '', '2342', 'fs', 'ds', 2),
(22, 'Seo', 'we need someone to do seo of our website', 'dfsfsdfs', '', '', 'sdfsa', 'dfs', '', '', '2342', 'fs', 'ds', 11),
(23, 'logo Design', 'we need ;a logo designer ', 'sfdsdd', 'dd', 'dddd', 'dsfs', '', '', '', '31321', '', '', 12),
(24, 'logo Design', 'we need ;a logo designer ', 'sfdsdd', 'dd', 'dddd', 'dsfs', '', '', '', '31321', '', '', 12),
(25, 'logo Design', 'we need ;a logo designer ', 'sfdsdd', 'dd', 'dddd', 'dsfs', '', '', '', '31321', '', '', 12),
(26, 'Mobile App Developer', 'we need a mobile developer', '', '', '', '', '', '', '', '', '', '', 23),
(27, 'Web Development', ' i need an forntened designer', 'sdfsaf', 'dasd', 'sdfs', 'sd', 'ds', 'dsdsa', 'dsf', '23232', '23', 'dsaffs', 25),
(28, 'Logo Design', 'logo logooo', 'sfdsfs', 'karachi', 'dsdfs', 'sdfsaf', 'dsadfsf', 'sdfs', 'dsafdsa', '2324', '234', 'dsfdsaf', 12),
(29, 'SEO  ', ' seo ke liye banda chaiyeeee', 'sdadf', 'karachii', 'jlsfjdldfjslfd', '', '', '', '', '32342', '', '', 11),
(30, 'Mob Application', 'weldjfslfjd', '', '', '', '', '', '', '', '', '', '', 232),
(31, 'logo Design ', 'lsjfdsfd', 'ds', '', '', 'dfsf', '', '', '', '23423', '', '', 22),
(32, 'Wordpress', 'need a Wordprees designer ', 'dfsaff', 'dfsaf', 'fdsa', '-------', '--------', '---------', '-------', '2432', '2432', 'dfasf', 20),
(33, 'Mobile Developer', 'we need a mobile developer ', 'abc limited', 'faislabad', 'By adding these debugging statements, you can better identify any issues with the SQL query construction or execution. Additionally, ensure that the form fields\' names are correct and match the variables used in the PHP script. If there are still issues, check for any error messages or warnings displayed by PHP.', 'Mobile Application Developer', 'Bachlor\'s in CS', 'Must be 2years', 'Flutter', '2 months', '--------', '9-5', 23),
(34, 'logo Design', 'wejdljsldjsld', 'abc', 'karachi', 'dfsadfsfdasfd', 'logo designer', ' bachlors', ' 2 years', ' desgning', '33', '33 ', 'remote', 22);

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`id`, `img`, `title`, `description`, `price`) VALUES
(1, 'https://bbabysuleman.com/cdn/shop/products/hydra-face-wash-for-all-skin-types_700x.jpg?v=1634373292', 'shampo', 'this is a shampo and very nice shampo', 500);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `img` blob NOT NULL,
  `pr` int(255) NOT NULL,
  `detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`img`, `pr`, `detail`) VALUES
('', 50, 'Product details go here.'),
('', 50, 'Product details go here.'),
('', 50, 'Product details go here.'),
('', 50, 'Product details go here.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(10, 'bisma', 'bisma23@gmail.com', '$2y$10$qPRLIBoVLPQCSIaM.JP0XuvPk.GUFGG7OZjU3XWyJ0yH/0uhijZ1i'),
(11, 'marium ', 'marium23@gmail.com', '$2y$10$IBplJcTlZo7vMuW9D.r/MOYD5XMjWvWn99f5Ny.NEKB0JyFPuFiYO'),
(12, 'ahmed', '', '2222'),
(13, 'ahmed', 'ahmed@gmail.com', '2222'),
(14, 'ahmed', 'ahmed@gmail.com', '2222'),
(15, 'ahmed', 'ahmed@gmail.com', '2222'),
(16, 'qasim', 'qasim@gmail.com', '1111'),
(18, 'yasin', 'yasin@gmail.com', '$2y$10$.d2jTGIcJ.YUPEaoqAEr5eSI8aQQ8OHIRFvzI.ltShv/8vA2dHQYS'),
(19, 'rida', 'rida@gmail.com', '$2y$10$ls0msXUholahvEjN2vf7heqpRcyVIHxL8AxpDpb77IyYZnsRfzD3e'),
(20, 'hamima', 'hamima@gmail.com', '$2y$10$W9TxIk7lbRDUHj23kpNdveBS5E2h1YLbvtvCLeaSk/XID6YYQkPLa'),
(21, 'hamima', 'hamimamirza0@gmail.com', '$2y$10$SAj/lqp2S6Hqrd.4XCw7yO1i/v6fYxqEK81hpC4Gjh3cdf9swXbou'),
(22, 'hamima', 'hamimamirza0@gmail.com', '$2y$10$WNs2gtR9suJV81UANQ4kRu0aUkrs2WxdD6Kcu9QxCeNKJPo4Y6.Ta'),
(23, 'hamima mirza', 'hamima@gmail.com', '$2y$10$9EfGunY8SU/1vxt9OBxJm.g4dbmx6nxSJBM378u4GvuHwjHPu.f2W'),
(24, 'hamima mirza', 'hamima@gmail.com', '$2y$10$unOmu7HZWVgiy04BjnIWQuO.2TMwcswcHXpjnNV5lEvXz38nHUW5C'),
(25, 'mirza', 'hamimamirza0@gmail.com', '$2y$10$PQpMsj/0Q7Gkruo3zkHSEeEDguAZ9q3WZ9mGfp6f84LuUfhXrvgjC'),
(26, 'raheema', 'raheema12@gmail.com', '$2y$10$PCR6Hrze.W7DnK2QKW6mL.plSCJsG6cOhyHt14VxcXMiWx5IrPq7i');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `form1`
--
ALTER TABLE `form1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
