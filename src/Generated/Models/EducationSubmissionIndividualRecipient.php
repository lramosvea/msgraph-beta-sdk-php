<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationSubmissionIndividualRecipient extends EducationSubmissionRecipient implements Parsable 
{
    /**
     * @var string|null $userId User ID of the user to whom the submission is assigned.
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new EducationSubmissionIndividualRecipient and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationSubmissionIndividualRecipient');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationSubmissionIndividualRecipient
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationSubmissionIndividualRecipient {
        return new EducationSubmissionIndividualRecipient();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the userId property value. User ID of the user to whom the submission is assigned.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('userId', $this->userId);
    }

    /**
     * Sets the userId property value. User ID of the user to whom the submission is assigned.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

}
