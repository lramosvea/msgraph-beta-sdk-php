<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class SymantecCodeSigningCertificate extends Entity 
{
    /** @var StreamInterface|null $content The Windows Symantec Code-Signing Certificate in the raw data format. */
    private ?StreamInterface $content = null;
    
    /** @var DateTime|null $expirationDateTime The Cert Expiration Date. */
    private ?DateTime $expirationDateTime = null;
    
    /** @var string|null $issuer The Issuer value for the cert. */
    private ?string $issuer = null;
    
    /** @var string|null $issuerName The Issuer Name for the cert. */
    private ?string $issuerName = null;
    
    /** @var string|null $password The Password required for .pfx file. */
    private ?string $password = null;
    
    /** @var CertificateStatus|null $status The Cert Status Provisioned or not Provisioned. Possible values are: notProvisioned, provisioned. */
    private ?CertificateStatus $status = null;
    
    /** @var string|null $subject The Subject value for the cert. */
    private ?string $subject = null;
    
    /** @var string|null $subjectName The Subject Name for the cert. */
    private ?string $subjectName = null;
    
    /** @var DateTime|null $uploadDateTime The Type of the CodeSigning Cert as Symantec Cert. */
    private ?DateTime $uploadDateTime = null;
    
    /**
     * Instantiates a new symantecCodeSigningCertificate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SymantecCodeSigningCertificate
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SymantecCodeSigningCertificate {
        return new SymantecCodeSigningCertificate();
    }

    /**
     * Gets the content property value. The Windows Symantec Code-Signing Certificate in the raw data format.
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        return $this->content;
    }

    /**
     * Gets the expirationDateTime property value. The Cert Expiration Date.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'content' => function (self $o, ParseNode $n) { $o->setContent($n->getBinaryContent()); },
            'expirationDateTime' => function (self $o, ParseNode $n) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            'issuer' => function (self $o, ParseNode $n) { $o->setIssuer($n->getStringValue()); },
            'issuerName' => function (self $o, ParseNode $n) { $o->setIssuerName($n->getStringValue()); },
            'password' => function (self $o, ParseNode $n) { $o->setPassword($n->getStringValue()); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getEnumValue(CertificateStatus::class)); },
            'subject' => function (self $o, ParseNode $n) { $o->setSubject($n->getStringValue()); },
            'subjectName' => function (self $o, ParseNode $n) { $o->setSubjectName($n->getStringValue()); },
            'uploadDateTime' => function (self $o, ParseNode $n) { $o->setUploadDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the issuer property value. The Issuer value for the cert.
     * @return string|null
    */
    public function getIssuer(): ?string {
        return $this->issuer;
    }

    /**
     * Gets the issuerName property value. The Issuer Name for the cert.
     * @return string|null
    */
    public function getIssuerName(): ?string {
        return $this->issuerName;
    }

    /**
     * Gets the password property value. The Password required for .pfx file.
     * @return string|null
    */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * Gets the status property value. The Cert Status Provisioned or not Provisioned. Possible values are: notProvisioned, provisioned.
     * @return CertificateStatus|null
    */
    public function getStatus(): ?CertificateStatus {
        return $this->status;
    }

    /**
     * Gets the subject property value. The Subject value for the cert.
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Gets the subjectName property value. The Subject Name for the cert.
     * @return string|null
    */
    public function getSubjectName(): ?string {
        return $this->subjectName;
    }

    /**
     * Gets the uploadDateTime property value. The Type of the CodeSigning Cert as Symantec Cert.
     * @return DateTime|null
    */
    public function getUploadDateTime(): ?DateTime {
        return $this->uploadDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('content', $this->content);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeStringValue('issuer', $this->issuer);
        $writer->writeStringValue('issuerName', $this->issuerName);
        $writer->writeStringValue('password', $this->password);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('subject', $this->subject);
        $writer->writeStringValue('subjectName', $this->subjectName);
        $writer->writeDateTimeValue('uploadDateTime', $this->uploadDateTime);
    }

    /**
     * Sets the content property value. The Windows Symantec Code-Signing Certificate in the raw data format.
     *  @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the expirationDateTime property value. The Cert Expiration Date.
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the issuer property value. The Issuer value for the cert.
     *  @param string|null $value Value to set for the issuer property.
    */
    public function setIssuer(?string $value ): void {
        $this->issuer = $value;
    }

    /**
     * Sets the issuerName property value. The Issuer Name for the cert.
     *  @param string|null $value Value to set for the issuerName property.
    */
    public function setIssuerName(?string $value ): void {
        $this->issuerName = $value;
    }

    /**
     * Sets the password property value. The Password required for .pfx file.
     *  @param string|null $value Value to set for the password property.
    */
    public function setPassword(?string $value ): void {
        $this->password = $value;
    }

    /**
     * Sets the status property value. The Cert Status Provisioned or not Provisioned. Possible values are: notProvisioned, provisioned.
     *  @param CertificateStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CertificateStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the subject property value. The Subject value for the cert.
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value ): void {
        $this->subject = $value;
    }

    /**
     * Sets the subjectName property value. The Subject Name for the cert.
     *  @param string|null $value Value to set for the subjectName property.
    */
    public function setSubjectName(?string $value ): void {
        $this->subjectName = $value;
    }

    /**
     * Sets the uploadDateTime property value. The Type of the CodeSigning Cert as Symantec Cert.
     *  @param DateTime|null $value Value to set for the uploadDateTime property.
    */
    public function setUploadDateTime(?DateTime $value ): void {
        $this->uploadDateTime = $value;
    }

}
