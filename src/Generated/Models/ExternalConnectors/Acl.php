<?php

namespace Microsoft\Graph\Beta\Generated\Models\ExternalConnectors;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Acl implements AdditionalDataHolder, Parsable 
{
    /** @var AccessType|null $accessType The access granted to the identity. Possible values are: grant, deny, unknownFutureValue. */
    private ?AccessType $accessType = null;
    
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var IdentitySourceType|null $identitySource The source of identity. Possible values are azureActiveDirectory or external. */
    private ?IdentitySourceType $identitySource = null;
    
    /** @var AclType|null $type The type of identity. Possible values are: user, group, everyone, everyoneExceptGuests, externalGroup, unknownFutureValue. */
    private ?AclType $type = null;
    
    /** @var string|null $value The unique identifer of the identity. In case of Azure Active Directory identities, value is set to the object identifier of the user, group or tenant for types user, group and everyone (and everyoneExceptGuests) respectively. In case of external groups value is set to the ID of the externalGroup */
    private ?string $value = null;
    
    /**
     * Instantiates a new acl and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Acl
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Acl {
        return new Acl();
    }

    /**
     * Gets the accessType property value. The access granted to the identity. Possible values are: grant, deny, unknownFutureValue.
     * @return AccessType|null
    */
    public function getAccessType(): ?AccessType {
        return $this->accessType;
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
            'accessType' => function (self $o, ParseNode $n) { $o->setAccessType($n->getEnumValue(AccessType::class)); },
            'identitySource' => function (self $o, ParseNode $n) { $o->setIdentitySource($n->getEnumValue(IdentitySourceType::class)); },
            'type' => function (self $o, ParseNode $n) { $o->setType($n->getEnumValue(AclType::class)); },
            'value' => function (self $o, ParseNode $n) { $o->setValue($n->getStringValue()); },
        ];
    }

    /**
     * Gets the identitySource property value. The source of identity. Possible values are azureActiveDirectory or external.
     * @return IdentitySourceType|null
    */
    public function getIdentitySource(): ?IdentitySourceType {
        return $this->identitySource;
    }

    /**
     * Gets the type property value. The type of identity. Possible values are: user, group, everyone, everyoneExceptGuests, externalGroup, unknownFutureValue.
     * @return AclType|null
    */
    public function getType(): ?AclType {
        return $this->type;
    }

    /**
     * Gets the value property value. The unique identifer of the identity. In case of Azure Active Directory identities, value is set to the object identifier of the user, group or tenant for types user, group and everyone (and everyoneExceptGuests) respectively. In case of external groups value is set to the ID of the externalGroup
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('accessType', $this->accessType);
        $writer->writeEnumValue('identitySource', $this->identitySource);
        $writer->writeEnumValue('type', $this->type);
        $writer->writeStringValue('value', $this->value);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accessType property value. The access granted to the identity. Possible values are: grant, deny, unknownFutureValue.
     *  @param AccessType|null $value Value to set for the accessType property.
    */
    public function setAccessType(?AccessType $value ): void {
        $this->accessType = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the identitySource property value. The source of identity. Possible values are azureActiveDirectory or external.
     *  @param IdentitySourceType|null $value Value to set for the identitySource property.
    */
    public function setIdentitySource(?IdentitySourceType $value ): void {
        $this->identitySource = $value;
    }

    /**
     * Sets the type property value. The type of identity. Possible values are: user, group, everyone, everyoneExceptGuests, externalGroup, unknownFutureValue.
     *  @param AclType|null $value Value to set for the type property.
    */
    public function setType(?AclType $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the value property value. The unique identifer of the identity. In case of Azure Active Directory identities, value is set to the object identifier of the user, group or tenant for types user, group and everyone (and everyoneExceptGuests) respectively. In case of external groups value is set to the ID of the externalGroup
     *  @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value ): void {
        $this->value = $value;
    }

}
