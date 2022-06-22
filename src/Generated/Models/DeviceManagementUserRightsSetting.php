<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementUserRightsSetting implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<DeviceManagementUserRightsLocalUserOrGroup>|null $localUsersOrGroups Representing a collection of local users or groups which will be set on device if the state of this setting is Allowed. This collection can contain a maximum of 500 elements.
    */
    private ?array $localUsersOrGroups = null;
    
    /**
     * @var StateManagementSetting|null $state Representing the current state of this user rights setting. Possible values are: notConfigured, blocked, allowed.
    */
    private ?StateManagementSetting $state = null;
    
    /**
     * Instantiates a new deviceManagementUserRightsSetting and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementUserRightsSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementUserRightsSetting {
        return new DeviceManagementUserRightsSetting();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'localUsersOrGroups' => function (ParseNode $n) use ($o) { $o->setLocalUsersOrGroups($n->getCollectionOfObjectValues(array(DeviceManagementUserRightsLocalUserOrGroup::class, 'createFromDiscriminatorValue'))); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(StateManagementSetting::class)); },
        ];
    }

    /**
     * Gets the localUsersOrGroups property value. Representing a collection of local users or groups which will be set on device if the state of this setting is Allowed. This collection can contain a maximum of 500 elements.
     * @return array<DeviceManagementUserRightsLocalUserOrGroup>|null
    */
    public function getLocalUsersOrGroups(): ?array {
        return $this->localUsersOrGroups;
    }

    /**
     * Gets the state property value. Representing the current state of this user rights setting. Possible values are: notConfigured, blocked, allowed.
     * @return StateManagementSetting|null
    */
    public function getState(): ?StateManagementSetting {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('localUsersOrGroups', $this->localUsersOrGroups);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the localUsersOrGroups property value. Representing a collection of local users or groups which will be set on device if the state of this setting is Allowed. This collection can contain a maximum of 500 elements.
     *  @param array<DeviceManagementUserRightsLocalUserOrGroup>|null $value Value to set for the localUsersOrGroups property.
    */
    public function setLocalUsersOrGroups(?array $value ): void {
        $this->localUsersOrGroups = $value;
    }

    /**
     * Sets the state property value. Representing the current state of this user rights setting. Possible values are: notConfigured, blocked, allowed.
     *  @param StateManagementSetting|null $value Value to set for the state property.
    */
    public function setState(?StateManagementSetting $value ): void {
        $this->state = $value;
    }

}
