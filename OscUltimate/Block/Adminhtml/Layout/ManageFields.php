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

use Mageplaza\Osc\Block\Adminhtml\Field\AbstractOrderField;
/**
 * Class Order
 * @package Mageplaza\Osc\Block\Adminhtml\Field
 */
class ManageFields extends AbstractManageFields
{
    const BLOCK_ID = 'mposc-manage-fields';
    const BLOCK_SCOPE = [6]; // position order summary

    /**
     * @return string
     */
    public function getBlockTitle()
    {
        return (string)__('Manage Fields');
    }
}
