-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Apr 2023 pada 16.44
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simona`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_agent_operational`
--

CREATE TABLE `tbl_agent_operational` (
  `agent_id` int(11) NOT NULL,
  `agent_user_id` int(11) NOT NULL,
  `agent_name` varchar(128) NOT NULL,
  `agent_grade` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_agent_operational`
--

INSERT INTO `tbl_agent_operational` (`agent_id`, `agent_user_id`, `agent_name`, `agent_grade`) VALUES
(8, 3, 'Dwi Agent', 'GRADE B'),
(9, 8, 'Arief Agent', 'GRADE A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_company`
--

CREATE TABLE `tbl_company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_address` varchar(255) DEFAULT NULL,
  `company_phone` varchar(255) DEFAULT NULL,
  `company_industri_id` int(11) DEFAULT NULL,
  `company_industri_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_company`
--

INSERT INTO `tbl_company` (`company_id`, `company_name`, `company_address`, `company_phone`, `company_industri_id`, `company_industri_name`) VALUES
(1, 'PT SD', 'Jalan Maleber Utara no123', '085721813979', 5, 'Industri Jardin'),
(3, 'CV dua tiga pulau terlampaui', 'hahahaha', '012102012812', 4, 'Industri Gelap'),
(5, 'Gonzo', 'Jl. Cihampelas, ruko warunk upnormal', '085721813979', 4, 'Industri Gelap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_grade_ao`
--

CREATE TABLE `tbl_grade_ao` (
  `grade_id` int(11) NOT NULL,
  `grade_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_grade_ao`
--

INSERT INTO `tbl_grade_ao` (`grade_id`, `grade_name`) VALUES
(8, 'GRADE A'),
(9, 'GRADE B'),
(10, 'GRADE C');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_industri`
--

CREATE TABLE `tbl_industri` (
  `industri_id` int(11) NOT NULL,
  `industri_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_industri`
--

INSERT INTO `tbl_industri` (`industri_id`, `industri_name`) VALUES
(4, 'Industri Gelap'),
(5, 'Industri Jardin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `produk_id` int(11) NOT NULL,
  `produk_name` varchar(100) NOT NULL,
  `produk_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`produk_id`, `produk_name`, `produk_kategori`) VALUES
(2, 'KUR', 'KOMERSIAL'),
(4, 'KIR', 'UMKM'),
(5, 'ontoh', 'UMKM'),
(6, 'KIR', 'KOMERSIAL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_prospek`
--

CREATE TABLE `tbl_prospek` (
  `prospek_id` int(11) NOT NULL,
  `industri_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_prospek`
--

INSERT INTO `tbl_prospek` (`prospek_id`, `industri_id`, `company_id`) VALUES
(5, 5, 1),
(7, 5, 1),
(8, 5, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_survey`
--

CREATE TABLE `tbl_survey` (
  `survey_id` int(11) NOT NULL,
  `survey_date_visit` date NOT NULL,
  `survey_company_name` varchar(128) NOT NULL,
  `survey_pic_name` varchar(128) NOT NULL,
  `survey_pic_phone` varchar(128) NOT NULL,
  `survey_documentation` varchar(256) NOT NULL,
  `survey_minat` varchar(128) NOT NULL,
  `survey_produk` varchar(128) NOT NULL,
  `survey_sub_produk` varchar(128) NOT NULL,
  `survey_plafond` varchar(256) NOT NULL,
  `survey_tempat` varchar(128) NOT NULL,
  `survey_agunan` varchar(128) NOT NULL,
  `survey_product_holding` varchar(128) NOT NULL,
  `survey_alasan` varchar(256) NOT NULL,
  `survey_company_id` int(11) NOT NULL,
  `survey_agent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_survey`
--

INSERT INTO `tbl_survey` (`survey_id`, `survey_date_visit`, `survey_company_name`, `survey_pic_name`, `survey_pic_phone`, `survey_documentation`, `survey_minat`, `survey_produk`, `survey_sub_produk`, `survey_plafond`, `survey_tempat`, `survey_agunan`, `survey_product_holding`, `survey_alasan`, `survey_company_id`, `survey_agent_id`) VALUES
(1, '2023-04-06', 'CV duaw tigaw', 'Dwi ', '085721813979', '', 'BERMINAT MENGAJUKAN', 'KOMERSIAL', 'KUR', 'hahahahaha', 'MILIK SENDIRI', 'SUDAH', 'TABUNGAN', '', 1, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role_id` int(11) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_namalengkap` varchar(255) DEFAULT NULL,
  `user_phone` varchar(255) DEFAULT NULL,
  `user_is_agent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `username`, `user_password`, `user_role_id`, `user_role`, `user_namalengkap`, `user_phone`, `user_is_agent`) VALUES
(1, 'simonaadmin', '10406c1d7b7421b1a56f0d951e952a95', 1, 'admin', 'Admin Simona', '085721813979', NULL),
(3, 'dwiagent', 'a88aba674bae607bb0afa044e2c90102', 2, 'user_agent', 'Dwi Agent', '085721812020', NULL),
(7, 'adminnadir', 'a88aba674bae607bb0afa044e2c90102', 1, 'admin', 'nadir', '085721813979', NULL),
(8, 'ariefagent', 'a88aba674bae607bb0afa044e2c90102', 2, 'user_agent', 'Arief Agent', '085721813979', NULL),
(9, 'dwiarmandhani', 'a88aba674bae607bb0afa044e2c90102', 1, 'admin', 'Dwi Armandhani', '085721813979', NULL),
(10, 'ajie', '5847fe9f93d330913ce2bc83ab4fb6be', 1, 'admin', 'Ajie', '085508550855', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user_role`
--

INSERT INTO `tbl_user_role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'user_agent');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_agent_operational`
--
ALTER TABLE `tbl_agent_operational`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indeks untuk tabel `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indeks untuk tabel `tbl_grade_ao`
--
ALTER TABLE `tbl_grade_ao`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indeks untuk tabel `tbl_industri`
--
ALTER TABLE `tbl_industri`
  ADD PRIMARY KEY (`industri_id`);

--
-- Indeks untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indeks untuk tabel `tbl_prospek`
--
ALTER TABLE `tbl_prospek`
  ADD PRIMARY KEY (`prospek_id`);

--
-- Indeks untuk tabel `tbl_survey`
--
ALTER TABLE `tbl_survey`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_role_id` (`user_role_id`);

--
-- Indeks untuk tabel `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_agent_operational`
--
ALTER TABLE `tbl_agent_operational`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_grade_ao`
--
ALTER TABLE `tbl_grade_ao`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_industri`
--
ALTER TABLE `tbl_industri`
  MODIFY `industri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_prospek`
--
ALTER TABLE `tbl_prospek`
  MODIFY `prospek_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_survey`
--
ALTER TABLE `tbl_survey`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `user_role_id` FOREIGN KEY (`user_role_id`) REFERENCES `tbl_user_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
