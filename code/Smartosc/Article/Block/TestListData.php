<?php

namespace Smartosc\Article\Block;

use Magento\Framework\View\Element\Template\Context;
use Smartosc\Article\Model\TestFactory;
/**
 * Test List block
 */
class TestListData extends \Magento\Framework\View\Element\Template
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
        $this->pageConfig->getTitle()->set(__('Simple Custom Module List Page'));

        if ($this->getTestCollection()) {
            $pager = $this->getLayout()->createBlock(
                'Magento\Theme\Block\Html\Pager',
                'smartosc.article.pager'
            )->setAvailableLimit(array(2=>2,4=>4,8=>8))->setShowPerPage(true)->setCollection(
                $this->getTestCollection()
            );
            $this->setChild('pager', $pager);
            $this->getTestCollection()->load();
        }
        return parent::_prepareLayout();
    }

    public function getTestCollection()
    {
        $page = ($this->getRequest()->getParam('p'))? $this->getRequest()->getParam('p') : 1;
        $pageSize = ($this->getRequest()->getParam('limit'))? $this->getRequest()->getParam('limit') : 5;

        $test = $this->_test->create();
        $collection = $test->getCollection();
        //$collection->addFieldToFilter('title','Test Title 01'); // if you want to use filter
        //$collection->setOrder('test_id','ASC'); // if you want to set collection order
        $collection->setPageSize($pageSize);
        $collection->setCurPage($page);

        return $collection;
    }

    public function getPagerHtml()
    {
        return $this->getChildHtml('pager');
    }
}