<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос Экспедитора на отказ от заказа
 * source: expeditor/requests/proposal-refuse-request.json
 *
 * @property string $carrierReason
 * @property string $consignorReason
 * @property string $note
 */
final class ProposalRefuseRequest extends AbstractEntity
{
    protected static $types = ['carrierReason' => ['string'], 'consignorReason' => ['string'], 'note' => ['string']];
    protected static $nullables = ['carrierReason' => false, 'consignorReason' => false, 'note' => false];
}
