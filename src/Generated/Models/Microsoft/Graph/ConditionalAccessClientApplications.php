<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessClientApplications implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $excludeServicePrincipals Service principal IDs excluded from the policy scope. */
    private ?array $excludeServicePrincipals = null;
    
    /** @var array<string>|null $includeServicePrincipals Service principal IDs included in the policy scope, or ServicePrincipalsInMyTenant. */
    private ?array $includeServicePrincipals = null;
    
    /**
     * Instantiates a new conditionalAccessClientApplications and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessClientApplications
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessClientApplications {
        return new ConditionalAccessClientApplications();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the excludeServicePrincipals property value. Service principal IDs excluded from the policy scope.
     * @return array<string>|null
    */
    public function getExcludeServicePrincipals(): ?array {
        return $this->excludeServicePrincipals;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'excludeServicePrincipals' => function (self $o, ParseNode $n) { $o->setExcludeServicePrincipals($n->getCollectionOfPrimitiveValues()); },
            'includeServicePrincipals' => function (self $o, ParseNode $n) { $o->setIncludeServicePrincipals($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the includeServicePrincipals property value. Service principal IDs included in the policy scope, or ServicePrincipalsInMyTenant.
     * @return array<string>|null
    */
    public function getIncludeServicePrincipals(): ?array {
        return $this->includeServicePrincipals;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('excludeServicePrincipals', $this->excludeServicePrincipals);
        $writer->writeCollectionOfPrimitiveValues('includeServicePrincipals', $this->includeServicePrincipals);
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
     * Sets the excludeServicePrincipals property value. Service principal IDs excluded from the policy scope.
     *  @param array<string>|null $value Value to set for the excludeServicePrincipals property.
    */
    public function setExcludeServicePrincipals(?array $value ): void {
        $this->excludeServicePrincipals = $value;
    }

    /**
     * Sets the includeServicePrincipals property value. Service principal IDs included in the policy scope, or ServicePrincipalsInMyTenant.
     *  @param array<string>|null $value Value to set for the includeServicePrincipals property.
    */
    public function setIncludeServicePrincipals(?array $value ): void {
        $this->includeServicePrincipals = $value;
    }

}
