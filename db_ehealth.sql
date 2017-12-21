-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Des 2017 pada 13.19
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
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `nik`, `type_pasien`, `nama_pasien`, `alamat`, `email`, `no_hp`) VALUES
(1, 10009, '', 'Udin', 'Cikalong Wetan', 'udin@gmail.com', '0879911221'),
(2, 10009, '', 'Udin', 'Cikalong Wetan', 'udin@gmail.com', '0879911221'),
(3, 10009, '', 'Udin', 'Cikalong Wetan', 'udin@gmail.com', '0879911221'),
(4, 118287, 'penduduk', 'udin', '-', '-', '-'),
(5, 991881, '', 'Ena', '-', '-', '-'),
(6, 991882, '', 'Ena', '-', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_rumkit`
--

CREATE TABLE `pendaftaran_rumkit` (
  `id` int(11) NOT NULL,
  `id_rumah_sakit` int(11) NOT NULL,
  `id_poli_klinik` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `tgl_pendaftaran` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `no_antrian` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran_rumkit`
--

INSERT INTO `pendaftaran_rumkit` (`id`, `id_rumah_sakit`, `id_poli_klinik`, `id_pasien`, `tgl_pendaftaran`, `no_antrian`) VALUES
(2, 0, 0, 0, '0000-00-00 00:00:00', ''),
(3, 1, 13, 0, '0000-00-00 00:00:00', ''),
(4, 1, 13, 0, '0000-00-00 00:00:00', ''),
(5, 1, 13, 6, '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poli_klinik`
--

CREATE TABLE `poli_klinik` (
  `id` int(11) NOT NULL,
  `nama_poli_klinik` varchar(255) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `poli_klinik`
--

INSERT INTO `poli_klinik` (`id`, `nama_poli_klinik`, `image`) VALUES
(1, 'UMUM', 'klinik-umum.png'),
(2, 'GIGI', 'klinik-gigi.png'),
(3, 'KIA', 'klinik-kia.png'),
(4, 'GIZI', 'klinik-gizi.png'),
(5, 'JANTUNG', 'klinik-jantung.png'),
(6, 'ANAK', 'klinik-anak.png'),
(7, 'THT', 'klinik-tht.png'),
(8, 'OBGYN', 'klinik-obgyn.png'),
(9, 'KULIT KELAMIN', 'klinik-kulit_kelamin.png'),
(10, 'PENYAKIT DALAM', 'klinik-penyakit_dalam.png'),
(11, 'MATA', 'klinik-mata.png'),
(12, 'PARU', 'klinik-paru.png'),
(13, 'KESEHATAN JIWA', 'klinik-jiwa.png'),
(14, 'BEDAH UMUM', 'klinik-bedah_umum.png'),
(15, 'BEDAH PLASTIK', 'klinik-bedah_plastik.png'),
(16, 'ORTHOPEDI', 'klinik-orthopedi.png'),
(17, 'FISIOTHERAPY', 'klinik-fisiotherapy.png'),
(18, 'ENDOSCOPY', 'klinik-endoscopy.png'),
(19, 'SYARAF', 'klinik-syaraf.png'),
(20, 'VCT', 'klinik-vct.png'),
(21, 'NEONATUS', 'klinik-neonatus.png');

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
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rumah_sakit`
--

INSERT INTO `rumah_sakit` (`id`, `nama_rumah_sakit`, `alamat`, `no_tlp`, `image`) VALUES
(1, 'Rumah Sakit Hasan Sadikin', '-', '-', 'hasan-sadikin.jpg'),
(2, 'Rumah Sakit Fathma', '-', '-', 'fathma.jpg'),
(3, 'Rumah Sakit Cibabat', '-', '-', 'cibabat.jpg'),
(4, 'Rumah Sakit Dustira', '-', '-', 'dustira.jpg'),
(5, 'Rumah Sakit Santosa', '-', '-', 'santosa.jpg'),
(6, 'Rumah Sakit Hermina', '-', '-', 'hermina.jpg');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pendaftaran_rumkit`
--
ALTER TABLE `pendaftaran_rumkit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `poli_klinik`
--
ALTER TABLE `poli_klinik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `puskesmas`
--
ALTER TABLE `puskesmas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
