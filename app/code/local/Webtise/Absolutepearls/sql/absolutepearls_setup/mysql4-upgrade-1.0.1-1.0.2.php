<?php

$this->startSetup();


    // change details below:
    $attribute  = array(
        'type' => 'int',
        'label'=> 'Featured',
        'input' => 'text',
        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
        'visible' => true,
        'required' => false,
        'user_defined' => true,
        'default' => "",
        'group' => "General Information"
    );

$this->addAttribute(Mage_Catalog_Model_Category::ENTITY, 'Featured', $attribute);


$this->endSetup();