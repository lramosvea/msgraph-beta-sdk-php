<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RoleSuccessStatistics implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $permanentFail  */
    private ?int $permanentFail = null;
    
    /** @var int|null $permanentSuccess  */
    private ?int $permanentSuccess = null;
    
    /** @var int|null $removeFail  */
    private ?int $removeFail = null;
    
    /** @var int|null $removeSuccess  */
    private ?int $removeSuccess = null;
    
    /** @var string|null $roleId  */
    private ?string $roleId = null;
    
    /** @var string|null $roleName  */
    private ?string $roleName = null;
    
    /** @var int|null $temporaryFail  */
    private ?int $temporaryFail = null;
    
    /** @var int|null $temporarySuccess  */
    private ?int $temporarySuccess = null;
    
    /** @var int|null $unknownFail  */
    private ?int $unknownFail = null;
    
    /**
     * Instantiates a new roleSuccessStatistics and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RoleSuccessStatistics
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): RoleSuccessStatistics {
        return new RoleSuccessStatistics();
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
        return  [
            'permanentFail' => function (self $o, ParseNode $n) { $o->setPermanentFail($n->getIntegerValue()); },
            'permanentSuccess' => function (self $o, ParseNode $n) { $o->setPermanentSuccess($n->getIntegerValue()); },
            'removeFail' => function (self $o, ParseNode $n) { $o->setRemoveFail($n->getIntegerValue()); },
            'removeSuccess' => function (self $o, ParseNode $n) { $o->setRemoveSuccess($n->getIntegerValue()); },
            'roleId' => function (self $o, ParseNode $n) { $o->setRoleId($n->getStringValue()); },
            'roleName' => function (self $o, ParseNode $n) { $o->setRoleName($n->getStringValue()); },
            'temporaryFail' => function (self $o, ParseNode $n) { $o->setTemporaryFail($n->getIntegerValue()); },
            'temporarySuccess' => function (self $o, ParseNode $n) { $o->setTemporarySuccess($n->getIntegerValue()); },
            'unknownFail' => function (self $o, ParseNode $n) { $o->setUnknownFail($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the permanentFail property value. 
     * @return int|null
    */
    public function getPermanentFail(): ?int {
        return $this->permanentFail;
    }

    /**
     * Gets the permanentSuccess property value. 
     * @return int|null
    */
    public function getPermanentSuccess(): ?int {
        return $this->permanentSuccess;
    }

    /**
     * Gets the removeFail property value. 
     * @return int|null
    */
    public function getRemoveFail(): ?int {
        return $this->removeFail;
    }

    /**
     * Gets the removeSuccess property value. 
     * @return int|null
    */
    public function getRemoveSuccess(): ?int {
        return $this->removeSuccess;
    }

    /**
     * Gets the roleId property value. 
     * @return string|null
    */
    public function getRoleId(): ?string {
        return $this->roleId;
    }

    /**
     * Gets the roleName property value. 
     * @return string|null
    */
    public function getRoleName(): ?string {
        return $this->roleName;
    }

    /**
     * Gets the temporaryFail property value. 
     * @return int|null
    */
    public function getTemporaryFail(): ?int {
        return $this->temporaryFail;
    }

    /**
     * Gets the temporarySuccess property value. 
     * @return int|null
    */
    public function getTemporarySuccess(): ?int {
        return $this->temporarySuccess;
    }

    /**
     * Gets the unknownFail property value. 
     * @return int|null
    */
    public function getUnknownFail(): ?int {
        return $this->unknownFail;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('permanentFail', $this->permanentFail);
        $writer->writeIntegerValue('permanentSuccess', $this->permanentSuccess);
        $writer->writeIntegerValue('removeFail', $this->removeFail);
        $writer->writeIntegerValue('removeSuccess', $this->removeSuccess);
        $writer->writeStringValue('roleId', $this->roleId);
        $writer->writeStringValue('roleName', $this->roleName);
        $writer->writeIntegerValue('temporaryFail', $this->temporaryFail);
        $writer->writeIntegerValue('temporarySuccess', $this->temporarySuccess);
        $writer->writeIntegerValue('unknownFail', $this->unknownFail);
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
     * Sets the permanentFail property value. 
     *  @param int|null $value Value to set for the permanentFail property.
    */
    public function setPermanentFail(?int $value ): void {
        $this->permanentFail = $value;
    }

    /**
     * Sets the permanentSuccess property value. 
     *  @param int|null $value Value to set for the permanentSuccess property.
    */
    public function setPermanentSuccess(?int $value ): void {
        $this->permanentSuccess = $value;
    }

    /**
     * Sets the removeFail property value. 
     *  @param int|null $value Value to set for the removeFail property.
    */
    public function setRemoveFail(?int $value ): void {
        $this->removeFail = $value;
    }

    /**
     * Sets the removeSuccess property value. 
     *  @param int|null $value Value to set for the removeSuccess property.
    */
    public function setRemoveSuccess(?int $value ): void {
        $this->removeSuccess = $value;
    }

    /**
     * Sets the roleId property value. 
     *  @param string|null $value Value to set for the roleId property.
    */
    public function setRoleId(?string $value ): void {
        $this->roleId = $value;
    }

    /**
     * Sets the roleName property value. 
     *  @param string|null $value Value to set for the roleName property.
    */
    public function setRoleName(?string $value ): void {
        $this->roleName = $value;
    }

    /**
     * Sets the temporaryFail property value. 
     *  @param int|null $value Value to set for the temporaryFail property.
    */
    public function setTemporaryFail(?int $value ): void {
        $this->temporaryFail = $value;
    }

    /**
     * Sets the temporarySuccess property value. 
     *  @param int|null $value Value to set for the temporarySuccess property.
    */
    public function setTemporarySuccess(?int $value ): void {
        $this->temporarySuccess = $value;
    }

    /**
     * Sets the unknownFail property value. 
     *  @param int|null $value Value to set for the unknownFail property.
    */
    public function setUnknownFail(?int $value ): void {
        $this->unknownFail = $value;
    }

}
