<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Landing\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные для отправки email
 * source: landing/requests/send-email-request.json
 *
 * @property string $name
 * @property string $email
 * @property string $phone
 */
final class SendEmailRequest extends AbstractEntity
{
    protected static $types = ['name' => ['string'], 'email' => ['string'], 'phone' => ['string']];
    protected static $nullables = ['name' => false, 'email' => false, 'phone' => false];
}
