<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class ManagedAppClipboardSharingLevel extends Enum {
    public const ALL_APPS = 'allApps';
    public const MANAGED_APPS_WITH_PASTE_IN = 'managedAppsWithPasteIn';
    public const MANAGED_APPS = 'managedApps';
    public const BLOCKED = 'blocked';
}
