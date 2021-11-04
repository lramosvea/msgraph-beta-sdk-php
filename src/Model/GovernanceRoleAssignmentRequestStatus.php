<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GovernanceRoleAssignmentRequestStatus File
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
* GovernanceRoleAssignmentRequestStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GovernanceRoleAssignmentRequestStatus extends Entity
{
    /**
    * Gets the status
    *
    * @return string|null The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }

    /**
    * Sets the status
    *
    * @param string $val The value of the status
    *
    * @return GovernanceRoleAssignmentRequestStatus
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }

    /**
    * Gets the statusDetails
    *
    * @return KeyValue[]|null The statusDetails
    */
    public function getStatusDetails()
    {
        if (array_key_exists("statusDetails", $this->_propDict) && !is_null($this->_propDict["statusDetails"])) {
       
            if (count($this->_propDict['statusDetails']) > 0 && is_a($this->_propDict['statusDetails'][0], 'KeyValue')) {
                return $this->_propDict['statusDetails'];
            }
            $statusDetails = [];
            foreach ($this->_propDict['statusDetails'] as $singleValue) {
                $statusDetails []= new KeyValue($singleValue);
            }
            $this->_propDict['statusDetails'] = $statusDetails;
            return $this->_propDict['statusDetails'];
            }
        return null;
    }

    /**
    * Sets the statusDetails
    *
    * @param KeyValue[] $val The value to assign to the statusDetails
    *
    * @return GovernanceRoleAssignmentRequestStatus The GovernanceRoleAssignmentRequestStatus
    */
    public function setStatusDetails($val)
    {
        $this->_propDict["statusDetails"] = $val;
         return $this;
    }
    /**
    * Gets the subStatus
    *
    * @return string|null The subStatus
    */
    public function getSubStatus()
    {
        if (array_key_exists("subStatus", $this->_propDict)) {
            return $this->_propDict["subStatus"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subStatus
    *
    * @param string $val The value of the subStatus
    *
    * @return GovernanceRoleAssignmentRequestStatus
    */
    public function setSubStatus($val)
    {
        $this->_propDict["subStatus"] = $val;
        return $this;
    }
}
