-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 11:18 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charity`
--

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `id` int(11) NOT NULL,
  `campaign` text NOT NULL,
  `duration` char(100) NOT NULL,
  `category` char(100) NOT NULL,
  `name` char(100) NOT NULL,
  `post_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `goal` text NOT NULL,
  `images` text NOT NULL,
  `type` char(100) NOT NULL,
  `Tier_text` text NOT NULL,
  `content` text NOT NULL,
  `youtube` text NOT NULL,
  `visibility` char(100) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `raised` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`id`, `campaign`, `duration`, `category`, `name`, `post_id`, `description`, `goal`, `images`, `type`, `Tier_text`, `content`, `youtube`, `visibility`, `created_date`, `user_id`, `raised`) VALUES
(2, 'Big Business: Major Corporate Projects', '1 Hour', 'Esoteric', 'Muhammad Usama', 0, 'Here’s your chance to make the right impression. Take your time and showcase your most compelling campaign points here. You can drag and drop .jpeg, .gif & .png files exactly where your curser is. You can also paste embed codes from Youtube videos to include them in your campaign. Be sure to include information about you, your location, the timeframe of your progress, guarantees, all the details of your campaign and how the funds will be allocated. Post in a professional, clean and organized manner. If you have a prototype, then showcase it. Give as much info as you can and be sure to reply to all questions from potential funders to address any issues your backers have about your campaign! Be transparent, accurate and above all, 100% truthful. Be sure to be honest about all of your campaign’s weaknesses and shortcomings as well as its strengths and benefits.\r\n', '5000', '[\"120.png\",\"121.png\",\"122.png\",\"123.png\",\"124.png\"]', 'Reward Campaign', 'skdlklsdksldklssldkkd', '<p>Here’s your chance to make the right impression. Take your time and showcase your most compelling campaign points here. You can drag and drop .jpeg, .gif &amp; .png files exactly where your curser is. You can also paste embed codes from Youtube videos to include them in your campaign. Be sure to include information about you, your location, the timeframe of your progress, guarantees, all the details of your campaign and how the funds will be allocated. Post in a professional, clean and organized manner. If you have a prototype, then showcase it. Give as much info as you can and be sure to reply to all questions from potential funders to address any issues your backers have about your campaign! Be transparent, accurate and above all, 100% truthful. Be sure to be honest about all of your campaign’s weaknesses and shortcomings as well as its strengths and benefits.</p><p>Paragraph</p><p>&nbsp;</p><p>&nbsp;</p><p><br>&nbsp;</p>', 'https://www.youtube.com/watch?v=hw_HpTI_Wkw&list=RDhw_HpTI_Wkw&start_radio=1', 'Standard (Free)', '2021-07-02 12:14:57', 1, 0),
(3, 'Big Business: Major Corporate Projects', '1 Hour', 'Esoteric', 'on', 2, 'Phase 1 :\r\n\r\n5. New lead; on enter address: suggest google maps locations\r\n1. Google maps API integration\r\n2. Google maps keep settings/position on exit lead\r\n\r\nPhase 2 :\r\n\r\n3. Google maps show all pins within lead\r\n6. Search funtion doesnot work [what you suggested]\r\n4. Google maps keep position in lead\r\n\r\nPhase 3:\r\n\r\n7. Mobile responsive for mobile browser, NO APP\r\n8. Task reminder at 08:00 AM to every user with open tasks for that day [send e-mail to use account email adress]\r\n9. Task reminder to business owners of every employee [merijn@risottini.com, daan@risottini.com]\r\n\r\n\r\n', '10000', '[\"125.png\",\"126.png\",\"127.png\",\"128.png\",\"129.png\"]', 'Reward Campaign', 'Phase 1 :\r\n\r\n5. New lead; on enter address: suggest google maps locations\r\n1. Google maps API integration\r\n2. Google maps keep settings/position on exit lead\r\n\r\nPhase 2 :\r\n\r\n3. Google maps show all pins within lead\r\n6. Search funtion doesnot work [what you suggested]\r\n4. Google maps keep position in lead\r\n\r\nPhase 3:\r\n\r\n7. Mobile responsive for mobile browser, NO APP\r\n8. Task reminder at 08:00 AM to every user with open tasks for that day [send e-mail to use account email adress]\r\n9. Task reminder to business owners of every employee [merijn@risottini.com, daan@risottini.com]\r\n\r\n\r\n', '<p>Phase 1 :</p><p>&nbsp;</p><p>5. New lead; on enter address: suggest google maps locations</p><p>1. Google maps API integration</p><p>2. Google maps keep settings/position on exit lead</p><p>&nbsp;</p><p>Phase 2 :</p><p>&nbsp;</p><p>3. Google maps show all pins within lead</p><p>6. Search funtion doesnot work [what you suggested]</p><p>4. Google maps keep position in lead</p><p>&nbsp;</p><p>Phase 3:</p><p>&nbsp;</p><p>7. Mobile responsive for mobile browser, NO APP</p><p>8. Task reminder at 08:00 AM to every user with open tasks for that day [send e-mail to use account email adress]</p><p>9. Task reminder to business owners of every employee [merijn@risottini.com, daan@risottini.com]</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>', 'https://www.youtube.com/watch?v=pAJdnM9K9NM', 'Standard (Free)', '2021-07-02 17:42:11', 1, 0),
(4, 'Big Business: Major Corporate Projects', '1 Hour', 'Esoteric', 'Muhammad Maaz', 0, 'Phase 1 :\r\n\r\n5. New lead; on enter address: suggest google maps locations\r\n1. Google maps API integration\r\n2. Google maps keep settings/position on exit lead\r\n\r\nPhase 2 :\r\n\r\n3. Google maps show all pins within lead\r\n6. Search funtion doesnot work [what you suggested]\r\n4. Google maps keep position in lead\r\n\r\nPhase 3:\r\n\r\n7. Mobile responsive for mobile browser, NO APP\r\n8. Task reminder at 08:00 AM to every user with open tasks for that day [send e-mail to use account email adress]\r\n9. Task reminder to business owners of every employee [merijn@risottini.com, daan@risottini.com]\r\n\r\n\r\n', '10000', '[\"130.png\",\"131.png\",\"132.png\",\"133.png\",\"134.png\"]', 'Reward Campaign', 'Phase 1 :\r\n\r\n5. New lead; on enter address: suggest google maps locations\r\n1. Google maps API integration\r\n2. Google maps keep settings/position on exit lead\r\n\r\nPhase 2 :\r\n\r\n3. Google maps show all pins within lead\r\n6. Search funtion doesnot work [what you suggested]\r\n4. Google maps keep position in lead\r\n\r\nPhase 3:\r\n\r\n7. Mobile responsive for mobile browser, NO APP\r\n8. Task reminder at 08:00 AM to every user with open tasks for that day [send e-mail to use account email adress]\r\n9. Task reminder to business owners of every employee [merijn@risottini.com, daan@risottini.com]\r\n\r\n\r\n', '<p>Phase 1 :</p><p>&nbsp;</p><p>5. New lead; on enter address: suggest google maps locations</p><p>1. Google maps API integration</p><p>2. Google maps keep settings/position on exit lead</p><p>&nbsp;</p><p>Phase 2 :</p><p>&nbsp;</p><p>3. Google maps show all pins within lead</p><p>6. Search funtion doesnot work [what you suggested]</p><p>4. Google maps keep position in lead</p><p>&nbsp;</p><p>Phase 3:</p><p>&nbsp;</p><p>7. Mobile responsive for mobile browser, NO APP</p><p>8. Task reminder at 08:00 AM to every user with open tasks for that day [send e-mail to use account email adress]</p><p>9. Task reminder to business owners of every employee [merijn@risottini.com, daan@risottini.com]</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>', 'https://www.youtube.com/watch?v=flYRMZvON-I', 'Standard (Free)', '2021-07-02 17:43:15', 1, 0),
(5, 'Rewards: Get rewards and or the product', '1 Hour', 'Esoteric', 'TV mounting', 0, 'Here’s your chance to make the right impression. Take your time and showcase your most compelling campaign points here. You can drag and drop .jpeg, .gif & .png files exactly where your curser is. You can also paste embed codes from Youtube videos to include them in your campaign. Be sure to include information about you, your location, the timeframe of your progress, guarantees, all the details of your campaign and how the funds will be allocated. Post in a professional, clean and organized manner. If you have a prototype, then showcase it. Give as much info as you can and be sure to reply to all questions from potential funders to address any issues your backers have about your campaign! Be transparent, accurate and above all, 100% truthful. Be sure to be honest about all of your campaign’s weaknesses and shortcomings as well as its strengths and benefits.\r\n', '10000', '[\"135.png\",\"136.png\",\"137.png\",\"138.png\",\"139.png\"]', 'Donation Support', 'Here’s your chance to make the right impression. Take your time and showcase your most compelling campaign points here. You can drag and drop .jpeg, .gif & .png files exactly where your curser is. You can also paste embed codes from Youtube videos to include them in your campaign. Be sure to include information about you, your location, the timeframe of your progress, guarantees, all the details of your campaign and how the funds will be allocated. Post in a professional, clean and organized manner. If you have a prototype, then showcase it. Give as much info as you can and be sure to reply to all questions from potential funders to address any issues your backers have about your campaign! Be transparent, accurate and above all, 100% truthful. Be sure to be honest about all of your campaign’s weaknesses and shortcomings as well as its strengths and benefits.\r\n', '<p>Here’s your chance to make the right impression. Take your time and showcase your most compelling campaign points here. You can drag and drop .jpeg, .gif &amp; .png files exactly where your curser is. You can also paste embed codes from Youtube videos to include them in your campaign. Be sure to include information about you, your location, the timeframe of your progress, guarantees, all the details of your campaign and how the funds will be allocated. Post in a professional, clean and organized manner. If you have a prototype, then showcase it. Give as much info as you can and be sure to reply to all questions from potential funders to address any issues your backers have about your campaign! Be transparent, accurate and above all, 100% truthful. Be sure to be honest about all of your campaign’s weaknesses and shortcomings as well as its strengths and benefits.</p><p>Paragraph</p><p>&nbsp;</p><p>&nbsp;</p><p><br>&nbsp;</p>', 'https://www.youtube.com/watch?v=flYRMZvON-I', 'Standard (Free)', '2021-07-02 17:44:02', 1, 0),
(6, 'Quick Cash Injection (Rewards): Get rewards and or the product. Can keep funding if your goal is reached or not', '1 Hour', 'Esoteric', 'Test Mehmood', 0, 'Here’s your chance to make the right impression. Take your time and showcase your most compelling campaign points here. You can drag and drop .jpeg, .gif & .png files exactly where your curser is. You can also paste embed codes from Youtube videos to include them in your campaign. Be sure to include information about you, your location, the timeframe of your progress, guarantees, all the details of your campaign and how the funds will be allocated. Post in a professional, clean and organized manner. If you have a prototype, then showcase it. Give as much info as you can and be sure to reply to all questions from potential funders to address any issues your backers have about your campaign! Be transparent, accurate and above all, 100% truthful. Be sure to be honest about all of your campaign’s weaknesses and shortcomings as well as its strengths and benefits.\r\n', '20000', '[]', 'Reward Campaign', 'Here’s your chance to make the right impression. Take your time and showcase your most compelling campaign points here. You can drag and drop .jpeg, .gif & .png files exactly where your curser is. You can also paste embed codes from Youtube videos to include them in your campaign. Be sure to include information about you, your location, the timeframe of your progress, guarantees, all the details of your campaign and how the funds will be allocated. Post in a professional, clean and organized manner. If you have a prototype, then showcase it. Give as much info as you can and be sure to reply to all questions from potential funders to address any issues your backers have about your campaign! Be transparent, accurate and above all, 100% truthful. Be sure to be honest about all of your campaign’s weaknesses and shortcomings as well as its strengths and benefits.\r\n', '<p>Here’s your chance to make the right impression. Take your time and showcase your most compelling campaign points here. You can drag and drop .jpeg, .gif &amp; .png files exactly where your curser is. You can also paste embed codes from Youtube videos to include them in your campaign. Be sure to include information about you, your location, the timeframe of your progress, guarantees, all the details of your campaign and how the funds will be allocated. Post in a professional, clean and organized manner. If you have a prototype, then showcase it. Give as much info as you can and be sure to reply to all questions from potential funders to address any issues your backers have about your campaign! Be transparent, accurate and above all, 100% truthful. Be sure to be honest about all of your campaign’s weaknesses and shortcomings as well as its strengths and benefits.</p><p>Paragraph</p>', 'https://www.youtube.com/watch?v=e_vl5aFXB4Q', 'Standard (Free)', '2021-07-02 17:45:02', 1, 0),
(7, 'Donation: fundraising event with rewards', '1 Hour', 'Esoteric', 'Test Mehmood', 0, 'Here’s your chance to make the right impression. Take your time and showcase your most compelling campaign points here. You can drag and drop .jpeg, .gif & .png files exactly where your curser is. You can also paste embed codes from Youtube videos to include them in your campaign. Be sure to include information about you, your location, the timeframe of your progress, guarantees, all the details of your campaign and how the funds will be allocated. Post in a professional, clean and organized manner. If you have a prototype, then showcase it. Give as much info as you can and be sure to reply to all questions from potential funders to address any issues your backers have about your campaign! Be transparent, accurate and above all, 100% truthful. Be sure to be honest about all of your campaign’s weaknesses and shortcomings as well as its strengths and benefits.\r\n', '40000', '[\"161.png\",\"162.png\",\"163.png\",\"164.png\",\"165.png\"]', 'Reward Campaign', 'Here’s your chance to make the right impression. Take your time and showcase your most compelling campaign points here. You can drag and drop .jpeg, .gif & .png files exactly where your curser is. You can also paste embed codes from Youtube videos to include them in your campaign. Be sure to include information about you, your location, the timeframe of your progress, guarantees, all the details of your campaign and how the funds will be allocated. Post in a professional, clean and organized manner. If you have a prototype, then showcase it. Give as much info as you can and be sure to reply to all questions from potential funders to address any issues your backers have about your campaign! Be transparent, accurate and above all, 100% truthful. Be sure to be honest about all of your campaign’s weaknesses and shortcomings as well as its strengths and benefits.\r\n', '<p>Here’s your chance to make the right impression. Take your time and showcase your most compelling campaign points here. You can drag and drop .jpeg, .gif &amp; .png files exactly where your curser is. You can also paste embed codes from Youtube videos to include them in your campaign. Be sure to include information about you, your location, the timeframe of your progress, guarantees, all the details of your campaign and how the funds will be allocated. Post in a professional, clean and organized manner. If you have a prototype, then showcase it. Give as much info as you can and be sure to reply to all questions from potential funders to address any issues your backers have about your campaign! Be transparent, accurate and above all, 100% truthful. Be sure to be honest about all of your campaign’s weaknesses and shortcomings as well as its strengths and benefits.</p><p>Paragraph</p><p>&nbsp;</p><p>&nbsp;</p><p><br>&nbsp;</p>', 'https://www.youtube.com/watch?v=e_vl5aFXB4Q', 'Featured $100', '2021-07-02 17:46:02', 1, 0),
(8, 'Urgent Need (Gifting): Helping a Situation', '1 Hour', 'Esoteric', 'Muhammad Usama', 0, 'Here’s your chance to make the right impression. Take your time and showcase your most compelling campaign points here. You can drag and drop .jpeg, .gif & .png files exactly where your curser is. You can also paste embed codes from Youtube videos to include them in your campaign. Be sure to include information about you, your location, the timeframe of your progress, guarantees, all the details of your campaign and how the funds will be allocated. Post in a professional, clean and organized manner. If you have a prototype, then showcase it. Give as much info as you can and be sure to reply to all questions from potential funders to address any issues your backers have about your campaign! Be transparent, accurate and above all, 100% truthful. Be sure to be honest about all of your campaign’s weaknesses and shortcomings as well as its strengths and benefits.\r\n', '80000', '[\"28.png\",\"281.png\",\"282.png\",\"283.png\",\"284.png\"]', 'Reward Campaign', 'Here’s your chance to make the right impression. Take your time and showcase your most compelling campaign points here. You can drag and drop .jpeg, .gif & .png files exactly where your curser is. You can also paste embed codes from Youtube videos to include them in your campaign. Be sure to include information about you, your location, the timeframe of your progress, guarantees, all the details of your campaign and how the funds will be allocated. Post in a professional, clean and organized manner. If you have a prototype, then showcase it. Give as much info as you can and be sure to reply to all questions from potential funders to address any issues your backers have about your campaign! Be transparent, accurate and above all, 100% truthful. Be sure to be honest about all of your campaign’s weaknesses and shortcomings as well as its strengths and benefits.\r\n', '<p>Here’s your chance to make the right impression. Take your time and showcase your most compelling campaign points here. You can drag and drop .jpeg, .gif &amp; .png files exactly where your curser is. You can also paste embed codes from Youtube videos to include them in your campaign. Be sure to include information about you, your location, the timeframe of your progress, guarantees, all the details of your campaign and how the funds will be allocated. Post in a professional, clean and organized manner. If you have a prototype, then showcase it. Give as much info as you can and be sure to reply to all questions from potential funders to address any issues your backers have about your campaign! Be transparent, accurate and above all, 100% truthful. Be sure to be honest about all of your campaign’s weaknesses and shortcomings as well as its strengths and benefits.</p><p>Paragraph</p><p>&nbsp;</p><p>&nbsp;</p><p><br>&nbsp;</p>', 'https://www.youtube.com/watch?v=flYRMZvON-I', 'Featured $100', '2021-07-02 17:46:32', 1, 0),
(9, 'Urgent Need (Gifting): Helping a Situation', '1 Hour', 'Esoteric', 'Muhammad Usama', 0, 'Here’s your chance to make the right impression. Take your time and showcase your most compelling campaign points here. You can drag and drop .jpeg, .gif & .png files exactly where your curser is. You can also paste embed codes from Youtube videos to include them in your campaign. Be sure to include information about you, your location, the timeframe of your progress, guarantees, all the details of your campaign and how the funds will be allocated. Post in a professional, clean and organized manner. If you have a prototype, then showcase it. Give as much info as you can and be sure to reply to all questions from potential funders to address any issues your backers have about your campaign! Be transparent, accurate and above all, 100% truthful. Be sure to be honest about all of your campaign’s weaknesses and shortcomings as well as its strengths and benefits.\r\n', '90000', '[\"post-1.png\",\"post-11.png\",\"post-12.png\",\"post-13.png\",\"post-14.png\"]', 'Reward Campaign', 'Here’s your chance to make the right impression. Take your time and showcase your most compelling campaign points here. You can drag and drop .jpeg, .gif & .png files exactly where your curser is. You can also paste embed codes from Youtube videos to include them in your campaign. Be sure to include information about you, your location, the timeframe of your progress, guarantees, all the details of your campaign and how the funds will be allocated. Post in a professional, clean and organized manner. If you have a prototype, then showcase it. Give as much info as you can and be sure to reply to all questions from potential funders to address any issues your backers have about your campaign! Be transparent, accurate and above all, 100% truthful. Be sure to be honest about all of your campaign’s weaknesses and shortcomings as well as its strengths and benefits.\r\n', '<p>Here’s your chance to make the right impression. Take your time and showcase your most compelling campaign points here. You can drag and drop .jpeg, .gif &amp; .png files exactly where your curser is. You can also paste embed codes from Youtube videos to include them in your campaign. Be sure to include information about you, your location, the timeframe of your progress, guarantees, all the details of your campaign and how the funds will be allocated. Post in a professional, clean and organized manner. If you have a prototype, then showcase it. Give as much info as you can and be sure to reply to all questions from potential funders to address any issues your backers have about your campaign! Be transparent, accurate and above all, 100% truthful. Be sure to be honest about all of your campaign’s weaknesses and shortcomings as well as its strengths and benefits.</p><p>Paragraph</p><p>&nbsp;</p><p>&nbsp;</p><p><br>&nbsp;</p>', 'https://www.youtube.com/watch?v=pAJdnM9K9NM', 'Featured $100', '2021-07-02 17:47:31', 1, 0),
(10, 'Long Term Support (Gifting): No time limit', '1 Hour', 'Esoteric', 'Test Mehmood', 0, 'Here’s your chance to make the right impression. Take your time and showcase your most compelling campaign points here. You can drag and drop .jpeg, .gif & .png files exactly where your curser is. You can also paste embed codes from Youtube videos to include them in your campaign. Be sure to include information about you, your location, the timeframe of your progress, guarantees, all the details of your campaign and how the funds will be allocated. Post in a professional, clean and organized manner. If you have a prototype, then showcase it. Give as much info as you can and be sure to reply to all questions from potential funders to address any issues your backers have about your campaign! Be transparent, accurate and above all, 100% truthful. Be sure to be honest about all of your campaign’s weaknesses and shortcomings as well as its strengths and benefits.\r\n', '70000', '[\"1210.png\",\"1211.png\",\"1212.png\",\"1213.png\",\"1214.png\"]', 'Reward Campaign', 'Here’s your chance to make the right impression. Take your time and showcase your most compelling campaign points here. You can drag and drop .jpeg, .gif & .png files exactly where your curser is. You can also paste embed codes from Youtube videos to include them in your campaign. Be sure to include information about you, your location, the timeframe of your progress, guarantees, all the details of your campaign and how the funds will be allocated. Post in a professional, clean and organized manner. If you have a prototype, then showcase it. Give as much info as you can and be sure to reply to all questions from potential funders to address any issues your backers have about your campaign! Be transparent, accurate and above all, 100% truthful. Be sure to be honest about all of your campaign’s weaknesses and shortcomings as well as its strengths and benefits.\r\n', '<p>Here’s your chance to make the right impression. Take your time and showcase your most compelling campaign points here. You can drag and drop .jpeg, .gif &amp; .png files exactly where your curser is. You can also paste embed codes from Youtube videos to include them in your campaign. Be sure to include information about you, your location, the timeframe of your progress, guarantees, all the details of your campaign and how the funds will be allocated. Post in a professional, clean and organized manner. If you have a prototype, then showcase it. Give as much info as you can and be sure to reply to all questions from potential funders to address any issues your backers have about your campaign! Be transparent, accurate and above all, 100% truthful. Be sure to be honest about all of your campaign’s weaknesses and shortcomings as well as its strengths and benefits.</p><p>Paragraph</p><p>&nbsp;</p><p>&nbsp;</p><p><br>&nbsp;</p>', 'https://www.youtube.com/watch?v=hw_HpTI_Wkw&list=RDhw_HpTI_Wkw&start_radio=1', 'Featured $100', '2021-07-02 17:48:04', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fund`
--

CREATE TABLE `fund` (
  `id` int(11) NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fund`
--

INSERT INTO `fund` (`id`, `campaign_id`, `user_id`, `payment`, `message`, `created_date`) VALUES
(1, 2, 1, 1000, 'Hey', '2021-07-02 14:16:32'),
(2, 6, 1, 20000, 'hjhkhh', '2021-07-02 18:48:00'),
(3, 2, 3, 2000, 'dls;dls', '2021-07-03 12:02:23'),
(4, 3, 2, 10000, 'dsdksld', '2021-07-03 12:05:51'),
(5, 3, 2, 300, 'skjskdj', '2021-07-03 12:12:22'),
(6, 2, 2, 3000, 'sdslkdd', '2021-07-03 12:12:38');

-- --------------------------------------------------------

--
-- Table structure for table `postlikes`
--

CREATE TABLE `postlikes` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `liker_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postlikes`
--

INSERT INTO `postlikes` (`id`, `post_id`, `liker_id`, `created_date`) VALUES
(1, 2, 1, '2021-06-30 20:56:50'),
(2, 1, 1, '2021-06-30 20:58:25');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` char(100) NOT NULL,
  `category` char(100) NOT NULL,
  `description` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `category`, `description`, `created_date`) VALUES
(2, 1, 'dksldk', 'Video Game Industry', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus ex itaque mollitia nemo perferendis repellendus sequi tempora velit. A accusantium adipisci, consequatur cumque cupiditate dignissimos doloremque est facilis fuga harum maiores molestias nam nemo nesciunt nihil non officiis optio possimus quaerat quam qui recusandae, repudiandae saepe similique soluta voluptatibus voluptatum?\r\n\r\n', '2021-06-30 20:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` char(100) NOT NULL,
  `email` char(100) NOT NULL,
  `phone` char(100) NOT NULL,
  `address` text NOT NULL,
  `username` char(100) NOT NULL,
  `password` char(100) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `username`, `password`, `created_date`) VALUES
(1, 'Muhammad Usama', 'usamaasif4190@gmail.com', '9282938293', 'sjdksdj', 'Sammay', '123', '2021-06-27 19:03:51'),
(2, 'TV mounting', 'tv@gmail.com', '320392039203', 'sdskdjsdkjdk', 'tv', '123', '2021-07-03 11:58:18'),
(3, 'Test Mehmood', 'mehmood@gmail.com', '123', 'dksldkls', 'mehmood', '123', '2021-07-03 12:01:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fund`
--
ALTER TABLE `fund`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postlikes`
--
ALTER TABLE `postlikes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fund`
--
ALTER TABLE `fund`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `postlikes`
--
ALTER TABLE `postlikes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
