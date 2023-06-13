-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2023 a las 20:00:10
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rolling_stones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `albums`
--

CREATE TABLE `albums` (
  `id_album` int(200) NOT NULL,
  `titulo_album` varchar(300) NOT NULL,
  `year_release` int(4) NOT NULL,
  `img_cover` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `albums`
--

INSERT INTO `albums` (`id_album`, `titulo_album`, `year_release`, `img_cover`) VALUES
(1, 'The Rolling Stones', 1964, 'https://upload.wikimedia.org/wikipedia/en/c/c1/RS64.jpg'),
(2, 'The Rolling Stones No. 2', 1965, 'https://upload.wikimedia.org/wikipedia/en/5/58/TheRollingStonesNumber2.jpg'),
(3, 'Out of Our Heads', 1965, 'https://upload.wikimedia.org/wikipedia/en/b/bd/Out%2Bof%2BOur%2BHeads%2B-UK-.jpg'),
(4, 'Aftermath', 1966, 'https://upload.wikimedia.org/wikipedia/en/8/8a/Aftermath_UK.jpg'),
(5, 'Between the Buttons', 1967, 'https://upload.wikimedia.org/wikipedia/en/e/e5/BetweenthebuttonsUK.jpg'),
(6, 'Their Satanic Majesties Request', 1967, 'https://upload.wikimedia.org/wikipedia/en/d/df/Rolling_Stones_-_Their_Satanic_Majesties_Request_-_1967_Decca_Album_cover.jpg'),
(7, 'Beggars Banquet', 1968, 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8b/BeggarsBanquetLP.jpg/1024px-BeggarsBanquetLP.jpg'),
(8, 'Let It Bleed', 1969, 'https://upload.wikimedia.org/wikipedia/en/c/c0/LetitbleedRS.jpg'),
(9, 'Sticky Fingers', 1971, 'https://upload.wikimedia.org/wikipedia/en/5/57/The_Rolling_Stones_-_Sticky_Fingers.png'),
(10, 'Exile on Main St.', 1972, 'https://upload.wikimedia.org/wikipedia/en/c/ca/ExileMainSt.jpg'),
(11, 'Goats Head Soup', 1973, 'https://upload.wikimedia.org/wikipedia/en/d/d8/The_Rolling_Stones_-_Goats_Head_Soup.jpg'),
(12, 'Its Only Rock n Roll', 1974, 'https://www.metro951.com/wp-content/uploads/2023/05/stones.jpeg'),
(13, 'Black and Blue', 1976, 'https://upload.wikimedia.org/wikipedia/en/5/5a/Blackblue.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `songs`
--

CREATE TABLE `songs` (
  `id_song` int(11) NOT NULL,
  `id_album` int(11) NOT NULL,
  `title_song` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `songs`
--

INSERT INTO `songs` (`id_song`, `id_album`, `title_song`) VALUES
(1, 1, 'Ruta 66'),
(2, 1, 'I Just Want to Make Love to You'),
(3, 1, 'Honest I Do'),
(4, 1, 'I Need You Baby'),
(5, 1, 'Now I\'ve Got a Witness'),
(6, 1, 'Little by Little'),
(7, 1, 'Im a King Bee'),
(8, 1, 'Carol'),
(9, 1, 'Tell Me'),
(10, 1, 'Can I Get a Witness'),
(11, 1, 'You Can Make It If You Try'),
(12, 2, 'Paint It, Black'),
(13, 2, 'Stupid Girl'),
(14, 2, 'Lady Jane'),
(15, 2, 'Under My Thumb'),
(16, 2, 'Doncha Bother Me'),
(17, 2, 'Think'),
(18, 2, 'Flight 505'),
(19, 2, 'High and Dry'),
(20, 2, 'It is Not Easy'),
(21, 2, 'I Am Waiting'),
(22, 2, 'Going Home'),
(23, 3, 'Sympathy for the Devil'),
(24, 3, 'No Expectations'),
(25, 3, 'Dear Doctor'),
(26, 3, 'Parachute Woman'),
(27, 3, 'Jigsaw Puzzle'),
(28, 3, 'Street Fighting Man'),
(29, 3, 'Prodigal Son'),
(30, 3, 'Stray Cat Blues'),
(31, 3, 'Factory Girl'),
(32, 3, 'Salt of the Earth'),
(33, 4, 'Brown Sugar'),
(34, 4, 'Sway'),
(35, 4, 'Wild Horses'),
(36, 4, 'Cant You Hear Me Knocking'),
(37, 4, 'You Gotta Move'),
(38, 4, 'Bitch'),
(39, 4, 'I Got the Blues'),
(40, 4, 'Sister Morphine'),
(41, 4, 'Dead Flowers'),
(42, 4, 'Moonlight Mile'),
(43, 5, 'Rocks Off'),
(44, 5, 'Rip This Joint'),
(45, 5, 'Shake Your Hips'),
(46, 5, 'Casino Boogie'),
(47, 5, 'Tumbling Dice'),
(48, 5, 'Sweet Virginia'),
(49, 5, 'Torn and Frayed'),
(50, 5, 'Sweet Black Angel'),
(51, 5, 'Loving Cup'),
(52, 5, 'Happy'),
(53, 5, 'Turd on the Run'),
(54, 5, 'Ventilator Blues'),
(55, 5, 'I Just Want to See His Face'),
(56, 5, 'Let It Loose'),
(57, 5, 'All Down the Line'),
(58, 5, 'Stop Breaking Down'),
(59, 5, 'Shine a Light'),
(60, 5, 'Soul Survivor'),
(61, 6, 'Dancing with Mr. D'),
(62, 6, '100 Years Ago'),
(63, 6, 'Coming Down Again'),
(64, 6, 'Doo Doo Doo Doo Doo (Heartbreaker)'),
(65, 6, 'Angie'),
(66, 6, 'Silver Train'),
(67, 6, 'Hide Your Love'),
(68, 6, 'Winter'),
(69, 6, 'Can You Hear the Music'),
(70, 6, 'Star Star'),
(71, 7, 'Rocks Off'),
(72, 7, 'Rip This Joint'),
(73, 7, 'Shake Your Hips'),
(74, 7, 'Casino Boogie'),
(75, 7, 'Tumbling Dice'),
(76, 7, 'Sweet Virginia'),
(77, 7, 'Torn and Frayed'),
(78, 7, 'Sweet Black Angel'),
(79, 7, 'Loving Cup'),
(80, 7, 'Happy'),
(81, 7, 'Turd on the Run'),
(82, 7, 'Ventilator Blues'),
(83, 7, 'I Just Want to See His Face'),
(84, 7, 'Let It Loose'),
(85, 7, 'All Down the Line'),
(86, 7, 'Stop Breaking Down'),
(87, 7, 'Shine a Light'),
(88, 7, 'Soul Survivor'),
(89, 8, 'Brown Sugar'),
(90, 8, 'Sway'),
(91, 8, 'Wild Horses'),
(92, 8, 'Can\'t You Hear Me Knocking'),
(93, 8, 'You Gotta Move'),
(94, 8, 'Bitch'),
(95, 8, 'I Got the Blues'),
(96, 8, 'Sister Morphine'),
(97, 8, 'Dead Flowers'),
(98, 8, 'Moonlight Mile'),
(99, 9, 'Start Me Up'),
(100, 9, 'Hang Fire'),
(101, 9, 'Slave'),
(102, 9, 'Little T&A'),
(103, 9, 'Black Limousine'),
(104, 9, 'Neighbours'),
(105, 9, 'Worried About You'),
(106, 9, 'Tops'),
(107, 9, 'Heaven'),
(108, 9, 'No Use in Crying'),
(109, 9, 'Waiting on a Friend'),
(110, 10, 'Undercover of the Night'),
(111, 10, 'She Was Hot'),
(112, 10, 'Tie You Up (The Pain of Love)'),
(113, 10, 'Wanna Hold You'),
(114, 10, 'Feel On Baby'),
(115, 10, 'Too Much Blood'),
(116, 10, 'Pretty Beat Up'),
(117, 10, 'Too Tough'),
(118, 10, 'All the Way Down'),
(119, 10, 'It Must Be Hell'),
(120, 11, 'Dancing with Mr. D'),
(121, 11, '100 Years Ago'),
(122, 11, 'Coming Down Again'),
(123, 11, 'Doo Doo Doo Doo Doo (Heartbreaker)'),
(124, 11, 'Angie'),
(125, 11, 'Silver Train'),
(126, 11, 'Hide Your Love'),
(127, 11, 'Winter'),
(128, 11, 'Can You Hear the Music'),
(129, 11, 'Star Star'),
(130, 12, 'If You Cant Rock Me'),
(131, 12, 'Ain t Too Proud to Beg'),
(132, 12, 'Its Only Rock n Roll (But I Like It)'),
(133, 12, 'Till the Next Goodbye'),
(134, 12, 'Time Waits for No One'),
(135, 12, 'Luxury'),
(136, 12, 'Dance Little Sister'),
(137, 12, 'If You Really Want to Be My Friend'),
(138, 12, 'Short and Curlies'),
(139, 12, 'Fingerprint File'),
(140, 13, 'Hot Stuff'),
(141, 13, 'Hand of Fate'),
(142, 13, 'Cherry Oh Baby'),
(143, 13, 'Memory Motel'),
(144, 13, 'Hey Negrita'),
(145, 13, 'Fool to Cry'),
(146, 13, 'Crazy Mama'),
(147, 13, 'Melody'),
(148, 13, 'Fool to Cry (versión extendida)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password_hash` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password_hash`) VALUES
(1, 'amparorosell', '$2y$10$CWp3eS2szUhRz3aF12SHe.RXyq.HWAWC.f2CLyJkQWdDDSJyfu042'),
(2, 'vanaina', '$2y$10$rZyKBc.luhp.qfWHlOO29.0LK33sLD2yTQSePnig2HKPB2iiboksK'),
(3, 'admin', '$2y$10$JG.EfkrYoCyfX4wY0a061uLLa68vF6EZZqUG6fkWOre4gzO3zgPZu');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id_album`);

--
-- Indices de la tabla `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id_song`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `albums`
--
ALTER TABLE `albums`
  MODIFY `id_album` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `songs`
--
ALTER TABLE `songs`
  MODIFY `id_song` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
