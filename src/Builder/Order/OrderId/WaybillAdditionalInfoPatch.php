<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Objects\OrderAdditionalInfoWaybill;
use Cargomart\ApiClient\Entity\Order\Responses\OrderAdditionalInfoWaybillResponse;

class WaybillAdditionalInfoPatch extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Заполнить или изменить добавочные данные в будущую транспортную накладную.
     *
     * @return OrderAdditionalInfoWaybillResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderAdditionalInfoWaybill $body): OrderAdditionalInfoWaybillResponse
    {
        return $this->client->doRequest(
            'PATCH',
            $this->url,
            OrderAdditionalInfoWaybillResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
