<?php

namespace Microsoft\Graph\Beta\Generated\Models\ExternalConnectors;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Identity extends Entity implements Parsable 
{
    /**
     * @var IdentityType|null $type The type property
    */
    private ?IdentityType $type = null;
    
    /**
     * Instantiates a new identity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.externalConnectors.identity');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Identity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Identity {
        return new Identity();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getEnumValue(IdentityType::class)); },
        ]);
    }

    /**
     * Gets the type property value. The type property
     * @return IdentityType|null
    */
    public function getType(): ?IdentityType {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('type', $this->type);
    }

    /**
     * Sets the type property value. The type property
     *  @param IdentityType|null $value Value to set for the type property.
    */
    public function setType(?IdentityType $value ): void {
        $this->type = $value;
    }

}
