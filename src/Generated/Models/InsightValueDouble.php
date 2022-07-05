<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InsightValueDouble extends UserExperienceAnalyticsInsightValue implements Parsable 
{
    /**
     * @var float|null $value Not yet documented
    */
    private ?float $value = null;
    
    /**
     * Instantiates a new InsightValueDouble and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InsightValueDouble
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InsightValueDouble {
        return new InsightValueDouble();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'value' => function (ParseNode $n) use ($o) { $o->setValue($n->getFloatValue()); },
        ]);
    }

    /**
     * Gets the value property value. Not yet documented
     * @return float|null
    */
    public function getValue(): ?float {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeFloatValue('value', $this->value);
    }

    /**
     * Sets the value property value. Not yet documented
     *  @param float|null $value Value to set for the value property.
    */
    public function setValue(?float $value ): void {
        $this->value = $value;
    }

}
