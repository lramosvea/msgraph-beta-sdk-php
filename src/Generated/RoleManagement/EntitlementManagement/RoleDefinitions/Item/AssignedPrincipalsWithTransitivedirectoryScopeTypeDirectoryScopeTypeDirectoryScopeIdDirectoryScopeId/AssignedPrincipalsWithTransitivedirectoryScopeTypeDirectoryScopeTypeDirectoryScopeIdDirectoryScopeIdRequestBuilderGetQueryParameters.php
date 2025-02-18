<?php

namespace Microsoft\Graph\Beta\Generated\RoleManagement\EntitlementManagement\RoleDefinitions\Item\AssignedPrincipalsWithTransitivedirectoryScopeTypeDirectoryScopeTypeDirectoryScopeIdDirectoryScopeId;

use Microsoft\Kiota\Abstractions\QueryParameter;

class AssignedPrincipalsWithTransitivedirectoryScopeTypeDirectoryScopeTypeDirectoryScopeIdDirectoryScopeIdRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24count")
     * @var bool|null $count Include count of items
    */
    public ?bool $count = null;
    
    /**
     * @var string|null $directoryScopeId Usage: directoryScopeId='@directoryScopeId'
    */
    public ?string $directoryScopeId = null;
    
    /**
     * @var string|null $directoryScopeType Usage: directoryScopeType='@directoryScopeType'
    */
    public ?string $directoryScopeType = null;
    
    /**
     * @QueryParameter("%24filter")
     * @var string|null $filter Filter items by property values
    */
    public ?string $filter = null;
    
    /**
     * @QueryParameter("%24orderby")
     * @var array<string>|null $orderby Order items by property values
    */
    public ?array $orderby = null;
    
    /**
     * @QueryParameter("%24search")
     * @var string|null $search Search items by search phrases
    */
    public ?string $search = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * @QueryParameter("%24skip")
     * @var int|null $skip Skip the first n items
    */
    public ?int $skip = null;
    
    /**
     * @QueryParameter("%24top")
     * @var int|null $top Show only the first n items
    */
    public ?int $top = null;
    
    /**
     * @var bool|null $transitive Usage: transitive=@transitive
    */
    public ?bool $transitive = null;
    
}
