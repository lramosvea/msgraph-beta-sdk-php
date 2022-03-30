<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnsupportedGroupPolicyExtension extends Entity 
{
    /** @var string|null $extensionType ExtensionType of the unsupported extension. */
    private ?string $extensionType = null;
    
    /** @var string|null $namespaceUrl Namespace Url of the unsupported extension. */
    private ?string $namespaceUrl = null;
    
    /** @var string|null $nodeName Node name of the unsupported extension. */
    private ?string $nodeName = null;
    
    /** @var GroupPolicySettingScope|null $settingScope Setting Scope of the unsupported extension. Possible values are: unknown, device, user. */
    private ?GroupPolicySettingScope $settingScope = null;
    
    /**
     * Instantiates a new unsupportedGroupPolicyExtension and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnsupportedGroupPolicyExtension
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UnsupportedGroupPolicyExtension {
        return new UnsupportedGroupPolicyExtension();
    }

    /**
     * Gets the extensionType property value. ExtensionType of the unsupported extension.
     * @return string|null
    */
    public function getExtensionType(): ?string {
        return $this->extensionType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'extensionType' => function (self $o, ParseNode $n) { $o->setExtensionType($n->getStringValue()); },
            'namespaceUrl' => function (self $o, ParseNode $n) { $o->setNamespaceUrl($n->getStringValue()); },
            'nodeName' => function (self $o, ParseNode $n) { $o->setNodeName($n->getStringValue()); },
            'settingScope' => function (self $o, ParseNode $n) { $o->setSettingScope($n->getEnumValue(GroupPolicySettingScope::class)); },
        ]);
    }

    /**
     * Gets the namespaceUrl property value. Namespace Url of the unsupported extension.
     * @return string|null
    */
    public function getNamespaceUrl(): ?string {
        return $this->namespaceUrl;
    }

    /**
     * Gets the nodeName property value. Node name of the unsupported extension.
     * @return string|null
    */
    public function getNodeName(): ?string {
        return $this->nodeName;
    }

    /**
     * Gets the settingScope property value. Setting Scope of the unsupported extension. Possible values are: unknown, device, user.
     * @return GroupPolicySettingScope|null
    */
    public function getSettingScope(): ?GroupPolicySettingScope {
        return $this->settingScope;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('extensionType', $this->extensionType);
        $writer->writeStringValue('namespaceUrl', $this->namespaceUrl);
        $writer->writeStringValue('nodeName', $this->nodeName);
        $writer->writeEnumValue('settingScope', $this->settingScope);
    }

    /**
     * Sets the extensionType property value. ExtensionType of the unsupported extension.
     *  @param string|null $value Value to set for the extensionType property.
    */
    public function setExtensionType(?string $value ): void {
        $this->extensionType = $value;
    }

    /**
     * Sets the namespaceUrl property value. Namespace Url of the unsupported extension.
     *  @param string|null $value Value to set for the namespaceUrl property.
    */
    public function setNamespaceUrl(?string $value ): void {
        $this->namespaceUrl = $value;
    }

    /**
     * Sets the nodeName property value. Node name of the unsupported extension.
     *  @param string|null $value Value to set for the nodeName property.
    */
    public function setNodeName(?string $value ): void {
        $this->nodeName = $value;
    }

    /**
     * Sets the settingScope property value. Setting Scope of the unsupported extension. Possible values are: unknown, device, user.
     *  @param GroupPolicySettingScope|null $value Value to set for the settingScope property.
    */
    public function setSettingScope(?GroupPolicySettingScope $value ): void {
        $this->settingScope = $value;
    }

}
