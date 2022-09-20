<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MicrosoftTunnelHealthThreshold extends Entity implements Parsable 
{
    /**
     * @var int|null $defaultHealthyThreshold The default threshold for being healthy
    */
    private ?int $defaultHealthyThreshold = null;
    
    /**
     * @var int|null $defaultUnhealthyThreshold The default threshold for being unhealthy
    */
    private ?int $defaultUnhealthyThreshold = null;
    
    /**
     * @var int|null $healthyThreshold The threshold for being healthy
    */
    private ?int $healthyThreshold = null;
    
    /**
     * @var int|null $unhealthyThreshold The threshold for being unhealthy
    */
    private ?int $unhealthyThreshold = null;
    
    /**
     * Instantiates a new MicrosoftTunnelHealthThreshold and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.microsoftTunnelHealthThreshold');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftTunnelHealthThreshold
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftTunnelHealthThreshold {
        return new MicrosoftTunnelHealthThreshold();
    }

    /**
     * Gets the defaultHealthyThreshold property value. The default threshold for being healthy
     * @return int|null
    */
    public function getDefaultHealthyThreshold(): ?int {
        return $this->defaultHealthyThreshold;
    }

    /**
     * Gets the defaultUnhealthyThreshold property value. The default threshold for being unhealthy
     * @return int|null
    */
    public function getDefaultUnhealthyThreshold(): ?int {
        return $this->defaultUnhealthyThreshold;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultHealthyThreshold' => function (ParseNode $n) use ($o) { $o->setDefaultHealthyThreshold($n->getIntegerValue()); },
            'defaultUnhealthyThreshold' => function (ParseNode $n) use ($o) { $o->setDefaultUnhealthyThreshold($n->getIntegerValue()); },
            'healthyThreshold' => function (ParseNode $n) use ($o) { $o->setHealthyThreshold($n->getIntegerValue()); },
            'unhealthyThreshold' => function (ParseNode $n) use ($o) { $o->setUnhealthyThreshold($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the healthyThreshold property value. The threshold for being healthy
     * @return int|null
    */
    public function getHealthyThreshold(): ?int {
        return $this->healthyThreshold;
    }

    /**
     * Gets the unhealthyThreshold property value. The threshold for being unhealthy
     * @return int|null
    */
    public function getUnhealthyThreshold(): ?int {
        return $this->unhealthyThreshold;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('defaultHealthyThreshold', $this->defaultHealthyThreshold);
        $writer->writeIntegerValue('defaultUnhealthyThreshold', $this->defaultUnhealthyThreshold);
        $writer->writeIntegerValue('healthyThreshold', $this->healthyThreshold);
        $writer->writeIntegerValue('unhealthyThreshold', $this->unhealthyThreshold);
    }

    /**
     * Sets the defaultHealthyThreshold property value. The default threshold for being healthy
     *  @param int|null $value Value to set for the defaultHealthyThreshold property.
    */
    public function setDefaultHealthyThreshold(?int $value ): void {
        $this->defaultHealthyThreshold = $value;
    }

    /**
     * Sets the defaultUnhealthyThreshold property value. The default threshold for being unhealthy
     *  @param int|null $value Value to set for the defaultUnhealthyThreshold property.
    */
    public function setDefaultUnhealthyThreshold(?int $value ): void {
        $this->defaultUnhealthyThreshold = $value;
    }

    /**
     * Sets the healthyThreshold property value. The threshold for being healthy
     *  @param int|null $value Value to set for the healthyThreshold property.
    */
    public function setHealthyThreshold(?int $value ): void {
        $this->healthyThreshold = $value;
    }

    /**
     * Sets the unhealthyThreshold property value. The threshold for being unhealthy
     *  @param int|null $value Value to set for the unhealthyThreshold property.
    */
    public function setUnhealthyThreshold(?int $value ): void {
        $this->unhealthyThreshold = $value;
    }

}
