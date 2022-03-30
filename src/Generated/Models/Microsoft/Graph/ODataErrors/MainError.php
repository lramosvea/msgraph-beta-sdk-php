<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MainError implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $code  */
    private ?string $code = null;
    
    /** @var array<ErrorDetails>|null $details  */
    private ?array $details = null;
    
    /** @var InnerError|null $innererror  */
    private ?InnerError $innererror = null;
    
    /** @var string|null $message  */
    private ?string $message = null;
    
    /** @var string|null $target  */
    private ?string $target = null;
    
    /**
     * Instantiates a new MainError and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MainError
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): MainError {
        return new MainError();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the code property value. 
     * @return string|null
    */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Gets the details property value. 
     * @return array<ErrorDetails>|null
    */
    public function getDetails(): ?array {
        return $this->details;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'code' => function (self $o, ParseNode $n) { $o->setCode($n->getStringValue()); },
            'details' => function (self $o, ParseNode $n) { $o->setDetails($n->getCollectionOfObjectValues(ErrorDetails::class)); },
            'innererror' => function (self $o, ParseNode $n) { $o->setInnererror($n->getObjectValue(InnerError::class)); },
            'message' => function (self $o, ParseNode $n) { $o->setMessage($n->getStringValue()); },
            'target' => function (self $o, ParseNode $n) { $o->setTarget($n->getStringValue()); },
        ];
    }

    /**
     * Gets the innererror property value. 
     * @return InnerError|null
    */
    public function getInnererror(): ?InnerError {
        return $this->innererror;
    }

    /**
     * Gets the message property value. 
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the target property value. 
     * @return string|null
    */
    public function getTarget(): ?string {
        return $this->target;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('code', $this->code);
        $writer->writeCollectionOfObjectValues('details', $this->details);
        $writer->writeObjectValue('innererror', $this->innererror);
        $writer->writeStringValue('message', $this->message);
        $writer->writeStringValue('target', $this->target);
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
     * Sets the code property value. 
     *  @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value ): void {
        $this->code = $value;
    }

    /**
     * Sets the details property value. 
     *  @param array<ErrorDetails>|null $value Value to set for the details property.
    */
    public function setDetails(?array $value ): void {
        $this->details = $value;
    }

    /**
     * Sets the innererror property value. 
     *  @param InnerError|null $value Value to set for the innererror property.
    */
    public function setInnererror(?InnerError $value ): void {
        $this->innererror = $value;
    }

    /**
     * Sets the message property value. 
     *  @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value ): void {
        $this->message = $value;
    }

    /**
     * Sets the target property value. 
     *  @param string|null $value Value to set for the target property.
    */
    public function setTarget(?string $value ): void {
        $this->target = $value;
    }

}
