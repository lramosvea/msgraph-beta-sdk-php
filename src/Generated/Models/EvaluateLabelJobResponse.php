<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EvaluateLabelJobResponse extends JobResponseBase implements Parsable 
{
    /**
     * @var EvaluateLabelJobResultGroup|null $result The result property
    */
    private ?EvaluateLabelJobResultGroup $result = null;
    
    /**
     * Instantiates a new EvaluateLabelJobResponse and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.evaluateLabelJobResponse');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EvaluateLabelJobResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EvaluateLabelJobResponse {
        return new EvaluateLabelJobResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'result' => function (ParseNode $n) use ($o) { $o->setResult($n->getObjectValue(array(EvaluateLabelJobResultGroup::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the result property value. The result property
     * @return EvaluateLabelJobResultGroup|null
    */
    public function getResult(): ?EvaluateLabelJobResultGroup {
        return $this->result;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('result', $this->result);
    }

    /**
     * Sets the result property value. The result property
     *  @param EvaluateLabelJobResultGroup|null $value Value to set for the result property.
    */
    public function setResult(?EvaluateLabelJobResultGroup $value ): void {
        $this->result = $value;
    }

}
