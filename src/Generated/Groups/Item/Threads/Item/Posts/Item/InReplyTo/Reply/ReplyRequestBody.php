<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item\Threads\Item\Posts\Item\InReplyTo\Reply;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Post;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ReplyRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var Post|null $Post  */
    private ?Post $post = null;
    
    /**
     * Instantiates a new replyRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReplyRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ReplyRequestBody {
        return new ReplyRequestBody();
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
            'post' => function (self $o, ParseNode $n) { $o->setPost($n->getObjectValue(Post::class)); },
        ];
    }

    /**
     * Gets the post property value. 
     * @return Post|null
    */
    public function getPost(): ?Post {
        return $this->post;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('post', $this->post);
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
     * Sets the post property value. 
     *  @param Post|null $value Value to set for the Post property.
    */
    public function setPost(?Post $value ): void {
        $this->post = $value;
    }

}
