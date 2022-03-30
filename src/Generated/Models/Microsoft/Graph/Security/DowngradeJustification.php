<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DowngradeJustification implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $isDowngradeJustified  */
    private ?bool $isDowngradeJustified = null;
    
    /** @var string|null $justificationMessage  */
    private ?string $justificationMessage = null;
    
    /**
     * Instantiates a new downgradeJustification and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DowngradeJustification
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DowngradeJustification {
        return new DowngradeJustification();
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
            'isDowngradeJustified' => function (self $o, ParseNode $n) { $o->setIsDowngradeJustified($n->getBooleanValue()); },
            'justificationMessage' => function (self $o, ParseNode $n) { $o->setJustificationMessage($n->getStringValue()); },
        ];
    }

    /**
     * Gets the isDowngradeJustified property value. 
     * @return bool|null
    */
    public function getIsDowngradeJustified(): ?bool {
        return $this->isDowngradeJustified;
    }

    /**
     * Gets the justificationMessage property value. 
     * @return string|null
    */
    public function getJustificationMessage(): ?string {
        return $this->justificationMessage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isDowngradeJustified', $this->isDowngradeJustified);
        $writer->writeStringValue('justificationMessage', $this->justificationMessage);
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
     * Sets the isDowngradeJustified property value. 
     *  @param bool|null $value Value to set for the isDowngradeJustified property.
    */
    public function setIsDowngradeJustified(?bool $value ): void {
        $this->isDowngradeJustified = $value;
    }

    /**
     * Sets the justificationMessage property value. 
     *  @param string|null $value Value to set for the justificationMessage property.
    */
    public function setJustificationMessage(?string $value ): void {
        $this->justificationMessage = $value;
    }

}
