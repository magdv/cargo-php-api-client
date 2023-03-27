<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/user/self/sms-code-send
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/user/self/sms-code-send
 */
final class SmsCodeSend extends AbstractBuilder
{
    protected const URL = '/api/v2/user/self/sms-code-send';

    public function post(): SmsCodeSendPost
    {
        return new SmsCodeSendPost($this->client, $this->getUrl());
    }
}
