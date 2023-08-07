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

define(['jquery', 'jquery-ui-modules/widget'], function ($) {
    'use strict';

    $.widget('mageplaza.osc_ultimate_field_position', {
        _create: function () {
            this.initGrid();
        },

        initGrid: function () {
            var selector = '#' + this.options.blockId + ' ',
                list     = $(selector + '.sortable-list'),
                field, elemWidth,oldIndex;

            var options = {
                tolerance: 'pointer',
                connectWith: '.sortable-list',
                dropOnEmpty: true,
                containment: 'body',
                cancel: '.ui-state-disabled',
                placeholder: 'suggest-position',
                zIndex: 10,
                scroll: false,
                start: function(event, ui) {
                    oldIndex = ui.item.index();
                },
                stop: function(event, ui) {
                    var newIndex = ui.item.index();
                    var movingForward = newIndex > oldIndex;
                    var nextIndex = newIndex + (movingForward ? -1 : 1);


                    // Find the element to move
                    var itemToMove = list.get(nextIndex);
                    if (itemToMove) {

                        // Find the element at the index where we want to move the itemToMove
                        var newLocation = $(list.get(oldIndex));

                        // Decide if it goes before or after
                        if (movingForward) {
                            $(itemToMove).insertBefore(newLocation);
                        } else {
                            $(itemToMove).insertAfter(newLocation);
                        }
                    }
                }
            };
            list.sortable(options).disableSelection();

        }
    });

    return $.mageplaza.osc_ultimate_field_position;
});
