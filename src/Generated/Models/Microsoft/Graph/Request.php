<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Request extends Entity 
{
    /** @var string|null $approvalId The identifier of the approval of the request. */
    private ?string $approvalId = null;
    
    /** @var DateTime|null $completedDateTime The request completion date time. */
    private ?DateTime $completedDateTime = null;
    
    /** @var IdentitySet|null $createdBy The user who created this request. */
    private ?IdentitySet $createdBy = null;
    
    /** @var DateTime|null $createdDateTime The request creation date time. */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $customData Free text field to define any custom data for the request. Not used. */
    private ?string $customData = null;
    
    /** @var string|null $status The status of the request. Not nullable. The possible values are: Canceled, Denied, Failed, Granted, PendingAdminDecision, PendingApproval, PendingProvisioning, PendingScheduleCreation, Provisioned, Revoked, and ScheduleCreated. Not nullable. */
    private ?string $status = null;
    
    /**
     * Instantiates a new request and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Request
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Request {
        return new Request();
    }

    /**
     * Gets the approvalId property value. The identifier of the approval of the request.
     * @return string|null
    */
    public function getApprovalId(): ?string {
        return $this->approvalId;
    }

    /**
     * Gets the completedDateTime property value. The request completion date time.
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        return $this->completedDateTime;
    }

    /**
     * Gets the createdBy property value. The user who created this request.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. The request creation date time.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the customData property value. Free text field to define any custom data for the request. Not used.
     * @return string|null
    */
    public function getCustomData(): ?string {
        return $this->customData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'approvalId' => function (self $o, ParseNode $n) { $o->setApprovalId($n->getStringValue()); },
            'completedDateTime' => function (self $o, ParseNode $n) { $o->setCompletedDateTime($n->getDateTimeValue()); },
            'createdBy' => function (self $o, ParseNode $n) { $o->setCreatedBy($n->getObjectValue(IdentitySet::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'customData' => function (self $o, ParseNode $n) { $o->setCustomData($n->getStringValue()); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the status property value. The status of the request. Not nullable. The possible values are: Canceled, Denied, Failed, Granted, PendingAdminDecision, PendingApproval, PendingProvisioning, PendingScheduleCreation, Provisioned, Revoked, and ScheduleCreated. Not nullable.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('approvalId', $this->approvalId);
        $writer->writeDateTimeValue('completedDateTime', $this->completedDateTime);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('customData', $this->customData);
        $writer->writeStringValue('status', $this->status);
    }

    /**
     * Sets the approvalId property value. The identifier of the approval of the request.
     *  @param string|null $value Value to set for the approvalId property.
    */
    public function setApprovalId(?string $value ): void {
        $this->approvalId = $value;
    }

    /**
     * Sets the completedDateTime property value. The request completion date time.
     *  @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value ): void {
        $this->completedDateTime = $value;
    }

    /**
     * Sets the createdBy property value. The user who created this request.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. The request creation date time.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the customData property value. Free text field to define any custom data for the request. Not used.
     *  @param string|null $value Value to set for the customData property.
    */
    public function setCustomData(?string $value ): void {
        $this->customData = $value;
    }

    /**
     * Sets the status property value. The status of the request. Not nullable. The possible values are: Canceled, Denied, Failed, Granted, PendingAdminDecision, PendingApproval, PendingProvisioning, PendingScheduleCreation, Provisioned, Revoked, and ScheduleCreated. Not nullable.
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

}
