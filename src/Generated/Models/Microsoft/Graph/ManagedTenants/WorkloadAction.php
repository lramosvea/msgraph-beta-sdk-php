<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ManagedTenants;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkloadAction implements AdditionalDataHolder, Parsable 
{
    /** @var string|null $actionId The unique identifier for the workload action. Required. Read-only. */
    private ?string $actionId = null;
    
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var WorkloadActionCategory|null $category The category for the workload action. Possible values are: automated, manual, unknownFutureValue. Optional. Read-only. */
    private ?WorkloadActionCategory $category = null;
    
    /** @var string|null $description The description for the workload action. Optional. Read-only. */
    private ?string $description = null;
    
    /** @var string|null $displayName The display name for the workload action. Optional. Read-only. */
    private ?string $displayName = null;
    
    /** @var array<string>|null $licenses  */
    private ?array $licenses = null;
    
    /** @var string|null $service The service associated with workload action. Optional. Read-only. */
    private ?string $service = null;
    
    /** @var array<Setting>|null $settings The collection of settings associated with the workload action. Optional. Read-only. */
    private ?array $settings = null;
    
    /**
     * Instantiates a new workloadAction and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkloadAction
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WorkloadAction {
        return new WorkloadAction();
    }

    /**
     * Gets the actionId property value. The unique identifier for the workload action. Required. Read-only.
     * @return string|null
    */
    public function getActionId(): ?string {
        return $this->actionId;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the category property value. The category for the workload action. Possible values are: automated, manual, unknownFutureValue. Optional. Read-only.
     * @return WorkloadActionCategory|null
    */
    public function getCategory(): ?WorkloadActionCategory {
        return $this->category;
    }

    /**
     * Gets the description property value. The description for the workload action. Optional. Read-only.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name for the workload action. Optional. Read-only.
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
            'actionId' => function (self $o, ParseNode $n) { $o->setActionId($n->getStringValue()); },
            'category' => function (self $o, ParseNode $n) { $o->setCategory($n->getEnumValue(WorkloadActionCategory::class)); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'licenses' => function (self $o, ParseNode $n) { $o->setLicenses($n->getCollectionOfPrimitiveValues()); },
            'service' => function (self $o, ParseNode $n) { $o->setService($n->getStringValue()); },
            'settings' => function (self $o, ParseNode $n) { $o->setSettings($n->getCollectionOfObjectValues(Setting::class)); },
        ];
    }

    /**
     * Gets the licenses property value. 
     * @return array<string>|null
    */
    public function getLicenses(): ?array {
        return $this->licenses;
    }

    /**
     * Gets the service property value. The service associated with workload action. Optional. Read-only.
     * @return string|null
    */
    public function getService(): ?string {
        return $this->service;
    }

    /**
     * Gets the settings property value. The collection of settings associated with the workload action. Optional. Read-only.
     * @return array<Setting>|null
    */
    public function getSettings(): ?array {
        return $this->settings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actionId', $this->actionId);
        $writer->writeEnumValue('category', $this->category);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfPrimitiveValues('licenses', $this->licenses);
        $writer->writeStringValue('service', $this->service);
        $writer->writeCollectionOfObjectValues('settings', $this->settings);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the actionId property value. The unique identifier for the workload action. Required. Read-only.
     *  @param string|null $value Value to set for the actionId property.
    */
    public function setActionId(?string $value ): void {
        $this->actionId = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the category property value. The category for the workload action. Possible values are: automated, manual, unknownFutureValue. Optional. Read-only.
     *  @param WorkloadActionCategory|null $value Value to set for the category property.
    */
    public function setCategory(?WorkloadActionCategory $value ): void {
        $this->category = $value;
    }

    /**
     * Sets the description property value. The description for the workload action. Optional. Read-only.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name for the workload action. Optional. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the licenses property value. 
     *  @param array<string>|null $value Value to set for the licenses property.
    */
    public function setLicenses(?array $value ): void {
        $this->licenses = $value;
    }

    /**
     * Sets the service property value. The service associated with workload action. Optional. Read-only.
     *  @param string|null $value Value to set for the service property.
    */
    public function setService(?string $value ): void {
        $this->service = $value;
    }

    /**
     * Sets the settings property value. The collection of settings associated with the workload action. Optional. Read-only.
     *  @param array<Setting>|null $value Value to set for the settings property.
    */
    public function setSettings(?array $value ): void {
        $this->settings = $value;
    }

}
