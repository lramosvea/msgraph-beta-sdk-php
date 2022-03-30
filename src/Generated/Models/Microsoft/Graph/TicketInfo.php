<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TicketInfo implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $ticketNumber Ticket number meta data */
    private ?string $ticketNumber = null;
    
    /** @var string|null $ticketSystem Ticket system meta data */
    private ?string $ticketSystem = null;
    
    /**
     * Instantiates a new ticketInfo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TicketInfo
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TicketInfo {
        return new TicketInfo();
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
        return  [
            'ticketNumber' => function (self $o, ParseNode $n) { $o->setTicketNumber($n->getStringValue()); },
            'ticketSystem' => function (self $o, ParseNode $n) { $o->setTicketSystem($n->getStringValue()); },
        ];
    }

    /**
     * Gets the ticketNumber property value. Ticket number meta data
     * @return string|null
    */
    public function getTicketNumber(): ?string {
        return $this->ticketNumber;
    }

    /**
     * Gets the ticketSystem property value. Ticket system meta data
     * @return string|null
    */
    public function getTicketSystem(): ?string {
        return $this->ticketSystem;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('ticketNumber', $this->ticketNumber);
        $writer->writeStringValue('ticketSystem', $this->ticketSystem);
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
     * Sets the ticketNumber property value. Ticket number meta data
     *  @param string|null $value Value to set for the ticketNumber property.
    */
    public function setTicketNumber(?string $value ): void {
        $this->ticketNumber = $value;
    }

    /**
     * Sets the ticketSystem property value. Ticket system meta data
     *  @param string|null $value Value to set for the ticketSystem property.
    */
    public function setTicketSystem(?string $value ): void {
        $this->ticketSystem = $value;
    }

}
