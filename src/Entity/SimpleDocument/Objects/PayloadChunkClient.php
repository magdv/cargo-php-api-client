<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\SimpleDocument\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Информация о компании из какого-либо титула
 * source: simple-document/objects/payload-chunk-client.json
 *
 * @property string $name
 * @property string $phone
 * @property string $address
 * @property string[] $contacts
 * @property PayloadChunkCommunicationContactGroups $communicationContactGroups
 * @property string $inn
 * @property string $kpp
 */
final class PayloadChunkClient extends AbstractEntity
{
    protected static $types = [
        'name' => ['string'],
        'phone' => ['string'],
        'address' => ['string'],
        'contacts' => ['array', 'string'],
        'communicationContactGroups' => [
            'Cargomart\ApiClient\Entity\SimpleDocument\Objects\PayloadChunkCommunicationContactGroups',
        ],
        'inn' => ['string'],
        'kpp' => ['string'],
    ];

    protected static $nullables = [
        'name' => false,
        'phone' => false,
        'address' => false,
        'contacts' => false,
        'communicationContactGroups' => false,
        'inn' => false,
        'kpp' => false,
    ];
}
