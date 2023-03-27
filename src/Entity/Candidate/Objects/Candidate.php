<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: candidate/objects/candidate.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Candidate\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Потенциальный сотрудник
 * source: candidate/objects/candidate.json
 *
 * @property int $id
 * @property string $email
 * @property string $phone
 * @property string $lastName
 * @property string $firstName
 * @property string $secondName
 * @property string $position
 * @property string $contactPhone
 * @property string $contactPhoneExt
 * @property string $comment
 * @property string $timezone
 * @property CandidateAccess $access
 */
final class Candidate extends AbstractEntity
{
    protected static $types = [
        'id' => ['int'],
        'email' => ['string'],
        'phone' => ['string'],
        'lastName' => ['string'],
        'firstName' => ['string'],
        'secondName' => ['string'],
        'position' => ['string'],
        'contactPhone' => ['string'],
        'contactPhoneExt' => ['string'],
        'comment' => ['string'],
        'timezone' => ['string'],
        'access' => ['Cargomart\ApiClient\Entity\Candidate\Objects\CandidateAccess'],
    ];

    protected static $nullables = [
        'id' => false,
        'email' => false,
        'phone' => false,
        'lastName' => false,
        'firstName' => false,
        'secondName' => false,
        'position' => false,
        'contactPhone' => false,
        'contactPhoneExt' => false,
        'comment' => false,
        'timezone' => false,
        'access' => false,
    ];
}
