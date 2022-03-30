<?php

namespace Microsoft\Graph\Beta\Generated\Workbooks\Item\CreateUploadSession;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\DriveItemUploadableProperties;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateUploadSessionRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var DriveItemUploadableProperties|null $item  */
    private ?DriveItemUploadableProperties $item = null;
    
    /**
     * Instantiates a new createUploadSessionRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateUploadSessionRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CreateUploadSessionRequestBody {
        return new CreateUploadSessionRequestBody();
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
            'item' => function (self $o, ParseNode $n) { $o->setItem($n->getObjectValue(DriveItemUploadableProperties::class)); },
        ];
    }

    /**
     * Gets the item property value. 
     * @return DriveItemUploadableProperties|null
    */
    public function getItem(): ?DriveItemUploadableProperties {
        return $this->item;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('item', $this->item);
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
     * Sets the item property value. 
     *  @param DriveItemUploadableProperties|null $value Value to set for the item property.
    */
    public function setItem(?DriveItemUploadableProperties $value ): void {
        $this->item = $value;
    }

}
