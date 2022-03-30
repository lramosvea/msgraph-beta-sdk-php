<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RestrictedSignIn extends SignIn 
{
    /** @var string|null $targetTenantId  */
    private ?string $targetTenantId = null;
    
    /**
     * Instantiates a new restrictedSignIn and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RestrictedSignIn
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): RestrictedSignIn {
        return new RestrictedSignIn();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'targetTenantId' => function (self $o, ParseNode $n) { $o->setTargetTenantId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the targetTenantId property value. 
     * @return string|null
    */
    public function getTargetTenantId(): ?string {
        return $this->targetTenantId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('targetTenantId', $this->targetTenantId);
    }

    /**
     * Sets the targetTenantId property value. 
     *  @param string|null $value Value to set for the targetTenantId property.
    */
    public function setTargetTenantId(?string $value ): void {
        $this->targetTenantId = $value;
    }

}
