<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OutlookCategory extends Entity implements Parsable 
{
    /**
     * @var CategoryColor|null $color A pre-set color constant that characterizes a category, and that is mapped to one of 25 predefined colors. See the note below.
    */
    private ?CategoryColor $color = null;
    
    /**
     * @var string|null $displayName A unique name that identifies a category in the user's mailbox. After a category is created, the name cannot be changed. Read-only.
    */
    private ?string $displayName = null;
    
    /**
     * Instantiates a new outlookCategory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.outlookCategory');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OutlookCategory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OutlookCategory {
        return new OutlookCategory();
    }

    /**
     * Gets the color property value. A pre-set color constant that characterizes a category, and that is mapped to one of 25 predefined colors. See the note below.
     * @return CategoryColor|null
    */
    public function getColor(): ?CategoryColor {
        return $this->color;
    }

    /**
     * Gets the displayName property value. A unique name that identifies a category in the user's mailbox. After a category is created, the name cannot be changed. Read-only.
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'color' => function (ParseNode $n) use ($o) { $o->setColor($n->getEnumValue(CategoryColor::class)); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('color', $this->color);
        $writer->writeStringValue('displayName', $this->displayName);
    }

    /**
     * Sets the color property value. A pre-set color constant that characterizes a category, and that is mapped to one of 25 predefined colors. See the note below.
     *  @param CategoryColor|null $value Value to set for the color property.
    */
    public function setColor(?CategoryColor $value ): void {
        $this->color = $value;
    }

    /**
     * Sets the displayName property value. A unique name that identifies a category in the user's mailbox. After a category is created, the name cannot be changed. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

}
