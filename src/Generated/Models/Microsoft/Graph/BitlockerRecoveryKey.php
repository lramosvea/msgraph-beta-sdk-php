<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BitlockerRecoveryKey extends Entity 
{
    /** @var DateTime|null $createdDateTime The date and time when the key was originally backed up to Azure Active Directory. Not nullable. */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $deviceId Identifier of the device the BitLocker key is originally backed up from. Supports $filter (eq). */
    private ?string $deviceId = null;
    
    /** @var string|null $key The BitLocker recovery key. Returned only on $select. Not nullable. */
    private ?string $key = null;
    
    /** @var VolumeType|null $volumeType Indicates the type of volume the BitLocker key is associated with. The possible values are: 1 (for operatingSystemVolume), 2 (for fixedDataVolume), 3 (for removableDataVolume), and 4 (for unknownFutureValue). */
    private ?VolumeType $volumeType = null;
    
    /**
     * Instantiates a new bitlockerRecoveryKey and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BitlockerRecoveryKey
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): BitlockerRecoveryKey {
        return new BitlockerRecoveryKey();
    }

    /**
     * Gets the createdDateTime property value. The date and time when the key was originally backed up to Azure Active Directory. Not nullable.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the deviceId property value. Identifier of the device the BitLocker key is originally backed up from. Supports $filter (eq).
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'deviceId' => function (self $o, ParseNode $n) { $o->setDeviceId($n->getStringValue()); },
            'key' => function (self $o, ParseNode $n) { $o->setKey($n->getStringValue()); },
            'volumeType' => function (self $o, ParseNode $n) { $o->setVolumeType($n->getEnumValue(VolumeType::class)); },
        ]);
    }

    /**
     * Gets the key property value. The BitLocker recovery key. Returned only on $select. Not nullable.
     * @return string|null
    */
    public function getKey(): ?string {
        return $this->key;
    }

    /**
     * Gets the volumeType property value. Indicates the type of volume the BitLocker key is associated with. The possible values are: 1 (for operatingSystemVolume), 2 (for fixedDataVolume), 3 (for removableDataVolume), and 4 (for unknownFutureValue).
     * @return VolumeType|null
    */
    public function getVolumeType(): ?VolumeType {
        return $this->volumeType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeStringValue('key', $this->key);
        $writer->writeEnumValue('volumeType', $this->volumeType);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the key was originally backed up to Azure Active Directory. Not nullable.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the deviceId property value. Identifier of the device the BitLocker key is originally backed up from. Supports $filter (eq).
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the key property value. The BitLocker recovery key. Returned only on $select. Not nullable.
     *  @param string|null $value Value to set for the key property.
    */
    public function setKey(?string $value ): void {
        $this->key = $value;
    }

    /**
     * Sets the volumeType property value. Indicates the type of volume the BitLocker key is associated with. The possible values are: 1 (for operatingSystemVolume), 2 (for fixedDataVolume), 3 (for removableDataVolume), and 4 (for unknownFutureValue).
     *  @param VolumeType|null $value Value to set for the volumeType property.
    */
    public function setVolumeType(?VolumeType $value ): void {
        $this->volumeType = $value;
    }

}
