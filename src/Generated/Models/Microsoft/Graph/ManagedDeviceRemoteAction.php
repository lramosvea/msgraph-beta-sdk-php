<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class ManagedDeviceRemoteAction extends Enum {
    public const RETIRE = 'retire';
    public const DELETE = 'delete';
    public const FULL_SCAN = 'fullScan';
    public const QUICK_SCAN = 'quickScan';
    public const SIGNATURE_UPDATE = 'signatureUpdate';
    public const WIPE = 'wipe';
    public const CUSTOM_TEXT_NOTIFICATION = 'customTextNotification';
    public const REBOOT_NOW = 'rebootNow';
    public const SET_DEVICE_NAME = 'setDeviceName';
    public const SYNC_DEVICE = 'syncDevice';
    public const DEPROVISION = 'deprovision';
    public const DISABLE = 'disable';
    public const REENABLE = 'reenable';
    public const MOVE_DEVICE_TO_ORGANIZATIONAL_UNIT = 'moveDeviceToOrganizationalUnit';
    public const ACTIVATE_DEVICE_ESIM = 'activateDeviceEsim';
    public const COLLECT_DIAGNOSTICS = 'collectDiagnostics';
}
