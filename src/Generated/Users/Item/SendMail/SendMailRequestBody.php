<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\SendMail;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Message;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SendMailRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var Message|null $Message  */
    private ?Message $message = null;
    
    /** @var bool|null $SaveToSentItems  */
    private ?bool $saveToSentItems = null;
    
    /**
     * Instantiates a new sendMailRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SendMailRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SendMailRequestBody {
        return new SendMailRequestBody();
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
            'message' => function (self $o, ParseNode $n) { $o->setMessage($n->getObjectValue(Message::class)); },
            'saveToSentItems' => function (self $o, ParseNode $n) { $o->setSaveToSentItems($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the message property value. 
     * @return Message|null
    */
    public function getMessage(): ?Message {
        return $this->message;
    }

    /**
     * Gets the saveToSentItems property value. 
     * @return bool|null
    */
    public function getSaveToSentItems(): ?bool {
        return $this->saveToSentItems;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('message', $this->message);
        $writer->writeBooleanValue('saveToSentItems', $this->saveToSentItems);
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
     * Sets the message property value. 
     *  @param Message|null $value Value to set for the Message property.
    */
    public function setMessage(?Message $value ): void {
        $this->message = $value;
    }

    /**
     * Sets the saveToSentItems property value. 
     *  @param bool|null $value Value to set for the SaveToSentItems property.
    */
    public function setSaveToSentItems(?bool $value ): void {
        $this->saveToSentItems = $value;
    }

}
