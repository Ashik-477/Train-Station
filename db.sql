

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



CREATE TABLE `admin` (
  `email` text NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `admin` (`email`, `password`) VALUES
('cse311L@gmail.com', 1234);



CREATE TABLE `avail` (
  `id` int(11) NOT NULL,
  `Station Name` varchar(20) NOT NULL,
  `Departure Time` varchar(11) NOT NULL,
  `book` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `avail` (`id`, `Station Name`, `Departure Time`, `book`) VALUES
(1, 'Kamlapur', '1:30pm', 'Free'),
(2, 'Sylhet ', '2:30pm', 'Free'),
(3, 'Munsigoang', '7:30pm', 'Free'),
(4, 'Norail', '4:40pm', 'Free'),
(5, 'Chattagram', '12:00pm', 'Free'),
(6, 'Mymensingh', '3:30pm', 'Free'),
(7, 'Chandpur', '6:00am', 'Free');



CREATE TABLE `user` (
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mobile` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `user` (`f_name`, `l_name`, `email`, `password`, `gender`, `mobile`) VALUES
('abc', 'df', 'abc@gmail.com', '1234', 'Male', 123456789),
('Jon', 'do', 'jon@gmail.com', '1234', 'Male', 123456789),
('Anirban', 'Shouharda', 'anirban744@gmail.com', '1234', 'Male', 1853429437),
('Naima', 'Raian', 'Naima@gmail.com', '1234', 'Male', 1742565744),
('Ashik', 'Talukder', 'ashik@gmail.com', '1234', 'Male', 2147483647);


ALTER TABLE `avail`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `avail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
