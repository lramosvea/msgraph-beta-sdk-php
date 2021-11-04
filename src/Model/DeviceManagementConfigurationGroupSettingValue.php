<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationGroupSettingValue File
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
* DeviceManagementConfigurationGroupSettingValue class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationGroupSettingValue extends DeviceManagementConfigurationSettingValue
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    * @param array $propDict The property dictionary
    */
    public function __construct($propDict = array())
    {
        parent::__construct($propDict);
        $this->setODataType("#microsoft.graph.deviceManagementConfigurationGroupSettingValue");
    }


    /**
    * Gets the children
    * Collection of child setting instances contained within this GroupSetting
    *
    * @return DeviceManagementConfigurationSettingInstance[]|null The children
    */
    public function getChildren()
    {
        if (array_key_exists("children", $this->_propDict) && !is_null($this->_propDict["children"])) {
       
            if (count($this->_propDict['children']) > 0 && is_a($this->_propDict['children'][0], 'DeviceManagementConfigurationSettingInstance')) {
                return $this->_propDict['children'];
            }
            $children = [];
            foreach ($this->_propDict['children'] as $singleValue) {
                $children []= new DeviceManagementConfigurationSettingInstance($singleValue);
            }
            $this->_propDict['children'] = $children;
            return $this->_propDict['children'];
            }
        return null;
    }

    /**
    * Sets the children
    * Collection of child setting instances contained within this GroupSetting
    *
    * @param DeviceManagementConfigurationSettingInstance[] $val The value to assign to the children
    *
    * @return DeviceManagementConfigurationGroupSettingValue The DeviceManagementConfigurationGroupSettingValue
    */
    public function setChildren($val)
    {
        $this->_propDict["children"] = $val;
         return $this;
    }
}
