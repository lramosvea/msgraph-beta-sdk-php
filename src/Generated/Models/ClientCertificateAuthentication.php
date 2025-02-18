<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ClientCertificateAuthentication extends ApiAuthenticationConfigurationBase implements Parsable 
{
    /**
     * @var array<Pkcs12CertificateInformation>|null $certificateList The list of certificates uploaded for this API connector.
    */
    private ?array $certificateList = null;
    
    /**
     * Instantiates a new ClientCertificateAuthentication and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.clientCertificateAuthentication');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClientCertificateAuthentication
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClientCertificateAuthentication {
        return new ClientCertificateAuthentication();
    }

    /**
     * Gets the certificateList property value. The list of certificates uploaded for this API connector.
     * @return array<Pkcs12CertificateInformation>|null
    */
    public function getCertificateList(): ?array {
        return $this->certificateList;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateList' => function (ParseNode $n) use ($o) { $o->setCertificateList($n->getCollectionOfObjectValues(array(Pkcs12CertificateInformation::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('certificateList', $this->certificateList);
    }

    /**
     * Sets the certificateList property value. The list of certificates uploaded for this API connector.
     *  @param array<Pkcs12CertificateInformation>|null $value Value to set for the certificateList property.
    */
    public function setCertificateList(?array $value ): void {
        $this->certificateList = $value;
    }

}
