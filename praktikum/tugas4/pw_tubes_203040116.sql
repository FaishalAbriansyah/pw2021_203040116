-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Mar 2021 pada 22.40
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040116`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan daerah`
--

CREATE TABLE `makanan daerah` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `makanan daerah`
--

INSERT INTO `makanan daerah` (`id`, `gambar`, `nama`, `asal`, `deskripsi`, `harga`) VALUES
(1, 'rd.jpg', 'Rendang', 'Sumatera Barat', 'Rendang atau randang adalah masakan daging dengan bumbu rempah-rempah yang berasal dari Minangkabau. Masakan ini dihasilkan dari proses memasak yang dipanaskan berulang-ulang menggunakan santan sampai kuahnya kering sama sekali.', 'Rp.15000'),
(2, 'sm.jpg', 'Soto Madura', 'Madura', 'Soto Madura adalah jenis soto yang berasal dari daerah Madura, Jawa Timur berbahan dasar daging sapi, telur rebus, kentang goreng dan tauge, dengan bumbu ketumbar, bawang merah dan bawang putih, jahe, kunir, laos, Kemiri, jeruk purut, dan garam secukupnya', 'Rp.20000'),
(3, 'lk.jpg', 'Laksa', 'Betawi', 'Laksa adalah makanan berjenis mi yang ditaruh bumbu dengan kebudayaan Peranakan, yang digabung dengan elemen Tionghoa dan Melayu. Laksa mempunyai beberapa jenis, yang paling dikenal adalah yang berjenis Laksa Penang, bentuk mi-nya bulat putih dan sedikit tebal.', 'Rp.15000'),
(4, 'gd.jpg', 'Gudeg', 'Yogtakarta', 'Gudeg adalah makanan khas Yogyakarta dan Jawa Tengah yang terbuat dari nangka muda yang dimasak dengan santan. Perlu waktu berjam-jam untuk membuat masakan ini. Warna coklat biasanya dihasilkan oleh daun jati yang dimasak bersamaan.', 'Rp.20000'),
(5, 'nasitimbel.jpg', 'Nasi Timbel', 'Jawa Barat', 'Nasi timbel adalah masakan Sunda yang populer di Jawa Barat dan Banten. Makanan ini biasanya dibuat dari beras bagolo atau beras merah campuran yang dimasak dengan bungkus daun pisang.', 'Rp.35000'),
(6, 'ayambetutu.jpg', 'Ayam Betutu', 'Bali', 'Betutu adalah lauk yang terbuat dari ayam atau bebek yang utuh yang berisi bumbu, kemudian di panggang dalam api sekam. Betutu ini telah dikenal di seluruh kabupaten di Bali. Betutu merupakan jenis makanan tradisional daerah Bali yang bahan mentahnya berupa karkas utuh itik dan ayam.', 'Rp.15000'),
(7, 'mieaceh.jpg', 'Mie Aceh', 'Aceh', 'Mie Aceh adalah masakan mie pedas khas Aceh di Indonesia. Mie kuning tebal dengan irisan daging sapi, daging kambing atau makanan laut disajikan dalam sup sejenis kari yang gurih dan pedas. Mie Aceh tersedia dalam tiga jenis, Mie Aceh Goreng, Mie Aceh Tumis dan Mie Aceh Kuah', 'Rp.20000'),
(8, 'keraktelor.jpg', 'Kerak Telor', 'Betawi', 'Kerak telur adalah makanan asli daerah Jakarta, dengan bahan-bahan beras ketan putih, telur ayam, ebi yang disangrai kering ditambah bawang merah goreng, lalu diberi bumbu yang dihaluskan berupa kelapa sangrai, cabai merah, kencur, jahe, merica butiran, garam dan gula pasir.', 'Rp.15000'),
(9, 'pempek.jpg', 'Pempek', 'Palembang', 'Pempek atau empek-empek adalah makanan khas Palembang yang terbuat dari daging ikan yang digiling lembut dan tepung kanji, serta beberapa komposisi lain seperti telur, bawang putih yang dihaluskan, penyedap rasa dan garam.', 'Rp.20000'),
(10, 'satebandeng.jpg', 'Sate Bandeng', 'Banten', 'Sate Bandeng adalah masakan tradisional khas Banten, Indonesia. Sate Bandeng dibuat dari ikan bandeng yang dihilangkan durinya, dagingnya dibumbui dan dimasukkan kembali ke kulitnya, lalu ditusuk atau dijepit tusukan tangkai bambu, lalu dibakar di atas bara arang.', 'Rp.35000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makanan daerah`
--
ALTER TABLE `makanan daerah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `makanan daerah`
--
ALTER TABLE `makanan daerah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
