<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class PrintUsage extends Entity 
{
    /** @var int|null $completedBlackAndWhiteJobCount  */
    private ?int $completedBlackAndWhiteJobCount = null;
    
    /** @var int|null $completedColorJobCount  */
    private ?int $completedColorJobCount = null;
    
    /** @var int|null $incompleteJobCount  */
    private ?int $incompleteJobCount = null;
    
    /** @var Date|null $usageDate  */
    private ?Date $usageDate = null;
    
    /**
     * Instantiates a new printUsage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintUsage
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PrintUsage {
        return new PrintUsage();
    }

    /**
     * Gets the completedBlackAndWhiteJobCount property value. 
     * @return int|null
    */
    public function getCompletedBlackAndWhiteJobCount(): ?int {
        return $this->completedBlackAndWhiteJobCount;
    }

    /**
     * Gets the completedColorJobCount property value. 
     * @return int|null
    */
    public function getCompletedColorJobCount(): ?int {
        return $this->completedColorJobCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'completedBlackAndWhiteJobCount' => function (self $o, ParseNode $n) { $o->setCompletedBlackAndWhiteJobCount($n->getIntegerValue()); },
            'completedColorJobCount' => function (self $o, ParseNode $n) { $o->setCompletedColorJobCount($n->getIntegerValue()); },
            'incompleteJobCount' => function (self $o, ParseNode $n) { $o->setIncompleteJobCount($n->getIntegerValue()); },
            'usageDate' => function (self $o, ParseNode $n) { $o->setUsageDate($n->getDateValue()); },
        ]);
    }

    /**
     * Gets the incompleteJobCount property value. 
     * @return int|null
    */
    public function getIncompleteJobCount(): ?int {
        return $this->incompleteJobCount;
    }

    /**
     * Gets the usageDate property value. 
     * @return Date|null
    */
    public function getUsageDate(): ?Date {
        return $this->usageDate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('completedBlackAndWhiteJobCount', $this->completedBlackAndWhiteJobCount);
        $writer->writeIntegerValue('completedColorJobCount', $this->completedColorJobCount);
        $writer->writeIntegerValue('incompleteJobCount', $this->incompleteJobCount);
        $writer->writeDateValue('usageDate', $this->usageDate);
    }

    /**
     * Sets the completedBlackAndWhiteJobCount property value. 
     *  @param int|null $value Value to set for the completedBlackAndWhiteJobCount property.
    */
    public function setCompletedBlackAndWhiteJobCount(?int $value ): void {
        $this->completedBlackAndWhiteJobCount = $value;
    }

    /**
     * Sets the completedColorJobCount property value. 
     *  @param int|null $value Value to set for the completedColorJobCount property.
    */
    public function setCompletedColorJobCount(?int $value ): void {
        $this->completedColorJobCount = $value;
    }

    /**
     * Sets the incompleteJobCount property value. 
     *  @param int|null $value Value to set for the incompleteJobCount property.
    */
    public function setIncompleteJobCount(?int $value ): void {
        $this->incompleteJobCount = $value;
    }

    /**
     * Sets the usageDate property value. 
     *  @param Date|null $value Value to set for the usageDate property.
    */
    public function setUsageDate(?Date $value ): void {
        $this->usageDate = $value;
    }

}
