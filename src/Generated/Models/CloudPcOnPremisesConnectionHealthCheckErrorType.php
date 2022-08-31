<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CloudPcOnPremisesConnectionHealthCheckErrorType extends Enum {
    public const DNS_CHECK_FQDN_NOT_FOUND = 'dnsCheckFqdnNotFound';
    public const DNS_CHECK_NAME_WITH_INVALID_CHARACTER = 'dnsCheckNameWithInvalidCharacter';
    public const DNS_CHECK_UNKNOWN_ERROR = 'dnsCheckUnknownError';
    public const AD_JOIN_CHECK_FQDN_NOT_FOUND = 'adJoinCheckFqdnNotFound';
    public const AD_JOIN_CHECK_INCORRECT_CREDENTIALS = 'adJoinCheckIncorrectCredentials';
    public const AD_JOIN_CHECK_ORGANIZATIONAL_UNIT_NOT_FOUND = 'adJoinCheckOrganizationalUnitNotFound';
    public const AD_JOIN_CHECK_ORGANIZATIONAL_UNIT_INCORRECT_FORMAT = 'adJoinCheckOrganizationalUnitIncorrectFormat';
    public const AD_JOIN_CHECK_COMPUTER_OBJECT_ALREADY_EXISTS = 'adJoinCheckComputerObjectAlreadyExists';
    public const AD_JOIN_CHECK_ACCESS_DENIED = 'adJoinCheckAccessDenied';
    public const AD_JOIN_CHECK_CREDENTIALS_EXPIRED = 'adJoinCheckCredentialsExpired';
    public const AD_JOIN_CHECK_ACCOUNT_LOCKED_OR_DISABLED = 'adJoinCheckAccountLockedOrDisabled';
    public const AD_JOIN_CHECK_ACCOUNT_QUOTA_EXCEEDED = 'adJoinCheckAccountQuotaExceeded';
    public const AD_JOIN_CHECK_UNKNOWN_ERROR = 'adJoinCheckUnknownError';
    public const ENDPOINT_CONNECTIVITY_CHECK_CLOUD_PC_URL_NOT_ALLOW_LISTED = 'endpointConnectivityCheckCloudPcUrlNotAllowListed';
    public const ENDPOINT_CONNECTIVITY_CHECK_W_V_D_URL_NOT_ALLOW_LISTED = 'endpointConnectivityCheckWVDUrlNotAllowListed';
    public const ENDPOINT_CONNECTIVITY_CHECK_INTUNE_URL_NOT_ALLOW_LISTED = 'endpointConnectivityCheckIntuneUrlNotAllowListed';
    public const ENDPOINT_CONNECTIVITY_CHECK_AZURE_A_D_URL_NOT_ALLOW_LISTED = 'endpointConnectivityCheckAzureADUrlNotAllowListed';
    public const ENDPOINT_CONNECTIVITY_CHECK_LOCALE_URL_NOT_ALLOW_LISTED = 'endpointConnectivityCheckLocaleUrlNotAllowListed';
    public const ENDPOINT_CONNECTIVITY_CHECK_UNKNOWN_ERROR = 'endpointConnectivityCheckUnknownError';
    public const AZURE_AD_DEVICE_SYNC_CHECK_DEVICE_NOT_FOUND = 'azureAdDeviceSyncCheckDeviceNotFound';
    public const AZURE_AD_DEVICE_SYNC_CHECK_LONG_SYNC_CIRCLE = 'azureAdDeviceSyncCheckLongSyncCircle';
    public const AZURE_AD_DEVICE_SYNC_CHECK_CONNECT_DISABLED = 'azureAdDeviceSyncCheckConnectDisabled';
    public const AZURE_AD_DEVICE_SYNC_CHECK_DURATION_EXCEEDED = 'azureAdDeviceSyncCheckDurationExceeded';
    public const AZURE_AD_DEVICE_SYNC_CHECK_SCP_NOT_CONFIGURED = 'azureAdDeviceSyncCheckScpNotConfigured';
    public const AZURE_AD_DEVICE_SYNC_CHECK_TRANSIENT_SERVICE_ERROR = 'azureAdDeviceSyncCheckTransientServiceError';
    public const AZURE_AD_DEVICE_SYNC_CHECK_UNKNOWN_ERROR = 'azureAdDeviceSyncCheckUnknownError';
    public const RESOURCE_AVAILABILITY_CHECK_NO_SUBNET_I_P = 'resourceAvailabilityCheckNoSubnetIP';
    public const RESOURCE_AVAILABILITY_CHECK_SUBSCRIPTION_DISABLED = 'resourceAvailabilityCheckSubscriptionDisabled';
    public const RESOURCE_AVAILABILITY_CHECK_AZURE_POLICY_VIOLATION = 'resourceAvailabilityCheckAzurePolicyViolation';
    public const RESOURCE_AVAILABILITY_CHECK_SUBSCRIPTION_NOT_FOUND = 'resourceAvailabilityCheckSubscriptionNotFound';
    public const RESOURCE_AVAILABILITY_CHECK_SUBSCRIPTION_TRANSFERRED = 'resourceAvailabilityCheckSubscriptionTransferred';
    public const RESOURCE_AVAILABILITY_CHECK_GENERAL_SUBSCRIPTION_ERROR = 'resourceAvailabilityCheckGeneralSubscriptionError';
    public const RESOURCE_AVAILABILITY_CHECK_UNSUPPORTED_V_NET_REGION = 'resourceAvailabilityCheckUnsupportedVNetRegion';
    public const RESOURCE_AVAILABILITY_CHECK_RESOURCE_GROUP_INVALID = 'resourceAvailabilityCheckResourceGroupInvalid';
    public const RESOURCE_AVAILABILITY_CHECK_V_NET_INVALID = 'resourceAvailabilityCheckVNetInvalid';
    public const RESOURCE_AVAILABILITY_CHECK_SUBNET_INVALID = 'resourceAvailabilityCheckSubnetInvalid';
    public const RESOURCE_AVAILABILITY_CHECK_RESOURCE_GROUP_BEING_DELETED = 'resourceAvailabilityCheckResourceGroupBeingDeleted';
    public const RESOURCE_AVAILABILITY_CHECK_V_NET_BEING_MOVED = 'resourceAvailabilityCheckVNetBeingMoved';
    public const RESOURCE_AVAILABILITY_CHECK_SUBNET_DELEGATION_FAILED = 'resourceAvailabilityCheckSubnetDelegationFailed';
    public const RESOURCE_AVAILABILITY_CHECK_SUBNET_WITH_EXTERNAL_RESOURCES = 'resourceAvailabilityCheckSubnetWithExternalResources';
    public const RESOURCE_AVAILABILITY_CHECK_RESOURCE_GROUP_LOCKED_FOR_READONLY = 'resourceAvailabilityCheckResourceGroupLockedForReadonly';
    public const RESOURCE_AVAILABILITY_CHECK_RESOURCE_GROUP_LOCKED_FOR_DELETE = 'resourceAvailabilityCheckResourceGroupLockedForDelete';
    public const RESOURCE_AVAILABILITY_CHECK_NO_INTUNE_READER_ROLE_ERROR = 'resourceAvailabilityCheckNoIntuneReaderRoleError';
    public const RESOURCE_AVAILABILITY_CHECK_INTUNE_DEFAULT_WINDOWS_RESTRICTION_VIOLATION = 'resourceAvailabilityCheckIntuneDefaultWindowsRestrictionViolation';
    public const RESOURCE_AVAILABILITY_CHECK_INTUNE_CUSTOM_WINDOWS_RESTRICTION_VIOLATION = 'resourceAvailabilityCheckIntuneCustomWindowsRestrictionViolation';
    public const RESOURCE_AVAILABILITY_CHECK_TRANSIENT_SERVICE_ERROR = 'resourceAvailabilityCheckTransientServiceError';
    public const RESOURCE_AVAILABILITY_CHECK_UNKNOWN_ERROR = 'resourceAvailabilityCheckUnknownError';
    public const PERMISSION_CHECK_NO_SUBSCRIPTION_READER_ROLE = 'permissionCheckNoSubscriptionReaderRole';
    public const PERMISSION_CHECK_NO_RESOURCE_GROUP_OWNER_ROLE = 'permissionCheckNoResourceGroupOwnerRole';
    public const PERMISSION_CHECK_NO_V_NET_CONTRIBUTOR_ROLE = 'permissionCheckNoVNetContributorRole';
    public const PERMISSION_CHECK_NO_RESOURCE_GROUP_NETWORK_CONTRIBUTOR_ROLE = 'permissionCheckNoResourceGroupNetworkContributorRole';
    public const PERMISSION_CHECK_TRANSIENT_SERVICE_ERROR = 'permissionCheckTransientServiceError';
    public const PERMISSION_CHECK_UNKNOWN_ERROR = 'permissionCheckUnknownError';
    public const INTERNAL_SERVER_ERROR_DEPLOYMENT_CANCELED = 'internalServerErrorDeploymentCanceled';
    public const INTERNAL_SERVER_ERROR_ALLOCATE_RESOURCE_FAILED = 'internalServerErrorAllocateResourceFailed';
    public const INTERNAL_SERVER_ERROR_V_M_DEPLOYMENT_TIMEOUT = 'internalServerErrorVMDeploymentTimeout';
    public const INTERNAL_SERVER_ERROR_UNABLE_TO_RUN_DSC_SCRIPT = 'internalServerErrorUnableToRunDscScript';
    public const INTERNAL_SERVER_UNKNOWN_ERROR = 'internalServerUnknownError';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
