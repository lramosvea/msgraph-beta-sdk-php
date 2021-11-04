<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationSimpleSettingCollectionInstance File
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
* DeviceManagementConfigurationSimpleSettingCollectionInstance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationSimpleSettingCollectionInstance extends DeviceManagementConfigurationSettingInstance
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.deviceManagementConfigurationSimpleSettingCollectionInstance");
    }


    /**
    * Gets the simpleSettingCollectionValue
    * Simple setting collection instance value
    *
    * @return DeviceManagementConfigurationSimpleSettingValue[]|null The simpleSettingCollectionValue
    */
    public function getSimpleSettingCollectionValue()
    {
        if (array_key_exists("simpleSettingCollectionValue", $this->_propDict) && !is_null($this->_propDict["simpleSettingCollectionValue"])) {
       
            if (count($this->_propDict['simpleSettingCollectionValue']) > 0 && is_a($this->_propDict['simpleSettingCollectionValue'][0], 'DeviceManagementConfigurationSimpleSettingValue')) {
                return $this->_propDict['simpleSettingCollectionValue'];
            }
            $simpleSettingCollectionValue = [];
            foreach ($this->_propDict['simpleSettingCollectionValue'] as $singleValue) {
                $simpleSettingCollectionValue []= new DeviceManagementConfigurationSimpleSettingValue($singleValue);
            }
            $this->_propDict['simpleSettingCollectionValue'] = $simpleSettingCollectionValue;
            return $this->_propDict['simpleSettingCollectionValue'];
            }
        return null;
    }

    /**
    * Sets the simpleSettingCollectionValue
    * Simple setting collection instance value
    *
    * @param DeviceManagementConfigurationSimpleSettingValue[] $val The value to assign to the simpleSettingCollectionValue
    *
    * @return DeviceManagementConfigurationSimpleSettingCollectionInstance The DeviceManagementConfigurationSimpleSettingCollectionInstance
    */
    public function setSimpleSettingCollectionValue($val)
    {
        $this->_propDict["simpleSettingCollectionValue"] = $val;
         return $this;
    }
}
