<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AttendeeBase extends Recipient 
{
    /** @var AttendeeType|null $type The type of attendee. The possible values are: required, optional, resource. Currently if the attendee is a person, findMeetingTimes always considers the person is of the Required type. */
    private ?AttendeeType $type = null;
    
    /**
     * Instantiates a new attendeeBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttendeeBase
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AttendeeBase {
        return new AttendeeBase();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'type' => function (self $o, ParseNode $n) { $o->setType($n->getEnumValue(AttendeeType::class)); },
        ]);
    }

    /**
     * Gets the type property value. The type of attendee. The possible values are: required, optional, resource. Currently if the attendee is a person, findMeetingTimes always considers the person is of the Required type.
     * @return AttendeeType|null
    */
    public function getType(): ?AttendeeType {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('type', $this->type);
    }

    /**
     * Sets the type property value. The type of attendee. The possible values are: required, optional, resource. Currently if the attendee is a person, findMeetingTimes always considers the person is of the Required type.
     *  @param AttendeeType|null $value Value to set for the type property.
    */
    public function setType(?AttendeeType $value ): void {
        $this->type = $value;
    }

}
