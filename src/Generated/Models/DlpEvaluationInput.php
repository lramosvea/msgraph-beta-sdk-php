<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DlpEvaluationInput implements AdditionalDataHolder, Parsable 
{
    /**
     * @var AccessScope|null $accessScope The accessScope property
    */
    private ?AccessScope $accessScope = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var CurrentLabel|null $currentLabel The currentLabel property
    */
    private ?CurrentLabel $currentLabel = null;
    
    /**
     * @var array<DiscoveredSensitiveType>|null $discoveredSensitiveTypes The discoveredSensitiveTypes property
    */
    private ?array $discoveredSensitiveTypes = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new dlpEvaluationInput and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.dlpEvaluationInput');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DlpEvaluationInput
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DlpEvaluationInput {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.dlpEvaluationWindowsDevicesInput': return new DlpEvaluationWindowsDevicesInput();
            }
        }
        return new DlpEvaluationInput();
    }

    /**
     * Gets the accessScope property value. The accessScope property
     * @return AccessScope|null
    */
    public function getAccessScope(): ?AccessScope {
        return $this->accessScope;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the currentLabel property value. The currentLabel property
     * @return CurrentLabel|null
    */
    public function getCurrentLabel(): ?CurrentLabel {
        return $this->currentLabel;
    }

    /**
     * Gets the discoveredSensitiveTypes property value. The discoveredSensitiveTypes property
     * @return array<DiscoveredSensitiveType>|null
    */
    public function getDiscoveredSensitiveTypes(): ?array {
        return $this->discoveredSensitiveTypes;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessScope' => function (ParseNode $n) use ($o) { $o->setAccessScope($n->getEnumValue(AccessScope::class)); },
            'currentLabel' => function (ParseNode $n) use ($o) { $o->setCurrentLabel($n->getObjectValue(array(CurrentLabel::class, 'createFromDiscriminatorValue'))); },
            'discoveredSensitiveTypes' => function (ParseNode $n) use ($o) { $o->setDiscoveredSensitiveTypes($n->getCollectionOfObjectValues(array(DiscoveredSensitiveType::class, 'createFromDiscriminatorValue'))); },
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
        $writer->writeEnumValue('accessScope', $this->accessScope);
        $writer->writeObjectValue('currentLabel', $this->currentLabel);
        $writer->writeCollectionOfObjectValues('discoveredSensitiveTypes', $this->discoveredSensitiveTypes);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accessScope property value. The accessScope property
     *  @param AccessScope|null $value Value to set for the accessScope property.
    */
    public function setAccessScope(?AccessScope $value ): void {
        $this->accessScope = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the currentLabel property value. The currentLabel property
     *  @param CurrentLabel|null $value Value to set for the currentLabel property.
    */
    public function setCurrentLabel(?CurrentLabel $value ): void {
        $this->currentLabel = $value;
    }

    /**
     * Sets the discoveredSensitiveTypes property value. The discoveredSensitiveTypes property
     *  @param array<DiscoveredSensitiveType>|null $value Value to set for the discoveredSensitiveTypes property.
    */
    public function setDiscoveredSensitiveTypes(?array $value ): void {
        $this->discoveredSensitiveTypes = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
