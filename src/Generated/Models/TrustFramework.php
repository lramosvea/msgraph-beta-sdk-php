<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TrustFramework implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<TrustFrameworkKeySet>|null $keySets The keySets property
    */
    private ?array $keySets = null;
    
    /**
     * @var array<TrustFrameworkPolicy>|null $policies The policies property
    */
    private ?array $policies = null;
    
    /**
     * Instantiates a new TrustFramework and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TrustFramework
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TrustFramework {
        return new TrustFramework();
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
            'keySets' => function (ParseNode $n) use ($o) { $o->setKeySets($n->getCollectionOfObjectValues(array(TrustFrameworkKeySet::class, 'createFromDiscriminatorValue'))); },
            'policies' => function (ParseNode $n) use ($o) { $o->setPolicies($n->getCollectionOfObjectValues(array(TrustFrameworkPolicy::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the keySets property value. The keySets property
     * @return array<TrustFrameworkKeySet>|null
    */
    public function getKeySets(): ?array {
        return $this->keySets;
    }

    /**
     * Gets the policies property value. The policies property
     * @return array<TrustFrameworkPolicy>|null
    */
    public function getPolicies(): ?array {
        return $this->policies;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('keySets', $this->keySets);
        $writer->writeCollectionOfObjectValues('policies', $this->policies);
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
     * Sets the keySets property value. The keySets property
     *  @param array<TrustFrameworkKeySet>|null $value Value to set for the keySets property.
    */
    public function setKeySets(?array $value ): void {
        $this->keySets = $value;
    }

    /**
     * Sets the policies property value. The policies property
     *  @param array<TrustFrameworkPolicy>|null $value Value to set for the policies property.
    */
    public function setPolicies(?array $value ): void {
        $this->policies = $value;
    }

}
