<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor-contract-conclusion/objects/expeditor-contract-conclusion-file-generate-info.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные истории валидации клиента в контуре
 * source: expeditor-contract-conclusion/objects/expeditor-contract-conclusion-file-generate-info.json
 *
 * @property string $date
 * @property string $status
 * @property string[] $info
 */
final class ExpeditorContractConclusionFileGenerateInfo extends AbstractEntity
{
    protected static $types = ['date' => ['string'], 'status' => ['string'], 'info' => ['array', 'string']];
    protected static $nullables = ['date' => false, 'status' => false, 'info' => false];
}
