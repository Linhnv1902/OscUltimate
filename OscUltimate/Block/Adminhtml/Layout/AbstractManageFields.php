<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_Osc
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\OscUltimate\Block\Adminhtml\Layout;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Widget\Context;
use Magento\Customer\Model\Attribute;

/**
 * Class AbstractField
 * @package Mageplaza\Osc\Block\Adminhtml\Field
 */
abstract class AbstractManageFields extends Template
{
    const BLOCK_ID = '';

    /**
     * @var string
     */
    protected $_template = 'Mageplaza_OscUltimate::block/manageFields.phtml';


    /**
     * @var Attribute[]
     */
    protected $sortedBlocks = [];

    /**
     * @var Attribute[]
     */
    protected $availableBlocks = [];

    /**
     * AbstractField constructor.
     *
     * @param Context $context
     * @param array $data
     */
    public function __construct(
        Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * Retrieve the header text
     *
     * @return string
     */
    abstract public function getBlockTitle();

    /**
     * @return string
     */
    public function getBlockId()
    {
        return static::BLOCK_ID;
    }

    /**
     * @return Attribute[]
     */
    public function getSortedBlocks()
    {
        return $this->sortedBlocks;
    }

    /**
     * @return Attribute[]
     */
    public function getAvailableBlocks()
    {
        return $this->availableBlocks;
    }


    /**
     * @return bool
     */
    public function isVisible()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function hasFields()
    {
        return true;
    }

    /**
     * @return string
     */
    public function getNoticeMessage()
    {
        return '';
    }
}
