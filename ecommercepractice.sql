-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 08:08 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommercepractice`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`Id`, `Name`, `Description`) VALUES
(2, 'Free Deleivery', 'Abckkd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `IsActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `Id` int(11) NOT NULL,
  `CatName` varchar(30) NOT NULL,
  `CatDescription` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`Id`, `CatName`, `CatDescription`) VALUES
(2, 'T Shirts', 'HelloWorld!'),
(3, 'Mobile', 'HelloWorld!'),
(4, 'Watch', 'Hello World!'),
(6, 'Facewash', 'Hello World!');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Subject` varchar(15) NOT NULL,
  `Message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`Id`, `Name`, `Email`, `Subject`, `Message`) VALUES
(1, 'Mustafa Khan', 'mustafanana431@gmail.com', 'Brand Approval', 'Hello World'),
(3, 'Haseeb Akram', 'haseeb@gmail.com', 'Abc', 'werfdfhgjhkjhpio;');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `Emp_Id` int(11) NOT NULL,
  `Emp_Name` varchar(50) NOT NULL,
  `Emp_Email` varchar(35) NOT NULL,
  `Emp_Address` varchar(100) NOT NULL,
  `Emp_Number` varchar(16) NOT NULL,
  `Emp_Gender` varchar(4) NOT NULL,
  `Emp_Salaray` bigint(20) NOT NULL,
  `Emp_Depart` varchar(30) NOT NULL,
  `Emp_Image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`Emp_Id`, `Emp_Name`, `Emp_Email`, `Emp_Address`, `Emp_Number`, `Emp_Gender`, `Emp_Salaray`, `Emp_Depart`, `Emp_Image`) VALUES
(2, 'Anas', 'anas44@gmail.com', 'Islamabad', '034356887654332', 'Male', 345, 'Hr', '../../EmployeeImages/7.jpg'),
(3, 'Mustafa', 'mustafanana431@gmail.com', 'Karachi', '0324858903', 'Male', 3367788543, 'HR', '../../EmployeeImages/Abc.jpg'),
(4, 'Ali', 'moeed12@gmail.com', 'Islamabad', '032314546645', 'Male', 450000, 'Sales', '../../EmployeeImages/Screenshot (5).png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_information`
--

CREATE TABLE `tbl_information` (
  `Id` int(11) NOT NULL,
  `Adress` varchar(300) NOT NULL,
  `Phone` varchar(16) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_information`
--

INSERT INTO `tbl_information` (`Id`, `Adress`, `Phone`, `Email`) VALUES
(1, 'Islamabad', '74892', 'mustafanana433@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `Product_Id` int(11) NOT NULL,
  `Product_Name` varchar(50) NOT NULL,
  `Product_Price` bigint(35) NOT NULL,
  `Product_Quantity` tinyint(150) NOT NULL,
  `Product_Category` int(11) NOT NULL,
  `Product_Image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`Product_Id`, `Product_Name`, `Product_Price`, `Product_Quantity`, `Product_Category`, `Product_Image`) VALUES
(16, 'Dove Facewash', 400, 100, 6, '../../ProductImages/facewash dove.jpeg'),
(17, 'Nivea Men Facewash', 600, 100, 6, '../../ProductImages/facewash Nivea men.jpg'),
(18, 'Ponds Facewash', 650, 100, 6, '../../ProductImages/facewash ponds.jpg'),
(19, 'Clinique Facewash', 1150, 100, 6, '../../ProductImages/facewash Clinique.avif'),
(20, 'Loreal Facewash', 850, 100, 6, '../../ProductImages/facewash loreal.jpg'),
(21, 'Garnier Facewash', 650, 100, 6, '../../ProductImages/facewash Garnier.jpeg'),
(22, 'Fila T-Shirt', 1200, 100, 2, '../../ProductImages/T Shirt Fila.jpeg'),
(23, 'Gucci T-Shirt', 1500, 100, 2, '../../ProductImages/T Shirt Gucci.jpeg'),
(24, 'Polo T-Shirt', 900, 50, 2, '../../ProductImages/T Shirt Polo.jpg'),
(26, 'Balr T-Shirt', 750, 70, 2, '../../ProductImages/T Shirt Balr.jpg'),
(27, 'Printed T-Shirt', 1000, 100, 2, '../../ProductImages/T Shirt Printed.jpg'),
(28, 'Lige Watch', 2500, 50, 4, '../../ProductImages/Watch Lige.jpg'),
(29, 'Military Watch', 3000, 100, 4, '../../ProductImages/Watch Military.jpg'),
(30, 'BinBond Watch', 4500, 50, 4, '../../ProductImages/Watch BinBond.png'),
(31, 'Louts Watch', 5500, 60, 4, '../../ProductImages/Watch Louts.jpg'),
(32, 'Olevs Watch', 7000, 70, 4, '../../ProductImages/Watch Olevs.jpg'),
(33, 'I Phone 13 ', 500000, 30, 3, '../../ProductImages/Mobile I Phone.jpeg'),
(34, 'Samsung Galaxy', 450000, 50, 3, '../../ProductImages/Mobile Samsung.jpeg'),
(35, 'Vivo Y Series', 70000, 50, 3, '../../ProductImages/Mobile Vivo.jpg'),
(36, 'Nokia Smart Phone', 45000, 50, 3, '../../ProductImages/Mobile Nokia.jpeg'),
(37, 'Huawei', 100000, 40, 3, '../../ProductImages/Mobile huawei.gif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`Emp_Id`);

--
-- Indexes for table `tbl_information`
--
ALTER TABLE `tbl_information`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`Product_Id`),
  ADD KEY `Product_Category` (`Product_Category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `Emp_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_information`
--
ALTER TABLE `tbl_information`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `Product_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`Product_Category`) REFERENCES `tbl_category` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
