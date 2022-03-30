<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrintServiceEndpoint extends Entity 
{
    /** @var string|null $displayName A human-readable display name for the endpoint. */
    private ?string $displayName = null;
    
    /** @var string|null $uri The URI that can be used to access the service. */
    private ?string $uri = null;
    
    /**
     * Instantiates a new printServiceEndpoint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintServiceEndpoint
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PrintServiceEndpoint {
        return new PrintServiceEndpoint();
    }

    /**
     * Gets the displayName property value. A human-readable display name for the endpoint.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'uri' => function (self $o, ParseNode $n) { $o->setUri($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the uri property value. The URI that can be used to access the service.
     * @return string|null
    */
    public function getUri(): ?string {
        return $this->uri;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('uri', $this->uri);
    }

    /**
     * Sets the displayName property value. A human-readable display name for the endpoint.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the uri property value. The URI that can be used to access the service.
     *  @param string|null $value Value to set for the uri property.
    */
    public function setUri(?string $value ): void {
        $this->uri = $value;
    }

}
