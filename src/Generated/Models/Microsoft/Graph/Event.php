<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Event extends OutlookItem 
{
    /** @var bool|null $allowNewTimeProposals true if the meeting organizer allows invitees to propose a new time when responding; otherwise, false. Optional. Default is true. */
    private ?bool $allowNewTimeProposals = null;
    
    /** @var array<Attachment>|null $attachments The collection of FileAttachment, ItemAttachment, and referenceAttachment attachments for the event. Navigation property. Read-only. Nullable. */
    private ?array $attachments = null;
    
    /** @var array<Attendee>|null $attendees The collection of attendees for the event. */
    private ?array $attendees = null;
    
    /** @var ItemBody|null $body The body of the message associated with the event. It can be in HTML or text format. */
    private ?ItemBody $body = null;
    
    /** @var string|null $bodyPreview The preview of the message associated with the event. It is in text format. */
    private ?string $bodyPreview = null;
    
    /** @var Calendar|null $calendar The calendar that contains the event. Navigation property. Read-only. */
    private ?Calendar $calendar = null;
    
    /** @var array<string>|null $cancelledOccurrences Contains occurrenceId property values of cancelled instances in a recurring series, if the event is the series master. Instances in a recurring series that are cancelled are called cancelledOccurences.Returned only on $select in a Get operation which specifies the id of a series master event (that is, the seriesMasterId property value). */
    private ?array $cancelledOccurrences = null;
    
    /** @var DateTimeTimeZone|null $end The date, time, and time zone that the event ends. By default, the end time is in UTC. */
    private ?DateTimeTimeZone $end = null;
    
    /** @var array<Event>|null $exceptionOccurrences  */
    private ?array $exceptionOccurrences = null;
    
    /** @var array<Extension>|null $extensions The collection of open extensions defined for the event. Nullable. */
    private ?array $extensions = null;
    
    /** @var bool|null $hasAttachments Set to true if the event has attachments. */
    private ?bool $hasAttachments = null;
    
    /** @var bool|null $hideAttendees When set to true, each attendee only sees themselves in the meeting request and meeting Tracking list. Default is false. */
    private ?bool $hideAttendees = null;
    
    /** @var Importance|null $importance  */
    private ?Importance $importance = null;
    
    /** @var array<Event>|null $instances The occurrences of a recurring series, if the event is a series master. This property includes occurrences that are part of the recurrence pattern, and exceptions that have been modified, but does not include occurrences that have been cancelled from the series. Navigation property. Read-only. Nullable. */
    private ?array $instances = null;
    
    /** @var bool|null $isAllDay  */
    private ?bool $isAllDay = null;
    
    /** @var bool|null $isCancelled  */
    private ?bool $isCancelled = null;
    
    /** @var bool|null $isDraft  */
    private ?bool $isDraft = null;
    
    /** @var bool|null $isOnlineMeeting  */
    private ?bool $isOnlineMeeting = null;
    
    /** @var bool|null $isOrganizer  */
    private ?bool $isOrganizer = null;
    
    /** @var bool|null $isReminderOn  */
    private ?bool $isReminderOn = null;
    
    /** @var Location|null $location  */
    private ?Location $location = null;
    
    /** @var array<Location>|null $locations  */
    private ?array $locations = null;
    
    /** @var array<MultiValueLegacyExtendedProperty>|null $multiValueExtendedProperties The collection of multi-value extended properties defined for the event. Read-only. Nullable. */
    private ?array $multiValueExtendedProperties = null;
    
    /** @var string|null $occurrenceId  */
    private ?string $occurrenceId = null;
    
    /** @var OnlineMeetingInfo|null $onlineMeeting  */
    private ?OnlineMeetingInfo $onlineMeeting = null;
    
    /** @var OnlineMeetingProviderType|null $onlineMeetingProvider  */
    private ?OnlineMeetingProviderType $onlineMeetingProvider = null;
    
    /** @var string|null $onlineMeetingUrl  */
    private ?string $onlineMeetingUrl = null;
    
    /** @var Recipient|null $organizer  */
    private ?Recipient $organizer = null;
    
    /** @var string|null $originalEndTimeZone  */
    private ?string $originalEndTimeZone = null;
    
    /** @var DateTime|null $originalStart  */
    private ?DateTime $originalStart = null;
    
    /** @var string|null $originalStartTimeZone  */
    private ?string $originalStartTimeZone = null;
    
    /** @var PatternedRecurrence|null $recurrence  */
    private ?PatternedRecurrence $recurrence = null;
    
    /** @var int|null $reminderMinutesBeforeStart  */
    private ?int $reminderMinutesBeforeStart = null;
    
    /** @var bool|null $responseRequested  */
    private ?bool $responseRequested = null;
    
    /** @var ResponseStatus|null $responseStatus  */
    private ?ResponseStatus $responseStatus = null;
    
    /** @var Sensitivity|null $sensitivity  */
    private ?Sensitivity $sensitivity = null;
    
    /** @var string|null $seriesMasterId  */
    private ?string $seriesMasterId = null;
    
    /** @var FreeBusyStatus|null $showAs  */
    private ?FreeBusyStatus $showAs = null;
    
    /** @var array<SingleValueLegacyExtendedProperty>|null $singleValueExtendedProperties The collection of single-value extended properties defined for the event. Read-only. Nullable. */
    private ?array $singleValueExtendedProperties = null;
    
    /** @var DateTimeTimeZone|null $start  */
    private ?DateTimeTimeZone $start = null;
    
    /** @var string|null $subject  */
    private ?string $subject = null;
    
    /** @var string|null $transactionId  */
    private ?string $transactionId = null;
    
    /** @var EventType|null $type  */
    private ?EventType $type = null;
    
    /** @var string|null $uid  */
    private ?string $uid = null;
    
    /** @var string|null $webLink  */
    private ?string $webLink = null;
    
    /**
     * Instantiates a new event and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Event
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Event {
        return new Event();
    }

    /**
     * Gets the allowNewTimeProposals property value. true if the meeting organizer allows invitees to propose a new time when responding; otherwise, false. Optional. Default is true.
     * @return bool|null
    */
    public function getAllowNewTimeProposals(): ?bool {
        return $this->allowNewTimeProposals;
    }

    /**
     * Gets the attachments property value. The collection of FileAttachment, ItemAttachment, and referenceAttachment attachments for the event. Navigation property. Read-only. Nullable.
     * @return array<Attachment>|null
    */
    public function getAttachments(): ?array {
        return $this->attachments;
    }

    /**
     * Gets the attendees property value. The collection of attendees for the event.
     * @return array<Attendee>|null
    */
    public function getAttendees(): ?array {
        return $this->attendees;
    }

    /**
     * Gets the body property value. The body of the message associated with the event. It can be in HTML or text format.
     * @return ItemBody|null
    */
    public function getBody(): ?ItemBody {
        return $this->body;
    }

    /**
     * Gets the bodyPreview property value. The preview of the message associated with the event. It is in text format.
     * @return string|null
    */
    public function getBodyPreview(): ?string {
        return $this->bodyPreview;
    }

    /**
     * Gets the calendar property value. The calendar that contains the event. Navigation property. Read-only.
     * @return Calendar|null
    */
    public function getCalendar(): ?Calendar {
        return $this->calendar;
    }

    /**
     * Gets the cancelledOccurrences property value. Contains occurrenceId property values of cancelled instances in a recurring series, if the event is the series master. Instances in a recurring series that are cancelled are called cancelledOccurences.Returned only on $select in a Get operation which specifies the id of a series master event (that is, the seriesMasterId property value).
     * @return array<string>|null
    */
    public function getCancelledOccurrences(): ?array {
        return $this->cancelledOccurrences;
    }

    /**
     * Gets the end property value. The date, time, and time zone that the event ends. By default, the end time is in UTC.
     * @return DateTimeTimeZone|null
    */
    public function getEnd(): ?DateTimeTimeZone {
        return $this->end;
    }

    /**
     * Gets the exceptionOccurrences property value. 
     * @return array<Event>|null
    */
    public function getExceptionOccurrences(): ?array {
        return $this->exceptionOccurrences;
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the event. Nullable.
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
            'allowNewTimeProposals' => function (self $o, ParseNode $n) { $o->setAllowNewTimeProposals($n->getBooleanValue()); },
            'attachments' => function (self $o, ParseNode $n) { $o->setAttachments($n->getCollectionOfObjectValues(Attachment::class)); },
            'attendees' => function (self $o, ParseNode $n) { $o->setAttendees($n->getCollectionOfObjectValues(Attendee::class)); },
            'body' => function (self $o, ParseNode $n) { $o->setBody($n->getObjectValue(ItemBody::class)); },
            'bodyPreview' => function (self $o, ParseNode $n) { $o->setBodyPreview($n->getStringValue()); },
            'calendar' => function (self $o, ParseNode $n) { $o->setCalendar($n->getObjectValue(Calendar::class)); },
            'cancelledOccurrences' => function (self $o, ParseNode $n) { $o->setCancelledOccurrences($n->getCollectionOfPrimitiveValues()); },
            'end' => function (self $o, ParseNode $n) { $o->setEnd($n->getObjectValue(DateTimeTimeZone::class)); },
            'exceptionOccurrences' => function (self $o, ParseNode $n) { $o->setExceptionOccurrences($n->getCollectionOfObjectValues(Event::class)); },
            'extensions' => function (self $o, ParseNode $n) { $o->setExtensions($n->getCollectionOfObjectValues(Extension::class)); },
            'hasAttachments' => function (self $o, ParseNode $n) { $o->setHasAttachments($n->getBooleanValue()); },
            'hideAttendees' => function (self $o, ParseNode $n) { $o->setHideAttendees($n->getBooleanValue()); },
            'importance' => function (self $o, ParseNode $n) { $o->setImportance($n->getEnumValue(Importance::class)); },
            'instances' => function (self $o, ParseNode $n) { $o->setInstances($n->getCollectionOfObjectValues(Event::class)); },
            'isAllDay' => function (self $o, ParseNode $n) { $o->setIsAllDay($n->getBooleanValue()); },
            'isCancelled' => function (self $o, ParseNode $n) { $o->setIsCancelled($n->getBooleanValue()); },
            'isDraft' => function (self $o, ParseNode $n) { $o->setIsDraft($n->getBooleanValue()); },
            'isOnlineMeeting' => function (self $o, ParseNode $n) { $o->setIsOnlineMeeting($n->getBooleanValue()); },
            'isOrganizer' => function (self $o, ParseNode $n) { $o->setIsOrganizer($n->getBooleanValue()); },
            'isReminderOn' => function (self $o, ParseNode $n) { $o->setIsReminderOn($n->getBooleanValue()); },
            'location' => function (self $o, ParseNode $n) { $o->setLocation($n->getObjectValue(Location::class)); },
            'locations' => function (self $o, ParseNode $n) { $o->setLocations($n->getCollectionOfObjectValues(Location::class)); },
            'multiValueExtendedProperties' => function (self $o, ParseNode $n) { $o->setMultiValueExtendedProperties($n->getCollectionOfObjectValues(MultiValueLegacyExtendedProperty::class)); },
            'occurrenceId' => function (self $o, ParseNode $n) { $o->setOccurrenceId($n->getStringValue()); },
            'onlineMeeting' => function (self $o, ParseNode $n) { $o->setOnlineMeeting($n->getObjectValue(OnlineMeetingInfo::class)); },
            'onlineMeetingProvider' => function (self $o, ParseNode $n) { $o->setOnlineMeetingProvider($n->getEnumValue(OnlineMeetingProviderType::class)); },
            'onlineMeetingUrl' => function (self $o, ParseNode $n) { $o->setOnlineMeetingUrl($n->getStringValue()); },
            'organizer' => function (self $o, ParseNode $n) { $o->setOrganizer($n->getObjectValue(Recipient::class)); },
            'originalEndTimeZone' => function (self $o, ParseNode $n) { $o->setOriginalEndTimeZone($n->getStringValue()); },
            'originalStart' => function (self $o, ParseNode $n) { $o->setOriginalStart($n->getDateTimeValue()); },
            'originalStartTimeZone' => function (self $o, ParseNode $n) { $o->setOriginalStartTimeZone($n->getStringValue()); },
            'recurrence' => function (self $o, ParseNode $n) { $o->setRecurrence($n->getObjectValue(PatternedRecurrence::class)); },
            'reminderMinutesBeforeStart' => function (self $o, ParseNode $n) { $o->setReminderMinutesBeforeStart($n->getIntegerValue()); },
            'responseRequested' => function (self $o, ParseNode $n) { $o->setResponseRequested($n->getBooleanValue()); },
            'responseStatus' => function (self $o, ParseNode $n) { $o->setResponseStatus($n->getObjectValue(ResponseStatus::class)); },
            'sensitivity' => function (self $o, ParseNode $n) { $o->setSensitivity($n->getEnumValue(Sensitivity::class)); },
            'seriesMasterId' => function (self $o, ParseNode $n) { $o->setSeriesMasterId($n->getStringValue()); },
            'showAs' => function (self $o, ParseNode $n) { $o->setShowAs($n->getEnumValue(FreeBusyStatus::class)); },
            'singleValueExtendedProperties' => function (self $o, ParseNode $n) { $o->setSingleValueExtendedProperties($n->getCollectionOfObjectValues(SingleValueLegacyExtendedProperty::class)); },
            'start' => function (self $o, ParseNode $n) { $o->setStart($n->getObjectValue(DateTimeTimeZone::class)); },
            'subject' => function (self $o, ParseNode $n) { $o->setSubject($n->getStringValue()); },
            'transactionId' => function (self $o, ParseNode $n) { $o->setTransactionId($n->getStringValue()); },
            'type' => function (self $o, ParseNode $n) { $o->setType($n->getEnumValue(EventType::class)); },
            'uid' => function (self $o, ParseNode $n) { $o->setUid($n->getStringValue()); },
            'webLink' => function (self $o, ParseNode $n) { $o->setWebLink($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the hasAttachments property value. Set to true if the event has attachments.
     * @return bool|null
    */
    public function getHasAttachments(): ?bool {
        return $this->hasAttachments;
    }

    /**
     * Gets the hideAttendees property value. When set to true, each attendee only sees themselves in the meeting request and meeting Tracking list. Default is false.
     * @return bool|null
    */
    public function getHideAttendees(): ?bool {
        return $this->hideAttendees;
    }

    /**
     * Gets the importance property value. 
     * @return Importance|null
    */
    public function getImportance(): ?Importance {
        return $this->importance;
    }

    /**
     * Gets the instances property value. The occurrences of a recurring series, if the event is a series master. This property includes occurrences that are part of the recurrence pattern, and exceptions that have been modified, but does not include occurrences that have been cancelled from the series. Navigation property. Read-only. Nullable.
     * @return array<Event>|null
    */
    public function getInstances(): ?array {
        return $this->instances;
    }

    /**
     * Gets the isAllDay property value. 
     * @return bool|null
    */
    public function getIsAllDay(): ?bool {
        return $this->isAllDay;
    }

    /**
     * Gets the isCancelled property value. 
     * @return bool|null
    */
    public function getIsCancelled(): ?bool {
        return $this->isCancelled;
    }

    /**
     * Gets the isDraft property value. 
     * @return bool|null
    */
    public function getIsDraft(): ?bool {
        return $this->isDraft;
    }

    /**
     * Gets the isOnlineMeeting property value. 
     * @return bool|null
    */
    public function getIsOnlineMeeting(): ?bool {
        return $this->isOnlineMeeting;
    }

    /**
     * Gets the isOrganizer property value. 
     * @return bool|null
    */
    public function getIsOrganizer(): ?bool {
        return $this->isOrganizer;
    }

    /**
     * Gets the isReminderOn property value. 
     * @return bool|null
    */
    public function getIsReminderOn(): ?bool {
        return $this->isReminderOn;
    }

    /**
     * Gets the location property value. 
     * @return Location|null
    */
    public function getLocation(): ?Location {
        return $this->location;
    }

    /**
     * Gets the locations property value. 
     * @return array<Location>|null
    */
    public function getLocations(): ?array {
        return $this->locations;
    }

    /**
     * Gets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the event. Read-only. Nullable.
     * @return array<MultiValueLegacyExtendedProperty>|null
    */
    public function getMultiValueExtendedProperties(): ?array {
        return $this->multiValueExtendedProperties;
    }

    /**
     * Gets the occurrenceId property value. 
     * @return string|null
    */
    public function getOccurrenceId(): ?string {
        return $this->occurrenceId;
    }

    /**
     * Gets the onlineMeeting property value. 
     * @return OnlineMeetingInfo|null
    */
    public function getOnlineMeeting(): ?OnlineMeetingInfo {
        return $this->onlineMeeting;
    }

    /**
     * Gets the onlineMeetingProvider property value. 
     * @return OnlineMeetingProviderType|null
    */
    public function getOnlineMeetingProvider(): ?OnlineMeetingProviderType {
        return $this->onlineMeetingProvider;
    }

    /**
     * Gets the onlineMeetingUrl property value. 
     * @return string|null
    */
    public function getOnlineMeetingUrl(): ?string {
        return $this->onlineMeetingUrl;
    }

    /**
     * Gets the organizer property value. 
     * @return Recipient|null
    */
    public function getOrganizer(): ?Recipient {
        return $this->organizer;
    }

    /**
     * Gets the originalEndTimeZone property value. 
     * @return string|null
    */
    public function getOriginalEndTimeZone(): ?string {
        return $this->originalEndTimeZone;
    }

    /**
     * Gets the originalStart property value. 
     * @return DateTime|null
    */
    public function getOriginalStart(): ?DateTime {
        return $this->originalStart;
    }

    /**
     * Gets the originalStartTimeZone property value. 
     * @return string|null
    */
    public function getOriginalStartTimeZone(): ?string {
        return $this->originalStartTimeZone;
    }

    /**
     * Gets the recurrence property value. 
     * @return PatternedRecurrence|null
    */
    public function getRecurrence(): ?PatternedRecurrence {
        return $this->recurrence;
    }

    /**
     * Gets the reminderMinutesBeforeStart property value. 
     * @return int|null
    */
    public function getReminderMinutesBeforeStart(): ?int {
        return $this->reminderMinutesBeforeStart;
    }

    /**
     * Gets the responseRequested property value. 
     * @return bool|null
    */
    public function getResponseRequested(): ?bool {
        return $this->responseRequested;
    }

    /**
     * Gets the responseStatus property value. 
     * @return ResponseStatus|null
    */
    public function getResponseStatus(): ?ResponseStatus {
        return $this->responseStatus;
    }

    /**
     * Gets the sensitivity property value. 
     * @return Sensitivity|null
    */
    public function getSensitivity(): ?Sensitivity {
        return $this->sensitivity;
    }

    /**
     * Gets the seriesMasterId property value. 
     * @return string|null
    */
    public function getSeriesMasterId(): ?string {
        return $this->seriesMasterId;
    }

    /**
     * Gets the showAs property value. 
     * @return FreeBusyStatus|null
    */
    public function getShowAs(): ?FreeBusyStatus {
        return $this->showAs;
    }

    /**
     * Gets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the event. Read-only. Nullable.
     * @return array<SingleValueLegacyExtendedProperty>|null
    */
    public function getSingleValueExtendedProperties(): ?array {
        return $this->singleValueExtendedProperties;
    }

    /**
     * Gets the start property value. 
     * @return DateTimeTimeZone|null
    */
    public function getStart(): ?DateTimeTimeZone {
        return $this->start;
    }

    /**
     * Gets the subject property value. 
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Gets the transactionId property value. 
     * @return string|null
    */
    public function getTransactionId(): ?string {
        return $this->transactionId;
    }

    /**
     * Gets the type property value. 
     * @return EventType|null
    */
    public function getType(): ?EventType {
        return $this->type;
    }

    /**
     * Gets the uid property value. 
     * @return string|null
    */
    public function getUid(): ?string {
        return $this->uid;
    }

    /**
     * Gets the webLink property value. 
     * @return string|null
    */
    public function getWebLink(): ?string {
        return $this->webLink;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowNewTimeProposals', $this->allowNewTimeProposals);
        $writer->writeCollectionOfObjectValues('attachments', $this->attachments);
        $writer->writeCollectionOfObjectValues('attendees', $this->attendees);
        $writer->writeObjectValue('body', $this->body);
        $writer->writeStringValue('bodyPreview', $this->bodyPreview);
        $writer->writeObjectValue('calendar', $this->calendar);
        $writer->writeCollectionOfPrimitiveValues('cancelledOccurrences', $this->cancelledOccurrences);
        $writer->writeObjectValue('end', $this->end);
        $writer->writeCollectionOfObjectValues('exceptionOccurrences', $this->exceptionOccurrences);
        $writer->writeCollectionOfObjectValues('extensions', $this->extensions);
        $writer->writeBooleanValue('hasAttachments', $this->hasAttachments);
        $writer->writeBooleanValue('hideAttendees', $this->hideAttendees);
        $writer->writeEnumValue('importance', $this->importance);
        $writer->writeCollectionOfObjectValues('instances', $this->instances);
        $writer->writeBooleanValue('isAllDay', $this->isAllDay);
        $writer->writeBooleanValue('isCancelled', $this->isCancelled);
        $writer->writeBooleanValue('isDraft', $this->isDraft);
        $writer->writeBooleanValue('isOnlineMeeting', $this->isOnlineMeeting);
        $writer->writeBooleanValue('isOrganizer', $this->isOrganizer);
        $writer->writeBooleanValue('isReminderOn', $this->isReminderOn);
        $writer->writeObjectValue('location', $this->location);
        $writer->writeCollectionOfObjectValues('locations', $this->locations);
        $writer->writeCollectionOfObjectValues('multiValueExtendedProperties', $this->multiValueExtendedProperties);
        $writer->writeStringValue('occurrenceId', $this->occurrenceId);
        $writer->writeObjectValue('onlineMeeting', $this->onlineMeeting);
        $writer->writeEnumValue('onlineMeetingProvider', $this->onlineMeetingProvider);
        $writer->writeStringValue('onlineMeetingUrl', $this->onlineMeetingUrl);
        $writer->writeObjectValue('organizer', $this->organizer);
        $writer->writeStringValue('originalEndTimeZone', $this->originalEndTimeZone);
        $writer->writeDateTimeValue('originalStart', $this->originalStart);
        $writer->writeStringValue('originalStartTimeZone', $this->originalStartTimeZone);
        $writer->writeObjectValue('recurrence', $this->recurrence);
        $writer->writeIntegerValue('reminderMinutesBeforeStart', $this->reminderMinutesBeforeStart);
        $writer->writeBooleanValue('responseRequested', $this->responseRequested);
        $writer->writeObjectValue('responseStatus', $this->responseStatus);
        $writer->writeEnumValue('sensitivity', $this->sensitivity);
        $writer->writeStringValue('seriesMasterId', $this->seriesMasterId);
        $writer->writeEnumValue('showAs', $this->showAs);
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->singleValueExtendedProperties);
        $writer->writeObjectValue('start', $this->start);
        $writer->writeStringValue('subject', $this->subject);
        $writer->writeStringValue('transactionId', $this->transactionId);
        $writer->writeEnumValue('type', $this->type);
        $writer->writeStringValue('uid', $this->uid);
        $writer->writeStringValue('webLink', $this->webLink);
    }

    /**
     * Sets the allowNewTimeProposals property value. true if the meeting organizer allows invitees to propose a new time when responding; otherwise, false. Optional. Default is true.
     *  @param bool|null $value Value to set for the allowNewTimeProposals property.
    */
    public function setAllowNewTimeProposals(?bool $value ): void {
        $this->allowNewTimeProposals = $value;
    }

    /**
     * Sets the attachments property value. The collection of FileAttachment, ItemAttachment, and referenceAttachment attachments for the event. Navigation property. Read-only. Nullable.
     *  @param array<Attachment>|null $value Value to set for the attachments property.
    */
    public function setAttachments(?array $value ): void {
        $this->attachments = $value;
    }

    /**
     * Sets the attendees property value. The collection of attendees for the event.
     *  @param array<Attendee>|null $value Value to set for the attendees property.
    */
    public function setAttendees(?array $value ): void {
        $this->attendees = $value;
    }

    /**
     * Sets the body property value. The body of the message associated with the event. It can be in HTML or text format.
     *  @param ItemBody|null $value Value to set for the body property.
    */
    public function setBody(?ItemBody $value ): void {
        $this->body = $value;
    }

    /**
     * Sets the bodyPreview property value. The preview of the message associated with the event. It is in text format.
     *  @param string|null $value Value to set for the bodyPreview property.
    */
    public function setBodyPreview(?string $value ): void {
        $this->bodyPreview = $value;
    }

    /**
     * Sets the calendar property value. The calendar that contains the event. Navigation property. Read-only.
     *  @param Calendar|null $value Value to set for the calendar property.
    */
    public function setCalendar(?Calendar $value ): void {
        $this->calendar = $value;
    }

    /**
     * Sets the cancelledOccurrences property value. Contains occurrenceId property values of cancelled instances in a recurring series, if the event is the series master. Instances in a recurring series that are cancelled are called cancelledOccurences.Returned only on $select in a Get operation which specifies the id of a series master event (that is, the seriesMasterId property value).
     *  @param array<string>|null $value Value to set for the cancelledOccurrences property.
    */
    public function setCancelledOccurrences(?array $value ): void {
        $this->cancelledOccurrences = $value;
    }

    /**
     * Sets the end property value. The date, time, and time zone that the event ends. By default, the end time is in UTC.
     *  @param DateTimeTimeZone|null $value Value to set for the end property.
    */
    public function setEnd(?DateTimeTimeZone $value ): void {
        $this->end = $value;
    }

    /**
     * Sets the exceptionOccurrences property value. 
     *  @param array<Event>|null $value Value to set for the exceptionOccurrences property.
    */
    public function setExceptionOccurrences(?array $value ): void {
        $this->exceptionOccurrences = $value;
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the event. Nullable.
     *  @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value ): void {
        $this->extensions = $value;
    }

    /**
     * Sets the hasAttachments property value. Set to true if the event has attachments.
     *  @param bool|null $value Value to set for the hasAttachments property.
    */
    public function setHasAttachments(?bool $value ): void {
        $this->hasAttachments = $value;
    }

    /**
     * Sets the hideAttendees property value. When set to true, each attendee only sees themselves in the meeting request and meeting Tracking list. Default is false.
     *  @param bool|null $value Value to set for the hideAttendees property.
    */
    public function setHideAttendees(?bool $value ): void {
        $this->hideAttendees = $value;
    }

    /**
     * Sets the importance property value. 
     *  @param Importance|null $value Value to set for the importance property.
    */
    public function setImportance(?Importance $value ): void {
        $this->importance = $value;
    }

    /**
     * Sets the instances property value. The occurrences of a recurring series, if the event is a series master. This property includes occurrences that are part of the recurrence pattern, and exceptions that have been modified, but does not include occurrences that have been cancelled from the series. Navigation property. Read-only. Nullable.
     *  @param array<Event>|null $value Value to set for the instances property.
    */
    public function setInstances(?array $value ): void {
        $this->instances = $value;
    }

    /**
     * Sets the isAllDay property value. 
     *  @param bool|null $value Value to set for the isAllDay property.
    */
    public function setIsAllDay(?bool $value ): void {
        $this->isAllDay = $value;
    }

    /**
     * Sets the isCancelled property value. 
     *  @param bool|null $value Value to set for the isCancelled property.
    */
    public function setIsCancelled(?bool $value ): void {
        $this->isCancelled = $value;
    }

    /**
     * Sets the isDraft property value. 
     *  @param bool|null $value Value to set for the isDraft property.
    */
    public function setIsDraft(?bool $value ): void {
        $this->isDraft = $value;
    }

    /**
     * Sets the isOnlineMeeting property value. 
     *  @param bool|null $value Value to set for the isOnlineMeeting property.
    */
    public function setIsOnlineMeeting(?bool $value ): void {
        $this->isOnlineMeeting = $value;
    }

    /**
     * Sets the isOrganizer property value. 
     *  @param bool|null $value Value to set for the isOrganizer property.
    */
    public function setIsOrganizer(?bool $value ): void {
        $this->isOrganizer = $value;
    }

    /**
     * Sets the isReminderOn property value. 
     *  @param bool|null $value Value to set for the isReminderOn property.
    */
    public function setIsReminderOn(?bool $value ): void {
        $this->isReminderOn = $value;
    }

    /**
     * Sets the location property value. 
     *  @param Location|null $value Value to set for the location property.
    */
    public function setLocation(?Location $value ): void {
        $this->location = $value;
    }

    /**
     * Sets the locations property value. 
     *  @param array<Location>|null $value Value to set for the locations property.
    */
    public function setLocations(?array $value ): void {
        $this->locations = $value;
    }

    /**
     * Sets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the event. Read-only. Nullable.
     *  @param array<MultiValueLegacyExtendedProperty>|null $value Value to set for the multiValueExtendedProperties property.
    */
    public function setMultiValueExtendedProperties(?array $value ): void {
        $this->multiValueExtendedProperties = $value;
    }

    /**
     * Sets the occurrenceId property value. 
     *  @param string|null $value Value to set for the occurrenceId property.
    */
    public function setOccurrenceId(?string $value ): void {
        $this->occurrenceId = $value;
    }

    /**
     * Sets the onlineMeeting property value. 
     *  @param OnlineMeetingInfo|null $value Value to set for the onlineMeeting property.
    */
    public function setOnlineMeeting(?OnlineMeetingInfo $value ): void {
        $this->onlineMeeting = $value;
    }

    /**
     * Sets the onlineMeetingProvider property value. 
     *  @param OnlineMeetingProviderType|null $value Value to set for the onlineMeetingProvider property.
    */
    public function setOnlineMeetingProvider(?OnlineMeetingProviderType $value ): void {
        $this->onlineMeetingProvider = $value;
    }

    /**
     * Sets the onlineMeetingUrl property value. 
     *  @param string|null $value Value to set for the onlineMeetingUrl property.
    */
    public function setOnlineMeetingUrl(?string $value ): void {
        $this->onlineMeetingUrl = $value;
    }

    /**
     * Sets the organizer property value. 
     *  @param Recipient|null $value Value to set for the organizer property.
    */
    public function setOrganizer(?Recipient $value ): void {
        $this->organizer = $value;
    }

    /**
     * Sets the originalEndTimeZone property value. 
     *  @param string|null $value Value to set for the originalEndTimeZone property.
    */
    public function setOriginalEndTimeZone(?string $value ): void {
        $this->originalEndTimeZone = $value;
    }

    /**
     * Sets the originalStart property value. 
     *  @param DateTime|null $value Value to set for the originalStart property.
    */
    public function setOriginalStart(?DateTime $value ): void {
        $this->originalStart = $value;
    }

    /**
     * Sets the originalStartTimeZone property value. 
     *  @param string|null $value Value to set for the originalStartTimeZone property.
    */
    public function setOriginalStartTimeZone(?string $value ): void {
        $this->originalStartTimeZone = $value;
    }

    /**
     * Sets the recurrence property value. 
     *  @param PatternedRecurrence|null $value Value to set for the recurrence property.
    */
    public function setRecurrence(?PatternedRecurrence $value ): void {
        $this->recurrence = $value;
    }

    /**
     * Sets the reminderMinutesBeforeStart property value. 
     *  @param int|null $value Value to set for the reminderMinutesBeforeStart property.
    */
    public function setReminderMinutesBeforeStart(?int $value ): void {
        $this->reminderMinutesBeforeStart = $value;
    }

    /**
     * Sets the responseRequested property value. 
     *  @param bool|null $value Value to set for the responseRequested property.
    */
    public function setResponseRequested(?bool $value ): void {
        $this->responseRequested = $value;
    }

    /**
     * Sets the responseStatus property value. 
     *  @param ResponseStatus|null $value Value to set for the responseStatus property.
    */
    public function setResponseStatus(?ResponseStatus $value ): void {
        $this->responseStatus = $value;
    }

    /**
     * Sets the sensitivity property value. 
     *  @param Sensitivity|null $value Value to set for the sensitivity property.
    */
    public function setSensitivity(?Sensitivity $value ): void {
        $this->sensitivity = $value;
    }

    /**
     * Sets the seriesMasterId property value. 
     *  @param string|null $value Value to set for the seriesMasterId property.
    */
    public function setSeriesMasterId(?string $value ): void {
        $this->seriesMasterId = $value;
    }

    /**
     * Sets the showAs property value. 
     *  @param FreeBusyStatus|null $value Value to set for the showAs property.
    */
    public function setShowAs(?FreeBusyStatus $value ): void {
        $this->showAs = $value;
    }

    /**
     * Sets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the event. Read-only. Nullable.
     *  @param array<SingleValueLegacyExtendedProperty>|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(?array $value ): void {
        $this->singleValueExtendedProperties = $value;
    }

    /**
     * Sets the start property value. 
     *  @param DateTimeTimeZone|null $value Value to set for the start property.
    */
    public function setStart(?DateTimeTimeZone $value ): void {
        $this->start = $value;
    }

    /**
     * Sets the subject property value. 
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value ): void {
        $this->subject = $value;
    }

    /**
     * Sets the transactionId property value. 
     *  @param string|null $value Value to set for the transactionId property.
    */
    public function setTransactionId(?string $value ): void {
        $this->transactionId = $value;
    }

    /**
     * Sets the type property value. 
     *  @param EventType|null $value Value to set for the type property.
    */
    public function setType(?EventType $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the uid property value. 
     *  @param string|null $value Value to set for the uid property.
    */
    public function setUid(?string $value ): void {
        $this->uid = $value;
    }

    /**
     * Sets the webLink property value. 
     *  @param string|null $value Value to set for the webLink property.
    */
    public function setWebLink(?string $value ): void {
        $this->webLink = $value;
    }

}
