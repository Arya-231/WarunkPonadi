-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2025 at 05:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ponadi`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `kategori_produk` enum('makanan','minuman','','') NOT NULL,
  `gambar_produk` text NOT NULL,
  `harga_produk` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `stok` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `kategori_produk`, `gambar_produk`, `harga_produk`, `deskripsi`, `stok`) VALUES
(2, 'Nasi Pecel', 'makanan', 'p-1.png', '15.000', 'Pecel adalah hidangan khas Indonesia yang terdiri dari berbagai sayuran rebus seperti kacang panjang, bayam, dan tauge, yang disiram dengan saus kacang yang gurih dan pedas. Biasanya disajikan dengan lauk seperti tempe, tahu, dan rempeyek, pecel menawarkan rasa yang segar, renyah, dan penuh cita rasa khas Nusantara.', 4),
(3, 'Sate Ayam', 'makanan', 'p-2.png', '15.000', 'Sate ayam adalah hidangan khas Indonesia berupa potongan daging ayam yang ditusuk menggunakan bambu, kemudian dipanggang di atas arang hingga matang dan beraroma harum. Disajikan dengan bumbu kacang yang gurih dan manis, serta tambahan kecap manis dan perasan jeruk limau, sate ayam memiliki cita rasa yang kaya dan lezat. Biasanya disajikan dengan lontong atau nasi sebagai pelengkap.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 5),
(4, 'Nasi Kuning', 'makanan', 'p-3.png', '20.000', 'Nasi kuning adalah hidangan khas Indonesia yang terbuat dari nasi yang dimasak dengan santan dan kunyit, memberikan warna kuning cerah serta rasa gurih yang lezat. Nasi kuning sering disajikan dalam acara-acara istimewa dengan berbagai lauk pendamping seperti ayam goreng, telur balado, sambal goreng, dan perkedel. Aromanya yang harum dan rasanya yang kaya menjadikannya salah satu hidangan yang istimewa di berbagai perayaan.', 8),
(5, 'Es Cendol', 'minuman', 'EsCendol.jpg', '10.000', 'Es cendol adalah minuman tradisional Indonesia yang menyegarkan, terdiri dari cendol (tepung beras yang dibentuk seperti jelly hijau) yang disajikan dengan campuran santan, gula merah cair, dan es serut. Minuman ini memiliki rasa manis, gurih, dan sedikit kenyal dari cendolnya, menjadikannya pilihan sempurna untuk menghilangkan dahaga di hari yang panas. Es cendol sering dinikmati sebagai sajian penutup yang khas di berbagai daerah.', 10),
(6, 'Es Oyen', 'minuman', 'sc.jpg', '17.000', 'Es campur adalah minuman segar khas Indonesia yang terdiri dari berbagai campuran bahan seperti potongan buah-buahan, agar-agar, cendol, cincau, kolang-kaling, dan serutan es. Disiram dengan sirup manis, santan, atau susu kental manis, es campur memberikan sensasi rasa yang beragam: manis, segar, dan sedikit kenyal dari berbagai tekstur bahan-bahannya. Minuman ini menjadi favorit saat cuaca panas atau sebagai penutup yang menyegarkan.', 15),
(7, 'Es Red Bull', 'minuman', 'redbull.jpg', '20.000', 'Es Red Bull adalah minuman energik yang disajikan dingin dengan campuran es batu. Minuman ini biasanya terdiri dari Red Bull yang dicampur dengan berbagai pilihan buah segar atau sirup, memberikan rasa manis dan menyegarkan. Es Red Bull dikenal karena kemampuannya memberikan dorongan energi, berkat kandungan kafein dan taurinnya. Sering disajikan dalam gelas besar, minuman ini menjadi pilihan populer di berbagai acara, terutama sebagai minuman menyegarkan di hari yang panas.', 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `level`) VALUES
(1, 'ardianta', 'ardianta_pargo@yahoo.co.id', '$2y$10$HIEq2w.8Et9RsJmY4TMKye4aVCxOd9xJTOtG4vyOEmo.GIBxaPQHK', 'Ardianta Pargo', 'admin'),
(3, 'petanikode', 'info@petanikode.com', '$2y$10$uXa.Hz9rr8gkv4ztaqf6FO84iW64gXHbeyEOy1tIQ5wmqMjTk0yQa', 'Petani Kode', 'admin'),
(4, 'uce', '21080200141@umsida.ac.id', '$2y$10$YXboWDwkKzD2Z2Wbxghe5eeg5juKyiAjpwoFdfSOqnpnR9dsXsEmy', 'MOCH ARYA', 'admin'),
(5, '123', '21080200141@umsida.ac.id', '$2y$10$TDK/cVN1BGGfXCzDlRIDpejAgkPZiQnKPPbAlR3Y4HL4..QmPySii', 'arya', 'user'),
(6, 'ary123', '21080200141@umsida.ac.id', '$2y$10$ISYMWi7K/X9J2gN3HR1EcO4NRorfoLeUhj3W4wy7OzJ6aHQXavblm', 'MOCH ARYA', 'admin'),
(9, 'ary12', '21080200141@umsida.ac.id', '$2y$10$bMysGAXCs0k5jpEwQP9yWeA0zIzxMx8on.PdoMfjA3.7TtTvBZUmq', 'MOCH ARYA', 'admin'),
(10, '232323', '232323@gmail.com', '$2y$10$er3sKXphJtk2sMvxMncCou6tsNwLT9TlSlh.XwSGMIHHyFPJ6qczy', '232323', 'user'),
(11, 'arya', 'hidayaharya8@gmail.com', '$2y$10$R8YzQFqAFjTKUcLKIQXc1Ox9faerFZRRHsYTblDxMziP3YrXCe.H6', 'arya hidayah', 'user'),
(12, 'arya_123', 'hidayaharya8@gmail.com', '$2y$10$CNfBHzEHPHfjGW19QxWmIO.8Xp.lrMteaGOgOVZFYXxcgyto5ibaC', 'Moch Arya Hidayah Putra', 'user'),
(16, 'aryamm', 'hidayaharya8@gmail.com', '$2y$10$NB/207U7.kdce/WlrH2XTOc199Dv1SfpxoyJPfftzohlxco6hB6Qq', 'Moch Arya Hidayah Putra', 'user'),
(18, 'aryamm1', 'hidayaharya8@gmail.com', '$2y$10$BnfqXabJYdEkeuEDsUh3i.nZREQU9KqA6o1/H.VR15ypa/Hlr6P5W', 'Moch Arya Hidayah Putra', 'user'),
(19, 'aryaaa', 'hidayaharya8@gmail.com', '$2y$10$yMxIYfDR6sf.DsKf1bqOZu/m7.pkYfCPxGx.kavIkq9CMUEbzBAEi', 'yoyoyo', 'user'),
(20, 'aryae', 'hidayaharya8@gmail.com', '$2y$10$x/HOsbNNT3yyqs/UPVY9nOCJqP0UZNMYNQjVMAkAGGEZ0D/5amXQ6', 'aryaputra', 'user'),
(21, 'aryaee', 'arya@gmail.com', '$2y$10$6BYl9sxnL9SO/.uSx8QpJ.pwvrSSlq4fkuTVQMW1dZlNzH6YAUbny', 'aryaputra', 'user'),
(22, 'aryau', 'arya@gmail.com', '$2y$10$gbZQsBcH90HMXi8bsFUOwe92IJ0KUwqP8NyqzSBElThvvrb1C.IMG', 'arya hidayah', 'user'),
(24, 'arya123', 'aryae@gmail.com', '$2y$10$k0MjHLE4oBZbBfqT79y/SO.HeqRM0QTqCnosMv.06FqdtJTcA8eY.', 'arya hidayah', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
