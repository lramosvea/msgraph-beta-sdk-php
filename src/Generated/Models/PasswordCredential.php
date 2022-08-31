<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class PasswordCredential implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var StreamInterface|null $customKeyIdentifier Do not use.
    */
    private ?StreamInterface $customKeyIdentifier = null;
    
    /**
     * @var string|null $displayName Friendly name for the password. Optional.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $endDateTime The date and time at which the password expires represented using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional.
    */
    private ?DateTime $endDateTime = null;
    
    /**
     * @var string|null $hint Contains the first three characters of the password. Read-only.
    */
    private ?string $hint = null;
    
    /**
     * @var string|null $keyId The unique identifier for the password.
    */
    private ?string $keyId = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $secretText Read-only; Contains the strong passwords generated by Azure AD that are 16-64 characters in length. The generated password value is only returned during the initial POST request to addPassword. There is no way to retrieve this password in the future.
    */
    private ?string $secretText = null;
    
    /**
     * @var DateTime|null $startDateTime The date and time at which the password becomes valid. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional.
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * Instantiates a new passwordCredential and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.passwordCredential');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PasswordCredential
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PasswordCredential {
        return new PasswordCredential();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the customKeyIdentifier property value. Do not use.
     * @return StreamInterface|null
    */
    public function getCustomKeyIdentifier(): ?StreamInterface {
        return $this->customKeyIdentifier;
    }

    /**
     * Gets the displayName property value. Friendly name for the password. Optional.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the endDateTime property value. The date and time at which the password expires represented using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'customKeyIdentifier' => function (ParseNode $n) use ($o) { $o->setCustomKeyIdentifier($n->getBinaryContent()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'endDateTime' => function (ParseNode $n) use ($o) { $o->setEndDateTime($n->getDateTimeValue()); },
            'hint' => function (ParseNode $n) use ($o) { $o->setHint($n->getStringValue()); },
            'keyId' => function (ParseNode $n) use ($o) { $o->setKeyId($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'secretText' => function (ParseNode $n) use ($o) { $o->setSecretText($n->getStringValue()); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the hint property value. Contains the first three characters of the password. Read-only.
     * @return string|null
    */
    public function getHint(): ?string {
        return $this->hint;
    }

    /**
     * Gets the keyId property value. The unique identifier for the password.
     * @return string|null
    */
    public function getKeyId(): ?string {
        return $this->keyId;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the secretText property value. Read-only; Contains the strong passwords generated by Azure AD that are 16-64 characters in length. The generated password value is only returned during the initial POST request to addPassword. There is no way to retrieve this password in the future.
     * @return string|null
    */
    public function getSecretText(): ?string {
        return $this->secretText;
    }

    /**
     * Gets the startDateTime property value. The date and time at which the password becomes valid. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('customKeyIdentifier', $this->customKeyIdentifier);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeStringValue('hint', $this->hint);
        $writer->writeStringValue('keyId', $this->keyId);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('secretText', $this->secretText);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
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
     * Sets the customKeyIdentifier property value. Do not use.
     *  @param StreamInterface|null $value Value to set for the customKeyIdentifier property.
    */
    public function setCustomKeyIdentifier(?StreamInterface $value ): void {
        $this->customKeyIdentifier = $value;
    }

    /**
     * Sets the displayName property value. Friendly name for the password. Optional.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the endDateTime property value. The date and time at which the password expires represented using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional.
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the hint property value. Contains the first three characters of the password. Read-only.
     *  @param string|null $value Value to set for the hint property.
    */
    public function setHint(?string $value ): void {
        $this->hint = $value;
    }

    /**
     * Sets the keyId property value. The unique identifier for the password.
     *  @param string|null $value Value to set for the keyId property.
    */
    public function setKeyId(?string $value ): void {
        $this->keyId = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the secretText property value. Read-only; Contains the strong passwords generated by Azure AD that are 16-64 characters in length. The generated password value is only returned during the initial POST request to addPassword. There is no way to retrieve this password in the future.
     *  @param string|null $value Value to set for the secretText property.
    */
    public function setSecretText(?string $value ): void {
        $this->secretText = $value;
    }

    /**
     * Sets the startDateTime property value. The date and time at which the password becomes valid. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Optional.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

}
