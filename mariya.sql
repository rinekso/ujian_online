-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2016 at 01:34 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mariya`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_admin`
--

CREATE TABLE IF NOT EXISTS `m_admin` (
`id` int(6) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','guru','siswa') NOT NULL,
  `kon_id` int(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_admin`
--

INSERT INTO `m_admin` (`id`, `username`, `password`, `level`, `kon_id`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 0),
(6, 'siswa3', '21232f297a57a5a743894a0e4a801fc3', 'siswa', 3),
(7, 'siswa4', '21232f297a57a5a743894a0e4a801fc3', 'siswa', 4),
(8, 'siswa5', '21232f297a57a5a743894a0e4a801fc3', 'siswa', 5),
(9, 'siswa6', '21232f297a57a5a743894a0e4a801fc3', 'siswa', 6),
(10, 'guru8', '21232f297a57a5a743894a0e4a801fc3', 'guru', 8),
(11, 'guru9', '21232f297a57a5a743894a0e4a801fc3', 'guru', 9);

-- --------------------------------------------------------

--
-- Table structure for table `m_guru`
--

CREATE TABLE IF NOT EXISTS `m_guru` (
`id` int(6) NOT NULL,
  `nip` varchar(225) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_guru`
--

INSERT INTO `m_guru` (`id`, `nip`, `nama`, `jabatan`) VALUES
(8, '1235354356', 'Doni Andrian', 'Wali kelas TKJ'),
(9, '4723136758394', 'Hartono', 'Wali Kelas Multimedia');

-- --------------------------------------------------------

--
-- Table structure for table `m_mapel`
--

CREATE TABLE IF NOT EXISTS `m_mapel` (
`id` int(6) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_mapel`
--

INSERT INTO `m_mapel` (`id`, `nama`) VALUES
(1, 'Matematika - Aljabar'),
(6, 'Matematika - Dasar'),
(7, 'Bahasa Indonesia - Puisi');

-- --------------------------------------------------------

--
-- Table structure for table `m_siswa`
--

CREATE TABLE IF NOT EXISTS `m_siswa` (
`id` int(6) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_siswa`
--

INSERT INTO `m_siswa` (`id`, `nama`, `nim`, `jurusan`) VALUES
(3, 'Maria', '12345', 'Akuntansi'),
(4, 'Dika', '56678', 'Teknik_Gambar_Bangunan'),
(5, 'Andi Firmansyah', '34567', 'Teknik_Komputer_Jaringan'),
(6, 'Rizky Rahmat', '37849', 'Multimedia');

-- --------------------------------------------------------

--
-- Table structure for table `m_soal`
--

CREATE TABLE IF NOT EXISTS `m_soal` (
`id` int(6) NOT NULL,
  `id_guru` int(6) NOT NULL,
  `id_mapel` int(6) NOT NULL,
  `bobot` int(2) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `soal` longtext NOT NULL,
  `opsi_a` longtext NOT NULL,
  `opsi_b` longtext NOT NULL,
  `opsi_c` longtext NOT NULL,
  `opsi_d` longtext NOT NULL,
  `opsi_e` longtext NOT NULL,
  `jawaban` varchar(5) NOT NULL,
  `tgl_input` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_soal`
--

INSERT INTO `m_soal` (`id`, `id_guru`, `id_mapel`, `bobot`, `gambar`, `soal`, `opsi_a`, `opsi_b`, `opsi_c`, `opsi_d`, `opsi_e`, `jawaban`, `tgl_input`) VALUES
(1, 1, 1, 1, '101.jpg', 'Coba', 'Benar', 'Salah', 'Salah', 'Salah', 'Salah', 'A', '2016-06-13 21:53:59'),
(2, 1, 2, 1, '12.jpg', 'test', 'benar', 'dfdg', 'hhkjhk', 'hghj', 'hkjhk', 'A', '2016-06-15 19:35:56'),
(3, 1, 1, 1, '', 'asd', 'asd', 'asd', 'asd', 'asd', 'e', 'E', '2016-08-14 12:46:30'),
(4, 1, 3, 20, '', 'blablabal', 'a', 'b', 'c', 's', 'e', 'A', '2016-08-14 12:51:59'),
(5, 1, 4, 20, '', 'asd fisika', 'asd', 'sd', 'asd', 'asd', 'benar', 'E', '2016-08-14 13:00:27'),
(6, 8, 0, 20, '', 'ASDFsdsdv sdfsdf', 'a', 'b', 'c', 'd', 'e', 'A', '2016-08-14 20:21:13'),
(7, 8, 0, 20, '', 'ASDFsdsdv sdfsdf', 'a', 'b', 'c', 'd', 'e', 'A', '2016-08-14 20:21:15'),
(8, 8, 0, 20, '', 'ASDFsdsdv sdfsdf', 'a', 'b', 'c', 'd', 'e', 'A', '2016-08-14 20:21:26'),
(9, 8, 0, 1, '', 'asd', 'asd', 'asd', 'asd', 'asd', 'abe', 'E', '2016-08-14 20:22:11'),
(10, 8, 6, 20, 'MAT_X_1.jpg', 'Faktor - faktor dari persamaan di atas adalah....', '(-3,-4)', '(3,4)', '(-3,-5)', '(-3,4)', '(3,-4)', 'A', '2016-08-14 20:23:08'),
(11, 8, 6, 20, 'MAT_X_2.jpg', 'Nilai dari x1 + x2 . Dari persamaan di atas adalah....', '-8', '8', '4', '-4', '2', 'B', '2016-08-14 20:40:05'),
(12, 8, 6, 20, 'MAT_X_3.jpg', 'Nilai dari x1 . x2 dari persamaan kuadrat di atas adalah .....', '-2', '4', '2', '-4', '8', 'C', '2016-08-14 20:40:39'),
(13, 8, 6, 20, 'MAT_X_6.jpg', 'Titik puncak dari persamaan kuadrat di atas adalah ...', '(-1,4)', '(-1,5)', '(1,-4)', '(-1,-4)', '(1,4)', 'A', '2016-08-14 20:41:53'),
(14, 8, 6, 20, 'MAT_X_7.jpg', 'Nilai diskriminan ( D ) dari persamaan kuadrat diatas adalah...', '196', '4', '8', '2', '-196', 'A', '2016-08-14 20:42:32'),
(15, 8, 1, 20, '', 'x+2 =3 , berapa nilai x?', '1', '2', '3', '4', '5', 'A', '2016-08-15 05:55:43'),
(16, 8, 1, 1, '', 'X+6 = Y, Y = 2 + 3, Berapakah nilai X?', '3', '-1', '4', '-5', '2', 'B', '2016-08-15 06:07:52'),
(17, 0, 6, 1, '', 'dan', 'a', 'b', 'x', 'd', 'e', 'C', '2016-08-15 06:27:44');

-- --------------------------------------------------------

--
-- Table structure for table `tr_guru_mapel`
--

CREATE TABLE IF NOT EXISTS `tr_guru_mapel` (
`id` int(6) NOT NULL,
  `id_guru` int(6) NOT NULL,
  `id_mapel` int(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_guru_mapel`
--

INSERT INTO `tr_guru_mapel` (`id`, `id_guru`, `id_mapel`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 8, 1),
(7, 8, 6),
(8, 9, 7),
(9, 9, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tr_guru_tes`
--

CREATE TABLE IF NOT EXISTS `tr_guru_tes` (
`id` int(6) NOT NULL,
  `id_guru` int(6) NOT NULL,
  `id_mapel` int(6) NOT NULL,
  `nama_ujian` varchar(200) NOT NULL,
  `jumlah_soal` int(6) NOT NULL,
  `waktu` int(6) NOT NULL,
  `jenis` enum('acak','set') NOT NULL,
  `detil_jenis` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_guru_tes`
--

INSERT INTO `tr_guru_tes` (`id`, `id_guru`, `id_mapel`, `nama_ujian`, `jumlah_soal`, `waktu`, `jenis`, `detil_jenis`) VALUES
(1, 1, 1, 'Semester', 1, 1, 'acak', ''),
(2, 1, 2, 'coba', 1, 1, 'acak', ''),
(3, 1, 4, 'baru', 1, 60, 'acak', ''),
(4, 8, 6, 'Matematika Dasar', 5, 20, 'acak', '');

-- --------------------------------------------------------

--
-- Table structure for table `tr_ikut_ujian`
--

CREATE TABLE IF NOT EXISTS `tr_ikut_ujian` (
`id` int(6) NOT NULL,
  `id_tes` int(6) NOT NULL,
  `id_user` int(6) NOT NULL,
  `list_soal` longtext NOT NULL,
  `list_jawaban` longtext NOT NULL,
  `jml_benar` int(6) NOT NULL,
  `nilai` int(6) NOT NULL,
  `nilai_bobot` int(6) NOT NULL,
  `tgl_mulai` datetime NOT NULL,
  `tgl_selesai` datetime NOT NULL,
  `status` enum('Y','N') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_ikut_ujian`
--

INSERT INTO `tr_ikut_ujian` (`id`, `id_tes`, `id_user`, `list_soal`, `list_jawaban`, `jml_benar`, `nilai`, `nilai_bobot`, `tgl_mulai`, `tgl_selesai`, `status`) VALUES
(6, 4, 3, '11,13,10,12,14', '11:C,13:D,10:B,12:A,14:A', 1, 20, 20, '2016-08-14 21:21:10', '2016-08-14 21:41:10', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tr_siswa_mapel`
--

CREATE TABLE IF NOT EXISTS `tr_siswa_mapel` (
`id` int(6) NOT NULL,
  `id_siswa` int(6) NOT NULL,
  `id_mapel` int(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_siswa_mapel`
--

INSERT INTO `tr_siswa_mapel` (`id`, `id_siswa`, `id_mapel`) VALUES
(23, 3, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_admin`
--
ALTER TABLE `m_admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_guru`
--
ALTER TABLE `m_guru`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_mapel`
--
ALTER TABLE `m_mapel`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_siswa`
--
ALTER TABLE `m_siswa`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_soal`
--
ALTER TABLE `m_soal`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tr_guru_mapel`
--
ALTER TABLE `tr_guru_mapel`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tr_guru_tes`
--
ALTER TABLE `tr_guru_tes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tr_ikut_ujian`
--
ALTER TABLE `tr_ikut_ujian`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tr_siswa_mapel`
--
ALTER TABLE `tr_siswa_mapel`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_admin`
--
ALTER TABLE `m_admin`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `m_guru`
--
ALTER TABLE `m_guru`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `m_mapel`
--
ALTER TABLE `m_mapel`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `m_siswa`
--
ALTER TABLE `m_siswa`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `m_soal`
--
ALTER TABLE `m_soal`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tr_guru_mapel`
--
ALTER TABLE `tr_guru_mapel`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tr_guru_tes`
--
ALTER TABLE `tr_guru_tes`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tr_ikut_ujian`
--
ALTER TABLE `tr_ikut_ujian`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tr_siswa_mapel`
--
ALTER TABLE `tr_siswa_mapel`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
