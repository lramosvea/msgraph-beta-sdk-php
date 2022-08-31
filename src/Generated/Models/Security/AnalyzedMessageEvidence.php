<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AnalyzedMessageEvidence extends AlertEvidence implements Parsable 
{
    /**
     * @var string|null $antiSpamDirection Direction of the email relative to your network. The possible values are: Inbound, Outbound or Intraorg.
    */
    private ?string $antiSpamDirection = null;
    
    /**
     * @var int|null $attachmentsCount Number of attachments in the email.
    */
    private ?int $attachmentsCount = null;
    
    /**
     * @var string|null $deliveryAction Delivery action of the email. The possible values are: Delivered, DeliveredAsSpam, Junked, Blocked, or Replaced.
    */
    private ?string $deliveryAction = null;
    
    /**
     * @var string|null $deliveryLocation Location where the email was delivered. The possible values are: Inbox, External, JunkFolder, Quarantine, Failed, Dropped, DeletedFolder or Forwarded.
    */
    private ?string $deliveryLocation = null;
    
    /**
     * @var string|null $internetMessageId Public-facing identifier for the email that is set by the sending email system.
    */
    private ?string $internetMessageId = null;
    
    /**
     * @var string|null $language Detected language of the email content.
    */
    private ?string $language = null;
    
    /**
     * @var string|null $networkMessageId Unique identifier for the email, generated by Microsoft 365.
    */
    private ?string $networkMessageId = null;
    
    /**
     * @var EmailSender|null $p1Sender The P1 sender.
    */
    private ?EmailSender $p1Sender = null;
    
    /**
     * @var EmailSender|null $p2Sender The P2 sender.
    */
    private ?EmailSender $p2Sender = null;
    
    /**
     * @var DateTime|null $receivedDateTime Date and time when the email was received.
    */
    private ?DateTime $receivedDateTime = null;
    
    /**
     * @var string|null $recipientEmailAddress Email address of the recipient, or email address of the recipient after distribution list expansion.
    */
    private ?string $recipientEmailAddress = null;
    
    /**
     * @var string|null $senderIp IP address of the last detected mail server that relayed the message.
    */
    private ?string $senderIp = null;
    
    /**
     * @var string|null $subject Subject of the email.
    */
    private ?string $subject = null;
    
    /**
     * @var array<string>|null $threatDetectionMethods Collection of methods used to detect malware, phishing, or other threats found in the email.
    */
    private ?array $threatDetectionMethods = null;
    
    /**
     * @var array<string>|null $threats Collection of detection names for malware or other threats found.
    */
    private ?array $threats = null;
    
    /**
     * @var int|null $urlCount Number of embedded URLs in the email.
    */
    private ?int $urlCount = null;
    
    /**
     * @var array<string>|null $urls Collection of the URLs contained in this email.
    */
    private ?array $urls = null;
    
    /**
     * @var string|null $urn Uniform resource name (URN) of the automated investigation where the cluster was identified.
    */
    private ?string $urn = null;
    
    /**
     * Instantiates a new AnalyzedMessageEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.analyzedMessageEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnalyzedMessageEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AnalyzedMessageEvidence {
        return new AnalyzedMessageEvidence();
    }

    /**
     * Gets the antiSpamDirection property value. Direction of the email relative to your network. The possible values are: Inbound, Outbound or Intraorg.
     * @return string|null
    */
    public function getAntiSpamDirection(): ?string {
        return $this->antiSpamDirection;
    }

    /**
     * Gets the attachmentsCount property value. Number of attachments in the email.
     * @return int|null
    */
    public function getAttachmentsCount(): ?int {
        return $this->attachmentsCount;
    }

    /**
     * Gets the deliveryAction property value. Delivery action of the email. The possible values are: Delivered, DeliveredAsSpam, Junked, Blocked, or Replaced.
     * @return string|null
    */
    public function getDeliveryAction(): ?string {
        return $this->deliveryAction;
    }

    /**
     * Gets the deliveryLocation property value. Location where the email was delivered. The possible values are: Inbox, External, JunkFolder, Quarantine, Failed, Dropped, DeletedFolder or Forwarded.
     * @return string|null
    */
    public function getDeliveryLocation(): ?string {
        return $this->deliveryLocation;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'antiSpamDirection' => function (ParseNode $n) use ($o) { $o->setAntiSpamDirection($n->getStringValue()); },
            'attachmentsCount' => function (ParseNode $n) use ($o) { $o->setAttachmentsCount($n->getIntegerValue()); },
            'deliveryAction' => function (ParseNode $n) use ($o) { $o->setDeliveryAction($n->getStringValue()); },
            'deliveryLocation' => function (ParseNode $n) use ($o) { $o->setDeliveryLocation($n->getStringValue()); },
            'internetMessageId' => function (ParseNode $n) use ($o) { $o->setInternetMessageId($n->getStringValue()); },
            'language' => function (ParseNode $n) use ($o) { $o->setLanguage($n->getStringValue()); },
            'networkMessageId' => function (ParseNode $n) use ($o) { $o->setNetworkMessageId($n->getStringValue()); },
            'p1Sender' => function (ParseNode $n) use ($o) { $o->setP1Sender($n->getObjectValue(array(EmailSender::class, 'createFromDiscriminatorValue'))); },
            'p2Sender' => function (ParseNode $n) use ($o) { $o->setP2Sender($n->getObjectValue(array(EmailSender::class, 'createFromDiscriminatorValue'))); },
            'receivedDateTime' => function (ParseNode $n) use ($o) { $o->setReceivedDateTime($n->getDateTimeValue()); },
            'recipientEmailAddress' => function (ParseNode $n) use ($o) { $o->setRecipientEmailAddress($n->getStringValue()); },
            'senderIp' => function (ParseNode $n) use ($o) { $o->setSenderIp($n->getStringValue()); },
            'subject' => function (ParseNode $n) use ($o) { $o->setSubject($n->getStringValue()); },
            'threatDetectionMethods' => function (ParseNode $n) use ($o) { $o->setThreatDetectionMethods($n->getCollectionOfPrimitiveValues()); },
            'threats' => function (ParseNode $n) use ($o) { $o->setThreats($n->getCollectionOfPrimitiveValues()); },
            'urlCount' => function (ParseNode $n) use ($o) { $o->setUrlCount($n->getIntegerValue()); },
            'urls' => function (ParseNode $n) use ($o) { $o->setUrls($n->getCollectionOfPrimitiveValues()); },
            'urn' => function (ParseNode $n) use ($o) { $o->setUrn($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the internetMessageId property value. Public-facing identifier for the email that is set by the sending email system.
     * @return string|null
    */
    public function getInternetMessageId(): ?string {
        return $this->internetMessageId;
    }

    /**
     * Gets the language property value. Detected language of the email content.
     * @return string|null
    */
    public function getLanguage(): ?string {
        return $this->language;
    }

    /**
     * Gets the networkMessageId property value. Unique identifier for the email, generated by Microsoft 365.
     * @return string|null
    */
    public function getNetworkMessageId(): ?string {
        return $this->networkMessageId;
    }

    /**
     * Gets the p1Sender property value. The P1 sender.
     * @return EmailSender|null
    */
    public function getP1Sender(): ?EmailSender {
        return $this->p1Sender;
    }

    /**
     * Gets the p2Sender property value. The P2 sender.
     * @return EmailSender|null
    */
    public function getP2Sender(): ?EmailSender {
        return $this->p2Sender;
    }

    /**
     * Gets the receivedDateTime property value. Date and time when the email was received.
     * @return DateTime|null
    */
    public function getReceivedDateTime(): ?DateTime {
        return $this->receivedDateTime;
    }

    /**
     * Gets the recipientEmailAddress property value. Email address of the recipient, or email address of the recipient after distribution list expansion.
     * @return string|null
    */
    public function getRecipientEmailAddress(): ?string {
        return $this->recipientEmailAddress;
    }

    /**
     * Gets the senderIp property value. IP address of the last detected mail server that relayed the message.
     * @return string|null
    */
    public function getSenderIp(): ?string {
        return $this->senderIp;
    }

    /**
     * Gets the subject property value. Subject of the email.
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Gets the threatDetectionMethods property value. Collection of methods used to detect malware, phishing, or other threats found in the email.
     * @return array<string>|null
    */
    public function getThreatDetectionMethods(): ?array {
        return $this->threatDetectionMethods;
    }

    /**
     * Gets the threats property value. Collection of detection names for malware or other threats found.
     * @return array<string>|null
    */
    public function getThreats(): ?array {
        return $this->threats;
    }

    /**
     * Gets the urlCount property value. Number of embedded URLs in the email.
     * @return int|null
    */
    public function getUrlCount(): ?int {
        return $this->urlCount;
    }

    /**
     * Gets the urls property value. Collection of the URLs contained in this email.
     * @return array<string>|null
    */
    public function getUrls(): ?array {
        return $this->urls;
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
        $writer->writeStringValue('antiSpamDirection', $this->antiSpamDirection);
        $writer->writeIntegerValue('attachmentsCount', $this->attachmentsCount);
        $writer->writeStringValue('deliveryAction', $this->deliveryAction);
        $writer->writeStringValue('deliveryLocation', $this->deliveryLocation);
        $writer->writeStringValue('internetMessageId', $this->internetMessageId);
        $writer->writeStringValue('language', $this->language);
        $writer->writeStringValue('networkMessageId', $this->networkMessageId);
        $writer->writeObjectValue('p1Sender', $this->p1Sender);
        $writer->writeObjectValue('p2Sender', $this->p2Sender);
        $writer->writeDateTimeValue('receivedDateTime', $this->receivedDateTime);
        $writer->writeStringValue('recipientEmailAddress', $this->recipientEmailAddress);
        $writer->writeStringValue('senderIp', $this->senderIp);
        $writer->writeStringValue('subject', $this->subject);
        $writer->writeCollectionOfPrimitiveValues('threatDetectionMethods', $this->threatDetectionMethods);
        $writer->writeCollectionOfPrimitiveValues('threats', $this->threats);
        $writer->writeIntegerValue('urlCount', $this->urlCount);
        $writer->writeCollectionOfPrimitiveValues('urls', $this->urls);
        $writer->writeStringValue('urn', $this->urn);
    }

    /**
     * Sets the antiSpamDirection property value. Direction of the email relative to your network. The possible values are: Inbound, Outbound or Intraorg.
     *  @param string|null $value Value to set for the antiSpamDirection property.
    */
    public function setAntiSpamDirection(?string $value ): void {
        $this->antiSpamDirection = $value;
    }

    /**
     * Sets the attachmentsCount property value. Number of attachments in the email.
     *  @param int|null $value Value to set for the attachmentsCount property.
    */
    public function setAttachmentsCount(?int $value ): void {
        $this->attachmentsCount = $value;
    }

    /**
     * Sets the deliveryAction property value. Delivery action of the email. The possible values are: Delivered, DeliveredAsSpam, Junked, Blocked, or Replaced.
     *  @param string|null $value Value to set for the deliveryAction property.
    */
    public function setDeliveryAction(?string $value ): void {
        $this->deliveryAction = $value;
    }

    /**
     * Sets the deliveryLocation property value. Location where the email was delivered. The possible values are: Inbox, External, JunkFolder, Quarantine, Failed, Dropped, DeletedFolder or Forwarded.
     *  @param string|null $value Value to set for the deliveryLocation property.
    */
    public function setDeliveryLocation(?string $value ): void {
        $this->deliveryLocation = $value;
    }

    /**
     * Sets the internetMessageId property value. Public-facing identifier for the email that is set by the sending email system.
     *  @param string|null $value Value to set for the internetMessageId property.
    */
    public function setInternetMessageId(?string $value ): void {
        $this->internetMessageId = $value;
    }

    /**
     * Sets the language property value. Detected language of the email content.
     *  @param string|null $value Value to set for the language property.
    */
    public function setLanguage(?string $value ): void {
        $this->language = $value;
    }

    /**
     * Sets the networkMessageId property value. Unique identifier for the email, generated by Microsoft 365.
     *  @param string|null $value Value to set for the networkMessageId property.
    */
    public function setNetworkMessageId(?string $value ): void {
        $this->networkMessageId = $value;
    }

    /**
     * Sets the p1Sender property value. The P1 sender.
     *  @param EmailSender|null $value Value to set for the p1Sender property.
    */
    public function setP1Sender(?EmailSender $value ): void {
        $this->p1Sender = $value;
    }

    /**
     * Sets the p2Sender property value. The P2 sender.
     *  @param EmailSender|null $value Value to set for the p2Sender property.
    */
    public function setP2Sender(?EmailSender $value ): void {
        $this->p2Sender = $value;
    }

    /**
     * Sets the receivedDateTime property value. Date and time when the email was received.
     *  @param DateTime|null $value Value to set for the receivedDateTime property.
    */
    public function setReceivedDateTime(?DateTime $value ): void {
        $this->receivedDateTime = $value;
    }

    /**
     * Sets the recipientEmailAddress property value. Email address of the recipient, or email address of the recipient after distribution list expansion.
     *  @param string|null $value Value to set for the recipientEmailAddress property.
    */
    public function setRecipientEmailAddress(?string $value ): void {
        $this->recipientEmailAddress = $value;
    }

    /**
     * Sets the senderIp property value. IP address of the last detected mail server that relayed the message.
     *  @param string|null $value Value to set for the senderIp property.
    */
    public function setSenderIp(?string $value ): void {
        $this->senderIp = $value;
    }

    /**
     * Sets the subject property value. Subject of the email.
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value ): void {
        $this->subject = $value;
    }

    /**
     * Sets the threatDetectionMethods property value. Collection of methods used to detect malware, phishing, or other threats found in the email.
     *  @param array<string>|null $value Value to set for the threatDetectionMethods property.
    */
    public function setThreatDetectionMethods(?array $value ): void {
        $this->threatDetectionMethods = $value;
    }

    /**
     * Sets the threats property value. Collection of detection names for malware or other threats found.
     *  @param array<string>|null $value Value to set for the threats property.
    */
    public function setThreats(?array $value ): void {
        $this->threats = $value;
    }

    /**
     * Sets the urlCount property value. Number of embedded URLs in the email.
     *  @param int|null $value Value to set for the urlCount property.
    */
    public function setUrlCount(?int $value ): void {
        $this->urlCount = $value;
    }

    /**
     * Sets the urls property value. Collection of the URLs contained in this email.
     *  @param array<string>|null $value Value to set for the urls property.
    */
    public function setUrls(?array $value ): void {
        $this->urls = $value;
    }

    /**
     * Sets the urn property value. Uniform resource name (URN) of the automated investigation where the cluster was identified.
     *  @param string|null $value Value to set for the urn property.
    */
    public function setUrn(?string $value ): void {
        $this->urn = $value;
    }

}
