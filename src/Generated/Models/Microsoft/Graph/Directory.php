<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Directory extends Entity 
{
    /** @var array<AdministrativeUnit>|null $administrativeUnits Conceptual container for user and group directory objects. */
    private ?array $administrativeUnits = null;
    
    /** @var array<AttributeSet>|null $attributeSets Group of related custom security attribute definitions. */
    private ?array $attributeSets = null;
    
    /** @var array<CustomSecurityAttributeDefinition>|null $customSecurityAttributeDefinitions Schema of a custom security attributes (key-value pairs). */
    private ?array $customSecurityAttributeDefinitions = null;
    
    /** @var array<DirectoryObject>|null $deletedItems Recently deleted items. Read-only. Nullable. */
    private ?array $deletedItems = null;
    
    /** @var array<FeatureRolloutPolicy>|null $featureRolloutPolicies Nullable. */
    private ?array $featureRolloutPolicies = null;
    
    /** @var array<IdentityProviderBase>|null $federationConfigurations Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol. */
    private ?array $federationConfigurations = null;
    
    /** @var array<RecommendationResource>|null $impactedResources  */
    private ?array $impactedResources = null;
    
    /** @var array<InboundSharedUserProfile>|null $inboundSharedUserProfiles  */
    private ?array $inboundSharedUserProfiles = null;
    
    /** @var array<OutboundSharedUserProfile>|null $outboundSharedUserProfiles  */
    private ?array $outboundSharedUserProfiles = null;
    
    /** @var array<Recommendation>|null $recommendations  */
    private ?array $recommendations = null;
    
    /** @var array<SharedEmailDomain>|null $sharedEmailDomains  */
    private ?array $sharedEmailDomains = null;
    
    /**
     * Instantiates a new directory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Directory
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Directory {
        return new Directory();
    }

    /**
     * Gets the administrativeUnits property value. Conceptual container for user and group directory objects.
     * @return array<AdministrativeUnit>|null
    */
    public function getAdministrativeUnits(): ?array {
        return $this->administrativeUnits;
    }

    /**
     * Gets the attributeSets property value. Group of related custom security attribute definitions.
     * @return array<AttributeSet>|null
    */
    public function getAttributeSets(): ?array {
        return $this->attributeSets;
    }

    /**
     * Gets the customSecurityAttributeDefinitions property value. Schema of a custom security attributes (key-value pairs).
     * @return array<CustomSecurityAttributeDefinition>|null
    */
    public function getCustomSecurityAttributeDefinitions(): ?array {
        return $this->customSecurityAttributeDefinitions;
    }

    /**
     * Gets the deletedItems property value. Recently deleted items. Read-only. Nullable.
     * @return array<DirectoryObject>|null
    */
    public function getDeletedItems(): ?array {
        return $this->deletedItems;
    }

    /**
     * Gets the featureRolloutPolicies property value. Nullable.
     * @return array<FeatureRolloutPolicy>|null
    */
    public function getFeatureRolloutPolicies(): ?array {
        return $this->featureRolloutPolicies;
    }

    /**
     * Gets the federationConfigurations property value. Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
     * @return array<IdentityProviderBase>|null
    */
    public function getFederationConfigurations(): ?array {
        return $this->federationConfigurations;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'administrativeUnits' => function (self $o, ParseNode $n) { $o->setAdministrativeUnits($n->getCollectionOfObjectValues(AdministrativeUnit::class)); },
            'attributeSets' => function (self $o, ParseNode $n) { $o->setAttributeSets($n->getCollectionOfObjectValues(AttributeSet::class)); },
            'customSecurityAttributeDefinitions' => function (self $o, ParseNode $n) { $o->setCustomSecurityAttributeDefinitions($n->getCollectionOfObjectValues(CustomSecurityAttributeDefinition::class)); },
            'deletedItems' => function (self $o, ParseNode $n) { $o->setDeletedItems($n->getCollectionOfObjectValues(DirectoryObject::class)); },
            'featureRolloutPolicies' => function (self $o, ParseNode $n) { $o->setFeatureRolloutPolicies($n->getCollectionOfObjectValues(FeatureRolloutPolicy::class)); },
            'federationConfigurations' => function (self $o, ParseNode $n) { $o->setFederationConfigurations($n->getCollectionOfObjectValues(IdentityProviderBase::class)); },
            'impactedResources' => function (self $o, ParseNode $n) { $o->setImpactedResources($n->getCollectionOfObjectValues(RecommendationResource::class)); },
            'inboundSharedUserProfiles' => function (self $o, ParseNode $n) { $o->setInboundSharedUserProfiles($n->getCollectionOfObjectValues(InboundSharedUserProfile::class)); },
            'outboundSharedUserProfiles' => function (self $o, ParseNode $n) { $o->setOutboundSharedUserProfiles($n->getCollectionOfObjectValues(OutboundSharedUserProfile::class)); },
            'recommendations' => function (self $o, ParseNode $n) { $o->setRecommendations($n->getCollectionOfObjectValues(Recommendation::class)); },
            'sharedEmailDomains' => function (self $o, ParseNode $n) { $o->setSharedEmailDomains($n->getCollectionOfObjectValues(SharedEmailDomain::class)); },
        ]);
    }

    /**
     * Gets the impactedResources property value. 
     * @return array<RecommendationResource>|null
    */
    public function getImpactedResources(): ?array {
        return $this->impactedResources;
    }

    /**
     * Gets the inboundSharedUserProfiles property value. 
     * @return array<InboundSharedUserProfile>|null
    */
    public function getInboundSharedUserProfiles(): ?array {
        return $this->inboundSharedUserProfiles;
    }

    /**
     * Gets the outboundSharedUserProfiles property value. 
     * @return array<OutboundSharedUserProfile>|null
    */
    public function getOutboundSharedUserProfiles(): ?array {
        return $this->outboundSharedUserProfiles;
    }

    /**
     * Gets the recommendations property value. 
     * @return array<Recommendation>|null
    */
    public function getRecommendations(): ?array {
        return $this->recommendations;
    }

    /**
     * Gets the sharedEmailDomains property value. 
     * @return array<SharedEmailDomain>|null
    */
    public function getSharedEmailDomains(): ?array {
        return $this->sharedEmailDomains;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('administrativeUnits', $this->administrativeUnits);
        $writer->writeCollectionOfObjectValues('attributeSets', $this->attributeSets);
        $writer->writeCollectionOfObjectValues('customSecurityAttributeDefinitions', $this->customSecurityAttributeDefinitions);
        $writer->writeCollectionOfObjectValues('deletedItems', $this->deletedItems);
        $writer->writeCollectionOfObjectValues('featureRolloutPolicies', $this->featureRolloutPolicies);
        $writer->writeCollectionOfObjectValues('federationConfigurations', $this->federationConfigurations);
        $writer->writeCollectionOfObjectValues('impactedResources', $this->impactedResources);
        $writer->writeCollectionOfObjectValues('inboundSharedUserProfiles', $this->inboundSharedUserProfiles);
        $writer->writeCollectionOfObjectValues('outboundSharedUserProfiles', $this->outboundSharedUserProfiles);
        $writer->writeCollectionOfObjectValues('recommendations', $this->recommendations);
        $writer->writeCollectionOfObjectValues('sharedEmailDomains', $this->sharedEmailDomains);
    }

    /**
     * Sets the administrativeUnits property value. Conceptual container for user and group directory objects.
     *  @param array<AdministrativeUnit>|null $value Value to set for the administrativeUnits property.
    */
    public function setAdministrativeUnits(?array $value ): void {
        $this->administrativeUnits = $value;
    }

    /**
     * Sets the attributeSets property value. Group of related custom security attribute definitions.
     *  @param array<AttributeSet>|null $value Value to set for the attributeSets property.
    */
    public function setAttributeSets(?array $value ): void {
        $this->attributeSets = $value;
    }

    /**
     * Sets the customSecurityAttributeDefinitions property value. Schema of a custom security attributes (key-value pairs).
     *  @param array<CustomSecurityAttributeDefinition>|null $value Value to set for the customSecurityAttributeDefinitions property.
    */
    public function setCustomSecurityAttributeDefinitions(?array $value ): void {
        $this->customSecurityAttributeDefinitions = $value;
    }

    /**
     * Sets the deletedItems property value. Recently deleted items. Read-only. Nullable.
     *  @param array<DirectoryObject>|null $value Value to set for the deletedItems property.
    */
    public function setDeletedItems(?array $value ): void {
        $this->deletedItems = $value;
    }

    /**
     * Sets the featureRolloutPolicies property value. Nullable.
     *  @param array<FeatureRolloutPolicy>|null $value Value to set for the featureRolloutPolicies property.
    */
    public function setFeatureRolloutPolicies(?array $value ): void {
        $this->featureRolloutPolicies = $value;
    }

    /**
     * Sets the federationConfigurations property value. Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
     *  @param array<IdentityProviderBase>|null $value Value to set for the federationConfigurations property.
    */
    public function setFederationConfigurations(?array $value ): void {
        $this->federationConfigurations = $value;
    }

    /**
     * Sets the impactedResources property value. 
     *  @param array<RecommendationResource>|null $value Value to set for the impactedResources property.
    */
    public function setImpactedResources(?array $value ): void {
        $this->impactedResources = $value;
    }

    /**
     * Sets the inboundSharedUserProfiles property value. 
     *  @param array<InboundSharedUserProfile>|null $value Value to set for the inboundSharedUserProfiles property.
    */
    public function setInboundSharedUserProfiles(?array $value ): void {
        $this->inboundSharedUserProfiles = $value;
    }

    /**
     * Sets the outboundSharedUserProfiles property value. 
     *  @param array<OutboundSharedUserProfile>|null $value Value to set for the outboundSharedUserProfiles property.
    */
    public function setOutboundSharedUserProfiles(?array $value ): void {
        $this->outboundSharedUserProfiles = $value;
    }

    /**
     * Sets the recommendations property value. 
     *  @param array<Recommendation>|null $value Value to set for the recommendations property.
    */
    public function setRecommendations(?array $value ): void {
        $this->recommendations = $value;
    }

    /**
     * Sets the sharedEmailDomains property value. 
     *  @param array<SharedEmailDomain>|null $value Value to set for the sharedEmailDomains property.
    */
    public function setSharedEmailDomains(?array $value ): void {
        $this->sharedEmailDomains = $value;
    }

}
