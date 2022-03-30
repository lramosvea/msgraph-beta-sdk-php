<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class PersonAnnualEvent extends ItemFacet 
{
    /** @var Date|null $date  */
    private ?Date $date = null;
    
    /** @var string|null $displayName  */
    private ?string $displayName = null;
    
    /** @var PersonAnnualEventType|null $type  */
    private ?PersonAnnualEventType $type = null;
    
    /**
     * Instantiates a new personAnnualEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PersonAnnualEvent
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PersonAnnualEvent {
        return new PersonAnnualEvent();
    }

    /**
     * Gets the date property value. 
     * @return Date|null
    */
    public function getDate(): ?Date {
        return $this->date;
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
        return array_merge(parent::getFieldDeserializers(), [
            'date' => function (self $o, ParseNode $n) { $o->setDate($n->getDateValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'type' => function (self $o, ParseNode $n) { $o->setType($n->getEnumValue(PersonAnnualEventType::class)); },
        ]);
    }

    /**
     * Gets the type property value. 
     * @return PersonAnnualEventType|null
    */
    public function getType(): ?PersonAnnualEventType {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateValue('date', $this->date);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('type', $this->type);
    }

    /**
     * Sets the date property value. 
     *  @param Date|null $value Value to set for the date property.
    */
    public function setDate(?Date $value ): void {
        $this->date = $value;
    }

    /**
     * Sets the displayName property value. 
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the type property value. 
     *  @param PersonAnnualEventType|null $value Value to set for the type property.
    */
    public function setType(?PersonAnnualEventType $value ): void {
        $this->type = $value;
    }

}
