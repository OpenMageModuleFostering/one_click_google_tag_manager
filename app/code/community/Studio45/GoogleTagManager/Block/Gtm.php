<?php  
class Studio45_GoogleTagManager_Block_Gtm extends Mage_Core_Block_Template
{			
	public function getIsHomePage() 
	{
		$routeName = Mage::app()->getRequest()->getRouteName();
		$identifier = Mage::getSingleton('cms/page')->getIdentifier();	  

		if($routeName == 'cms' && $identifier == 'home') {
			return true;
		} else {
			return false;
		}
	}
	
	public function getIsOrderSuccessPage()
	{
		if (strpos(Mage::app()->getRequest()->getPathInfo(), '/checkout/onepage/success') !== false) {
			return true;
		}
		return false;
	}
}
?>
