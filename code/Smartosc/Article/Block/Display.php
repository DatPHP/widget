<?php
//namespace Smartosc\Article\Block;
//class Display extends \Magento\Framework\View\Element\Template
//{
//    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
//    {
//        parent::__construct($context);
//    }
//
//    public function sayHello()
//    {
//        return __('Hello Dat ');
//    }
//}

namespace Mageplaza\HelloWorld\Block;
class Display extends \Magento\Framework\View\Element\Template
{
    protected $_postFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Mageplaza\HelloWorld\Model\PostFactory $postFactory
    )
    {
        $this->_postFactory = $postFactory;
        parent::__construct($context);
    }

    public function sayHello()
    {
        return __('Hello World');
    }

    public function getPostCollection()
    {
        $post = $this->_postFactory->create();
        return $post->getCollection();
    }
}