<?php

namespace Microsoft\Graph\Beta\Generated\Me\FindMeetingTimes;

use DateInterval;
use Microsoft\Graph\Beta\Generated\Models\AttendeeBase;
use Microsoft\Graph\Beta\Generated\Models\LocationConstraint;
use Microsoft\Graph\Beta\Generated\Models\TimeConstraint;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FindMeetingTimesRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<AttendeeBase>|null $attendees The attendees property */
    private ?array $attendees = null;
    
    /** @var bool|null $isOrganizerOptional The isOrganizerOptional property */
    private ?bool $isOrganizerOptional = null;
    
    /** @var LocationConstraint|null $locationConstraint The locationConstraint property */
    private ?LocationConstraint $locationConstraint = null;
    
    /** @var int|null $maxCandidates The maxCandidates property */
    private ?int $maxCandidates = null;
    
    /** @var DateInterval|null $meetingDuration The meetingDuration property */
    private ?DateInterval $meetingDuration = null;
    
    /** @var float|null $minimumAttendeePercentage The minimumAttendeePercentage property */
    private ?float $minimumAttendeePercentage = null;
    
    /** @var bool|null $returnSuggestionReasons The returnSuggestionReasons property */
    private ?bool $returnSuggestionReasons = null;
    
    /** @var TimeConstraint|null $timeConstraint The timeConstraint property */
    private ?TimeConstraint $timeConstraint = null;
    
    /**
     * Instantiates a new findMeetingTimesRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FindMeetingTimesRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): FindMeetingTimesRequestBody {
        return new FindMeetingTimesRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the attendees property value. The attendees property
     * @return array<AttendeeBase>|null
    */
    public function getAttendees(): ?array {
        return $this->attendees;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'attendees' => function (self $o, ParseNode $n) { $o->setAttendees($n->getCollectionOfObjectValues(AttendeeBase::class)); },
            'isOrganizerOptional' => function (self $o, ParseNode $n) { $o->setIsOrganizerOptional($n->getBooleanValue()); },
            'locationConstraint' => function (self $o, ParseNode $n) { $o->setLocationConstraint($n->getObjectValue(LocationConstraint::class)); },
            'maxCandidates' => function (self $o, ParseNode $n) { $o->setMaxCandidates($n->getIntegerValue()); },
            'meetingDuration' => function (self $o, ParseNode $n) { $o->setMeetingDuration($n->getDateIntervalValue()); },
            'minimumAttendeePercentage' => function (self $o, ParseNode $n) { $o->setMinimumAttendeePercentage($n->getFloatValue()); },
            'returnSuggestionReasons' => function (self $o, ParseNode $n) { $o->setReturnSuggestionReasons($n->getBooleanValue()); },
            'timeConstraint' => function (self $o, ParseNode $n) { $o->setTimeConstraint($n->getObjectValue(TimeConstraint::class)); },
        ];
    }

    /**
     * Gets the isOrganizerOptional property value. The isOrganizerOptional property
     * @return bool|null
    */
    public function getIsOrganizerOptional(): ?bool {
        return $this->isOrganizerOptional;
    }

    /**
     * Gets the locationConstraint property value. The locationConstraint property
     * @return LocationConstraint|null
    */
    public function getLocationConstraint(): ?LocationConstraint {
        return $this->locationConstraint;
    }

    /**
     * Gets the maxCandidates property value. The maxCandidates property
     * @return int|null
    */
    public function getMaxCandidates(): ?int {
        return $this->maxCandidates;
    }

    /**
     * Gets the meetingDuration property value. The meetingDuration property
     * @return DateInterval|null
    */
    public function getMeetingDuration(): ?DateInterval {
        return $this->meetingDuration;
    }

    /**
     * Gets the minimumAttendeePercentage property value. The minimumAttendeePercentage property
     * @return float|null
    */
    public function getMinimumAttendeePercentage(): ?float {
        return $this->minimumAttendeePercentage;
    }

    /**
     * Gets the returnSuggestionReasons property value. The returnSuggestionReasons property
     * @return bool|null
    */
    public function getReturnSuggestionReasons(): ?bool {
        return $this->returnSuggestionReasons;
    }

    /**
     * Gets the timeConstraint property value. The timeConstraint property
     * @return TimeConstraint|null
    */
    public function getTimeConstraint(): ?TimeConstraint {
        return $this->timeConstraint;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('attendees', $this->attendees);
        $writer->writeBooleanValue('isOrganizerOptional', $this->isOrganizerOptional);
        $writer->writeObjectValue('locationConstraint', $this->locationConstraint);
        $writer->writeIntegerValue('maxCandidates', $this->maxCandidates);
        $writer->writeDateIntervalValue('meetingDuration', $this->meetingDuration);
        $writer->writeFloatValue('minimumAttendeePercentage', $this->minimumAttendeePercentage);
        $writer->writeBooleanValue('returnSuggestionReasons', $this->returnSuggestionReasons);
        $writer->writeObjectValue('timeConstraint', $this->timeConstraint);
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
     * Sets the attendees property value. The attendees property
     *  @param array<AttendeeBase>|null $value Value to set for the attendees property.
    */
    public function setAttendees(?array $value ): void {
        $this->attendees = $value;
    }

    /**
     * Sets the isOrganizerOptional property value. The isOrganizerOptional property
     *  @param bool|null $value Value to set for the isOrganizerOptional property.
    */
    public function setIsOrganizerOptional(?bool $value ): void {
        $this->isOrganizerOptional = $value;
    }

    /**
     * Sets the locationConstraint property value. The locationConstraint property
     *  @param LocationConstraint|null $value Value to set for the locationConstraint property.
    */
    public function setLocationConstraint(?LocationConstraint $value ): void {
        $this->locationConstraint = $value;
    }

    /**
     * Sets the maxCandidates property value. The maxCandidates property
     *  @param int|null $value Value to set for the maxCandidates property.
    */
    public function setMaxCandidates(?int $value ): void {
        $this->maxCandidates = $value;
    }

    /**
     * Sets the meetingDuration property value. The meetingDuration property
     *  @param DateInterval|null $value Value to set for the meetingDuration property.
    */
    public function setMeetingDuration(?DateInterval $value ): void {
        $this->meetingDuration = $value;
    }

    /**
     * Sets the minimumAttendeePercentage property value. The minimumAttendeePercentage property
     *  @param float|null $value Value to set for the minimumAttendeePercentage property.
    */
    public function setMinimumAttendeePercentage(?float $value ): void {
        $this->minimumAttendeePercentage = $value;
    }

    /**
     * Sets the returnSuggestionReasons property value. The returnSuggestionReasons property
     *  @param bool|null $value Value to set for the returnSuggestionReasons property.
    */
    public function setReturnSuggestionReasons(?bool $value ): void {
        $this->returnSuggestionReasons = $value;
    }

    /**
     * Sets the timeConstraint property value. The timeConstraint property
     *  @param TimeConstraint|null $value Value to set for the timeConstraint property.
    */
    public function setTimeConstraint(?TimeConstraint $value ): void {
        $this->timeConstraint = $value;
    }

}
