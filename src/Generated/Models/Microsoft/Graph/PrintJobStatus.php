<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrintJobStatus implements AdditionalDataHolder, Parsable 
{
    /** @var bool|null $acquiredByPrinter  */
    private ?bool $acquiredByPrinter = null;
    
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $description A human-readable description of the print job's current processing state. Read-only. */
    private ?string $description = null;
    
    /** @var array<PrintJobStateDetail>|null $details Additional details for print job state. Valid values are described in the following table. Read-only. */
    private ?array $details = null;
    
    /** @var bool|null $isAcquiredByPrinter True if the job was acknowledged by a printer; false otherwise. Read-only. */
    private ?bool $isAcquiredByPrinter = null;
    
    /** @var PrintJobProcessingState|null $processingState  */
    private ?PrintJobProcessingState $processingState = null;
    
    /** @var string|null $processingStateDescription  */
    private ?string $processingStateDescription = null;
    
    /** @var PrintJobProcessingState|null $state The print job's current processing state. Valid values are described in the following table. Read-only. */
    private ?PrintJobProcessingState $state = null;
    
    /**
     * Instantiates a new printJobStatus and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintJobStatus
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PrintJobStatus {
        return new PrintJobStatus();
    }

    /**
     * Gets the acquiredByPrinter property value. 
     * @return bool|null
    */
    public function getAcquiredByPrinter(): ?bool {
        return $this->acquiredByPrinter;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. A human-readable description of the print job's current processing state. Read-only.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the details property value. Additional details for print job state. Valid values are described in the following table. Read-only.
     * @return array<PrintJobStateDetail>|null
    */
    public function getDetails(): ?array {
        return $this->details;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'acquiredByPrinter' => function (self $o, ParseNode $n) { $o->setAcquiredByPrinter($n->getBooleanValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'details' => function (self $o, ParseNode $n) { $o->setDetails($n->getCollectionOfEnumValues(PrintJobStateDetail::class)); },
            'isAcquiredByPrinter' => function (self $o, ParseNode $n) { $o->setIsAcquiredByPrinter($n->getBooleanValue()); },
            'processingState' => function (self $o, ParseNode $n) { $o->setProcessingState($n->getEnumValue(PrintJobProcessingState::class)); },
            'processingStateDescription' => function (self $o, ParseNode $n) { $o->setProcessingStateDescription($n->getStringValue()); },
            'state' => function (self $o, ParseNode $n) { $o->setState($n->getEnumValue(PrintJobProcessingState::class)); },
        ];
    }

    /**
     * Gets the isAcquiredByPrinter property value. True if the job was acknowledged by a printer; false otherwise. Read-only.
     * @return bool|null
    */
    public function getIsAcquiredByPrinter(): ?bool {
        return $this->isAcquiredByPrinter;
    }

    /**
     * Gets the processingState property value. 
     * @return PrintJobProcessingState|null
    */
    public function getProcessingState(): ?PrintJobProcessingState {
        return $this->processingState;
    }

    /**
     * Gets the processingStateDescription property value. 
     * @return string|null
    */
    public function getProcessingStateDescription(): ?string {
        return $this->processingStateDescription;
    }

    /**
     * Gets the state property value. The print job's current processing state. Valid values are described in the following table. Read-only.
     * @return PrintJobProcessingState|null
    */
    public function getState(): ?PrintJobProcessingState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('acquiredByPrinter', $this->acquiredByPrinter);
        $writer->writeStringValue('description', $this->description);
        $writer->writeCollectionOfEnumValues('details', $this->details);
        $writer->writeBooleanValue('isAcquiredByPrinter', $this->isAcquiredByPrinter);
        $writer->writeEnumValue('processingState', $this->processingState);
        $writer->writeStringValue('processingStateDescription', $this->processingStateDescription);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the acquiredByPrinter property value. 
     *  @param bool|null $value Value to set for the acquiredByPrinter property.
    */
    public function setAcquiredByPrinter(?bool $value ): void {
        $this->acquiredByPrinter = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the description property value. A human-readable description of the print job's current processing state. Read-only.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the details property value. Additional details for print job state. Valid values are described in the following table. Read-only.
     *  @param array<PrintJobStateDetail>|null $value Value to set for the details property.
    */
    public function setDetails(?array $value ): void {
        $this->details = $value;
    }

    /**
     * Sets the isAcquiredByPrinter property value. True if the job was acknowledged by a printer; false otherwise. Read-only.
     *  @param bool|null $value Value to set for the isAcquiredByPrinter property.
    */
    public function setIsAcquiredByPrinter(?bool $value ): void {
        $this->isAcquiredByPrinter = $value;
    }

    /**
     * Sets the processingState property value. 
     *  @param PrintJobProcessingState|null $value Value to set for the processingState property.
    */
    public function setProcessingState(?PrintJobProcessingState $value ): void {
        $this->processingState = $value;
    }

    /**
     * Sets the processingStateDescription property value. 
     *  @param string|null $value Value to set for the processingStateDescription property.
    */
    public function setProcessingStateDescription(?string $value ): void {
        $this->processingStateDescription = $value;
    }

    /**
     * Sets the state property value. The print job's current processing state. Valid values are described in the following table. Read-only.
     *  @param PrintJobProcessingState|null $value Value to set for the state property.
    */
    public function setState(?PrintJobProcessingState $value ): void {
        $this->state = $value;
    }

}
