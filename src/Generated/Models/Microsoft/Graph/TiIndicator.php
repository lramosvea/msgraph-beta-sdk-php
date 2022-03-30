<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TiIndicator extends Entity 
{
    /** @var TiAction|null $action The action to apply if the indicator is matched from within the targetProduct security tool. Possible values are: unknown, allow, block, alert. Required. */
    private ?TiAction $action = null;
    
    /** @var array<string>|null $activityGroupNames The cyber threat intelligence name(s) for the parties responsible for the malicious activity covered by the threat indicator. */
    private ?array $activityGroupNames = null;
    
    /** @var string|null $additionalInformation A catchall area into which extra data from the indicator not covered by the other tiIndicator properties may be placed. Data placed into additionalInformation will typically not be utilized by the targetProduct security tool. */
    private ?string $additionalInformation = null;
    
    /** @var string|null $azureTenantId Stamped by the system when the indicator is ingested. The Azure Active Directory tenant id of submitting client. Required. */
    private ?string $azureTenantId = null;
    
    /** @var int|null $confidence An integer representing the confidence the data within the indicator accurately identifies malicious behavior. Acceptable values are 0 – 100 with 100 being the highest. */
    private ?int $confidence = null;
    
    /** @var string|null $description Brief description (100 characters or less) of the threat represented by the indicator. Required. */
    private ?string $description = null;
    
    /** @var DiamondModel|null $diamondModel The area of the Diamond Model in which this indicator exists. Possible values are: unknown, adversary, capability, infrastructure, victim. */
    private ?DiamondModel $diamondModel = null;
    
    /** @var string|null $domainName  */
    private ?string $domainName = null;
    
    /** @var string|null $emailEncoding  */
    private ?string $emailEncoding = null;
    
    /** @var string|null $emailLanguage  */
    private ?string $emailLanguage = null;
    
    /** @var string|null $emailRecipient  */
    private ?string $emailRecipient = null;
    
    /** @var string|null $emailSenderAddress  */
    private ?string $emailSenderAddress = null;
    
    /** @var string|null $emailSenderName  */
    private ?string $emailSenderName = null;
    
    /** @var string|null $emailSourceDomain  */
    private ?string $emailSourceDomain = null;
    
    /** @var string|null $emailSourceIpAddress  */
    private ?string $emailSourceIpAddress = null;
    
    /** @var string|null $emailSubject  */
    private ?string $emailSubject = null;
    
    /** @var string|null $emailXMailer  */
    private ?string $emailXMailer = null;
    
    /** @var DateTime|null $expirationDateTime DateTime string indicating when the Indicator expires. All indicators must have an expiration date to avoid stale indicators persisting in the system. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Required. */
    private ?DateTime $expirationDateTime = null;
    
    /** @var string|null $externalId An identification number that ties the indicator back to the indicator provider’s system (e.g. a foreign key). */
    private ?string $externalId = null;
    
    /** @var DateTime|null $fileCompileDateTime  */
    private ?DateTime $fileCompileDateTime = null;
    
    /** @var DateTime|null $fileCreatedDateTime  */
    private ?DateTime $fileCreatedDateTime = null;
    
    /** @var FileHashType|null $fileHashType  */
    private ?FileHashType $fileHashType = null;
    
    /** @var string|null $fileHashValue  */
    private ?string $fileHashValue = null;
    
    /** @var string|null $fileMutexName  */
    private ?string $fileMutexName = null;
    
    /** @var string|null $fileName  */
    private ?string $fileName = null;
    
    /** @var string|null $filePacker  */
    private ?string $filePacker = null;
    
    /** @var string|null $filePath  */
    private ?string $filePath = null;
    
    /** @var int|null $fileSize  */
    private ?int $fileSize = null;
    
    /** @var string|null $fileType  */
    private ?string $fileType = null;
    
    /** @var DateTime|null $ingestedDateTime Stamped by the system when the indicator is ingested. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    private ?DateTime $ingestedDateTime = null;
    
    /** @var bool|null $isActive Used to deactivate indicators within system. By default, any indicator submitted is set as active. However, providers may submit existing indicators with this set to ‘False’ to deactivate indicators in the system. */
    private ?bool $isActive = null;
    
    /** @var array<string>|null $killChain A JSON array of strings that describes which point or points on the Kill Chain this indicator targets. See ‘killChain values’ below for exact values. */
    private ?array $killChain = null;
    
    /** @var string|null $knownFalsePositives Scenarios in which the indicator may cause false positives. This should be human-readable text. */
    private ?string $knownFalsePositives = null;
    
    /** @var DateTime|null $lastReportedDateTime The last time the indicator was seen. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    private ?DateTime $lastReportedDateTime = null;
    
    /** @var array<string>|null $malwareFamilyNames The malware family name associated with an indicator if it exists. Microsoft prefers the Microsoft malware family name if at all possible which can be found via the Windows Defender Security Intelligence threat encyclopedia. */
    private ?array $malwareFamilyNames = null;
    
    /** @var string|null $networkCidrBlock  */
    private ?string $networkCidrBlock = null;
    
    /** @var int|null $networkDestinationAsn  */
    private ?int $networkDestinationAsn = null;
    
    /** @var string|null $networkDestinationCidrBlock  */
    private ?string $networkDestinationCidrBlock = null;
    
    /** @var string|null $networkDestinationIPv4  */
    private ?string $networkDestinationIPv4 = null;
    
    /** @var string|null $networkDestinationIPv6  */
    private ?string $networkDestinationIPv6 = null;
    
    /** @var int|null $networkDestinationPort  */
    private ?int $networkDestinationPort = null;
    
    /** @var string|null $networkIPv4  */
    private ?string $networkIPv4 = null;
    
    /** @var string|null $networkIPv6  */
    private ?string $networkIPv6 = null;
    
    /** @var int|null $networkPort  */
    private ?int $networkPort = null;
    
    /** @var int|null $networkProtocol  */
    private ?int $networkProtocol = null;
    
    /** @var int|null $networkSourceAsn  */
    private ?int $networkSourceAsn = null;
    
    /** @var string|null $networkSourceCidrBlock  */
    private ?string $networkSourceCidrBlock = null;
    
    /** @var string|null $networkSourceIPv4  */
    private ?string $networkSourceIPv4 = null;
    
    /** @var string|null $networkSourceIPv6  */
    private ?string $networkSourceIPv6 = null;
    
    /** @var int|null $networkSourcePort  */
    private ?int $networkSourcePort = null;
    
    /** @var bool|null $passiveOnly Determines if the indicator should trigger an event that is visible to an end-user. When set to ‘true,’ security tools will not notify the end user that a ‘hit’ has occurred. This is most often treated as audit or silent mode by security products where they will simply log that a match occurred but will not perform the action. Default value is false. */
    private ?bool $passiveOnly = null;
    
    /** @var int|null $severity An integer representing the severity of the malicious behavior identified by the data within the indicator. Acceptable values are 0 – 5 where 5 is the most severe and zero is not severe at all. Default value is 3. */
    private ?int $severity = null;
    
    /** @var array<string>|null $tags A JSON array of strings that stores arbitrary tags/keywords. */
    private ?array $tags = null;
    
    /** @var string|null $targetProduct A string value representing a single security product to which the indicator should be applied. Acceptable values are: Azure Sentinel, Microsoft Defender ATP. Required */
    private ?string $targetProduct = null;
    
    /** @var string|null $threatType Each indicator must have a valid Indicator Threat Type. Possible values are: Botnet, C2, CryptoMining, Darknet, DDoS, MaliciousUrl, Malware, Phishing, Proxy, PUA, WatchList. Required. */
    private ?string $threatType = null;
    
    /** @var TlpLevel|null $tlpLevel Traffic Light Protocol value for the indicator. Possible values are: unknown, white, green, amber, red. Required. */
    private ?TlpLevel $tlpLevel = null;
    
    /** @var string|null $url  */
    private ?string $url = null;
    
    /** @var string|null $userAgent  */
    private ?string $userAgent = null;
    
    /**
     * Instantiates a new tiIndicator and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TiIndicator
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TiIndicator {
        return new TiIndicator();
    }

    /**
     * Gets the action property value. The action to apply if the indicator is matched from within the targetProduct security tool. Possible values are: unknown, allow, block, alert. Required.
     * @return TiAction|null
    */
    public function getAction(): ?TiAction {
        return $this->action;
    }

    /**
     * Gets the activityGroupNames property value. The cyber threat intelligence name(s) for the parties responsible for the malicious activity covered by the threat indicator.
     * @return array<string>|null
    */
    public function getActivityGroupNames(): ?array {
        return $this->activityGroupNames;
    }

    /**
     * Gets the additionalInformation property value. A catchall area into which extra data from the indicator not covered by the other tiIndicator properties may be placed. Data placed into additionalInformation will typically not be utilized by the targetProduct security tool.
     * @return string|null
    */
    public function getAdditionalInformation(): ?string {
        return $this->additionalInformation;
    }

    /**
     * Gets the azureTenantId property value. Stamped by the system when the indicator is ingested. The Azure Active Directory tenant id of submitting client. Required.
     * @return string|null
    */
    public function getAzureTenantId(): ?string {
        return $this->azureTenantId;
    }

    /**
     * Gets the confidence property value. An integer representing the confidence the data within the indicator accurately identifies malicious behavior. Acceptable values are 0 – 100 with 100 being the highest.
     * @return int|null
    */
    public function getConfidence(): ?int {
        return $this->confidence;
    }

    /**
     * Gets the description property value. Brief description (100 characters or less) of the threat represented by the indicator. Required.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the diamondModel property value. The area of the Diamond Model in which this indicator exists. Possible values are: unknown, adversary, capability, infrastructure, victim.
     * @return DiamondModel|null
    */
    public function getDiamondModel(): ?DiamondModel {
        return $this->diamondModel;
    }

    /**
     * Gets the domainName property value. 
     * @return string|null
    */
    public function getDomainName(): ?string {
        return $this->domainName;
    }

    /**
     * Gets the emailEncoding property value. 
     * @return string|null
    */
    public function getEmailEncoding(): ?string {
        return $this->emailEncoding;
    }

    /**
     * Gets the emailLanguage property value. 
     * @return string|null
    */
    public function getEmailLanguage(): ?string {
        return $this->emailLanguage;
    }

    /**
     * Gets the emailRecipient property value. 
     * @return string|null
    */
    public function getEmailRecipient(): ?string {
        return $this->emailRecipient;
    }

    /**
     * Gets the emailSenderAddress property value. 
     * @return string|null
    */
    public function getEmailSenderAddress(): ?string {
        return $this->emailSenderAddress;
    }

    /**
     * Gets the emailSenderName property value. 
     * @return string|null
    */
    public function getEmailSenderName(): ?string {
        return $this->emailSenderName;
    }

    /**
     * Gets the emailSourceDomain property value. 
     * @return string|null
    */
    public function getEmailSourceDomain(): ?string {
        return $this->emailSourceDomain;
    }

    /**
     * Gets the emailSourceIpAddress property value. 
     * @return string|null
    */
    public function getEmailSourceIpAddress(): ?string {
        return $this->emailSourceIpAddress;
    }

    /**
     * Gets the emailSubject property value. 
     * @return string|null
    */
    public function getEmailSubject(): ?string {
        return $this->emailSubject;
    }

    /**
     * Gets the emailXMailer property value. 
     * @return string|null
    */
    public function getEmailXMailer(): ?string {
        return $this->emailXMailer;
    }

    /**
     * Gets the expirationDateTime property value. DateTime string indicating when the Indicator expires. All indicators must have an expiration date to avoid stale indicators persisting in the system. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Required.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * Gets the externalId property value. An identification number that ties the indicator back to the indicator provider’s system (e.g. a foreign key).
     * @return string|null
    */
    public function getExternalId(): ?string {
        return $this->externalId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'action' => function (self $o, ParseNode $n) { $o->setAction($n->getEnumValue(TiAction::class)); },
            'activityGroupNames' => function (self $o, ParseNode $n) { $o->setActivityGroupNames($n->getCollectionOfPrimitiveValues()); },
            'additionalInformation' => function (self $o, ParseNode $n) { $o->setAdditionalInformation($n->getStringValue()); },
            'azureTenantId' => function (self $o, ParseNode $n) { $o->setAzureTenantId($n->getStringValue()); },
            'confidence' => function (self $o, ParseNode $n) { $o->setConfidence($n->getIntegerValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'diamondModel' => function (self $o, ParseNode $n) { $o->setDiamondModel($n->getEnumValue(DiamondModel::class)); },
            'domainName' => function (self $o, ParseNode $n) { $o->setDomainName($n->getStringValue()); },
            'emailEncoding' => function (self $o, ParseNode $n) { $o->setEmailEncoding($n->getStringValue()); },
            'emailLanguage' => function (self $o, ParseNode $n) { $o->setEmailLanguage($n->getStringValue()); },
            'emailRecipient' => function (self $o, ParseNode $n) { $o->setEmailRecipient($n->getStringValue()); },
            'emailSenderAddress' => function (self $o, ParseNode $n) { $o->setEmailSenderAddress($n->getStringValue()); },
            'emailSenderName' => function (self $o, ParseNode $n) { $o->setEmailSenderName($n->getStringValue()); },
            'emailSourceDomain' => function (self $o, ParseNode $n) { $o->setEmailSourceDomain($n->getStringValue()); },
            'emailSourceIpAddress' => function (self $o, ParseNode $n) { $o->setEmailSourceIpAddress($n->getStringValue()); },
            'emailSubject' => function (self $o, ParseNode $n) { $o->setEmailSubject($n->getStringValue()); },
            'emailXMailer' => function (self $o, ParseNode $n) { $o->setEmailXMailer($n->getStringValue()); },
            'expirationDateTime' => function (self $o, ParseNode $n) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            'externalId' => function (self $o, ParseNode $n) { $o->setExternalId($n->getStringValue()); },
            'fileCompileDateTime' => function (self $o, ParseNode $n) { $o->setFileCompileDateTime($n->getDateTimeValue()); },
            'fileCreatedDateTime' => function (self $o, ParseNode $n) { $o->setFileCreatedDateTime($n->getDateTimeValue()); },
            'fileHashType' => function (self $o, ParseNode $n) { $o->setFileHashType($n->getEnumValue(FileHashType::class)); },
            'fileHashValue' => function (self $o, ParseNode $n) { $o->setFileHashValue($n->getStringValue()); },
            'fileMutexName' => function (self $o, ParseNode $n) { $o->setFileMutexName($n->getStringValue()); },
            'fileName' => function (self $o, ParseNode $n) { $o->setFileName($n->getStringValue()); },
            'filePacker' => function (self $o, ParseNode $n) { $o->setFilePacker($n->getStringValue()); },
            'filePath' => function (self $o, ParseNode $n) { $o->setFilePath($n->getStringValue()); },
            'fileSize' => function (self $o, ParseNode $n) { $o->setFileSize($n->getIntegerValue()); },
            'fileType' => function (self $o, ParseNode $n) { $o->setFileType($n->getStringValue()); },
            'ingestedDateTime' => function (self $o, ParseNode $n) { $o->setIngestedDateTime($n->getDateTimeValue()); },
            'isActive' => function (self $o, ParseNode $n) { $o->setIsActive($n->getBooleanValue()); },
            'killChain' => function (self $o, ParseNode $n) { $o->setKillChain($n->getCollectionOfPrimitiveValues()); },
            'knownFalsePositives' => function (self $o, ParseNode $n) { $o->setKnownFalsePositives($n->getStringValue()); },
            'lastReportedDateTime' => function (self $o, ParseNode $n) { $o->setLastReportedDateTime($n->getDateTimeValue()); },
            'malwareFamilyNames' => function (self $o, ParseNode $n) { $o->setMalwareFamilyNames($n->getCollectionOfPrimitiveValues()); },
            'networkCidrBlock' => function (self $o, ParseNode $n) { $o->setNetworkCidrBlock($n->getStringValue()); },
            'networkDestinationAsn' => function (self $o, ParseNode $n) { $o->setNetworkDestinationAsn($n->getIntegerValue()); },
            'networkDestinationCidrBlock' => function (self $o, ParseNode $n) { $o->setNetworkDestinationCidrBlock($n->getStringValue()); },
            'networkDestinationIPv4' => function (self $o, ParseNode $n) { $o->setNetworkDestinationIPv4($n->getStringValue()); },
            'networkDestinationIPv6' => function (self $o, ParseNode $n) { $o->setNetworkDestinationIPv6($n->getStringValue()); },
            'networkDestinationPort' => function (self $o, ParseNode $n) { $o->setNetworkDestinationPort($n->getIntegerValue()); },
            'networkIPv4' => function (self $o, ParseNode $n) { $o->setNetworkIPv4($n->getStringValue()); },
            'networkIPv6' => function (self $o, ParseNode $n) { $o->setNetworkIPv6($n->getStringValue()); },
            'networkPort' => function (self $o, ParseNode $n) { $o->setNetworkPort($n->getIntegerValue()); },
            'networkProtocol' => function (self $o, ParseNode $n) { $o->setNetworkProtocol($n->getIntegerValue()); },
            'networkSourceAsn' => function (self $o, ParseNode $n) { $o->setNetworkSourceAsn($n->getIntegerValue()); },
            'networkSourceCidrBlock' => function (self $o, ParseNode $n) { $o->setNetworkSourceCidrBlock($n->getStringValue()); },
            'networkSourceIPv4' => function (self $o, ParseNode $n) { $o->setNetworkSourceIPv4($n->getStringValue()); },
            'networkSourceIPv6' => function (self $o, ParseNode $n) { $o->setNetworkSourceIPv6($n->getStringValue()); },
            'networkSourcePort' => function (self $o, ParseNode $n) { $o->setNetworkSourcePort($n->getIntegerValue()); },
            'passiveOnly' => function (self $o, ParseNode $n) { $o->setPassiveOnly($n->getBooleanValue()); },
            'severity' => function (self $o, ParseNode $n) { $o->setSeverity($n->getIntegerValue()); },
            'tags' => function (self $o, ParseNode $n) { $o->setTags($n->getCollectionOfPrimitiveValues()); },
            'targetProduct' => function (self $o, ParseNode $n) { $o->setTargetProduct($n->getStringValue()); },
            'threatType' => function (self $o, ParseNode $n) { $o->setThreatType($n->getStringValue()); },
            'tlpLevel' => function (self $o, ParseNode $n) { $o->setTlpLevel($n->getEnumValue(TlpLevel::class)); },
            'url' => function (self $o, ParseNode $n) { $o->setUrl($n->getStringValue()); },
            'userAgent' => function (self $o, ParseNode $n) { $o->setUserAgent($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the fileCompileDateTime property value. 
     * @return DateTime|null
    */
    public function getFileCompileDateTime(): ?DateTime {
        return $this->fileCompileDateTime;
    }

    /**
     * Gets the fileCreatedDateTime property value. 
     * @return DateTime|null
    */
    public function getFileCreatedDateTime(): ?DateTime {
        return $this->fileCreatedDateTime;
    }

    /**
     * Gets the fileHashType property value. 
     * @return FileHashType|null
    */
    public function getFileHashType(): ?FileHashType {
        return $this->fileHashType;
    }

    /**
     * Gets the fileHashValue property value. 
     * @return string|null
    */
    public function getFileHashValue(): ?string {
        return $this->fileHashValue;
    }

    /**
     * Gets the fileMutexName property value. 
     * @return string|null
    */
    public function getFileMutexName(): ?string {
        return $this->fileMutexName;
    }

    /**
     * Gets the fileName property value. 
     * @return string|null
    */
    public function getFileName(): ?string {
        return $this->fileName;
    }

    /**
     * Gets the filePacker property value. 
     * @return string|null
    */
    public function getFilePacker(): ?string {
        return $this->filePacker;
    }

    /**
     * Gets the filePath property value. 
     * @return string|null
    */
    public function getFilePath(): ?string {
        return $this->filePath;
    }

    /**
     * Gets the fileSize property value. 
     * @return int|null
    */
    public function getFileSize(): ?int {
        return $this->fileSize;
    }

    /**
     * Gets the fileType property value. 
     * @return string|null
    */
    public function getFileType(): ?string {
        return $this->fileType;
    }

    /**
     * Gets the ingestedDateTime property value. Stamped by the system when the indicator is ingested. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getIngestedDateTime(): ?DateTime {
        return $this->ingestedDateTime;
    }

    /**
     * Gets the isActive property value. Used to deactivate indicators within system. By default, any indicator submitted is set as active. However, providers may submit existing indicators with this set to ‘False’ to deactivate indicators in the system.
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        return $this->isActive;
    }

    /**
     * Gets the killChain property value. A JSON array of strings that describes which point or points on the Kill Chain this indicator targets. See ‘killChain values’ below for exact values.
     * @return array<string>|null
    */
    public function getKillChain(): ?array {
        return $this->killChain;
    }

    /**
     * Gets the knownFalsePositives property value. Scenarios in which the indicator may cause false positives. This should be human-readable text.
     * @return string|null
    */
    public function getKnownFalsePositives(): ?string {
        return $this->knownFalsePositives;
    }

    /**
     * Gets the lastReportedDateTime property value. The last time the indicator was seen. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getLastReportedDateTime(): ?DateTime {
        return $this->lastReportedDateTime;
    }

    /**
     * Gets the malwareFamilyNames property value. The malware family name associated with an indicator if it exists. Microsoft prefers the Microsoft malware family name if at all possible which can be found via the Windows Defender Security Intelligence threat encyclopedia.
     * @return array<string>|null
    */
    public function getMalwareFamilyNames(): ?array {
        return $this->malwareFamilyNames;
    }

    /**
     * Gets the networkCidrBlock property value. 
     * @return string|null
    */
    public function getNetworkCidrBlock(): ?string {
        return $this->networkCidrBlock;
    }

    /**
     * Gets the networkDestinationAsn property value. 
     * @return int|null
    */
    public function getNetworkDestinationAsn(): ?int {
        return $this->networkDestinationAsn;
    }

    /**
     * Gets the networkDestinationCidrBlock property value. 
     * @return string|null
    */
    public function getNetworkDestinationCidrBlock(): ?string {
        return $this->networkDestinationCidrBlock;
    }

    /**
     * Gets the networkDestinationIPv4 property value. 
     * @return string|null
    */
    public function getNetworkDestinationIPv4(): ?string {
        return $this->networkDestinationIPv4;
    }

    /**
     * Gets the networkDestinationIPv6 property value. 
     * @return string|null
    */
    public function getNetworkDestinationIPv6(): ?string {
        return $this->networkDestinationIPv6;
    }

    /**
     * Gets the networkDestinationPort property value. 
     * @return int|null
    */
    public function getNetworkDestinationPort(): ?int {
        return $this->networkDestinationPort;
    }

    /**
     * Gets the networkIPv4 property value. 
     * @return string|null
    */
    public function getNetworkIPv4(): ?string {
        return $this->networkIPv4;
    }

    /**
     * Gets the networkIPv6 property value. 
     * @return string|null
    */
    public function getNetworkIPv6(): ?string {
        return $this->networkIPv6;
    }

    /**
     * Gets the networkPort property value. 
     * @return int|null
    */
    public function getNetworkPort(): ?int {
        return $this->networkPort;
    }

    /**
     * Gets the networkProtocol property value. 
     * @return int|null
    */
    public function getNetworkProtocol(): ?int {
        return $this->networkProtocol;
    }

    /**
     * Gets the networkSourceAsn property value. 
     * @return int|null
    */
    public function getNetworkSourceAsn(): ?int {
        return $this->networkSourceAsn;
    }

    /**
     * Gets the networkSourceCidrBlock property value. 
     * @return string|null
    */
    public function getNetworkSourceCidrBlock(): ?string {
        return $this->networkSourceCidrBlock;
    }

    /**
     * Gets the networkSourceIPv4 property value. 
     * @return string|null
    */
    public function getNetworkSourceIPv4(): ?string {
        return $this->networkSourceIPv4;
    }

    /**
     * Gets the networkSourceIPv6 property value. 
     * @return string|null
    */
    public function getNetworkSourceIPv6(): ?string {
        return $this->networkSourceIPv6;
    }

    /**
     * Gets the networkSourcePort property value. 
     * @return int|null
    */
    public function getNetworkSourcePort(): ?int {
        return $this->networkSourcePort;
    }

    /**
     * Gets the passiveOnly property value. Determines if the indicator should trigger an event that is visible to an end-user. When set to ‘true,’ security tools will not notify the end user that a ‘hit’ has occurred. This is most often treated as audit or silent mode by security products where they will simply log that a match occurred but will not perform the action. Default value is false.
     * @return bool|null
    */
    public function getPassiveOnly(): ?bool {
        return $this->passiveOnly;
    }

    /**
     * Gets the severity property value. An integer representing the severity of the malicious behavior identified by the data within the indicator. Acceptable values are 0 – 5 where 5 is the most severe and zero is not severe at all. Default value is 3.
     * @return int|null
    */
    public function getSeverity(): ?int {
        return $this->severity;
    }

    /**
     * Gets the tags property value. A JSON array of strings that stores arbitrary tags/keywords.
     * @return array<string>|null
    */
    public function getTags(): ?array {
        return $this->tags;
    }

    /**
     * Gets the targetProduct property value. A string value representing a single security product to which the indicator should be applied. Acceptable values are: Azure Sentinel, Microsoft Defender ATP. Required
     * @return string|null
    */
    public function getTargetProduct(): ?string {
        return $this->targetProduct;
    }

    /**
     * Gets the threatType property value. Each indicator must have a valid Indicator Threat Type. Possible values are: Botnet, C2, CryptoMining, Darknet, DDoS, MaliciousUrl, Malware, Phishing, Proxy, PUA, WatchList. Required.
     * @return string|null
    */
    public function getThreatType(): ?string {
        return $this->threatType;
    }

    /**
     * Gets the tlpLevel property value. Traffic Light Protocol value for the indicator. Possible values are: unknown, white, green, amber, red. Required.
     * @return TlpLevel|null
    */
    public function getTlpLevel(): ?TlpLevel {
        return $this->tlpLevel;
    }

    /**
     * Gets the url property value. 
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * Gets the userAgent property value. 
     * @return string|null
    */
    public function getUserAgent(): ?string {
        return $this->userAgent;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('action', $this->action);
        $writer->writeCollectionOfPrimitiveValues('activityGroupNames', $this->activityGroupNames);
        $writer->writeStringValue('additionalInformation', $this->additionalInformation);
        $writer->writeStringValue('azureTenantId', $this->azureTenantId);
        $writer->writeIntegerValue('confidence', $this->confidence);
        $writer->writeStringValue('description', $this->description);
        $writer->writeEnumValue('diamondModel', $this->diamondModel);
        $writer->writeStringValue('domainName', $this->domainName);
        $writer->writeStringValue('emailEncoding', $this->emailEncoding);
        $writer->writeStringValue('emailLanguage', $this->emailLanguage);
        $writer->writeStringValue('emailRecipient', $this->emailRecipient);
        $writer->writeStringValue('emailSenderAddress', $this->emailSenderAddress);
        $writer->writeStringValue('emailSenderName', $this->emailSenderName);
        $writer->writeStringValue('emailSourceDomain', $this->emailSourceDomain);
        $writer->writeStringValue('emailSourceIpAddress', $this->emailSourceIpAddress);
        $writer->writeStringValue('emailSubject', $this->emailSubject);
        $writer->writeStringValue('emailXMailer', $this->emailXMailer);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeStringValue('externalId', $this->externalId);
        $writer->writeDateTimeValue('fileCompileDateTime', $this->fileCompileDateTime);
        $writer->writeDateTimeValue('fileCreatedDateTime', $this->fileCreatedDateTime);
        $writer->writeEnumValue('fileHashType', $this->fileHashType);
        $writer->writeStringValue('fileHashValue', $this->fileHashValue);
        $writer->writeStringValue('fileMutexName', $this->fileMutexName);
        $writer->writeStringValue('fileName', $this->fileName);
        $writer->writeStringValue('filePacker', $this->filePacker);
        $writer->writeStringValue('filePath', $this->filePath);
        $writer->writeIntegerValue('fileSize', $this->fileSize);
        $writer->writeStringValue('fileType', $this->fileType);
        $writer->writeDateTimeValue('ingestedDateTime', $this->ingestedDateTime);
        $writer->writeBooleanValue('isActive', $this->isActive);
        $writer->writeCollectionOfPrimitiveValues('killChain', $this->killChain);
        $writer->writeStringValue('knownFalsePositives', $this->knownFalsePositives);
        $writer->writeDateTimeValue('lastReportedDateTime', $this->lastReportedDateTime);
        $writer->writeCollectionOfPrimitiveValues('malwareFamilyNames', $this->malwareFamilyNames);
        $writer->writeStringValue('networkCidrBlock', $this->networkCidrBlock);
        $writer->writeIntegerValue('networkDestinationAsn', $this->networkDestinationAsn);
        $writer->writeStringValue('networkDestinationCidrBlock', $this->networkDestinationCidrBlock);
        $writer->writeStringValue('networkDestinationIPv4', $this->networkDestinationIPv4);
        $writer->writeStringValue('networkDestinationIPv6', $this->networkDestinationIPv6);
        $writer->writeIntegerValue('networkDestinationPort', $this->networkDestinationPort);
        $writer->writeStringValue('networkIPv4', $this->networkIPv4);
        $writer->writeStringValue('networkIPv6', $this->networkIPv6);
        $writer->writeIntegerValue('networkPort', $this->networkPort);
        $writer->writeIntegerValue('networkProtocol', $this->networkProtocol);
        $writer->writeIntegerValue('networkSourceAsn', $this->networkSourceAsn);
        $writer->writeStringValue('networkSourceCidrBlock', $this->networkSourceCidrBlock);
        $writer->writeStringValue('networkSourceIPv4', $this->networkSourceIPv4);
        $writer->writeStringValue('networkSourceIPv6', $this->networkSourceIPv6);
        $writer->writeIntegerValue('networkSourcePort', $this->networkSourcePort);
        $writer->writeBooleanValue('passiveOnly', $this->passiveOnly);
        $writer->writeIntegerValue('severity', $this->severity);
        $writer->writeCollectionOfPrimitiveValues('tags', $this->tags);
        $writer->writeStringValue('targetProduct', $this->targetProduct);
        $writer->writeStringValue('threatType', $this->threatType);
        $writer->writeEnumValue('tlpLevel', $this->tlpLevel);
        $writer->writeStringValue('url', $this->url);
        $writer->writeStringValue('userAgent', $this->userAgent);
    }

    /**
     * Sets the action property value. The action to apply if the indicator is matched from within the targetProduct security tool. Possible values are: unknown, allow, block, alert. Required.
     *  @param TiAction|null $value Value to set for the action property.
    */
    public function setAction(?TiAction $value ): void {
        $this->action = $value;
    }

    /**
     * Sets the activityGroupNames property value. The cyber threat intelligence name(s) for the parties responsible for the malicious activity covered by the threat indicator.
     *  @param array<string>|null $value Value to set for the activityGroupNames property.
    */
    public function setActivityGroupNames(?array $value ): void {
        $this->activityGroupNames = $value;
    }

    /**
     * Sets the additionalInformation property value. A catchall area into which extra data from the indicator not covered by the other tiIndicator properties may be placed. Data placed into additionalInformation will typically not be utilized by the targetProduct security tool.
     *  @param string|null $value Value to set for the additionalInformation property.
    */
    public function setAdditionalInformation(?string $value ): void {
        $this->additionalInformation = $value;
    }

    /**
     * Sets the azureTenantId property value. Stamped by the system when the indicator is ingested. The Azure Active Directory tenant id of submitting client. Required.
     *  @param string|null $value Value to set for the azureTenantId property.
    */
    public function setAzureTenantId(?string $value ): void {
        $this->azureTenantId = $value;
    }

    /**
     * Sets the confidence property value. An integer representing the confidence the data within the indicator accurately identifies malicious behavior. Acceptable values are 0 – 100 with 100 being the highest.
     *  @param int|null $value Value to set for the confidence property.
    */
    public function setConfidence(?int $value ): void {
        $this->confidence = $value;
    }

    /**
     * Sets the description property value. Brief description (100 characters or less) of the threat represented by the indicator. Required.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the diamondModel property value. The area of the Diamond Model in which this indicator exists. Possible values are: unknown, adversary, capability, infrastructure, victim.
     *  @param DiamondModel|null $value Value to set for the diamondModel property.
    */
    public function setDiamondModel(?DiamondModel $value ): void {
        $this->diamondModel = $value;
    }

    /**
     * Sets the domainName property value. 
     *  @param string|null $value Value to set for the domainName property.
    */
    public function setDomainName(?string $value ): void {
        $this->domainName = $value;
    }

    /**
     * Sets the emailEncoding property value. 
     *  @param string|null $value Value to set for the emailEncoding property.
    */
    public function setEmailEncoding(?string $value ): void {
        $this->emailEncoding = $value;
    }

    /**
     * Sets the emailLanguage property value. 
     *  @param string|null $value Value to set for the emailLanguage property.
    */
    public function setEmailLanguage(?string $value ): void {
        $this->emailLanguage = $value;
    }

    /**
     * Sets the emailRecipient property value. 
     *  @param string|null $value Value to set for the emailRecipient property.
    */
    public function setEmailRecipient(?string $value ): void {
        $this->emailRecipient = $value;
    }

    /**
     * Sets the emailSenderAddress property value. 
     *  @param string|null $value Value to set for the emailSenderAddress property.
    */
    public function setEmailSenderAddress(?string $value ): void {
        $this->emailSenderAddress = $value;
    }

    /**
     * Sets the emailSenderName property value. 
     *  @param string|null $value Value to set for the emailSenderName property.
    */
    public function setEmailSenderName(?string $value ): void {
        $this->emailSenderName = $value;
    }

    /**
     * Sets the emailSourceDomain property value. 
     *  @param string|null $value Value to set for the emailSourceDomain property.
    */
    public function setEmailSourceDomain(?string $value ): void {
        $this->emailSourceDomain = $value;
    }

    /**
     * Sets the emailSourceIpAddress property value. 
     *  @param string|null $value Value to set for the emailSourceIpAddress property.
    */
    public function setEmailSourceIpAddress(?string $value ): void {
        $this->emailSourceIpAddress = $value;
    }

    /**
     * Sets the emailSubject property value. 
     *  @param string|null $value Value to set for the emailSubject property.
    */
    public function setEmailSubject(?string $value ): void {
        $this->emailSubject = $value;
    }

    /**
     * Sets the emailXMailer property value. 
     *  @param string|null $value Value to set for the emailXMailer property.
    */
    public function setEmailXMailer(?string $value ): void {
        $this->emailXMailer = $value;
    }

    /**
     * Sets the expirationDateTime property value. DateTime string indicating when the Indicator expires. All indicators must have an expiration date to avoid stale indicators persisting in the system. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Required.
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the externalId property value. An identification number that ties the indicator back to the indicator provider’s system (e.g. a foreign key).
     *  @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value ): void {
        $this->externalId = $value;
    }

    /**
     * Sets the fileCompileDateTime property value. 
     *  @param DateTime|null $value Value to set for the fileCompileDateTime property.
    */
    public function setFileCompileDateTime(?DateTime $value ): void {
        $this->fileCompileDateTime = $value;
    }

    /**
     * Sets the fileCreatedDateTime property value. 
     *  @param DateTime|null $value Value to set for the fileCreatedDateTime property.
    */
    public function setFileCreatedDateTime(?DateTime $value ): void {
        $this->fileCreatedDateTime = $value;
    }

    /**
     * Sets the fileHashType property value. 
     *  @param FileHashType|null $value Value to set for the fileHashType property.
    */
    public function setFileHashType(?FileHashType $value ): void {
        $this->fileHashType = $value;
    }

    /**
     * Sets the fileHashValue property value. 
     *  @param string|null $value Value to set for the fileHashValue property.
    */
    public function setFileHashValue(?string $value ): void {
        $this->fileHashValue = $value;
    }

    /**
     * Sets the fileMutexName property value. 
     *  @param string|null $value Value to set for the fileMutexName property.
    */
    public function setFileMutexName(?string $value ): void {
        $this->fileMutexName = $value;
    }

    /**
     * Sets the fileName property value. 
     *  @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value ): void {
        $this->fileName = $value;
    }

    /**
     * Sets the filePacker property value. 
     *  @param string|null $value Value to set for the filePacker property.
    */
    public function setFilePacker(?string $value ): void {
        $this->filePacker = $value;
    }

    /**
     * Sets the filePath property value. 
     *  @param string|null $value Value to set for the filePath property.
    */
    public function setFilePath(?string $value ): void {
        $this->filePath = $value;
    }

    /**
     * Sets the fileSize property value. 
     *  @param int|null $value Value to set for the fileSize property.
    */
    public function setFileSize(?int $value ): void {
        $this->fileSize = $value;
    }

    /**
     * Sets the fileType property value. 
     *  @param string|null $value Value to set for the fileType property.
    */
    public function setFileType(?string $value ): void {
        $this->fileType = $value;
    }

    /**
     * Sets the ingestedDateTime property value. Stamped by the system when the indicator is ingested. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the ingestedDateTime property.
    */
    public function setIngestedDateTime(?DateTime $value ): void {
        $this->ingestedDateTime = $value;
    }

    /**
     * Sets the isActive property value. Used to deactivate indicators within system. By default, any indicator submitted is set as active. However, providers may submit existing indicators with this set to ‘False’ to deactivate indicators in the system.
     *  @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value ): void {
        $this->isActive = $value;
    }

    /**
     * Sets the killChain property value. A JSON array of strings that describes which point or points on the Kill Chain this indicator targets. See ‘killChain values’ below for exact values.
     *  @param array<string>|null $value Value to set for the killChain property.
    */
    public function setKillChain(?array $value ): void {
        $this->killChain = $value;
    }

    /**
     * Sets the knownFalsePositives property value. Scenarios in which the indicator may cause false positives. This should be human-readable text.
     *  @param string|null $value Value to set for the knownFalsePositives property.
    */
    public function setKnownFalsePositives(?string $value ): void {
        $this->knownFalsePositives = $value;
    }

    /**
     * Sets the lastReportedDateTime property value. The last time the indicator was seen. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the lastReportedDateTime property.
    */
    public function setLastReportedDateTime(?DateTime $value ): void {
        $this->lastReportedDateTime = $value;
    }

    /**
     * Sets the malwareFamilyNames property value. The malware family name associated with an indicator if it exists. Microsoft prefers the Microsoft malware family name if at all possible which can be found via the Windows Defender Security Intelligence threat encyclopedia.
     *  @param array<string>|null $value Value to set for the malwareFamilyNames property.
    */
    public function setMalwareFamilyNames(?array $value ): void {
        $this->malwareFamilyNames = $value;
    }

    /**
     * Sets the networkCidrBlock property value. 
     *  @param string|null $value Value to set for the networkCidrBlock property.
    */
    public function setNetworkCidrBlock(?string $value ): void {
        $this->networkCidrBlock = $value;
    }

    /**
     * Sets the networkDestinationAsn property value. 
     *  @param int|null $value Value to set for the networkDestinationAsn property.
    */
    public function setNetworkDestinationAsn(?int $value ): void {
        $this->networkDestinationAsn = $value;
    }

    /**
     * Sets the networkDestinationCidrBlock property value. 
     *  @param string|null $value Value to set for the networkDestinationCidrBlock property.
    */
    public function setNetworkDestinationCidrBlock(?string $value ): void {
        $this->networkDestinationCidrBlock = $value;
    }

    /**
     * Sets the networkDestinationIPv4 property value. 
     *  @param string|null $value Value to set for the networkDestinationIPv4 property.
    */
    public function setNetworkDestinationIPv4(?string $value ): void {
        $this->networkDestinationIPv4 = $value;
    }

    /**
     * Sets the networkDestinationIPv6 property value. 
     *  @param string|null $value Value to set for the networkDestinationIPv6 property.
    */
    public function setNetworkDestinationIPv6(?string $value ): void {
        $this->networkDestinationIPv6 = $value;
    }

    /**
     * Sets the networkDestinationPort property value. 
     *  @param int|null $value Value to set for the networkDestinationPort property.
    */
    public function setNetworkDestinationPort(?int $value ): void {
        $this->networkDestinationPort = $value;
    }

    /**
     * Sets the networkIPv4 property value. 
     *  @param string|null $value Value to set for the networkIPv4 property.
    */
    public function setNetworkIPv4(?string $value ): void {
        $this->networkIPv4 = $value;
    }

    /**
     * Sets the networkIPv6 property value. 
     *  @param string|null $value Value to set for the networkIPv6 property.
    */
    public function setNetworkIPv6(?string $value ): void {
        $this->networkIPv6 = $value;
    }

    /**
     * Sets the networkPort property value. 
     *  @param int|null $value Value to set for the networkPort property.
    */
    public function setNetworkPort(?int $value ): void {
        $this->networkPort = $value;
    }

    /**
     * Sets the networkProtocol property value. 
     *  @param int|null $value Value to set for the networkProtocol property.
    */
    public function setNetworkProtocol(?int $value ): void {
        $this->networkProtocol = $value;
    }

    /**
     * Sets the networkSourceAsn property value. 
     *  @param int|null $value Value to set for the networkSourceAsn property.
    */
    public function setNetworkSourceAsn(?int $value ): void {
        $this->networkSourceAsn = $value;
    }

    /**
     * Sets the networkSourceCidrBlock property value. 
     *  @param string|null $value Value to set for the networkSourceCidrBlock property.
    */
    public function setNetworkSourceCidrBlock(?string $value ): void {
        $this->networkSourceCidrBlock = $value;
    }

    /**
     * Sets the networkSourceIPv4 property value. 
     *  @param string|null $value Value to set for the networkSourceIPv4 property.
    */
    public function setNetworkSourceIPv4(?string $value ): void {
        $this->networkSourceIPv4 = $value;
    }

    /**
     * Sets the networkSourceIPv6 property value. 
     *  @param string|null $value Value to set for the networkSourceIPv6 property.
    */
    public function setNetworkSourceIPv6(?string $value ): void {
        $this->networkSourceIPv6 = $value;
    }

    /**
     * Sets the networkSourcePort property value. 
     *  @param int|null $value Value to set for the networkSourcePort property.
    */
    public function setNetworkSourcePort(?int $value ): void {
        $this->networkSourcePort = $value;
    }

    /**
     * Sets the passiveOnly property value. Determines if the indicator should trigger an event that is visible to an end-user. When set to ‘true,’ security tools will not notify the end user that a ‘hit’ has occurred. This is most often treated as audit or silent mode by security products where they will simply log that a match occurred but will not perform the action. Default value is false.
     *  @param bool|null $value Value to set for the passiveOnly property.
    */
    public function setPassiveOnly(?bool $value ): void {
        $this->passiveOnly = $value;
    }

    /**
     * Sets the severity property value. An integer representing the severity of the malicious behavior identified by the data within the indicator. Acceptable values are 0 – 5 where 5 is the most severe and zero is not severe at all. Default value is 3.
     *  @param int|null $value Value to set for the severity property.
    */
    public function setSeverity(?int $value ): void {
        $this->severity = $value;
    }

    /**
     * Sets the tags property value. A JSON array of strings that stores arbitrary tags/keywords.
     *  @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value ): void {
        $this->tags = $value;
    }

    /**
     * Sets the targetProduct property value. A string value representing a single security product to which the indicator should be applied. Acceptable values are: Azure Sentinel, Microsoft Defender ATP. Required
     *  @param string|null $value Value to set for the targetProduct property.
    */
    public function setTargetProduct(?string $value ): void {
        $this->targetProduct = $value;
    }

    /**
     * Sets the threatType property value. Each indicator must have a valid Indicator Threat Type. Possible values are: Botnet, C2, CryptoMining, Darknet, DDoS, MaliciousUrl, Malware, Phishing, Proxy, PUA, WatchList. Required.
     *  @param string|null $value Value to set for the threatType property.
    */
    public function setThreatType(?string $value ): void {
        $this->threatType = $value;
    }

    /**
     * Sets the tlpLevel property value. Traffic Light Protocol value for the indicator. Possible values are: unknown, white, green, amber, red. Required.
     *  @param TlpLevel|null $value Value to set for the tlpLevel property.
    */
    public function setTlpLevel(?TlpLevel $value ): void {
        $this->tlpLevel = $value;
    }

    /**
     * Sets the url property value. 
     *  @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value ): void {
        $this->url = $value;
    }

    /**
     * Sets the userAgent property value. 
     *  @param string|null $value Value to set for the userAgent property.
    */
    public function setUserAgent(?string $value ): void {
        $this->userAgent = $value;
    }

}
