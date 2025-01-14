<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Win32LobAppRegistryRule extends Win32LobAppRule implements Parsable 
{
    /**
     * @var bool|null $check32BitOn64System A value indicating whether to search the 32-bit registry on 64-bit systems.
    */
    private ?bool $check32BitOn64System = null;
    
    /**
     * @var string|null $comparisonValue The registry comparison value.
    */
    private ?string $comparisonValue = null;
    
    /**
     * @var string|null $keyPath The full path of the registry entry containing the value to detect.
    */
    private ?string $keyPath = null;
    
    /**
     * @var Win32LobAppRegistryRuleOperationType|null $operationType Contains all supported registry data detection type.
    */
    private ?Win32LobAppRegistryRuleOperationType $operationType = null;
    
    /**
     * @var Win32LobAppRuleOperator|null $operator Contains properties for detection operator.
    */
    private ?Win32LobAppRuleOperator $operator = null;
    
    /**
     * @var string|null $valueName The name of the registry value to detect.
    */
    private ?string $valueName = null;
    
    /**
     * Instantiates a new Win32LobAppRegistryRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.win32LobAppRegistryRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppRegistryRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppRegistryRule {
        return new Win32LobAppRegistryRule();
    }

    /**
     * Gets the check32BitOn64System property value. A value indicating whether to search the 32-bit registry on 64-bit systems.
     * @return bool|null
    */
    public function getCheck32BitOn64System(): ?bool {
        return $this->check32BitOn64System;
    }

    /**
     * Gets the comparisonValue property value. The registry comparison value.
     * @return string|null
    */
    public function getComparisonValue(): ?string {
        return $this->comparisonValue;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'check32BitOn64System' => function (ParseNode $n) use ($o) { $o->setCheck32BitOn64System($n->getBooleanValue()); },
            'comparisonValue' => function (ParseNode $n) use ($o) { $o->setComparisonValue($n->getStringValue()); },
            'keyPath' => function (ParseNode $n) use ($o) { $o->setKeyPath($n->getStringValue()); },
            'operationType' => function (ParseNode $n) use ($o) { $o->setOperationType($n->getEnumValue(Win32LobAppRegistryRuleOperationType::class)); },
            'operator' => function (ParseNode $n) use ($o) { $o->setOperator($n->getEnumValue(Win32LobAppRuleOperator::class)); },
            'valueName' => function (ParseNode $n) use ($o) { $o->setValueName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the keyPath property value. The full path of the registry entry containing the value to detect.
     * @return string|null
    */
    public function getKeyPath(): ?string {
        return $this->keyPath;
    }

    /**
     * Gets the operationType property value. Contains all supported registry data detection type.
     * @return Win32LobAppRegistryRuleOperationType|null
    */
    public function getOperationType(): ?Win32LobAppRegistryRuleOperationType {
        return $this->operationType;
    }

    /**
     * Gets the operator property value. Contains properties for detection operator.
     * @return Win32LobAppRuleOperator|null
    */
    public function getOperator(): ?Win32LobAppRuleOperator {
        return $this->operator;
    }

    /**
     * Gets the valueName property value. The name of the registry value to detect.
     * @return string|null
    */
    public function getValueName(): ?string {
        return $this->valueName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('check32BitOn64System', $this->check32BitOn64System);
        $writer->writeStringValue('comparisonValue', $this->comparisonValue);
        $writer->writeStringValue('keyPath', $this->keyPath);
        $writer->writeEnumValue('operationType', $this->operationType);
        $writer->writeEnumValue('operator', $this->operator);
        $writer->writeStringValue('valueName', $this->valueName);
    }

    /**
     * Sets the check32BitOn64System property value. A value indicating whether to search the 32-bit registry on 64-bit systems.
     *  @param bool|null $value Value to set for the check32BitOn64System property.
    */
    public function setCheck32BitOn64System(?bool $value ): void {
        $this->check32BitOn64System = $value;
    }

    /**
     * Sets the comparisonValue property value. The registry comparison value.
     *  @param string|null $value Value to set for the comparisonValue property.
    */
    public function setComparisonValue(?string $value ): void {
        $this->comparisonValue = $value;
    }

    /**
     * Sets the keyPath property value. The full path of the registry entry containing the value to detect.
     *  @param string|null $value Value to set for the keyPath property.
    */
    public function setKeyPath(?string $value ): void {
        $this->keyPath = $value;
    }

    /**
     * Sets the operationType property value. Contains all supported registry data detection type.
     *  @param Win32LobAppRegistryRuleOperationType|null $value Value to set for the operationType property.
    */
    public function setOperationType(?Win32LobAppRegistryRuleOperationType $value ): void {
        $this->operationType = $value;
    }

    /**
     * Sets the operator property value. Contains properties for detection operator.
     *  @param Win32LobAppRuleOperator|null $value Value to set for the operator property.
    */
    public function setOperator(?Win32LobAppRuleOperator $value ): void {
        $this->operator = $value;
    }

    /**
     * Sets the valueName property value. The name of the registry value to detect.
     *  @param string|null $value Value to set for the valueName property.
    */
    public function setValueName(?string $value ): void {
        $this->valueName = $value;
    }

}
