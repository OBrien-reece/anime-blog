-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 07:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `9anime`
--

-- --------------------------------------------------------

--
-- Table structure for table `anime`
--

CREATE TABLE `anime` (
  `id` int(10) UNSIGNED NOT NULL,
  `anime_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anime_image_profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anime`
--

INSERT INTO `anime` (`id`, `anime_title`, `blog_title`, `description`, `slug`, `anime_image_profile`, `created_at`, `updated_at`) VALUES
(36, 'Youjo Senki', 'The saga of tanya the evil', '<h1 style=\"text-align: justify; \"><span style=\"background-color: var(--bs-body-bg); text-align: var(--bs-body-text-align);\"><b><span style=\"font-size: 14px; font-family: &quot;Times New Roman&quot;;\">﻿Synopsis</span></b></span></h1><h2 style=\"text-align: justify; \"><span style=\"font-size: 14px; font-family: &quot;Times New Roman&quot;;\">Tanya Degurechaff is a young soldier infamous for predatorial-like ruthlessness and an uncanny, tactical aptitude, earning her the nickname of the \"Devil of the Rhine.\" Underneath her innocuous appearance, however, lies the soul of a man who challenged Being X, the self-proclaimed God, to a battle of wits—which resulted in him being reincarnated as a little girl into a world of magical warfare. Hellbent on defiance, Tanya resolves to ascend the ranks of her country\'s military as it slowly plunges into world war, with only Being X proving to be the strongest obstacle in recreating the peaceful life she once knew. But her perceptive actions and combat initiative have an unintended side effect: propelling the mighty Empire into becoming one of the most powerful nations in mankind\'s history.</span></h2><table class=\"table table-bordered\"><tbody><tr><td><h2 style=\"color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px; font-family: &quot;Times New Roman&quot;;\">Tanya Degurechaff</span></h2></td><td><h2 style=\"color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px; font-family: &quot;Times New Roman&quot;;\">&nbsp;Tanya Degurechaff Tanya Degurechaff is a cute, adorable and pretty-good looking little girl. But deep inside, she is highly power-hungry, amoral, ruthless, sadistic and hot-tempered. Especially when she is in battle against her enemies, she shows utter ruthlessness and bloodlust just to accomplish her missions. Tanya also strongly disapproves of failure and disobedience from her subordinates. She is loyal to her own job and always wants to finish it as soon as possible. Tanya will never let anyone discriminate her appearance because of how fast she goes through the ranks in the military.</span></h2></td></tr><tr><td><h2 style=\"color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px; font-family: &quot;Times New Roman&quot;;\">Viktoriya Ivanovna Serebryakova</span></h2></td><td><h2 style=\"color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px; font-family: &quot;Times New Roman&quot;;\">&nbsp;Viktoriya Ivanovna Serebryakova is a mage and a conscript in the Empire\'s army, and in the past were a member of Platoon 3 under Tanya\'s leadership. After that, she joined the new Wing Battalion named \"V601\" to serve as Tanya\'s adjutant.</span></h2></td></tr><tr><td><h2 style=\"color: rgb(0, 0, 0); text-align: justify;\"><span style=\"font-size: 14px; font-family: &quot;Times New Roman&quot;;\">&nbsp;Existence X</span></h2></td><td><h2 style=\"color: rgb(0, 0, 0); text-align: justify;\"><span style=\"text-align: var(--bs-body-text-align); background-color: var(--bs-body-bg); font-size: 14px; font-family: &quot;Times New Roman&quot;;\">Being X is the main antagonist and the deuteragonist of the Youjo Senki series. It is, in its own words, \"God\", but Tanya in her first meeting with it labeled it as the devil. Being X is a mysterious being. It claims to be a God, the God of the Bible, the one that gave the 10 commandments to Moses.</span></h2></td></tr><tr><td><h2 style=\"color: rgb(0, 0, 0); text-align: justify;\"><span style=\"text-align: var(--bs-body-text-align); background-color: var(--bs-body-bg); font-size: 14px; font-family: &quot;Times New Roman&quot;;\">Hans von Zettour</span></h2></td><td><h2 style=\"color: rgb(0, 0, 0); text-align: justify;\"><span style=\"text-align: var(--bs-body-text-align); background-color: var(--bs-body-bg); font-size: 14px; font-family: &quot;Times New Roman&quot;;\">Imperial Army General, Chief of Staff. A rationalist boasting enormous knowledge. Cooperates with Rudersdorf, Chief of Operations, to plan and implement strategies.</span></h2></td></tr></tbody></table><h2 style=\"text-align: justify; \"><span style=\"text-align: var(--bs-body-text-align); background-color: var(--bs-body-bg); font-size: 14px; font-family: &quot;Times New Roman&quot;;\">&nbsp;This anime, compressed into one long ass sentence: “An intelligent, asshole, soldier loli is actually a reincarnated, sociopathic, atheist, former salaryman, who occasionally gets forced by a stalker, god-like entity to pray to it in order for him-now-her to survive in a world-war setting and wreck his/her war enemies... with a magic gun.” Youjo Senki was a pretty interesting show. It successfully presents an uncommon perspective in anime, where the main character is borderline villainous. I personally found it very entertaining and would recommend it to you. </span></h2><h1 style=\"text-align: justify; \"><span style=\"text-align: var(--bs-body-text-align); background-color: var(--bs-body-bg); font-size: 14px; font-family: &quot;Times New Roman&quot;;\"><b>Nations </b></span></h1><h2 style=\"text-align: justify; \"><span style=\"text-align: var(--bs-body-text-align); background-color: var(--bs-body-bg); font-size: 14px; font-family: &quot;Times New Roman&quot;;\">Keep in mind that the name of these nations are translated from Japanese so the translation of names may be incorrect or differ from place to place. For more information, see Terminologies. The Youjo Senki series has several nations present in the story, which are mostly located in Europe. Nations present in war include; </span></h2><ol><li style=\"text-align: justify;\"><span style=\"text-align: var(--bs-body-text-align); background-color: var(--bs-body-bg); font-size: 14px; font-family: &quot;Times New Roman&quot;;\">Empire 帝国 </span></li><li style=\"text-align: justify;\"><span style=\"text-align: var(--bs-body-text-align); background-color: var(--bs-body-bg); font-size: 14px; font-family: &quot;Times New Roman&quot;;\">Legadonia Entente Alliance レガドニア協商連合 </span></li><li style=\"text-align: justify;\"><span style=\"text-align: var(--bs-body-text-align); background-color: var(--bs-body-bg); font-size: 14px; font-family: &quot;Times New Roman&quot;;\">Francois Republic フランソワ共和国</span></li><li style=\"text-align: justify;\"><span style=\"text-align: var(--bs-body-text-align); background-color: var(--bs-body-bg);\"><font face=\"Times New Roman\"><span style=\"font-size: 14px;\">Commonwealth 連合王国 </span></font></span></li><li style=\"text-align: justify;\"><span style=\"text-align: var(--bs-body-text-align); background-color: var(--bs-body-bg);\"><font face=\"Times New Roman\"><span style=\"font-size: 14px;\">Principality of Dacia ダキア大公国 </span></font></span></li><li style=\"text-align: justify;\"><span style=\"text-align: var(--bs-body-text-align); background-color: var(--bs-body-bg);\"><font face=\"Times New Roman\"><span style=\"font-size: 14px;\">Kingdom of Ildoa イルドア王国 </span></font></span></li><li style=\"text-align: justify;\"><span style=\"text-align: var(--bs-body-text-align); background-color: var(--bs-body-bg);\"><font face=\"Times New Roman\"><span style=\"font-size: 14px;\">Russy Federation ルーシー連邦 </span></font></span></li><li style=\"text-align: justify;\"><span style=\"text-align: var(--bs-body-text-align); background-color: var(--bs-body-bg);\"><font face=\"Times New Roman\"><span style=\"font-size: 14px;\">Unified States 合州国 </span></font></span></li><li style=\"text-align: justify;\"><span style=\"text-align: var(--bs-body-text-align); background-color: var(--bs-body-bg);\"><font face=\"Times New Roman\"><span style=\"font-size: 14px;\">Akitsushima Dominion 秋津洲皇国 </span></font></span></li><li style=\"text-align: justify;\"><span style=\"text-align: var(--bs-body-text-align); background-color: var(--bs-body-bg);\"><font face=\"Times New Roman\"><span style=\"font-size: 14px;\">Waldstätte Confederacy 森林三州誓約同盟&nbsp; </span></font></span></li><li style=\"text-align: justify;\"><span style=\"text-align: var(--bs-body-text-align); background-color: var(--bs-body-bg);\"><font face=\"Times New Roman\"><span style=\"font-size: 14px;\">Ispagna Collective イスパニア共同体 </span></font></span></li><li style=\"text-align: justify;\"><span style=\"text-align: var(--bs-body-text-align); background-color: var(--bs-body-bg);\"><font face=\"Times New Roman\"><span style=\"font-size: 14px;\">Turkman Principalities トルクメーン諸公国</span></font><br></span><br></li></ol>', 'the-saga-of-tanya-the-evil', '1672929196-.jpg', '2023-01-05 11:33:16', '2023-01-05 11:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `anime_characters`
--

CREATE TABLE `anime_characters` (
  `anime_id` int(10) UNSIGNED NOT NULL,
  `character_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_information`
--

CREATE TABLE `blog_information` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `premiered` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `licensors` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_information`
--

INSERT INTO `blog_information` (`id`, `blog_id`, `type`, `status`, `premiered`, `studio`, `genre`, `licensors`) VALUES
(1, 36, 'Television Series', 'Completed', 'Winter 2017', 'Nut', 'Isekai, Magical Sex Shift, Military, Reincarnation', 'Funimation, Cruncyroll');

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `id` int(10) UNSIGNED NOT NULL,
  `characters` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `power_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `voice_actor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`id`, `characters`, `power_desc`, `voice_actor`, `image_path`, `image_path_2`, `created_at`, `updated_at`) VALUES
(1, 'Denji', '<h2 style=\"box-sizing: inherit; border-top: 0px; border-right: 0px; border-bottom: 1px solid var(--theme-border-color); border-left: 0px; border-image: initial; margin: 18px 0px 9px; padding: 6px 0px; vertical-align: baseline; font-family: var(--theme-page-headings-font),rubik,helvetica,arial,sans-serif; line-height: 1.25; overflow-wrap: break-word; font-size: 24px; overflow: hidden; color: rgb(58, 58, 58);\"><span class=\"mw-headline\" id=\"Appearance\" style=\"box-sizing: inherit; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\"><b>Appearance</b></span></h2><h3 style=\"box-sizing: inherit; border: 0px; margin: 24px 0px 12px; padding: 0px; vertical-align: baseline; font-family: var(--theme-page-headings-font),rubik,helvetica,arial,sans-serif; line-height: 1.25; overflow-wrap: break-word; font-size: 18px; color: rgb(58, 58, 58);\"><b><span id=\"Human_Form_.28Pre-Fusion.29\" style=\"box-sizing: inherit; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\"></span><span class=\"mw-headline\" id=\"Human_Form_(Pre-Fusion)\" style=\"box-sizing: inherit; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\">Human Form (Pre-Fusion)</span></b></h3><p style=\"box-sizing: inherit; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; overflow-wrap: break-word; font-size: 14px; line-height: 1.75; color: rgb(58, 58, 58); font-family: rubik, helvetica, arial, sans-serif;\">Denji is a teenage boy with blond and scruffy hair. He has yellow-brown eyes and bags underneath, resulting in a dazed and tired expression. His teeth are noticeably sharp and angular. Due to malnutrition in his childhood, he has a scrawny build with protruding ribs. Before becoming a&nbsp;<a href=\"https://chainsaw-man.fandom.com/wiki/Hybrid\" title=\"Hybrid\" style=\"box-sizing: inherit; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; color: var(--theme-link-color); text-decoration: none; transition-property: color; line-height: inherit;\">hybrid</a>, Denji was missing his right eye and several other non-essential organs, including a testicle and a kidney.<span title=\"Chainsaw Man Manga: [[Chapter 1]], Pages 1 - 3\" style=\"box-sizing: inherit; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\"><sup id=\"cite_ref-Ch1Pg1_-_3_1-0\" class=\"reference\" style=\"box-sizing: inherit; border: 0px; margin: 0px; padding: 0px; unicode-bidi: isolate; white-space: nowrap; font-size: 10px;\"><a href=\"https://chainsaw-man.fandom.com/wiki/Denji#cite_note-Ch1Pg1_-_3-1\" style=\"box-sizing: inherit; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; color: var(--theme-link-color); text-decoration: none; transition-property: color; line-height: inherit;\">[1]</a></sup></span>&nbsp;He covered his missing eye with an eyepatch. He also wears a loose white tank top, a green jacket and black pants during this time.</p><h3 style=\"box-sizing: inherit; border: 0px; margin: 24px 0px 12px; padding: 0px; vertical-align: baseline; font-family: var(--theme-page-headings-font),rubik,helvetica,arial,sans-serif; line-height: 1.25; overflow-wrap: break-word; font-size: 18px; color: rgb(58, 58, 58);\"><b><span id=\"Human_Form_.28Post-Fusion.29\" style=\"box-sizing: inherit; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\"></span><span class=\"mw-headline\" id=\"Human_Form_(Post-Fusion)\" style=\"box-sizing: inherit; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\">Human Form (Post-Fusion)</span></b></h3><p style=\"box-sizing: inherit; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; overflow-wrap: break-word; font-size: 14px; line-height: 1.75; color: rgb(58, 58, 58); font-family: rubik, helvetica, arial, sans-serif;\">After Denji forms a contract with Pochita, his heart is fused with Pochita, a chainsaw cord forms in the middle of his sternum and he regains his lost organs along with having a muscular build.<span title=\"Chainsaw Man Manga: [[Chapter 1]], Page 37\" style=\"box-sizing: inherit; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\"><sup id=\"cite_ref-Ch1Pg37_2-0\" class=\"reference\" style=\"box-sizing: inherit; border: 0px; margin: 0px; padding: 0px; unicode-bidi: isolate; white-space: nowrap; font-size: 10px;\"><a href=\"https://chainsaw-man.fandom.com/wiki/Denji#cite_note-Ch1Pg37-2\" style=\"box-sizing: inherit; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; color: var(--theme-link-color); text-decoration: none; transition-property: color; line-height: inherit;\">[2]</a></sup></span></p><p style=\"box-sizing: inherit; border: 0px; margin: 24px 0px; padding: 0px; vertical-align: baseline; overflow-wrap: break-word; font-size: 14px; line-height: 1.75; color: rgb(58, 58, 58); font-family: rubik, helvetica, arial, sans-serif;\">He spent much of his time wearing the standard Public Safety Devil Hunter uniform, consisting of a white shirt, tie, and slacks. He wore the uniform carelessly, his shirt wrinkled and sleeves rolled up.<span title=\"Chainsaw Man Manga: [[Chapter 3]], Page 4\" style=\"box-sizing: inherit; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\"><sup id=\"cite_ref-Ch3Pg4_3-0\" class=\"reference\" style=\"box-sizing: inherit; border: 0px; margin: 0px; padding: 0px; unicode-bidi: isolate; white-space: nowrap; font-size: 10px;\"><a href=\"https://chainsaw-man.fandom.com/wiki/Denji#cite_note-Ch3Pg4-3\" style=\"box-sizing: inherit; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; color: var(--theme-link-color); text-decoration: none; transition-property: color; line-height: inherit;\">[3]</a></sup></span></p><p style=\"box-sizing: inherit; border: 0px; margin: 24px 0px; padding: 0px; vertical-align: baseline; overflow-wrap: break-word; font-size: 14px; line-height: 1.75; color: rgb(58, 58, 58); font-family: rubik, helvetica, arial, sans-serif;\">After resigning from as a Public Safety Devil Hunter, Denji now wears&nbsp;<a href=\"https://chainsaw-man.fandom.com/wiki/Fourth_East_High_School\" title=\"Fourth East High School\" style=\"box-sizing: inherit; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; color: var(--theme-link-color); text-decoration: none; transition-property: color; line-height: inherit;\">Fourth East High School</a>\'s uniform, a black buttoned longsleeved shirt (which he mainly wears unbuttoned) and black pants.</p><h3 style=\"box-sizing: inherit; border: 0px; margin: 24px 0px 12px; padding: 0px; vertical-align: baseline; font-family: var(--theme-page-headings-font),rubik,helvetica,arial,sans-serif; line-height: 1.25; overflow-wrap: break-word; font-size: 18px; color: rgb(58, 58, 58);\"><span class=\"mw-headline\" id=\"Hybrid_Form\" style=\"box-sizing: inherit; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\"><b>Hybrid Form</b></span></h3><p style=\"box-sizing: inherit; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; overflow-wrap: break-word; font-size: 14px; line-height: 1.75; color: rgb(58, 58, 58); font-family: rubik, helvetica, arial, sans-serif;\">If his chainsaw cord is pulled while he has enough blood for the transformation, then his head will morph into a demonic, mechanical shape with long, jagged fangs and a chainsaw handle on the back. Large chainsaws will emerge from his forehead, arms and legs, he is able to retract and extract any of them at will.<span title=\"Chainsaw Man Manga: [[Chapter 1]], Page 42\" style=\"box-sizing: inherit; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\"><sup id=\"cite_ref-Ch1Pg42_4-0\" class=\"reference\" style=\"box-sizing: inherit; border: 0px; margin: 0px; padding: 0px; unicode-bidi: isolate; white-space: nowrap; font-size: 10px;\"><a href=\"https://chainsaw-man.fandom.com/wiki/Denji#cite_note-Ch1Pg42-4\" style=\"box-sizing: inherit; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; color: var(--theme-link-color); text-decoration: none; transition-property: color; line-height: inherit;\">[4]</a></sup></span>&nbsp;If Denji\'s chainsaw cord is pulled while he does not have enough blood, then a chainsaw blade will partially emerge from his face.<span title=\"Chainsaw Man Manga: [[Chapter 9]], Page 16\" style=\"box-sizing: inherit; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\"><sup id=\"cite_ref-Ch9Pg16_5-0\" class=\"reference\" style=\"box-sizing: inherit; border: 0px; margin: 0px; padding: 0px; unicode-bidi: isolate; white-space: nowrap; font-size: 10px;\"><a href=\"https://chainsaw-man.fandom.com/wiki/Denji#cite_note-Ch9Pg16-5\" style=\"box-sizing: inherit; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; color: var(--theme-link-color); text-decoration: none; transition-property: color; line-height: inherit;\">[5]</a></sup></span></p><h3 style=\"box-sizing: inherit; border: 0px; margin: 24px 0px 12px; padding: 0px; vertical-align: baseline; font-family: var(--theme-page-headings-font),rubik,helvetica,arial,sans-serif; line-height: 1.25; overflow-wrap: break-word; font-size: 18px; color: rgb(58, 58, 58);\"><span class=\"mw-headline\" id=\"Devil_Form\" style=\"box-sizing: inherit; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\"><b>Devil Form</b></span></h3><p style=\"box-sizing: inherit; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; overflow-wrap: break-word; font-size: 14px; line-height: 1.75; color: rgb(58, 58, 58); font-family: rubik, helvetica, arial, sans-serif;\">After losing his will to live and surrendering himself to Makima, Pochita takes control over Denji\'s body and reveals the true Chainsaw Devil, completely losing his human consciousness and letting Pochita take over. Prior to the transformation, his intestines emerge from his stomach and wrap around his neck, resembling a scarf or a collar. Once transformed, his body is black, looking to be covered with either armored plates or scales. He gains spikes on his shoulders and the back of his head, the handle on the back of his head disappears. He becomes much larger and bulkier, towering over the average human. His arms split at the elbows, each with two forearms equipped with their own Chainsaw Blades.</p>', 'Toya, Kikunosuke', '1671611636-.jpg', '1671611636-.jpg', '2022-12-21 05:33:56', '2022-12-21 05:33:56'),
(2, 'wdefrf', '<p><span style=\"font-family: Verdana, Arial; font-size: 11px;\">Gol D. Roger was known as the \"Pirate King,\" the strongest and most infamous being to have sailed the Grand Line. The capture and execution of Roger by the World Government brought a change throughout the world. His last words before his death revealed the existence of the greatest treasure in the world, One Piece. It was this revelation that brought pages the Grand Age of Pirates, men who dreamed of finding One Piece—which promises an unlimited amount of riches and fame—and quite possibly the pinnacle of glory and the title of the Pirate King.</span><br style=\"font-family: Verdana, Arial; font-size: 11px;\"><br style=\"font-family: Verdana, Arial; font-size: 11px;\"><span style=\"font-family: Verdana, Arial; font-size: 11px;\">Enter Monkey D. Luffy, a 17-year-old boy who defies your standard definition of a pirate. Rather than the popular persona of a wicked, hardened, toothless pirate ransacking villages for fun, Luffy\'s reason for being a pirate is one of pure wonder: the thought of an exciting adventure that leads him to intriguing people and ultimately, the promised treasure. Following in the footsteps of his childhood hero, Luffy and his crew travel across the Grand Line, experiencing crazy adventures, unveiling dark mysteries and battling strong enemies, all in order to reach the most coveted of all fortunes—One Piece.</span><br></p>', 'qwdqfwefd', '1671613568-.jpg', '1671613568-.jpg', '2022-12-21 06:06:08', '2022-12-21 06:06:08'),
(3, 'Luffy', 'As one of the Four Emperors, and at the young age of 19, Luffy is one of the four most powerful pirates in the world. He captains the Straw Hat Pirates, holding the greatest authority over a mighty and diverse crew consisting of several infamous members, many of whom are extremely powerful in their own right. Luffy has a tremendous amount of influence over his crewmates, so much so that they all trust him with their lives, despite his reckless behavior and, in some cases, even because of it.\r\n\r\nHe is also one of twelve pirates who have been dubbed as the \"Worst Generation\", a group of individuals who have become famous for the bold and major actions they have committed against the World Government, and all have bounties of over Beli.png100,000,000. Indirectly, he also has claim over the Straw Hat Grand Fleet, a massive fleet consisting of seven powerful New World crews numbering 5640 people in total, who all swore to serve under him of their own will and come to assist him whenever he may need them.[27] The scope of Luffy\'s authority is considered by the World Government to be close to on par with the Four Emperors, the four most powerful and influential pirates in the world, and the press dubbed Luffy the \"Fifth Emperor\" as a result.[28]\r\n\r\nHowever, Luffy officially became an Emperor after defeating one of the previous Emperors, Kaidou,[29] and his meteoric rise in status (in over two years) caused panic around the world; he currently holds a bounty of Beli.png3,000,000,000, which is currently the lowest Emperor bounty and equals the bounties of two of his fellow Worst Generation members - Kid and Law. His bounty is only surpassed by the bounties of the former Emperors Whitebeard, Big Mom, Kaidou, fellow Emperors Shanks, Blackbeard and Buggy, former Warlord Mihawk and the late Pirate King, Gol D. Roger himself.[18]\r\n\r\nLuffy is a fierce and formidable combatant who can invent extremely creative fighting techniques even during intense mid battle and has gone through harsh and rigorous training since he was a child. He has been taught by two legendary figures, his grandfather Monkey D. Garp, the \"Hero of the Marines\",[30] and Silvers Rayleigh, the retired first mate of the Pirate King\'s crew.[31] Despite acting goofy and eccentric most of the time, Luffy has proven to be a natural born leader.\r\n\r\nLuffy has exhibited his threat most notably by invading all three of the World Government\'s main strongholds in Paradise: he defeated over a thousand Marines on Enies Lobby by himself[32] and took down two CP9 agents,[33][34] with the invasion ultimately resulting in the destruction of Enies Lobby via Buster Call;[35] he infiltrated the great prison Impel Down and orchestrated the only mass breakout in its history;[36] he invaded Marine Headquarters during the Summit War of Marineford and greatly aided the Whitebeard Pirates in their ultimately unsuccessful effort to rescue Portgas D. Ace from execution.[37]\r\n\r\nOne of Luffy\'s greatest qualities is that he can become massively more powerful in an unthinkably short amount of time. To the amazement of friend and foe alike, Luffy has continuously defeated people who are renowned throughout the seas for their incredible strength and skill. Luffy has also significantly threatened the balance of the Three Great Powers by defeating three members of the Seven Warlords of the Sea—Crocodile,[38] Gecko Moria,[39] Donquixote Doflamingo[40]—and allying with two others, which caused Jinbe to defect from his position[41] and Trafalgar Law to lose his.[42] The World Government also views Luffy to be a grave threat simply because he is the son of Monkey D. Dragon, the leader of the Revolutionary Army.[43]', 'Mayumi Tanaka', '1671625303-.jpg', '1671625303-.jpg', '2022-12-21 09:21:43', '2022-12-21 09:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(23, '2014_10_12_000000_create_users_table', 1),
(24, '2014_10_12_100000_create_password_resets_table', 1),
(25, '2019_08_19_000000_create_failed_jobs_table', 1),
(26, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(27, '2022_12_15_083507_add_fname_to_users', 1),
(28, '2022_12_15_084104_add_lname_to_users', 1),
(29, '2022_12_15_090608_remove_name_from_users', 1),
(30, '2022_12_17_113004_create_animes_table', 1),
(31, '2022_12_17_125434_add_anime_to_anime', 1),
(32, '2022_12_17_145908_add_blog_title_to_anime', 1),
(33, '2022_12_18_082046_create_characters_table', 1),
(34, '2022_12_18_083843_create_anime_characters', 1),
(35, '2022_12_19_083836_add_user_type_to_users', 1),
(36, '2022_12_19_152725_add_anime_avatar_to_anime', 1),
(37, '2022_12_20_093244_add_image_to_characters', 1),
(38, '2022_12_20_161338_add_slug_to_anime', 1),
(39, '2022_12_21_111109_add_description_to_anime', 2),
(40, '2022_12_21_111149_add_description_to_anime', 3),
(41, '2022_12_21_111807_remove_description_from_anime', 4),
(42, '2022_12_21_111836_add_description_to_anime', 5),
(43, '2022_12_21_153849_add_anime_image_profile_to_anime', 6),
(44, '2023_01_05_104827_create_blog_information', 7),
(45, '2023_01_05_105523_add_anime_id_to_blog_information', 8),
(46, '2023_01_05_105919_remove_studio_from_anime', 9),
(47, '2023_01_05_110014_remove_premiered_from_anime', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `user_type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Swagger', 'Api', 'swaggerapi@gmail.com', 'Admin', NULL, '$2y$10$Nt0TaNLbzmojyYS3pgqgkurqsbsh9n4evatK86o3Bzf2PTJCKtRS.', NULL, '2022-12-21 05:11:07', '2022-12-21 05:11:07'),
(2, 'Brown', 'Buhere', 'brownbuhere@gmail.com', NULL, NULL, '$2y$10$PYr73IocLZrPOtriR5eqI.IwHX9Ez5esUESYP9WREs5UfgFsdSsD2', NULL, '2022-12-28 16:01:53', '2022-12-28 16:01:53'),
(3, 'Brown', 'Buhere', 'brownbuhere1@gmail.com', 'User', NULL, '$2y$10$im.ks5DEM2BSaWNh2Nb04eZWhcZ.2XP57jAxmcLFcm47TR4oCoFhm', NULL, '2022-12-28 16:11:03', '2022-12-28 16:11:03'),
(4, 'Reece', 'Junior', 'reecejunior@gmail.com', 'Admin', NULL, '$2y$10$h14UjMcyg2IjzrQ7pmJ6/OoqKDn0XJORbrt2tdsPOvZIdoZNf/WQ2', NULL, '2023-01-05 04:23:37', '2023-01-05 04:23:37'),
(5, 'Sally', 'Nyambuz', 'nyambuz@gmail.com', 'Admin', NULL, '$2y$10$5NtzQiHGBtnS0q8rBrAkb.ENWvZJFNArqXW0O1JHvsyYDC8ldX9wK', NULL, '2023-01-06 13:16:23', '2023-01-06 13:16:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anime_characters`
--
ALTER TABLE `anime_characters`
  ADD KEY `anime_characters_anime_id_foreign` (`anime_id`),
  ADD KEY `anime_characters_character_id_foreign` (`character_id`);

--
-- Indexes for table `blog_information`
--
ALTER TABLE `blog_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_information_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `blog_information`
--
ALTER TABLE `blog_information`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anime_characters`
--
ALTER TABLE `anime_characters`
  ADD CONSTRAINT `anime_characters_anime_id_foreign` FOREIGN KEY (`anime_id`) REFERENCES `anime` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `anime_characters_character_id_foreign` FOREIGN KEY (`character_id`) REFERENCES `characters` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_information`
--
ALTER TABLE `blog_information`
  ADD CONSTRAINT `blog_information_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `anime` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
