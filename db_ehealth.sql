-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 Jan 2018 pada 05.26
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ehealth`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `type_pasien` varchar(20) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `nik`, `type_pasien`, `nama_pasien`, `alamat`, `email`, `no_hp`, `image`) VALUES
(1, 10009, '', 'Udin', 'Cikalong Wetan', 'udin@gmail.com', '0879911221', '0'),
(2, 10009, '', 'Udin', 'Cikalong Wetan', 'udin@gmail.com', '0879911221', '0'),
(3, 10009, '', 'Udin', 'Cikalong Wetan', 'udin@gmail.com', '0879911221', '0'),
(4, 118287, 'penduduk', 'udin', '-', '-', '-', '0'),
(5, 991881, '', 'Ena', '-', '-', '-', '0'),
(6, 991882, '', 'Ena', '-', '-', '-', '0'),
(8, 2147483647, '', 'Alfi Muhamad Rinaldi', 'Cipeundeuy', 'alfimuhamadrinaldi@gmail.com', '08972972123', 'd41d8cd98f00b204e9800998ecf8427erumkit-.png'),
(9, 2147483647, '', 'sangga', 'ksj', 'sangga@gmail.com', '082918928', 'd41d8cd98f00b204e9800998ecf8427erumkit-.jpg'),
(10, 9892827, '', 'alfi', 'cipeundeuy', 'alfi@gmail.com', '8920887272', 'd41d8cd98f00b204e9800998ecf8427erumkit-.jpg'),
(11, 1234487661, '', 'Alfi Muhamad Rinaldi', 'Cimahi', 'alfimuhamadrinaldi@gmail.com', '089615327467', 'd41d8cd98f00b204e9800998ecf8427erumkit-.jpg'),
(27, 899012792, '', 'Dudung Sulaeman', 'Cimahi', 'dudung@gmail.com', '909172931823', 'd41d8cd98f00b204e9800998ecf8427erumkit-.jpg'),
(40, 2323, '', 'sdas', 'dsd', 'sad', '23', 'd41d8cd98f00b204e9800998ecf8427erumkit-.jpg'),
(41, 2323, '', 'sdas', 'dsd', 'sad', '23', 'd41d8cd98f00b204e9800998ecf8427erumkit-.jpg'),
(42, 2323, '', 'sdas', 'dsd', 'sad', '23', 'd41d8cd98f00b204e9800998ecf8427erumkit-.jpg'),
(43, 2323, '', 'sdas', 'dsd', 'sad', '23', 'd41d8cd98f00b204e9800998ecf8427erumkit-.jpg'),
(44, 2323, '', 'sdas', 'dsd', 'sad', '23', 'd41d8cd98f00b204e9800998ecf8427erumkit-.jpg'),
(45, 2323, '', 'sdas', 'dsd', 'sad', '23', 'd41d8cd98f00b204e9800998ecf8427erumkit-.jpg'),
(46, 2323, '', 'sdas', 'dsd', 'sad', '23', 'd41d8cd98f00b204e9800998ecf8427erumkit-.jpg'),
(47, 218720, '', 'Eneng', 'Cipeundeuy', 'eneng@gmail.com', '08927371938', 'd41d8cd98f00b204e9800998ecf8427erumkit-.jpg'),
(48, 2147483647, '', 'Alfi Muhamad', 'cipeundeuy', 'alfi@gmail.com', '08976735323', 'd41d8cd98f00b204e9800998ecf8427erumkit-.jpg'),
(49, 2147483647, '', 'Eman', 'cipeundeuy', 'alfi@gmail.com', '08976735323', 'd41d8cd98f00b204e9800998ecf8427erumkit-.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_rumkit`
--

CREATE TABLE `pendaftaran_rumkit` (
  `id` int(11) NOT NULL,
  `id_rumah_sakit` int(11) NOT NULL,
  `id_poli_klinik` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `no_antrian` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran_rumkit`
--

INSERT INTO `pendaftaran_rumkit` (`id`, `id_rumah_sakit`, `id_poli_klinik`, `id_pasien`, `tgl_pendaftaran`, `no_antrian`) VALUES
(2, 1, 1, 0, '2018-01-02', '1'),
(3, 1, 13, 0, '2018-01-02', '1'),
(4, 1, 13, 0, '2018-01-02', '1'),
(5, 1, 13, 6, '2018-01-02', '1'),
(6, 1, 1, 8, '2018-01-02', '1'),
(7, 1, 9, 9, '2018-01-02', '1'),
(8, 1, 1, 10, '2018-01-02', '1'),
(9, 1, 1, 11, '2018-01-16', '63'),
(25, 1, 1, 27, '2018-01-16', '64'),
(40, 1, 1, 42, '2018-01-16', '65'),
(41, 1, 1, 43, '2018-01-17', '1'),
(42, 1, 1, 44, '2018-01-26', '1'),
(43, 1, 1, 45, '2018-01-26', '2'),
(44, 1, 1, 46, '2018-01-26', '3'),
(45, 1, 9, 47, '2018-01-02', '2'),
(46, 1, 2, 48, '2018-01-17', '1'),
(47, 1, 2, 49, '2018-01-17', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poli_klinik`
--

CREATE TABLE `poli_klinik` (
  `id` int(11) NOT NULL,
  `nama_poli_klinik` varchar(255) NOT NULL,
  `image` varchar(50) NOT NULL,
  `id_rumkit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `poli_klinik`
--

INSERT INTO `poli_klinik` (`id`, `nama_poli_klinik`, `image`, `id_rumkit`) VALUES
(1, 'UMUM', 'klinik-umum.png', 1),
(2, 'GIGI', 'klinik-gigi.png', 1),
(3, 'KIA', 'klinik-kia.png', 1),
(4, 'GIZI', 'klinik-gizi.png', 1),
(5, 'JANTUNG', 'klinik-jantung.png', 1),
(6, 'ANAK', 'klinik-anak.png', 1),
(7, 'THT', 'klinik-tht.png', 1),
(8, 'OBGYN', 'klinik-obgyn.png', 1),
(9, 'KULIT KELAMIN', 'klinik-kulit_kelamin.png', 1),
(10, 'PENYAKIT DALAM', 'klinik-penyakit_dalam.png', 1),
(11, 'MATA', 'klinik-mata.png', 1),
(12, 'PARU', 'klinik-paru.png', 1),
(13, 'KESEHATAN JIWA', 'klinik-jiwa.png', 1),
(14, 'BEDAH UMUM', 'klinik-bedah_umum.png', 1),
(15, 'BEDAH PLASTIK', 'klinik-bedah_plastik.png', 1),
(16, 'ORTHOPEDI', 'klinik-orthopedi.png', 1),
(17, 'FISIOTHERAPY', 'klinik-fisiotherapy.png', 1),
(18, 'ENDOSCOPY', 'klinik-endoscopy.png', 1),
(19, 'SYARAF', 'klinik-syaraf.png', 1),
(20, 'VCT', 'klinik-vct.png', 1),
(21, 'NEONATUS', 'klinik-neonatus.png', 1),
(23, 'UMUM', 'd41d8cd98f00b204e9800998ecf8427epoli-.png', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `puskesmas`
--

CREATE TABLE `puskesmas` (
  `id` int(11) NOT NULL,
  `nama_puskesmas` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah_sakit`
--

CREATE TABLE `rumah_sakit` (
  `id` int(11) NOT NULL,
  `nama_rumah_sakit` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `image` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rumah_sakit`
--

INSERT INTO `rumah_sakit` (`id`, `nama_rumah_sakit`, `alamat`, `no_tlp`, `image`, `id_user`) VALUES
(1, 'Rumah Sakit Hasan Sadikin', '-', '-', 'hasan-sadikin.jpg', 3),
(2, 'Rumah Sakit Fathma', '-', '-', 'fathma.jpg', 0),
(3, 'Rumah Sakit Cibabat', '-', '-', 'cibabat.jpg', 2),
(4, 'Rumah Sakit Dustira', '-', '-', 'dustira.jpg', 4),
(5, 'Rumah Sakit Santosa', '-', '-', 'santosa.jpg', 5),
(6, 'Rumah Sakit Hermina', '-', '-', 'hermina.jpg', 0),
(17, 'rumah sakit tes', 'lksld', '090898', 'd41d8cd98f00b204e9800998ecf8427erumkit-.jpg', 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `photo` varchar(50) NOT NULL,
  `id_rumah_sakit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testimonial`
--

INSERT INTO `testimonial` (`id`, `nama`, `deskripsi`, `photo`, `id_rumah_sakit`) VALUES
(1, 'Bpk. Supriyadi (46 tahun)', 'Pelayanan Terbaik Tanpa Membeda-bedakan', '1.jpg', 1),
(2, 'Ibu Ratih Virta Gayatri ( 41 tahun)', 'Pelayanan Yang Responsif', '2.jpg', 1),
(3, 'Bpk. Supriyadi (46 tahun)', 'Pelayanan Terbaik Tanpa Membeda-bedakan', '3.jpg', 1),
(4, 'Ibu Ratih Virta Gayatri ( 41 tahun)', 'Pelayanan Yang Responsif', '4.jpg', 1),
(5, 'Lisma Yanti (28 tahun)', 'Dokter, Perawat dan Semua Petugas Sangat Baik Dan Ramah', '5.jpg', 1),
(6, 'Tri Sapto Untoro (38 tahun)', 'Melayani Pasien Layaknya Keluarga Sendiri', '6.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'alfi', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'admin_cibabat', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(3, 'admin_hasansadikin', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(4, 'admin_dustira', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(5, 'admin_santosa', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(16, 'asjkk', 'c6c714c36c19f7a9cbd319ec0f0f4cc8', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran_rumkit`
--
ALTER TABLE `pendaftaran_rumkit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poli_klinik`
--
ALTER TABLE `poli_klinik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `pendaftaran_rumkit`
--
ALTER TABLE `pendaftaran_rumkit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `poli_klinik`
--
ALTER TABLE `poli_klinik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `puskesmas`
--
ALTER TABLE `puskesmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
