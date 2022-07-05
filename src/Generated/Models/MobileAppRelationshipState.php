<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppRelationshipState implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $deviceId The corresponding device id.
    */
    private ?string $deviceId = null;
    
    /**
     * @var int|null $errorCode The error code for install or uninstall failures of target app.
    */
    private ?int $errorCode = null;
    
    /**
     * @var ResultantAppState|null $installState The install state of the app of target app. Possible values are: installed, failed, notInstalled, uninstallFailed, pendingInstall, unknown, notApplicable.
    */
    private ?ResultantAppState $installState = null;
    
    /**
     * @var ResultantAppStateDetail|null $installStateDetail The install state detail of the app. Possible values are: noAdditionalDetails, dependencyFailedToInstall, dependencyWithRequirementsNotMet, dependencyPendingReboot, dependencyWithAutoInstallDisabled, supersededAppUninstallFailed, supersededAppUninstallPendingReboot, removingSupersededApps, iosAppStoreUpdateFailedToInstall, vppAppHasUpdateAvailable, userRejectedUpdate, uninstallPendingReboot, supersedingAppsDetected, supersededAppsDetected, seeInstallErrorCode, autoInstallDisabled, managedAppNoLongerPresent, userRejectedInstall, userIsNotLoggedIntoAppStore, untargetedSupersedingAppsDetected, appRemovedBySupersedence, seeUninstallErrorCode, pendingReboot, installingDependencies, contentDownloaded, supersedingAppsNotApplicable, powerShellScriptRequirementNotMet, registryRequirementNotMet, fileSystemRequirementNotMet, platformNotApplicable, minimumCpuSpeedNotMet, minimumLogicalProcessorCountNotMet, minimumPhysicalMemoryNotMet, minimumOsVersionNotMet, minimumDiskSpaceNotMet, processorArchitectureNotApplicable.
    */
    private ?ResultantAppStateDetail $installStateDetail = null;
    
    /**
     * @var array<string>|null $sourceIds The collection of source mobile app's ids.
    */
    private ?array $sourceIds = null;
    
    /**
     * @var string|null $targetDisplayName The related target app's display name.
    */
    private ?string $targetDisplayName = null;
    
    /**
     * @var string|null $targetId The related target app's id.
    */
    private ?string $targetId = null;
    
    /**
     * @var DateTime|null $targetLastSyncDateTime The last sync time of the target app.
    */
    private ?DateTime $targetLastSyncDateTime = null;
    
    /**
     * Instantiates a new mobileAppRelationshipState and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppRelationshipState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppRelationshipState {
        return new MobileAppRelationshipState();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceId property value. The corresponding device id.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * Gets the errorCode property value. The error code for install or uninstall failures of target app.
     * @return int|null
    */
    public function getErrorCode(): ?int {
        return $this->errorCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceId' => function (ParseNode $n) use ($o) { $o->setDeviceId($n->getStringValue()); },
            'errorCode' => function (ParseNode $n) use ($o) { $o->setErrorCode($n->getIntegerValue()); },
            'installState' => function (ParseNode $n) use ($o) { $o->setInstallState($n->getEnumValue(ResultantAppState::class)); },
            'installStateDetail' => function (ParseNode $n) use ($o) { $o->setInstallStateDetail($n->getEnumValue(ResultantAppStateDetail::class)); },
            'sourceIds' => function (ParseNode $n) use ($o) { $o->setSourceIds($n->getCollectionOfPrimitiveValues()); },
            'targetDisplayName' => function (ParseNode $n) use ($o) { $o->setTargetDisplayName($n->getStringValue()); },
            'targetId' => function (ParseNode $n) use ($o) { $o->setTargetId($n->getStringValue()); },
            'targetLastSyncDateTime' => function (ParseNode $n) use ($o) { $o->setTargetLastSyncDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the installState property value. The install state of the app of target app. Possible values are: installed, failed, notInstalled, uninstallFailed, pendingInstall, unknown, notApplicable.
     * @return ResultantAppState|null
    */
    public function getInstallState(): ?ResultantAppState {
        return $this->installState;
    }

    /**
     * Gets the installStateDetail property value. The install state detail of the app. Possible values are: noAdditionalDetails, dependencyFailedToInstall, dependencyWithRequirementsNotMet, dependencyPendingReboot, dependencyWithAutoInstallDisabled, supersededAppUninstallFailed, supersededAppUninstallPendingReboot, removingSupersededApps, iosAppStoreUpdateFailedToInstall, vppAppHasUpdateAvailable, userRejectedUpdate, uninstallPendingReboot, supersedingAppsDetected, supersededAppsDetected, seeInstallErrorCode, autoInstallDisabled, managedAppNoLongerPresent, userRejectedInstall, userIsNotLoggedIntoAppStore, untargetedSupersedingAppsDetected, appRemovedBySupersedence, seeUninstallErrorCode, pendingReboot, installingDependencies, contentDownloaded, supersedingAppsNotApplicable, powerShellScriptRequirementNotMet, registryRequirementNotMet, fileSystemRequirementNotMet, platformNotApplicable, minimumCpuSpeedNotMet, minimumLogicalProcessorCountNotMet, minimumPhysicalMemoryNotMet, minimumOsVersionNotMet, minimumDiskSpaceNotMet, processorArchitectureNotApplicable.
     * @return ResultantAppStateDetail|null
    */
    public function getInstallStateDetail(): ?ResultantAppStateDetail {
        return $this->installStateDetail;
    }

    /**
     * Gets the sourceIds property value. The collection of source mobile app's ids.
     * @return array<string>|null
    */
    public function getSourceIds(): ?array {
        return $this->sourceIds;
    }

    /**
     * Gets the targetDisplayName property value. The related target app's display name.
     * @return string|null
    */
    public function getTargetDisplayName(): ?string {
        return $this->targetDisplayName;
    }

    /**
     * Gets the targetId property value. The related target app's id.
     * @return string|null
    */
    public function getTargetId(): ?string {
        return $this->targetId;
    }

    /**
     * Gets the targetLastSyncDateTime property value. The last sync time of the target app.
     * @return DateTime|null
    */
    public function getTargetLastSyncDateTime(): ?DateTime {
        return $this->targetLastSyncDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeIntegerValue('errorCode', $this->errorCode);
        $writer->writeEnumValue('installState', $this->installState);
        $writer->writeEnumValue('installStateDetail', $this->installStateDetail);
        $writer->writeCollectionOfPrimitiveValues('sourceIds', $this->sourceIds);
        $writer->writeStringValue('targetDisplayName', $this->targetDisplayName);
        $writer->writeStringValue('targetId', $this->targetId);
        $writer->writeDateTimeValue('targetLastSyncDateTime', $this->targetLastSyncDateTime);
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
     * Sets the deviceId property value. The corresponding device id.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the errorCode property value. The error code for install or uninstall failures of target app.
     *  @param int|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?int $value ): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the installState property value. The install state of the app of target app. Possible values are: installed, failed, notInstalled, uninstallFailed, pendingInstall, unknown, notApplicable.
     *  @param ResultantAppState|null $value Value to set for the installState property.
    */
    public function setInstallState(?ResultantAppState $value ): void {
        $this->installState = $value;
    }

    /**
     * Sets the installStateDetail property value. The install state detail of the app. Possible values are: noAdditionalDetails, dependencyFailedToInstall, dependencyWithRequirementsNotMet, dependencyPendingReboot, dependencyWithAutoInstallDisabled, supersededAppUninstallFailed, supersededAppUninstallPendingReboot, removingSupersededApps, iosAppStoreUpdateFailedToInstall, vppAppHasUpdateAvailable, userRejectedUpdate, uninstallPendingReboot, supersedingAppsDetected, supersededAppsDetected, seeInstallErrorCode, autoInstallDisabled, managedAppNoLongerPresent, userRejectedInstall, userIsNotLoggedIntoAppStore, untargetedSupersedingAppsDetected, appRemovedBySupersedence, seeUninstallErrorCode, pendingReboot, installingDependencies, contentDownloaded, supersedingAppsNotApplicable, powerShellScriptRequirementNotMet, registryRequirementNotMet, fileSystemRequirementNotMet, platformNotApplicable, minimumCpuSpeedNotMet, minimumLogicalProcessorCountNotMet, minimumPhysicalMemoryNotMet, minimumOsVersionNotMet, minimumDiskSpaceNotMet, processorArchitectureNotApplicable.
     *  @param ResultantAppStateDetail|null $value Value to set for the installStateDetail property.
    */
    public function setInstallStateDetail(?ResultantAppStateDetail $value ): void {
        $this->installStateDetail = $value;
    }

    /**
     * Sets the sourceIds property value. The collection of source mobile app's ids.
     *  @param array<string>|null $value Value to set for the sourceIds property.
    */
    public function setSourceIds(?array $value ): void {
        $this->sourceIds = $value;
    }

    /**
     * Sets the targetDisplayName property value. The related target app's display name.
     *  @param string|null $value Value to set for the targetDisplayName property.
    */
    public function setTargetDisplayName(?string $value ): void {
        $this->targetDisplayName = $value;
    }

    /**
     * Sets the targetId property value. The related target app's id.
     *  @param string|null $value Value to set for the targetId property.
    */
    public function setTargetId(?string $value ): void {
        $this->targetId = $value;
    }

    /**
     * Sets the targetLastSyncDateTime property value. The last sync time of the target app.
     *  @param DateTime|null $value Value to set for the targetLastSyncDateTime property.
    */
    public function setTargetLastSyncDateTime(?DateTime $value ): void {
        $this->targetLastSyncDateTime = $value;
    }

}
