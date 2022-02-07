<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Teamwork File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* Teamwork class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Teamwork extends Entity
{

     /**
     * Gets the workforceIntegrations
    * A workforce integration with shifts.
     *
     * @return WorkforceIntegration[]|null The workforceIntegrations
     */
    public function getWorkforceIntegrations()
    {
        if (array_key_exists('workforceIntegrations', $this->_propDict) && !is_null($this->_propDict['workforceIntegrations'])) {
            $workforceIntegrations = [];
            if (count($this->_propDict['workforceIntegrations']) > 0 && is_a($this->_propDict['workforceIntegrations'][0], 'WorkforceIntegration')) {
                return $this->_propDict['workforceIntegrations'];
            }
            foreach ($this->_propDict['workforceIntegrations'] as $singleValue) {
                $workforceIntegrations []= new WorkforceIntegration($singleValue);
            }
            $this->_propDict['workforceIntegrations'] = $workforceIntegrations;
            return $this->_propDict['workforceIntegrations'];
        }
        return null;
    }

    /**
    * Sets the workforceIntegrations
    * A workforce integration with shifts.
    *
    * @param WorkforceIntegration[] $val The workforceIntegrations
    *
    * @return Teamwork
    */
    public function setWorkforceIntegrations($val)
    {
        $this->_propDict["workforceIntegrations"] = $val;
        return $this;
    }


     /**
     * Gets the devices
    * The Teams devices provisioned for the tenant.
     *
     * @return TeamworkDevice[]|null The devices
     */
    public function getDevices()
    {
        if (array_key_exists('devices', $this->_propDict) && !is_null($this->_propDict['devices'])) {
            $devices = [];
            if (count($this->_propDict['devices']) > 0 && is_a($this->_propDict['devices'][0], 'TeamworkDevice')) {
                return $this->_propDict['devices'];
            }
            foreach ($this->_propDict['devices'] as $singleValue) {
                $devices []= new TeamworkDevice($singleValue);
            }
            $this->_propDict['devices'] = $devices;
            return $this->_propDict['devices'];
        }
        return null;
    }

    /**
    * Sets the devices
    * The Teams devices provisioned for the tenant.
    *
    * @param TeamworkDevice[] $val The devices
    *
    * @return Teamwork
    */
    public function setDevices($val)
    {
        $this->_propDict["devices"] = $val;
        return $this;
    }

}
