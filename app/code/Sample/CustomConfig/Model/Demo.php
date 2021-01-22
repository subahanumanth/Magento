<?php
namespace Sample\CustomConfig\Model;

use Sample\CustomConfig\Helper\Data;

class Demo implements \Sample\CustomConfig\Api\DemoInterface
{
    /**
    *@inheritDoc
    */
    public $helperData;

    public function __construct(Data $helperData)
    {
        $this->helperData = $helperData;
    }
    public function getConfiguration()
    {
        return $this->helperData->getGeneralConfig('enable') . " " . $this->helperData->getGeneralConfig('display_text');
    }
}
