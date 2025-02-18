<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CrossTenantAccessPolicyB2BSetting implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var CrossTenantAccessPolicyTargetConfiguration|null $applications The list of applications targeted with your cross-tenant access policy.
    */
    private ?CrossTenantAccessPolicyTargetConfiguration $applications = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var CrossTenantAccessPolicyTargetConfiguration|null $usersAndGroups The list of users and groups targeted with your cross-tenant access policy.
    */
    private ?CrossTenantAccessPolicyTargetConfiguration $usersAndGroups = null;
    
    /**
     * Instantiates a new crossTenantAccessPolicyB2BSetting and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.crossTenantAccessPolicyB2BSetting');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CrossTenantAccessPolicyB2BSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CrossTenantAccessPolicyB2BSetting {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.crossTenantAccessPolicyTenantRestrictions': return new CrossTenantAccessPolicyTenantRestrictions();
            }
        }
        return new CrossTenantAccessPolicyB2BSetting();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the applications property value. The list of applications targeted with your cross-tenant access policy.
     * @return CrossTenantAccessPolicyTargetConfiguration|null
    */
    public function getApplications(): ?CrossTenantAccessPolicyTargetConfiguration {
        return $this->applications;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applications' => function (ParseNode $n) use ($o) { $o->setApplications($n->getObjectValue(array(CrossTenantAccessPolicyTargetConfiguration::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'usersAndGroups' => function (ParseNode $n) use ($o) { $o->setUsersAndGroups($n->getObjectValue(array(CrossTenantAccessPolicyTargetConfiguration::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the usersAndGroups property value. The list of users and groups targeted with your cross-tenant access policy.
     * @return CrossTenantAccessPolicyTargetConfiguration|null
    */
    public function getUsersAndGroups(): ?CrossTenantAccessPolicyTargetConfiguration {
        return $this->usersAndGroups;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('applications', $this->applications);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('usersAndGroups', $this->usersAndGroups);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the applications property value. The list of applications targeted with your cross-tenant access policy.
     *  @param CrossTenantAccessPolicyTargetConfiguration|null $value Value to set for the applications property.
    */
    public function setApplications(?CrossTenantAccessPolicyTargetConfiguration $value ): void {
        $this->applications = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the usersAndGroups property value. The list of users and groups targeted with your cross-tenant access policy.
     *  @param CrossTenantAccessPolicyTargetConfiguration|null $value Value to set for the usersAndGroups property.
    */
    public function setUsersAndGroups(?CrossTenantAccessPolicyTargetConfiguration $value ): void {
        $this->usersAndGroups = $value;
    }

}
