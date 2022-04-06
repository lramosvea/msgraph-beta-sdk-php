<?php

namespace Microsoft\Graph\Beta\Generated\Me\Tasks\Lists\Item\Tasks\Item\Move;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MoveRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $destinationTaskListId The destinationTaskListId property */
    private ?string $destinationTaskListId = null;
    
    /**
     * Instantiates a new moveRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MoveRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): MoveRequestBody {
        return new MoveRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the destinationTaskListId property value. The destinationTaskListId property
     * @return string|null
    */
    public function getDestinationTaskListId(): ?string {
        return $this->destinationTaskListId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'destinationTaskListId' => function (self $o, ParseNode $n) { $o->setDestinationTaskListId($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('destinationTaskListId', $this->destinationTaskListId);
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
     * Sets the destinationTaskListId property value. The destinationTaskListId property
     *  @param string|null $value Value to set for the destinationTaskListId property.
    */
    public function setDestinationTaskListId(?string $value ): void {
        $this->destinationTaskListId = $value;
    }

}
