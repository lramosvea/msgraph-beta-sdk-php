<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Authentication\PasswordlessMicrosoftAuthenticatorMethods\Item\Device;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\Device;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Users\Item\Authentication\PasswordlessMicrosoftAuthenticatorMethods\Item\Device\Commands\CommandsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Authentication\PasswordlessMicrosoftAuthenticatorMethods\Item\Device\Commands\Item\CommandItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Authentication\PasswordlessMicrosoftAuthenticatorMethods\Item\Device\Extensions\ExtensionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Authentication\PasswordlessMicrosoftAuthenticatorMethods\Item\Device\Extensions\Item\ExtensionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Authentication\PasswordlessMicrosoftAuthenticatorMethods\Item\Device\MemberOf\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedUsersItemAuthenticationPasswordlessMicrosoftAuthenticatorMethodsItemDeviceMemberOfItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Authentication\PasswordlessMicrosoftAuthenticatorMethods\Item\Device\MemberOf\MemberOfRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Authentication\PasswordlessMicrosoftAuthenticatorMethods\Item\Device\RegisteredOwners\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedUsersItemAuthenticationPasswordlessMicrosoftAuthenticatorMethodsItemDeviceRegisteredOwnersItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Authentication\PasswordlessMicrosoftAuthenticatorMethods\Item\Device\RegisteredOwners\RegisteredOwnersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Authentication\PasswordlessMicrosoftAuthenticatorMethods\Item\Device\RegisteredUsers\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedUsersItemAuthenticationPasswordlessMicrosoftAuthenticatorMethodsItemDeviceRegisteredUsersItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Authentication\PasswordlessMicrosoftAuthenticatorMethods\Item\Device\RegisteredUsers\RegisteredUsersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Authentication\PasswordlessMicrosoftAuthenticatorMethods\Item\Device\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedUsersItemAuthenticationPasswordlessMicrosoftAuthenticatorMethodsItemDeviceTransitiveMemberOfItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Authentication\PasswordlessMicrosoftAuthenticatorMethods\Item\Device\TransitiveMemberOf\TransitiveMemberOfRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Authentication\PasswordlessMicrosoftAuthenticatorMethods\Item\Device\UsageRights\Item\UsageRightItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Authentication\PasswordlessMicrosoftAuthenticatorMethods\Item\Device\UsageRights\UsageRightsRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DeviceRequestBuilder 
{
    /**
     * The commands property
    */
    public function commands(): CommandsRequestBuilder {
        return new CommandsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The extensions property
    */
    public function extensions(): ExtensionsRequestBuilder {
        return new ExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The memberOf property
    */
    public function memberOf(): MemberOfRequestBuilder {
        return new MemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /**
     * The registeredOwners property
    */
    public function registeredOwners(): RegisteredOwnersRequestBuilder {
        return new RegisteredOwnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The registeredUsers property
    */
    public function registeredUsers(): RegisteredUsersRequestBuilder {
        return new RegisteredUsersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The transitiveMemberOf property
    */
    public function transitiveMemberOf(): TransitiveMemberOfRequestBuilder {
        return new TransitiveMemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * The usageRights property
    */
    public function usageRights(): UsageRightsRequestBuilder {
        return new UsageRightsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.authentication.passwordlessMicrosoftAuthenticatorMethods.item.device.commands.item collection
     * @param string $id Unique identifier of the item
     * @return CommandItemRequestBuilder
    */
    public function commandsById(string $id): CommandItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['command_id'] = $id;
        return new CommandItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DeviceRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/users/{user_id}/authentication/passwordlessMicrosoftAuthenticatorMethods/{passwordlessMicrosoftAuthenticatorAuthenticationMethod_id}/device{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property device for users
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
     * Get device from users
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
     * Update the navigation property device in users
     * @param Device $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Device $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete navigation property device for users
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.authentication.passwordlessMicrosoftAuthenticatorMethods.item.device.extensions.item collection
     * @param string $id Unique identifier of the item
     * @return ExtensionItemRequestBuilder
    */
    public function extensionsById(string $id): ExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['extension_id'] = $id;
        return new ExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get device from users
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, Device::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.authentication.passwordlessMicrosoftAuthenticatorMethods.item.device.memberOf.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedUsersItemAuthenticationPasswordlessMicrosoftAuthenticatorMethodsItemDeviceMemberOfItemDirectoryObjectItemRequestBuilder
    */
    public function memberOfById(string $id): MicrosoftGraphBetaGeneratedUsersItemAuthenticationPasswordlessMicrosoftAuthenticatorMethodsItemDeviceMemberOfItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedUsersItemAuthenticationPasswordlessMicrosoftAuthenticatorMethodsItemDeviceMemberOfItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property device in users
     * @param Device $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Device $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.authentication.passwordlessMicrosoftAuthenticatorMethods.item.device.registeredOwners.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedUsersItemAuthenticationPasswordlessMicrosoftAuthenticatorMethodsItemDeviceRegisteredOwnersItemDirectoryObjectItemRequestBuilder
    */
    public function registeredOwnersById(string $id): MicrosoftGraphBetaGeneratedUsersItemAuthenticationPasswordlessMicrosoftAuthenticatorMethodsItemDeviceRegisteredOwnersItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedUsersItemAuthenticationPasswordlessMicrosoftAuthenticatorMethodsItemDeviceRegisteredOwnersItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.authentication.passwordlessMicrosoftAuthenticatorMethods.item.device.registeredUsers.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedUsersItemAuthenticationPasswordlessMicrosoftAuthenticatorMethodsItemDeviceRegisteredUsersItemDirectoryObjectItemRequestBuilder
    */
    public function registeredUsersById(string $id): MicrosoftGraphBetaGeneratedUsersItemAuthenticationPasswordlessMicrosoftAuthenticatorMethodsItemDeviceRegisteredUsersItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedUsersItemAuthenticationPasswordlessMicrosoftAuthenticatorMethodsItemDeviceRegisteredUsersItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.authentication.passwordlessMicrosoftAuthenticatorMethods.item.device.transitiveMemberOf.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedUsersItemAuthenticationPasswordlessMicrosoftAuthenticatorMethodsItemDeviceTransitiveMemberOfItemDirectoryObjectItemRequestBuilder
    */
    public function transitiveMemberOfById(string $id): MicrosoftGraphBetaGeneratedUsersItemAuthenticationPasswordlessMicrosoftAuthenticatorMethodsItemDeviceTransitiveMemberOfItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedUsersItemAuthenticationPasswordlessMicrosoftAuthenticatorMethodsItemDeviceTransitiveMemberOfItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.authentication.passwordlessMicrosoftAuthenticatorMethods.item.device.usageRights.item collection
     * @param string $id Unique identifier of the item
     * @return UsageRightItemRequestBuilder
    */
    public function usageRightsById(string $id): UsageRightItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['usageRight_id'] = $id;
        return new UsageRightItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
