<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\ProposalDowntimeClaim\Requests;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Запрос отказа Экспедитором претензии Перевозчика о простое
 * source: expeditor/ProposalDowntimeClaim/requests/proposal-carrier-downtime-claim-reject-request.json
 *
 * @property string $reason
 */
final class ProposalCarrierDowntimeClaimRejectRequest extends AbstractEntity
{
    protected static $types = ['reason' => ['string']];
    protected static $nullables = ['reason' => false];
}
