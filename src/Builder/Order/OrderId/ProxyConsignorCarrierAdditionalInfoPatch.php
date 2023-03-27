<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order/{orderId}/proxy-consignor-carrier-additional-info
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\OrderAdditionalInfoRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderAdditionalInfoResponse;

final class ProxyConsignorCarrierAdditionalInfoPatch extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Заполнить или изменить добавочные данные в будущую довереность на самовывоз c\без факсимиле.
     *
     * @return OrderAdditionalInfoResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderAdditionalInfoRequest $body): OrderAdditionalInfoResponse
    {
        return $this->client->doRequest(
            'PATCH',
            $this->url,
            OrderAdditionalInfoResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
