<?php

namespace App\Domains\Logins;

use App\Domains\Shared\Uuid\Uuid;

class LoginId
{

    private string|null $loginId;

    /**
     * @param string|null $value
     */
    public function __construct(string|null $value=null)
    {
        $this->loginId = $value;
    }

    /**
     * @return string|null
     */
    public function getLoginId(): string|null
    {
        return $this->loginId;
    }
}
