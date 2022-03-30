<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MonitoringRule implements AdditionalDataHolder, Parsable 
{
    /** @var MonitoringAction|null $action The action triggered when the threshold for the given signal is met. Possible values are: alertError, pauseDeployment, unknownFutureValue. */
    private ?MonitoringAction $action = null;
    
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var MonitoringSignal|null $signal The signal to monitor. Possible values are: rollback, unknownFutureValue. */
    private ?MonitoringSignal $signal = null;
    
    /** @var int|null $threshold The threshold for a signal at which to trigger action. An integer from 1 to 100 (inclusive). */
    private ?int $threshold = null;
    
    /**
     * Instantiates a new monitoringRule and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MonitoringRule
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): MonitoringRule {
        return new MonitoringRule();
    }

    /**
     * Gets the action property value. The action triggered when the threshold for the given signal is met. Possible values are: alertError, pauseDeployment, unknownFutureValue.
     * @return MonitoringAction|null
    */
    public function getAction(): ?MonitoringAction {
        return $this->action;
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
            'action' => function (self $o, ParseNode $n) { $o->setAction($n->getEnumValue(MonitoringAction::class)); },
            'signal' => function (self $o, ParseNode $n) { $o->setSignal($n->getEnumValue(MonitoringSignal::class)); },
            'threshold' => function (self $o, ParseNode $n) { $o->setThreshold($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the signal property value. The signal to monitor. Possible values are: rollback, unknownFutureValue.
     * @return MonitoringSignal|null
    */
    public function getSignal(): ?MonitoringSignal {
        return $this->signal;
    }

    /**
     * Gets the threshold property value. The threshold for a signal at which to trigger action. An integer from 1 to 100 (inclusive).
     * @return int|null
    */
    public function getThreshold(): ?int {
        return $this->threshold;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('action', $this->action);
        $writer->writeEnumValue('signal', $this->signal);
        $writer->writeIntegerValue('threshold', $this->threshold);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the action property value. The action triggered when the threshold for the given signal is met. Possible values are: alertError, pauseDeployment, unknownFutureValue.
     *  @param MonitoringAction|null $value Value to set for the action property.
    */
    public function setAction(?MonitoringAction $value ): void {
        $this->action = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the signal property value. The signal to monitor. Possible values are: rollback, unknownFutureValue.
     *  @param MonitoringSignal|null $value Value to set for the signal property.
    */
    public function setSignal(?MonitoringSignal $value ): void {
        $this->signal = $value;
    }

    /**
     * Sets the threshold property value. The threshold for a signal at which to trigger action. An integer from 1 to 100 (inclusive).
     *  @param int|null $value Value to set for the threshold property.
    */
    public function setThreshold(?int $value ): void {
        $this->threshold = $value;
    }

}
