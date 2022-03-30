<?php

namespace Microsoft\Graph\Beta\Generated\Organization\GetByIds;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetByIdsRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $ids  */
    private ?array $ids = null;
    
    /** @var array<string>|null $types  */
    private ?array $types = null;
    
    /**
     * Instantiates a new getByIdsRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetByIdsRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): GetByIdsRequestBody {
        return new GetByIdsRequestBody();
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
            'ids' => function (self $o, ParseNode $n) { $o->setIds($n->getCollectionOfPrimitiveValues()); },
            'types' => function (self $o, ParseNode $n) { $o->setTypes($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the ids property value. 
     * @return array<string>|null
    */
    public function getIds(): ?array {
        return $this->ids;
    }

    /**
     * Gets the types property value. 
     * @return array<string>|null
    */
    public function getTypes(): ?array {
        return $this->types;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('ids', $this->ids);
        $writer->writeCollectionOfPrimitiveValues('types', $this->types);
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
     * Sets the ids property value. 
     *  @param array<string>|null $value Value to set for the ids property.
    */
    public function setIds(?array $value ): void {
        $this->ids = $value;
    }

    /**
     * Sets the types property value. 
     *  @param array<string>|null $value Value to set for the types property.
    */
    public function setTypes(?array $value ): void {
        $this->types = $value;
    }

}
