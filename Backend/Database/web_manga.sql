-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 02:36 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_manga`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `ID_chapter` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`ID_chapter`, `name`) VALUES
(1, 'Chap_1_Monster'),
(2, 'Chap_1_test1'),
(3, 'Chap_2_test1');

-- --------------------------------------------------------

--
-- Table structure for table `contain`
--

CREATE TABLE `contain` (
  `ID_chapter` int(11) NOT NULL,
  `ID_img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contain`
--

INSERT INTO `contain` (`ID_chapter`, `ID_img`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(2, 32),
(2, 33),
(2, 34),
(3, 35),
(3, 36);

-- --------------------------------------------------------

--
-- Table structure for table `has_chapter`
--

CREATE TABLE `has_chapter` (
  `ID_manga` int(11) NOT NULL,
  `ID_chapter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `has_chapter`
--

INSERT INTO `has_chapter` (`ID_manga`, `ID_chapter`) VALUES
(1, 1),
(2, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `image_content`
--

CREATE TABLE `image_content` (
  `ID_img` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_content`
--

INSERT INTO `image_content` (`ID_img`, `path`) VALUES
(1, 'https://drive.google.com/uc?export=view&id=1IsoWDKMZy5QFxwv8TEtXC6q4otoi_cId'),
(2, 'https://drive.google.com/uc?export=view&id=1jdCxfMFlsPC7cUj5Qke5ZHZ-tgQqeo-0'),
(3, 'https://drive.google.com/uc?export=view&id=1xmJzl34XbTLtGw78xXQnyxWBzv6bguOh'),
(4, 'https://drive.google.com/uc?export=view&id=17f61NXBh4p5I0PHlgoj-W4vh8veYX1JG'),
(5, 'https://drive.google.com/uc?export=view&id=1L-Oyy-ivphI_1At9CYIcMmTGKefPVfIL'),
(6, 'https://drive.google.com/uc?export=view&id=1K52q5PCmI4t_atAzguQeVRbfYw9nziNS'),
(7, 'https://drive.google.com/uc?export=view&id=10fOGwmzkT4PVugqj4iPBVqFoNatwMhes'),
(8, 'https://drive.google.com/uc?export=view&id=1eSVdVHW7z_gRfz-V4A-cCUs6FCHkuEIV'),
(9, 'https://drive.google.com/uc?export=view&id=1h79eEr8G2qKo6QPzBuQTm98xj3FjGcZs'),
(10, 'https://drive.google.com/uc?export=view&id=1mRq-PS406Ia3RwDPQ8WJTzVSU9Kj3G4r'),
(11, 'https://drive.google.com/uc?export=view&id=1lEW8EIMev2Z3bJq1m9zhsVUlqXJ2PFto'),
(12, 'https://drive.google.com/uc?export=view&id=1MhPk7P8aRxcUPLCUSkYnCmK8glN2cZ26'),
(13, 'https://drive.google.com/uc?export=view&id=15G4jaFHZfZ30p2-ogLud_7xp-nsiROV_'),
(14, 'https://drive.google.com/uc?export=view&id=1Gxqj4HFOFcmsHBohcEA-AyM8L0BpQo0f'),
(15, 'https://drive.google.com/uc?export=view&id=1JOVdwAPCXPCtzNGpBCILzt93-wc5Jguz'),
(16, 'https://drive.google.com/uc?export=view&id=13f1il8xPS0UL26T-gkuqVAml4dg2y1Fr'),
(17, 'https://drive.google.com/uc?export=view&id=1hiailg5_z8oGrmky4hEZRoePjRaA3hR_'),
(18, 'https://drive.google.com/uc?export=view&id=1HKP0UDw2wuU-3vKAEHHwX2tfILAmUdDG'),
(19, 'https://drive.google.com/uc?export=view&id=1RCAX18uBNS7pAM-s_caRGFAdC4RE-3L0'),
(20, 'https://drive.google.com/uc?export=view&id=13jzmQuqBit8malHye-hU-aQPMc5t4ucs'),
(21, 'https://drive.google.com/uc?export=view&id=1ed6SItL1w8Toe61dqMk0wdNe4l7RR888'),
(22, 'https://drive.google.com/uc?export=view&id=17cdsN0sa4g2_yE9lujNz3Ay1kDFljAXi'),
(23, 'https://drive.google.com/uc?export=view&id=1iur9isMDnYqanN5su29JyrCi81epAo9j'),
(24, 'https://drive.google.com/uc?export=view&id=1DYYn7NP3TW9oYUQzJ73P5eZ8tgcbppjr'),
(25, 'https://drive.google.com/uc?export=view&id=1XTbQZx-z4fnnMKJ2f0QkVvR3rpLpawFF'),
(26, 'https://drive.google.com/uc?export=view&id=1PTcf_NLVA90e_kpWa72qxKETjKc-xguw'),
(27, 'https://drive.google.com/uc?export=view&id=1GCg7x74gyY-BMAd53lMvvsQ3QE1lfVoi'),
(28, 'https://drive.google.com/uc?export=view&id=1EcDcc2dv5Lp8zREn0h1EtnA7ezNNy0Tb'),
(29, 'https://drive.google.com/uc?export=view&id=1Rx0gzxqhlFeZZPYsp6EZJXufR_SLTxkd'),
(30, 'https://drive.google.com/uc?export=view&id=1D_cMhJuXiptxQxHr7CWqHSpLpKsMhymY'),
(31, 'https://drive.google.com/uc?export=view&id=1kZqLDzGkNQaCDMjnihzAB3HZzeCcjMVK'),
(32, 'img1_of_chapter1_test1'),
(33, 'img2_of_chapter1_test1'),
(34, 'img3_of_chapter1_test1'),
(35, 'img1_of_chapter2_test1'),
(36, 'img2_of_chapter2_test1');

-- --------------------------------------------------------

--
-- Table structure for table `manga`
--

CREATE TABLE `manga` (
  `ID_manga` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `numberOfRead` int(11) NOT NULL,
  `thumbnail` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manga`
--

INSERT INTO `manga` (`ID_manga`, `name`, `numberOfRead`, `thumbnail`, `description`) VALUES
(1, 'Monster', 0, 'https://drive.google.com/uc?export=view&id=1tAar0d3LlUktrYWcIuXownEM8r91cf4G', 'Trong thế giới ngành y đầy dẫy bất công, mạng sống con người không bình đẳng, các bệnh nhân nổi tiếng và nhiều tiền được ưu tiên chữa trị, bác sĩ Tenma ngày nọ quyết định cãi lại cấp trên, làm theo lương tâm mình để cứu sống một bé trai mồ côi. Không ngờ hành động này lại vô tình thả một con quái vật mất tính người ra ngoài và gây ra nhiều hậu quả khủng khiếp mười năm sau.'),
(2, 'test_manga_1', 0, 'thumbnail_for_test1', 'Dùng để kiểm tra query');

-- --------------------------------------------------------

--
-- Table structure for table `reader`
--

CREATE TABLE `reader` (
  `ID_reader` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reader`
--

INSERT INTO `reader` (`ID_reader`, `username`, `pwd`) VALUES
(1, 'test1', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`ID_chapter`);

--
-- Indexes for table `contain`
--
ALTER TABLE `contain`
  ADD KEY `chapter_has_img_fk` (`ID_chapter`),
  ADD KEY `img_in_chapter_fk` (`ID_img`);

--
-- Indexes for table `has_chapter`
--
ALTER TABLE `has_chapter`
  ADD KEY `manga_has_chapter_fk` (`ID_manga`),
  ADD KEY `chapter_in_manga` (`ID_chapter`);

--
-- Indexes for table `image_content`
--
ALTER TABLE `image_content`
  ADD PRIMARY KEY (`ID_img`);

--
-- Indexes for table `manga`
--
ALTER TABLE `manga`
  ADD PRIMARY KEY (`ID_manga`);

--
-- Indexes for table `reader`
--
ALTER TABLE `reader`
  ADD PRIMARY KEY (`ID_reader`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `ID_chapter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `image_content`
--
ALTER TABLE `image_content`
  MODIFY `ID_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `manga`
--
ALTER TABLE `manga`
  MODIFY `ID_manga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reader`
--
ALTER TABLE `reader`
  MODIFY `ID_reader` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contain`
--
ALTER TABLE `contain`
  ADD CONSTRAINT `chapter_has_img_fk` FOREIGN KEY (`ID_chapter`) REFERENCES `chapter` (`ID_chapter`),
  ADD CONSTRAINT `img_in_chapter_fk` FOREIGN KEY (`ID_img`) REFERENCES `image_content` (`ID_img`);

--
-- Constraints for table `has_chapter`
--
ALTER TABLE `has_chapter`
  ADD CONSTRAINT `chapter_in_manga` FOREIGN KEY (`ID_chapter`) REFERENCES `chapter` (`ID_chapter`),
  ADD CONSTRAINT `manga_has_chapter_fk` FOREIGN KEY (`ID_manga`) REFERENCES `manga` (`ID_manga`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
