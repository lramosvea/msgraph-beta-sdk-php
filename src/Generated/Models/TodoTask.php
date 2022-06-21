<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TodoTask extends Entity 
{
    /** @var ItemBody|null $body The task body that typically contains information about the task. */
    private ?ItemBody $body = null;
    
    /** @var DateTime|null $bodyLastModifiedDateTime The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'. */
    private ?DateTime $bodyLastModifiedDateTime = null;
    
    /** @var DateTimeTimeZone|null $completedDateTime The date in the specified time zone that the task was finished. */
    private ?DateTimeTimeZone $completedDateTime = null;
    
    /** @var DateTime|null $createdDateTime The date and time when the task was created. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'. */
    private ?DateTime $createdDateTime = null;
    
    /** @var DateTimeTimeZone|null $dueDateTime The date in the specified time zone that the task is to be finished. */
    private ?DateTimeTimeZone $dueDateTime = null;
    
    /** @var array<Extension>|null $extensions The collection of open extensions defined for the task. Nullable. */
    private ?array $extensions = null;
    
    /** @var Importance|null $importance The importance of the task. Possible values are: low, normal, high. */
    private ?Importance $importance = null;
    
    /** @var bool|null $isReminderOn Set to true if an alert is set to remind the user of the task. */
    private ?bool $isReminderOn = null;
    
    /** @var DateTime|null $lastModifiedDateTime The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'. */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var array<LinkedResource>|null $linkedResources A collection of resources linked to the task. */
    private ?array $linkedResources = null;
    
    /** @var PatternedRecurrence|null $recurrence The recurrence pattern for the task. */
    private ?PatternedRecurrence $recurrence = null;
    
    /** @var DateTimeTimeZone|null $reminderDateTime The date and time for a reminder alert of the task to occur. */
    private ?DateTimeTimeZone $reminderDateTime = null;
    
    /** @var TaskStatus|null $status Indicates the state or progress of the task. Possible values are: notStarted, inProgress, completed, waitingOnOthers, deferred. */
    private ?TaskStatus $status = null;
    
    /** @var string|null $title A brief description of the task. */
    private ?string $title = null;
    
    /**
     * Instantiates a new todoTask and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TodoTask
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TodoTask {
        return new TodoTask();
    }

    /**
     * Gets the body property value. The task body that typically contains information about the task.
     * @return ItemBody|null
    */
    public function getBody(): ?ItemBody {
        return $this->body;
    }

    /**
     * Gets the bodyLastModifiedDateTime property value. The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getBodyLastModifiedDateTime(): ?DateTime {
        return $this->bodyLastModifiedDateTime;
    }

    /**
     * Gets the completedDateTime property value. The date in the specified time zone that the task was finished.
     * @return DateTimeTimeZone|null
    */
    public function getCompletedDateTime(): ?DateTimeTimeZone {
        return $this->completedDateTime;
    }

    /**
     * Gets the createdDateTime property value. The date and time when the task was created. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the dueDateTime property value. The date in the specified time zone that the task is to be finished.
     * @return DateTimeTimeZone|null
    */
    public function getDueDateTime(): ?DateTimeTimeZone {
        return $this->dueDateTime;
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the task. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        return $this->extensions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'body' => function (self $o, ParseNode $n) { $o->setBody($n->getObjectValue(ItemBody::class)); },
            'bodyLastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setBodyLastModifiedDateTime($n->getDateTimeValue()); },
            'completedDateTime' => function (self $o, ParseNode $n) { $o->setCompletedDateTime($n->getObjectValue(DateTimeTimeZone::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'dueDateTime' => function (self $o, ParseNode $n) { $o->setDueDateTime($n->getObjectValue(DateTimeTimeZone::class)); },
            'extensions' => function (self $o, ParseNode $n) { $o->setExtensions($n->getCollectionOfObjectValues(Extension::class)); },
            'importance' => function (self $o, ParseNode $n) { $o->setImportance($n->getEnumValue(Importance::class)); },
            'isReminderOn' => function (self $o, ParseNode $n) { $o->setIsReminderOn($n->getBooleanValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'linkedResources' => function (self $o, ParseNode $n) { $o->setLinkedResources($n->getCollectionOfObjectValues(LinkedResource::class)); },
            'recurrence' => function (self $o, ParseNode $n) { $o->setRecurrence($n->getObjectValue(PatternedRecurrence::class)); },
            'reminderDateTime' => function (self $o, ParseNode $n) { $o->setReminderDateTime($n->getObjectValue(DateTimeTimeZone::class)); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getEnumValue(TaskStatus::class)); },
            'title' => function (self $o, ParseNode $n) { $o->setTitle($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the importance property value. The importance of the task. Possible values are: low, normal, high.
     * @return Importance|null
    */
    public function getImportance(): ?Importance {
        return $this->importance;
    }

    /**
     * Gets the isReminderOn property value. Set to true if an alert is set to remind the user of the task.
     * @return bool|null
    */
    public function getIsReminderOn(): ?bool {
        return $this->isReminderOn;
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the linkedResources property value. A collection of resources linked to the task.
     * @return array<LinkedResource>|null
    */
    public function getLinkedResources(): ?array {
        return $this->linkedResources;
    }

    /**
     * Gets the recurrence property value. The recurrence pattern for the task.
     * @return PatternedRecurrence|null
    */
    public function getRecurrence(): ?PatternedRecurrence {
        return $this->recurrence;
    }

    /**
     * Gets the reminderDateTime property value. The date and time for a reminder alert of the task to occur.
     * @return DateTimeTimeZone|null
    */
    public function getReminderDateTime(): ?DateTimeTimeZone {
        return $this->reminderDateTime;
    }

    /**
     * Gets the status property value. Indicates the state or progress of the task. Possible values are: notStarted, inProgress, completed, waitingOnOthers, deferred.
     * @return TaskStatus|null
    */
    public function getStatus(): ?TaskStatus {
        return $this->status;
    }

    /**
     * Gets the title property value. A brief description of the task.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('body', $this->body);
        $writer->writeDateTimeValue('bodyLastModifiedDateTime', $this->bodyLastModifiedDateTime);
        $writer->writeObjectValue('completedDateTime', $this->completedDateTime);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('dueDateTime', $this->dueDateTime);
        $writer->writeCollectionOfObjectValues('extensions', $this->extensions);
        $writer->writeEnumValue('importance', $this->importance);
        $writer->writeBooleanValue('isReminderOn', $this->isReminderOn);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeCollectionOfObjectValues('linkedResources', $this->linkedResources);
        $writer->writeObjectValue('recurrence', $this->recurrence);
        $writer->writeObjectValue('reminderDateTime', $this->reminderDateTime);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('title', $this->title);
    }

    /**
     * Sets the body property value. The task body that typically contains information about the task.
     *  @param ItemBody|null $value Value to set for the body property.
    */
    public function setBody(?ItemBody $value ): void {
        $this->body = $value;
    }

    /**
     * Sets the bodyLastModifiedDateTime property value. The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     *  @param DateTime|null $value Value to set for the bodyLastModifiedDateTime property.
    */
    public function setBodyLastModifiedDateTime(?DateTime $value ): void {
        $this->bodyLastModifiedDateTime = $value;
    }

    /**
     * Sets the completedDateTime property value. The date in the specified time zone that the task was finished.
     *  @param DateTimeTimeZone|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTimeTimeZone $value ): void {
        $this->completedDateTime = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time when the task was created. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the dueDateTime property value. The date in the specified time zone that the task is to be finished.
     *  @param DateTimeTimeZone|null $value Value to set for the dueDateTime property.
    */
    public function setDueDateTime(?DateTimeTimeZone $value ): void {
        $this->dueDateTime = $value;
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the task. Nullable.
     *  @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value ): void {
        $this->extensions = $value;
    }

    /**
     * Sets the importance property value. The importance of the task. Possible values are: low, normal, high.
     *  @param Importance|null $value Value to set for the importance property.
    */
    public function setImportance(?Importance $value ): void {
        $this->importance = $value;
    }

    /**
     * Sets the isReminderOn property value. Set to true if an alert is set to remind the user of the task.
     *  @param bool|null $value Value to set for the isReminderOn property.
    */
    public function setIsReminderOn(?bool $value ): void {
        $this->isReminderOn = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the linkedResources property value. A collection of resources linked to the task.
     *  @param array<LinkedResource>|null $value Value to set for the linkedResources property.
    */
    public function setLinkedResources(?array $value ): void {
        $this->linkedResources = $value;
    }

    /**
     * Sets the recurrence property value. The recurrence pattern for the task.
     *  @param PatternedRecurrence|null $value Value to set for the recurrence property.
    */
    public function setRecurrence(?PatternedRecurrence $value ): void {
        $this->recurrence = $value;
    }

    /**
     * Sets the reminderDateTime property value. The date and time for a reminder alert of the task to occur.
     *  @param DateTimeTimeZone|null $value Value to set for the reminderDateTime property.
    */
    public function setReminderDateTime(?DateTimeTimeZone $value ): void {
        $this->reminderDateTime = $value;
    }

    /**
     * Sets the status property value. Indicates the state or progress of the task. Possible values are: notStarted, inProgress, completed, waitingOnOthers, deferred.
     *  @param TaskStatus|null $value Value to set for the status property.
    */
    public function setStatus(?TaskStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the title property value. A brief description of the task.
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value ): void {
        $this->title = $value;
    }

}
