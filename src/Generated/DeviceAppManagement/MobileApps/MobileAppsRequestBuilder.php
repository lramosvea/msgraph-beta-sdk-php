<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\GetMobileAppCountWithStatus\GetMobileAppCountWithStatusRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\GetTopMobileAppsWithStatusWithCount\GetTopMobileAppsWithStatusWithCountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\HasPayloadLinks\HasPayloadLinksRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\ValidateXml\ValidateXmlRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\MobileApp;
use Microsoft\Graph\Beta\Generated\Models\MobileAppCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class MobileAppsRequestBuilder 
{
    /**
     * The count property
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The hasPayloadLinks property
    */
    public function hasPayloadLinks(): HasPayloadLinksRequestBuilder {
        return new HasPayloadLinksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * The validateXml property
    */
    public function validateXml(): ValidateXmlRequestBuilder {
        return new ValidateXmlRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new MobileAppsRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceAppManagement/mobileApps{?top,skip,search,filter,count,orderby,select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * The mobile apps.
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
     * Create new navigation property to mobileApps for deviceAppManagement
     * @param MobileApp $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPostRequestInformation(MobileApp $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * The mobile apps.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, MobileAppCollectionResponse::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the getMobileAppCount method.
     * @param string $status Usage: status='{status}'
     * @return GetMobileAppCountWithStatusRequestBuilder
    */
    public function getMobileAppCountWithStatus(string $status): GetMobileAppCountWithStatusRequestBuilder {
        return new GetMobileAppCountWithStatusRequestBuilder($this->pathParameters, $this->requestAdapter, $status);
    }

    /**
     * Provides operations to call the getTopMobileApps method.
     * @param int $count Usage: count={count}
     * @param string $status Usage: status='{status}'
     * @return GetTopMobileAppsWithStatusWithCountRequestBuilder
    */
    public function getTopMobileAppsWithStatusWithCount(int $count, string $status): GetTopMobileAppsWithStatusWithCountRequestBuilder {
        return new GetTopMobileAppsWithStatusWithCountRequestBuilder($this->pathParameters, $this->requestAdapter, $count, $status);
    }

    /**
     * Create new navigation property to mobileApps for deviceAppManagement
     * @param MobileApp $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function post(MobileApp $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPostRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, MobileApp::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
