-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Sep 12, 2021 at 10:13 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swasthrail`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `age` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `cpassword` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `blood_group` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `hospital` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `zip` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `mobileno` varchar(250) NOT NULL,
  `relation` varchar(250) NOT NULL,
  `emaill` varchar(250) NOT NULL,
  `alcohol` varchar(250) NOT NULL,
  `smoke` varchar(250) NOT NULL,
  `need` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `mobile`, `age`, `email`, `password`, `cpassword`, `dob`, `blood_group`, `gender`, `hospital`, `city`, `state`, `zip`, `firstname`, `lastname`, `mobileno`, `relation`, `emaill`, `alcohol`, `smoke`, `need`) VALUES
(1, 'Manvi', 'chauhan', '6276998634', '20', 'suni@gmail.com', '123', '123', '2021-04-30', 'AB+', 'Female', 'vhvhvh', 'NARWAR', 'Madhya Pradesh', '897654', 'Manvi', 'chauhan', '6232769986', 'sjdjh', 'suni@gmail.com', '1-2glasses/day', '0-1pack/day', 'blood food'),
(2, 'Manvi', 'chauhan', '6232908786', '20', 'iksha@gmail.com', '123', '123', '2021-04-30', 'AB+', 'Female', 'vhvhvh', 'NARWAR', 'Madhya Pradesh', '897654', 'Manvi', 'chauhan', '6232769986', 'sjdjh', 'iksha@gmail.com', '1-2glasses/day', '0-1pack/day', 'blood food'),
(3, 'nandini', 'chauhan', '1264009473', '21', 'sunheri@gmail.com', '2222', '2222', '2020-04-09', 'A-', 'Female', 'vhvhvh', 'NARWAR', 'Madhya Pradesh', '897654', 'Manvi', 'chauhan', '6232769986', 'sjdjh', 'sunheri@gmail.com', '1-2glasses/day', '1-2pack/day', 'blood');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_cards`
--

CREATE TABLE `hospital_cards` (
  `hos_id` int(8) NOT NULL,
  `hos_name` tinytext NOT NULL,
  `hos_address` varchar(255) NOT NULL,
  `hos_contact` varchar(255) NOT NULL,
  `hos_link` varchar(255) NOT NULL,
  `hos_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital_cards`
--

INSERT INTO `hospital_cards` (`hos_id`, `hos_name`, `hos_address`, `hos_contact`, `hos_link`, `hos_img`) VALUES
(1, 'Apollo spectra Hospital', 'Gwalior, Vikas Nagar 18, Kila Gate Road, Vikas Nagar, Near Sai Baba Mandir, Gwalior, Madhya Pradesh 474002', '0751-245 4600', 'https://www.apollospectra.com/our-hospitals/gwalior/vikas-nagar/best-hospital-in-vikas-nagar-gwalior/', 'img/Apollo.jpg'),
(3, 'Agrawal Hospital', 'H-204 Madhav Nagar, Gwalior, Madhya Pradesh, 474002', '2423 700', 'http://www.ahrihospital.com/', 'img/h4.jpg'),
(4, 'Arora Hospital', '20, Lalitpur Colony, Lashkar, Madhya Pradesh, 474009', '2372 435', 'https://www.facebook.com/200201544131025/posts/arora-hospitallalitpur-colonygwalior/290866688397843/', 'img/ho-4.jpg'),
(5, 'Chandak Hospital', 'No: 14, Hospital Road, Gwalior, Madhya Pradesh, 474009', '2324 131', 'https://www.facebook.com/pages/category/Hospital/Chandak-Hospital-and-Research-Institute-252287644956670/', 'img/h5.jpg'),
(6, 'BIMR Hospital', 'BIMR Hospitals Surya Mandir Road, Residency, Gwalior - 474005', '0751-2405 617', 'https://www.bimrhospital.com/', 'img/ho-2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_cards`
--
ALTER TABLE `hospital_cards`
  ADD PRIMARY KEY (`hos_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hospital_cards`
--
ALTER TABLE `hospital_cards`
  MODIFY `hos_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
