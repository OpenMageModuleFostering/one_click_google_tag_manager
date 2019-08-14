<?php
class Studio45_GoogleTagManager_IndexController extends Mage_Core_Controller_Front_Action
{	
	public function getCustomerSession()
	{
		return Mage::getSingleton('customer/session');
	}
	
	public function getCoreSession()
	{
		return Mage::getSingleton('core/session');
	}
}
?>
