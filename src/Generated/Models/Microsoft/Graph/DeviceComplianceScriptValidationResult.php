<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceComplianceScriptValidationResult implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<DeviceComplianceScriptRuleError>|null $ruleErrors Errors in json for the script for rules. */
    private ?array $ruleErrors = null;
    
    /** @var array<DeviceComplianceScriptRule>|null $rules Parsed rules from json. */
    private ?array $rules = null;
    
    /** @var array<DeviceComplianceScriptError>|null $scriptErrors Errors in json for the script. */
    private ?array $scriptErrors = null;
    
    /**
     * Instantiates a new deviceComplianceScriptValidationResult and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceComplianceScriptValidationResult
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceComplianceScriptValidationResult {
        return new DeviceComplianceScriptValidationResult();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'ruleErrors' => function (self $o, ParseNode $n) { $o->setRuleErrors($n->getCollectionOfObjectValues(DeviceComplianceScriptRuleError::class)); },
            'rules' => function (self $o, ParseNode $n) { $o->setRules($n->getCollectionOfObjectValues(DeviceComplianceScriptRule::class)); },
            'scriptErrors' => function (self $o, ParseNode $n) { $o->setScriptErrors($n->getCollectionOfObjectValues(DeviceComplianceScriptError::class)); },
        ];
    }

    /**
     * Gets the ruleErrors property value. Errors in json for the script for rules.
     * @return array<DeviceComplianceScriptRuleError>|null
    */
    public function getRuleErrors(): ?array {
        return $this->ruleErrors;
    }

    /**
     * Gets the rules property value. Parsed rules from json.
     * @return array<DeviceComplianceScriptRule>|null
    */
    public function getRules(): ?array {
        return $this->rules;
    }

    /**
     * Gets the scriptErrors property value. Errors in json for the script.
     * @return array<DeviceComplianceScriptError>|null
    */
    public function getScriptErrors(): ?array {
        return $this->scriptErrors;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('ruleErrors', $this->ruleErrors);
        $writer->writeCollectionOfObjectValues('rules', $this->rules);
        $writer->writeCollectionOfObjectValues('scriptErrors', $this->scriptErrors);
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
     * Sets the ruleErrors property value. Errors in json for the script for rules.
     *  @param array<DeviceComplianceScriptRuleError>|null $value Value to set for the ruleErrors property.
    */
    public function setRuleErrors(?array $value ): void {
        $this->ruleErrors = $value;
    }

    /**
     * Sets the rules property value. Parsed rules from json.
     *  @param array<DeviceComplianceScriptRule>|null $value Value to set for the rules property.
    */
    public function setRules(?array $value ): void {
        $this->rules = $value;
    }

    /**
     * Sets the scriptErrors property value. Errors in json for the script.
     *  @param array<DeviceComplianceScriptError>|null $value Value to set for the scriptErrors property.
    */
    public function setScriptErrors(?array $value ): void {
        $this->scriptErrors = $value;
    }

}
