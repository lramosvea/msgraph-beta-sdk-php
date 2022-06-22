<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MoveAction implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $from The name of the location the item was moved from.
    */
    private ?string $from = null;
    
    /**
     * @var string|null $to The name of the location the item was moved to.
    */
    private ?string $to = null;
    
    /**
     * Instantiates a new moveAction and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MoveAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MoveAction {
        return new MoveAction();
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
        $o = $this;
        return  [
            'from' => function (ParseNode $n) use ($o) { $o->setFrom($n->getStringValue()); },
            'to' => function (ParseNode $n) use ($o) { $o->setTo($n->getStringValue()); },
        ];
    }

    /**
     * Gets the from property value. The name of the location the item was moved from.
     * @return string|null
    */
    public function getFrom(): ?string {
        return $this->from;
    }

    /**
     * Gets the to property value. The name of the location the item was moved to.
     * @return string|null
    */
    public function getTo(): ?string {
        return $this->to;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('from', $this->from);
        $writer->writeStringValue('to', $this->to);
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
     * Sets the from property value. The name of the location the item was moved from.
     *  @param string|null $value Value to set for the from property.
    */
    public function setFrom(?string $value ): void {
        $this->from = $value;
    }

    /**
     * Sets the to property value. The name of the location the item was moved to.
     *  @param string|null $value Value to set for the to property.
    */
    public function setTo(?string $value ): void {
        $this->to = $value;
    }

}
