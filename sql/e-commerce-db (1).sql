-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 07:01 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `productID` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPrice` varchar(255) NOT NULL,
  `productDescription` varchar(255) NOT NULL,
  `imgPath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`productID`, `productName`, `productPrice`, `productDescription`, `imgPath`) VALUES
(1, 'Oppo F11 Pro', '100', 'Size: 6.53 inches, 103.6 cm2 (~84.4% screen-to-body ratio)\r\nOS: Android 9.0 (Pie), ColorOS 6\r\nInternal: 64GB 4GB RAM, 64GB 6GB RAM, 128GB 6GB RAM eMMC 5.1', '../assets/products-picture/f11-pro.jpg'),
(3, 'Samsung Galaxy Note 10+', '500', '\r\nSize: 6.8 inches, 114.0 cm2 (~91.0% screen-to-body ratio)\r\nOS:   Android 9.0 (Pie), upgradable to Android 10, One UI 2\r\nCPU:  Octa-core (2x2.73 GHz Mongoose M4 & 2x2.4 GHz Cortex-A75 & \r\n      4x1.9 GHz Cortex-A55) - EMEA/LATAM', '../assets/products-picture/Samsung-Galaxy-Note-10.jpg'),
(4, 'iPhone 11 Pro Max', '5555', 'Size: 6.5 inches, 102.9 cm2 (~83.7% screen-to-body ratio)\r\nOS:   iOS 13, upgradable to iOS 13.5\r\nInternal: 64GB 4GB RAM, 256GB 4GB RAM, 512GB 4GB RAM NVMe', '../assets/products-picture/iphone-11-pro.jpg'),
(5, 'lenovo l340', '1000', 'Processor: Up to 9th Gen Intel Core i7-9705H OS: Windows 10 Home Graphics: Up to NVIDIA GeForce GTX 1650 Memory: Up to 16GB DIMM 4GB DDR4 + 8GB DIMM 4GB DDR4 + 4GB DIMM Storage: Up to 1TB PCIe SSD Up to 2TB HDD 16GB Intel Optane (optional) Display: 15.6\" ', '../assets/products-picture/lenovo1.jpg'),
(6, 'MSI GT75 TITAN', '1000', 'Dimensions: 427.99 x 313.94 x 30.99 mm. CPU: 2.9GHz Intel Core i9-8950HK. Graphics: Nvidia GeForce GTX 1080 (8GB GDDR5X) RAM: 32GB DDR4 (2,666MHz) Screen: 17.3-inch, FHD, IPS, G-Sync. Storage: 512GB SSD (PCIe), 1TB HDD (7,200 RPM)', '../assets/products-picture/msi.jpg'),
(7, 'ROG Strix Scar III', '1000', 'Processor: Intel Core i7-9750H. Graphics: NVIDIA GeForce RTX 2070. RAM: 16GB. Storage: 1TB SSD. Display:15.6-inch Full HD (1920x1080) IPS-level panel, 240Hz, 3ms, 100% sRGB. Ports: HDMI + 3.5mm headphone and microphone combo jack + 1x USB-C 3.1 (Gen 2) + ', '../assets/products-picture/rog.jpg'),
(8, 'OnePlus 7t Pro', '1000', 'Android 10.0; OxygenOS 10.0.4. 256GB storage, no card slot. 5.2% 1,411,798 hits. 262 Become a fan. 6.67\" 1440x3120 pixels. 48MP. 2160p. 8/12GB RAM. Snapdragon 855+ 4085mAh.', '../assets/products-picture/7t.jpg'),
(9, 'Oppo Find X', '1000', 'Android 8.1, up to Android 9.0; ColorOS 6.0. 128GB/256GB storage, no card slot. 1.5% 7,518,163 hits. 509 Become a fan. 6.42\" 1080x2340 pixels. 16MP. 2160p. 8GB RAM. Snapdragon 845. 3730mAh.', '../assets/products-picture/Oppo-Find-X.jpg'),
(10, 'PlayStation 5', '1000', 'CPU: AMD Zen 2-based CPU with 8 cores at 3.5GHz (variable frequency)\r\nGPU: 10.28 TFLOPs, 36 CUs at 2.23GHz (variable frequency)\r\nGPU architecture: Custom RDNA 2.\r\nInternal storage: Custom 825GB SSD.', '../assets/products-picture/ps5.jpg'),
(11, 'Nintendo Switch', '1000', 'CPU: Four ARM Cortex A57 cores (theoretical max 2GHz)\r\nGPU: 256 CUDA cores (theoretical max 1GHz)\r\nArchitecture: Nvidia second-generation Maxwell.\r\nMemory: 4GB.\r\n', '../assets/products-picture/switch.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL,
  `productType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `productType`) VALUES
(1, 'laptop');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `unhashed_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `middlename`, `unhashed_password`) VALUES
(3, 'i_am_speed', 'life_is_a_highway', 'nimbly2016@gmail.com', 'life_is_a_highway', 'life_is_a_highway', 'life_is_a_highway', ''),
(45, 'shlala', 'be615087a3c2cfdee88cf5349c24559331a74abfdd1b734060027f811e465c127ec0ab4beabc1821cec2b3dc32c53cc51ed270f4b0cfa4567922633962fcd717', 'shalele', 'kool', 'koool', 'kooool', 'shalala'),
(46, 'weewoo', 'c4c201c4e623822713bc52c68bffd8db48bfec0eaad2c9596b46b819465707c83e01b4e0ae4a187d0878ca74a7cd1d4c0e69d10c5fa259c44265a5665cbe62ba', 'aaa@gmail.com', 'shhot', 'bron', 'man', 'shhh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_list`
--
ALTER TABLE `product_list`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
