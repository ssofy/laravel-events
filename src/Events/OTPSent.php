<?php

namespace SSOfy\Laravel\Events;

use SSOfy\Models\Entities\OTPOptionEntity;

class OTPSent
{
    /**
     * @var OTPOptionEntity
     */
    public $option;

    /**
     * @param OTPOptionEntity $option
     */
    public function __construct($option)
    {
        $this->option = $option;
    }
}
