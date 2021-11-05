<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecommendLabelAction File
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
* RecommendLabelAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RecommendLabelAction extends InformationProtectionAction
{

    /**
    * Gets the actions
    * Actions to take if the label is accepted by the user.
    *
    * @return InformationProtectionAction[]|null The actions
    */
    public function getActions()
    {
        if (array_key_exists("actions", $this->_propDict) && !is_null($this->_propDict["actions"])) {
       
            if (count($this->_propDict['actions']) > 0 && is_a($this->_propDict['actions'][0], 'InformationProtectionAction')) {
                return $this->_propDict['actions'];
            }
            $actions = [];
            foreach ($this->_propDict['actions'] as $singleValue) {
                $actions []= new InformationProtectionAction($singleValue);
            }
            $this->_propDict['actions'] = $actions;
            return $this->_propDict['actions'];
            }
        return null;
    }

    /**
    * Sets the actions
    * Actions to take if the label is accepted by the user.
    *
    * @param InformationProtectionAction[] $val The value to assign to the actions
    *
    * @return RecommendLabelAction The RecommendLabelAction
    */
    public function setActions($val)
    {
        $this->_propDict["actions"] = $val;
         return $this;
    }

    /**
    * Gets the actionSource
    * Possible values are: manual, automatic, recommended, default.
    *
    * @return ActionSource|null The actionSource
    */
    public function getActionSource()
    {
        if (array_key_exists("actionSource", $this->_propDict) && !is_null($this->_propDict["actionSource"])) {
     
            if (is_a($this->_propDict["actionSource"], "\Beta\Microsoft\Graph\Model\ActionSource")) {
                return $this->_propDict["actionSource"];
            } else {
                $this->_propDict["actionSource"] = new ActionSource($this->_propDict["actionSource"]);
                return $this->_propDict["actionSource"];
            }
        }
        return null;
    }

    /**
    * Sets the actionSource
    * Possible values are: manual, automatic, recommended, default.
    *
    * @param ActionSource $val The value to assign to the actionSource
    *
    * @return RecommendLabelAction The RecommendLabelAction
    */
    public function setActionSource($val)
    {
        $this->_propDict["actionSource"] = $val;
         return $this;
    }

    /**
    * Gets the label
    * The label that is being recommended.
    *
    * @return LabelDetails|null The label
    */
    public function getLabel()
    {
        if (array_key_exists("label", $this->_propDict) && !is_null($this->_propDict["label"])) {
     
            if (is_a($this->_propDict["label"], "\Beta\Microsoft\Graph\Model\LabelDetails")) {
                return $this->_propDict["label"];
            } else {
                $this->_propDict["label"] = new LabelDetails($this->_propDict["label"]);
                return $this->_propDict["label"];
            }
        }
        return null;
    }

    /**
    * Sets the label
    * The label that is being recommended.
    *
    * @param LabelDetails $val The value to assign to the label
    *
    * @return RecommendLabelAction The RecommendLabelAction
    */
    public function setLabel($val)
    {
        $this->_propDict["label"] = $val;
         return $this;
    }
    /**
    * Gets the responsibleSensitiveTypeIds
    * The sensitive information type GUIDs that caused the recommendation to be given.
    *
    * @return string|null The responsibleSensitiveTypeIds
    */
    public function getResponsibleSensitiveTypeIds()
    {
        if (array_key_exists("responsibleSensitiveTypeIds", $this->_propDict)) {
            return $this->_propDict["responsibleSensitiveTypeIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the responsibleSensitiveTypeIds
    * The sensitive information type GUIDs that caused the recommendation to be given.
    *
    * @param string[] $val The value of the responsibleSensitiveTypeIds
    *
    * @return RecommendLabelAction
    */
    public function setResponsibleSensitiveTypeIds($val)
    {
        $this->_propDict["responsibleSensitiveTypeIds"] = $val;
        return $this;
    }
}
