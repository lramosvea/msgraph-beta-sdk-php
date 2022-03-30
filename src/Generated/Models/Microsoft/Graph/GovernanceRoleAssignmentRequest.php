<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GovernanceRoleAssignmentRequest extends Entity 
{
    /** @var string|null $assignmentState Required. The state of the assignment. The possible values are: Eligible (for eligible assignment),  Active (if it is directly assigned), Active (by administrators, or activated on an eligible assignment by the users). */
    private ?string $assignmentState = null;
    
    /** @var string|null $linkedEligibleRoleAssignmentId If this is a request for role activation, it represents the id of the eligible assignment being referred; Otherwise, the value is null. */
    private ?string $linkedEligibleRoleAssignmentId = null;
    
    /** @var string|null $reason A message provided by users and administrators when create the request about why it is needed. */
    private ?string $reason = null;
    
    /** @var DateTime|null $requestedDateTime Read-only. The request create time. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    private ?DateTime $requestedDateTime = null;
    
    /** @var GovernanceResource|null $resource Read-only. The resource that the request aims to. */
    private ?GovernanceResource $resource = null;
    
    /** @var string|null $resourceId Required. The unique identifier of the Azure resource that is associated with the role assignment request. Azure resources can include subscriptions, resource groups, virtual machines, and SQL databases. */
    private ?string $resourceId = null;
    
    /** @var GovernanceRoleDefinition|null $roleDefinition Read-only. The role definition that the request aims to. */
    private ?GovernanceRoleDefinition $roleDefinition = null;
    
    /** @var string|null $roleDefinitionId Required. The identifier of the Azure role definition that the role assignment request is associated with. */
    private ?string $roleDefinitionId = null;
    
    /** @var GovernanceSchedule|null $schedule The schedule object of the role assignment request. */
    private ?GovernanceSchedule $schedule = null;
    
    /** @var GovernanceRoleAssignmentRequestStatus|null $status The status of the role assignment request. */
    private ?GovernanceRoleAssignmentRequestStatus $status = null;
    
    /** @var GovernanceSubject|null $subject Read-only. The user/group principal. */
    private ?GovernanceSubject $subject = null;
    
    /** @var string|null $subjectId Required. The unique identifier of the principal or subject that the role assignment request is associated with. Principals can be users, groups, or service principals. */
    private ?string $subjectId = null;
    
    /** @var string|null $type Required. Representing the type of the operation on the role assignment. The possible values are: AdminAdd , UserAdd , AdminUpdate , AdminRemove , UserRemove , UserExtend , AdminExtend , UserRenew , AdminRenew. */
    private ?string $type = null;
    
    /**
     * Instantiates a new governanceRoleAssignmentRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GovernanceRoleAssignmentRequest
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): GovernanceRoleAssignmentRequest {
        return new GovernanceRoleAssignmentRequest();
    }

    /**
     * Gets the assignmentState property value. Required. The state of the assignment. The possible values are: Eligible (for eligible assignment),  Active (if it is directly assigned), Active (by administrators, or activated on an eligible assignment by the users).
     * @return string|null
    */
    public function getAssignmentState(): ?string {
        return $this->assignmentState;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'assignmentState' => function (self $o, ParseNode $n) { $o->setAssignmentState($n->getStringValue()); },
            'linkedEligibleRoleAssignmentId' => function (self $o, ParseNode $n) { $o->setLinkedEligibleRoleAssignmentId($n->getStringValue()); },
            'reason' => function (self $o, ParseNode $n) { $o->setReason($n->getStringValue()); },
            'requestedDateTime' => function (self $o, ParseNode $n) { $o->setRequestedDateTime($n->getDateTimeValue()); },
            'resource' => function (self $o, ParseNode $n) { $o->setResource($n->getObjectValue(GovernanceResource::class)); },
            'resourceId' => function (self $o, ParseNode $n) { $o->setResourceId($n->getStringValue()); },
            'roleDefinition' => function (self $o, ParseNode $n) { $o->setRoleDefinition($n->getObjectValue(GovernanceRoleDefinition::class)); },
            'roleDefinitionId' => function (self $o, ParseNode $n) { $o->setRoleDefinitionId($n->getStringValue()); },
            'schedule' => function (self $o, ParseNode $n) { $o->setSchedule($n->getObjectValue(GovernanceSchedule::class)); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getObjectValue(GovernanceRoleAssignmentRequestStatus::class)); },
            'subject' => function (self $o, ParseNode $n) { $o->setSubject($n->getObjectValue(GovernanceSubject::class)); },
            'subjectId' => function (self $o, ParseNode $n) { $o->setSubjectId($n->getStringValue()); },
            'type' => function (self $o, ParseNode $n) { $o->setType($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the linkedEligibleRoleAssignmentId property value. If this is a request for role activation, it represents the id of the eligible assignment being referred; Otherwise, the value is null.
     * @return string|null
    */
    public function getLinkedEligibleRoleAssignmentId(): ?string {
        return $this->linkedEligibleRoleAssignmentId;
    }

    /**
     * Gets the reason property value. A message provided by users and administrators when create the request about why it is needed.
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Gets the requestedDateTime property value. Read-only. The request create time. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getRequestedDateTime(): ?DateTime {
        return $this->requestedDateTime;
    }

    /**
     * Gets the resource property value. Read-only. The resource that the request aims to.
     * @return GovernanceResource|null
    */
    public function getResource(): ?GovernanceResource {
        return $this->resource;
    }

    /**
     * Gets the resourceId property value. Required. The unique identifier of the Azure resource that is associated with the role assignment request. Azure resources can include subscriptions, resource groups, virtual machines, and SQL databases.
     * @return string|null
    */
    public function getResourceId(): ?string {
        return $this->resourceId;
    }

    /**
     * Gets the roleDefinition property value. Read-only. The role definition that the request aims to.
     * @return GovernanceRoleDefinition|null
    */
    public function getRoleDefinition(): ?GovernanceRoleDefinition {
        return $this->roleDefinition;
    }

    /**
     * Gets the roleDefinitionId property value. Required. The identifier of the Azure role definition that the role assignment request is associated with.
     * @return string|null
    */
    public function getRoleDefinitionId(): ?string {
        return $this->roleDefinitionId;
    }

    /**
     * Gets the schedule property value. The schedule object of the role assignment request.
     * @return GovernanceSchedule|null
    */
    public function getSchedule(): ?GovernanceSchedule {
        return $this->schedule;
    }

    /**
     * Gets the status property value. The status of the role assignment request.
     * @return GovernanceRoleAssignmentRequestStatus|null
    */
    public function getStatus(): ?GovernanceRoleAssignmentRequestStatus {
        return $this->status;
    }

    /**
     * Gets the subject property value. Read-only. The user/group principal.
     * @return GovernanceSubject|null
    */
    public function getSubject(): ?GovernanceSubject {
        return $this->subject;
    }

    /**
     * Gets the subjectId property value. Required. The unique identifier of the principal or subject that the role assignment request is associated with. Principals can be users, groups, or service principals.
     * @return string|null
    */
    public function getSubjectId(): ?string {
        return $this->subjectId;
    }

    /**
     * Gets the type property value. Required. Representing the type of the operation on the role assignment. The possible values are: AdminAdd , UserAdd , AdminUpdate , AdminRemove , UserRemove , UserExtend , AdminExtend , UserRenew , AdminRenew.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assignmentState', $this->assignmentState);
        $writer->writeStringValue('linkedEligibleRoleAssignmentId', $this->linkedEligibleRoleAssignmentId);
        $writer->writeStringValue('reason', $this->reason);
        $writer->writeDateTimeValue('requestedDateTime', $this->requestedDateTime);
        $writer->writeObjectValue('resource', $this->resource);
        $writer->writeStringValue('resourceId', $this->resourceId);
        $writer->writeObjectValue('roleDefinition', $this->roleDefinition);
        $writer->writeStringValue('roleDefinitionId', $this->roleDefinitionId);
        $writer->writeObjectValue('schedule', $this->schedule);
        $writer->writeObjectValue('status', $this->status);
        $writer->writeObjectValue('subject', $this->subject);
        $writer->writeStringValue('subjectId', $this->subjectId);
        $writer->writeStringValue('type', $this->type);
    }

    /**
     * Sets the assignmentState property value. Required. The state of the assignment. The possible values are: Eligible (for eligible assignment),  Active (if it is directly assigned), Active (by administrators, or activated on an eligible assignment by the users).
     *  @param string|null $value Value to set for the assignmentState property.
    */
    public function setAssignmentState(?string $value ): void {
        $this->assignmentState = $value;
    }

    /**
     * Sets the linkedEligibleRoleAssignmentId property value. If this is a request for role activation, it represents the id of the eligible assignment being referred; Otherwise, the value is null.
     *  @param string|null $value Value to set for the linkedEligibleRoleAssignmentId property.
    */
    public function setLinkedEligibleRoleAssignmentId(?string $value ): void {
        $this->linkedEligibleRoleAssignmentId = $value;
    }

    /**
     * Sets the reason property value. A message provided by users and administrators when create the request about why it is needed.
     *  @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value ): void {
        $this->reason = $value;
    }

    /**
     * Sets the requestedDateTime property value. Read-only. The request create time. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the requestedDateTime property.
    */
    public function setRequestedDateTime(?DateTime $value ): void {
        $this->requestedDateTime = $value;
    }

    /**
     * Sets the resource property value. Read-only. The resource that the request aims to.
     *  @param GovernanceResource|null $value Value to set for the resource property.
    */
    public function setResource(?GovernanceResource $value ): void {
        $this->resource = $value;
    }

    /**
     * Sets the resourceId property value. Required. The unique identifier of the Azure resource that is associated with the role assignment request. Azure resources can include subscriptions, resource groups, virtual machines, and SQL databases.
     *  @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value ): void {
        $this->resourceId = $value;
    }

    /**
     * Sets the roleDefinition property value. Read-only. The role definition that the request aims to.
     *  @param GovernanceRoleDefinition|null $value Value to set for the roleDefinition property.
    */
    public function setRoleDefinition(?GovernanceRoleDefinition $value ): void {
        $this->roleDefinition = $value;
    }

    /**
     * Sets the roleDefinitionId property value. Required. The identifier of the Azure role definition that the role assignment request is associated with.
     *  @param string|null $value Value to set for the roleDefinitionId property.
    */
    public function setRoleDefinitionId(?string $value ): void {
        $this->roleDefinitionId = $value;
    }

    /**
     * Sets the schedule property value. The schedule object of the role assignment request.
     *  @param GovernanceSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?GovernanceSchedule $value ): void {
        $this->schedule = $value;
    }

    /**
     * Sets the status property value. The status of the role assignment request.
     *  @param GovernanceRoleAssignmentRequestStatus|null $value Value to set for the status property.
    */
    public function setStatus(?GovernanceRoleAssignmentRequestStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the subject property value. Read-only. The user/group principal.
     *  @param GovernanceSubject|null $value Value to set for the subject property.
    */
    public function setSubject(?GovernanceSubject $value ): void {
        $this->subject = $value;
    }

    /**
     * Sets the subjectId property value. Required. The unique identifier of the principal or subject that the role assignment request is associated with. Principals can be users, groups, or service principals.
     *  @param string|null $value Value to set for the subjectId property.
    */
    public function setSubjectId(?string $value ): void {
        $this->subjectId = $value;
    }

    /**
     * Sets the type property value. Required. Representing the type of the operation on the role assignment. The possible values are: AdminAdd , UserAdd , AdminUpdate , AdminRemove , UserRemove , UserExtend , AdminExtend , UserRenew , AdminRenew.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

}
