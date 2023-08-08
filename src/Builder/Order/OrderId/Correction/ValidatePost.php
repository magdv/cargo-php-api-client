<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId\Correction;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\OrderCorrectionValidateRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderCorrectionValidateResponse;

class ValidatePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Валидация формы запроса на изменение заказа.
     *
     * @return OrderCorrectionValidateResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderCorrectionValidateRequest $body): OrderCorrectionValidateResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderCorrectionValidateResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
