<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SoftwareUpdateReference extends DeployableContent implements Parsable 
{
    /**
     * Instantiates a new SoftwareUpdateReference and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdates.softwareUpdateReference');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SoftwareUpdateReference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SoftwareUpdateReference {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.windowsUpdates.expeditedQualityUpdateReference': return new ExpeditedQualityUpdateReference();
                case '#microsoft.graph.windowsUpdates.featureUpdateReference': return new FeatureUpdateReference();
                case '#microsoft.graph.windowsUpdates.qualityUpdateReference': return new QualityUpdateReference();
                case '#microsoft.graph.windowsUpdates.windowsUpdateReference': return new WindowsUpdateReference();
            }
        }
        return new SoftwareUpdateReference();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

}
