<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: user/objects/value-with-code-verification.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\User\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация по прохождению пользователем проверки значения
 * source: user/objects/value-with-code-verification.json
 *
 * @property string $value
 * @property string $unconfirmedValue
 * @property string $confirmBeforeDate
 * @property string $resendAfterDate
 */
final class ValueWithCodeVerification extends AbstractEntity
{
    protected static $types = [
        'value' => ['string'],
        'unconfirmedValue' => ['string'],
        'confirmBeforeDate' => ['string'],
        'resendAfterDate' => ['string'],
    ];

    protected static $nullables = [
        'value' => false,
        'unconfirmedValue' => false,
        'confirmBeforeDate' => false,
        'resendAfterDate' => false,
    ];
}
