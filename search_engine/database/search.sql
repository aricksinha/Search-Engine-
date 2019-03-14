-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2019 at 08:04 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `search`
--

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `id` int(11) NOT NULL,
  `site_title` varchar(200) NOT NULL,
  `site_link` varchar(400) NOT NULL,
  `site_key` varchar(200) NOT NULL,
  `site_des` text NOT NULL,
  `site_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id`, `site_title`, `site_link`, `site_key`, `site_des`, `site_img`) VALUES
(1, 'facebook', 'www.facebook.com', 'facebook login,facebook signup', 'the best social networking site', 'Screenshot (1).png'),
(2, 'Everyday Cooking Recipes - Allrecipes.com', 'https://www.allrecipes.com/recipes/1642/everyday-cooking/', 'cooking recipes,cooking food,best cooking,cooking tips,how to make best recipes,cooking service', 'Everyday Cooking Recipes. Find more than 43,470 recipes for speedy weeknight dinners, quick and easy meals, kid-pleasing snacks and desserts, and more!', 'maxresdefault.jpg'),
(3, 'Cooking for Two Recipes - Allrecipes.com', 'https://www.allrecipes.com/recipes/476/everyday-cooking/cooking-for-two/', 'cooking recipes,cooking food,best cooking,cooking tips,how to make best recipes,cooking service', 'Dinner for two is easy with these recipes for you and your sweetie. ... for Two; Cooking Chicken for Two; Cooking Breakfast for Two; Cooking Lunch for Two ...\r\n', 'maxresdefault.jpg'),
(4, 'Flipkart.comÂ® Online Shop | Get Amazing Offers on Productsâ€Ž', 'https://www.flipkart.com/?gclid=Cj0KCQiAsJfhBRCaARIsAO68ZM4vPaJf6-xielyxOgslGLBdPFNlMzevwQVjdigr_r93xfFr3tLfwxAaAqDBEALw_wcB&ef_id=Cj0KCQiAsJfhBRCaARIsAO68ZM4vPaJf6-xielyxOgslGLBdPFNlMzevwQVjdigr_r93xfFr3tLfwxAaAqDBEALw_wcB:G:s&s_kwcid=AL!739!3!260637261012!e!!g!!flipkart&semcmpid=sem_8024046704_brand_eta_goog', 'Find & Buy Everything You Need! Great Deals, Easy Returns, Hassle Free Shopping. EMI Option Available. Free & Easy Returns. Enjoy Delightful Prices. Types: Smartphones, Electronics, Home Appliances, A', 'Online shopping site', 'download (1).png'),
(5, 'Flipkart (@Flipkart) Â· Twitter', 'https://twitter.com/Flipkart?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'flipkart on twitter', 'Merry Christmas one and all! Wishing you joy and love! pic.twitter.com', 'maxresdefault (1).jpg'),
(6, 'New e-policy: Rs 5,000 crore stock may bleed Amazon, Flipkart ...', 'https://timesofindia.indiatimes.com/business/india-business/new-e-policy-rs-5000cr-stock-may-bleed-amazon-flipkart/articleshow/67295362.cms', 'flipkart online shopping', ' Both Amazon India and the Walmart-owned Flipkart are sitting on inventories worth Rs 2,000-2,500 crore each. While initial reactions to the ...\r\n', 'download.jpg'),
(7, 'Flipkart Online Shopping App â€“ Apps on Google Play', 'https://play.google.com/store/apps/details?id=com.flipkart.android&hl=en_IN', 'flipkart online shopping', 'Flipkart Online Shopping App - Download app for a delightful shopping experience. Online shopping with Flipkart is very easy as you get to shop from the ...\r\n', 'images.jpg'),
(9, 'GATE CS Topic wise preparation Notes | GeeksforGeeks', 'https://www.geeksforgeeks.org/gate-cs-notes-gq/', 'gate computer science ,gate exam', ' A Computer Science portal for geeks. It contains well written, well thought and well explained computer science and programming articles, ...\r\n', 'g1.jpg'),
(10, 'How to Prepare for GATE 2019 Computer Science Engineering (CSE)!', 'https://engineering.careers360.com/articles/how-prepare-for-gate-computer-science-engineering', 'gate computer science ,gate exam', 'How to Prepare for GATE 2019 Computer Science Engineering (CSE): Computer science is one of the most in-demand M.Tech courses at top institutes like NITs and IITs. ... It is precisely why we decided to take a closer look at GATE 2019 - How to Prepare for CSE. ... Computer Science .', 'g3.jpg'),
(11, 'Boxing - BBC Sport', 'https://www.bbc.com/sport/boxing', 'boxing,boxing match', 'The home of Boxing on BBC Sport online. Includes the latest news stories, results, fixtures, video and audio', 'download (1).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
