-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Sep 2021 pada 16.21
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data`
--

CREATE TABLE `tbl_data` (
  `id` int(11) NOT NULL,
  `id_coin` int(11) NOT NULL,
  `high` double NOT NULL,
  `low` double NOT NULL,
  `vol_coin` double NOT NULL,
  `vol_pair` double NOT NULL,
  `last` double NOT NULL,
  `buy` double NOT NULL,
  `sell` double NOT NULL,
  `server_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_market`
--

CREATE TABLE `tbl_market` (
  `id` int(11) NOT NULL,
  `nama_market` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pair` varchar(7) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tbl_market`
--

INSERT INTO `tbl_market` (`id`, `nama_market`, `pair`) VALUES
(1, 'btc_idr', 'idr'),
(2, 'ten_idr', 'idr'),
(3, '1inch_idr', 'idr'),
(4, 'aave_idr', 'idr'),
(5, 'abyss_idr', 'idr'),
(6, 'act_idr', 'idr'),
(7, 'ada_idr', 'idr'),
(8, 'aioz_idr', 'idr'),
(9, 'alice_idr', 'idr'),
(10, 'algo_idr', 'idr'),
(11, 'amp_idr', 'idr'),
(12, 'ankr_idr', 'idr'),
(13, 'aoa_idr', 'idr'),
(14, 'ata_idr', 'idr'),
(15, 'atom_idr', 'idr'),
(16, 'att_idr', 'idr'),
(17, 'axs_idr', 'idr'),
(18, 'bake_idr', 'idr'),
(19, 'bal_idr', 'idr'),
(20, 'bat_idr', 'idr'),
(21, 'bcd_idr', 'idr'),
(22, 'bch_idr', 'idr'),
(23, 'bnb_idr', 'idr'),
(24, 'bnt_idr', 'idr'),
(25, 'botx_idr', 'idr'),
(26, 'bsv_idr', 'idr'),
(27, 'btg_idr', 'idr'),
(28, 'bts_idr', 'idr'),
(29, 'btt_idr', 'idr'),
(30, 'busd_idr', 'idr'),
(31, 'cake_idr', 'idr'),
(32, 'cel_idr', 'idr'),
(33, 'celo_idr', 'idr'),
(34, 'chz_idr', 'idr'),
(35, 'ckb_idr', 'idr'),
(36, 'coal_idr', 'idr'),
(37, 'comp_idr', 'idr'),
(38, 'coti_idr', 'idr'),
(39, 'cre_idr', 'idr'),
(40, 'cro_idr', 'idr'),
(41, 'crv_idr', 'idr'),
(42, 'dad_idr', 'idr'),
(43, 'dai_idr', 'idr'),
(44, 'dash_idr', 'idr'),
(45, 'dax_idr', 'idr'),
(46, 'dep_idr', 'idr'),
(47, 'dgb_idr', 'idr'),
(48, 'dgx_idr', 'idr'),
(49, 'doge_idr', 'idr'),
(50, 'dot_idr', 'idr'),
(51, 'dvi_idr', 'idr'),
(52, 'egld_idr', 'idr'),
(53, 'em_idr', 'idr'),
(54, 'enj_idr', 'idr'),
(55, 'eos_idr', 'idr'),
(56, 'etc_idr', 'idr'),
(57, 'eth_idr', 'idr'),
(58, 'ethhedge_idr', 'idr'),
(59, 'eurs_idr', 'idr'),
(60, 'fil_idr', 'idr'),
(61, 'firo_idr', 'idr'),
(62, 'ftm_idr', 'idr'),
(63, 'ftt_idr', 'idr'),
(64, 'glch_idr', 'idr'),
(65, 'grt_idr', 'idr'),
(66, 'gsc_idr', 'idr'),
(67, 'gxc_idr', 'idr'),
(68, 'hart_idr', 'idr'),
(69, 'hbar_idr', 'idr'),
(70, 'hedg_idr', 'idr'),
(71, 'hedge_idr', 'idr'),
(72, 'hibs_idr', 'idr'),
(73, 'hive_idr', 'idr'),
(74, 'hnst_idr', 'idr'),
(75, 'hot_idr', 'idr'),
(76, 'hpb_idr', 'idr'),
(77, 'idk_idr', 'idr'),
(78, 'ignis_idr', 'idr'),
(79, 'inj_idr', 'idr'),
(80, 'iost_idr', 'idr'),
(81, 'iota_idr', 'idr'),
(82, 'jst_idr', 'idr'),
(83, 'kai_idr', 'idr'),
(84, 'kdag_idr', 'idr'),
(85, 'klay_idr', 'idr'),
(86, 'let_idr', 'idr'),
(87, 'lgold_idr', 'idr'),
(88, 'link_idr', 'idr'),
(89, 'lland_idr', 'idr'),
(90, 'loom_idr', 'idr'),
(91, 'lsilver_idr', 'idr'),
(92, 'ltc_idr', 'idr'),
(93, 'lyfe_idr', 'idr'),
(94, 'mana_idr', 'idr'),
(95, 'matic_idr', 'idr'),
(96, 'mbl_idr', 'idr'),
(97, 'mkr_idr', 'idr'),
(98, 'neo_idr', 'idr'),
(99, 'nexo_idr', 'idr'),
(100, 'nrg_idr', 'idr'),
(101, 'nxt_idr', 'idr'),
(102, 'ocean_idr', 'idr'),
(103, 'octo_idr', 'idr'),
(104, 'ogn_idr', 'idr'),
(105, 'okb_idr', 'idr'),
(106, 'omg_idr', 'idr'),
(107, 'ont_idr', 'idr'),
(108, 'orbs_idr', 'idr'),
(109, 'oxt_idr', 'idr'),
(110, 'pando_idr', 'idr'),
(111, 'pax_idr', 'idr'),
(112, 'paxg_idr', 'idr'),
(113, 'qnt_idr', 'idr'),
(114, 'qtum_idr', 'idr'),
(115, 'ren_idr', 'idr'),
(116, 'rep_idr', 'idr'),
(117, 'rvn_idr', 'idr'),
(118, 'sand_idr', 'idr'),
(119, 'sfi_idr', 'idr'),
(120, 'slp_idr', 'idr'),
(121, 'snx_idr', 'idr'),
(122, 'solve_idr', 'idr'),
(123, 'sumo_idr', 'idr'),
(124, 'sushi_idr', 'idr'),
(125, 'tad_idr', 'idr'),
(126, 'tel_idr', 'idr'),
(127, 'tfuel_idr', 'idr'),
(128, 'theta_idr', 'idr'),
(129, 'titan_idr', 'idr'),
(130, 'trx_idr', 'idr'),
(131, 'uma_idr', 'idr'),
(132, 'uni_idr', 'idr'),
(133, 'usdc_idr', 'idr'),
(134, 'usdt_idr', 'idr'),
(135, 'velo_idr', 'idr'),
(136, 'vex_idr', 'idr'),
(137, 'vidy_idr', 'idr'),
(138, 'vidyx_idr', 'idr'),
(139, 'vra_idr', 'idr'),
(140, 'vsys_idr', 'idr'),
(141, 'waves_idr', 'idr'),
(142, 'wbtc_idr', 'idr'),
(143, 'wnxm_idr', 'idr'),
(144, 'wozx_idr', 'idr'),
(145, 'xdc_idr', 'idr'),
(146, 'xem_idr', 'idr'),
(147, 'xlm_idr', 'idr'),
(148, 'xmr_idr', 'idr'),
(149, 'xrp_idr', 'idr'),
(150, 'xsgd_idr', 'idr'),
(151, 'xtz_idr', 'idr'),
(152, 'xvs_idr', 'idr'),
(153, 'yfi_idr', 'idr'),
(154, 'yfii_idr', 'idr'),
(155, 'zec_idr', 'idr'),
(156, 'zil_idr', 'idr'),
(157, 'zrx_idr', 'idr'),
(158, 'btc_usdt', 'usdt'),
(159, 'btt_usdt', 'usdt'),
(160, 'eth_usdt', 'usdt'),
(161, 'gard_usdt', 'usdt'),
(162, 'pundix_usdt', 'usdt'),
(163, 'pxg_usdt', 'usdt'),
(164, 'shib_usdt', 'usdt'),
(165, 'ssp_usdt', 'usdt'),
(166, 'xec_usdt', 'usdt');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_data`
--
ALTER TABLE `tbl_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_coin` (`id_coin`);

--
-- Indeks untuk tabel `tbl_market`
--
ALTER TABLE `tbl_market`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_data`
--
ALTER TABLE `tbl_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_market`
--
ALTER TABLE `tbl_market`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_data`
--
ALTER TABLE `tbl_data`
  ADD CONSTRAINT `tbl_data_fk_1` FOREIGN KEY (`id_coin`) REFERENCES `tbl_market` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
