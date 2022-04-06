<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Calendars\Item\Events\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\Event;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Users\Item\Calendars\Item\Events\Item\Accept\AcceptRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Calendars\Item\Events\Item\Attachments\AttachmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Calendars\Item\Events\Item\Attachments\Item\AttachmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Calendars\Item\Events\Item\Calendar\CalendarRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Calendars\Item\Events\Item\Cancel\CancelRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Calendars\Item\Events\Item\Decline\DeclineRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Calendars\Item\Events\Item\DismissReminder\DismissReminderRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Calendars\Item\Events\Item\ExceptionOccurrences\ExceptionOccurrencesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Calendars\Item\Events\Item\Extensions\ExtensionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Calendars\Item\Events\Item\Extensions\Item\ExtensionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Calendars\Item\Events\Item\Forward\ForwardRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Calendars\Item\Events\Item\Instances\InstancesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Calendars\Item\Events\Item\MultiValueExtendedProperties\Item\MultiValueLegacyExtendedPropertyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Calendars\Item\Events\Item\MultiValueExtendedProperties\MultiValueExtendedPropertiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Calendars\Item\Events\Item\SingleValueExtendedProperties\Item\SingleValueLegacyExtendedPropertyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Calendars\Item\Events\Item\SingleValueExtendedProperties\SingleValueExtendedPropertiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Calendars\Item\Events\Item\SnoozeReminder\SnoozeReminderRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Calendars\Item\Events\Item\TentativelyAccept\TentativelyAcceptRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class EventItemRequestBuilder 
{
    /**
     * The accept property
    */
    public function accept(): AcceptRequestBuilder {
        return new AcceptRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The attachments property
    */
    public function attachments(): AttachmentsRequestBuilder {
        return new AttachmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The calendar property
    */
    public function calendar(): CalendarRequestBuilder {
        return new CalendarRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The cancel property
    */
    public function cancel(): CancelRequestBuilder {
        return new CancelRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The decline property
    */
    public function decline(): DeclineRequestBuilder {
        return new DeclineRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The dismissReminder property
    */
    public function dismissReminder(): DismissReminderRequestBuilder {
        return new DismissReminderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The exceptionOccurrences property
    */
    public function exceptionOccurrences(): ExceptionOccurrencesRequestBuilder {
        return new ExceptionOccurrencesRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * The instances property
    */
    public function instances(): InstancesRequestBuilder {
        return new InstancesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The multiValueExtendedProperties property
    */
    public function multiValueExtendedProperties(): MultiValueExtendedPropertiesRequestBuilder {
        return new MultiValueExtendedPropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The singleValueExtendedProperties property
    */
    public function singleValueExtendedProperties(): SingleValueExtendedPropertiesRequestBuilder {
        return new SingleValueExtendedPropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The snoozeReminder property
    */
    public function snoozeReminder(): SnoozeReminderRequestBuilder {
        return new SnoozeReminderRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The tentativelyAccept property
    */
    public function tentativelyAccept(): TentativelyAcceptRequestBuilder {
        return new TentativelyAcceptRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.calendars.item.events.item.attachments.item collection
     * @param string $id Unique identifier of the item
     * @return AttachmentItemRequestBuilder
    */
    public function attachmentsById(string $id): AttachmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['attachment_id'] = $id;
        return new AttachmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new EventItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/users/{user_id}/calendars/{calendar_id}/events/{event_id}{?select}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property events for users
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
     * The events in the calendar. Navigation property. Read-only.
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
     * Update the navigation property events in users
     * @param Event $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Event $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete navigation property events for users
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.calendars.item.events.item.exceptionOccurrences.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedUsersItemCalendarsItemEventsItemExceptionOccurrencesItemEventItemRequestBuilder
    */
    public function exceptionOccurrencesById(string $id): MicrosoftGraphBetaGeneratedUsersItemCalendarsItemEventsItemExceptionOccurrencesItemEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event_id1'] = $id;
        return new MicrosoftGraphBetaGeneratedUsersItemCalendarsItemEventsItemExceptionOccurrencesItemEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.calendars.item.events.item.extensions.item collection
     * @param string $id Unique identifier of the item
     * @return ExtensionItemRequestBuilder
    */
    public function extensionsById(string $id): ExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['extension_id'] = $id;
        return new ExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * The events in the calendar. Navigation property. Read-only.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, Event::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.calendars.item.events.item.instances.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedUsersItemCalendarsItemEventsItemInstancesItemEventItemRequestBuilder
    */
    public function instancesById(string $id): MicrosoftGraphBetaGeneratedUsersItemCalendarsItemEventsItemInstancesItemEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event_id1'] = $id;
        return new MicrosoftGraphBetaGeneratedUsersItemCalendarsItemEventsItemInstancesItemEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.calendars.item.events.item.multiValueExtendedProperties.item collection
     * @param string $id Unique identifier of the item
     * @return MultiValueLegacyExtendedPropertyItemRequestBuilder
    */
    public function multiValueExtendedPropertiesById(string $id): MultiValueLegacyExtendedPropertyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['multiValueLegacyExtendedProperty_id'] = $id;
        return new MultiValueLegacyExtendedPropertyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property events in users
     * @param Event $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Event $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.calendars.item.events.item.singleValueExtendedProperties.item collection
     * @param string $id Unique identifier of the item
     * @return SingleValueLegacyExtendedPropertyItemRequestBuilder
    */
    public function singleValueExtendedPropertiesById(string $id): SingleValueLegacyExtendedPropertyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['singleValueLegacyExtendedProperty_id'] = $id;
        return new SingleValueLegacyExtendedPropertyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
