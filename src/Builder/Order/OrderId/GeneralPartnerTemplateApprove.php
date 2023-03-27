<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/general-partner-template-approve
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;

/**
 * url: /api/v2/order/{orderId}/general-partner-template-approve
 */
final class GeneralPartnerTemplateApprove extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/general-partner-template-approve';

    public function post(): GeneralPartnerTemplateApprovePost
    {
        return new GeneralPartnerTemplateApprovePost($this->client, $this->getUrl());
    }
}
