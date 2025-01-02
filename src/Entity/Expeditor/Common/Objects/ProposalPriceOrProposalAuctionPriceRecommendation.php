<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Expeditor\Common\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Рекомендация цены по заявке от экспедитора отправителю или рекомендация сменить способ согласования цены и самой цены по заявке от экспедитора отправителю
 * source: expeditor/Common/objects/proposal-price-or-proposal-auction-price-recommendation.json
 *
 * @property string $type
 * @property string $value
 */
final class ProposalPriceOrProposalAuctionPriceRecommendation extends AbstractEntity
{
    protected static $types = ['type' => ['string'], 'value' => ['string']];
    protected static $nullables = ['type' => false, 'value' => false];
}
