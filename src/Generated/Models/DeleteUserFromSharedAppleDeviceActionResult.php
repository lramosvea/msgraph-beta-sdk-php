<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeleteUserFromSharedAppleDeviceActionResult extends DeviceActionResult implements Parsable 
{
    /**
     * @var string|null $userPrincipalName User principal name of the user to be deleted
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new DeleteUserFromSharedAppleDeviceActionResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deleteUserFromSharedAppleDeviceActionResult');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeleteUserFromSharedAppleDeviceActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeleteUserFromSharedAppleDeviceActionResult {
        return new DeleteUserFromSharedAppleDeviceActionResult();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the userPrincipalName property value. User principal name of the user to be deleted
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the userPrincipalName property value. User principal name of the user to be deleted
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
