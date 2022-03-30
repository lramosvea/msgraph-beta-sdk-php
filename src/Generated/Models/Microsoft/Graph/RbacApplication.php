<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RbacApplication extends Entity 
{
    /** @var array<UnifiedRbacResourceNamespace>|null $resourceNamespaces  */
    private ?array $resourceNamespaces = null;
    
    /** @var array<Approval>|null $roleAssignmentApprovals  */
    private ?array $roleAssignmentApprovals = null;
    
    /** @var array<UnifiedRoleAssignment>|null $roleAssignments Resource to grant access to users or groups. */
    private ?array $roleAssignments = null;
    
    /** @var array<UnifiedRoleAssignmentScheduleInstance>|null $roleAssignmentScheduleInstances  */
    private ?array $roleAssignmentScheduleInstances = null;
    
    /** @var array<UnifiedRoleAssignmentScheduleRequest>|null $roleAssignmentScheduleRequests  */
    private ?array $roleAssignmentScheduleRequests = null;
    
    /** @var array<UnifiedRoleAssignmentSchedule>|null $roleAssignmentSchedules  */
    private ?array $roleAssignmentSchedules = null;
    
    /** @var array<UnifiedRoleDefinition>|null $roleDefinitions Resource representing the roles allowed by RBAC providers and the permissions assigned to the roles. */
    private ?array $roleDefinitions = null;
    
    /** @var array<UnifiedRoleEligibilityScheduleInstance>|null $roleEligibilityScheduleInstances  */
    private ?array $roleEligibilityScheduleInstances = null;
    
    /** @var array<UnifiedRoleEligibilityScheduleRequest>|null $roleEligibilityScheduleRequests  */
    private ?array $roleEligibilityScheduleRequests = null;
    
    /** @var array<UnifiedRoleEligibilitySchedule>|null $roleEligibilitySchedules  */
    private ?array $roleEligibilitySchedules = null;
    
    /** @var array<UnifiedRoleAssignment>|null $transitiveRoleAssignments  */
    private ?array $transitiveRoleAssignments = null;
    
    /**
     * Instantiates a new rbacApplication and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RbacApplication
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): RbacApplication {
        return new RbacApplication();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'resourceNamespaces' => function (self $o, ParseNode $n) { $o->setResourceNamespaces($n->getCollectionOfObjectValues(UnifiedRbacResourceNamespace::class)); },
            'roleAssignmentApprovals' => function (self $o, ParseNode $n) { $o->setRoleAssignmentApprovals($n->getCollectionOfObjectValues(Approval::class)); },
            'roleAssignments' => function (self $o, ParseNode $n) { $o->setRoleAssignments($n->getCollectionOfObjectValues(UnifiedRoleAssignment::class)); },
            'roleAssignmentScheduleInstances' => function (self $o, ParseNode $n) { $o->setRoleAssignmentScheduleInstances($n->getCollectionOfObjectValues(UnifiedRoleAssignmentScheduleInstance::class)); },
            'roleAssignmentScheduleRequests' => function (self $o, ParseNode $n) { $o->setRoleAssignmentScheduleRequests($n->getCollectionOfObjectValues(UnifiedRoleAssignmentScheduleRequest::class)); },
            'roleAssignmentSchedules' => function (self $o, ParseNode $n) { $o->setRoleAssignmentSchedules($n->getCollectionOfObjectValues(UnifiedRoleAssignmentSchedule::class)); },
            'roleDefinitions' => function (self $o, ParseNode $n) { $o->setRoleDefinitions($n->getCollectionOfObjectValues(UnifiedRoleDefinition::class)); },
            'roleEligibilityScheduleInstances' => function (self $o, ParseNode $n) { $o->setRoleEligibilityScheduleInstances($n->getCollectionOfObjectValues(UnifiedRoleEligibilityScheduleInstance::class)); },
            'roleEligibilityScheduleRequests' => function (self $o, ParseNode $n) { $o->setRoleEligibilityScheduleRequests($n->getCollectionOfObjectValues(UnifiedRoleEligibilityScheduleRequest::class)); },
            'roleEligibilitySchedules' => function (self $o, ParseNode $n) { $o->setRoleEligibilitySchedules($n->getCollectionOfObjectValues(UnifiedRoleEligibilitySchedule::class)); },
            'transitiveRoleAssignments' => function (self $o, ParseNode $n) { $o->setTransitiveRoleAssignments($n->getCollectionOfObjectValues(UnifiedRoleAssignment::class)); },
        ]);
    }

    /**
     * Gets the resourceNamespaces property value. 
     * @return array<UnifiedRbacResourceNamespace>|null
    */
    public function getResourceNamespaces(): ?array {
        return $this->resourceNamespaces;
    }

    /**
     * Gets the roleAssignmentApprovals property value. 
     * @return array<Approval>|null
    */
    public function getRoleAssignmentApprovals(): ?array {
        return $this->roleAssignmentApprovals;
    }

    /**
     * Gets the roleAssignments property value. Resource to grant access to users or groups.
     * @return array<UnifiedRoleAssignment>|null
    */
    public function getRoleAssignments(): ?array {
        return $this->roleAssignments;
    }

    /**
     * Gets the roleAssignmentScheduleInstances property value. 
     * @return array<UnifiedRoleAssignmentScheduleInstance>|null
    */
    public function getRoleAssignmentScheduleInstances(): ?array {
        return $this->roleAssignmentScheduleInstances;
    }

    /**
     * Gets the roleAssignmentScheduleRequests property value. 
     * @return array<UnifiedRoleAssignmentScheduleRequest>|null
    */
    public function getRoleAssignmentScheduleRequests(): ?array {
        return $this->roleAssignmentScheduleRequests;
    }

    /**
     * Gets the roleAssignmentSchedules property value. 
     * @return array<UnifiedRoleAssignmentSchedule>|null
    */
    public function getRoleAssignmentSchedules(): ?array {
        return $this->roleAssignmentSchedules;
    }

    /**
     * Gets the roleDefinitions property value. Resource representing the roles allowed by RBAC providers and the permissions assigned to the roles.
     * @return array<UnifiedRoleDefinition>|null
    */
    public function getRoleDefinitions(): ?array {
        return $this->roleDefinitions;
    }

    /**
     * Gets the roleEligibilityScheduleInstances property value. 
     * @return array<UnifiedRoleEligibilityScheduleInstance>|null
    */
    public function getRoleEligibilityScheduleInstances(): ?array {
        return $this->roleEligibilityScheduleInstances;
    }

    /**
     * Gets the roleEligibilityScheduleRequests property value. 
     * @return array<UnifiedRoleEligibilityScheduleRequest>|null
    */
    public function getRoleEligibilityScheduleRequests(): ?array {
        return $this->roleEligibilityScheduleRequests;
    }

    /**
     * Gets the roleEligibilitySchedules property value. 
     * @return array<UnifiedRoleEligibilitySchedule>|null
    */
    public function getRoleEligibilitySchedules(): ?array {
        return $this->roleEligibilitySchedules;
    }

    /**
     * Gets the transitiveRoleAssignments property value. 
     * @return array<UnifiedRoleAssignment>|null
    */
    public function getTransitiveRoleAssignments(): ?array {
        return $this->transitiveRoleAssignments;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('resourceNamespaces', $this->resourceNamespaces);
        $writer->writeCollectionOfObjectValues('roleAssignmentApprovals', $this->roleAssignmentApprovals);
        $writer->writeCollectionOfObjectValues('roleAssignments', $this->roleAssignments);
        $writer->writeCollectionOfObjectValues('roleAssignmentScheduleInstances', $this->roleAssignmentScheduleInstances);
        $writer->writeCollectionOfObjectValues('roleAssignmentScheduleRequests', $this->roleAssignmentScheduleRequests);
        $writer->writeCollectionOfObjectValues('roleAssignmentSchedules', $this->roleAssignmentSchedules);
        $writer->writeCollectionOfObjectValues('roleDefinitions', $this->roleDefinitions);
        $writer->writeCollectionOfObjectValues('roleEligibilityScheduleInstances', $this->roleEligibilityScheduleInstances);
        $writer->writeCollectionOfObjectValues('roleEligibilityScheduleRequests', $this->roleEligibilityScheduleRequests);
        $writer->writeCollectionOfObjectValues('roleEligibilitySchedules', $this->roleEligibilitySchedules);
        $writer->writeCollectionOfObjectValues('transitiveRoleAssignments', $this->transitiveRoleAssignments);
    }

    /**
     * Sets the resourceNamespaces property value. 
     *  @param array<UnifiedRbacResourceNamespace>|null $value Value to set for the resourceNamespaces property.
    */
    public function setResourceNamespaces(?array $value ): void {
        $this->resourceNamespaces = $value;
    }

    /**
     * Sets the roleAssignmentApprovals property value. 
     *  @param array<Approval>|null $value Value to set for the roleAssignmentApprovals property.
    */
    public function setRoleAssignmentApprovals(?array $value ): void {
        $this->roleAssignmentApprovals = $value;
    }

    /**
     * Sets the roleAssignments property value. Resource to grant access to users or groups.
     *  @param array<UnifiedRoleAssignment>|null $value Value to set for the roleAssignments property.
    */
    public function setRoleAssignments(?array $value ): void {
        $this->roleAssignments = $value;
    }

    /**
     * Sets the roleAssignmentScheduleInstances property value. 
     *  @param array<UnifiedRoleAssignmentScheduleInstance>|null $value Value to set for the roleAssignmentScheduleInstances property.
    */
    public function setRoleAssignmentScheduleInstances(?array $value ): void {
        $this->roleAssignmentScheduleInstances = $value;
    }

    /**
     * Sets the roleAssignmentScheduleRequests property value. 
     *  @param array<UnifiedRoleAssignmentScheduleRequest>|null $value Value to set for the roleAssignmentScheduleRequests property.
    */
    public function setRoleAssignmentScheduleRequests(?array $value ): void {
        $this->roleAssignmentScheduleRequests = $value;
    }

    /**
     * Sets the roleAssignmentSchedules property value. 
     *  @param array<UnifiedRoleAssignmentSchedule>|null $value Value to set for the roleAssignmentSchedules property.
    */
    public function setRoleAssignmentSchedules(?array $value ): void {
        $this->roleAssignmentSchedules = $value;
    }

    /**
     * Sets the roleDefinitions property value. Resource representing the roles allowed by RBAC providers and the permissions assigned to the roles.
     *  @param array<UnifiedRoleDefinition>|null $value Value to set for the roleDefinitions property.
    */
    public function setRoleDefinitions(?array $value ): void {
        $this->roleDefinitions = $value;
    }

    /**
     * Sets the roleEligibilityScheduleInstances property value. 
     *  @param array<UnifiedRoleEligibilityScheduleInstance>|null $value Value to set for the roleEligibilityScheduleInstances property.
    */
    public function setRoleEligibilityScheduleInstances(?array $value ): void {
        $this->roleEligibilityScheduleInstances = $value;
    }

    /**
     * Sets the roleEligibilityScheduleRequests property value. 
     *  @param array<UnifiedRoleEligibilityScheduleRequest>|null $value Value to set for the roleEligibilityScheduleRequests property.
    */
    public function setRoleEligibilityScheduleRequests(?array $value ): void {
        $this->roleEligibilityScheduleRequests = $value;
    }

    /**
     * Sets the roleEligibilitySchedules property value. 
     *  @param array<UnifiedRoleEligibilitySchedule>|null $value Value to set for the roleEligibilitySchedules property.
    */
    public function setRoleEligibilitySchedules(?array $value ): void {
        $this->roleEligibilitySchedules = $value;
    }

    /**
     * Sets the transitiveRoleAssignments property value. 
     *  @param array<UnifiedRoleAssignment>|null $value Value to set for the transitiveRoleAssignments property.
    */
    public function setTransitiveRoleAssignments(?array $value ): void {
        $this->transitiveRoleAssignments = $value;
    }

}
