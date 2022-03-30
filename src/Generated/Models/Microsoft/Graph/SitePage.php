<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SitePage extends BaseItem 
{
    /** @var ContentTypeInfo|null $contentType The content type of the page. */
    private ?ContentTypeInfo $contentType = null;
    
    /** @var string|null $pageLayoutType  */
    private ?string $pageLayoutType = null;
    
    /** @var PublicationFacet|null $publishingState  */
    private ?PublicationFacet $publishingState = null;
    
    /** @var string|null $title  */
    private ?string $title = null;
    
    /** @var array<WebPart>|null $webParts  */
    private ?array $webParts = null;
    
    /**
     * Instantiates a new sitePage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SitePage
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SitePage {
        return new SitePage();
    }

    /**
     * Gets the contentType property value. The content type of the page.
     * @return ContentTypeInfo|null
    */
    public function getContentType(): ?ContentTypeInfo {
        return $this->contentType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'contentType' => function (self $o, ParseNode $n) { $o->setContentType($n->getObjectValue(ContentTypeInfo::class)); },
            'pageLayoutType' => function (self $o, ParseNode $n) { $o->setPageLayoutType($n->getStringValue()); },
            'publishingState' => function (self $o, ParseNode $n) { $o->setPublishingState($n->getObjectValue(PublicationFacet::class)); },
            'title' => function (self $o, ParseNode $n) { $o->setTitle($n->getStringValue()); },
            'webParts' => function (self $o, ParseNode $n) { $o->setWebParts($n->getCollectionOfObjectValues(WebPart::class)); },
        ]);
    }

    /**
     * Gets the pageLayoutType property value. 
     * @return string|null
    */
    public function getPageLayoutType(): ?string {
        return $this->pageLayoutType;
    }

    /**
     * Gets the publishingState property value. 
     * @return PublicationFacet|null
    */
    public function getPublishingState(): ?PublicationFacet {
        return $this->publishingState;
    }

    /**
     * Gets the title property value. 
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the webParts property value. 
     * @return array<WebPart>|null
    */
    public function getWebParts(): ?array {
        return $this->webParts;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('contentType', $this->contentType);
        $writer->writeStringValue('pageLayoutType', $this->pageLayoutType);
        $writer->writeObjectValue('publishingState', $this->publishingState);
        $writer->writeStringValue('title', $this->title);
        $writer->writeCollectionOfObjectValues('webParts', $this->webParts);
    }

    /**
     * Sets the contentType property value. The content type of the page.
     *  @param ContentTypeInfo|null $value Value to set for the contentType property.
    */
    public function setContentType(?ContentTypeInfo $value ): void {
        $this->contentType = $value;
    }

    /**
     * Sets the pageLayoutType property value. 
     *  @param string|null $value Value to set for the pageLayoutType property.
    */
    public function setPageLayoutType(?string $value ): void {
        $this->pageLayoutType = $value;
    }

    /**
     * Sets the publishingState property value. 
     *  @param PublicationFacet|null $value Value to set for the publishingState property.
    */
    public function setPublishingState(?PublicationFacet $value ): void {
        $this->publishingState = $value;
    }

    /**
     * Sets the title property value. 
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value ): void {
        $this->title = $value;
    }

    /**
     * Sets the webParts property value. 
     *  @param array<WebPart>|null $value Value to set for the webParts property.
    */
    public function setWebParts(?array $value ): void {
        $this->webParts = $value;
    }

}
