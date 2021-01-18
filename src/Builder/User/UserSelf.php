<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\User\Self\ContactEmail;
use Cargomart\ApiClient\Builder\User\Self\ContactEmailConfirm;
use Cargomart\ApiClient\Builder\User\Self\ContactEmailResend;
use Cargomart\ApiClient\Builder\User\Self\EmailChange;
use Cargomart\ApiClient\Builder\User\Self\EmailCodeConfirm;
use Cargomart\ApiClient\Builder\User\Self\EmailCodeSend;
use Cargomart\ApiClient\Builder\User\Self\PasswordChange;
use Cargomart\ApiClient\Builder\User\Self\PhoneChange;
use Cargomart\ApiClient\Builder\User\Self\SmsCodeConfirm;
use Cargomart\ApiClient\Builder\User\Self\SmsCodeSend;
use Cargomart\ApiClient\Builder\User\Self\Token;

/**
 * url: /api/v2/user/self
 */
final class UserSelf extends AbstractBuilder
{
    protected const URL = '/api/v2/user/self';

    public function passwordChange(): PasswordChange
    {
        return new PasswordChange($this->params, $this->client);
    }

    public function smsCodeConfirm(): SmsCodeConfirm
    {
        return new SmsCodeConfirm($this->params, $this->client);
    }

    public function smsCodeSend(): SmsCodeSend
    {
        return new SmsCodeSend($this->params, $this->client);
    }

    public function emailCodeSend(): EmailCodeSend
    {
        return new EmailCodeSend($this->params, $this->client);
    }

    public function emailChange(): EmailChange
    {
        return new EmailChange($this->params, $this->client);
    }

    public function emailCodeConfirm(): EmailCodeConfirm
    {
        return new EmailCodeConfirm($this->params, $this->client);
    }

    public function phoneChange(): PhoneChange
    {
        return new PhoneChange($this->params, $this->client);
    }

    public function token(): Token
    {
        return new Token($this->params, $this->client);
    }

    public function contactEmail(): ContactEmail
    {
        return new ContactEmail($this->params, $this->client);
    }

    public function contactEmailConfirm(): ContactEmailConfirm
    {
        return new ContactEmailConfirm($this->params, $this->client);
    }

    public function contactEmailResend(): ContactEmailResend
    {
        return new ContactEmailResend($this->params, $this->client);
    }

    public function get(): UserSelfGet
    {
        return new UserSelfGet($this->client, $this->getUrl());
    }

    public function put(): UserSelfPut
    {
        return new UserSelfPut($this->client, $this->getUrl());
    }
}
