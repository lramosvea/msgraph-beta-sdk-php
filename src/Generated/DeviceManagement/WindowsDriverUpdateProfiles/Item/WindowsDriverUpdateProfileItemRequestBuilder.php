<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsDriverUpdateProfiles\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsDriverUpdateProfiles\Item\Assign\AssignRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsDriverUpdateProfiles\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsDriverUpdateProfiles\Item\Assignments\Item\WindowsDriverUpdateProfileAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsDriverUpdateProfiles\Item\DriverInventories\DriverInventoriesRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsDriverUpdateProfiles\Item\DriverInventories\Item\WindowsDriverUpdateInventoryItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsDriverUpdateProfiles\Item\ExecuteAction\ExecuteActionRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\WindowsDriverUpdateProfiles\Item\SyncInventory\SyncInventoryRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\WindowsDriverUpdateProfile;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class WindowsDriverUpdateProfileItemRequestBuilder 
{
    public function assign(): AssignRequestBuilder {
        return new AssignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function driverInventories(): DriverInventoriesRequestBuilder {
        return new DriverInventoriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function executeAction(): ExecuteActionRequestBuilder {
        return new ExecuteActionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    public function syncInventory(): SyncInventoryRequestBuilder {
        return new SyncInventoryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.windowsDriverUpdateProfiles.item.assignments.item collection
     * @param string $id Unique identifier of the item
     * @return WindowsDriverUpdateProfileAssignmentItemRequestBuilder
    */
    public function assignmentsById(string $id): WindowsDriverUpdateProfileAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsDriverUpdateProfileAssignment_id'] = $id;
        return new WindowsDriverUpdateProfileAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WindowsDriverUpdateProfileItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/windowsDriverUpdateProfiles/{windowsDriverUpdateProfile_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property windowsDriverUpdateProfiles for deviceManagement
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
     * A collection of windows driver update profiles
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
     * Update the navigation property windowsDriverUpdateProfiles in deviceManagement
     * @param WindowsDriverUpdateProfile $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(WindowsDriverUpdateProfile $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete navigation property windowsDriverUpdateProfiles for deviceManagement
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.deviceManagement.windowsDriverUpdateProfiles.item.driverInventories.item collection
     * @param string $id Unique identifier of the item
     * @return WindowsDriverUpdateInventoryItemRequestBuilder
    */
    public function driverInventoriesById(string $id): WindowsDriverUpdateInventoryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['windowsDriverUpdateInventory_id'] = $id;
        return new WindowsDriverUpdateInventoryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * A collection of windows driver update profiles
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, WindowsDriverUpdateProfile::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property windowsDriverUpdateProfiles in deviceManagement
     * @param WindowsDriverUpdateProfile $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(WindowsDriverUpdateProfile $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
