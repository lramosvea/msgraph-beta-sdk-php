<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VisualInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var ImageInfo|null $attribution Optional. JSON object used to represent an icon which represents the application used to generate the activity
    */
    private ?ImageInfo $attribution = null;
    
    /**
     * @var string|null $backgroundColor Optional. Background color used to render the activity in the UI - brand color for the application source of the activity. Must be a valid hex color
    */
    private ?string $backgroundColor = null;
    
    /**
     * @var Json|null $content Optional. Custom piece of data - JSON object used to provide custom content to render the activity in the Windows Shell UI
    */
    private ?Json $content = null;
    
    /**
     * @var string|null $description Optional. Longer text description of the user's unique activity (example: document name, first sentence, and/or metadata)
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayText Required. Short text description of the user's unique activity (for example, document name in cases where an activity refers to document creation)
    */
    private ?string $displayText = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new visualInfo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.visualInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VisualInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VisualInfo {
        return new VisualInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the attribution property value. Optional. JSON object used to represent an icon which represents the application used to generate the activity
     * @return ImageInfo|null
    */
    public function getAttribution(): ?ImageInfo {
        return $this->attribution;
    }

    /**
     * Gets the backgroundColor property value. Optional. Background color used to render the activity in the UI - brand color for the application source of the activity. Must be a valid hex color
     * @return string|null
    */
    public function getBackgroundColor(): ?string {
        return $this->backgroundColor;
    }

    /**
     * Gets the content property value. Optional. Custom piece of data - JSON object used to provide custom content to render the activity in the Windows Shell UI
     * @return Json|null
    */
    public function getContent(): ?Json {
        return $this->content;
    }

    /**
     * Gets the description property value. Optional. Longer text description of the user's unique activity (example: document name, first sentence, and/or metadata)
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayText property value. Required. Short text description of the user's unique activity (for example, document name in cases where an activity refers to document creation)
     * @return string|null
    */
    public function getDisplayText(): ?string {
        return $this->displayText;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attribution' => function (ParseNode $n) use ($o) { $o->setAttribution($n->getObjectValue(array(ImageInfo::class, 'createFromDiscriminatorValue'))); },
            'backgroundColor' => function (ParseNode $n) use ($o) { $o->setBackgroundColor($n->getStringValue()); },
            'content' => function (ParseNode $n) use ($o) { $o->setContent($n->getObjectValue(array(Json::class, 'createFromDiscriminatorValue'))); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayText' => function (ParseNode $n) use ($o) { $o->setDisplayText($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('attribution', $this->attribution);
        $writer->writeStringValue('backgroundColor', $this->backgroundColor);
        $writer->writeObjectValue('content', $this->content);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayText', $this->displayText);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the attribution property value. Optional. JSON object used to represent an icon which represents the application used to generate the activity
     *  @param ImageInfo|null $value Value to set for the attribution property.
    */
    public function setAttribution(?ImageInfo $value ): void {
        $this->attribution = $value;
    }

    /**
     * Sets the backgroundColor property value. Optional. Background color used to render the activity in the UI - brand color for the application source of the activity. Must be a valid hex color
     *  @param string|null $value Value to set for the backgroundColor property.
    */
    public function setBackgroundColor(?string $value ): void {
        $this->backgroundColor = $value;
    }

    /**
     * Sets the content property value. Optional. Custom piece of data - JSON object used to provide custom content to render the activity in the Windows Shell UI
     *  @param Json|null $value Value to set for the content property.
    */
    public function setContent(?Json $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the description property value. Optional. Longer text description of the user's unique activity (example: document name, first sentence, and/or metadata)
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayText property value. Required. Short text description of the user's unique activity (for example, document name in cases where an activity refers to document creation)
     *  @param string|null $value Value to set for the displayText property.
    */
    public function setDisplayText(?string $value ): void {
        $this->displayText = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
