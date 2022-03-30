<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivacyProfile implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $contactEmail A valid smtp email address for the privacy statement contact. Not required. */
    private ?string $contactEmail = null;
    
    /** @var string|null $statementUrl A valid URL format that begins with http:// or https://. Maximum length is 255 characters. The URL that directs to the company's privacy statement. Not required. */
    private ?string $statementUrl = null;
    
    /**
     * Instantiates a new privacyProfile and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivacyProfile
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PrivacyProfile {
        return new PrivacyProfile();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the contactEmail property value. A valid smtp email address for the privacy statement contact. Not required.
     * @return string|null
    */
    public function getContactEmail(): ?string {
        return $this->contactEmail;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'contactEmail' => function (self $o, ParseNode $n) { $o->setContactEmail($n->getStringValue()); },
            'statementUrl' => function (self $o, ParseNode $n) { $o->setStatementUrl($n->getStringValue()); },
        ];
    }

    /**
     * Gets the statementUrl property value. A valid URL format that begins with http:// or https://. Maximum length is 255 characters. The URL that directs to the company's privacy statement. Not required.
     * @return string|null
    */
    public function getStatementUrl(): ?string {
        return $this->statementUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('contactEmail', $this->contactEmail);
        $writer->writeStringValue('statementUrl', $this->statementUrl);
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
     * Sets the contactEmail property value. A valid smtp email address for the privacy statement contact. Not required.
     *  @param string|null $value Value to set for the contactEmail property.
    */
    public function setContactEmail(?string $value ): void {
        $this->contactEmail = $value;
    }

    /**
     * Sets the statementUrl property value. A valid URL format that begins with http:// or https://. Maximum length is 255 characters. The URL that directs to the company's privacy statement. Not required.
     *  @param string|null $value Value to set for the statementUrl property.
    */
    public function setStatementUrl(?string $value ): void {
        $this->statementUrl = $value;
    }

}
