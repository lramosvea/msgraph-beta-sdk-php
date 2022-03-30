<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\WindowsUpdates;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Updates extends Entity 
{
    /** @var Catalog|null $catalog Catalog of content that can be approved for deployment by the deployment service. Read-only. */
    private ?Catalog $catalog = null;
    
    /** @var array<Deployment>|null $deployments Deployments created using the deployment service. Read-only. */
    private ?array $deployments = null;
    
    /** @var array<UpdatableAsset>|null $updatableAssets Assets registered with the deployment service that can receive updates. Read-only. */
    private ?array $updatableAssets = null;
    
    /**
     * Instantiates a new updates and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Updates
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Updates {
        return new Updates();
    }

    /**
     * Gets the catalog property value. Catalog of content that can be approved for deployment by the deployment service. Read-only.
     * @return Catalog|null
    */
    public function getCatalog(): ?Catalog {
        return $this->catalog;
    }

    /**
     * Gets the deployments property value. Deployments created using the deployment service. Read-only.
     * @return array<Deployment>|null
    */
    public function getDeployments(): ?array {
        return $this->deployments;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'catalog' => function (self $o, ParseNode $n) { $o->setCatalog($n->getObjectValue(Catalog::class)); },
            'deployments' => function (self $o, ParseNode $n) { $o->setDeployments($n->getCollectionOfObjectValues(Deployment::class)); },
            'updatableAssets' => function (self $o, ParseNode $n) { $o->setUpdatableAssets($n->getCollectionOfObjectValues(UpdatableAsset::class)); },
        ]);
    }

    /**
     * Gets the updatableAssets property value. Assets registered with the deployment service that can receive updates. Read-only.
     * @return array<UpdatableAsset>|null
    */
    public function getUpdatableAssets(): ?array {
        return $this->updatableAssets;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('catalog', $this->catalog);
        $writer->writeCollectionOfObjectValues('deployments', $this->deployments);
        $writer->writeCollectionOfObjectValues('updatableAssets', $this->updatableAssets);
    }

    /**
     * Sets the catalog property value. Catalog of content that can be approved for deployment by the deployment service. Read-only.
     *  @param Catalog|null $value Value to set for the catalog property.
    */
    public function setCatalog(?Catalog $value ): void {
        $this->catalog = $value;
    }

    /**
     * Sets the deployments property value. Deployments created using the deployment service. Read-only.
     *  @param array<Deployment>|null $value Value to set for the deployments property.
    */
    public function setDeployments(?array $value ): void {
        $this->deployments = $value;
    }

    /**
     * Sets the updatableAssets property value. Assets registered with the deployment service that can receive updates. Read-only.
     *  @param array<UpdatableAsset>|null $value Value to set for the updatableAssets property.
    */
    public function setUpdatableAssets(?array $value ): void {
        $this->updatableAssets = $value;
    }

}
