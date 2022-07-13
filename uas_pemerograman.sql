-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2022 pada 11.56
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_pemerograman`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `authors`
--

CREATE TABLE `authors` (
  `authorid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `authors`
--

INSERT INTO `authors` (`authorid`, `name`, `surname`) VALUES
(1, 'Wilson', 'Subakti'),
(2, 'Naruto', 'Sipudhen'),
(3, 'Nanda', ''),
(4, 'Woke', 'Sukaesih'),
(5, 'Ana', ''),
(6, 'Ani', 'Jalaludin'),
(7, 'Andi', ''),
(8, 'aki', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `bookid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pagecount` varchar(100) NOT NULL,
  `point` int(11) NOT NULL,
  `authorid` int(11) NOT NULL,
  `typeid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`bookid`, `name`, `pagecount`, `point`, `authorid`, `typeid`) VALUES
(1, 'TIK', '80', 0, 1, 1),
(2, 'SI', '81', 0, 2, 2),
(3, 'Indo', '82', 0, 3, 1),
(4, 'Sunda', '83', 0, 4, 2),
(5, 'Inggris', '84', 0, 5, 1),
(6, 'IPS', '85', 0, 6, 2),
(7, 'IPS', '86', 0, 7, 1),
(8, 'MI', '87', 0, 8, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `borrows`
--

CREATE TABLE `borrows` (
  `borrowid` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `takenDate` date NOT NULL,
  `broughtDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `borrows`
--

INSERT INTO `borrows` (`borrowid`, `studentid`, `bookid`, `takenDate`, `broughtDate`) VALUES
(1, 1, 1, '2020-07-17', '2022-07-18'),
(2, 2, 2, '2020-07-18', '2022-07-19'),
(3, 3, 3, '2020-07-19', '2022-07-20'),
(4, 4, 4, '2020-07-20', '2022-07-21'),
(5, 5, 5, '2020-07-21', '2022-07-22'),
(6, 6, 6, '2020-07-22', '2022-07-23'),
(7, 6, 7, '2020-07-23', '2022-07-24'),
(8, 6, 8, '2020-07-24', '2022-07-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE `students` (
  `studentid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `calss` varchar(100) NOT NULL,
  `point` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`studentid`, `name`, `surname`, `birthdate`, `gender`, `calss`, `point`) VALUES
(1, 'Rudi', 'Susanto', '2022-07-13', 'Laki-laki', 'XI IPA', ''),
(2, 'Rido', 'Roma', '2022-07-11', 'Laki-laki', 'XI IPS', ''),
(3, 'Rada', 'Rianti', '2022-07-04', 'Perempuan', 'X IPA', ''),
(4, 'Rana', 'Ikmala', '2022-07-24', 'Perempuan', 'XII IPA', ''),
(5, 'Radi', 'Lukianto', '2022-07-11', 'Laki-laki', 'X IPS', ''),
(6, 'Rama', 'Yana', '2022-07-24', 'Laki-laki', 'XII IPS', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `types`
--

CREATE TABLE `types` (
  `typeid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `types`
--

INSERT INTO `types` (`typeid`, `name`) VALUES
(1, 'Pendidikan'),
(2, 'Ilmu Pasti');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`authorid`);

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`);

--
-- Indeks untuk tabel `borrows`
--
ALTER TABLE `borrows`
  ADD PRIMARY KEY (`borrowid`);

--
-- Indeks untuk tabel `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentid`);

--
-- Indeks untuk tabel `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`typeid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `authors`
--
ALTER TABLE `authors`
  MODIFY `authorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `borrows`
--
ALTER TABLE `borrows`
  MODIFY `borrowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `students`
--
ALTER TABLE `students`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `types`
--
ALTER TABLE `types`
  MODIFY `typeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
