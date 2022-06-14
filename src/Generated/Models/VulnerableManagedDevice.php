<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VulnerableManagedDevice extends Entity implements Parsable 
{
    /**
     * @var string|null $displayName The device name.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $lastSyncDateTime The last sync date.
    */
    private ?DateTime $lastSyncDateTime = null;
    
    /**
     * @var string|null $managedDeviceId The Intune managed device ID.
    */
    private ?string $managedDeviceId = null;
    
    /**
     * Instantiates a new vulnerableManagedDevice and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VulnerableManagedDevice
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VulnerableManagedDevice {
        return new VulnerableManagedDevice();
    }

    /**
     * Gets the displayName property value. The device name.
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'lastSyncDateTime' => function (ParseNode $n) use ($o) { $o->setLastSyncDateTime($n->getDateTimeValue()); },
            'managedDeviceId' => function (ParseNode $n) use ($o) { $o->setManagedDeviceId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastSyncDateTime property value. The last sync date.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        return $this->lastSyncDateTime;
    }

    /**
     * Gets the managedDeviceId property value. The Intune managed device ID.
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        return $this->managedDeviceId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastSyncDateTime', $this->lastSyncDateTime);
        $writer->writeStringValue('managedDeviceId', $this->managedDeviceId);
    }

    /**
     * Sets the displayName property value. The device name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastSyncDateTime property value. The last sync date.
     *  @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value ): void {
        $this->lastSyncDateTime = $value;
    }

    /**
     * Sets the managedDeviceId property value. The Intune managed device ID.
     *  @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value ): void {
        $this->managedDeviceId = $value;
    }

}
