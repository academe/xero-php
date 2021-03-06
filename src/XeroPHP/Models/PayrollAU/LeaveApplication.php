<?php

namespace XeroPHP\Models\PayrollAU;

use XeroPHP\Remote;

use XeroPHP\Models\PayrollAU\LeaveApplication\LeavePeriod;

class LeaveApplication extends Remote\Object {

    /**
     * Xero identifier
     *
     * @property string LeaveApplicationID
     */

    /**
     * The Xero identifier for Payroll Employee
     *
     * @property string EmployeeID
     */

    /**
     * The Xero identifier for Leave Type
     *
     * @property string LeaveTypeID
     */

    /**
     * The title of the leave (max length = 50)
     *
     * @property string Title
     */

    /**
     * Start date of the leave (YYYY-MM-DD)
     *
     * @property \DateTime StartDate
     */

    /**
     * End date of the leave (YYYY-MM-DD)
     *
     * @property \DateTime EndDate
     */

    /**
     * The Description of the Leave (max length = 200)
     *
     * @property string Description
     */

    /**
     * The leave period information
     *
     * @property LeavePeriod[] LeavePeriods
     */


    const LEAVE_PERIOD_STATUS_SCHEDULED = 'SCHEDULED';
    const LEAVE_PERIOD_STATUS_PROCESSED = 'PROCESSED';


    /**
     * Get the resource uri of the class (Contacts) etc
     *
     * @return string
     */
    public static function getResourceURI(){
        return 'LeaveApplications';
    }


    /**
     * Get the root node name.  Just the unqualified classname
     *
     * @return string
     */
    public static function getRootNodeName(){
        return 'LeaveApplication';
    }


    /**
     * Get the guid property
     *
     * @return string
     */
    public static function getGUIDProperty(){
        return 'LeaveApplicationID';
    }


    /**
     * Get the stem of the API (core.xro) etc
     *
     * @return string|null
     */
    public static function getAPIStem(){
        return Remote\URL::API_PAYROLL;
    }


    /**
     * Get the supported methods
     */
    public static function getSupportedMethods() {
        return array(
            Remote\Request::METHOD_POST,
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
            'LeaveApplicationID' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'EmployeeID' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'LeaveTypeID' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'Title' => array (true, self::PROPERTY_TYPE_STRING, null, false, false),
            'StartDate' => array (true, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'EndDate' => array (true, self::PROPERTY_TYPE_DATE, '\\DateTime', false, false),
            'Description' => array (false, self::PROPERTY_TYPE_STRING, null, false, false),
            'LeavePeriods' => array (false, self::PROPERTY_TYPE_OBJECT, 'PayrollAU\\LeaveApplication\\LeavePeriod', true, false)
        );
    }

    public static function isPageable(){
        return true;
    }

    /**
     * @return string
     */
    public function getLeaveApplicationID() {
        return $this->_data['LeaveApplicationID'];
    }

    /**
     * @param string $value
     * @return LeaveApplication
     */
    public function setLeaveApplicationID($value) {
        $this->propertyUpdated('LeaveApplicationID', $value);
        $this->_data['LeaveApplicationID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmployeeID() {
        return $this->_data['EmployeeID'];
    }

    /**
     * @param string $value
     * @return LeaveApplication
     */
    public function setEmployeeID($value) {
        $this->propertyUpdated('EmployeeID', $value);
        $this->_data['EmployeeID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getLeaveTypeID() {
        return $this->_data['LeaveTypeID'];
    }

    /**
     * @param string $value
     * @return LeaveApplication
     */
    public function setLeaveTypeID($value) {
        $this->propertyUpdated('LeaveTypeID', $value);
        $this->_data['LeaveTypeID'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle() {
        return $this->_data['Title'];
    }

    /**
     * @param string $value
     * @return LeaveApplication
     */
    public function setTitle($value) {
        $this->propertyUpdated('Title', $value);
        $this->_data['Title'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate() {
        return $this->_data['StartDate'];
    }

    /**
     * @param \DateTime $value
     * @return LeaveApplication
     */
    public function setStartDate(\DateTime $value) {
        $this->propertyUpdated('StartDate', $value);
        $this->_data['StartDate'] = $value;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate() {
        return $this->_data['EndDate'];
    }

    /**
     * @param \DateTime $value
     * @return LeaveApplication
     */
    public function setEndDate(\DateTime $value) {
        $this->propertyUpdated('EndDate', $value);
        $this->_data['EndDate'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription() {
        return $this->_data['Description'];
    }

    /**
     * @param string $value
     * @return LeaveApplication
     */
    public function setDescription($value) {
        $this->propertyUpdated('Description', $value);
        $this->_data['Description'] = $value;
        return $this;
    }

    /**
     * @return LeavePeriod[]|Remote\Collection
     * Always returns a collection, switch is for type hinting
     */
    public function getLeavePeriods() {
        return $this->_data['LeavePeriods'];
    }

    /**
     * @param LeavePeriod $value
     * @return LeaveApplication
     */
    public function addLeavePeriod(LeavePeriod $value) {
        $this->propertyUpdated('LeavePeriods', $value);
        if(!isset($this->_data['LeavePeriods'])){
            $this->_data['LeavePeriods'] = new Remote\Collection();
        }
        $this->_data['LeavePeriods'][] = $value;
        return $this;
    }


}