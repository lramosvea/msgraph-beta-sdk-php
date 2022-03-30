<?php

namespace Microsoft\Graph\Beta\Generated\Me\ManagedDevices\Item\Wipe;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WipeRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $keepEnrollmentData  */
    private ?bool $keepEnrollmentData = null;
    
    /** @var bool|null $keepUserData  */
    private ?bool $keepUserData = null;
    
    /** @var string|null $macOsUnlockCode  */
    private ?string $macOsUnlockCode = null;
    
    /** @var bool|null $persistEsimDataPlan  */
    private ?bool $persistEsimDataPlan = null;
    
    /** @var bool|null $useProtectedWipe  */
    private ?bool $useProtectedWipe = null;
    
    /**
     * Instantiates a new wipeRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WipeRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WipeRequestBody {
        return new WipeRequestBody();
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
        return  [
            'keepEnrollmentData' => function (self $o, ParseNode $n) { $o->setKeepEnrollmentData($n->getBooleanValue()); },
            'keepUserData' => function (self $o, ParseNode $n) { $o->setKeepUserData($n->getBooleanValue()); },
            'macOsUnlockCode' => function (self $o, ParseNode $n) { $o->setMacOsUnlockCode($n->getStringValue()); },
            'persistEsimDataPlan' => function (self $o, ParseNode $n) { $o->setPersistEsimDataPlan($n->getBooleanValue()); },
            'useProtectedWipe' => function (self $o, ParseNode $n) { $o->setUseProtectedWipe($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the keepEnrollmentData property value. 
     * @return bool|null
    */
    public function getKeepEnrollmentData(): ?bool {
        return $this->keepEnrollmentData;
    }

    /**
     * Gets the keepUserData property value. 
     * @return bool|null
    */
    public function getKeepUserData(): ?bool {
        return $this->keepUserData;
    }

    /**
     * Gets the macOsUnlockCode property value. 
     * @return string|null
    */
    public function getMacOsUnlockCode(): ?string {
        return $this->macOsUnlockCode;
    }

    /**
     * Gets the persistEsimDataPlan property value. 
     * @return bool|null
    */
    public function getPersistEsimDataPlan(): ?bool {
        return $this->persistEsimDataPlan;
    }

    /**
     * Gets the useProtectedWipe property value. 
     * @return bool|null
    */
    public function getUseProtectedWipe(): ?bool {
        return $this->useProtectedWipe;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('keepEnrollmentData', $this->keepEnrollmentData);
        $writer->writeBooleanValue('keepUserData', $this->keepUserData);
        $writer->writeStringValue('macOsUnlockCode', $this->macOsUnlockCode);
        $writer->writeBooleanValue('persistEsimDataPlan', $this->persistEsimDataPlan);
        $writer->writeBooleanValue('useProtectedWipe', $this->useProtectedWipe);
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
     * Sets the keepEnrollmentData property value. 
     *  @param bool|null $value Value to set for the keepEnrollmentData property.
    */
    public function setKeepEnrollmentData(?bool $value ): void {
        $this->keepEnrollmentData = $value;
    }

    /**
     * Sets the keepUserData property value. 
     *  @param bool|null $value Value to set for the keepUserData property.
    */
    public function setKeepUserData(?bool $value ): void {
        $this->keepUserData = $value;
    }

    /**
     * Sets the macOsUnlockCode property value. 
     *  @param string|null $value Value to set for the macOsUnlockCode property.
    */
    public function setMacOsUnlockCode(?string $value ): void {
        $this->macOsUnlockCode = $value;
    }

    /**
     * Sets the persistEsimDataPlan property value. 
     *  @param bool|null $value Value to set for the persistEsimDataPlan property.
    */
    public function setPersistEsimDataPlan(?bool $value ): void {
        $this->persistEsimDataPlan = $value;
    }

    /**
     * Sets the useProtectedWipe property value. 
     *  @param bool|null $value Value to set for the useProtectedWipe property.
    */
    public function setUseProtectedWipe(?bool $value ): void {
        $this->useProtectedWipe = $value;
    }

}
