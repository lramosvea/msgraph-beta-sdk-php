<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\BulkReprovisionCloudPc;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BulkReprovisionCloudPcRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $managedDeviceIds  */
    private ?array $managedDeviceIds = null;
    
    /**
     * Instantiates a new bulkReprovisionCloudPcRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BulkReprovisionCloudPcRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): BulkReprovisionCloudPcRequestBody {
        return new BulkReprovisionCloudPcRequestBody();
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
            'managedDeviceIds' => function (self $o, ParseNode $n) { $o->setManagedDeviceIds($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the managedDeviceIds property value. 
     * @return array<string>|null
    */
    public function getManagedDeviceIds(): ?array {
        return $this->managedDeviceIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('managedDeviceIds', $this->managedDeviceIds);
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
     * Sets the managedDeviceIds property value. 
     *  @param array<string>|null $value Value to set for the managedDeviceIds property.
    */
    public function setManagedDeviceIds(?array $value ): void {
        $this->managedDeviceIds = $value;
    }

}
