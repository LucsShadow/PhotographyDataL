-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 10-Out-2018 às 22:18
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photographydata`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

CREATE TABLE `imagem` (
  `codimagem` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `camera` varchar(100) NOT NULL,
  `exposicao` varchar(20) NOT NULL,
  `abertura` int(10) NOT NULL,
  `iso` int(20) NOT NULL,
  `lente` varchar(100) NOT NULL,
  `coduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imagem`
--

INSERT INTO `imagem` (`codimagem`, `nome`, `camera`, `exposicao`, `abertura`, `iso`, `lente`, `coduser`) VALUES
(1415, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1416, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1417, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 4),
(1418, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 4),
(1419, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 4),
(1420, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 4),
(1421, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 4),
(1422, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 4),
(1423, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 4),
(1424, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 4),
(1425, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 4),
(1426, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 4),
(1427, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 4),
(1428, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 4),
(1429, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 4),
(1430, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 4),
(1431, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 4),
(1432, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 4),
(1433, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 4),
(1434, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 4),
(1435, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 4),
(1436, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 4),
(1437, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 4),
(1438, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 4),
(1439, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 4),
(1440, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 4),
(1441, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 4),
(1442, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 4),
(1443, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 4),
(1444, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 4),
(1445, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 4),
(1446, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 4),
(1447, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 4),
(1448, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 4),
(1449, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 4),
(1450, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 4),
(1451, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 4),
(1452, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 4),
(1453, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 4),
(1454, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 4),
(1455, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 4),
(1456, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 4),
(1457, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 4),
(1458, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 4),
(1459, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 4),
(1460, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 4),
(1461, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 4),
(1462, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 3),
(1463, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 3),
(1464, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1465, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 3),
(1466, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 3),
(1467, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1468, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 3),
(1469, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 3),
(1470, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1471, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 3),
(1472, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 3),
(1473, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1474, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 3),
(1475, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 3),
(1476, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1477, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 3),
(1478, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 3),
(1479, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1480, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 3),
(1481, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 3),
(1482, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1483, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 3),
(1484, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 3),
(1485, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1486, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 3),
(1487, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 3),
(1488, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1489, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 3),
(1490, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 3),
(1491, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1492, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 3),
(1493, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 3),
(1494, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1495, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 3),
(1496, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 3),
(1497, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1498, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 3),
(1499, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 3),
(1500, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1501, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 3),
(1502, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 3),
(1503, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1504, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 3),
(1505, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 3),
(1506, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1507, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 3),
(1508, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 3),
(1509, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1510, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 3),
(1511, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 3),
(1512, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1513, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 3),
(1514, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 3),
(1515, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1516, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 3),
(1517, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 3),
(1518, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1519, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 3),
(1520, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 3),
(1521, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1522, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 3),
(1523, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 3),
(1524, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1525, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 3),
(1526, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 3),
(1527, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1528, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 3),
(1529, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 3),
(1530, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1531, '_DSC0751.jpg', 'NIKON CORPORATION', '1/250', 3, 500, '500', 3),
(1532, '_DSC0768.jpg', 'NIKON CORPORATION', '1/1600', 3, 500, '500', 3),
(1533, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 3),
(1534, 'DSC02138.JPG', 'SONY', '1/4000', 3, 100, '160', 4),
(1535, 'DSC02141.JPG', 'SONY', '1/1250', 3, 100, '160', 4),
(1536, 'DSC02138.JPG', 'SONY', '1/4000', 3, 100, '160', 4),
(1537, 'DSC02141.JPG', 'SONY', '1/1250', 3, 100, '160', 4),
(1538, 'DSC02138.JPG', 'SONY', '1/4000', 3, 100, '16', 4),
(1539, 'DSC02141.JPG', 'SONY', '1/1250', 3, 100, '16', 4),
(1540, 'DSC02138.JPG', 'SONY', '1/4000', 3, 100, '16', 4),
(1541, 'DSC02141.JPG', 'SONY', '1/1250', 3, 100, '16', 4),
(1542, 'DSC02165.JPG', 'SONY', '1/8000', 1, 100, '85', 4),
(1543, 'DSC02176.JPG', 'SONY', '1/3200', 1, 100, '85', 4),
(1544, 'DSC02182.JPG', 'SONY', '1/6400', 1, 100, '85', 5),
(1545, 'DSC02183.JPG', 'SONY', '1/200', 1, 100, '85', 5),
(1546, 'DSC02188.JPG', 'SONY', '1/80', 1, 100, '85', 5),
(1547, '_MG_0413.JPG', 'Canon', '1/80', 3, 640, '50', 3),
(1552, 'Concluido-151.jpg', 'Canon', '1/160', 3, 100, '50', 3),
(1553, 'Concluido-152.jpg', 'Canon', '1/160', 3, 100, '50', 3),
(1554, 'DSC02901.JPG', 'SONY', '1/200', 3, 8000, '90', 7),
(1555, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 7),
(1556, '_DSC0426.jpg', 'NIKON CORPORATION', '1/2500', 2, 100, '500', 7),
(1557, 'chill.jpg', 'Canon', '1/320', 10, 100, '18', 7),
(1558, '16484298149_d3d9ba7862_o.jpg', 'FUJIFILM', '10/16000', 36, 200, '710', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `codusuario` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codusuario`, `nome`, `email`, `senha`) VALUES
(3, 'Lucas', 'lucasshadow@icloud.com', '$2y$10$liFsXvITAc9ZheixwyhlauMiOO99wQC78ZCT301Ay7hRI./DwJPbK'),
(4, 'Lucas Sombra Almeida', 'precutshadow@gmail.com', '$2y$10$C46WmSlXqosdRF5pr5I6Y.jgdv2eeIKIDj.zizEuXKDtAMMwOHoP2'),
(5, 'sony', 'sony@gmail.com', '$2y$10$4gOGlC9N4fn1PMVvzUELEOKMu9rqNe07I2wB3ZA0F/OAfxBG6J85O'),
(6, 'chama no probleminha', 'a@a.com', '$2y$10$3oxZri7XAbi.RyAM9Wr.3eyecrj/ONIdeNJrQ4ceJZw8P4PApIbxq'),
(7, 'Lula na Cadeia', 'lula@nacadeia.com', '$2y$10$MzlmFryAIW3xYKLLeAUK8.KSKL5FglY0961.Dy9Vqg1vgFlM/zchy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`codimagem`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imagem`
--
ALTER TABLE `imagem`
  MODIFY `codimagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1559;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
