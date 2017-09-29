SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `toys`;
CREATE TABLE `toys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `price` int(11) NOT NULL,
  `brand` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  `description` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `toys` (`id`, `name`, `price`, `brand`, `color`, `description`) VALUES
(1,	'Barbie Rainbow Lights Mermaid Doll',	15,	0,	0,	'A Rainbow Light Show in Barbie Doll’s Tail!\r\nTell all kinds of fantastic tales with this magical mermaid doll! The Barbie Rainbow Lights Mermaid doll has a tail that reveals a surprise when activated by water -- a sparkling rainbow lights show!'),
(2,	'LEGO Star Wars Advent Calendar ',	30,	0,	0,	'BUILDERS WILL LAUNCH INTO THE HOLIDAYS WITH THE LEGO STAR WARS ADVENT CALENDAR!\r\nGet your builder ready for festive fun with an out-of-this-world Advent Calendar! Kids can reveal a new mini-build for every day in December leading up to Christmas. Includes 24 separate builds in one set and a play mat to display the Jakku, Starkiller Base and deep space play scenes! Behind each door lie a galaxy of Star Wars minifigures, starships, vehicles and more! A great way to get your Star Wars fan into the holiday spirit! It’s an affordable gift for any holiday or special occasion leading up to Christmas!'),
(3,	'Sesame Street Tickle Me Elmo',	31,	0,	0,	'Sesame Street Tickle Me Elmo\r\nHA! HA! Hee! Hee! Elmo’s hysterical laugh is back! The hilarious fun of Tickle Me Elmo returns—redesigned for a whole new generation of fans! This huggable Tickle Me Elmo toy can have kids laughing out loud! Press his foot or squeeze his tummy to share the laughter with Tickle Me Elmo!'),
(4,	'N-Strike Elite Strongarm Blaster',	45,	0,	0,	'Nerf N-Strike Elite Strongarm\r\n\r\nDesigned for quick draws and fast firing, the N-Strike Elite Strongarm blaster puts elite battle performance in the palm of your hand. When speed and mobility are essential, this is the ultimate blaster. The rotating barrel holds 6 darts and the Slam Fire slide lets you blast as fast as you can fire.'),
(5,	'Play-Doh 10-Pack of Colors ',	8,	0,	0,	'Play-Doh 10-Pack of Colors\r\nExplore open-ended creativity and make amazing creations with this Play-Doh variety pack! With 4 different Play-Doh colors to squish and mold, kids can create all sorts of wonderful \'crafterpieces\'.'),
(6,	'Jenga Classic Game',	12,	0,	0,	'Classic Jenga\r\nWant a game experience that combines friends, skill, suspense, laughter, and maybe a little luck? You gotta get the Classic Jenga game! It’s the perfect game for everyone, with edge-of-your-seat, gravity-defying action. Do you dive right in and pull your block, or take your time and study the stack? Any way you choose, show your Jenga style!\r\n\r\n'),
(7,	'Exploding Kittens: A Card Game About Kittens and Explosions and Sometimes Goats',	29,	0,	0,	'Exploding Kittens is a card game for people who are into kittens and explosions and laser beams and sometimes goats. In this highly-strategic, kitty-powered version of Russian Roulette, players draw cards until someone draws an Exploding Kitten, at which point they explode, they are dead, and they are out of the game -- unless that player has a defuse card, which can defuse the Kitten using things like laser pointers, belly rubs, and catnip sandwiches. All of the other cards in the deck are used to move, mitigate, or avoid the Exploding Kittens. Exploding Kittens is the most-backed crowd funded project ever, the most-funded game in the history of Kickstarter, and has paved the way for peace and tranquility in the modern world.'),
(8,	'Furby Connect Friend',	59,	0,	0,	'Get ready to discover a world of surprises with this Furby Connect friend and the Furby Connect World app (see app details below). This Furby Connect friend has a light-up antenna that glows when there\'s something new to discover in the app -- including music and videos! This Furby Connect friend has lots to say! Even when Furby speaks in Furbish, it\'s not hard to figure out what Furby means. This Furby Connect friend has colorful eyes that display more than 150 animations to help express what Furby wants. Interact with a Furby Connect friend by petting, tickling, or shaking Furby, turning Furby upside down, or even moving its antenna like a joystick -- then see how Furby reacts! When this Furby Connect friend syncs with the Furby Connect World app, there are more physical and digital ways to interact and more surprises to discover. Does Furby need some beauty sleep? This Furby Connect friend comes with a sleep mask. Just put the sleep mask on, and it\'s good night Furby! To wake Furby up, remove the sleep mask -- Furby will be bright-eyed and bushy-tailed for more fun! Get the Furby Connect World app to explore a world of surprises with a Furby Connect friend. Watch videos together, feed Furby with the app, and raise virtual Furblings in the app. The Furby Connect friend gets updates and new content by connecting to the app! Furby and all related properties are trademarks of Hasbro.'),
(9,	'Uno Card Game',	6,	0,	1,	'UNO is the classic and beloved card game that’s easy to pick up and impossible to put down! Players take turns matching a card in their hand with the current card shown on top of the deck either by color or number. Special action cards deliver game-changing moments as they each perform a function to help you defeat your opponents. These include Skips, Reverses, Draw Twos, color-changing Wild and Draw Four Wild cards. You’ll find 25 of each color (red, green, blue, and yellow), plus the eight Wild cards, inside the 108-card deck. If you can’t make a match, you must draw from the central pile! And when you’re down to one card, don’t forget to shout “UNO!” The first player to rid themselves of all the cards in their hand before their opponents wins. It’s Fast Fun for Everyone! Includes 108 cards and instructions. Colors and decorations may vary.'),
(10,	'Bob Ross Collectible Figure',	10,	0,	0,	'From the joy of painting, Bob Ross, as a stylized pop vinyl from Funko! figure stands 3 3/4 inches and comes in a window display box. Check out the other television figures from Funko! collect them all!');

-- 2017-09-29 08:27:00
