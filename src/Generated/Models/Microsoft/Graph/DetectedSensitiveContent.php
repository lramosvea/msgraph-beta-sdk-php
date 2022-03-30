<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DetectedSensitiveContent extends DetectedSensitiveContentBase 
{
    /** @var array<ClassificationAttribute>|null $classificationAttributes  */
    private ?array $classificationAttributes = null;
    
    /** @var ClassificationMethod|null $classificationMethod  */
    private ?ClassificationMethod $classificationMethod = null;
    
    /** @var array<SensitiveContentLocation>|null $matches  */
    private ?array $matches = null;
    
    /** @var SensitiveTypeScope|null $scope  */
    private ?SensitiveTypeScope $scope = null;
    
    /** @var SensitiveTypeSource|null $sensitiveTypeSource  */
    private ?SensitiveTypeSource $sensitiveTypeSource = null;
    
    /**
     * Instantiates a new detectedSensitiveContent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DetectedSensitiveContent
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DetectedSensitiveContent {
        return new DetectedSensitiveContent();
    }

    /**
     * Gets the classificationAttributes property value. 
     * @return array<ClassificationAttribute>|null
    */
    public function getClassificationAttributes(): ?array {
        return $this->classificationAttributes;
    }

    /**
     * Gets the classificationMethod property value. 
     * @return ClassificationMethod|null
    */
    public function getClassificationMethod(): ?ClassificationMethod {
        return $this->classificationMethod;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'classificationAttributes' => function (self $o, ParseNode $n) { $o->setClassificationAttributes($n->getCollectionOfObjectValues(ClassificationAttribute::class)); },
            'classificationMethod' => function (self $o, ParseNode $n) { $o->setClassificationMethod($n->getEnumValue(ClassificationMethod::class)); },
            'matches' => function (self $o, ParseNode $n) { $o->setMatches($n->getCollectionOfObjectValues(SensitiveContentLocation::class)); },
            'scope' => function (self $o, ParseNode $n) { $o->setScope($n->getEnumValue(SensitiveTypeScope::class)); },
            'sensitiveTypeSource' => function (self $o, ParseNode $n) { $o->setSensitiveTypeSource($n->getEnumValue(SensitiveTypeSource::class)); },
        ]);
    }

    /**
     * Gets the matches property value. 
     * @return array<SensitiveContentLocation>|null
    */
    public function getMatches(): ?array {
        return $this->matches;
    }

    /**
     * Gets the scope property value. 
     * @return SensitiveTypeScope|null
    */
    public function getScope(): ?SensitiveTypeScope {
        return $this->scope;
    }

    /**
     * Gets the sensitiveTypeSource property value. 
     * @return SensitiveTypeSource|null
    */
    public function getSensitiveTypeSource(): ?SensitiveTypeSource {
        return $this->sensitiveTypeSource;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('classificationAttributes', $this->classificationAttributes);
        $writer->writeEnumValue('classificationMethod', $this->classificationMethod);
        $writer->writeCollectionOfObjectValues('matches', $this->matches);
        $writer->writeEnumValue('scope', $this->scope);
        $writer->writeEnumValue('sensitiveTypeSource', $this->sensitiveTypeSource);
    }

    /**
     * Sets the classificationAttributes property value. 
     *  @param array<ClassificationAttribute>|null $value Value to set for the classificationAttributes property.
    */
    public function setClassificationAttributes(?array $value ): void {
        $this->classificationAttributes = $value;
    }

    /**
     * Sets the classificationMethod property value. 
     *  @param ClassificationMethod|null $value Value to set for the classificationMethod property.
    */
    public function setClassificationMethod(?ClassificationMethod $value ): void {
        $this->classificationMethod = $value;
    }

    /**
     * Sets the matches property value. 
     *  @param array<SensitiveContentLocation>|null $value Value to set for the matches property.
    */
    public function setMatches(?array $value ): void {
        $this->matches = $value;
    }

    /**
     * Sets the scope property value. 
     *  @param SensitiveTypeScope|null $value Value to set for the scope property.
    */
    public function setScope(?SensitiveTypeScope $value ): void {
        $this->scope = $value;
    }

    /**
     * Sets the sensitiveTypeSource property value. 
     *  @param SensitiveTypeSource|null $value Value to set for the sensitiveTypeSource property.
    */
    public function setSensitiveTypeSource(?SensitiveTypeSource $value ): void {
        $this->sensitiveTypeSource = $value;
    }

}
