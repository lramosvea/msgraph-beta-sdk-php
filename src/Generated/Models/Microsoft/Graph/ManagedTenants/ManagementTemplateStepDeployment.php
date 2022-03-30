<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagementTemplateStepDeployment extends Entity 
{
    /** @var string|null $createdByUserId  */
    private ?string $createdByUserId = null;
    
    /** @var DateTime|null $createdDateTime  */
    private ?DateTime $createdDateTime = null;
    
    /** @var GraphAPIErrorDetails|null $error  */
    private ?GraphAPIErrorDetails $error = null;
    
    /** @var string|null $lastActionByUserId  */
    private ?string $lastActionByUserId = null;
    
    /** @var DateTime|null $lastActionDateTime  */
    private ?DateTime $lastActionDateTime = null;
    
    /** @var ManagementTemplateDeploymentStatus|null $status  */
    private ?ManagementTemplateDeploymentStatus $status = null;
    
    /** @var ManagementTemplateStepVersion|null $templateStepVersion  */
    private ?ManagementTemplateStepVersion $templateStepVersion = null;
    
    /** @var string|null $tenantId  */
    private ?string $tenantId = null;
    
    /**
     * Instantiates a new managementTemplateStepDeployment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagementTemplateStepDeployment
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ManagementTemplateStepDeployment {
        return new ManagementTemplateStepDeployment();
    }

    /**
     * Gets the createdByUserId property value. 
     * @return string|null
    */
    public function getCreatedByUserId(): ?string {
        return $this->createdByUserId;
    }

    /**
     * Gets the createdDateTime property value. 
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the error property value. 
     * @return GraphAPIErrorDetails|null
    */
    public function getError(): ?GraphAPIErrorDetails {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'createdByUserId' => function (self $o, ParseNode $n) { $o->setCreatedByUserId($n->getStringValue()); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'error' => function (self $o, ParseNode $n) { $o->setError($n->getObjectValue(GraphAPIErrorDetails::class)); },
            'lastActionByUserId' => function (self $o, ParseNode $n) { $o->setLastActionByUserId($n->getStringValue()); },
            'lastActionDateTime' => function (self $o, ParseNode $n) { $o->setLastActionDateTime($n->getDateTimeValue()); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getEnumValue(ManagementTemplateDeploymentStatus::class)); },
            'templateStepVersion' => function (self $o, ParseNode $n) { $o->setTemplateStepVersion($n->getObjectValue(ManagementTemplateStepVersion::class)); },
            'tenantId' => function (self $o, ParseNode $n) { $o->setTenantId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastActionByUserId property value. 
     * @return string|null
    */
    public function getLastActionByUserId(): ?string {
        return $this->lastActionByUserId;
    }

    /**
     * Gets the lastActionDateTime property value. 
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        return $this->lastActionDateTime;
    }

    /**
     * Gets the status property value. 
     * @return ManagementTemplateDeploymentStatus|null
    */
    public function getStatus(): ?ManagementTemplateDeploymentStatus {
        return $this->status;
    }

    /**
     * Gets the templateStepVersion property value. 
     * @return ManagementTemplateStepVersion|null
    */
    public function getTemplateStepVersion(): ?ManagementTemplateStepVersion {
        return $this->templateStepVersion;
    }

    /**
     * Gets the tenantId property value. 
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('createdByUserId', $this->createdByUserId);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('error', $this->error);
        $writer->writeStringValue('lastActionByUserId', $this->lastActionByUserId);
        $writer->writeDateTimeValue('lastActionDateTime', $this->lastActionDateTime);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeObjectValue('templateStepVersion', $this->templateStepVersion);
        $writer->writeStringValue('tenantId', $this->tenantId);
    }

    /**
     * Sets the createdByUserId property value. 
     *  @param string|null $value Value to set for the createdByUserId property.
    */
    public function setCreatedByUserId(?string $value ): void {
        $this->createdByUserId = $value;
    }

    /**
     * Sets the createdDateTime property value. 
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the error property value. 
     *  @param GraphAPIErrorDetails|null $value Value to set for the error property.
    */
    public function setError(?GraphAPIErrorDetails $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the lastActionByUserId property value. 
     *  @param string|null $value Value to set for the lastActionByUserId property.
    */
    public function setLastActionByUserId(?string $value ): void {
        $this->lastActionByUserId = $value;
    }

    /**
     * Sets the lastActionDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value ): void {
        $this->lastActionDateTime = $value;
    }

    /**
     * Sets the status property value. 
     *  @param ManagementTemplateDeploymentStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ManagementTemplateDeploymentStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the templateStepVersion property value. 
     *  @param ManagementTemplateStepVersion|null $value Value to set for the templateStepVersion property.
    */
    public function setTemplateStepVersion(?ManagementTemplateStepVersion $value ): void {
        $this->templateStepVersion = $value;
    }

    /**
     * Sets the tenantId property value. 
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

}
