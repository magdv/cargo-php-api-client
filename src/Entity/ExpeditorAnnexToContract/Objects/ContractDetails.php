<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorAnnexToContract\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные контракта
 * source: expeditor-annex-to-contract/objects/contract-details.json
 *
 * @property string $id
 * @property string $title
 * @property string $number
 * @property string $date
 */
final class ContractDetails extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'title' => ['string'], 'number' => ['string'], 'date' => ['string']];
    protected static $nullables = ['id' => false, 'title' => false, 'number' => false, 'date' => false];
}
