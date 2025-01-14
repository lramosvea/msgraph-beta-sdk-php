<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharedWithChannelTeamInfo extends TeamInfo implements Parsable 
{
    /**
     * @var array<ConversationMember>|null $allowedMembers A collection of team members who have access to the shared channel.
    */
    private ?array $allowedMembers = null;
    
    /**
     * @var bool|null $isHostTeam Indicates whether the team is the host of the channel.
    */
    private ?bool $isHostTeam = null;
    
    /**
     * Instantiates a new SharedWithChannelTeamInfo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.sharedWithChannelTeamInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharedWithChannelTeamInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharedWithChannelTeamInfo {
        return new SharedWithChannelTeamInfo();
    }

    /**
     * Gets the allowedMembers property value. A collection of team members who have access to the shared channel.
     * @return array<ConversationMember>|null
    */
    public function getAllowedMembers(): ?array {
        return $this->allowedMembers;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedMembers' => function (ParseNode $n) use ($o) { $o->setAllowedMembers($n->getCollectionOfObjectValues(array(ConversationMember::class, 'createFromDiscriminatorValue'))); },
            'isHostTeam' => function (ParseNode $n) use ($o) { $o->setIsHostTeam($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the isHostTeam property value. Indicates whether the team is the host of the channel.
     * @return bool|null
    */
    public function getIsHostTeam(): ?bool {
        return $this->isHostTeam;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('allowedMembers', $this->allowedMembers);
        $writer->writeBooleanValue('isHostTeam', $this->isHostTeam);
    }

    /**
     * Sets the allowedMembers property value. A collection of team members who have access to the shared channel.
     *  @param array<ConversationMember>|null $value Value to set for the allowedMembers property.
    */
    public function setAllowedMembers(?array $value ): void {
        $this->allowedMembers = $value;
    }

    /**
     * Sets the isHostTeam property value. Indicates whether the team is the host of the channel.
     *  @param bool|null $value Value to set for the isHostTeam property.
    */
    public function setIsHostTeam(?bool $value ): void {
        $this->isHostTeam = $value;
    }

}
