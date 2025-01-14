<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RoomList extends Place implements Parsable 
{
    /**
     * @var string|null $emailAddress The email address of the room list.
    */
    private ?string $emailAddress = null;
    
    /**
     * @var array<Room>|null $rooms The rooms property
    */
    private ?array $rooms = null;
    
    /**
     * @var array<Workspace>|null $workspaces The workspaces property
    */
    private ?array $workspaces = null;
    
    /**
     * Instantiates a new RoomList and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.roomList');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RoomList
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RoomList {
        return new RoomList();
    }

    /**
     * Gets the emailAddress property value. The email address of the room list.
     * @return string|null
    */
    public function getEmailAddress(): ?string {
        return $this->emailAddress;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'emailAddress' => function (ParseNode $n) use ($o) { $o->setEmailAddress($n->getStringValue()); },
            'rooms' => function (ParseNode $n) use ($o) { $o->setRooms($n->getCollectionOfObjectValues(array(Room::class, 'createFromDiscriminatorValue'))); },
            'workspaces' => function (ParseNode $n) use ($o) { $o->setWorkspaces($n->getCollectionOfObjectValues(array(Workspace::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the rooms property value. The rooms property
     * @return array<Room>|null
    */
    public function getRooms(): ?array {
        return $this->rooms;
    }

    /**
     * Gets the workspaces property value. The workspaces property
     * @return array<Workspace>|null
    */
    public function getWorkspaces(): ?array {
        return $this->workspaces;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('emailAddress', $this->emailAddress);
        $writer->writeCollectionOfObjectValues('rooms', $this->rooms);
        $writer->writeCollectionOfObjectValues('workspaces', $this->workspaces);
    }

    /**
     * Sets the emailAddress property value. The email address of the room list.
     *  @param string|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?string $value ): void {
        $this->emailAddress = $value;
    }

    /**
     * Sets the rooms property value. The rooms property
     *  @param array<Room>|null $value Value to set for the rooms property.
    */
    public function setRooms(?array $value ): void {
        $this->rooms = $value;
    }

    /**
     * Sets the workspaces property value. The workspaces property
     *  @param array<Workspace>|null $value Value to set for the workspaces property.
    */
    public function setWorkspaces(?array $value ): void {
        $this->workspaces = $value;
    }

}
