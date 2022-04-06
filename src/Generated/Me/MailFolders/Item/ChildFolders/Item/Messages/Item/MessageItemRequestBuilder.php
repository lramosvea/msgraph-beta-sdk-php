<?php

namespace Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\Attachments\AttachmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\Attachments\Item\AttachmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\CalendarSharingMessage\CalendarSharingMessageRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\Copy\CopyRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\CreateForward\CreateForwardRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\CreateReply\CreateReplyRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\CreateReplyAll\CreateReplyAllRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\EventMessageRequest\EventMessageRequestRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\Extensions\ExtensionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\Extensions\Item\ExtensionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\Forward\ForwardRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\Mentions\Item\MentionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\Mentions\MentionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\Move\MoveRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\MultiValueExtendedProperties\Item\MultiValueLegacyExtendedPropertyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\MultiValueExtendedProperties\MultiValueExtendedPropertiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\Reply\ReplyRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\ReplyAll\ReplyAllRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\Send\SendRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\SingleValueExtendedProperties\Item\SingleValueLegacyExtendedPropertyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\SingleValueExtendedProperties\SingleValueExtendedPropertiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\Unsubscribe\UnsubscribeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\Value\ContentRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Message;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class MessageItemRequestBuilder 
{
    /**
     * The attachments property
    */
    public function attachments(): AttachmentsRequestBuilder {
        return new AttachmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The calendarSharingMessage property
    */
    public function calendarSharingMessage(): CalendarSharingMessageRequestBuilder {
        return new CalendarSharingMessageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The Content property
    */
    public function content(): ContentRequestBuilder {
        return new ContentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The copy property
    */
    public function copy(): CopyRequestBuilder {
        return new CopyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The createForward property
    */
    public function createForward(): CreateForwardRequestBuilder {
        return new CreateForwardRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The createReply property
    */
    public function createReply(): CreateReplyRequestBuilder {
        return new CreateReplyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The createReplyAll property
    */
    public function createReplyAll(): CreateReplyAllRequestBuilder {
        return new CreateReplyAllRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The eventMessageRequest property
    */
    public function eventMessageRequest(): EventMessageRequestRequestBuilder {
        return new EventMessageRequestRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The extensions property
    */
    public function extensions(): ExtensionsRequestBuilder {
        return new ExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The forward property
    */
    public function forward(): ForwardRequestBuilder {
        return new ForwardRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The mentions property
    */
    public function mentions(): MentionsRequestBuilder {
        return new MentionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The move property
    */
    public function move(): MoveRequestBuilder {
        return new MoveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The multiValueExtendedProperties property
    */
    public function multiValueExtendedProperties(): MultiValueExtendedPropertiesRequestBuilder {
        return new MultiValueExtendedPropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /**
     * The reply property
    */
    public function reply(): ReplyRequestBuilder {
        return new ReplyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The replyAll property
    */
    public function replyAll(): ReplyAllRequestBuilder {
        return new ReplyAllRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The send property
    */
    public function send(): SendRequestBuilder {
        return new SendRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The singleValueExtendedProperties property
    */
    public function singleValueExtendedProperties(): SingleValueExtendedPropertiesRequestBuilder {
        return new SingleValueExtendedPropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The unsubscribe property
    */
    public function unsubscribe(): UnsubscribeRequestBuilder {
        return new UnsubscribeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.mailFolders.item.childFolders.item.messages.item.attachments.item collection
     * @param string $id Unique identifier of the item
     * @return AttachmentItemRequestBuilder
    */
    public function attachmentsById(string $id): AttachmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['attachment_id'] = $id;
        return new AttachmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MessageItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/me/mailFolders/{mailFolder_id}/childFolders/{mailFolder_id1}/messages/{message_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property messages for me
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
     * The collection of messages in the mailFolder.
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
     * Update the navigation property messages in me
     * @param Message $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Message $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete navigation property messages for me
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.mailFolders.item.childFolders.item.messages.item.extensions.item collection
     * @param string $id Unique identifier of the item
     * @return ExtensionItemRequestBuilder
    */
    public function extensionsById(string $id): ExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['extension_id'] = $id;
        return new ExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The collection of messages in the mailFolder.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, Message::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.mailFolders.item.childFolders.item.messages.item.mentions.item collection
     * @param string $id Unique identifier of the item
     * @return MentionItemRequestBuilder
    */
    public function mentionsById(string $id): MentionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mention_id'] = $id;
        return new MentionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.mailFolders.item.childFolders.item.messages.item.multiValueExtendedProperties.item collection
     * @param string $id Unique identifier of the item
     * @return MultiValueLegacyExtendedPropertyItemRequestBuilder
    */
    public function multiValueExtendedPropertiesById(string $id): MultiValueLegacyExtendedPropertyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['multiValueLegacyExtendedProperty_id'] = $id;
        return new MultiValueLegacyExtendedPropertyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property messages in me
     * @param Message $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Message $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.mailFolders.item.childFolders.item.messages.item.singleValueExtendedProperties.item collection
     * @param string $id Unique identifier of the item
     * @return SingleValueLegacyExtendedPropertyItemRequestBuilder
    */
    public function singleValueExtendedPropertiesById(string $id): SingleValueLegacyExtendedPropertyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['singleValueLegacyExtendedProperty_id'] = $id;
        return new SingleValueLegacyExtendedPropertyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
