<?php

class Meanbee_CsrfRotation_Helper_Data extends Mage_Core_Helper_Abstract {

    /**
     * Set a blank form key on the session, leading to a new form key being generated the next time
     * the getFormKey method is called.
     */
    public function rotateCsrfFormKey() {
        Mage::getSingleton('core/session')->unsetData('_form_key');
    }
}
