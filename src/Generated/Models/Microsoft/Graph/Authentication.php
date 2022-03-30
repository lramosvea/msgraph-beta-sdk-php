<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Authentication extends Entity 
{
    /** @var array<EmailAuthenticationMethod>|null $emailMethods Represents the email addresses registered to a user for authentication. */
    private ?array $emailMethods = null;
    
    /** @var array<Fido2AuthenticationMethod>|null $fido2Methods Represents the FIDO2 security keys registered to a user for authentication. */
    private ?array $fido2Methods = null;
    
    /** @var array<AuthenticationMethod>|null $methods Represents all authentication methods registered to a user. */
    private ?array $methods = null;
    
    /** @var array<MicrosoftAuthenticatorAuthenticationMethod>|null $microsoftAuthenticatorMethods The details of the Microsoft Authenticator app registered to a user for authentication. */
    private ?array $microsoftAuthenticatorMethods = null;
    
    /** @var array<LongRunningOperation>|null $operations  */
    private ?array $operations = null;
    
    /** @var array<PasswordlessMicrosoftAuthenticatorAuthenticationMethod>|null $passwordlessMicrosoftAuthenticatorMethods Represents the Microsoft Authenticator Passwordless Phone Sign-in methods registered to a user for authentication. */
    private ?array $passwordlessMicrosoftAuthenticatorMethods = null;
    
    /** @var array<PasswordAuthenticationMethod>|null $passwordMethods Represents the details of the password authentication method registered to a user for authentication. */
    private ?array $passwordMethods = null;
    
    /** @var array<PhoneAuthenticationMethod>|null $phoneMethods Represents the phone registered to a user for authentication. */
    private ?array $phoneMethods = null;
    
    /** @var array<SoftwareOathAuthenticationMethod>|null $softwareOathMethods  */
    private ?array $softwareOathMethods = null;
    
    /** @var array<TemporaryAccessPassAuthenticationMethod>|null $temporaryAccessPassMethods Represents a Temporary Access Pass registered to a user for authentication through time-limited passcodes. */
    private ?array $temporaryAccessPassMethods = null;
    
    /** @var array<WindowsHelloForBusinessAuthenticationMethod>|null $windowsHelloForBusinessMethods Represents the Windows Hello for Business authentication method registered to a user for authentication. */
    private ?array $windowsHelloForBusinessMethods = null;
    
    /**
     * Instantiates a new authentication and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Authentication
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Authentication {
        return new Authentication();
    }

    /**
     * Gets the emailMethods property value. Represents the email addresses registered to a user for authentication.
     * @return array<EmailAuthenticationMethod>|null
    */
    public function getEmailMethods(): ?array {
        return $this->emailMethods;
    }

    /**
     * Gets the fido2Methods property value. Represents the FIDO2 security keys registered to a user for authentication.
     * @return array<Fido2AuthenticationMethod>|null
    */
    public function getFido2Methods(): ?array {
        return $this->fido2Methods;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'emailMethods' => function (self $o, ParseNode $n) { $o->setEmailMethods($n->getCollectionOfObjectValues(EmailAuthenticationMethod::class)); },
            'fido2Methods' => function (self $o, ParseNode $n) { $o->setFido2Methods($n->getCollectionOfObjectValues(Fido2AuthenticationMethod::class)); },
            'methods' => function (self $o, ParseNode $n) { $o->setMethods($n->getCollectionOfObjectValues(AuthenticationMethod::class)); },
            'microsoftAuthenticatorMethods' => function (self $o, ParseNode $n) { $o->setMicrosoftAuthenticatorMethods($n->getCollectionOfObjectValues(MicrosoftAuthenticatorAuthenticationMethod::class)); },
            'operations' => function (self $o, ParseNode $n) { $o->setOperations($n->getCollectionOfObjectValues(LongRunningOperation::class)); },
            'passwordlessMicrosoftAuthenticatorMethods' => function (self $o, ParseNode $n) { $o->setPasswordlessMicrosoftAuthenticatorMethods($n->getCollectionOfObjectValues(PasswordlessMicrosoftAuthenticatorAuthenticationMethod::class)); },
            'passwordMethods' => function (self $o, ParseNode $n) { $o->setPasswordMethods($n->getCollectionOfObjectValues(PasswordAuthenticationMethod::class)); },
            'phoneMethods' => function (self $o, ParseNode $n) { $o->setPhoneMethods($n->getCollectionOfObjectValues(PhoneAuthenticationMethod::class)); },
            'softwareOathMethods' => function (self $o, ParseNode $n) { $o->setSoftwareOathMethods($n->getCollectionOfObjectValues(SoftwareOathAuthenticationMethod::class)); },
            'temporaryAccessPassMethods' => function (self $o, ParseNode $n) { $o->setTemporaryAccessPassMethods($n->getCollectionOfObjectValues(TemporaryAccessPassAuthenticationMethod::class)); },
            'windowsHelloForBusinessMethods' => function (self $o, ParseNode $n) { $o->setWindowsHelloForBusinessMethods($n->getCollectionOfObjectValues(WindowsHelloForBusinessAuthenticationMethod::class)); },
        ]);
    }

    /**
     * Gets the methods property value. Represents all authentication methods registered to a user.
     * @return array<AuthenticationMethod>|null
    */
    public function getMethods(): ?array {
        return $this->methods;
    }

    /**
     * Gets the microsoftAuthenticatorMethods property value. The details of the Microsoft Authenticator app registered to a user for authentication.
     * @return array<MicrosoftAuthenticatorAuthenticationMethod>|null
    */
    public function getMicrosoftAuthenticatorMethods(): ?array {
        return $this->microsoftAuthenticatorMethods;
    }

    /**
     * Gets the operations property value. 
     * @return array<LongRunningOperation>|null
    */
    public function getOperations(): ?array {
        return $this->operations;
    }

    /**
     * Gets the passwordlessMicrosoftAuthenticatorMethods property value. Represents the Microsoft Authenticator Passwordless Phone Sign-in methods registered to a user for authentication.
     * @return array<PasswordlessMicrosoftAuthenticatorAuthenticationMethod>|null
    */
    public function getPasswordlessMicrosoftAuthenticatorMethods(): ?array {
        return $this->passwordlessMicrosoftAuthenticatorMethods;
    }

    /**
     * Gets the passwordMethods property value. Represents the details of the password authentication method registered to a user for authentication.
     * @return array<PasswordAuthenticationMethod>|null
    */
    public function getPasswordMethods(): ?array {
        return $this->passwordMethods;
    }

    /**
     * Gets the phoneMethods property value. Represents the phone registered to a user for authentication.
     * @return array<PhoneAuthenticationMethod>|null
    */
    public function getPhoneMethods(): ?array {
        return $this->phoneMethods;
    }

    /**
     * Gets the softwareOathMethods property value. 
     * @return array<SoftwareOathAuthenticationMethod>|null
    */
    public function getSoftwareOathMethods(): ?array {
        return $this->softwareOathMethods;
    }

    /**
     * Gets the temporaryAccessPassMethods property value. Represents a Temporary Access Pass registered to a user for authentication through time-limited passcodes.
     * @return array<TemporaryAccessPassAuthenticationMethod>|null
    */
    public function getTemporaryAccessPassMethods(): ?array {
        return $this->temporaryAccessPassMethods;
    }

    /**
     * Gets the windowsHelloForBusinessMethods property value. Represents the Windows Hello for Business authentication method registered to a user for authentication.
     * @return array<WindowsHelloForBusinessAuthenticationMethod>|null
    */
    public function getWindowsHelloForBusinessMethods(): ?array {
        return $this->windowsHelloForBusinessMethods;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('emailMethods', $this->emailMethods);
        $writer->writeCollectionOfObjectValues('fido2Methods', $this->fido2Methods);
        $writer->writeCollectionOfObjectValues('methods', $this->methods);
        $writer->writeCollectionOfObjectValues('microsoftAuthenticatorMethods', $this->microsoftAuthenticatorMethods);
        $writer->writeCollectionOfObjectValues('operations', $this->operations);
        $writer->writeCollectionOfObjectValues('passwordlessMicrosoftAuthenticatorMethods', $this->passwordlessMicrosoftAuthenticatorMethods);
        $writer->writeCollectionOfObjectValues('passwordMethods', $this->passwordMethods);
        $writer->writeCollectionOfObjectValues('phoneMethods', $this->phoneMethods);
        $writer->writeCollectionOfObjectValues('softwareOathMethods', $this->softwareOathMethods);
        $writer->writeCollectionOfObjectValues('temporaryAccessPassMethods', $this->temporaryAccessPassMethods);
        $writer->writeCollectionOfObjectValues('windowsHelloForBusinessMethods', $this->windowsHelloForBusinessMethods);
    }

    /**
     * Sets the emailMethods property value. Represents the email addresses registered to a user for authentication.
     *  @param array<EmailAuthenticationMethod>|null $value Value to set for the emailMethods property.
    */
    public function setEmailMethods(?array $value ): void {
        $this->emailMethods = $value;
    }

    /**
     * Sets the fido2Methods property value. Represents the FIDO2 security keys registered to a user for authentication.
     *  @param array<Fido2AuthenticationMethod>|null $value Value to set for the fido2Methods property.
    */
    public function setFido2Methods(?array $value ): void {
        $this->fido2Methods = $value;
    }

    /**
     * Sets the methods property value. Represents all authentication methods registered to a user.
     *  @param array<AuthenticationMethod>|null $value Value to set for the methods property.
    */
    public function setMethods(?array $value ): void {
        $this->methods = $value;
    }

    /**
     * Sets the microsoftAuthenticatorMethods property value. The details of the Microsoft Authenticator app registered to a user for authentication.
     *  @param array<MicrosoftAuthenticatorAuthenticationMethod>|null $value Value to set for the microsoftAuthenticatorMethods property.
    */
    public function setMicrosoftAuthenticatorMethods(?array $value ): void {
        $this->microsoftAuthenticatorMethods = $value;
    }

    /**
     * Sets the operations property value. 
     *  @param array<LongRunningOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value ): void {
        $this->operations = $value;
    }

    /**
     * Sets the passwordlessMicrosoftAuthenticatorMethods property value. Represents the Microsoft Authenticator Passwordless Phone Sign-in methods registered to a user for authentication.
     *  @param array<PasswordlessMicrosoftAuthenticatorAuthenticationMethod>|null $value Value to set for the passwordlessMicrosoftAuthenticatorMethods property.
    */
    public function setPasswordlessMicrosoftAuthenticatorMethods(?array $value ): void {
        $this->passwordlessMicrosoftAuthenticatorMethods = $value;
    }

    /**
     * Sets the passwordMethods property value. Represents the details of the password authentication method registered to a user for authentication.
     *  @param array<PasswordAuthenticationMethod>|null $value Value to set for the passwordMethods property.
    */
    public function setPasswordMethods(?array $value ): void {
        $this->passwordMethods = $value;
    }

    /**
     * Sets the phoneMethods property value. Represents the phone registered to a user for authentication.
     *  @param array<PhoneAuthenticationMethod>|null $value Value to set for the phoneMethods property.
    */
    public function setPhoneMethods(?array $value ): void {
        $this->phoneMethods = $value;
    }

    /**
     * Sets the softwareOathMethods property value. 
     *  @param array<SoftwareOathAuthenticationMethod>|null $value Value to set for the softwareOathMethods property.
    */
    public function setSoftwareOathMethods(?array $value ): void {
        $this->softwareOathMethods = $value;
    }

    /**
     * Sets the temporaryAccessPassMethods property value. Represents a Temporary Access Pass registered to a user for authentication through time-limited passcodes.
     *  @param array<TemporaryAccessPassAuthenticationMethod>|null $value Value to set for the temporaryAccessPassMethods property.
    */
    public function setTemporaryAccessPassMethods(?array $value ): void {
        $this->temporaryAccessPassMethods = $value;
    }

    /**
     * Sets the windowsHelloForBusinessMethods property value. Represents the Windows Hello for Business authentication method registered to a user for authentication.
     *  @param array<WindowsHelloForBusinessAuthenticationMethod>|null $value Value to set for the windowsHelloForBusinessMethods property.
    */
    public function setWindowsHelloForBusinessMethods(?array $value ): void {
        $this->windowsHelloForBusinessMethods = $value;
    }

}
