<?php

namespace Microsoft\Graph\Beta\Generated\Me\InformationProtection\Policy\Labels\EvaluateApplication;

use Microsoft\Graph\Beta\Generated\Models\ContentInfo;
use Microsoft\Graph\Beta\Generated\Models\LabelingOptions;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EvaluateApplicationPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var ContentInfo|null $contentInfo The contentInfo property
    */
    private ?ContentInfo $contentInfo = null;
    
    /**
     * @var LabelingOptions|null $labelingOptions The labelingOptions property
    */
    private ?LabelingOptions $labelingOptions = null;
    
    /**
     * Instantiates a new evaluateApplicationPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EvaluateApplicationPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EvaluateApplicationPostRequestBody {
        return new EvaluateApplicationPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the contentInfo property value. The contentInfo property
     * @return ContentInfo|null
    */
    public function getContentInfo(): ?ContentInfo {
        return $this->contentInfo;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contentInfo' => function (ParseNode $n) use ($o) { $o->setContentInfo($n->getObjectValue(array(ContentInfo::class, 'createFromDiscriminatorValue'))); },
            'labelingOptions' => function (ParseNode $n) use ($o) { $o->setLabelingOptions($n->getObjectValue(array(LabelingOptions::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the labelingOptions property value. The labelingOptions property
     * @return LabelingOptions|null
    */
    public function getLabelingOptions(): ?LabelingOptions {
        return $this->labelingOptions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('contentInfo', $this->contentInfo);
        $writer->writeObjectValue('labelingOptions', $this->labelingOptions);
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
     * Sets the contentInfo property value. The contentInfo property
     *  @param ContentInfo|null $value Value to set for the contentInfo property.
    */
    public function setContentInfo(?ContentInfo $value ): void {
        $this->contentInfo = $value;
    }

    /**
     * Sets the labelingOptions property value. The labelingOptions property
     *  @param LabelingOptions|null $value Value to set for the labelingOptions property.
    */
    public function setLabelingOptions(?LabelingOptions $value ): void {
        $this->labelingOptions = $value;
    }

}
