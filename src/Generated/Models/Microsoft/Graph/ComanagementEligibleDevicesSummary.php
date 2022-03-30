<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ComanagementEligibleDevicesSummary implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $comanagedCount Count of devices already Co-Managed */
    private ?int $comanagedCount = null;
    
    /** @var int|null $eligibleButNotAzureAdJoinedCount Count of devices eligible for Co-Management but not yet joined to Azure Active Directory */
    private ?int $eligibleButNotAzureAdJoinedCount = null;
    
    /** @var int|null $eligibleCount Count of devices fully eligible for Co-Management */
    private ?int $eligibleCount = null;
    
    /** @var int|null $ineligibleCount Count of devices ineligible for Co-Management */
    private ?int $ineligibleCount = null;
    
    /** @var int|null $needsOsUpdateCount Count of devices that will be eligible for Co-Management after an OS update */
    private ?int $needsOsUpdateCount = null;
    
    /**
     * Instantiates a new comanagementEligibleDevicesSummary and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ComanagementEligibleDevicesSummary
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ComanagementEligibleDevicesSummary {
        return new ComanagementEligibleDevicesSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the comanagedCount property value. Count of devices already Co-Managed
     * @return int|null
    */
    public function getComanagedCount(): ?int {
        return $this->comanagedCount;
    }

    /**
     * Gets the eligibleButNotAzureAdJoinedCount property value. Count of devices eligible for Co-Management but not yet joined to Azure Active Directory
     * @return int|null
    */
    public function getEligibleButNotAzureAdJoinedCount(): ?int {
        return $this->eligibleButNotAzureAdJoinedCount;
    }

    /**
     * Gets the eligibleCount property value. Count of devices fully eligible for Co-Management
     * @return int|null
    */
    public function getEligibleCount(): ?int {
        return $this->eligibleCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'comanagedCount' => function (self $o, ParseNode $n) { $o->setComanagedCount($n->getIntegerValue()); },
            'eligibleButNotAzureAdJoinedCount' => function (self $o, ParseNode $n) { $o->setEligibleButNotAzureAdJoinedCount($n->getIntegerValue()); },
            'eligibleCount' => function (self $o, ParseNode $n) { $o->setEligibleCount($n->getIntegerValue()); },
            'ineligibleCount' => function (self $o, ParseNode $n) { $o->setIneligibleCount($n->getIntegerValue()); },
            'needsOsUpdateCount' => function (self $o, ParseNode $n) { $o->setNeedsOsUpdateCount($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the ineligibleCount property value. Count of devices ineligible for Co-Management
     * @return int|null
    */
    public function getIneligibleCount(): ?int {
        return $this->ineligibleCount;
    }

    /**
     * Gets the needsOsUpdateCount property value. Count of devices that will be eligible for Co-Management after an OS update
     * @return int|null
    */
    public function getNeedsOsUpdateCount(): ?int {
        return $this->needsOsUpdateCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('comanagedCount', $this->comanagedCount);
        $writer->writeIntegerValue('eligibleButNotAzureAdJoinedCount', $this->eligibleButNotAzureAdJoinedCount);
        $writer->writeIntegerValue('eligibleCount', $this->eligibleCount);
        $writer->writeIntegerValue('ineligibleCount', $this->ineligibleCount);
        $writer->writeIntegerValue('needsOsUpdateCount', $this->needsOsUpdateCount);
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
     * Sets the comanagedCount property value. Count of devices already Co-Managed
     *  @param int|null $value Value to set for the comanagedCount property.
    */
    public function setComanagedCount(?int $value ): void {
        $this->comanagedCount = $value;
    }

    /**
     * Sets the eligibleButNotAzureAdJoinedCount property value. Count of devices eligible for Co-Management but not yet joined to Azure Active Directory
     *  @param int|null $value Value to set for the eligibleButNotAzureAdJoinedCount property.
    */
    public function setEligibleButNotAzureAdJoinedCount(?int $value ): void {
        $this->eligibleButNotAzureAdJoinedCount = $value;
    }

    /**
     * Sets the eligibleCount property value. Count of devices fully eligible for Co-Management
     *  @param int|null $value Value to set for the eligibleCount property.
    */
    public function setEligibleCount(?int $value ): void {
        $this->eligibleCount = $value;
    }

    /**
     * Sets the ineligibleCount property value. Count of devices ineligible for Co-Management
     *  @param int|null $value Value to set for the ineligibleCount property.
    */
    public function setIneligibleCount(?int $value ): void {
        $this->ineligibleCount = $value;
    }

    /**
     * Sets the needsOsUpdateCount property value. Count of devices that will be eligible for Co-Management after an OS update
     *  @param int|null $value Value to set for the needsOsUpdateCount property.
    */
    public function setNeedsOsUpdateCount(?int $value ): void {
        $this->needsOsUpdateCount = $value;
    }

}
