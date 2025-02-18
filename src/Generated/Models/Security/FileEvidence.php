<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FileEvidence extends AlertEvidence implements Parsable 
{
    /**
     * @var DetectionStatus|null $detectionStatus The status of the detection.The possible values are: detected, blocked, prevented, unknownFutureValue.
    */
    private ?DetectionStatus $detectionStatus = null;
    
    /**
     * @var FileDetails|null $fileDetails The file details.
    */
    private ?FileDetails $fileDetails = null;
    
    /**
     * @var string|null $mdeDeviceId A unique identifier assigned to a device by Microsoft Defender for Endpoint.
    */
    private ?string $mdeDeviceId = null;
    
    /**
     * Instantiates a new FileEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.fileEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileEvidence {
        return new FileEvidence();
    }

    /**
     * Gets the detectionStatus property value. The status of the detection.The possible values are: detected, blocked, prevented, unknownFutureValue.
     * @return DetectionStatus|null
    */
    public function getDetectionStatus(): ?DetectionStatus {
        return $this->detectionStatus;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'detectionStatus' => function (ParseNode $n) use ($o) { $o->setDetectionStatus($n->getEnumValue(DetectionStatus::class)); },
            'fileDetails' => function (ParseNode $n) use ($o) { $o->setFileDetails($n->getObjectValue(array(FileDetails::class, 'createFromDiscriminatorValue'))); },
            'mdeDeviceId' => function (ParseNode $n) use ($o) { $o->setMdeDeviceId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the fileDetails property value. The file details.
     * @return FileDetails|null
    */
    public function getFileDetails(): ?FileDetails {
        return $this->fileDetails;
    }

    /**
     * Gets the mdeDeviceId property value. A unique identifier assigned to a device by Microsoft Defender for Endpoint.
     * @return string|null
    */
    public function getMdeDeviceId(): ?string {
        return $this->mdeDeviceId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('detectionStatus', $this->detectionStatus);
        $writer->writeObjectValue('fileDetails', $this->fileDetails);
        $writer->writeStringValue('mdeDeviceId', $this->mdeDeviceId);
    }

    /**
     * Sets the detectionStatus property value. The status of the detection.The possible values are: detected, blocked, prevented, unknownFutureValue.
     *  @param DetectionStatus|null $value Value to set for the detectionStatus property.
    */
    public function setDetectionStatus(?DetectionStatus $value ): void {
        $this->detectionStatus = $value;
    }

    /**
     * Sets the fileDetails property value. The file details.
     *  @param FileDetails|null $value Value to set for the fileDetails property.
    */
    public function setFileDetails(?FileDetails $value ): void {
        $this->fileDetails = $value;
    }

    /**
     * Sets the mdeDeviceId property value. A unique identifier assigned to a device by Microsoft Defender for Endpoint.
     *  @param string|null $value Value to set for the mdeDeviceId property.
    */
    public function setMdeDeviceId(?string $value ): void {
        $this->mdeDeviceId = $value;
    }

}
