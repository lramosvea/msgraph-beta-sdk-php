<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DlpPoliciesJobResult implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $auditCorrelationId  */
    private ?string $auditCorrelationId = null;
    
    /** @var DateTime|null $evaluationDateTime  */
    private ?DateTime $evaluationDateTime = null;
    
    /** @var array<MatchingDlpRule>|null $matchingRules  */
    private ?array $matchingRules = null;
    
    /**
     * Instantiates a new dlpPoliciesJobResult and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DlpPoliciesJobResult
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DlpPoliciesJobResult {
        return new DlpPoliciesJobResult();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the auditCorrelationId property value. 
     * @return string|null
    */
    public function getAuditCorrelationId(): ?string {
        return $this->auditCorrelationId;
    }

    /**
     * Gets the evaluationDateTime property value. 
     * @return DateTime|null
    */
    public function getEvaluationDateTime(): ?DateTime {
        return $this->evaluationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'auditCorrelationId' => function (self $o, ParseNode $n) { $o->setAuditCorrelationId($n->getStringValue()); },
            'evaluationDateTime' => function (self $o, ParseNode $n) { $o->setEvaluationDateTime($n->getDateTimeValue()); },
            'matchingRules' => function (self $o, ParseNode $n) { $o->setMatchingRules($n->getCollectionOfObjectValues(MatchingDlpRule::class)); },
        ];
    }

    /**
     * Gets the matchingRules property value. 
     * @return array<MatchingDlpRule>|null
    */
    public function getMatchingRules(): ?array {
        return $this->matchingRules;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('auditCorrelationId', $this->auditCorrelationId);
        $writer->writeDateTimeValue('evaluationDateTime', $this->evaluationDateTime);
        $writer->writeCollectionOfObjectValues('matchingRules', $this->matchingRules);
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
     * Sets the auditCorrelationId property value. 
     *  @param string|null $value Value to set for the auditCorrelationId property.
    */
    public function setAuditCorrelationId(?string $value ): void {
        $this->auditCorrelationId = $value;
    }

    /**
     * Sets the evaluationDateTime property value. 
     *  @param DateTime|null $value Value to set for the evaluationDateTime property.
    */
    public function setEvaluationDateTime(?DateTime $value ): void {
        $this->evaluationDateTime = $value;
    }

    /**
     * Sets the matchingRules property value. 
     *  @param array<MatchingDlpRule>|null $value Value to set for the matchingRules property.
    */
    public function setMatchingRules(?array $value ): void {
        $this->matchingRules = $value;
    }

}
