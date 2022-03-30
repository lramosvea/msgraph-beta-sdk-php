<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Media implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $isTranscriptionShown If a file has a transcript, this setting controls if the closed captions / transcription for the media file should be shown to people during viewing. Read-Write. */
    private ?bool $isTranscriptionShown = null;
    
    /** @var MediaSource|null $mediaSource Information about the source of media. Read-only. */
    private ?MediaSource $mediaSource = null;
    
    /**
     * Instantiates a new media and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Media
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Media {
        return new Media();
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
            'isTranscriptionShown' => function (self $o, ParseNode $n) { $o->setIsTranscriptionShown($n->getBooleanValue()); },
            'mediaSource' => function (self $o, ParseNode $n) { $o->setMediaSource($n->getObjectValue(MediaSource::class)); },
        ];
    }

    /**
     * Gets the isTranscriptionShown property value. If a file has a transcript, this setting controls if the closed captions / transcription for the media file should be shown to people during viewing. Read-Write.
     * @return bool|null
    */
    public function getIsTranscriptionShown(): ?bool {
        return $this->isTranscriptionShown;
    }

    /**
     * Gets the mediaSource property value. Information about the source of media. Read-only.
     * @return MediaSource|null
    */
    public function getMediaSource(): ?MediaSource {
        return $this->mediaSource;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isTranscriptionShown', $this->isTranscriptionShown);
        $writer->writeObjectValue('mediaSource', $this->mediaSource);
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
     * Sets the isTranscriptionShown property value. If a file has a transcript, this setting controls if the closed captions / transcription for the media file should be shown to people during viewing. Read-Write.
     *  @param bool|null $value Value to set for the isTranscriptionShown property.
    */
    public function setIsTranscriptionShown(?bool $value ): void {
        $this->isTranscriptionShown = $value;
    }

    /**
     * Sets the mediaSource property value. Information about the source of media. Read-only.
     *  @param MediaSource|null $value Value to set for the mediaSource property.
    */
    public function setMediaSource(?MediaSource $value ): void {
        $this->mediaSource = $value;
    }

}
