<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleManagementPolicyAssignment extends Entity 
{
    /** @var UnifiedRoleManagementPolicy|null $policy The policy for the assignment. */
    private ?UnifiedRoleManagementPolicy $policy = null;
    
    /** @var string|null $policyId The id of the policy. */
    private ?string $policyId = null;
    
    /** @var string|null $roleDefinitionId The id of the role definition where the policy applies. If not specified, the policy applies to all roles. */
    private ?string $roleDefinitionId = null;
    
    /** @var string|null $scopeId The id of the scope where the policy is assigned. E.g. '/', groupId, etc. */
    private ?string $scopeId = null;
    
    /** @var string|null $scopeType The type of the scope where the policy is assigned. One of Directory, DirectoryRole, Group. */
    private ?string $scopeType = null;
    
    /**
     * Instantiates a new unifiedRoleManagementPolicyAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleManagementPolicyAssignment
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleManagementPolicyAssignment {
        return new UnifiedRoleManagementPolicyAssignment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'policy' => function (self $o, ParseNode $n) { $o->setPolicy($n->getObjectValue(UnifiedRoleManagementPolicy::class)); },
            'policyId' => function (self $o, ParseNode $n) { $o->setPolicyId($n->getStringValue()); },
            'roleDefinitionId' => function (self $o, ParseNode $n) { $o->setRoleDefinitionId($n->getStringValue()); },
            'scopeId' => function (self $o, ParseNode $n) { $o->setScopeId($n->getStringValue()); },
            'scopeType' => function (self $o, ParseNode $n) { $o->setScopeType($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the policy property value. The policy for the assignment.
     * @return UnifiedRoleManagementPolicy|null
    */
    public function getPolicy(): ?UnifiedRoleManagementPolicy {
        return $this->policy;
    }

    /**
     * Gets the policyId property value. The id of the policy.
     * @return string|null
    */
    public function getPolicyId(): ?string {
        return $this->policyId;
    }

    /**
     * Gets the roleDefinitionId property value. The id of the role definition where the policy applies. If not specified, the policy applies to all roles.
     * @return string|null
    */
    public function getRoleDefinitionId(): ?string {
        return $this->roleDefinitionId;
    }

    /**
     * Gets the scopeId property value. The id of the scope where the policy is assigned. E.g. '/', groupId, etc.
     * @return string|null
    */
    public function getScopeId(): ?string {
        return $this->scopeId;
    }

    /**
     * Gets the scopeType property value. The type of the scope where the policy is assigned. One of Directory, DirectoryRole, Group.
     * @return string|null
    */
    public function getScopeType(): ?string {
        return $this->scopeType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('policy', $this->policy);
        $writer->writeStringValue('policyId', $this->policyId);
        $writer->writeStringValue('roleDefinitionId', $this->roleDefinitionId);
        $writer->writeStringValue('scopeId', $this->scopeId);
        $writer->writeStringValue('scopeType', $this->scopeType);
    }

    /**
     * Sets the policy property value. The policy for the assignment.
     *  @param UnifiedRoleManagementPolicy|null $value Value to set for the policy property.
    */
    public function setPolicy(?UnifiedRoleManagementPolicy $value ): void {
        $this->policy = $value;
    }

    /**
     * Sets the policyId property value. The id of the policy.
     *  @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value ): void {
        $this->policyId = $value;
    }

    /**
     * Sets the roleDefinitionId property value. The id of the role definition where the policy applies. If not specified, the policy applies to all roles.
     *  @param string|null $value Value to set for the roleDefinitionId property.
    */
    public function setRoleDefinitionId(?string $value ): void {
        $this->roleDefinitionId = $value;
    }

    /**
     * Sets the scopeId property value. The id of the scope where the policy is assigned. E.g. '/', groupId, etc.
     *  @param string|null $value Value to set for the scopeId property.
    */
    public function setScopeId(?string $value ): void {
        $this->scopeId = $value;
    }

    /**
     * Sets the scopeType property value. The type of the scope where the policy is assigned. One of Directory, DirectoryRole, Group.
     *  @param string|null $value Value to set for the scopeType property.
    */
    public function setScopeType(?string $value ): void {
        $this->scopeType = $value;
    }

}
