-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2019 at 05:45 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sahayogihaat`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `CommentId` int(11) NOT NULL,
  `Comment` text NOT NULL,
  `PostId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `EnteredDate` datetime NOT NULL DEFAULT current_timestamp(),
  `IsUpdated` bit(1) NOT NULL,
  `LastUpdatedDate` datetime NOT NULL DEFAULT current_timestamp(),
  `IsDeleted` bit(1) NOT NULL,
  `DeletedDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`CommentId`, `Comment`, `PostId`, `UserId`, `EnteredDate`, `IsUpdated`, `LastUpdatedDate`, `IsDeleted`, `DeletedDate`) VALUES
(4, 'Go to the police \r\n', 4, 5, '2019-08-25 04:58:12', b'0', '2019-08-25 04:58:12', b'0', '2019-08-25 04:58:12'),
(5, 'kati khera vako yesto timi nadaraounu parne timile kahi action haru linuparne\r\n', 4, 2, '2019-08-25 05:05:44', b'0', '2019-08-25 05:05:44', b'0', '2019-08-25 05:05:44'),
(6, 'kasare aru manxe haru yesto hunasakhxan \r\n', 5, 5, '2019-08-25 05:15:13', b'0', '2019-08-25 05:15:13', b'0', '2019-08-25 05:15:13'),
(7, 'Please learn to stand up for yourselves', 7, 7, '2019-08-25 07:56:39', b'0', '2019-08-25 07:56:39', b'0', '2019-08-25 07:56:39'),
(8, 'Its good that you didnt stay quiet. Im so sorry it happened to you. People can be so careless nowadays', 6, 9, '2019-08-25 08:11:49', b'0', '2019-08-25 08:11:49', b'0', '2019-08-25 08:11:49'),
(9, 'Oh my god. thats so terrible', 7, 9, '2019-08-25 08:12:45', b'0', '2019-08-25 08:12:45', b'0', '2019-08-25 08:12:45'),
(10, 'People are just so careless and selfish. Thank God nothing serious happened to you. ', 8, 9, '2019-08-25 08:13:48', b'0', '2019-08-25 08:13:48', b'0', '2019-08-25 08:13:48'),
(11, 'Its so sad that you have been tolerating all this for so many years.', 11, 6, '2019-08-25 08:25:54', b'0', '2019-08-25 08:25:54', b'0', '2019-08-25 08:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `PostId` int(11) NOT NULL,
  `casetype` varchar(100) NOT NULL,
  `Post` text NOT NULL,
  `location` text NOT NULL,
  `PostImage` text NOT NULL,
  `UserId` int(11) NOT NULL,
  `EnteredDate` datetime NOT NULL DEFAULT current_timestamp(),
  `IsUpdated` bit(1) NOT NULL,
  `LastUpdatedDated` datetime NOT NULL DEFAULT current_timestamp(),
  `IsDeleted` bit(1) NOT NULL,
  `DeletedDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`PostId`, `casetype`, `Post`, `location`, `PostImage`, `UserId`, `EnteredDate`, `IsUpdated`, `LastUpdatedDated`, `IsDeleted`, `DeletedDate`) VALUES
(4, 'harassment', 'I was walking down the road, on the way to my home. Suddenly, one guy came and grabbed me from the back. He then grabbed my breasts, I screamed with fear and that person tried to cover up my mouth, I hustled even more but he was so strong I could not make any move. I went numb and he touched me endlessly with those disgusting hands, my heart ached and cried in vain. After a few seconds, I gained my sense and and pushed him away with all my efforts and ran away. Please help me, I am still in pain and devastated. This happened a few hours ago near Sankhamul.', 'Sankhamul', 'd41d8cd98f00b204e9800998ecf8427e.', 4, '2019-08-25 04:54:57', b'0', '2019-08-25 04:54:57', b'0', '2019-08-25 04:54:57'),
(5, 'rape', 'I was travelling in a bus and since there were no empty seats so I was standing. All of a sudden a girl hugged me from back, at first i thought it was a mistake and with a gap of some minutes the same thing happened and at the third time I confronted her. Then she shamelessly said, I hugged you, Youâ€™re so handsome, I was shocked how can a girl be like this and I scolded her. And to my surprise, she started yelling at me instead and every other person in the bus thought I was molesting her and started shouting at me. And in the next stop, I was forced to drop down. I felt very humiliated. This happened on the way to Samakhusi. I wonder, how can a girl be like this insane or what should I even say.', 'gangabu', 'd41d8cd98f00b204e9800998ecf8427e.', 2, '2019-08-25 05:04:22', b'0', '2019-08-25 05:04:22', b'0', '2019-08-25 05:04:22'),
(6, 'hit', 'I was walking on my way to college, a bike drove so fast near to me and hit me immensely that I flew and dropped down. I could barely speak and I asked him to take me to the hospital, even though he heard my plea, he ran away. I was abandoned. Some local people came and rescued me and took me to the hospital. My left leg was fractured and I had a head injury too. Fortunately, I remember his bikeâ€™s number plate â€œBa Cha 1077â€. Please help me to reach this moron and get me justice. Its my humble request to this team', 'gangabu', 'd41d8cd98f00b204e9800998ecf8427e.', 5, '2019-08-25 05:07:26', b'0', '2019-08-25 05:07:26', b'0', '2019-08-25 05:07:26'),
(7, 'harassment', 'â€œI was used to how the guys acted... but being cornered in the small produce cooler by a rather large co-worker, was not something I was looking forward to. He would not let me pass and believe me there was no way around him, he began putting his hands on me and pulling me towards him as if to kiss, then showed me his penis. I had to show him I was carrying a pocket knife so that he would leave me be. To be female in food service, you have to have a thick skin...you have to endure the sexism and the insulting jokes. You have to work twice as hard as any man does just to show that you are not being a female.â€ ', 'Sankhamul', 'd41d8cd98f00b204e9800998ecf8427e.', 6, '2019-08-25 07:51:54', b'0', '2019-08-25 07:51:54', b'0', '2019-08-25 07:51:54'),
(8, 'hit', 'I was driving my bike on my own casual speed, a lady, maybe she is amateur in riding the scooty came in full speed and she could not control her accelerator and she ended up hitting me. I fell down on the road had some injuries. Rather than giving me some assistance to stand still along with my bike, she ran like anything. How inhumane a person can be? She could have said sorry and helped me but instead she ran like a thief. People please if you happen to hit someone, help them to get through it. After all it\'s your responsibility to take care of the injured one. DO help!!!”', 'gongabu', 'd41d8cd98f00b204e9800998ecf8427e.', 7, '2019-08-25 07:54:44', b'0', '2019-08-25 07:54:44', b'0', '2019-08-25 07:54:44'),
(9, 'rape', 'It started when I was about 2 or 3. I am DID (Dissociative Identity Disorder) / MPD (Multiple Personality Disorder) and that is the age of my youngest alter. Anyway, my cousins were the abusers. I know that things started with groping and touching. But then things turned sadistic. Or shall I be nice by saying ritualistic? I was poked and prodded and chemicals were put on my skin. I was beaten by baseball bats, and, of course, I was sodomized. Not just with my cousin\'s penis, but with cucumbers, golf clubs, pens, sticks and anything else that was lying around. That lasted until I was about 6. Then I was vaginally raped by my cousin.\"', 'gongabu', 'd41d8cd98f00b204e9800998ecf8427e.', 8, '2019-08-25 07:54:44', b'0', '2019-08-25 07:54:44', b'0', '2019-08-25 07:54:44'),
(10, 'acid', 'He threw acid on me through the window at night while I was staying in\r\nlying posture in my house.  I felt some sticky liquid trickle down my face. I felt intense pain and screamed. The neighbours immediately took me to Hospital. After washing the affected area with plenty of soap and water, the doctor advised me to get admitted in Medical College Hospital and accordingly I was admitted in One Stop Crisis Center (OCC) of the hospital for treatment and legal, lawyer and counselor support. I need public support and police help for getting justice\r\n', 'baneshwor', 'd41d8cd98f00b204e9800998ecf8427e.', 9, '2019-08-25 08:08:32', b'0', '2019-08-25 08:08:32', b'0', '2019-08-25 08:08:32'),
(11, 'violence', 'I lived in a violent marriage for years. I was very naive at first and really didnt know people like him existed. He would kick me, slap me, push me, trip me over, throw things at me, stand on my feet, yell abuse, call me names like â€˜social crippleâ€™, the list goes on and on, but he never punched me. In fact he would say to people that he couldnt stand â€˜wife bashersâ€™. He would tell me that he didnâ€™t want the children to play with so and sos children because they were a bad influence.\r\nHe tried to isolate us from all those who loved us and new people we met would go through character assasinations by him.\r\nLife was continous hell, fear and horror and he always blamed the children or me for his violence.\r\nThings got a lot worse towards the end. He would threaten to run us all off the road in the car and kill us. The violence became a daily occurance if not several episodes a day\r\nI dont want to live like this anymore. Please help me', 'koteshwor', 'd41d8cd98f00b204e9800998ecf8427e.', 10, '2019-08-25 08:24:50', b'0', '2019-08-25 08:24:50', b'0', '2019-08-25 08:24:50');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` int(11) NOT NULL,
  `FullName` text NOT NULL,
  `FullNameOPT` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `UserType` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Phone1` int(14) NOT NULL,
  `Phone2` int(14) NOT NULL,
  `Address1` text NOT NULL,
  `Address2` text NOT NULL,
  `UserImage` text NOT NULL,
  `EnteredDate` datetime NOT NULL DEFAULT current_timestamp(),
  `LastUpdatedDate` datetime NOT NULL DEFAULT current_timestamp(),
  `IsDeleted` bit(1) NOT NULL,
  `DeletedDate` datetime NOT NULL DEFAULT current_timestamp(),
  `IsEmergency` bit(1) NOT NULL,
  `IsUpdated` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `FullName`, `FullNameOPT`, `Email`, `Password`, `UserType`, `Gender`, `Phone1`, `Phone2`, `Address1`, `Address2`, `UserImage`, `EnteredDate`, `LastUpdatedDate`, `IsDeleted`, `DeletedDate`, `IsEmergency`, `IsUpdated`) VALUES
(1, 'Anish Shrestha', 'dragonanish', 'anishstha5@gmail.com', '670b14728ad9902aecba32e22fa4f6bd', 'user', 'male', 2147483647, 2147483647, 'nepal', 'kathmandu', '', '2019-08-24 14:30:43', '2019-08-24 14:30:43', b'0', '2019-08-24 14:30:43', b'0', b'0'),
(2, 'dibas paudel', 'dipu', 'dibas5@gmail.com', '670b14728ad9902aecba32e22fa4f6bd', 'user', 'male', 1111111111, 1111111111, 'nepal', 'kathmandu', '', '2019-08-24 18:29:19', '2019-08-24 18:29:19', b'0', '2019-08-24 18:29:19', b'0', b'0'),
(3, 'admin', 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'male', 256455241, 26565655, 'ktm', 'KTM', '', '2019-08-24 19:32:04', '2019-08-24 19:32:04', b'0', '2019-08-24 19:32:04', b'0', b'0'),
(4, 'priya thapa', 'unknown', 'priya@gmail.com', '670b14728ad9902aecba32e22fa4f6bd', 'user', 'female', 987898789, 986547514, 'nepal', 'kathmandu', '', '2019-08-25 04:53:28', '2019-08-25 04:53:28', b'0', '2019-08-25 04:53:28', b'0', b'0'),
(5, 'supriya rawal', 'suzi', 'supriya@gmail.com', '670b14728ad9902aecba32e22fa4f6bd', 'user', 'female', 987474747, 978547854, 'nepal', 'kathmandu', '', '2019-08-25 04:57:01', '2019-08-25 04:57:01', b'0', '2019-08-25 04:57:01', b'0', b'0'),
(6, 'Alka Shilpakar', 'Alka', 'alka@gmail.com', 'f379eaf3c831b04de153469d1bec345e', 'user', 'female', 2147483647, 2147483647, 'ktm', 'Bhaktapur', '', '2019-08-25 07:50:49', '2019-08-25 07:50:49', b'0', '2019-08-25 07:50:49', b'0', b'0'),
(7, 'Anisha Maharjan', 'Anisha', 'anisha@gmail.com', 'f379eaf3c831b04de153469d1bec345e', 'user', 'female', 2147483647, 896523145, 'lubu', 'kathmandu', '', '2019-08-25 07:53:56', '2019-08-25 07:53:56', b'0', '2019-08-25 07:53:56', b'0', b'0'),
(8, 'Sneha Shrestha', 'Alice', 'sneha@gmail.com', 'f379eaf3c831b04de153469d1bec345e', 'user', 'female', 2147483647, 2147483647, 'ktm', 'kathmandu', '', '2019-08-25 07:59:06', '2019-08-25 07:59:06', b'0', '2019-08-25 07:59:06', b'0', b'0'),
(9, 'Priyanka Shrestha', 'Priyanka', 'pri@gmail.com', 'f379eaf3c831b04de153469d1bec345e', 'user', 'female', 2147483647, 2147483647, 'baneshwor', 'kathmandu', '', '2019-08-25 08:08:05', '2019-08-25 08:08:05', b'0', '2019-08-25 08:08:05', b'0', b'0'),
(10, 'Shristi Shrestha', 'Shris', 'sristi@gmail.com', 'f379eaf3c831b04de153469d1bec345e', 'user', 'female', 2147483647, 2147483647, 'nepal', 'kathmandu', '', '2019-08-25 08:18:25', '2019-08-25 08:18:25', b'0', '2019-08-25 08:18:25', b'0', b'0'),
(11, 'user', 'user', 'user@user.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'female', 2147483647, 2147483647, 'user Address1', 'user Address2', '', '2019-08-25 09:17:58', '2019-08-25 09:17:58', b'0', '2019-08-25 09:17:58', b'0', b'0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CommentId`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`PostId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `CommentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `PostId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
