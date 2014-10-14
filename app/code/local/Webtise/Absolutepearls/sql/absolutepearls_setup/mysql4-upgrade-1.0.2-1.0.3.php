<?php

$this->startSetup();


 $this->run("
 
INSERT INTO `webtise_promos` (`promo_id`, `title`, `sub_title`, `image`, `style`, `collection`, `button`, `order`, `link`)
VALUES
	(20, 'home banner 1', NULL, 'main-banner.png', 'banner-img', 'home-banner', NULL, 1, '/collections.html');



");

$this->endSetup();