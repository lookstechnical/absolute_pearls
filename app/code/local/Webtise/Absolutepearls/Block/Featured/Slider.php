<?php


class Webtise_Absolutepearls_Block_Featured_Slider extends Mage_Catalog_Block_Product_List
{

	public function getProducts()
	{
	
		$category = Mage::getModel('catalog/category')->load(3);

		$products = Mage::getModel('catalog/product')->getCollection();
		Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($products);
		Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($products); 
		
		$products->addCategoryFilter($category);
		
		return $products;

	}
}