<?php

namespace Microsoft\Graph\Beta\Generated\Sites\Item\Onenote\SectionGroups\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\SectionGroup;
use Microsoft\Graph\Beta\Generated\Sites\Item\Onenote\SectionGroups\Item\ParentNotebook\ParentNotebookRequestBuilder;
use Microsoft\Graph\Beta\Generated\Sites\Item\Onenote\SectionGroups\Item\ParentSectionGroup\ParentSectionGroupRequestBuilder;
use Microsoft\Graph\Beta\Generated\Sites\Item\Onenote\SectionGroups\Item\SectionGroups\SectionGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Sites\Item\Onenote\SectionGroups\Item\Sections\Item\OnenoteSectionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Sites\Item\Onenote\SectionGroups\Item\Sections\SectionsRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class SectionGroupItemRequestBuilder 
{
    public function parentNotebook(): ParentNotebookRequestBuilder {
        return new ParentNotebookRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function parentSectionGroup(): ParentSectionGroupRequestBuilder {
        return new ParentSectionGroupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    public function sectionGroups(): SectionGroupsRequestBuilder {
        return new SectionGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function sections(): SectionsRequestBuilder {
        return new SectionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new SectionGroupItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/sites/{site_id}/onenote/sectionGroups/{sectionGroup_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property sectionGroups for sites
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
     * The section groups in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
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
     * Update the navigation property sectionGroups in sites
     * @param SectionGroup $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(SectionGroup $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete navigation property sectionGroups for sites
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
     * The section groups in all OneNote notebooks that are owned by the user or group.  Read-only. Nullable.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, SectionGroup::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property sectionGroups in sites
     * @param SectionGroup $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(SectionGroup $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.sites.item.onenote.sectionGroups.item.sectionGroups.item collection
     * @param string $id Unique identifier of the item
     * @return SectionGroupItemRequestBuilder
    */
    public function sectionGroupsById(string $id): SectionGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sectionGroup_id1'] = $id;
        return new SectionGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.sites.item.onenote.sectionGroups.item.sections.item collection
     * @param string $id Unique identifier of the item
     * @return OnenoteSectionItemRequestBuilder
    */
    public function sectionsById(string $id): OnenoteSectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onenoteSection_id'] = $id;
        return new OnenoteSectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
