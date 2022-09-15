-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 15 sep. 2022 à 04:44
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestock`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `CATEGORY_ID` int(11) NOT NULL,
  `CNAME` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`CATEGORY_ID`, `CNAME`) VALUES
(0, 'Clavier'),
(1, 'Ram'),
(2, 'SourisHp'),
(3, 'Processeur'),
(16, 'Ecran');

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

CREATE TABLE `customer` (
  `CUST_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(50) DEFAULT NULL,
  `LAST_NAME` varchar(50) DEFAULT NULL,
  `PHONE_NUMBER` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`CUST_ID`, `FIRST_NAME`, `LAST_NAME`, `PHONE_NUMBER`) VALUES
(18, 'abdelkarim', 'marnissi', '0770831055'),
(20, 'abdo', 'elmarnissi', '0710203040'),
(24, 'ahmed', 'ahmadi', '0609342390'),
(25, 'amine', 'amini', '0697319202'),
(27, 'hiba', 'hibi', '0699308495'),
(28, 'maria', 'mari', '0789894839'),
(29, 'Nisrine', 'rachidi', '0790495044');

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

CREATE TABLE `employee` (
  `EMPLOYEE_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(50) DEFAULT NULL,
  `LAST_NAME` varchar(50) DEFAULT NULL,
  `GENDER` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `PHONE_NUMBER` varchar(11) DEFAULT NULL,
  `JOB_ID` int(11) DEFAULT NULL,
  `HIRED_DATE` varchar(50) NOT NULL,
  `LOCATION_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employee`
--

INSERT INTO `employee` (`EMPLOYEE_ID`, `FIRST_NAME`, `LAST_NAME`, `GENDER`, `EMAIL`, `PHONE_NUMBER`, `JOB_ID`, `HIRED_DATE`, `LOCATION_ID`) VALUES
(1, 'Karim', 'Marnissi', 'Homme', 'marnissiabdelkarim2001@gmail.com', '0770831054', 1, '2021-08-06', 113),
(4, 'Amin', 'Wadie', 'Homme', 'Aminewadie@gmail.com', '0689091201', 1, '2019-03-06', 158),
(5, 'Iman', 'Najiba', 'Femme', 'imannajib1@gmail.com', '0698096530', 2, '2021-08-06', 159);

-- --------------------------------------------------------

--
-- Structure de la table `job`
--

CREATE TABLE `job` (
  `JOB_ID` int(11) NOT NULL,
  `JOB_TITLE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `job`
--

INSERT INTO `job` (`JOB_ID`, `JOB_TITLE`) VALUES
(1, 'Directeur'),
(2, 'Caissier');

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE `location` (
  `LOCATION_ID` int(11) NOT NULL,
  `PROVINCE` varchar(100) DEFAULT NULL,
  `CITY` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `location`
--

INSERT INTO `location` (`LOCATION_ID`, `PROVINCE`, `CITY`) VALUES
(113, 'Maroc', 'Fes'),
(158, 'Maroc', 'Asfi'),
(159, 'Maroc', 'Taza'),
(173, 'Maroc', 'Fes'),
(174, 'Maroc', 'Taza'),
(175, 'Tunis', 'Gasba'),
(176, 'Tunis', 'Gafsa');

-- --------------------------------------------------------

--
-- Structure de la table `manager`
--

CREATE TABLE `manager` (
  `FIRST_NAME` varchar(50) DEFAULT NULL,
  `LAST_NAME` varchar(50) DEFAULT NULL,
  `LOCATION_ID` int(11) NOT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `PHONE_NUMBER` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `manager`
--

INSERT INTO `manager` (`FIRST_NAME`, `LAST_NAME`, `LOCATION_ID`, `EMAIL`, `PHONE_NUMBER`) VALUES
('Karim', 'Marnissi', 113, 'abdelkarim.marnissi@usmba.ac.ma', '0770831055'),
('Amin', 'Wali', 113, 'AminWali@mail.com', '0606491234');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `PRODUCT_ID` int(11) NOT NULL,
  `PRODUCT_CODE` varchar(20) NOT NULL,
  `NAME` varchar(50) DEFAULT NULL,
  `DESCRIPTION` varchar(250) NOT NULL,
  `QTY_STOCK` int(50) DEFAULT NULL,
  `ON_HAND` int(250) NOT NULL,
  `PRICE` int(50) DEFAULT NULL,
  `CATEGORY_ID` int(11) DEFAULT NULL,
  `SUPPLIER_ID` int(11) DEFAULT NULL,
  `DATE_STOCK_IN` varchar(50) NOT NULL,
  `Expiration_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`PRODUCT_ID`, `PRODUCT_CODE`, `NAME`, `DESCRIPTION`, `QTY_STOCK`, `ON_HAND`, `PRICE`, `CATEGORY_ID`, `SUPPLIER_ID`, `DATE_STOCK_IN`, `Expiration_date`) VALUES
(77, '65431', 'Processeur Intel', 'Marque : INTEL', 20, 59, 500, 3, 28, '0002-02-02', '0001-01-01'),
(78, '5677', 'Ecran E-3', 'Marque : T1', 45, 41, 1000, 16, 27, '0001-01-01', '0001-01-01'),
(80, '32', 'Souris-A555', 'Marque : OPO', 29, 45, 250, 2, 27, '2020-06-13', '2023-10-11'),
(81, '333331', 'Clavier-RE', 'Marque : DELL', 21, 29, 100, 0, 28, '2021-08-25', ''),
(85, '22', 'RAM-4GH', 'RAM 4GH', 47, 3, 60, 1, 27, '2022-09-15', '2024-09-15'),
(86, '23', 'RAM-8GH', 'RAM 8GH', 26, 4, 100, 1, 27, '2021-01-02', '2024-09-15');

-- --------------------------------------------------------

--
-- Structure de la table `supplier`
--

CREATE TABLE `supplier` (
  `SUPPLIER_ID` int(11) NOT NULL,
  `COMPANY_NAME` varchar(50) DEFAULT NULL,
  `LOCATION_ID` int(11) NOT NULL,
  `PHONE_NUMBER` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `supplier`
--

INSERT INTO `supplier` (`SUPPLIER_ID`, `COMPANY_NAME`, `LOCATION_ID`, `PHONE_NUMBER`) VALUES
(27, 'MARYAM', 173, '0698451209'),
(28, 'HOYAM', 174, '0734102938');

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE `transaction` (
  `TRANS_ID` int(50) NOT NULL,
  `CUST_ID` int(11) DEFAULT NULL,
  `NUMOFITEMS` varchar(250) NOT NULL,
  `SUBTOTAL` varchar(50) NOT NULL,
  `LESSVAT` varchar(50) NOT NULL,
  `NETVAT` varchar(50) NOT NULL,
  `ADDVAT` varchar(50) NOT NULL,
  `GRANDTOTAL` varchar(250) NOT NULL,
  `DATE` varchar(50) NOT NULL,
  `TRANS_D_ID` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `transaction`
--

INSERT INTO `transaction` (`TRANS_ID`, `CUST_ID`, `NUMOFITEMS`, `SUBTOTAL`, `LESSVAT`, `NETVAT`, `ADDVAT`, `GRANDTOTAL`, `DATE`, `TRANS_D_ID`) VALUES
(22, 18, '1', '220.00', '23.57', '196.43', '23.57', '220.00', '2021-08-23 14:09 pm', 'f'),
(25, 18, '1', '1,320.00', '264.00', '1,178.57', '141.43', '1,320.00', '2021-06-10', '082423224'),
(351, 18, '2', '460.00', '49.29', '410.71', '49.29', '460.00', '2021-08-25 00:02 am', '082500259'),
(353, 25, '3', '680.00', '72.86', '607.14', '72.86', '680.00', '2021-08-25 00:08 am', '082500911'),
(356, 18, '1', '240.00', '25.71', '214.29', '25.71', '240.00', '2021-08-25 02:28 am', '082522825'),
(357, 24, '1', '500.00', '53.57', '446.43', '53.57', '500.00', '2021-08-25 13:09 pm', '0825130927'),
(358, 20, '2', '609.00', '65.25', '543.75', '65.25', '609.00', '2021-08-25 13:15 pm', '0825131522'),
(359, 25, '1', '1,596.00', '171.00', '1,425.00', '171.00', '1,596.00', '2023-06-20', '0825132125'),
(363, 24, '1', '240.00', '25.71', '214.29', '25.71', '240.00', '1112-11-11', '3234432222222'),
(367, 24, '1', '240.00', '25.71', '214.29', '25.71', '240.00', '2021-07-31', 'w223'),
(368, 27, '1', '240.00', '25.71', '214.29', '25.71', '240.00', '0004-04-04', '556'),
(369, 27, '1', '240.00', '25.71', '214.29', '25.71', '240.00', '0005-05-05', '335'),
(370, 27, '2', '1,327.00', '142.18', '1,184.82', '142.18', '1,327.00', '0007-07-07', 'w1'),
(371, 27, '2', '850.00', '91.07', '758.93', '91.07', '850.00', '2021-08-26', 'waw'),
(372, 27, '1', '420.00', '45.00', '375.00', '45.00', '420.00', '0006-05-06', 'a22'),
(373, 27, '2', '1,140.00', '122.14', '1,017.86', '122.14', '1,140.00', '0006-05-06', '445w'),
(374, 28, '1', '12.00', '1.29', '10.71', '1.29', '12.00', '0003-02-01', 'wer'),
(375, 28, '1', '155,554.00', '16,666.50', '138,887.50', '16,666.50', '155,554.00', '0001-01-01', 'r43'),
(376, 28, '1', '88,888.00', '9,523.71', '79,364.29', '9,523.71', '88,888.00', '0055-05-05', '34r'),
(377, 20, '1', '111,110.00', '11,904.64', '99,205.36', '11,904.64', '111,110.00', '0001-01-01', '422'),
(378, 24, '2', '1,380.00', '147.86', '1,232.14', '147.86', '1,380.00', '0001-01-01', 'ttttttttttttt'),
(379, 24, '2', '1,150.00', '123.21', '1,026.79', '123.21', '1,150.00', '0003-03-03', '4333333'),
(380, 24, '4', '135,147.00', '14,480.04', '120,666.96', '14,480.04', '135,147.00', '0001-11-01', '444443'),
(381, 24, '2', '640.00', '68.57', '571.43', '68.57', '640.00', '0001-01-01', 'wertyt'),
(382, 24, '1', '520.00', '55.71', '464.29', '55.71', '520.00', '0001-01-01', 'RTT1'),
(383, 24, '1', '800.00', '85.71', '714.29', '85.71', '800.00', '0001-01-01', '2wz'),
(384, 24, '1', '800.00', '85.71', '714.29', '85.71', '800.00', '0002-02-22', 'xc'),
(385, 24, '5', '46,140.00', '4,943.57', '41,196.43', '4,943.57', '46,140.00', '2021-08-26', 'R411'),
(386, 20, '5', '46,010.00', '4,929.64', '41,080.36', '4,929.64', '46,010.00', '2021-08-26', 'VB'),
(387, 24, '1', '250.00', '26.79', '223.21', '26.79', '250.00', '2021-08-26', 'dc'),
(388, 24, '2', '1,300.00', '139.29', '1,160.71', '139.29', '1,300.00', '0001-01-01', 'dddddd3'),
(389, 20, '1', '1,200.00', '240.00', '1,071.43', '', '1,200.00', '0001-01-01', 'eexe'),
(390, 18, '1', '30.00', '6.00', '1.50', '34.5', '', '2021-08-26', 'cvv'),
(391, 24, '1', '30.00', '6.00', '3', '33', '30.00', '2021-08-26', 'hahahaha'),
(393, 24, '1', '1,500.00', '300.00', '50', '251', '1,500.00', '2021-08-26', 'nice'),
(394, 20, '1', '250.00', '50.00', '20', '280', '250.00', '0001-01-01', 'cic'),
(395, 24, '1', '250.00', '50.00', '12.50', '287.5', '250.00', '2021-08-20', 'rit'),
(396, 24, '5', '7,000.00', '1,400.00', '1000', '-992', '7,000.00', '2021-08-26', 'cido'),
(397, 24, '5', '9,400.00', '1,880.00', '470.00', '-460', '9,400.00', '2021-08-20', 'salut'),
(398, 24, '1', '5000.00', '1000.00', '1250.00', '4750', '5000.00', '2021-08-26', 'iccic'),
(399, 24, '1', '250.00', '50.00', '0', '300', '250.00', '2021-08-26', '444444444444444444444'),
(400, 18, '2', '2000.00', '400.00', '200.00', '2200', '2000.00', '2022-09-15', '4'),
(401, 18, '2', '1,200.00', '128.57', '1,071.43', '128.57', '1,200.00', '2022-09-15', '5'),
(402, 18, '1', '500.00', '53.57', '446.43', '53.57', '500.00', '2022-09-15', '6'),
(403, 18, '1', '1200.00', '240.00', '60.00', '1380', '1200.00', '2022-09-15', '7'),
(404, 29, '1', '800.00', '160.00', '40.00', '920', '800.00', '2022-09-15', '1'),
(405, 29, '2', '2,700.00', '289.29', '2,410.71', '289.29', '2,700.00', '2022-09-15', '2'),
(406, 20, '2', '3800.00', '760.00', '190.00', '4370', '3800.00', '2022-09-15', '1000'),
(407, 24, '2', '1,550.00', '166.07', '1,383.93', '166.07', '1,550.00', '2022-09-15', '10000'),
(408, 18, '2', '4,500.00', '482.14', '4,017.86', '482.14', '4,500.00', '2022-09-15', '2000'),
(409, 18, '2', '2,200.00', '235.71', '1,964.29', '235.71', '2,200.00', '2022-09-03', '20000'),
(410, 18, '2', '1300.00', '260.00', '65.00', '1495', '1300.00', '2022-09-15', '0000'),
(411, 20, '2', '1,400.00', '150.00', '1,250.00', '150.00', '1,400.00', '2022-09-15', 'qq'),
(412, 29, '2', '2,700.00', '289.29', '2,410.71', '289.29', '2,700.00', '2022-09-15', 'q2'),
(413, 24, '2', '2700.00', '540.00', '135.00', '3105', '2700.00', '2022-09-15', '55'),
(414, 18, '2', '420.00', '45.00', '375.00', '45.00', '420.00', '2022-09-15', '01'),
(415, 18, '3', '410.00', '82.00', '20.50', '471.5', '410.00', '2022-09-15', '02');

-- --------------------------------------------------------

--
-- Structure de la table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `ID` int(11) NOT NULL,
  `TRANS_D_ID` varchar(250) NOT NULL,
  `PRODUCTS` varchar(250) NOT NULL,
  `QTY` varchar(250) NOT NULL,
  `PRICE` varchar(250) NOT NULL,
  `EMPLOYEE` varchar(250) NOT NULL,
  `ROLE` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `transaction_details`
--

INSERT INTO `transaction_details` (`ID`, `TRANS_D_ID`, `PRODUCTS`, `QTY`, `PRICE`, `EMPLOYEE`, `ROLE`) VALUES
(33, 'f', 'Clavier-TAY9', '1', '220', 'Karim', 'Directeur'),
(40, '082423224', 'Clavier-TAY9', '6', '220', 'Karim', 'Directeur'),
(3459, 'a', 'A77-3', '1', '300', 'Karim', 'Directeur'),
(3462, 'r', 'Ram-33', '1', '399', 'Karim', 'Directeur'),
(3463, 'w', 'Ram-33', '1', '399', 'Karim', 'Directeur'),
(3465, 'e', 'Ram-V5', '1', '30', 'Karim', 'Directeur'),
(3470, '2', 'Clavier-E34', '1', '240', 'Karim', 'Directeur'),
(3471, '2', 'Clavier-TAY9', '1', '220', 'Karim', 'Directeur'),
(3472, '082500259', 'Clavier-E34', '1', '240', 'Karim', 'Directeur'),
(3473, '082500259', 'Clavier-TAY9', '1', '220', 'Karim', 'Directeur'),
(3474, '4', 'Ram-V5', '1', '30', 'Karim', 'Directeur'),
(3475, '082500911', 'Ram-V5', '1', '30', 'Karim', 'Directeur'),
(3476, '082500911', 'Clavier-TAY9', '1', '220', 'Karim', 'Directeur'),
(3477, '082500911', 'Souris-EF', '10', '43', 'Karim', 'Directeur'),
(3478, '5', 'Clavier-TAY9', '1', '220', 'Karim', 'Directeur'),
(3479, '5', 'Clavier-TAY9', '1', '220', 'Karim', 'Directeur'),
(3480, '082522825', 'Clavier-E34', '1', '240', 'Karim', 'Directeur'),
(3481, '0825130927', 'Pros-M3', '1', '500', 'Karim', 'Directeur'),
(3482, '0825131522', 'Ecran-HP22', '1', '210', 'Karim', 'Directeur'),
(3483, '0825131522', 'Ram-33', '1', '399', 'Karim', 'Directeur'),
(3484, '0825132125', 'Ram-33', '4', '399', 'Karim', 'Directeur'),
(3485, '457765432', 'Ram-33', '1', '399', 'Karim', 'Directeur'),
(3486, '457765432', 'Souris-A55', '1', '130', 'Karim', 'Directeur'),
(3487, '457765432', 'Pros-M3', '1', '500', 'Karim', 'Directeur'),
(3488, '457765432', 'Ecran-HP22', '1', '210', 'Karim', 'Directeur'),
(3489, '457765432', 'Clavier-E34', '1', '240', 'Karim', 'Directeur'),
(3490, 're', 'Ram-33', '1', '399', 'Karim', 'Directeur'),
(3491, 'r235', 'Pros-M3', '1', '500', 'Karim', 'Directeur'),
(3492, '3234432222222', 'Clavier-E34', '1', '240', 'Karim', 'Directeur'),
(3494, 'a', 'Clavier-E34', '1', '240', 'Karim', 'Directeur'),
(3496, 'w223', 'Clavier-E34', '1', '240', 'Karim', 'Directeur'),
(3497, '556', 'Clavier-E34', '1', '240', 'Karim', 'Directeur'),
(3498, '335', 'Clavier-E34', '1', '240', 'Karim', 'Directeur'),
(3499, 'w1', 'Ram-33', '3', '399', 'Karim', 'Directeur'),
(3500, 'w1', 'Souris-A55', '1', '130', 'Karim', 'Directeur'),
(3501, 'waw', 'Clavier-E34', '3', '240', 'Karim', 'Directeur'),
(3502, 'waw', 'Souris-A55', '1', '130', 'Karim', 'Directeur'),
(3503, 'a22', 'hana', '7', '60', 'Karim', 'Directeur'),
(3504, '445w', 'hana', '4', '60', 'Karim', 'Directeur'),
(3505, '445w', 'Clavier-A33', '3', '300', 'Karim', 'Directeur'),
(3506, 'wer', 'Ep', '4', '3', 'Karim', 'Directeur'),
(3507, 'r43', 'ANANANA', '7', '22222', 'Karim', 'Directeur'),
(3508, '34r', 'ANANANA', '4', '22222', 'Karim', 'Directeur'),
(3509, '422', 'ANANANA', '5', '22222', 'Karim', 'Directeur'),
(3510, 'ttttttttttttt', 'hana', '3', '60', 'Karim', 'Directeur'),
(3511, 'ttttttttttttt', 'Ram-V5', '3', '400', 'Karim', 'Directeur'),
(3512, '4333333', 'Souris-A55', '3', '250', 'Karim', 'Directeur'),
(3513, '4333333', 'Ram-V5', '1', '400', 'Karim', 'Directeur'),
(3514, '444443', 'Ram-V5', '2', '400', 'Karim', 'Directeur'),
(3515, '444443', 'Souris-A55', '4', '250', 'Karim', 'Directeur'),
(3516, '444443', 'Ep', '5', '3', 'Karim', 'Directeur'),
(3517, '444443', 'ANANANA', '6', '22222', 'Karim', 'Directeur'),
(3518, 'wertyt', 'Ram-V5', '1', '400', 'Karim', 'Directeur'),
(3519, 'wertyt', 'hana', '4', '60', 'Karim', 'Directeur'),
(3520, 'RTT1', 'Clavier-RE', '4', '130', 'Karim', 'Directeur'),
(3521, '2wz', 'Ram-V5', '2', '400', 'Karim', 'Directeur'),
(3522, 'xc', 'Ram-V5', '2', '400', 'Karim', 'Directeur'),
(3523, 'R411', 'Clavier-RE', '3', '130', 'Karim', 'Directeur'),
(3524, 'R411', 'Ram-V5', '2', '400', 'Karim', 'Directeur'),
(3525, 'R411', 'Souris-A55', '2', '250', 'Karim', 'Directeur'),
(3526, 'R411', 'Ep', '2', '3', 'Karim', 'Directeur'),
(3527, 'R411', 'ANANANA', '2', '22222', 'Karim', 'Directeur'),
(3528, 'VB', 'Clavier-RE', '2', '130', 'Karim', 'Directeur'),
(3529, 'VB', 'Ram-V5', '2', '400', 'Karim', 'Directeur'),
(3530, 'VB', 'Souris-A55', '2', '250', 'Karim', 'Directeur'),
(3531, 'VB', 'Ep', '2', '3', 'Karim', 'Directeur'),
(3532, 'VB', 'ANANANA', '2', '22222', 'Karim', 'Directeur'),
(3533, 'dc', 'Souris-A55', '1', '250', 'Karim', 'Directeur'),
(3534, 'dddddd3', 'Souris-A55', '2', '250', 'Karim', 'Directeur'),
(3535, 'dddddd3', 'Ram-V5', '2', '400', 'Karim', 'Directeur'),
(3536, 'eexe', 'Ram-V5', '3', '400', 'Karim', 'Directeur'),
(3537, 'cvv', 'Ep', '10', '3', 'Karim', 'Directeur'),
(3538, 'hahahaha', 'Ep', '10', '3', 'Karim', 'Directeur'),
(3539, '7', 'Souris-A55', '2', '250', 'Karim', 'Directeur'),
(3540, 'nice', 'Souris-A55', '6', '250', 'Karim', 'Directeur'),
(3541, 'cic', 'Souris-A55', '1', '250', 'Karim', 'Directeur'),
(3542, 'rit', 'Souris-A55', '1', '250', 'Karim', 'Directeur'),
(3543, 'cido', 'Ram-V5', '5', '400', 'Karim', 'Directeur'),
(3544, 'cido', 'Clavier-RE', '10', '100', 'Karim', 'Directeur'),
(3545, 'cido', 'Souris-A55', '4', '250', 'Karim', 'Directeur'),
(3546, 'cido', 'Processeur Intel', '2', '500', 'Karim', 'Directeur'),
(3547, 'cido', 'Clavier E-3', '2', '1000', 'Karim', 'Directeur'),
(3548, 'salut', 'Clavier-RE', '4', '100', 'Karim', 'Directeur'),
(3549, 'salut', 'Ram-V5', '5', '400', 'Karim', 'Directeur'),
(3550, 'salut', 'Souris-A55', '2', '250', 'Karim', 'Directeur'),
(3551, 'salut', 'Processeur Intel', '1', '500', 'Karim', 'Directeur'),
(3552, 'salut', 'Clavier E-3', '6', '1000', 'Karim', 'Directeur'),
(3553, 'iccic', 'Processeur Intel', '10', '500', 'Karim', 'Directeur'),
(3554, '444444444444444444444', 'Souris-A55', '1', '250', 'Karim', 'Directeur'),
(3555, '4', 'Souris-A555', '4', '250', 'Karim', 'Directeur'),
(3556, '4', 'Processeur Intel', '2', '500', 'Karim', 'Directeur'),
(3557, '5', 'Clavier-RE', '2', '100', 'Karim', 'Directeur'),
(3558, '5', 'Souris-A555', '4', '250', 'Karim', 'Directeur'),
(3559, '6', 'Processeur Intel', '1', '500', 'Karim', 'Directeur'),
(3560, '7', 'Ram-V5', '3', '400', 'Karim', 'Directeur'),
(3561, '1', 'Ram-V5', '2', '400', 'Karim', 'Directeur'),
(3562, '2', 'Ram-V5', '3', '400', 'Karim', 'Directeur'),
(3563, '2', 'Processeur Intel', '3', '500', 'Karim', 'Directeur'),
(3564, '1000', 'Clavier E-3', '3', '1000', 'Karim', 'Directeur'),
(3565, '1000', 'Ram-V5', '2', '400', 'Karim', 'Directeur'),
(3566, '10000', 'Ram-V5', '2', '400', 'Karim', 'Directeur'),
(3567, '10000', 'Souris-A555', '3', '250', 'Karim', 'Directeur'),
(3568, '2000', 'Processeur Intel', '5', '500', 'Karim', 'Directeur'),
(3569, '2000', 'Clavier E-3', '2', '1000', 'Karim', 'Directeur'),
(3570, '20000', 'Clavier-RE', '2', '100', 'Karim', 'Directeur'),
(3571, '20000', 'Clavier E-3', '2', '1000', 'Karim', 'Directeur'),
(3572, '0000', 'Ram-V5', '2', '400', 'Karim', 'Directeur'),
(3573, '0000', 'Souris-A555', '2', '250', 'Karim', 'Directeur'),
(3574, 'qq', 'Ram-V5', '3', '400', 'Karim', 'Directeur'),
(3575, 'qq', 'Clavier-RE', '2', '100', 'Karim', 'Directeur'),
(3576, 'q2', 'Ram-V5', '3', '400', 'Karim', 'Directeur'),
(3577, 'q2', 'Processeur Intel', '3', '500', 'Karim', 'Directeur'),
(3578, '55', 'Ram-V5', '3', '400', 'Karim', 'Directeur'),
(3579, '55', 'Processeur Intel', '3', '500', 'Karim', 'Directeur'),
(3580, '01', 'RAM-8GH', '3', '100', 'Karim', 'Directeur'),
(3581, '01', 'RAM-4GH', '2', '60', 'Karim', 'Directeur'),
(3582, '02', 'RAM-4GH', '1', '60', 'Karim', 'Directeur'),
(3583, '02', 'RAM-8GH', '1', '100', 'Karim', 'Directeur'),
(3584, '02', 'Souris-A555', '1', '250', 'Karim', 'Directeur');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `TYPE_ID` int(11) NOT NULL,
  `TYPE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`TYPE_ID`, `TYPE`) VALUES
(1, 'Admin'),
(2, 'Utilisateur');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `EMPLOYEE_ID` int(11) DEFAULT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `TYPE_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID`, `EMPLOYEE_ID`, `USERNAME`, `PASSWORD`, `TYPE_ID`) VALUES
(1, 1, 'Karim1', '0df4ab017385e9aa3324400d725f59ea31c57132', 1),
(9, 4, 'Amin Wa', '0df4ab017385e9aa3324400d725f59ea31c57132', 2),
(10, 5, 'Iman Naj', '0df4ab017385e9aa3324400d725f59ea31c57132', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CATEGORY_ID`);

--
-- Index pour la table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CUST_ID`);

--
-- Index pour la table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EMPLOYEE_ID`),
  ADD UNIQUE KEY `EMPLOYEE_ID` (`EMPLOYEE_ID`),
  ADD UNIQUE KEY `PHONE_NUMBER` (`PHONE_NUMBER`),
  ADD KEY `LOCATION_ID` (`LOCATION_ID`),
  ADD KEY `JOB_ID` (`JOB_ID`);

--
-- Index pour la table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`JOB_ID`);

--
-- Index pour la table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`LOCATION_ID`);

--
-- Index pour la table `manager`
--
ALTER TABLE `manager`
  ADD UNIQUE KEY `PHONE_NUMBER` (`PHONE_NUMBER`),
  ADD KEY `LOCATION_ID` (`LOCATION_ID`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PRODUCT_ID`),
  ADD KEY `CATEGORY_ID` (`CATEGORY_ID`),
  ADD KEY `SUPPLIER_ID` (`SUPPLIER_ID`);

--
-- Index pour la table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`SUPPLIER_ID`),
  ADD KEY `LOCATION_ID` (`LOCATION_ID`);

--
-- Index pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`TRANS_ID`),
  ADD KEY `TRANS_DETAIL_ID` (`TRANS_D_ID`),
  ADD KEY `CUST_ID` (`CUST_ID`);

--
-- Index pour la table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TRANS_D_ID` (`TRANS_D_ID`) USING BTREE;

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`TYPE_ID`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TYPE_ID` (`TYPE_ID`),
  ADD KEY `EMPLOYEE_ID` (`EMPLOYEE_ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `CATEGORY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `customer`
--
ALTER TABLE `customer`
  MODIFY `CUST_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `employee`
--
ALTER TABLE `employee`
  MODIFY `EMPLOYEE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `location`
--
ALTER TABLE `location`
  MODIFY `LOCATION_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `PRODUCT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT pour la table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `SUPPLIER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `TRANS_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=416;

--
-- AUTO_INCREMENT pour la table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3585;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`LOCATION_ID`) REFERENCES `location` (`LOCATION_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`JOB_ID`) REFERENCES `job` (`JOB_ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`LOCATION_ID`) REFERENCES `location` (`LOCATION_ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`CATEGORY_ID`) REFERENCES `category` (`CATEGORY_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`SUPPLIER_ID`) REFERENCES `supplier` (`SUPPLIER_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `supplier_ibfk_1` FOREIGN KEY (`LOCATION_ID`) REFERENCES `location` (`LOCATION_ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_3` FOREIGN KEY (`CUST_ID`) REFERENCES `customer` (`CUST_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_ibfk_4` FOREIGN KEY (`TRANS_D_ID`) REFERENCES `transaction_details` (`TRANS_D_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`TYPE_ID`) REFERENCES `type` (`TYPE_ID`),
  ADD CONSTRAINT `users_ibfk_4` FOREIGN KEY (`EMPLOYEE_ID`) REFERENCES `employee` (`EMPLOYEE_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
