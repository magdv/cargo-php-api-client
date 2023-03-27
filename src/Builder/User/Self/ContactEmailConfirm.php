<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/user/self/contact-email-confirm
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/user/self/contact-email-confirm
 */
final class ContactEmailConfirm extends AbstractBuilder
{
    protected const URL = '/api/v2/user/self/contact-email-confirm';

    public function post(): ContactEmailConfirmPost
    {
        return new ContactEmailConfirmPost($this->client, $this->getUrl());
    }
}
