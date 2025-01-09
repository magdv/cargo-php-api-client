<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractUpdates\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Дополнительное соглашение
 * source: expeditor-contract-updates/objects/expeditor-contract-updates-additional-agreement.json
 *
 * @property string $title
 * @property string $createDate
 * @property \stdClass $file
 */
final class ExpeditorContractUpdatesAdditionalAgreement extends AbstractEntity
{
    protected static $types = ['title' => ['string'], 'createDate' => ['string'], 'file' => ['\stdClass']];
    protected static $nullables = ['title' => false, 'createDate' => false, 'file' => true];
}
