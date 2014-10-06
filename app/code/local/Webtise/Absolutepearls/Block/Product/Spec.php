<?php

class Webtise_Absolutepearls_Block_Product_Spec  extends Mage_Core_Block_Template
{

	public function __construct()
	{
		parent::__construct();
		$this->setTemplate('catalog/product/spec.phtml');
	}


	public function getAttributes()
	{
			$current_product = Mage::registry('current_product');
			$setId = $current_product->getAttributeSetId(); // Attribute set Id
			$groups = Mage::getModel('eav/entity_attribute_group')
		        ->getResourceCollection()
		        ->setAttributeSetFilter($setId)
		        ->setSortOrder()
		        ->load();

	        $attributeCodes = array();
	        foreach ($groups as $group) {
	            if($group->getAttributeGroupName() == 'Product Spec'){ // set name
	            //$groupName          = $group->getAttributeGroupName();
	            //$groupId            = $group->getAttributeGroupId();
	
	            $attributes = Mage::getResourceModel('catalog/product_attribute_collection')
	                ->setAttributeGroupFilter($group->getId())
	                ->addVisibleFilter()
	                ->checkConfigurableProducts()
	                ->load();
	                if ($attributes->getSize() > 0) {
	                    foreach ($attributes->getItems() as $attribute) {
	                        /* @var $child Mage_Eav_Model_Entity_Attribute */
	                        $attributeCodes[] = $attribute;                     
	                    }
	                } 
	          }
	        }
	        
	        return $attributeCodes;
	}
	
	public function getAttributeValue($attribute)
	{
		$current_product = Mage::registry('current_product');
		return $current_product->getAttributeText($attribute);
		//$productId = $current_product->getId();
		//return Mage::getResourceModel('catalog/product')->getAttributeRawValue($productId, $attribute, 0);

	}
	
	
	
    

}