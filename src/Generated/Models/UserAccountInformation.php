<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserAccountInformation extends ItemFacet implements Parsable 
{
    /**
     * @var string|null $ageGroup Shows the age group of user. Allowed values null, minor, notAdult and adult are generated by the directory and cannot be changed.
    */
    private ?string $ageGroup = null;
    
    /**
     * @var string|null $countryCode Contains the two-character country code associated with the users account.
    */
    private ?string $countryCode = null;
    
    /**
     * @var LocaleInfo|null $preferredLanguageTag The preferredLanguageTag property
    */
    private ?LocaleInfo $preferredLanguageTag = null;
    
    /**
     * @var string|null $userPrincipalName The user principal name (UPN) of the user associated with the account.
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new UserAccountInformation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userAccountInformation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserAccountInformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserAccountInformation {
        return new UserAccountInformation();
    }

    /**
     * Gets the ageGroup property value. Shows the age group of user. Allowed values null, minor, notAdult and adult are generated by the directory and cannot be changed.
     * @return string|null
    */
    public function getAgeGroup(): ?string {
        return $this->ageGroup;
    }

    /**
     * Gets the countryCode property value. Contains the two-character country code associated with the users account.
     * @return string|null
    */
    public function getCountryCode(): ?string {
        return $this->countryCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'ageGroup' => function (ParseNode $n) use ($o) { $o->setAgeGroup($n->getStringValue()); },
            'countryCode' => function (ParseNode $n) use ($o) { $o->setCountryCode($n->getStringValue()); },
            'preferredLanguageTag' => function (ParseNode $n) use ($o) { $o->setPreferredLanguageTag($n->getObjectValue(array(LocaleInfo::class, 'createFromDiscriminatorValue'))); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the preferredLanguageTag property value. The preferredLanguageTag property
     * @return LocaleInfo|null
    */
    public function getPreferredLanguageTag(): ?LocaleInfo {
        return $this->preferredLanguageTag;
    }

    /**
     * Gets the userPrincipalName property value. The user principal name (UPN) of the user associated with the account.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('ageGroup', $this->ageGroup);
        $writer->writeStringValue('countryCode', $this->countryCode);
        $writer->writeObjectValue('preferredLanguageTag', $this->preferredLanguageTag);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the ageGroup property value. Shows the age group of user. Allowed values null, minor, notAdult and adult are generated by the directory and cannot be changed.
     *  @param string|null $value Value to set for the ageGroup property.
    */
    public function setAgeGroup(?string $value ): void {
        $this->ageGroup = $value;
    }

    /**
     * Sets the countryCode property value. Contains the two-character country code associated with the users account.
     *  @param string|null $value Value to set for the countryCode property.
    */
    public function setCountryCode(?string $value ): void {
        $this->countryCode = $value;
    }

    /**
     * Sets the preferredLanguageTag property value. The preferredLanguageTag property
     *  @param LocaleInfo|null $value Value to set for the preferredLanguageTag property.
    */
    public function setPreferredLanguageTag(?LocaleInfo $value ): void {
        $this->preferredLanguageTag = $value;
    }

    /**
     * Sets the userPrincipalName property value. The user principal name (UPN) of the user associated with the account.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
