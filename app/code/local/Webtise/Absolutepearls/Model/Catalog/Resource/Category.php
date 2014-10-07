<?php


class Webtise_Absolutepearls_Model_Catalog_Resource_Category extends Mage_Catalog_Model_Resource_Category
{


    /**
     * Return child categories
     *
     * @param Mage_Catalog_Model_Category $category
     * @return Mage_Catalog_Model_Resource_Category_Collection
     */
    public function getMainChildrenCategories($category)
    {
        $collection = $this->_getChildrenCategoriesBase($category);
        $collection->addAttributeToFilter('is_active', 1)
            ->addAttributeToFilter('featured', 1)
            ->addIdFilter($category->getChildren())
            ->load();

        return $collection;
    }
    
     /**
     * Return child categories
     *
     * @param Mage_Catalog_Model_Category $category
     * @return Mage_Catalog_Model_Resource_Category_Collection
     */
    public function getSubChildrenCategories($category)
    {
       // var_dump($category->getChildren());die();
        $collection = $this->_getChildrenCategoriesBase($category);
        $collection
            ->addAttributeToFilter('is_active', 1)
            ->addAttributeToFilter('featured', 2)
            ->load();
            
            return $collection;
    }
    
    public function getMostWantedCategories($category)
    {
        $collection = $this->_getChildrenCategoriesBase($category);
        $collection->addAttributeToFilter('url_key', 'most-wanted')
            ->load();

        return $collection->getFirstItem();
    }
}