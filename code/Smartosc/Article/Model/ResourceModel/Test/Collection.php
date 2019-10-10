<?php
namespace Smartosc\Article\Model\ResourceModel\Test;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Smartosc\Article\Model\Test',
            'Smartosc\Article\Model\ResourceModel\Test'
        );
    }
}