define([
    'uiComponent',
    'Magento_Customer/js/customer-data'
], function (Component, customerData) {

    'use strict';

    return Component.extend({

        /** @inheritDoc */
        initialize: function () {
            this._super();
            this.customsection = customerData.get('customsection');
        }
    });

});