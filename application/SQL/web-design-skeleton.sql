-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2019 at 02:40 PM
-- Server version: 10.1.32-MariaDB
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
-- Database: `gamereview`
--

-- --------------------------------------------------------

--
-- Table structure for table `activereviews`
--

CREATE TABLE `activereviews` (
  `ID` int(11) NOT NULL,
  `GameName` varchar(250) NOT NULL,
  `GameBlurb` longtext NOT NULL,
  `GameReview` longtext NOT NULL,
  `GameComments_YN` varchar(1) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `ReviewImage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `activereviews`
--

INSERT INTO `activereviews` (`ID`, `GameName`, `GameBlurb`, `GameReview`, `GameComments_YN`, `slug`, `ReviewImage`) VALUES
(1, 'Borderlands 3', 'Borderlands 3 info.', 'This time around you and your team of up to four will take control of Moze the Gunner, Zane the Operative, Amara the Siren, or FL4K the Beastmaster. They’re a personable bunch: FL4K’s backhanded compliments are always good for a laugh and Moze’s mid-combat pop-culture references are pulled from refreshingly eclectic sources like Ariana Grande and John Wick. They’re fairly standard fare for a Borderlands game at this point, but unlike the previous games’ casts, every class has their versatility boosted by a choice between three different action skills selectable at the top of each notably beefed-up skill tree – except for Moze who gets to customize her mech’s loadout. My current Moze skill build is focused on being able to summon my mech for the maximum amount of time on a short cooldown and boosting damage output. That’s helped along by class mods and Anointed item effects that add powerful class-specific bonuses to loot, like an extra charge for FL4K’s Rakk Attack action skill that calls down a fiery pair of flying beasts to dive-bomb enemies.

There are a lot of neat details to sort through when it comes to your class’ progression, like skill augments that evolve FL4K’s pet or give Zane’s drone an airstrike. For my money, though, the most alluring skill point options are the one-and-done passives like Rushin’ Offensive, which allows you to sprint and shoot at the same time, or Dakka Bear, which adds a manable turret to Moze’s mech for co-op play.', 'Y', 'borderlands-3', 'borderlands-3.jpg');

INSERT INTO `activereviews` (`ID`, `GameName`, `GameBlurb`, `GameReview`, `GameComments_YN`, `slug`, `ReviewImage`) VALUES
(2, 'Jump Force', 'Jump force 3 info', 'In general, Jump Force’s plot takes itself a little too seriously and misses out on a huge opportunity for some fun interactions between beloved characters that would otherwise never have a chance to meet. The bland story is done no favors by the fact that most of the cutscenes are devoid of voice acting, so what few interesting interactions between characters we do get – like one involving Kenshin challenging Zoro to a duel after taking issue with his strict teaching methods – are left completely silent and lifeless.
It doesn’t help that during cutscenes everybody looks like barely animated action figures with bad lip-syncing and mostly frozen facial expressions.

 Also, for some strange reason that developer Spike Chunsoft describes as “a design decision,” Ryuk from Death Note doesn’t have any voice at all, despite everyone else in the scene talking and responding to him. On top of that, the framerate in the biggest and most important cutscenes is terrible, there’s no way to skip them (or any other cutscene), and there’s no English dub. So that’s not great..', 'Y', 'jump-force', 'jump-force.jpg');

INSERT INTO `activereviews` (`ID`, `GameName`, `GameBlurb`, `GameReview`, `GameComments_YN`, `slug`, `ReviewImage`) VALUES
(3, 'Days Gone', 'Days Gone info', 'Sadly, Deacons charisma and bitchin bike arent enough to carry Days Gone story, which is clumsily handled. Days Gone insists on tedious, barely interactive flashbacks of Deacon and his wife Sarah which play out like bad high school drama - her demand that he “promise to ride me as much as you ride your bike” at their wedding is a line that sticks in the mind - and repeating missions which begin and end with a stationary Deacon spouting overly-long monologues about their love. 

For the first half, this storyline at least forms a consistent emotional throughline and motivation for Deacon beyond simply staying alive, but it loses its direction in the second, where the focus shifts toward new characters and changing relationships with old ones, and I was left confused as to why I was meant to care. Of course, one cutscene played out for me entirely in slow motion, without audio, so maybe I missed it.', 'Y', 'days-gone', 'days-gone.jpg');

INSERT INTO `activereviews` (`ID`, `GameName`, `GameBlurb`, `GameReview`, `GameComments_YN`, `slug`, `ReviewImage`) VALUES
(4, 'Devil May Cry 5 ', 'Devil May Cry info', 'Devil May Cry 5’s story is somewhat unconventional in that it starts with events that would normally feel like the climax: you’re thrown right into a fight you’re meant to lose. After Dante stays behind to let Nero and a new character named V escape from a super-powered demon king named Urizen, the story jumps around a time period of a couple of months, rotating through perspectives as it tells the present-day story of Dante, Nero, and V, while also explaining the circumstances that led to Urizen’s rise to power and V’s quest to take him down.

There’s a great air of mystery to the unknown nature of both Urizen and V. Like Nero, I was never sure if I could trust V and found myself formulating theory after theory about his identity and motives with every new morsel of information that was fed to me. By the end of its 10 to 12 hours I still had some questions left over, but overall the plot kept me hooked all the way through with satisfying revelations, a few answers that fill in some long-standing series plot holes, and of course, the off-the-wall action that only Devil May Cry can deliver.', 'Y', 'devil-may-cry-5', 'devil-may-cry-5.jpg');

INSERT INTO `activereviews` (`ID`, `GameName`, `GameBlurb`, `GameReview`, `GameComments_YN`, `slug`, `ReviewImage`) VALUES
(5, 'Mortal Kombat 11', 'Mortal Kombat info', 'Mortal Kombat 11 retains all of those unique mechanics that give this series its identity, and of course, the gloriously gratuitous over-the-top and often comedic violence of its notorious Fatality finishing moves. However, surrounding all of that are new fighting systems that feel unlike anything the series has ever seen, and Mortal Kombat 11 is much better for being willing to take these bold steps to keep things fresh.

In some ways, less is more, and faster is not always better. To that end, Netherrealm has slowed the action down substantially relative to the last few games, especially compared to the hyper-rushdown-focused Mortal Kombat X. The run button is gone, walk speeds have been reduced across the board, and super-far-reaching and forward-moving combo strings are much rarer. At first, I wasn’t a huge fan of how slow Mortal Kombat 11 felt, but the more time I put in, the more I started to appreciate how these seemingly small changes added up to change the flow of a match in a great way. With a greater emphasis placed on careful positioning and whiff punishing and less of a focus on all-out blitzing to impose your 50/50 mixup game, fights feel more tactical and rewarding of smart play.', 'Y', 'mortal-kombat-11', 'mortal-kombat-11.jpg');

INSERT INTO `activereviews` (`ID`, `GameName`, `GameBlurb`, `GameReview`, `GameComments_YN`, `slug`, `ReviewImage`) VALUES
(6, 'Sonic Forces', 'Sonic Forces Info', 'The character creation is a huge selling point and one of Sonic Forces’ best features, and it feels great to be able to live out a childhood Sega fan dream of making your own Sonic character. You pick their species, customize their look, and dress them up in all kinds of fashion, from stylish (swanky Sega-themed gear, slick shades, and sporty shoes) to downright odd (clown wigs, shutter shades, and wrestling belts), unlocking more as you play. Seeing your creation do wild stunts alongside Sonic, doing fistbumps and taking down some rampaging robots, is a whole heap of fun.

Amazingly, the boss battles are actually quite good in Forces, which is surprising because Sonic boss fights tend to be a fairly weak element. They’re challenging but not overly long, and feature some stunning backdrops like a reality-bending battle with new foe Infinite among the winding coils of a giant snake. The problem is that there simply aren’t enough of them, and most of them are over way too fast, limiting their impact.', 'Y', 'sonic-forces', 'sonic-forces.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gamescomments`
--

CREATE TABLE `gamescomments` (
  `UID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ReviewID` int(11) NOT NULL,
  `UserComment` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `gamescomments`
--

INSERT INTO `gamescomments` (`UID`, `UserID`, `ReviewID`, `UserComment`) VALUES
(1, 2, 1, 'First one the assignment please John ;)');



-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UID` int(11) NOT NULL,
  `UserName` varchar(250) NOT NULL,
  `UserPassword` varchar(250) NOT NULL,
  `DarkMode` int(11) NOT NULL,
  `TypeUser` varchar(250)
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `UserName`, `UserPassword`, `DarkMode`) VALUES
(1, 'Lecturer', 'Example', 1);


INSERT INTO `users` (`UID`, `UserName`, `UserPassword`, `DarkMode`) VALUES
(2, 'Wahab', 'letmein', 1);


INSERT INTO `users` (`UID`, `UserName`, `UserPassword`, `DarkMode`) VALUES
(0, 'Anonymous', 'DOntUseMe', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activereviews`
--
ALTER TABLE `activereviews`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `gamescomments`
--
ALTER TABLE `gamescomments`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `UID` (`UID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `UID` (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activereviews`
--
ALTER TABLE `activereviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gamescomments`
--
ALTER TABLE `gamescomments`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
