<?php

namespace Microsoft\Graph\Beta\Generated\EscapedPrint;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Connectors\ConnectorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Connectors\Item\PrintConnectorItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Operations\Item\PrintOperationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Printers\Item\PrinterItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Printers\PrintersRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\PrinterShares\Item\PrinterShareItemRequestBuilder as MicrosoftGraphBetaGeneratedEscapedPrintPrinterSharesItemPrinterShareItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\PrinterShares\PrinterSharesRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\ReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Services\Item\PrintServiceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Services\ServicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Shares\Item\PrinterShareItemRequestBuilder as MicrosoftGraphBetaGeneratedEscapedPrintSharesItemPrinterShareItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\Shares\SharesRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\TaskDefinitions\Item\PrintTaskDefinitionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\EscapedPrint\TaskDefinitions\TaskDefinitionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\EscapedPrint;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class PrintRequestBuilder 
{
    public function connectors(): ConnectorsRequestBuilder {
        return new ConnectorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function operations(): OperationsRequestBuilder {
        return new OperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    public function printers(): PrintersRequestBuilder {
        return new PrintersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function printerShares(): PrinterSharesRequestBuilder {
        return new PrinterSharesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function reports(): ReportsRequestBuilder {
        return new ReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    public function services(): ServicesRequestBuilder {
        return new ServicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function shares(): SharesRequestBuilder {
        return new SharesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function taskDefinitions(): TaskDefinitionsRequestBuilder {
        return new TaskDefinitionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.connectors.item collection
     * @param string $id Unique identifier of the item
     * @return PrintConnectorItemRequestBuilder
    */
    public function connectorsById(string $id): PrintConnectorItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printConnector_id'] = $id;
        return new PrintConnectorItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PrintRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/print{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get print
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
     * Update print
     * @param EscapedPrint $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(EscapedPrint $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Get print
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, EscapedPrint::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.operations.item collection
     * @param string $id Unique identifier of the item
     * @return PrintOperationItemRequestBuilder
    */
    public function operationsById(string $id): PrintOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printOperation_id'] = $id;
        return new PrintOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update print
     * @param EscapedPrint $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(EscapedPrint $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.printers.item collection
     * @param string $id Unique identifier of the item
     * @return PrinterItemRequestBuilder
    */
    public function printersById(string $id): PrinterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printer_id'] = $id;
        return new PrinterItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.printerShares.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedEscapedPrintPrinterSharesItemPrinterShareItemRequestBuilder
    */
    public function printerSharesById(string $id): MicrosoftGraphBetaGeneratedEscapedPrintPrinterSharesItemPrinterShareItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printerShare_id'] = $id;
        return new MicrosoftGraphBetaGeneratedEscapedPrintPrinterSharesItemPrinterShareItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.services.item collection
     * @param string $id Unique identifier of the item
     * @return PrintServiceItemRequestBuilder
    */
    public function servicesById(string $id): PrintServiceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printService_id'] = $id;
        return new PrintServiceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.shares.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedEscapedPrintSharesItemPrinterShareItemRequestBuilder
    */
    public function sharesById(string $id): MicrosoftGraphBetaGeneratedEscapedPrintSharesItemPrinterShareItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printerShare_id'] = $id;
        return new MicrosoftGraphBetaGeneratedEscapedPrintSharesItemPrinterShareItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.print.taskDefinitions.item collection
     * @param string $id Unique identifier of the item
     * @return PrintTaskDefinitionItemRequestBuilder
    */
    public function taskDefinitionsById(string $id): PrintTaskDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printTaskDefinition_id'] = $id;
        return new PrintTaskDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
