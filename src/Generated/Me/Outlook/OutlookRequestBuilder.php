<?php

namespace Microsoft\Graph\Beta\Generated\Me\Outlook;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Me\Outlook\MasterCategories\Item\OutlookCategoryItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Outlook\MasterCategories\MasterCategoriesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Outlook\SupportedLanguages\SupportedLanguagesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Outlook\SupportedTimeZones\SupportedTimeZonesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Outlook\SupportedTimeZonesWithTimeZoneStandard\SupportedTimeZonesWithTimeZoneStandardRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Outlook\TaskFolders\Item\OutlookTaskFolderItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Outlook\TaskFolders\TaskFoldersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Outlook\TaskGroups\Item\OutlookTaskGroupItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Outlook\TaskGroups\TaskGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Outlook\Tasks\Item\OutlookTaskItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Outlook\Tasks\TasksRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\OutlookUser;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class OutlookRequestBuilder 
{
    public function masterCategories(): MasterCategoriesRequestBuilder {
        return new MasterCategoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    public function taskFolders(): TaskFoldersRequestBuilder {
        return new TaskFoldersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function taskGroups(): TaskGroupsRequestBuilder {
        return new TaskGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function tasks(): TasksRequestBuilder {
        return new TasksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new OutlookRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/me/outlook{?select}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property outlook for me
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
     * Read-only.
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
     * Update the navigation property outlook in me
     * @param OutlookUser $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(OutlookUser $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete navigation property outlook for me
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
     * Read-only.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, OutlookUser::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.outlook.masterCategories.item collection
     * @param string $id Unique identifier of the item
     * @return OutlookCategoryItemRequestBuilder
    */
    public function masterCategoriesById(string $id): OutlookCategoryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['outlookCategory_id'] = $id;
        return new OutlookCategoryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property outlook in me
     * @param OutlookUser $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(OutlookUser $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the supportedLanguages method.
     * @return SupportedLanguagesRequestBuilder
    */
    public function supportedLanguages(): SupportedLanguagesRequestBuilder {
        return new SupportedLanguagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the supportedTimeZones method.
     * @return SupportedTimeZonesRequestBuilder
    */
    public function supportedTimeZones(): SupportedTimeZonesRequestBuilder {
        return new SupportedTimeZonesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

    /**
     * Provides operations to call the supportedTimeZones method.
     * @param string $timeZoneStandard Usage: TimeZoneStandard='{TimeZoneStandard}'
     * @return SupportedTimeZonesWithTimeZoneStandardRequestBuilder
    */
    public function supportedTimeZonesWithTimeZoneStandard(string $timeZoneStandard): SupportedTimeZonesWithTimeZoneStandardRequestBuilder {
        return new SupportedTimeZonesWithTimeZoneStandardRequestBuilder($this->pathParameters, $this->requestAdapter, $timeZoneStandard);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.outlook.taskFolders.item collection
     * @param string $id Unique identifier of the item
     * @return OutlookTaskFolderItemRequestBuilder
    */
    public function taskFoldersById(string $id): OutlookTaskFolderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['outlookTaskFolder_id'] = $id;
        return new OutlookTaskFolderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.outlook.taskGroups.item collection
     * @param string $id Unique identifier of the item
     * @return OutlookTaskGroupItemRequestBuilder
    */
    public function taskGroupsById(string $id): OutlookTaskGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['outlookTaskGroup_id'] = $id;
        return new OutlookTaskGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.outlook.tasks.item collection
     * @param string $id Unique identifier of the item
     * @return OutlookTaskItemRequestBuilder
    */
    public function tasksById(string $id): OutlookTaskItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['outlookTask_id'] = $id;
        return new OutlookTaskItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
