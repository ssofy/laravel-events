<?php

namespace SSOfy\Laravel\Events;

use SSOfy\Models\Entities\UserEntity;

class UserAuthenticated
{
    const METHOD_USERNAME = 'username';
    const METHOD_EMAIL    = 'email';
    const METHOD_PHONE    = 'phone';
    const METHOD_TOKEN    = 'token';
    const METHOD_OTP      = 'otp';
    const METHOD_SOCIAL   = 'social';

    /**
     * @var UserEntity
     */
    public $user;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $ip;

    /**
     * @param UserEntity $user
     * @param string $method
     * @param string $ip
     */
    public function __construct($user, $method, $ip)
    {
        $this->user   = $user;
        $this->method = $method;
        $this->ip     = $ip;
    }
}
