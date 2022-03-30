<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SensitivityLabel extends Entity 
{
    /** @var SensitivityLabelTarget|null $applicableTo  */
    private ?SensitivityLabelTarget $applicableTo = null;
    
    /** @var ApplicationMode|null $applicationMode  */
    private ?ApplicationMode $applicationMode = null;
    
    /** @var array<LabelPolicy>|null $assignedPolicies  */
    private ?array $assignedPolicies = null;
    
    /** @var AutoLabeling|null $autoLabeling  */
    private ?AutoLabeling $autoLabeling = null;
    
    /** @var string|null $description  */
    private ?string $description = null;
    
    /** @var string|null $displayName  */
    private ?string $displayName = null;
    
    /** @var bool|null $isDefault  */
    private ?bool $isDefault = null;
    
    /** @var bool|null $isEndpointProtectionEnabled  */
    private ?bool $isEndpointProtectionEnabled = null;
    
    /** @var array<LabelActionBase>|null $labelActions  */
    private ?array $labelActions = null;
    
    /** @var string|null $name  */
    private ?string $name = null;
    
    /** @var int|null $priority  */
    private ?int $priority = null;
    
    /** @var array<SensitivityLabel>|null $sublabels  */
    private ?array $sublabels = null;
    
    /** @var string|null $toolTip  */
    private ?string $toolTip = null;
    
    /**
     * Instantiates a new sensitivityLabel and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SensitivityLabel
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SensitivityLabel {
        return new SensitivityLabel();
    }

    /**
     * Gets the applicableTo property value. 
     * @return SensitivityLabelTarget|null
    */
    public function getApplicableTo(): ?SensitivityLabelTarget {
        return $this->applicableTo;
    }

    /**
     * Gets the applicationMode property value. 
     * @return ApplicationMode|null
    */
    public function getApplicationMode(): ?ApplicationMode {
        return $this->applicationMode;
    }

    /**
     * Gets the assignedPolicies property value. 
     * @return array<LabelPolicy>|null
    */
    public function getAssignedPolicies(): ?array {
        return $this->assignedPolicies;
    }

    /**
     * Gets the autoLabeling property value. 
     * @return AutoLabeling|null
    */
    public function getAutoLabeling(): ?AutoLabeling {
        return $this->autoLabeling;
    }

    /**
     * Gets the description property value. 
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
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
        return array_merge(parent::getFieldDeserializers(), [
            'applicableTo' => function (self $o, ParseNode $n) { $o->setApplicableTo($n->getEnumValue(SensitivityLabelTarget::class)); },
            'applicationMode' => function (self $o, ParseNode $n) { $o->setApplicationMode($n->getEnumValue(ApplicationMode::class)); },
            'assignedPolicies' => function (self $o, ParseNode $n) { $o->setAssignedPolicies($n->getCollectionOfObjectValues(LabelPolicy::class)); },
            'autoLabeling' => function (self $o, ParseNode $n) { $o->setAutoLabeling($n->getObjectValue(AutoLabeling::class)); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'isDefault' => function (self $o, ParseNode $n) { $o->setIsDefault($n->getBooleanValue()); },
            'isEndpointProtectionEnabled' => function (self $o, ParseNode $n) { $o->setIsEndpointProtectionEnabled($n->getBooleanValue()); },
            'labelActions' => function (self $o, ParseNode $n) { $o->setLabelActions($n->getCollectionOfObjectValues(LabelActionBase::class)); },
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
            'priority' => function (self $o, ParseNode $n) { $o->setPriority($n->getIntegerValue()); },
            'sublabels' => function (self $o, ParseNode $n) { $o->setSublabels($n->getCollectionOfObjectValues(SensitivityLabel::class)); },
            'toolTip' => function (self $o, ParseNode $n) { $o->setToolTip($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isDefault property value. 
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->isDefault;
    }

    /**
     * Gets the isEndpointProtectionEnabled property value. 
     * @return bool|null
    */
    public function getIsEndpointProtectionEnabled(): ?bool {
        return $this->isEndpointProtectionEnabled;
    }

    /**
     * Gets the labelActions property value. 
     * @return array<LabelActionBase>|null
    */
    public function getLabelActions(): ?array {
        return $this->labelActions;
    }

    /**
     * Gets the name property value. 
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the priority property value. 
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->priority;
    }

    /**
     * Gets the sublabels property value. 
     * @return array<SensitivityLabel>|null
    */
    public function getSublabels(): ?array {
        return $this->sublabels;
    }

    /**
     * Gets the toolTip property value. 
     * @return string|null
    */
    public function getToolTip(): ?string {
        return $this->toolTip;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('applicableTo', $this->applicableTo);
        $writer->writeEnumValue('applicationMode', $this->applicationMode);
        $writer->writeCollectionOfObjectValues('assignedPolicies', $this->assignedPolicies);
        $writer->writeObjectValue('autoLabeling', $this->autoLabeling);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('isDefault', $this->isDefault);
        $writer->writeBooleanValue('isEndpointProtectionEnabled', $this->isEndpointProtectionEnabled);
        $writer->writeCollectionOfObjectValues('labelActions', $this->labelActions);
        $writer->writeStringValue('name', $this->name);
        $writer->writeIntegerValue('priority', $this->priority);
        $writer->writeCollectionOfObjectValues('sublabels', $this->sublabels);
        $writer->writeStringValue('toolTip', $this->toolTip);
    }

    /**
     * Sets the applicableTo property value. 
     *  @param SensitivityLabelTarget|null $value Value to set for the applicableTo property.
    */
    public function setApplicableTo(?SensitivityLabelTarget $value ): void {
        $this->applicableTo = $value;
    }

    /**
     * Sets the applicationMode property value. 
     *  @param ApplicationMode|null $value Value to set for the applicationMode property.
    */
    public function setApplicationMode(?ApplicationMode $value ): void {
        $this->applicationMode = $value;
    }

    /**
     * Sets the assignedPolicies property value. 
     *  @param array<LabelPolicy>|null $value Value to set for the assignedPolicies property.
    */
    public function setAssignedPolicies(?array $value ): void {
        $this->assignedPolicies = $value;
    }

    /**
     * Sets the autoLabeling property value. 
     *  @param AutoLabeling|null $value Value to set for the autoLabeling property.
    */
    public function setAutoLabeling(?AutoLabeling $value ): void {
        $this->autoLabeling = $value;
    }

    /**
     * Sets the description property value. 
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. 
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isDefault property value. 
     *  @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value ): void {
        $this->isDefault = $value;
    }

    /**
     * Sets the isEndpointProtectionEnabled property value. 
     *  @param bool|null $value Value to set for the isEndpointProtectionEnabled property.
    */
    public function setIsEndpointProtectionEnabled(?bool $value ): void {
        $this->isEndpointProtectionEnabled = $value;
    }

    /**
     * Sets the labelActions property value. 
     *  @param array<LabelActionBase>|null $value Value to set for the labelActions property.
    */
    public function setLabelActions(?array $value ): void {
        $this->labelActions = $value;
    }

    /**
     * Sets the name property value. 
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the priority property value. 
     *  @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value ): void {
        $this->priority = $value;
    }

    /**
     * Sets the sublabels property value. 
     *  @param array<SensitivityLabel>|null $value Value to set for the sublabels property.
    */
    public function setSublabels(?array $value ): void {
        $this->sublabels = $value;
    }

    /**
     * Sets the toolTip property value. 
     *  @param string|null $value Value to set for the toolTip property.
    */
    public function setToolTip(?string $value ): void {
        $this->toolTip = $value;
    }

}
