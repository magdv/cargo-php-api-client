<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\ProposalDowntimeClaim\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaim;

/**
 * source: expeditor/ProposalDowntimeClaim/responses/ProposalClaimListResponse.json#/properties/data
 *
 * @property OrderDowntimeClaim[] $proposalClaim
 */
final class ProposalClaimListResponseData extends AbstractEntity
{
    protected static $types = [
        'proposalClaim' => ['array', 'Cargomart\ApiClient\Entity\Order\OrderDowntimeClaim\Objects\OrderDowntimeClaim'],
    ];

    protected static $nullables = ['proposalClaim' => false];
}
