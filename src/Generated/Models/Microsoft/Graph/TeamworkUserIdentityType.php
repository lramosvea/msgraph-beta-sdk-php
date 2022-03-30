<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class TeamworkUserIdentityType extends Enum {
    public const AAD_USER = 'aadUser';
    public const ON_PREMISE_AAD_USER = 'onPremiseAadUser';
    public const ANONYMOUS_GUEST = 'anonymousGuest';
    public const FEDERATED_USER = 'federatedUser';
    public const PERSONAL_MICROSOFT_ACCOUNT_USER = 'personalMicrosoftAccountUser';
    public const SKYPE_USER = 'skypeUser';
    public const PHONE_USER = 'phoneUser';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
}
