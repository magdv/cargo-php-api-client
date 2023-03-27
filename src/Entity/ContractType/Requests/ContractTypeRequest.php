<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: contract-type/requests/contract-type-request.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\ContractType\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Создание нового типа договора
 * source: contract-type/requests/contract-type-request.json
 *
 * @property string $name
 * @property string $description
 */
final class ContractTypeRequest extends AbstractEntity
{
    protected static $types = ['name' => ['string'], 'description' => ['string']];
    protected static $nullables = ['name' => false, 'description' => false];
}
