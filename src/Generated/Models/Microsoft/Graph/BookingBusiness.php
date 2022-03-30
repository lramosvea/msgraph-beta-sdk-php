<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BookingBusiness extends BookingNamedEntity 
{
    /** @var PhysicalAddress|null $address The street address of the business. The address property, together with phone and webSiteUrl, appear in the footer of a business scheduling page. The attribute type of physicalAddress is not supported in v1.0. Internally we map the addresses to the type others. */
    private ?PhysicalAddress $address = null;
    
    /** @var array<BookingAppointment>|null $appointments All the appointments of this business. Read-only. Nullable. */
    private ?array $appointments = null;
    
    /** @var array<BookingWorkHours>|null $businessHours The hours of operation for the business. */
    private ?array $businessHours = null;
    
    /** @var string|null $businessType The type of business. */
    private ?string $businessType = null;
    
    /** @var array<BookingAppointment>|null $calendarView The set of appointments of this business in a specified date range. Read-only. Nullable. */
    private ?array $calendarView = null;
    
    /** @var array<BookingCustomer>|null $customers All the customers of this business. Read-only. Nullable. */
    private ?array $customers = null;
    
    /** @var array<BookingCustomQuestion>|null $customQuestions All the custom questions of this business. Read-only. Nullable. */
    private ?array $customQuestions = null;
    
    /** @var string|null $defaultCurrencyIso The code for the currency that the business operates in on Microsoft Bookings. */
    private ?string $defaultCurrencyIso = null;
    
    /** @var string|null $email The email address for the business. */
    private ?string $email = null;
    
    /** @var bool|null $isPublished The scheduling page has been made available to external customers. Use the publish and unpublish actions to set this property. Read-only. */
    private ?bool $isPublished = null;
    
    /** @var string|null $phone The telephone number for the business. The phone property, together with address and webSiteUrl, appear in the footer of a business scheduling page. */
    private ?string $phone = null;
    
    /** @var string|null $publicUrl The URL for the scheduling page, which is set after you publish or unpublish the page. Read-only. */
    private ?string $publicUrl = null;
    
    /** @var BookingSchedulingPolicy|null $schedulingPolicy Specifies how bookings can be created for this business. */
    private ?BookingSchedulingPolicy $schedulingPolicy = null;
    
    /** @var array<BookingService>|null $services All the services offered by this business. Read-only. Nullable. */
    private ?array $services = null;
    
    /** @var array<BookingStaffMember>|null $staffMembers All the staff members that provide services in this business. Read-only. Nullable. */
    private ?array $staffMembers = null;
    
    /** @var string|null $webSiteUrl The URL of the business web site. The webSiteUrl property, together with address, phone, appear in the footer of a business scheduling page. */
    private ?string $webSiteUrl = null;
    
    /**
     * Instantiates a new bookingBusiness and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BookingBusiness
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): BookingBusiness {
        return new BookingBusiness();
    }

    /**
     * Gets the address property value. The street address of the business. The address property, together with phone and webSiteUrl, appear in the footer of a business scheduling page. The attribute type of physicalAddress is not supported in v1.0. Internally we map the addresses to the type others.
     * @return PhysicalAddress|null
    */
    public function getAddress(): ?PhysicalAddress {
        return $this->address;
    }

    /**
     * Gets the appointments property value. All the appointments of this business. Read-only. Nullable.
     * @return array<BookingAppointment>|null
    */
    public function getAppointments(): ?array {
        return $this->appointments;
    }

    /**
     * Gets the businessHours property value. The hours of operation for the business.
     * @return array<BookingWorkHours>|null
    */
    public function getBusinessHours(): ?array {
        return $this->businessHours;
    }

    /**
     * Gets the businessType property value. The type of business.
     * @return string|null
    */
    public function getBusinessType(): ?string {
        return $this->businessType;
    }

    /**
     * Gets the calendarView property value. The set of appointments of this business in a specified date range. Read-only. Nullable.
     * @return array<BookingAppointment>|null
    */
    public function getCalendarView(): ?array {
        return $this->calendarView;
    }

    /**
     * Gets the customers property value. All the customers of this business. Read-only. Nullable.
     * @return array<BookingCustomer>|null
    */
    public function getCustomers(): ?array {
        return $this->customers;
    }

    /**
     * Gets the customQuestions property value. All the custom questions of this business. Read-only. Nullable.
     * @return array<BookingCustomQuestion>|null
    */
    public function getCustomQuestions(): ?array {
        return $this->customQuestions;
    }

    /**
     * Gets the defaultCurrencyIso property value. The code for the currency that the business operates in on Microsoft Bookings.
     * @return string|null
    */
    public function getDefaultCurrencyIso(): ?string {
        return $this->defaultCurrencyIso;
    }

    /**
     * Gets the email property value. The email address for the business.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'address' => function (self $o, ParseNode $n) { $o->setAddress($n->getObjectValue(PhysicalAddress::class)); },
            'appointments' => function (self $o, ParseNode $n) { $o->setAppointments($n->getCollectionOfObjectValues(BookingAppointment::class)); },
            'businessHours' => function (self $o, ParseNode $n) { $o->setBusinessHours($n->getCollectionOfObjectValues(BookingWorkHours::class)); },
            'businessType' => function (self $o, ParseNode $n) { $o->setBusinessType($n->getStringValue()); },
            'calendarView' => function (self $o, ParseNode $n) { $o->setCalendarView($n->getCollectionOfObjectValues(BookingAppointment::class)); },
            'customers' => function (self $o, ParseNode $n) { $o->setCustomers($n->getCollectionOfObjectValues(BookingCustomer::class)); },
            'customQuestions' => function (self $o, ParseNode $n) { $o->setCustomQuestions($n->getCollectionOfObjectValues(BookingCustomQuestion::class)); },
            'defaultCurrencyIso' => function (self $o, ParseNode $n) { $o->setDefaultCurrencyIso($n->getStringValue()); },
            'email' => function (self $o, ParseNode $n) { $o->setEmail($n->getStringValue()); },
            'isPublished' => function (self $o, ParseNode $n) { $o->setIsPublished($n->getBooleanValue()); },
            'phone' => function (self $o, ParseNode $n) { $o->setPhone($n->getStringValue()); },
            'publicUrl' => function (self $o, ParseNode $n) { $o->setPublicUrl($n->getStringValue()); },
            'schedulingPolicy' => function (self $o, ParseNode $n) { $o->setSchedulingPolicy($n->getObjectValue(BookingSchedulingPolicy::class)); },
            'services' => function (self $o, ParseNode $n) { $o->setServices($n->getCollectionOfObjectValues(BookingService::class)); },
            'staffMembers' => function (self $o, ParseNode $n) { $o->setStaffMembers($n->getCollectionOfObjectValues(BookingStaffMember::class)); },
            'webSiteUrl' => function (self $o, ParseNode $n) { $o->setWebSiteUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isPublished property value. The scheduling page has been made available to external customers. Use the publish and unpublish actions to set this property. Read-only.
     * @return bool|null
    */
    public function getIsPublished(): ?bool {
        return $this->isPublished;
    }

    /**
     * Gets the phone property value. The telephone number for the business. The phone property, together with address and webSiteUrl, appear in the footer of a business scheduling page.
     * @return string|null
    */
    public function getPhone(): ?string {
        return $this->phone;
    }

    /**
     * Gets the publicUrl property value. The URL for the scheduling page, which is set after you publish or unpublish the page. Read-only.
     * @return string|null
    */
    public function getPublicUrl(): ?string {
        return $this->publicUrl;
    }

    /**
     * Gets the schedulingPolicy property value. Specifies how bookings can be created for this business.
     * @return BookingSchedulingPolicy|null
    */
    public function getSchedulingPolicy(): ?BookingSchedulingPolicy {
        return $this->schedulingPolicy;
    }

    /**
     * Gets the services property value. All the services offered by this business. Read-only. Nullable.
     * @return array<BookingService>|null
    */
    public function getServices(): ?array {
        return $this->services;
    }

    /**
     * Gets the staffMembers property value. All the staff members that provide services in this business. Read-only. Nullable.
     * @return array<BookingStaffMember>|null
    */
    public function getStaffMembers(): ?array {
        return $this->staffMembers;
    }

    /**
     * Gets the webSiteUrl property value. The URL of the business web site. The webSiteUrl property, together with address, phone, appear in the footer of a business scheduling page.
     * @return string|null
    */
    public function getWebSiteUrl(): ?string {
        return $this->webSiteUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('address', $this->address);
        $writer->writeCollectionOfObjectValues('appointments', $this->appointments);
        $writer->writeCollectionOfObjectValues('businessHours', $this->businessHours);
        $writer->writeStringValue('businessType', $this->businessType);
        $writer->writeCollectionOfObjectValues('calendarView', $this->calendarView);
        $writer->writeCollectionOfObjectValues('customers', $this->customers);
        $writer->writeCollectionOfObjectValues('customQuestions', $this->customQuestions);
        $writer->writeStringValue('defaultCurrencyIso', $this->defaultCurrencyIso);
        $writer->writeStringValue('email', $this->email);
        $writer->writeBooleanValue('isPublished', $this->isPublished);
        $writer->writeStringValue('phone', $this->phone);
        $writer->writeStringValue('publicUrl', $this->publicUrl);
        $writer->writeObjectValue('schedulingPolicy', $this->schedulingPolicy);
        $writer->writeCollectionOfObjectValues('services', $this->services);
        $writer->writeCollectionOfObjectValues('staffMembers', $this->staffMembers);
        $writer->writeStringValue('webSiteUrl', $this->webSiteUrl);
    }

    /**
     * Sets the address property value. The street address of the business. The address property, together with phone and webSiteUrl, appear in the footer of a business scheduling page. The attribute type of physicalAddress is not supported in v1.0. Internally we map the addresses to the type others.
     *  @param PhysicalAddress|null $value Value to set for the address property.
    */
    public function setAddress(?PhysicalAddress $value ): void {
        $this->address = $value;
    }

    /**
     * Sets the appointments property value. All the appointments of this business. Read-only. Nullable.
     *  @param array<BookingAppointment>|null $value Value to set for the appointments property.
    */
    public function setAppointments(?array $value ): void {
        $this->appointments = $value;
    }

    /**
     * Sets the businessHours property value. The hours of operation for the business.
     *  @param array<BookingWorkHours>|null $value Value to set for the businessHours property.
    */
    public function setBusinessHours(?array $value ): void {
        $this->businessHours = $value;
    }

    /**
     * Sets the businessType property value. The type of business.
     *  @param string|null $value Value to set for the businessType property.
    */
    public function setBusinessType(?string $value ): void {
        $this->businessType = $value;
    }

    /**
     * Sets the calendarView property value. The set of appointments of this business in a specified date range. Read-only. Nullable.
     *  @param array<BookingAppointment>|null $value Value to set for the calendarView property.
    */
    public function setCalendarView(?array $value ): void {
        $this->calendarView = $value;
    }

    /**
     * Sets the customers property value. All the customers of this business. Read-only. Nullable.
     *  @param array<BookingCustomer>|null $value Value to set for the customers property.
    */
    public function setCustomers(?array $value ): void {
        $this->customers = $value;
    }

    /**
     * Sets the customQuestions property value. All the custom questions of this business. Read-only. Nullable.
     *  @param array<BookingCustomQuestion>|null $value Value to set for the customQuestions property.
    */
    public function setCustomQuestions(?array $value ): void {
        $this->customQuestions = $value;
    }

    /**
     * Sets the defaultCurrencyIso property value. The code for the currency that the business operates in on Microsoft Bookings.
     *  @param string|null $value Value to set for the defaultCurrencyIso property.
    */
    public function setDefaultCurrencyIso(?string $value ): void {
        $this->defaultCurrencyIso = $value;
    }

    /**
     * Sets the email property value. The email address for the business.
     *  @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value ): void {
        $this->email = $value;
    }

    /**
     * Sets the isPublished property value. The scheduling page has been made available to external customers. Use the publish and unpublish actions to set this property. Read-only.
     *  @param bool|null $value Value to set for the isPublished property.
    */
    public function setIsPublished(?bool $value ): void {
        $this->isPublished = $value;
    }

    /**
     * Sets the phone property value. The telephone number for the business. The phone property, together with address and webSiteUrl, appear in the footer of a business scheduling page.
     *  @param string|null $value Value to set for the phone property.
    */
    public function setPhone(?string $value ): void {
        $this->phone = $value;
    }

    /**
     * Sets the publicUrl property value. The URL for the scheduling page, which is set after you publish or unpublish the page. Read-only.
     *  @param string|null $value Value to set for the publicUrl property.
    */
    public function setPublicUrl(?string $value ): void {
        $this->publicUrl = $value;
    }

    /**
     * Sets the schedulingPolicy property value. Specifies how bookings can be created for this business.
     *  @param BookingSchedulingPolicy|null $value Value to set for the schedulingPolicy property.
    */
    public function setSchedulingPolicy(?BookingSchedulingPolicy $value ): void {
        $this->schedulingPolicy = $value;
    }

    /**
     * Sets the services property value. All the services offered by this business. Read-only. Nullable.
     *  @param array<BookingService>|null $value Value to set for the services property.
    */
    public function setServices(?array $value ): void {
        $this->services = $value;
    }

    /**
     * Sets the staffMembers property value. All the staff members that provide services in this business. Read-only. Nullable.
     *  @param array<BookingStaffMember>|null $value Value to set for the staffMembers property.
    */
    public function setStaffMembers(?array $value ): void {
        $this->staffMembers = $value;
    }

    /**
     * Sets the webSiteUrl property value. The URL of the business web site. The webSiteUrl property, together with address, phone, appear in the footer of a business scheduling page.
     *  @param string|null $value Value to set for the webSiteUrl property.
    */
    public function setWebSiteUrl(?string $value ): void {
        $this->webSiteUrl = $value;
    }

}
