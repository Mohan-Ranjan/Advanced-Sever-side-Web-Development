CREATE TABLE `celebs` (
  `_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `imageurl` text NOT NULL,
  `age` int(11) NOT NULL,
  `genre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `celebs`
--

INSERT INTO `celebs` (`_id`, `name`, `imageurl`, `age`, `genre`) VALUES
(2, 'Dwayne Johnson', 'https://upload.wikimedia.org/wikipedia/commons/1/1f/Dwayne_Johnson_2014_%28cropped%29.jpg', 49, 'film'),
(3, 'Rihanna', 'https://static.wikia.nocookie.net/disney/images/7/7f/Rihanna.jpg', 33, 'music'),
(20, 'Donald Duck', 'https://static.wikia.nocookie.net/mickey-and-friends/images/b/b9/618px-Donald_Duck.svg.png', 100, 'cartoons'),
(21, 'Zoe Saldana', 'https://upload.wikimedia.org/wikipedia/commons/d/d5/Zoe_Saldaña_2009.jpg', 40, 'film'),
(23, 'Daisie Ridley', 'https://i.dailymail.co.uk/i/pix/2017/11/30/20/46C335A300000578-5134095-image-a-10_1512074298468.jpg', 26, 'film'),
(24, 'Ed Sheeran', 'https://upload.wikimedia.org/wikipedia/commons/c/c1/Ed_Sheeran-6886_%28cropped%29.jpg', 30, 'music'),
(25, 'Samuel L. Jackson', 'https://upload.wikimedia.org/wikipedia/commons/a/a9/Samuel_L._Jackson_2019_by_Glenn_Francis.jpg', 72, 'film'),
(27, 'Kirito', 'https://ae01.alicdn.com/kf/HTB1sfvJNVXXXXXLapXXq6xXFXXXw/Sword-Art-Online-Anime-Kirito-150-200CM-Single-layer-Blanket-36773.jpg', 16, 'anime'),
(28, 'Mickey Mouse', 'https://static.wikia.nocookie.net/characters/images/8/80/Mickey_Mouse.jpg', 92, 'cartoons'),
(29, 'Bruce Willis', 'https://d26oc3sg82pgk3.cloudfront.net/files/media/edit/image/42759/square_thumb@2x.jpg', 65, ''),
(31, 'Homer Simpson', 'https://icons.iconarchive.com/icons/jonathan-rey/simpsons/256/Homer-Simpson-04-Happy-icon.png', 55, '');

ALTER TABLE `celebs`
  ADD PRIMARY KEY (`_id`);

ALTER TABLE `celebs`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;