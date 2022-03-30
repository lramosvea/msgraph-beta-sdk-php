<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupPolicyDefinitionValue extends Entity 
{
    /** @var GroupPolicyConfigurationType|null $configurationType Specifies how the value should be configured. This can be either as a Policy or as a Preference. Possible values are: policy, preference. */
    private ?GroupPolicyConfigurationType $configurationType = null;
    
    /** @var DateTime|null $createdDateTime The date and time the object was created. */
    private ?DateTime $createdDateTime = null;
    
    /** @var GroupPolicyDefinition|null $definition The associated group policy definition with the value. */
    private ?GroupPolicyDefinition $definition = null;
    
    /** @var bool|null $enabled Enables or disables the associated group policy definition. */
    private ?bool $enabled = null;
    
    /** @var DateTime|null $lastModifiedDateTime The date and time the entity was last modified. */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var array<GroupPolicyPresentationValue>|null $presentationValues The associated group policy presentation values with the definition value. */
    private ?array $presentationValues = null;
    
    /**
     * Instantiates a new groupPolicyDefinitionValue and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyDefinitionValue
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyDefinitionValue {
        return new GroupPolicyDefinitionValue();
    }

    /**
     * Gets the configurationType property value. Specifies how the value should be configured. This can be either as a Policy or as a Preference. Possible values are: policy, preference.
     * @return GroupPolicyConfigurationType|null
    */
    public function getConfigurationType(): ?GroupPolicyConfigurationType {
        return $this->configurationType;
    }

    /**
     * Gets the createdDateTime property value. The date and time the object was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the definition property value. The associated group policy definition with the value.
     * @return GroupPolicyDefinition|null
    */
    public function getDefinition(): ?GroupPolicyDefinition {
        return $this->definition;
    }

    /**
     * Gets the enabled property value. Enables or disables the associated group policy definition.
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->enabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'configurationType' => function (self $o, ParseNode $n) { $o->setConfigurationType($n->getEnumValue(GroupPolicyConfigurationType::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'definition' => function (self $o, ParseNode $n) { $o->setDefinition($n->getObjectValue(GroupPolicyDefinition::class)); },
            'enabled' => function (self $o, ParseNode $n) { $o->setEnabled($n->getBooleanValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'presentationValues' => function (self $o, ParseNode $n) { $o->setPresentationValues($n->getCollectionOfObjectValues(GroupPolicyPresentationValue::class)); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the entity was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the presentationValues property value. The associated group policy presentation values with the definition value.
     * @return array<GroupPolicyPresentationValue>|null
    */
    public function getPresentationValues(): ?array {
        return $this->presentationValues;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('configurationType', $this->configurationType);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('definition', $this->definition);
        $writer->writeBooleanValue('enabled', $this->enabled);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeCollectionOfObjectValues('presentationValues', $this->presentationValues);
    }

    /**
     * Sets the configurationType property value. Specifies how the value should be configured. This can be either as a Policy or as a Preference. Possible values are: policy, preference.
     *  @param GroupPolicyConfigurationType|null $value Value to set for the configurationType property.
    */
    public function setConfigurationType(?GroupPolicyConfigurationType $value ): void {
        $this->configurationType = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time the object was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the definition property value. The associated group policy definition with the value.
     *  @param GroupPolicyDefinition|null $value Value to set for the definition property.
    */
    public function setDefinition(?GroupPolicyDefinition $value ): void {
        $this->definition = $value;
    }

    /**
     * Sets the enabled property value. Enables or disables the associated group policy definition.
     *  @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value ): void {
        $this->enabled = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the entity was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the presentationValues property value. The associated group policy presentation values with the definition value.
     *  @param array<GroupPolicyPresentationValue>|null $value Value to set for the presentationValues property.
    */
    public function setPresentationValues(?array $value ): void {
        $this->presentationValues = $value;
    }

}
