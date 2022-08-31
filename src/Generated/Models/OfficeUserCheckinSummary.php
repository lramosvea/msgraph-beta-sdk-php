<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OfficeUserCheckinSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $failedUserCount Total failed user check ins for the last 3 months.
    */
    private ?int $failedUserCount = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $succeededUserCount Total successful user check ins for the last 3 months.
    */
    private ?int $succeededUserCount = null;
    
    /**
     * Instantiates a new officeUserCheckinSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.officeUserCheckinSummary');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OfficeUserCheckinSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OfficeUserCheckinSummary {
        return new OfficeUserCheckinSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the failedUserCount property value. Total failed user check ins for the last 3 months.
     * @return int|null
    */
    public function getFailedUserCount(): ?int {
        return $this->failedUserCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'failedUserCount' => function (ParseNode $n) use ($o) { $o->setFailedUserCount($n->getIntegerValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'succeededUserCount' => function (ParseNode $n) use ($o) { $o->setSucceededUserCount($n->getIntegerValue()); },
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
     * Gets the succeededUserCount property value. Total successful user check ins for the last 3 months.
     * @return int|null
    */
    public function getSucceededUserCount(): ?int {
        return $this->succeededUserCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('failedUserCount', $this->failedUserCount);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('succeededUserCount', $this->succeededUserCount);
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
     * Sets the failedUserCount property value. Total failed user check ins for the last 3 months.
     *  @param int|null $value Value to set for the failedUserCount property.
    */
    public function setFailedUserCount(?int $value ): void {
        $this->failedUserCount = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the succeededUserCount property value. Total successful user check ins for the last 3 months.
     *  @param int|null $value Value to set for the succeededUserCount property.
    */
    public function setSucceededUserCount(?int $value ): void {
        $this->succeededUserCount = $value;
    }

}