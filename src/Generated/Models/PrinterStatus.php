<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrinterStatus implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $description A human-readable description of the printer's current processing state. Read-only.
    */
    private ?string $description = null;
    
    /**
     * @var array<PrinterProcessingStateDetail>|null $details The list of details describing why the printer is in the current state. Valid values are described in the following table. Read-only.
    */
    private ?array $details = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var PrinterProcessingState|null $processingState The processingState property
    */
    private ?PrinterProcessingState $processingState = null;
    
    /**
     * @var string|null $processingStateDescription The processingStateDescription property
    */
    private ?string $processingStateDescription = null;
    
    /**
     * @var array<PrinterProcessingStateReason>|null $processingStateReasons The processingStateReasons property
    */
    private ?array $processingStateReasons = null;
    
    /**
     * @var PrinterProcessingState|null $state The state property
    */
    private ?PrinterProcessingState $state = null;
    
    /**
     * Instantiates a new printerStatus and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.printerStatus');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrinterStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrinterStatus {
        return new PrinterStatus();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. A human-readable description of the printer's current processing state. Read-only.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the details property value. The list of details describing why the printer is in the current state. Valid values are described in the following table. Read-only.
     * @return array<PrinterProcessingStateDetail>|null
    */
    public function getDetails(): ?array {
        return $this->details;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'details' => function (ParseNode $n) use ($o) { $o->setDetails($n->getCollectionOfEnumValues(PrinterProcessingStateDetail::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'processingState' => function (ParseNode $n) use ($o) { $o->setProcessingState($n->getEnumValue(PrinterProcessingState::class)); },
            'processingStateDescription' => function (ParseNode $n) use ($o) { $o->setProcessingStateDescription($n->getStringValue()); },
            'processingStateReasons' => function (ParseNode $n) use ($o) { $o->setProcessingStateReasons($n->getCollectionOfEnumValues(PrinterProcessingStateReason::class)); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(PrinterProcessingState::class)); },
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
     * Gets the processingState property value. The processingState property
     * @return PrinterProcessingState|null
    */
    public function getProcessingState(): ?PrinterProcessingState {
        return $this->processingState;
    }

    /**
     * Gets the processingStateDescription property value. The processingStateDescription property
     * @return string|null
    */
    public function getProcessingStateDescription(): ?string {
        return $this->processingStateDescription;
    }

    /**
     * Gets the processingStateReasons property value. The processingStateReasons property
     * @return array<PrinterProcessingStateReason>|null
    */
    public function getProcessingStateReasons(): ?array {
        return $this->processingStateReasons;
    }

    /**
     * Gets the state property value. The state property
     * @return PrinterProcessingState|null
    */
    public function getState(): ?PrinterProcessingState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->description);
        $writer->writeCollectionOfEnumValues('details', $this->details);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('processingState', $this->processingState);
        $writer->writeStringValue('processingStateDescription', $this->processingStateDescription);
        $writer->writeCollectionOfEnumValues('processingStateReasons', $this->processingStateReasons);
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
     * Sets the description property value. A human-readable description of the printer's current processing state. Read-only.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the details property value. The list of details describing why the printer is in the current state. Valid values are described in the following table. Read-only.
     *  @param array<PrinterProcessingStateDetail>|null $value Value to set for the details property.
    */
    public function setDetails(?array $value ): void {
        $this->details = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the processingState property value. The processingState property
     *  @param PrinterProcessingState|null $value Value to set for the processingState property.
    */
    public function setProcessingState(?PrinterProcessingState $value ): void {
        $this->processingState = $value;
    }

    /**
     * Sets the processingStateDescription property value. The processingStateDescription property
     *  @param string|null $value Value to set for the processingStateDescription property.
    */
    public function setProcessingStateDescription(?string $value ): void {
        $this->processingStateDescription = $value;
    }

    /**
     * Sets the processingStateReasons property value. The processingStateReasons property
     *  @param array<PrinterProcessingStateReason>|null $value Value to set for the processingStateReasons property.
    */
    public function setProcessingStateReasons(?array $value ): void {
        $this->processingStateReasons = $value;
    }

    /**
     * Sets the state property value. The state property
     *  @param PrinterProcessingState|null $value Value to set for the state property.
    */
    public function setState(?PrinterProcessingState $value ): void {
        $this->state = $value;
    }

}
