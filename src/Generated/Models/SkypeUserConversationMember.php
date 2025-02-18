<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SkypeUserConversationMember extends ConversationMember implements Parsable 
{
    /**
     * @var string|null $skypeId Skype ID of the user.
    */
    private ?string $skypeId = null;
    
    /**
     * Instantiates a new SkypeUserConversationMember and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.skypeUserConversationMember');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SkypeUserConversationMember
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SkypeUserConversationMember {
        return new SkypeUserConversationMember();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'skypeId' => function (ParseNode $n) use ($o) { $o->setSkypeId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the skypeId property value. Skype ID of the user.
     * @return string|null
    */
    public function getSkypeId(): ?string {
        return $this->skypeId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('skypeId', $this->skypeId);
    }

    /**
     * Sets the skypeId property value. Skype ID of the user.
     *  @param string|null $value Value to set for the skypeId property.
    */
    public function setSkypeId(?string $value ): void {
        $this->skypeId = $value;
    }

}
