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

namespace Mageplaza\OscUltimate\Block\Adminhtml\Layout\ManageBlock;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Widget\Context;
use Magento\Customer\Model\Attribute;
use Mageplaza\Osc\Helper\Address;

/**
 * Class Address
 * @package Mageplaza\Osc\Block\Adminhtml\Field
 */
class ThreeColumns extends Template
{
    const BLOCK_ID = '3columns';

    /**
     * @var string
     */
    protected $_template = 'Mageplaza_OscUltimate::block/manageBlock/threeColumns.phtml';

    /**
     * @var Address
     */
    protected $helper;

    /**
     * @var Attribute[]
     */
    protected $sortedFields = [
        'column-1' => [
            'address-information' => 'Address Information',
            'shipping-method' => 'Shipping Method'
        ],
        'column-2' => [
            'payment-method' => 'Payment Method'
        ],
        'column-3' => [
            'order-summary' => 'Order Summary'
        ],


    ];

    /**
     * AbstractField constructor.
     *
     * @param Context $context
     * @param Address $helper
     * @param array $data
     */
    public function __construct(
        Context $context,
        Address $helper,
        array $data = []
    ) {
        $this->helper = $helper;

        parent::__construct($context, $data);
    }

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
    public function getSortedFields()
    {
        return $this->sortedFields;
    }

    /**
     * @return Address
     */
    public function getHelperData()
    {
        return $this->helper;
    }

    /**
     * @return string
     */
    public function getNoticeMessage()
    {
        return '';
    }
}
