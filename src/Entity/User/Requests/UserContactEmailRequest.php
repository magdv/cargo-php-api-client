<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: user/requests/user-contact-email-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Создание контактного email
 * source: user/requests/user-contact-email-request.json
 *
 * @property string $contactEmail
 */
final class UserContactEmailRequest extends AbstractEntity
{
    protected static $types = ['contactEmail' => ['string']];
    protected static $nullables = ['contactEmail' => false];
}
