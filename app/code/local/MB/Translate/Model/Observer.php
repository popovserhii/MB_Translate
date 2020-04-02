<?php
/**
 * Change meta tags before layout render
 *
 * @category Popov
 * @package Popov_Seo
 * @author Serhii Popov <popow.serhii@gmail.com>
 * @datetime: 20.04.14 15:02
 */

class MB_Translate_Model_Observer extends Varien_Event_Observer
{
    /**
     * @var MB_Translate_Helper_Data
     */
    protected $helper;

    public function addCategoryDescriptionTranslate()
    {
        $this->getHelper()->attachHandler();
    }

    /**
     * @return MB_Translate_Helper_Data
     */
	public function getHelper()
    {
		if (!$this->helper) {
			$this->helper = Mage::helper('mb_translate');
		}

		return $this->helper;
	}
}
