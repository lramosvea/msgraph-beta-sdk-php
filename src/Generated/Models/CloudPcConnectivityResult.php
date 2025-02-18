<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcConnectivityResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<CloudPcHealthCheckItem>|null $failedHealthCheckItems A list of failed health check items. If the status property is available, this property will be empty.
    */
    private ?array $failedHealthCheckItems = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var CloudPcConnectivityStatus|null $status The status property
    */
    private ?CloudPcConnectivityStatus $status = null;
    
    /**
     * @var DateTime|null $updatedDateTime Datetime when the status was updated. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
    */
    private ?DateTime $updatedDateTime = null;
    
    /**
     * Instantiates a new cloudPcConnectivityResult and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.cloudPcConnectivityResult');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcConnectivityResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcConnectivityResult {
        return new CloudPcConnectivityResult();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the failedHealthCheckItems property value. A list of failed health check items. If the status property is available, this property will be empty.
     * @return array<CloudPcHealthCheckItem>|null
    */
    public function getFailedHealthCheckItems(): ?array {
        return $this->failedHealthCheckItems;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'failedHealthCheckItems' => function (ParseNode $n) use ($o) { $o->setFailedHealthCheckItems($n->getCollectionOfObjectValues(array(CloudPcHealthCheckItem::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(CloudPcConnectivityStatus::class)); },
            'updatedDateTime' => function (ParseNode $n) use ($o) { $o->setUpdatedDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the status property value. The status property
     * @return CloudPcConnectivityStatus|null
    */
    public function getStatus(): ?CloudPcConnectivityStatus {
        return $this->status;
    }

    /**
     * Gets the updatedDateTime property value. Datetime when the status was updated. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getUpdatedDateTime(): ?DateTime {
        return $this->updatedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('failedHealthCheckItems', $this->failedHealthCheckItems);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeDateTimeValue('updatedDateTime', $this->updatedDateTime);
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
     * Sets the failedHealthCheckItems property value. A list of failed health check items. If the status property is available, this property will be empty.
     *  @param array<CloudPcHealthCheckItem>|null $value Value to set for the failedHealthCheckItems property.
    */
    public function setFailedHealthCheckItems(?array $value ): void {
        $this->failedHealthCheckItems = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param CloudPcConnectivityStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CloudPcConnectivityStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the updatedDateTime property value. Datetime when the status was updated. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the updatedDateTime property.
    */
    public function setUpdatedDateTime(?DateTime $value ): void {
        $this->updatedDateTime = $value;
    }

}
