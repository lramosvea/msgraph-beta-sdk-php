<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class TaskFileAttachment extends AttachmentBase implements Parsable 
{
    /**
     * @var StreamInterface|null $contentBytes The contentBytes property
    */
    private ?StreamInterface $contentBytes = null;
    
    /**
     * Instantiates a new TaskFileAttachment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TaskFileAttachment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TaskFileAttachment {
        return new TaskFileAttachment();
    }

    /**
     * Gets the contentBytes property value. The contentBytes property
     * @return StreamInterface|null
    */
    public function getContentBytes(): ?StreamInterface {
        return $this->contentBytes;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contentBytes' => function (ParseNode $n) use ($o) { $o->setContentBytes($n->getBinaryContent()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('contentBytes', $this->contentBytes);
    }

    /**
     * Sets the contentBytes property value. The contentBytes property
     *  @param StreamInterface|null $value Value to set for the contentBytes property.
    */
    public function setContentBytes(?StreamInterface $value ): void {
        $this->contentBytes = $value;
    }

}
