<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationSubmissionResource extends Entity 
{
    /** @var string|null $assignmentResourceUrl Pointer to the assignment from which this resource was copied. If this is null, the student uploaded the resource. */
    private ?string $assignmentResourceUrl = null;
    
    /** @var EducationResource|null $resource Resource object. */
    private ?EducationResource $resource = null;
    
    /**
     * Instantiates a new educationSubmissionResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationSubmissionResource
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): EducationSubmissionResource {
        return new EducationSubmissionResource();
    }

    /**
     * Gets the assignmentResourceUrl property value. Pointer to the assignment from which this resource was copied. If this is null, the student uploaded the resource.
     * @return string|null
    */
    public function getAssignmentResourceUrl(): ?string {
        return $this->assignmentResourceUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'assignmentResourceUrl' => function (self $o, ParseNode $n) { $o->setAssignmentResourceUrl($n->getStringValue()); },
            'resource' => function (self $o, ParseNode $n) { $o->setResource($n->getObjectValue(EducationResource::class)); },
        ]);
    }

    /**
     * Gets the resource property value. Resource object.
     * @return EducationResource|null
    */
    public function getResource(): ?EducationResource {
        return $this->resource;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assignmentResourceUrl', $this->assignmentResourceUrl);
        $writer->writeObjectValue('resource', $this->resource);
    }

    /**
     * Sets the assignmentResourceUrl property value. Pointer to the assignment from which this resource was copied. If this is null, the student uploaded the resource.
     *  @param string|null $value Value to set for the assignmentResourceUrl property.
    */
    public function setAssignmentResourceUrl(?string $value ): void {
        $this->assignmentResourceUrl = $value;
    }

    /**
     * Sets the resource property value. Resource object.
     *  @param EducationResource|null $value Value to set for the resource property.
    */
    public function setResource(?EducationResource $value ): void {
        $this->resource = $value;
    }

}
