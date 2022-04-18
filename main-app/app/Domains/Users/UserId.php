<?php

namespace App\Domains\Users;

use App\Domains\Shared\Uuid\Uuid;

class UserId
{

    private Uuid $userID;

    /**
     * @param string|null $value
     */
    public function __construct(string|null $value=null)
    {
        $this->userID = new Uuid($value);
    }

    /**
     * @return string
     */
    public function getUserID(): string
    {
        return $this->userID->getUuid();
    }
}
