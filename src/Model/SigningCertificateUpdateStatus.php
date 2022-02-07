<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SigningCertificateUpdateStatus File
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
* SigningCertificateUpdateStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SigningCertificateUpdateStatus extends Entity
{
    /**
    * Gets the certificateUpdateResult
    *
    * @return string|null The certificateUpdateResult
    */
    public function getCertificateUpdateResult()
    {
        if (array_key_exists("certificateUpdateResult", $this->_propDict)) {
            return $this->_propDict["certificateUpdateResult"];
        } else {
            return null;
        }
    }

    /**
    * Sets the certificateUpdateResult
    *
    * @param string $val The value of the certificateUpdateResult
    *
    * @return SigningCertificateUpdateStatus
    */
    public function setCertificateUpdateResult($val)
    {
        $this->_propDict["certificateUpdateResult"] = $val;
        return $this;
    }

    /**
    * Gets the lastRunDateTime
    *
    * @return \DateTime|null The lastRunDateTime
    */
    public function getLastRunDateTime()
    {
        if (array_key_exists("lastRunDateTime", $this->_propDict) && !is_null($this->_propDict["lastRunDateTime"])) {
     
            if (is_a($this->_propDict["lastRunDateTime"], "\DateTime")) {
                return $this->_propDict["lastRunDateTime"];
            } else {
                $this->_propDict["lastRunDateTime"] = new \DateTime($this->_propDict["lastRunDateTime"]);
                return $this->_propDict["lastRunDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastRunDateTime
    *
    * @param \DateTime $val The value to assign to the lastRunDateTime
    *
    * @return SigningCertificateUpdateStatus The SigningCertificateUpdateStatus
    */
    public function setLastRunDateTime($val)
    {
        $this->_propDict["lastRunDateTime"] = $val;
         return $this;
    }
}
