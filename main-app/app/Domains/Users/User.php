<?php

namespace App\Domains\Users;

use App\Domains\Auths\LoginId;
use App\Domains\Shared\MailAddress;

class User
{

    public function __construct(
        private UserId      $id,
        private LoginId     $loginId,
        private string|null $password = null,
        private string|null $realFamilyName = null,
        private string|null $realName = null,
        private MailAddress $mailAddress
    )
    {

    }

    /**
     * @return UserId
     */
    public function getId(): UserId
    {
        return $this->id;
    }

    /**
     * @return LoginId
     */
    public function getLoginId(): LoginId
    {
        return $this->loginId;
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
     * @return MailAddress
     */
    public function getMailAddress(): MailAddress
    {
        return $this->mailAddress;
    }




}
