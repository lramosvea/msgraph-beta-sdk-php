<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleManagementPolicy extends Entity 
{
    /** @var string|null $description Description for the policy. */
    private ?string $description = null;
    
    /** @var string|null $displayName Display name for the policy. */
    private ?string $displayName = null;
    
    /** @var array<UnifiedRoleManagementPolicyRule>|null $effectiveRules Not implemented. The list of effective rules like approval rules and expiration rules evaluated based on inherited referenced rules. For example, if there is a tenant-wide policy to enforce enabling an approval rule, the effective rule will be to enable approval even if the policy has a rule to disable approval. */
    private ?array $effectiveRules = null;
    
    /** @var bool|null $isOrganizationDefault This can only be set to true for a single tenant wide policy which will apply to all scopes and roles. Set the scopeId to '/' and scopeType to Directory. */
    private ?bool $isOrganizationDefault = null;
    
    /** @var Identity|null $lastModifiedBy The identity who last modified the role setting. */
    private ?Identity $lastModifiedBy = null;
    
    /** @var DateTime|null $lastModifiedDateTime The time when the role setting was last modified. */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var array<UnifiedRoleManagementPolicyRule>|null $rules The collection of rules like approval rules and expiration rules. */
    private ?array $rules = null;
    
    /** @var string|null $scopeId The id of the scope where the policy is created. Can be / for the tenant or a group ID. Required. */
    private ?string $scopeId = null;
    
    /** @var string|null $scopeType The type of the scope where the policy is created. One of Directory, DirectoryRole. Required. */
    private ?string $scopeType = null;
    
    /**
     * Instantiates a new unifiedRoleManagementPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleManagementPolicy
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleManagementPolicy {
        return new UnifiedRoleManagementPolicy();
    }

    /**
     * Gets the description property value. Description for the policy.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Display name for the policy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the effectiveRules property value. Not implemented. The list of effective rules like approval rules and expiration rules evaluated based on inherited referenced rules. For example, if there is a tenant-wide policy to enforce enabling an approval rule, the effective rule will be to enable approval even if the policy has a rule to disable approval.
     * @return array<UnifiedRoleManagementPolicyRule>|null
    */
    public function getEffectiveRules(): ?array {
        return $this->effectiveRules;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'effectiveRules' => function (self $o, ParseNode $n) { $o->setEffectiveRules($n->getCollectionOfObjectValues(UnifiedRoleManagementPolicyRule::class)); },
            'isOrganizationDefault' => function (self $o, ParseNode $n) { $o->setIsOrganizationDefault($n->getBooleanValue()); },
            'lastModifiedBy' => function (self $o, ParseNode $n) { $o->setLastModifiedBy($n->getObjectValue(Identity::class)); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'rules' => function (self $o, ParseNode $n) { $o->setRules($n->getCollectionOfObjectValues(UnifiedRoleManagementPolicyRule::class)); },
            'scopeId' => function (self $o, ParseNode $n) { $o->setScopeId($n->getStringValue()); },
            'scopeType' => function (self $o, ParseNode $n) { $o->setScopeType($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isOrganizationDefault property value. This can only be set to true for a single tenant wide policy which will apply to all scopes and roles. Set the scopeId to '/' and scopeType to Directory.
     * @return bool|null
    */
    public function getIsOrganizationDefault(): ?bool {
        return $this->isOrganizationDefault;
    }

    /**
     * Gets the lastModifiedBy property value. The identity who last modified the role setting.
     * @return Identity|null
    */
    public function getLastModifiedBy(): ?Identity {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. The time when the role setting was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the rules property value. The collection of rules like approval rules and expiration rules.
     * @return array<UnifiedRoleManagementPolicyRule>|null
    */
    public function getRules(): ?array {
        return $this->rules;
    }

    /**
     * Gets the scopeId property value. The id of the scope where the policy is created. Can be / for the tenant or a group ID. Required.
     * @return string|null
    */
    public function getScopeId(): ?string {
        return $this->scopeId;
    }

    /**
     * Gets the scopeType property value. The type of the scope where the policy is created. One of Directory, DirectoryRole. Required.
     * @return string|null
    */
    public function getScopeType(): ?string {
        return $this->scopeType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('effectiveRules', $this->effectiveRules);
        $writer->writeBooleanValue('isOrganizationDefault', $this->isOrganizationDefault);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeCollectionOfObjectValues('rules', $this->rules);
        $writer->writeStringValue('scopeId', $this->scopeId);
        $writer->writeStringValue('scopeType', $this->scopeType);
    }

    /**
     * Sets the description property value. Description for the policy.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Display name for the policy.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the effectiveRules property value. Not implemented. The list of effective rules like approval rules and expiration rules evaluated based on inherited referenced rules. For example, if there is a tenant-wide policy to enforce enabling an approval rule, the effective rule will be to enable approval even if the policy has a rule to disable approval.
     *  @param array<UnifiedRoleManagementPolicyRule>|null $value Value to set for the effectiveRules property.
    */
    public function setEffectiveRules(?array $value ): void {
        $this->effectiveRules = $value;
    }

    /**
     * Sets the isOrganizationDefault property value. This can only be set to true for a single tenant wide policy which will apply to all scopes and roles. Set the scopeId to '/' and scopeType to Directory.
     *  @param bool|null $value Value to set for the isOrganizationDefault property.
    */
    public function setIsOrganizationDefault(?bool $value ): void {
        $this->isOrganizationDefault = $value;
    }

    /**
     * Sets the lastModifiedBy property value. The identity who last modified the role setting.
     *  @param Identity|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?Identity $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The time when the role setting was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the rules property value. The collection of rules like approval rules and expiration rules.
     *  @param array<UnifiedRoleManagementPolicyRule>|null $value Value to set for the rules property.
    */
    public function setRules(?array $value ): void {
        $this->rules = $value;
    }

    /**
     * Sets the scopeId property value. The id of the scope where the policy is created. Can be / for the tenant or a group ID. Required.
     *  @param string|null $value Value to set for the scopeId property.
    */
    public function setScopeId(?string $value ): void {
        $this->scopeId = $value;
    }

    /**
     * Sets the scopeType property value. The type of the scope where the policy is created. One of Directory, DirectoryRole. Required.
     *  @param string|null $value Value to set for the scopeType property.
    */
    public function setScopeType(?string $value ): void {
        $this->scopeType = $value;
    }

}
