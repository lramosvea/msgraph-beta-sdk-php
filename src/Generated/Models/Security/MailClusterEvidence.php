<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MailClusterEvidence extends AlertEvidence implements Parsable 
{
    /**
     * @var string|null $clusterBy The clustering logic of the emails inside the cluster.
    */
    private ?string $clusterBy = null;
    
    /**
     * @var string|null $clusterByValue The value utilized to cluster the similar emails.
    */
    private ?string $clusterByValue = null;
    
    /**
     * @var int|null $emailCount Count of emails in the email cluster.
    */
    private ?int $emailCount = null;
    
    /**
     * @var array<string>|null $networkMessageIds Unique identifiers for the emails in the cluster, generated by Microsoft 365.
    */
    private ?array $networkMessageIds = null;
    
    /**
     * @var string|null $query The query used to identify the email cluster.
    */
    private ?string $query = null;
    
    /**
     * @var string|null $urn Uniform resource name (URN) of the automated investigation where the cluster was identified.
    */
    private ?string $urn = null;
    
    /**
     * Instantiates a new MailClusterEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.mailClusterEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MailClusterEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MailClusterEvidence {
        return new MailClusterEvidence();
    }

    /**
     * Gets the clusterBy property value. The clustering logic of the emails inside the cluster.
     * @return string|null
    */
    public function getClusterBy(): ?string {
        return $this->clusterBy;
    }

    /**
     * Gets the clusterByValue property value. The value utilized to cluster the similar emails.
     * @return string|null
    */
    public function getClusterByValue(): ?string {
        return $this->clusterByValue;
    }

    /**
     * Gets the emailCount property value. Count of emails in the email cluster.
     * @return int|null
    */
    public function getEmailCount(): ?int {
        return $this->emailCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'clusterBy' => function (ParseNode $n) use ($o) { $o->setClusterBy($n->getStringValue()); },
            'clusterByValue' => function (ParseNode $n) use ($o) { $o->setClusterByValue($n->getStringValue()); },
            'emailCount' => function (ParseNode $n) use ($o) { $o->setEmailCount($n->getIntegerValue()); },
            'networkMessageIds' => function (ParseNode $n) use ($o) { $o->setNetworkMessageIds($n->getCollectionOfPrimitiveValues()); },
            'query' => function (ParseNode $n) use ($o) { $o->setQuery($n->getStringValue()); },
            'urn' => function (ParseNode $n) use ($o) { $o->setUrn($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the networkMessageIds property value. Unique identifiers for the emails in the cluster, generated by Microsoft 365.
     * @return array<string>|null
    */
    public function getNetworkMessageIds(): ?array {
        return $this->networkMessageIds;
    }

    /**
     * Gets the query property value. The query used to identify the email cluster.
     * @return string|null
    */
    public function getQuery(): ?string {
        return $this->query;
    }

    /**
     * Gets the urn property value. Uniform resource name (URN) of the automated investigation where the cluster was identified.
     * @return string|null
    */
    public function getUrn(): ?string {
        return $this->urn;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('clusterBy', $this->clusterBy);
        $writer->writeStringValue('clusterByValue', $this->clusterByValue);
        $writer->writeIntegerValue('emailCount', $this->emailCount);
        $writer->writeCollectionOfPrimitiveValues('networkMessageIds', $this->networkMessageIds);
        $writer->writeStringValue('query', $this->query);
        $writer->writeStringValue('urn', $this->urn);
    }

    /**
     * Sets the clusterBy property value. The clustering logic of the emails inside the cluster.
     *  @param string|null $value Value to set for the clusterBy property.
    */
    public function setClusterBy(?string $value ): void {
        $this->clusterBy = $value;
    }

    /**
     * Sets the clusterByValue property value. The value utilized to cluster the similar emails.
     *  @param string|null $value Value to set for the clusterByValue property.
    */
    public function setClusterByValue(?string $value ): void {
        $this->clusterByValue = $value;
    }

    /**
     * Sets the emailCount property value. Count of emails in the email cluster.
     *  @param int|null $value Value to set for the emailCount property.
    */
    public function setEmailCount(?int $value ): void {
        $this->emailCount = $value;
    }

    /**
     * Sets the networkMessageIds property value. Unique identifiers for the emails in the cluster, generated by Microsoft 365.
     *  @param array<string>|null $value Value to set for the networkMessageIds property.
    */
    public function setNetworkMessageIds(?array $value ): void {
        $this->networkMessageIds = $value;
    }

    /**
     * Sets the query property value. The query used to identify the email cluster.
     *  @param string|null $value Value to set for the query property.
    */
    public function setQuery(?string $value ): void {
        $this->query = $value;
    }

    /**
     * Sets the urn property value. Uniform resource name (URN) of the automated investigation where the cluster was identified.
     *  @param string|null $value Value to set for the urn property.
    */
    public function setUrn(?string $value ): void {
        $this->urn = $value;
    }

}
