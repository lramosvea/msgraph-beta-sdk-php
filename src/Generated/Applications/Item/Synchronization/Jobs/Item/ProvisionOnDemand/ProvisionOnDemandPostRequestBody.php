<?php

namespace Microsoft\Graph\Beta\Generated\Applications\Item\Synchronization\Jobs\Item\ProvisionOnDemand;

use Microsoft\Graph\Beta\Generated\Models\SynchronizationJobApplicationParameters;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProvisionOnDemandPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<SynchronizationJobApplicationParameters>|null $parameters The parameters property
    */
    private ?array $parameters = null;
    
    /**
     * Instantiates a new provisionOnDemandPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProvisionOnDemandPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProvisionOnDemandPostRequestBody {
        return new ProvisionOnDemandPostRequestBody();
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
            'parameters' => function (ParseNode $n) use ($o) { $o->setParameters($n->getCollectionOfObjectValues(array(SynchronizationJobApplicationParameters::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the parameters property value. The parameters property
     * @return array<SynchronizationJobApplicationParameters>|null
    */
    public function getParameters(): ?array {
        return $this->parameters;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('parameters', $this->parameters);
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
     * Sets the parameters property value. The parameters property
     *  @param array<SynchronizationJobApplicationParameters>|null $value Value to set for the parameters property.
    */
    public function setParameters(?array $value ): void {
        $this->parameters = $value;
    }

}
