<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Объект персоны обладающего правом подписи
 * source: expeditor-contract-conclusion/objects/expeditor-contract-conclusion-kontur-data.json#/properties/signers
 *
 * @property string $id
 * @property string $firstName
 * @property string $lastName
 * @property string $secondName
 * @property string $position
 */
final class ExpeditorContractConclusionKonturDataSigners extends AbstractEntity
{
    protected static $types = [
        'id' => ['string'],
        'firstName' => ['string'],
        'lastName' => ['string'],
        'secondName' => ['string'],
        'position' => ['string'],
    ];

    protected static $nullables = [
        'id' => false,
        'firstName' => false,
        'lastName' => false,
        'secondName' => false,
        'position' => false,
    ];
}
