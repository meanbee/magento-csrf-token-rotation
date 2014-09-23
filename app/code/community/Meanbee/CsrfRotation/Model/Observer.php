<?php

class Meanbee_CsrfRotation_Model_Observer {

    /**
     * Called when the customer is authenticated at login.
     *
     * @param Varien_Event_Observer $observer
     */
    public function customerCustomerAuthenticated(Varien_Event_Observer $observer) {
        Mage::helper('meanbee_csrfrotation')->rotateCsrfFormKey();
    }

    /**
     * Called when the customer is logged out.
     *
     * @param Varien_Event_Observer $observer
     */
    public function controllerActionPostdispatchCustomerAccountLogout(Varien_Event_Observer $observer) {
        Mage::helper('meanbee_csrfrotation')->rotateCsrfFormKey();
    }
}
