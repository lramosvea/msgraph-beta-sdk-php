<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SmsAuthenticationMethodConfiguration extends AuthenticationMethodConfiguration implements Parsable 
{
    /**
     * @var array<SmsAuthenticationMethodTarget>|null $includeTargets A collection of users or groups who are enabled to use the authentication method.
    */
    private ?array $includeTargets = null;
    
    /**
     * Instantiates a new SmsAuthenticationMethodConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.smsAuthenticationMethodConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SmsAuthenticationMethodConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SmsAuthenticationMethodConfiguration {
        return new SmsAuthenticationMethodConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'includeTargets' => function (ParseNode $n) use ($o) { $o->setIncludeTargets($n->getCollectionOfObjectValues(array(SmsAuthenticationMethodTarget::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the includeTargets property value. A collection of users or groups who are enabled to use the authentication method.
     * @return array<SmsAuthenticationMethodTarget>|null
    */
    public function getIncludeTargets(): ?array {
        return $this->includeTargets;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('includeTargets', $this->includeTargets);
    }

    /**
     * Sets the includeTargets property value. A collection of users or groups who are enabled to use the authentication method.
     *  @param array<SmsAuthenticationMethodTarget>|null $value Value to set for the includeTargets property.
    */
    public function setIncludeTargets(?array $value ): void {
        $this->includeTargets = $value;
    }

}
