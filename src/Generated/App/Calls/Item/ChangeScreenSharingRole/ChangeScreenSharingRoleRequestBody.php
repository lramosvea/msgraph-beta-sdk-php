<?php

namespace Microsoft\Graph\Beta\Generated\App\Calls\Item\ChangeScreenSharingRole;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ScreenSharingRole;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChangeScreenSharingRoleRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var ScreenSharingRole|null $role  */
    private ?ScreenSharingRole $role = null;
    
    /**
     * Instantiates a new changeScreenSharingRoleRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChangeScreenSharingRoleRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ChangeScreenSharingRoleRequestBody {
        return new ChangeScreenSharingRoleRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'role' => function (self $o, ParseNode $n) { $o->setRole($n->getEnumValue(ScreenSharingRole::class)); },
        ];
    }

    /**
     * Gets the role property value. 
     * @return ScreenSharingRole|null
    */
    public function getRole(): ?ScreenSharingRole {
        return $this->role;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('role', $this->role);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the role property value. 
     *  @param ScreenSharingRole|null $value Value to set for the role property.
    */
    public function setRole(?ScreenSharingRole $value ): void {
        $this->role = $value;
    }

}
