<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleManagementPolicyRule extends Entity implements Parsable 
{
    /**
     * @var UnifiedRoleManagementPolicyRuleTarget|null $target Not implemented. Defines details of scope that's targeted by role management policy rule. The details can include the principal type, the role assignment type, and actions affecting a role. Supports $filter (eq, ne).
    */
    private ?UnifiedRoleManagementPolicyRuleTarget $target = null;
    
    /**
     * Instantiates a new unifiedRoleManagementPolicyRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.unifiedRoleManagementPolicyRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleManagementPolicyRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleManagementPolicyRule {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.unifiedRoleManagementPolicyApprovalRule': return new UnifiedRoleManagementPolicyApprovalRule();
                case '#microsoft.graph.unifiedRoleManagementPolicyAuthenticationContextRule': return new UnifiedRoleManagementPolicyAuthenticationContextRule();
                case '#microsoft.graph.unifiedRoleManagementPolicyEnablementRule': return new UnifiedRoleManagementPolicyEnablementRule();
                case '#microsoft.graph.unifiedRoleManagementPolicyExpirationRule': return new UnifiedRoleManagementPolicyExpirationRule();
                case '#microsoft.graph.unifiedRoleManagementPolicyNotificationRule': return new UnifiedRoleManagementPolicyNotificationRule();
            }
        }
        return new UnifiedRoleManagementPolicyRule();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'target' => function (ParseNode $n) use ($o) { $o->setTarget($n->getObjectValue(array(UnifiedRoleManagementPolicyRuleTarget::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the target property value. Not implemented. Defines details of scope that's targeted by role management policy rule. The details can include the principal type, the role assignment type, and actions affecting a role. Supports $filter (eq, ne).
     * @return UnifiedRoleManagementPolicyRuleTarget|null
    */
    public function getTarget(): ?UnifiedRoleManagementPolicyRuleTarget {
        return $this->target;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('target', $this->target);
    }

    /**
     * Sets the target property value. Not implemented. Defines details of scope that's targeted by role management policy rule. The details can include the principal type, the role assignment type, and actions affecting a role. Supports $filter (eq, ne).
     *  @param UnifiedRoleManagementPolicyRuleTarget|null $value Value to set for the target property.
    */
    public function setTarget(?UnifiedRoleManagementPolicyRuleTarget $value ): void {
        $this->target = $value;
    }

}
