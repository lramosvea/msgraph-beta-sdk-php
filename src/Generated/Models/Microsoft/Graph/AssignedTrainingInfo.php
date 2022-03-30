<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignedTrainingInfo implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $assignedUserCount Number of users who were assigned the training in an attack simulation and training campaign. */
    private ?int $assignedUserCount = null;
    
    /** @var int|null $completedUserCount Number of users who completed the training in an attack simulation and training campaign. */
    private ?int $completedUserCount = null;
    
    /** @var string|null $displayName Display name of the training in an attack simulation and training campaign. */
    private ?string $displayName = null;
    
    /**
     * Instantiates a new assignedTrainingInfo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignedTrainingInfo
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AssignedTrainingInfo {
        return new AssignedTrainingInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignedUserCount property value. Number of users who were assigned the training in an attack simulation and training campaign.
     * @return int|null
    */
    public function getAssignedUserCount(): ?int {
        return $this->assignedUserCount;
    }

    /**
     * Gets the completedUserCount property value. Number of users who completed the training in an attack simulation and training campaign.
     * @return int|null
    */
    public function getCompletedUserCount(): ?int {
        return $this->completedUserCount;
    }

    /**
     * Gets the displayName property value. Display name of the training in an attack simulation and training campaign.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'assignedUserCount' => function (self $o, ParseNode $n) { $o->setAssignedUserCount($n->getIntegerValue()); },
            'completedUserCount' => function (self $o, ParseNode $n) { $o->setCompletedUserCount($n->getIntegerValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('assignedUserCount', $this->assignedUserCount);
        $writer->writeIntegerValue('completedUserCount', $this->completedUserCount);
        $writer->writeStringValue('displayName', $this->displayName);
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
     * Sets the assignedUserCount property value. Number of users who were assigned the training in an attack simulation and training campaign.
     *  @param int|null $value Value to set for the assignedUserCount property.
    */
    public function setAssignedUserCount(?int $value ): void {
        $this->assignedUserCount = $value;
    }

    /**
     * Sets the completedUserCount property value. Number of users who completed the training in an attack simulation and training campaign.
     *  @param int|null $value Value to set for the completedUserCount property.
    */
    public function setCompletedUserCount(?int $value ): void {
        $this->completedUserCount = $value;
    }

    /**
     * Sets the displayName property value. Display name of the training in an attack simulation and training campaign.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

}
