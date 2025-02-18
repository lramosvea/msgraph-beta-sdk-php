<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ParticipantJoiningNotification extends Entity implements Parsable 
{
    /**
     * @var Call|null $call The call property
    */
    private ?Call $call = null;
    
    /**
     * Instantiates a new ParticipantJoiningNotification and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.participantJoiningNotification');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ParticipantJoiningNotification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ParticipantJoiningNotification {
        return new ParticipantJoiningNotification();
    }

    /**
     * Gets the call property value. The call property
     * @return Call|null
    */
    public function getCall(): ?Call {
        return $this->call;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'call' => function (ParseNode $n) use ($o) { $o->setCall($n->getObjectValue(array(Call::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('call', $this->call);
    }

    /**
     * Sets the call property value. The call property
     *  @param Call|null $value Value to set for the call property.
    */
    public function setCall(?Call $value ): void {
        $this->call = $value;
    }

}
