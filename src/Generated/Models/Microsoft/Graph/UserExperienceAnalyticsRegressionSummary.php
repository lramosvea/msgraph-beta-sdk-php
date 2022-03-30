<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsRegressionSummary extends Entity 
{
    /** @var array<UserExperienceAnalyticsMetric>|null $manufacturerRegression The metric values for the user experience analytics Manufacturer regression. */
    private ?array $manufacturerRegression = null;
    
    /** @var array<UserExperienceAnalyticsMetric>|null $modelRegression The metric values for the user experience analytics model regression. */
    private ?array $modelRegression = null;
    
    /** @var array<UserExperienceAnalyticsMetric>|null $operatingSystemRegression The metric values for the user experience analytics operating system regression. */
    private ?array $operatingSystemRegression = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsRegressionSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsRegressionSummary
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsRegressionSummary {
        return new UserExperienceAnalyticsRegressionSummary();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'manufacturerRegression' => function (self $o, ParseNode $n) { $o->setManufacturerRegression($n->getCollectionOfObjectValues(UserExperienceAnalyticsMetric::class)); },
            'modelRegression' => function (self $o, ParseNode $n) { $o->setModelRegression($n->getCollectionOfObjectValues(UserExperienceAnalyticsMetric::class)); },
            'operatingSystemRegression' => function (self $o, ParseNode $n) { $o->setOperatingSystemRegression($n->getCollectionOfObjectValues(UserExperienceAnalyticsMetric::class)); },
        ]);
    }

    /**
     * Gets the manufacturerRegression property value. The metric values for the user experience analytics Manufacturer regression.
     * @return array<UserExperienceAnalyticsMetric>|null
    */
    public function getManufacturerRegression(): ?array {
        return $this->manufacturerRegression;
    }

    /**
     * Gets the modelRegression property value. The metric values for the user experience analytics model regression.
     * @return array<UserExperienceAnalyticsMetric>|null
    */
    public function getModelRegression(): ?array {
        return $this->modelRegression;
    }

    /**
     * Gets the operatingSystemRegression property value. The metric values for the user experience analytics operating system regression.
     * @return array<UserExperienceAnalyticsMetric>|null
    */
    public function getOperatingSystemRegression(): ?array {
        return $this->operatingSystemRegression;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('manufacturerRegression', $this->manufacturerRegression);
        $writer->writeCollectionOfObjectValues('modelRegression', $this->modelRegression);
        $writer->writeCollectionOfObjectValues('operatingSystemRegression', $this->operatingSystemRegression);
    }

    /**
     * Sets the manufacturerRegression property value. The metric values for the user experience analytics Manufacturer regression.
     *  @param array<UserExperienceAnalyticsMetric>|null $value Value to set for the manufacturerRegression property.
    */
    public function setManufacturerRegression(?array $value ): void {
        $this->manufacturerRegression = $value;
    }

    /**
     * Sets the modelRegression property value. The metric values for the user experience analytics model regression.
     *  @param array<UserExperienceAnalyticsMetric>|null $value Value to set for the modelRegression property.
    */
    public function setModelRegression(?array $value ): void {
        $this->modelRegression = $value;
    }

    /**
     * Sets the operatingSystemRegression property value. The metric values for the user experience analytics operating system regression.
     *  @param array<UserExperienceAnalyticsMetric>|null $value Value to set for the operatingSystemRegression property.
    */
    public function setOperatingSystemRegression(?array $value ): void {
        $this->operatingSystemRegression = $value;
    }

}
