<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class PrintJobProcessingState extends Enum {
    public const UNKNOWN = 'unknown';
    public const PENDING = 'pending';
    public const PROCESSING = 'processing';
    public const PAUSED = 'paused';
    public const STOPPED = 'stopped';
    public const COMPLETED = 'completed';
    public const CANCELED = 'canceled';
    public const ABORTED = 'aborted';
}
