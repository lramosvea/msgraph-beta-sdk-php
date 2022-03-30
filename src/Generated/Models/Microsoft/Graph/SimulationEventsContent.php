<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SimulationEventsContent implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var float|null $compromisedRate Actual percentage of users who fell for the simulated attack in an attack simulation and training campaign. */
    private ?float $compromisedRate = null;
    
    /** @var array<SimulationEvent>|null $events List of simulation events in an attack simulation and training campaign. */
    private ?array $events = null;
    
    /**
     * Instantiates a new simulationEventsContent and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SimulationEventsContent
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SimulationEventsContent {
        return new SimulationEventsContent();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the compromisedRate property value. Actual percentage of users who fell for the simulated attack in an attack simulation and training campaign.
     * @return float|null
    */
    public function getCompromisedRate(): ?float {
        return $this->compromisedRate;
    }

    /**
     * Gets the events property value. List of simulation events in an attack simulation and training campaign.
     * @return array<SimulationEvent>|null
    */
    public function getEvents(): ?array {
        return $this->events;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'compromisedRate' => function (self $o, ParseNode $n) { $o->setCompromisedRate($n->getFloatValue()); },
            'events' => function (self $o, ParseNode $n) { $o->setEvents($n->getCollectionOfObjectValues(SimulationEvent::class)); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('compromisedRate', $this->compromisedRate);
        $writer->writeCollectionOfObjectValues('events', $this->events);
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
     * Sets the compromisedRate property value. Actual percentage of users who fell for the simulated attack in an attack simulation and training campaign.
     *  @param float|null $value Value to set for the compromisedRate property.
    */
    public function setCompromisedRate(?float $value ): void {
        $this->compromisedRate = $value;
    }

    /**
     * Sets the events property value. List of simulation events in an attack simulation and training campaign.
     *  @param array<SimulationEvent>|null $value Value to set for the events property.
    */
    public function setEvents(?array $value ): void {
        $this->events = $value;
    }

}
