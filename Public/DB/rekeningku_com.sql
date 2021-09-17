-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 01:14 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekeningku.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `exchange`
--

CREATE TABLE `exchange` (
  `id` int(11) NOT NULL,
  `Coin_Code` varchar(16) NOT NULL,
  `Close_Price` bigint(11) NOT NULL,
  `Last_Transaction` int(11) NOT NULL,
  `High` bigint(20) NOT NULL,
  `Low` bigint(20) NOT NULL,
  `Open` bigint(20) NOT NULL,
  `Volume` bigint(20) NOT NULL,
  `Change_Percentage` decimal(5,2) NOT NULL,
  `Market_Cap` bigint(20) NOT NULL,
  `Retrieve_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exchange`
--

INSERT INTO `exchange` (`id`, `Coin_Code`, `Close_Price`, `Last_Transaction`, `High`, `Low`, `Open`, `Volume`, `Change_Percentage`, `Market_Cap`, `Retrieve_Time`) VALUES
(1, 'BTC', 684080000, 0, 690000000, 674000000, 687040000, 67172770152, '-0.43', 12912864238381765, '2021-09-17 10:14:44'),
(2, 'BCH', 9140000, 1, 9280000, 8975000, 9210000, 422201841, '-0.76', 172569349568430, '2021-09-17 10:14:44'),
(3, 'BTG', 960000, 1, 995000, 960000, 985000, 213954329, '-2.53', 16987622855990, '2021-09-17 10:14:44'),
(4, 'AAVE', 5300000, 1, 5860000, 5285000, 5675000, 7192019388, '-6.60', 70464061898615, '2021-09-17 10:14:44'),
(5, 'ALGO', 28600, 0, 31800, 28450, 30650, 18037793636, '-6.68', 151828449554605, '2021-09-17 10:14:44'),
(6, 'BAT', 11000, 1, 11570, 10960, 11370, 580987352, '-3.25', 16386726118400, '2021-09-17 10:14:44'),
(7, 'COMP', 5850000, 0, 6450000, 5850000, 6350000, 1049571890, '-7.87', 31516987135860, '2021-09-17 10:14:44'),
(8, 'DASH', 2895000, 1, 3075000, 2890000, 3050000, 3224539008, '-5.08', 30282016177615, '2021-09-17 10:14:44'),
(9, 'DOGE', 3530, 0, 3740, 3340, 3490, 4383102686, '1.14', 471726316659900, '2021-09-17 10:14:44'),
(10, 'EOS', 75900, 1, 76600, 70100, 72700, 5459164279, '4.40', 72507333018990, '2021-09-17 10:14:44'),
(11, 'ETH', 50270000, 1, 52120000, 50000000, 51710000, 16301140922, '-2.78', 5926126509692085, '2021-09-17 10:14:44'),
(12, 'HBAR', 6320, 0, 8100, 6320, 7030, 37214887974, '-10.09', 63389488435770, '2021-09-17 10:14:44'),
(13, 'HOT', 138, 1, 143, 137, 143, 3421823991, '-3.49', 24795656054935, '2021-09-17 10:14:44'),
(14, 'JST', 1380, 0, 1445, 1365, 1400, 1828437160, '-1.42', 1987448738155, '2021-09-17 10:14:44'),
(15, 'LINK', 420000, 1, 451000, 418000, 450000, 9042340664, '-6.66', 191248219064475, '2021-09-17 10:14:44'),
(16, 'LTC', 2655000, 1, 2770000, 2615000, 2760000, 2867818055, '-3.80', 177869563480385, '2021-09-17 10:14:44'),
(17, 'MATIC', 19350, 0, 21200, 19350, 21200, 6476922623, '-8.72', 130596717463585, '2021-09-17 10:14:44'),
(18, 'MIRA', 40000, 1, 42000, 40000, 41000, 45553261, '-2.43', 0, '2021-09-17 10:14:44'),
(19, 'SUN', 593, 0, 600, 498, 528, 17128847046, '12.31', 2742981277895, '2021-09-17 10:14:44'),
(20, 'SUSHI', 197000, 1, 230000, 196500, 216000, 6980399831, '-8.79', 38331600018245, '2021-09-17 10:14:44'),
(21, 'TRX', 1640, 1, 1720, 1610, 1665, 3233239891, '-1.50', 117333819699475, '2021-09-17 10:14:44'),
(22, 'UMA', 171000, 1, 188000, 166000, 184000, 1678709107, '-7.06', 10678871237510, '2021-09-17 10:14:44'),
(23, 'UNI', 364000, 0, 392000, 364000, 386000, 2889937037, '-5.69', 189920089041040, '2021-09-17 10:14:44'),
(24, 'USDC', 14330, 1, 14340, 14305, 14320, 485360813, '0.06', 419486475110630, '2021-09-17 10:14:44'),
(25, 'USDT', 14340, 1, 14350, 14315, 14340, 3572763382, '0.00', 995029151428405, '2021-09-17 10:14:44'),
(26, 'XLM', 4680, 1, 4830, 4660, 4830, 2129351075, '-3.10', 111789576753350, '2021-09-17 10:14:44'),
(27, 'XRP', 15450, 1, 16000, 15350, 15950, 1888876774, '-3.13', 722725841699525, '2021-09-17 10:14:44'),
(28, 'YFI', 486500000, 0, 520800000, 486500000, 518700000, 5332206867, '-6.20', 17466495113670, '2021-09-17 10:14:44'),
(29, 'ZRX', 15900, 1, 17900, 15900, 16700, 292715844, '-4.79', 13363169784625, '2021-09-17 10:14:44'),
(30, 'AK12', 1200, 0, 1200, 1100, 1200, 166708797, '0.00', 0, '2021-09-17 10:14:44'),
(31, 'ANA', 965, 0, 970, 963, 967, 309081566, '-0.20', 193000000000, '2021-09-17 10:14:44'),
(32, 'BBX', 4530, 1, 4560, 4450, 4540, 25987053, '-0.22', 95130000000, '2021-09-17 10:14:44'),
(33, 'BTC', 681340000, 1, 690000000, 674000000, 686840000, 66143437670, '-0.80', 12902498225547234, '2021-09-17 10:25:03'),
(34, 'BCH', 9035000, 1, 9280000, 8975000, 9170000, 471426659, '-1.47', 172747199952266, '2021-09-17 10:25:03'),
(35, 'BTG', 960000, 1, 995000, 960000, 985000, 228153502, '-2.53', 16968588974402, '2021-09-17 10:25:03'),
(36, 'AAVE', 5305000, 0, 5860000, 5225000, 5670000, 7343440935, '-6.43', 70009339040824, '2021-09-17 10:25:03'),
(37, 'ALGO', 28150, 1, 31800, 28150, 30900, 17885845799, '-8.89', 150257923502086, '2021-09-17 10:25:03'),
(38, 'BAT', 10880, 1, 11570, 10880, 11330, 566370182, '-3.97', 16374361203198, '2021-09-17 10:25:03'),
(39, 'COMP', 5800000, 1, 6450000, 5800000, 6300000, 1105834760, '-7.93', 31482886369872, '2021-09-17 10:25:03'),
(40, 'DASH', 2865000, 1, 3075000, 2865000, 3050000, 3253976164, '-6.06', 30003398748674, '2021-09-17 10:25:03'),
(41, 'DOGE', 3480, 0, 3740, 3340, 3490, 4481290567, '-0.28', 464327879341280, '2021-09-17 10:25:03'),
(42, 'EOS', 74400, 1, 76600, 70100, 72700, 5565043392, '2.33', 73734782154344, '2021-09-17 10:25:03'),
(43, 'ETH', 49900000, 1, 52120000, 49900000, 51680000, 16633957751, '-3.44', 5923670152364910, '2021-09-17 10:25:03'),
(44, 'HBAR', 6210, 0, 8100, 6200, 7020, 37441740840, '-11.53', 61877804654534, '2021-09-17 10:25:03'),
(45, 'HOT', 137, 1, 143, 137, 143, 3533190391, '-4.19', 24666049859434, '2021-09-17 10:25:03'),
(46, 'JST', 1370, 1, 1445, 1365, 1405, 1789368505, '-2.49', 1996137607406, '2021-09-17 10:25:03'),
(47, 'LINK', 409500, 0, 451000, 409000, 451000, 9220393791, '-9.20', 190178150384294, '2021-09-17 10:25:03'),
(48, 'LTC', 2620000, 1, 2770000, 2615000, 2745000, 2900685706, '-4.55', 177567662636748, '2021-09-17 10:25:03'),
(49, 'MATIC', 19100, 0, 21150, 19100, 21050, 6557648261, '-9.26', 129307347888884, '2021-09-17 10:25:03'),
(50, 'MIRA', 40000, 1, 42000, 40000, 41000, 45553261, '-2.43', 0, '2021-09-17 10:25:03'),
(51, 'SUN', 595, 0, 600, 498, 530, 18605360284, '12.26', 2986162599546, '2021-09-17 10:25:03'),
(52, 'SUSHI', 194500, 1, 230000, 194500, 216000, 7094237348, '-9.95', 38146692976170, '2021-09-17 10:25:03'),
(53, 'TRX', 1615, 0, 1720, 1610, 1660, 3280284930, '-2.71', 117473538102262, '2021-09-17 10:25:03'),
(54, 'UMA', 166000, 1, 188000, 166000, 184000, 1697150857, '-9.78', 10633177841094, '2021-09-17 10:25:03'),
(55, 'UNI', 358000, 1, 392000, 358000, 387000, 2929994690, '-7.49', 189139196522676, '2021-09-17 10:25:03'),
(56, 'USDC', 14330, 1, 14340, 14305, 14335, 453040722, '-0.03', 419889974410882, '2021-09-17 10:25:03'),
(57, 'USDT', 14340, 1, 14350, 14315, 14340, 3572763382, '0.00', 995501039471508, '2021-09-17 10:25:03'),
(58, 'XLM', 4630, 1, 4820, 4630, 4820, 2172228975, '-3.94', 111346590764130, '2021-09-17 10:25:03'),
(59, 'XRP', 15300, 1, 16000, 15300, 15950, 1928475857, '-4.07', 720134675411026, '2021-09-17 10:25:03'),
(60, 'YFI', 482700000, 1, 520800000, 482700000, 519100000, 5343630731, '-7.01', 17446490716342, '2021-09-17 10:25:03'),
(61, 'ZRX', 15700, 1, 17900, 15700, 16350, 313825592, '-3.97', 13329097654412, '2021-09-17 10:25:03'),
(62, 'AK12', 1200, 0, 1200, 1100, 1200, 166708797, '0.00', 0, '2021-09-17 10:25:03'),
(63, 'ANA', 964, 0, 970, 963, 968, 301816063, '-0.41', 192800000000, '2021-09-17 10:25:03'),
(64, 'BBX', 4520, 1, 4560, 4450, 4540, 26023241, '-0.44', 94920000000, '2021-09-17 10:25:03'),
(65, 'BTC', 680000000, 0, 690000000, 674000000, 686380000, 66848073475, '-0.92', 12850925303140704, '2021-09-17 11:05:32'),
(66, 'BCH', 8990000, 1, 9280000, 8970000, 9195000, 537725496, '-2.22', 169079159405520, '2021-09-17 11:05:32'),
(67, 'BTG', 950000, 1, 995000, 950000, 985000, 214398746, '-3.55', 16808775977136, '2021-09-17 11:05:32'),
(68, 'AAVE', 5240000, 1, 5860000, 5200000, 5640000, 7472559183, '-7.09', 69268530904560, '2021-09-17 11:05:32'),
(69, 'ALGO', 28350, 1, 31800, 28000, 31200, 16506326056, '-9.13', 148466190095808, '2021-09-17 11:05:32'),
(70, 'BAT', 10880, 1, 11570, 10880, 11330, 566400182, '-3.97', 16170966509568, '2021-09-17 11:05:32'),
(71, 'COMP', 5800000, 0, 6450000, 5750000, 6350000, 1107344040, '-8.66', 31029813388704, '2021-09-17 11:05:32'),
(72, 'DASH', 2870000, 0, 3075000, 2850000, 3045000, 3303734937, '-5.74', 29643425086080, '2021-09-17 11:05:32'),
(73, 'DOGE', 3470, 0, 3740, 3340, 3490, 4478081574, '-0.57', 457022137544544, '2021-09-17 11:05:32'),
(74, 'EOS', 74200, 1, 76600, 70100, 72700, 5825652051, '2.06', 71672015638080, '2021-09-17 11:05:32'),
(75, 'ETH', 49700000, 0, 52120000, 49380000, 51650000, 17747238918, '-3.77', 5846614568000544, '2021-09-17 11:05:32'),
(76, 'HBAR', 6240, 0, 8100, 6190, 6980, 37795917175, '-10.60', 60258890623152, '2021-09-17 11:05:32'),
(77, 'HOT', 137, 0, 143, 136, 143, 3918201654, '-4.19', 24291352364448, '2021-09-17 11:05:32'),
(78, 'JST', 1350, 1, 1445, 1350, 1415, 1801818494, '-4.59', 1955467635264, '2021-09-17 11:05:32'),
(79, 'LINK', 410000, 0, 450000, 406000, 448000, 9339301511, '-8.48', 185188476568992, '2021-09-17 11:05:32'),
(80, 'LTC', 2610000, 1, 2770000, 2605000, 2735000, 2928765162, '-4.57', 174653739492960, '2021-09-17 11:05:32'),
(81, 'MATIC', 19000, 1, 21150, 19000, 20850, 6439625133, '-8.87', 127142392719888, '2021-09-17 11:05:32'),
(82, 'MIRA', 40000, 1, 42000, 40000, 41000, 45990398, '-2.43', 0, '2021-09-17 11:05:32'),
(83, 'SUN', 571, 0, 600, 498, 523, 20881113246, '9.17', 2876478344688, '2021-09-17 11:05:32'),
(84, 'SUSHI', 193500, 0, 230000, 191000, 215000, 7169621910, '-10.00', 37154349228048, '2021-09-17 11:05:32'),
(85, 'TRX', 1605, 0, 1720, 1600, 1650, 3470617341, '-2.72', 115358396352576, '2021-09-17 11:05:32'),
(86, 'UMA', 166000, 0, 188000, 165000, 185000, 1605979316, '-10.27', 10458948656208, '2021-09-17 11:05:32'),
(87, 'UNI', 356000, 0, 392000, 355000, 387000, 2967801869, '-8.01', 185053423158240, '2021-09-17 11:05:32'),
(88, 'USDC', 14350, 1, 14360, 14305, 14335, 480845179, '0.10', 420337068462480, '2021-09-17 11:05:32'),
(89, 'USDT', 14325, 1, 14380, 14315, 14335, 6951952694, '-0.06', 995675871704592, '2021-09-17 11:05:32'),
(90, 'XLM', 4620, 0, 4820, 4610, 4810, 2135848530, '-3.95', 110317755314208, '2021-09-17 11:05:32'),
(91, 'XRP', 15300, 0, 16000, 15200, 15900, 1953027767, '-3.77', 712050883101792, '2021-09-17 11:05:32'),
(92, 'YFI', 481000000, 1, 520800000, 478500000, 514000000, 5274715685, '-6.42', 17193451728960, '2021-09-17 11:05:32'),
(93, 'ZRX', 15450, 1, 17900, 15450, 16550, 314458351, '-6.64', 13073111349168, '2021-09-17 11:05:32'),
(94, 'AK12', 1100, 1, 1200, 1100, 1100, 168521001, '0.00', 0, '2021-09-17 11:05:32'),
(95, 'ANA', 963, 1, 970, 963, 967, 307236513, '-0.41', 192600000000, '2021-09-17 11:05:32'),
(96, 'BBX', 4520, 1, 4560, 4450, 4540, 26023241, '-0.44', 94920000000, '2021-09-17 11:05:32');

-- --------------------------------------------------------

--
-- Table structure for table `markets`
--

CREATE TABLE `markets` (
  `id` int(11) NOT NULL,
  `Nama` varchar(25) NOT NULL,
  `Coin_Code` varchar(16) NOT NULL,
  `st` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `markets`
--

INSERT INTO `markets` (`id`, `Nama`, `Coin_Code`, `st`) VALUES
(1, 'Bitcoin', 'BTC', 1),
(2, 'Bitcoin Cash', 'BCH', 1),
(3, 'Bitcoin Gold', 'BTG', 1),
(4, 'Aave Token', 'AAVE', 1),
(5, 'Algorand', 'ALGO', 1),
(6, 'Basic Attention Token', 'BAT', 1),
(7, 'Compound', 'COMP', 1),
(8, 'Dash', 'DASH', 1),
(9, 'Dogecoin', 'DOGE', 1),
(10, 'EOS', 'EOS', 1),
(11, 'Ethereum', 'ETH', 1),
(12, 'Hedera Hashgraph', 'HBAR', 1),
(13, 'Holo', 'HOT', 1),
(14, 'JUST', 'JST', 1),
(15, 'ChainLink', 'LINK', 1),
(16, 'Litecoin', 'LTC', 1),
(17, 'Polygon', 'MATIC', 1),
(18, 'MIRA', 'MIRA', 1),
(19, 'SUN', 'SUN', 1),
(20, 'SushiSwap', 'SUSHI', 1),
(21, 'Tron', 'TRX', 1),
(22, 'Uma', 'UMA', 1),
(23, 'Uniswap', 'UNI', 1),
(24, 'USD Coin', 'USDC', 1),
(25, 'Tether ERC20', 'USDT', 1),
(26, 'Stellar', 'XLM', 1),
(27, 'XRP', 'XRP', 1),
(28, 'yearn.finance', 'YFI', 1),
(29, '0x', 'ZRX', 1),
(30, 'AK12', 'AK12', 1),
(31, 'ANA Coin', 'ANA', 1),
(32, 'BBX Coin', 'BBX', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movement`
--

CREATE TABLE `movement` (
  `id` int(11) NOT NULL,
  `Code_Coin` varchar(16) NOT NULL,
  `Range_V` bigint(20) NOT NULL,
  `Top_V` bigint(20) NOT NULL,
  `Lower_V` bigint(20) NOT NULL,
  `Range_P` bigint(20) NOT NULL,
  `Top_P` bigint(20) NOT NULL,
  `Lower_P` bigint(20) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exchange`
--
ALTER TABLE `exchange`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Coin_Code` (`Coin_Code`);

--
-- Indexes for table `markets`
--
ALTER TABLE `markets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Coin_Code` (`Coin_Code`);

--
-- Indexes for table `movement`
--
ALTER TABLE `movement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Code_Coin` (`Code_Coin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exchange`
--
ALTER TABLE `exchange`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `markets`
--
ALTER TABLE `markets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `movement`
--
ALTER TABLE `movement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exchange`
--
ALTER TABLE `exchange`
  ADD CONSTRAINT `exchange_ibfk_1` FOREIGN KEY (`Coin_Code`) REFERENCES `markets` (`Coin_Code`);

--
-- Constraints for table `movement`
--
ALTER TABLE `movement`
  ADD CONSTRAINT `movement_ibfk_1` FOREIGN KEY (`Code_Coin`) REFERENCES `markets` (`Coin_Code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;