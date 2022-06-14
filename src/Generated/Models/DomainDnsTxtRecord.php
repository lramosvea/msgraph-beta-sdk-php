<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DomainDnsTxtRecord extends DomainDnsRecord implements Parsable 
{
    /**
     * @var string|null $text Value used when configuring the text property at the DNS host.
    */
    private ?string $text = null;
    
    /**
     * Instantiates a new DomainDnsTxtRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DomainDnsTxtRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DomainDnsTxtRecord {
        return new DomainDnsTxtRecord();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'text' => function (ParseNode $n) use ($o) { $o->setText($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the text property value. Value used when configuring the text property at the DNS host.
     * @return string|null
    */
    public function getText(): ?string {
        return $this->text;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('text', $this->text);
    }

    /**
     * Sets the text property value. Value used when configuring the text property at the DNS host.
     *  @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value ): void {
        $this->text = $value;
    }

}
