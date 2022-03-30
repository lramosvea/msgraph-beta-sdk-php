<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementSettingCategory extends Entity 
{
    /** @var string|null $displayName The category name */
    private ?string $displayName = null;
    
    /** @var bool|null $hasRequiredSetting The category contains top level required setting */
    private ?bool $hasRequiredSetting = null;
    
    /** @var array<DeviceManagementSettingDefinition>|null $settingDefinitions The setting definitions this category contains */
    private ?array $settingDefinitions = null;
    
    /**
     * Instantiates a new deviceManagementSettingCategory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementSettingCategory
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementSettingCategory {
        return new DeviceManagementSettingCategory();
    }

    /**
     * Gets the displayName property value. The category name
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'hasRequiredSetting' => function (self $o, ParseNode $n) { $o->setHasRequiredSetting($n->getBooleanValue()); },
            'settingDefinitions' => function (self $o, ParseNode $n) { $o->setSettingDefinitions($n->getCollectionOfObjectValues(DeviceManagementSettingDefinition::class)); },
        ]);
    }

    /**
     * Gets the hasRequiredSetting property value. The category contains top level required setting
     * @return bool|null
    */
    public function getHasRequiredSetting(): ?bool {
        return $this->hasRequiredSetting;
    }

    /**
     * Gets the settingDefinitions property value. The setting definitions this category contains
     * @return array<DeviceManagementSettingDefinition>|null
    */
    public function getSettingDefinitions(): ?array {
        return $this->settingDefinitions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('hasRequiredSetting', $this->hasRequiredSetting);
        $writer->writeCollectionOfObjectValues('settingDefinitions', $this->settingDefinitions);
    }

    /**
     * Sets the displayName property value. The category name
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the hasRequiredSetting property value. The category contains top level required setting
     *  @param bool|null $value Value to set for the hasRequiredSetting property.
    */
    public function setHasRequiredSetting(?bool $value ): void {
        $this->hasRequiredSetting = $value;
    }

    /**
     * Sets the settingDefinitions property value. The setting definitions this category contains
     *  @param array<DeviceManagementSettingDefinition>|null $value Value to set for the settingDefinitions property.
    */
    public function setSettingDefinitions(?array $value ): void {
        $this->settingDefinitions = $value;
    }

}
