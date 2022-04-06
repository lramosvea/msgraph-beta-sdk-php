<?php

namespace Microsoft\Graph\Beta\Generated\Teams\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Team;
use Microsoft\Graph\Beta\Generated\Teams\Item\AllChannels\AllChannelsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\AllChannels\Item\ChannelItemRequestBuilder as MicrosoftGraphBetaGeneratedTeamsItemAllChannelsItemChannelItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\Archive\ArchiveRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\Channels\ChannelsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\Channels\Item\ChannelItemRequestBuilder as MicrosoftGraphBetaGeneratedTeamsItemChannelsItemChannelItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\CompleteMigration\CompleteMigrationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\EscapedClone\CloneRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\Group\GroupRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\IncomingChannels\IncomingChannelsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\IncomingChannels\Item\ChannelItemRequestBuilder as MicrosoftGraphBetaGeneratedTeamsItemIncomingChannelsItemChannelItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\InstalledApps\InstalledAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\InstalledApps\Item\TeamsAppInstallationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\Members\Item\ConversationMemberItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\Members\MembersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\Operations\Item\TeamsAsyncOperationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\Owners\Item\UserItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\Owners\OwnersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\PermissionGrants\Item\ResourceSpecificPermissionGrantItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\PermissionGrants\PermissionGrantsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\Photo\PhotoRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\PrimaryChannel\PrimaryChannelRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\Schedule\ScheduleRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\SendActivityNotification\SendActivityNotificationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\Tags\Item\TeamworkTagItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\Tags\TagsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\Template\TemplateRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teams\Item\Unarchive\UnarchiveRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class TeamItemRequestBuilder 
{
    /**
     * The allChannels property
    */
    public function allChannels(): AllChannelsRequestBuilder {
        return new AllChannelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The archive property
    */
    public function archive(): ArchiveRequestBuilder {
        return new ArchiveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The channels property
    */
    public function channels(): ChannelsRequestBuilder {
        return new ChannelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The completeMigration property
    */
    public function completeMigration(): CompleteMigrationRequestBuilder {
        return new CompleteMigrationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The clone property
    */
    public function escapedClone(): CloneRequestBuilder {
        return new CloneRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The group property
    */
    public function group(): GroupRequestBuilder {
        return new GroupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The incomingChannels property
    */
    public function incomingChannels(): IncomingChannelsRequestBuilder {
        return new IncomingChannelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The installedApps property
    */
    public function installedApps(): InstalledAppsRequestBuilder {
        return new InstalledAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The members property
    */
    public function members(): MembersRequestBuilder {
        return new MembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The operations property
    */
    public function operations(): OperationsRequestBuilder {
        return new OperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The owners property
    */
    public function owners(): OwnersRequestBuilder {
        return new OwnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /**
     * The permissionGrants property
    */
    public function permissionGrants(): PermissionGrantsRequestBuilder {
        return new PermissionGrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The photo property
    */
    public function photo(): PhotoRequestBuilder {
        return new PhotoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The primaryChannel property
    */
    public function primaryChannel(): PrimaryChannelRequestBuilder {
        return new PrimaryChannelRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The schedule property
    */
    public function schedule(): ScheduleRequestBuilder {
        return new ScheduleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The sendActivityNotification property
    */
    public function sendActivityNotification(): SendActivityNotificationRequestBuilder {
        return new SendActivityNotificationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The tags property
    */
    public function tags(): TagsRequestBuilder {
        return new TagsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The template property
    */
    public function template(): TemplateRequestBuilder {
        return new TemplateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The unarchive property
    */
    public function unarchive(): UnarchiveRequestBuilder {
        return new UnarchiveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.teams.item.allChannels.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedTeamsItemAllChannelsItemChannelItemRequestBuilder
    */
    public function allChannelsById(string $id): MicrosoftGraphBetaGeneratedTeamsItemAllChannelsItemChannelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['channel_id'] = $id;
        return new MicrosoftGraphBetaGeneratedTeamsItemAllChannelsItemChannelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.teams.item.channels.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedTeamsItemChannelsItemChannelItemRequestBuilder
    */
    public function channelsById(string $id): MicrosoftGraphBetaGeneratedTeamsItemChannelsItemChannelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['channel_id'] = $id;
        return new MicrosoftGraphBetaGeneratedTeamsItemChannelsItemChannelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TeamItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/teams/{team_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete entity from teams
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Get entity from teams by key
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update entity in teams
     * @param Team $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Team $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Delete entity from teams
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get entity from teams by key
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, Team::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.teams.item.incomingChannels.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedTeamsItemIncomingChannelsItemChannelItemRequestBuilder
    */
    public function incomingChannelsById(string $id): MicrosoftGraphBetaGeneratedTeamsItemIncomingChannelsItemChannelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['channel_id'] = $id;
        return new MicrosoftGraphBetaGeneratedTeamsItemIncomingChannelsItemChannelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.teams.item.installedApps.item collection
     * @param string $id Unique identifier of the item
     * @return TeamsAppInstallationItemRequestBuilder
    */
    public function installedAppsById(string $id): TeamsAppInstallationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamsAppInstallation_id'] = $id;
        return new TeamsAppInstallationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.teams.item.members.item collection
     * @param string $id Unique identifier of the item
     * @return ConversationMemberItemRequestBuilder
    */
    public function membersById(string $id): ConversationMemberItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['conversationMember_id'] = $id;
        return new ConversationMemberItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.teams.item.operations.item collection
     * @param string $id Unique identifier of the item
     * @return TeamsAsyncOperationItemRequestBuilder
    */
    public function operationsById(string $id): TeamsAsyncOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamsAsyncOperation_id'] = $id;
        return new TeamsAsyncOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.teams.item.owners.item collection
     * @param string $id Unique identifier of the item
     * @return UserItemRequestBuilder
    */
    public function ownersById(string $id): UserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['user_id'] = $id;
        return new UserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update entity in teams
     * @param Team $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Team $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.teams.item.permissionGrants.item collection
     * @param string $id Unique identifier of the item
     * @return ResourceSpecificPermissionGrantItemRequestBuilder
    */
    public function permissionGrantsById(string $id): ResourceSpecificPermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['resourceSpecificPermissionGrant_id'] = $id;
        return new ResourceSpecificPermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.teams.item.tags.item collection
     * @param string $id Unique identifier of the item
     * @return TeamworkTagItemRequestBuilder
    */
    public function tagsById(string $id): TeamworkTagItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamworkTag_id'] = $id;
        return new TeamworkTagItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
