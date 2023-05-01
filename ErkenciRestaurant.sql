
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `menu` (
  `Itemid` int(11) NOT NULL,
  `Foodname` varchar(40) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Category` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Itemid`, `Foodname`, `Price`, `Category`) VALUES
(1, 'Norwegian salmon', 400, 'Grilled on a volcano rock'),
(2, 'Bluefin', 100, 'Grilled on a volcano rock'),
(3, 'Pacific Halibut', 300, 'Grilled on a volcano rock'),
(4, 'Gold arowana', 800, 'Grilled on a volcano rock'),
(5, 'Bluefin', 900, 'sushi'),
(6, 'Lion roll', 300, 'sushi'),
(7, 'Tuna Queen', 1000, 'sushi'),
(8, 'Norwegian salmon sushi', 400, 'sushi'),
(9, 'Beluga Sturgeon', 1000, 'Caviars'),
(10, 'Kaluga Caviar', 1000, 'Caviars'),
(11, 'Sevruga Caviar', 900, 'Caviars'),
(12, 'Imperial Wild Caviar', 800, 'Caviars'),
(13, 'King Oyster', 500, 'Oysters'),
(14, 'Mediterrian Osyter', 500, 'Oysters'),
(15, 'Pacific reef Oysters', 500, 'Oysters'),
(16, 'Handpicked Atlantic', 500, 'Oysters'),
(17, 'Seis Skat', 1000, 'Platers/Towers'),
(18, 'Awesome Tower', 800, 'Platers/Towers'),
(20, 'Ercenci Special', 800, 'Platers/Towers'),
(21, 'Shark Fin Soup', 1000, 'Chefs choice'),
(22, 'Bluefin Sushi', 1000, 'Chefs choice'),
(23, 'Handpicked Oyster', 1000, 'Chefs choice'),
(24, 'Sturgeon Caviar', 1000, 'Chefs choice'),
(25, 'Ultimate Lobster', 600, 'Platers/Towers'),
(26, 'Ultimate Lobster', 600, 'Platers/Towers');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `msgid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(320) DEFAULT NULL,
  `msg` varchar(500) DEFAULT NULL,
  `recievedat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`msgid`, `name`, `email`, `msg`, `recievedat`) VALUES
(3, 'MR.Allen Poe', 'AllenPoe@Allen.Poe', 'my name is Allen Poe', '2022-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `reservationid` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `attendees` varchar(3) DEFAULT NULL,
  `preference` varchar(7) DEFAULT NULL,
  `comments` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Itemid`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`msgid`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`reservationid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `Itemid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `msgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `reservationid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;


