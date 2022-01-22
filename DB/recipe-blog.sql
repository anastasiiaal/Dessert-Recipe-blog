-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 22 2022 г., 20:16
-- Версия сервера: 8.0.21
-- Версия PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `recipe-blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id_admin`, `login`, `password`) VALUES
(1, 'admin', 'password'),
(5, 'useruser', '$2y$10$zM1Xo9875knUimfo8FO54eA4SNCSrtLRT3W56VAK8Td7F1AMUfjTe');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int NOT NULL AUTO_INCREMENT,
  `name_category` varchar(255) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'cakes'),
(2, 'cookies'),
(3, 'cupcakes'),
(4, 'pies');

-- --------------------------------------------------------

--
-- Структура таблицы `recipe`
--

DROP TABLE IF EXISTS `recipe`;
CREATE TABLE IF NOT EXISTS `recipe` (
  `id_recipe` int NOT NULL AUTO_INCREMENT,
  `author` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `alt_photo` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` int NOT NULL,
  `prep_time` varchar(255) NOT NULL,
  `ingredients` text NOT NULL,
  `instructions` text NOT NULL,
  PRIMARY KEY (`id_recipe`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `recipe`
--

INSERT INTO `recipe` (`id_recipe`, `author`, `title`, `photo`, `alt_photo`, `description`, `category`, `prep_time`, `ingredients`, `instructions`) VALUES
(1, 1, 'No Bake White Chocolate Cheesecake', 'img/recipe01.jpg', 'Cheesecake', 'Sweet and beautifully creamy with just the right amount of salty, crunchy biscuit base, this No Bake White Chocolate Cheesecake is a fantastic dessert, perfect for Mother’s Day or even Easter Sunday. I’ve made no-bake cheesecakes before that need gelatine to set. Will this one set?\r\n \r\nThe beautiful thing about this cheesecake is that a perfect set is guaranteed because of the addition of the chocolate. In fact, I’d go as far as to say that you could even use this as a base for other no-bake cheesecakes. ', 1, '30 min', '100 g (1 stick) butter ;\r\n200 g (2 cups) crumbs digestive biscuits ;\r\n250 g (1¼ cups) white chocolate ;\r\n300 ml (1¼ cups) double (heavy) cream ;\r\n280 g (1¼ cups) full fat cream cheese ;\r\n1 teaspoon vanilla extract', 'Start by lining a 20cm (7 inch) spring form cake tin. Line the base and sides with non-stick paper. This makes removing the cheesecake easier. ;\r\nMelt the butter in a medium sized pan over a very low heat. ;\r\nUsing a food processor, blitz the biscuits until finely ground. ;\r\nAlternatively, place the biscuits in a food bag and crush with a rolling pin until you have fine crumbs. ;\r\nStir the crumbs into the melted butter mixing well to ensure all the crumbs are thoroughly covered. Press the buttery crumbs into the tin. Chill. ;\r\nMelt the chocolate in a bowl over a pan of simmering water ensuring the bottom of the bowl does not come into contact with the water. Allow to cool slightly.\r\nLightly whip the double cream until it forms soft peaks. ;\r\nBeat the vanilla extract into the cream cheese until smooth and shiny. ;\r\nBeat the melted chocolate into the cream cheese then fold in the whipped cream. ;\r\nPour the cheesecake mixture over the biscuit base and smooth the top. ;\r\nChill for at least two hours and preferably overnight.'),
(2, 1, 'Sticky Ginger Cake with Tangy Lemon Icing', 'img/recipe02.jpg', 'Ginger Cake', 'Ok, so I know that this is my second sweet recipe in a row, but I’ve been planning to post the recipe for this Sticky Ginger Cake with Lemon Drizzle Icing since last year and I can’t wait any longer! A year ago, this cake was on my list. But I got carried away posting so many other gorgeous autumn recipes such as my Old Fashioned Baked Rice Pudding and my Brandied Apple Custard, that before I knew it, Christmas was fast approaching, and I realised I had missed my moment.', 1, '1 h 30 min', '110 g butter ;\r\n110 g dark brown sugar ;\r\n210 g golden syrup (use maple syrup if golden syrup is not available) ;\r\n50 g treacle (or molasses) ;\r\n3-4 balls stem ginger diced small ;\r\n200 g oats ;\r\n135 g plain flour ;\r\n2 teaspoons baking powder ;\r\n½ teaspoon each mixed spice (cinnamon and ginger)', 'Pre heat the oven to 140°C (130°C fan)\r\nGrease and line a 20 x 23cm (7½ x 8½ inch) dish. ;\r\nPlace the wet ingredients into a small saucepan and heat gently until the butter has melted. Do not allow to simmer. ;\r\nCombine the dry ingredients.\r\nMix the wet ingredients into the dry ingredients then gently mix in the eggs and milk. ;\r\nPour into the baking dish, place in the oven and bake for 1h or until the cake springs back when you press the top.\r\nAllow to cool in the dish. ;\r\nThis cake gets moister and more gorgeous with time. If you can bare to, wrap it in foil and leave for up to a week before you eat it. ;\r\nBefore serving, mix the icing sugar with about ½ a tablespoon of lemon juice and drizzle over the cake. Sprinkle with some finely grated lemon zest.'),
(3, 1, 'Pecan Pie with Caramel Sprinkles', 'img/recipe03.jpg', 'Pecan Pie', 'Sweet, rich and caramelly, filled with creamy, soft pecans and topped with toasted, praline like nuts, this pecan pie is quick and easy to make. A gorgeous autumn dessert.\r\nI love pecan pie. I know it’s American and I’m British born and bred, but that bothers me not a jot. The crumbly flaky pastry filled with soft, creamy nuts encased in a sweet, rich, caramelly goo is gorgeous. The toasted, praline like pecans on the surface make the whole thing sing. This has to be one of my favourite autumn desserts.', 4, '55 min', 'Enough pastry to line a 23cm (9 inch) tart tin/pie dish ;\r\n60 g (¼ cup) melted butter ;\r\n300 g (1½ cups) soft light brown sugar\r\n2 tablespoons milk ;\r\n1 tablespoon flour ;\r\n1 teaspoon vanilla extract ;\r\n2 eggs ;\r\n110 g (1 cup) pecan halves', 'Line the tart tin in your usual way (I often use shop bought pastry for this) place in the fridge and chill for at least half an hour. ;\r\nMix together the butter sugar milk flour and vanilla extract. Stir in the eggs then stir in the pecan halves. ;\r\nPour the pecan mixture into the unbaked pastry case and bake at 180⁰C (350 F) for 45 minutes.'),
(4, 1, 'Peach Cobbler with Brandy', 'img/recipe04.jpg', 'Peach Cobbler', 'This morning I left Dan snoring in bed. It’s a Saturday and I love that lazy feeling where you wake up, check your alarm and realise that it’s 8 o’clock and that you have actually managed to sleep through your normal 6.30 am get up time. I spent the next half hour listening to the wind and the birds and thinking of something and nothing, coming in and out of sleep – my Saturday morning treat. This morning my thoughts morphed slowly from some photo’s I wanted to take of the garden, to my 4 year old nieces birthday to a peach cobbler I was eager to make. ', 2, '50 min', '6 peaches halved (stoned and sliced) ;\r\n40 g light brown sugar ;\r\n½ teaspoon vanilla extract ;\r\n1/8 teaspoon cinnamon ;\r\n175 g self raising flour (I use a mix of white and wholemeal) ;\r\n100 g butter from the fridge ;\r\n50 g light brown sugar ;\r\n40 g chopped nuts or seeds (I particularly like pecans or mixed seeds) ;\r\nPinch of salt ;\r\n5 tablespoons very cold water', 'Preheat the oven to 190°C. ;\r\nPut the peaches and vanilla sugar and cinnamon in the baking dish then toss together and place in the oven for 15 minutes. ;\r\nRub the butter into the flour using your fingertips. When all the butter is incorporated stir in the remaining ingredient. Now add the water slowly (as you may not need all of it) using your hands to bring the dough together into a ball. ;\r\nWhen the peaches have had their 15 minutes, remove them from the oven, give them a little stir and place balls of the dough on top of the peaches. I like to make about 12 small dough balls although 6 big ones works equally well. ;\r\nReturn the dish to the oven for 15 to 20 minutes. Cooking time will vary slightly depending on the size of the balls and each individual oven. When the balls are golden brown and peach juices are bubbling up at the side of them then remove the cobbler from the oven. Serve hot, warm or cold with cream or ice cream.'),
(5, 1, 'Healthier Low-Sugar Apple Crumble', 'img/recipe05.jpg', 'Apple Crumble', 'At this time of year, in my part of the world, there are apples everywhere. You only have to walk down the street and you will pass a box, basket or bag of them with a sign next to them urging you to help yourself. People are giving them away left, right and centre. Not having the pleasure of owning an apple tree myself, I am a very willing recipient of them.\r\nTo me, an apple cooking is the ubiquitous smell of autumn, and I often have something apple based in the fridge for most of the season. For some reason, each year I tend to hone in on one item. Some years it may be a pie, other years it’s apple butter, similar to apple sauce but more heavily spiced and cooked for much longer so that you end up with a smooth, dark, spicy spread that is gorgeous on bread or stirred into cake batters.', 4, '55 min', '4 medium sized cooking apples ;\r\n90 g granulated sugar ;\r\n½ teaspoon cinnamon ;\r\n2 tablespoons level flour ;\r\n75 g unsalted butter ;\r\n165 g plain flour (wholemeal or white your choice) ;\r\n55 g rolled oats ;\r\n110 g sugar ;\r\n70 g finely chopped nuts ;\r\n½ teaspoon cinnamon ;\r\nPinch of salt', 'Preheat the oven to 200°C ;\r\nPeel and core the apples then slice or dice to your preferred size (I go for about a 2cm square dice, if you prefer big chunks of apple cut them into larger chunks or thicker slices). Add the sugar and cinnamon, and the flour if you don’t want the apples to be too juicy. Stir together and place into your dish (see notes) pouring over any sugar cinnamon mixture that doesn’t cling to the apples. ;\r\nMelt the butter on the hob or in the microwave. ;\r\nMix the rest of the ingredients together then stir in the melted butter. ;\r\nNow stir in 50ml of cold water. The mixture should look clumpy and all the flour and oats should be damp. ;\r\nSprinkle the topping over the fruit then place in the oven and cook for 35-40 minutes. The topping should be golden and the apples soft and gently bubbling.'),
(6, 1, 'Chocolate Orange Cupcakes', 'img/recipe06.jpg', 'Chocolate Orange Cupcakes', 'These chocolate orange buns will be loved by kids and adults alike. They are quick, easy and impressive.\r\nLast weekend was one of our closest friend’s daughter’s first birthdays. Any first birthday deserves to be celebrated but here we had a special reason to party. This little girl has been through the mill in the past year. Born incredibly early she has been in and out of hospital since her arrival, has undergone surgery and spent many a day/week/month wired to machines and fed through tubes. Despite this I have never known a baby with such a ready, fantastic and infectious giggle.', 3, '40 min', '225 g butter ;\r\n175 g caster sugar ;\r\n50 g brown sugar ;\r\n4 eggs ;\r\n175 g self-raising flour ;\r\n50 g cocoa ;\r\n2 teaspoons baking powder ;\r\nZest of two oranges ;\r\n200 g icing sugar sieved ;\r\n150 g soft butter ;\r\n100 g plain chocolate ;\r\n1-2 tablespoons orange juice ;\r\n1 Terry’s Chocolate Orange', 'Preheat the oven to 170⁰C. ;\r\nBeat together the butter and sugar.\r\nBeat in the eggs one at a time adding a little of the flour if the mixture splits. ;\r\nSieve in the remaining dry ingredients, add the orange zest and stir together ensuring you do not over-beat the mixture. ;\r\nSpoon into the bun cases. ;\r\nBake for 20 minutes. Ensure the buns are fully cooked before you remove them. A skewer inserted into the center should come out clean. Alternatively, the bun should spring back when you press the top gently. ;\r\nMelt the chocolate. The easiest way to do this is to heat it gently in the microwave. I put it on rapid defrost and it takes about 1 minute. Make sure that you stir it every 15 seconds or so. This will aid the melting and ensure it doesn’t burn. ;\r\nWhilst the chocolate is cooling beat (or whisk if you dare) together the icing sugar, butter and orange juice or liqueur. ;\r\nAdd the cooled chocolate and beat together once more. ;\r\nOnce the buns have totally cooled place a small spoonful of the icing onto each bun pressing a segment of chocolate orange into each little mound of icing.'),
(7, 1, 'Classic German Cheesecake with Quark', 'img/recipe07.jpg', 'Cheesecake with Quark', 'If you’ve ever eaten cheesecake in Germany, you probably realized with the first bite that it’s a little different than cheesecakes made with cream cheese (like the New York cheesecake typically found in the United States).\r\nNope! It was more than likely made with Quark cheese, which is a staple component of traditional and authentic German cheesecake recipes.\r\nQuark is a fresh, creamy, un-aged cheese popular in Germany and elsewhere in Europe. It has a texture and consistency similar to Greek yogurt but it’s not tart like yogurt.', 1, '1 h 30 min', '4 egg whites ;\r\n3/4 Cup [400g] heavy cream ;\r\n4 1/2 Cups [1000g] Quark (plain) ;\r\n4 egg yolks ;\r\n3/4 Cup [150g] sugar ;\r\n1/4 Cup [50g] vanilla sugar ;\r\n1/2 Cup [70g] corn starch ;\r\n4 TBSP lemon juice ', 'Preheat oven to 350F/175C. ;\r\nBeat heavy cream to stiff peaks using a hand or stand mixer with the whisk attachment. Set aside. ;\r\nSeparate eggs and set egg yolks aside.\r\nBeat egg whites to stiff peaks using a hand or stand mixer with the whisk attachment. Set aside. ;\r\nAdd Quark, sugar, vanilla sugar, egg yolks, lemon juice, and corn starch to a medium sized mixing bowl. Stir to combine using a whisk. ;\r\nCarefully fold the heavy cream and then the egg whites into the batter. ;\r\nPour batter into a prepared springform pan. ;\r\nBake cheesecake for 60-70 minutes. If it starts turning too brown, cover with foil. ;\r\nTurn off oven, open the door a little, and let the cheesecake sit for another 10-15 minutes. '),
(8, 1, 'Easy German Lebkuchen Recipe', 'img/recipe08.jpg', 'German Lebkuchen', 'Often referred to as Germany’s version of gingerbread, Lebkuchen is a scrumptious baked treat that has become part of every German home’s Christmas tradition.\r\nThese soft, flourless cookies are filled with ground hazelnuts and almonds, candied citrus, and topped with chocolate or sugar glaze.\r\n\r\nIf you’re looking for an easy Nürnberger Elisenlebkuchen recipe, keep reading to learn how to make these delicious German iced gingerbread Christmas cookies. They’re a German Christmas favorite!', 2, '1 h', '2 TBSP cinnamon ;\r\n3/4 tsp cloves  ;\r\n1/2 tsp coriander  ;\r\n1/2 tsp cardamom ;\r\n1/2 tsp anise  ;\r\n1/2 tsp ginger ;\r\n1/4 nutmeg (or mace)  ;\r\n8 TBSP zest (5-7 lemons and 5-7 oranges) ; \r\n1 cup [198g] sugar ;\r\n3/4 cup [170ml] water ;\r\n1  1/2 cups [213g] whole almonds ;\r\n1  1/2 cups [213g] whole hazelnuts  ;\r\n1/2 cup (100g) brown sugar (lightly packed) ;\r\n1/4 tsp baking powder  ;\r\n1/8 tsp salt  ;\r\n1/2 cup [60g] candied zest   ;\r\n2 TBSP Lebkuchen Spice Mix  ;\r\n1/8 cup honey ;\r\n2 eggs', 'Combine the ground spices in a small bowl or jar. ;\r\nCover and set aside. ;\r\nThis recipe makes a little more spice mix than you need for these cookies. Feel free to add more spice mix to the cookies if you\'d like a stronger flavor. ;\r\nWash oranges and lemons. ;\r\nZest the citrus using a microplane. ;\r\nHeat water and sugar in a small saucepan over medium high heat. ;\r\nAdd zest and stir. ;\r\nBring to a low boil and simmer for 10 minutes. ;\r\nStrain out the liquid and let the candied zest cool in a small bowl. ;\r\nCover with plastic wrap and store in the fridge until you\'re ready to use it.\r\nThis recipe will likely make a little more candied zest than you need for these cookies. Feel free to add more if you\'d like a stronger flavor. ;\r\nUse a food processor to grind the almonds and hazelnuts until they\'re like crumbs. (But be careful that you don\'t grind so long that they turn into nut butter! It\'s ok if you have some larger nut chunks.They don\'t all have to be the same size.) Set ground nuts aside. ;\r\nAdd the brown sugar, Lebkuchen Spice Mix, baking powder, and salt to a mixing bowl (or the food processor or the bowl of a stand mixer). Mix with a whisk or spoon until combined'),
(9, 1, 'Simple Vanilla Cupcake Recipe', 'img/recipe09.jpg', 'Vanilla Cupcake', 'I mentioned a couple weeks ago that I’d be bringing you some new basic favorites and I started with my easy moist chocolate cake. Today, we are talking about these moist vanilla cupcakes and I’m pumped! One of the things that I’m always messing with is vanilla cake/cupcakes. It’s the never ending quest for all the best versions. I’m a believer that if you don’t have a good vanilla cake, you have NOTHING! Ok, dramatic, but it’s like the “tell”. If you don’t have a good vanilla, can anything else really be that good? There are so many ways to vary a vanilla cake and I want the best of all of them! I’m greedy like that. Plus, I know not every has the same idea of the perfect cupcake, so I like to have options.', 3, '30 min', '2 1/2 cups (325g) all purpose flour ;\r\n2 cups (414g) sugar ;\r\n3 tsp baking powder ;\r\n1 tsp salt ;\r\n1 cup (240ml) milk ;\r\n1/2 cup (120ml) vegetable oil ;\r\n1 tbsp vanilla extract ;\r\n2 large eggs ;\r\n1 cup (240ml) water ;\r\n1/2 cup (112g) salted butter, room temperature  ;\r\n1/2 cup (95g) shortening ;\r\n4 cups (460g) powdered sugar ;\r\n1 1/2 tsp vanilla extract ;\r\n2–3 tbsp (30-45ml) water or milk', 'Preheat oven to 350°F (176°C) and prepare a cupcake pan with liners. ;\r\nAdd the flour, sugar, baking powder and salt to a large mixer bowl and combine. Set aside. ;\r\nAdd the milk, vegetable oil, vanilla extract and eggs to a medium sized bowl and combine. ;\r\nAdd the wet ingredients to the dry ingredients and beat until well combined. ;\r\nSlowly add the water to the batter and mix on low speed until well combined. Scrape down the sides of the bowl as needed to make sure everything is well combined. Please note that the batter will be very thin. ;\r\nFill the cupcake liners about half way and bake for 15-17 minutes, or until a toothpick comes out with a few moist crumbs. ;\r\nRemove the cupcakes from oven and allow to cool for 2 minutes, then remove to a cooling rack to finish cooling. ;\r\nTo make the frosting, combine the butter and shortening in a large mixer bowl and mix until smooth. ;\r\nAdd 2 cups of powdered sugar and mix until smooth. ;\r\nAdd the vanilla extract and 1 tablespoon of water or milk and mix until smooth.\r\nAdd remaining powdered sugar and mix until smooth. ;\r\nAdd remaining water or milk as needed and mix until smooth. ;\r\nPipe the frosting onto the cupcakes. '),
(21, 1, 'Lemon Cheese Cake Classical Recipe', 'img/mockup2.jpg', 'Lemon Cheese Cake', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. \r\nExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1, '55 min', '110g digestive biscuits;\r\n50g butter;\r\n25g light brown soft sugar;\r\n350g mascarpone;\r\n75g caster sugar;\r\n1 lemon, zested;\r\n2-3 lemons, juiced (about 90ml)', 'Crush the digestive biscuits in a food bag with a rolling pin or in the food processor. Melt the butter in a saucepan, take off heat and stir in the brown sugar and biscuit crumbs.;\r\nLine the base of a 20cm loose bottomed cake tin with baking parchment. Press the biscuit into the bottom of the tin and chill in the fridge while making the topping.;\r\nBeat together the mascarpone, caster sugar, lemon zest and juice, until smooth and creamy. Spread over the base and chill for a couple of hours.'),
(22, 1, 'Dark Chocolate Fondant', 'img/mockup3.jpg', 'Chocolate Fondant', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. \r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 3, '1 h 30 min', '50g melted butter, for brushing;\r\ncocoa powder, for dusting;\r\n200g good-quality dark chocolate, chopped into small pieces;\r\n200g butter, in small pieces;\r\n200g golden caster sugar;\r\n4 eggs and 4 yolks;\r\n200g plain flour;\r\nCaramel sauce (see \'Goes well with\') and vanilla ice cream or orange sorbet, to serve', 'Gently melt chocolate chunks and cubed butter, ideally using a double boiler (bowl over a pan with simmering water) or in the microwave.;\r\nIn a bowl, vigorously combine sugar with 4 whole eggs until you get a smooth texture paler color. You may use a food processor.;\r\nSlowly pour chocolate – butter mix in sugar – egg preparation continuously combining.;\r\nAdd flour, a pinch of salt (optional) and combine. That\'s all.;\r\nPour into buttered ramekins or muffin pan and set in the refrigerator 1 hour in the.;\r\nDuring your meal, preheat your oven to 200°C/390°F.\r\nBake the ramekins for 9 to 10 minutes at 200°C/390°F. Fondants are ready when the edges are cooked and the center is molten under a more or less cooked mini crust. Each oven being different, make a first batch, take one out and taste, and note the perfect baking time for you.;\r\nServe immediately and eat warm.refrigerator.\r\n'),
(30, 1, 'Russian Strawberry Pancakes with Cream', 'img/mockup1.jpg', 'Russian Strawberry Pancakes', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 2, '45 min', '400 grams or 2 cups farmer\'s cheese;\r\n1 egg;\r\n2 teaspoons bourbon vanilla sugar;\r\npinch a of salt;\r\n1/2 teaspoon baking soda;\r\n1/2 teaspoon lemon juice;\r\n5 tablespoons wheat flour;\r\n1-2 tablespoons brown sugar (optional);\r\n2-3 tablespoons vegetable oil to fry (I use sunflower oil);\r\nextra flour for dredging;\r\n300 grams or 1 1/2 cups strawberries, quartered;\r\n4 tablespoons brown sugar;\r\n2 teaspoons lemon juice;\r\n1 vanilla pod;\r\n2 teaspoons wheat flour', 'Make the sauce: In a saucepan, combine quartered strawberries, brown sugar and lemon juice. Cut the vanilla pod lengthwise and scrub the seeds, adding both the pod and the seeds to the pot. Bring to a boil over medium-high heat, stirring occasionally. Lower the heat and place a couple tablespoons strawberry juice in a small bowl. Add flour and mix well. Add the strawberry juice-flour mixture to the sauce and stir well. Cook for about 8-10 minutes, stirring occasionally, until thickened and reduced in volume. Discard the vanilla pod once the sauce is ready. Refrigerate in a sealed container for one week.;\r\nIn a large bowl, combine farmers\'s cheese, egg, bourbon vanilla sugar and salt. Use a fork to break the farmer\'s cheese if needed. In a spoon, combine baking soda with lemon juice and wait until it bubbles up, then add to the mixture. Add sugar if desired. Gradually add flour, until the mixture is soft but not too thin.;\r\nHeat a large frying pan over medium heat and add a lug of vegetable oil. Prepare a well-floured surface to place the syrniki on (I use a big plate). Take a tablespoon of the batter and put it in your dry and well-floured hands. Form a ball and press it to form a patty. Continue with the rest of the batter.;\r\nFry syrniki for about 5 minutes each side, covering the pan in the end to make them softer and juicier. Serve with strawberry vanilla sauce or any other topping of your choice. Enjoy!\r\n'),
(26, 1, 'Low Sugar Kiss with Raspberry Filling', 'img/mockup4.jpg', ' Kiss with Raspberry', 'Nam tempor a eros auctor pretium. Curabitur ornare arcu vel velit tincidunt varius.\r\nNam imperdiet blandit neque ac imperdiet. Proin elementum lacus et rutrum pellentesque. Aliquam eget urna pulvinar diam sagittis dignissim quis at odio. Nulla ultrices enim ac orci placerat vestibulum sit amet at diam. Aliquam tincidunt consequat turpis, quis rhoncus diam ullamcorper sit amet. Pellentesque a ligula sed lectus lobortis molestie. Aliquam scelerisque, orci sit amet sagittis ultricies, neque arcu semper velit, et malesuada lectus risus eu quam. \r\nInteger urna purus, bibendum vel elementum in, tincidunt in tortor.', 2, '1 h', '2 cups dairy-free chocolate chips (see Chocolate Tips in post above);\r\n1 tablespoon coconut oil (can sub sustainable palm oil for coconut-free);\r\n⅛ teaspoon salt (optional); 5 egg whites; Vanilla sugar', 'Select a plastic funnel the size of the kiss you wish to make.;\r\nDecide if you want it plain or with nuts, peanut butter,\r\ncaramel, white chocolate, Rice Krispies, etc.;\r\nMelt enough Hershey\'s chocolate bars to make your kiss in a\r\ndouble boiler being careful not to scorch it.;\r\nPlug end of funnel with a mini marshmallow and rest it in a\r\nsturdy cup (coffee cup is great).;\r\nAdd fillers, if desired, to melted chocolate and pour into\r\nfunnel. Tap the funnel gently to make sure no air is trapped.;\r\nCool at room temperature for several hours. Tap funnel and the'),
(28, 1, 'Peanut Cream Low Sugar Banana Pie', 'img/mockup5.jpg', 'Peanut Cream Banana Pie', 'Nam imperdiet blandit neque ac imperdiet. Proin elementum lacus et rutrum pellentesque. Aliquam eget urna pulvinar diam sagittis dignissim quis at odio. Nulla ultrices enim ac orci placerat vestibulum sit amet at diam. Aliquam tincidunt consequat turpis, quis rhoncus diam ullamcorper sit amet. Pellentesque a ligula sed lectus lobortis molestie. Aliquam scelerisque, orci sit amet sagittis ultricies, neque arcu semper velit, et malesuada lectus risus eu quam. \r\nNam tempor a eros auctor pretium. Curabitur ornare arcu vel velit tincidunt varius.', 4, '1 h', '110 g butter ;\r\n110 g dark brown sugar ;\r\n210 g golden syrup (use maple syrup if golden syrup is not available) ;\r\n50 g treacle (or molasses) ;\r\n3-4 balls stem ginger diced small ;\r\n200 g oats ;\r\n135 g plain flour ;\r\n2 teaspoons baking powder ;\r\n½ teaspoon each mixed spice (cinnamon and ginger)', 'Pre heat the oven to 140°C (130°C fan)\r\nGrease and line a 20 x 23cm (7½ x 8½ inch) dish. ;\r\nPlace the wet ingredients into a small saucepan and heat gently until the butter has melted. Do not allow to simmer. ;\r\nCombine the dry ingredients.\r\nMix the wet ingredients into the dry ingredients then gently mix in the eggs and milk. ;\r\nPour into the baking dish, place in the oven and bake for 1h or until the cake springs back when you press the top.\r\nAllow to cool in the dish. ;\r\nThis cake gets moister and more gorgeous with time. If you can bare to, wrap it in foil and leave for up to a week before you eat it. ;\r\nBefore serving, mix the icing sugar with about ½ a tablespoon of lemon juice and drizzle over the cake. Sprinkle with some finely grated lemon zest.'),
(29, 1, 'Wonderful Blueberry Homemade Cheesecake', 'img/mockup6.jpg', 'Blueberry Cheesecake', 'This show-stopping blueberry swirl cheesecake needs to come with a warning label. Really, it does. Cheesecake so creamy, a graham cracker crust so buttery, and blueberry swirls sooo swirly. You will not be able to stop at one sliver. Dangerous, I tell ya!\r\nThe best (most dangerous?) part: you can easily use frozen blueberries in this cheesecake recipe– making this a fruity dessert you can enjoy year round.\r\nDon’t be intimidated by cheesecake. That sounds hilarious when you say it out loud, but seriously! I know making a cheesecake sounds tricky, but it really is not. As long as you read through the directions ahead of time – you can handle it.', 4, '55 min', '2 teaspoons (6g) cornstarch;\r\n1 teaspoon fresh lemon juice;\r\n1 Tablespoon (15ml) warm water;\r\n2 cups (380g) fresh or frozen blueberries;\r\n2 Tablespoons (25g) granulated sugar;\r\n1 and 1/2 cups (150g) graham cracker crumbs (about 10 full sheet graham crackers);\r\n6 Tablespoons (87g) unsalted butter, melted;\r\n1/3 cup (67g) granulated sugar;\r\n24 ounces (675g) full-fat cream cheese, softened to room temperature;\r\n1 cup (200g) granulated sugar;\r\n1 cup (240g) full-fat sour cream (or yogurt), at room temperature;\r\n2 teaspoons pure vanilla extract;\r\n3 large eggs, at room temperature', 'Adjust oven rack to the lower third position and preheat the oven to 350°F (177°C). Spray a 9-inch springform pan with nonstick cooking spray. Set aside.;\r\nMake the blueberry sauce first: Whisk the cornstarch, lemon juice, and warm water together in a small bowl until the cornstarch has dissolved. Set aside. Warm the blueberries and sugar together in a small saucepan over medium heat. Stir continuously for 3 minutes until the blueberry juices begin to release. Add the cornstarch mixture and continue to stir for another 2-3 minutes, smashing some blueberries as you go. The mixture will start to thicken. Remove from heat and put the mixture through a fine mesh strainer into a small bowl (to separate the cooked berries and the juice). Keep separated and set both (the cooked berries and the juice) aside.;\r\nMake the graham cracker crust: Click here for some handy graham cracker crust tips before you get started. Mix the graham cracker crumbs, melted butter, and granulated sugar together in a medium bowl until combined. Press into the bottom of the prepared pan and only slightly up the sides. The crust will be thick. Wrap aluminum foil on the bottom and tightly around the outside walls of the springform pan, as shown in photos above. Bake the crust for 7 minutes. Allow to slightly cool as you prepare the filling.;\r\nMake the filling: Using a handheld or stand mixer fitted with a paddle attachment, beat the cream cheese and granulated sugar together on medium speed in a large bowl – about 3 full minutes until the mixture is smooth and creamy. Add the sour cream and vanilla, beat until combined. On low speed, add the eggs one at a time, beating after each addition until just blended. Do not overmix the filling after you have added the eggs.;\r\nPour the filling into the cooled crust. Drop spoonfuls of the smooth blueberry sauce onto the batter.  Using a knife, gently swirl as shown in the photo above. If you have leftover blueberry sauce, mix it with the cooked blueberries you set aside. Save for topping the baked cheesecake.;\r\nPlace the springform pan into a large roasting pan and place into the oven. Fill with about 1 inch of hot water. The foil wrapped around the pan will prevent water from leaking inside.;\r\nClick here to read more about my cheesecake water bath.;\r\nBake for 50-60 minutes or until the center is almost set.* Turn the oven off and open the door slightly. Let the cheesecake sit in the oven for 1 hour. Remove from the oven and allow to cool completely at room temperature. Refrigerate for at least 6 hours or overnight (preferred). Loosen the cheesecake from the rim of the pan and remove the rim. Cut into slices and serve chilled. Top with remaining chunky blueberry sauce, if desired. Cover leftover cheesecake and store in the refrigerator for up to 4 days.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
