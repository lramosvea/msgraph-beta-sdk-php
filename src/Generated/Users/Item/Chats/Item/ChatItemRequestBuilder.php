<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Chats\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\Chat;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Users\Item\Chats\Item\HideForUser\HideForUserRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Chats\Item\InstalledApps\InstalledAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Chats\Item\InstalledApps\Item\TeamsAppInstallationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Chats\Item\LastMessagePreview\LastMessagePreviewRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Chats\Item\MarkChatReadForUser\MarkChatReadForUserRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Chats\Item\MarkChatUnreadForUser\MarkChatUnreadForUserRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Chats\Item\Members\Item\ConversationMemberItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Chats\Item\Members\MembersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Chats\Item\Messages\Item\ChatMessageItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Chats\Item\Messages\MessagesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Chats\Item\Operations\Item\TeamsAsyncOperationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Chats\Item\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Chats\Item\PermissionGrants\Item\ResourceSpecificPermissionGrantItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Chats\Item\PermissionGrants\PermissionGrantsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Chats\Item\PinnedMessages\Item\PinnedChatMessageInfoItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Chats\Item\PinnedMessages\PinnedMessagesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Chats\Item\SendActivityNotification\SendActivityNotificationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Chats\Item\Tabs\Item\TeamsTabItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Chats\Item\Tabs\TabsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Chats\Item\UnhideForUser\UnhideForUserRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class ChatItemRequestBuilder 
{
    /**
     * The hideForUser property
    */
    public function hideForUser(): HideForUserRequestBuilder {
        return new HideForUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The installedApps property
    */
    public function installedApps(): InstalledAppsRequestBuilder {
        return new InstalledAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The lastMessagePreview property
    */
    public function lastMessagePreview(): LastMessagePreviewRequestBuilder {
        return new LastMessagePreviewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The markChatReadForUser property
    */
    public function markChatReadForUser(): MarkChatReadForUserRequestBuilder {
        return new MarkChatReadForUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The markChatUnreadForUser property
    */
    public function markChatUnreadForUser(): MarkChatUnreadForUserRequestBuilder {
        return new MarkChatUnreadForUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The members property
    */
    public function members(): MembersRequestBuilder {
        return new MembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The messages property
    */
    public function messages(): MessagesRequestBuilder {
        return new MessagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The operations property
    */
    public function operations(): OperationsRequestBuilder {
        return new OperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The permissionGrants property
    */
    public function permissionGrants(): PermissionGrantsRequestBuilder {
        return new PermissionGrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The pinnedMessages property
    */
    public function pinnedMessages(): PinnedMessagesRequestBuilder {
        return new PinnedMessagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The sendActivityNotification property
    */
    public function sendActivityNotification(): SendActivityNotificationRequestBuilder {
        return new SendActivityNotificationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The tabs property
    */
    public function tabs(): TabsRequestBuilder {
        return new TabsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The unhideForUser property
    */
    public function unhideForUser(): UnhideForUserRequestBuilder {
        return new UnhideForUserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new ChatItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/users/{user%2Did}/chats/{chat%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property chats for users
     * @param ChatItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?ChatItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Get chats from users
     * @param ChatItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?ChatItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property chats in users
     * @param Chat $body 
     * @param ChatItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Chat $body, ?ChatItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Delete navigation property chats for users
     * @param ChatItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?ChatItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get chats from users
     * @param ChatItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?ChatItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(Chat::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.chats.item.installedApps.item collection
     * @param string $id Unique identifier of the item
     * @return TeamsAppInstallationItemRequestBuilder
    */
    public function installedAppsById(string $id): TeamsAppInstallationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamsAppInstallation%2Did'] = $id;
        return new TeamsAppInstallationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.chats.item.members.item collection
     * @param string $id Unique identifier of the item
     * @return ConversationMemberItemRequestBuilder
    */
    public function membersById(string $id): ConversationMemberItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['conversationMember%2Did'] = $id;
        return new ConversationMemberItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.chats.item.messages.item collection
     * @param string $id Unique identifier of the item
     * @return ChatMessageItemRequestBuilder
    */
    public function messagesById(string $id): ChatMessageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['chatMessage%2Did'] = $id;
        return new ChatMessageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.chats.item.operations.item collection
     * @param string $id Unique identifier of the item
     * @return TeamsAsyncOperationItemRequestBuilder
    */
    public function operationsById(string $id): TeamsAsyncOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamsAsyncOperation%2Did'] = $id;
        return new TeamsAsyncOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property chats in users
     * @param Chat $body 
     * @param ChatItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Chat $body, ?ChatItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(Chat::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.chats.item.permissionGrants.item collection
     * @param string $id Unique identifier of the item
     * @return ResourceSpecificPermissionGrantItemRequestBuilder
    */
    public function permissionGrantsById(string $id): ResourceSpecificPermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['resourceSpecificPermissionGrant%2Did'] = $id;
        return new ResourceSpecificPermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.chats.item.pinnedMessages.item collection
     * @param string $id Unique identifier of the item
     * @return PinnedChatMessageInfoItemRequestBuilder
    */
    public function pinnedMessagesById(string $id): PinnedChatMessageInfoItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['pinnedChatMessageInfo%2Did'] = $id;
        return new PinnedChatMessageInfoItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.chats.item.tabs.item collection
     * @param string $id Unique identifier of the item
     * @return TeamsTabItemRequestBuilder
    */
    public function tabsById(string $id): TeamsTabItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamsTab%2Did'] = $id;
        return new TeamsTabItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
