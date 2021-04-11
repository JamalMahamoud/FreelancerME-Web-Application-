-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2020 at 05:17 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `19119509`
--
CREATE DATABASE IF NOT EXISTS `19119509` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `19119509`;

-- --------------------------------------------------------

--
-- Table structure for table `Booking`
--

CREATE TABLE `Booking` (
  `Bookind_id` int(5) NOT NULL,
  `Booking_jobseeker_id` int(5) NOT NULL,
  `Booking_customer` varchar(200) NOT NULL,
  `Booking_email` varchar(200) NOT NULL,
  `Booking_desc` text NOT NULL,
  `Booking_status` varchar(200) NOT NULL DEFAULT 'Waiting for approval',
  `Booking_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Booking`
--

INSERT INTO `Booking` (`Bookind_id`, `Booking_jobseeker_id`, `Booking_customer`, `Booking_email`, `Booking_desc`, `Booking_status`, `Booking_date`) VALUES
(18, 20, 'Bwoyer Lamlat', 'Bwoyer Lamlat\'Lamalat@gmail.com', 'Hello i need you to make my nail a let be long than usual is that fine', 'approve', '2020-12-23'),
(19, 3, 'jamal', 'jamal\'Humu@gmail.com', 'em ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo doloru', 'approve', '2020-12-10'),
(27, 7, 'ss', 'ss\'ss', 'sss', 'approve', '2020-12-18'),
(28, 9, 'kumi heil', 'kumi heil\'Humu@gmail.com', 'just the usual thanks', 'approve', '2020-12-11'),
(29, 9, 'kumi heil', 'kumi heil\'Humu@gmail.com', 'just the usual thanks', 'approve', '2020-12-11'),
(32, 6, 'Humu', 'Humu\'sss', '', 'approve', '2020-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `industry`
--

CREATE TABLE `industry` (
  `role_id` int(11) NOT NULL,
  `role_title` varchar(225) NOT NULL,
  `role_image` text NOT NULL,
  `role_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industry`
--

INSERT INTO `industry` (`role_id`, `role_title`, `role_image`, `role_description`) VALUES
(1, 'Domestic and Commercial', 'plumber2.jpg', 'Are you a small business or an individual who needs that boiler fix. Highly train staff at you convenience '),
(2, 'Beauty Technician', 'Afro-Hair-stylist.jpg', 'looking for some to do your hair, on-demand, search through Beauty Technician \r\nready for you, at a click of a button;'),
(3, 'Hospitality services ', 'cleaner.jpg', 'Experiences and well trained Hospitality staff on-demand, ready to hire when you need them.');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE `jobseeker` (
  `jobseeker_Id` int(11) NOT NULL,
  `jobseeker_Name` varchar(100) NOT NULL,
  `jobseeker_description` varchar(300) NOT NULL,
  `jobseker_wage` varchar(500) NOT NULL,
  `jobseeke_service` varchar(300) NOT NULL,
  `jobseeker_tag` varchar(300) NOT NULL,
  `jobseeker_availability` varchar(35) NOT NULL,
  `Role_ID` int(2) NOT NULL,
  `jobseeker_image` text NOT NULL DEFAULT 'avatar.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`jobseeker_Id`, `jobseeker_Name`, `jobseeker_description`, `jobseker_wage`, `jobseeke_service`, `jobseeker_tag`, `jobseeker_availability`, `Role_ID`, `jobseeker_image`) VALUES
(2, 'Musfira Tugha', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit congue pretium. Integer mattis, nulla eget hendrerit malesuada, tortor odio pretium urna            ', '£10 per hour ', '  Makes up artist ', 'beauty,makeup', '2020-11-02', 1, 'musfira.jpg '),
(3, 'John smith', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit congue pretium. Integer mattis, nulla eget hendrerit malesuada, tortor odio pretium urna        ', '£8.90', '  plumber', 'domestic services', '2020-11-04', 1, 'plumber2.jpg'),
(4, 'Eva smith', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit congue pretium. Integer mattis, nulla eget hendrerit malesuada, tortor odio pretium urna  ', '£9.50', 'Driving instructor', 'Driving instructor', '2020-11-07', 1, 'driving2.jpg'),
(5, 'Christian Bale ', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit congue pretium. Integer mattis, nulla eget hendrerit malesuada, tortor odio pretium urna  ', '£8.50', 'Electrician', 'Domestic services ', '2020-11-09', 1, 'ecl.jpg'),
(6, 'Robert smith ', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit congue pretium. Integer mattis, nulla eget hendrerit malesuada, tortor odio pretium urna  ', '£8.50', 'cleaner', 'Housekeeping operative ', '2020-11-04', 3, 'cleaner2.jpg'),
(7, 'David smith ', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit congue pretium. Integer mattis, nulla eget hendrerit malesuada, tortor odio pretium urna  ', '£12.98', 'Teacher', 'Educator', '2020-11-09', 1, 'carpenter-700x467.jpg'),
(8, 'molly smith', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit congue pretium. Integer mattis, nulla eget hendrerit malesuada, tortor odio pretium urna  ', '£8', 'receptionist', 'costumer assistant ', '2020-11-07', 3, 'rec.jpg'),
(9, 'fatima udin', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit congue pretium. Integer mattis, nulla eget hendrerit malesuada, tortor odio pretium urna  ', '£10.50', '  baker', 'hospitality services ', '2020-11-04', 1, 'baker.jpg'),
(10, 'Mohammed Ibrahim', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget ultricies ligula. Nullam tempor lacinia tellus, ac mollis augue porttitor vitae. Integer mattis erat eu nulla convallis, id cursus arcu pulvinar. Maecenas e', '£8.98', 'plumber', 'domestic services', '2020-11-07', 3, 'plumber.jpg'),
(11, 'Matthew street', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget ultricies ligula. Nullam tempor lacinia tellus, ac mollis augue porttitor vitae. Integer mattis erat eu nulla convallis, id cursus arcu pulvinar. Maecenas e', '£9.70', 'personal trainer ', 'recreation services ', '2020-11-02', 2, 'pt.jpg'),
(18, 'LIsa Monda', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit congue pretium. Integer mattis, nulla eget hendrerit malesuada, tortor odio pretium urna.                                          ', '£9.0', '    Cares ', 'Carer,Domestic', 'Actively available ', 1, 'carer.jpg'),
(19, 'Aluma Lima', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit congue pretium. Integer mattis, nulla eget hendrerit malesuada, tortor odio pretium urna ', '£9', 'It Technician ', 'IT support,dmoestic', '', 1, 'it.jpg'),
(20, 'Alima Juma', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit congue pretium. Integer mattis, nulla eget hendrerit malesuada, tortor odio pretium urna       ', '£9', 'nail technician ', 'beauty', 'Actively available ', 2, 'nt.jpg'),
(21, 'Lonj Kuna', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit congue pretium. Integer mattis, nulla eget hendrerit malesuada, tortor odio pretium urna      ', '£9.50', '  House keeping operative', 'cleaner', 'Actively available ', 1, 'avatar.jpg'),
(22, 'Aluma hakim', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit congue pretium. Integer mattis, nulla eget hendrerit malesuada, tortor odio pretium urna                  ', '£9.50', '      House keeping operative', 'cleaner', 'Actively available ', 1, '312664_original.jpg'),
(24, 'Kojo Long', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus blandit congue pretium. Integer mattis, nulla eget hendrerit malesuada, tortor odio pretium urna              ', '£9', '  grass cutter', 'grass cuter', 'Currently working', 1, 'ct.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(5) NOT NULL,
  `review_jobseeker_id` int(5) NOT NULL,
  `review_customer` varchar(200) NOT NULL,
  `review_email` varchar(200) NOT NULL,
  `review_comment` text NOT NULL,
  `review_status` varchar(200) NOT NULL DEFAULT 'Waiting for approval',
  `review_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `review_jobseeker_id`, `review_customer`, `review_email`, `review_comment`, `review_status`, `review_date`) VALUES
(6, 11, 'Lukman monda', 'Lukman monda\'Lokamn@gmnail.com', 'An amazing service, very friendly and understanding. after working with for a month i can highly recommend  him. ', 'approve', '2020-12-11'),
(8, 11, 'Mondab Hina', 'Mondab Hina\'Lokamn@gmnail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.', 'approve', '2020-12-11'),
(10, 20, 'Lukman monda', 'Lukman monda\'Lokamn@gmnail.com', 't amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil d', 'approve', '2020-12-11'),
(11, 21, '', '\'', '      ', 'approve', '2020-12-11'),
(12, 21, 'Anima Franciscaa', 'Anima Franciscaa\'Anima@gmnail.com', 'this staff was amazing did everything, he think outside the box ', 'approve', '2020-12-12'),
(13, 3, 'test ', 'test \'Lokamn@gmnail.com', 'Mon', 'approve', '2020-12-12'),
(14, 10, 'Drake monta', 'Drake monta\'dreake@gmail.com', 'sque tempor, libero in efficitur suscipit, tellus nunc maximus diam, ut commodo metus purus id turpis. Cras eget dignissim ligula, vitae auctor dui. Aenean vel lorem enim. Suspendisse porttitor massa vel vulputate commodo. Sed consequat nulla ac auctor lacinia. ', 'approve', '2020-12-12'),
(16, 4, 'Lisa Obeng', 'Lisa Obeng\'Lisa@gmnail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel tempus quam. Donec nec elit non diam maximus pharetra. Quisque accumsan nunc ac ornare dignissim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia ', 'approve', '2020-12-13'),
(17, 9, 'bright', 'bright\'bright@gmail.com', 'i love your services thanks for everything', 'approve', '2020-12-15'),
(18, 9, 'kumi', 'kumi\'kumi@hotmail.com', 'you was amazing thanks very much', 'approve', '2020-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(300) NOT NULL,
  `user_paswword` varchar(300) NOT NULL,
  `user_firstname` varchar(300) NOT NULL,
  `user_lastname` varchar(300) NOT NULL,
  `user_email` varchar(300) NOT NULL,
  `user_role` varchar(300) NOT NULL DEFAULT 'customer',
  `randsalt` varchar(255) NOT NULL DEFAULT '$2y$10$krgudvhstfgeilvgsteo67'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_paswword`, `user_firstname`, `user_lastname`, `user_email`, `user_role`, `randsalt`) VALUES
(32, 'jay', '$2y$10$krgudvhstfgeilvgsteo6uL9v7fc.g6BvAtqho4rL4UL94uffnl0m', 'Jay', '  Patel', 'jay@gmail.com', '                admin    ', '$2y$10$krgudvhstfgeilvgsteo67'),
(33, 'jamal', '$2y$10$krgudvhstfgeilvgsteo6uiEm6vBsnQXyerazvmO6K0FBu3201yF2', 'Jamal', 'Mahamoud', 'jamalm35@gmail.com', 'customer', '$2y$10$krgudvhstfgeilvgsteo67'),
(52, 'bright', '$2y$10$krgudvhstfgeilvgsteo6ugb.omMFGxH1Sti/lgQARoFDHRc8w8Nu', ' bright', ' Adjey', 'sss@ff.com', '                    admin     ', '$2y$10$krgudvhstfgeilvgsteo67'),
(53, 'mon2', '$2y$10$krgudvhstfgeilvgsteo6uNHNkApt1XGbaxzBPbd/wDLEQsctYtj6', 'Monab', 'Mahamoud', 'mon@gmail.com', 'customer', '$2y$10$krgudvhstfgeilvgsteo67'),
(54, 'test2', '$2y$10$krgudvhstfgeilvgsteo6uYi4kpWQ8EKRfX7ZGzSn0chZUiwp1JAi', 'test', 'Demo', 'kk@gmail.com', 'customer', '$2y$10$krgudvhstfgeilvgsteo67'),
(55, 'test', '$2y$10$krgudvhstfgeilvgsteo6uzWt8RSmMDUZFQkv3ZnDsbz4SVqftc6O', 'demo', 'Demo', 'ddd@GMail.com', 'customer', '$2y$10$krgudvhstfgeilvgsteo67'),
(56, 'vv', '$2y$10$krgudvhstfgeilvgsteo6u2um21LhxC4Xdj9WdNEeUZFouDt4aQee', 'vv', 'vv', 's@gmail.com', 'customer', '$2y$10$krgudvhstfgeilvgsteo67');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Booking`
--
ALTER TABLE `Booking`
  ADD PRIMARY KEY (`Bookind_id`);

--
-- Indexes for table `industry`
--
ALTER TABLE `industry`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `cat_id` (`role_id`);

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`jobseeker_Id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Booking`
--
ALTER TABLE `Booking`
  MODIFY `Bookind_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `industry`
--
ALTER TABLE `industry`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `jobseeker_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
