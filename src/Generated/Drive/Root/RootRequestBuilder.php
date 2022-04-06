<?php

namespace Microsoft\Graph\Beta\Generated\Drive\Root;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Drive\Root\Activities\ActivitiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drive\Root\Activities\Item\ItemActivityOLDItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drive\Root\Analytics\AnalyticsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drive\Root\Children\ChildrenRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drive\Root\Children\Item\DriveItemItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drive\Root\Content\ContentRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drive\Root\ListItem\ListItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drive\Root\Permissions\Item\PermissionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drive\Root\Permissions\PermissionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drive\Root\Subscriptions\Item\SubscriptionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drive\Root\Subscriptions\SubscriptionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drive\Root\Thumbnails\Item\ThumbnailSetItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drive\Root\Thumbnails\ThumbnailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drive\Root\Versions\Item\DriveItemVersionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Drive\Root\Versions\VersionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\DriveItem;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class RootRequestBuilder 
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
     * The children property
    */
    public function children(): ChildrenRequestBuilder {
        return new ChildrenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The content property
    */
    public function content(): ContentRequestBuilder {
        return new ContentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The listItem property
    */
    public function listItem(): ListItemRequestBuilder {
        return new ListItemRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /**
     * The permissions property
    */
    public function permissions(): PermissionsRequestBuilder {
        return new PermissionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The subscriptions property
    */
    public function subscriptions(): SubscriptionsRequestBuilder {
        return new SubscriptionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The thumbnails property
    */
    public function thumbnails(): ThumbnailsRequestBuilder {
        return new ThumbnailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * The versions property
    */
    public function versions(): VersionsRequestBuilder {
        return new VersionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.drive.root.activities.item collection
     * @param string $id Unique identifier of the item
     * @return ItemActivityOLDItemRequestBuilder
    */
    public function activitiesById(string $id): ItemActivityOLDItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['itemActivityOLD_id'] = $id;
        return new ItemActivityOLDItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.drive.root.children.item collection
     * @param string $id Unique identifier of the item
     * @return DriveItemItemRequestBuilder
    */
    public function childrenById(string $id): DriveItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItem_id'] = $id;
        return new DriveItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RootRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/drive/root{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property root for drive
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
     * The root folder of the drive. Read-only.
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
     * Update the navigation property root in drive
     * @param DriveItem $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(DriveItem $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete navigation property root for drive
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
     * The root folder of the drive. Read-only.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, DriveItem::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property root in drive
     * @param DriveItem $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(DriveItem $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.drive.root.permissions.item collection
     * @param string $id Unique identifier of the item
     * @return PermissionItemRequestBuilder
    */
    public function permissionsById(string $id): PermissionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['permission_id'] = $id;
        return new PermissionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.drive.root.subscriptions.item collection
     * @param string $id Unique identifier of the item
     * @return SubscriptionItemRequestBuilder
    */
    public function subscriptionsById(string $id): SubscriptionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['subscription_id'] = $id;
        return new SubscriptionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.drive.root.thumbnails.item collection
     * @param string $id Unique identifier of the item
     * @return ThumbnailSetItemRequestBuilder
    */
    public function thumbnailsById(string $id): ThumbnailSetItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['thumbnailSet_id'] = $id;
        return new ThumbnailSetItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.drive.root.versions.item collection
     * @param string $id Unique identifier of the item
     * @return DriveItemVersionItemRequestBuilder
    */
    public function versionsById(string $id): DriveItemVersionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveItemVersion_id'] = $id;
        return new DriveItemVersionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
