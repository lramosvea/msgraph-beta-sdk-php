<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceAndAppManagementAssignedRoleDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<string>|null $roleAssignmentIds Role Assignment IDs for the specifc Role Assignments assigned to a user. This property is read-only.
    */
    private ?array $roleAssignmentIds = null;
    
    /**
     * @var array<string>|null $roleDefinitionIds Role Definition IDs for the specifc Role Definitions assigned to a user. This property is read-only.
    */
    private ?array $roleDefinitionIds = null;
    
    /**
     * Instantiates a new deviceAndAppManagementAssignedRoleDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.deviceAndAppManagementAssignedRoleDetails');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceAndAppManagementAssignedRoleDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceAndAppManagementAssignedRoleDetails {
        return new DeviceAndAppManagementAssignedRoleDetails();
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
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'roleAssignmentIds' => function (ParseNode $n) use ($o) { $o->setRoleAssignmentIds($n->getCollectionOfPrimitiveValues()); },
            'roleDefinitionIds' => function (ParseNode $n) use ($o) { $o->setRoleDefinitionIds($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the roleAssignmentIds property value. Role Assignment IDs for the specifc Role Assignments assigned to a user. This property is read-only.
     * @return array<string>|null
    */
    public function getRoleAssignmentIds(): ?array {
        return $this->roleAssignmentIds;
    }

    /**
     * Gets the roleDefinitionIds property value. Role Definition IDs for the specifc Role Definitions assigned to a user. This property is read-only.
     * @return array<string>|null
    */
    public function getRoleDefinitionIds(): ?array {
        return $this->roleDefinitionIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the roleAssignmentIds property value. Role Assignment IDs for the specifc Role Assignments assigned to a user. This property is read-only.
     *  @param array<string>|null $value Value to set for the roleAssignmentIds property.
    */
    public function setRoleAssignmentIds(?array $value ): void {
        $this->roleAssignmentIds = $value;
    }

    /**
     * Sets the roleDefinitionIds property value. Role Definition IDs for the specifc Role Definitions assigned to a user. This property is read-only.
     *  @param array<string>|null $value Value to set for the roleDefinitionIds property.
    */
    public function setRoleDefinitionIds(?array $value ): void {
        $this->roleDefinitionIds = $value;
    }

}
