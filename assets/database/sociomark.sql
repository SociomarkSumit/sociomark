-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2020 at 04:35 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sociomark`
--

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `imagefile1` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `imagefile1`, `title`) VALUES
(1, '20201002033052_test-image.jpg', 'Natural ways to treat PCOD');

-- --------------------------------------------------------

--
-- Table structure for table `panel_users`
--

CREATE TABLE `panel_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `country_id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel_users`
--

INSERT INTO `panel_users` (`id`, `username`, `password`, `country_id`, `role`, `status`) VALUES
(1, 'info@sociomark.in', '6a10e38e750c85dffd4b11eca0ec29357e38dca031786135bf2ac73a53ae57194c2063a73c65d39c6652c274f5622d78bbf44026987813b7c87568b2cf712d705pjNpWrVVQXr3b0dE31wrNyPGuWjaIaYbRFwQ84MhDY=', 0, 'super_admin', 's_act'),
(2, 'blog@sociomark.in', '6a10e38e750c85dffd4b11eca0ec29357e38dca031786135bf2ac73a53ae57194c2063a73c65d39c6652c274f5622d78bbf44026987813b7c87568b2cf712d705pjNpWrVVQXr3b0dE31wrNyPGuWjaIaYbRFwQ84MhDY=', 1, 'admin', 's_act'),
(3, 'admin@sociomark.in', '6a10e38e750c85dffd4b11eca0ec29357e38dca031786135bf2ac73a53ae57194c2063a73c65d39c6652c274f5622d78bbf44026987813b7c87568b2cf712d705pjNpWrVVQXr3b0dE31wrNyPGuWjaIaYbRFwQ84MhDY=', 1, 'blog_admin', 's_act');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `meta_title` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `meta_description` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `meta_keywords` varchar(500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `imagefile1` varchar(256) NOT NULL DEFAULT 'unset',
  `display_on_home` varchar(5) DEFAULT NULL,
  `slug` varchar(256) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 's_deact',
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `meta_title`, `meta_description`, `meta_keywords`, `tags`, `imagefile1`, `display_on_home`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Natural ways to treat PCOD', '<div class=\"post single\">\r\n<p align=\"justify\">Behind every thriving business, there\'s a story. The story that has creativity, dedication, hard work, good times & not so good times. When you share this story with others, people get to know you, they understand you, they relate to the brand. Considering the current circumstances, there\'s no better way to share your narrative & stand out, than \'Instagram\'.</p>\r\n<p align=\"justify\">The evolution of Instagram from a photo-sharing platform to one of the most powerful social media networks has been uplifting for both the developers and the users. You as a brand can share your story, start conversations, learn about your audience or customers and build lasting relationships. It becomes so much more when your audience discovers your products or brand in a new way or approach.</p>\r\n<p align=\"justify\">Let\'s understand how you can utilize this platform, so that your business can not only survive these difficult times but grow exponentially.</p>\r\n<h4>THE PANDEMIC UPDATE</h4>\r\n<p align=\"justify\">Restaurants are amongst the hardest hit industries in this pandemic phase. Keeping that in mind, Instagram is facilitating food orders through Stickers. They are redirecting users to apps like \'Zomato & Swiggy\', when users click on the stickers (used in stories). An initiative by the platform, to contribute in reviving the industry.</p>\r\n<p align=\"justify\">Besides the restaurants, extending support to Facebook\'s initiative of helping small businesses, all sticker packs from Facebook are available on Instagram too. Whenever one of these stickers is used on someone\'s story, all such stories are clubbed together and it allows users to identify and support small businesses. It provides a way for businesses to stay connected to the customers.</p>\r\n<img class=\"attachment-full\" title=\"Instagram For Businesses\" src=\"http://www.sociomark.in/blog/instagram-for-businesses/image1.jpg\" alt=\"Instagram For Businesses\" width=\"100%\" height=\"100%\"><br><br>\r\n<h6>SHOPPING ON INSTAGRAM</h6>\r\n<p align=\"justify\">Instagram has the power to replace your shelf space, providing customers with a new approach to discover products. Instagram Shopping gives your audience an immersive experience, allowing them to explore your storefront with a single tap. Your buyers can browse the best collections, filter by categories and make a purchase, all in one place. While announcing Facebook Shops, they also revealed the new update IG Shopping will receive soon - A new shop tab in the navigation bar, so you can get to the Shop in just one tap.</p>\r\n<h6>BEST PRACTICES TO KEEP PEOPLE ENGAGED</h6>\r\n<img class=\"attachment-full\" title=\"Instagram For Businesses\" src=\"http://www.sociomark.in/blog/instagram-for-businesses/image2.png\" alt=\"Instagram For Businesses\" width=\"100%\" height=\"100%\"><br><br>\r\n<h4>WHY BUSINESSES LOVE INSTAGRAM?</h4>\r\n<p align=\"justify\">90% of accounts follow a business on Instagram & 200M+ accounts look at a business profile each day. No matter what type of business you have; from major brands to local, family-run shops, businesses are driving proven results with their IG strategy.</p>\r\n<p align=\"justify\">Modern Mattress company \'Simba\' achieved a 73% higher return on ad spends, through a series of Instagram Ads with relevant and relatable messaging. Know more about this, through this case study - <a href=\"https://business.instagram.com/success/simba\" target=\"_blank\">https://business.instagram.com/success/simba</a></p>\r\n<p align=\"justify\">Furthermore, people contact businesses through ‘Instagram Direct’ every day. It allows people to go from visual discovery to learning more about the businesses; they stumbled upon, in a few taps. The latest update allows the users to utilise \'Direct\' even on their desktop, not only on phone.</p>\r\n<h6>EFFECTIVE USAGE OF STORIES</h6>\r\n<p align=\"justify\">It\'s a kind of secondary, exclusive feed of content that you provide. Stories are a source of openness, showcasing the brand\'s identity with creativity, humour & brevity. With even Twitter getting into the wagon, it\'s becoming a prime feature for a variety of campaigns for businesses.</p>\r\n<p align=\"justify\">Considering the time-sensitive nature and creative freedom, there\'s a lot more that a brand can do to utilize this format. Some of the types of stories that are popular with brands of all shapes & sizes -</p>\r\n<ul>\r\n<ul>\r\n<li>How-To\'s & Tutorials</li>\r\n</ul>\r\n</ul>\r\n<br>\r\n<ul>\r\n<ul>\r\n<li>User-Generated Content or UGC: Asking the users to share their experience/usage of the brand, with the brand hashtag and posting their point of view through stories or even posts</li>\r\n</ul>\r\n</ul>\r\n<br>\r\n<ul>\r\n<ul>\r\n<li>\'Behind the Scenes\' footage of your upcoming project or old project</li>\r\n</ul>\r\n</ul>\r\n<br>\r\n<ul>\r\n<ul>\r\n<li>Time-sensitive offers or deals for the customers</li>\r\n</ul>\r\n</ul>\r\n<br>\r\n<ul>\r\n<ul>\r\n<li>Special Announcements regarding the brand</li>\r\n</ul>\r\n</ul>\r\n<br>\r\n<h4>IDEAL APPROACH FOR LEVERAGING THE PLATFORM</h4>\r\n<p align=\"justify\">Concerning the current outbreak, people are strategizing with short term, temporary growth tactics. It is understandable, as they care about their business and don\'t want it dead. However, a 60/40 split between Brand building and Sales delivers maximum effectiveness.</p>\r\n<p align=\"justify\">Brand building is your strategy for short term recovery & long-term growth. There\'s no better way to build a community than platforms like Instagram. The key aspects or levels of differentiation, you should consider in building lasting relationships on the platform are -</p>\r\n<ul>\r\n<ul>\r\n<li>Tell your story by building for feed</li>\r\n</ul>\r\n</ul>\r\n<br>\r\n<ul>\r\n<ul>\r\n<li>Own moments on the Internet</li>\r\n</ul>\r\n</ul>\r\n<br>\r\n<ul>\r\n<ul>\r\n<li>Build for the community (Ideas that bring people together)</li>\r\n</ul>\r\n</ul>\r\n<br>\r\n<p align=\"justify\">Whether it\'s a story or a post you\'re figuring out, catch the eye of the audience with the following approach of creating content for businesses; also make sure you switch to a business profile to better understand the insights.</p>\r\n<ul>\r\n<ul>\r\n<li>Stand out with your feed, highlight your products</li>\r\n</ul>\r\n</ul>\r\n<br>\r\n<ul>\r\n<ul>\r\n<li>Put out content regularly, make it relevant for the followers by connecting it to the events happening around the world</li>\r\n</ul>\r\n</ul>\r\n<br>\r\n<ul>\r\n<ul>\r\n<li>Responding to the direct messages helps you in building a strong community, making it relatable to the audience</li>\r\n</ul>\r\n</ul>\r\n<br>\r\n<ul>\r\n<ul>\r\n<li>Get creative and try something new with the stories</li>\r\n</ul>\r\n</ul>\r\n<br>\r\n<ul>\r\n<ul>\r\n<li>Bring your products to life using stories & highlights</li>\r\n</ul>\r\n</ul>\r\n<br>\r\n<ul>\r\n<ul>\r\n<li>Stay consistent with fonts & colour palette</li>\r\n</ul>\r\n</ul>\r\n<br>\r\n<ul>\r\n<ul>\r\n<li>Make the most of your captions and respond to the comments</li>\r\n</ul>\r\n</ul>\r\n<br>\r\n<ul>\r\n<ul>\r\n<li>Try creating a brand-specific hashtag</li>\r\n</ul>\r\n</ul>\r\n<br>\r\n<ul>\r\n<ul>\r\n<li>Analyse your most successful posts and experiment with UGC (user-generated content)</li>\r\n</ul>\r\n</ul>\r\n<br>\r\n<ul>\r\n<ul>\r\n<li>Transform user experiences through creativity</li>\r\n</ul>\r\n</ul>\r\n<br>\r\n<p align=\"justify\">Ultimately, ‘Instagram for Business’ is a powerful approach to make use of the digital medium in tackling these unprecedented times.</p>\r\n<p align=\"justify\">If you\'re on a lookout for assistance in running your business or building your brand online, we\'ll be happy to support. You can contact us through <a href=\"mailto:business@sociomark.in\" target=\"_blank\">business@sociomark.in</a> or you can DM us on our Social Media.</p>\r\n</div>\r\n<p> </p>', 'How to leverage Instagram for building a Brand?', 'Considering the current situations, there\'s no better way to share your story & stand out, than \'Instagram', 'Instagram, Instagram Marketing, Instagram for businesses, Content Marketing, Digital Marketing', 'Instagram, Instagram Marketing, Instagram for businesses, Content Marketing, Digital Marketing', 'unset', 'yes', 'natural-ways-to-treat-polycystic-ovarian-disease-pcodhow-to-leverage-instagram-for-building-a-brand', 's_act', '2020-09-29 12:25:36', ''),
(2, 'Sociomark', '<p>Coriander or Cilantro is widely known as Dhaniya or dhansak in Sanskrit.  Traditionally, both the seeds and aerial parts of coriander are used in food preparations. Fresh leaves are used as a flavouring agent, and dried coriander seeds are used as spices in food preparation</p>\r\n<p> </p>\r\n<p><strong>Benefits of Coriander seeds or fresh leaves : </strong></p>\r\n<p> </p>\r\n<ul>\r\n<li>Coriander is extremely effective for cooling, acidity and burning sensation. It also reduces gas and improves digestion.</li>\r\n</ul>\r\n<ul>\r\n<li>Appetite increasing,  digestive and reduces dryness of eyes, mouth and vagina</li>\r\n</ul>\r\n<ul>\r\n<li>If you are feeling the heat in the body even the heatwave from menopause or sunburn or general heat because you have too much pitta (heat), then, just take one tsp coriander powder 2- 3 times a day.  It reduces heat remarkably.</li>\r\n</ul>\r\n<ul>\r\n<li>Coriander is highly beneficial in the deficiency of vitamin A, B1, B2, C and iron.</li>\r\n</ul>\r\n<ul>\r\n<li>Also,  adding coriander seed powder as a spice in your foods preparations like Daal, vegetables etc., reduces any acidity produced after eating food.</li>\r\n</ul>\r\n<p> </p>\r\n<p>Studies indicate that coriander is one of the most effective spice in terms of antioxidant properties and can be used as a natural source to develop free radical scavengers and antioxidant agents.</p>\r\n<p><strong>Watch why this Antioxidant chutney is important to include in your daily food preparations</strong></p>\r\n<p><strong> <a href=\"https://youtu.be/B4X6nfKsH7A\"><strong>https://youtu.be/B4X6nfKsH7A</strong></a><br></strong></p>\r\n<p> </p>\r\n<p>We at Ayushakti, share a mission to help people in every possible way. Even these pandemic times cannot stop us; you can consult me or our experts <strong>on phone or video</strong>. Or you can visit your nearest Ayushakti centre for a personal consultation. We will suggest diet & home remedies for <strong>maintaining your wellbeing</strong> in these difficult times. Book your consultation here <a href=\"https://rzp.io/l/bZ2M84i\">https://rzp.io/l/bZ2M84i</a></p>\r\n<p><strong>Stay Home | Stay Healthy</strong></p>\r\n<p>For more information write to us at <a href=\"mailto:info@ayushakti.com\">info@ayushakti.com</a></p>\r\n<p>You may contact us on our toll-free numbers - <a href=\"tel:18002663001\">18002663001</a> (India) & <a href=\"tel:18002800906\">+18002800906</a> (Global)</p>', 'CORIANDER –  THE BEST NATURAL ANTI OXIDANT FOR LIFE', 'In this blog, you can learn about how coriander is considered as one of the best natural antioxidants and also mentioned the benefits of coriander.', 'coriander, coriander leaves, benefits of coriander, coriander health benefits, coriander ayurveda', NULL, 'unset', 'yes', 'coriander---the-best-natural-anti-oxidant-for-life', 's_act', '2020-10-02 10:20:51', '');

-- --------------------------------------------------------

--
-- Table structure for table `thumbnail`
--

CREATE TABLE `thumbnail` (
  `id` int(11) NOT NULL,
  `imagefile1` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_users`
--
ALTER TABLE `panel_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thumbnail`
--
ALTER TABLE `thumbnail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `panel_users`
--
ALTER TABLE `panel_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `thumbnail`
--
ALTER TABLE `thumbnail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
