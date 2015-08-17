<?php

namespace XeroPHP\Models\Accounting;

use XeroPHP\Remote;


class BatchPayments extends Remote\Object {

    /**
     * Bank account and sort code.
     *
     * @property string BankAccountNumber
     */

    /**
     * The Bank Account Name field is limited to 50 characters.
     *
     * @property string BankAccountName
     */

    /**
     * The Details field is limited to 18 characters (BACS compliant).
     *
     * @property string Details
     */

    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'BatchPayments';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'BatchPayments';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return '';
    }


    /**
     * Get the stem of the API (core.xro) etc
     *
     * @return string|null
     */
    public static function getAPIStem(){
        return Remote\URL::API_CORE;
    }


    /**
     * Get the supported methods
     */
    public static function getSupportedMethods() {
        return array(
            Remote\Request::METHOD_GET
        );
    }

    /**
     *
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Type
     *  [2] - PHP type
     *  [3] - Is an Array
     *  [4] - Saves directly
     *
     * @return array
     */
    public static function getProperties() {
        return array(
            'BankAccountNumber' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'BankAccountName' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'Details' => array (false, self::PROPERTY_TYPE_STRING, null, false, false)
        );
    }

    public static function isPageable(){
        return false;
    }

    /**
     * @return string
     */
    public function getBankAccountNumber() {
        return $this->_data['BankAccountNumber'];
    }

    /**
     * @return string
     */
    public function getBankAccountName() {
        return $this->_data['BankAccountName'];
    }

    /**
     * @return string
     */
    public function getDetails() {
        return $this->_data['Details'];
    }
}
