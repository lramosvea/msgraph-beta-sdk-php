<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DetectedSensitiveContent File
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
* DetectedSensitiveContent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DetectedSensitiveContent extends DetectedSensitiveContentBase
{

    /**
    * Gets the classificationAttributes
    *
    * @return ClassificationAttribute[]|null The classificationAttributes
    */
    public function getClassificationAttributes()
    {
        if (array_key_exists("classificationAttributes", $this->_propDict) && !is_null($this->_propDict["classificationAttributes"])) {
       
            if (count($this->_propDict['classificationAttributes']) > 0 && is_a($this->_propDict['classificationAttributes'][0], 'ClassificationAttribute')) {
                return $this->_propDict['classificationAttributes'];
            }
            $classificationAttributes = [];
            foreach ($this->_propDict['classificationAttributes'] as $singleValue) {
                $classificationAttributes []= new ClassificationAttribute($singleValue);
            }
            $this->_propDict['classificationAttributes'] = $classificationAttributes;
            return $this->_propDict['classificationAttributes'];
            }
        return null;
    }

    /**
    * Sets the classificationAttributes
    *
    * @param ClassificationAttribute[] $val The value to assign to the classificationAttributes
    *
    * @return DetectedSensitiveContent The DetectedSensitiveContent
    */
    public function setClassificationAttributes($val)
    {
        $this->_propDict["classificationAttributes"] = $val;
         return $this;
    }

    /**
    * Gets the classificationMethod
    *
    * @return ClassificationMethod|null The classificationMethod
    */
    public function getClassificationMethod()
    {
        if (array_key_exists("classificationMethod", $this->_propDict) && !is_null($this->_propDict["classificationMethod"])) {
     
            if (is_a($this->_propDict["classificationMethod"], "\Beta\Microsoft\Graph\Model\ClassificationMethod")) {
                return $this->_propDict["classificationMethod"];
            } else {
                $this->_propDict["classificationMethod"] = new ClassificationMethod($this->_propDict["classificationMethod"]);
                return $this->_propDict["classificationMethod"];
            }
        }
        return null;
    }

    /**
    * Sets the classificationMethod
    *
    * @param ClassificationMethod $val The value to assign to the classificationMethod
    *
    * @return DetectedSensitiveContent The DetectedSensitiveContent
    */
    public function setClassificationMethod($val)
    {
        $this->_propDict["classificationMethod"] = $val;
         return $this;
    }

    /**
    * Gets the matches
    *
    * @return SensitiveContentLocation[]|null The matches
    */
    public function getMatches()
    {
        if (array_key_exists("matches", $this->_propDict) && !is_null($this->_propDict["matches"])) {
       
            if (count($this->_propDict['matches']) > 0 && is_a($this->_propDict['matches'][0], 'SensitiveContentLocation')) {
                return $this->_propDict['matches'];
            }
            $matches = [];
            foreach ($this->_propDict['matches'] as $singleValue) {
                $matches []= new SensitiveContentLocation($singleValue);
            }
            $this->_propDict['matches'] = $matches;
            return $this->_propDict['matches'];
            }
        return null;
    }

    /**
    * Sets the matches
    *
    * @param SensitiveContentLocation[] $val The value to assign to the matches
    *
    * @return DetectedSensitiveContent The DetectedSensitiveContent
    */
    public function setMatches($val)
    {
        $this->_propDict["matches"] = $val;
         return $this;
    }

    /**
    * Gets the scope
    *
    * @return SensitiveTypeScope|null The scope
    */
    public function getScope()
    {
        if (array_key_exists("scope", $this->_propDict) && !is_null($this->_propDict["scope"])) {
     
            if (is_a($this->_propDict["scope"], "\Beta\Microsoft\Graph\Model\SensitiveTypeScope")) {
                return $this->_propDict["scope"];
            } else {
                $this->_propDict["scope"] = new SensitiveTypeScope($this->_propDict["scope"]);
                return $this->_propDict["scope"];
            }
        }
        return null;
    }

    /**
    * Sets the scope
    *
    * @param SensitiveTypeScope $val The value to assign to the scope
    *
    * @return DetectedSensitiveContent The DetectedSensitiveContent
    */
    public function setScope($val)
    {
        $this->_propDict["scope"] = $val;
         return $this;
    }

    /**
    * Gets the sensitiveTypeSource
    *
    * @return SensitiveTypeSource|null The sensitiveTypeSource
    */
    public function getSensitiveTypeSource()
    {
        if (array_key_exists("sensitiveTypeSource", $this->_propDict) && !is_null($this->_propDict["sensitiveTypeSource"])) {
     
            if (is_a($this->_propDict["sensitiveTypeSource"], "\Beta\Microsoft\Graph\Model\SensitiveTypeSource")) {
                return $this->_propDict["sensitiveTypeSource"];
            } else {
                $this->_propDict["sensitiveTypeSource"] = new SensitiveTypeSource($this->_propDict["sensitiveTypeSource"]);
                return $this->_propDict["sensitiveTypeSource"];
            }
        }
        return null;
    }

    /**
    * Sets the sensitiveTypeSource
    *
    * @param SensitiveTypeSource $val The value to assign to the sensitiveTypeSource
    *
    * @return DetectedSensitiveContent The DetectedSensitiveContent
    */
    public function setSensitiveTypeSource($val)
    {
        $this->_propDict["sensitiveTypeSource"] = $val;
         return $this;
    }
}
