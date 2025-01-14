<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsMicrosoftEdgeApp extends MobileApp implements Parsable 
{
    /**
     * @var MicrosoftEdgeChannel|null $channel The enum to specify the channels for Microsoft Edge apps.
    */
    private ?MicrosoftEdgeChannel $channel = null;
    
    /**
     * @var string|null $displayLanguageLocale The language locale to use when the Edge app displays text to the user.
    */
    private ?string $displayLanguageLocale = null;
    
    /**
     * Instantiates a new WindowsMicrosoftEdgeApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsMicrosoftEdgeApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsMicrosoftEdgeApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsMicrosoftEdgeApp {
        return new WindowsMicrosoftEdgeApp();
    }

    /**
     * Gets the channel property value. The enum to specify the channels for Microsoft Edge apps.
     * @return MicrosoftEdgeChannel|null
    */
    public function getChannel(): ?MicrosoftEdgeChannel {
        return $this->channel;
    }

    /**
     * Gets the displayLanguageLocale property value. The language locale to use when the Edge app displays text to the user.
     * @return string|null
    */
    public function getDisplayLanguageLocale(): ?string {
        return $this->displayLanguageLocale;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'channel' => function (ParseNode $n) use ($o) { $o->setChannel($n->getEnumValue(MicrosoftEdgeChannel::class)); },
            'displayLanguageLocale' => function (ParseNode $n) use ($o) { $o->setDisplayLanguageLocale($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('channel', $this->channel);
        $writer->writeStringValue('displayLanguageLocale', $this->displayLanguageLocale);
    }

    /**
     * Sets the channel property value. The enum to specify the channels for Microsoft Edge apps.
     *  @param MicrosoftEdgeChannel|null $value Value to set for the channel property.
    */
    public function setChannel(?MicrosoftEdgeChannel $value ): void {
        $this->channel = $value;
    }

    /**
     * Sets the displayLanguageLocale property value. The language locale to use when the Edge app displays text to the user.
     *  @param string|null $value Value to set for the displayLanguageLocale property.
    */
    public function setDisplayLanguageLocale(?string $value ): void {
        $this->displayLanguageLocale = $value;
    }

}
