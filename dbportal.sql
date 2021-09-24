-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2021 at 07:55 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `password`, `role`, `timestamp`) VALUES
(5, 'admin', 'admin', '$2y$10$/fP5kSWhzYkDP6XivfFxI.gs/3NSD.shfqy3WSbvBTNM67cpL55J2', 1, '2021-09-21 12:50:15'),
(6, 'arvin', 'arvin', '$2y$10$dtoH4HWFKnWtr8AoEcN/muo5rIcC/sZllDzaZADHNoy4pv00KlwOS', 2, '2021-09-21 13:00:10'),
(7, 'bagas', 'bagas', '$2y$10$alcmIarFXdqyW2O.l7at4Ov9qfnULsFqFc3QhJsNrBvv/swAHXt2i', 1, '2021-09-21 13:53:42'),
(8, 'user', 'user', '$2y$10$47p5SvJiO7I5k3fPJ1gkEe.d6EpJKeDvp/ckDXSoofDCg8in1267i', 0, '2021-09-21 15:00:40'),
(9, 'user1', 'user', '$2y$10$q5tRM8gX0WejXHW0VDZ4YO6gwkNA1JnNME2FEid4XTbJH4e7HXYxS', 0, '2021-09-21 15:00:55'),
(10, 'user11', 'user', '$2y$10$KzhCwNnVB9SDLmeguTSeleM0V1QiJe9s8d1aSFcDL60oX8uv28NFK', 0, '2021-09-21 15:01:26'),
(11, 'asu', 'asu', '$2y$10$lRvxSqW90ogXl20Tmf.GIORxYc4aPgYuDbalfGzVze9pM0EHP7bgu', 0, '2021-09-21 15:01:34'),
(12, 'a', 'a', '$2y$10$t3WFDcuTjMM.xbUP/0M9ku5YUIKXaqIJEl2fyyE4dYMwCzOiP0DGG', 1, '2021-09-21 15:02:34'),
(13, 'v', 'v', '$2y$10$scBeDBrAj5Yqr8i5vYxtX.dhfXDl0tXzndiKLq98GphtopRw9KhHm', 1, '2021-09-21 15:02:42'),
(14, 'yusuf', 'yusuf', '$2y$10$7rh.boXmdwLRkjZFsdV/8.MPfgDNmhBBaxajiCbp3uizVtJlUMzL6', 1, '2021-09-21 15:03:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
