<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: expeditor-contract-conclusion/objects/expeditor-contract-conclusion-validation.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ExpeditorContractConclusion\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Данные истории валидации клиента в контуре
 * source: expeditor-contract-conclusion/objects/expeditor-contract-conclusion-validation.json
 *
 * @property string $date
 * @property string $status
 * @property string[] $errors
 */
final class ExpeditorContractConclusionValidation extends AbstractEntity
{
    protected static $types = ['date' => ['string'], 'status' => ['string'], 'errors' => ['array', 'string']];
    protected static $nullables = ['date' => false, 'status' => false, 'errors' => false];
}
