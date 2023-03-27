<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/user/self/sms-code-confirm
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/user/self/sms-code-confirm
 */
final class SmsCodeConfirm extends AbstractBuilder
{
    protected const URL = '/api/v2/user/self/sms-code-confirm';

    public function post(): SmsCodeConfirmPost
    {
        return new SmsCodeConfirmPost($this->client, $this->getUrl());
    }
}
