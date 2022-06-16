<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SwapShiftsChangeRequest extends OfferShiftRequest 
{
    /** @var string|null $recipientShiftId ShiftId for the recipient user with whom the request is to swap. */
    private ?string $recipientShiftId = null;
    
    /**
     * Instantiates a new swapShiftsChangeRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SwapShiftsChangeRequest
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SwapShiftsChangeRequest {
        return new SwapShiftsChangeRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'recipientShiftId' => function (self $o, ParseNode $n) { $o->setRecipientShiftId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the recipientShiftId property value. ShiftId for the recipient user with whom the request is to swap.
     * @return string|null
    */
    public function getRecipientShiftId(): ?string {
        return $this->recipientShiftId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('recipientShiftId', $this->recipientShiftId);
    }

    /**
     * Sets the recipientShiftId property value. ShiftId for the recipient user with whom the request is to swap.
     *  @param string|null $value Value to set for the recipientShiftId property.
    */
    public function setRecipientShiftId(?string $value ): void {
        $this->recipientShiftId = $value;
    }

}
