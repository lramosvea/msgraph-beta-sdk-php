<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrinterBase extends Entity implements Parsable 
{
    /**
     * @var PrinterCapabilities|null $capabilities The capabilities property
    */
    private ?PrinterCapabilities $capabilities = null;
    
    /**
     * @var PrinterDefaults|null $defaults The defaults property
    */
    private ?PrinterDefaults $defaults = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $isAcceptingJobs The isAcceptingJobs property
    */
    private ?bool $isAcceptingJobs = null;
    
    /**
     * @var array<PrintJob>|null $jobs The jobs property
    */
    private ?array $jobs = null;
    
    /**
     * @var PrinterLocation|null $location The location property
    */
    private ?PrinterLocation $location = null;
    
    /**
     * @var string|null $manufacturer The manufacturer property
    */
    private ?string $manufacturer = null;
    
    /**
     * @var string|null $model The model property
    */
    private ?string $model = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var PrinterStatus|null $status The status property
    */
    private ?PrinterStatus $status = null;
    
    /**
     * Instantiates a new printerBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.printerBase');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrinterBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrinterBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.printer': return new Printer();
                case '#microsoft.graph.printerShare': return new PrinterShare();
            }
        }
        return new PrinterBase();
    }

    /**
     * Gets the capabilities property value. The capabilities property
     * @return PrinterCapabilities|null
    */
    public function getCapabilities(): ?PrinterCapabilities {
        return $this->capabilities;
    }

    /**
     * Gets the defaults property value. The defaults property
     * @return PrinterDefaults|null
    */
    public function getDefaults(): ?PrinterDefaults {
        return $this->defaults;
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'capabilities' => function (ParseNode $n) use ($o) { $o->setCapabilities($n->getObjectValue(array(PrinterCapabilities::class, 'createFromDiscriminatorValue'))); },
            'defaults' => function (ParseNode $n) use ($o) { $o->setDefaults($n->getObjectValue(array(PrinterDefaults::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'isAcceptingJobs' => function (ParseNode $n) use ($o) { $o->setIsAcceptingJobs($n->getBooleanValue()); },
            'jobs' => function (ParseNode $n) use ($o) { $o->setJobs($n->getCollectionOfObjectValues(array(PrintJob::class, 'createFromDiscriminatorValue'))); },
            'location' => function (ParseNode $n) use ($o) { $o->setLocation($n->getObjectValue(array(PrinterLocation::class, 'createFromDiscriminatorValue'))); },
            'manufacturer' => function (ParseNode $n) use ($o) { $o->setManufacturer($n->getStringValue()); },
            'model' => function (ParseNode $n) use ($o) { $o->setModel($n->getStringValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getObjectValue(array(PrinterStatus::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the isAcceptingJobs property value. The isAcceptingJobs property
     * @return bool|null
    */
    public function getIsAcceptingJobs(): ?bool {
        return $this->isAcceptingJobs;
    }

    /**
     * Gets the jobs property value. The jobs property
     * @return array<PrintJob>|null
    */
    public function getJobs(): ?array {
        return $this->jobs;
    }

    /**
     * Gets the location property value. The location property
     * @return PrinterLocation|null
    */
    public function getLocation(): ?PrinterLocation {
        return $this->location;
    }

    /**
     * Gets the manufacturer property value. The manufacturer property
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->manufacturer;
    }

    /**
     * Gets the model property value. The model property
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->model;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the status property value. The status property
     * @return PrinterStatus|null
    */
    public function getStatus(): ?PrinterStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('capabilities', $this->capabilities);
        $writer->writeObjectValue('defaults', $this->defaults);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('isAcceptingJobs', $this->isAcceptingJobs);
        $writer->writeCollectionOfObjectValues('jobs', $this->jobs);
        $writer->writeObjectValue('location', $this->location);
        $writer->writeStringValue('manufacturer', $this->manufacturer);
        $writer->writeStringValue('model', $this->model);
        $writer->writeStringValue('name', $this->name);
        $writer->writeObjectValue('status', $this->status);
    }

    /**
     * Sets the capabilities property value. The capabilities property
     *  @param PrinterCapabilities|null $value Value to set for the capabilities property.
    */
    public function setCapabilities(?PrinterCapabilities $value ): void {
        $this->capabilities = $value;
    }

    /**
     * Sets the defaults property value. The defaults property
     *  @param PrinterDefaults|null $value Value to set for the defaults property.
    */
    public function setDefaults(?PrinterDefaults $value ): void {
        $this->defaults = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isAcceptingJobs property value. The isAcceptingJobs property
     *  @param bool|null $value Value to set for the isAcceptingJobs property.
    */
    public function setIsAcceptingJobs(?bool $value ): void {
        $this->isAcceptingJobs = $value;
    }

    /**
     * Sets the jobs property value. The jobs property
     *  @param array<PrintJob>|null $value Value to set for the jobs property.
    */
    public function setJobs(?array $value ): void {
        $this->jobs = $value;
    }

    /**
     * Sets the location property value. The location property
     *  @param PrinterLocation|null $value Value to set for the location property.
    */
    public function setLocation(?PrinterLocation $value ): void {
        $this->location = $value;
    }

    /**
     * Sets the manufacturer property value. The manufacturer property
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value ): void {
        $this->manufacturer = $value;
    }

    /**
     * Sets the model property value. The model property
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value ): void {
        $this->model = $value;
    }

    /**
     * Sets the name property value. The name property
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param PrinterStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PrinterStatus $value ): void {
        $this->status = $value;
    }

}
