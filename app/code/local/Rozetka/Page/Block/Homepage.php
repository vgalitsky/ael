<?php
class Rozetka_Page_Block_Homepage extends Mage_Catalog_Block_Product{

    public function getHomepageProductCollection(){
        $cat = Mage::getResourceModel('catalog/category_collection')->addFieldToFilter('name', 'homepage');
        $catId = $cat->getFirstItem()->getId();
//Zend_Debug::dump($cat->getFirstItem());
        $productCollection = Mage::getModel('catalog/product')->getCollection();
        $productCollection->addCategoryFilter($cat->getFirstItem())->getSelect()->limit(8);
        return $productCollection;
    }
}