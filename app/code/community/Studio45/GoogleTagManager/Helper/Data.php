<?php

class Studio45_GoogleTagManager_Helper_Data extends Mage_Core_Helper_Abstract
{
	const CONFIG_GTM_GENERAL_IS_ENABLE = 'googletagmanager/general/is_enable';
	const CONFIG_GTM_GENERAL_CONTAINER_ID = 'googletagmanager/general/container_id';
		
	public function getContainerId()
    {
        return Mage::getStoreConfig(self::CONFIG_GTM_GENERAL_CONTAINER_ID);        
    }
    
    public function getIsEnable()
    {
        return Mage::getStoreConfig(self::CONFIG_GTM_GENERAL_IS_ENABLE);        
    }
}

?>
