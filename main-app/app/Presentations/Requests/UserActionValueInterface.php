<?php

namespace App\Presentations\Requests;

interface UserActionValueInterface
{
    public function getLoginId(): string;

    public function getPassword(): string;

    public function getRealFamilyName(): string|null;

    public function getRealName(): string|null;

    public function getMailAddress(): string|null;

}
