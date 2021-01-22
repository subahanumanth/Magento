<?php
namespace Sample\ViewBlock\Block;

class Index extends \Magento\Framework\View\Element\Template
{
    /**
    *@var Registry
    */
    private $registry;
    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $registry, array $data=[])
    {
        $this->registry = $registry;
        parent::__construct($context);
    }

    public function sayHello()
    {
        return __('Hello World');
    }
    /**
     * Return catalog product object
     *
     * @return \Magento\Catalog\Model\Product
     */

    public function getProduct()
    {
        return $this->registry->registry('product');
    }
}
