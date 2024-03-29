<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Requests\IdListRequest;
use Cargomart\ApiClient\Entity\Base\Responses\EmptyDataResponse;

class ContactDelete extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Список контактов на удаление из заказа.
     *
     * @return EmptyDataResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(IdListRequest $body): EmptyDataResponse
    {
        return $this->client->doRequest(
            'DELETE',
            $this->url,
            EmptyDataResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
