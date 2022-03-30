<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SimulationReportOverview implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<RecommendedAction>|null $recommendedActions List of recommended actions for a tenant to improve its security posture based on the attack simulation and training campaign attack type. */
    private ?array $recommendedActions = null;
    
    /** @var int|null $resolvedTargetsCount Number of valid users in the attack simulation and training campaign. */
    private ?int $resolvedTargetsCount = null;
    
    /** @var SimulationEventsContent|null $simulationEventsContent Summary of simulation events in the attack simulation and training campaign. */
    private ?SimulationEventsContent $simulationEventsContent = null;
    
    /** @var TrainingEventsContent|null $trainingEventsContent Summary of assigned trainings in the attack simulation and training campaign. */
    private ?TrainingEventsContent $trainingEventsContent = null;
    
    /**
     * Instantiates a new simulationReportOverview and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SimulationReportOverview
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SimulationReportOverview {
        return new SimulationReportOverview();
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
            'recommendedActions' => function (self $o, ParseNode $n) { $o->setRecommendedActions($n->getCollectionOfObjectValues(RecommendedAction::class)); },
            'resolvedTargetsCount' => function (self $o, ParseNode $n) { $o->setResolvedTargetsCount($n->getIntegerValue()); },
            'simulationEventsContent' => function (self $o, ParseNode $n) { $o->setSimulationEventsContent($n->getObjectValue(SimulationEventsContent::class)); },
            'trainingEventsContent' => function (self $o, ParseNode $n) { $o->setTrainingEventsContent($n->getObjectValue(TrainingEventsContent::class)); },
        ];
    }

    /**
     * Gets the recommendedActions property value. List of recommended actions for a tenant to improve its security posture based on the attack simulation and training campaign attack type.
     * @return array<RecommendedAction>|null
    */
    public function getRecommendedActions(): ?array {
        return $this->recommendedActions;
    }

    /**
     * Gets the resolvedTargetsCount property value. Number of valid users in the attack simulation and training campaign.
     * @return int|null
    */
    public function getResolvedTargetsCount(): ?int {
        return $this->resolvedTargetsCount;
    }

    /**
     * Gets the simulationEventsContent property value. Summary of simulation events in the attack simulation and training campaign.
     * @return SimulationEventsContent|null
    */
    public function getSimulationEventsContent(): ?SimulationEventsContent {
        return $this->simulationEventsContent;
    }

    /**
     * Gets the trainingEventsContent property value. Summary of assigned trainings in the attack simulation and training campaign.
     * @return TrainingEventsContent|null
    */
    public function getTrainingEventsContent(): ?TrainingEventsContent {
        return $this->trainingEventsContent;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('recommendedActions', $this->recommendedActions);
        $writer->writeIntegerValue('resolvedTargetsCount', $this->resolvedTargetsCount);
        $writer->writeObjectValue('simulationEventsContent', $this->simulationEventsContent);
        $writer->writeObjectValue('trainingEventsContent', $this->trainingEventsContent);
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
     * Sets the recommendedActions property value. List of recommended actions for a tenant to improve its security posture based on the attack simulation and training campaign attack type.
     *  @param array<RecommendedAction>|null $value Value to set for the recommendedActions property.
    */
    public function setRecommendedActions(?array $value ): void {
        $this->recommendedActions = $value;
    }

    /**
     * Sets the resolvedTargetsCount property value. Number of valid users in the attack simulation and training campaign.
     *  @param int|null $value Value to set for the resolvedTargetsCount property.
    */
    public function setResolvedTargetsCount(?int $value ): void {
        $this->resolvedTargetsCount = $value;
    }

    /**
     * Sets the simulationEventsContent property value. Summary of simulation events in the attack simulation and training campaign.
     *  @param SimulationEventsContent|null $value Value to set for the simulationEventsContent property.
    */
    public function setSimulationEventsContent(?SimulationEventsContent $value ): void {
        $this->simulationEventsContent = $value;
    }

    /**
     * Sets the trainingEventsContent property value. Summary of assigned trainings in the attack simulation and training campaign.
     *  @param TrainingEventsContent|null $value Value to set for the trainingEventsContent property.
    */
    public function setTrainingEventsContent(?TrainingEventsContent $value ): void {
        $this->trainingEventsContent = $value;
    }

}
