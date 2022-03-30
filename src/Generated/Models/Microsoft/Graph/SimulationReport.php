<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SimulationReport implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var SimulationReportOverview|null $overview Overview of an attack simulation and training campaign. */
    private ?SimulationReportOverview $overview = null;
    
    /** @var array<UserSimulationDetails>|null $simulationUsers Represents users of a tenant and their online actions in an attack simulation and training campaign. */
    private ?array $simulationUsers = null;
    
    /**
     * Instantiates a new simulationReport and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SimulationReport
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SimulationReport {
        return new SimulationReport();
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
            'overview' => function (self $o, ParseNode $n) { $o->setOverview($n->getObjectValue(SimulationReportOverview::class)); },
            'simulationUsers' => function (self $o, ParseNode $n) { $o->setSimulationUsers($n->getCollectionOfObjectValues(UserSimulationDetails::class)); },
        ];
    }

    /**
     * Gets the overview property value. Overview of an attack simulation and training campaign.
     * @return SimulationReportOverview|null
    */
    public function getOverview(): ?SimulationReportOverview {
        return $this->overview;
    }

    /**
     * Gets the simulationUsers property value. Represents users of a tenant and their online actions in an attack simulation and training campaign.
     * @return array<UserSimulationDetails>|null
    */
    public function getSimulationUsers(): ?array {
        return $this->simulationUsers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('overview', $this->overview);
        $writer->writeCollectionOfObjectValues('simulationUsers', $this->simulationUsers);
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
     * Sets the overview property value. Overview of an attack simulation and training campaign.
     *  @param SimulationReportOverview|null $value Value to set for the overview property.
    */
    public function setOverview(?SimulationReportOverview $value ): void {
        $this->overview = $value;
    }

    /**
     * Sets the simulationUsers property value. Represents users of a tenant and their online actions in an attack simulation and training campaign.
     *  @param array<UserSimulationDetails>|null $value Value to set for the simulationUsers property.
    */
    public function setSimulationUsers(?array $value ): void {
        $this->simulationUsers = $value;
    }

}
