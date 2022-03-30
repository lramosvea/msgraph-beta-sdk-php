<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\EvaluateAssignmentFilter;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\AssignmentFilterEvaluateRequest;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EvaluateAssignmentFilterRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var AssignmentFilterEvaluateRequest|null $data  */
    private ?AssignmentFilterEvaluateRequest $data = null;
    
    /**
     * Instantiates a new evaluateAssignmentFilterRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EvaluateAssignmentFilterRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): EvaluateAssignmentFilterRequestBody {
        return new EvaluateAssignmentFilterRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the data property value. 
     * @return AssignmentFilterEvaluateRequest|null
    */
    public function getData(): ?AssignmentFilterEvaluateRequest {
        return $this->data;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'data' => function (self $o, ParseNode $n) { $o->setData($n->getObjectValue(AssignmentFilterEvaluateRequest::class)); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('data', $this->data);
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
     * Sets the data property value. 
     *  @param AssignmentFilterEvaluateRequest|null $value Value to set for the data property.
    */
    public function setData(?AssignmentFilterEvaluateRequest $value ): void {
        $this->data = $value;
    }

}
