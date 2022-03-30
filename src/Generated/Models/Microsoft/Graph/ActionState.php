<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class ActionState extends Enum {
    public const NONE = 'none';
    public const PENDING = 'pending';
    public const CANCELED = 'canceled';
    public const ACTIVE = 'active';
    public const DONE = 'done';
    public const FAILED = 'failed';
    public const NOT_SUPPORTED = 'notSupported';
}
