<?php

$this->startSetup();

$this->run("CREATE TABLE `webtise_promos` (
  `promo_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `style` varchar(255) DEFAULT NULL,
  `collection` varchar(255) DEFAULT NULL,
  `button` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`promo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;


INSERT INTO `webtise_promos` (`promo_id`, `title`, `sub_title`, `image`, `style`, `collection`, `button`, `order`, `link`)
VALUES
	(2, NULL, NULL, 'pendant-text.jpg', 'two-square', 'home-first', NULL, 1, NULL),
	(3, NULL, NULL, 'pendant.jpg', 'two-square last', 'home-first', NULL, 1, NULL),
	(4, 'Pearl Neckalaces', NULL, 'ring.jpg', 'two-square', 'home-first', NULL, 3, NULL),
	(5, NULL, NULL, 'necklace_text.jpg', 'two-square  last', 'home-first', NULL, 4, NULL),
	(6, NULL, NULL, 'earing-text.jpg', 'two-square', 'home-second', NULL, 1, NULL),
	(7, NULL, NULL, 'earings.jpg', 'two-square last', 'home-second', NULL, 2, NULL),
	(8, NULL, NULL, 'bracelet.jpg', 'two-square', 'home-second', NULL, 3, NULL),
	(9, NULL, NULL, 'bracelet-text.jpg', 'two-square last', 'home-second', NULL, 4, NULL),
	(11, NULL, NULL, 'Slice-10.png', 'full-width mar-bottom', 'home-third', NULL, 1, NULL),
	(12, NULL, NULL, 'Slice-15.png', 'two-square', 'home-third', NULL, 2, NULL),
	(13, NULL, NULL, 'Slice-16.png', 'two-square last', 'home-third', NULL, 3, NULL),
	(14, NULL, NULL, 'Slice-11.png', 'full-width', 'home-fourth', NULL, 1, NULL),
	(15, NULL, NULL, 'Slice-13.png', 'full-width mar-bottom', 'home-five', NULL, 1, NULL),
	(16, NULL, NULL, 'Slice-14.png', 'full-width hide-mobile', 'home-five', NULL, 2, NULL),
	(17, NULL, NULL, 'Slice-12.png', 'full-width hide-mobile mar-bottom', 'home-six', NULL, 1, NULL),
	(18, NULL, NULL, 'Slice-15.png', 'two-square', 'home-six', NULL, 2, NULL),
	(19, NULL, NULL, 'Slice-16.png', 'two-square last', 'home-six', NULL, 3, NULL);

Truncate `cms_block_store`;
TRUNCATE `cms_block`;

INSERT INTO `cms_block` (`block_id`, `title`, `identifier`, `content`, `creation_time`, `update_time`, `is_active`)
VALUES
	(3, 'Cookie restriction notice', 'cookie_restriction_notice_block', '<p>This website requires cookies to provide all of its features. For more information on what data is contained in the cookies, please see our <a href=\"{{store direct_url=\"privacy-policy-cookie-restriction-mode\"}}\">Privacy Policy page</a>. To accept cookies from this site, please click the Allow button below.</p>', '2014-09-08 11:18:05', '2014-09-08 11:18:05', 1),
	(4, 'Company info links', 'company-info-links', '<ul>\r\n<li><a href=\"about-us\">About us</a></li>\r\n<li><a href=\"pearl%20buying%20tips\">Pearl buying tips</a></li>\r\n<li><a href=\"gift%20and%20message%20card%20service\">Gift and message card service</a></li>\r\n<li><a href=\"/testimonials\">testimonials</a></li>\r\n<li><a href=\"/certificate-of-authenticity\">certificate of authenticity</a></li>\r\n<li><a href=\"/contact-us\">contact us</a></li>\r\n<li><a href=\"/blog\">the blog</a></li>\r\n</ul>', '2014-09-08 16:15:27', '2014-09-08 16:15:27', 1),
	(5, 'Home Banner', 'home-banner', '<p><img title=\"main banner\" src=\"{{media url=\"wysiwyg/home/main-banner.png\"}}\" alt=\"home bannner\" /></p>', '2014-09-08 19:15:38', '2014-09-08 19:16:09', 1),
	(6, 'Customer Services Links', 'customer-services-links', '<ul>\r\n<li><a href=\"/t-and-c\">T&amp;C&rsquo;s</a></li>\r\n<li><a href=\"/online-ordering-and-security\">Online ordering &amp; security</a></li>\r\n<li><a href=\"/delivery\">Delivery</a></li>\r\n<li><a href=\"/returns\">Returns</a>&nbsp;</li>\r\n<li><a href=\"/privacy\">Privacy</a>&nbsp;</li>\r\n<li><a href=\"/cookies\">Cookies</a></li>\r\n<li><a href=\"caring-for-your-pearls\">Caring for your pearls</a></li>\r\n<li><a href=\"/pearl-restringing-service\">Pearl re-stringing service</a></li>\r\n</ul>', '2014-09-08 21:01:32', '2014-09-08 21:01:32', 1),
	(7, 'Contact Us Links', 'contact-us-links', '<p class=\"p1\"><span class=\"s2\">e.</span><a href=\"mailto:service@absolutepearls.co.uk\"><span class=\"s1\"> service@absolutepearls.co.uk</span></a></p>\r\n<p class=\"p4\"><span class=\"s1\"><br /></span></p>\r\n<p class=\"p4\"><span class=\"s1\">t. </span><span class=\"s3\"><strong>0151 625 7688</strong></span><span class=\"s1\"> daily 8am-8pm&nbsp;</span></p>\r\n<p class=\"p5\"><span class=\"s1\">m. </span><span class=\"s3\"><strong>07803 172 096</strong></span><span class=\"s1\"> at any time</span></p>\r\n<ul>\r\n<li><a class=\"facebook\" href=\"facebook\">facebook</a></li>\r\n<li><a class=\"twitter\" href=\"twitter\">twitter</a></li>\r\n<li><a class=\"google\" href=\"google\">google</a></li>\r\n<li><a class=\"pinterest\" href=\"pinterest\">pinterest</a></li>\r\n<li><a class=\"instagram\" href=\"instagram\">instagram</a>&nbsp;</li>\r\n</ul>\r\n<p><a href=\"http://absoluteblog.com\">absoluteblog.com</a></p>', '2014-09-08 21:30:21', '2014-09-09 14:45:51', 1),
	(8, 'Security Icons', 'security-icons', '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"{{media url=\"wysiwyg/home/security-icons.png\"}}\" alt=\"\" /></p>', '2014-09-08 21:35:09', '2014-09-08 21:35:09', 1),
	(9, 'Supported Cards', 'supported_cards', '<p><img src=\"{{media url=\"wysiwyg/checkout/accept-cards.png\"}}\" alt=\"accepted cards\" /></p>', '2014-09-19 13:29:58', '2014-09-19 13:29:58', 1);

INSERT INTO `cms_block_store` (`block_id`, `store_id`)
VALUES
	(3, 0),
	(4, 0),
	(5, 0),
	(6, 0),
	(7, 0),
	(8, 0),
	(9, 1);

");

$this->endSetup();