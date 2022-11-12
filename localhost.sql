
CREATE DATABASE IF NOT EXISTS `Rush` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `Rush`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `serialNumber` int(11) NOT NULL,
  `productId` varchar(10) NOT NULL,
  `productImage` text NOT NULL,
  `Description` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` varchar(10) NOT NULL,
  `categoryName` varchar(100) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `couponCode` varchar(10) NOT NULL,
  `Description` varchar(100) DEFAULT NULL,
  `discountType` varchar(25) NOT NULL,
  `couponAmount` float NOT NULL,
  `allowFreeShipping` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerId` varchar(10) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `otherNames` varchar(30) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `address` varchar(100) NOT NULL,
  `emailAddress` varchar(100) NOT NULL,
  `phoneNumber` varchar(18) NOT NULL,
  `companyName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` varchar(10) NOT NULL,
  `orderDate` date NOT NULL,
  `deliveryDate` date NOT NULL,
  `productId` varchar(10) NOT NULL,
  `customerId` varchar(10) NOT NULL,
  `categoryId` varchar(10) NOT NULL,
  `productPrice` float NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `packageNo` varchar(50) NOT NULL,
  `orderId` varchar(10) NOT NULL,
  `productId` varchar(10) NOT NULL,
  `deliveryDate` date NOT NULL,
  `deliveryMethod` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `paymentMethod` varchar(30) NOT NULL,
  `paymentTotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` varchar(10) NOT NULL,
  `productImage` text DEFAULT NULL,
  `productName` varchar(100) NOT NULL,
  `manufactoryDate` date NOT NULL,
  `expirationDate` date NOT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `categoryId` varchar(10) NOT NULL,
  `categoryName` varchar(100) NOT NULL,
  `productPrice` float NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `rating` varchar(10) DEFAULT NULL,
  `productStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `serialNumber` int(11) NOT NULL,
  `productId` varchar(10) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` varchar(10) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `otherNames` varchar(30) NOT NULL,
  `emailAddress` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `phoneNumber` varchar(18) NOT NULL,
  `businessName` varchar(100) DEFAULT NULL,
  `stateOfResidence` varchar(15) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `password` varchar(16) NOT NULL,
  `confirmPassword` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`serialNumber`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`couponCode`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `productId` (`productId`),
  ADD KEY `customerId` (`customerId`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`packageNo`),
  ADD KEY `orderId` (`orderId`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`serialNumber`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `serialNumber` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `serialNumber` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `products` (`productID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `products` (`productID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customerId`) REFERENCES `customers` (`customerId`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`categoryId`) REFERENCES `category` (`categoryId`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`orderId`) REFERENCES `orders` (`orderId`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `products` (`productID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `category` (`categoryId`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `products` (`productID`);
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
