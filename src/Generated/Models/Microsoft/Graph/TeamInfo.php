<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamInfo extends Entity 
{
    /** @var string|null $displayName  */
    private ?string $displayName = null;
    
    /** @var Team|null $team  */
    private ?Team $team = null;
    
    /** @var string|null $tenantId  */
    private ?string $tenantId = null;
    
    /**
     * Instantiates a new teamInfo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamInfo
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TeamInfo {
        return new TeamInfo();
    }

    /**
     * Gets the displayName property value. 
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'team' => function (self $o, ParseNode $n) { $o->setTeam($n->getObjectValue(Team::class)); },
            'tenantId' => function (self $o, ParseNode $n) { $o->setTenantId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the team property value. 
     * @return Team|null
    */
    public function getTeam(): ?Team {
        return $this->team;
    }

    /**
     * Gets the tenantId property value. 
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('team', $this->team);
        $writer->writeStringValue('tenantId', $this->tenantId);
    }

    /**
     * Sets the displayName property value. 
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the team property value. 
     *  @param Team|null $value Value to set for the team property.
    */
    public function setTeam(?Team $value ): void {
        $this->team = $value;
    }

    /**
     * Sets the tenantId property value. 
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

}
