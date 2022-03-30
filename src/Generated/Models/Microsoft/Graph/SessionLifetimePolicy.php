<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SessionLifetimePolicy implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $detail The human-readable details of the conditional access session management policy applied to the sign-in. */
    private ?string $detail = null;
    
    /** @var ExpirationRequirement|null $expirationRequirement If a conditional access session management policy required the user to authenticate in this sign-in event, this field describes the policy type that required authentication. The possible values are: rememberMultifactorAuthenticationOnTrustedDevices, tenantTokenLifetimePolicy, audienceTokenLifetimePolicy, signInFrequencyPeriodicReauthentication, ngcMfa, signInFrequencyEveryTime, unknownFutureValue. */
    private ?ExpirationRequirement $expirationRequirement = null;
    
    /**
     * Instantiates a new sessionLifetimePolicy and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SessionLifetimePolicy
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SessionLifetimePolicy {
        return new SessionLifetimePolicy();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the detail property value. The human-readable details of the conditional access session management policy applied to the sign-in.
     * @return string|null
    */
    public function getDetail(): ?string {
        return $this->detail;
    }

    /**
     * Gets the expirationRequirement property value. If a conditional access session management policy required the user to authenticate in this sign-in event, this field describes the policy type that required authentication. The possible values are: rememberMultifactorAuthenticationOnTrustedDevices, tenantTokenLifetimePolicy, audienceTokenLifetimePolicy, signInFrequencyPeriodicReauthentication, ngcMfa, signInFrequencyEveryTime, unknownFutureValue.
     * @return ExpirationRequirement|null
    */
    public function getExpirationRequirement(): ?ExpirationRequirement {
        return $this->expirationRequirement;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'detail' => function (self $o, ParseNode $n) { $o->setDetail($n->getStringValue()); },
            'expirationRequirement' => function (self $o, ParseNode $n) { $o->setExpirationRequirement($n->getEnumValue(ExpirationRequirement::class)); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('detail', $this->detail);
        $writer->writeEnumValue('expirationRequirement', $this->expirationRequirement);
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
     * Sets the detail property value. The human-readable details of the conditional access session management policy applied to the sign-in.
     *  @param string|null $value Value to set for the detail property.
    */
    public function setDetail(?string $value ): void {
        $this->detail = $value;
    }

    /**
     * Sets the expirationRequirement property value. If a conditional access session management policy required the user to authenticate in this sign-in event, this field describes the policy type that required authentication. The possible values are: rememberMultifactorAuthenticationOnTrustedDevices, tenantTokenLifetimePolicy, audienceTokenLifetimePolicy, signInFrequencyPeriodicReauthentication, ngcMfa, signInFrequencyEveryTime, unknownFutureValue.
     *  @param ExpirationRequirement|null $value Value to set for the expirationRequirement property.
    */
    public function setExpirationRequirement(?ExpirationRequirement $value ): void {
        $this->expirationRequirement = $value;
    }

}
