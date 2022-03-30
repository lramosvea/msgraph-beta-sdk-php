<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item\Team\Channels\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Groups\Item\Team\Channels\Item\CompleteMigration\CompleteMigrationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Team\Channels\Item\DoesUserHaveAccessWithUserIdWithTenantIdWithUserPrincipalName\DoesUserHaveAccessWithUserIdWithTenantIdWithUserPrincipalNameRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Team\Channels\Item\FilesFolder\FilesFolderRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Team\Channels\Item\Members\Item\ConversationMemberItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Team\Channels\Item\Members\MembersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Team\Channels\Item\Messages\Item\ChatMessageItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Team\Channels\Item\Messages\MessagesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Team\Channels\Item\ProvisionEmail\ProvisionEmailRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Team\Channels\Item\RemoveEmail\RemoveEmailRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Team\Channels\Item\SharedWithTeams\Item\SharedWithChannelTeamInfoItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Team\Channels\Item\SharedWithTeams\SharedWithTeamsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Team\Channels\Item\Tabs\Item\TeamsTabItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Team\Channels\Item\Tabs\TabsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Channel;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class ChannelItemRequestBuilder 
{
    public function completeMigration(): CompleteMigrationRequestBuilder {
        return new CompleteMigrationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function filesFolder(): FilesFolderRequestBuilder {
        return new FilesFolderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function members(): MembersRequestBuilder {
        return new MembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function messages(): MessagesRequestBuilder {
        return new MessagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    public function provisionEmail(): ProvisionEmailRequestBuilder {
        return new ProvisionEmailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function removeEmail(): RemoveEmailRequestBuilder {
        return new RemoveEmailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    public function sharedWithTeams(): SharedWithTeamsRequestBuilder {
        return new SharedWithTeamsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function tabs(): TabsRequestBuilder {
        return new TabsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new ChannelItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/groups/{group_id}/team/channels/{channel_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property channels for groups
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
     * The collection of channels and messages associated with the team.
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
     * Update the navigation property channels in groups
     * @param Channel $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Channel $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete navigation property channels for groups
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
     * Provides operations to call the doesUserHaveAccess method.
     * @param string $tenantId Usage: tenantId='{tenantId}'
     * @param string $userId Usage: userId='{userId}'
     * @param string $userPrincipalName Usage: userPrincipalName='{userPrincipalName}'
     * @return DoesUserHaveAccessWithUserIdWithTenantIdWithUserPrincipalNameRequestBuilder
    */
    public function doesUserHaveAccessWithUserIdWithTenantIdWithUserPrincipalName(string $tenantId, string $userId, string $userPrincipalName): DoesUserHaveAccessWithUserIdWithTenantIdWithUserPrincipalNameRequestBuilder {
        return new DoesUserHaveAccessWithUserIdWithTenantIdWithUserPrincipalNameRequestBuilder($this->pathParameters, $this->requestAdapter, $tenantId, $userId, $userPrincipalName);
    }

    /**
     * The collection of channels and messages associated with the team.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, Channel::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.team.channels.item.members.item collection
     * @param string $id Unique identifier of the item
     * @return ConversationMemberItemRequestBuilder
    */
    public function membersById(string $id): ConversationMemberItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['conversationMember_id'] = $id;
        return new ConversationMemberItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.team.channels.item.messages.item collection
     * @param string $id Unique identifier of the item
     * @return ChatMessageItemRequestBuilder
    */
    public function messagesById(string $id): ChatMessageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['chatMessage_id'] = $id;
        return new ChatMessageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property channels in groups
     * @param Channel $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Channel $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.team.channels.item.sharedWithTeams.item collection
     * @param string $id Unique identifier of the item
     * @return SharedWithChannelTeamInfoItemRequestBuilder
    */
    public function sharedWithTeamsById(string $id): SharedWithChannelTeamInfoItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sharedWithChannelTeamInfo_id'] = $id;
        return new SharedWithChannelTeamInfoItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.team.channels.item.tabs.item collection
     * @param string $id Unique identifier of the item
     * @return TeamsTabItemRequestBuilder
    */
    public function tabsById(string $id): TeamsTabItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamsTab_id'] = $id;
        return new TeamsTabItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
