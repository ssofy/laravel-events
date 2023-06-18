<?php

namespace SSOfy\Laravel\Events;

use SSOfy\Models\Entities\UserEntity;

class UserUpdated
{
    /**
     * @var UserEntity
     */
    public $user;

    /**
     * @var string
     */
    public $ip;

    /**
     * @param UserEntity $user
     * @param string $ip
     */
    public function __construct($user, $ip)
    {
        $this->user = $user;
        $this->ip   = $ip;
    }
}
