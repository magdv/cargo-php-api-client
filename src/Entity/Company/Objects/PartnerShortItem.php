<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Модель партнера
 * source: company/objects/partner-short-item.json
 *
 * @property string $id
 * @property string $shortName
 * @property string $type
 * @property string $logo
 */
final class PartnerShortItem extends AbstractEntity
{
    protected static $types = ['id' => ['string'], 'shortName' => ['string'], 'type' => ['string'], 'logo' => ['string']];
    protected static $nullables = ['id' => false, 'shortName' => false, 'type' => false, 'logo' => false];
}
