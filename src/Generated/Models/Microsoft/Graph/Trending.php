<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Trending extends Entity 
{
    /** @var DateTime|null $lastModifiedDateTime  */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var Entity|null $resource Used for navigating to the trending document. */
    private ?Entity $resource = null;
    
    /** @var ResourceReference|null $resourceReference Reference properties of the trending document, such as the url and type of the document. */
    private ?ResourceReference $resourceReference = null;
    
    /** @var ResourceVisualization|null $resourceVisualization Properties that you can use to visualize the document in your experience. */
    private ?ResourceVisualization $resourceVisualization = null;
    
    /** @var float|null $weight Value indicating how much the document is currently trending. The larger the number, the more the document is currently trending around the user (the more relevant it is). Returned documents are sorted by this value. */
    private ?float $weight = null;
    
    /**
     * Instantiates a new trending and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Trending
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Trending {
        return new Trending();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'resource' => function (self $o, ParseNode $n) { $o->setResource($n->getObjectValue(Entity::class)); },
            'resourceReference' => function (self $o, ParseNode $n) { $o->setResourceReference($n->getObjectValue(ResourceReference::class)); },
            'resourceVisualization' => function (self $o, ParseNode $n) { $o->setResourceVisualization($n->getObjectValue(ResourceVisualization::class)); },
            'weight' => function (self $o, ParseNode $n) { $o->setWeight($n->getFloatValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. 
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the resource property value. Used for navigating to the trending document.
     * @return Entity|null
    */
    public function getResource(): ?Entity {
        return $this->resource;
    }

    /**
     * Gets the resourceReference property value. Reference properties of the trending document, such as the url and type of the document.
     * @return ResourceReference|null
    */
    public function getResourceReference(): ?ResourceReference {
        return $this->resourceReference;
    }

    /**
     * Gets the resourceVisualization property value. Properties that you can use to visualize the document in your experience.
     * @return ResourceVisualization|null
    */
    public function getResourceVisualization(): ?ResourceVisualization {
        return $this->resourceVisualization;
    }

    /**
     * Gets the weight property value. Value indicating how much the document is currently trending. The larger the number, the more the document is currently trending around the user (the more relevant it is). Returned documents are sorted by this value.
     * @return float|null
    */
    public function getWeight(): ?float {
        return $this->weight;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeObjectValue('resource', $this->resource);
        $writer->writeObjectValue('resourceReference', $this->resourceReference);
        $writer->writeObjectValue('resourceVisualization', $this->resourceVisualization);
        $writer->writeFloatValue('weight', $this->weight);
    }

    /**
     * Sets the lastModifiedDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the resource property value. Used for navigating to the trending document.
     *  @param Entity|null $value Value to set for the resource property.
    */
    public function setResource(?Entity $value ): void {
        $this->resource = $value;
    }

    /**
     * Sets the resourceReference property value. Reference properties of the trending document, such as the url and type of the document.
     *  @param ResourceReference|null $value Value to set for the resourceReference property.
    */
    public function setResourceReference(?ResourceReference $value ): void {
        $this->resourceReference = $value;
    }

    /**
     * Sets the resourceVisualization property value. Properties that you can use to visualize the document in your experience.
     *  @param ResourceVisualization|null $value Value to set for the resourceVisualization property.
    */
    public function setResourceVisualization(?ResourceVisualization $value ): void {
        $this->resourceVisualization = $value;
    }

    /**
     * Sets the weight property value. Value indicating how much the document is currently trending. The larger the number, the more the document is currently trending around the user (the more relevant it is). Returned documents are sorted by this value.
     *  @param float|null $value Value to set for the weight property.
    */
    public function setWeight(?float $value ): void {
        $this->weight = $value;
    }

}
