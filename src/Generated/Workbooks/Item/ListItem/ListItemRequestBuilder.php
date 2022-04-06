<?php

namespace Microsoft\Graph\Beta\Generated\Workbooks\Item\ListItem;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ListItem;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Workbooks\Item\ListItem\Activities\ActivitiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Workbooks\Item\ListItem\Activities\Item\ItemActivityOLDItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Workbooks\Item\ListItem\Analytics\AnalyticsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Workbooks\Item\ListItem\CreateLink\CreateLinkRequestBuilder;
use Microsoft\Graph\Beta\Generated\Workbooks\Item\ListItem\DriveItem\DriveItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Workbooks\Item\ListItem\Fields\FieldsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Workbooks\Item\ListItem\GetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithInterval\GetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithIntervalRequestBuilder;
use Microsoft\Graph\Beta\Generated\Workbooks\Item\ListItem\Versions\Item\ListItemVersionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Workbooks\Item\ListItem\Versions\VersionsRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class ListItemRequestBuilder 
{
    /**
     * The activities property
    */
    public function activities(): ActivitiesRequestBuilder {
        return new ActivitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The analytics property
    */
    public function analytics(): AnalyticsRequestBuilder {
        return new AnalyticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The createLink property
    */
    public function createLink(): CreateLinkRequestBuilder {
        return new CreateLinkRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The driveItem property
    */
    public function driveItem(): DriveItemRequestBuilder {
        return new DriveItemRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The fields property
    */
    public function fields(): FieldsRequestBuilder {
        return new FieldsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * The versions property
    */
    public function versions(): VersionsRequestBuilder {
        return new VersionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.workbooks.item.listItem.activities.item collection
     * @param string $id Unique identifier of the item
     * @return ItemActivityOLDItemRequestBuilder
    */
    public function activitiesById(string $id): ItemActivityOLDItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['itemActivityOLD_id'] = $id;
        return new ItemActivityOLDItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ListItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/workbooks/{driveItem_id}/listItem{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property listItem for workbooks
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
     * For drives in SharePoint, the associated document library list item. Read-only. Nullable.
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
     * Update the navigation property listItem in workbooks
     * @param ListItem $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(ListItem $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete navigation property listItem for workbooks
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
     * For drives in SharePoint, the associated document library list item. Read-only. Nullable.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, ListItem::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the getActivitiesByInterval method.
     * @param string $endDateTime Usage: endDateTime='{endDateTime}'
     * @param string $interval Usage: interval='{interval}'
     * @param string $startDateTime Usage: startDateTime='{startDateTime}'
     * @return GetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithIntervalRequestBuilder
    */
    public function getActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithInterval(string $endDateTime, string $interval, string $startDateTime): GetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithIntervalRequestBuilder {
        return new GetActivitiesByIntervalWithStartDateTimeWithEndDateTimeWithIntervalRequestBuilder($this->pathParameters, $this->requestAdapter, $endDateTime, $interval, $startDateTime);
    }

    /**
     * Update the navigation property listItem in workbooks
     * @param ListItem $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(ListItem $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.workbooks.item.listItem.versions.item collection
     * @param string $id Unique identifier of the item
     * @return ListItemVersionItemRequestBuilder
    */
    public function versionsById(string $id): ListItemVersionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['listItemVersion_id'] = $id;
        return new ListItemVersionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
