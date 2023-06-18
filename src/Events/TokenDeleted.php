<?php

namespace SSOfy\Laravel\Events;

class TokenDeleted
{
    /**
     * @var string
     */
    public $token;

    /**
     * @param string $token
     */
    public function __construct($token)
    {
        $this->token = $token;
    }
}
