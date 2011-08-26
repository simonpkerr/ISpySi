-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 26, 2011 at 10:18 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ispysi_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE IF NOT EXISTS `art` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `filename` varchar(300) CHARACTER SET utf8 NOT NULL,
  `notes` text CHARACTER SET utf8 NOT NULL,
  `artType_id` int(11) DEFAULT NULL,
  `dateCreated` date DEFAULT NULL,
  `dateAdded` date DEFAULT NULL,
  `mediaType_id` int(11) DEFAULT NULL,
  `featured` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FC35D654BC7D1970` (`artType_id`),
  KEY `IDX_FC35D6544FBBC852` (`mediaType_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=137 ;

--
-- Dumping data for table `art`
--

INSERT INTO `art` (`id`, `name`, `filename`, `notes`, `artType_id`, `dateCreated`, `dateAdded`, `mediaType_id`, `featured`) VALUES
(1, '', 'mergeface', 'This piece is a surreal, abstract, cubist horror fantasy. Its actually a portrait of my friends wife. That’s no reflection on how I feel about her. It was painted from a distorted photo and that kind of thing interests me. Evil.', 1, '0000-00-00', '2011-08-05', 3, 1),
(2, '', 'parismonument', 'This is the first painting in a series of three. This one has the most expression in it.', 1, '0000-00-00', '2011-08-05', 3, 1),
(3, '', 'mergeface2', 'This piece is the first in the merge face series. This one is in colour though. The colours are very jarring and discordant. They don''t sit well with each other and that was the idea. OK! It’s a very dark scene with all the heads running into each other', 1, '0000-00-00', '2011-08-05', 3, 1),
(4, '', 'paris', 'This piece was done for a friends wedding as their wedding present. It’s taken from a photo they took in paris. It has a very Monet''ish feel to it, or maybe Renoir. Its very warm and inviting. I was feeling good that day. It’s the second one in the series', 1, '0000-00-00', '2011-08-05', 3, 1),
(5, '', 'park', 'This picture was painted based on some water colour and pencil sketches I did at the local park. It is done in acrylic on hardboard, which gives it the rough look. The water reflections are probably the best feature of this piece but it is very inviting', 1, '0000-00-00', '2011-08-05', 3, NULL),
(6, '', 'snowyday', 'This piece is actually the road where I live (in winter). It was my first attempt at painting a snow scene and I think I need a bit more practice.', 1, '0000-00-00', '2011-08-05', 3, NULL),
(7, '', 'weirdfaces1', 'This was an experiment in quick painting. It took me about an hour to do this painting.  The colours are all contrasting and it also displays some simultaneous contrast. The lines are mainly flowing, cut into by a few jags', 1, '0000-00-00', '2011-08-05', 3, NULL),
(8, '', 'weirdfaces2', 'This is my friend, Andrew Bartlett and his wife, Esther. The piece is based on a sketch I did. The lines are very flowing and continuous and the colours are quite original for me. It has happiness with terror', 1, '0000-00-00', '2011-08-05', 3, NULL),
(9, '', 'winebottle', 'This is an abstract wine bottle with fruit. I don''t really like it much now but I thought I''d include it anyway because someone might.', 1, '0000-00-00', '2011-08-05', 3, NULL),
(11, '', 'dadcol', 'This is an abstract portrait of my father. It is an exercise in complementary colours, with many shades placed next to each other (I.e - yellow next to purple etc). It is jagged (ouch!) at the bottom and gradually becomes more smooth toward the top.', 1, '0000-00-00', '2011-08-05', 3, NULL),
(12, '', 'daddy', 'This is again an abstract portrait of my father, but done in very neutral colours. Starting from the bottom centre, a white path gradually snakes up the painting taking your eye along until it is interrupted by a sharp intersection at the top.', 1, '0000-00-00', '2011-08-05', 3, NULL),
(13, '', 'dadndi', 'Portrait of my father and my sister when she was a baby. The idea was to have very neutral colours apart from the head obviously. A bold black line runs up the painting until the eye is distracted by the red head.', 1, '0000-00-00', '2011-08-05', 3, NULL),
(14, '', 'napping_doll', 'This is from my impressionist mood. It is a picture of the table I have in my bedroom. The bitch doll refuses to look upon the unclean paint pots, which cower away from her in horror. I think the glass is quite good though.', 2, '0000-00-00', '2011-08-05', 3, NULL),
(17, '', 'father_asleep', 'My father asleep on the sofa. I took the opportunity since normally he wouldn''t let me sketch him.', 2, '0000-00-00', '2011-08-05', 1, NULL),
(21, '', 'baggy', 'My sisters cat that I sketched whilst it lounged on the chair in front of me. It’s a amiable cat. I was bored at the time', 2, '0000-00-00', '2011-08-05', 1, NULL),
(23, '', 'forest2', 'The local park. This is the original sketch that inspired about 2 or 3 paintings based on the same thing. This is when I became interested in shafts of light and at that point I had not quite mastered them.', 2, '0000-00-00', '2011-08-05', 2, NULL),
(24, '', 'busy_hands', 'My friend Paul playing on a Nintendo 64.', 2, '0000-00-00', '2011-08-05', 1, NULL),
(26, '', 'mergeface3', 'A preliminary sketch leading to the merging faces paintings', 2, '0000-00-00', '2011-08-05', 1, NULL),
(27, '', 'anonymous_people', 'A chaotic parisian scene, drawn on the Paris metro at the height of the rush hour. Lots of people staring at me. English pig!', 2, '0000-00-00', '2011-08-05', 1, NULL),
(28, '', 'paul_profile', 'My friend Paul gazing intensely at the television. I took the chance to sketch him while his attention was elsewhere. I haven''t seen Paul now for about 4 years and we didn''t part on the best of terms.', 2, '0000-00-00', '2011-08-05', 1, NULL),
(29, '', 'futurist_people', 'Some people, sketched in a weird, abstract way.', 2, '0000-00-00', '2011-08-05', 2, NULL),
(31, '', 'Venice', 'A sketch done from a holiday photo from Venice. Rather traditional', 2, '0000-00-00', '2011-08-05', 1, NULL),
(37, '', 'Mary_n_I', 'This is one of a series of new paintings that merge Marys face onto mine and vice versa. This piece is done in a semi-cubist style with only a few flowing lines. It is based on a sketch that I did', 1, '0000-00-00', '2011-08-05', 3, NULL),
(38, '', 'Mary_n_I2', 'This is the based on the same sketch of Mary and myself except done with more colours. The effect produced is more confusing and conflicting than the first painting done in this series. There are many faces that can be seen in the piece', 1, '0000-00-00', '2011-08-05', 3, NULL),
(39, '', 'Mary_n_Isketch', 'This is the sketch that the mary and simon merged faces series comes from. The lines are very flowing with lots happening. My profile is recognizable as is Marys beautiful eyes. Like black holes.', 2, '0000-00-00', '2011-08-05', 1, NULL),
(40, '', 'Forest3', 'This is the second painting in a series of the local park. Its supposed to be all shimmery.', 1, '0000-00-00', '2011-08-05', 3, NULL),
(43, '', 'Mezme', 'This painting is based on a merged face sketch of me and mary. There are two other paintings based on the sketch that is in the sketch section', 1, '0000-00-00', '2011-08-05', 3, NULL),
(45, '', 'Bottle_Sketch', 'The same sketch as the colour one except not in colour and in portrait', 2, '0000-00-00', '2011-08-05', 1, NULL),
(46, '', 'Bitch_Doll', '', 2, '0000-00-00', '2011-08-05', 1, NULL),
(47, '', 'tammy_sketch', 'A preliminary sketch for a digital painting that is yet to be done. My niece and surrounding birds, fire and trees', 2, '0000-00-00', '2011-08-05', 1, NULL),
(49, '', 'My_Eye', 'Not really based on anything. More an experiment with the tools of the program.', 1, '0000-00-00', '2011-08-05', 5, NULL),
(51, '', 'walesAcrylic', 'The second in a series of paintings of my honeymoon. A beautiful and inviting welsh landscape.', 1, '0000-00-00', '2011-08-05', 3, NULL),
(52, '', 'tammy_tree_bird', 'This is a picture based on a sketch of my niece tammy. I added the phoenix, tree and sky. Idea was to make the picture realistic in some ways but more illustrative in others. Could be a book cover maybe, quite fantasyish.', 3, '0000-00-00', '2011-08-05', 5, NULL),
(53, '', 'Confused_compressed', 'Picture based on a sketch I did whilst in an odd frame of mind. Tubes, eyes, torsos etc. Was going to include scalpals and old teeth but decided against it. Created in photoshop', 3, '0000-00-00', '2011-08-05', 5, NULL),
(54, '', 'beach', 'Picture from our holiday in lovely lovely tunisia. Colours are the main thing here and a fairly interesting composition with the misplaced shade things', 2, '0000-00-00', '2011-08-05', 2, NULL),
(56, '', 'local_church', 'Water colour sketch of a church near our house. It was raining on that day but I still enjoyed it', 2, '0000-00-00', '2011-08-05', 2, NULL),
(58, '', 'fragrant_flower', 'Pen and wash sketch of a flower the maids left in our room in tunisia. Intense colours', 2, '0000-00-00', '2011-08-05', 2, NULL),
(61, '', 'fortifications', 'Water colour sketch from Tunisia of the local Medina. Drawn in a sea front café. Peaceful and relaxing.', 2, '0000-00-00', '2011-08-05', 2, NULL),
(63, '', 'the_unaware', 'Development of the previous picture. Even though they have no connection with each other, I linked all the people together in an organic looking swirl and then added a face to the scene.', 2, '0000-00-00', '2011-08-05', 1, NULL),
(64, '', 'a_moment_of_quiet_reflection', 'Water colour sketch of a reflective container.', 2, '0000-00-00', '2011-08-05', 2, NULL),
(65, '', 'my_town1', 'Sketch of my town near the library. Interesting composition of trees, buildings and other objects.', 2, '0000-00-00', '2011-08-05', 2, NULL),
(66, '', 'peace_and_strife', 'The pool in our hotel in Tunisia. Interesting and subdued colours.', 2, '0000-00-00', '2011-08-05', 2, NULL),
(67, '', 'tech_vampire', 'Cyber vampire. Wanted the creature to look all organic with muscle, tree root things on one side and metal plating and pipes on the other.', 2, '0000-00-00', '2011-08-05', 1, NULL),
(68, '', 'wine_candle', 'Watercolour of a wine bottle and candle with a newspaper. Quite like the reflections on the bottle itself. Was quite difficult making it look like the table went behind it.', 2, '0000-00-00', '2011-08-05', 2, NULL),
(71, '', 'peak_district', 'Painting of the peak district. Interesting colours creating a very warm atmosphere.', 1, '0000-00-00', '2011-08-05', 3, NULL),
(72, '', 'a_n_a', 'A painting in acrylic for my friends alex and adele. Tried to reflect my opinions of them and their most striking personality traits. A contrast in colours but a compliment also.', 1, '0000-00-00', '2011-08-05', 3, NULL),
(73, '', 'mary_nelson2', 'My wife in her home town of nelson. The idea was to create a dream like unreal environment where it looks like Mary is asleep and everything is just in her dream. The background is very dull and bland and the vanishing point is just to the left', 1, '0000-00-00', '2011-08-05', 3, NULL),
(74, '', 'Abbey', 'A watercolour sketch of some abbey in Lincolnshire. Pencil sketch first with a limited palette of water colour over the top and pen finally to bring out the main elements.', 2, '0000-00-00', '2011-08-05', 2, NULL),
(75, '', 'Cathedral1', 'A pencil sketch of my home town, Lincoln. Actually did this whilst sat in the middle of China. Not much around the draw so I decided to sketch some of my old photos. I used to live near the scene shown with the large Cathedral in the background', 2, '0000-00-00', '2011-08-05', 1, NULL),
(76, '', 'Cathedral2', 'A pencil sketch of the Cathedral in Lincoln. Absolutely beautiful building about 800 years old in parts. Sketched it while in China.', 2, '0000-00-00', '2011-08-05', 1, NULL),
(77, '', 'Cathedral3', 'A pencil sketch based on the Cathedral in Lincoln. This one has a surreal twist with the lower part of my face in it', 2, '0000-00-00', '2011-08-05', 1, NULL),
(78, '', 'Chinese_Woman', 'A pencil sketch of some old Chinese woman smoking a pipe. Good chance to practise sketching people.', 2, '0000-00-00', '2011-08-05', 1, NULL),
(79, '', 'Crying_Girl', 'Pencil sketch of a crying girl. Like the expression on the face and the hands even though it''s not very aesthetic', 2, '0000-00-00', '2011-08-05', 1, NULL),
(80, '', 'Hanzhou1', 'A Chinese pagoda painted on scene in pen and watercolour wash. Slightly annoying that people kept coming round trying to look at it all the time. Think it turned out ok though', 1, '0000-00-00', '2011-08-05', 2, NULL),
(81, '', 'Hanzhou2', 'Painted in the Humble Administrators Garden, with people coming round ALL the time! Still, very relaxing just sitting there in Hanzhou painting in the stillness of China', 1, '0000-00-00', '2011-08-05', 2, NULL),
(82, '', 'Hanzhou3', 'This was painted on the shores of the West Lake in Hanzhou. So relaxing and beautiful but quite a grey and cold day. Just remember the quite lapping of the water on the shores. Managed to find a quiet place away from people but still got some coming.', 1, '0000-00-00', '2011-08-05', 2, NULL),
(83, '', 'Hanzhou4', 'Complete opposite of West Lake but in the same town these high rise flats everywhere, all with the laundry coming out of the window. Still, an interesting uniformity about the flats that I liked.', 2, '0000-00-00', '2011-08-05', 1, NULL),
(84, '', 'Hartsholme_Park1', 'Sketched while in China of a park in my home town of Lincoln. Sketched it with water soluble pencils and then used a brush to create a wash over it. Interesting and moody effect I think', 2, '0000-00-00', '2011-08-05', 1, NULL),
(85, '', 'Hong_Kong', 'Painted while sitting in a park in Hong Kong. Thought it was interesting scene with the beauty of the park and the uniformity of the sky-scrapers coming over the top of it. An interesting mix of effects and a strange place to see nature.', 2, '0000-00-00', '2011-08-05', 2, NULL),
(86, '', 'Hong_Kong_Jazz', 'Painted while sat in a jazz bar in Hong Kong. The music was going on and I was inspired to sketch them as they played. I like sketches like this although you never know how they''ll turn out.', 2, '0000-00-00', '2011-08-05', 1, NULL),
(87, '', 'Hua_Shan1', 'In Shaanxi province in China a magnificent mountain (which I climbed). Didn''t actually sketch while on scene because there was nowhere to stop. Took some photos and sketched them later.', 2, '0000-00-00', '2011-08-05', 1, NULL),
(88, '', 'Kunming_Stone_Forest', 'In Yunnan province, the southern most part of China, is a wonderful natural stone forest with massive stones. You can actually see where the water level previously was on these. Someone, a long time ago, has carved steps and walk ways through the rocks.', 2, '0000-00-00', '2011-08-05', 2, NULL),
(89, '', 'lake_District', 'Initially was going to be a sketch, but it took rather longer than anticipated. I like the effect that the vanishing point has. You can almost walk down the road and all the lines of perspective lead down it.', 1, '0000-00-00', '2011-08-05', 3, NULL),
(91, '', 'Lincoln_Holiday2', 'The same sketch as the pencil one, but done in watercolour. Was trying to get the effect of the countryside fading away into the background and I think it worked to some extent.', 1, '0000-00-00', '2011-08-05', 2, NULL),
(93, '', 'lincoln_Home2', 'A scene painted in China but of Lincolnshire. Gives you some idea that the bit we were in wasn''t much to look at. Plus I was feeling home sick for the English countryside', 1, '0000-00-00', '2011-08-05', 2, NULL),
(94, '', 'Matlock1', 'A sketch done while on a short break in Matlock of the old house we were staying in. It started raining just as I finished the picture. I quite like the sky effect that is achieved.', 2, '0000-00-00', '2011-08-05', 2, NULL),
(95, '', 'Old_Lincoln1', 'Done in China from a post card of Lincoln, which used to be my home town. A beautiful old building. Tried to make it quite detailed and I like the effect that''s produced', 2, '0000-00-00', '2011-08-05', 1, NULL),
(96, '', 'Puppet_Master', 'Actually drawn from a photo of some strange party I went to with the father and son doing this odd puppet act. Don''t know what to make of it, but the characters and positions are interesting', 2, '0000-00-00', '2011-08-05', 1, NULL),
(97, '', 'Bro', 'It''s meant to be me but I can never get my own likeness.', 2, '0000-00-00', '2011-08-05', 1, NULL),
(98, '', 'Suzhou1', 'Painted on location in Suzhou, China on a Sunday afternoon with people coming round disturbing me. I put my sunglasses on and my MP3 player to try and make myself seem unwelcoming but it didn''t deter them. Still, a beautiful day and so relaxing.', 2, '0000-00-00', '2011-08-05', 2, NULL),
(99, '', 'Suzhou2', 'Another scene from Suzhou, China. This was actually in the park that was just near our hotel. It was getting towards dusk time and sitting there with my ambient music playing, drinking in the atmosphere was so good.', 2, '0000-00-00', '2011-08-05', 2, NULL),
(100, '', 'Yangshuo1', 'This was our first place in China, called Yangshou. Gorgeous place, with those weird karst mountains in the background. We were sat in a café drinking extremely cheap beer, and I decided to draw the busy market. Lots of people kept bothering me.', 2, '0000-00-00', '2011-08-05', 2, NULL),
(101, '', 'Yangshuo2', 'Another beautiful day in Yangshuo and I walked down to the main street called West Street. The scene shown was what I saw. Can''t quite believe I was actually there now. Seems so far away from England. Still, got the proof', 1, '0000-00-00', '2011-08-05', 2, NULL),
(103, '', 'convict2', 'Different view of the patch based convict. Possibly put some hair on it at a later stage', 3, '0000-00-00', '2011-08-05', 4, NULL),
(104, '', 'damncool3', 'One of my first 3D Studio Max created heads. This is done using an editable mesh with various modifiers attached. This frame is part of an animation (which is available). The alien is just emerging from the algae infested slop. SLOP.', 3, '0000-00-00', '2011-08-05', 4, NULL),
(105, '', 'face1', 'This is a fantasy scene that should be on some science fiction book. This was a bit more of a successful NURBS head. The whole thing is just one model, which looks good, but isn''t much use for animating. Green fire looks weird as well.', 3, '0000-00-00', '2011-08-05', 4, NULL),
(106, '', 'face3', 'A cool metal head created in 3D Studio Max. The light casts quite nice shadows of the contours of it I think. It took about 3 weeks on and off to model it', 3, '0000-00-00', '2011-08-05', 4, NULL),
(107, '', 'harley4', '', 3, '0000-00-00', '2011-08-05', 4, NULL),
(108, '', 'harley5', '', 3, '0000-00-00', '2011-08-05', 4, NULL),
(109, '', 'harley6', '', 3, '0000-00-00', '2011-08-05', 4, NULL),
(110, '', 'harley7', '', 3, '0000-00-00', '2011-08-05', 4, NULL),
(111, '', 'head_render1', '', 3, '0000-00-00', '2011-08-05', 4, NULL),
(112, '', 'head_render2', '', 3, '0000-00-00', '2011-08-05', 4, NULL),
(113, '', 'Lincoln1', '', 3, '0000-00-00', '2011-08-05', 4, NULL),
(114, '', 'Lincoln2', '', 3, '0000-00-00', '2011-08-05', 4, NULL),
(115, '', 'livingrm14', '', 3, '0000-00-00', '2011-08-05', 4, NULL),
(117, '', 'rHarley1', 'A harley V-ROD', 3, '0000-00-00', '2011-08-05', 4, NULL),
(118, '', 'rHarley3', '', 3, '0000-00-00', '2011-08-05', 4, NULL),
(119, '', 'rspca1', '', 3, '0000-00-00', '2011-08-05', 4, NULL),
(120, '', 'rspca2', '', 3, '0000-00-00', '2011-08-05', 4, NULL),
(121, '', 'rspca3', '', 3, '0000-00-00', '2011-08-05', 4, NULL),
(122, '', 'rspca4', '', 3, '0000-00-00', '2011-08-05', 4, NULL),
(123, '', 'rspca6', '', 3, '0000-00-00', '2011-08-05', 4, NULL),
(124, '', 'rspca7', '', 3, '0000-00-00', '2011-08-05', 4, NULL),
(125, '', 'rspca8', '', 3, '0000-00-00', '2011-08-05', 4, NULL),
(126, '', 'rspca9', '', 3, '0000-00-00', '2011-08-05', 4, NULL),
(127, '', 'rspca5_detail1', '', 3, '0000-00-00', '2011-08-05', 4, NULL),
(128, '', 'rspca10_detail2', '', 3, '0000-00-00', '2011-08-05', 4, NULL),
(129, '', 'rspca11', '', 3, '0000-00-00', '2011-08-05', 4, NULL),
(130, '', 'rspca12', '', 3, '0000-00-00', '2011-08-05', 4, NULL),
(131, '', 'surreal1', '', 3, '0000-00-00', '2011-08-05', 4, NULL),
(136, 'new art', 'newArt.jpg', 'some notes about this', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `arttype`
--

CREATE TABLE IF NOT EXISTS `arttype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `arttype`
--

INSERT INTO `arttype` (`id`, `name`) VALUES
(1, 'Painting'),
(2, 'Sketch'),
(3, 'Digital');

-- --------------------------------------------------------

--
-- Table structure for table `mediatype`
--

CREATE TABLE IF NOT EXISTS `mediatype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mediatype`
--

INSERT INTO `mediatype` (`id`, `name`) VALUES
(1, 'Pencil Sketches'),
(2, 'Watercolours'),
(3, 'Acrylics'),
(4, '3D Models'),
(5, 'Digital Paintings');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE IF NOT EXISTS `work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `imageName` varchar(255) DEFAULT NULL,
  `dateAdded` date NOT NULL,
  `dateModified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `work`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `art`
--
ALTER TABLE `art`
  ADD CONSTRAINT `art_ibfk_1` FOREIGN KEY (`artType_id`) REFERENCES `arttype` (`id`),
  ADD CONSTRAINT `art_ibfk_2` FOREIGN KEY (`mediaType_id`) REFERENCES `mediatype` (`id`);
