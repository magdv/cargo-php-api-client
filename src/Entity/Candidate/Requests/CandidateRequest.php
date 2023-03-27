<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: candidate/requests/candidate-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Candidate\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос на создание сотрудника
 * source: candidate/requests/candidate-request.json
 *
 * @property int $roleId
 * @property string $lastName
 * @property string $firstName
 * @property string $secondName
 * @property string $position
 * @property string $contactPhone
 * @property string $contactPhoneExt
 */
final class CandidateRequest extends AbstractEntity
{
    protected static $types = [
        'roleId' => ['int'],
        'lastName' => ['string'],
        'firstName' => ['string'],
        'secondName' => ['string'],
        'position' => ['string'],
        'contactPhone' => ['string'],
        'contactPhoneExt' => ['string'],
    ];

    protected static $nullables = [
        'roleId' => false,
        'lastName' => false,
        'firstName' => false,
        'secondName' => false,
        'position' => false,
        'contactPhone' => false,
        'contactPhoneExt' => false,
    ];
}
