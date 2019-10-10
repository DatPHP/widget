<?php
namespace Mageplaza\HelloWorld\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'smartosc_article_post';

    protected $_cacheTag = 'smartosc_article_post';

    protected $_eventPrefix = 'smartosc_article_post';

    protected function _construct()
    {
        $this->_init('Smartosc\Article\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}