<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\Reports\GetCachedReport;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetCachedReportRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $groupBy  */
    private ?array $groupBy = null;
    
    /** @var string|null $id  */
    private ?string $id = null;
    
    /** @var array<string>|null $orderBy  */
    private ?array $orderBy = null;
    
    /** @var string|null $search  */
    private ?string $search = null;
    
    /** @var array<string>|null $select  */
    private ?array $select = null;
    
    /** @var int|null $skip  */
    private ?int $skip = null;
    
    /** @var int|null $top  */
    private ?int $top = null;
    
    /**
     * Instantiates a new getCachedReportRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetCachedReportRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): GetCachedReportRequestBody {
        return new GetCachedReportRequestBody();
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
            'groupBy' => function (self $o, ParseNode $n) { $o->setGroupBy($n->getCollectionOfPrimitiveValues()); },
            'id' => function (self $o, ParseNode $n) { $o->setId($n->getStringValue()); },
            'orderBy' => function (self $o, ParseNode $n) { $o->setOrderBy($n->getCollectionOfPrimitiveValues()); },
            'search' => function (self $o, ParseNode $n) { $o->setSearch($n->getStringValue()); },
            'select' => function (self $o, ParseNode $n) { $o->setSelect($n->getCollectionOfPrimitiveValues()); },
            'skip' => function (self $o, ParseNode $n) { $o->setSkip($n->getIntegerValue()); },
            'top' => function (self $o, ParseNode $n) { $o->setTop($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the groupBy property value. 
     * @return array<string>|null
    */
    public function getGroupBy(): ?array {
        return $this->groupBy;
    }

    /**
     * Gets the id property value. 
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the orderBy property value. 
     * @return array<string>|null
    */
    public function getOrderBy(): ?array {
        return $this->orderBy;
    }

    /**
     * Gets the search property value. 
     * @return string|null
    */
    public function getSearch(): ?string {
        return $this->search;
    }

    /**
     * Gets the select property value. 
     * @return array<string>|null
    */
    public function getSelect(): ?array {
        return $this->select;
    }

    /**
     * Gets the skip property value. 
     * @return int|null
    */
    public function getSkip(): ?int {
        return $this->skip;
    }

    /**
     * Gets the top property value. 
     * @return int|null
    */
    public function getTop(): ?int {
        return $this->top;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('groupBy', $this->groupBy);
        $writer->writeStringValue('id', $this->id);
        $writer->writeCollectionOfPrimitiveValues('orderBy', $this->orderBy);
        $writer->writeStringValue('search', $this->search);
        $writer->writeCollectionOfPrimitiveValues('select', $this->select);
        $writer->writeIntegerValue('skip', $this->skip);
        $writer->writeIntegerValue('top', $this->top);
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
     * Sets the groupBy property value. 
     *  @param array<string>|null $value Value to set for the groupBy property.
    */
    public function setGroupBy(?array $value ): void {
        $this->groupBy = $value;
    }

    /**
     * Sets the id property value. 
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the orderBy property value. 
     *  @param array<string>|null $value Value to set for the orderBy property.
    */
    public function setOrderBy(?array $value ): void {
        $this->orderBy = $value;
    }

    /**
     * Sets the search property value. 
     *  @param string|null $value Value to set for the search property.
    */
    public function setSearch(?string $value ): void {
        $this->search = $value;
    }

    /**
     * Sets the select property value. 
     *  @param array<string>|null $value Value to set for the select property.
    */
    public function setSelect(?array $value ): void {
        $this->select = $value;
    }

    /**
     * Sets the skip property value. 
     *  @param int|null $value Value to set for the skip property.
    */
    public function setSkip(?int $value ): void {
        $this->skip = $value;
    }

    /**
     * Sets the top property value. 
     *  @param int|null $value Value to set for the top property.
    */
    public function setTop(?int $value ): void {
        $this->top = $value;
    }

}
