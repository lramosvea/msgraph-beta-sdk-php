<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Teamwork extends Entity 
{
    /** @var array<TeamworkDevice>|null $devices The Teams devices provisioned for the tenant. */
    private ?array $devices = null;
    
    /** @var array<WorkforceIntegration>|null $workforceIntegrations A workforce integration with shifts. */
    private ?array $workforceIntegrations = null;
    
    /**
     * Instantiates a new teamwork and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Teamwork
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Teamwork {
        return new Teamwork();
    }

    /**
     * Gets the devices property value. The Teams devices provisioned for the tenant.
     * @return array<TeamworkDevice>|null
    */
    public function getDevices(): ?array {
        return $this->devices;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'devices' => function (self $o, ParseNode $n) { $o->setDevices($n->getCollectionOfObjectValues(TeamworkDevice::class)); },
            'workforceIntegrations' => function (self $o, ParseNode $n) { $o->setWorkforceIntegrations($n->getCollectionOfObjectValues(WorkforceIntegration::class)); },
        ]);
    }

    /**
     * Gets the workforceIntegrations property value. A workforce integration with shifts.
     * @return array<WorkforceIntegration>|null
    */
    public function getWorkforceIntegrations(): ?array {
        return $this->workforceIntegrations;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('devices', $this->devices);
        $writer->writeCollectionOfObjectValues('workforceIntegrations', $this->workforceIntegrations);
    }

    /**
     * Sets the devices property value. The Teams devices provisioned for the tenant.
     *  @param array<TeamworkDevice>|null $value Value to set for the devices property.
    */
    public function setDevices(?array $value ): void {
        $this->devices = $value;
    }

    /**
     * Sets the workforceIntegrations property value. A workforce integration with shifts.
     *  @param array<WorkforceIntegration>|null $value Value to set for the workforceIntegrations property.
    */
    public function setWorkforceIntegrations(?array $value ): void {
        $this->workforceIntegrations = $value;
    }

}
