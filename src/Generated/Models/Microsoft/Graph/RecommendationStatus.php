<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class RecommendationStatus extends Enum {
    public const ACTIVE = 'active';
    public const COMPLETED_BY_SYSTEM = 'completedBySystem';
    public const COMPLETED_BY_USER = 'completedByUser';
    public const DISMISSED = 'dismissed';
    public const POSTPONED = 'postponed';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
