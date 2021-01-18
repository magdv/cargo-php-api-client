<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/user/self/email-code-confirm
 */
final class EmailCodeConfirm extends AbstractBuilder
{
    protected const URL = '/api/v2/user/self/email-code-confirm';

    public function post(): EmailCodeConfirmPost
    {
        return new EmailCodeConfirmPost($this->client, $this->getUrl());
    }
}
