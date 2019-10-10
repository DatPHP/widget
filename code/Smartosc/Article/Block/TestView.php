<?php

namespace Smartosc\Article\Block;

use Magento\Framework\View\Element\Template\Context;
use Smartosc\Article\Model\TestFactory;
/**
 * Test View block
 */
class TestView extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        Context $context,
        TestFactory $test
    ) {
        $this->_test = $test;
        parent::__construct($context);
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Simple Custom Module View Page'));

        return parent::_prepareLayout();
    }

    public function getSingleData()
    {
        $id = $this->getRequest()->getParam('id');
        $test = $this->_test->create();
        $singleData = $test->load($id);
        return $singleData;
    }
}
