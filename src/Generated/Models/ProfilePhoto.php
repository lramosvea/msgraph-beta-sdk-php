<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProfilePhoto extends Entity implements Parsable 
{
    /**
     * @var int|null $height The height of the photo. Read-only.
    */
    private ?int $height = null;
    
    /**
     * @var int|null $width The width of the photo. Read-only.
    */
    private ?int $width = null;
    
    /**
     * Instantiates a new profilePhoto and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.profilePhoto');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProfilePhoto
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProfilePhoto {
        return new ProfilePhoto();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'height' => function (ParseNode $n) use ($o) { $o->setHeight($n->getIntegerValue()); },
            'width' => function (ParseNode $n) use ($o) { $o->setWidth($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the height property value. The height of the photo. Read-only.
     * @return int|null
    */
    public function getHeight(): ?int {
        return $this->height;
    }

    /**
     * Gets the width property value. The width of the photo. Read-only.
     * @return int|null
    */
    public function getWidth(): ?int {
        return $this->width;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('height', $this->height);
        $writer->writeIntegerValue('width', $this->width);
    }

    /**
     * Sets the height property value. The height of the photo. Read-only.
     *  @param int|null $value Value to set for the height property.
    */
    public function setHeight(?int $value ): void {
        $this->height = $value;
    }

    /**
     * Sets the width property value. The width of the photo. Read-only.
     *  @param int|null $value Value to set for the width property.
    */
    public function setWidth(?int $value ): void {
        $this->width = $value;
    }

}
