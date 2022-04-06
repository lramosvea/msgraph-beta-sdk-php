<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExtractSensitivityLabelsResult implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<SensitivityLabelAssignment>|null $labels The labels property */
    private ?array $labels = null;
    
    /**
     * Instantiates a new extractSensitivityLabelsResult and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExtractSensitivityLabelsResult
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ExtractSensitivityLabelsResult {
        return new ExtractSensitivityLabelsResult();
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
            'labels' => function (self $o, ParseNode $n) { $o->setLabels($n->getCollectionOfObjectValues(SensitivityLabelAssignment::class)); },
        ];
    }

    /**
     * Gets the labels property value. The labels property
     * @return array<SensitivityLabelAssignment>|null
    */
    public function getLabels(): ?array {
        return $this->labels;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('labels', $this->labels);
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
     * Sets the labels property value. The labels property
     *  @param array<SensitivityLabelAssignment>|null $value Value to set for the labels property.
    */
    public function setLabels(?array $value ): void {
        $this->labels = $value;
    }

}
