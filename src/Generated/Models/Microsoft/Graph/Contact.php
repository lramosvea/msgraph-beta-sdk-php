<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class Contact extends OutlookItem 
{
    /** @var string|null $assistantName The name of the contact's assistant. */
    private ?string $assistantName = null;
    
    /** @var DateTime|null $birthday The contact's birthday. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    private ?DateTime $birthday = null;
    
    /** @var array<string>|null $children The names of the contact's children. */
    private ?array $children = null;
    
    /** @var string|null $companyName The name of the contact's company. */
    private ?string $companyName = null;
    
    /** @var string|null $department The contact's department. */
    private ?string $department = null;
    
    /** @var string|null $displayName The contact's display name. You can specify the display name in a create or update operation. Note that later updates to other properties may cause an automatically generated value to overwrite the displayName value you have specified. To preserve a pre-existing value, always include it as displayName in an update operation. */
    private ?string $displayName = null;
    
    /** @var array<TypedEmailAddress>|null $emailAddresses The contact's email addresses. */
    private ?array $emailAddresses = null;
    
    /** @var array<Extension>|null $extensions The collection of open extensions defined for the contact. Read-only. Nullable. */
    private ?array $extensions = null;
    
    /** @var string|null $fileAs The name the contact is filed under. */
    private ?string $fileAs = null;
    
    /** @var FollowupFlag|null $flag The flag value that indicates the status, start date, due date, or completion date for the contact. */
    private ?FollowupFlag $flag = null;
    
    /** @var string|null $gender The contact's gender. */
    private ?string $gender = null;
    
    /** @var string|null $generation The contact's generation. */
    private ?string $generation = null;
    
    /** @var string|null $givenName The contact's given name. */
    private ?string $givenName = null;
    
    /** @var array<string>|null $imAddresses  */
    private ?array $imAddresses = null;
    
    /** @var string|null $initials  */
    private ?string $initials = null;
    
    /** @var bool|null $isFavorite  */
    private ?bool $isFavorite = null;
    
    /** @var string|null $jobTitle  */
    private ?string $jobTitle = null;
    
    /** @var string|null $manager  */
    private ?string $manager = null;
    
    /** @var string|null $middleName  */
    private ?string $middleName = null;
    
    /** @var array<MultiValueLegacyExtendedProperty>|null $multiValueExtendedProperties The collection of multi-value extended properties defined for the contact. Read-only. Nullable. */
    private ?array $multiValueExtendedProperties = null;
    
    /** @var string|null $nickName  */
    private ?string $nickName = null;
    
    /** @var string|null $officeLocation  */
    private ?string $officeLocation = null;
    
    /** @var string|null $parentFolderId  */
    private ?string $parentFolderId = null;
    
    /** @var string|null $personalNotes  */
    private ?string $personalNotes = null;
    
    /** @var array<Phone>|null $phones  */
    private ?array $phones = null;
    
    /** @var ProfilePhoto|null $photo Optional contact picture. You can get or set a photo for a contact. */
    private ?ProfilePhoto $photo = null;
    
    /** @var array<PhysicalAddress>|null $postalAddresses  */
    private ?array $postalAddresses = null;
    
    /** @var string|null $profession  */
    private ?string $profession = null;
    
    /** @var array<SingleValueLegacyExtendedProperty>|null $singleValueExtendedProperties The collection of single-value extended properties defined for the contact. Read-only. Nullable. */
    private ?array $singleValueExtendedProperties = null;
    
    /** @var string|null $spouseName  */
    private ?string $spouseName = null;
    
    /** @var string|null $surname  */
    private ?string $surname = null;
    
    /** @var string|null $title  */
    private ?string $title = null;
    
    /** @var array<Website>|null $websites  */
    private ?array $websites = null;
    
    /** @var Date|null $weddingAnniversary  */
    private ?Date $weddingAnniversary = null;
    
    /** @var string|null $yomiCompanyName  */
    private ?string $yomiCompanyName = null;
    
    /** @var string|null $yomiGivenName  */
    private ?string $yomiGivenName = null;
    
    /** @var string|null $yomiSurname  */
    private ?string $yomiSurname = null;
    
    /**
     * Instantiates a new contact and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Contact
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Contact {
        return new Contact();
    }

    /**
     * Gets the assistantName property value. The name of the contact's assistant.
     * @return string|null
    */
    public function getAssistantName(): ?string {
        return $this->assistantName;
    }

    /**
     * Gets the birthday property value. The contact's birthday. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getBirthday(): ?DateTime {
        return $this->birthday;
    }

    /**
     * Gets the children property value. The names of the contact's children.
     * @return array<string>|null
    */
    public function getChildren(): ?array {
        return $this->children;
    }

    /**
     * Gets the companyName property value. The name of the contact's company.
     * @return string|null
    */
    public function getCompanyName(): ?string {
        return $this->companyName;
    }

    /**
     * Gets the department property value. The contact's department.
     * @return string|null
    */
    public function getDepartment(): ?string {
        return $this->department;
    }

    /**
     * Gets the displayName property value. The contact's display name. You can specify the display name in a create or update operation. Note that later updates to other properties may cause an automatically generated value to overwrite the displayName value you have specified. To preserve a pre-existing value, always include it as displayName in an update operation.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the emailAddresses property value. The contact's email addresses.
     * @return array<TypedEmailAddress>|null
    */
    public function getEmailAddresses(): ?array {
        return $this->emailAddresses;
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the contact. Read-only. Nullable.
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
            'assistantName' => function (self $o, ParseNode $n) { $o->setAssistantName($n->getStringValue()); },
            'birthday' => function (self $o, ParseNode $n) { $o->setBirthday($n->getDateTimeValue()); },
            'children' => function (self $o, ParseNode $n) { $o->setChildren($n->getCollectionOfPrimitiveValues()); },
            'companyName' => function (self $o, ParseNode $n) { $o->setCompanyName($n->getStringValue()); },
            'department' => function (self $o, ParseNode $n) { $o->setDepartment($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'emailAddresses' => function (self $o, ParseNode $n) { $o->setEmailAddresses($n->getCollectionOfObjectValues(TypedEmailAddress::class)); },
            'extensions' => function (self $o, ParseNode $n) { $o->setExtensions($n->getCollectionOfObjectValues(Extension::class)); },
            'fileAs' => function (self $o, ParseNode $n) { $o->setFileAs($n->getStringValue()); },
            'flag' => function (self $o, ParseNode $n) { $o->setFlag($n->getObjectValue(FollowupFlag::class)); },
            'gender' => function (self $o, ParseNode $n) { $o->setGender($n->getStringValue()); },
            'generation' => function (self $o, ParseNode $n) { $o->setGeneration($n->getStringValue()); },
            'givenName' => function (self $o, ParseNode $n) { $o->setGivenName($n->getStringValue()); },
            'imAddresses' => function (self $o, ParseNode $n) { $o->setImAddresses($n->getCollectionOfPrimitiveValues()); },
            'initials' => function (self $o, ParseNode $n) { $o->setInitials($n->getStringValue()); },
            'isFavorite' => function (self $o, ParseNode $n) { $o->setIsFavorite($n->getBooleanValue()); },
            'jobTitle' => function (self $o, ParseNode $n) { $o->setJobTitle($n->getStringValue()); },
            'manager' => function (self $o, ParseNode $n) { $o->setManager($n->getStringValue()); },
            'middleName' => function (self $o, ParseNode $n) { $o->setMiddleName($n->getStringValue()); },
            'multiValueExtendedProperties' => function (self $o, ParseNode $n) { $o->setMultiValueExtendedProperties($n->getCollectionOfObjectValues(MultiValueLegacyExtendedProperty::class)); },
            'nickName' => function (self $o, ParseNode $n) { $o->setNickName($n->getStringValue()); },
            'officeLocation' => function (self $o, ParseNode $n) { $o->setOfficeLocation($n->getStringValue()); },
            'parentFolderId' => function (self $o, ParseNode $n) { $o->setParentFolderId($n->getStringValue()); },
            'personalNotes' => function (self $o, ParseNode $n) { $o->setPersonalNotes($n->getStringValue()); },
            'phones' => function (self $o, ParseNode $n) { $o->setPhones($n->getCollectionOfObjectValues(Phone::class)); },
            'photo' => function (self $o, ParseNode $n) { $o->setPhoto($n->getObjectValue(ProfilePhoto::class)); },
            'postalAddresses' => function (self $o, ParseNode $n) { $o->setPostalAddresses($n->getCollectionOfObjectValues(PhysicalAddress::class)); },
            'profession' => function (self $o, ParseNode $n) { $o->setProfession($n->getStringValue()); },
            'singleValueExtendedProperties' => function (self $o, ParseNode $n) { $o->setSingleValueExtendedProperties($n->getCollectionOfObjectValues(SingleValueLegacyExtendedProperty::class)); },
            'spouseName' => function (self $o, ParseNode $n) { $o->setSpouseName($n->getStringValue()); },
            'surname' => function (self $o, ParseNode $n) { $o->setSurname($n->getStringValue()); },
            'title' => function (self $o, ParseNode $n) { $o->setTitle($n->getStringValue()); },
            'websites' => function (self $o, ParseNode $n) { $o->setWebsites($n->getCollectionOfObjectValues(Website::class)); },
            'weddingAnniversary' => function (self $o, ParseNode $n) { $o->setWeddingAnniversary($n->getDateValue()); },
            'yomiCompanyName' => function (self $o, ParseNode $n) { $o->setYomiCompanyName($n->getStringValue()); },
            'yomiGivenName' => function (self $o, ParseNode $n) { $o->setYomiGivenName($n->getStringValue()); },
            'yomiSurname' => function (self $o, ParseNode $n) { $o->setYomiSurname($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the fileAs property value. The name the contact is filed under.
     * @return string|null
    */
    public function getFileAs(): ?string {
        return $this->fileAs;
    }

    /**
     * Gets the flag property value. The flag value that indicates the status, start date, due date, or completion date for the contact.
     * @return FollowupFlag|null
    */
    public function getFlag(): ?FollowupFlag {
        return $this->flag;
    }

    /**
     * Gets the gender property value. The contact's gender.
     * @return string|null
    */
    public function getGender(): ?string {
        return $this->gender;
    }

    /**
     * Gets the generation property value. The contact's generation.
     * @return string|null
    */
    public function getGeneration(): ?string {
        return $this->generation;
    }

    /**
     * Gets the givenName property value. The contact's given name.
     * @return string|null
    */
    public function getGivenName(): ?string {
        return $this->givenName;
    }

    /**
     * Gets the imAddresses property value. 
     * @return array<string>|null
    */
    public function getImAddresses(): ?array {
        return $this->imAddresses;
    }

    /**
     * Gets the initials property value. 
     * @return string|null
    */
    public function getInitials(): ?string {
        return $this->initials;
    }

    /**
     * Gets the isFavorite property value. 
     * @return bool|null
    */
    public function getIsFavorite(): ?bool {
        return $this->isFavorite;
    }

    /**
     * Gets the jobTitle property value. 
     * @return string|null
    */
    public function getJobTitle(): ?string {
        return $this->jobTitle;
    }

    /**
     * Gets the manager property value. 
     * @return string|null
    */
    public function getManager(): ?string {
        return $this->manager;
    }

    /**
     * Gets the middleName property value. 
     * @return string|null
    */
    public function getMiddleName(): ?string {
        return $this->middleName;
    }

    /**
     * Gets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the contact. Read-only. Nullable.
     * @return array<MultiValueLegacyExtendedProperty>|null
    */
    public function getMultiValueExtendedProperties(): ?array {
        return $this->multiValueExtendedProperties;
    }

    /**
     * Gets the nickName property value. 
     * @return string|null
    */
    public function getNickName(): ?string {
        return $this->nickName;
    }

    /**
     * Gets the officeLocation property value. 
     * @return string|null
    */
    public function getOfficeLocation(): ?string {
        return $this->officeLocation;
    }

    /**
     * Gets the parentFolderId property value. 
     * @return string|null
    */
    public function getParentFolderId(): ?string {
        return $this->parentFolderId;
    }

    /**
     * Gets the personalNotes property value. 
     * @return string|null
    */
    public function getPersonalNotes(): ?string {
        return $this->personalNotes;
    }

    /**
     * Gets the phones property value. 
     * @return array<Phone>|null
    */
    public function getPhones(): ?array {
        return $this->phones;
    }

    /**
     * Gets the photo property value. Optional contact picture. You can get or set a photo for a contact.
     * @return ProfilePhoto|null
    */
    public function getPhoto(): ?ProfilePhoto {
        return $this->photo;
    }

    /**
     * Gets the postalAddresses property value. 
     * @return array<PhysicalAddress>|null
    */
    public function getPostalAddresses(): ?array {
        return $this->postalAddresses;
    }

    /**
     * Gets the profession property value. 
     * @return string|null
    */
    public function getProfession(): ?string {
        return $this->profession;
    }

    /**
     * Gets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the contact. Read-only. Nullable.
     * @return array<SingleValueLegacyExtendedProperty>|null
    */
    public function getSingleValueExtendedProperties(): ?array {
        return $this->singleValueExtendedProperties;
    }

    /**
     * Gets the spouseName property value. 
     * @return string|null
    */
    public function getSpouseName(): ?string {
        return $this->spouseName;
    }

    /**
     * Gets the surname property value. 
     * @return string|null
    */
    public function getSurname(): ?string {
        return $this->surname;
    }

    /**
     * Gets the title property value. 
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the websites property value. 
     * @return array<Website>|null
    */
    public function getWebsites(): ?array {
        return $this->websites;
    }

    /**
     * Gets the weddingAnniversary property value. 
     * @return Date|null
    */
    public function getWeddingAnniversary(): ?Date {
        return $this->weddingAnniversary;
    }

    /**
     * Gets the yomiCompanyName property value. 
     * @return string|null
    */
    public function getYomiCompanyName(): ?string {
        return $this->yomiCompanyName;
    }

    /**
     * Gets the yomiGivenName property value. 
     * @return string|null
    */
    public function getYomiGivenName(): ?string {
        return $this->yomiGivenName;
    }

    /**
     * Gets the yomiSurname property value. 
     * @return string|null
    */
    public function getYomiSurname(): ?string {
        return $this->yomiSurname;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assistantName', $this->assistantName);
        $writer->writeDateTimeValue('birthday', $this->birthday);
        $writer->writeCollectionOfPrimitiveValues('children', $this->children);
        $writer->writeStringValue('companyName', $this->companyName);
        $writer->writeStringValue('department', $this->department);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('emailAddresses', $this->emailAddresses);
        $writer->writeCollectionOfObjectValues('extensions', $this->extensions);
        $writer->writeStringValue('fileAs', $this->fileAs);
        $writer->writeObjectValue('flag', $this->flag);
        $writer->writeStringValue('gender', $this->gender);
        $writer->writeStringValue('generation', $this->generation);
        $writer->writeStringValue('givenName', $this->givenName);
        $writer->writeCollectionOfPrimitiveValues('imAddresses', $this->imAddresses);
        $writer->writeStringValue('initials', $this->initials);
        $writer->writeBooleanValue('isFavorite', $this->isFavorite);
        $writer->writeStringValue('jobTitle', $this->jobTitle);
        $writer->writeStringValue('manager', $this->manager);
        $writer->writeStringValue('middleName', $this->middleName);
        $writer->writeCollectionOfObjectValues('multiValueExtendedProperties', $this->multiValueExtendedProperties);
        $writer->writeStringValue('nickName', $this->nickName);
        $writer->writeStringValue('officeLocation', $this->officeLocation);
        $writer->writeStringValue('parentFolderId', $this->parentFolderId);
        $writer->writeStringValue('personalNotes', $this->personalNotes);
        $writer->writeCollectionOfObjectValues('phones', $this->phones);
        $writer->writeObjectValue('photo', $this->photo);
        $writer->writeCollectionOfObjectValues('postalAddresses', $this->postalAddresses);
        $writer->writeStringValue('profession', $this->profession);
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->singleValueExtendedProperties);
        $writer->writeStringValue('spouseName', $this->spouseName);
        $writer->writeStringValue('surname', $this->surname);
        $writer->writeStringValue('title', $this->title);
        $writer->writeCollectionOfObjectValues('websites', $this->websites);
        $writer->writeDateValue('weddingAnniversary', $this->weddingAnniversary);
        $writer->writeStringValue('yomiCompanyName', $this->yomiCompanyName);
        $writer->writeStringValue('yomiGivenName', $this->yomiGivenName);
        $writer->writeStringValue('yomiSurname', $this->yomiSurname);
    }

    /**
     * Sets the assistantName property value. The name of the contact's assistant.
     *  @param string|null $value Value to set for the assistantName property.
    */
    public function setAssistantName(?string $value ): void {
        $this->assistantName = $value;
    }

    /**
     * Sets the birthday property value. The contact's birthday. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the birthday property.
    */
    public function setBirthday(?DateTime $value ): void {
        $this->birthday = $value;
    }

    /**
     * Sets the children property value. The names of the contact's children.
     *  @param array<string>|null $value Value to set for the children property.
    */
    public function setChildren(?array $value ): void {
        $this->children = $value;
    }

    /**
     * Sets the companyName property value. The name of the contact's company.
     *  @param string|null $value Value to set for the companyName property.
    */
    public function setCompanyName(?string $value ): void {
        $this->companyName = $value;
    }

    /**
     * Sets the department property value. The contact's department.
     *  @param string|null $value Value to set for the department property.
    */
    public function setDepartment(?string $value ): void {
        $this->department = $value;
    }

    /**
     * Sets the displayName property value. The contact's display name. You can specify the display name in a create or update operation. Note that later updates to other properties may cause an automatically generated value to overwrite the displayName value you have specified. To preserve a pre-existing value, always include it as displayName in an update operation.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the emailAddresses property value. The contact's email addresses.
     *  @param array<TypedEmailAddress>|null $value Value to set for the emailAddresses property.
    */
    public function setEmailAddresses(?array $value ): void {
        $this->emailAddresses = $value;
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the contact. Read-only. Nullable.
     *  @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value ): void {
        $this->extensions = $value;
    }

    /**
     * Sets the fileAs property value. The name the contact is filed under.
     *  @param string|null $value Value to set for the fileAs property.
    */
    public function setFileAs(?string $value ): void {
        $this->fileAs = $value;
    }

    /**
     * Sets the flag property value. The flag value that indicates the status, start date, due date, or completion date for the contact.
     *  @param FollowupFlag|null $value Value to set for the flag property.
    */
    public function setFlag(?FollowupFlag $value ): void {
        $this->flag = $value;
    }

    /**
     * Sets the gender property value. The contact's gender.
     *  @param string|null $value Value to set for the gender property.
    */
    public function setGender(?string $value ): void {
        $this->gender = $value;
    }

    /**
     * Sets the generation property value. The contact's generation.
     *  @param string|null $value Value to set for the generation property.
    */
    public function setGeneration(?string $value ): void {
        $this->generation = $value;
    }

    /**
     * Sets the givenName property value. The contact's given name.
     *  @param string|null $value Value to set for the givenName property.
    */
    public function setGivenName(?string $value ): void {
        $this->givenName = $value;
    }

    /**
     * Sets the imAddresses property value. 
     *  @param array<string>|null $value Value to set for the imAddresses property.
    */
    public function setImAddresses(?array $value ): void {
        $this->imAddresses = $value;
    }

    /**
     * Sets the initials property value. 
     *  @param string|null $value Value to set for the initials property.
    */
    public function setInitials(?string $value ): void {
        $this->initials = $value;
    }

    /**
     * Sets the isFavorite property value. 
     *  @param bool|null $value Value to set for the isFavorite property.
    */
    public function setIsFavorite(?bool $value ): void {
        $this->isFavorite = $value;
    }

    /**
     * Sets the jobTitle property value. 
     *  @param string|null $value Value to set for the jobTitle property.
    */
    public function setJobTitle(?string $value ): void {
        $this->jobTitle = $value;
    }

    /**
     * Sets the manager property value. 
     *  @param string|null $value Value to set for the manager property.
    */
    public function setManager(?string $value ): void {
        $this->manager = $value;
    }

    /**
     * Sets the middleName property value. 
     *  @param string|null $value Value to set for the middleName property.
    */
    public function setMiddleName(?string $value ): void {
        $this->middleName = $value;
    }

    /**
     * Sets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the contact. Read-only. Nullable.
     *  @param array<MultiValueLegacyExtendedProperty>|null $value Value to set for the multiValueExtendedProperties property.
    */
    public function setMultiValueExtendedProperties(?array $value ): void {
        $this->multiValueExtendedProperties = $value;
    }

    /**
     * Sets the nickName property value. 
     *  @param string|null $value Value to set for the nickName property.
    */
    public function setNickName(?string $value ): void {
        $this->nickName = $value;
    }

    /**
     * Sets the officeLocation property value. 
     *  @param string|null $value Value to set for the officeLocation property.
    */
    public function setOfficeLocation(?string $value ): void {
        $this->officeLocation = $value;
    }

    /**
     * Sets the parentFolderId property value. 
     *  @param string|null $value Value to set for the parentFolderId property.
    */
    public function setParentFolderId(?string $value ): void {
        $this->parentFolderId = $value;
    }

    /**
     * Sets the personalNotes property value. 
     *  @param string|null $value Value to set for the personalNotes property.
    */
    public function setPersonalNotes(?string $value ): void {
        $this->personalNotes = $value;
    }

    /**
     * Sets the phones property value. 
     *  @param array<Phone>|null $value Value to set for the phones property.
    */
    public function setPhones(?array $value ): void {
        $this->phones = $value;
    }

    /**
     * Sets the photo property value. Optional contact picture. You can get or set a photo for a contact.
     *  @param ProfilePhoto|null $value Value to set for the photo property.
    */
    public function setPhoto(?ProfilePhoto $value ): void {
        $this->photo = $value;
    }

    /**
     * Sets the postalAddresses property value. 
     *  @param array<PhysicalAddress>|null $value Value to set for the postalAddresses property.
    */
    public function setPostalAddresses(?array $value ): void {
        $this->postalAddresses = $value;
    }

    /**
     * Sets the profession property value. 
     *  @param string|null $value Value to set for the profession property.
    */
    public function setProfession(?string $value ): void {
        $this->profession = $value;
    }

    /**
     * Sets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the contact. Read-only. Nullable.
     *  @param array<SingleValueLegacyExtendedProperty>|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(?array $value ): void {
        $this->singleValueExtendedProperties = $value;
    }

    /**
     * Sets the spouseName property value. 
     *  @param string|null $value Value to set for the spouseName property.
    */
    public function setSpouseName(?string $value ): void {
        $this->spouseName = $value;
    }

    /**
     * Sets the surname property value. 
     *  @param string|null $value Value to set for the surname property.
    */
    public function setSurname(?string $value ): void {
        $this->surname = $value;
    }

    /**
     * Sets the title property value. 
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value ): void {
        $this->title = $value;
    }

    /**
     * Sets the websites property value. 
     *  @param array<Website>|null $value Value to set for the websites property.
    */
    public function setWebsites(?array $value ): void {
        $this->websites = $value;
    }

    /**
     * Sets the weddingAnniversary property value. 
     *  @param Date|null $value Value to set for the weddingAnniversary property.
    */
    public function setWeddingAnniversary(?Date $value ): void {
        $this->weddingAnniversary = $value;
    }

    /**
     * Sets the yomiCompanyName property value. 
     *  @param string|null $value Value to set for the yomiCompanyName property.
    */
    public function setYomiCompanyName(?string $value ): void {
        $this->yomiCompanyName = $value;
    }

    /**
     * Sets the yomiGivenName property value. 
     *  @param string|null $value Value to set for the yomiGivenName property.
    */
    public function setYomiGivenName(?string $value ): void {
        $this->yomiGivenName = $value;
    }

    /**
     * Sets the yomiSurname property value. 
     *  @param string|null $value Value to set for the yomiSurname property.
    */
    public function setYomiSurname(?string $value ): void {
        $this->yomiSurname = $value;
    }

}
