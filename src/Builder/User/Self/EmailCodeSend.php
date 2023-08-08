<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/user/self/email-code-send
 */
final class EmailCodeSend extends AbstractBuilder
{
    protected const URL = '/api/v2/user/self/email-code-send';

    public function post(): EmailCodeSendPost
    {
        return new EmailCodeSendPost($this->client, $this->getUrl());
    }
}
