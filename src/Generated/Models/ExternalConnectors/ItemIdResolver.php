<?php

namespace Microsoft\Graph\Beta\Generated\Models\ExternalConnectors;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemIdResolver extends UrlToItemResolverBase implements Parsable 
{
    /**
     * @var string|null $itemId Pattern that specifies how to form the ID of the external item that the URL represents. The named groups from the regular expression in urlPattern within the urlMatchInfo can be referenced by inserting the group name inside curly brackets.
    */
    private ?string $itemId = null;
    
    /**
     * @var UrlMatchInfo|null $urlMatchInfo Configurations to match and resolve URL.
    */
    private ?UrlMatchInfo $urlMatchInfo = null;
    
    /**
     * Instantiates a new ItemIdResolver and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.externalConnectors.itemIdResolver');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemIdResolver
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemIdResolver {
        return new ItemIdResolver();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'itemId' => function (ParseNode $n) use ($o) { $o->setItemId($n->getStringValue()); },
            'urlMatchInfo' => function (ParseNode $n) use ($o) { $o->setUrlMatchInfo($n->getObjectValue(array(UrlMatchInfo::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the itemId property value. Pattern that specifies how to form the ID of the external item that the URL represents. The named groups from the regular expression in urlPattern within the urlMatchInfo can be referenced by inserting the group name inside curly brackets.
     * @return string|null
    */
    public function getItemId(): ?string {
        return $this->itemId;
    }

    /**
     * Gets the urlMatchInfo property value. Configurations to match and resolve URL.
     * @return UrlMatchInfo|null
    */
    public function getUrlMatchInfo(): ?UrlMatchInfo {
        return $this->urlMatchInfo;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('itemId', $this->itemId);
        $writer->writeObjectValue('urlMatchInfo', $this->urlMatchInfo);
    }

    /**
     * Sets the itemId property value. Pattern that specifies how to form the ID of the external item that the URL represents. The named groups from the regular expression in urlPattern within the urlMatchInfo can be referenced by inserting the group name inside curly brackets.
     *  @param string|null $value Value to set for the itemId property.
    */
    public function setItemId(?string $value ): void {
        $this->itemId = $value;
    }

    /**
     * Sets the urlMatchInfo property value. Configurations to match and resolve URL.
     *  @param UrlMatchInfo|null $value Value to set for the urlMatchInfo property.
    */
    public function setUrlMatchInfo(?UrlMatchInfo $value ): void {
        $this->urlMatchInfo = $value;
    }

}
