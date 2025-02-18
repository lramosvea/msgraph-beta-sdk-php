<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DomainDnsMxRecord extends DomainDnsRecord implements Parsable 
{
    /**
     * @var string|null $mailExchange Value used when configuring the answer/destination/value of the MX record at the DNS host.
    */
    private ?string $mailExchange = null;
    
    /**
     * @var int|null $preference Value used when configuring the Preference/Priority property of the MX record at the DNS host.
    */
    private ?int $preference = null;
    
    /**
     * Instantiates a new DomainDnsMxRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.domainDnsMxRecord');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DomainDnsMxRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DomainDnsMxRecord {
        return new DomainDnsMxRecord();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'mailExchange' => function (ParseNode $n) use ($o) { $o->setMailExchange($n->getStringValue()); },
            'preference' => function (ParseNode $n) use ($o) { $o->setPreference($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the mailExchange property value. Value used when configuring the answer/destination/value of the MX record at the DNS host.
     * @return string|null
    */
    public function getMailExchange(): ?string {
        return $this->mailExchange;
    }

    /**
     * Gets the preference property value. Value used when configuring the Preference/Priority property of the MX record at the DNS host.
     * @return int|null
    */
    public function getPreference(): ?int {
        return $this->preference;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('mailExchange', $this->mailExchange);
        $writer->writeIntegerValue('preference', $this->preference);
    }

    /**
     * Sets the mailExchange property value. Value used when configuring the answer/destination/value of the MX record at the DNS host.
     *  @param string|null $value Value to set for the mailExchange property.
    */
    public function setMailExchange(?string $value ): void {
        $this->mailExchange = $value;
    }

    /**
     * Sets the preference property value. Value used when configuring the Preference/Priority property of the MX record at the DNS host.
     *  @param int|null $value Value to set for the preference property.
    */
    public function setPreference(?int $value ): void {
        $this->preference = $value;
    }

}
