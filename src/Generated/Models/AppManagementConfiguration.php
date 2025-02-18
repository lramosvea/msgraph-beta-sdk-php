<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppManagementConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<KeyCredentialConfiguration>|null $keyCredentials Collection of keyCredential restrictions settings to be applied to an application or service principal.
    */
    private ?array $keyCredentials = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<PasswordCredentialConfiguration>|null $passwordCredentials Collection of password restrictions settings to be applied to an application or service principal.
    */
    private ?array $passwordCredentials = null;
    
    /**
     * Instantiates a new appManagementConfiguration and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.appManagementConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppManagementConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppManagementConfiguration {
        return new AppManagementConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'keyCredentials' => function (ParseNode $n) use ($o) { $o->setKeyCredentials($n->getCollectionOfObjectValues(array(KeyCredentialConfiguration::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'passwordCredentials' => function (ParseNode $n) use ($o) { $o->setPasswordCredentials($n->getCollectionOfObjectValues(array(PasswordCredentialConfiguration::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the keyCredentials property value. Collection of keyCredential restrictions settings to be applied to an application or service principal.
     * @return array<KeyCredentialConfiguration>|null
    */
    public function getKeyCredentials(): ?array {
        return $this->keyCredentials;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the passwordCredentials property value. Collection of password restrictions settings to be applied to an application or service principal.
     * @return array<PasswordCredentialConfiguration>|null
    */
    public function getPasswordCredentials(): ?array {
        return $this->passwordCredentials;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('keyCredentials', $this->keyCredentials);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfObjectValues('passwordCredentials', $this->passwordCredentials);
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
     * Sets the keyCredentials property value. Collection of keyCredential restrictions settings to be applied to an application or service principal.
     *  @param array<KeyCredentialConfiguration>|null $value Value to set for the keyCredentials property.
    */
    public function setKeyCredentials(?array $value ): void {
        $this->keyCredentials = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the passwordCredentials property value. Collection of password restrictions settings to be applied to an application or service principal.
     *  @param array<PasswordCredentialConfiguration>|null $value Value to set for the passwordCredentials property.
    */
    public function setPasswordCredentials(?array $value ): void {
        $this->passwordCredentials = $value;
    }

}
