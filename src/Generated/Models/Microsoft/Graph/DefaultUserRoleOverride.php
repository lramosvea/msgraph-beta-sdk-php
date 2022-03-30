<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DefaultUserRoleOverride extends Entity 
{
    /** @var bool|null $isDefault  */
    private ?bool $isDefault = null;
    
    /** @var array<UnifiedRolePermission>|null $rolePermissions  */
    private ?array $rolePermissions = null;
    
    /**
     * Instantiates a new defaultUserRoleOverride and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DefaultUserRoleOverride
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DefaultUserRoleOverride {
        return new DefaultUserRoleOverride();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'isDefault' => function (self $o, ParseNode $n) { $o->setIsDefault($n->getBooleanValue()); },
            'rolePermissions' => function (self $o, ParseNode $n) { $o->setRolePermissions($n->getCollectionOfObjectValues(UnifiedRolePermission::class)); },
        ]);
    }

    /**
     * Gets the isDefault property value. 
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->isDefault;
    }

    /**
     * Gets the rolePermissions property value. 
     * @return array<UnifiedRolePermission>|null
    */
    public function getRolePermissions(): ?array {
        return $this->rolePermissions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isDefault', $this->isDefault);
        $writer->writeCollectionOfObjectValues('rolePermissions', $this->rolePermissions);
    }

    /**
     * Sets the isDefault property value. 
     *  @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value ): void {
        $this->isDefault = $value;
    }

    /**
     * Sets the rolePermissions property value. 
     *  @param array<UnifiedRolePermission>|null $value Value to set for the rolePermissions property.
    */
    public function setRolePermissions(?array $value ): void {
        $this->rolePermissions = $value;
    }

}
