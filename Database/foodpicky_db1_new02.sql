-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 07:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodpicky_db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`, `code`, `date`) VALUES
(6, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin@gmail.com', '', '2022-03-20 09:36:18'),
(9, 'munq', '3415deee497bb0a721722a1481ad5ddc', 'fgfg@gmail.com', 'QFE6ZM', '2023-02-06 06:07:36');

-- --------------------------------------------------------

--
-- Table structure for table `admin_codes`
--

CREATE TABLE `admin_codes` (
  `id` int(222) NOT NULL,
  `codes` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_codes`
--

INSERT INTO `admin_codes` (`id`, `codes`) VALUES
(1, 'QX5ZMN'),
(2, 'QFE6ZM'),
(3, 'QMZR92'),
(4, 'QPGIOV'),
(5, 'QSTE52'),
(6, 'QMTZ2J');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `d_id` int(222) NOT NULL,
  `rs_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `slogan` varchar(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`d_id`, `rs_id`, `title`, `slogan`, `price`, `img`) VALUES
(18, 52, 'Caprese stuffed chicken', 'A twist on the classic Caprese! Succulent chicken is filled with both fresh and sun dried tomatoes for a flavour packed chicken PLUS melted mozzarella cheese! Cooked in a perfect balsamic reduction, this is the chicken of ', '100.00', '623353652eb53.jpg'),
(19, 52, 'Spinach Artichoke Stuffed Chicken', 'Spinach Artichoke Stuffed Chicken Breasts is a delicious way to turn a creamy dip into an incredible dinner! with the option of serving it with a ‘no cream’ creamy sauce!', '150.00', '623354625884f.jpg'),
(20, 52, 'Caprese Stuffed Garlic Butter Portobellos', 'Portobello mushrooms stuffed and broiled with garlic butter and fresh mozzarella cheese, grape tomato slices and drizzled with a rich balsamic glaze! Low carb heaven!', '120.00', '623354e713a8b.jpg'),
(21, 52, 'Grilled Lemon Herb Mediterranean Chicken Salad', 'this Grilled Lemon Herb Mediterranean Chicken Salad recipe is as closest to perfect as you can get! Full of Mediterranean flavours: olives, tomatoes, cucumber, avocados, and chicken', '599.00', '6233554fe82f7.jpg'),
(22, 53, 'Creamy Herb Chicken', 'Tender chicken breasts simmered in a flavourful and creamy herb sauce with a hint of garlic', '499.00', '623355ee3f58b.jpg'),
(23, 53, 'Hot Fudge Chocolate Pudding Cake', 'An extremely easy and fast to make! A rich chocolate fudge sauce forms underneath a layer of chocolate cake while baking, by itself!', '199.00', '623356472959e.jpg'),
(24, 53, 'Creamy Parmesan Carbonara Chicken (No Egg)', 'The ultimate twist with Carbonara flavours! Crispy, golden chicken fillets soak up a carbonara inspired sauce for a new chicken recipe loved by the entire family!', '220.00', '623356b3df667.jpg'),
(25, 54, 'Spinach Artichoke Stuffed Chicken', 'Spinach Artichoke Stuffed Chicken Breasts is a delicious way to turn a creamy dip into an incredible dinner! with the option of serving it with a ‘no cream’ creamy sauce!', '200.00', '6233588c5a574.jpg'),
(26, 54, 'Quick Soft Cinnamon Rolls', 'Cinnamon rolls with a cream cheese glaze are super fluffy and light with a simple homemade dough, and a quick method to get baking!', '120.00', '623357fbeaca0.jpg'),
(28, 54, 'Creamy Salmon Piccata', 'Move over chicken…. THIS creamy salmon piccata is THE classy yet easy salmon recipe you’ve been waiting for, with a delicious creamy lemon caper sauce!', '400.00', '6235ea1bf30df.jpg'),
(29, 65, 'Chicken Chettinad Curry', 'A fiery curry, Chicken Chettinad is one of the most popular dishes from this region. The tanginess of tomatoes, the sweetness of the onions and cinnamon and the heat from red chillies', '350.00', '6235ee0246746.jpg'),
(30, 65, 'Chettinad Fish Fry', 'Fleshy surmai fillets are marinated and wrapped in an exquisite Chettinad masala paste and then pan fried. These succulent fish fillets are perfect as appetizers', '200.00', '6235ef06179ed.jpg'),
(31, 65, 'Chettinad Egg Curry', 'This chettinad egg curry is a simple egg recipe to prepare and has a myriad of spices mixed with some coconut milk adding to the thick gravy. It is spicy and tangy with the addition of lime', '100.00', '6235f05019c2e.jpg'),
(32, 57, 'Chicken sandwich', ' skinless chicken breast or thigh served between slices of bread, on a bun, or on a roll.', '199.00', '6235f2b6d56d5.jpg'),
(33, 57, ' Uttapam', 'Uttapam are savory pancakes with crispy golden edges and a pillowy soft center topped with veggies. Traditionally served as breakfast in India, wholesome Uttapam also makes for a quick and satiating meal.', '99.00', '6235f4de5db83.jpg'),
(34, 60, 'Chana Masala', 'Chana Masala, also known as Chole Masala, is an authentic North Indian style curry made with white chickpeas, freshly powdered spices, onions, tomatoes and herbs', '199.00', '6235f995db263.jpg'),
(35, 60, 'Besan Ladoo', ' these are round sweet balls made by roasting gram flour and ghee together, and then adding sugar to make a thick pasty dough – that is then formed into delicious, melt-in-your-mouth balls.', '200.00', '6235fa361924b.jpg'),
(37, 60, 'Samosa', 'Flaky and crunchy fried samosa are one of the most popular street food snack in North Indian cuisine. They feature a pastry-like crust but are filled with savory potatoes and peas for a hearty, delicious snack.', '120.00', '6237334522669.jpg'),
(38, 50, 'Dosai', 'Rice and wheat are the top two grains consumed by Indians, with rice topping the list. Indians have taken this humble grain and transformed it into a plethora of sweet and savory dishes unlike any other culture in the worl', '150.00', '62373622e10a6.jpg'),
(39, 50, 'Idly', 'idly is a type of savory rice cake, originating from the Indian subcontinent, popular as a breakfast food in Southern India and in Sri Lanka.', '180.00', '6237371fe35b2.jpg'),
(40, 50, 'Appam', 'Appam is a type of pancake, originating from South India, made with fermented rice batter and coconut milk', '120.00', '623738575b588.jpg'),
(41, 55, 'Puttu', ' It is a dish made of steamed cylinders of ground rice layered with coconut shavings, sometimes with a sweet or savory filling. Puttu is served hot with sweet side dishes such as palm sugar or banana', '199.00', '62373a897a4c6.jpg'),
(42, 55, 'Pongal', 'The two varieties of pongal are chakarai pongal, which is sweet, and venn pongal, which is made from clarified butter. The word pongal generally refers to spicy venn pongal and is a common breakfast food.', '160.00', '62373c09a4b04.jpg'),
(43, 55, 'Parota', 'Porottas/Parathas are commonly eaten with vegetable kurma/korma, chicken, fish, mutton, or beef curry. They are also served stuffed with vegetables such as potatoes or radish', '100.00', '62373d32d5143.jpg'),
(44, 56, 'Coconut Rice', 'Coconut rice is a dish prepared by soaking white rice in coconut milk or cooking rice with coconut flakes. As both coconut and the rice-plant are commonly found in the tropics all around the world', '150.00', '623746726eaa1.jpg'),
(45, 56, 'Patrode', 'It is made from colocasia leaves (chevu in Tulu, taro, kesuve or arbi) stuffed with gram or rice flour and flavorings such as spices, tamarind, and jaggery (raw sugar).', '100.00', '62374753e63aa.jpg'),
(46, 56, 'Chicken Ishtu', 'Cardamom, cinnamon, and cloves are paired together to bring out a sweet yet aromatic flavor. Potatoes, beans, and carrots are the vegetables of choice here, adding body and varied texture to the overall dish.', '180.00', '623747f111c69.jpg'),
(47, 48, 'Schezwan Fried Rice', 'Indo-Chinese style schezwan fried rice! It’s super easy to make and filled with tender rice, colorful veggies and it’s all stir-fried with a spicy schezwan sauce.', '200.00', '6238960466488.jpg'),
(48, 48, 'Schezwan Noodles', 'Schezwan noodles recipe is made with the spicy schezwan sauce and Hakka Noodles is made with soy sauce. Hakka Noodles is more like your simple stir-fried noodles', '150.00', '623896f62b300.jpg'),
(49, 48, 'Veg Manchurian Recipe', 'Cabbage is usually the leading vegetable in the manchurian balls, with carrots, green beans, bell peppers and even cauliflower added to the mix', '250.00', '623897eb56c5a.jpg'),
(50, 61, 'French Fries', 'French fries, are one of the most popular side dishes in the world. They find accompaniment in dips, mayonnaise, ketchup, and even vinegar.', '150.00', '623899823950b.jpg'),
(51, 61, 'French Toast', 'French toast is a dish made of sliced bread soaked in beaten eggs and typically milk, then pan fried. Alternative names and variants include \"eggy bread\"', '200.00', '62389a4b4634a.jpg'),
(52, 61, 'Winter Chicken', 'chicken fried with beautiful, ripe, cherry tomatoes in a creamy sauce is guaranteed to hit the spot. Add a dollop of pesto for an extra layer of nutty flavours', '250.00', '62389b56305f6.jpg'),
(53, 51, 'Prawn Pie', 'The dish is made from a spicy flavored flaky pie pastry that is stuffed in with chopped prawns that is cooked in Recheado masala. This is one of the common masala used in most of the Goan cooking', '200.00', '62389c87b9371.jpg'),
(54, 51, 'Chicken Kiev', 'Chicken Kiev or chicken Kyiv is a dish made of chicken fillet pounded and rolled around cold butter, then coated with egg and bread crumbs, and either fried or baked', '249.00', '62389d1d37b43.jpg'),
(55, 51, 'Mutton Stew', 'French ragoût (stew) of lamb or mutton. Often, vegetables are added.Lamb stew is a preparation in which tough cuts of lamb.', '149.00', '62389ed6884cb.jpg'),
(56, 49, 'Margherita Pizza', 'Pizza Margherita (more commonly known in English as Margherita pizza) is a typical Neapolitan pizza, made with San Marzano tomatoes, mozzarella cheese, fresh basil, salt, and extra-virgin olive oil.', '120.00', '62389fbca300a.jpg'),
(57, 49, ' Mushroom Risotto', 'Mushroom risotto is a creamy Italian rice with chicken broth and your favorite mushrooms. You can make it on the stovetop with a little patience and meditative stirring', '180.00', '6238a08145beb.jpg'),
(58, 49, 'Lasagna', 'Lasagna is the name of one of the oldest and best-known pasta shapes. It is usually rectangular or ribbon shaped, thicker than tagliatelle, made from a dough based on flour and eggs', '249.00', '6238a1543564b.jpg'),
(59, 59, 'Classic Pasta Amatriciana', 'Denoting a spicy pasta sauce made with tomatoes, pancetta or bacon, and basil.', '149.00', '6238a27c7f0e3.jpg'),
(60, 59, 'Fettuccine Pomodoro', 'Pomodoro sauce is a very simple classic Italian tomato-based sauce recipe consisting of few ingredients.', '200.00', '6238a3547bab1.jpg'),
(61, 59, 'Pasta Carbonara', 'The silky carbonara sauce is created when the beaten eggs are tossed with the hot pasta and a little fat from the pancetta or bacon.', '249.00', '6238a3e1d1c05.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `d_id` int(222) NOT NULL,
  `c_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `slogan` varchar(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`d_id`, `c_id`, `title`, `slogan`, `price`, `img`) VALUES
(2, 13, 'Parota', 'Porottas/Parathas are commonly eaten with vegetable kurma/korma, chicken, fish, mutton, or beef curry. They are also served stuffed with vegetables such as potatoes or radish', '50.00', '63dd2b150fae7.jpg'),
(3, 13, 'Pasta Carbonara', 'The silky carbonara sauce is created when the beaten eggs are tossed with the hot pasta and a little fat from the pancetta or bacon.', '200.00', '63dd2cef25c88.jpg'),
(4, 13, 'Puttu', 'It is a dish made of steamed cylinders of ground rice layered with coconut shavings, sometimes with a sweet or savory filling. Puttu is served hot with sweet side dishes such as palm sugar or banana', '60.00', '63dd2d2085f77.jpg'),
(5, 15, 'Margherita Pizza', 'Pizza Margherita (more commonly known in English as Margherita pizza) is a typical Neapolitan pizza, made with San Marzano tomatoes, mozzarella cheese, fresh basil, salt, and extra-virgin olive oil.', '2500.00', '63dd2d5a1e8c1.jpg'),
(6, 13, 'Dosai', 'Rice and wheat are the top two grains consumed by Indians, with rice topping the list. Indians have taken this humble grain and transformed it into a plethora of sweet and savory dishes unlike any other culture in the worl', '50.00', '63ea5ad427bf2.jpg'),
(7, 14, 'Coconut Rice', 'Coconut rice is a dish prepared by soaking white rice in coconut milk or cooking rice with coconut flakes. As both coconut and the rice-plant are commonly found in the tropics all around the world', '250.00', '63dd2dfe7571b.jpg'),
(8, 15, 'Chicken Kothu', 'Tender chicken breasts simmered in a flavourful and creamy herb sauce with a hint of garlic', '800.00', '63dd2fdc60d10.jpg'),
(9, 15, 'Egg Koththu', 'Lasagna is the name of one of the oldest and best-known pasta shapes. It is usually rectangular or ribbon shaped, thicker than tagliatelle, made from a dough based on flour and eggs', '600.00', '63dd30112ccb3.jpg'),
(10, 15, 'Chees Koththu', 'It is made from colocasia leaves (chevu in Tulu, taro, kesuve or arbi) stuffed with gram or rice flour and flavorings such as spices, tamarind, and jaggery (raw sugar).', '1000.00', '63dd3034228a8.jpg'),
(11, 15, 'Beef Koththu', 'The dish is made from a spicy flavored flaky pie pastry that is stuffed in with chopped prawns that is cooked in Recheado masala. This is one of the common masala used in most of the Goan cooking', '850.00', '63dd3053bfb02.jpg'),
(12, 17, 'Water Bottle', 'Driniking water', '100.00', '63ee57666ba35.jpg'),
(13, 17, 'Apple Juice', 'Apple Juice', '150.00', '63ee57cc7cbfb.jpg'),
(14, 17, 'Mango Juice', 'Mango Juice', '150.00', '63ee57fe07d5d.jpg'),
(15, 17, 'Avacado Juice', 'Avacado Juice', '200.00', '63ee5850ebee0.jpg'),
(16, 17, 'Ginger Juice', 'Ginger Juice', '100.00', '63ee58ad903be.jpg'),
(17, 13, 'Uttapam', 'Uttapam is savory pancakes with crispy golden edges and a pillowy soft center topped with veggies. Traditionally served as breakfast in India, wholesome Uttapam also makes for a quick and satiating meal.', '100.00', '6235f4de5db83.jpg'),
(18, 13, 'Samosa', 'Flaky and crunchy fried samosa is one of the most popular street food snacks in North Indian cuisine. They feature a pastry-like crust but are filled with savory potatoes and peas for a hearty, delicious snack.', '60.00', '6237334522669.jpg'),
(20, 13, 'Idly', 'Idly is a type of savory rice cake, originating from the Indian subcontinent, popular as a breakfast food in Southern India and in Sri Lanka.', '50.00', '6237371fe35b2.jpg'),
(21, 13, 'Appam', 'Appam is a type of pancake, originating from South India, made with fermented rice batter and coconut milk', '100.00', '623738575b588.jpg'),
(22, 18, 'Hot Fudge Chocolate Pudding Cake', 'An extremely easy and fast to make! A rich chocolate fudge sauce forms underneath a layer of chocolate cake while baking, by itself!', '200.00', '623356472959e.jpg'),
(23, 14, 'Biriyani', 'Chicken Biriyani is a famous recipe of South Asian countries full of healthy ingredients that include chicken, Boiled White rice, and extra ingredient fried potatoes pieces. ', '450.00', '63ee648cb973c.jpg'),
(24, 14, 'Chicken Rice', 'Pure Basmati rice cooks up super fluffy with separate grains, making it great for fried rice with chicken.', '350.00', '63ee656633a53.png'),
(25, 14, 'Egg Rice', 'Egg Fried Rice is a delightful rice treat made by cooking rice, veggies & spices along with scrambled eggs and sauces.', '300.00', '63ee65c42c2e5.jpg'),
(26, 14, 'Veg Rice', 'Fried Rice is a delightful rice treat made by cooking rice, veggies & spices along with sauces.', '250.00', '63ee66666382d.jpg'),
(27, 16, 'Vanilla Ice-cream', 'Vanilla Flavor', '150.00', '63ee69ae949c3.jpg'),
(28, 16, 'Chocolate Ice-cream', 'Chocolate Flavor', '150.00', '63ee6a116766c.jpg'),
(29, 16, 'Butterscotch Ice-cream', 'Butterscotch Flavor', '200.00', '63ee6a78a83e5.jpg'),
(30, 16, 'Fruit and Nut', 'Fruit and Nut Flavor', '200.00', '63ee6aae2ded9.jpg'),
(31, 16, 'Fruit Salad', 'Mixed of banana, apple, pine apple with ice cream.', '250.00', '63ee6b05d4dbc.jpg'),
(32, 18, 'Chocolate Cake', 'This dairy-free chocolate cake is ultra-rich, moist and chocolaty! It doesn’t use any specialty ingredients and can be made with all-purpose, gluten-free or whole wheat flours.', '200.00', '63ee706871189.jpg'),
(33, 18, 'Jello-poke Cake', 'Jello Poke Cake is cool, creamy, and perfect for any get-together. Use any flavor of Jello to make this crowd-favorite dessert!', '200.00', '63ee70b8eaa61.jpg'),
(34, 18, 'Mocha Chocolate Cake', 'Mocha chocolate cake is cool, creamy, and perfect for any get-together. Use any flavor of Jello to make this crowd-favorite dessert!', '250.00', '63ee70e34ec46.jpg'),
(35, 18, 'Ice-cream Sandwich Cake', 'Mix up the flavors and add different toppings', '300.00', '63ee71128e4f0.png');

-- --------------------------------------------------------

--
-- Table structure for table `food_category`
--

CREATE TABLE `food_category` (
  `c_id` int(222) NOT NULL,
  `c_name` varchar(222) NOT NULL,
  `image` varchar(222) NOT NULL,
  `active` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_category`
--

INSERT INTO `food_category` (`c_id`, `c_name`, `image`, `active`) VALUES
(13, 'Breakfast', '63e286ac75953.jpg', 'Yes'),
(14, 'Lunch', '63e286223f5df.jpg', 'Yes'),
(15, 'Dinner', '63e286ec1fed1.jpg', 'Yes'),
(16, 'Dessert', '63e73ec16958f.jpg', 'Yes'),
(17, 'Drinks', '63e287a65c98d.jpg', 'Yes'),
(18, 'cake', '63ebe11a6c274.jpg', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `remark`
--

CREATE TABLE `remark` (
  `id` int(11) NOT NULL,
  `frm_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `remark`
--

INSERT INTO `remark` (`id`, `frm_id`, `status`, `remark`, `remarkDate`) VALUES
(71, 39, 'in process', 'Dispatching...', '2022-03-17 12:31:14'),
(72, 39, 'closed', 'Order delivered.', '2022-03-17 12:35:00'),
(73, 42, 'closed', 'Order delivered & payment received successfully.', '2022-03-23 13:53:20'),
(74, 47, 'rejected', 'Order Cancelled by User.', '2022-03-23 13:54:08'),
(76, 43, 'closed', 'aaaaa', '2023-02-05 06:05:02'),
(77, 46, 'closed', 'Table no 5', '2023-02-05 06:08:50'),
(79, 52, 'rejected', 'user reject', '2023-02-11 09:09:00'),
(81, 60, 'closed', 'jj', '2023-02-14 19:37:09'),
(82, 61, 'closed', 'fdf', '2023-02-15 07:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(222) NOT NULL,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `status` int(222) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `status`, `date`) VALUES
(40, 'joe27', 'Joshua', 'D', 'joshua@gmail.com', '7629313490', '18275a3df7a93d896d3179c612d92fe1', 1, '2022-03-23 13:30:04'),
(43, 'nancy', 'Nancy', 'Rani', 'nancy@gmail.com', '7900238167', 'a16627318ba6668dd95068109caa2490', 1, '2022-03-23 13:42:52'),
(44, 'vinoth36', 'Vinoth', 'Kumar', 'vinoth@gmail.com', '7357700216', 'fa57148e32465b50adc70642be7ac76e', 1, '2022-03-23 13:50:29'),
(47, 'Vithushan', 'Sivaranjan', 'Vithushan', 'premsinhalam@gmail.com', '0772644218', '156cbb1a119c55a14fe35d655d6a586a', 1, '2023-02-14 06:08:34'),
(48, 'arafath', 'arafath', 'arafath', 'a@gmail.com', '0754123799', '25d55ad283aa400af464c76d713c07ad', 1, '2023-02-14 19:20:30');

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

CREATE TABLE `users_orders` (
  `o_id` int(222) NOT NULL,
  `u_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `quantity` int(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `tableNo` int(222) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users_orders`
--

INSERT INTO `users_orders` (`o_id`, `u_id`, `title`, `quantity`, `price`, `tableNo`, `status`, `date`) VALUES
(43, 40, 'Parota', 1, '100.00', 0, 'closed', '2023-02-05 06:05:02'),
(46, 44, 'Schezwan Fried Rice', 1, '200.00', 0, 'closed', '2023-02-05 06:08:50'),
(50, 45, 'Spinach Artichoke Stuffed Chicken', 1, '150.00', 0, 'closed', '2023-02-06 06:17:13'),
(52, 45, 'Spinach Artichoke Stuffed Chicken', 1, '150.00', 0, 'rejected', '2023-02-11 09:09:00'),
(55, 45, 'Caprese Stuffed Garlic Butter Portobellos', 1, '120.00', 0, NULL, '2023-02-06 06:14:24'),
(56, 45, 'Caprese stuffed chicken', 1, '100.00', 0, NULL, '2023-02-06 06:14:24'),
(62, 48, 'Pasta Carbonara', 2, '200.00', 5, NULL, '2023-02-16 07:15:08'),
(63, 48, 'Parota', 1, '50.00', 5, NULL, '2023-02-16 07:15:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `admin_codes`
--
ALTER TABLE `admin_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `food_category`
--
ALTER TABLE `food_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `remark`
--
ALTER TABLE `remark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `users_orders`
--
ALTER TABLE `users_orders`
  ADD PRIMARY KEY (`o_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin_codes`
--
ALTER TABLE `admin_codes`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `d_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `d_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `food_category`
--
ALTER TABLE `food_category`
  MODIFY `c_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `remark`
--
ALTER TABLE `remark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `o_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
