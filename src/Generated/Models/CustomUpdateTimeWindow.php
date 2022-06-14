<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;

class CustomUpdateTimeWindow implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DayOfWeek|null $endDay End day of the time window. Possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday.
    */
    private ?DayOfWeek $endDay = null;
    
    /**
     * @var Time|null $endTime End time of the time window
    */
    private ?Time $endTime = null;
    
    /**
     * @var DayOfWeek|null $startDay Start day of the time window. Possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday.
    */
    private ?DayOfWeek $startDay = null;
    
    /**
     * @var Time|null $startTime Start time of the time window
    */
    private ?Time $startTime = null;
    
    /**
     * Instantiates a new customUpdateTimeWindow and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomUpdateTimeWindow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomUpdateTimeWindow {
        return new CustomUpdateTimeWindow();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the endDay property value. End day of the time window. Possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday.
     * @return DayOfWeek|null
    */
    public function getEndDay(): ?DayOfWeek {
        return $this->endDay;
    }

    /**
     * Gets the endTime property value. End time of the time window
     * @return Time|null
    */
    public function getEndTime(): ?Time {
        return $this->endTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'endDay' => function (ParseNode $n) use ($o) { $o->setEndDay($n->getEnumValue(DayOfWeek::class)); },
            'endTime' => function (ParseNode $n) use ($o) { $o->setEndTime($n->getTimeValue()); },
            'startDay' => function (ParseNode $n) use ($o) { $o->setStartDay($n->getEnumValue(DayOfWeek::class)); },
            'startTime' => function (ParseNode $n) use ($o) { $o->setStartTime($n->getTimeValue()); },
        ];
    }

    /**
     * Gets the startDay property value. Start day of the time window. Possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday.
     * @return DayOfWeek|null
    */
    public function getStartDay(): ?DayOfWeek {
        return $this->startDay;
    }

    /**
     * Gets the startTime property value. Start time of the time window
     * @return Time|null
    */
    public function getStartTime(): ?Time {
        return $this->startTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('endDay', $this->endDay);
        $writer->writeTimeValue('endTime', $this->endTime);
        $writer->writeEnumValue('startDay', $this->startDay);
        $writer->writeTimeValue('startTime', $this->startTime);
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
     * Sets the endDay property value. End day of the time window. Possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday.
     *  @param DayOfWeek|null $value Value to set for the endDay property.
    */
    public function setEndDay(?DayOfWeek $value ): void {
        $this->endDay = $value;
    }

    /**
     * Sets the endTime property value. End time of the time window
     *  @param Time|null $value Value to set for the endTime property.
    */
    public function setEndTime(?Time $value ): void {
        $this->endTime = $value;
    }

    /**
     * Sets the startDay property value. Start day of the time window. Possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday.
     *  @param DayOfWeek|null $value Value to set for the startDay property.
    */
    public function setStartDay(?DayOfWeek $value ): void {
        $this->startDay = $value;
    }

    /**
     * Sets the startTime property value. Start time of the time window
     *  @param Time|null $value Value to set for the startTime property.
    */
    public function setStartTime(?Time $value ): void {
        $this->startTime = $value;
    }

}
