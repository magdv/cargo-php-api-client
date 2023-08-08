<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDraftFtl;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\OrderDraftFtlRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderDraftFtlValidateResponse;

class ValidatePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Бизнес валидация черновика FTL.
     *
     * @return OrderDraftFtlValidateResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderDraftFtlRequest $body): OrderDraftFtlValidateResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderDraftFtlValidateResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
