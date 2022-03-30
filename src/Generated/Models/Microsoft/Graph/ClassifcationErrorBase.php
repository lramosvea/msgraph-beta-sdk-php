<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ClassifcationErrorBase implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $code  */
    private ?string $code = null;
    
    /** @var ClassificationInnerError|null $innerError  */
    private ?ClassificationInnerError $innerError = null;
    
    /** @var string|null $message  */
    private ?string $message = null;
    
    /** @var string|null $target  */
    private ?string $target = null;
    
    /**
     * Instantiates a new classifcationErrorBase and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClassifcationErrorBase
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ClassifcationErrorBase {
        return new ClassifcationErrorBase();
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'code' => function (self $o, ParseNode $n) { $o->setCode($n->getStringValue()); },
            'innerError' => function (self $o, ParseNode $n) { $o->setInnerError($n->getObjectValue(ClassificationInnerError::class)); },
            'message' => function (self $o, ParseNode $n) { $o->setMessage($n->getStringValue()); },
            'target' => function (self $o, ParseNode $n) { $o->setTarget($n->getStringValue()); },
        ];
    }

    /**
     * Gets the innerError property value. 
     * @return ClassificationInnerError|null
    */
    public function getInnerError(): ?ClassificationInnerError {
        return $this->innerError;
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
        $writer->writeObjectValue('innerError', $this->innerError);
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
     * Sets the innerError property value. 
     *  @param ClassificationInnerError|null $value Value to set for the innerError property.
    */
    public function setInnerError(?ClassificationInnerError $value ): void {
        $this->innerError = $value;
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
