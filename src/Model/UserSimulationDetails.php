<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserSimulationDetails File
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
* UserSimulationDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserSimulationDetails extends Entity
{
    /**
    * Gets the assignedTrainingsCount
    * Number of trainings assigned to a user in an attack simulation and training campaign.
    *
    * @return int|null The assignedTrainingsCount
    */
    public function getAssignedTrainingsCount()
    {
        if (array_key_exists("assignedTrainingsCount", $this->_propDict)) {
            return $this->_propDict["assignedTrainingsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the assignedTrainingsCount
    * Number of trainings assigned to a user in an attack simulation and training campaign.
    *
    * @param int $val The value of the assignedTrainingsCount
    *
    * @return UserSimulationDetails
    */
    public function setAssignedTrainingsCount($val)
    {
        $this->_propDict["assignedTrainingsCount"] = $val;
        return $this;
    }
    /**
    * Gets the completedTrainingsCount
    * Number of trainings completed by a user in an attack simulation and training campaign.
    *
    * @return int|null The completedTrainingsCount
    */
    public function getCompletedTrainingsCount()
    {
        if (array_key_exists("completedTrainingsCount", $this->_propDict)) {
            return $this->_propDict["completedTrainingsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the completedTrainingsCount
    * Number of trainings completed by a user in an attack simulation and training campaign.
    *
    * @param int $val The value of the completedTrainingsCount
    *
    * @return UserSimulationDetails
    */
    public function setCompletedTrainingsCount($val)
    {
        $this->_propDict["completedTrainingsCount"] = $val;
        return $this;
    }

    /**
    * Gets the compromisedDateTime
    * Date and time of the compromising online action by a user in an attack simulation and training campaign.
    *
    * @return \DateTime|null The compromisedDateTime
    */
    public function getCompromisedDateTime()
    {
        if (array_key_exists("compromisedDateTime", $this->_propDict) && !is_null($this->_propDict["compromisedDateTime"])) {
     
            if (is_a($this->_propDict["compromisedDateTime"], "\DateTime")) {
                return $this->_propDict["compromisedDateTime"];
            } else {
                $this->_propDict["compromisedDateTime"] = new \DateTime($this->_propDict["compromisedDateTime"]);
                return $this->_propDict["compromisedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the compromisedDateTime
    * Date and time of the compromising online action by a user in an attack simulation and training campaign.
    *
    * @param \DateTime $val The value to assign to the compromisedDateTime
    *
    * @return UserSimulationDetails The UserSimulationDetails
    */
    public function setCompromisedDateTime($val)
    {
        $this->_propDict["compromisedDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the inProgressTrainingsCount
    * Number of trainings in progress by a user in an attack simulation and training campaign.
    *
    * @return int|null The inProgressTrainingsCount
    */
    public function getInProgressTrainingsCount()
    {
        if (array_key_exists("inProgressTrainingsCount", $this->_propDict)) {
            return $this->_propDict["inProgressTrainingsCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inProgressTrainingsCount
    * Number of trainings in progress by a user in an attack simulation and training campaign.
    *
    * @param int $val The value of the inProgressTrainingsCount
    *
    * @return UserSimulationDetails
    */
    public function setInProgressTrainingsCount($val)
    {
        $this->_propDict["inProgressTrainingsCount"] = $val;
        return $this;
    }
    /**
    * Gets the isCompromised
    * Flag representing if user was compromised in an attack simulation and training campaign.
    *
    * @return bool|null The isCompromised
    */
    public function getIsCompromised()
    {
        if (array_key_exists("isCompromised", $this->_propDict)) {
            return $this->_propDict["isCompromised"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isCompromised
    * Flag representing if user was compromised in an attack simulation and training campaign.
    *
    * @param bool $val The value of the isCompromised
    *
    * @return UserSimulationDetails
    */
    public function setIsCompromised($val)
    {
        $this->_propDict["isCompromised"] = $val;
        return $this;
    }

    /**
    * Gets the reportedPhishDateTime
    * Date and time when user reported delivered payload as phish in the attack simulation and training campaign.
    *
    * @return \DateTime|null The reportedPhishDateTime
    */
    public function getReportedPhishDateTime()
    {
        if (array_key_exists("reportedPhishDateTime", $this->_propDict) && !is_null($this->_propDict["reportedPhishDateTime"])) {
     
            if (is_a($this->_propDict["reportedPhishDateTime"], "\DateTime")) {
                return $this->_propDict["reportedPhishDateTime"];
            } else {
                $this->_propDict["reportedPhishDateTime"] = new \DateTime($this->_propDict["reportedPhishDateTime"]);
                return $this->_propDict["reportedPhishDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the reportedPhishDateTime
    * Date and time when user reported delivered payload as phish in the attack simulation and training campaign.
    *
    * @param \DateTime $val The value to assign to the reportedPhishDateTime
    *
    * @return UserSimulationDetails The UserSimulationDetails
    */
    public function setReportedPhishDateTime($val)
    {
        $this->_propDict["reportedPhishDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the simulationEvents
    * List of simulation events of a user in the attack simulation and training campaign.
    *
    * @return UserSimulationEventInfo[]|null The simulationEvents
    */
    public function getSimulationEvents()
    {
        if (array_key_exists("simulationEvents", $this->_propDict) && !is_null($this->_propDict["simulationEvents"])) {
       
            if (count($this->_propDict['simulationEvents']) > 0 && is_a($this->_propDict['simulationEvents'][0], 'UserSimulationEventInfo')) {
               return $this->_propDict['simulationEvents'];
            }
            $simulationEvents = [];
            foreach ($this->_propDict['simulationEvents'] as $singleValue) {
               $simulationEvents []= new UserSimulationEventInfo($singleValue);
            }
            $this->_propDict['simulationEvents'] = $simulationEvents;
            return $this->_propDict['simulationEvents'];
            }
        return null;
    }

    /**
    * Sets the simulationEvents
    * List of simulation events of a user in the attack simulation and training campaign.
    *
    * @param UserSimulationEventInfo[] $val The value to assign to the simulationEvents
    *
    * @return UserSimulationDetails The UserSimulationDetails
    */
    public function setSimulationEvents($val)
    {
        $this->_propDict["simulationEvents"] = $val;
         return $this;
    }

    /**
    * Gets the simulationUser
    * User in an attack simulation and training campaign.
    *
    * @return AttackSimulationUser|null The simulationUser
    */
    public function getSimulationUser()
    {
        if (array_key_exists("simulationUser", $this->_propDict) && !is_null($this->_propDict["simulationUser"])) {
     
            if (is_a($this->_propDict["simulationUser"], "\Beta\Microsoft\Graph\Model\AttackSimulationUser")) {
                return $this->_propDict["simulationUser"];
            } else {
                $this->_propDict["simulationUser"] = new AttackSimulationUser($this->_propDict["simulationUser"]);
                return $this->_propDict["simulationUser"];
            }
        }
        return null;
    }

    /**
    * Sets the simulationUser
    * User in an attack simulation and training campaign.
    *
    * @param AttackSimulationUser $val The value to assign to the simulationUser
    *
    * @return UserSimulationDetails The UserSimulationDetails
    */
    public function setSimulationUser($val)
    {
        $this->_propDict["simulationUser"] = $val;
         return $this;
    }

    /**
    * Gets the trainingEvents
    * List of training events of a user in the attack simulation and training campaign.
    *
    * @return UserTrainingEventInfo[]|null The trainingEvents
    */
    public function getTrainingEvents()
    {
        if (array_key_exists("trainingEvents", $this->_propDict) && !is_null($this->_propDict["trainingEvents"])) {
       
            if (count($this->_propDict['trainingEvents']) > 0 && is_a($this->_propDict['trainingEvents'][0], 'UserTrainingEventInfo')) {
               return $this->_propDict['trainingEvents'];
            }
            $trainingEvents = [];
            foreach ($this->_propDict['trainingEvents'] as $singleValue) {
               $trainingEvents []= new UserTrainingEventInfo($singleValue);
            }
            $this->_propDict['trainingEvents'] = $trainingEvents;
            return $this->_propDict['trainingEvents'];
            }
        return null;
    }

    /**
    * Sets the trainingEvents
    * List of training events of a user in the attack simulation and training campaign.
    *
    * @param UserTrainingEventInfo[] $val The value to assign to the trainingEvents
    *
    * @return UserSimulationDetails The UserSimulationDetails
    */
    public function setTrainingEvents($val)
    {
        $this->_propDict["trainingEvents"] = $val;
         return $this;
    }
}
