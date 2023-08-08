<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\User\Self;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/user/self/contact-email-resend
 */
final class ContactEmailResend extends AbstractBuilder
{
    protected const URL = '/api/v2/user/self/contact-email-resend';

    public function post(): ContactEmailResendPost
    {
        return new ContactEmailResendPost($this->client, $this->getUrl());
    }
}
