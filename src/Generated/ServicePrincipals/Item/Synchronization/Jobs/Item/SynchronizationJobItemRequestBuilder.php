<?php

namespace Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\Synchronization\Jobs\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\SynchronizationJob;
use Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\Synchronization\Jobs\Item\Pause\PauseRequestBuilder;
use Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\Synchronization\Jobs\Item\ProvisionOnDemand\ProvisionOnDemandRequestBuilder;
use Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\Synchronization\Jobs\Item\Restart\RestartRequestBuilder;
use Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\Synchronization\Jobs\Item\Schema\SchemaRequestBuilder;
use Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\Synchronization\Jobs\Item\Start\StartRequestBuilder;
use Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\Synchronization\Jobs\Item\Stop\StopRequestBuilder;
use Microsoft\Graph\Beta\Generated\ServicePrincipals\Item\Synchronization\Jobs\Item\ValidateCredentials\ValidateCredentialsRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class SynchronizationJobItemRequestBuilder 
{
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /**
     * The pause property
    */
    public function pause(): PauseRequestBuilder {
        return new PauseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The provisionOnDemand property
    */
    public function provisionOnDemand(): ProvisionOnDemandRequestBuilder {
        return new ProvisionOnDemandRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The restart property
    */
    public function restart(): RestartRequestBuilder {
        return new RestartRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The schema property
    */
    public function schema(): SchemaRequestBuilder {
        return new SchemaRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The start property
    */
    public function start(): StartRequestBuilder {
        return new StartRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The stop property
    */
    public function stop(): StopRequestBuilder {
        return new StopRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * The validateCredentials property
    */
    public function validateCredentials(): ValidateCredentialsRequestBuilder {
        return new ValidateCredentialsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new SynchronizationJobItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/servicePrincipals/{servicePrincipal_id}/synchronization/jobs/{synchronizationJob_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property jobs for servicePrincipals
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
     * Performs synchronization by periodically running in the background, polling for changes in one directory, and pushing them to another directory.
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
     * Update the navigation property jobs in servicePrincipals
     * @param SynchronizationJob $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(SynchronizationJob $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete navigation property jobs for servicePrincipals
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
     * Performs synchronization by periodically running in the background, polling for changes in one directory, and pushing them to another directory.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, SynchronizationJob::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property jobs in servicePrincipals
     * @param SynchronizationJob $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(SynchronizationJob $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
