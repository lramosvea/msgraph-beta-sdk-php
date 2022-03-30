<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class SynchronizationStatusCode extends Enum {
    public const NOT_CONFIGURED = 'NotConfigured';
    public const NOT_RUN = 'NotRun';
    public const ACTIVE = 'Active';
    public const PAUSED = 'Paused';
    public const QUARANTINE = 'Quarantine';
}
