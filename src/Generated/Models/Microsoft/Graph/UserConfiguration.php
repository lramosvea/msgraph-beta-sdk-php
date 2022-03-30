<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class UserConfiguration extends Entity 
{
    /** @var StreamInterface|null $binaryData  */
    private ?StreamInterface $binaryData = null;
    
    /**
     * Instantiates a new userConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserConfiguration
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UserConfiguration {
        return new UserConfiguration();
    }

    /**
     * Gets the binaryData property value. 
     * @return StreamInterface|null
    */
    public function getBinaryData(): ?StreamInterface {
        return $this->binaryData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'binaryData' => function (self $o, ParseNode $n) { $o->setBinaryData($n->getBinaryContent()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('binaryData', $this->binaryData);
    }

    /**
     * Sets the binaryData property value. 
     *  @param StreamInterface|null $value Value to set for the binaryData property.
    */
    public function setBinaryData(?StreamInterface $value ): void {
        $this->binaryData = $value;
    }

}
