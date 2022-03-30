<?php

namespace Microsoft\Graph\Beta\Generated\Me\MailFolders\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\ChildFoldersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\Copy\CopyRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\MessageRules\Item\MessageRuleItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\MessageRules\MessageRulesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\Messages\Item\MessageItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\Messages\MessagesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\Move\MoveRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\MultiValueExtendedProperties\Item\MultiValueLegacyExtendedPropertyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\MultiValueExtendedProperties\MultiValueExtendedPropertiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\SingleValueExtendedProperties\Item\SingleValueLegacyExtendedPropertyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\SingleValueExtendedProperties\SingleValueExtendedPropertiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\UserConfigurations\Item\UserConfigurationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\UserConfigurations\UserConfigurationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\MailFolder;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class MailFolderItemRequestBuilder 
{
    public function childFolders(): ChildFoldersRequestBuilder {
        return new ChildFoldersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function copy(): CopyRequestBuilder {
        return new CopyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function messageRules(): MessageRulesRequestBuilder {
        return new MessageRulesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function messages(): MessagesRequestBuilder {
        return new MessagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function move(): MoveRequestBuilder {
        return new MoveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function multiValueExtendedProperties(): MultiValueExtendedPropertiesRequestBuilder {
        return new MultiValueExtendedPropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    public function singleValueExtendedProperties(): SingleValueExtendedPropertiesRequestBuilder {
        return new SingleValueExtendedPropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    public function userConfigurations(): UserConfigurationsRequestBuilder {
        return new UserConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.mailFolders.item.childFolders.item collection
     * @param string $id Unique identifier of the item
     * @return MailFolderItemRequestBuilder
    */
    public function childFoldersById(string $id): MailFolderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mailFolder_id1'] = $id;
        return new MailFolderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MailFolderItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/me/mailFolders/{mailFolder_id}{?select}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property mailFolders for me
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
     * The user's mail folders. Read-only. Nullable.
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
     * Update the navigation property mailFolders in me
     * @param MailFolder $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(MailFolder $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete navigation property mailFolders for me
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
     * The user's mail folders. Read-only. Nullable.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, MailFolder::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.mailFolders.item.messageRules.item collection
     * @param string $id Unique identifier of the item
     * @return MessageRuleItemRequestBuilder
    */
    public function messageRulesById(string $id): MessageRuleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['messageRule_id'] = $id;
        return new MessageRuleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.mailFolders.item.messages.item collection
     * @param string $id Unique identifier of the item
     * @return MessageItemRequestBuilder
    */
    public function messagesById(string $id): MessageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['message_id'] = $id;
        return new MessageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.mailFolders.item.multiValueExtendedProperties.item collection
     * @param string $id Unique identifier of the item
     * @return MultiValueLegacyExtendedPropertyItemRequestBuilder
    */
    public function multiValueExtendedPropertiesById(string $id): MultiValueLegacyExtendedPropertyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['multiValueLegacyExtendedProperty_id'] = $id;
        return new MultiValueLegacyExtendedPropertyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property mailFolders in me
     * @param MailFolder $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(MailFolder $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.mailFolders.item.singleValueExtendedProperties.item collection
     * @param string $id Unique identifier of the item
     * @return SingleValueLegacyExtendedPropertyItemRequestBuilder
    */
    public function singleValueExtendedPropertiesById(string $id): SingleValueLegacyExtendedPropertyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['singleValueLegacyExtendedProperty_id'] = $id;
        return new SingleValueLegacyExtendedPropertyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.mailFolders.item.userConfigurations.item collection
     * @param string $id Unique identifier of the item
     * @return UserConfigurationItemRequestBuilder
    */
    public function userConfigurationsById(string $id): UserConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userConfiguration_id'] = $id;
        return new UserConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
