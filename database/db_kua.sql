-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 31, 2019 at 03:01 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kua`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Egova Riva Gustino', 'egova', 'asdasd12'),
(5, 'Adela Fitra Irona', 'adela', 'asdasd12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cerai`
--

CREATE TABLE `tbl_cerai` (
  `id_cerai` int(11) NOT NULL,
  `nama_pemohon` varchar(100) NOT NULL,
  `nik_pemohon` varchar(100) NOT NULL,
  `umur_pemohon` varchar(100) NOT NULL,
  `jk_pemohon` varchar(100) NOT NULL,
  `agama_pemohon` varchar(100) NOT NULL,
  `pekerjaan_pemohon` varchar(100) NOT NULL,
  `tmp_pemohon` varchar(100) NOT NULL,
  `nama_termohon` varchar(100) NOT NULL,
  `nik_termohon` varchar(100) NOT NULL,
  `umur_termohon` varchar(100) NOT NULL,
  `jk_termohon` varchar(100) NOT NULL,
  `agama_termohon` varchar(100) NOT NULL,
  `pekerjaan_termohon` varchar(100) NOT NULL,
  `tmp_termohon` varchar(100) NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cerai`
--

INSERT INTO `tbl_cerai` (`id_cerai`, `nama_pemohon`, `nik_pemohon`, `umur_pemohon`, `jk_pemohon`, `agama_pemohon`, `pekerjaan_pemohon`, `tmp_pemohon`, `nama_termohon`, `nik_termohon`, `umur_termohon`, `jk_termohon`, `agama_termohon`, `pekerjaan_termohon`, `tmp_termohon`, `alasan`) VALUES
(1, 'dsa', 'dsa', 'dsa', 'Wanita', 'Kristen', 'dsa', 'dsa', 'dsa', 'dsa', 'dsa', 'Wanita', 'Katolik', 'dsa', 'dsa', 'dsa'),
(2, 'Egova', '9921312', '23', 'Pria', 'Islam', 'Web Programmer', 'Padang', 'Rafi', '12312312', '123', 'Pria', 'Islam', 'Nganggur', 'Padang', 'Enggan bersama'),
(3, 'Rafi', '123213', '12', 'Pria', 'Islam', 'Gak ada', 'Padang', 'Rafi', '88888', '12', 'Pria', 'Islam', 'Gak ada', 'Padang', 'Gak tau');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `id_info` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `tgl_info` date NOT NULL,
  `judul` text NOT NULL,
  `isi` longtext NOT NULL,
  `foto_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`id_info`, `id_admin`, `tgl_info`, `judul`, `isi`, `foto_info`) VALUES
(1, 3, '2019-08-26', 'Masalah Buku Nikah Telah Selesai Ditangani dengan Baik', 'Masalah penyediaan buku nikah di beberapa daerah yang sempat kekurangan stok, kini telah diselesaikan dengan baik. Demikian dikatakan oleh Kasubdit Pemberdayaan KUA, Yayat Supriadi, M. Si. ketika berbincang dengan bimasislam di kantornya (8/11). Menurutnya, masalah buku nikah seharusnya tiak perlu dibesar-besarkan oleh media, karena ini soal teknis, baik meningginya peristiwa nikah di bulan Dzulhijjah, juga disebabkan karena sedikit masalah distribusi. Namun, saat ini sudah ditangani dengan baik, sehingga masayarakat tidak perlu khawatir. Ketika ditanyakan tentang AKTA NIKAH dikaitkan dengan posisi buku nikah, Yayat menjelaskan bahwa buku nikah itu sebenarnya hanya kutipan dari akta nikah, sehingga ketika buku nikahnya belum diterima oleh pasangan pengantin, mereka tidak perlu khawatir karena peristiwa pernikahan telah dicatat pada dokumen Negara dalam AKTA NIKAH di setiap kantor KUA masing-masing sesuai PMA Nomor 11 Tahun 2007 tentang Pencatatan Nikah. Jadi, ketika buku nikah itu terlambat diterima karena alasan tertentu, seharusnya tidak perlu gusar, karena pada waktunya akan diberikan, tandasnya. Dalam kesempatan yang sama, Adib Mahrus, mantan ketua KUA di provinsi Bali sangat menyanyangkan pemberitaan yang belakangan mencuat. Seakan-akan buku nikah itulah akta nikah. Jika dirunut pada proses pernikahan, seorang catin (calon pengantin) datang ke KUA dengan membawa semua persyaratan yang ada. Pegawai KUA memeriksa dokumen dengan mencatat di formulir NB sebanyak 4 halaman, dimana halaman terakhir merupakan catatan peristiwa nikah yang akan dilakukan. Ketika peristiwa nikah dilakukan di luar KUA, maka catatan itu dibawa ke kantor KUA untuk kemudian dipindahkan ke AKTA NIKAH, baru dikutip di dalam buku nikah. Sedangkan jika pernikahan di KUA, maka peristiwa nikah langsung dituangkan dalam akta dan kemudian kutip dalam buku, imbuhnya.', 'BukuNikah.jpg'),
(48, 5, '2019-08-29', 'Terobosan Kemenag untuk Tingkatkan Kualitas Layanan KUA', 'Kementerian Agama (Kemenag) terus melakukan terobosan untuk memperbaiki dan meningkatkan kualitas layanan Kantor Urusan Agama (KUA) Kecamatan dalam lima tahun terakhir. Berbagai terobosan yang dilakukan itu memberikan dampak pada peningkatan kepuasan terhadap layanan KUA.\r\n\r\nDirjen Bimas Islam, Muhammadiyah Amin, mengatakan indeks kepuasan masyarakat terhadap layanan KUA pada 2018 mengalami peningkatan secara signifikan dari 2016, yakni mencapai 80,40\r\n\r\nDalam Rapat Kerja Nasional Direktorat Bina KUA dan Keluarga Sakinah yang digelar di Jakarta beberapa waktu lalu, Dirjen memaparkan sejumlah usaha yang telah dilakukan untuk meningkatkan kualitas KUA. Hal itu di antaranya dengan mengurangi gratifikasi, revitalisasi gedung KUA melalui dana SBSN, hingga menciptakan inovasi layanan', '746038285.jpg'),
(49, 1, '2019-08-29', 'Biaya Operasional KUA Naik', ' DPR memastikan biaya operasional penghulu di seluruh Indonesia akan ditambah. Wakil Ketua Komisi VIII DPR RI Ledia Hanifa mengatakan, tambahan itu sudah masuk dalam Aanggaran Pendapatan dan Belanja Negara (APBN) 2014.\r\n\r\nPenambahan itu, jelas dia, hasil desakan petugas pencatat nikah atau penghulu. Terutama, untuk biaya operasional pernikahan di luar KUA dan jam kerja. \r\n\r\nPenambahan itu, jelas dia, hasil desakan petugas pencatat nikah atau penghulu. Terutama, untuk biaya operasional pernikahan di luar KUA dan jam kerja. \"Kenaikannya dari Rp 2 juta per orang pada 2013, menjadi Rp 3 juta per orang pada 2014,â€™â€™ katanya, Selasa (10/12).\r\n\r\nMenurut dia, pembahasan perlunya penambahan biaya operasional penghulu, terutama bagi mereka yang menikahkan di luar KUA dan di luar jam kerja ini telah disikapi DPR. Khususnya, sejak adanya kritik dari Inspektorat Jenderal (Irjen) Kementerian Agama (Kemenag).\r\n\r\nNamun, kata dia, permasalahannya tinggal di eksekutif, yakni menteri agama (Menag) sebagai eksekutor aturan tersebut. Aturan sebelumnya melalui peraturan menteri agama (PMA), biaya terkait biaya pencatatan nikah di KUA hanya Rp 30 ribu.\r\n\r\nJadi, sekarang harus ada PMA mengenai pembayaran biaya operasional penghulu di luar KUA dan jam kerja. \"Kalau-PMA nya sudah ada, secepatnya tambahan operasional itu bisa dieksekusi,â€™â€™ ujar Ledia.', 'pernikahan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komentar`, `nama`, `email`, `pekerjaan`, `isi`) VALUES
(1, 'Adela Fitra Irona', 'adela@gmail.com', 'Resepsionis', 'Website Bagus ini'),
(4, 'Egova', 'egovaflavia@gmail.com', 'Newbie Web Programmer', 'Design web bagus'),
(5, 'Fakhri', 'fakhri@gmail.com', 'Nganggur', 'Bisa tolong kasi source code nya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nikah`
--

CREATE TABLE `tbl_nikah` (
  `id_nikah` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `wn` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `tmp_tinggal` text NOT NULL,
  `bin` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `mantan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nikah`
--

INSERT INTO `tbl_nikah` (`id_nikah`, `nama`, `nik`, `jk`, `tmp_lahir`, `tgl_lahir`, `wn`, `agama`, `pekerjaan`, `tmp_tinggal`, `bin`, `status`, `mantan`) VALUES
(5, 'Egova Riva Gustino', '991823918293921', 'Pria', 'Bukittinggi', '1996-08-13', 'Warga Negara Indoneisa', 'Islam', 'Advanced Web Programmer', 'Jln. Parak Karakah No.21 Padang', 'Egova', 'Jejaka', 'Tidak ada'),
(6, 'Siska Dwi Anggraini', '99912312312', 'Wanita', 'Korea', '1997-03-28', 'Warga Negara Asing', 'Islam', 'Fokus ngoding', 'GP', 'Gen sheuk', 'Tanpa Status', 'Ye sun'),
(7, 'Egova Riva Gustino', '99912312312', 'Pria', 'Bukittinggi', '2001-08-13', 'Warga Negara Indoneisa', 'Islam', 'Web Programmwe', 'Padang', 'Egova', 'Jejaka', 'Tak ada');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_org`
--

CREATE TABLE `tbl_org` (
  `id_org` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `ket` text NOT NULL,
  `bio` text NOT NULL,
  `foto_org` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_org`
--

INSERT INTO `tbl_org` (`id_org`, `nama`, `jabatan`, `alamat`, `ket`, `bio`, `foto_org`) VALUES
(2, 'Adela Fitra Irona', 'Ketua KUA', 'Jln. St. Syahrir No. 215 Mata Air. Padang', '2019-2024', 'Lulusan UPI YPTK Padang tahun 2019', 't4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quotes`
--

CREATE TABLE `tbl_quotes` (
  `id_quotes` int(11) NOT NULL,
  `ayat` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_quotes`
--

INSERT INTO `tbl_quotes` (`id_quotes`, `ayat`, `isi`) VALUES
(1, 'Q.S Al-Alaq: 14', 'Tidakkah dia menyadari bahwa sesungguhnya Allah melihat segala perbuatannya?. '),
(3, 'Q.S Fatir: 5', 'Maka jangan sekali-kali membiarkan kehidupan dunia ini memperdayakan kamu.'),
(4, 'Q.S Al-Insyirah: 5-6', 'Karena sesungguhnya sesudah kesulitan itu ada kemudahan, sesungguhnya sesudah kesulitan itu ada kemudahan.'),
(5, 'Q.S Ar-Rum: 60', 'Dan bersabarlah kamu, sesungguhnya janji Allah adalah benar.'),
(6, 'Q.S At-Talaq: 4', 'Dan barang -siapa yang bertakwa kepada Allah, niscaya Allah menjadikan baginya kemudahan dalam urusannya.'),
(7, 'Al-Baqarah: 286', 'Allah tidak membebani seseorang melainkan sesuai dengan kesanggupannya.'),
(8, 'Q.S Al-Alaq: 14', 'Tidakkah dia menyadari bahwa sesungguhnya Allah melihat segala perbuatannya?.'),
(9, 'Q.S Al-Jumuâ€™ah: 11', 'dan Allah Sebaik-baik Pemberi rezeki.'),
(10, 'Q.S Al-Ankabut: 45', 'Sesungguhnya shalat itu mencegah dari perbuatan-perbuatan keji dan mungkar.'),
(11, 'Q.S Al-Baqarah: 45', 'Dan mintalah pertolongan dengan sabar dan shalat.'),
(12, 'Q.S Al-Hadid: 4', 'Dan Dia bersama kamu di mana saja kamu berada. Dan Allah Maha Melihat apa yang kamu kerjakan.'),
(13, 'Q.S Ibrahim: 39', 'Sesungguhnya Tuhanku, benar-benar Maha Mendengar (memperkenankan) doa.'),
(14, 'Q.S Thaha: 114', 'dan katakanlah: â€œYa Tuhanku, tambahkanlah kepadaku ilmu pengetahuanâ€.'),
(15, 'Q.S Al-Anfal: 19', 'Sesungguhnya Allah beserta orang-orang yang beriman.'),
(16, 'Q.S An-Nahl: 23', 'Sesungguhnya Allah tidak menyukai orang-orang yang sombong.'),
(17, 'Q.S Thaha: 46', 'Allah berfirman: â€œJanganlah kamu berdua khawatir, sesungguhnya Aku beserta kamu berdua, Aku mendengar dan melihatâ€.'),
(18, 'Q.S Al-Aâ€™raf: 156', 'dan rahmat-Ku meliputi segala sesuatu.'),
(19, 'Q.S Al-Insan: 30', 'Sesungguhnya Allah adalah Maha Mengetahui lagi Maha Bijaksana.'),
(20, 'Q.S Yunus: 55', 'Ingatlah, sesungguhnya kepunyaan Allah apa yang ada di langit dan di bumi.'),
(21, 'Q.S Az-Zumar: 10', 'Sesungguhnya hanya orang-orang yang bersabarlah yang dicukupkan pahala mereka tanpa batas.'),
(22, 'Q.S Al-Baqarah: 152', 'Ingatlah kamu kepada-Ku, niscaya Aku ingat (pula) kepadamu. '),
(23, 'Q.S Huud: 88', 'Dan tidak ada kesuksesan bagiku melainkan atas (pertolongan) Allah.'),
(24, 'Q.S Ar-Rahman', 'Maka nikmat Tuhan kamu yang manakah yang kamu dustakan?.'),
(25, 'Q.S Ar-Raâ€™d: 16', 'Katakanlah: â€œSiapakah Tuhan langit dan bumi?â€ Jawabnya: â€œAllahâ€.'),
(26, 'Q.S Al-Baqarah: 156', 'Sesungguhnya kami milik Allah, dan kepada-Nya lah kita semua kembali.'),
(27, 'Q.S Al-Zalzalah: 7', 'Barangsiapa yang mengerjakan kebaikan sekecil apapun, niscaya dia akan melihat (balasan)nya.'),
(28, 'Q.S Ad-Duha: 7', 'Dan Dia mendapatimu sebagai seorang yang bingung, lalu Dia memberikan petunjuk.'),
(29, 'Q.S Al-Mulk: 30', 'Katakanlah, â€œTerangkanlah kepadaku jika sumber airmu menjadi kering, maka siapakah yang akan mendatangkan air yang mengalir bagimu?â€.'),
(30, 'Q.S An-Nisa: 78', 'Di mana saja kamu berada, kematian akan mendapatkanmu, kendatipun kamu berada dalam benteng yang tinggi dan kokoh.'),
(31, 'Q.S Ali Imran: 185', 'Tiap-tiap yang berjiwa pasti akan merasakan mati.'),
(32, 'Q.S An-Naml: 88', 'Dan engkau akan melihat gunung-gunung, yang engkau kira tetap berdiri di tempatnya, padahal dia berjalan seperti awan berjalan.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `uname`, `pass`, `nama`, `email`, `alamat`, `nohp`) VALUES
(1, 'Egova', 'asdasd12', 'Egova Riva Gustino', 'egova@gmail.com', 'Jln. Parak Karakah No. 21 Padang', '0819629431'),
(4, 'Retno', 'asdasd12', 'Retno', 'Retno@gmail.com', 'Padang', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visimisi`
--

CREATE TABLE `tbl_visimisi` (
  `id_visimisi` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_visimisi`
--

INSERT INTO `tbl_visimisi` (`id_visimisi`, `visi`, `misi`) VALUES
(1, 'Unggul dalam mewujudkan pelayanan di bidang urusan agama yang berkualitas dan insporatif di wilayah Padang', 'Mewujudkan  Kualitas Pelayanan prima dibidang  pelayanan Kantor Urusan Agama.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_cerai`
--
ALTER TABLE `tbl_cerai`
  ADD PRIMARY KEY (`id_cerai`);

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tbl_nikah`
--
ALTER TABLE `tbl_nikah`
  ADD PRIMARY KEY (`id_nikah`);

--
-- Indexes for table `tbl_org`
--
ALTER TABLE `tbl_org`
  ADD PRIMARY KEY (`id_org`);

--
-- Indexes for table `tbl_quotes`
--
ALTER TABLE `tbl_quotes`
  ADD PRIMARY KEY (`id_quotes`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_visimisi`
--
ALTER TABLE `tbl_visimisi`
  ADD PRIMARY KEY (`id_visimisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_cerai`
--
ALTER TABLE `tbl_cerai`
  MODIFY `id_cerai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_nikah`
--
ALTER TABLE `tbl_nikah`
  MODIFY `id_nikah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_org`
--
ALTER TABLE `tbl_org`
  MODIFY `id_org` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_quotes`
--
ALTER TABLE `tbl_quotes`
  MODIFY `id_quotes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_visimisi`
--
ALTER TABLE `tbl_visimisi`
  MODIFY `id_visimisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
