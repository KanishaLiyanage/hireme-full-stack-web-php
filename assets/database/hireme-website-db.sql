-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 12:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hireme-website-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_username` varchar(10) NOT NULL,
  `admin_password` varchar(200) NOT NULL,
  `admin_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `application_id` int(10) NOT NULL,
  `client_id` int(10) NOT NULL,
  `job_id` int(10) NOT NULL,
  `company_id` int(10) NOT NULL,
  `applicant_full_name` varchar(200) NOT NULL,
  `applicant_mobile_number` varchar(50) NOT NULL,
  `applicant_email` varchar(100) NOT NULL,
  `applicant_cv` text NOT NULL,
  `applicant_cover_letter` text NOT NULL,
  `applied_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(10) NOT NULL,
  `client_username` varchar(10) NOT NULL,
  `client_password` varchar(200) NOT NULL,
  `client_first_name` varchar(50) NOT NULL,
  `client_last_name` varchar(50) NOT NULL,
  `client_email` varchar(100) NOT NULL,
  `client_profile_picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `company_id` int(10) NOT NULL,
  `company_username` varchar(10) NOT NULL,
  `company_password` varchar(200) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_website` varchar(100) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `company_description` longtext NOT NULL,
  `company_logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`company_id`, `company_username`, `company_password`, `company_name`, `company_website`, `company_email`, `company_description`, `company_logo`) VALUES
(1, '', '', 'Unilever', 'www.unilever.com', 'unilever.career@gmail.com', 'Unilever plc is a British multinational consumer goods company with headquarters in London, England. Unilever products include food, condiments, ice cream, cleaning agents, beauty products, and personal care. Unilever is the largest producer of soap in the world and its products are available in around 190 countries.', 'unilever.png'),
(2, '', '', 'Mobitel (Pvt) Ltd', 'www.sltmobitel.lk', 'career@mobitel.lk', 'SLT-MOBITEL is the national telecommunications services provider in Sri Lanka and one of the country\'s largest companies with an annual turnover in excess of Rs 40 billion.', 'sltmobitel.png'),
(3, '', '', 'Nawaloka (Pvt) Ltd', 'www.nawaloka.net', 'careers@nawaloka.net', 'Nawaloka Construction Company has undergone a long process on success in the local Construction Market with over 68 years rich and firsthand experience. Today the Company holds a predominant position in the Sri Lankan construction industry who has earned valued recognition in undertaking any challenging task in the field of CS2 category for High-rise Buildings , Highways and Heavy Construction.Nawaloka Construction Company is a wholly owned subsidiary of the Nawaloka Holdings.\r\nWith the expertise of the company team of professionals, ample resources and stable market position, Nawaloka Construction Company ensure that the Company is exposed to the latest construction techniques, products and materials and is thus able to apply them in the most practical, efficient and profitable manner to give the client the best value for money.', 'nawaloka.png'),
(4, '', '', 'Hemas Holdings PLC', 'www.hemashealthcare.com', 'careers.healthcarephemas.com', 'Hemas Holdings PLC is a diversified corporate with focused interest in consumer, healthcare, and mobility. Hemas is a publicly listed company with over 5,400+ employees. In 1948, Hemas started with simple intent: to help families live healthfully.', 'hemas.png'),
(5, '', '', 'Calcey Technologies', 'www.calcey.com', 'careers@calcey.com', 'Calcey Technologies (Pvt) Ltd. is an innovation firm specializing in a comprehensive range of online services including Web, Mobile & Cloud Solutions, Multimedia Services, Software Quality Assurance and Knowledge Services for SMEs to large enterprise level companies worldwide. As a boutique professional services firm, Calcey helps our customers to launch fully convergent products to market by leveraging creative and highly experienced terms in Silicon Valley, California and Colombo, Sri Lanka.', 'calcey.png'),
(6, '', '', 'DFCC Bank', 'www.dfcc.lk', 'careers@dfcc.lk', 'DFCC Bank was set up in 1955 as Sri Lanka\'s a pioneer development finance institution on the recommendation of the World Bank and is one of the oldest development banks in Asia. In October 2015, DFCC Bank and its 99% owned subsidiary, DFCC Vardhana Bank amalgamated.', 'dfcc.png'),
(7, '', '', 'Grand Engineering', 'www.grandengineering.Ik', 'grandengineering@gmail.com', 'The Grand Engineering business came to fruition from two industry professionals who identified an opportunity to enhance the design and construction experience to Developers, Builders and Owner Builders. Through over 30 years combined experience within the construction sector we have identified a critical need to ensure our clients are provided with an innovative solution within a committed time frame, ensuring that our team is working with you every step of the journey. We refer this as the “Grand Experience”.', 'grandeng.png');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(10) NOT NULL,
  `company_id` int(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `job_role` varchar(50) NOT NULL,
  `salary` int(10) NOT NULL,
  `salary_type` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `vacancies` int(10) NOT NULL,
  `job_nature` varchar(50) NOT NULL,
  `requirement_skills` longtext NOT NULL,
  `education_and_experience` longtext NOT NULL,
  `deadline` varchar(50) NOT NULL,
  `posted_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `company_id`, `category`, `job_role`, `salary`, `salary_type`, `location`, `description`, `vacancies`, `job_nature`, `requirement_skills`, `education_and_experience`, `deadline`, `posted_date`) VALUES
(1, 1, 'Sales and Marketing', 'Digital Marketer', 4000, 'yearly', 'Western Province', 'It is a long established fact that a reader will beff distracted by vbthe creadable content of a page when looking at its layout. The pointf of using Lorem Ipsum is that it has ahf mcore or-lgess normal distribution of letters, as opposed to using, Content here content here making it look like readable.', 2, 'Full time', 'System Software Development\r\nMobile Applicationin iOS/Android/Tizen or other platform\r\nResearch and code , libraries, APIs and frameworks\r\nStrong knowledge on software development life cycle\r\nStrong problem solving and debugging skills', '3 or more years of professional design experience\r\nDirect response email experience\r\nEcommerce website design experience\r\nFamiliarity with mobile and web apps preferred\r\nExperience using Invision a plus', '16 Dec 2022', '2022-11-11 13:17:20'),
(2, 2, 'Telecommunication', 'Senior Product Executive', 2000, 'yearly', 'Western Province', 'We are looking for a senior product executive for our Broadband department.', 5, 'Full time', 'Design, develop a. implement marketing plans through market research, competitor analysis, pricing, customer engagement business planning in order to achieve targets.\r\nFacilitate in Acquisition and Data revenue enhancement via installed ease management.\r\nSupport the Broadband business unit to develop, test a. launch new product features and functionality in partnership with other teams.\r\nAssist the customer life cycle management campaigns a. work closely with retention teams.\r\nEnhance digitalized service platforms to improve the productivity and experience.\r\nData analysis of product performance by using Big Data Platform a. support grow. of Broadband revenue and Subscriber base.\r\nMonitor campaigns and take appropriate action to achieve set objectives.\r\nDrive and develop material for multiple product or service launches including customer presentations and sales trainings.', 'Candidate should hold a Bachelors degree in Business Management/ Marketing from a recognized university/ institute.\r\nMinimum 2 years\' experience in Product or Bra. Management in a similar position in a reputed agency or organization.\r\nTelecommunication related experience is an added advantage.\r\nMust be well versed in English and Sinhala both in written a. verbal communication.\r\nShould possess excellent presentation a. analytical skills with a working knowledge of Microsoft packages.\r\nShould be able to work independently with minimum supervision a. maintain records methodically.\r\nBe highly organized, proactive, a. energetic with a rrositive attitude.\r\nBe a team player a. be able to interact with staff at all levels.\r\n', '01 Jan 2023', '2022-11-11 14:58:01'),
(3, 3, 'Construction', 'Project Manager', 2500, 'yearly', 'Western Province', 'We are looking for experienced and qualified Project Manager.', 1, 'Full time', 'Minimum of 10 years\' post qualifying experience with at least 7 years in a similar capacity of building construction.\r\nBe able to achieve tasks within given time frames.\r\nExcellent managerial, organizing, planning, communication and interpersonal skills. ', 'B.Sc. (Eng.) with charted qualification.\r\n', '08 Dec 2022', '2022-11-11 15:07:46'),
(4, 4, 'Accounting and Auditing', 'JUNIOR EXECUTIVE FINANCE - COSTING', 2800, 'yearly', 'Western Province', 'The selected candidate will be responsible for timely costing of shipments, analysis of all clearing related transactions , accounts and checking of all related payment vouchers submitted for final payment. The role holder will also be responsible for handling all entries relating to the goods in transit.', 1, 'Full time', 'Proficient in MS Office (Thorough knowledge in MS Excel will be an added advantage)\r\nStrong analytical, negotiation and communication skills\r\n', 'Full/part qualification in CIMA/ICASL/ACCA\r\nMinimum of 1 year experience in a similar role\r\nWorking knowledge of SAP is important', '16 Nov 2022', '2022-11-11 15:15:59'),
(5, 5, 'Information Technology', 'Senior Software Engineers', 4000, 'yearly', 'Western Province', 'Calcey Technologies is one of Sri Lanka’s leading software product engineering firms. For two decades, we have delivered bespoke digital products for startups, SMEs, and global corporations including PayPal, Stanford University, and the Wikimedia Foundation. Calcey’s Colombo offices require the services of Senior Software Engineers – Node.js.', 2, 'Remote', 'Ability to understand, adapt, initiate, implement process, and operate in a changing and sometimes undefined environment\r\nAnalytical thinking and planning, communication, problem-solving, good judgment, and the ability to influence others positively is required\r\nAbility to effectively communicate even when the information is sensitive/difficult\r\nDemonstrate the ability to multitask, prioritize, and meet deadlines in a fast-paced environment\r\nEthical, Courageous, Transparent, Imaginative, Candid, and Responsible', 'High proficiency & hands-on experience in developing back-ends with Node.js. \r\nExtensive knowledge of JavaScript and TypeScript\r\nExperience with Express.js and Sequelize\r\nExperience building AWS Lambda functions with Node.js\r\nExperience working with Relational and NoSQL databases\r\nExperience with AWS S3, SNS, SQS\r\nKnowledge and experience in Architectural and Design Patterns\r\nThorough in Object-Oriented Design\r\nExperience building front-ends with React or Angular will be a plus\r\n3+ years  hands-on industry experience\r\nWillingness to learn different programming paradigms, languages and technologies is a requirement', '23 Dec 2022', '2022-11-12 02:53:36'),
(6, 5, 'UI/UX Design', 'UI Engineer', 3500, 'yearly', 'Western Province', 'Calcey Technologies is one of Sri Lanka’s leading software product engineering firms. For two decades, we have delivered bespoke digital products for startups, SMEs, and global corporations including PayPal, Stanford University, and the Wikimedia Foundation. Recognized by Great Place to Work as one of the best workplaces in the IT/ITeS sector, we take pride in nurturing a culture where passion thrives. Calcey’s Colombo office requires a UI Engineer.', 4, 'Part Time', 'Creative UI design ability and good knowledge of UX design best practices\r\nBeing knowledgeable and up-to-date on software development lifecycle \r\nTranslating mock-ups, designs, and wireframes into responsive web applications in HTML, CSS/SASS, and JavaScript\r\nExperience with Less/Sass CSS Pre-Processors\r\nExperience with Adobe Creative Cloud, Sketch, InVision, Zeplin and WordPress/PHP\r\nExperience in working with modern front-end frameworks (Angular, React etc.) is a plus\r\nWillingness to learn the latest technologies and UI/UX trends\r\n2 years hands on industry experience as a UI Engineer', 'Front-end web development (HTML, CSS, JS)\r\nCreative design of web pages, graphics and icons\r\nCreate wireframes and mockups for new functionality\r\nCreate high-fidelity designs and prototypes\r\nProvide input for estimates\r\nWebsite development and maintenance\r\nTake ownership of the UI development of an assigned project\r\nInterfacing with other internal and external technology stakeholders', '10 Jan 2023', '2022-11-12 02:53:36'),
(7, 6, 'Banking and Insurance', 'SENIOR BANKING ASSISTANT', 1000, 'yearly', 'Western Province', 'A competitive remuneration package and other fringe benefits as well as structured career advancement opportunities and extensive training are on offer for the chosen candidates. Any form of canvassing is discouraged. Correspondence will only be with the short-listed candidates.', 6, 'Full time', 'handling the allocated portfolio of clients transferred from the respective business units.\r\nassisting in the reduction of non-performing levels of the bank.\r\nassisting in recoveries through repossession, arbitration or litigation.\r\nApplicants who possess lesser experience would be considered for recruitment at junior levels.\r\na fair knowledge on banking products and exposure to the legal framework will also be an added advantage.\r\nhave good analytical skills.\r\nhave good communication and negotiation skills.', 'have passed the GCE O/L with credit passes for English and Mathematics and 3 passes for the main subjects at GCE A/L (excluding General English).\r\npossess 6 – 8 years’ experience preferably in the banking or financial services.\r\nsector with at least 2 years’ experience in recoveries/credit management/facility restructuring.', '15 Jan 2023', '2022-11-12 04:27:49'),
(8, 7, 'Architecture', 'ARCHITECT', 2500, 'yearly', 'Western Province', 'We are hiring male or female architect.', 2, 'Freelance', 'Analyze design issues and recommend corrective actions, and perform structural design analysis and calculations according to project.\r\nExcellent communication skills, both verbal and written. Good command of English and Sinhala.\r\nMust possess a commanding personality with an eye for accuracy.\r\nLiaise with clients and contractors to resolve construction and design related issues at site.\r\nComfort and enthusiasm for learning latest design skills and can do attitude.\r\nPerform design changes and improvements according to changing project demands, and use latest software (Tekla structures 2D & 3D detailing) and technologies to develop effective designs.', 'Bachelor\'s degree in Architecture (BSc / B. Arch).\r\nExperience in computer aided design AutoCAD / SketchUp / Refit 3D, and Lumion 30 rendering / Rendering 3D images.\r\nGood knowledge about local rules & regulations, specially housing projects and apartments (council approval process).\r\nExperience since qualification minimum 5 years in Architectural based environment. ', '05 Feb 2023', '2022-11-12 04:27:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `job_id` (`job_id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `company_id` (`company_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `application_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `company_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`job_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applications_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applications_ibfk_3` FOREIGN KEY (`company_id`) REFERENCES `companies` (`company_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `companies` (`company_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
