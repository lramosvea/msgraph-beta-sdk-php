<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class PurchaseInvoiceLine extends Entity implements Parsable 
{
    /**
     * @var Account|null $account The account property
    */
    private ?Account $account = null;
    
    /**
     * @var string|null $accountId The accountId property
    */
    private ?string $accountId = null;
    
    /**
     * @var string|null $amountExcludingTax The amountExcludingTax property
    */
    private ?string $amountExcludingTax = null;
    
    /**
     * @var string|null $amountIncludingTax The amountIncludingTax property
    */
    private ?string $amountIncludingTax = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var string|null $discountAmount The discountAmount property
    */
    private ?string $discountAmount = null;
    
    /**
     * @var bool|null $discountAppliedBeforeTax The discountAppliedBeforeTax property
    */
    private ?bool $discountAppliedBeforeTax = null;
    
    /**
     * @var string|null $discountPercent The discountPercent property
    */
    private ?string $discountPercent = null;
    
    /**
     * @var string|null $documentId The documentId property
    */
    private ?string $documentId = null;
    
    /**
     * @var Date|null $expectedReceiptDate The expectedReceiptDate property
    */
    private ?Date $expectedReceiptDate = null;
    
    /**
     * @var string|null $invoiceDiscountAllocation The invoiceDiscountAllocation property
    */
    private ?string $invoiceDiscountAllocation = null;
    
    /**
     * @var Item|null $item The item property
    */
    private ?Item $item = null;
    
    /**
     * @var string|null $itemId The itemId property
    */
    private ?string $itemId = null;
    
    /**
     * @var string|null $lineType The lineType property
    */
    private ?string $lineType = null;
    
    /**
     * @var string|null $netAmount The netAmount property
    */
    private ?string $netAmount = null;
    
    /**
     * @var string|null $netAmountIncludingTax The netAmountIncludingTax property
    */
    private ?string $netAmountIncludingTax = null;
    
    /**
     * @var string|null $netTaxAmount The netTaxAmount property
    */
    private ?string $netTaxAmount = null;
    
    /**
     * @var string|null $quantity The quantity property
    */
    private ?string $quantity = null;
    
    /**
     * @var int|null $sequence The sequence property
    */
    private ?int $sequence = null;
    
    /**
     * @var string|null $taxCode The taxCode property
    */
    private ?string $taxCode = null;
    
    /**
     * @var string|null $taxPercent The taxPercent property
    */
    private ?string $taxPercent = null;
    
    /**
     * @var string|null $totalTaxAmount The totalTaxAmount property
    */
    private ?string $totalTaxAmount = null;
    
    /**
     * @var string|null $unitCost The unitCost property
    */
    private ?string $unitCost = null;
    
    /**
     * Instantiates a new purchaseInvoiceLine and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PurchaseInvoiceLine
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PurchaseInvoiceLine {
        return new PurchaseInvoiceLine();
    }

    /**
     * Gets the account property value. The account property
     * @return Account|null
    */
    public function getAccount(): ?Account {
        return $this->account;
    }

    /**
     * Gets the accountId property value. The accountId property
     * @return string|null
    */
    public function getAccountId(): ?string {
        return $this->accountId;
    }

    /**
     * Gets the amountExcludingTax property value. The amountExcludingTax property
     * @return string|null
    */
    public function getAmountExcludingTax(): ?string {
        return $this->amountExcludingTax;
    }

    /**
     * Gets the amountIncludingTax property value. The amountIncludingTax property
     * @return string|null
    */
    public function getAmountIncludingTax(): ?string {
        return $this->amountIncludingTax;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the discountAmount property value. The discountAmount property
     * @return string|null
    */
    public function getDiscountAmount(): ?string {
        return $this->discountAmount;
    }

    /**
     * Gets the discountAppliedBeforeTax property value. The discountAppliedBeforeTax property
     * @return bool|null
    */
    public function getDiscountAppliedBeforeTax(): ?bool {
        return $this->discountAppliedBeforeTax;
    }

    /**
     * Gets the discountPercent property value. The discountPercent property
     * @return string|null
    */
    public function getDiscountPercent(): ?string {
        return $this->discountPercent;
    }

    /**
     * Gets the documentId property value. The documentId property
     * @return string|null
    */
    public function getDocumentId(): ?string {
        return $this->documentId;
    }

    /**
     * Gets the expectedReceiptDate property value. The expectedReceiptDate property
     * @return Date|null
    */
    public function getExpectedReceiptDate(): ?Date {
        return $this->expectedReceiptDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'account' => function (ParseNode $n) use ($o) { $o->setAccount($n->getObjectValue(array(Account::class, 'createFromDiscriminatorValue'))); },
            'accountId' => function (ParseNode $n) use ($o) { $o->setAccountId($n->getStringValue()); },
            'amountExcludingTax' => function (ParseNode $n) use ($o) { $o->setAmountExcludingTax($n->getStringValue()); },
            'amountIncludingTax' => function (ParseNode $n) use ($o) { $o->setAmountIncludingTax($n->getStringValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'discountAmount' => function (ParseNode $n) use ($o) { $o->setDiscountAmount($n->getStringValue()); },
            'discountAppliedBeforeTax' => function (ParseNode $n) use ($o) { $o->setDiscountAppliedBeforeTax($n->getBooleanValue()); },
            'discountPercent' => function (ParseNode $n) use ($o) { $o->setDiscountPercent($n->getStringValue()); },
            'documentId' => function (ParseNode $n) use ($o) { $o->setDocumentId($n->getStringValue()); },
            'expectedReceiptDate' => function (ParseNode $n) use ($o) { $o->setExpectedReceiptDate($n->getDateValue()); },
            'invoiceDiscountAllocation' => function (ParseNode $n) use ($o) { $o->setInvoiceDiscountAllocation($n->getStringValue()); },
            'item' => function (ParseNode $n) use ($o) { $o->setItem($n->getObjectValue(array(Item::class, 'createFromDiscriminatorValue'))); },
            'itemId' => function (ParseNode $n) use ($o) { $o->setItemId($n->getStringValue()); },
            'lineType' => function (ParseNode $n) use ($o) { $o->setLineType($n->getStringValue()); },
            'netAmount' => function (ParseNode $n) use ($o) { $o->setNetAmount($n->getStringValue()); },
            'netAmountIncludingTax' => function (ParseNode $n) use ($o) { $o->setNetAmountIncludingTax($n->getStringValue()); },
            'netTaxAmount' => function (ParseNode $n) use ($o) { $o->setNetTaxAmount($n->getStringValue()); },
            'quantity' => function (ParseNode $n) use ($o) { $o->setQuantity($n->getStringValue()); },
            'sequence' => function (ParseNode $n) use ($o) { $o->setSequence($n->getIntegerValue()); },
            'taxCode' => function (ParseNode $n) use ($o) { $o->setTaxCode($n->getStringValue()); },
            'taxPercent' => function (ParseNode $n) use ($o) { $o->setTaxPercent($n->getStringValue()); },
            'totalTaxAmount' => function (ParseNode $n) use ($o) { $o->setTotalTaxAmount($n->getStringValue()); },
            'unitCost' => function (ParseNode $n) use ($o) { $o->setUnitCost($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the invoiceDiscountAllocation property value. The invoiceDiscountAllocation property
     * @return string|null
    */
    public function getInvoiceDiscountAllocation(): ?string {
        return $this->invoiceDiscountAllocation;
    }

    /**
     * Gets the item property value. The item property
     * @return Item|null
    */
    public function getItem(): ?Item {
        return $this->item;
    }

    /**
     * Gets the itemId property value. The itemId property
     * @return string|null
    */
    public function getItemId(): ?string {
        return $this->itemId;
    }

    /**
     * Gets the lineType property value. The lineType property
     * @return string|null
    */
    public function getLineType(): ?string {
        return $this->lineType;
    }

    /**
     * Gets the netAmount property value. The netAmount property
     * @return string|null
    */
    public function getNetAmount(): ?string {
        return $this->netAmount;
    }

    /**
     * Gets the netAmountIncludingTax property value. The netAmountIncludingTax property
     * @return string|null
    */
    public function getNetAmountIncludingTax(): ?string {
        return $this->netAmountIncludingTax;
    }

    /**
     * Gets the netTaxAmount property value. The netTaxAmount property
     * @return string|null
    */
    public function getNetTaxAmount(): ?string {
        return $this->netTaxAmount;
    }

    /**
     * Gets the quantity property value. The quantity property
     * @return string|null
    */
    public function getQuantity(): ?string {
        return $this->quantity;
    }

    /**
     * Gets the sequence property value. The sequence property
     * @return int|null
    */
    public function getSequence(): ?int {
        return $this->sequence;
    }

    /**
     * Gets the taxCode property value. The taxCode property
     * @return string|null
    */
    public function getTaxCode(): ?string {
        return $this->taxCode;
    }

    /**
     * Gets the taxPercent property value. The taxPercent property
     * @return string|null
    */
    public function getTaxPercent(): ?string {
        return $this->taxPercent;
    }

    /**
     * Gets the totalTaxAmount property value. The totalTaxAmount property
     * @return string|null
    */
    public function getTotalTaxAmount(): ?string {
        return $this->totalTaxAmount;
    }

    /**
     * Gets the unitCost property value. The unitCost property
     * @return string|null
    */
    public function getUnitCost(): ?string {
        return $this->unitCost;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('account', $this->account);
        $writer->writeStringValue('accountId', $this->accountId);
        $writer->writeStringValue('amountExcludingTax', $this->amountExcludingTax);
        $writer->writeStringValue('amountIncludingTax', $this->amountIncludingTax);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('discountAmount', $this->discountAmount);
        $writer->writeBooleanValue('discountAppliedBeforeTax', $this->discountAppliedBeforeTax);
        $writer->writeStringValue('discountPercent', $this->discountPercent);
        $writer->writeStringValue('documentId', $this->documentId);
        $writer->writeDateValue('expectedReceiptDate', $this->expectedReceiptDate);
        $writer->writeStringValue('invoiceDiscountAllocation', $this->invoiceDiscountAllocation);
        $writer->writeObjectValue('item', $this->item);
        $writer->writeStringValue('itemId', $this->itemId);
        $writer->writeStringValue('lineType', $this->lineType);
        $writer->writeStringValue('netAmount', $this->netAmount);
        $writer->writeStringValue('netAmountIncludingTax', $this->netAmountIncludingTax);
        $writer->writeStringValue('netTaxAmount', $this->netTaxAmount);
        $writer->writeStringValue('quantity', $this->quantity);
        $writer->writeIntegerValue('sequence', $this->sequence);
        $writer->writeStringValue('taxCode', $this->taxCode);
        $writer->writeStringValue('taxPercent', $this->taxPercent);
        $writer->writeStringValue('totalTaxAmount', $this->totalTaxAmount);
        $writer->writeStringValue('unitCost', $this->unitCost);
    }

    /**
     * Sets the account property value. The account property
     *  @param Account|null $value Value to set for the account property.
    */
    public function setAccount(?Account $value ): void {
        $this->account = $value;
    }

    /**
     * Sets the accountId property value. The accountId property
     *  @param string|null $value Value to set for the accountId property.
    */
    public function setAccountId(?string $value ): void {
        $this->accountId = $value;
    }

    /**
     * Sets the amountExcludingTax property value. The amountExcludingTax property
     *  @param string|null $value Value to set for the amountExcludingTax property.
    */
    public function setAmountExcludingTax(?string $value ): void {
        $this->amountExcludingTax = $value;
    }

    /**
     * Sets the amountIncludingTax property value. The amountIncludingTax property
     *  @param string|null $value Value to set for the amountIncludingTax property.
    */
    public function setAmountIncludingTax(?string $value ): void {
        $this->amountIncludingTax = $value;
    }

    /**
     * Sets the description property value. The description property
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the discountAmount property value. The discountAmount property
     *  @param string|null $value Value to set for the discountAmount property.
    */
    public function setDiscountAmount(?string $value ): void {
        $this->discountAmount = $value;
    }

    /**
     * Sets the discountAppliedBeforeTax property value. The discountAppliedBeforeTax property
     *  @param bool|null $value Value to set for the discountAppliedBeforeTax property.
    */
    public function setDiscountAppliedBeforeTax(?bool $value ): void {
        $this->discountAppliedBeforeTax = $value;
    }

    /**
     * Sets the discountPercent property value. The discountPercent property
     *  @param string|null $value Value to set for the discountPercent property.
    */
    public function setDiscountPercent(?string $value ): void {
        $this->discountPercent = $value;
    }

    /**
     * Sets the documentId property value. The documentId property
     *  @param string|null $value Value to set for the documentId property.
    */
    public function setDocumentId(?string $value ): void {
        $this->documentId = $value;
    }

    /**
     * Sets the expectedReceiptDate property value. The expectedReceiptDate property
     *  @param Date|null $value Value to set for the expectedReceiptDate property.
    */
    public function setExpectedReceiptDate(?Date $value ): void {
        $this->expectedReceiptDate = $value;
    }

    /**
     * Sets the invoiceDiscountAllocation property value. The invoiceDiscountAllocation property
     *  @param string|null $value Value to set for the invoiceDiscountAllocation property.
    */
    public function setInvoiceDiscountAllocation(?string $value ): void {
        $this->invoiceDiscountAllocation = $value;
    }

    /**
     * Sets the item property value. The item property
     *  @param Item|null $value Value to set for the item property.
    */
    public function setItem(?Item $value ): void {
        $this->item = $value;
    }

    /**
     * Sets the itemId property value. The itemId property
     *  @param string|null $value Value to set for the itemId property.
    */
    public function setItemId(?string $value ): void {
        $this->itemId = $value;
    }

    /**
     * Sets the lineType property value. The lineType property
     *  @param string|null $value Value to set for the lineType property.
    */
    public function setLineType(?string $value ): void {
        $this->lineType = $value;
    }

    /**
     * Sets the netAmount property value. The netAmount property
     *  @param string|null $value Value to set for the netAmount property.
    */
    public function setNetAmount(?string $value ): void {
        $this->netAmount = $value;
    }

    /**
     * Sets the netAmountIncludingTax property value. The netAmountIncludingTax property
     *  @param string|null $value Value to set for the netAmountIncludingTax property.
    */
    public function setNetAmountIncludingTax(?string $value ): void {
        $this->netAmountIncludingTax = $value;
    }

    /**
     * Sets the netTaxAmount property value. The netTaxAmount property
     *  @param string|null $value Value to set for the netTaxAmount property.
    */
    public function setNetTaxAmount(?string $value ): void {
        $this->netTaxAmount = $value;
    }

    /**
     * Sets the quantity property value. The quantity property
     *  @param string|null $value Value to set for the quantity property.
    */
    public function setQuantity(?string $value ): void {
        $this->quantity = $value;
    }

    /**
     * Sets the sequence property value. The sequence property
     *  @param int|null $value Value to set for the sequence property.
    */
    public function setSequence(?int $value ): void {
        $this->sequence = $value;
    }

    /**
     * Sets the taxCode property value. The taxCode property
     *  @param string|null $value Value to set for the taxCode property.
    */
    public function setTaxCode(?string $value ): void {
        $this->taxCode = $value;
    }

    /**
     * Sets the taxPercent property value. The taxPercent property
     *  @param string|null $value Value to set for the taxPercent property.
    */
    public function setTaxPercent(?string $value ): void {
        $this->taxPercent = $value;
    }

    /**
     * Sets the totalTaxAmount property value. The totalTaxAmount property
     *  @param string|null $value Value to set for the totalTaxAmount property.
    */
    public function setTotalTaxAmount(?string $value ): void {
        $this->totalTaxAmount = $value;
    }

    /**
     * Sets the unitCost property value. The unitCost property
     *  @param string|null $value Value to set for the unitCost property.
    */
    public function setUnitCost(?string $value ): void {
        $this->unitCost = $value;
    }

}
