<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TenantDetailedInformation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\ManagedTenants\Model;

/**
* TenantDetailedInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TenantDetailedInformation extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the city
    *
    * @return string|null The city
    */
    public function getCity()
    {
        if (array_key_exists("city", $this->_propDict)) {
            return $this->_propDict["city"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the city
    *
    * @param string $val The city
    *
    * @return TenantDetailedInformation
    */
    public function setCity($val)
    {
        $this->_propDict["city"] = $val;
        return $this;
    }
    
    /**
    * Gets the countryCode
    *
    * @return string|null The countryCode
    */
    public function getCountryCode()
    {
        if (array_key_exists("countryCode", $this->_propDict)) {
            return $this->_propDict["countryCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the countryCode
    *
    * @param string $val The countryCode
    *
    * @return TenantDetailedInformation
    */
    public function setCountryCode($val)
    {
        $this->_propDict["countryCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the countryName
    *
    * @return string|null The countryName
    */
    public function getCountryName()
    {
        if (array_key_exists("countryName", $this->_propDict)) {
            return $this->_propDict["countryName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the countryName
    *
    * @param string $val The countryName
    *
    * @return TenantDetailedInformation
    */
    public function setCountryName($val)
    {
        $this->_propDict["countryName"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultDomainName
    *
    * @return string|null The defaultDomainName
    */
    public function getDefaultDomainName()
    {
        if (array_key_exists("defaultDomainName", $this->_propDict)) {
            return $this->_propDict["defaultDomainName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defaultDomainName
    *
    * @param string $val The defaultDomainName
    *
    * @return TenantDetailedInformation
    */
    public function setDefaultDomainName($val)
    {
        $this->_propDict["defaultDomainName"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return TenantDetailedInformation
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the industryName
    *
    * @return string|null The industryName
    */
    public function getIndustryName()
    {
        if (array_key_exists("industryName", $this->_propDict)) {
            return $this->_propDict["industryName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the industryName
    *
    * @param string $val The industryName
    *
    * @return TenantDetailedInformation
    */
    public function setIndustryName($val)
    {
        $this->_propDict["industryName"] = $val;
        return $this;
    }
    
    /**
    * Gets the region
    *
    * @return string|null The region
    */
    public function getRegion()
    {
        if (array_key_exists("region", $this->_propDict)) {
            return $this->_propDict["region"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the region
    *
    * @param string $val The region
    *
    * @return TenantDetailedInformation
    */
    public function setRegion($val)
    {
        $this->_propDict["region"] = $val;
        return $this;
    }
    
    /**
    * Gets the segmentName
    *
    * @return string|null The segmentName
    */
    public function getSegmentName()
    {
        if (array_key_exists("segmentName", $this->_propDict)) {
            return $this->_propDict["segmentName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the segmentName
    *
    * @param string $val The segmentName
    *
    * @return TenantDetailedInformation
    */
    public function setSegmentName($val)
    {
        $this->_propDict["segmentName"] = $val;
        return $this;
    }
    
    /**
    * Gets the tenantId
    *
    * @return string|null The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tenantId
    *
    * @param string $val The tenantId
    *
    * @return TenantDetailedInformation
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }
    
    /**
    * Gets the verticalName
    *
    * @return string|null The verticalName
    */
    public function getVerticalName()
    {
        if (array_key_exists("verticalName", $this->_propDict)) {
            return $this->_propDict["verticalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the verticalName
    *
    * @param string $val The verticalName
    *
    * @return TenantDetailedInformation
    */
    public function setVerticalName($val)
    {
        $this->_propDict["verticalName"] = $val;
        return $this;
    }
    
}
