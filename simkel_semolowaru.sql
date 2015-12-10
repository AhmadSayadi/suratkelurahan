-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 22. Oktober 2015 jam 11:20
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simkel_semolowaru`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `det_keluarga`
--

CREATE TABLE IF NOT EXISTS `det_keluarga` (
  `id_keluarga` varchar(20) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  KEY `id_warga` (`no_ktp`,`id_keluarga`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `det_keluarga`
--

INSERT INTO `det_keluarga` (`id_keluarga`, `no_ktp`) VALUES
('3578091712140012', '3578032612820002'),
('3578040201086287', '3578040608780005'),
('3578090201085742', '3578090500254001'),
('3578090201085742', '3578090503530004'),
('3578090201085405', '3578090508920001'),
('3578090101082074', '3578091210710004'),
('3578090201085742', '357809150452001'),
('3578090201085742', '357809240680001'),
('3578090101082074', '3578092606000002'),
('3578040201086287', '3578094412800001'),
('3578040201086287', '3578094809090002'),
('3578090101082074', '35780950067200011'),
('3578090201085405', '3578095511540002'),
('3578090101082074', '3578095612050002'),
('3578090201085742', '357809590885001'),
('3578090307140003', '3578096003840001'),
('3578090307140003', '3578142506820002'),
('3578091712140012', '357830402230004'),
('3578091712140012', '3578319041400001'),
('3578090210120003', '357890802850003'),
('3578090210120003', '357891407140001'),
('3578090210120003', '357894703840001'),
('3578090210120003', '357896901130001'),
('3578091712140012', '357896904830002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluarga`
--

CREATE TABLE IF NOT EXISTS `keluarga` (
  `id_keluarga` varchar(20) NOT NULL,
  `kepala_keluarga` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `dusun` varchar(20) NOT NULL,
  `rt` varchar(3) DEFAULT NULL,
  `rw` varchar(3) DEFAULT NULL,
  `ekonomi` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_keluarga`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keluarga`
--

INSERT INTO `keluarga` (`id_keluarga`, `kepala_keluarga`, `alamat`, `dusun`, `rt`, `rw`, `ekonomi`) VALUES
('3578090307140003', 'AMAN ASMUNIF, SH', 'SEMOLOWARU ELOK BLOK R/11', '', '001', '006', 'Cukup'),
('3578090210120003', 'HERI SISWORO', 'SEMOLOWARU ELOK BLOK B/3', '', '006', '006', 'Cukup'),
('3578091712140012', 'INDRA WIDYA BHAKTI, S.E', 'SEMOLOWARU ELOK BLOK B/22', '', '006', '006', 'Cukup'),
('3578040201086287', 'WILIS WAHYU WIJAYA, ST', 'SEMOLOWARU ELOK BLOK Q-10', '', '001', '006', 'Cukup'),
('3578090201085405', 'ROCHILAH FADILAH, SPD', 'SEMOLOWARU ELOK BLOK R/17', '', '001', '006', 'Cukup'),
('3578090101082074', 'TONY HENDRIAWAN, SE', 'SEMOLOWARU ELOK BLOK J/37', '', '003', '006', 'Cukup'),
('3578090201085742', 'ARIFUDIN SIRADJANG', 'SEMOLOWARU ELOK BLOK K/9', '', '003', '006', 'Cukup');

--
-- Trigger `keluarga`
--
DROP TRIGGER IF EXISTS `hapus_detail_klg`;
DELIMITER //
CREATE TRIGGER `hapus_detail_klg` AFTER DELETE ON `keluarga`
 FOR EACH ROW begin

delete  from det_keluarga where det_keluarga.id_keluarga = old.id_keluarga;

end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi_warga`
--

CREATE TABLE IF NOT EXISTS `mutasi_warga` (
  `id_mutasi` mediumint(9) NOT NULL AUTO_INCREMENT,
  `id_warga` varchar(20) NOT NULL,
  `jenis_mutasi` varchar(15) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id_mutasi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `mutasi_warga`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE IF NOT EXISTS `surat` (
  `id_surat` int(8) NOT NULL AUTO_INCREMENT,
  `jenis_surat` varchar(4) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `nama_surat` varchar(50) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `isi_surat` text,
  `tanda_tangan` varchar(50) NOT NULL,
  `id_warga` varchar(20) NOT NULL,
  `nama_warga` varchar(50) NOT NULL,
  PRIMARY KEY (`id_surat`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id_surat`, `jenis_surat`, `no_surat`, `nama_surat`, `tanggal`, `isi_surat`, `tanda_tangan`, `id_warga`, `nama_warga`) VALUES
(4, 'SK', '470/4/436.10.88/2015', 'Surat Keterangan ', '2015-08-16', '{"nama":"ARIFUDIN SIRADJANG","t_lahir":"Bone,  05-03-1953","j_kel":"Laki - laki","w_negara":"WNI","pendidikan":"SLTA\\/Sederajat","agama":"Islam","pekerjaan":"Karyawan Swasta","s_nikah":"nikah","no_ktp":"3578090503530004","alamat":"SEMOLOWARU ELOK BLOK K\\/9 RT 003 RW 006 Dusun ","ket":"Ijin Usaha"}', '{"pejabat":"Dra. Suwarti","nip":""}', '3578090503530004', 'ARIFUDIN SIRADJANG'),
(5, 'SK', '470/5/436.10.88/2015', 'Surat Keterangan Usaha', '2015-08-16', '{"nama":"ARIFUDIN SIRADJANG","t_lahir":"Bone,  05-03-1953","j_kel":"Laki - laki","w_negara":"WNI","pendidikan":"SLTA\\/Sederajat","agama":"Islam","pekerjaan":"Karyawan Swasta","s_nikah":"nikah","no_ktp":"3578090503530004","alamat":"SEMOLOWARU ELOK BLOK K\\/9 RT 003 RW 006 Dusun ","ket":"Ijin Usaha"}', '{"pejabat":"Dini P","nip":""}', '3578090503530004', 'ARIFUDIN SIRADJANG'),
(6, 'SK', '470/6/436.10.88/2015', 'Surat Keterangan ', '2015-08-19', '{"nama":"DANU FATAKHUL ALIM","t_lahir":"SURABAYA,  05-08-1992","j_kel":"Laki - laki","w_negara":"WNI","pendidikan":"DIPLOMA IV\\/STRATA I","agama":"Islam","pekerjaan":"PELAJAR\\/MAHASISWA","s_nikah":"belum_nikah","no_ktp":"3578090508920001","alamat":"SEMOLOWARU ELOK BLOK R\\/17 RT 001 RW 006 Dusun ","ket":"ok"}', '{"pejabat":"Dra. Suwarti","nip":""}', '3578090508920001', 'DANU FATAKHUL ALIM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','staf') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(84, 'adi', 'adi', 'staf');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_detail_warga`
--
CREATE TABLE IF NOT EXISTS `v_detail_warga` (
`id_keluarga` varchar(20)
,`no_ktp` varchar(20)
,`nama` varchar(50)
,`agama` varchar(20)
,`t_lahir` varchar(20)
,`tgl_lahir` varchar(10)
,`j_kel` varchar(11)
,`gol_darah` varchar(2)
,`w_negara` varchar(20)
,`pendidikan` varchar(30)
,`pekerjaan` varchar(30)
,`s_nikah` varchar(20)
,`alamat` text
,`rt` varchar(3)
,`rw` varchar(3)
,`dusun` varchar(20)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `v_mutasi_warga`
--
CREATE TABLE IF NOT EXISTS `v_mutasi_warga` (
`id_warga` varchar(20)
,`j_kel` enum('L','W')
,`jenis_mutasi` varchar(15)
,`periode` varchar(7)
,`keterangan` text
);
-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE IF NOT EXISTS `warga` (
  `no_ktp` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `t_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `j_kel` enum('L','W') NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `w_negara` varchar(20) NOT NULL,
  `pendidikan` varchar(30) DEFAULT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `s_nikah` varchar(20) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`no_ktp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`no_ktp`, `nama`, `agama`, `t_lahir`, `tgl_lahir`, `j_kel`, `gol_darah`, `w_negara`, `pendidikan`, `pekerjaan`, `s_nikah`, `status`) VALUES
('3578090503530004', 'ARIFUDIN SIRADJANG', 'Islam', 'Bone', '1953-03-05', 'L', 'AB', 'WNI', 'SLTA/Sederajat', 'Karyawan Swasta', 'nikah', '1'),
('3578090500254001', 'ZAIRENA', 'Islam', 'BANGKA', '1954-02-10', 'W', 'B', 'WNI', 'SLTA/Sederajat', 'MENGURUS RUMAH TANGGA', 'nikah', '1'),
('357809240680001', 'ARIZAL', 'Islam', 'SURABAYA', '1980-06-24', 'L', 'A', 'WNI', 'SLTP/Sederajat', 'PELAJAR/MAHASISWA', 'belum_nikah', '1'),
('357809590885001', 'RIA AGUSTIN', 'Islam', 'SURABAYA', '1985-08-19', 'W', 'B', 'WNI', 'SLTA/Sederajat', 'PELAJAR/MAHASISWA', 'belum_nikah', '1'),
('357809150452001', 'DUKA', 'Islam', 'SURABAYA', '1952-04-15', 'L', 'O', 'WNI', 'SLTA/Sederajat', 'KARYAWAN SWASTA', 'belum_nikah', '1'),
('3578091210710004', 'TONY HENDRIAWAN, SE', 'Islam', 'SURABAYA', '1971-10-12', 'L', '--', 'WNI', 'DIPLOMA IV/STRATA I', 'WIRASWASTA', 'nikah', '1'),
('35780950067200011', 'HESTI UTAMI, SE', 'Islam', 'SURABAYA', '1972-06-10', 'L', '--', 'WNI', 'DIPLOMA IV/STRATA I', 'MENGURUS RUMAH TANGGA', 'nikah', '1'),
('3578092606000002', 'RAYHAN AULIA ZAFIRAWAN', 'Islam', 'SURABAYA', '2000-06-26', 'L', '--', 'WNI', 'TAMAT SD/Sederajat', 'PELAJAR/MAHASISWA', 'belum_nikah', '1'),
('3578095612050002', 'ABHINAYA FAIZA UPADASTYA', 'Islam', 'SURABAYA', '2005-12-16', 'W', '--', 'WNI', 'BELUM TAMAT SD/Sederajat', 'PELAJAR/MAHASISWA', 'belum_nikah', '1'),
('3578095511540002', 'ROCHILAH FADILAH, SPD', 'Islam', 'SURABAYA', '1954-11-16', 'W', 'A', 'WNI', 'DIPLOMA IV/STRATA I', 'GURU', 'nikah', '1'),
('3578090508920001', 'DANU FATAKHUL ALIM', 'Islam', 'SURABAYA', '1992-08-05', 'L', 'A', 'WNI', 'DIPLOMA IV/STRATA I', 'PELAJAR/MAHASISWA', 'belum_nikah', '1'),
('3319032306860002', 'SATRIYO ADI LUKITO', 'Islam', 'KUDUS', '1986-06-23', 'L', 'O', 'WNI', 'AKADEMI/DIPLOMA III/S. MUDA', 'BELUM/TIDAK BEKERJA', 'nikah', '1'),
('3578095505850002', 'DYAH RACHIMAHIAH, SE', 'Islam', 'SURABAYA', '1985-05-16', 'W', 'B', 'WNI', 'DIPLOMA IV/STRATA I', 'PEGAWAI NEGERI SIPIL', 'nikah', '1'),
('3578096610140001', 'ANDINI ZAHRA SHIFA', 'Islam', 'SURABAYA', '2014-10-26', 'W', 'B', 'WNI', 'TIDAK/BELUM SEKOLAH', 'BELUM/TIDAK BEKERJA', 'belum_nikah', '1'),
('3578032612820002', 'INDRA WIDYA BHAKTI, S.E', 'Islam', 'SURABAYA', '1982-12-26', 'L', 'B', 'WNI', 'DIPLOMA IV/STRATA I', 'PEGAWAI NEGERI SIPIL', 'nikah', '1'),
('357896904830002', 'ANITA ARDHIANA, S.FARMA,APT', 'Islam', 'SURABAYA', '1983-04-29', 'W', 'B', 'WNI', 'DIPLOMA IV/STRATA I', 'KARYAWAN BUMN', 'nikah', '1'),
('357830402230004', 'HANIF NAUFALAH RAHMATULLAH', 'Islam', 'SURABAYA', '2012-01-04', 'L', 'B', 'WNI', 'TIDAK/BELUM SEKOLAH', 'BELUM/TIDAK BEKERJA', 'belum_nikah', '1'),
('3578319041400001', 'FAQIH HAFIZH AL RAFIF', 'Islam', 'SURABAYA', '2014-04-19', 'L', 'B', 'WNI', 'TIDAK/BELUM SEKOLAH', 'BELUM/TIDAK BEKERJA', 'belum_nikah', '1'),
('357890802850003', 'HERI SISWORO', 'Islam', 'KEDIRI', '1985-02-08', 'L', 'AB', 'WNI', 'SLTA/SEDERAJAT', 'KARYAWAN SWASTA', 'nikah', '1'),
('357894703840001', 'NISA NURINA VALERIE', 'Islam', 'SURABAYA', '1984-03-07', 'W', 'O', 'WNI', 'SRATA II', 'PEGAWAI NEGERI SIPIL', 'nikah', '1'),
('357896901130001', 'AIKO RISA NURSAKYA TAALEA', 'Islam', 'SURABAYA', '2013-01-29', 'W', 'B', 'WNI', 'TIDAK/BELUM SEKOLAH', 'BELUM/TIDAK BEKERJA', 'belum_nikah', '1'),
('357891407140001', 'HIROYUKI VATSARISA ABQARI', 'Islam', 'SURABAYA', '2014-07-14', 'L', 'B', 'WNI', 'TIDAK/BELUM SEKOLAH', 'BELUM/TIDAK BEKERJA', 'belum_nikah', '1'),
('3578142506820002', 'AMAN ASMUNIF, SH', 'Islam', 'SURABAYA', '1982-06-25', 'L', 'O', 'WNI', 'DIPLOMA IV/STRATA I', 'KEPOLOSIAN RI', 'nikah', '1'),
('3578096003840001', 'MARRY KRISTINA HANTANTIK', 'Islam', 'SURABAYA', '1984-03-20', 'W', 'B', 'WNI', 'DIPLOMA IV/STRATA I', 'MENGURUS RUMAH TANGGA', 'nikah', '1'),
('3578040608780005', 'WILIS WAHYU WIJAYA, ST', 'Islam', 'MAGETAN', '1978-08-06', 'L', 'B', 'WNI', 'DIPLOMA IV/STRATA I', 'WIRAUSAHA', 'nikah', '1'),
('3578094412800001', 'DIAH FAUZIAH, ST', 'Islam', 'SURABAYA', '1980-12-04', 'W', 'AB', 'WNI', 'DIPLOMA IV/STRATA I', 'MENGURUS RUMAH TANGGA', 'nikah', '1'),
('3578094809090002', 'ALMEERA DYANDRA NAWILLIS', 'Islam', 'SURABAYA', '2009-09-08', 'W', 'AB', 'WNI', 'TIDAK/BELUM SEKOLAH', 'BELUM/TIDAK BEKERJA', 'belum_nikah', '1');

-- --------------------------------------------------------

--
-- Structure for view `v_detail_warga`
--
DROP TABLE IF EXISTS `v_detail_warga`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_detail_warga` AS select `a`.`id_keluarga` AS `id_keluarga`,`c`.`no_ktp` AS `no_ktp`,`c`.`nama` AS `nama`,`c`.`agama` AS `agama`,`c`.`t_lahir` AS `t_lahir`,date_format(`c`.`tgl_lahir`,'%d-%m-%Y') AS `tgl_lahir`,if((`c`.`j_kel` = 'L'),'Laki - laki','Wanita') AS `j_kel`,`c`.`gol_darah` AS `gol_darah`,`c`.`w_negara` AS `w_negara`,`c`.`pendidikan` AS `pendidikan`,`c`.`pekerjaan` AS `pekerjaan`,`c`.`s_nikah` AS `s_nikah`,`a`.`alamat` AS `alamat`,`a`.`rt` AS `rt`,`a`.`rw` AS `rw`,`a`.`dusun` AS `dusun` from ((`keluarga` `a` join `det_keluarga` `b`) join `warga` `c`) where ((`a`.`id_keluarga` = `b`.`id_keluarga`) and (`b`.`no_ktp` = `c`.`no_ktp`) and (`c`.`status` = '1'));

-- --------------------------------------------------------

--
-- Structure for view `v_mutasi_warga`
--
DROP TABLE IF EXISTS `v_mutasi_warga`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_mutasi_warga` AS select `mutasi_warga`.`id_warga` AS `id_warga`,`warga`.`j_kel` AS `j_kel`,`mutasi_warga`.`jenis_mutasi` AS `jenis_mutasi`,date_format(`mutasi_warga`.`tanggal`,'%m-%Y') AS `periode`,`mutasi_warga`.`keterangan` AS `keterangan` from (`mutasi_warga` join `warga` on((`warga`.`no_ktp` = `mutasi_warga`.`id_warga`)));
