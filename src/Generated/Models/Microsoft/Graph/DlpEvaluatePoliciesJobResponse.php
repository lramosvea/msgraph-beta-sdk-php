<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DlpEvaluatePoliciesJobResponse extends JobResponseBase 
{
    /** @var DlpPoliciesJobResult|null $result  */
    private ?DlpPoliciesJobResult $result = null;
    
    /**
     * Instantiates a new dlpEvaluatePoliciesJobResponse and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DlpEvaluatePoliciesJobResponse
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DlpEvaluatePoliciesJobResponse {
        return new DlpEvaluatePoliciesJobResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'result' => function (self $o, ParseNode $n) { $o->setResult($n->getObjectValue(DlpPoliciesJobResult::class)); },
        ]);
    }

    /**
     * Gets the result property value. 
     * @return DlpPoliciesJobResult|null
    */
    public function getResult(): ?DlpPoliciesJobResult {
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
     * Sets the result property value. 
     *  @param DlpPoliciesJobResult|null $value Value to set for the result property.
    */
    public function setResult(?DlpPoliciesJobResult $value ): void {
        $this->result = $value;
    }

}
