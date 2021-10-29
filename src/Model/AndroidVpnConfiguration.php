<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidVpnConfiguration File
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
* AndroidVpnConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidVpnConfiguration extends DeviceConfiguration
{
    /**
    * Gets the authenticationMethod
    * Authentication method. Possible values are: certificate, usernameAndPassword, sharedSecret, derivedCredential, azureAD.
    *
    * @return VpnAuthenticationMethod|null The authenticationMethod
    */
    public function getAuthenticationMethod()
    {
        if (array_key_exists("authenticationMethod", $this->_propDict) && !is_null($this->_propDict["authenticationMethod"])) {
            if (is_a($this->_propDict["authenticationMethod"], "\Beta\Microsoft\Graph\Model\VpnAuthenticationMethod")) {
                return $this->_propDict["authenticationMethod"];
            } else {
                $this->_propDict["authenticationMethod"] = new VpnAuthenticationMethod($this->_propDict["authenticationMethod"]);
                return $this->_propDict["authenticationMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the authenticationMethod
    * Authentication method. Possible values are: certificate, usernameAndPassword, sharedSecret, derivedCredential, azureAD.
    *
    * @param VpnAuthenticationMethod $val The authenticationMethod
    *
    * @return AndroidVpnConfiguration
    */
    public function setAuthenticationMethod($val)
    {
        $this->_propDict["authenticationMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the connectionName
    * Connection name displayed to the user.
    *
    * @return string|null The connectionName
    */
    public function getConnectionName()
    {
        if (array_key_exists("connectionName", $this->_propDict)) {
            return $this->_propDict["connectionName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the connectionName
    * Connection name displayed to the user.
    *
    * @param string $val The connectionName
    *
    * @return AndroidVpnConfiguration
    */
    public function setConnectionName($val)
    {
        $this->_propDict["connectionName"] = $val;
        return $this;
    }
    
    /**
    * Gets the connectionType
    * Connection type. Possible values are: ciscoAnyConnect, pulseSecure, f5EdgeClient, dellSonicWallMobileConnect, checkPointCapsuleVpn, citrix, microsoftTunnel, netMotionMobility, microsoftProtect.
    *
    * @return AndroidVpnConnectionType|null The connectionType
    */
    public function getConnectionType()
    {
        if (array_key_exists("connectionType", $this->_propDict) && !is_null($this->_propDict["connectionType"])) {
            if (is_a($this->_propDict["connectionType"], "\Beta\Microsoft\Graph\Model\AndroidVpnConnectionType")) {
                return $this->_propDict["connectionType"];
            } else {
                $this->_propDict["connectionType"] = new AndroidVpnConnectionType($this->_propDict["connectionType"]);
                return $this->_propDict["connectionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the connectionType
    * Connection type. Possible values are: ciscoAnyConnect, pulseSecure, f5EdgeClient, dellSonicWallMobileConnect, checkPointCapsuleVpn, citrix, microsoftTunnel, netMotionMobility, microsoftProtect.
    *
    * @param AndroidVpnConnectionType $val The connectionType
    *
    * @return AndroidVpnConfiguration
    */
    public function setConnectionType($val)
    {
        $this->_propDict["connectionType"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customData
    * Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
     *
     * @return KeyValue[]|null The customData
     */
    public function getCustomData()
    {
        if (array_key_exists('customData', $this->_propDict) && !is_null($this->_propDict['customData'])) {
            $customData = [];
            if (count($this->_propDict['customData']) > 0 && is_a($this->_propDict['customData'][0], 'KeyValue')) {
                return $this->_propDict['customData'];
            }
            foreach ($this->_propDict['customData'] as $singleValue) {
                $customData []= new KeyValue($singleValue);
            }
            $this->_propDict['customData'] = $customData;
            return $this->_propDict['customData'];
        }
        return null;
    }
    
    /** 
    * Sets the customData
    * Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
    *
    * @param KeyValue[] $val The customData
    *
    * @return AndroidVpnConfiguration
    */
    public function setCustomData($val)
    {
        $this->_propDict["customData"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customKeyValueData
    * Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
     *
     * @return KeyValuePair[]|null The customKeyValueData
     */
    public function getCustomKeyValueData()
    {
        if (array_key_exists('customKeyValueData', $this->_propDict) && !is_null($this->_propDict['customKeyValueData'])) {
            $customKeyValueData = [];
            if (count($this->_propDict['customKeyValueData']) > 0 && is_a($this->_propDict['customKeyValueData'][0], 'KeyValuePair')) {
                return $this->_propDict['customKeyValueData'];
            }
            foreach ($this->_propDict['customKeyValueData'] as $singleValue) {
                $customKeyValueData []= new KeyValuePair($singleValue);
            }
            $this->_propDict['customKeyValueData'] = $customKeyValueData;
            return $this->_propDict['customKeyValueData'];
        }
        return null;
    }
    
    /** 
    * Sets the customKeyValueData
    * Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
    *
    * @param KeyValuePair[] $val The customKeyValueData
    *
    * @return AndroidVpnConfiguration
    */
    public function setCustomKeyValueData($val)
    {
        $this->_propDict["customKeyValueData"] = $val;
        return $this;
    }
    
    /**
    * Gets the fingerprint
    * Fingerprint is a string that will be used to verify the VPN server can be trusted, which is only applicable when connection type is Check Point Capsule VPN.
    *
    * @return string|null The fingerprint
    */
    public function getFingerprint()
    {
        if (array_key_exists("fingerprint", $this->_propDict)) {
            return $this->_propDict["fingerprint"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fingerprint
    * Fingerprint is a string that will be used to verify the VPN server can be trusted, which is only applicable when connection type is Check Point Capsule VPN.
    *
    * @param string $val The fingerprint
    *
    * @return AndroidVpnConfiguration
    */
    public function setFingerprint($val)
    {
        $this->_propDict["fingerprint"] = $val;
        return $this;
    }
    
    /**
    * Gets the realm
    * Realm when connection type is set to Pulse Secure.
    *
    * @return string|null The realm
    */
    public function getRealm()
    {
        if (array_key_exists("realm", $this->_propDict)) {
            return $this->_propDict["realm"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the realm
    * Realm when connection type is set to Pulse Secure.
    *
    * @param string $val The realm
    *
    * @return AndroidVpnConfiguration
    */
    public function setRealm($val)
    {
        $this->_propDict["realm"] = $val;
        return $this;
    }
    
    /**
    * Gets the role
    * Role when connection type is set to Pulse Secure.
    *
    * @return string|null The role
    */
    public function getRole()
    {
        if (array_key_exists("role", $this->_propDict)) {
            return $this->_propDict["role"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the role
    * Role when connection type is set to Pulse Secure.
    *
    * @param string $val The role
    *
    * @return AndroidVpnConfiguration
    */
    public function setRole($val)
    {
        $this->_propDict["role"] = $val;
        return $this;
    }
    

     /** 
     * Gets the servers
    * List of VPN Servers on the network. Make sure end users can access these network locations. This collection can contain a maximum of 500 elements.
     *
     * @return VpnServer[]|null The servers
     */
    public function getServers()
    {
        if (array_key_exists('servers', $this->_propDict) && !is_null($this->_propDict['servers'])) {
            $servers = [];
            if (count($this->_propDict['servers']) > 0 && is_a($this->_propDict['servers'][0], 'VpnServer')) {
                return $this->_propDict['servers'];
            }
            foreach ($this->_propDict['servers'] as $singleValue) {
                $servers []= new VpnServer($singleValue);
            }
            $this->_propDict['servers'] = $servers;
            return $this->_propDict['servers'];
        }
        return null;
    }
    
    /** 
    * Sets the servers
    * List of VPN Servers on the network. Make sure end users can access these network locations. This collection can contain a maximum of 500 elements.
    *
    * @param VpnServer[] $val The servers
    *
    * @return AndroidVpnConfiguration
    */
    public function setServers($val)
    {
        $this->_propDict["servers"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityCertificate
    * Identity certificate for client authentication when authentication method is certificate.
    *
    * @return AndroidCertificateProfileBase|null The identityCertificate
    */
    public function getIdentityCertificate()
    {
        if (array_key_exists("identityCertificate", $this->_propDict) && !is_null($this->_propDict["identityCertificate"])) {
            if (is_a($this->_propDict["identityCertificate"], "\Beta\Microsoft\Graph\Model\AndroidCertificateProfileBase")) {
                return $this->_propDict["identityCertificate"];
            } else {
                $this->_propDict["identityCertificate"] = new AndroidCertificateProfileBase($this->_propDict["identityCertificate"]);
                return $this->_propDict["identityCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identityCertificate
    * Identity certificate for client authentication when authentication method is certificate.
    *
    * @param AndroidCertificateProfileBase $val The identityCertificate
    *
    * @return AndroidVpnConfiguration
    */
    public function setIdentityCertificate($val)
    {
        $this->_propDict["identityCertificate"] = $val;
        return $this;
    }
    
}
