-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2016 at 05:44 PM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mtk`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL auto_increment,
  `category` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Teori'),
(2, 'TIPS DAN TRIK'),
(3, 'praktek');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `ID` int(11) NOT NULL auto_increment,
  `Nama_file` varchar(100) default NULL,
  `Sumber` varchar(100) default NULL,
  `Tanggal` date default NULL,
  `Keterangan` text,
  `Type_file` varchar(10) default NULL,
  `Ukuran_file` varchar(20) default NULL,
  `Nama_folder` varchar(100) default NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `download`
--


-- --------------------------------------------------------

--
-- Table structure for table `download_tugas`
--

CREATE TABLE IF NOT EXISTS `download_tugas` (
  `ID_tugas` int(3) NOT NULL auto_increment,
  `Nama_file` varchar(50) NOT NULL,
  `Tanggal` date NOT NULL,
  `Type_file` varchar(7) NOT NULL,
  `Ukuran_file` varchar(20) NOT NULL,
  `Nama_folder` varchar(100) NOT NULL,
  PRIMARY KEY  (`ID_tugas`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `download_tugas`
--

INSERT INTO `download_tugas` (`ID_tugas`, `Nama_file`, `Tanggal`, `Type_file`, `Ukuran_file`, `Nama_folder`) VALUES
(4, 'test1', '2016-01-28', 'docx', '57686', '../jawaban/test1.docx'),
(5, 'kalkulus', '2016-01-28', 'pdf', '108705', '../jawaban/kalkulus.pdf'),
(3, 'tugas_kalkulus', '2016-01-27', 'docx', '69392', '../jawaban/tugas_kalkulus.docx');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_soal`
--

CREATE TABLE IF NOT EXISTS `kategori_soal` (
  `ID_kategori` int(11) NOT NULL auto_increment,
  `Nama_kategori` varchar(30) default NULL,
  PRIMARY KEY  (`ID_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kategori_soal`
--

INSERT INTO `kategori_soal` (`ID_kategori`, `Nama_kategori`) VALUES
(1, 'Esai'),
(2, 'Pilihan Ganda');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE IF NOT EXISTS `materi` (
  `ID_materi` int(11) NOT NULL auto_increment,
  `id_kategori` int(11) default NULL,
  `Judul` varchar(100) default NULL,
  `Isi` text,
  `Tanggal` datetime default NULL,
  PRIMARY KEY  (`ID_materi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`ID_materi`, `id_kategori`, `Judul`, `Isi`, `Tanggal`) VALUES
(4, 1, 'BAB I', '<html>\r\n	<head>\r\n		<title>Rich text editor, isi, press ALT 0 for help.</title>\r\n	</head>\r\n	<body>\r\n		<h3>\r\n			&nbsp;</h3>\r\n		<h3 style="color: blue">\r\n			<img src="/admin/ckeditor/kcfinder/upload/images/index.png" style="margin-right: 10px; float: left; width: 100px; height: 100px; " />STATISTIKA</h3>\r\n		<p>\r\n			Dalam BAB ini kita akan coba membahas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<div style="page-break-after: always">\r\n			<span style="display: none;">&nbsp;</span></div>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&#39;</p>\r\n		<p>\r\n			<img alt="" src="/admin/ckeditor/kcfinder/upload/images/8.JPG" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; float: left; width: 794px; height: 521px; " /></p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			<img alt="" src="/admin/ckeditor/kcfinder/upload/images/9.jpg" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; float: left; width: 797px; height: 370px; " /></p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			<img alt="" src="/admin/ckeditor/kcfinder/upload/images/10.jpg" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; float: left; width: 799px; height: 228px; " /></p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			<img alt="" src="/admin/ckeditor/kcfinder/upload/images/11.jpg" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; float: left; width: 789px; height: 532px; " /></p>\r\n	</body>\r\n</html>\r\n', '2016-02-04 00:00:00'),
(5, 1, 'BAB II', '<html>\r\n	<head>\r\n		<title>Rich text editor, isi, press ALT 0 for help.</title>\r\n	</head>\r\n	<body>\r\n		<h3>\r\n			<img src="/admin/ckeditor/kcfinder/upload/images/index.jpg" style="margin-right: 10px; float: left; width: 100px; height: 100px; " />PELUANG</h3>\r\n		<p>\r\n			di BAB peluang ini kita akan mencoba membahas &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<div style="page-break-after: always">\r\n			<span style="display: none;">&nbsp;</span></div>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			<img alt="" src="/admin/ckeditor/kcfinder/upload/images/6(1).jpg" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; float: left; width: 816px; height: 509px; " /></p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			<img alt="" src="/admin/ckeditor/kcfinder/upload/images/7.jpg" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; float: left; width: 816px; height: 220px; " /></p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n	</body>\r\n</html>\r\n', '2016-02-04 00:00:00'),
(6, 1, 'BAB III', '<html>\r\n	<head>\r\n		<title>Rich text editor, isi, press ALT 0 for help.</title>\r\n	</head>\r\n	<body>\r\n		<h3>\r\n			<img src="/admin/ckeditor/kcfinder/upload/images/images2.jpg" style="margin-right: 10px; float: left; width: 100px; height: 100px; " />TRIGONOMETRI</h3>\r\n		<p>\r\n			Dalam Bab ini akan&nbsp; coba dipelajari&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			<img alt="" src="/admin/ckeditor/kcfinder/upload/images/Untitled.png" style="float: left; width: 1167px; height: 490px; " /></p>\r\n		<h3>\r\n			<img alt="" src="/admin/ckeditor/kcfinder/upload/images/Untitled1.png" style="float: left; width: 1163px; height: 473px; " /></h3>\r\n		<p>\r\n			<img alt="" src="/admin/ckeditor/kcfinder/upload/images/Untitled2.png" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; float: left; width: 1161px; height: 497px; " /></p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			<img alt="" src="/admin/ckeditor/kcfinder/upload/images/Untitled4.png" style="width: 1163px; height: 209px; " /></p>\r\n	</body>\r\n</html>\r\n', '2016-02-04 00:00:00'),
(7, 2, 'TRIK II', '<html>\r\n	<head>\r\n		<title>Rich text editor, isi, press ALT 0 for help.</title>\r\n	</head>\r\n	<body>\r\n		<h3>\r\n			&nbsp;</h3>\r\n		<h3>\r\n			<img src="/admin/ckeditor/kcfinder/upload/images/160581_logo-android-jelly-bean_300_225.jpg" style="margin-right: 10px; float: left; width: 100px; height: 100px; " />TRIK SOAL TRIGONOMETRI</h3>\r\n		<p>\r\n			Akan temukan beberapa cara cepat menyelesaikan soal- soal Trigonometri</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<div style="page-break-after: always">\r\n			<span style="display: none;">&nbsp;</span></div>\r\n		<p>\r\n			<img alt="" src="/admin/ckeditor/kcfinder/upload/images/14171707691650057419.jpg" style="float: left; width: 700px; height: 529px; " /></p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			<img alt="" src="/admin/ckeditor/kcfinder/upload/images/1417170679147902259.jpg" style="float: left; width: 700px; height: 524px; " /></p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			<img alt="" src="/admin/ckeditor/kcfinder/upload/images/14171708261347976486.jpg" style="float: left; width: 700px; height: 526px; " /></p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			<img alt="" src="/admin/ckeditor/kcfinder/upload/images/14171707241866521342.jpg" style="float: left; width: 700px; height: 529px; " /></p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			<img alt="" src="/admin/ckeditor/kcfinder/upload/images/14171707691650057419.jpg" style="float: left; width: 700px; height: 530px; " /></p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			<img alt="" src="/admin/ckeditor/kcfinder/upload/images/14171710751264798720.jpg" style="float: left; width: 564px; height: 379px; " /></p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			<img alt="" src="/admin/ckeditor/kcfinder/upload/images/14171718211970749611.jpg" style="float: left; width: 700px; height: 199px; " /></p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			<img alt="" src="/admin/ckeditor/kcfinder/upload/images/14171719221199170065.jpg" /></p>\r\n		<p>\r\n			&nbsp;</p>\r\n	</body>\r\n</html>\r\n', '2016-02-04 00:00:00'),
(8, 2, 'TRIK I', '<html>\r\n	<head>\r\n		<title></title>\r\n	</head>\r\n	<body>\r\n		<h3>\r\n			<img src="/admin/ckeditor/kcfinder/upload/images/you-make-me-smile.gif" style="margin-right: 10px; float: left; width: 100px; height: 100px; " />TRIK SOAL STATISTIKA</h3>\r\n		<p>\r\n			Topik paling sering muncul dalam statistik adalah menghitung nilai rata-rata (mean). Tentu konsep rata-rata (mean) sangat sederhana. Hanya cara menghitungnya yang kadang agak menakutkan. Kita harus menjumlahkan semua data kemudian membagi dengan banyaknya data.</p>\r\n		<p>\r\n			&nbsp;</p>\r\n		<p>\r\n			Contoh soal.<br />\r\n			Dari 11 siswa yang diukur tinggi badannya, diperoleh data tinggi (dalam cm): 118, 119, 120, 120, 120, 121, 122, 122,123,123, 123. Berapa rata-rata tinggi badan dari 11 siswa tersebut?</p>\r\n		<p>\r\n			Pertama, tinggal jumlahkan semua lalu bagi dengan 11. Tentu kita dapat melakukannya. Hanya masalah semangat saja kan?</p>\r\n		<p>\r\n			Kedua, cobalah menggeser data agar lebih sederhana.</p>\r\n		<p>\r\n			Saya pernah bertemu dengan seorang lulusan matematika ITB yang ahli statistik. Saya bertanya apakah cara menggeser data ini dapat dipertanggung jawabkan secara ilmiah?</p>\r\n		<p>\r\n			Sang ahli statistik itu mengatakan,<br />\r\n			&rdquo;Dalam istilah statistik hal itu disebut dengan transformasi data. Tetapi saya tidak menyangka cara ini dapat kita gunakan untuk menyelesaikan soal UN dan SPMB. Saya sering menggunakannya untuk menghitung data statistik yang rumit.&rdquo;</p>\r\n		<p>\r\n			Bagaimana cara melakukan menggeser data?</p>\r\n		<p>\r\n			Intinya adalah buat lebih sederhana. Misalnya, 120 kita geser menjadi 0 maka datanya menjadi:<br />\r\n			-2, -1, 0, 0, 0, 1, 2, 2, 3, 3, 3.<br />\r\n			Jumlah dari seluruh data = 11.<br />\r\n			Maka rata-rata =&nbsp; 11/11 = 1.<br />\r\n			Kita peroleh rata-rata sebenarnya = 1 + 120 = 121 (Selesai).</p>\r\n		<p>\r\n			Mungkin beberapa di antara kita ada yang tidak suka dengan bilangan negatif. Maka anggaplah data paling kecil = 0. Jadi 118 kita anggap 0. Maka data tergeser menjadi:<br />\r\n			0, 1, 2, 2, 2, 3, 4, 4, 5, 5, 5<br />\r\n			Jumlah dari seluruh data = 33<br />\r\n			Maka rata-rata = 33/11 = 3.<br />\r\n			Kita peroleh rata-rata sebenarnya = 3 + 118 = 121 (Selesai).</p>\r\n		<p>\r\n			Contoh soal:<br />\r\n			Dari sebuah tes matematika,<br />\r\n			5 anak memperoleh nilai 65,<br />\r\n			7 anak memperoleh nilai 70,<br />\r\n			8 anak memperoleh nilai 80,<br />\r\n			5 anak memperoleh nilai 85,<br />\r\n			Berapa nilai rata-rata dari 25 anak di atas?</p>\r\n		<p>\r\n			Pertama, jumlahkan (5&times;65) + (7&times;70) + (8&times;80) + (5&times;85). Kemudian bagi hasilnya dengan 25. Kita akan memperoleh nilai rata-rata yang diinginkan.</p>\r\n		<p>\r\n			Kedua, geser 65 menjadi 0.<br />\r\n			Jumlahkan (5&times;0) + (7&times;5) + (8&times;15) + (5&times;20) = 255<br />\r\n			Maka rata-rata = 255/25 = 10,2<br />\r\n			Kita peroleh rata-rata sebenarnya = 10,2 + 65 = 75,2 (Selesai).</p>\r\n		<p>\r\n			Contoh-contoh di atas merupakan contoh sederhana. Tapi cukup jelas mengilustrasikan maksud untuk memudahkan perhitungan rata-rata. Dengan berlatih mengerjakan beberapa soal lagi, saya yakin, kita akan menguasainya dengan baik.</p>\r\n	</body>\r\n</html>\r\n', '2016-02-04 00:00:00'),
(9, 2, 'TRIK III', '<html>\r\n	<head>\r\n		<title></title>\r\n	</head>\r\n	<body>\r\n		<p>\r\n			&nbsp;</p>\r\n		<h3>\r\n			<img src="/admin/ckeditor/kcfinder/upload/images/canvas.png" style="margin-right: 10px; float: left; width: 100px; height: 100px; " /><strong>Trick Cepat Menghitung Nilai Rata-rata</strong></h3>\r\n		<p>\r\n			Ada suatu trick menarik dalam menyelesaikan soal nilai rata-rata atau istilah dlm statistik adalah mean..</p>\r\n		<p>\r\n			<br />\r\n			Misal, tentukan nilai rata2 hasil ujian di kelas A dgn jumlah siswa 6 org &nbsp;dgn nilai berturut-turut 70,72,74,76,72,dan 80 ???<br />\r\n			<br />\r\n			Jawab:<br />\r\n			(70+72+74+76+72+80) : 6 = ...<br />\r\n			444 : 6 = 74<br />\r\n			<br />\r\n			Dgn cara lama diatas kalian tentunya harus membutuhkan kalkulator x__x<br />\r\n			<br />\r\n			Trick mengerjakan soal diatas sangat sederhana bahkan bisa kalian kerjakan tnpa kalkulator..begini caranya :<br />\r\n			Ambil angka panduan dan kurangkan keseluruhan angka dgn angka panduan,langsung saja ke contoh drpd mumeet @_@<br />\r\n			<br />\r\n			Angka panduan : 74<br />\r\n			Jadi bila semua angka dikurangkan :<br />\r\n			70, 72, 74, 76, 72, 80 menjadi :<br />\r\n			(-4 + -2 + 0 + 2 + -2 + 6 ) : 6 = 0<br />\r\n			Sehingga jwabannya angka panduan 74 + 0 = 74 yup hasilnya sama :)<br />\r\n			<br />\r\n			Angka panduan terserah pilihan kalian, misal kita coba angka lain : 72<br />\r\n			(-2 + 0 + 2 + 4 + 0 + 8 ) : 6 = 2<br />\r\n			Jadi 72 +2 = 74 sama lagi kan :p<br />\r\n			<br />\r\n			Hal ini bila dikerjakan dengan cara lama mungkin juga bisa diselesaikan tanpa kalkulator..tapi apabila jumlah siswa dalam kelas bukan 6 orang misal 30 siswa..maka saya berani jamin pasti memakai kalkulator..akan tetapi dgn cara sederhana spt ini otak para bee&#39;s akan lebih cepat menghitung dibandingkan kalkulator.. :)</p>\r\n	</body>\r\n</html>\r\n', '2016-02-04 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(2) NOT NULL auto_increment,
  `ID_soal` int(3) NOT NULL,
  `No_induk` int(11) NOT NULL,
  `nilai` int(3) NOT NULL,
  PRIMARY KEY  (`id_nilai`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `ID_soal`, `No_induk`, `nilai`) VALUES
(1, 1, 1257392, 80),
(2, 1, 1267892, 90),
(3, 2, 1257392, 70),
(5, 2, 1267892, 80),
(6, 3, 1257392, 80),
(7, 3, 1267892, 90),
(8, 4, 1257392, 86);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `No_induk` int(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jekel` varchar(5) NOT NULL,
  `Tempat` varchar(20) NOT NULL,
  `Tgl` date NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  PRIMARY KEY  (`No_induk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`No_induk`, `Nama`, `Jekel`, `Tempat`, `Tgl`, `Kelas`) VALUES
(1257392, 'Ainil Mardiah', 'P', 'Padang', '0000-00-00', 'X'),
(1267892, 'Fandi Septian', 'L', 'Padang Panjang', '0000-00-00', 'VI'),
(671, 'gusriandi yunanda p', 'L', 'lubuk alung', '0000-00-00', 'XI1'),
(140, 'Firdaus Firman', 'L', 'lintau', '0000-00-00', 'XI1'),
(141, 'lisa komelina', 'P', 'padang', '0000-00-00', 'XI1'),
(142, 'dedi irfan', 'L', 'batu sangkar', '0000-00-00', 'XI1'),
(143, 'anggi wirdana', 'L', 'batu sangkar', '0000-00-00', 'XI1'),
(144, 'm. randi hidaya', 'L', 'solok', '0000-00-00', 'XI1'),
(145, 'Fani ayu F', 'P', 'batu sangkar', '0000-00-00', 'XI1'),
(146, 'ringga sentagi asa', 'L', 'padang', '0000-00-00', 'XI1'),
(147, 'Wide Satrio Putra', 'L', 'padang', '0000-00-00', 'XI1'),
(148, 'dela puspita', 'P', 'pasaman', '0000-00-00', 'XI2'),
(149, 'dharma liza said', 'L', 'padang', '0000-00-00', 'XI2'),
(150, 'ahmadul hadi', 'L', 'padang', '0000-00-00', 'XI2'),
(151, 'Khairi Budayawan', 'L', 'padang', '0000-00-00', 'XI2'),
(152, 'julia wiwingsih', 'P', 'payakumbuh', '0000-00-00', 'XI2'),
(153, 'sulastri', 'P', 'padang', '0000-00-00', 'XI2'),
(154, 'rima tri wulandari', 'P', 'padang', '0000-00-00', 'XI2'),
(155, 'fitri yona', 'P', 'padang', '0000-00-00', 'XI2'),
(156, 'rina yulius', 'P', 'padang', '0000-00-00', 'XI2'),
(157, 'elvira sukma wahyuni', 'P', 'jambi', '0000-00-00', 'XI2'),
(158, 'Rivan Taufal', 'L', 'padang', '0000-00-00', 'XI2'),
(159, 'titi', 'P', 'padang', '0000-00-00', 'XI2');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE IF NOT EXISTS `tugas` (
  `ID_soal` int(3) NOT NULL auto_increment,
  `ID_kategori` int(3) default NULL,
  `Nama_file` varchar(50) default NULL,
  `Tanggal` date default NULL,
  `Type_file` varchar(10) default NULL,
  `Ukuran_file` varchar(20) default NULL,
  `Nama_folder` varchar(100) default NULL,
  PRIMARY KEY  (`ID_soal`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`ID_soal`, `ID_kategori`, `Nama_file`, `Tanggal`, `Type_file`, `Ukuran_file`, `Nama_folder`) VALUES
(5, 2, 'Soal Peluang', '2016-02-04', 'docx', '37209', '../tugas/Soal Peluang.docx'),
(6, 1, 'tugas', '2016-02-04', 'docx', '77065', '../tugas/tugas.docx'),
(4, 1, 'agama', '2016-01-26', 'docx', '21202', '../tugas/agama.docx');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `No_ID` int(11) NOT NULL auto_increment,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `Level` varchar(15) NOT NULL,
  PRIMARY KEY  (`No_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`No_ID`, `Username`, `Password`, `Level`) VALUES
(1, 'fandi', '23091990', 'admin'),
(3, 'firdaus', '230990', 'siswa'),
(4, 'andi', '26091990', 'siswa'),
(5, 'lisa ', '170890', 'siswa'),
(6, 'dedi', '1234', 'siswa'),
(7, 'test', 'tes', 'siswa');
