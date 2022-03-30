<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ResponsibleSensitiveType implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $description  */
    private ?string $description = null;
    
    /** @var string|null $id  */
    private ?string $id = null;
    
    /** @var string|null $name  */
    private ?string $name = null;
    
    /** @var string|null $publisherName  */
    private ?string $publisherName = null;
    
    /** @var string|null $rulePackageId  */
    private ?string $rulePackageId = null;
    
    /** @var string|null $rulePackageType  */
    private ?string $rulePackageType = null;
    
    /**
     * Instantiates a new responsibleSensitiveType and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResponsibleSensitiveType
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ResponsibleSensitiveType {
        return new ResponsibleSensitiveType();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. 
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'id' => function (self $o, ParseNode $n) { $o->setId($n->getStringValue()); },
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
            'publisherName' => function (self $o, ParseNode $n) { $o->setPublisherName($n->getStringValue()); },
            'rulePackageId' => function (self $o, ParseNode $n) { $o->setRulePackageId($n->getStringValue()); },
            'rulePackageType' => function (self $o, ParseNode $n) { $o->setRulePackageType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the id property value. 
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the name property value. 
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the publisherName property value. 
     * @return string|null
    */
    public function getPublisherName(): ?string {
        return $this->publisherName;
    }

    /**
     * Gets the rulePackageId property value. 
     * @return string|null
    */
    public function getRulePackageId(): ?string {
        return $this->rulePackageId;
    }

    /**
     * Gets the rulePackageType property value. 
     * @return string|null
    */
    public function getRulePackageType(): ?string {
        return $this->rulePackageType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('id', $this->id);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('publisherName', $this->publisherName);
        $writer->writeStringValue('rulePackageId', $this->rulePackageId);
        $writer->writeStringValue('rulePackageType', $this->rulePackageType);
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
     * Sets the description property value. 
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the id property value. 
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the name property value. 
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the publisherName property value. 
     *  @param string|null $value Value to set for the publisherName property.
    */
    public function setPublisherName(?string $value ): void {
        $this->publisherName = $value;
    }

    /**
     * Sets the rulePackageId property value. 
     *  @param string|null $value Value to set for the rulePackageId property.
    */
    public function setRulePackageId(?string $value ): void {
        $this->rulePackageId = $value;
    }

    /**
     * Sets the rulePackageType property value. 
     *  @param string|null $value Value to set for the rulePackageType property.
    */
    public function setRulePackageType(?string $value ): void {
        $this->rulePackageType = $value;
    }

}
