<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/general-partner-proposal-template
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/general-partner-proposal-template
 */
final class GeneralPartnerProposalTemplate extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/general-partner-proposal-template';

    public function get(): GeneralPartnerProposalTemplateGet
    {
        return new GeneralPartnerProposalTemplateGet($this->client, $this->getUrl());
    }
}
