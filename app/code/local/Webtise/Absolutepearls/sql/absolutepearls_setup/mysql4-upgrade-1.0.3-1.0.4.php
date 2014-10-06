<?php

$this->startSetup();


 $this->run("
TRUNCATE `cms_block_store`;
TRUNCATE `cms_block`;


INSERT INTO `cms_block_store` (`block_id`, `store_id`)
VALUES
	(3, 0),
	(4, 0),
	(5, 0),
	(6, 0),
	(7, 0),
	(8, 1),
	(9, 1),
	(10, 1),
	(11, 1),
	(12, 1),
	(13, 1),
	(14, 1),
	(15, 1);


INSERT INTO `cms_block` (`block_id`, `title`, `identifier`, `content`, `creation_time`, `update_time`, `is_active`)
VALUES
	(3, 'Cookie restriction notice', 'cookie_restriction_notice_block', '<p>This website requires cookies to provide all of its features. For more information on what data is contained in the cookies, please see our <a href=\"{{store direct_url=\"privacy-policy-cookie-restriction-mode\"}}\">Privacy Policy page</a>. To accept cookies from this site, please click the Allow button below.</p>', '2014-09-08 11:18:05', '2014-09-08 11:18:05', 1),
	(4, 'Company info links', 'company-info-links', '<ul>\r\n<li><a href=\"about-us\">About us</a></li>\r\n<li><a href=\"pearl%20buying%20tips\">Pearl buying tips</a></li>\r\n<li><a href=\"gift%20and%20message%20card%20service\">Gift and message card service</a></li>\r\n<li><a href=\"/testimonials\">testimonials</a></li>\r\n<li><a href=\"/certificate-of-authenticity\">certificate of authenticity</a></li>\r\n<li><a href=\"/contact-us\">contact us</a></li>\r\n<li><a href=\"/blog\">the blog</a></li>\r\n</ul>', '2014-09-08 16:15:27', '2014-09-08 16:15:27', 1),
	(5, 'Home Banner', 'home-banner', '<p><img title=\"main banner\" src=\"{{media url=\"wysiwyg/home/main-banner.png\"}}\" alt=\"home bannner\" /></p>', '2014-09-08 19:15:38', '2014-09-08 19:16:09', 1),
	(6, 'Customer Services Links', 'customer-services-links', '<ul>\r\n<li><a href=\"/t-and-c\">T&amp;C&rsquo;s</a></li>\r\n<li><a href=\"/online-ordering-and-security\">Online ordering &amp; security</a></li>\r\n<li><a href=\"/delivery\">Delivery</a></li>\r\n<li><a href=\"/returns\">Returns</a>&nbsp;</li>\r\n<li><a href=\"/privacy\">Privacy</a>&nbsp;</li>\r\n<li><a href=\"/cookies\">Cookies</a></li>\r\n<li><a href=\"caring-for-your-pearls\">Caring for your pearls</a></li>\r\n<li><a href=\"/pearl-restringing-service\">Pearl re-stringing service</a></li>\r\n</ul>', '2014-09-08 21:01:32', '2014-09-08 21:01:32', 1),
	(7, 'Contact Us Links', 'contact-us-links', '<p class=\"p1\"><span class=\"s2\">e.</span><a href=\"mailto:service@absolutepearls.co.uk\"><span class=\"s1\"> service@absolutepearls.co.uk</span></a></p>\r\n<p class=\"p4\"><span class=\"s1\"><br /></span></p>\r\n<p class=\"p4\"><span class=\"s1\">t. </span><span class=\"s3\"><strong>0151 625 7688</strong></span><span class=\"s1\"> daily 8am-8pm&nbsp;</span></p>\r\n<p class=\"p5\"><span class=\"s1\">m. </span><span class=\"s3\"><strong>07803 172 096</strong></span><span class=\"s1\"> at any time</span></p>\r\n<ul>\r\n<li><a class=\"facebook\" href=\"facebook\">facebook</a></li>\r\n<li><a class=\"twitter\" href=\"twitter\">twitter</a></li>\r\n<li><a class=\"google\" href=\"google\">google</a></li>\r\n<li><a class=\"pinterest\" href=\"pinterest\">pinterest</a></li>\r\n<li><a class=\"instagram\" href=\"instagram\">instagram</a>&nbsp;</li>\r\n</ul>\r\n<p><a href=\"http://absoluteblog.com\">absoluteblog.com</a></p>', '2014-09-08 21:30:21', '2014-09-09 14:45:51', 1),
	(8, 'Security Icons', 'security-icons', '<p><img class=\"mobile-none\" src=\"{{media url=\"wysiwyg/home/security-logos.png\"}}\" alt=\"\" /><img src=\"{{media url=\"wysiwyg/home/card-logos.png\"}}\" alt=\"\" /></p>', '2014-09-08 21:35:09', '2014-10-06 11:49:28', 1),
	(9, 'Supported Cards', 'supported_cards', '<p><img src=\"{{media url=\"wysiwyg/checkout/accept-cards.png\"}}\" alt=\"accepted cards\" /></p>', '2014-09-19 13:29:58', '2014-09-19 13:29:58', 1),
	(10, 'Newsletter- Footer', 'newsletter-footer', '<p><img src=\"{{media url=\"wysiwyg/10_-off.png\"}}\" alt=\"\" /></p>\r\n<p>Sign up to recieve a 10% discount code, plus exclusive news and offers</p>', '2014-09-23 10:54:10', '2014-09-23 10:54:10', 1),
	(11, 'Customer Services', 'account-customer-services', '<ul>\r\n<li><a href=\"t-and-c\">T &amp; C</a></li>\r\n<li><a href=\"/ordering-online\">Ordering online and security</a></li>\r\n</ul>', '2014-09-24 10:04:30', '2014-09-24 10:04:30', 1),
	(12, 'Company Info', 'account-company-info', '<ul>\r\n<li><a href=\"/about-us\">About us</a></li>\r\n</ul>', '2014-09-24 10:05:08', '2014-09-24 10:05:08', 1),
	(13, 'Category Landing Page', 'category_landing', '<p>{{block type=\"absolutepearls/landing_products\" name=\"catLandingPage\" template=\"catalog/category/landing.phtml\"}}</p>', '2014-09-25 13:40:32', '2014-09-25 22:55:55', 1),
	(14, 'our promise', 'our-promise', '<h2>Our Promise</h2>\r\n<p>Free uk next day delivery<br /><a href=\"/delivery-info\">delivery info</a></p>\r\n<p>12 Month warantee &amp; certificate of authenticity<br /><a href=\"/twelve-month-warantee\">more info</a></p>\r\n<p>Free delux presentation box</p>\r\n<p>30 Day returns<br /><a href=\"/30-day-returns\">returns info</a></p>\r\n<p>Genuine cultured pearl specialists<br /><a href=\"/genuine-cultured-pearl-specialists\">more info</a></p>\r\n<p>Highest quality pearls, online value<br /><a href=\"/highest-quality-pearls\">more info&nbsp;</a></p>', '2014-10-01 12:03:03', '2014-10-01 12:03:03', 1),
	(15, 'cart-help', 'cart-help', '<div class=\"container\">\r\n<h2>Can we help?</h2>\r\n<div class=\"content\">\r\n<p>call us<br /><span class=\"tel\">0151 625 7688</span><br /><a href=\"mailto:hello@absolutepearls.co.uk%20\">hello@absolutepearls.co.uk&nbsp;</a></p>\r\n<hr />\r\n<ul>\r\n<li>\r\n<p>Free uk next day delivery<br /><a href=\"/delivery-info\">delivery info</a></p>\r\n</li>\r\n<li>\r\n<p>12 Month warantee &amp; certificate of authenticity&nbsp;<a href=\"/twelve-month-warantee\">more info</a></p>\r\n</li>\r\n<li>Free delux presentation box</li>\r\n<li>30 Day returns<br /><a href=\"/30-day-returns\">returns info</a></li>\r\n</ul>\r\n</div>\r\n</div>', '2014-10-01 12:27:05', '2014-10-01 12:40:33', 1);


");

$this->endSetup();