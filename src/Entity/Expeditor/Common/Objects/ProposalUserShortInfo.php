<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные грузоотправителя
 * source: expeditor/Common/objects/proposal-user-short-info.json
 *
 * @property string $firstName
 * @property string $lastName
 * @property string $secondName
 * @property string $email
 * @property string $phone
 */
final class ProposalUserShortInfo extends AbstractEntity
{
    protected static $types = [
        'firstName' => ['string'],
        'lastName' => ['string'],
        'secondName' => ['string'],
        'email' => ['string'],
        'phone' => ['string'],
    ];

    protected static $nullables = [
        'firstName' => false,
        'lastName' => false,
        'secondName' => false,
        'email' => false,
        'phone' => false,
    ];
}
