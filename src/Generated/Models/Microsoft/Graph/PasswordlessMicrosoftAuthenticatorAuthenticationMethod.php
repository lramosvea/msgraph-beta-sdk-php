<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PasswordlessMicrosoftAuthenticatorAuthenticationMethod extends AuthenticationMethod 
{
    /** @var DateTime|null $createdDateTime  */
    private ?DateTime $createdDateTime = null;
    
    /** @var DateTime|null $creationDateTime The timestamp when this method was registered to the user. */
    private ?DateTime $creationDateTime = null;
    
    /** @var Device|null $device  */
    private ?Device $device = null;
    
    /** @var string|null $displayName The display name of the mobile device as given by the user. */
    private ?string $displayName = null;
    
    /**
     * Instantiates a new passwordlessMicrosoftAuthenticatorAuthenticationMethod and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PasswordlessMicrosoftAuthenticatorAuthenticationMethod
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PasswordlessMicrosoftAuthenticatorAuthenticationMethod {
        return new PasswordlessMicrosoftAuthenticatorAuthenticationMethod();
    }

    /**
     * Gets the createdDateTime property value. 
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the creationDateTime property value. The timestamp when this method was registered to the user.
     * @return DateTime|null
    */
    public function getCreationDateTime(): ?DateTime {
        return $this->creationDateTime;
    }

    /**
     * Gets the device property value. 
     * @return Device|null
    */
    public function getDevice(): ?Device {
        return $this->device;
    }

    /**
     * Gets the displayName property value. The display name of the mobile device as given by the user.
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
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'creationDateTime' => function (self $o, ParseNode $n) { $o->setCreationDateTime($n->getDateTimeValue()); },
            'device' => function (self $o, ParseNode $n) { $o->setDevice($n->getObjectValue(Device::class)); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeDateTimeValue('creationDateTime', $this->creationDateTime);
        $writer->writeObjectValue('device', $this->device);
        $writer->writeStringValue('displayName', $this->displayName);
    }

    /**
     * Sets the createdDateTime property value. 
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the creationDateTime property value. The timestamp when this method was registered to the user.
     *  @param DateTime|null $value Value to set for the creationDateTime property.
    */
    public function setCreationDateTime(?DateTime $value ): void {
        $this->creationDateTime = $value;
    }

    /**
     * Sets the device property value. 
     *  @param Device|null $value Value to set for the device property.
    */
    public function setDevice(?Device $value ): void {
        $this->device = $value;
    }

    /**
     * Sets the displayName property value. The display name of the mobile device as given by the user.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

}
