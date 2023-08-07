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

use Magento\Customer\Model\Attribute;

/**
 * Class Order
 * @package Mageplaza\Osc\Block\Adminhtml\Field
 */
class Block extends AbstractBlock
{
    const BLOCK_ID = 'mposc-layout-block';
    const ONE_COLUMN = '1column';
    const TWO_COLUMNS = '2columns';
    const TWO_COLUMNS_FLOATING = '2columns-floating';
    const THREE_COLUMNS = '3columns';
    const THREE_COLUMNS_WITH_COLSPAN = '3columns-colspan';

    /**
     * @var Attribute[]
     */
    protected $sortedBlocks1Colum = [
        'address-information' => 'Address Information',
        'shipping-method'=> 'Shipping Method',
        'payment-method'=>  'Payment Method',
        'order-summary'=> 'Order Summary'
    ];

    /**
     * @var Attribute[]
     */
    protected $sortedBlocks2Colum = [];


    /**
     * @var Attribute[]
     */
    protected $sortedBlocks2Colums = [];

    /**
     * @var Attribute[]
     */
    protected $sortedBlocks3Colum = [];

    /**
     * @var Attribute[]
     */
    protected $sortedBlocks3Colums  = [];

    /**
     * @return string
     */
    public function getBlockTitle()
    {
        return (string)__('Manage Block');
    }

    public function getLayoutCheckoutPage()
    {
        $options = [
            [
                'label' => __('1 Column'),
                'value' => self::ONE_COLUMN
            ],
            [
                'label' => __('2 Columns'),
                'value' => self::TWO_COLUMNS
            ],
            [
                'label' => __('2 Columns With Floating Column'),
                'value' => self::TWO_COLUMNS_FLOATING
            ],
            [
                'label' => __('3 Columns'),
                'value' => self::THREE_COLUMNS
            ],
            [
                'label' => __('3 Columns With Colspan'),
                'value' => self::THREE_COLUMNS_WITH_COLSPAN
            ]
        ];

        return $options;
    }

    public function sortedBlocks1Colum()
    {
        return $this->sortedBlocks1Colum;
    }
    public function sortedBlocks2Colum()
    {

        return [];
    }
    public function sortedBlocks2Colums()
    {

        return [];
    }
    public function sortedBlocks3Colum()
    {

        return [];
    }
    public function sortedBlocks3Colums()
    {

        return [];
    }
}
