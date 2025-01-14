<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AssignmentFilterEvaluateRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<string>|null $orderBy Order the devices should be sorted in. Default is ascending on device name.
    */
    private ?array $orderBy = null;
    
    /**
     * @var DevicePlatformType|null $platform Supported platform types.
    */
    private ?DevicePlatformType $platform = null;
    
    /**
     * @var string|null $rule Rule definition of the Assignment Filter.
    */
    private ?string $rule = null;
    
    /**
     * @var string|null $search Search keyword applied to scope found devices.
    */
    private ?string $search = null;
    
    /**
     * @var int|null $skip Number of records to skip. Default value is 0
    */
    private ?int $skip = null;
    
    /**
     * @var int|null $top Limit of records per request. Default value is 100, if provided less than 0 or greater than 100
    */
    private ?int $top = null;
    
    /**
     * Instantiates a new assignmentFilterEvaluateRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.assignmentFilterEvaluateRequest');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AssignmentFilterEvaluateRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AssignmentFilterEvaluateRequest {
        return new AssignmentFilterEvaluateRequest();
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
        $o = $this;
        return  [
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'orderBy' => function (ParseNode $n) use ($o) { $o->setOrderBy($n->getCollectionOfPrimitiveValues()); },
            'platform' => function (ParseNode $n) use ($o) { $o->setPlatform($n->getEnumValue(DevicePlatformType::class)); },
            'rule' => function (ParseNode $n) use ($o) { $o->setRule($n->getStringValue()); },
            'search' => function (ParseNode $n) use ($o) { $o->setSearch($n->getStringValue()); },
            'skip' => function (ParseNode $n) use ($o) { $o->setSkip($n->getIntegerValue()); },
            'top' => function (ParseNode $n) use ($o) { $o->setTop($n->getIntegerValue()); },
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
     * Gets the orderBy property value. Order the devices should be sorted in. Default is ascending on device name.
     * @return array<string>|null
    */
    public function getOrderBy(): ?array {
        return $this->orderBy;
    }

    /**
     * Gets the platform property value. Supported platform types.
     * @return DevicePlatformType|null
    */
    public function getPlatform(): ?DevicePlatformType {
        return $this->platform;
    }

    /**
     * Gets the rule property value. Rule definition of the Assignment Filter.
     * @return string|null
    */
    public function getRule(): ?string {
        return $this->rule;
    }

    /**
     * Gets the search property value. Search keyword applied to scope found devices.
     * @return string|null
    */
    public function getSearch(): ?string {
        return $this->search;
    }

    /**
     * Gets the skip property value. Number of records to skip. Default value is 0
     * @return int|null
    */
    public function getSkip(): ?int {
        return $this->skip;
    }

    /**
     * Gets the top property value. Limit of records per request. Default value is 100, if provided less than 0 or greater than 100
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
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfPrimitiveValues('orderBy', $this->orderBy);
        $writer->writeEnumValue('platform', $this->platform);
        $writer->writeStringValue('rule', $this->rule);
        $writer->writeStringValue('search', $this->search);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the orderBy property value. Order the devices should be sorted in. Default is ascending on device name.
     *  @param array<string>|null $value Value to set for the orderBy property.
    */
    public function setOrderBy(?array $value ): void {
        $this->orderBy = $value;
    }

    /**
     * Sets the platform property value. Supported platform types.
     *  @param DevicePlatformType|null $value Value to set for the platform property.
    */
    public function setPlatform(?DevicePlatformType $value ): void {
        $this->platform = $value;
    }

    /**
     * Sets the rule property value. Rule definition of the Assignment Filter.
     *  @param string|null $value Value to set for the rule property.
    */
    public function setRule(?string $value ): void {
        $this->rule = $value;
    }

    /**
     * Sets the search property value. Search keyword applied to scope found devices.
     *  @param string|null $value Value to set for the search property.
    */
    public function setSearch(?string $value ): void {
        $this->search = $value;
    }

    /**
     * Sets the skip property value. Number of records to skip. Default value is 0
     *  @param int|null $value Value to set for the skip property.
    */
    public function setSkip(?int $value ): void {
        $this->skip = $value;
    }

    /**
     * Sets the top property value. Limit of records per request. Default value is 100, if provided less than 0 or greater than 100
     *  @param int|null $value Value to set for the top property.
    */
    public function setTop(?int $value ): void {
        $this->top = $value;
    }

}
