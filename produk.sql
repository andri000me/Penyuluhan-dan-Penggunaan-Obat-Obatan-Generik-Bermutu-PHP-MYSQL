-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2019 at 02:20 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `obat`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `produk_id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`produk_id`, `gambar`, `nama`, `deskripsi`) VALUES
(1, 'A1', 'Amoxilin', 'Salah satu jenis obat antibiotik untuk infeksi jenis bakteris'),
(3, 'A3', 'Antalgin', 'Antalgin adalah salah satu obat pereda rasa sakit (analgesik) yang termasuk golongan anti-inflamasi non-steroid (AINS). Obat ini tidak dijual bebas, karena harus didapatkan dengan resep dokter. Mekanisme kerjanya adalah mengurangi produksi mediator yang dapat menyebabkan inflamasi dan nyeri pada tubuh.'),
(4, 'A4', 'Azithromycin ', 'Azithromycin adalah antibiotik untuk mengobati berbagai infeksi akibat bakteri. Obat ini sering digunakan untuk mengobati infeksi di paru-paru, hidung dan tenggorokan, sendi dan tulang, kulit, darah, alat kelamin, serta infeksi pada organ-organ dalam lainnya. Dalam beberapa kasus, obat ini juga dapat digunakan untuk mencegah endokarditis (infeksi katup jantung) pada orang-orang yang berisiko tinggi terkena infeksi tersebut karena efek samping dari prosedur pengobatan gigi tertentu.'),
(5, 'C1', 'Captopril', 'Captopril adalah obat untuk mengobati tekanan darah tinggi (hipertensi). Captropril masuk ke dalam kelompok obat-obatan jantung yang disebut ACE inhibitors.  Obat ini bekerja dengan menghambat enzim pengubah angiotensin yang kemudian menurunkan jumlah angiotensin II (hormon yang menyebabkan penyempitan pembuluh darah dan meningkatkan tekanan darah)'),
(6, 'C2', 'Cefixime', 'Cefixime adalah  antibiotik untuk mengobati berbagai infeksi yang disebabkan oleh bakteri. Cara kerja obat ini adalah dengan menghambat pembentukan dinding sel bakteri sehingga bakteri menjadi mati. Beberapa kondisi yang dapat ditangani oleh cefixime di antaranya adalah infeksi telinga, bronkitis, radang amandel, tenggorokan, pneumonia, dan infeksi saluran kemih. Cefixime tidak dapat mengobati infeksi yang disebabkan oleh virus, seperti penyakit flu dan pilek.'),
(7, 'E1', 'Ethambutol', 'Ethambutol adalah obat yang digunakan untuk mengobati tuberkulosis. Dalam pengobatan tuberkulosis, obat ini dikonsumsi bersama dengan antibiotik lainnya, baik dalam bentuk tunggal atau tablet kombinasi. Ethambutol bekerja dengan menghentikan pertumbuhan bakteri penyebab tuberkulosis. Obat ini tidak digunakan untuk mengatasi penyakit yang disebabkan oleh infeksi virus, seperti flu.'),
(10, 'P3', 'Prednison', 'Prednison adalah obat golongan kortikosteroid yang berfungsi untuk mengurangi peradangan dalam beberapa kondisi medis, seperti artritis, asma, kelainan sistem kekebalan tubuh, kelainan darah, gangguan paru dan pernapasan, alergi parah, penyakit persendian dan otot, serta penyakit kulit.  Selain itu, obat ini juga dapat membantu dalam pengobatan penyakit kanker. Secara umum, predison bekerja dengan menekan sistem kekebalan tubuh untuk mengurangi peradangan dan pembengkakan.'),
(11, 'S1', 'Salbutamol', 'Obat ini dapat melebarkan salran udara pada paru-paru. Obat ini bekerja dengan cara melepaskan otot-otot disekitar saluran pernafasan yang menyempit sehingga udara dapat mengalir ke dalam paru-paru.'),
(1229, 'A429', 'Paracetamol29', 'obat penuru29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
 ADD PRIMARY KEY (`produk_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
