<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OpenShiftChangeRequest extends ScheduleChangeRequest implements Parsable 
{
    /**
     * @var string|null $openShiftId ID for the open shift.
    */
    private ?string $openShiftId = null;
    
    /**
     * Instantiates a new OpenShiftChangeRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.openShiftChangeRequest');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OpenShiftChangeRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OpenShiftChangeRequest {
        return new OpenShiftChangeRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'openShiftId' => function (ParseNode $n) use ($o) { $o->setOpenShiftId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the openShiftId property value. ID for the open shift.
     * @return string|null
    */
    public function getOpenShiftId(): ?string {
        return $this->openShiftId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('openShiftId', $this->openShiftId);
    }

    /**
     * Sets the openShiftId property value. ID for the open shift.
     *  @param string|null $value Value to set for the openShiftId property.
    */
    public function setOpenShiftId(?string $value ): void {
        $this->openShiftId = $value;
    }

}
