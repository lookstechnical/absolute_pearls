<?php

$this->startSetup();


    // change details below:
    $attribute  = array(
        'type' => 'text',
        'label'=> 'Seo Text',
        'input' => 'textarea',
        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
        'visible' => true,
        'required' => false,
        'user_defined' => true,
        'default' => "",
        'group' => "General Information"
    );

$this->addAttribute(Mage_Catalog_Model_Category::ENTITY, 'seo_text', $attribute);


$this->endSetup();