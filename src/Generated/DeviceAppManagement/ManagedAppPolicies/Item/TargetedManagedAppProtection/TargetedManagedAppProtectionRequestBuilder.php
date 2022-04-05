<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\ManagedAppPolicies\Item\TargetedManagedAppProtection;

use Microsoft\Graph\Beta\Generated\DeviceAppManagement\ManagedAppPolicies\Item\TargetedManagedAppProtection\Assign\AssignRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\ManagedAppPolicies\Item\TargetedManagedAppProtection\TargetApps\TargetAppsRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

class TargetedManagedAppProtectionRequestBuilder 
{
    /**
     * The assign property
    */
    public function assign(): AssignRequestBuilder {
        return new AssignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The targetApps property
    */
    public function targetApps(): TargetAppsRequestBuilder {
        return new TargetAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new TargetedManagedAppProtectionRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceAppManagement/managedAppPolicies/{managedAppPolicy_id}/microsoft.graph.targetedManagedAppProtection';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

}
