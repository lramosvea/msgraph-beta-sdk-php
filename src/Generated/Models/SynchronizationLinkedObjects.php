<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SynchronizationLinkedObjects implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var SynchronizationJobSubject|null $manager The manager property
    */
    private ?SynchronizationJobSubject $manager = null;
    
    /**
     * @var array<SynchronizationJobSubject>|null $members All group members that you would like to provision.
    */
    private ?array $members = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<SynchronizationJobSubject>|null $owners The owners property
    */
    private ?array $owners = null;
    
    /**
     * Instantiates a new synchronizationLinkedObjects and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.synchronizationLinkedObjects');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationLinkedObjects
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationLinkedObjects {
        return new SynchronizationLinkedObjects();
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
        $o = $this;
        return  [
            'manager' => function (ParseNode $n) use ($o) { $o->setManager($n->getObjectValue(array(SynchronizationJobSubject::class, 'createFromDiscriminatorValue'))); },
            'members' => function (ParseNode $n) use ($o) { $o->setMembers($n->getCollectionOfObjectValues(array(SynchronizationJobSubject::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'owners' => function (ParseNode $n) use ($o) { $o->setOwners($n->getCollectionOfObjectValues(array(SynchronizationJobSubject::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the manager property value. The manager property
     * @return SynchronizationJobSubject|null
    */
    public function getManager(): ?SynchronizationJobSubject {
        return $this->manager;
    }

    /**
     * Gets the members property value. All group members that you would like to provision.
     * @return array<SynchronizationJobSubject>|null
    */
    public function getMembers(): ?array {
        return $this->members;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the owners property value. The owners property
     * @return array<SynchronizationJobSubject>|null
    */
    public function getOwners(): ?array {
        return $this->owners;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('manager', $this->manager);
        $writer->writeCollectionOfObjectValues('members', $this->members);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfObjectValues('owners', $this->owners);
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
     * Sets the manager property value. The manager property
     *  @param SynchronizationJobSubject|null $value Value to set for the manager property.
    */
    public function setManager(?SynchronizationJobSubject $value ): void {
        $this->manager = $value;
    }

    /**
     * Sets the members property value. All group members that you would like to provision.
     *  @param array<SynchronizationJobSubject>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value ): void {
        $this->members = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the owners property value. The owners property
     *  @param array<SynchronizationJobSubject>|null $value Value to set for the owners property.
    */
    public function setOwners(?array $value ): void {
        $this->owners = $value;
    }

}
