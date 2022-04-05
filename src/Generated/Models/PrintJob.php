<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrintJob extends Entity 
{
    /** @var PrintJobConfiguration|null $configuration A group of settings that a printer should use to print a job. */
    private ?PrintJobConfiguration $configuration = null;
    
    /** @var UserIdentity|null $createdBy Read-only. Nullable. */
    private ?UserIdentity $createdBy = null;
    
    /** @var DateTime|null $createdDateTime The DateTimeOffset when the job was created. Read-only. */
    private ?DateTime $createdDateTime = null;
    
    /** @var array<PrintDocument>|null $documents Read-only. */
    private ?array $documents = null;
    
    /** @var bool|null $isFetchable If true, document can be fetched by printer. */
    private ?bool $isFetchable = null;
    
    /** @var string|null $redirectedFrom Contains the source job URL, if the job has been redirected from another printer. */
    private ?string $redirectedFrom = null;
    
    /** @var string|null $redirectedTo Contains the destination job URL, if the job has been redirected to another printer. */
    private ?string $redirectedTo = null;
    
    /** @var PrintJobStatus|null $status The status of the print job. Read-only. */
    private ?PrintJobStatus $status = null;
    
    /** @var array<PrintTask>|null $tasks A list of printTasks that were triggered by this print job. */
    private ?array $tasks = null;
    
    /**
     * Instantiates a new printJob and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintJob
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PrintJob {
        return new PrintJob();
    }

    /**
     * Gets the configuration property value. A group of settings that a printer should use to print a job.
     * @return PrintJobConfiguration|null
    */
    public function getConfiguration(): ?PrintJobConfiguration {
        return $this->configuration;
    }

    /**
     * Gets the createdBy property value. Read-only. Nullable.
     * @return UserIdentity|null
    */
    public function getCreatedBy(): ?UserIdentity {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. The DateTimeOffset when the job was created. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the documents property value. Read-only.
     * @return array<PrintDocument>|null
    */
    public function getDocuments(): ?array {
        return $this->documents;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'configuration' => function (self $o, ParseNode $n) { $o->setConfiguration($n->getObjectValue(PrintJobConfiguration::class)); },
            'createdBy' => function (self $o, ParseNode $n) { $o->setCreatedBy($n->getObjectValue(UserIdentity::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'documents' => function (self $o, ParseNode $n) { $o->setDocuments($n->getCollectionOfObjectValues(PrintDocument::class)); },
            'isFetchable' => function (self $o, ParseNode $n) { $o->setIsFetchable($n->getBooleanValue()); },
            'redirectedFrom' => function (self $o, ParseNode $n) { $o->setRedirectedFrom($n->getStringValue()); },
            'redirectedTo' => function (self $o, ParseNode $n) { $o->setRedirectedTo($n->getStringValue()); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getObjectValue(PrintJobStatus::class)); },
            'tasks' => function (self $o, ParseNode $n) { $o->setTasks($n->getCollectionOfObjectValues(PrintTask::class)); },
        ]);
    }

    /**
     * Gets the isFetchable property value. If true, document can be fetched by printer.
     * @return bool|null
    */
    public function getIsFetchable(): ?bool {
        return $this->isFetchable;
    }

    /**
     * Gets the redirectedFrom property value. Contains the source job URL, if the job has been redirected from another printer.
     * @return string|null
    */
    public function getRedirectedFrom(): ?string {
        return $this->redirectedFrom;
    }

    /**
     * Gets the redirectedTo property value. Contains the destination job URL, if the job has been redirected to another printer.
     * @return string|null
    */
    public function getRedirectedTo(): ?string {
        return $this->redirectedTo;
    }

    /**
     * Gets the status property value. The status of the print job. Read-only.
     * @return PrintJobStatus|null
    */
    public function getStatus(): ?PrintJobStatus {
        return $this->status;
    }

    /**
     * Gets the tasks property value. A list of printTasks that were triggered by this print job.
     * @return array<PrintTask>|null
    */
    public function getTasks(): ?array {
        return $this->tasks;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('configuration', $this->configuration);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeCollectionOfObjectValues('documents', $this->documents);
        $writer->writeBooleanValue('isFetchable', $this->isFetchable);
        $writer->writeStringValue('redirectedFrom', $this->redirectedFrom);
        $writer->writeStringValue('redirectedTo', $this->redirectedTo);
        $writer->writeObjectValue('status', $this->status);
        $writer->writeCollectionOfObjectValues('tasks', $this->tasks);
    }

    /**
     * Sets the configuration property value. A group of settings that a printer should use to print a job.
     *  @param PrintJobConfiguration|null $value Value to set for the configuration property.
    */
    public function setConfiguration(?PrintJobConfiguration $value ): void {
        $this->configuration = $value;
    }

    /**
     * Sets the createdBy property value. Read-only. Nullable.
     *  @param UserIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?UserIdentity $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. The DateTimeOffset when the job was created. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the documents property value. Read-only.
     *  @param array<PrintDocument>|null $value Value to set for the documents property.
    */
    public function setDocuments(?array $value ): void {
        $this->documents = $value;
    }

    /**
     * Sets the isFetchable property value. If true, document can be fetched by printer.
     *  @param bool|null $value Value to set for the isFetchable property.
    */
    public function setIsFetchable(?bool $value ): void {
        $this->isFetchable = $value;
    }

    /**
     * Sets the redirectedFrom property value. Contains the source job URL, if the job has been redirected from another printer.
     *  @param string|null $value Value to set for the redirectedFrom property.
    */
    public function setRedirectedFrom(?string $value ): void {
        $this->redirectedFrom = $value;
    }

    /**
     * Sets the redirectedTo property value. Contains the destination job URL, if the job has been redirected to another printer.
     *  @param string|null $value Value to set for the redirectedTo property.
    */
    public function setRedirectedTo(?string $value ): void {
        $this->redirectedTo = $value;
    }

    /**
     * Sets the status property value. The status of the print job. Read-only.
     *  @param PrintJobStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PrintJobStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the tasks property value. A list of printTasks that were triggered by this print job.
     *  @param array<PrintTask>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value ): void {
        $this->tasks = $value;
    }

}
