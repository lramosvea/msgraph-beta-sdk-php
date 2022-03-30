<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserAccount implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $displayName  */
    private ?string $displayName = null;
    
    /** @var DateTime|null $lastSeenDateTime  */
    private ?DateTime $lastSeenDateTime = null;
    
    /** @var string|null $riskScore  */
    private ?string $riskScore = null;
    
    /** @var string|null $service  */
    private ?string $service = null;
    
    /** @var string|null $signinName  */
    private ?string $signinName = null;
    
    /** @var AccountStatus|null $status  */
    private ?AccountStatus $status = null;
    
    /**
     * Instantiates a new userAccount and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserAccount
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UserAccount {
        return new UserAccount();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. 
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'lastSeenDateTime' => function (self $o, ParseNode $n) { $o->setLastSeenDateTime($n->getDateTimeValue()); },
            'riskScore' => function (self $o, ParseNode $n) { $o->setRiskScore($n->getStringValue()); },
            'service' => function (self $o, ParseNode $n) { $o->setService($n->getStringValue()); },
            'signinName' => function (self $o, ParseNode $n) { $o->setSigninName($n->getStringValue()); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getEnumValue(AccountStatus::class)); },
        ];
    }

    /**
     * Gets the lastSeenDateTime property value. 
     * @return DateTime|null
    */
    public function getLastSeenDateTime(): ?DateTime {
        return $this->lastSeenDateTime;
    }

    /**
     * Gets the riskScore property value. 
     * @return string|null
    */
    public function getRiskScore(): ?string {
        return $this->riskScore;
    }

    /**
     * Gets the service property value. 
     * @return string|null
    */
    public function getService(): ?string {
        return $this->service;
    }

    /**
     * Gets the signinName property value. 
     * @return string|null
    */
    public function getSigninName(): ?string {
        return $this->signinName;
    }

    /**
     * Gets the status property value. 
     * @return AccountStatus|null
    */
    public function getStatus(): ?AccountStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastSeenDateTime', $this->lastSeenDateTime);
        $writer->writeStringValue('riskScore', $this->riskScore);
        $writer->writeStringValue('service', $this->service);
        $writer->writeStringValue('signinName', $this->signinName);
        $writer->writeEnumValue('status', $this->status);
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
     * Sets the displayName property value. 
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastSeenDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value ): void {
        $this->lastSeenDateTime = $value;
    }

    /**
     * Sets the riskScore property value. 
     *  @param string|null $value Value to set for the riskScore property.
    */
    public function setRiskScore(?string $value ): void {
        $this->riskScore = $value;
    }

    /**
     * Sets the service property value. 
     *  @param string|null $value Value to set for the service property.
    */
    public function setService(?string $value ): void {
        $this->service = $value;
    }

    /**
     * Sets the signinName property value. 
     *  @param string|null $value Value to set for the signinName property.
    */
    public function setSigninName(?string $value ): void {
        $this->signinName = $value;
    }

    /**
     * Sets the status property value. 
     *  @param AccountStatus|null $value Value to set for the status property.
    */
    public function setStatus(?AccountStatus $value ): void {
        $this->status = $value;
    }

}
