<?php

namespace App\Presentations\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class LoginActionValueRequest extends BaseRequest implements LoginActionValueInterface
{

    /**
     * @return array
     */
    public function rules(): array
    {

        return [
            'loginId' => [
                'nullable',
                'required_without: mailAddress',
                'string',
                'max:255'
            ],
            'mailAddress' => [
                'nullable',
//                'required_without: loginId',
                'email',
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

    /**
     * @return string|null
     */
    public function getLoginId(): string|null
    {
        return $this->input('loginId');
    }

    /**
     * @return string|null
     */
    public function getMailAddress(): string|null
    {
        return $this->input('mailAddress');
    }

    public function getPassword(): string
    {
        return $this->input('password');
    }
}
