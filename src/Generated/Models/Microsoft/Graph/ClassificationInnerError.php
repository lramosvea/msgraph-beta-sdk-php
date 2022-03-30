<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ClassificationInnerError implements AdditionalDataHolder, Parsable 
{
    /** @var string|null $activityId  */
    private ?string $activityId = null;
    
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $clientRequestId  */
    private ?string $clientRequestId = null;
    
    /** @var string|null $code  */
    private ?string $code = null;
    
    /** @var DateTime|null $errorDateTime  */
    private ?DateTime $errorDateTime = null;
    
    /**
     * Instantiates a new classificationInnerError and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClassificationInnerError
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ClassificationInnerError {
        return new ClassificationInnerError();
    }

    /**
     * Gets the activityId property value. 
     * @return string|null
    */
    public function getActivityId(): ?string {
        return $this->activityId;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the clientRequestId property value. 
     * @return string|null
    */
    public function getClientRequestId(): ?string {
        return $this->clientRequestId;
    }

    /**
     * Gets the code property value. 
     * @return string|null
    */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Gets the errorDateTime property value. 
     * @return DateTime|null
    */
    public function getErrorDateTime(): ?DateTime {
        return $this->errorDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'activityId' => function (self $o, ParseNode $n) { $o->setActivityId($n->getStringValue()); },
            'clientRequestId' => function (self $o, ParseNode $n) { $o->setClientRequestId($n->getStringValue()); },
            'code' => function (self $o, ParseNode $n) { $o->setCode($n->getStringValue()); },
            'errorDateTime' => function (self $o, ParseNode $n) { $o->setErrorDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('activityId', $this->activityId);
        $writer->writeStringValue('clientRequestId', $this->clientRequestId);
        $writer->writeStringValue('code', $this->code);
        $writer->writeDateTimeValue('errorDateTime', $this->errorDateTime);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the activityId property value. 
     *  @param string|null $value Value to set for the activityId property.
    */
    public function setActivityId(?string $value ): void {
        $this->activityId = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the clientRequestId property value. 
     *  @param string|null $value Value to set for the clientRequestId property.
    */
    public function setClientRequestId(?string $value ): void {
        $this->clientRequestId = $value;
    }

    /**
     * Sets the code property value. 
     *  @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value ): void {
        $this->code = $value;
    }

    /**
     * Sets the errorDateTime property value. 
     *  @param DateTime|null $value Value to set for the errorDateTime property.
    */
    public function setErrorDateTime(?DateTime $value ): void {
        $this->errorDateTime = $value;
    }

}
