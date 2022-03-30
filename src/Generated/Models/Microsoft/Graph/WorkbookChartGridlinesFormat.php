<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartGridlinesFormat extends Entity 
{
    /** @var WorkbookChartLineFormat|null $line Represents chart line formatting. Read-only. */
    private ?WorkbookChartLineFormat $line = null;
    
    /**
     * Instantiates a new workbookChartGridlinesFormat and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookChartGridlinesFormat
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartGridlinesFormat {
        return new WorkbookChartGridlinesFormat();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'line' => function (self $o, ParseNode $n) { $o->setLine($n->getObjectValue(WorkbookChartLineFormat::class)); },
        ]);
    }

    /**
     * Gets the line property value. Represents chart line formatting. Read-only.
     * @return WorkbookChartLineFormat|null
    */
    public function getLine(): ?WorkbookChartLineFormat {
        return $this->line;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('line', $this->line);
    }

    /**
     * Sets the line property value. Represents chart line formatting. Read-only.
     *  @param WorkbookChartLineFormat|null $value Value to set for the line property.
    */
    public function setLine(?WorkbookChartLineFormat $value ): void {
        $this->line = $value;
    }

}
