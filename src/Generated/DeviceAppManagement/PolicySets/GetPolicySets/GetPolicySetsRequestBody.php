<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\PolicySets\GetPolicySets;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetPolicySetsRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $policySetIds  */
    private ?array $policySetIds = null;
    
    /**
     * Instantiates a new getPolicySetsRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetPolicySetsRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): GetPolicySetsRequestBody {
        return new GetPolicySetsRequestBody();
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
        return  [
            'policySetIds' => function (self $o, ParseNode $n) { $o->setPolicySetIds($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the policySetIds property value. 
     * @return array<string>|null
    */
    public function getPolicySetIds(): ?array {
        return $this->policySetIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('policySetIds', $this->policySetIds);
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
     * Sets the policySetIds property value. 
     *  @param array<string>|null $value Value to set for the policySetIds property.
    */
    public function setPolicySetIds(?array $value ): void {
        $this->policySetIds = $value;
    }

}
