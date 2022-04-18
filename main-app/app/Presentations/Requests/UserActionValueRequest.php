<?php

namespace App\Presentations\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserActionValueRequest extends BaseRequest implements UserActionValueInterface
{

    /**
     * @return array
     */
    public function rules(): array
    {

        return [
            'loginId' => [
                'required',
                'string',
                'unique:users,login_id',
                'max:255'
            ],
            'emailAddress' => [
                'nullable',
                'email',
                'max:255'
            ],
            'realFamilyName' => [
               'nullable',
                'string',
                'max:255'
            ],
            'realName' => [
                'nullable',
                'string',
                'max:255'
            ],
            'password' => [
                'required',
                'string',
                'max:255'
            ],
        ];
    }

    public function withValidator(Validator $validator): void
    {
        $validator->after(function ($validator) {
            $mail = $this->getMailAddress();
            $id = $this->getLoginId();

            //todo: 両方ダメな場合の処理を書くリクエストで落ちたら例外？

        });
    }

    public function getLoginId(): string
    {
        return $this->input('loginId');
    }

    public function getPassword(): string
    {
        return $this->input('password');
    }

    public function getRealFamilyName(): string|null
    {
        return $this->input('realFamilyName');
    }

    public function getRealName(): string|null
    {
        return $this->input('realName');
    }

    public function getMailAddress(): string|null
    {
        return $this->input('mailAddress');
    }
}
