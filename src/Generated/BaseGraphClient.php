<?php

namespace Microsoft\Graph\Beta\Generated;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\AccessReviewDecisions\AccessReviewDecisionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AccessReviewDecisions\Item\AccessReviewDecisionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\AccessReviews\AccessReviewsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AccessReviews\Item\AccessReviewItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Activitystatistics\ActivitystatisticsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Activitystatistics\Item\ActivityStatisticsItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Admin\AdminRequestBuilder;
use Microsoft\Graph\Beta\Generated\AdministrativeUnits\AdministrativeUnitsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AdministrativeUnits\Item\AdministrativeUnitItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\AgreementAcceptances\AgreementAcceptancesRequestBuilder;
use Microsoft\Graph\Beta\Generated\AgreementAcceptances\Item\AgreementAcceptanceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Agreements\AgreementsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Agreements\Item\AgreementItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\AllowedDataLocations\AllowedDataLocationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AllowedDataLocations\Item\AllowedDataLocationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\App\AppRequestBuilder;
use Microsoft\Graph\Beta\Generated\AppCatalogs\AppCatalogsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Applications\ApplicationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Applications\Item\ApplicationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\ApplicationTemplates\ApplicationTemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\ApplicationTemplates\Item\ApplicationTemplateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\AppRoleAssignments\AppRoleAssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AppRoleAssignments\Item\AppRoleAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\ApprovalWorkflowProviders\ApprovalWorkflowProvidersRequestBuilder;
use Microsoft\Graph\Beta\Generated\ApprovalWorkflowProviders\Item\ApprovalWorkflowProviderItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\AuditLogs\AuditLogsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AuthenticationMethodConfigurations\AuthenticationMethodConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AuthenticationMethodConfigurations\Item\AuthenticationMethodConfigurationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\AuthenticationMethodsPolicy\AuthenticationMethodsPolicyRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingBusinesses\BookingBusinessesRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingBusinesses\Item\BookingBusinessItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingCurrencies\BookingCurrenciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\BookingCurrencies\Item\BookingCurrencyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Branding\BrandingRequestBuilder;
use Microsoft\Graph\Beta\Generated\BusinessFlowTemplates\BusinessFlowTemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\BusinessFlowTemplates\Item\BusinessFlowTemplateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\CertificateBasedAuthConfiguration\CertificateBasedAuthConfigurationRequestBuilder;
use Microsoft\Graph\Beta\Generated\CertificateBasedAuthConfiguration\Item\CertificateBasedAuthConfigurationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Chats\ChatsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Chats\Item\ChatItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Commands\CommandsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Commands\Item\CommandItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Communications\CommunicationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\ComplianceRequestBuilder;
use Microsoft\Graph\Beta\Generated\Connections\ConnectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Connections\Item\ExternalConnectionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Contacts\ContactsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Contacts\Item\OrgContactItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Contracts\ContractsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Contracts\Item\ContractItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataClassification\DataClassificationRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataPolicyOperations\DataPolicyOperationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DataPolicyOperations\Item\DataPolicyOperationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\DeviceAppManagementRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceManagementRequestBuilder;
use Microsoft\Graph\Beta\Generated\Devices\DevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Devices\Item\DeviceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Directory\DirectoryRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectoryObjects\DirectoryObjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectoryObjects\Item\DirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectoryRoles\DirectoryRolesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectoryRoles\Item\DirectoryRoleItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectoryRoleTemplates\DirectoryRoleTemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectoryRoleTemplates\Item\DirectoryRoleTemplateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectorySettingTemplates\DirectorySettingTemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DirectorySettingTemplates\Item\DirectorySettingTemplateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DomainDnsRecords\DomainDnsRecordsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DomainDnsRecords\Item\DomainDnsRecordItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Domains\DomainsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Domains\Item\DomainItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drive\DriveRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\DrivesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drives\Item\DriveItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\EducationRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\PrintRequestBuilder;
use Microsoft\Graph\Beta\Generated\External\ExternalRequestBuilder;
use Microsoft\Graph\Beta\Generated\FilterOperators\FilterOperatorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\FilterOperators\Item\FilterOperatorSchemaItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Financials\FinancialsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Functions\FunctionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Functions\Item\AttributeMappingFunctionSchemaItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceResources\GovernanceResourcesRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceResources\Item\GovernanceResourceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceRoleAssignmentRequests\GovernanceRoleAssignmentRequestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceRoleAssignmentRequests\Item\GovernanceRoleAssignmentRequestItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceRoleAssignments\GovernanceRoleAssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceRoleAssignments\Item\GovernanceRoleAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceRoleDefinitions\GovernanceRoleDefinitionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceRoleDefinitions\Item\GovernanceRoleDefinitionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceRoleSettings\GovernanceRoleSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceRoleSettings\Item\GovernanceRoleSettingItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceSubjects\GovernanceSubjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceSubjects\Item\GovernanceSubjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\GroupLifecyclePolicies\GroupLifecyclePoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\GroupLifecyclePolicies\Item\GroupLifecyclePolicyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\GroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\GroupItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Identity\IdentityRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\IdentityGovernanceRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityProtection\IdentityProtectionRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityProviders\IdentityProvidersRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityProviders\Item\IdentityProviderItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\InformationProtection\InformationProtectionRequestBuilder;
use Microsoft\Graph\Beta\Generated\Invitations\InvitationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Invitations\Item\InvitationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MeRequestBuilder;
use Microsoft\Graph\Beta\Generated\MessageEvents\Item\MessageEventItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\MessageEvents\MessageEventsRequestBuilder;
use Microsoft\Graph\Beta\Generated\MessageRecipients\Item\MessageRecipientItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\MessageRecipients\MessageRecipientsRequestBuilder;
use Microsoft\Graph\Beta\Generated\MessageTraces\Item\MessageTraceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\MessageTraces\MessageTracesRequestBuilder;
use Microsoft\Graph\Beta\Generated\MobilityManagementPolicies\Item\MobilityManagementPolicyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\MobilityManagementPolicies\MobilityManagementPoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Oauth2PermissionGrants\Item\OAuth2PermissionGrantItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Oauth2PermissionGrants\Oauth2PermissionGrantsRequestBuilder;
use Microsoft\Graph\Beta\Generated\OfficeConfiguration\OfficeConfigurationRequestBuilder;
use Microsoft\Graph\Beta\Generated\OnPremisesPublishingProfiles\Item\OnPremisesPublishingProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\OnPremisesPublishingProfiles\OnPremisesPublishingProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Organization\Item\OrganizationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Organization\OrganizationRequestBuilder;
use Microsoft\Graph\Beta\Generated\PayloadResponse\Item\PayloadResponseItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\PayloadResponse\PayloadResponseRequestBuilder;
use Microsoft\Graph\Beta\Generated\PermissionGrants\Item\ResourceSpecificPermissionGrantItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\PermissionGrants\PermissionGrantsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Places\Item\PlaceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Places\PlacesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Planner\PlannerRequestBuilder;
use Microsoft\Graph\Beta\Generated\Policies\PoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Privacy\PrivacyRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedAccess\Item\PrivilegedAccessItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedAccess\PrivilegedAccessRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedApproval\Item\PrivilegedApprovalItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedApproval\PrivilegedApprovalRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedOperationEvents\Item\PrivilegedOperationEventItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedOperationEvents\PrivilegedOperationEventsRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedRoleAssignmentRequests\Item\PrivilegedRoleAssignmentRequestItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedRoleAssignmentRequests\PrivilegedRoleAssignmentRequestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedRoleAssignments\Item\PrivilegedRoleAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedRoleAssignments\PrivilegedRoleAssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedRoles\Item\PrivilegedRoleItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedRoles\PrivilegedRolesRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedSignupStatus\Item\PrivilegedSignupStatusItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\PrivilegedSignupStatus\PrivilegedSignupStatusRequestBuilder;
use Microsoft\Graph\Beta\Generated\ProgramControls\Item\ProgramControlItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\ProgramControls\ProgramControlsRequestBuilder;
use Microsoft\Graph\Beta\Generated\ProgramControlTypes\Item\ProgramControlTypeItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\ProgramControlTypes\ProgramControlTypesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Programs\Item\ProgramItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Programs\ProgramsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\ReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\RiskDetections\Item\RiskDetectionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RiskDetections\RiskDetectionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\RiskyUsers\Item\RiskyUserItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\RiskyUsers\RiskyUsersRequestBuilder;
use Microsoft\Graph\Beta\Generated\RoleManagement\RoleManagementRequestBuilder;
use Microsoft\Graph\Beta\Generated\SchemaExtensions\Item\SchemaExtensionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\SchemaExtensions\SchemaExtensionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\ScopedRoleMemberships\Item\ScopedRoleMembershipItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\ScopedRoleMemberships\ScopedRoleMembershipsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Search\SearchRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\SecurityRequestBuilder;
use Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\ServicePrincipalItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\ServicePrincipals\ServicePrincipalsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Settings\Item\DirectorySettingItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Settings\SettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Shares\Item\SharedDriveItemItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Shares\SharesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Sites\Item\SiteItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Sites\SitesRequestBuilder;
use Microsoft\Graph\Beta\Generated\SubscribedSkus\Item\SubscribedSkuItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\SubscribedSkus\SubscribedSkusRequestBuilder;
use Microsoft\Graph\Beta\Generated\Subscriptions\Item\SubscriptionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Subscriptions\SubscriptionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\TeamItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\TeamsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamsTemplates\Item\TeamsTemplateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamsTemplates\TeamsTemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\TeamworkRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\TenantRelationshipsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TermStore\TermStoreRequestBuilder;
use Microsoft\Graph\Beta\Generated\TrustFramework\TrustFrameworkRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\UserItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\UsersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Workbooks\Item\DriveItemItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Workbooks\WorkbooksRequestBuilder;
use Microsoft\Kiota\Abstractions\ApiClientBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;
use Microsoft\Kiota\Serialization\Json\JsonParseNodeFactory;
use Microsoft\Kiota\Serialization\Json\JsonSerializationWriterFactory;

class BaseGraphClient 
{
    public function accessReviewDecisions(): AccessReviewDecisionsRequestBuilder {
        return new AccessReviewDecisionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function accessReviews(): AccessReviewsRequestBuilder {
        return new AccessReviewsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function activitystatistics(): ActivitystatisticsRequestBuilder {
        return new ActivitystatisticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function admin(): AdminRequestBuilder {
        return new AdminRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function administrativeUnits(): AdministrativeUnitsRequestBuilder {
        return new AdministrativeUnitsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function agreementAcceptances(): AgreementAcceptancesRequestBuilder {
        return new AgreementAcceptancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function agreements(): AgreementsRequestBuilder {
        return new AgreementsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function allowedDataLocations(): AllowedDataLocationsRequestBuilder {
        return new AllowedDataLocationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function app(): AppRequestBuilder {
        return new AppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function appCatalogs(): AppCatalogsRequestBuilder {
        return new AppCatalogsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function applications(): ApplicationsRequestBuilder {
        return new ApplicationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function applicationTemplates(): ApplicationTemplatesRequestBuilder {
        return new ApplicationTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function appRoleAssignments(): AppRoleAssignmentsRequestBuilder {
        return new AppRoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function approvalWorkflowProviders(): ApprovalWorkflowProvidersRequestBuilder {
        return new ApprovalWorkflowProvidersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function auditLogs(): AuditLogsRequestBuilder {
        return new AuditLogsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function authenticationMethodConfigurations(): AuthenticationMethodConfigurationsRequestBuilder {
        return new AuthenticationMethodConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function authenticationMethodsPolicy(): AuthenticationMethodsPolicyRequestBuilder {
        return new AuthenticationMethodsPolicyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function bookingBusinesses(): BookingBusinessesRequestBuilder {
        return new BookingBusinessesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function bookingCurrencies(): BookingCurrenciesRequestBuilder {
        return new BookingCurrenciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function branding(): BrandingRequestBuilder {
        return new BrandingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function businessFlowTemplates(): BusinessFlowTemplatesRequestBuilder {
        return new BusinessFlowTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function certificateBasedAuthConfiguration(): CertificateBasedAuthConfigurationRequestBuilder {
        return new CertificateBasedAuthConfigurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function chats(): ChatsRequestBuilder {
        return new ChatsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function commands(): CommandsRequestBuilder {
        return new CommandsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function communications(): CommunicationsRequestBuilder {
        return new CommunicationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function compliance(): ComplianceRequestBuilder {
        return new ComplianceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function connections(): ConnectionsRequestBuilder {
        return new ConnectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function contacts(): ContactsRequestBuilder {
        return new ContactsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function contracts(): ContractsRequestBuilder {
        return new ContractsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function dataClassification(): DataClassificationRequestBuilder {
        return new DataClassificationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function dataPolicyOperations(): DataPolicyOperationsRequestBuilder {
        return new DataPolicyOperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function deviceAppManagement(): DeviceAppManagementRequestBuilder {
        return new DeviceAppManagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function deviceManagement(): DeviceManagementRequestBuilder {
        return new DeviceManagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function devices(): DevicesRequestBuilder {
        return new DevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function directory(): DirectoryRequestBuilder {
        return new DirectoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function directoryObjects(): DirectoryObjectsRequestBuilder {
        return new DirectoryObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function directoryRoles(): DirectoryRolesRequestBuilder {
        return new DirectoryRolesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function directoryRoleTemplates(): DirectoryRoleTemplatesRequestBuilder {
        return new DirectoryRoleTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function directorySettingTemplates(): DirectorySettingTemplatesRequestBuilder {
        return new DirectorySettingTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function domainDnsRecords(): DomainDnsRecordsRequestBuilder {
        return new DomainDnsRecordsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function domains(): DomainsRequestBuilder {
        return new DomainsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function drive(): DriveRequestBuilder {
        return new DriveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function drives(): DrivesRequestBuilder {
        return new DrivesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function education(): EducationRequestBuilder {
        return new EducationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function escapedPrint(): PrintRequestBuilder {
        return new PrintRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function external(): ExternalRequestBuilder {
        return new ExternalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function filterOperators(): FilterOperatorsRequestBuilder {
        return new FilterOperatorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function financials(): FinancialsRequestBuilder {
        return new FinancialsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function functions(): FunctionsRequestBuilder {
        return new FunctionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function governanceResources(): GovernanceResourcesRequestBuilder {
        return new GovernanceResourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function governanceRoleAssignmentRequests(): GovernanceRoleAssignmentRequestsRequestBuilder {
        return new GovernanceRoleAssignmentRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function governanceRoleAssignments(): GovernanceRoleAssignmentsRequestBuilder {
        return new GovernanceRoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function governanceRoleDefinitions(): GovernanceRoleDefinitionsRequestBuilder {
        return new GovernanceRoleDefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function governanceRoleSettings(): GovernanceRoleSettingsRequestBuilder {
        return new GovernanceRoleSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function governanceSubjects(): GovernanceSubjectsRequestBuilder {
        return new GovernanceSubjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function groupLifecyclePolicies(): GroupLifecyclePoliciesRequestBuilder {
        return new GroupLifecyclePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function groups(): GroupsRequestBuilder {
        return new GroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function identity(): IdentityRequestBuilder {
        return new IdentityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function identityGovernance(): IdentityGovernanceRequestBuilder {
        return new IdentityGovernanceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function identityProtection(): IdentityProtectionRequestBuilder {
        return new IdentityProtectionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function identityProviders(): IdentityProvidersRequestBuilder {
        return new IdentityProvidersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function informationProtection(): InformationProtectionRequestBuilder {
        return new InformationProtectionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function invitations(): InvitationsRequestBuilder {
        return new InvitationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function me(): MeRequestBuilder {
        return new MeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function messageEvents(): MessageEventsRequestBuilder {
        return new MessageEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function messageRecipients(): MessageRecipientsRequestBuilder {
        return new MessageRecipientsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function messageTraces(): MessageTracesRequestBuilder {
        return new MessageTracesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function mobilityManagementPolicies(): MobilityManagementPoliciesRequestBuilder {
        return new MobilityManagementPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function oauth2PermissionGrants(): Oauth2PermissionGrantsRequestBuilder {
        return new Oauth2PermissionGrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function officeConfiguration(): OfficeConfigurationRequestBuilder {
        return new OfficeConfigurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function onPremisesPublishingProfiles(): OnPremisesPublishingProfilesRequestBuilder {
        return new OnPremisesPublishingProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function organization(): OrganizationRequestBuilder {
        return new OrganizationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    public function payloadResponse(): PayloadResponseRequestBuilder {
        return new PayloadResponseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function permissionGrants(): PermissionGrantsRequestBuilder {
        return new PermissionGrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function places(): PlacesRequestBuilder {
        return new PlacesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function planner(): PlannerRequestBuilder {
        return new PlannerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function policies(): PoliciesRequestBuilder {
        return new PoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function privacy(): PrivacyRequestBuilder {
        return new PrivacyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function privilegedAccess(): PrivilegedAccessRequestBuilder {
        return new PrivilegedAccessRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function privilegedApproval(): PrivilegedApprovalRequestBuilder {
        return new PrivilegedApprovalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function privilegedOperationEvents(): PrivilegedOperationEventsRequestBuilder {
        return new PrivilegedOperationEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function privilegedRoleAssignmentRequests(): PrivilegedRoleAssignmentRequestsRequestBuilder {
        return new PrivilegedRoleAssignmentRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function privilegedRoleAssignments(): PrivilegedRoleAssignmentsRequestBuilder {
        return new PrivilegedRoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function privilegedRoles(): PrivilegedRolesRequestBuilder {
        return new PrivilegedRolesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function privilegedSignupStatus(): PrivilegedSignupStatusRequestBuilder {
        return new PrivilegedSignupStatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function programControls(): ProgramControlsRequestBuilder {
        return new ProgramControlsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function programControlTypes(): ProgramControlTypesRequestBuilder {
        return new ProgramControlTypesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function programs(): ProgramsRequestBuilder {
        return new ProgramsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function reports(): ReportsRequestBuilder {
        return new ReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    public function riskDetections(): RiskDetectionsRequestBuilder {
        return new RiskDetectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function riskyUsers(): RiskyUsersRequestBuilder {
        return new RiskyUsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function roleManagement(): RoleManagementRequestBuilder {
        return new RoleManagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function schemaExtensions(): SchemaExtensionsRequestBuilder {
        return new SchemaExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function scopedRoleMemberships(): ScopedRoleMembershipsRequestBuilder {
        return new ScopedRoleMembershipsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function search(): SearchRequestBuilder {
        return new SearchRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function security(): SecurityRequestBuilder {
        return new SecurityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function servicePrincipals(): ServicePrincipalsRequestBuilder {
        return new ServicePrincipalsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function settings(): SettingsRequestBuilder {
        return new SettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function shares(): SharesRequestBuilder {
        return new SharesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function sites(): SitesRequestBuilder {
        return new SitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function subscribedSkus(): SubscribedSkusRequestBuilder {
        return new SubscribedSkusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function subscriptions(): SubscriptionsRequestBuilder {
        return new SubscriptionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function teams(): TeamsRequestBuilder {
        return new TeamsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function teamsTemplates(): TeamsTemplatesRequestBuilder {
        return new TeamsTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function teamwork(): TeamworkRequestBuilder {
        return new TeamworkRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function tenantRelationships(): TenantRelationshipsRequestBuilder {
        return new TenantRelationshipsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function termStore(): TermStoreRequestBuilder {
        return new TermStoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function trustFramework(): TrustFrameworkRequestBuilder {
        return new TrustFrameworkRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    public function users(): UsersRequestBuilder {
        return new UsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function workbooks(): WorkbooksRequestBuilder {
        return new WorkbooksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.accessReviewDecisions.item collection
     * @param string $id Unique identifier of the item
     * @return AccessReviewDecisionItemRequestBuilder
    */
    public function accessReviewDecisionsById(string $id): AccessReviewDecisionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessReviewDecision_id'] = $id;
        return new AccessReviewDecisionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.accessReviews.item collection
     * @param string $id Unique identifier of the item
     * @return AccessReviewItemRequestBuilder
    */
    public function accessReviewsById(string $id): AccessReviewItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessReview_id'] = $id;
        return new AccessReviewItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.activitystatistics.item collection
     * @param string $id Unique identifier of the item
     * @return ActivityStatisticsItemRequestBuilder
    */
    public function activitystatisticsById(string $id): ActivityStatisticsItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['activityStatistics_id'] = $id;
        return new ActivityStatisticsItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.administrativeUnits.item collection
     * @param string $id Unique identifier of the item
     * @return AdministrativeUnitItemRequestBuilder
    */
    public function administrativeUnitsById(string $id): AdministrativeUnitItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['administrativeUnit_id'] = $id;
        return new AdministrativeUnitItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.agreementAcceptances.item collection
     * @param string $id Unique identifier of the item
     * @return AgreementAcceptanceItemRequestBuilder
    */
    public function agreementAcceptancesById(string $id): AgreementAcceptanceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['agreementAcceptance_id'] = $id;
        return new AgreementAcceptanceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.agreements.item collection
     * @param string $id Unique identifier of the item
     * @return AgreementItemRequestBuilder
    */
    public function agreementsById(string $id): AgreementItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['agreement_id'] = $id;
        return new AgreementItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.allowedDataLocations.item collection
     * @param string $id Unique identifier of the item
     * @return AllowedDataLocationItemRequestBuilder
    */
    public function allowedDataLocationsById(string $id): AllowedDataLocationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['allowedDataLocation_id'] = $id;
        return new AllowedDataLocationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.applications.item collection
     * @param string $id Unique identifier of the item
     * @return ApplicationItemRequestBuilder
    */
    public function applicationsById(string $id): ApplicationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['application_id'] = $id;
        return new ApplicationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.applicationTemplates.item collection
     * @param string $id Unique identifier of the item
     * @return ApplicationTemplateItemRequestBuilder
    */
    public function applicationTemplatesById(string $id): ApplicationTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['applicationTemplate_id'] = $id;
        return new ApplicationTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.appRoleAssignments.item collection
     * @param string $id Unique identifier of the item
     * @return AppRoleAssignmentItemRequestBuilder
    */
    public function appRoleAssignmentsById(string $id): AppRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['appRoleAssignment_id'] = $id;
        return new AppRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.approvalWorkflowProviders.item collection
     * @param string $id Unique identifier of the item
     * @return ApprovalWorkflowProviderItemRequestBuilder
    */
    public function approvalWorkflowProvidersById(string $id): ApprovalWorkflowProviderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['approvalWorkflowProvider_id'] = $id;
        return new ApprovalWorkflowProviderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.authenticationMethodConfigurations.item collection
     * @param string $id Unique identifier of the item
     * @return AuthenticationMethodConfigurationItemRequestBuilder
    */
    public function authenticationMethodConfigurationsById(string $id): AuthenticationMethodConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['authenticationMethodConfiguration_id'] = $id;
        return new AuthenticationMethodConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.bookingBusinesses.item collection
     * @param string $id Unique identifier of the item
     * @return BookingBusinessItemRequestBuilder
    */
    public function bookingBusinessesById(string $id): BookingBusinessItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingBusiness_id'] = $id;
        return new BookingBusinessItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.bookingCurrencies.item collection
     * @param string $id Unique identifier of the item
     * @return BookingCurrencyItemRequestBuilder
    */
    public function bookingCurrenciesById(string $id): BookingCurrencyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['bookingCurrency_id'] = $id;
        return new BookingCurrencyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.businessFlowTemplates.item collection
     * @param string $id Unique identifier of the item
     * @return BusinessFlowTemplateItemRequestBuilder
    */
    public function businessFlowTemplatesById(string $id): BusinessFlowTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['businessFlowTemplate_id'] = $id;
        return new BusinessFlowTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.certificateBasedAuthConfiguration.item collection
     * @param string $id Unique identifier of the item
     * @return CertificateBasedAuthConfigurationItemRequestBuilder
    */
    public function certificateBasedAuthConfigurationById(string $id): CertificateBasedAuthConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['certificateBasedAuthConfiguration_id'] = $id;
        return new CertificateBasedAuthConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.chats.item collection
     * @param string $id Unique identifier of the item
     * @return ChatItemRequestBuilder
    */
    public function chatsById(string $id): ChatItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['chat_id'] = $id;
        return new ChatItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.commands.item collection
     * @param string $id Unique identifier of the item
     * @return CommandItemRequestBuilder
    */
    public function commandsById(string $id): CommandItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['command_id'] = $id;
        return new CommandItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.connections.item collection
     * @param string $id Unique identifier of the item
     * @return ExternalConnectionItemRequestBuilder
    */
    public function connectionsById(string $id): ExternalConnectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['externalConnection_id'] = $id;
        return new ExternalConnectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new BaseGraphClient and sets the default values.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(RequestAdapter $requestAdapter) {
        $this->pathParameters = [];
        $this->urlTemplate = '{+baseurl}';
        $this->requestAdapter = $requestAdapter;
        ApiClientBuilder::registerDefaultSerializer(JsonSerializationWriterFactory::class);
        ApiClientBuilder::registerDefaultDeserializer(JsonParseNodeFactory::class);
        $this->requestAdapter->setBaseUrl('https://graph.microsoft.com/beta');
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.contacts.item collection
     * @param string $id Unique identifier of the item
     * @return OrgContactItemRequestBuilder
    */
    public function contactsById(string $id): OrgContactItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['orgContact_id'] = $id;
        return new OrgContactItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.contracts.item collection
     * @param string $id Unique identifier of the item
     * @return ContractItemRequestBuilder
    */
    public function contractsById(string $id): ContractItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contract_id'] = $id;
        return new ContractItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.dataPolicyOperations.item collection
     * @param string $id Unique identifier of the item
     * @return DataPolicyOperationItemRequestBuilder
    */
    public function dataPolicyOperationsById(string $id): DataPolicyOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['dataPolicyOperation_id'] = $id;
        return new DataPolicyOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.devices.item collection
     * @param string $id Unique identifier of the item
     * @return DeviceItemRequestBuilder
    */
    public function devicesById(string $id): DeviceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['device_id'] = $id;
        return new DeviceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.directoryObjects.item collection
     * @param string $id Unique identifier of the item
     * @return DirectoryObjectItemRequestBuilder
    */
    public function directoryObjectsById(string $id): DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.directoryRoles.item collection
     * @param string $id Unique identifier of the item
     * @return DirectoryRoleItemRequestBuilder
    */
    public function directoryRolesById(string $id): DirectoryRoleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryRole_id'] = $id;
        return new DirectoryRoleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.directoryRoleTemplates.item collection
     * @param string $id Unique identifier of the item
     * @return DirectoryRoleTemplateItemRequestBuilder
    */
    public function directoryRoleTemplatesById(string $id): DirectoryRoleTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryRoleTemplate_id'] = $id;
        return new DirectoryRoleTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.directorySettingTemplates.item collection
     * @param string $id Unique identifier of the item
     * @return DirectorySettingTemplateItemRequestBuilder
    */
    public function directorySettingTemplatesById(string $id): DirectorySettingTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directorySettingTemplate_id'] = $id;
        return new DirectorySettingTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.domainDnsRecords.item collection
     * @param string $id Unique identifier of the item
     * @return DomainDnsRecordItemRequestBuilder
    */
    public function domainDnsRecordsById(string $id): DomainDnsRecordItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['domainDnsRecord_id'] = $id;
        return new DomainDnsRecordItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.domains.item collection
     * @param string $id Unique identifier of the item
     * @return DomainItemRequestBuilder
    */
    public function domainsById(string $id): DomainItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['domain_id'] = $id;
        return new DomainItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.drives.item collection
     * @param string $id Unique identifier of the item
     * @return DriveItemRequestBuilder
    */
    public function drivesById(string $id): DriveItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['drive_id'] = $id;
        return new DriveItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.filterOperators.item collection
     * @param string $id Unique identifier of the item
     * @return FilterOperatorSchemaItemRequestBuilder
    */
    public function filterOperatorsById(string $id): FilterOperatorSchemaItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['filterOperatorSchema_id'] = $id;
        return new FilterOperatorSchemaItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.functions.item collection
     * @param string $id Unique identifier of the item
     * @return AttributeMappingFunctionSchemaItemRequestBuilder
    */
    public function functionsById(string $id): AttributeMappingFunctionSchemaItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['attributeMappingFunctionSchema_id'] = $id;
        return new AttributeMappingFunctionSchemaItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.governanceResources.item collection
     * @param string $id Unique identifier of the item
     * @return GovernanceResourceItemRequestBuilder
    */
    public function governanceResourcesById(string $id): GovernanceResourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governanceResource_id'] = $id;
        return new GovernanceResourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.governanceRoleAssignmentRequests.item collection
     * @param string $id Unique identifier of the item
     * @return GovernanceRoleAssignmentRequestItemRequestBuilder
    */
    public function governanceRoleAssignmentRequestsById(string $id): GovernanceRoleAssignmentRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governanceRoleAssignmentRequest_id'] = $id;
        return new GovernanceRoleAssignmentRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.governanceRoleAssignments.item collection
     * @param string $id Unique identifier of the item
     * @return GovernanceRoleAssignmentItemRequestBuilder
    */
    public function governanceRoleAssignmentsById(string $id): GovernanceRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governanceRoleAssignment_id'] = $id;
        return new GovernanceRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.governanceRoleDefinitions.item collection
     * @param string $id Unique identifier of the item
     * @return GovernanceRoleDefinitionItemRequestBuilder
    */
    public function governanceRoleDefinitionsById(string $id): GovernanceRoleDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governanceRoleDefinition_id'] = $id;
        return new GovernanceRoleDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.governanceRoleSettings.item collection
     * @param string $id Unique identifier of the item
     * @return GovernanceRoleSettingItemRequestBuilder
    */
    public function governanceRoleSettingsById(string $id): GovernanceRoleSettingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governanceRoleSetting_id'] = $id;
        return new GovernanceRoleSettingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.governanceSubjects.item collection
     * @param string $id Unique identifier of the item
     * @return GovernanceSubjectItemRequestBuilder
    */
    public function governanceSubjectsById(string $id): GovernanceSubjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['governanceSubject_id'] = $id;
        return new GovernanceSubjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groupLifecyclePolicies.item collection
     * @param string $id Unique identifier of the item
     * @return GroupLifecyclePolicyItemRequestBuilder
    */
    public function groupLifecyclePoliciesById(string $id): GroupLifecyclePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['groupLifecyclePolicy_id'] = $id;
        return new GroupLifecyclePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item collection
     * @param string $id Unique identifier of the item
     * @return GroupItemRequestBuilder
    */
    public function groupsById(string $id): GroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['group_id'] = $id;
        return new GroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.identityProviders.item collection
     * @param string $id Unique identifier of the item
     * @return IdentityProviderItemRequestBuilder
    */
    public function identityProvidersById(string $id): IdentityProviderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['identityProvider_id'] = $id;
        return new IdentityProviderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.invitations.item collection
     * @param string $id Unique identifier of the item
     * @return InvitationItemRequestBuilder
    */
    public function invitationsById(string $id): InvitationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['invitation_id'] = $id;
        return new InvitationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.messageEvents.item collection
     * @param string $id Unique identifier of the item
     * @return MessageEventItemRequestBuilder
    */
    public function messageEventsById(string $id): MessageEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['messageEvent_id'] = $id;
        return new MessageEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.messageRecipients.item collection
     * @param string $id Unique identifier of the item
     * @return MessageRecipientItemRequestBuilder
    */
    public function messageRecipientsById(string $id): MessageRecipientItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['messageRecipient_id'] = $id;
        return new MessageRecipientItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.messageTraces.item collection
     * @param string $id Unique identifier of the item
     * @return MessageTraceItemRequestBuilder
    */
    public function messageTracesById(string $id): MessageTraceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['messageTrace_id'] = $id;
        return new MessageTraceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.mobilityManagementPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return MobilityManagementPolicyItemRequestBuilder
    */
    public function mobilityManagementPoliciesById(string $id): MobilityManagementPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobilityManagementPolicy_id'] = $id;
        return new MobilityManagementPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.oauth2PermissionGrants.item collection
     * @param string $id Unique identifier of the item
     * @return OAuth2PermissionGrantItemRequestBuilder
    */
    public function oauth2PermissionGrantsById(string $id): OAuth2PermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['oAuth2PermissionGrant_id'] = $id;
        return new OAuth2PermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.onPremisesPublishingProfiles.item collection
     * @param string $id Unique identifier of the item
     * @return OnPremisesPublishingProfileItemRequestBuilder
    */
    public function onPremisesPublishingProfilesById(string $id): OnPremisesPublishingProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onPremisesPublishingProfile_id'] = $id;
        return new OnPremisesPublishingProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.organization.item collection
     * @param string $id Unique identifier of the item
     * @return OrganizationItemRequestBuilder
    */
    public function organizationById(string $id): OrganizationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['organization_id'] = $id;
        return new OrganizationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.payloadResponse.item collection
     * @param string $id Unique identifier of the item
     * @return PayloadResponseItemRequestBuilder
    */
    public function payloadResponseById(string $id): PayloadResponseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['payloadResponse_id'] = $id;
        return new PayloadResponseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.permissionGrants.item collection
     * @param string $id Unique identifier of the item
     * @return ResourceSpecificPermissionGrantItemRequestBuilder
    */
    public function permissionGrantsById(string $id): ResourceSpecificPermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['resourceSpecificPermissionGrant_id'] = $id;
        return new ResourceSpecificPermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.places.item collection
     * @param string $id Unique identifier of the item
     * @return PlaceItemRequestBuilder
    */
    public function placesById(string $id): PlaceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['place_id'] = $id;
        return new PlaceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.privilegedAccess.item collection
     * @param string $id Unique identifier of the item
     * @return PrivilegedAccessItemRequestBuilder
    */
    public function privilegedAccessById(string $id): PrivilegedAccessItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['privilegedAccess_id'] = $id;
        return new PrivilegedAccessItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.privilegedApproval.item collection
     * @param string $id Unique identifier of the item
     * @return PrivilegedApprovalItemRequestBuilder
    */
    public function privilegedApprovalById(string $id): PrivilegedApprovalItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['privilegedApproval_id'] = $id;
        return new PrivilegedApprovalItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.privilegedOperationEvents.item collection
     * @param string $id Unique identifier of the item
     * @return PrivilegedOperationEventItemRequestBuilder
    */
    public function privilegedOperationEventsById(string $id): PrivilegedOperationEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['privilegedOperationEvent_id'] = $id;
        return new PrivilegedOperationEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.privilegedRoleAssignmentRequests.item collection
     * @param string $id Unique identifier of the item
     * @return PrivilegedRoleAssignmentRequestItemRequestBuilder
    */
    public function privilegedRoleAssignmentRequestsById(string $id): PrivilegedRoleAssignmentRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['privilegedRoleAssignmentRequest_id'] = $id;
        return new PrivilegedRoleAssignmentRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.privilegedRoleAssignments.item collection
     * @param string $id Unique identifier of the item
     * @return PrivilegedRoleAssignmentItemRequestBuilder
    */
    public function privilegedRoleAssignmentsById(string $id): PrivilegedRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['privilegedRoleAssignment_id'] = $id;
        return new PrivilegedRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.privilegedRoles.item collection
     * @param string $id Unique identifier of the item
     * @return PrivilegedRoleItemRequestBuilder
    */
    public function privilegedRolesById(string $id): PrivilegedRoleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['privilegedRole_id'] = $id;
        return new PrivilegedRoleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.privilegedSignupStatus.item collection
     * @param string $id Unique identifier of the item
     * @return PrivilegedSignupStatusItemRequestBuilder
    */
    public function privilegedSignupStatusById(string $id): PrivilegedSignupStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['privilegedSignupStatus_id'] = $id;
        return new PrivilegedSignupStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.programControls.item collection
     * @param string $id Unique identifier of the item
     * @return ProgramControlItemRequestBuilder
    */
    public function programControlsById(string $id): ProgramControlItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['programControl_id'] = $id;
        return new ProgramControlItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.programControlTypes.item collection
     * @param string $id Unique identifier of the item
     * @return ProgramControlTypeItemRequestBuilder
    */
    public function programControlTypesById(string $id): ProgramControlTypeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['programControlType_id'] = $id;
        return new ProgramControlTypeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.programs.item collection
     * @param string $id Unique identifier of the item
     * @return ProgramItemRequestBuilder
    */
    public function programsById(string $id): ProgramItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['program_id'] = $id;
        return new ProgramItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.riskDetections.item collection
     * @param string $id Unique identifier of the item
     * @return RiskDetectionItemRequestBuilder
    */
    public function riskDetectionsById(string $id): RiskDetectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['riskDetection_id'] = $id;
        return new RiskDetectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.riskyUsers.item collection
     * @param string $id Unique identifier of the item
     * @return RiskyUserItemRequestBuilder
    */
    public function riskyUsersById(string $id): RiskyUserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['riskyUser_id'] = $id;
        return new RiskyUserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.schemaExtensions.item collection
     * @param string $id Unique identifier of the item
     * @return SchemaExtensionItemRequestBuilder
    */
    public function schemaExtensionsById(string $id): SchemaExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['schemaExtension_id'] = $id;
        return new SchemaExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.scopedRoleMemberships.item collection
     * @param string $id Unique identifier of the item
     * @return ScopedRoleMembershipItemRequestBuilder
    */
    public function scopedRoleMembershipsById(string $id): ScopedRoleMembershipItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['scopedRoleMembership_id'] = $id;
        return new ScopedRoleMembershipItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.servicePrincipals.item collection
     * @param string $id Unique identifier of the item
     * @return ServicePrincipalItemRequestBuilder
    */
    public function servicePrincipalsById(string $id): ServicePrincipalItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['servicePrincipal_id'] = $id;
        return new ServicePrincipalItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.settings.item collection
     * @param string $id Unique identifier of the item
     * @return DirectorySettingItemRequestBuilder
    */
    public function settingsById(string $id): DirectorySettingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directorySetting_id'] = $id;
        return new DirectorySettingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.shares.item collection
     * @param string $id Unique identifier of the item
     * @return SharedDriveItemItemRequestBuilder
    */
    public function sharesById(string $id): SharedDriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sharedDriveItem_id'] = $id;
        return new SharedDriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.sites.item collection
     * @param string $id Unique identifier of the item
     * @return SiteItemRequestBuilder
    */
    public function sitesById(string $id): SiteItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['site_id'] = $id;
        return new SiteItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.subscribedSkus.item collection
     * @param string $id Unique identifier of the item
     * @return SubscribedSkuItemRequestBuilder
    */
    public function subscribedSkusById(string $id): SubscribedSkuItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['subscribedSku_id'] = $id;
        return new SubscribedSkuItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.subscriptions.item collection
     * @param string $id Unique identifier of the item
     * @return SubscriptionItemRequestBuilder
    */
    public function subscriptionsById(string $id): SubscriptionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['subscription_id'] = $id;
        return new SubscriptionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.teams.item collection
     * @param string $id Unique identifier of the item
     * @return TeamItemRequestBuilder
    */
    public function teamsById(string $id): TeamItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['team_id'] = $id;
        return new TeamItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.teamsTemplates.item collection
     * @param string $id Unique identifier of the item
     * @return TeamsTemplateItemRequestBuilder
    */
    public function teamsTemplatesById(string $id): TeamsTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamsTemplate_id'] = $id;
        return new TeamsTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item collection
     * @param string $id Unique identifier of the item
     * @return UserItemRequestBuilder
    */
    public function usersById(string $id): UserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['user_id'] = $id;
        return new UserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.workbooks.item collection
     * @param string $id Unique identifier of the item
     * @return DriveItemItemRequestBuilder
    */
    public function workbooksById(string $id): DriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem_id'] = $id;
        return new DriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
