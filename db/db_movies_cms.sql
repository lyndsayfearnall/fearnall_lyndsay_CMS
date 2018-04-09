-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 09, 2018 at 05:10 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_movies_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_genre`
--

CREATE TABLE `tbl_genre` (
  `genre_id` tinyint(4) NOT NULL,
  `genre_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_genre`
--

INSERT INTO `tbl_genre` (`genre_id`, `genre_name`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Comedy'),
(4, 'Historical'),
(5, 'Drama'),
(6, 'Musical'),
(7, 'Family'),
(8, 'Horror'),
(9, 'Science Fiction'),
(10, 'Animated');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movies`
--

CREATE TABLE `tbl_movies` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(300) NOT NULL,
  `movie_picture` varchar(200) NOT NULL,
  `movie_clip` varchar(200) NOT NULL,
  `movie_year` varchar(5) NOT NULL,
  `movie_description` text NOT NULL,
  `movie_rating` tinyint(10) NOT NULL,
  `movie_director` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_movies`
--

INSERT INTO `tbl_movies` (`movie_id`, `movie_name`, `movie_picture`, `movie_clip`, `movie_year`, `movie_description`, `movie_rating`, `movie_director`) VALUES
(1, 'Forrest Gump', 'forrestGump.jpg', 'forrestGump.mp4', '1994', 'A simple-minded but kind-hearted Alabama boy grows up with his best friend - a beautiful girl called Jenny. He succeeds in life through a mixture of luck and destiny and thus influences and is present at some of the most important events in the second half of the 20th century. Throughout his life he is told by other characters what life is about and whether it\'s all random or destined to happen, but he comes to his own conclusion towards the end.', 9, 'Robert Zemeckis'),
(2, 'Hidden Figures', 'hiddenFigures.jpg', 'hiddenFigures.mp4', '2016', 'Three brilliant African-American women at NASA -- Katherine Johnson (Taraji P. Henson), Dorothy Vaughan (Octavia Spencer) and Mary Jackson (Janelle Monáe) -- serve as the brains behind one of the greatest operations in history: the launch of astronaut John Glenn (Glen Powell) into orbit, a stunning achievement that restored the nation\'s confidence, turned around the Space Race and galvanized the world.', 8, 'Theodore Melfi'),
(3, 'Lion', 'lion.jpg', 'lion.mp4', '2016', 'In 1986, Saroo was a five-year-old child in India of a poor but happy rural family. On a trip with his brother, Saroo soon finds himself alone and trapped in a moving decommissioned passenger train that takes him to Calcutta, 1500 miles away from home. Now totally lost in an alien urban environment and too young to identify either himself or his home to the authorities, Saroo struggles to survive as a street child until he is sent to an orphanage. Soon, Saroo is selected to be adopted by the Brierley family in Tasmania, where he grows up in a loving, prosperous home. However, for all his material good fortune, Saroo finds himself plagued by his memories of his lost family in his adulthood and tries to search for them even as his guilt drives him to hide this quest from his adoptive parents and his girlfriend. Only when he has an epiphany does he realize not only the answers he needs, but also the steadfast love that he has always had with all his loved ones in both worlds.', 8, 'Garth Davis'),
(4, 'Lady Bird', 'ladyBird.jpg', 'ladyBird.mp4', '2017', 'Going by the name of \"Lady Bird\", the outspoken Catholic high school senior student, Christine McPherson, is dreaming big of finally leaving her hometown of Sacramento, practically on pins and needles to attend a sophisticated New York City college. However, with her average grades and her family struggling to keep afloat, attending a public university closer to home would be a lot cheaper and safer, especially after last year\'s devastating 9/11 attack. In the end, amid grades, numerous college applications, a blooming teenage sexuality, and a strong-willed mother who is a real mother hen, Lady Bird must find a way to make her dreams happen. Can she survive life\'s bumps and cracks?', 8, 'Greta Gerwig'),
(5, 'Three Billboards', 'threeBillboards.jpg', 'threeBillboards.mp4', '2017', 'THREE BILLBOARDS OUTSIDE EBBING, MISSOURI is a darkly comic drama from Academy Award nominee Martin McDonagh (In Bruges). After months have passed without a culprit in her daughter\'s murder case, Mildred Hayes (Academy Award winner Frances McDormand) makes a bold move, painting three signs leading into her town with a controversial message directed at William Willoughby (Academy Award nominee Woody Harrelson), the town\'s revered chief of police. When his second-in-command Officer Dixon (Sam Rockwell), an immature mother\'s boy with a penchant for violence, gets involved, the battle between Mildred and Ebbing\'s law enforcement is only exacerbated.', 8, 'Martin McDonagh'),
(6, 'Hurt Locker', 'hurtLocker.jpg', 'hurtLocker.mp4', '2008', 'An intense portrayal of elite soldiers who have one of the most dangerous jobs in the world: disarming bombs in the heat of combat. When a new sergeant, James, takes over a highly trained bomb disposal team amidst violent conflict, he surprises his two subordinates, Sanborn and Eldridge, by recklessly plunging them into a deadly game of urban combat, behaving as if he\'s indifferent to death. As the men struggle to control their wild new leader, the city explodes into chaos, and James\' true character reveals itself in a way that will change each man forever.', 8, 'Kathryn Bigelow'),
(7, 'La La Land', 'lalaLand.jpg', 'lalaLand.mp4', '2016', 'The story of aspiring actress Mia and dedicated jazz musician Sebastian, who struggle to make ends meet while pursuing their dreams in a city known for destroying hopes and breaking hearts. With modern-day Los Angeles as the backdrop, this musical about everyday life explores what more important: a once-in-a-lifetime love or the spotlight.', 8, 'Damien Chazelle'),
(8, 'Zootopia', 'zootopia.jpg', 'zootopia.mp4', '2016', 'Judy Hopps has had the dream of being the first bunny police officer since she was a kid, and when she moved to Zooptopia- a city where animals live in harmony- that dream becomes a reality. But when she teams up with a mysterious, sly fox, a Zootopia wide scandal reveals that maybe not ALL animals live in harmony.', 8, 'Byron Howard'),
(9, 'Mary Poppins', 'maryPoppins.jpg', 'maryPoppins.mp3', '1964', 'Spoiled and bored upper crust Edwardian English family has their world turned upside down by an all nonsensical nanny who teaches them how to enjoy life. This movie is a musical and has both comedy and pathos and lots of imaginative scenes that are wonderful for adults and children alike. You\'ll be singing along in no time...\"in the most delightful way!\"', 7, 'Robert Stevenson'),
(10, 'The Big Sick', 'bigSick.jpg', 'bigSick.mp4', '2017', 'Kumail (Kumail Nanjiani), in the middle of becoming a budding stand-up comedian, meets Emily (Zoe Kazan). Meanwhile, a sudden illness sets in forcing Emily to be put into a medically-induced coma. Kumail must navigate being a comedian, dealing with tragic illness, and placating his family\'s desire to let them fix him up with a spouse, while contemplating and figuring out who he really is and what he truly believes.', 8, 'Michael Showalter'),
(11, 'Little Miss Sunshine', 'littleMissSunshine.jpg', 'littleMissSunshine.mp4', '2006', 'The Hoover family is the dictionary definition for the word \"dysfunctional\". The dad Richard is a man who gives lectures on winners and losers, the wife is Sheryl, a chain-smoking, frazzled wife and working mother whose idea of a home cooked meal frequently consists of a bucket of chicken. Her gay brother Frank recently attempted suicide. The grandpa is Edwin, a drug addict. The son is Dwayne a rebel who has vowed not to talk until he gets into the Air Force. And then there is Olive, a seven-year old girl who dreams of going to the Little Miss Sunshine pageant. So what happens when they do?', 8, 'Jonathan Dayton'),
(12, 'Juno', 'juno.jpg', 'juno.mp4', '2007', 'When precocious teen Juno MacGuff becomes pregnant, she chooses a failed rock star and his wife to adopt her unborn child. Complications occur when Mark, the prospective father, begins viewing Juno as more than just the mother of his future child, putting both his marriage and the adoption in jeopardy.', 8, 'Jason Reitman'),
(13, 'Avatar', 'avatar.jpg', 'avatar.mp4', '2009', 'On the lush alien world of Pandora live the Na\'vi, beings who appear primitive but are highly evolved. Because the planet\'s environment is poisonous, human/Na\'vi hybrids, called Avatars, must link to human minds to allow for free movement on Pandora. Jake Sully, a paralyzed former Marine, becomes mobile again through one such Avatar and falls in love with a Na\'vi woman. As a bond with her grows, he is drawn into a battle for the survival of her world.', 8, 'James Cameron'),
(14, 'Moana', 'moana.jpg', 'moana.mp4', '2016', 'An adventurous teenager sails out on a daring mission to save her people. During her journey, Moana meets the once-mighty demigod Maui, who guides her in her quest to become a master wayfinder. Together, they sail across the open ocean on an action-packed voyage, encountering enormous monsters and impossible odds. Along the way, Moana fulfills the ancient quest of her ancestors and discovers the one thing she always sought: her own identity.', 8, 'Ron Clements'),
(15, 'Up', 'up.jpg', 'up.mp4', '2009', 'Carl Fredricksen, a 78-year-old balloon salesman, is about to fulfill a lifelong dream. Tying thousands of balloons to his house, he flies away to the South American wilderness. But curmudgeonly Carl\'s worst nightmare comes true when he discovers a little boy named Russell is a stowaway aboard the balloon-powered house.', 8, 'Pete Docter'),
(16, 'Dark Knight', 'darkKnight.jpg', 'darkKnight.mp4', '2008', 'With the help of allies Lt. Jim Gordon and DA Harvey Dent, Batman has been able to keep a tight lid on crime in Gotham City. But when a vile young criminal calling himself the Joker suddenly throws the town into chaos, the caped Crusader begins to tread a fine line between heroism and vigilantism.', 9, 'Christopher Nolan'),
(17, 'The Shape of Water', 'shapeOfWater.jpg', 'shapeOfWater.mp4', '2017', 'Elisa is a mute, isolated woman who works as a cleaning lady in a hidden, high-security government laboratory in 1962 Baltimore. Her life changes forever when she discovers the lab\'s classified secret -- a mysterious, scaled creature from South America that lives in a water tank. As Elisa develops a unique bond with her new friend, she soon learns that its fate and very survival lies in the hands of a hostile government agent and a marine biologist.', 8, 'Guillermo del Toro'),
(18, 'Life of Pi', 'lifeofPi.jpg', 'lifeofPi.mp4', '2012', 'After deciding to sell their zoo in India and move to Canada, Santosh and Gita Patel board a freighter with their sons and a few remaining animals. Tragedy strikes when a terrible storm sinks the ship, leaving the Patels\' teenage son, Pi, as the only human survivor. However, Pi is not alone; a fearsome Bengal tiger has also found refuge aboard the lifeboat. As days turn into weeks and weeks drag into months, Pi and the tiger must learn to trust each other if both are to survive.', 8, 'Ang Lee'),
(19, 'Dunkirk', 'dunkirk.jpg', 'dunkirk.mp4', '2017', 'In May 1940, Germany advanced into France, trapping Allied troops on the beaches of Dunkirk. Under air and ground cover from British and French forces, troops were slowly and methodically evacuated from the beach using every serviceable naval and civilian vessel that could be found. At the end of this heroic mission, 330,000 French, British, Belgian and Dutch soldiers were safely evacuated.', 8, 'Christopher Nolan'),
(20, 'Isle of Dogs', 'isleofdogs.jpg', 'isleofdogs.mp4', '2018', 'In a dystopian future Japan, a dog flu virus spreads throughout the canine population. The authoritarian new mayor of Megasaki City, Kobayashi, signs a decree banishing all dogs to Trash Island, despite the scientist Professor Watanabe insisting he is close to finding a cure. The first dog to be banished is Spots, who belonged to Atari Kobayashi, the orphaned nephew and ward of the mayor.', 8, 'Wes Anderson'),
(21, 'Black Panther', 'blackpanther.jpg', 'blackpanther.mp4', '2018', 'After the death of his father, T\'Challa now prepares to be crowned the new king of Wakanda. However, T\'Challa finds that his position is now being challenged by the appearance of an old enemy named Killmonger, which puts both Wakanda and the world at risk. Teaming with the Dora Milaje, his little sister Shuri, and his CIA ally Everett K. Ross, T\'Challa must harness the powers of the Black Panther to fight his enemy and save Wakanda from destruction.', 8, 'Ryan Coogler'),
(22, 'Avengers: Infinity War', 'infinitywar.jpg', 'infinitywar.mp4', '2018', 'As the Avengers and their allies have continued to protect the world from threats too large for any one hero to handle, a new danger has emerged from the cosmic shadows: Thanos. A despot of intergalactic infamy, his goal is to collect all six Infinity Stones, artifacts of unimaginable power, and use them to inflict his twisted will on all of reality. Everything the Avengers have fought for has led up to this moment - the fate of Earth and existence itself has never been more uncertain.', 9, 'Anthony Russo, Joe Russo'),
(23, 'I, Tonya', 'itonya.jpg', 'itonya.mp4', '2017', 'In 1991, talented figure skater Tonya Harding becomes the first American woman to complete a triple axel during a competition. In 1994, her world comes crashing down when her ex-husband conspires to injure Nancy Kerrigan, a fellow Olympic hopeful, in a poorly conceived attack that forces the young woman to withdraw from the national championship. Harding\'s life and legacy instantly become tarnished as she\'s forever associated with one of the most infamous scandals in sports history.', 8, 'Craig Gillespie'),
(24, 'Get Out', 'getout.jpg', 'getOut.mp4', '2017', 'Rose Armitage is taking her boyfriend, Chris Washington, to meet her parents for the first time. He\'s a bit uneasy about how they\'ll treat him, as they\'re white and he\'s black. However, her parents turn out to be unfazed and everything seems to be going fine. Chris then starts to notice some weird behavioral traits with the African-American staff at the house. The Armitages throw a huge party and Chris ends up in some awkward conversations with the guests. Initially, he just puts it down to the racial difference, but then the guests\', and Armitages\', motives start to appear more sinister. Chris decides it is time to get out.', 8, 'Jordan Peele'),
(25, 'The Theory of Everything', 'theoryofeverything.jpg', 'theoryofeverything.mp4', '2014', '\r\nIn the 1960s, Cambridge University student and future physicist Stephen Hawking falls in love with fellow collegian Jane Hawking. At 21, Hawking learns that he has motor neuron disease. Despite this -- and with Jane at his side -- he begins an ambitious study of time, of which he has very little left, according to his doctor. He and Jane defy terrible odds and break new ground in the fields of medicine and science, achieving more than either could hope to imagine.', 8, 'James Marsh'),
(26, 'The Disaster Artist', 'disasterartist.jpg', 'disasterArtist.mp4', '2017', 'Aspiring actor Greg Sestero befriends the eccentric Tommy Wiseau. The two travel to L.A, and when Hollywood rejects them, Tommy decides to write, direct, produce and star in their own movie. That movie is The Room, which has attained cult status as the \"Citizen Kane\" of bad movies.', 8, 'James Franco');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_movies_genres`
--

CREATE TABLE `tbl_movies_genres` (
  `movies_genre_id` mediumint(9) NOT NULL,
  `movie_id` mediumint(9) NOT NULL,
  `genre_id` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_movies_genres`
--

INSERT INTO `tbl_movies_genres` (`movies_genre_id`, `movie_id`, `genre_id`) VALUES
(1, 1, 2),
(2, 1, 5),
(3, 1, 7),
(4, 2, 4),
(5, 2, 5),
(6, 2, 7),
(7, 3, 5),
(8, 4, 5),
(9, 5, 5),
(10, 6, 5),
(11, 6, 1),
(12, 7, 5),
(13, 7, 6),
(14, 8, 2),
(15, 8, 3),
(16, 8, 7),
(17, 8, 10),
(18, 9, 6),
(19, 9, 7),
(20, 10, 3),
(21, 11, 3),
(22, 12, 3),
(23, 13, 1),
(24, 13, 2),
(25, 13, 5),
(26, 14, 6),
(27, 14, 2),
(28, 14, 7),
(29, 14, 10),
(30, 15, 2),
(31, 15, 7),
(32, 15, 10),
(33, 16, 1),
(34, 16, 5),
(35, 17, 5),
(36, 18, 2),
(37, 18, 5),
(38, 19, 1),
(39, 19, 4),
(40, 19, 5),
(41, 20, 5),
(42, 20, 10),
(43, 21, 1),
(44, 21, 5),
(45, 22, 1),
(46, 22, 2),
(47, 22, 5),
(48, 23, 4),
(49, 23, 5),
(50, 24, 5),
(51, 24, 3),
(52, 24, 8),
(53, 25, 5),
(54, 25, 4),
(55, 26, 3),
(58, 40, 1),
(59, 41, 1),
(60, 42, 1),
(61, 43, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `user_fname` varchar(250) NOT NULL,
  `user_lname` varchar(150) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_level` varchar(15) NOT NULL,
  `user_ip` varchar(50) NOT NULL DEFAULT 'no',
  `login_attempts` tinyint(4) NOT NULL,
  `first_login` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_lname`, `user_name`, `user_pass`, `user_email`, `user_date`, `user_level`, `user_ip`, `login_attempts`, `first_login`) VALUES
(1, 'Lyndsay', 'Fearnall', 'lyndaaay', 'test', 'lyndsay.fearnall@gmail.com', '2018-04-08 06:33:10', '2', '::1', 0, 1),
(24, 'John', 'Doe', 'testUser', 'test', 'test1234@test.com', '2018-04-09 09:03:15', '1', '::1', 0, 1),
(28, 'Listen', 'Linda', 'listenlinda', 'test', 'listenlinda@gmail.com', '2018-04-08 07:11:36', '2', '::1', 0, 1),
(29, 'Hairy', 'Potter', 'hairyp', 'testing2', 'hp@gmail.com', '2018-04-08 06:03:19', '1', '::1', 0, 1),
(31, 'TESTING', '123', 'test', '$2y$11$R8Jd2EtkQYkJ1LRBs3snhuXQe8dg2Bm8JzNgPHJzqNu9ddf/aPAci', '1234', '2018-04-08 06:21:28', '2', '::1', 0, 1),
(33, 'ENCRYPTED PASSWORD', 'wooooooooo', 'tesssssst', '$2y$11$srtPtJP8vBeMZ8bS3AR.2er3G.cDvpJiIkJNzP4eIQ5jKEQ4Ws6Fy', 'woooooo', '2018-04-07 23:52:40', '2', 'no', 5, 0),
(35, 'another', 'test', 'another_test_user', '$2y$11$Y.DOnN77pE17AsUdA5AaQuaPVKTIwh02P6x5Mg6Ql/8f77TKzTnAW', 'testuser', '2018-04-08 18:32:12', '2', 'no', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_genre`
--
ALTER TABLE `tbl_genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `tbl_movies_genres`
--
ALTER TABLE `tbl_movies_genres`
  ADD PRIMARY KEY (`movies_genre_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_genre`
--
ALTER TABLE `tbl_genre`
  MODIFY `genre_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_movies`
--
ALTER TABLE `tbl_movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `tbl_movies_genres`
--
ALTER TABLE `tbl_movies_genres`
  MODIFY `movies_genre_id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
