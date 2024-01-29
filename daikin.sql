-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 05:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daikin`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Rumah Hunian'),
(2, 'Rumah Hunian Premium'),
(3, 'Bangunan Komersial'),
(4, 'Bangunan Industrial');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `spesifikasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kategori_id`, `nama`, `foto`, `deskripsi`, `spesifikasi`) VALUES
(2, 1, 'FTV Series', '6MxOZgpRlh0OaLyk61x8.jpg', '&lt;p&gt;Mode Turbo dapat digunakan untuk menciptakan pengalaman pendingin ruangan terbaik yang dapat disesuaikan dengan keseharian. Penyesuaian suhu pada pola tidur juga dapat digunakan dengan mengaktifkan mode Sleep.&lt;/p&gt;', 'dNg63fHFl1jmxbRZXvNc.png'),
(11, 1, 'FTC Series', 'DPNwFjiKgqi08nGq5XV6.jpg', '&lt;p&gt;DAIKIN Super Mini Split memiliki aliran canggih dan bertenaga dengan kenyamanan yang maksimal. Tersedia mulai dari 0.5 PK hingga 2.5 PK, unit ini sangat ringkas dan modis.&lt;/p&gt;', '9Ec0Ye7TFcPmOYRsKYa2.png'),
(12, 2, 'Indoor - 3DI', 'IBqsTuX9doyqzQldWCfX.jpg', '&lt;p&gt;Intelligent eye ganda yang inovatif mampu melakukan penyesuaian otomatis pada arah aliran udara dan suhu dengan mendeteksi lokasi keberadaan individu dan lantai.&lt;/p&gt;&lt;p&gt;Aliran udara 3D dapat membuat aliran udara jadi lebih optimal dan nyaman.&lt;/p&gt;', 'aD0giIrqJThC7RD9kZDW.png'),
(13, 2, 'Indoor - Long Duct', 'vLjPOMN9TB8u0Prvqqvq.jpg', '&lt;p&gt;Medium Static Ceiling Mounted Duct&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'F5HpEbb6BGVHxIFqetlS.png'),
(14, 1, 'BREEZE Series', 'BjyjwpZHD6urw2sR2e08.jpg', '&lt;p&gt;Seri Breeze memberi anda keseimbangan yang sempurna antara efisiensi energi, kemudahan penggunaan dan produk yang ramah lingkungan. AC dengan desain yang kompak, ringan, dapat di operasikan dengan mudah dengan fitur-fitur yang ada.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;', '5M1wdp9XtGhHIKOzadh8.png'),
(16, 1, 'FTKM Series', 'tvXDUbHC170ZVeDOAbe6.jpg', '&lt;p&gt;Daikin Premium Inverter menawarkan pendinginan yang cepat, kontrol kelembaban dan ketahanan tinggi catu daya yang tidak stabil. Dapatkan kenyamanan mutakhir tanpa khawatir.&lt;/p&gt;', 'dDc4TfUHtBPm8jtkFvBr.png'),
(17, 1, 'FTKC Series', 'hxSEtQuwQuQPePp7QYYT.jpg', '&lt;p&gt;Daikin Star Inverter memiliki performa yang tangguh dan fitur yang cukup lengkap. Hemat dan efisien, karena memiliki beberapa fitur utama diantaranya mode low watt, mode econo dan intelligent eye. Dengan PM 2.5 filter dan smart Wi-Fi controller melengkapi kelebihan dari Daikin Star Inverter.&lt;/p&gt;', 'Y6lpr3ObjLMtNmZNI2L3.jpg'),
(18, 1, 'FTKQ Series', 'ATvsQ50jZN6RLA1BVlvZ.jpg', '&lt;p&gt;Daikin Flash Inverter memiliki fitur Super PCB yang mampu membuat AC beroperasi meski tegangan listrik rumah anda tidak stabil. Sehingga tidak perlu khawatir AC beresiko cepat rusak. Fitur Mode Low Watt dapat diaktifkan untuk menghemat penggunaan daya listrik, sehingga tidak perlu khawatir tagihan listrik membengkak.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'Xyk8Hie26lST86CeiqvZ.png'),
(19, 1, 'FTKF Series', 'mQTRtyDMmcX34vAk0d1T.jpg', '&lt;p&gt;Mampu mendinginkan ruang lebih cepat hingga 40% dan lebih hemat listrik hingga 30% dengan mode Econo. Dilengkapi dengan Super PCB yang mampu menahan beban lonjakan listrik mulai dari 130V - 415V. Serta dengan mengaktifkan mode hening, tingkat kebisingan unit hanya 21 dBA (lebih rendah dari tingkat kebisingan ruang perpustakaan).&lt;/p&gt;', 'Fa6PSnYS7UkznYHFlDcX.png'),
(20, 2, 'Indoor - 3DI plus', 'MIXcseqRwfjoWM2jsElK.jpg', '&lt;p&gt;Moisture Control Intelligent 3D Air Flow Ceilling Mounted Duct.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Daikin 3DI+ dilengkapi dengan teknologi dual fan dan dual valve untuk mencapai kontrol suhu dan kelembapan di dalam ruang. Sehingga suhu di dalam ruang tidak hanya nyaman, tetapi kelembapan ruang pun terjaga.&lt;/p&gt;', 'vAFx0I1IUaS0dkO1UzYy.jpg'),
(21, 2, 'Indoor - Compact', 'Capzeqq7aBlvAnjdZ3Gc.jpg', '&lt;p&gt;Compact Ceiling Mounted Duct. Dudukan Pemasangan Langit-Langit Yang Kompak. Dengan ketinggian hanya 200mm, saluran tubuh ramping ini cocok untuk langit-langit rendah. fleksibel untuk koneksi saluran pendek dan pelepasan kisi-kisi&lt;/p&gt;', 'xHUiFBd0X81CGxYsF8gI.png'),
(22, 2, 'Indoor - Bathroom', 'YRRkjCqiGjXjRr0KNXhf.jpg', '&lt;p&gt;Dirancang untuk kenyamanan pendinginan dirumah, khususnya kamar mandi. Ventilasi yang dimiliki mampu menghilangkan kelembapan dan bau dengan cepat, serta pengeringan, sehingga secara efektif dapat meminimalisir pertumbuhan jamur.&lt;/p&gt;', 'xn7PQOCENIq33aOMIbXU.png'),
(23, 2, 'Indoor - Kitchen', 'r2n6ylcxAhICd1DpFSl6.jpg', '&lt;p&gt;New cooking Experience!&lt;/p&gt;&lt;p&gt;Menciptakan lingkungan yang nyaman dan sejuk saat memasak dengan memberikan aliran udara yang lembut dan pembuangan panas yang cepat serta memiliki ketahanan terhadap minyak dan memastikan masa pakai yang tahan lama.&lt;/p&gt;', 'zxiDl4mvxyMjRGbccRhN.png'),
(24, 2, 'Indoor - Closet', 'yJOWl9nPTBre4ttEoPqs.jpg', '&lt;p&gt;Desain yang ringkas, cocok untuk ruang lemari kecil dan dapat memanfaatkan struktur pertukaran panas ganda untuk menjaga pakaian tetap kering dan segar.&lt;/p&gt;', 'XN85ci9kZFaUKcLSKQi7.png'),
(26, 2, 'Outdoor', 'qJwrVeyIYxxYMua8hfEb.jpg', '&lt;p&gt;RPZQ6-8-9AV1&lt;/p&gt;', '4mZlFRbhvRat0K91uhUj.png'),
(27, 3, 'FCFG Series', 'gk0rRGD1goMwzJXgDa1W.jpg', '&lt;p&gt;KIRIU - Surround Cassette.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Memiliki desain yang estetik, cocok untuk segala ruang. DAIKIN KIRIU juga mampu menghembuskan udara merata ke seluruh sudut ruang. Dilengkapi dengan DAIKIN triple method, sehingga mampu meningkatkan kualitas udara di dalam ruang.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'IFeFCgEMICB02dEST2pd.jpg'),
(28, 3, 'FCFC Series', 'jIDITvLYNYIrLBPiLLq4.jpg', '&lt;p&gt;Ceiling Mounted Cassette Round Flow&lt;/p&gt;', 'svCHkuSZDtIdx6mjYKOz.png'),
(29, 3, 'FDLF Series', '0S7I7uJW6zCtwFxnIz4g.jpg', '&lt;p&gt;Duct Connection Low Static Pressure - Height Compact.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Cocok untuk ruang langit-langit yang kompak:&amp;nbsp;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Desain Ringkas dan Ramping&lt;/li&gt;&lt;li&gt;Instalasi sekat&amp;nbsp;&lt;/li&gt;&lt;li&gt;Akhir yang mulus&amp;nbsp;&lt;/li&gt;&lt;li&gt;Pengoperasian yang tenang&lt;/li&gt;&lt;/ul&gt;', 'X7OPhUtdzgcILLr2nsLd.jpg'),
(30, 3, 'FDBF Series', 'Jb3r1WLd5XgS9HOKUZXx.jpg', '&lt;p&gt;Duct Connection Low Static Pressure - Width Compact.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Cocok untuk ruang dengan langit-langit yang kompak:&amp;nbsp;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Desain Ringkas dan Ramping&lt;/li&gt;&lt;li&gt;Instalasi sekat&amp;nbsp;&lt;/li&gt;&lt;li&gt;Akhir yang mulus&amp;nbsp;&lt;/li&gt;&lt;li&gt;Pengoperasian yang tenang&lt;/li&gt;&lt;/ul&gt;', '34ZjSvYnnPkHeccn1fai.jpg'),
(31, 3, 'FHFC Series', 'xLnbURoJmcDaubNqjTnV.jpg', '&lt;p&gt;Ceiling Suspended&lt;/p&gt;', 'QgVBucBUvpRDTgqncoKP.jpg'),
(32, 3, 'FFFC Series', 'wzZEZuk8J6hyZyZuZuH5.jpg', '&lt;p&gt;Compact Multi Flow Cassette&lt;/p&gt;', '7XZqbvkgkMArooHPZgwY.png'),
(33, 3, 'FBFC Series', 'ndleRVAFy8L2Eln8OBc3.jpg', '&lt;p&gt;Duct Connection Middle Static Pressure - FBFC&lt;/p&gt;', 'eYqdJWykL15bwigMAsLc.jpg'),
(34, 3, 'FVA Series', 'yJ2cz7fynqv1LWqWhClX.jpg', '&lt;p&gt;Floor Standing&lt;/p&gt;', 'IgMZ2PDBFbuSEEdYbt60.png'),
(35, 3, 'FCNQ Series', '5zltdZfdMaxH3WGAqpFP.jpg', '&lt;p&gt;Ceiling Mounted Cassette Round Flow.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Kaset AC dengan aliran udara seragam 360 ° menetapkan standar.&amp;nbsp;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Hindari suhu yang tidak merata dan ketidaknyamanan yang disebabkan oleh angin&lt;/li&gt;&lt;li&gt;Kenyamanan ditingkatkan dengan Round Flow&amp;nbsp;&lt;/li&gt;&lt;li&gt;Mudah beradaptasi dengan ruang instalasi&amp;nbsp;&lt;/li&gt;&lt;li&gt;Tubuh kompak dan operasi yang tenang&amp;nbsp;&lt;/li&gt;&lt;li&gt;Cepat dan mudah dipasang&amp;nbsp;&lt;/li&gt;&lt;li&gt;Lebih mudah dirawat&amp;nbsp;&lt;/li&gt;&lt;li&gt;Ukuran panel sama untuk semua model: membuatnya mudah untuk mempertahankan penampilan yang rapi ketika beberapa unit dipasang.&lt;/li&gt;&lt;/ul&gt;', 'w7xJDtiehJS6YOLE2Zny.png'),
(36, 3, 'FHNQ Series', 'Wq9B9gbiXi7rQ8vUwI4H.jpg', '&lt;p&gt;Ceiling Suspended Type.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Tingkatkan ke sistem yang tenang dan ringkas.&amp;nbsp;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Menyebarkan udara yang nyaman ke seluruh ruangan&amp;nbsp;&lt;/li&gt;&lt;li&gt;Fleksibilitas pemasangan untuk kebebasan desain&amp;nbsp;&lt;/li&gt;&lt;li&gt;Operasi yang tenang&amp;nbsp;&lt;/li&gt;&lt;li&gt;Lebih mudah dirawat&amp;nbsp;&lt;/li&gt;&lt;li&gt;Kisi tahan minyak.&lt;/li&gt;&lt;/ul&gt;', 'EoMOHFQpAK1eYjZ1vDBJ.png'),
(37, 3, 'FDBF Series', 'eCOVIcIepaf37cDUdm7N.jpg', '&lt;p&gt;Duct Connection Low Static Pressure Type. Ideal untuk ruang tamu yang nyaman dan indah. Cocok untuk diaplikasikan pada apartemen, rumah dan hotel. Memiliki kelebihan diantaranya ringkas dengan unit indoor yang kecil, ringan dan mudah dipasang. Serta operasi unit indoor yang tenang, memaksimalkan kenyamanan yang didapat.&lt;/p&gt;', 'UvsWJuYP1z1f3GEcNUSa.png'),
(38, 3, 'FCRN Series', 'DmiXyqdvcBLJFKkMv50s.jpg', '&lt;p&gt;Ceiling Mounted Cassette 4-Way Flow.&lt;/p&gt;&lt;p&gt;Unit can be mounted in the ceiling and air can be delivered freely by duct.&amp;nbsp;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;4-Way Air Flow&amp;nbsp;&lt;/li&gt;&lt;li&gt;Optimal comfort and convenience assured by air discharge modes&amp;nbsp;&lt;/li&gt;&lt;li&gt;Compact Body &amp;amp; Quiet Operation&lt;/li&gt;&lt;/ul&gt;', 'umryXNkhBT0RZsV8I9n1.png'),
(39, 3, 'FVRN Series', '7B1GmqqqqTxAFttF9f6T.jpg', '&lt;p&gt;Floor Standing&lt;/p&gt;', 'Y1C6zL29BY2JlFZIx4dK.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$pRva3h6QbYsbLH7JGMJ.heuXNgMddkZA9K5odz3P1sPF.ox9BRTWC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`),
  ADD KEY `kategori_produk` (`kategori_id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
