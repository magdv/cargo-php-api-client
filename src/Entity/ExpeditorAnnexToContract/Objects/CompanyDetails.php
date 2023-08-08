<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorAnnexToContract\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные компании
 * source: expeditor-annex-to-contract/objects/company-details.json
 *
 * @property int $id
 * @property string $inn
 * @property string $kpp
 * @property string $name
 */
final class CompanyDetails extends AbstractEntity
{
    protected static $types = ['id' => ['int'], 'inn' => ['string'], 'kpp' => ['string'], 'name' => ['string']];
    protected static $nullables = ['id' => false, 'inn' => false, 'kpp' => false, 'name' => false];
}
