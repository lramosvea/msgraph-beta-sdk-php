<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EntitlementManagementSettings extends Entity 
{
    /** @var int|null $daysUntilExternalUserDeletedAfterBlocked If externalUserLifecycleAction is BlockSignInAndDelete, the number of days after an external user is blocked from sign in before their account is deleted. */
    private ?int $daysUntilExternalUserDeletedAfterBlocked = null;
    
    /** @var string|null $externalUserLifecycleAction Automatic action that the service should take when an external user's last access package assignment is removed. The possible values are: none, blockSignIn, blockSignInAndDelete, unknownFutureValue. */
    private ?string $externalUserLifecycleAction = null;
    
    /**
     * Instantiates a new entitlementManagementSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EntitlementManagementSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): EntitlementManagementSettings {
        return new EntitlementManagementSettings();
    }

    /**
     * Gets the daysUntilExternalUserDeletedAfterBlocked property value. If externalUserLifecycleAction is BlockSignInAndDelete, the number of days after an external user is blocked from sign in before their account is deleted.
     * @return int|null
    */
    public function getDaysUntilExternalUserDeletedAfterBlocked(): ?int {
        return $this->daysUntilExternalUserDeletedAfterBlocked;
    }

    /**
     * Gets the externalUserLifecycleAction property value. Automatic action that the service should take when an external user's last access package assignment is removed. The possible values are: none, blockSignIn, blockSignInAndDelete, unknownFutureValue.
     * @return string|null
    */
    public function getExternalUserLifecycleAction(): ?string {
        return $this->externalUserLifecycleAction;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'daysUntilExternalUserDeletedAfterBlocked' => function (self $o, ParseNode $n) { $o->setDaysUntilExternalUserDeletedAfterBlocked($n->getIntegerValue()); },
            'externalUserLifecycleAction' => function (self $o, ParseNode $n) { $o->setExternalUserLifecycleAction($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('daysUntilExternalUserDeletedAfterBlocked', $this->daysUntilExternalUserDeletedAfterBlocked);
        $writer->writeStringValue('externalUserLifecycleAction', $this->externalUserLifecycleAction);
    }

    /**
     * Sets the daysUntilExternalUserDeletedAfterBlocked property value. If externalUserLifecycleAction is BlockSignInAndDelete, the number of days after an external user is blocked from sign in before their account is deleted.
     *  @param int|null $value Value to set for the daysUntilExternalUserDeletedAfterBlocked property.
    */
    public function setDaysUntilExternalUserDeletedAfterBlocked(?int $value ): void {
        $this->daysUntilExternalUserDeletedAfterBlocked = $value;
    }

    /**
     * Sets the externalUserLifecycleAction property value. Automatic action that the service should take when an external user's last access package assignment is removed. The possible values are: none, blockSignIn, blockSignInAndDelete, unknownFutureValue.
     *  @param string|null $value Value to set for the externalUserLifecycleAction property.
    */
    public function setExternalUserLifecycleAction(?string $value ): void {
        $this->externalUserLifecycleAction = $value;
    }

}
