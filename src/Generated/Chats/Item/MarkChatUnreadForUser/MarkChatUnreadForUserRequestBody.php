<?php

namespace Microsoft\Graph\Beta\Generated\Chats\Item\MarkChatUnreadForUser;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\TeamworkUserIdentity;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MarkChatUnreadForUserRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var DateTime|null $lastMessageReadDateTime  */
    private ?DateTime $lastMessageReadDateTime = null;
    
    /** @var string|null $tenantId  */
    private ?string $tenantId = null;
    
    /** @var TeamworkUserIdentity|null $user  */
    private ?TeamworkUserIdentity $user = null;
    
    /**
     * Instantiates a new markChatUnreadForUserRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MarkChatUnreadForUserRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): MarkChatUnreadForUserRequestBody {
        return new MarkChatUnreadForUserRequestBody();
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
            'lastMessageReadDateTime' => function (self $o, ParseNode $n) { $o->setLastMessageReadDateTime($n->getDateTimeValue()); },
            'tenantId' => function (self $o, ParseNode $n) { $o->setTenantId($n->getStringValue()); },
            'user' => function (self $o, ParseNode $n) { $o->setUser($n->getObjectValue(TeamworkUserIdentity::class)); },
        ];
    }

    /**
     * Gets the lastMessageReadDateTime property value. 
     * @return DateTime|null
    */
    public function getLastMessageReadDateTime(): ?DateTime {
        return $this->lastMessageReadDateTime;
    }

    /**
     * Gets the tenantId property value. 
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Gets the user property value. 
     * @return TeamworkUserIdentity|null
    */
    public function getUser(): ?TeamworkUserIdentity {
        return $this->user;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('lastMessageReadDateTime', $this->lastMessageReadDateTime);
        $writer->writeStringValue('tenantId', $this->tenantId);
        $writer->writeObjectValue('user', $this->user);
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
     * Sets the lastMessageReadDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastMessageReadDateTime property.
    */
    public function setLastMessageReadDateTime(?DateTime $value ): void {
        $this->lastMessageReadDateTime = $value;
    }

    /**
     * Sets the tenantId property value. 
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

    /**
     * Sets the user property value. 
     *  @param TeamworkUserIdentity|null $value Value to set for the user property.
    */
    public function setUser(?TeamworkUserIdentity $value ): void {
        $this->user = $value;
    }

}
