<?php

namespace Microsoft\Graph\Beta\Generated\Me\ExportPersonalData;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExportPersonalDataRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $storageLocation  */
    private ?string $storageLocation = null;
    
    /**
     * Instantiates a new exportPersonalDataRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExportPersonalDataRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ExportPersonalDataRequestBody {
        return new ExportPersonalDataRequestBody();
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
            'storageLocation' => function (self $o, ParseNode $n) { $o->setStorageLocation($n->getStringValue()); },
        ];
    }

    /**
     * Gets the storageLocation property value. 
     * @return string|null
    */
    public function getStorageLocation(): ?string {
        return $this->storageLocation;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('storageLocation', $this->storageLocation);
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
     * Sets the storageLocation property value. 
     *  @param string|null $value Value to set for the storageLocation property.
    */
    public function setStorageLocation(?string $value ): void {
        $this->storageLocation = $value;
    }

}
