<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InvitationParticipantInfo implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var EndpointType|null $endpointType The type of endpoint. Possible values are: default, voicemail. */
    private ?EndpointType $endpointType = null;
    
    /** @var bool|null $hidden  */
    private ?bool $hidden = null;
    
    /** @var IdentitySet|null $identity  */
    private ?IdentitySet $identity = null;
    
    /** @var string|null $participantId  */
    private ?string $participantId = null;
    
    /** @var bool|null $removeFromDefaultAudioRoutingGroup  */
    private ?bool $removeFromDefaultAudioRoutingGroup = null;
    
    /** @var string|null $replacesCallId Optional. The call which the target identity is currently a part of. This call will be dropped once the participant is added. */
    private ?string $replacesCallId = null;
    
    /**
     * Instantiates a new invitationParticipantInfo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InvitationParticipantInfo
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): InvitationParticipantInfo {
        return new InvitationParticipantInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the endpointType property value. The type of endpoint. Possible values are: default, voicemail.
     * @return EndpointType|null
    */
    public function getEndpointType(): ?EndpointType {
        return $this->endpointType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'endpointType' => function (self $o, ParseNode $n) { $o->setEndpointType($n->getEnumValue(EndpointType::class)); },
            'hidden' => function (self $o, ParseNode $n) { $o->setHidden($n->getBooleanValue()); },
            'identity' => function (self $o, ParseNode $n) { $o->setIdentity($n->getObjectValue(IdentitySet::class)); },
            'participantId' => function (self $o, ParseNode $n) { $o->setParticipantId($n->getStringValue()); },
            'removeFromDefaultAudioRoutingGroup' => function (self $o, ParseNode $n) { $o->setRemoveFromDefaultAudioRoutingGroup($n->getBooleanValue()); },
            'replacesCallId' => function (self $o, ParseNode $n) { $o->setReplacesCallId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the hidden property value. 
     * @return bool|null
    */
    public function getHidden(): ?bool {
        return $this->hidden;
    }

    /**
     * Gets the identity property value. 
     * @return IdentitySet|null
    */
    public function getIdentity(): ?IdentitySet {
        return $this->identity;
    }

    /**
     * Gets the participantId property value. 
     * @return string|null
    */
    public function getParticipantId(): ?string {
        return $this->participantId;
    }

    /**
     * Gets the removeFromDefaultAudioRoutingGroup property value. 
     * @return bool|null
    */
    public function getRemoveFromDefaultAudioRoutingGroup(): ?bool {
        return $this->removeFromDefaultAudioRoutingGroup;
    }

    /**
     * Gets the replacesCallId property value. Optional. The call which the target identity is currently a part of. This call will be dropped once the participant is added.
     * @return string|null
    */
    public function getReplacesCallId(): ?string {
        return $this->replacesCallId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('endpointType', $this->endpointType);
        $writer->writeBooleanValue('hidden', $this->hidden);
        $writer->writeObjectValue('identity', $this->identity);
        $writer->writeStringValue('participantId', $this->participantId);
        $writer->writeBooleanValue('removeFromDefaultAudioRoutingGroup', $this->removeFromDefaultAudioRoutingGroup);
        $writer->writeStringValue('replacesCallId', $this->replacesCallId);
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
     * Sets the endpointType property value. The type of endpoint. Possible values are: default, voicemail.
     *  @param EndpointType|null $value Value to set for the endpointType property.
    */
    public function setEndpointType(?EndpointType $value ): void {
        $this->endpointType = $value;
    }

    /**
     * Sets the hidden property value. 
     *  @param bool|null $value Value to set for the hidden property.
    */
    public function setHidden(?bool $value ): void {
        $this->hidden = $value;
    }

    /**
     * Sets the identity property value. 
     *  @param IdentitySet|null $value Value to set for the identity property.
    */
    public function setIdentity(?IdentitySet $value ): void {
        $this->identity = $value;
    }

    /**
     * Sets the participantId property value. 
     *  @param string|null $value Value to set for the participantId property.
    */
    public function setParticipantId(?string $value ): void {
        $this->participantId = $value;
    }

    /**
     * Sets the removeFromDefaultAudioRoutingGroup property value. 
     *  @param bool|null $value Value to set for the removeFromDefaultAudioRoutingGroup property.
    */
    public function setRemoveFromDefaultAudioRoutingGroup(?bool $value ): void {
        $this->removeFromDefaultAudioRoutingGroup = $value;
    }

    /**
     * Sets the replacesCallId property value. Optional. The call which the target identity is currently a part of. This call will be dropped once the participant is added.
     *  @param string|null $value Value to set for the replacesCallId property.
    */
    public function setReplacesCallId(?string $value ): void {
        $this->replacesCallId = $value;
    }

}
