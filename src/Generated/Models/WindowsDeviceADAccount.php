<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsDeviceADAccount extends WindowsDeviceAccount implements Parsable 
{
    /**
     * @var string|null $domainName Not yet documented
    */
    private ?string $domainName = null;
    
    /**
     * @var string|null $userName Not yet documented
    */
    private ?string $userName = null;
    
    /**
     * Instantiates a new WindowsDeviceADAccount and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsDeviceADAccount');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsDeviceADAccount
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsDeviceADAccount {
        return new WindowsDeviceADAccount();
    }

    /**
     * Gets the domainName property value. Not yet documented
     * @return string|null
    */
    public function getDomainName(): ?string {
        return $this->domainName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'domainName' => function (ParseNode $n) use ($o) { $o->setDomainName($n->getStringValue()); },
            'userName' => function (ParseNode $n) use ($o) { $o->setUserName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the userName property value. Not yet documented
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->userName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('domainName', $this->domainName);
        $writer->writeStringValue('userName', $this->userName);
    }

    /**
     * Sets the domainName property value. Not yet documented
     *  @param string|null $value Value to set for the domainName property.
    */
    public function setDomainName(?string $value ): void {
        $this->domainName = $value;
    }

    /**
     * Sets the userName property value. Not yet documented
     *  @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value ): void {
        $this->userName = $value;
    }

}
