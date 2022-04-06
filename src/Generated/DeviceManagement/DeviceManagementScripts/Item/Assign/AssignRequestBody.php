<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceManagementScripts\Item\Assign;

use Microsoft\Graph\Beta\Generated\Models\DeviceManagementScriptAssignment;
use Microsoft\Graph\Beta\Generated\Models\DeviceManagementScriptGroupAssignment;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<DeviceManagementScriptAssignment>|null $deviceManagementScriptAssignments The deviceManagementScriptAssignments property */
    private ?array $deviceManagementScriptAssignments = null;
    
    /** @var array<DeviceManagementScriptGroupAssignment>|null $deviceManagementScriptGroupAssignments The deviceManagementScriptGroupAssignments property */
    private ?array $deviceManagementScriptGroupAssignments = null;
    
    /**
     * Instantiates a new assignRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AssignRequestBody {
        return new AssignRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceManagementScriptAssignments property value. The deviceManagementScriptAssignments property
     * @return array<DeviceManagementScriptAssignment>|null
    */
    public function getDeviceManagementScriptAssignments(): ?array {
        return $this->deviceManagementScriptAssignments;
    }

    /**
     * Gets the deviceManagementScriptGroupAssignments property value. The deviceManagementScriptGroupAssignments property
     * @return array<DeviceManagementScriptGroupAssignment>|null
    */
    public function getDeviceManagementScriptGroupAssignments(): ?array {
        return $this->deviceManagementScriptGroupAssignments;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'deviceManagementScriptAssignments' => function (self $o, ParseNode $n) { $o->setDeviceManagementScriptAssignments($n->getCollectionOfObjectValues(DeviceManagementScriptAssignment::class)); },
            'deviceManagementScriptGroupAssignments' => function (self $o, ParseNode $n) { $o->setDeviceManagementScriptGroupAssignments($n->getCollectionOfObjectValues(DeviceManagementScriptGroupAssignment::class)); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('deviceManagementScriptAssignments', $this->deviceManagementScriptAssignments);
        $writer->writeCollectionOfObjectValues('deviceManagementScriptGroupAssignments', $this->deviceManagementScriptGroupAssignments);
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
     * Sets the deviceManagementScriptAssignments property value. The deviceManagementScriptAssignments property
     *  @param array<DeviceManagementScriptAssignment>|null $value Value to set for the deviceManagementScriptAssignments property.
    */
    public function setDeviceManagementScriptAssignments(?array $value ): void {
        $this->deviceManagementScriptAssignments = $value;
    }

    /**
     * Sets the deviceManagementScriptGroupAssignments property value. The deviceManagementScriptGroupAssignments property
     *  @param array<DeviceManagementScriptGroupAssignment>|null $value Value to set for the deviceManagementScriptGroupAssignments property.
    */
    public function setDeviceManagementScriptGroupAssignments(?array $value ): void {
        $this->deviceManagementScriptGroupAssignments = $value;
    }

}
