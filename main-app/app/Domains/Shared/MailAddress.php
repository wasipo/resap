<?php

namespace App\Domains\Shared;

class MailAddress
{

    private string|null $mailAddress;

    /**
     * @param string|null $value
     */
    public function __construct(string|null $value = null)
    {
        $this->mailAddress = $value;
    }

    /**
     * @return string|null
     */
    public function getMailAddress(): string|null
    {
        return $this->mailAddress;
    }

}
