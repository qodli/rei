-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2016 at 01:58 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reireg`
--

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `id_cabang` int(100) NOT NULL,
  `id_perusahaan` int(100) NOT NULL,
  `nama_cabang` varchar(100) NOT NULL,
  `alamat_cabang` text NOT NULL,
  `npwp_cabang` varchar(100) NOT NULL,
  `website_cabang` varchar(100) NOT NULL,
  `email_cabang` varchar(100) NOT NULL,
  `telp_cabang` varchar(100) NOT NULL,
  `fax_cabang` varchar(100) NOT NULL,
  `bid_usaha_cabang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_fisik`
--

CREATE TABLE `data_fisik` (
  `id_data_fisik` int(100) NOT NULL,
  `id_proyek_realestat` int(100) NOT NULL,
  `klasifikasi` enum('Rumah Umum','Rumah Komersil','Rumah Susun Umum','Rumah Susun Komersil','Unit Perkantoran','Unit Pertokoan','Unit Pergudangan','Kawasan Industri') NOT NULL,
  `luasan_unit` int(100) NOT NULL,
  `jumlah_unit` int(100) NOT NULL,
  `harga_jual` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `direksi`
--

CREATE TABLE `direksi` (
  `id_direksi` int(100) NOT NULL,
  `id_perusahaan` int(100) NOT NULL,
  `nama_direksi` varchar(100) NOT NULL,
  `jabatan_direksi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `izin_prinsip`
--

CREATE TABLE `izin_prinsip` (
  `id_izinprinsip` int(100) NOT NULL,
  `nama_izinprinsip` varchar(100) NOT NULL,
  `no_izinprinsip` varchar(100) NOT NULL,
  `tgl_izinprinsip` date NOT NULL,
  `pemberi_izinprinsip` varchar(100) NOT NULL,
  `id_proyek_realestat` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komisaris`
--

CREATE TABLE `komisaris` (
  `id_komisaris` int(100) NOT NULL,
  `id_perusahaan` int(100) NOT NULL,
  `nama_komisaris` varchar(100) NOT NULL,
  `jabatan_komisaris` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemberi_rekomendasi`
--

CREATE TABLE `pemberi_rekomendasi` (
  `id_pemberi_rekomendasi` int(100) NOT NULL,
  `id_perusahaan` int(100) NOT NULL,
  `nama_perusahaan_pemberi_rekomendasi_1` varchar(100) NOT NULL,
  `nama_perusahaan_pemberi_rekomendasi_2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemegang_saham`
--

CREATE TABLE `pemegang_saham` (
  `id_pemegang_saham` int(100) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `nama_pemegang_saham` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `no_anggota_rei` varchar(100) NOT NULL,
  `klasifikasi_perusahaan` enum('tbk','non-tbk') NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `rt_rw` varchar(100) NOT NULL,
  `kelurahan_desa` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kota_kabupaten` varchar(100) NOT NULL,
  `kodepos` varchar(100) NOT NULL,
  `rei_provinsi` varchar(100) NOT NULL,
  `email_perusahaan` varchar(100) NOT NULL,
  `telp_perusahaan` varchar(100) NOT NULL,
  `fax_perusahaan` varchar(100) NOT NULL,
  `npwp_perusahaan` varchar(100) NOT NULL,
  `website_perusahaan` varchar(100) NOT NULL,
  `jenis_bidang_usaha_perusahaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proyek_jasa`
--

CREATE TABLE `proyek_jasa` (
  `id_proyek_jasa` int(100) NOT NULL,
  `id_perusahaan` int(100) NOT NULL,
  `nama_jasa` varchar(100) NOT NULL,
  `deskripsi_jasa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proyek_realestat`
--

CREATE TABLE `proyek_realestat` (
  `id_proyek_realestat` int(100) NOT NULL,
  `nama_proyek_realestat` varchar(100) NOT NULL,
  `alamat_proyek_realestat` text NOT NULL,
  `status_proyek_realestat` varchar(100) NOT NULL,
  `kesamaan_proyek` varchar(100) NOT NULL,
  `id_perusahaan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwords` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id_cabang`),
  ADD KEY `id_perusahaan` (`id_perusahaan`) USING BTREE;

--
-- Indexes for table `data_fisik`
--
ALTER TABLE `data_fisik`
  ADD PRIMARY KEY (`id_data_fisik`),
  ADD KEY `id_proyek_realestat` (`id_proyek_realestat`);

--
-- Indexes for table `direksi`
--
ALTER TABLE `direksi`
  ADD PRIMARY KEY (`id_direksi`),
  ADD UNIQUE KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `izin_prinsip`
--
ALTER TABLE `izin_prinsip`
  ADD PRIMARY KEY (`id_izinprinsip`),
  ADD KEY `id_proyek_realestat` (`id_proyek_realestat`);

--
-- Indexes for table `komisaris`
--
ALTER TABLE `komisaris`
  ADD PRIMARY KEY (`id_komisaris`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `pemberi_rekomendasi`
--
ALTER TABLE `pemberi_rekomendasi`
  ADD PRIMARY KEY (`id_pemberi_rekomendasi`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `pemegang_saham`
--
ALTER TABLE `pemegang_saham`
  ADD PRIMARY KEY (`id_pemegang_saham`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `proyek_jasa`
--
ALTER TABLE `proyek_jasa`
  ADD PRIMARY KEY (`id_proyek_jasa`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `proyek_realestat`
--
ALTER TABLE `proyek_realestat`
  ADD PRIMARY KEY (`id_proyek_realestat`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id_cabang` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_fisik`
--
ALTER TABLE `data_fisik`
  MODIFY `id_data_fisik` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `direksi`
--
ALTER TABLE `direksi`
  MODIFY `id_direksi` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `izin_prinsip`
--
ALTER TABLE `izin_prinsip`
  MODIFY `id_izinprinsip` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `komisaris`
--
ALTER TABLE `komisaris`
  MODIFY `id_komisaris` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemberi_rekomendasi`
--
ALTER TABLE `pemberi_rekomendasi`
  MODIFY `id_pemberi_rekomendasi` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemegang_saham`
--
ALTER TABLE `pemegang_saham`
  MODIFY `id_pemegang_saham` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `proyek_jasa`
--
ALTER TABLE `proyek_jasa`
  MODIFY `id_proyek_jasa` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `proyek_realestat`
--
ALTER TABLE `proyek_realestat`
  MODIFY `id_proyek_realestat` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cabang`
--
ALTER TABLE `cabang`
  ADD CONSTRAINT `cabang_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_fisik`
--
ALTER TABLE `data_fisik`
  ADD CONSTRAINT `data_fisik_ibfk_1` FOREIGN KEY (`id_proyek_realestat`) REFERENCES `proyek_realestat` (`id_proyek_realestat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `direksi`
--
ALTER TABLE `direksi`
  ADD CONSTRAINT `direksi_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `izin_prinsip`
--
ALTER TABLE `izin_prinsip`
  ADD CONSTRAINT `izin_prinsip_ibfk_1` FOREIGN KEY (`id_proyek_realestat`) REFERENCES `proyek_realestat` (`id_proyek_realestat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komisaris`
--
ALTER TABLE `komisaris`
  ADD CONSTRAINT `komisaris_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemberi_rekomendasi`
--
ALTER TABLE `pemberi_rekomendasi`
  ADD CONSTRAINT `pemberi_rekomendasi_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemegang_saham`
--
ALTER TABLE `pemegang_saham`
  ADD CONSTRAINT `pemegang_saham_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD CONSTRAINT `perusahaan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `proyek_jasa`
--
ALTER TABLE `proyek_jasa`
  ADD CONSTRAINT `proyek_jasa_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `proyek_realestat`
--
ALTER TABLE `proyek_realestat`
  ADD CONSTRAINT `proyek_realestat_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
