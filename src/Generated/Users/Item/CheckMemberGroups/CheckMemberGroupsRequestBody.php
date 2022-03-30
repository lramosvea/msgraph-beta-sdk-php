<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\CheckMemberGroups;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CheckMemberGroupsRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $groupIds  */
    private ?array $groupIds = null;
    
    /**
     * Instantiates a new checkMemberGroupsRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CheckMemberGroupsRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CheckMemberGroupsRequestBody {
        return new CheckMemberGroupsRequestBody();
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
            'groupIds' => function (self $o, ParseNode $n) { $o->setGroupIds($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the groupIds property value. 
     * @return array<string>|null
    */
    public function getGroupIds(): ?array {
        return $this->groupIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('groupIds', $this->groupIds);
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
     * Sets the groupIds property value. 
     *  @param array<string>|null $value Value to set for the groupIds property.
    */
    public function setGroupIds(?array $value ): void {
        $this->groupIds = $value;
    }

}
