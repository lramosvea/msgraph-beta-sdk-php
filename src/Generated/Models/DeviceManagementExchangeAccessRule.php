<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementExchangeAccessRule implements AdditionalDataHolder, Parsable 
{
    /**
     * @var DeviceManagementExchangeAccessLevel|null $accessLevel Access Level for Exchange granted by this rule. Possible values are: none, allow, block, quarantine.
    */
    private ?DeviceManagementExchangeAccessLevel $accessLevel = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DeviceManagementExchangeDeviceClass|null $deviceClass Device Class which will be impacted by this rule.
    */
    private ?DeviceManagementExchangeDeviceClass $deviceClass = null;
    
    /**
     * Instantiates a new deviceManagementExchangeAccessRule and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementExchangeAccessRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementExchangeAccessRule {
        return new DeviceManagementExchangeAccessRule();
    }

    /**
     * Gets the accessLevel property value. Access Level for Exchange granted by this rule. Possible values are: none, allow, block, quarantine.
     * @return DeviceManagementExchangeAccessLevel|null
    */
    public function getAccessLevel(): ?DeviceManagementExchangeAccessLevel {
        return $this->accessLevel;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceClass property value. Device Class which will be impacted by this rule.
     * @return DeviceManagementExchangeDeviceClass|null
    */
    public function getDeviceClass(): ?DeviceManagementExchangeDeviceClass {
        return $this->deviceClass;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessLevel' => function (ParseNode $n) use ($o) { $o->setAccessLevel($n->getEnumValue(DeviceManagementExchangeAccessLevel::class)); },
            'deviceClass' => function (ParseNode $n) use ($o) { $o->setDeviceClass($n->getObjectValue(array(DeviceManagementExchangeDeviceClass::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('accessLevel', $this->accessLevel);
        $writer->writeObjectValue('deviceClass', $this->deviceClass);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accessLevel property value. Access Level for Exchange granted by this rule. Possible values are: none, allow, block, quarantine.
     *  @param DeviceManagementExchangeAccessLevel|null $value Value to set for the accessLevel property.
    */
    public function setAccessLevel(?DeviceManagementExchangeAccessLevel $value ): void {
        $this->accessLevel = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the deviceClass property value. Device Class which will be impacted by this rule.
     *  @param DeviceManagementExchangeDeviceClass|null $value Value to set for the deviceClass property.
    */
    public function setDeviceClass(?DeviceManagementExchangeDeviceClass $value ): void {
        $this->deviceClass = $value;
    }

}
