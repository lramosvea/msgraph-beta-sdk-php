<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateInterval;
use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementAutopilotEvent extends Entity 
{
    /** @var DateInterval|null $accountSetupDuration Time spent in user ESP. */
    private ?DateInterval $accountSetupDuration = null;
    
    /** @var WindowsAutopilotDeploymentState|null $accountSetupStatus Deployment status for the enrollment status page account setup phase. Possible values are: unknown, success, inProgress, failure, successWithTimeout, notAttempted, disabled. */
    private ?WindowsAutopilotDeploymentState $accountSetupStatus = null;
    
    /** @var DateInterval|null $deploymentDuration Autopilot deployment duration including enrollment. */
    private ?DateInterval $deploymentDuration = null;
    
    /** @var DateTime|null $deploymentEndDateTime Deployment end time. */
    private ?DateTime $deploymentEndDateTime = null;
    
    /** @var DateTime|null $deploymentStartDateTime Deployment start time. */
    private ?DateTime $deploymentStartDateTime = null;
    
    /** @var WindowsAutopilotDeploymentState|null $deploymentState Deployment state like Success, Failure, InProgress, SuccessWithTimeout. Possible values are: unknown, success, inProgress, failure, successWithTimeout, notAttempted, disabled. */
    private ?WindowsAutopilotDeploymentState $deploymentState = null;
    
    /** @var DateInterval|null $deploymentTotalDuration Total deployment duration from enrollment to Desktop screen. */
    private ?DateInterval $deploymentTotalDuration = null;
    
    /** @var string|null $deviceId Device id associated with the object */
    private ?string $deviceId = null;
    
    /** @var DateInterval|null $devicePreparationDuration Time spent in device enrollment. */
    private ?DateInterval $devicePreparationDuration = null;
    
    /** @var DateTime|null $deviceRegisteredDateTime Device registration date. */
    private ?DateTime $deviceRegisteredDateTime = null;
    
    /** @var string|null $deviceSerialNumber Device serial number. */
    private ?string $deviceSerialNumber = null;
    
    /** @var DateInterval|null $deviceSetupDuration Time spent in device ESP. */
    private ?DateInterval $deviceSetupDuration = null;
    
    /** @var WindowsAutopilotDeploymentState|null $deviceSetupStatus Deployment status for the enrollment status page device setup phase. Possible values are: unknown, success, inProgress, failure, successWithTimeout, notAttempted, disabled. */
    private ?WindowsAutopilotDeploymentState $deviceSetupStatus = null;
    
    /** @var string|null $enrollmentFailureDetails Enrollment failure details. */
    private ?string $enrollmentFailureDetails = null;
    
    /** @var DateTime|null $enrollmentStartDateTime Device enrollment start date. */
    private ?DateTime $enrollmentStartDateTime = null;
    
    /** @var EnrollmentState|null $enrollmentState Enrollment state like Enrolled, Failed. Possible values are: unknown, enrolled, pendingReset, failed, notContacted, blocked. */
    private ?EnrollmentState $enrollmentState = null;
    
    /** @var WindowsAutopilotEnrollmentType|null $enrollmentType Enrollment type. Possible values are: unknown, azureADJoinedWithAutopilotProfile, offlineDomainJoined, azureADJoinedUsingDeviceAuthWithAutopilotProfile, azureADJoinedUsingDeviceAuthWithoutAutopilotProfile, azureADJoinedWithOfflineAutopilotProfile, azureADJoinedWithWhiteGlove, offlineDomainJoinedWithWhiteGlove, offlineDomainJoinedWithOfflineAutopilotProfile. */
    private ?WindowsAutopilotEnrollmentType $enrollmentType = null;
    
    /** @var DateTime|null $eventDateTime Time when the event occurred . */
    private ?DateTime $eventDateTime = null;
    
    /** @var string|null $managedDeviceName Managed device name. */
    private ?string $managedDeviceName = null;
    
    /** @var string|null $osVersion Device operating system version. */
    private ?string $osVersion = null;
    
    /** @var array<DeviceManagementAutopilotPolicyStatusDetail>|null $policyStatusDetails Policy and application status details for this device. */
    private ?array $policyStatusDetails = null;
    
    /** @var int|null $targetedAppCount Count of applications targeted. */
    private ?int $targetedAppCount = null;
    
    /** @var int|null $targetedPolicyCount Count of policies targeted. */
    private ?int $targetedPolicyCount = null;
    
    /** @var string|null $userPrincipalName User principal name used to enroll the device. */
    private ?string $userPrincipalName = null;
    
    /** @var string|null $windows10EnrollmentCompletionPageConfigurationDisplayName Enrollment Status Page profile name */
    private ?string $windows10EnrollmentCompletionPageConfigurationDisplayName = null;
    
    /** @var string|null $windows10EnrollmentCompletionPageConfigurationId Enrollment Status Page profile ID */
    private ?string $windows10EnrollmentCompletionPageConfigurationId = null;
    
    /** @var string|null $windowsAutopilotDeploymentProfileDisplayName Autopilot profile name. */
    private ?string $windowsAutopilotDeploymentProfileDisplayName = null;
    
    /**
     * Instantiates a new deviceManagementAutopilotEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementAutopilotEvent
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementAutopilotEvent {
        return new DeviceManagementAutopilotEvent();
    }

    /**
     * Gets the accountSetupDuration property value. Time spent in user ESP.
     * @return DateInterval|null
    */
    public function getAccountSetupDuration(): ?DateInterval {
        return $this->accountSetupDuration;
    }

    /**
     * Gets the accountSetupStatus property value. Deployment status for the enrollment status page account setup phase. Possible values are: unknown, success, inProgress, failure, successWithTimeout, notAttempted, disabled.
     * @return WindowsAutopilotDeploymentState|null
    */
    public function getAccountSetupStatus(): ?WindowsAutopilotDeploymentState {
        return $this->accountSetupStatus;
    }

    /**
     * Gets the deploymentDuration property value. Autopilot deployment duration including enrollment.
     * @return DateInterval|null
    */
    public function getDeploymentDuration(): ?DateInterval {
        return $this->deploymentDuration;
    }

    /**
     * Gets the deploymentEndDateTime property value. Deployment end time.
     * @return DateTime|null
    */
    public function getDeploymentEndDateTime(): ?DateTime {
        return $this->deploymentEndDateTime;
    }

    /**
     * Gets the deploymentStartDateTime property value. Deployment start time.
     * @return DateTime|null
    */
    public function getDeploymentStartDateTime(): ?DateTime {
        return $this->deploymentStartDateTime;
    }

    /**
     * Gets the deploymentState property value. Deployment state like Success, Failure, InProgress, SuccessWithTimeout. Possible values are: unknown, success, inProgress, failure, successWithTimeout, notAttempted, disabled.
     * @return WindowsAutopilotDeploymentState|null
    */
    public function getDeploymentState(): ?WindowsAutopilotDeploymentState {
        return $this->deploymentState;
    }

    /**
     * Gets the deploymentTotalDuration property value. Total deployment duration from enrollment to Desktop screen.
     * @return DateInterval|null
    */
    public function getDeploymentTotalDuration(): ?DateInterval {
        return $this->deploymentTotalDuration;
    }

    /**
     * Gets the deviceId property value. Device id associated with the object
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * Gets the devicePreparationDuration property value. Time spent in device enrollment.
     * @return DateInterval|null
    */
    public function getDevicePreparationDuration(): ?DateInterval {
        return $this->devicePreparationDuration;
    }

    /**
     * Gets the deviceRegisteredDateTime property value. Device registration date.
     * @return DateTime|null
    */
    public function getDeviceRegisteredDateTime(): ?DateTime {
        return $this->deviceRegisteredDateTime;
    }

    /**
     * Gets the deviceSerialNumber property value. Device serial number.
     * @return string|null
    */
    public function getDeviceSerialNumber(): ?string {
        return $this->deviceSerialNumber;
    }

    /**
     * Gets the deviceSetupDuration property value. Time spent in device ESP.
     * @return DateInterval|null
    */
    public function getDeviceSetupDuration(): ?DateInterval {
        return $this->deviceSetupDuration;
    }

    /**
     * Gets the deviceSetupStatus property value. Deployment status for the enrollment status page device setup phase. Possible values are: unknown, success, inProgress, failure, successWithTimeout, notAttempted, disabled.
     * @return WindowsAutopilotDeploymentState|null
    */
    public function getDeviceSetupStatus(): ?WindowsAutopilotDeploymentState {
        return $this->deviceSetupStatus;
    }

    /**
     * Gets the enrollmentFailureDetails property value. Enrollment failure details.
     * @return string|null
    */
    public function getEnrollmentFailureDetails(): ?string {
        return $this->enrollmentFailureDetails;
    }

    /**
     * Gets the enrollmentStartDateTime property value. Device enrollment start date.
     * @return DateTime|null
    */
    public function getEnrollmentStartDateTime(): ?DateTime {
        return $this->enrollmentStartDateTime;
    }

    /**
     * Gets the enrollmentState property value. Enrollment state like Enrolled, Failed. Possible values are: unknown, enrolled, pendingReset, failed, notContacted, blocked.
     * @return EnrollmentState|null
    */
    public function getEnrollmentState(): ?EnrollmentState {
        return $this->enrollmentState;
    }

    /**
     * Gets the enrollmentType property value. Enrollment type. Possible values are: unknown, azureADJoinedWithAutopilotProfile, offlineDomainJoined, azureADJoinedUsingDeviceAuthWithAutopilotProfile, azureADJoinedUsingDeviceAuthWithoutAutopilotProfile, azureADJoinedWithOfflineAutopilotProfile, azureADJoinedWithWhiteGlove, offlineDomainJoinedWithWhiteGlove, offlineDomainJoinedWithOfflineAutopilotProfile.
     * @return WindowsAutopilotEnrollmentType|null
    */
    public function getEnrollmentType(): ?WindowsAutopilotEnrollmentType {
        return $this->enrollmentType;
    }

    /**
     * Gets the eventDateTime property value. Time when the event occurred .
     * @return DateTime|null
    */
    public function getEventDateTime(): ?DateTime {
        return $this->eventDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'accountSetupDuration' => function (self $o, ParseNode $n) { $o->setAccountSetupDuration($n->getDateIntervalValue()); },
            'accountSetupStatus' => function (self $o, ParseNode $n) { $o->setAccountSetupStatus($n->getEnumValue(WindowsAutopilotDeploymentState::class)); },
            'deploymentDuration' => function (self $o, ParseNode $n) { $o->setDeploymentDuration($n->getDateIntervalValue()); },
            'deploymentEndDateTime' => function (self $o, ParseNode $n) { $o->setDeploymentEndDateTime($n->getDateTimeValue()); },
            'deploymentStartDateTime' => function (self $o, ParseNode $n) { $o->setDeploymentStartDateTime($n->getDateTimeValue()); },
            'deploymentState' => function (self $o, ParseNode $n) { $o->setDeploymentState($n->getEnumValue(WindowsAutopilotDeploymentState::class)); },
            'deploymentTotalDuration' => function (self $o, ParseNode $n) { $o->setDeploymentTotalDuration($n->getDateIntervalValue()); },
            'deviceId' => function (self $o, ParseNode $n) { $o->setDeviceId($n->getStringValue()); },
            'devicePreparationDuration' => function (self $o, ParseNode $n) { $o->setDevicePreparationDuration($n->getDateIntervalValue()); },
            'deviceRegisteredDateTime' => function (self $o, ParseNode $n) { $o->setDeviceRegisteredDateTime($n->getDateTimeValue()); },
            'deviceSerialNumber' => function (self $o, ParseNode $n) { $o->setDeviceSerialNumber($n->getStringValue()); },
            'deviceSetupDuration' => function (self $o, ParseNode $n) { $o->setDeviceSetupDuration($n->getDateIntervalValue()); },
            'deviceSetupStatus' => function (self $o, ParseNode $n) { $o->setDeviceSetupStatus($n->getEnumValue(WindowsAutopilotDeploymentState::class)); },
            'enrollmentFailureDetails' => function (self $o, ParseNode $n) { $o->setEnrollmentFailureDetails($n->getStringValue()); },
            'enrollmentStartDateTime' => function (self $o, ParseNode $n) { $o->setEnrollmentStartDateTime($n->getDateTimeValue()); },
            'enrollmentState' => function (self $o, ParseNode $n) { $o->setEnrollmentState($n->getEnumValue(EnrollmentState::class)); },
            'enrollmentType' => function (self $o, ParseNode $n) { $o->setEnrollmentType($n->getEnumValue(WindowsAutopilotEnrollmentType::class)); },
            'eventDateTime' => function (self $o, ParseNode $n) { $o->setEventDateTime($n->getDateTimeValue()); },
            'managedDeviceName' => function (self $o, ParseNode $n) { $o->setManagedDeviceName($n->getStringValue()); },
            'osVersion' => function (self $o, ParseNode $n) { $o->setOsVersion($n->getStringValue()); },
            'policyStatusDetails' => function (self $o, ParseNode $n) { $o->setPolicyStatusDetails($n->getCollectionOfObjectValues(DeviceManagementAutopilotPolicyStatusDetail::class)); },
            'targetedAppCount' => function (self $o, ParseNode $n) { $o->setTargetedAppCount($n->getIntegerValue()); },
            'targetedPolicyCount' => function (self $o, ParseNode $n) { $o->setTargetedPolicyCount($n->getIntegerValue()); },
            'userPrincipalName' => function (self $o, ParseNode $n) { $o->setUserPrincipalName($n->getStringValue()); },
            'windows10EnrollmentCompletionPageConfigurationDisplayName' => function (self $o, ParseNode $n) { $o->setWindows10EnrollmentCompletionPageConfigurationDisplayName($n->getStringValue()); },
            'windows10EnrollmentCompletionPageConfigurationId' => function (self $o, ParseNode $n) { $o->setWindows10EnrollmentCompletionPageConfigurationId($n->getStringValue()); },
            'windowsAutopilotDeploymentProfileDisplayName' => function (self $o, ParseNode $n) { $o->setWindowsAutopilotDeploymentProfileDisplayName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the managedDeviceName property value. Managed device name.
     * @return string|null
    */
    public function getManagedDeviceName(): ?string {
        return $this->managedDeviceName;
    }

    /**
     * Gets the osVersion property value. Device operating system version.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->osVersion;
    }

    /**
     * Gets the policyStatusDetails property value. Policy and application status details for this device.
     * @return array<DeviceManagementAutopilotPolicyStatusDetail>|null
    */
    public function getPolicyStatusDetails(): ?array {
        return $this->policyStatusDetails;
    }

    /**
     * Gets the targetedAppCount property value. Count of applications targeted.
     * @return int|null
    */
    public function getTargetedAppCount(): ?int {
        return $this->targetedAppCount;
    }

    /**
     * Gets the targetedPolicyCount property value. Count of policies targeted.
     * @return int|null
    */
    public function getTargetedPolicyCount(): ?int {
        return $this->targetedPolicyCount;
    }

    /**
     * Gets the userPrincipalName property value. User principal name used to enroll the device.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Gets the windows10EnrollmentCompletionPageConfigurationDisplayName property value. Enrollment Status Page profile name
     * @return string|null
    */
    public function getWindows10EnrollmentCompletionPageConfigurationDisplayName(): ?string {
        return $this->windows10EnrollmentCompletionPageConfigurationDisplayName;
    }

    /**
     * Gets the windows10EnrollmentCompletionPageConfigurationId property value. Enrollment Status Page profile ID
     * @return string|null
    */
    public function getWindows10EnrollmentCompletionPageConfigurationId(): ?string {
        return $this->windows10EnrollmentCompletionPageConfigurationId;
    }

    /**
     * Gets the windowsAutopilotDeploymentProfileDisplayName property value. Autopilot profile name.
     * @return string|null
    */
    public function getWindowsAutopilotDeploymentProfileDisplayName(): ?string {
        return $this->windowsAutopilotDeploymentProfileDisplayName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateIntervalValue('accountSetupDuration', $this->accountSetupDuration);
        $writer->writeEnumValue('accountSetupStatus', $this->accountSetupStatus);
        $writer->writeDateIntervalValue('deploymentDuration', $this->deploymentDuration);
        $writer->writeDateTimeValue('deploymentEndDateTime', $this->deploymentEndDateTime);
        $writer->writeDateTimeValue('deploymentStartDateTime', $this->deploymentStartDateTime);
        $writer->writeEnumValue('deploymentState', $this->deploymentState);
        $writer->writeDateIntervalValue('deploymentTotalDuration', $this->deploymentTotalDuration);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeDateIntervalValue('devicePreparationDuration', $this->devicePreparationDuration);
        $writer->writeDateTimeValue('deviceRegisteredDateTime', $this->deviceRegisteredDateTime);
        $writer->writeStringValue('deviceSerialNumber', $this->deviceSerialNumber);
        $writer->writeDateIntervalValue('deviceSetupDuration', $this->deviceSetupDuration);
        $writer->writeEnumValue('deviceSetupStatus', $this->deviceSetupStatus);
        $writer->writeStringValue('enrollmentFailureDetails', $this->enrollmentFailureDetails);
        $writer->writeDateTimeValue('enrollmentStartDateTime', $this->enrollmentStartDateTime);
        $writer->writeEnumValue('enrollmentState', $this->enrollmentState);
        $writer->writeEnumValue('enrollmentType', $this->enrollmentType);
        $writer->writeDateTimeValue('eventDateTime', $this->eventDateTime);
        $writer->writeStringValue('managedDeviceName', $this->managedDeviceName);
        $writer->writeStringValue('osVersion', $this->osVersion);
        $writer->writeCollectionOfObjectValues('policyStatusDetails', $this->policyStatusDetails);
        $writer->writeIntegerValue('targetedAppCount', $this->targetedAppCount);
        $writer->writeIntegerValue('targetedPolicyCount', $this->targetedPolicyCount);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
        $writer->writeStringValue('windows10EnrollmentCompletionPageConfigurationDisplayName', $this->windows10EnrollmentCompletionPageConfigurationDisplayName);
        $writer->writeStringValue('windows10EnrollmentCompletionPageConfigurationId', $this->windows10EnrollmentCompletionPageConfigurationId);
        $writer->writeStringValue('windowsAutopilotDeploymentProfileDisplayName', $this->windowsAutopilotDeploymentProfileDisplayName);
    }

    /**
     * Sets the accountSetupDuration property value. Time spent in user ESP.
     *  @param DateInterval|null $value Value to set for the accountSetupDuration property.
    */
    public function setAccountSetupDuration(?DateInterval $value ): void {
        $this->accountSetupDuration = $value;
    }

    /**
     * Sets the accountSetupStatus property value. Deployment status for the enrollment status page account setup phase. Possible values are: unknown, success, inProgress, failure, successWithTimeout, notAttempted, disabled.
     *  @param WindowsAutopilotDeploymentState|null $value Value to set for the accountSetupStatus property.
    */
    public function setAccountSetupStatus(?WindowsAutopilotDeploymentState $value ): void {
        $this->accountSetupStatus = $value;
    }

    /**
     * Sets the deploymentDuration property value. Autopilot deployment duration including enrollment.
     *  @param DateInterval|null $value Value to set for the deploymentDuration property.
    */
    public function setDeploymentDuration(?DateInterval $value ): void {
        $this->deploymentDuration = $value;
    }

    /**
     * Sets the deploymentEndDateTime property value. Deployment end time.
     *  @param DateTime|null $value Value to set for the deploymentEndDateTime property.
    */
    public function setDeploymentEndDateTime(?DateTime $value ): void {
        $this->deploymentEndDateTime = $value;
    }

    /**
     * Sets the deploymentStartDateTime property value. Deployment start time.
     *  @param DateTime|null $value Value to set for the deploymentStartDateTime property.
    */
    public function setDeploymentStartDateTime(?DateTime $value ): void {
        $this->deploymentStartDateTime = $value;
    }

    /**
     * Sets the deploymentState property value. Deployment state like Success, Failure, InProgress, SuccessWithTimeout. Possible values are: unknown, success, inProgress, failure, successWithTimeout, notAttempted, disabled.
     *  @param WindowsAutopilotDeploymentState|null $value Value to set for the deploymentState property.
    */
    public function setDeploymentState(?WindowsAutopilotDeploymentState $value ): void {
        $this->deploymentState = $value;
    }

    /**
     * Sets the deploymentTotalDuration property value. Total deployment duration from enrollment to Desktop screen.
     *  @param DateInterval|null $value Value to set for the deploymentTotalDuration property.
    */
    public function setDeploymentTotalDuration(?DateInterval $value ): void {
        $this->deploymentTotalDuration = $value;
    }

    /**
     * Sets the deviceId property value. Device id associated with the object
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the devicePreparationDuration property value. Time spent in device enrollment.
     *  @param DateInterval|null $value Value to set for the devicePreparationDuration property.
    */
    public function setDevicePreparationDuration(?DateInterval $value ): void {
        $this->devicePreparationDuration = $value;
    }

    /**
     * Sets the deviceRegisteredDateTime property value. Device registration date.
     *  @param DateTime|null $value Value to set for the deviceRegisteredDateTime property.
    */
    public function setDeviceRegisteredDateTime(?DateTime $value ): void {
        $this->deviceRegisteredDateTime = $value;
    }

    /**
     * Sets the deviceSerialNumber property value. Device serial number.
     *  @param string|null $value Value to set for the deviceSerialNumber property.
    */
    public function setDeviceSerialNumber(?string $value ): void {
        $this->deviceSerialNumber = $value;
    }

    /**
     * Sets the deviceSetupDuration property value. Time spent in device ESP.
     *  @param DateInterval|null $value Value to set for the deviceSetupDuration property.
    */
    public function setDeviceSetupDuration(?DateInterval $value ): void {
        $this->deviceSetupDuration = $value;
    }

    /**
     * Sets the deviceSetupStatus property value. Deployment status for the enrollment status page device setup phase. Possible values are: unknown, success, inProgress, failure, successWithTimeout, notAttempted, disabled.
     *  @param WindowsAutopilotDeploymentState|null $value Value to set for the deviceSetupStatus property.
    */
    public function setDeviceSetupStatus(?WindowsAutopilotDeploymentState $value ): void {
        $this->deviceSetupStatus = $value;
    }

    /**
     * Sets the enrollmentFailureDetails property value. Enrollment failure details.
     *  @param string|null $value Value to set for the enrollmentFailureDetails property.
    */
    public function setEnrollmentFailureDetails(?string $value ): void {
        $this->enrollmentFailureDetails = $value;
    }

    /**
     * Sets the enrollmentStartDateTime property value. Device enrollment start date.
     *  @param DateTime|null $value Value to set for the enrollmentStartDateTime property.
    */
    public function setEnrollmentStartDateTime(?DateTime $value ): void {
        $this->enrollmentStartDateTime = $value;
    }

    /**
     * Sets the enrollmentState property value. Enrollment state like Enrolled, Failed. Possible values are: unknown, enrolled, pendingReset, failed, notContacted, blocked.
     *  @param EnrollmentState|null $value Value to set for the enrollmentState property.
    */
    public function setEnrollmentState(?EnrollmentState $value ): void {
        $this->enrollmentState = $value;
    }

    /**
     * Sets the enrollmentType property value. Enrollment type. Possible values are: unknown, azureADJoinedWithAutopilotProfile, offlineDomainJoined, azureADJoinedUsingDeviceAuthWithAutopilotProfile, azureADJoinedUsingDeviceAuthWithoutAutopilotProfile, azureADJoinedWithOfflineAutopilotProfile, azureADJoinedWithWhiteGlove, offlineDomainJoinedWithWhiteGlove, offlineDomainJoinedWithOfflineAutopilotProfile.
     *  @param WindowsAutopilotEnrollmentType|null $value Value to set for the enrollmentType property.
    */
    public function setEnrollmentType(?WindowsAutopilotEnrollmentType $value ): void {
        $this->enrollmentType = $value;
    }

    /**
     * Sets the eventDateTime property value. Time when the event occurred .
     *  @param DateTime|null $value Value to set for the eventDateTime property.
    */
    public function setEventDateTime(?DateTime $value ): void {
        $this->eventDateTime = $value;
    }

    /**
     * Sets the managedDeviceName property value. Managed device name.
     *  @param string|null $value Value to set for the managedDeviceName property.
    */
    public function setManagedDeviceName(?string $value ): void {
        $this->managedDeviceName = $value;
    }

    /**
     * Sets the osVersion property value. Device operating system version.
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value ): void {
        $this->osVersion = $value;
    }

    /**
     * Sets the policyStatusDetails property value. Policy and application status details for this device.
     *  @param array<DeviceManagementAutopilotPolicyStatusDetail>|null $value Value to set for the policyStatusDetails property.
    */
    public function setPolicyStatusDetails(?array $value ): void {
        $this->policyStatusDetails = $value;
    }

    /**
     * Sets the targetedAppCount property value. Count of applications targeted.
     *  @param int|null $value Value to set for the targetedAppCount property.
    */
    public function setTargetedAppCount(?int $value ): void {
        $this->targetedAppCount = $value;
    }

    /**
     * Sets the targetedPolicyCount property value. Count of policies targeted.
     *  @param int|null $value Value to set for the targetedPolicyCount property.
    */
    public function setTargetedPolicyCount(?int $value ): void {
        $this->targetedPolicyCount = $value;
    }

    /**
     * Sets the userPrincipalName property value. User principal name used to enroll the device.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

    /**
     * Sets the windows10EnrollmentCompletionPageConfigurationDisplayName property value. Enrollment Status Page profile name
     *  @param string|null $value Value to set for the windows10EnrollmentCompletionPageConfigurationDisplayName property.
    */
    public function setWindows10EnrollmentCompletionPageConfigurationDisplayName(?string $value ): void {
        $this->windows10EnrollmentCompletionPageConfigurationDisplayName = $value;
    }

    /**
     * Sets the windows10EnrollmentCompletionPageConfigurationId property value. Enrollment Status Page profile ID
     *  @param string|null $value Value to set for the windows10EnrollmentCompletionPageConfigurationId property.
    */
    public function setWindows10EnrollmentCompletionPageConfigurationId(?string $value ): void {
        $this->windows10EnrollmentCompletionPageConfigurationId = $value;
    }

    /**
     * Sets the windowsAutopilotDeploymentProfileDisplayName property value. Autopilot profile name.
     *  @param string|null $value Value to set for the windowsAutopilotDeploymentProfileDisplayName property.
    */
    public function setWindowsAutopilotDeploymentProfileDisplayName(?string $value ): void {
        $this->windowsAutopilotDeploymentProfileDisplayName = $value;
    }

}
