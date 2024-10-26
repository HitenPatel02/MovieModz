-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2024 at 04:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviezmodz`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `a_id` int(10) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_age` int(10) NOT NULL,
  `a_gender` varchar(20) NOT NULL,
  `a_dob` text NOT NULL,
  `a_img_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`a_id`, `a_name`, `a_age`, `a_gender`, `a_dob`, `a_img_url`) VALUES
(2, 'akshay kumar', 56, 'Male', '2024-10-01', 'uploads/face4.jpg'),
(3, 'Hritik Roshan', 21, 'Male', '2024-10-08', 'uploads/Hrithik Roshan.jfif'),
(4, 'rasmika', 22, 'Female', '2000-04-04', 'uploads/rashmika.jfif'),
(5, 'kareena', 32, 'Female', '1993-03-10', 'uploads/Kareena Kapoor Khan.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `cast_profile_movie_list`
--

CREATE TABLE `cast_profile_movie_list` (
  `id` int(10) NOT NULL,
  `cast_name` varchar(250) NOT NULL,
  `cast_movie_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cast_profile_movie_list`
--

INSERT INTO `cast_profile_movie_list` (`id`, `cast_name`, `cast_movie_name`) VALUES
(1, 'akshay kumar', 'Kalki 2898 AD'),
(2, 'rasmika', 'Kalki 2898 AD'),
(3, 'Hritik Roshan', 'Kalki 2898 AD'),
(4, 'rasmika', 'bigil'),
(5, 'rasmika', 'Kutch Express'),
(6, 'akshay kumar', 'OMG: Oh My God!');

-- --------------------------------------------------------

--
-- Table structure for table `catagry`
--

CREATE TABLE `catagry` (
  `id` int(10) NOT NULL,
  `m_catagry` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catagry`
--

INSERT INTO `catagry` (`id`, `m_catagry`) VALUES
(11, 'Romance'),
(12, 'Action'),
(13, 'Adventure'),
(14, 'Comedy'),
(15, 'Documentry'),
(16, 'History'),
(17, 'Horror'),
(18, 'Sci-Fi'),
(19, 'Fantasy'),
(20, 'Erotic'),
(21, 'Anime'),
(22, 'Devotional'),
(23, 'Patriotic'),
(24, 'Hollywood'),
(25, 'South India'),
(31, 'Gujarati'),
(32, 'New Releases'),
(33, 'Upcoming '),
(34, 'Blockbuster'),
(35, 'Top 10'),
(36, 'Live-channels'),
(37, 'Kids Shows');

-- --------------------------------------------------------

--
-- Table structure for table `catagry_profile_movie_list`
--

CREATE TABLE `catagry_profile_movie_list` (
  `id` int(10) NOT NULL,
  `m_catagry` varchar(250) NOT NULL,
  `m_id` int(10) NOT NULL,
  `m_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catagry_profile_movie_list`
--

INSERT INTO `catagry_profile_movie_list` (`id`, `m_catagry`, `m_id`, `m_name`) VALUES
(1, 'Action', 7, 'Avengers:Endgame'),
(2, 'Action', 6, 'Fast and Furious-X'),
(3, 'Action', 5, 'Kalki 2898 AD'),
(4, 'Adventure', 6, 'Fast and Furious-X'),
(5, 'New Releases', 5, 'Kalki 2898 AD'),
(6, 'New Releases', 7, 'Avengers:Endgame'),
(7, 'Action', 11, 'bigil'),
(8, 'Comedy', 11, 'bigil'),
(9, 'Adventure', 5, 'Kalki 2898 AD'),
(10, 'Comedy', 14, 'Kutch Express'),
(12, 'Gujarati', 14, 'Kutch Express'),
(13, 'New Releases', 14, 'Kutch Express'),
(14, 'Upcoming ', 14, 'Kutch Express'),
(15, 'Blockbuster', 13, 'Bigil'),
(16, 'Blockbuster', 5, 'Kalki 2898 AD'),
(17, 'Comedy', 15, 'OMG: Oh My God!');

-- --------------------------------------------------------

--
-- Table structure for table `moves_profile`
--

CREATE TABLE `moves_profile` (
  `id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `m_name` varchar(11) NOT NULL,
  `a_name` varchar(30) NOT NULL,
  `m_catagary` varchar(11) NOT NULL,
  `m_langwage` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `moves_profile`
--

INSERT INTO `moves_profile` (`id`, `m_id`, `m_name`, `a_name`, `m_catagary`, `m_langwage`) VALUES
(9, 5, 'Kalki 2898 ', 'akshay kumar', 'Action', 'hindi'),
(12, 7, 'Avengers:En', 'Hritik Roshan', 'Action', 'hindi'),
(13, 11, 'bigil', 'rasmika', 'Action', 'hindi'),
(14, 13, 'Bigil', 'Hritik Roshan', 'South India', 'hindi'),
(15, 5, 'Kalki 2898 ', 'akshay kumar', 'Action', 'Gujarati');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `m_id` int(10) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `m_t_url` text NOT NULL,
  `m_v_url` text NOT NULL,
  `m_p_url` text NOT NULL,
  `m_year` year(4) NOT NULL,
  `m_time` time NOT NULL,
  `m_dis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`m_id`, `m_name`, `m_t_url`, `m_v_url`, `m_p_url`, `m_year`, `m_time`, `m_dis`) VALUES
(5, 'Kalki 2898 AD', 'kQDd1AhGIHk', 'Bigil.mp4', 'Movie_Poster/slide1.webp', '2024', '00:01:35', 'Kalki 2898 AD is a 2024 Indian Telugu-language '),
(6, 'Fast and Furious-X', '32RAq6JzY-w', 'Bigil.mp4', 'Movie_Poster/slide2.webp', '2023', '00:00:00', 'Fast X (also known as Fast & Furious 10) is a 2023 American action film'),
(7, 'Avengers:Endgame', 'LPhqL4DqzBg', 'Bigil.mp4', 'Movie_Poster/slide3.webp', '2023', '00:01:38', 'Avengers: Endgame is an American superhero film based on the Marvel Comics superhero team the Avengers. '),
(13, 'Bigil', 'u2Ud7L5OaxU', 'Bigil.mp4', 'Movie_Poster/bigil.jpeg', '2023', '02:28:00', 'Bigil 2023'),
(14, 'Kutch Express', '61w8Y2NEKeA', 'Bigil.mp4', 'Movie_Poster/Kutch_Express_Movie_Poster.jpg', '2023', '02:14:00', 'Revolves around how the journey of a thousand miles begins with a single step and explores love and life.'),
(15, 'OMG: Oh My God!', 'S3b7F4rGre0', 'Bigil.mp4', 'Movie_Poster/omg.jpg', '2012', '02:15:00', 'A shopkeeper takes God to court when his shop is destroyed by an earthquake.');

-- --------------------------------------------------------

--
-- Table structure for table `movies2`
--

CREATE TABLE `movies2` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies2`
--

INSERT INTO `movies2` (`id`, `title`, `description`, `youtube_link`) VALUES
(3, 'kalki', 'kalki', 'https://www.youtube.com/watch?v=kQDd1AhGIHk');

-- --------------------------------------------------------

--
-- Table structure for table `m_langvage`
--

CREATE TABLE `m_langvage` (
  `l_id` int(11) NOT NULL,
  `L_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_langvage`
--

INSERT INTO `m_langvage` (`l_id`, `L_name`) VALUES
(1, 'hindi'),
(3, 'Gujarati'),
(4, 'English');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `dest_dir` varchar(250) NOT NULL,
  `php_file_path` varchar(255) NOT NULL,
  `css_file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `image_path`, `caption`) VALUES
(3, 'Movie_Poster/slide1.webp', 'Kalki 2898 AD'),
(4, 'Movie_Poster/slide2.webp', 'Fast and Furious-X'),
(5, 'Movie_Poster/slide3.webp', 'Avengers:Endgame');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(10) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `uphone` int(10) NOT NULL,
  `upass` text NOT NULL,
  `ufrands` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `uname`, `uemail`, `uphone`, `upass`, `ufrands`) VALUES
(1, 'admin', 'admin@123.com', 123123123, '$2y$10$lab6Vk8FRVX/uvP6AvZf2OklGKMr3jD0tH0wXltWecClBFgoZKOOq', 'admin'),
(3, 'hi10', 'hi10@123.com', 111111111, '$2y$10$.xFS.l5OrmLAq4x6vd/5JOXM5cSPDw3kIeZ5MQ4Y4cRPQJpqA2ani', 'hi10'),
(5, 'mukul', 'mukul8108@gmail.com', 2147483647, '$2y$10$zZSe.BpKsMoDmbG4Z/YQmObw0kkvhzEX4Dwbj3mrVxkoWvWvCaKlu', 'shivam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `cast_profile_movie_list`
--
ALTER TABLE `cast_profile_movie_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagry`
--
ALTER TABLE `catagry`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `m_catagry` (`m_catagry`) USING HASH;

--
-- Indexes for table `catagry_profile_movie_list`
--
ALTER TABLE `catagry_profile_movie_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moves_profile`
--
ALTER TABLE `moves_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`m_id`),
  ADD UNIQUE KEY `m_name` (`m_name`);

--
-- Indexes for table `movies2`
--
ALTER TABLE `movies2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_langvage`
--
ALTER TABLE `m_langvage`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cast_profile_movie_list`
--
ALTER TABLE `cast_profile_movie_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `catagry`
--
ALTER TABLE `catagry`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `catagry_profile_movie_list`
--
ALTER TABLE `catagry_profile_movie_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `moves_profile`
--
ALTER TABLE `moves_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `movies2`
--
ALTER TABLE `movies2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_langvage`
--
ALTER TABLE `m_langvage`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
