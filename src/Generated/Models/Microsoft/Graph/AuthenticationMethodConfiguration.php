<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationMethodConfiguration extends Entity 
{
    /** @var AuthenticationMethodState|null $state The state of the policy. Possible values are: enabled, disabled. */
    private ?AuthenticationMethodState $state = null;
    
    /**
     * Instantiates a new authenticationMethodConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationMethodConfiguration
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationMethodConfiguration {
        return new AuthenticationMethodConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'state' => function (self $o, ParseNode $n) { $o->setState($n->getEnumValue(AuthenticationMethodState::class)); },
        ]);
    }

    /**
     * Gets the state property value. The state of the policy. Possible values are: enabled, disabled.
     * @return AuthenticationMethodState|null
    */
    public function getState(): ?AuthenticationMethodState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('state', $this->state);
    }

    /**
     * Sets the state property value. The state of the policy. Possible values are: enabled, disabled.
     *  @param AuthenticationMethodState|null $value Value to set for the state property.
    */
    public function setState(?AuthenticationMethodState $value ): void {
        $this->state = $value;
    }

}
