<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/worker/{id}/resend-invite
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Worker\Id;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/worker/{id}/resend-invite
 */
final class ResendInvite extends AbstractBuilder
{
    protected const URL = '/api/v2/worker/{id}/resend-invite';

    public function post(): ResendInvitePost
    {
        return new ResendInvitePost($this->client, $this->getUrl());
    }
}
