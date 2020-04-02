<?php

class MB_Translate_Helper_Data extends Mage_Core_Helper_Abstract
{
    protected $templatePreprocessor;

    public function getTemplateProcessor()
    {
        if (!$this->templatePreprocessor) {
            $helper = Mage::helper('cms');
            $this->templatePreprocessor = $helper->getBlockTemplateProcessor();
        }

        return $this->templatePreprocessor;
    }

    public function attachHandler()
    {
        /** @var Mage_Catalog_Helper_Output $outputHelper */
        $outputHelper = Mage::helper('catalog/output');
        $outputHelper->addHandler('categoryAttribute', $this);
    }

    /**
     * Translate category: name, description
     * @param Mage_Catalog_Helper_Output $outputHelper
     * @param $outputHtml
     * @param $params
     *
     * @return mixed
     */
    public function categoryAttribute(Mage_Catalog_Helper_Output $outputHelper, $outputHtml, $params)
    {
        return $this->getTemplateProcessor()->filter($outputHtml);
    }
}
