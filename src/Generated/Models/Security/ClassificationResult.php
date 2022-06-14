<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ClassificationResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $confidenceLevel The confidenceLevel property
    */
    private ?int $confidenceLevel = null;
    
    /**
     * @var int|null $count The count property
    */
    private ?int $count = null;
    
    /**
     * @var string|null $sensitiveTypeId The sensitiveTypeId property
    */
    private ?string $sensitiveTypeId = null;
    
    /**
     * Instantiates a new classificationResult and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClassificationResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClassificationResult {
        return new ClassificationResult();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the confidenceLevel property value. The confidenceLevel property
     * @return int|null
    */
    public function getConfidenceLevel(): ?int {
        return $this->confidenceLevel;
    }

    /**
     * Gets the count property value. The count property
     * @return int|null
    */
    public function getCount(): ?int {
        return $this->count;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'confidenceLevel' => function (ParseNode $n) use ($o) { $o->setConfidenceLevel($n->getIntegerValue()); },
            'count' => function (ParseNode $n) use ($o) { $o->setCount($n->getIntegerValue()); },
            'sensitiveTypeId' => function (ParseNode $n) use ($o) { $o->setSensitiveTypeId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the sensitiveTypeId property value. The sensitiveTypeId property
     * @return string|null
    */
    public function getSensitiveTypeId(): ?string {
        return $this->sensitiveTypeId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('confidenceLevel', $this->confidenceLevel);
        $writer->writeIntegerValue('count', $this->count);
        $writer->writeStringValue('sensitiveTypeId', $this->sensitiveTypeId);
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
     * Sets the confidenceLevel property value. The confidenceLevel property
     *  @param int|null $value Value to set for the confidenceLevel property.
    */
    public function setConfidenceLevel(?int $value ): void {
        $this->confidenceLevel = $value;
    }

    /**
     * Sets the count property value. The count property
     *  @param int|null $value Value to set for the count property.
    */
    public function setCount(?int $value ): void {
        $this->count = $value;
    }

    /**
     * Sets the sensitiveTypeId property value. The sensitiveTypeId property
     *  @param string|null $value Value to set for the sensitiveTypeId property.
    */
    public function setSensitiveTypeId(?string $value ): void {
        $this->sensitiveTypeId = $value;
    }

}
