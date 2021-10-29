<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PasswordValidationInformation File
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
* PasswordValidationInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PasswordValidationInformation extends Entity
{
    /**
    * Gets the isValid
    *
    * @return bool|null The isValid
    */
    public function getIsValid()
    {
        if (array_key_exists("isValid", $this->_propDict)) {
            return $this->_propDict["isValid"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isValid
    *
    * @param bool $val The value of the isValid
    *
    * @return PasswordValidationInformation
    */
    public function setIsValid($val)
    {
        $this->_propDict["isValid"] = $val;
        return $this;
    }

    /**
    * Gets the validationResults
    *
    * @return ValidationResult[]|null The validationResults
    */
    public function getValidationResults()
    {
        if (array_key_exists("validationResults", $this->_propDict) && !is_null($this->_propDict["validationResults"])) {
       
            if (count($this->_propDict['validationResults']) > 0 && is_a($this->_propDict['validationResults'][0], 'ValidationResult')) {
               return $this->_propDict['validationResults'];
            }
            $validationResults = [];
            foreach ($this->_propDict['validationResults'] as $singleValue) {
               $validationResults []= new ValidationResult($singleValue);
            }
            $this->_propDict['validationResults'] = $validationResults;
            return $this->_propDict['validationResults'];
            }
        return null;
    }

    /**
    * Sets the validationResults
    *
    * @param ValidationResult[] $val The value to assign to the validationResults
    *
    * @return PasswordValidationInformation The PasswordValidationInformation
    */
    public function setValidationResults($val)
    {
        $this->_propDict["validationResults"] = $val;
         return $this;
    }
}