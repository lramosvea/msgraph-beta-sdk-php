<?php

namespace Microsoft\Graph\Beta\Generated\Planner;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Planner;
use Microsoft\Graph\Beta\Generated\Planner\Buckets\BucketsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Planner\Buckets\Item\PlannerBucketItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Planner\Plans\Item\PlannerPlanItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Planner\Plans\PlansRequestBuilder;
use Microsoft\Graph\Beta\Generated\Planner\Rosters\Item\PlannerRosterItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Planner\Rosters\RostersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Planner\Tasks\Item\PlannerTaskItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Planner\Tasks\TasksRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class PlannerRequestBuilder 
{
    /**
     * The buckets property
    */
    public function buckets(): BucketsRequestBuilder {
        return new BucketsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /**
     * The plans property
    */
    public function plans(): PlansRequestBuilder {
        return new PlansRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The rosters property
    */
    public function rosters(): RostersRequestBuilder {
        return new RostersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The tasks property
    */
    public function tasks(): TasksRequestBuilder {
        return new TasksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.planner.buckets.item collection
     * @param string $id Unique identifier of the item
     * @return PlannerBucketItemRequestBuilder
    */
    public function bucketsById(string $id): PlannerBucketItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['plannerBucket_id'] = $id;
        return new PlannerBucketItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PlannerRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/planner{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get planner
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
     * Update planner
     * @param Planner $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Planner $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Get planner
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, Planner::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update planner
     * @param Planner $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Planner $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.planner.plans.item collection
     * @param string $id Unique identifier of the item
     * @return PlannerPlanItemRequestBuilder
    */
    public function plansById(string $id): PlannerPlanItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['plannerPlan_id'] = $id;
        return new PlannerPlanItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.planner.rosters.item collection
     * @param string $id Unique identifier of the item
     * @return PlannerRosterItemRequestBuilder
    */
    public function rostersById(string $id): PlannerRosterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['plannerRoster_id'] = $id;
        return new PlannerRosterItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.planner.tasks.item collection
     * @param string $id Unique identifier of the item
     * @return PlannerTaskItemRequestBuilder
    */
    public function tasksById(string $id): PlannerTaskItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['plannerTask_id'] = $id;
        return new PlannerTaskItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
