<?php

class Webtise_Absolutepearls_Model_Catalog_Category extends Mage_Catalog_Model_Category
{
	
	public function getMainChldCategories()
	{
		return $this->getResource()->getMainChildrenCategories($this);
	}
	
	public function getSubChldCategories()
	{
		return $this->getResource()->getSubChildrenCategories($this);
	}
	
	public function getMostWantedCategories()
	{
		return $this->getResource()->getMostWantedCategories($this);
	}


}