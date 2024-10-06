-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 06, 2024 lúc 08:06 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `salesmanagement`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(11) NOT NULL,
  `CategoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`CategoryID`, `CategoryName`) VALUES
(1, 'Snacks'),
(2, 'Fruits'),
(3, 'Organic Food');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoices`
--

CREATE TABLE `invoices` (
  `InvoiceID` int(11) NOT NULL,
  `OrderID` int(11) DEFAULT NULL,
  `InvoiceDate` datetime DEFAULT current_timestamp(),
  `TotalAmount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `invoices`
--

INSERT INTO `invoices` (`InvoiceID`, `OrderID`, `InvoiceDate`, `TotalAmount`) VALUES
(1, 1, '2024-09-28 21:31:31', 51.00),
(2, 2, '2024-09-28 21:31:31', 3.75);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetails`
--

CREATE TABLE `orderdetails` (
  `OrderDetailID` int(11) NOT NULL,
  `OrderID` int(11) DEFAULT NULL,
  `ProductID` int(11) DEFAULT NULL,
  `Quantity` int(11) NOT NULL,
  `UnitPrice` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orderdetails`
--

INSERT INTO `orderdetails` (`OrderDetailID`, `OrderID`, `ProductID`, `Quantity`, `UnitPrice`) VALUES
(2, 1, 2, 10, 0.50),
(3, 2, 3, 5, 0.75),
(7, 9, 2, 1, 0.50),
(8, 9, 6, 1, 0.75),
(9, 10, 2, 1, 0.50),
(10, 10, 6, 1, 0.75),
(11, 11, 2, 1, 0.50),
(12, 12, 3, 1, 0.75),
(13, 13, 3, 1, 0.75),
(14, 14, 6, 2, 0.75),
(15, 14, 7, 1, 0.60),
(16, 15, 21, 3, 0.60);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `OrderDate` datetime DEFAULT current_timestamp(),
  `Status` enum('Pending','Shipped','Delivered','Cancelled') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`OrderID`, `CustomerID`, `OrderDate`, `Status`) VALUES
(1, 2, '2024-09-28 21:31:31', 'Pending'),
(2, 3, '2024-09-28 21:31:31', 'Shipped'),
(3, 1, '2024-10-05 17:35:31', 'Pending'),
(9, 1, '2024-10-05 17:59:11', 'Pending'),
(10, 1, '2024-10-05 18:00:39', 'Pending'),
(11, 1, '2024-10-05 18:01:57', 'Pending'),
(12, 1, '2024-10-05 18:02:24', 'Pending'),
(13, 1, '2024-10-05 18:03:29', 'Pending'),
(14, 1, '2024-10-05 18:50:24', 'Pending'),
(15, 1, '2024-10-06 08:03:38', 'Pending');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `Description` text DEFAULT NULL,
  `Price` decimal(10,2) NOT NULL,
  `CategoryID` int(11) DEFAULT NULL,
  `Stock` int(11) DEFAULT 0,
  `Rating` decimal(3,2) DEFAULT NULL,
  `SKU` varchar(50) DEFAULT NULL,
  `ImageURL` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `Description`, `Price`, `CategoryID`, `Stock`, `Rating`, `SKU`, `ImageURL`) VALUES
(1, 'Lay\'s Potato Chips Onion Flavored', 'Crispy, delicious potato chips with onion flavor.', 25.00, 1, 45, 4.70, 'EB4DRP', 'assets/images/thumbs/product-img6.png'),
(2, 'Banana', 'Fresh ripe bananas from tropical regions.', 0.50, 2, 150, 4.50, 'BN123', 'assets/images/thumbs/product-img1.png'),
(3, 'Apple', 'Juicy red apples, perfect for a healthy snack.', 0.75, 2, 100, 4.60, 'AP456', 'assets/images/thumbs/product-img1.png'),
(4, 'Orange', 'Sweet and tangy oranges full of vitamin C.', 0.60, 2, 120, 4.40, 'OR789', 'assets/images/thumbs/product-img8.png'),
(5, 'Ostart', 'Sweet and tangy oranges full of vitamin C.', 0.60, 2, 120, 4.40, 'OR789', 'assets/images/thumbs/product-img9.png'),
(6, 'Bà Tuyết', 'Juicy red apples, perfect for a healthy snack.', 0.75, 1, 100, 4.60, 'AP456', 'assets/images/thumbs/product-img6.png'),
(7, 'Trái Cây Ác Quỷ', 'Sweet and tangy oranges full of vitamin C.', 0.60, 2, 120, 4.40, 'OR789', 'assets/images/thumbs/product-img10.png'),
(8, 'Mariboy', 'Sweet and tangy oranges full of vitamin C.', 0.60, 2, 120, 4.40, 'OR789', 'assets/images/thumbs/product-img11.png'),
(9, 'C-500 Antioxidant Protect Dietary Supplement', 'Crispy, delicious potato chips with onion flavor.', 25.00, 1, 45, 4.70, 'EB4DRP', 'assets/images/thumbs/product-img7.png'),
(10, 'Marcel\'s Modern Pantry Almond Unsweetened', 'Fresh ripe bananas from tropical regions.', 0.50, 2, 150, 4.50, 'BN123', 'assets/images/thumbs/product-img5.png'),
(11, 'O Organics Milk, Whole, Vitamin D', 'Juicy red apples, perfect for a healthy snack.', 0.75, 2, 100, 4.60, 'AP456', 'assets/images/thumbs/product-img3.png'),
(12, 'Whole Grains and Seeds Organic Bread', 'Sweet and tangy oranges full of vitamin C.', 0.60, 2, 120, 4.40, 'OR789', 'assets/images/thumbs/product-img12.png'),
(13, 'Lucerne Yogurt, Lowfat, Strawberry', 'Sweet and tangy oranges full of vitamin C.', 0.60, 1, 120, 4.40, 'OR789', 'assets/images/thumbs/product-img13.png'),
(14, 'Nature Valley Whole Grain Oats and Honey Protein', 'Juicy red apples, perfect for a healthy snack.', 0.75, 1, 100, 4.60, 'AP456', 'assets/images/thumbs/product-img4.png'),
(15, 'C-500 Antioxidant Protect Dietary Supplement', 'Sweet and tangy oranges full of vitamin C.', 0.60, 1, 120, 4.40, 'OR789', 'assets/images/thumbs/product-img1.png'),
(16, 'Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp', 'Sweet and tangy oranges full of vitamin C.', 0.60, 2, 120, 4.40, 'OR789', 'assets/images/thumbs/product-img1.png'),
(17, 'Tropicana 100% Juice, Orange, No Pulp', 'Sweet and tangy oranges full of vitamin C.', 0.60, 1, 120, 4.40, 'OR789', 'assets/images/thumbs/product-img16.png'),
(18, 'Taylor Farms Broccoli Florets Vegetables', 'Sweet and tangy oranges full of vitamin C.', 0.60, 3, 120, 4.40, 'OR789', 'assets/images/thumbs/product-img22.png'),
(19, 'Sinh lý Khỏe ', 'Sweet and tangy oranges full of vitamin C.', 0.60, 1, 120, 4.40, 'OR789', 'assets/images/thumbs/product-img24.png'),
(20, 'Nature Valley Whole Grain Oats and Honey Protein', 'Juicy red apples, perfect for a healthy snack.', 0.75, 3, 100, 4.60, 'AP456', 'assets/images/thumbs/product-img23.png'),
(21, 'C-500 Antioxidant Protect Dietary Supplement', 'Sweet and tangy oranges full of vitamin C.', 0.60, 3, 120, 4.40, 'OR789', 'assets/images/thumbs/product-img20.png'),
(22, 'Market Pantry 41/50 Raw Tail-Off Large Raw Shrimp', 'Sweet and tangy oranges full of vitamin C.', 0.60, 3, 120, 4.40, 'OR789', 'assets/images/thumbs/product-img19.png'),
(23, 'Tropicana 100% Juice, Orange, No Pulp', 'Sweet and tangy oranges full of vitamin C.', 0.60, 3, 120, 4.40, 'OR789', 'assets/images/thumbs/product-img21.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PasswordHash` varchar(255) NOT NULL,
  `Role` enum('Admin','Customer') NOT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `CreatedAt` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `Email`, `PasswordHash`, `Role`, `Phone`, `Address`, `CreatedAt`) VALUES
(1, 'admin', 'admin@example.com', '0192023a7bbd73250516f069df18b500', 'Admin', '0123456789', '123 Admin Street', '2024-09-28 21:31:30'),
(2, 'John Doe', 'john@example.com', '6e0b7076126a29d5dfcbd54835387b7b', 'Customer', '0987654321', '456 John Street', '2024-09-28 21:31:30'),
(3, 'Jane Smith', 'jane@example.com', '5570c0cd80d575f9db152f9cc8bf1c6a', 'Customer', '0111222333', '789 Jane Street', '2024-09-28 21:31:30'),
(4, 'seck19', 'khanhdangkma192@gmail.com', '0192023a7bbd73250516f069df18b500', 'Admin', '01234567890', 'Chien Thang Stress', '2024-09-30 13:25:52');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Chỉ mục cho bảng `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`InvoiceID`),
  ADD KEY `OrderID` (`OrderID`);

--
-- Chỉ mục cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`OrderDetailID`),
  ADD KEY `OrderID` (`OrderID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `invoices`
--
ALTER TABLE `invoices`
  MODIFY `InvoiceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `OrderDetailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`);

--
-- Các ràng buộc cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `users` (`UserID`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `categories` (`CategoryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
