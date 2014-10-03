<?php

class Webtise_Absolutepearls_Block_Instagram_Slider extends Mage_Core_Block_Template
{
	private $hashtag;
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function getHashtag()
	{
		return $this->hashtag;
	}
	
	public function getInstagramImages()
	{
			$this->hashtag = Mage::getStoreConfig('absolutepearls/home_group/instagram_tag',Mage::app()->getStore());

			$client_id = Mage::getStoreConfig('absolutepearls/home_group/instagram_api',Mage::app()->getStore());
			//bb7813192f5c44828cf925c88da3b8de
			$url = 'https://api.instagram.com/v1/tags/'.$this->hashtag.'/media/recent?client_id='.$client_id;
			$ch = curl_init($url); 
			 
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
			 
			$results = curl_exec($ch); 
			curl_close($ch);
			
			if($results){
				$results = json_decode($results,true);
				foreach($results['data'] as $item){
				    $images[]['low_res'] = $item['images']['low_resolution']['url'];
				    //$images['high_res'] = $item['images']['high_resolution']['url'];
				   
				}
				
				return $images;
			} else{
				return array();
			}
	}
	
	
}