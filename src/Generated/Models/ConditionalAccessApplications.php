<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessApplications implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var ConditionalAccessFilter|null $applicationFilter The applicationFilter property
    */
    private ?ConditionalAccessFilter $applicationFilter = null;
    
    /**
     * @var array<string>|null $excludeApplications Can be one of the following:  The list of client IDs (appId) explicitly excluded from the policy. Office365 - For the list of apps included in Office365, see Conditional Access target apps: Office 365
    */
    private ?array $excludeApplications = null;
    
    /**
     * @var array<string>|null $includeApplications Can be one of the following:  The list of client IDs (appId) the policy applies to, unless explicitly excluded (in excludeApplications)  All  Office365 - For the list of apps included in Office365, see Conditional Access target apps: Office 365
    */
    private ?array $includeApplications = null;
    
    /**
     * @var array<string>|null $includeAuthenticationContextClassReferences Authentication context class references include. Supported values are c1 through c25.
    */
    private ?array $includeAuthenticationContextClassReferences = null;
    
    /**
     * @var array<string>|null $includeUserActions User actions to include. Supported values are urn:user:registersecurityinfo and urn:user:registerdevice
    */
    private ?array $includeUserActions = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new conditionalAccessApplications and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.conditionalAccessApplications');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessApplications
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessApplications {
        return new ConditionalAccessApplications();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the applicationFilter property value. The applicationFilter property
     * @return ConditionalAccessFilter|null
    */
    public function getApplicationFilter(): ?ConditionalAccessFilter {
        return $this->applicationFilter;
    }

    /**
     * Gets the excludeApplications property value. Can be one of the following:  The list of client IDs (appId) explicitly excluded from the policy. Office365 - For the list of apps included in Office365, see Conditional Access target apps: Office 365
     * @return array<string>|null
    */
    public function getExcludeApplications(): ?array {
        return $this->excludeApplications;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applicationFilter' => function (ParseNode $n) use ($o) { $o->setApplicationFilter($n->getObjectValue(array(ConditionalAccessFilter::class, 'createFromDiscriminatorValue'))); },
            'excludeApplications' => function (ParseNode $n) use ($o) { $o->setExcludeApplications($n->getCollectionOfPrimitiveValues()); },
            'includeApplications' => function (ParseNode $n) use ($o) { $o->setIncludeApplications($n->getCollectionOfPrimitiveValues()); },
            'includeAuthenticationContextClassReferences' => function (ParseNode $n) use ($o) { $o->setIncludeAuthenticationContextClassReferences($n->getCollectionOfPrimitiveValues()); },
            'includeUserActions' => function (ParseNode $n) use ($o) { $o->setIncludeUserActions($n->getCollectionOfPrimitiveValues()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the includeApplications property value. Can be one of the following:  The list of client IDs (appId) the policy applies to, unless explicitly excluded (in excludeApplications)  All  Office365 - For the list of apps included in Office365, see Conditional Access target apps: Office 365
     * @return array<string>|null
    */
    public function getIncludeApplications(): ?array {
        return $this->includeApplications;
    }

    /**
     * Gets the includeAuthenticationContextClassReferences property value. Authentication context class references include. Supported values are c1 through c25.
     * @return array<string>|null
    */
    public function getIncludeAuthenticationContextClassReferences(): ?array {
        return $this->includeAuthenticationContextClassReferences;
    }

    /**
     * Gets the includeUserActions property value. User actions to include. Supported values are urn:user:registersecurityinfo and urn:user:registerdevice
     * @return array<string>|null
    */
    public function getIncludeUserActions(): ?array {
        return $this->includeUserActions;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('applicationFilter', $this->applicationFilter);
        $writer->writeCollectionOfPrimitiveValues('excludeApplications', $this->excludeApplications);
        $writer->writeCollectionOfPrimitiveValues('includeApplications', $this->includeApplications);
        $writer->writeCollectionOfPrimitiveValues('includeAuthenticationContextClassReferences', $this->includeAuthenticationContextClassReferences);
        $writer->writeCollectionOfPrimitiveValues('includeUserActions', $this->includeUserActions);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the applicationFilter property value. The applicationFilter property
     *  @param ConditionalAccessFilter|null $value Value to set for the applicationFilter property.
    */
    public function setApplicationFilter(?ConditionalAccessFilter $value ): void {
        $this->applicationFilter = $value;
    }

    /**
     * Sets the excludeApplications property value. Can be one of the following:  The list of client IDs (appId) explicitly excluded from the policy. Office365 - For the list of apps included in Office365, see Conditional Access target apps: Office 365
     *  @param array<string>|null $value Value to set for the excludeApplications property.
    */
    public function setExcludeApplications(?array $value ): void {
        $this->excludeApplications = $value;
    }

    /**
     * Sets the includeApplications property value. Can be one of the following:  The list of client IDs (appId) the policy applies to, unless explicitly excluded (in excludeApplications)  All  Office365 - For the list of apps included in Office365, see Conditional Access target apps: Office 365
     *  @param array<string>|null $value Value to set for the includeApplications property.
    */
    public function setIncludeApplications(?array $value ): void {
        $this->includeApplications = $value;
    }

    /**
     * Sets the includeAuthenticationContextClassReferences property value. Authentication context class references include. Supported values are c1 through c25.
     *  @param array<string>|null $value Value to set for the includeAuthenticationContextClassReferences property.
    */
    public function setIncludeAuthenticationContextClassReferences(?array $value ): void {
        $this->includeAuthenticationContextClassReferences = $value;
    }

    /**
     * Sets the includeUserActions property value. User actions to include. Supported values are urn:user:registersecurityinfo and urn:user:registerdevice
     *  @param array<string>|null $value Value to set for the includeUserActions property.
    */
    public function setIncludeUserActions(?array $value ): void {
        $this->includeUserActions = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
