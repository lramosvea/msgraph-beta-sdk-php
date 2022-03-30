<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrintService extends Entity 
{
    /** @var array<PrintServiceEndpoint>|null $endpoints Endpoints that can be used to access the service. Read-only. Nullable. */
    private ?array $endpoints = null;
    
    /**
     * Instantiates a new printService and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintService
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PrintService {
        return new PrintService();
    }

    /**
     * Gets the endpoints property value. Endpoints that can be used to access the service. Read-only. Nullable.
     * @return array<PrintServiceEndpoint>|null
    */
    public function getEndpoints(): ?array {
        return $this->endpoints;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'endpoints' => function (self $o, ParseNode $n) { $o->setEndpoints($n->getCollectionOfObjectValues(PrintServiceEndpoint::class)); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('endpoints', $this->endpoints);
    }

    /**
     * Sets the endpoints property value. Endpoints that can be used to access the service. Read-only. Nullable.
     *  @param array<PrintServiceEndpoint>|null $value Value to set for the endpoints property.
    */
    public function setEndpoints(?array $value ): void {
        $this->endpoints = $value;
    }

}
