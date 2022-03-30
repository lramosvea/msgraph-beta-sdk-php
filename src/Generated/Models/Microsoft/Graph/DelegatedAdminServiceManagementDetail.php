<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DelegatedAdminServiceManagementDetail extends Entity 
{
    /** @var string|null $serviceId  */
    private ?string $serviceId = null;
    
    /** @var string|null $serviceManagementUrl  */
    private ?string $serviceManagementUrl = null;
    
    /** @var string|null $serviceName  */
    private ?string $serviceName = null;
    
    /**
     * Instantiates a new delegatedAdminServiceManagementDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DelegatedAdminServiceManagementDetail
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DelegatedAdminServiceManagementDetail {
        return new DelegatedAdminServiceManagementDetail();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'serviceId' => function (self $o, ParseNode $n) { $o->setServiceId($n->getStringValue()); },
            'serviceManagementUrl' => function (self $o, ParseNode $n) { $o->setServiceManagementUrl($n->getStringValue()); },
            'serviceName' => function (self $o, ParseNode $n) { $o->setServiceName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the serviceId property value. 
     * @return string|null
    */
    public function getServiceId(): ?string {
        return $this->serviceId;
    }

    /**
     * Gets the serviceManagementUrl property value. 
     * @return string|null
    */
    public function getServiceManagementUrl(): ?string {
        return $this->serviceManagementUrl;
    }

    /**
     * Gets the serviceName property value. 
     * @return string|null
    */
    public function getServiceName(): ?string {
        return $this->serviceName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('serviceId', $this->serviceId);
        $writer->writeStringValue('serviceManagementUrl', $this->serviceManagementUrl);
        $writer->writeStringValue('serviceName', $this->serviceName);
    }

    /**
     * Sets the serviceId property value. 
     *  @param string|null $value Value to set for the serviceId property.
    */
    public function setServiceId(?string $value ): void {
        $this->serviceId = $value;
    }

    /**
     * Sets the serviceManagementUrl property value. 
     *  @param string|null $value Value to set for the serviceManagementUrl property.
    */
    public function setServiceManagementUrl(?string $value ): void {
        $this->serviceManagementUrl = $value;
    }

    /**
     * Sets the serviceName property value. 
     *  @param string|null $value Value to set for the serviceName property.
    */
    public function setServiceName(?string $value ): void {
        $this->serviceName = $value;
    }

}
