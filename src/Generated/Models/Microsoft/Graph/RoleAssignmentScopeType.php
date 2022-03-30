<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class RoleAssignmentScopeType extends Enum {
    public const RESOURCE_SCOPE = 'resourceScope';
    public const ALL_DEVICES = 'allDevices';
    public const ALL_LICENSED_USERS = 'allLicensedUsers';
    public const ALL_DEVICES_AND_LICENSED_USERS = 'allDevicesAndLicensedUsers';
}
