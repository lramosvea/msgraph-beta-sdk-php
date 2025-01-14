<?php

namespace Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item\Errors\ErrorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item\Errors\Item\EducationSynchronizationErrorItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item\Pause\PauseRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item\ProfileStatus\ProfileStatusRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item\Reset\ResetRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item\Resume\ResumeRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item\Start\StartRequestBuilder;
use Microsoft\Graph\Beta\Generated\Education\SynchronizationProfiles\Item\UploadUrl\UploadUrlRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\EducationSynchronizationProfile;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class EducationSynchronizationProfileItemRequestBuilder 
{
    /**
     * The errors property
    */
    public function errors(): ErrorsRequestBuilder {
        return new ErrorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The pause property
    */
    public function pause(): PauseRequestBuilder {
        return new PauseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The profileStatus property
    */
    public function profileStatus(): ProfileStatusRequestBuilder {
        return new ProfileStatusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The reset property
    */
    public function reset(): ResetRequestBuilder {
        return new ResetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The resume property
    */
    public function resume(): ResumeRequestBuilder {
        return new ResumeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The start property
    */
    public function start(): StartRequestBuilder {
        return new StartRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new EducationSynchronizationProfileItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/education/synchronizationProfiles/{educationSynchronizationProfile%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property synchronizationProfiles for education
     * @param EducationSynchronizationProfileItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?EducationSynchronizationProfileItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get synchronizationProfiles from education
     * @param EducationSynchronizationProfileItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?EducationSynchronizationProfileItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property synchronizationProfiles in education
     * @param EducationSynchronizationProfile $body 
     * @param EducationSynchronizationProfileItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(EducationSynchronizationProfile $body, ?EducationSynchronizationProfileItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Delete navigation property synchronizationProfiles for education
     * @param EducationSynchronizationProfileItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?EducationSynchronizationProfileItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.education.synchronizationProfiles.item.errors.item collection
     * @param string $id Unique identifier of the item
     * @return EducationSynchronizationErrorItemRequestBuilder
    */
    public function errorsById(string $id): EducationSynchronizationErrorItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationSynchronizationError%2Did'] = $id;
        return new EducationSynchronizationErrorItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get synchronizationProfiles from education
     * @param EducationSynchronizationProfileItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?EducationSynchronizationProfileItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(EducationSynchronizationProfile::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property synchronizationProfiles in education
     * @param EducationSynchronizationProfile $body 
     * @param EducationSynchronizationProfileItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(EducationSynchronizationProfile $body, ?EducationSynchronizationProfileItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(EducationSynchronizationProfile::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the uploadUrl method.
     * @return UploadUrlRequestBuilder
    */
    public function uploadUrl(): UploadUrlRequestBuilder {
        return new UploadUrlRequestBuilder($this->pathParameters, $this->requestAdapter);
    }

}
