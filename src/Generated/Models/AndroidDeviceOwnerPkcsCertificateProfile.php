<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidDeviceOwnerPkcsCertificateProfile extends AndroidDeviceOwnerCertificateProfileBase implements Parsable 
{
    /**
     * @var AndroidDeviceOwnerCertificateAccessType|null $certificateAccessType Certificate access type. Possible values are: userApproval, specificApps, unknownFutureValue.
    */
    private ?AndroidDeviceOwnerCertificateAccessType $certificateAccessType = null;
    
    /**
     * @var CertificateStore|null $certificateStore CertificateStore types
    */
    private ?CertificateStore $certificateStore = null;
    
    /**
     * @var string|null $certificateTemplateName PKCS Certificate Template Name
    */
    private ?string $certificateTemplateName = null;
    
    /**
     * @var string|null $certificationAuthority PKCS Certification Authority
    */
    private ?string $certificationAuthority = null;
    
    /**
     * @var string|null $certificationAuthorityName PKCS Certification Authority Name
    */
    private ?string $certificationAuthorityName = null;
    
    /**
     * @var DeviceManagementCertificationAuthority|null $certificationAuthorityType Device Management Certification Authority Types.
    */
    private ?DeviceManagementCertificationAuthority $certificationAuthorityType = null;
    
    /**
     * @var array<CustomSubjectAlternativeName>|null $customSubjectAlternativeNames Custom Subject Alternative Name Settings. This collection can contain a maximum of 500 elements.
    */
    private ?array $customSubjectAlternativeNames = null;
    
    /**
     * @var array<ManagedDeviceCertificateState>|null $managedDeviceCertificateStates Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
    */
    private ?array $managedDeviceCertificateStates = null;
    
    /**
     * @var array<AndroidDeviceOwnerSilentCertificateAccess>|null $silentCertificateAccessDetails Certificate access information. This collection can contain a maximum of 50 elements.
    */
    private ?array $silentCertificateAccessDetails = null;
    
    /**
     * @var string|null $subjectAlternativeNameFormatString Custom String that defines the AAD Attribute.
    */
    private ?string $subjectAlternativeNameFormatString = null;
    
    /**
     * @var string|null $subjectNameFormatString Custom format to use with SubjectNameFormat = Custom. Example: CN={{EmailAddress}},E={{EmailAddress}},OU=Enterprise Users,O=Contoso Corporation,L=Redmond,ST=WA,C=US
    */
    private ?string $subjectNameFormatString = null;
    
    /**
     * Instantiates a new AndroidDeviceOwnerPkcsCertificateProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidDeviceOwnerPkcsCertificateProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceOwnerPkcsCertificateProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceOwnerPkcsCertificateProfile {
        return new AndroidDeviceOwnerPkcsCertificateProfile();
    }

    /**
     * Gets the certificateAccessType property value. Certificate access type. Possible values are: userApproval, specificApps, unknownFutureValue.
     * @return AndroidDeviceOwnerCertificateAccessType|null
    */
    public function getCertificateAccessType(): ?AndroidDeviceOwnerCertificateAccessType {
        return $this->certificateAccessType;
    }

    /**
     * Gets the certificateStore property value. CertificateStore types
     * @return CertificateStore|null
    */
    public function getCertificateStore(): ?CertificateStore {
        return $this->certificateStore;
    }

    /**
     * Gets the certificateTemplateName property value. PKCS Certificate Template Name
     * @return string|null
    */
    public function getCertificateTemplateName(): ?string {
        return $this->certificateTemplateName;
    }

    /**
     * Gets the certificationAuthority property value. PKCS Certification Authority
     * @return string|null
    */
    public function getCertificationAuthority(): ?string {
        return $this->certificationAuthority;
    }

    /**
     * Gets the certificationAuthorityName property value. PKCS Certification Authority Name
     * @return string|null
    */
    public function getCertificationAuthorityName(): ?string {
        return $this->certificationAuthorityName;
    }

    /**
     * Gets the certificationAuthorityType property value. Device Management Certification Authority Types.
     * @return DeviceManagementCertificationAuthority|null
    */
    public function getCertificationAuthorityType(): ?DeviceManagementCertificationAuthority {
        return $this->certificationAuthorityType;
    }

    /**
     * Gets the customSubjectAlternativeNames property value. Custom Subject Alternative Name Settings. This collection can contain a maximum of 500 elements.
     * @return array<CustomSubjectAlternativeName>|null
    */
    public function getCustomSubjectAlternativeNames(): ?array {
        return $this->customSubjectAlternativeNames;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateAccessType' => function (ParseNode $n) use ($o) { $o->setCertificateAccessType($n->getEnumValue(AndroidDeviceOwnerCertificateAccessType::class)); },
            'certificateStore' => function (ParseNode $n) use ($o) { $o->setCertificateStore($n->getEnumValue(CertificateStore::class)); },
            'certificateTemplateName' => function (ParseNode $n) use ($o) { $o->setCertificateTemplateName($n->getStringValue()); },
            'certificationAuthority' => function (ParseNode $n) use ($o) { $o->setCertificationAuthority($n->getStringValue()); },
            'certificationAuthorityName' => function (ParseNode $n) use ($o) { $o->setCertificationAuthorityName($n->getStringValue()); },
            'certificationAuthorityType' => function (ParseNode $n) use ($o) { $o->setCertificationAuthorityType($n->getEnumValue(DeviceManagementCertificationAuthority::class)); },
            'customSubjectAlternativeNames' => function (ParseNode $n) use ($o) { $o->setCustomSubjectAlternativeNames($n->getCollectionOfObjectValues(array(CustomSubjectAlternativeName::class, 'createFromDiscriminatorValue'))); },
            'managedDeviceCertificateStates' => function (ParseNode $n) use ($o) { $o->setManagedDeviceCertificateStates($n->getCollectionOfObjectValues(array(ManagedDeviceCertificateState::class, 'createFromDiscriminatorValue'))); },
            'silentCertificateAccessDetails' => function (ParseNode $n) use ($o) { $o->setSilentCertificateAccessDetails($n->getCollectionOfObjectValues(array(AndroidDeviceOwnerSilentCertificateAccess::class, 'createFromDiscriminatorValue'))); },
            'subjectAlternativeNameFormatString' => function (ParseNode $n) use ($o) { $o->setSubjectAlternativeNameFormatString($n->getStringValue()); },
            'subjectNameFormatString' => function (ParseNode $n) use ($o) { $o->setSubjectNameFormatString($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the managedDeviceCertificateStates property value. Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
     * @return array<ManagedDeviceCertificateState>|null
    */
    public function getManagedDeviceCertificateStates(): ?array {
        return $this->managedDeviceCertificateStates;
    }

    /**
     * Gets the silentCertificateAccessDetails property value. Certificate access information. This collection can contain a maximum of 50 elements.
     * @return array<AndroidDeviceOwnerSilentCertificateAccess>|null
    */
    public function getSilentCertificateAccessDetails(): ?array {
        return $this->silentCertificateAccessDetails;
    }

    /**
     * Gets the subjectAlternativeNameFormatString property value. Custom String that defines the AAD Attribute.
     * @return string|null
    */
    public function getSubjectAlternativeNameFormatString(): ?string {
        return $this->subjectAlternativeNameFormatString;
    }

    /**
     * Gets the subjectNameFormatString property value. Custom format to use with SubjectNameFormat = Custom. Example: CN={{EmailAddress}},E={{EmailAddress}},OU=Enterprise Users,O=Contoso Corporation,L=Redmond,ST=WA,C=US
     * @return string|null
    */
    public function getSubjectNameFormatString(): ?string {
        return $this->subjectNameFormatString;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('certificateAccessType', $this->certificateAccessType);
        $writer->writeEnumValue('certificateStore', $this->certificateStore);
        $writer->writeStringValue('certificateTemplateName', $this->certificateTemplateName);
        $writer->writeStringValue('certificationAuthority', $this->certificationAuthority);
        $writer->writeStringValue('certificationAuthorityName', $this->certificationAuthorityName);
        $writer->writeEnumValue('certificationAuthorityType', $this->certificationAuthorityType);
        $writer->writeCollectionOfObjectValues('customSubjectAlternativeNames', $this->customSubjectAlternativeNames);
        $writer->writeCollectionOfObjectValues('managedDeviceCertificateStates', $this->managedDeviceCertificateStates);
        $writer->writeCollectionOfObjectValues('silentCertificateAccessDetails', $this->silentCertificateAccessDetails);
        $writer->writeStringValue('subjectAlternativeNameFormatString', $this->subjectAlternativeNameFormatString);
        $writer->writeStringValue('subjectNameFormatString', $this->subjectNameFormatString);
    }

    /**
     * Sets the certificateAccessType property value. Certificate access type. Possible values are: userApproval, specificApps, unknownFutureValue.
     *  @param AndroidDeviceOwnerCertificateAccessType|null $value Value to set for the certificateAccessType property.
    */
    public function setCertificateAccessType(?AndroidDeviceOwnerCertificateAccessType $value ): void {
        $this->certificateAccessType = $value;
    }

    /**
     * Sets the certificateStore property value. CertificateStore types
     *  @param CertificateStore|null $value Value to set for the certificateStore property.
    */
    public function setCertificateStore(?CertificateStore $value ): void {
        $this->certificateStore = $value;
    }

    /**
     * Sets the certificateTemplateName property value. PKCS Certificate Template Name
     *  @param string|null $value Value to set for the certificateTemplateName property.
    */
    public function setCertificateTemplateName(?string $value ): void {
        $this->certificateTemplateName = $value;
    }

    /**
     * Sets the certificationAuthority property value. PKCS Certification Authority
     *  @param string|null $value Value to set for the certificationAuthority property.
    */
    public function setCertificationAuthority(?string $value ): void {
        $this->certificationAuthority = $value;
    }

    /**
     * Sets the certificationAuthorityName property value. PKCS Certification Authority Name
     *  @param string|null $value Value to set for the certificationAuthorityName property.
    */
    public function setCertificationAuthorityName(?string $value ): void {
        $this->certificationAuthorityName = $value;
    }

    /**
     * Sets the certificationAuthorityType property value. Device Management Certification Authority Types.
     *  @param DeviceManagementCertificationAuthority|null $value Value to set for the certificationAuthorityType property.
    */
    public function setCertificationAuthorityType(?DeviceManagementCertificationAuthority $value ): void {
        $this->certificationAuthorityType = $value;
    }

    /**
     * Sets the customSubjectAlternativeNames property value. Custom Subject Alternative Name Settings. This collection can contain a maximum of 500 elements.
     *  @param array<CustomSubjectAlternativeName>|null $value Value to set for the customSubjectAlternativeNames property.
    */
    public function setCustomSubjectAlternativeNames(?array $value ): void {
        $this->customSubjectAlternativeNames = $value;
    }

    /**
     * Sets the managedDeviceCertificateStates property value. Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
     *  @param array<ManagedDeviceCertificateState>|null $value Value to set for the managedDeviceCertificateStates property.
    */
    public function setManagedDeviceCertificateStates(?array $value ): void {
        $this->managedDeviceCertificateStates = $value;
    }

    /**
     * Sets the silentCertificateAccessDetails property value. Certificate access information. This collection can contain a maximum of 50 elements.
     *  @param array<AndroidDeviceOwnerSilentCertificateAccess>|null $value Value to set for the silentCertificateAccessDetails property.
    */
    public function setSilentCertificateAccessDetails(?array $value ): void {
        $this->silentCertificateAccessDetails = $value;
    }

    /**
     * Sets the subjectAlternativeNameFormatString property value. Custom String that defines the AAD Attribute.
     *  @param string|null $value Value to set for the subjectAlternativeNameFormatString property.
    */
    public function setSubjectAlternativeNameFormatString(?string $value ): void {
        $this->subjectAlternativeNameFormatString = $value;
    }

    /**
     * Sets the subjectNameFormatString property value. Custom format to use with SubjectNameFormat = Custom. Example: CN={{EmailAddress}},E={{EmailAddress}},OU=Enterprise Users,O=Contoso Corporation,L=Redmond,ST=WA,C=US
     *  @param string|null $value Value to set for the subjectNameFormatString property.
    */
    public function setSubjectNameFormatString(?string $value ): void {
        $this->subjectNameFormatString = $value;
    }

}
