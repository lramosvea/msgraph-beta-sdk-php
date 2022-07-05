<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item\Threads\Item\Posts\Item\InReplyTo\Mentions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class MentionItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
