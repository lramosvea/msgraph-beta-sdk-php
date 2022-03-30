<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CompliancePolicies\Item\SetScheduledActions;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\DeviceManagementComplianceScheduledActionForRule;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SetScheduledActionsRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<DeviceManagementComplianceScheduledActionForRule>|null $scheduledActions  */
    private ?array $scheduledActions = null;
    
    /**
     * Instantiates a new setScheduledActionsRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SetScheduledActionsRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SetScheduledActionsRequestBody {
        return new SetScheduledActionsRequestBody();
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
            'scheduledActions' => function (self $o, ParseNode $n) { $o->setScheduledActions($n->getCollectionOfObjectValues(DeviceManagementComplianceScheduledActionForRule::class)); },
        ];
    }

    /**
     * Gets the scheduledActions property value. 
     * @return array<DeviceManagementComplianceScheduledActionForRule>|null
    */
    public function getScheduledActions(): ?array {
        return $this->scheduledActions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('scheduledActions', $this->scheduledActions);
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
     * Sets the scheduledActions property value. 
     *  @param array<DeviceManagementComplianceScheduledActionForRule>|null $value Value to set for the scheduledActions property.
    */
    public function setScheduledActions(?array $value ): void {
        $this->scheduledActions = $value;
    }

}
