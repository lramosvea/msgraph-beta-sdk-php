<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MicrosoftAuthenticatorAuthenticationMethodConfiguration extends AuthenticationMethodConfiguration implements Parsable 
{
    /**
     * @var MicrosoftAuthenticatorFeatureSettings|null $featureSettings A collection of Microsoft Authenticator settings such as number matching and location context, and whether they are enabled for all users or specific users only.
    */
    private ?MicrosoftAuthenticatorFeatureSettings $featureSettings = null;
    
    /**
     * @var array<MicrosoftAuthenticatorAuthenticationMethodTarget>|null $includeTargets A collection of users or groups who are enabled to use the authentication method. Expanded by default.
    */
    private ?array $includeTargets = null;
    
    /**
     * Instantiates a new MicrosoftAuthenticatorAuthenticationMethodConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.microsoftAuthenticatorAuthenticationMethodConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftAuthenticatorAuthenticationMethodConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftAuthenticatorAuthenticationMethodConfiguration {
        return new MicrosoftAuthenticatorAuthenticationMethodConfiguration();
    }

    /**
     * Gets the featureSettings property value. A collection of Microsoft Authenticator settings such as number matching and location context, and whether they are enabled for all users or specific users only.
     * @return MicrosoftAuthenticatorFeatureSettings|null
    */
    public function getFeatureSettings(): ?MicrosoftAuthenticatorFeatureSettings {
        return $this->featureSettings;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'featureSettings' => function (ParseNode $n) use ($o) { $o->setFeatureSettings($n->getObjectValue(array(MicrosoftAuthenticatorFeatureSettings::class, 'createFromDiscriminatorValue'))); },
            'includeTargets' => function (ParseNode $n) use ($o) { $o->setIncludeTargets($n->getCollectionOfObjectValues(array(MicrosoftAuthenticatorAuthenticationMethodTarget::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the includeTargets property value. A collection of users or groups who are enabled to use the authentication method. Expanded by default.
     * @return array<MicrosoftAuthenticatorAuthenticationMethodTarget>|null
    */
    public function getIncludeTargets(): ?array {
        return $this->includeTargets;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('featureSettings', $this->featureSettings);
        $writer->writeCollectionOfObjectValues('includeTargets', $this->includeTargets);
    }

    /**
     * Sets the featureSettings property value. A collection of Microsoft Authenticator settings such as number matching and location context, and whether they are enabled for all users or specific users only.
     *  @param MicrosoftAuthenticatorFeatureSettings|null $value Value to set for the featureSettings property.
    */
    public function setFeatureSettings(?MicrosoftAuthenticatorFeatureSettings $value ): void {
        $this->featureSettings = $value;
    }

    /**
     * Sets the includeTargets property value. A collection of users or groups who are enabled to use the authentication method. Expanded by default.
     *  @param array<MicrosoftAuthenticatorAuthenticationMethodTarget>|null $value Value to set for the includeTargets property.
    */
    public function setIncludeTargets(?array $value ): void {
        $this->includeTargets = $value;
    }

}
