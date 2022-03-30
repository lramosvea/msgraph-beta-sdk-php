<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BookingService extends BookingNamedEntity 
{
    /** @var string|null $additionalInformation Additional information that is sent to the customer when an appointment is confirmed. */
    private ?string $additionalInformation = null;
    
    /** @var array<BookingQuestionAssignment>|null $customQuestions Contains the set of custom questions associated with a particular service. */
    private ?array $customQuestions = null;
    
    /** @var DateInterval|null $defaultDuration The default length of the service, represented in numbers of days, hours, minutes, and seconds. For example, P11D23H59M59.999999999999S. */
    private ?DateInterval $defaultDuration = null;
    
    /** @var Location|null $defaultLocation The default physical location for the service. */
    private ?Location $defaultLocation = null;
    
    /** @var float|null $defaultPrice The default monetary price for the service. */
    private ?float $defaultPrice = null;
    
    /** @var BookingPriceType|null $defaultPriceType The default way the service is charged. Possible values are: undefined, fixedPrice, startingAt, hourly, free, priceVaries, callUs, notSet, unknownFutureValue. */
    private ?BookingPriceType $defaultPriceType = null;
    
    /** @var array<BookingReminder>|null $defaultReminders The default set of reminders for an appointment of this service. The value of this property is available only when reading this bookingService by its ID. */
    private ?array $defaultReminders = null;
    
    /** @var string|null $description A text description for the service. */
    private ?string $description = null;
    
    /** @var bool|null $isHiddenFromCustomers True means this service is not available to customers for booking. */
    private ?bool $isHiddenFromCustomers = null;
    
    /** @var bool|null $isLocationOnline True indicates that the appointments for the service will be held online. Default value is false. */
    private ?bool $isLocationOnline = null;
    
    /** @var int|null $maximumAttendeesCount The maximum number of customers allowed in a service. If maximumAttendeesCount of the service is greater than 1, pass valid customer IDs while creating or updating an appointment. To create a customer, use the Create bookingCustomer operation. */
    private ?int $maximumAttendeesCount = null;
    
    /** @var string|null $notes Additional information about this service. */
    private ?string $notes = null;
    
    /** @var DateInterval|null $postBuffer The time to buffer after an appointment for this service ends, and before the next customer appointment can be booked. */
    private ?DateInterval $postBuffer = null;
    
    /** @var DateInterval|null $preBuffer The time to buffer before an appointment for this service can start. */
    private ?DateInterval $preBuffer = null;
    
    /** @var BookingSchedulingPolicy|null $schedulingPolicy The set of policies that determine how appointments for this type of service should be created and managed. */
    private ?BookingSchedulingPolicy $schedulingPolicy = null;
    
    /** @var bool|null $smsNotificationsEnabled True indicates SMS notifications can be sent to the customers for the appointment of the service. Default value is false. */
    private ?bool $smsNotificationsEnabled = null;
    
    /** @var array<string>|null $staffMemberIds Represents those staff members who provide this service. */
    private ?array $staffMemberIds = null;
    
    /** @var string|null $webUrl The URL a customer uses to access the service. */
    private ?string $webUrl = null;
    
    /**
     * Instantiates a new bookingService and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BookingService
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): BookingService {
        return new BookingService();
    }

    /**
     * Gets the additionalInformation property value. Additional information that is sent to the customer when an appointment is confirmed.
     * @return string|null
    */
    public function getAdditionalInformation(): ?string {
        return $this->additionalInformation;
    }

    /**
     * Gets the customQuestions property value. Contains the set of custom questions associated with a particular service.
     * @return array<BookingQuestionAssignment>|null
    */
    public function getCustomQuestions(): ?array {
        return $this->customQuestions;
    }

    /**
     * Gets the defaultDuration property value. The default length of the service, represented in numbers of days, hours, minutes, and seconds. For example, P11D23H59M59.999999999999S.
     * @return DateInterval|null
    */
    public function getDefaultDuration(): ?DateInterval {
        return $this->defaultDuration;
    }

    /**
     * Gets the defaultLocation property value. The default physical location for the service.
     * @return Location|null
    */
    public function getDefaultLocation(): ?Location {
        return $this->defaultLocation;
    }

    /**
     * Gets the defaultPrice property value. The default monetary price for the service.
     * @return float|null
    */
    public function getDefaultPrice(): ?float {
        return $this->defaultPrice;
    }

    /**
     * Gets the defaultPriceType property value. The default way the service is charged. Possible values are: undefined, fixedPrice, startingAt, hourly, free, priceVaries, callUs, notSet, unknownFutureValue.
     * @return BookingPriceType|null
    */
    public function getDefaultPriceType(): ?BookingPriceType {
        return $this->defaultPriceType;
    }

    /**
     * Gets the defaultReminders property value. The default set of reminders for an appointment of this service. The value of this property is available only when reading this bookingService by its ID.
     * @return array<BookingReminder>|null
    */
    public function getDefaultReminders(): ?array {
        return $this->defaultReminders;
    }

    /**
     * Gets the description property value. A text description for the service.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'additionalInformation' => function (self $o, ParseNode $n) { $o->setAdditionalInformation($n->getStringValue()); },
            'customQuestions' => function (self $o, ParseNode $n) { $o->setCustomQuestions($n->getCollectionOfObjectValues(BookingQuestionAssignment::class)); },
            'defaultDuration' => function (self $o, ParseNode $n) { $o->setDefaultDuration($n->getDateIntervalValue()); },
            'defaultLocation' => function (self $o, ParseNode $n) { $o->setDefaultLocation($n->getObjectValue(Location::class)); },
            'defaultPrice' => function (self $o, ParseNode $n) { $o->setDefaultPrice($n->getFloatValue()); },
            'defaultPriceType' => function (self $o, ParseNode $n) { $o->setDefaultPriceType($n->getEnumValue(BookingPriceType::class)); },
            'defaultReminders' => function (self $o, ParseNode $n) { $o->setDefaultReminders($n->getCollectionOfObjectValues(BookingReminder::class)); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'isHiddenFromCustomers' => function (self $o, ParseNode $n) { $o->setIsHiddenFromCustomers($n->getBooleanValue()); },
            'isLocationOnline' => function (self $o, ParseNode $n) { $o->setIsLocationOnline($n->getBooleanValue()); },
            'maximumAttendeesCount' => function (self $o, ParseNode $n) { $o->setMaximumAttendeesCount($n->getIntegerValue()); },
            'notes' => function (self $o, ParseNode $n) { $o->setNotes($n->getStringValue()); },
            'postBuffer' => function (self $o, ParseNode $n) { $o->setPostBuffer($n->getDateIntervalValue()); },
            'preBuffer' => function (self $o, ParseNode $n) { $o->setPreBuffer($n->getDateIntervalValue()); },
            'schedulingPolicy' => function (self $o, ParseNode $n) { $o->setSchedulingPolicy($n->getObjectValue(BookingSchedulingPolicy::class)); },
            'smsNotificationsEnabled' => function (self $o, ParseNode $n) { $o->setSmsNotificationsEnabled($n->getBooleanValue()); },
            'staffMemberIds' => function (self $o, ParseNode $n) { $o->setStaffMemberIds($n->getCollectionOfPrimitiveValues()); },
            'webUrl' => function (self $o, ParseNode $n) { $o->setWebUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isHiddenFromCustomers property value. True means this service is not available to customers for booking.
     * @return bool|null
    */
    public function getIsHiddenFromCustomers(): ?bool {
        return $this->isHiddenFromCustomers;
    }

    /**
     * Gets the isLocationOnline property value. True indicates that the appointments for the service will be held online. Default value is false.
     * @return bool|null
    */
    public function getIsLocationOnline(): ?bool {
        return $this->isLocationOnline;
    }

    /**
     * Gets the maximumAttendeesCount property value. The maximum number of customers allowed in a service. If maximumAttendeesCount of the service is greater than 1, pass valid customer IDs while creating or updating an appointment. To create a customer, use the Create bookingCustomer operation.
     * @return int|null
    */
    public function getMaximumAttendeesCount(): ?int {
        return $this->maximumAttendeesCount;
    }

    /**
     * Gets the notes property value. Additional information about this service.
     * @return string|null
    */
    public function getNotes(): ?string {
        return $this->notes;
    }

    /**
     * Gets the postBuffer property value. The time to buffer after an appointment for this service ends, and before the next customer appointment can be booked.
     * @return DateInterval|null
    */
    public function getPostBuffer(): ?DateInterval {
        return $this->postBuffer;
    }

    /**
     * Gets the preBuffer property value. The time to buffer before an appointment for this service can start.
     * @return DateInterval|null
    */
    public function getPreBuffer(): ?DateInterval {
        return $this->preBuffer;
    }

    /**
     * Gets the schedulingPolicy property value. The set of policies that determine how appointments for this type of service should be created and managed.
     * @return BookingSchedulingPolicy|null
    */
    public function getSchedulingPolicy(): ?BookingSchedulingPolicy {
        return $this->schedulingPolicy;
    }

    /**
     * Gets the smsNotificationsEnabled property value. True indicates SMS notifications can be sent to the customers for the appointment of the service. Default value is false.
     * @return bool|null
    */
    public function getSmsNotificationsEnabled(): ?bool {
        return $this->smsNotificationsEnabled;
    }

    /**
     * Gets the staffMemberIds property value. Represents those staff members who provide this service.
     * @return array<string>|null
    */
    public function getStaffMemberIds(): ?array {
        return $this->staffMemberIds;
    }

    /**
     * Gets the webUrl property value. The URL a customer uses to access the service.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->webUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('additionalInformation', $this->additionalInformation);
        $writer->writeCollectionOfObjectValues('customQuestions', $this->customQuestions);
        $writer->writeDateIntervalValue('defaultDuration', $this->defaultDuration);
        $writer->writeObjectValue('defaultLocation', $this->defaultLocation);
        $writer->writeFloatValue('defaultPrice', $this->defaultPrice);
        $writer->writeEnumValue('defaultPriceType', $this->defaultPriceType);
        $writer->writeCollectionOfObjectValues('defaultReminders', $this->defaultReminders);
        $writer->writeStringValue('description', $this->description);
        $writer->writeBooleanValue('isHiddenFromCustomers', $this->isHiddenFromCustomers);
        $writer->writeBooleanValue('isLocationOnline', $this->isLocationOnline);
        $writer->writeIntegerValue('maximumAttendeesCount', $this->maximumAttendeesCount);
        $writer->writeStringValue('notes', $this->notes);
        $writer->writeDateIntervalValue('postBuffer', $this->postBuffer);
        $writer->writeDateIntervalValue('preBuffer', $this->preBuffer);
        $writer->writeObjectValue('schedulingPolicy', $this->schedulingPolicy);
        $writer->writeBooleanValue('smsNotificationsEnabled', $this->smsNotificationsEnabled);
        $writer->writeCollectionOfPrimitiveValues('staffMemberIds', $this->staffMemberIds);
        $writer->writeStringValue('webUrl', $this->webUrl);
    }

    /**
     * Sets the additionalInformation property value. Additional information that is sent to the customer when an appointment is confirmed.
     *  @param string|null $value Value to set for the additionalInformation property.
    */
    public function setAdditionalInformation(?string $value ): void {
        $this->additionalInformation = $value;
    }

    /**
     * Sets the customQuestions property value. Contains the set of custom questions associated with a particular service.
     *  @param array<BookingQuestionAssignment>|null $value Value to set for the customQuestions property.
    */
    public function setCustomQuestions(?array $value ): void {
        $this->customQuestions = $value;
    }

    /**
     * Sets the defaultDuration property value. The default length of the service, represented in numbers of days, hours, minutes, and seconds. For example, P11D23H59M59.999999999999S.
     *  @param DateInterval|null $value Value to set for the defaultDuration property.
    */
    public function setDefaultDuration(?DateInterval $value ): void {
        $this->defaultDuration = $value;
    }

    /**
     * Sets the defaultLocation property value. The default physical location for the service.
     *  @param Location|null $value Value to set for the defaultLocation property.
    */
    public function setDefaultLocation(?Location $value ): void {
        $this->defaultLocation = $value;
    }

    /**
     * Sets the defaultPrice property value. The default monetary price for the service.
     *  @param float|null $value Value to set for the defaultPrice property.
    */
    public function setDefaultPrice(?float $value ): void {
        $this->defaultPrice = $value;
    }

    /**
     * Sets the defaultPriceType property value. The default way the service is charged. Possible values are: undefined, fixedPrice, startingAt, hourly, free, priceVaries, callUs, notSet, unknownFutureValue.
     *  @param BookingPriceType|null $value Value to set for the defaultPriceType property.
    */
    public function setDefaultPriceType(?BookingPriceType $value ): void {
        $this->defaultPriceType = $value;
    }

    /**
     * Sets the defaultReminders property value. The default set of reminders for an appointment of this service. The value of this property is available only when reading this bookingService by its ID.
     *  @param array<BookingReminder>|null $value Value to set for the defaultReminders property.
    */
    public function setDefaultReminders(?array $value ): void {
        $this->defaultReminders = $value;
    }

    /**
     * Sets the description property value. A text description for the service.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the isHiddenFromCustomers property value. True means this service is not available to customers for booking.
     *  @param bool|null $value Value to set for the isHiddenFromCustomers property.
    */
    public function setIsHiddenFromCustomers(?bool $value ): void {
        $this->isHiddenFromCustomers = $value;
    }

    /**
     * Sets the isLocationOnline property value. True indicates that the appointments for the service will be held online. Default value is false.
     *  @param bool|null $value Value to set for the isLocationOnline property.
    */
    public function setIsLocationOnline(?bool $value ): void {
        $this->isLocationOnline = $value;
    }

    /**
     * Sets the maximumAttendeesCount property value. The maximum number of customers allowed in a service. If maximumAttendeesCount of the service is greater than 1, pass valid customer IDs while creating or updating an appointment. To create a customer, use the Create bookingCustomer operation.
     *  @param int|null $value Value to set for the maximumAttendeesCount property.
    */
    public function setMaximumAttendeesCount(?int $value ): void {
        $this->maximumAttendeesCount = $value;
    }

    /**
     * Sets the notes property value. Additional information about this service.
     *  @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value ): void {
        $this->notes = $value;
    }

    /**
     * Sets the postBuffer property value. The time to buffer after an appointment for this service ends, and before the next customer appointment can be booked.
     *  @param DateInterval|null $value Value to set for the postBuffer property.
    */
    public function setPostBuffer(?DateInterval $value ): void {
        $this->postBuffer = $value;
    }

    /**
     * Sets the preBuffer property value. The time to buffer before an appointment for this service can start.
     *  @param DateInterval|null $value Value to set for the preBuffer property.
    */
    public function setPreBuffer(?DateInterval $value ): void {
        $this->preBuffer = $value;
    }

    /**
     * Sets the schedulingPolicy property value. The set of policies that determine how appointments for this type of service should be created and managed.
     *  @param BookingSchedulingPolicy|null $value Value to set for the schedulingPolicy property.
    */
    public function setSchedulingPolicy(?BookingSchedulingPolicy $value ): void {
        $this->schedulingPolicy = $value;
    }

    /**
     * Sets the smsNotificationsEnabled property value. True indicates SMS notifications can be sent to the customers for the appointment of the service. Default value is false.
     *  @param bool|null $value Value to set for the smsNotificationsEnabled property.
    */
    public function setSmsNotificationsEnabled(?bool $value ): void {
        $this->smsNotificationsEnabled = $value;
    }

    /**
     * Sets the staffMemberIds property value. Represents those staff members who provide this service.
     *  @param array<string>|null $value Value to set for the staffMemberIds property.
    */
    public function setStaffMemberIds(?array $value ): void {
        $this->staffMemberIds = $value;
    }

    /**
     * Sets the webUrl property value. The URL a customer uses to access the service.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value ): void {
        $this->webUrl = $value;
    }

}
