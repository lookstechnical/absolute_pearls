<?php


class Webtise_Absolutepearls_Block_Landing_Products extends Mage_Core_Block_Template
{

	public function getProducts()
	{
		$layer = Mage::getSingleton('catalog/layer');
		$category = $layer->getCurrentCategory();
		
		$subCat = $category->getMostWantedCategories();
        $category = Mage::getModel('catalog/category')->load(16);

		$products = Mage::getModel('catalog/product')->getCollection();
		Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($products);
		Mage::getSingleton('catalog/product_visibility')->addVisibleInCatalogFilterToCollection($products); 
		
		$products->addCategoryFilter($category);
		
		return $products;
	}
	
	public function getMainChldCategories()
	{
		$layer = Mage::getSingleton('catalog/layer');
		$category = $layer->getCurrentCategory();
		$_categories = $category->getMainChldCategories();

		return $_categories;
	}
	
	public function getSubChldCategories()
	{
		$layer = Mage::getSingleton('catalog/layer');
		$category = $layer->getCurrentCategory();
		$_categories = $category->getSubChldCategories();
		
		return $_categories;
	}
	
	 /**
     * Enter description here...
     *
     * @return Mage_Catalog_Model_Category
     */
    public function getCurrentCategory()
    {
        if (Mage::getSingleton('catalog/layer')) {
            return Mage::getSingleton('catalog/layer')->getCurrentCategory();
        }
        return false;
    }
}