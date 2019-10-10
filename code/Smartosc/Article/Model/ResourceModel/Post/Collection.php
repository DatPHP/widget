<?php
namespace Smartosc\Article\Model\ResourceModel\Post;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Smartosc\Article\Model\Post', 'Smartosc\Article\Model\ResourceModel\Post');
    }
}