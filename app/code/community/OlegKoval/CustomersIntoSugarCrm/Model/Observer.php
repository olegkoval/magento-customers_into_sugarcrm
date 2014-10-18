<?php
/**
 * Observer for customer save/delete actions
 *
 * @category    OlegKoval
 * @package     OlegKoval_CustomersIntoSugarCrm
 * @copyright   Copyright (c) 2013 Oleg Koval
 * @author      Oleg Koval <oleh.koval@gmail.com>
 */
class OlegKoval_CustomersIntoSugarCrm_Model_Observer {
    const XML_PATH_ENABLED = 'customersintosugarcrm/extension/enabled';

    /**
     * Initialization of our custom model
     */
    protected function _construct() {
        $this->_init('customersintosugarcrm/observer');
        parent::_construct();
    }

    /**
     * Customer save handler
     * @param Varien_Object $observer
     * @return OlegKoval_CustomersIntoSugarCrm_Model_Observer
     */
    public function customerSaved($observer) {
        if (Mage::getStoreConfigFlag(self::XML_PATH_ENABLED)) {
            $customer = $observer->getEvent()->getCustomer();
            if (($customer instanceof Mage_Customer_Model_Customer)) {
                Mage::helper('customersintosugarcrm')->synchronizeCustomer($customer);
            }
        }

        return $this;
    }

    /**
     * Customer delete handler
     * @param Varien_Object $observer
     * @return OlegKoval_CustomersIntoSugarCrm_Model_Observer
     */
    public function customerDeleted($observer) {
        if (Mage::getStoreConfigFlag(self::XML_PATH_ENABLED)) {
            Mage::helper('customersintosugarcrm')->deleteCustomer($observer->getEvent()->getCustomer()->getEmail());
        }

        return $this;
    }
}