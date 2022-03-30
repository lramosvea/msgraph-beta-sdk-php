<?php

namespace Microsoft\Graph\Beta\Generated\InformationProtection\VerifySignature;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class VerifySignatureRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var StreamInterface|null $digest  */
    private ?StreamInterface $digest = null;
    
    /** @var StreamInterface|null $signature  */
    private ?StreamInterface $signature = null;
    
    /** @var string|null $signingKeyId  */
    private ?string $signingKeyId = null;
    
    /**
     * Instantiates a new verifySignatureRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VerifySignatureRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): VerifySignatureRequestBody {
        return new VerifySignatureRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the digest property value. 
     * @return StreamInterface|null
    */
    public function getDigest(): ?StreamInterface {
        return $this->digest;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'digest' => function (self $o, ParseNode $n) { $o->setDigest($n->getBinaryContent()); },
            'signature' => function (self $o, ParseNode $n) { $o->setSignature($n->getBinaryContent()); },
            'signingKeyId' => function (self $o, ParseNode $n) { $o->setSigningKeyId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the signature property value. 
     * @return StreamInterface|null
    */
    public function getSignature(): ?StreamInterface {
        return $this->signature;
    }

    /**
     * Gets the signingKeyId property value. 
     * @return string|null
    */
    public function getSigningKeyId(): ?string {
        return $this->signingKeyId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('digest', $this->digest);
        $writer->writeBinaryContent('signature', $this->signature);
        $writer->writeStringValue('signingKeyId', $this->signingKeyId);
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
     * Sets the digest property value. 
     *  @param StreamInterface|null $value Value to set for the digest property.
    */
    public function setDigest(?StreamInterface $value ): void {
        $this->digest = $value;
    }

    /**
     * Sets the signature property value. 
     *  @param StreamInterface|null $value Value to set for the signature property.
    */
    public function setSignature(?StreamInterface $value ): void {
        $this->signature = $value;
    }

    /**
     * Sets the signingKeyId property value. 
     *  @param string|null $value Value to set for the signingKeyId property.
    */
    public function setSigningKeyId(?string $value ): void {
        $this->signingKeyId = $value;
    }

}
