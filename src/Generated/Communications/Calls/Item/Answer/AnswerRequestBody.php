<?php

namespace Microsoft\Graph\Beta\Generated\Communications\Calls\Item\Answer;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\IncomingCallOptions;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\MediaConfig;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Modality;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AnswerRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<Modality>|null $acceptedModalities  */
    private ?array $acceptedModalities = null;
    
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $callbackUri  */
    private ?string $callbackUri = null;
    
    /** @var IncomingCallOptions|null $callOptions  */
    private ?IncomingCallOptions $callOptions = null;
    
    /** @var MediaConfig|null $mediaConfig  */
    private ?MediaConfig $mediaConfig = null;
    
    /** @var int|null $participantCapacity  */
    private ?int $participantCapacity = null;
    
    /**
     * Instantiates a new answerRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnswerRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AnswerRequestBody {
        return new AnswerRequestBody();
    }

    /**
     * Gets the acceptedModalities property value. 
     * @return array<Modality>|null
    */
    public function getAcceptedModalities(): ?array {
        return $this->acceptedModalities;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the callbackUri property value. 
     * @return string|null
    */
    public function getCallbackUri(): ?string {
        return $this->callbackUri;
    }

    /**
     * Gets the callOptions property value. 
     * @return IncomingCallOptions|null
    */
    public function getCallOptions(): ?IncomingCallOptions {
        return $this->callOptions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'acceptedModalities' => function (self $o, ParseNode $n) { $o->setAcceptedModalities($n->getCollectionOfEnumValues(Modality::class)); },
            'callbackUri' => function (self $o, ParseNode $n) { $o->setCallbackUri($n->getStringValue()); },
            'callOptions' => function (self $o, ParseNode $n) { $o->setCallOptions($n->getObjectValue(IncomingCallOptions::class)); },
            'mediaConfig' => function (self $o, ParseNode $n) { $o->setMediaConfig($n->getObjectValue(MediaConfig::class)); },
            'participantCapacity' => function (self $o, ParseNode $n) { $o->setParticipantCapacity($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the mediaConfig property value. 
     * @return MediaConfig|null
    */
    public function getMediaConfig(): ?MediaConfig {
        return $this->mediaConfig;
    }

    /**
     * Gets the participantCapacity property value. 
     * @return int|null
    */
    public function getParticipantCapacity(): ?int {
        return $this->participantCapacity;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfEnumValues('acceptedModalities', $this->acceptedModalities);
        $writer->writeStringValue('callbackUri', $this->callbackUri);
        $writer->writeObjectValue('callOptions', $this->callOptions);
        $writer->writeObjectValue('mediaConfig', $this->mediaConfig);
        $writer->writeIntegerValue('participantCapacity', $this->participantCapacity);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the acceptedModalities property value. 
     *  @param array<Modality>|null $value Value to set for the acceptedModalities property.
    */
    public function setAcceptedModalities(?array $value ): void {
        $this->acceptedModalities = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the callbackUri property value. 
     *  @param string|null $value Value to set for the callbackUri property.
    */
    public function setCallbackUri(?string $value ): void {
        $this->callbackUri = $value;
    }

    /**
     * Sets the callOptions property value. 
     *  @param IncomingCallOptions|null $value Value to set for the callOptions property.
    */
    public function setCallOptions(?IncomingCallOptions $value ): void {
        $this->callOptions = $value;
    }

    /**
     * Sets the mediaConfig property value. 
     *  @param MediaConfig|null $value Value to set for the mediaConfig property.
    */
    public function setMediaConfig(?MediaConfig $value ): void {
        $this->mediaConfig = $value;
    }

    /**
     * Sets the participantCapacity property value. 
     *  @param int|null $value Value to set for the participantCapacity property.
    */
    public function setParticipantCapacity(?int $value ): void {
        $this->participantCapacity = $value;
    }

}
