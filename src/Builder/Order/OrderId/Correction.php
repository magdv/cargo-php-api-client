<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: url:/api/v2/order/{orderId}/correction
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Order\OrderId\Correction\Approve;
use Cargomart\ApiClient\Builder\Order\OrderId\Correction\CorrectionId;
use Cargomart\ApiClient\Builder\Order\OrderId\Correction\Reject;
use Cargomart\ApiClient\Builder\Order\OrderId\Correction\Validate;

/**
 * url: /api/v2/order/{orderId}/correction
 */
final class Correction extends AbstractBuilder
{
    protected const URL = '/api/v2/order/{orderId}/correction';

    public function validate(): Validate
    {
        return new Validate($this->params, $this->client);
    }

    public function reject(): Reject
    {
        return new Reject($this->params, $this->client);
    }

    public function approve(): Approve
    {
        return new Approve($this->params, $this->client);
    }

    public function correctionId(int $correctionId): CorrectionId
    {
        $params = $this->params;
        $params['correctionId'] = $correctionId;
        return new CorrectionId($params, $this->client);
    }

    public function get(): CorrectionGet
    {
        return new CorrectionGet($this->client, $this->getUrl());
    }

    public function delete(): CorrectionDelete
    {
        return new CorrectionDelete($this->client, $this->getUrl());
    }

    public function post(): CorrectionPost
    {
        return new CorrectionPost($this->client, $this->getUrl());
    }
}
