-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2018 at 10:35 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rannaghara`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlock`
--

CREATE TABLE `adminlock` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `id` int(11) NOT NULL,
  `active` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlock`
--

INSERT INTO `adminlock` (`username`, `password`, `id`, `active`) VALUES
('admin', 'admin', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `breakfastbeefi`
--

CREATE TABLE `breakfastbeefi` (
  `post_idbr` int(123) NOT NULL,
  `titlebr` varchar(55) NOT NULL,
  `disbr` varchar(255) NOT NULL,
  `tkbr` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breakfastbeefi`
--

INSERT INTO `breakfastbeefi` (`post_idbr`, `titlebr`, `disbr`, `tkbr`) VALUES
(4001, 'Beef Bhuna', 'Beef + Poratta + coconut milk + Mango juice', 230),
(4002, 'Beef Currey', 'Tandori + french fry + pickled cucumber + pineapple juice', 250),
(4003, 'Beef masala curry ', 'Big onion + Garlic cloves + Brown sugar + coconut milk + Coca-Cola', 260),
(4004, 'Beef Stew', 'Small Onion+ Medium potatoes + cloves of Garlic + Orange juice', 230),
(4005, 'Beef Nihari', 'Beef leg or shank + Green chilies+ Turmeric powder + coconut milk + Pran Juice', 180),
(4006, 'Beef Kala Vuna', 'Onion golden fried + Peanut paste + Porata + 7 UP', 230);

-- --------------------------------------------------------

--
-- Table structure for table `breakfasteggi`
--

CREATE TABLE `breakfasteggi` (
  `post_idbe` int(10) NOT NULL,
  `titlebe` varchar(100) NOT NULL,
  `disbe` varchar(666) NOT NULL,
  `tkbe` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breakfasteggi`
--

INSERT INTO `breakfasteggi` (`post_idbe`, `titlebe`, `disbe`, `tkbe`) VALUES
(5001, 'Hard-Boiled Egg', 'Eggs + potatoes + porata + coconut milk +Mango juice', 120),
(5002, 'Veggie EggPops', 'french fry + Bread + Toast + coconut milk + Banana juice', 130),
(5003, 'Omelet-in-a-Bun', 'Porata + potatoes curry + milkshake + Drink water', 185),
(5004, 'Egg Pita Pizzas', ' Egg + potatoes curry + pickled cucumber + coconut milk + pran frutika', 140),
(5005, 'Scrambled Eggs', ' Tandori + potatoes + vegetable curry + coconut milk + juice', 160),
(5006, 'Egg Brunch ', 'Porata + potatoes curry + milkshake + mango juice', 120);

-- --------------------------------------------------------

--
-- Table structure for table `breakfastnr`
--

CREATE TABLE `breakfastnr` (
  `post_idnr` int(10) NOT NULL,
  `titlenr` varchar(55) NOT NULL,
  `imgnr` varchar(255) NOT NULL,
  `tknr` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breakfastnr`
--

INSERT INTO `breakfastnr` (`post_idnr`, `titlenr`, `imgnr`, `tknr`) VALUES
(3001, 'Pancake', 'upload/pancake.jpg', 120),
(3002, 'Egg ', 'upload/egg-pose.jpg', 45),
(3003, 'French ', 'upload/breakfastsandwich.jpg', 130),
(3004, 'Sandwich ', 'upload/ftoast.jpg', 140),
(3005, 'Egg Hots', 'upload/eggdosa.jpg', 120),
(3006, 'Poratta', 'upload/hqdefault.jpg', 35),
(3007, 'Tandoori', 'upload/Tandoori.jpg', 35),
(3008, 'Fruits', 'upload/cut-fruits.jpg', 200),
(3009, 'Milk', 'upload/milk.jpg', 130),
(3010, 'Bread/Cake', 'upload/whitesandwichbread.jpg', 100);

-- --------------------------------------------------------

--
-- Table structure for table `breakfastoti`
--

CREATE TABLE `breakfastoti` (
  `post_idot` int(10) NOT NULL,
  `titleot` varchar(55) NOT NULL,
  `disot` varchar(666) NOT NULL,
  `tkot` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breakfastoti`
--

INSERT INTO `breakfastoti` (`post_idot`, `titleot`, `disot`, `tkot`) VALUES
(7001, 'Protein-packed', 'Veggies with one egg, three egg whites, and tofu + Mango juice', 130),
(7002, 'Bake carrots', 'Chard with millet, quinoa, or brown rice', 200),
(7003, 'Mini frittatas', 'Rice + spinach and sun-dried tomatoes + coconut milk + water', 140),
(7004, 'Mix mushrooms', 'kale, tomato, and chia seeds into a buckwheat breakfast bake.', 150);

-- --------------------------------------------------------

--
-- Table structure for table `breakfastvgi`
--

CREATE TABLE `breakfastvgi` (
  `post_idbv` int(66) NOT NULL,
  `titlebv` varchar(100) NOT NULL,
  `disbv` varchar(666) NOT NULL,
  `tkbv` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breakfastvgi`
--

INSERT INTO `breakfastvgi` (`post_idbv`, `titlebv`, `disbv`, `tkbv`) VALUES
(6001, 'Spinach', 'Egg + Cabbage + bread + water', 120),
(6002, 'Tuck a bunch', 'Asparagus + potatoes + leeks + roasted tomatoes + 7 UP', 200),
(6003, 'Pack lemony', 'Egg + potatoes + Broccoli + Tatsoi + juice', 230),
(6004, 'Blend finely chopped', 'Broccoli+ potatoes + cauliflower +quiche + gluten-free crust', 235),
(6005, 'Dress hearty greens', 'Vinaigrette and top with a poached egg and Parmesan', 125);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `product_price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `title`, `product_price`, `quantity`, `amount`) VALUES
(223, 1001, 'Pizza', 120, 3, 360),
(234, 1021, 'Box', 560, 3, 1680),
(236, 1002, 'Putir Bag', 230, 2, 460),
(237, 1034, 'Jewelry Stand', 250, 1, 250);

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `counter` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`counter`) VALUES
(0);

-- --------------------------------------------------------

--
-- Table structure for table `dinnerdb`
--

CREATE TABLE `dinnerdb` (
  `post_iddb` int(10) NOT NULL,
  `titledb` varchar(100) NOT NULL,
  `disdb` varchar(666) NOT NULL,
  `tkdb` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dinnerdb`
--

INSERT INTO `dinnerdb` (`post_iddb`, `titledb`, `disdb`, `tkdb`) VALUES
(2001, 'Beef Shanks', 'Rice + Pasta + Tomato + China shak + water', 170),
(2002, 'Beef Burger', 'Rice + potatoes + pickled cucumber + Sachi', 200),
(2003, 'Slow Cooker Beef Stew', 'Let the slow cooker do all the work for this tasty meal', 330),
(2004, 'Red Beef Chili', 'Rice + potatoes + Tandori + coconut milk + coca-cola', 250);

-- --------------------------------------------------------

--
-- Table structure for table `dinnerde`
--

CREATE TABLE `dinnerde` (
  `post_idde` int(10) NOT NULL,
  `titlede` varchar(100) NOT NULL,
  `disde` varchar(666) NOT NULL,
  `tkde` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dinnerde`
--

INSERT INTO `dinnerde` (`post_idde`, `titlede`, `disde`, `tkde`) VALUES
(4002, 'Brown Rice Bowl', 'Fried Egg + potatoes + Spicy harissa + coconut milk + Caramelized Onions', 220),
(4003, 'Kimchi Fried Rice', 'Kimchi adds tang and spice to this unique take on quick-cooking fried rice', 120),
(4004, 'Green Shakshuka', 'Shakshuka is traditionally made with a tomato base, but this green version has leek', 240);

-- --------------------------------------------------------

--
-- Table structure for table `dinnerdf`
--

CREATE TABLE `dinnerdf` (
  `post_iddf` int(10) NOT NULL,
  `titledf` varchar(100) NOT NULL,
  `imgdf` varchar(500) NOT NULL,
  `tkdf` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dinnerdf`
--

INSERT INTO `dinnerdf` (`post_iddf`, `titledf`, `imgdf`, `tkdf`) VALUES
(1001, 'Beef Khichuri', 'product_image/a6fd7812b4ada5ea7d809e76fec7c144Khichuri.jpg', 220),
(1002, 'Mexican Fried ', 'product_image/e10da4117e92bc52bffd7f0aa3828fcaBhuna Chicken.jpg', 230),
(1003, 'Custard Cake', 'product_image/39f7e797b98b4802e961d0fd69f997aaCustard Cake.jpg', 120),
(1004, 'Fried fish ', 'product_image/db0d64236cf9aaeb43d963522c04fbf2fried-fish2.jpg', 250),
(1005, 'Alu Vorta', 'product_image/afd0d3a0834c972d99015050eecc7d1bmaxresdefault.jpg', 130),
(1006, 'Vorta platter', 'product_image/29d852f80f65c63d7e810ee8dd5c977dVorta platter.jpg', 120);

-- --------------------------------------------------------

--
-- Table structure for table `dinnerdfi`
--

CREATE TABLE `dinnerdfi` (
  `post_iddfi` int(10) NOT NULL,
  `titledfi` varchar(100) NOT NULL,
  `disdfi` varchar(666) NOT NULL,
  `tkdfi` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dinnerdfi`
--

INSERT INTO `dinnerdfi` (`post_iddfi`, `titledfi`, `disdfi`, `tkdfi`) VALUES
(3001, 'Tuna Noodle Casserole', 'Rice + potatoes + pickled cucumber + Patal + Banggi', 230),
(3002, 'Scallop Piccata', 'Serve these quick-cooking scallops over a bed of whole-grain pasta or brown rice for a filling meal', 240),
(3003, 'Fish Bhuna', 'Rice + potatoes + Lalshak + coconut milk + Katanotey', 150),
(3004, 'Fish Fillets', 'Rice + potatoes + pickled cucumber + coconut milk + 7up', 220);

-- --------------------------------------------------------

--
-- Table structure for table `dinnerdv`
--

CREATE TABLE `dinnerdv` (
  `post_iddv` int(10) NOT NULL,
  `titledv` varchar(100) NOT NULL,
  `disdv` varchar(666) NOT NULL,
  `tkdv` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dinnerdv`
--

INSERT INTO `dinnerdv` (`post_iddv`, `titledv`, `disdv`, `tkdv`) VALUES
(5001, 'Korma Kebab', 'Succulent tikkis made of chicken minced, assorted masalas and spinach. Served with a sour-spicy yogurt chutney and a sweet date chutney', 140),
(5002, 'Chatpattey Coconut Kebab', 'Rice + potatoes + pickled cucumber + coconut milk + Tala kuchi', 300),
(5003, 'Scrambled Egg Tacos', 'Turn even a small amount of leftovers into tacos with the addition of scrambled eggs', 120);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `dis` varchar(244) NOT NULL,
  `post_id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `img` varchar(244) NOT NULL,
  `tk` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`dis`, `post_id`, `title`, `img`, `tk`) VALUES
('Pizza is a savoury dish of Italian origin, consisting of a usually round, flattened base of leavened wheat-based dough topped with tomatoes.', 1001, 'Pizza', 'product_image/b9d18c007de2a904e27f27b0e3d2753aslider1.jpg', 120),
('Chicken is the most common type of poultry in the world. Owing to the relative ease and low cost of raising them in comparison to animals such as cattle or hogs.', 1002, 'Chicken-wing', 'product_image/0a6401ee615ad71567749e63d06dc415wing.jpg', 150),
('Haleem is a stew popular in the Middle East, Central Asia, and the Indian subcontinent. Although the dish varies from region to region, it always includes wheat or barley.', 1003, 'Hyderabadi Chicken Haleem', 'product_image/ff14e24b2996292c5692db6a4d2276a9halim.jpg', 170),
('CA sandwich is a food typically consisting of vegetables, sliced cheese or meat, placed on or between slices of bread', 1006, 'Cheese sandwich', 'product_image/84b04dfe547cff173b641a072bbcaaecdemo-sandwich.jpg', 210),
('A hamburger, beefburger or burger is a sandwich consisting of one or more cooked patties of ground meat, usually beef, placed inside a sliced bread roll or bun.', 1007, 'Burger King', 'product_image/204162ab6a3fad1d46cc16bd87a254f2burger.jpg', 140),
('Mutton Biryani is yet another biryani recipe, which is a perfect fusion of taste and aroma. ... This easy non-vegetarian biryani recipe is prepared with rice and marinated mutton with spices', 1008, 'Mutton Biryani', 'product_image/f0aa048ec8fd1e8da66a47e2e87a4499mutton-biryani-new.jpg', 240);

-- --------------------------------------------------------

--
-- Table structure for table `homen`
--

CREATE TABLE `homen` (
  `post_idn` int(66) NOT NULL,
  `titlen` varchar(666) NOT NULL,
  `imgn` varchar(666) NOT NULL,
  `tkn` int(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homen`
--

INSERT INTO `homen` (`post_idn`, `titlen`, `imgn`, `tkn`) VALUES
(2001, 'Hand Bag', 'product_image/3fa98783a51b9a0b955b2dc80cae1a07handbag.jpg', 340),
(2002, 'Ladies Sandals', 'product_image/ff145962e91ca2cd29a772f498dcc1d4Ladies Sandals.jpg', 180),
(2003, 'Lord Ganesha', 'product_image/7b12ffef7bbfd498b426853256f09cd5Lord Ganesha.jpg', 450),
(2004, 'Baby doll', 'product_image/3b3d2b58de89d6ccaa6f6103439ab2eababydoll.jpg', 230),
(2005, 'Necklace', 'product_image/153694d539809980b9ca0bd3d9999a3dnecklace.jpg', 250),
(2006, 'Nokshi katha', 'product_image/6186ae25136448181479ac8fc2d393c3nokshi katha.jpg', 1200),
(2007, 'Doormats', 'product_image/8271e20096554246e12198e8e7e65583doormats.jpg', 320),
(2008, 'Bambocraft', 'product_image/98149a28dda22ff825dc3b7f10cc17a3bambocraft.jpg', 450),
(2009, 'Aquarium', 'product_image/2522bf328b7653948d6de048c11b525fAquarium.jpg', 3500),
(2010, 'Home jungle', 'product_image/cdb5a988880b003f7229137f01d7fe37home jungle.jpg', 550),
(2011, 'Amimma', 'product_image/428c82b384af7489aa4d015c6e267a38Amimma.jpg', 550);

-- --------------------------------------------------------

--
-- Table structure for table `lunchfi`
--

CREATE TABLE `lunchfi` (
  `post_idlfi` int(10) NOT NULL,
  `titlelfi` varchar(100) NOT NULL,
  `dislfi` varchar(666) NOT NULL,
  `tklfi` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lunchfi`
--

INSERT INTO `lunchfi` (`post_idlfi`, `titlelfi`, `dislfi`, `tklfi`) VALUES
(3001, 'Fish Bhuna', 'Rice + potatoes + tomato curry + spicy and tangy + coca-cola', 170),
(3002, 'Choto macher chorchori', 'Rice + potatoes + artichoke + coconut milk + water', 120),
(3003, 'Fish Fry', 'Rice + potatoes +aubergine + coconut milk + onion', 155),
(3004, 'Fish Biryani', 'asmoti rice+ potatoes + amrud + asparagus', 170),
(3005, 'Fish mutton curry', 'Rice + potatoes + broccoflower+ coconut milk + banana juice', 220);

-- --------------------------------------------------------

--
-- Table structure for table `lunchlb`
--

CREATE TABLE `lunchlb` (
  `post_idlb` int(10) NOT NULL,
  `titlelb` varchar(100) NOT NULL,
  `dislb` varchar(666) NOT NULL,
  `tklb` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lunchlb`
--

INSERT INTO `lunchlb` (`post_idlb`, `titlelb`, `dislb`, `tklb`) VALUES
(2001, 'Beef Meatloaf ', 'Rice + potatoes + pickled cucumber + coconut milk + beverage', 210),
(2002, 'Beef Bhuna ', 'Rice + potatoes + Salad + Onion Paste + Cinnamon + coca-cola', 230),
(2003, 'Beef kalo Bhuna', 'Rice + Plain yogurt + pickled cucumber + Dark Soy sauce + Peanut paste', 240),
(2004, 'Beef Vuna with Shathkora', 'onion + garlic,ginge + Shathkora + Spicy mosola + Rice', 250),
(2005, 'Beef Biriyani', 'Ginger paste + potatoes + Tok doi + Bashmoti + water', 160),
(2006, 'Fragrant Beef Curry', 'Rice + potatoes + onion + coconut milk + salad and 7UP', 220);

-- --------------------------------------------------------

--
-- Table structure for table `lunchle`
--

CREATE TABLE `lunchle` (
  `post_idle` int(10) NOT NULL,
  `titlele` varchar(100) NOT NULL,
  `disle` varchar(666) NOT NULL,
  `tkle` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lunchle`
--

INSERT INTO `lunchle` (`post_idle`, `titlele`, `disle`, `tkle`) VALUES
(4001, 'Tahini Roasted Chicken', 'Rice + potatoes + tahini + honey + Lemon wedges', 230),
(4002, 'Chicken Marsala', 'Rice + fresh sage leaves + tablespoon olive oil + coconut milk +Marsala wine', 120),
(4003, 'Chicken Stir-Fry', 'Rice + potatoes + bag shredded cabbage + coconut milk +sesame salad dressing', 155),
(4004, 'Chicken Curry', 'Rice + potatoes +Tomato + shako + coca-cola', 150);

-- --------------------------------------------------------

--
-- Table structure for table `lunchlf`
--

CREATE TABLE `lunchlf` (
  `post_idlf` int(10) NOT NULL,
  `titlelf` varchar(100) NOT NULL,
  `imglf` varchar(500) NOT NULL,
  `tklf` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lunchlf`
--

INSERT INTO `lunchlf` (`post_idlf`, `titlelf`, `imglf`, `tklf`) VALUES
(1001, 'kacchi Biryani', 'product_image/dac87cc45d4803aaa8e6b3e47a1ef090kacchi Biryani.jpg', 230),
(1002, 'Beef-Kacchi', 'product_image/51ebbd2bddac2003e4731bc04dfb0e3eBeef-Kacchi-Biryani.jpg', 240),
(1003, 'Mutton Biryani ', 'product_image/21d22f45286c49313aad8c37f2ff73d6Mutton Biryani.jpg', 280),
(1004, 'Beef Bhuna', 'product_image/530944af4270572f45992efe50ef02e8beefvuna.jpg', 150),
(1005, 'Mutton Kala Bhuna', 'product_image/5042c5296860b832468b0113fea624c6kl.jpg', 190),
(1006, 'Hilsa Bhuna', 'product_image/564f8f6b8b58cc740db4f010cb6a24b9elish.jpeg', 220),
(1007, 'Mourala Macher ', 'product_image/7ae5ac72c8a55abaee0b90eb3bff9173maxresdefault.jpg', 245),
(1008, 'Alu Vort', 'product_image/fe2b38e80f05c4b6521f135a6b9dc167aluvorta.jpg', 45),
(1009, 'Chicken Curry', 'product_image/ba57d5fc5adc73b6d61d10193d57b46fchk.jpg', 160),
(1010, 'Fish currey', 'product_image/71b5c588aad4d021fc2c969cd214fdcdmk.jpg', 130);

-- --------------------------------------------------------

--
-- Table structure for table `lunchlv`
--

CREATE TABLE `lunchlv` (
  `post_idlv` int(10) NOT NULL,
  `titlelv` varchar(100) NOT NULL,
  `dislv` varchar(666) NOT NULL,
  `tklv` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lunchlv`
--

INSERT INTO `lunchlv` (`post_idlv`, `titlelv`, `dislv`, `tklv`) VALUES
(5001, 'Chickpea curry', 'Rice + potatoes + Gajor + coconut + Danta', 130),
(5002, 'Sweet potato', 'Rice +Sheem + pickled cucumber + Sachi + Kolmi', 120),
(5003, 'Roasted aloo gobi', 'Rice + Khira + Dhundul + coconut milk + Lau', 120),
(5004, 'Thai curry', 'Rice + Bandhakopi + cucumber + Phulkopi +Cabbage', 170),
(5005, 'Tomato curry ', 'Rice + Kohlrabi + Chinese cabbage + milk + Petsai', 230);

-- --------------------------------------------------------

--
-- Table structure for table `pakagepb`
--

CREATE TABLE `pakagepb` (
  `post_idpbe` int(10) NOT NULL,
  `titlepb` varchar(100) NOT NULL,
  `dispb` varchar(666) NOT NULL,
  `tkpb` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pakagepb`
--

INSERT INTO `pakagepb` (`post_idpbe`, `titlepb`, `dispb`, `tkpb`) VALUES
(1001, 'Buttermilk Biscuits', 'Comfort food has never tasted so good. Bake up a batch of from-scratch biscuits, then fill them with thinly sliced honey or country ham for a hearty addition to your party', 240),
(1002, 'Pull-Apart Dogs in a Blanket Ring', 'Egg well beaten +poppy seeds+large beef hot dogs + soft drink', 230),
(1003, 'Sample Dinner Buffet', 'Cucumbers, Cherry Tomatoes, Carrotsm +Seafood +Chicken Roasted +Vegetables', 230),
(1004, 'Fried rice', 'cooked rice+diced carrots+ green bell pepper+ onion diced+ crushed ginge+chicken', 230),
(1005, 'Biryani', 'Biryani, also known as biriyani is a mixed rice dish with its origins among the Muslims of the Bangali subcontinent.', 180),
(1006, 'Vegetable Fried Rice', 'This dish combines the nutty flavor of brown rice with the fresh taste of bell peppers, baby peas, and other vegetables', 240),
(1007, 'Chicken Veggie Skewers', 'garlic powder +Italian seasoning Kosher salt + chopped into bite-sized pieces +boneless, skinless chicken breasts', 220);

-- --------------------------------------------------------

--
-- Table structure for table `pakagepc`
--

CREATE TABLE `pakagepc` (
  `post_idpc` int(10) NOT NULL,
  `titlepc` varchar(100) NOT NULL,
  `dispc` varchar(666) NOT NULL,
  `tkpc` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pakagepc`
--

INSERT INTO `pakagepc` (`post_idpc`, `titlepc`, `dispc`, `tkpc`) VALUES
(3001, 'Pizza Heart', 'Cheese + Chicken + beef + Shirmp + Sausaga +Oregano Tomato +Mashroom', 120),
(3002, 'Pasta Basta', 'Pasta Sauce+ Chicken + Chesse Beshamihi +Mashroom + Garlic + green chilli', 180),
(3003, 'Shawarma', 'Roast beef + Tomato Egg + Chesse + Onion and MAshroom', 250),
(3004, 'Kacchi biryani', 'Beef/ Chicken +Onion +chilli +Capsicum with mashroom', 180),
(3005, 'Burger', 'Beef Burger / chicken burger / Mexican chilli burger', 180),
(3006, 'Soup', 'Chicken + corn + vegetable+ onion + olive+Tomato', 120);

-- --------------------------------------------------------

--
-- Table structure for table `pakageps`
--

CREATE TABLE `pakageps` (
  `post_idps` int(10) NOT NULL,
  `titleps` varchar(100) NOT NULL,
  `disps` varchar(666) NOT NULL,
  `tkps` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pakageps`
--

INSERT INTO `pakageps` (`post_idps`, `titleps`, `disps`, `tkps`) VALUES
(4001, 'Masala', 'Chicken masala/Beef masala /prawn masala', 140),
(4002, 'Beef Bhuna', 'Beef + Poratta + coconut milk + Mango juice', 230),
(4003, 'Korma Kebab', 'Rice + potatoes + Salad + Onion Paste + Cinnamon + coca-cola', 220),
(4004, 'Beef masala curry', 'Rice + Plain yogurt + pickled cucumber + Dark Soy sauce + Peanut paste', 230),
(4005, 'Smoked Salmon Egg Boats', 'Eggs + potatoes + porata + coconut milk +Mango juice', 420);

-- --------------------------------------------------------

--
-- Table structure for table `pakagepset`
--

CREATE TABLE `pakagepset` (
  `post_idpset` int(10) NOT NULL,
  `titlepset` varchar(100) NOT NULL,
  `dispset` varchar(666) NOT NULL,
  `tkpset` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pakagepset`
--

INSERT INTO `pakagepset` (`post_idpset`, `titlepset`, `dispset`, `tkpset`) VALUES
(5001, 'Veggie EggPops', 'Rice + potatoes + pickled cucumber + coconut milk + beverage', 230),
(5002, 'Beef Vuna with Shathkora', 'onion + garlic,ginge + Shathkora + Spicy mosola + Rice', 240),
(5003, 'Vegetarian Dinner Posole', 'Porata + potatoes curry + milkshake + Drink water', 245),
(5004, 'Beef Kala Vuna', 'Onion golden fried + Peanut paste + Porata + 7 UP', 340),
(5005, 'Beef Currey', 'Rice + potatoes + pickled cucumber + coconut milk + beverage', 270);

-- --------------------------------------------------------

--
-- Table structure for table `pakagepw`
--

CREATE TABLE `pakagepw` (
  `post_idpw` int(10) NOT NULL,
  `titlepw` varchar(100) NOT NULL,
  `dispw` varchar(666) NOT NULL,
  `tkpw` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pakagepw`
--

INSERT INTO `pakagepw` (`post_idpw`, `titlepw`, `dispw`, `tkpw`) VALUES
(2001, 'Anniversary Party Buffet', 'Even with the help of a caterer, you may wish to serve the anniversary party food choices in a buffet style', 200),
(2002, 'BBQ', 'Beef + vegetable+onoin+Tarmuj +Misti marich', 140),
(2003, 'Fried Rice', 'Basmoti rice + vegetble + Franch Fry', 220),
(2004, 'Chowmeine', 'Chowmeine + chicken fry+ vegetable curry+ water', 240),
(2005, 'Biryani', 'Beef + Pizza Roma + vegetable + spiring roll', 180);

-- --------------------------------------------------------

--
-- Table structure for table `shophome`
--

CREATE TABLE `shophome` (
  `id` int(15) NOT NULL,
  `titleshop` varchar(200) NOT NULL,
  `disshop` varchar(255) NOT NULL,
  `imgshop` varchar(500) NOT NULL,
  `tkshop` int(50) NOT NULL,
  `post_idshop` int(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shophome`
--

INSERT INTO `shophome` (`id`, `titleshop`, `disshop`, `imgshop`, `tkshop`, `post_idshop`) VALUES
(122, 'Hat Pakha', 'Bisesh Akorshon', 'product_image/ae5bf1aaa6c98ec2d01960e18201d1d1sh1.JPG', 120, 1001),
(123, 'Putir Bag', 'Cotton and Puti', 'product_image/5720bfbdcbc749c79dde4f10425b70baIMG_4921.jpg', 230, 1002),
(124, 'Big Putir Bag', '100% orginal colorfull puti', 'product_image/92602c5dd4ecba834cb5eead5944b9c0sh3.JPG', 230, 1003),
(125, 'Matir Craft', 'widely recognised and popular forms of art', 'product_image/03af07198336f31b31e132c42e683316sh4.jpg', 250, 1004),
(126, 'Matir Kolsi', 'This set of pot is made of terracotta', 'product_image/82f4e1878e06c2d8f6d01720d890ce4dsh5.jpg', 230, 1005),
(128, 'Folk Dolls', 'Beautiful clay dolls of miniature decoration room', 'product_image/ad28705841be6da132317ad64f46333dsh7.jpg', 200, 1007),
(129, 'Basket', 'Casserole Dish Kaisa Basket', 'product_image/84198e007a4043021979674d0de76fb2sh8.jpg', 230, 1008),
(130, 'Durga', 'Shola Pith Face of Durga Wall Hanging', 'product_image/e77dcf8fbafac3e94e8ed8c3bb19d7d8sh9.jpg', 450, 1009),
(131, 'Handle Basket ', 'Calm Mood Laundry Basket', 'product_image/8edb637164325f27151f00d22ffe1a52sh10.jpg', 550, 1010),
(132, 'Lamps', 'Handmade Clay Diya Or Lamps for puja', 'product_image/dfd658f18734fe620a6897a9adf8522bsh11.jpg', 100, 1011),
(133, 'Necklace', 'BachateRaho Red Handicraft Necklace', 'product_image/d023137a83f0c95772ee65073d6dda69sh12.jpg', 100, 1012),
(134, 'Caps', 'Caps Handicraft Turquoise Kids', 'product_image/fbdfa1477c2e81b2ad4a618fa8286c22sh14.jpg', 120, 1014),
(135, 'Car Hanging', 'Chinese Decor Red Color Knots Fashion Car Hanging', 'product_image/61d0363e26901b36e49b2606e912a2f3sh15.jpg', 160, 1015),
(136, 'Rajasthani', 'Buy Designer Rajasthani decoration', 'product_image/19387223c6f8b6031d316a9039158507sh16.jpg', 1200, 1016),
(137, 'Wallet', 'High quality awesome wallets', 'product_image/0c105af43d6c68041361409f565a88dfsh18.jpg', 350, 1017),
(138, 'Baskets', 'handicraft hemp woven toys clothes storage baskets', 'product_image/d74498db311214782ca3249f62946567sh19.jpg', 450, 1018),
(139, 'Hanger', 'Handmade Blue Pottery Key/Clothes Hanger', 'product_image/c197f7dfcb6f6f550a0cc5a24dd82720sh20.jpg', 200, 1019),
(140, 'Lamp', 'traditional items for home decoration', 'product_image/90643e981f5f65e6e0ed0d09ebee32b5sh21.jpg', 250, 1020),
(141, 'Box', 'architecture, painting, weaving, pottery', 'product_image/13e35cbc2c83f95c518b1ef9d17008a2sh22.jpg', 560, 1021),
(142, 'Wooden', 'Handicraft Wooden Item', 'product_image/120d913beba2e62472b3cf130628bd40sh23.jpg', 230, 1022),
(143, 'Table Clock', 'alarm clock with craft', 'product_image/3a6fd3fcfa6c73c346604e0fe7729dc3sh24.jpeg', 140, 1023),
(144, 'Matir Necklace', 'erracotta Necklace Set at best price', 'product_image/22ee2e9ee58115160ff8ae14f8531fb8sh25.jpg', 130, 1024),
(145, 'Jute Jewellery', 'specifications from Kumpras Exports', 'product_image/7e31236161d79109e20124db5972793dsh26.jpg', 140, 1025),
(146, 'Jewellery Box', 'Buy Handicraft Jewellery Box', 'product_image/f971216a78b7a2df6b4b247eeaf674absh27.jpg', 350, 1026),
(147, 'Bangle stand', 'It is needless to say that  looks absolutely beautifu', 'product_image/d591ce818abc35b521024eb69c00c0bcsh29.jpg', 440, 1027),
(148, 'Small Nataraja', 'SOLD Brass Small Nataraja Statue', 'product_image/6b2a861ae927ca74f2cead7fbac3b1e8sh30.jpg', 560, 1028),
(149, 'Wallmate', 'Decorative Home Interior,Wall Hanging', 'product_image/272de04e5fc90d868ff636b60d9b20bfsh31.jpeg', 780, 1029),
(150, 'Misbaha Prayer', 'Brand new addition to our Misbaha Prayer Beads', 'product_image/302166d8fa1c4c7d6c76f95ce35a96edsh32.jpg', 150, 1030),
(151, 'Prayer mat', 'Muslim supplies Islam rug prayer mat', 'product_image/14c8e7f48c5e67511aae3b8f784cb27dsh33.jpg', 800, 1031),
(152, 'Signet ring', 'Sterling Silver Men ring, Ottoman jewelry', 'product_image/1c5bdf5f54ad94742ec96dd5147cbe47sh34.jpg', 250, 1032),
(153, 'Pinterest', 'Home design on Pinterest', 'product_image/18b1505b7a808296fd2370a52eee9254sh35.jpg', 230, 1033),
(154, 'Jewelry Stand', 'Here is a beautiful project to make steady jewelry stand', 'product_image/872c0e5c84beb86815b95efa20120bcfsh36.jpg', 250, 1034),
(155, 'Jute Bag', 'Jute & others Handicraft -jute products artculture', 'product_image/d339f06625272113acec35d6b2108d27sh37.jpg', 250, 1035),
(156, 'Jute Shoe', 'Full Overview,Import And Export Production', 'product_image/12dbac8a3c5b8200022d4e4671d38dc2sh38.jpg', 320, 1036),
(157, 'Pen Box', 'This decoration for Table', 'product_image/64abe60362b548b8044a804f7f44f639sh39.jpg', 150, 1037),
(158, 'Matir Pot', 'Clay pots for storing water are displayed', 'product_image/2f792134442a44d5506e3258b879864ash40.jpg', 230, 1038),
(159, 'new', 'new2', 'product_image/80bfb4bf36b5d8b9b055806622713150shoe.PNG', 230, 2333);

-- --------------------------------------------------------

--
-- Table structure for table `shophomef`
--

CREATE TABLE `shophomef` (
  `id` int(10) NOT NULL,
  `titleshopf` varchar(100) NOT NULL,
  `disshopf` varchar(255) NOT NULL,
  `imgshopf` varchar(500) NOT NULL,
  `tkshopf` int(50) NOT NULL,
  `post_idshopf` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shophomef`
--

INSERT INTO `shophomef` (`id`, `titleshopf`, `disshopf`, `imgshopf`, `tkshopf`, `post_idshopf`) VALUES
(5, 'Earring Wood', 'Fashion Earring Wood Rope Multicolor Jamaica', 'product_image/34d07381339e78db471c0a2c14b00253sf1.jpg', 100, 1001),
(6, 'Clutch', 'Clutch For Womens (red)', 'product_image/b871060610c33c734864aadb80704137sf2.jpg', 200, 1002),
(7, 'Peacock earrings', 'Peacock earrings handmate', 'product_image/886a30a53a959a15e9749d43441ee0d4sf3.jpg', 120, 1003),
(8, 'Matir Mala', 'Handmade Terracotta Jewelry', 'product_image/c0e16d218fd51cfed01254bf5f11eecasf4.jpg', 140, 1004),
(9, 'Silk dress', 'Find Latest silk bandhani dress ', 'product_image/b2edc1d1d6f84268b3de402922155755sf5.jpg', 1700, 1005),
(10, 'T-Shirt', 'Handmade Full Sleeve Women T-Shirt', 'product_image/cd445313bb8eb04bd2b781a37e0cdff3sf7.jpg', 500, 1007),
(11, 'Pillows', 'Cozy Crochet Pillows', 'product_image/673f106b6aecc6f2f3547145a099417csf8.jpg', 200, 1008),
(12, 'Basket', 'Basket Weaving Craft for Women', 'product_image/852e634a4b55a5f5a1c655cc5b2bccb1sf9.jpg', 450, 1009),
(13, 'Watch', 'Blue Color Digital Led Band Wrist Watch', 'product_image/3e25e7a6399f962c2bb8d5b0ed018499sf11.jpg', 1200, 1011),
(14, 'Woolen sweater', 'This is a digital file Baby Boy Sweater', 'product_image/75136bf7c549c5c425c01302ac0ce932sf12.jpg', 1400, 1012),
(15, 'Chikankari', 'Best price. Latest Design and High Quality', 'product_image/6f873cb0b369b9aeb02c1eb012874ebcsf13.jpg', 1570, 1013),
(16, 'Watch', 'Natural Mens Wooden Wrist Watch Casual Dress', 'product_image/47c3c5c6c85cd5db934752b870c3092dsf14.jpg', 1400, 1014),
(17, 'Baby dress', 'Traditional Leprechaun Baby Vest', 'product_image/c366a88f3b8eb65ba21fcdd667229680sf15.jpg', 350, 1015),
(18, 'Bag', 'Bag for All Womens Fashion', 'product_image/5d2f9ec6ae63315be409ea3b8f8ae163sf16.jpg', 1230, 1016),
(19, 'Silk Saree', 'Chiffon Silk Saree Blue Printed Sari', 'product_image/f9542abfa6b75afee0d7a50b744e5cd6sf17.jpg', 1600, 1017),
(20, 'Panjabi', 'Wholesale Stylish Deep Blue Panjabi', 'product_image/9ffd92865a6d6bed3a5cd84b9ff34e62sf18.png', 1200, 1018),
(21, 'Baby shoe', 'Children Shoes Casual Boy Soft Breathable', 'product_image/244110bd71a9d16ff4c913927b14cbe8sf19.jpg', 890, 1019),
(22, 'Earring', 'Patti Flower Jewellery Earrings for Kids', 'product_image/5da4b6c2f74ea50ed02e7c2e78260927sf20.jpg', 550, 1020);

-- --------------------------------------------------------

--
-- Table structure for table `shophomeha`
--

CREATE TABLE `shophomeha` (
  `id` int(10) NOT NULL,
  `titleshopha` varchar(100) NOT NULL,
  `disshopha` varchar(666) NOT NULL,
  `imgshopha` varchar(500) NOT NULL,
  `tkshopha` int(50) NOT NULL,
  `post_idshopha` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shophomeha`
--

INSERT INTO `shophomeha` (`id`, `titleshopha`, `disshopha`, `imgshopha`, `tkshopha`, `post_idshopha`) VALUES
(2, 'Umbrella', 'Colorful Design Rajasthani Handicraft Umbrella', 'product_image/3645fa12994e108d3da3f416d630bd16hnd1.jpg', 500, 3001),
(3, 'Interior Design', 'Gallery of Exterior And Interior Design', 'product_image/b61b958b79ae3c4129c5727b3056e151hnd2.jpg', 1200, 3002),
(4, 'Mug', 'Bamboo Handmade Beer Mug', 'product_image/3899cd7596de5eeb03a63148b3d8f6a0hnd3.jpg', 200, 3003),
(5, 'Furniture', 'Bamboo Furniture Sells And Training Center', 'product_image/97fcf6d5633917cb35c2fcd2918847e5hnd4.jpg', 3500, 3004),
(6, 'Bangles', 'Bamboo Bangles', 'product_image/a75a3910eb50402bc10927a6978b39adhnd5.jpg', 230, 3005),
(7, 'Penstand', 'Assam Cane Bamboo Penstand', 'product_image/2cb2383d01ab23889446483356fc55bfhnd6.jpg', 340, 3006),
(8, 'Ecowoodies', 'Latest Design and High Quality', 'product_image/2b1ce007a017ad1e2b877098a564d80fhnd7.jpg', 1300, 3007),
(9, 'Lamp', 'Bamboo lamp shade', 'product_image/6222e75a7319921f8b3ba4f049e22b9fhnd9.jpg', 350, 3009),
(10, 'Pot', 'Bangladesh has a rich cultural tradition', 'product_image/bdbca07ca5432ddaa23e53b69462b435hnd11.jpg', 200, 3011),
(11, 'Pot Slot', 'Beautifully coloured and designed clay pots', 'product_image/f348bd477935669724526f355c277554hnd12.jpg', 500, 3012),
(12, 'Boat with Sailor', 'Terracotta Home decor Handicraft', 'product_image/0483f0cbc51e29efa42ef248f1bafd4fhnd13.jpg', 230, 3013),
(13, 'Vase Kolsi', '6 inch Tall Sitting Cat Vase', 'product_image/1ad0e63cc25c351b52242ffdb1d5d50ehnd14.jpg', 500, 3014),
(14, 'Doll', 'krishnanagar-clay-animal', 'product_image/be1b9811915020e90583388b5b51b065hnd15.jpg', 230, 3015),
(15, 'Curry pot', 'fashion to Decoretion rannaghor', 'product_image/3d8b7425ef8397547847479a4b38f747hnd16.jpg', 350, 3016),
(16, 'Pan', 'Rustic Cazuela Clay Pan', 'product_image/f57c119c6258db859be87359dba98b93hnd17.jpg', 500, 3017),
(17, 'Frying Pan', 'Ethiopian Handmade Unglazed Clay', 'product_image/2963493abacc88f9120ba3eba2bb7e6ahnd18.jpg', 200, 3018),
(18, 'Pan', 'Traditional Mexican Pottery For Cooking', 'product_image/3185cfe235236098e4db01bb026faf74hnd19.jpg', 500, 3019),
(19, 'Small Vast', 'Its decoration for room', 'product_image/87f386f55d4ba1c354844bb44dc09f06hnd20.jpg', 200, 3020);

-- --------------------------------------------------------

--
-- Table structure for table `shophomek`
--

CREATE TABLE `shophomek` (
  `id` int(10) NOT NULL,
  `titleshopk` varchar(200) NOT NULL,
  `disshopk` varchar(666) NOT NULL,
  `imgshopk` varchar(500) NOT NULL,
  `tkshopk` int(50) NOT NULL,
  `post_idshopk` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shophomek`
--

INSERT INTO `shophomek` (`id`, `titleshopk`, `disshopk`, `imgshopk`, `tkshopk`, `post_idshopk`) VALUES
(2, 'Tupi', 'Only for kids fashion', 'product_image/905be2a8b229812787362ee3cd64f48dkid1.jpg', 350, 2001),
(3, 'Kids dress', 'fashion for baby', 'product_image/6d4d90fc3aa7aff99fe68af0ecbe84b7kid3.jpg', 1200, 2002),
(4, 'Baby Shoe', 'Birthday gift for children ', 'product_image/8bdcbf8c7ef7c00019f7e3bf119aaa26kid2.jpg', 780, 2003),
(5, 'Pen', 'Xmas Craft Ideas for Children', 'product_image/1b665f12c417e57f2bb544d2fa5f39a9kid4.jpg', 80, 2004),
(6, 'Baby Toys', 'Tiger Pillow Traditional Baby Toys', 'product_image/bcd7f4af2294a285affbae6f42e51a5dkid6.jpg', 550, 2006),
(7, 'Baby Doll', 'Cool Crafts Made With Old Socks', 'product_image/a0ead388dd82cb4feb669a2c4157a574kid7.jpg', 450, 2007),
(8, 'Chair', 'Ecowoodies HandiCraft Kids Chair', 'product_image/b7465f1cff4c03450b5f4e77384f7798kid8.jpg', 350, 2008),
(9, 'Dress', 'Most Popular Items', 'product_image/8f4bd0a6be3c401742375169bc1ddd05kid9.jpg', 580, 2009),
(10, 'Toddler', 'So Sydney is a trademarked brand', 'product_image/4c6b83a8795812af763ccaa5f7274534kid10.jpg', 780, 2010),
(11, 'Doll', 'Make a Doll Dress from Crepe Paper', 'product_image/73278a8f68c62e620a4dea8c7df9aa00kid11.jpg', 300, 2011),
(12, 'Kids Bag', 'Set For Kids Birthday Party', 'product_image/6b0c1f043d2cf2e3987c051b0828bf2481leAue8rNL._SY606_.jpg', 700, 2013),
(13, 'T-shirt', 'LOVE print cotton kids t-shirt', 'product_image/499ebd59c71dcd54f93002a914d6eca4kid14.jpg', 250, 2014),
(14, 'woolen flap', 'Baby fashion we follow to us', 'product_image/54f19a8dd99c6050186e035012df2573kid15.jpg', 400, 2015),
(15, 'Truck', 'Vintage Wooden Toy Truck For Kids', 'product_image/3071cc4f96688c07d5bfe524c0e1014e1q9a7071-500x500.jpg', 500, 2016),
(16, 'Ball & Cup Toy', 'its for Entertainment Vs games', 'product_image/a6ee3e065b3cebe2a0b8464ed4585adckid17.jpg', 120, 2017),
(17, 'Necklace', 'This is a cleopatra necklace collar', 'product_image/71e0cd0a31faf7f53077fe55f753e453kid18.jpg', 320, 2018),
(18, 'Kids dress', 'Dress and cover diaper set in croche', 'product_image/049a386489817f3156e4a426902c30b6kid19.jpg', 650, 2019),
(19, 'Kid dress', 'Baby fashion we follow to us', 'product_image/7399fb2e94d28fa62f839026aca08a10kid20.jpg', 270, 2020);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(15) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `adress` varchar(500) NOT NULL,
  `psw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `phone`, `adress`, `psw`) VALUES
(16, 'MD abu sayeed', 'abu.sayeed.diu@gmail.com', 1750758262, 'bangladesh theke alsi', 'sayeed'),
(17, 'any', 'any.cse@gmail.com', 1765938455, 'mirpur dhaka', '29384'),
(18, 'my name is khan', 'abu@mama.com', 1968949468, 'sukrabad kacha bazaer', 'mama'),
(19, 'sayeed', 'abu.sayeed.diu@gmail.com', 1968949468, 'dhanmondi 1209 dhaka', 'dddd'),
(20, 'sayeed', '8801750758262', 1765938455, 'sukrabad kacha bazaer', 'ff'),
(21, 'sayeed', '8801750758262', 1765938455, 'sukrabad kacha bazaer', 'dddddd'),
(22, 'ssssssssss', 'fffffffff', 2147483647, 'fffffffffffff', 'ffffffff'),
(23, 'ssssssssss', 'fffffffff', 2147483647, 'fffffffffffff', 'ffffffff'),
(24, 'ssssssssss', 'fffffffff', 2147483647, 'fffffffffffff', 'ffffffff'),
(25, 'ssssssssss', 'fffffffff', 2147483647, 'fffffffffffff', 'dddddd'),
(26, 'ssssssssss', 'fffffffff', 2147483647, 'fffffffffffff', 'dddddd'),
(27, 'ssssssssssssssssssssssssssss', 'sssssssssssssssssssssssssss', 2147483647, 'ddddddddddddddd', 'dddddddddddddddddddd'),
(28, 'ssssssssssssssssssssssssssss', 'sssssssssssssssssssssssssss', 2147483647, 'ddddddddddddddd', 'dddddddddddddddddddd'),
(29, 'lovely', 'lovely@gmail.com', 1750758272, 'khichen rode dhaka', 'my love you'),
(30, 'mama', 'akka', 78, 'dd', '78'),
(31, 'shaid', 'abu@sayeed', 11223344, 'sdsf', '1122');

-- --------------------------------------------------------

--
-- Table structure for table `specialorder`
--

CREATE TABLE `specialorder` (
  `addres` varchar(200) NOT NULL,
  `sms` varchar(500) NOT NULL,
  `number` int(15) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialorder`
--

INSERT INTO `specialorder` (`addres`, `sms`, `number`, `id`) VALUES
('dhaka', 'burger', 1750758262, 8),
('dhaka', 'burger', 1750758262, 9),
('99999999999', '9999999999999', 2147483647, 10),
('hhhhhhhhhhhhhh', 'hhhhhhhhhhhhhh', 2147483647, 11),
('test', 'yes', 1750242434, 12);

-- --------------------------------------------------------

--
-- Table structure for table `special_order`
--

CREATE TABLE `special_order` (
  `number` int(15) NOT NULL,
  `addres` varchar(200) NOT NULL,
  `order` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlock`
--
ALTER TABLE `adminlock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breakfastbeefi`
--
ALTER TABLE `breakfastbeefi`
  ADD PRIMARY KEY (`post_idbr`);

--
-- Indexes for table `breakfasteggi`
--
ALTER TABLE `breakfasteggi`
  ADD PRIMARY KEY (`post_idbe`);

--
-- Indexes for table `breakfastnr`
--
ALTER TABLE `breakfastnr`
  ADD PRIMARY KEY (`post_idnr`);

--
-- Indexes for table `breakfastoti`
--
ALTER TABLE `breakfastoti`
  ADD PRIMARY KEY (`post_idot`);

--
-- Indexes for table `breakfastvgi`
--
ALTER TABLE `breakfastvgi`
  ADD PRIMARY KEY (`post_idbv`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dinnerdb`
--
ALTER TABLE `dinnerdb`
  ADD PRIMARY KEY (`post_iddb`);

--
-- Indexes for table `dinnerde`
--
ALTER TABLE `dinnerde`
  ADD PRIMARY KEY (`post_idde`);

--
-- Indexes for table `dinnerdf`
--
ALTER TABLE `dinnerdf`
  ADD PRIMARY KEY (`post_iddf`);

--
-- Indexes for table `dinnerdfi`
--
ALTER TABLE `dinnerdfi`
  ADD PRIMARY KEY (`post_iddfi`);

--
-- Indexes for table `dinnerdv`
--
ALTER TABLE `dinnerdv`
  ADD PRIMARY KEY (`post_iddv`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `homen`
--
ALTER TABLE `homen`
  ADD PRIMARY KEY (`post_idn`);

--
-- Indexes for table `lunchfi`
--
ALTER TABLE `lunchfi`
  ADD PRIMARY KEY (`post_idlfi`);

--
-- Indexes for table `lunchlb`
--
ALTER TABLE `lunchlb`
  ADD PRIMARY KEY (`post_idlb`);

--
-- Indexes for table `lunchle`
--
ALTER TABLE `lunchle`
  ADD PRIMARY KEY (`post_idle`);

--
-- Indexes for table `lunchlf`
--
ALTER TABLE `lunchlf`
  ADD PRIMARY KEY (`post_idlf`);

--
-- Indexes for table `lunchlv`
--
ALTER TABLE `lunchlv`
  ADD PRIMARY KEY (`post_idlv`);

--
-- Indexes for table `pakagepb`
--
ALTER TABLE `pakagepb`
  ADD PRIMARY KEY (`post_idpbe`);

--
-- Indexes for table `pakagepc`
--
ALTER TABLE `pakagepc`
  ADD PRIMARY KEY (`post_idpc`);

--
-- Indexes for table `pakageps`
--
ALTER TABLE `pakageps`
  ADD PRIMARY KEY (`post_idps`);

--
-- Indexes for table `pakagepset`
--
ALTER TABLE `pakagepset`
  ADD PRIMARY KEY (`post_idpset`);

--
-- Indexes for table `pakagepw`
--
ALTER TABLE `pakagepw`
  ADD PRIMARY KEY (`post_idpw`);

--
-- Indexes for table `shophome`
--
ALTER TABLE `shophome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shophomef`
--
ALTER TABLE `shophomef`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shophomeha`
--
ALTER TABLE `shophomeha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shophomek`
--
ALTER TABLE `shophomek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialorder`
--
ALTER TABLE `specialorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_order`
--
ALTER TABLE `special_order`
  ADD PRIMARY KEY (`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlock`
--
ALTER TABLE `adminlock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `breakfastbeefi`
--
ALTER TABLE `breakfastbeefi`
  MODIFY `post_idbr` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4007;

--
-- AUTO_INCREMENT for table `breakfasteggi`
--
ALTER TABLE `breakfasteggi`
  MODIFY `post_idbe` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5007;

--
-- AUTO_INCREMENT for table `breakfastnr`
--
ALTER TABLE `breakfastnr`
  MODIFY `post_idnr` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3011;

--
-- AUTO_INCREMENT for table `breakfastoti`
--
ALTER TABLE `breakfastoti`
  MODIFY `post_idot` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7005;

--
-- AUTO_INCREMENT for table `breakfastvgi`
--
ALTER TABLE `breakfastvgi`
  MODIFY `post_idbv` int(66) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6006;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;

--
-- AUTO_INCREMENT for table `dinnerdb`
--
ALTER TABLE `dinnerdb`
  MODIFY `post_iddb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2005;

--
-- AUTO_INCREMENT for table `dinnerde`
--
ALTER TABLE `dinnerde`
  MODIFY `post_idde` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4005;

--
-- AUTO_INCREMENT for table `dinnerdf`
--
ALTER TABLE `dinnerdf`
  MODIFY `post_iddf` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;

--
-- AUTO_INCREMENT for table `dinnerdfi`
--
ALTER TABLE `dinnerdfi`
  MODIFY `post_iddfi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3005;

--
-- AUTO_INCREMENT for table `dinnerdv`
--
ALTER TABLE `dinnerdv`
  MODIFY `post_iddv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5004;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1009;

--
-- AUTO_INCREMENT for table `homen`
--
ALTER TABLE `homen`
  MODIFY `post_idn` int(66) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2012;

--
-- AUTO_INCREMENT for table `lunchfi`
--
ALTER TABLE `lunchfi`
  MODIFY `post_idlfi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3006;

--
-- AUTO_INCREMENT for table `lunchlb`
--
ALTER TABLE `lunchlb`
  MODIFY `post_idlb` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2007;

--
-- AUTO_INCREMENT for table `lunchle`
--
ALTER TABLE `lunchle`
  MODIFY `post_idle` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4005;

--
-- AUTO_INCREMENT for table `lunchlf`
--
ALTER TABLE `lunchlf`
  MODIFY `post_idlf` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;

--
-- AUTO_INCREMENT for table `lunchlv`
--
ALTER TABLE `lunchlv`
  MODIFY `post_idlv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5006;

--
-- AUTO_INCREMENT for table `pakagepb`
--
ALTER TABLE `pakagepb`
  MODIFY `post_idpbe` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;

--
-- AUTO_INCREMENT for table `pakagepc`
--
ALTER TABLE `pakagepc`
  MODIFY `post_idpc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3007;

--
-- AUTO_INCREMENT for table `pakageps`
--
ALTER TABLE `pakageps`
  MODIFY `post_idps` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4006;

--
-- AUTO_INCREMENT for table `pakagepset`
--
ALTER TABLE `pakagepset`
  MODIFY `post_idpset` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5006;

--
-- AUTO_INCREMENT for table `pakagepw`
--
ALTER TABLE `pakagepw`
  MODIFY `post_idpw` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2006;

--
-- AUTO_INCREMENT for table `shophome`
--
ALTER TABLE `shophome`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `shophomef`
--
ALTER TABLE `shophomef`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `shophomeha`
--
ALTER TABLE `shophomeha`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `shophomek`
--
ALTER TABLE `shophomek`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `specialorder`
--
ALTER TABLE `specialorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `special_order`
--
ALTER TABLE `special_order`
  MODIFY `number` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
