

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(99) NOT NULL,
  `password` varchar(999) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `activation` varchar(999) NOT NULL,
  `type` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;


INSERT INTO `users` (`id`, `email`, `username`, `password`, `status`, `activation`, `type`) VALUES
(1, 'oliverweitman123@hotmail.com', 'Tjaabba', 'dedu123', 1, '', 0),
(2, 'oliver@tjaabba.com', 'Admin', 'ce33a9ea816d7ecd919b34dd6e39e849', 0, '', 0),
(4, 'test@gmail.com', 'Test', '098f6bcd4621d373cade4e832627b4f6', 1, 'http://localhost:7887/AdNet/login.php?acti=1144996976', 0),
(5, 'hugo@krishan.se', 'hugokrishan', '32b0396f2c52288b8a883c04fe53818a', 1, 'http://localhost:7887/AdNet/login.php?acti=3200615227', 0),
(6, 'apa@apa.se', 'hugo', '32b0396f2c52288b8a883c04fe53818a', 1, 'http://localhost:7887/AdNet/login.php?acti=3351210479', 0);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;