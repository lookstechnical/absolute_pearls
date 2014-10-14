<?php

$this->startSetup();



$this->updateAttribute(Mage_Catalog_Model_Category::ENTITY, 'seo_text', 'is_wysiwyg_enabled', 1);
$this->updateAttribute(Mage_Catalog_Model_Category::ENTITY, 'seo_text', 'is_html_allowed_on_front', 1);


$this->endSetup();