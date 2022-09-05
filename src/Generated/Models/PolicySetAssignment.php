<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PolicySetAssignment extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $lastModifiedDateTime Last modified time of the PolicySetAssignment.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var DeviceAndAppManagementAssignmentTarget|null $target The target group of PolicySetAssignment
    */
    private ?DeviceAndAppManagementAssignmentTarget $target = null;
    
    /**
     * Instantiates a new policySetAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.policySetAssignment');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PolicySetAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PolicySetAssignment {
        return new PolicySetAssignment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'target' => function (ParseNode $n) use ($o) { $o->setTarget($n->getObjectValue(array(DeviceAndAppManagementAssignmentTarget::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. Last modified time of the PolicySetAssignment.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the target property value. The target group of PolicySetAssignment
     * @return DeviceAndAppManagementAssignmentTarget|null
    */
    public function getTarget(): ?DeviceAndAppManagementAssignmentTarget {
        return $this->target;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeObjectValue('target', $this->target);
    }

    /**
     * Sets the lastModifiedDateTime property value. Last modified time of the PolicySetAssignment.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the target property value. The target group of PolicySetAssignment
     *  @param DeviceAndAppManagementAssignmentTarget|null $value Value to set for the target property.
    */
    public function setTarget(?DeviceAndAppManagementAssignmentTarget $value ): void {
        $this->target = $value;
    }

}
