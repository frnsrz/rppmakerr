-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 09:25 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rppmaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_member` int(11) NOT NULL,
  `username` varchar(30) CHARACTER SET latin2 NOT NULL,
  `fullname` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nip` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` text NOT NULL,
  `password` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_member`, `username`, `fullname`, `nip`, `email`, `password`) VALUES
(16, 'admin', 'Frans Rizky', '55675645454', 'fransrizky62@gmail.com', '$2y$10$OPhQOM/A/iRnZlXoJ8x1Zum8LkyJcjEoCna3hHuylGENo0Wa69eN6'),
(19, 'frans', 'Frans Rizky', '9695857474', 'fransrizky62@gmail.com', '$2y$10$NFGlF5POxfcJtwwxivenG.eEGyGDyfDtnUAYgjbY2BMzTLgOhBiyS'),
(20, 'bima', 'Bima Dewantoro', '1122334455', 'bima@mail.com', '$2y$10$ZMbvgDZPvBuuAu0vcf3ne.tkaGTxj1mO9ILrEp9gzVmK2q72khi8a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_member`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
