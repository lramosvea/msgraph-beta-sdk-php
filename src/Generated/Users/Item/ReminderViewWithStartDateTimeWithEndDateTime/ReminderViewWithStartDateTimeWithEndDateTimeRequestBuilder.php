<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\ReminderViewWithStartDateTimeWithEndDateTime;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class ReminderViewWithStartDateTimeWithEndDateTimeRequestBuilder 
{
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new ReminderViewWithStartDateTimeWithEndDateTimeRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $endDateTime Usage: EndDateTime='{EndDateTime}'
     * @param string|null $startDateTime Usage: StartDateTime='{StartDateTime}'
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter, ?string $endDateTime = null, ?string $startDateTime = null) {
        $this->urlTemplate = '{+baseurl}/users/{user_id}/microsoft.graph.reminderView(StartDateTime=\'{StartDateTime}\',EndDateTime=\'{EndDateTime}\')';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
        $urlTplParams = $pathParameters;
        $urlTplParams['EndDateTime'] = $endDateTime;
        $urlTplParams['StartDateTime'] = $startDateTime;
        $this->pathParameters = array_merge($this->pathParameters, $urlTplParams);
    }

    /**
     * Invoke function reminderView
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Invoke function reminderView
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, ReminderViewWithStartDateTimeWithEndDateTimeResponse::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
