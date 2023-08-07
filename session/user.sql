-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 07, 2023 at 01:57 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `live_session`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username_user` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `first_name_user` varchar(255) NOT NULL,
  `last_name_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username_user`, `password_user`, `email_user`, `first_name_user`, `last_name_user`) VALUES
(1, 'amerucci', '$2y$10$UzKO.IXvq.5qR8lbv5R5Cu7tT6oLYVS8k8kbYWQyUuQPtAJ9pPayC', 'alain@alain.fr', 'alain', 'alain'),
(2, 'kevin', '$2y$10$nZSmZPphWGe3tWjss62FgeOZeS/I3m2tj1nC2znCq6JkgLSJroCqi', 'kevin@kevin.engaleredestage', 'kevin', 'kevin'),
(3, 'loris', '$2y$10$Knzt.Q5Dohv89b8ziBiY..gAzV6HHRzzSMAYUNLnk4MJ3pzM4wcVO', 'loris@loris.fr', 'loris', 'loris'),
(4, 'fabien', '$2y$10$MRXT5qesIpEkplY52RSc0OqbcBQCopwJqdZvs8qVB7tIsILBfT1nu', 'fabien@a.fr', 'fab', 'ien');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
