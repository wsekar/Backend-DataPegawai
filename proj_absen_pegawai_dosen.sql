-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2021 at 05:57 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proj_absen_pegawai_dosen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `foto`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'avatar-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `data_absensi`
--

CREATE TABLE `data_absensi` (
  `log_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `nip` varchar(50) NOT NULL,
  `data` text NOT NULL COMMENT 'sn+pc time',
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_absensi`
--

INSERT INTO `data_absensi` (`log_time`, `nip`, `data`, `keterangan`) VALUES
('2018-01-14 09:28:50', '2017143', '2018-01-14 16:28:50 (PC Time) | H420J00615 (SN)', 'tes'),
('2018-01-14 09:28:09', '2017143', '2018-01-14 16:28:09 (PC Time) | H420J00615 (SN)', 'tes'),
('2018-01-14 05:21:37', '2017133', '2018-01-14 12:21:37 (PC Time) | H420J00615 (SN)', 'tes'),
('2018-01-14 05:21:54', '2017133', '2018-01-14 12:21:54 (PC Time) | H420J00615 (SN)', 'tes'),
('2018-01-14 05:22:06', '2017133', '2018-01-14 12:22:06 (PC Time) | H420J00615 (SN)', 'tes'),
('2018-01-14 05:24:46', '2017133', '2018-01-14 12:24:46 (PC Time) | H420J00615 (SN)', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `nama`) VALUES
(1, 'Dosen Tetap'),
(2, 'Dosen Tamu'),
(3, 'Dosen Kontrak'),
(4, 'Dosen Terbang');

-- --------------------------------------------------------

--
-- Table structure for table `kelamin`
--

CREATE TABLE `kelamin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelamin`
--

INSERT INTO `kelamin` (`id`, `nama`) VALUES
(1, 'Laki laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `nama`) VALUES
(1, 'Tulungagung'),
(2, 'Jakarta'),
(3, 'Surabaya'),
(4, 'Semarang'),
(5, 'Jakarta'),
(6, 'Yogyakarta'),
(7, 'Salatiga'),
(8, 'Bandung'),
(9, 'Madiun'),
(10, 'Bogor');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(10) NOT NULL,
  `nip` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama`, `telp`, `kota`, `kelamin`, `jabatan`) VALUES
(1, 2017138, 'Alana Sabiru', '082244679213', 'Tulungagung', 'Perempuan', 'Dosen Tamu'),
(2, 2017114, 'Abel Khaizure', '081234578984', 'Jakarta', 'Laki-laki', 'Dosen Tamu'),
(3, 2017115, 'Haydan Hadinata', '082386402873', 'Bogor', 'Laki-laki', 'Dosen Tetap'),
(4, 2017116, 'Darezvan Reetala', '082273802073', 'Bandung', 'Laki-laki', 'Dosen Tetap'),
(5, 2017117, 'Jendra Leano', '082190224872', 'Tulungagung', 'Laki-laki', 'Dosen Tetap'),
(6, 2017118, 'Nathaniel Galara', '082374930432', 'Jakarta', 'Laki-laki', 'Dosen Tetap'),
(7, 2017119, 'Lamurein Isabella', '081234578843', 'Salatiga', 'Perempuan', 'Dosen Tetap'),
(8, 2017120, 'Yelena Delova ', '089287433214', 'Surabaya', 'Perempuan', 'Dosen Tamu'),
(9, 2017122, 'Lavanya Shaenette ', '081278920871', 'Jakarta', 'Perempuan', 'Dosen Tetap'),
(10, 2017125, 'Rega Aryandi', '082178120371', 'Semarang', 'Laki-laki', 'Dosen Kontrak'),
(11, 2017126, 'Haidi Dissa', '085289018212', 'Semarang', 'Laki-laki', 'Dosen Tamu'),
(12, 2017127, 'Najala Alanski', '085289018213', 'Tulungagung', 'Laki-laki', 'Dosen Tetap'),
(13, 2017128, 'Tianara Aulia', '082273827632', 'Tulungagung', 'Perempuan', 'Dosen Tetap'),
(14, 2017129, 'Aluna Mecca', '085289018223', 'Semarang', 'Perempuan', 'Dosen Kontrak'),
(15, 2017130, 'Keira Athennara', '085289018231', 'Tulungagung', 'Perempuan', 'Dosen Tamu'),
(16, 2017131, 'Amara Nibiru', '085289019123', 'Semarang', 'Perempuan', 'Dosen Tamu'),
(17, 2017124, 'Januarta Alfiansyah', '082164782019', 'Madiun', 'Laki-laki', 'Dosen Tetap'),
(18, 2017135, 'Dipta Aksara', '082278491233', 'Tulungagung', 'Laki-laki', 'Dosen Tetap'),
(19, 2017136, 'Aluna Sabita', '082183924556', 'Madiun', 'Perempuan', 'Dosen Tetap'),
(20, 2017123, 'Jeusha Deuxiela ', '081289248321', 'Surabaya', 'Perempuan', 'Dosen Tetap'),
(21, 2017132, 'Jenny Catherina', '085289017231', 'Tulungagung', 'Perempuan', 'Dosen Terbang'),
(22, 2017133, 'Pelita Senja', '085289013354', 'Tulungagung', 'Perempuan', 'Dosen Tetap'),
(23, 2017134, 'Raka Anamara', '085251239981', 'Yogyakarta', 'Laki-laki', 'Dosen Tetap'),
(24, 2017137, 'Regantara Mahendra', '081277246321', 'Jakarta', 'Laki-laki', 'Dosen Tetap'),
(25, 2017139, 'Antareksa Charaka', '082235769825', 'Bandung', 'Laki-laki', 'Dosen Tamu');

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id_presensi` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jumlah_hadir` int(11) NOT NULL,
  `jumlah_izin` int(11) NOT NULL,
  `jumlah_alpha` int(11) NOT NULL,
  `total_pertemuan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_absensi`
--
ALTER TABLE `data_absensi`
  ADD PRIMARY KEY (`log_time`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelamin`
--
ALTER TABLE `kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id_presensi`),
  ADD KEY `nip` (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7017;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
