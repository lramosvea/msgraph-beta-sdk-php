<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Ediscovery;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Ediscoveryroot extends Entity 
{
    /** @var array<EscapedCase>|null $cases  */
    private ?array $cases = null;
    
    /**
     * Instantiates a new ediscoveryroot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Ediscoveryroot
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Ediscoveryroot {
        return new Ediscoveryroot();
    }

    /**
     * Gets the cases property value. 
     * @return array<EscapedCase>|null
    */
    public function getCases(): ?array {
        return $this->cases;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'cases' => function (self $o, ParseNode $n) { $o->setCases($n->getCollectionOfObjectValues(EscapedCase::class)); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('cases', $this->cases);
    }

    /**
     * Sets the cases property value. 
     *  @param array<EscapedCase>|null $value Value to set for the cases property.
    */
    public function setCases(?array $value ): void {
        $this->cases = $value;
    }

}
