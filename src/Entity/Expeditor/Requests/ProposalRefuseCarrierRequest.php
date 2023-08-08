<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос Экспедитора на отказ от перевозчика
 * source: expeditor/requests/proposal-refuse-carrier-request.json
 *
 * @property string $carrierReason
 * @property string $note
 */
final class ProposalRefuseCarrierRequest extends AbstractEntity
{
    protected static $types = ['carrierReason' => ['string'], 'note' => ['string']];
    protected static $nullables = ['carrierReason' => false, 'note' => false];
}
