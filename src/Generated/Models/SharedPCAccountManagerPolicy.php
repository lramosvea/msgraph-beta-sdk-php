<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharedPCAccountManagerPolicy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var SharedPCAccountDeletionPolicyType|null $accountDeletionPolicy Possible values for when accounts are deleted on a shared PC.
    */
    private ?SharedPCAccountDeletionPolicyType $accountDeletionPolicy = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $cacheAccountsAboveDiskFreePercentage Sets the percentage of available disk space a PC should have before it stops deleting cached shared PC accounts. Only applies when AccountDeletionPolicy is DiskSpaceThreshold or DiskSpaceThresholdOrInactiveThreshold. Valid values 0 to 100
    */
    private ?int $cacheAccountsAboveDiskFreePercentage = null;
    
    /**
     * @var int|null $inactiveThresholdDays Specifies when the accounts will start being deleted when they have not been logged on during the specified period, given as number of days. Only applies when AccountDeletionPolicy is DiskSpaceThreshold or DiskSpaceThresholdOrInactiveThreshold.
    */
    private ?int $inactiveThresholdDays = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $removeAccountsBelowDiskFreePercentage Sets the percentage of disk space remaining on a PC before cached accounts will be deleted to free disk space. Accounts that have been inactive the longest will be deleted first. Only applies when AccountDeletionPolicy is DiskSpaceThresholdOrInactiveThreshold. Valid values 0 to 100
    */
    private ?int $removeAccountsBelowDiskFreePercentage = null;
    
    /**
     * Instantiates a new sharedPCAccountManagerPolicy and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.sharedPCAccountManagerPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharedPCAccountManagerPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharedPCAccountManagerPolicy {
        return new SharedPCAccountManagerPolicy();
    }

    /**
     * Gets the accountDeletionPolicy property value. Possible values for when accounts are deleted on a shared PC.
     * @return SharedPCAccountDeletionPolicyType|null
    */
    public function getAccountDeletionPolicy(): ?SharedPCAccountDeletionPolicyType {
        return $this->accountDeletionPolicy;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the cacheAccountsAboveDiskFreePercentage property value. Sets the percentage of available disk space a PC should have before it stops deleting cached shared PC accounts. Only applies when AccountDeletionPolicy is DiskSpaceThreshold or DiskSpaceThresholdOrInactiveThreshold. Valid values 0 to 100
     * @return int|null
    */
    public function getCacheAccountsAboveDiskFreePercentage(): ?int {
        return $this->cacheAccountsAboveDiskFreePercentage;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accountDeletionPolicy' => function (ParseNode $n) use ($o) { $o->setAccountDeletionPolicy($n->getEnumValue(SharedPCAccountDeletionPolicyType::class)); },
            'cacheAccountsAboveDiskFreePercentage' => function (ParseNode $n) use ($o) { $o->setCacheAccountsAboveDiskFreePercentage($n->getIntegerValue()); },
            'inactiveThresholdDays' => function (ParseNode $n) use ($o) { $o->setInactiveThresholdDays($n->getIntegerValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'removeAccountsBelowDiskFreePercentage' => function (ParseNode $n) use ($o) { $o->setRemoveAccountsBelowDiskFreePercentage($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the inactiveThresholdDays property value. Specifies when the accounts will start being deleted when they have not been logged on during the specified period, given as number of days. Only applies when AccountDeletionPolicy is DiskSpaceThreshold or DiskSpaceThresholdOrInactiveThreshold.
     * @return int|null
    */
    public function getInactiveThresholdDays(): ?int {
        return $this->inactiveThresholdDays;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the removeAccountsBelowDiskFreePercentage property value. Sets the percentage of disk space remaining on a PC before cached accounts will be deleted to free disk space. Accounts that have been inactive the longest will be deleted first. Only applies when AccountDeletionPolicy is DiskSpaceThresholdOrInactiveThreshold. Valid values 0 to 100
     * @return int|null
    */
    public function getRemoveAccountsBelowDiskFreePercentage(): ?int {
        return $this->removeAccountsBelowDiskFreePercentage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('accountDeletionPolicy', $this->accountDeletionPolicy);
        $writer->writeIntegerValue('cacheAccountsAboveDiskFreePercentage', $this->cacheAccountsAboveDiskFreePercentage);
        $writer->writeIntegerValue('inactiveThresholdDays', $this->inactiveThresholdDays);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('removeAccountsBelowDiskFreePercentage', $this->removeAccountsBelowDiskFreePercentage);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accountDeletionPolicy property value. Possible values for when accounts are deleted on a shared PC.
     *  @param SharedPCAccountDeletionPolicyType|null $value Value to set for the accountDeletionPolicy property.
    */
    public function setAccountDeletionPolicy(?SharedPCAccountDeletionPolicyType $value ): void {
        $this->accountDeletionPolicy = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the cacheAccountsAboveDiskFreePercentage property value. Sets the percentage of available disk space a PC should have before it stops deleting cached shared PC accounts. Only applies when AccountDeletionPolicy is DiskSpaceThreshold or DiskSpaceThresholdOrInactiveThreshold. Valid values 0 to 100
     *  @param int|null $value Value to set for the cacheAccountsAboveDiskFreePercentage property.
    */
    public function setCacheAccountsAboveDiskFreePercentage(?int $value ): void {
        $this->cacheAccountsAboveDiskFreePercentage = $value;
    }

    /**
     * Sets the inactiveThresholdDays property value. Specifies when the accounts will start being deleted when they have not been logged on during the specified period, given as number of days. Only applies when AccountDeletionPolicy is DiskSpaceThreshold or DiskSpaceThresholdOrInactiveThreshold.
     *  @param int|null $value Value to set for the inactiveThresholdDays property.
    */
    public function setInactiveThresholdDays(?int $value ): void {
        $this->inactiveThresholdDays = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the removeAccountsBelowDiskFreePercentage property value. Sets the percentage of disk space remaining on a PC before cached accounts will be deleted to free disk space. Accounts that have been inactive the longest will be deleted first. Only applies when AccountDeletionPolicy is DiskSpaceThresholdOrInactiveThreshold. Valid values 0 to 100
     *  @param int|null $value Value to set for the removeAccountsBelowDiskFreePercentage property.
    */
    public function setRemoveAccountsBelowDiskFreePercentage(?int $value ): void {
        $this->removeAccountsBelowDiskFreePercentage = $value;
    }

}
