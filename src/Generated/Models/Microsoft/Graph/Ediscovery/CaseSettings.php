<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Ediscovery;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CaseSettings extends Entity 
{
    /** @var OcrSettings|null $ocr The OCR (Optical Character Recognition) settings for the case. */
    private ?OcrSettings $ocr = null;
    
    /** @var RedundancyDetectionSettings|null $redundancyDetection The redundancy (near duplicate and email threading) detection settings for the case. */
    private ?RedundancyDetectionSettings $redundancyDetection = null;
    
    /** @var TopicModelingSettings|null $topicModeling The Topic Modeling (Themes) settings for the case. */
    private ?TopicModelingSettings $topicModeling = null;
    
    /**
     * Instantiates a new caseSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CaseSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CaseSettings {
        return new CaseSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'ocr' => function (self $o, ParseNode $n) { $o->setOcr($n->getObjectValue(OcrSettings::class)); },
            'redundancyDetection' => function (self $o, ParseNode $n) { $o->setRedundancyDetection($n->getObjectValue(RedundancyDetectionSettings::class)); },
            'topicModeling' => function (self $o, ParseNode $n) { $o->setTopicModeling($n->getObjectValue(TopicModelingSettings::class)); },
        ]);
    }

    /**
     * Gets the ocr property value. The OCR (Optical Character Recognition) settings for the case.
     * @return OcrSettings|null
    */
    public function getOcr(): ?OcrSettings {
        return $this->ocr;
    }

    /**
     * Gets the redundancyDetection property value. The redundancy (near duplicate and email threading) detection settings for the case.
     * @return RedundancyDetectionSettings|null
    */
    public function getRedundancyDetection(): ?RedundancyDetectionSettings {
        return $this->redundancyDetection;
    }

    /**
     * Gets the topicModeling property value. The Topic Modeling (Themes) settings for the case.
     * @return TopicModelingSettings|null
    */
    public function getTopicModeling(): ?TopicModelingSettings {
        return $this->topicModeling;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('ocr', $this->ocr);
        $writer->writeObjectValue('redundancyDetection', $this->redundancyDetection);
        $writer->writeObjectValue('topicModeling', $this->topicModeling);
    }

    /**
     * Sets the ocr property value. The OCR (Optical Character Recognition) settings for the case.
     *  @param OcrSettings|null $value Value to set for the ocr property.
    */
    public function setOcr(?OcrSettings $value ): void {
        $this->ocr = $value;
    }

    /**
     * Sets the redundancyDetection property value. The redundancy (near duplicate and email threading) detection settings for the case.
     *  @param RedundancyDetectionSettings|null $value Value to set for the redundancyDetection property.
    */
    public function setRedundancyDetection(?RedundancyDetectionSettings $value ): void {
        $this->redundancyDetection = $value;
    }

    /**
     * Sets the topicModeling property value. The Topic Modeling (Themes) settings for the case.
     *  @param TopicModelingSettings|null $value Value to set for the topicModeling property.
    */
    public function setTopicModeling(?TopicModelingSettings $value ): void {
        $this->topicModeling = $value;
    }

}
