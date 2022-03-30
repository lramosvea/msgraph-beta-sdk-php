<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeploymentStateReason implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var DeploymentStateReasonValue|null $value Specifies a reason for the deployment state. Possible values are: scheduledByOfferWindow, offeringByRequest, pausedByRequest, pausedByMonitoring. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: faultedByContentOutdated. Read-only. */
    private ?DeploymentStateReasonValue $value = null;
    
    /**
     * Instantiates a new deploymentStateReason and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeploymentStateReason
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeploymentStateReason {
        return new DeploymentStateReason();
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
            'value' => function (self $o, ParseNode $n) { $o->setValue($n->getEnumValue(DeploymentStateReasonValue::class)); },
        ];
    }

    /**
     * Gets the value property value. Specifies a reason for the deployment state. Possible values are: scheduledByOfferWindow, offeringByRequest, pausedByRequest, pausedByMonitoring. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: faultedByContentOutdated. Read-only.
     * @return DeploymentStateReasonValue|null
    */
    public function getValue(): ?DeploymentStateReasonValue {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('value', $this->value);
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
     * Sets the value property value. Specifies a reason for the deployment state. Possible values are: scheduledByOfferWindow, offeringByRequest, pausedByRequest, pausedByMonitoring. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: faultedByContentOutdated. Read-only.
     *  @param DeploymentStateReasonValue|null $value Value to set for the value property.
    */
    public function setValue(?DeploymentStateReasonValue $value ): void {
        $this->value = $value;
    }

}
