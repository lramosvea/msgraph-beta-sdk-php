<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemFacet extends Entity 
{
    /** @var AllowedAudiences|null $allowedAudiences The audiences that are able to see the values contained within the associated entity. Possible values are: me, family, contacts, groupMembers, organization, federatedOrganizations, everyone, unknownFutureValue. */
    private ?AllowedAudiences $allowedAudiences = null;
    
    /** @var IdentitySet|null $createdBy  */
    private ?IdentitySet $createdBy = null;
    
    /** @var DateTime|null $createdDateTime Provides the dateTimeOffset for when the entity was created. */
    private ?DateTime $createdDateTime = null;
    
    /** @var InferenceData|null $inference Contains inference detail if the entity is inferred by the creating or modifying application. */
    private ?InferenceData $inference = null;
    
    /** @var bool|null $isSearchable  */
    private ?bool $isSearchable = null;
    
    /** @var IdentitySet|null $lastModifiedBy  */
    private ?IdentitySet $lastModifiedBy = null;
    
    /** @var DateTime|null $lastModifiedDateTime Provides the dateTimeOffset for when the entity was created. */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var PersonDataSources|null $source Where the values within an entity originated if synced from another service. */
    private ?PersonDataSources $source = null;
    
    /**
     * Instantiates a new itemFacet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemFacet
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ItemFacet {
        return new ItemFacet();
    }

    /**
     * Gets the allowedAudiences property value. The audiences that are able to see the values contained within the associated entity. Possible values are: me, family, contacts, groupMembers, organization, federatedOrganizations, everyone, unknownFutureValue.
     * @return AllowedAudiences|null
    */
    public function getAllowedAudiences(): ?AllowedAudiences {
        return $this->allowedAudiences;
    }

    /**
     * Gets the createdBy property value. 
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. Provides the dateTimeOffset for when the entity was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'allowedAudiences' => function (self $o, ParseNode $n) { $o->setAllowedAudiences($n->getEnumValue(AllowedAudiences::class)); },
            'createdBy' => function (self $o, ParseNode $n) { $o->setCreatedBy($n->getObjectValue(IdentitySet::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'inference' => function (self $o, ParseNode $n) { $o->setInference($n->getObjectValue(InferenceData::class)); },
            'isSearchable' => function (self $o, ParseNode $n) { $o->setIsSearchable($n->getBooleanValue()); },
            'lastModifiedBy' => function (self $o, ParseNode $n) { $o->setLastModifiedBy($n->getObjectValue(IdentitySet::class)); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'source' => function (self $o, ParseNode $n) { $o->setSource($n->getObjectValue(PersonDataSources::class)); },
        ]);
    }

    /**
     * Gets the inference property value. Contains inference detail if the entity is inferred by the creating or modifying application.
     * @return InferenceData|null
    */
    public function getInference(): ?InferenceData {
        return $this->inference;
    }

    /**
     * Gets the isSearchable property value. 
     * @return bool|null
    */
    public function getIsSearchable(): ?bool {
        return $this->isSearchable;
    }

    /**
     * Gets the lastModifiedBy property value. 
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. Provides the dateTimeOffset for when the entity was created.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the source property value. Where the values within an entity originated if synced from another service.
     * @return PersonDataSources|null
    */
    public function getSource(): ?PersonDataSources {
        return $this->source;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('allowedAudiences', $this->allowedAudiences);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('inference', $this->inference);
        $writer->writeBooleanValue('isSearchable', $this->isSearchable);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeObjectValue('source', $this->source);
    }

    /**
     * Sets the allowedAudiences property value. The audiences that are able to see the values contained within the associated entity. Possible values are: me, family, contacts, groupMembers, organization, federatedOrganizations, everyone, unknownFutureValue.
     *  @param AllowedAudiences|null $value Value to set for the allowedAudiences property.
    */
    public function setAllowedAudiences(?AllowedAudiences $value ): void {
        $this->allowedAudiences = $value;
    }

    /**
     * Sets the createdBy property value. 
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. Provides the dateTimeOffset for when the entity was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the inference property value. Contains inference detail if the entity is inferred by the creating or modifying application.
     *  @param InferenceData|null $value Value to set for the inference property.
    */
    public function setInference(?InferenceData $value ): void {
        $this->inference = $value;
    }

    /**
     * Sets the isSearchable property value. 
     *  @param bool|null $value Value to set for the isSearchable property.
    */
    public function setIsSearchable(?bool $value ): void {
        $this->isSearchable = $value;
    }

    /**
     * Sets the lastModifiedBy property value. 
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Provides the dateTimeOffset for when the entity was created.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the source property value. Where the values within an entity originated if synced from another service.
     *  @param PersonDataSources|null $value Value to set for the source property.
    */
    public function setSource(?PersonDataSources $value ): void {
        $this->source = $value;
    }

}
