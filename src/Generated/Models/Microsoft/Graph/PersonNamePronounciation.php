<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PersonNamePronounciation implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $displayName  */
    private ?string $displayName = null;
    
    /** @var string|null $first  */
    private ?string $first = null;
    
    /** @var string|null $last  */
    private ?string $last = null;
    
    /** @var string|null $maiden  */
    private ?string $maiden = null;
    
    /** @var string|null $middle  */
    private ?string $middle = null;
    
    /**
     * Instantiates a new personNamePronounciation and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PersonNamePronounciation
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PersonNamePronounciation {
        return new PersonNamePronounciation();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. 
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'first' => function (self $o, ParseNode $n) { $o->setFirst($n->getStringValue()); },
            'last' => function (self $o, ParseNode $n) { $o->setLast($n->getStringValue()); },
            'maiden' => function (self $o, ParseNode $n) { $o->setMaiden($n->getStringValue()); },
            'middle' => function (self $o, ParseNode $n) { $o->setMiddle($n->getStringValue()); },
        ];
    }

    /**
     * Gets the first property value. 
     * @return string|null
    */
    public function getFirst(): ?string {
        return $this->first;
    }

    /**
     * Gets the last property value. 
     * @return string|null
    */
    public function getLast(): ?string {
        return $this->last;
    }

    /**
     * Gets the maiden property value. 
     * @return string|null
    */
    public function getMaiden(): ?string {
        return $this->maiden;
    }

    /**
     * Gets the middle property value. 
     * @return string|null
    */
    public function getMiddle(): ?string {
        return $this->middle;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('first', $this->first);
        $writer->writeStringValue('last', $this->last);
        $writer->writeStringValue('maiden', $this->maiden);
        $writer->writeStringValue('middle', $this->middle);
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
     * Sets the displayName property value. 
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the first property value. 
     *  @param string|null $value Value to set for the first property.
    */
    public function setFirst(?string $value ): void {
        $this->first = $value;
    }

    /**
     * Sets the last property value. 
     *  @param string|null $value Value to set for the last property.
    */
    public function setLast(?string $value ): void {
        $this->last = $value;
    }

    /**
     * Sets the maiden property value. 
     *  @param string|null $value Value to set for the maiden property.
    */
    public function setMaiden(?string $value ): void {
        $this->maiden = $value;
    }

    /**
     * Sets the middle property value. 
     *  @param string|null $value Value to set for the middle property.
    */
    public function setMiddle(?string $value ): void {
        $this->middle = $value;
    }

}
