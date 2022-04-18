<?php

namespace App\Domains\Users;

use App\Domains\Auths\LoginId;
use App\Domains\Shared\MailAddress;

class User
{

    public function __construct(
        private UserId      $id,
        private LoginId     $loginId,
        private string|null $password,
        private string|null $realFamilyName,
        private string|null $realName,
        private MailAddress $mailAddress
    )
    {

    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id->getUserID();
    }

    /**
     * @return string|null
     */
    public function getLoginId(): ?string
    {
        return $this->loginId->getLoginId();
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @return string|null
     */
    public function getRealFamilyName(): ?string
    {
        return $this->realFamilyName;
    }

    /**
     * @return string|null
     */
    public function getRealName(): ?string
    {
        return $this->realName;
    }

    /**
     * @return string|null
     */
    public function getMailAddress(): ?string
    {
        return $this->mailAddress->getMailAddress();
    }




}
