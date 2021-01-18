<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderAlterAllowFieldsResponse;

class AlterGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение списка полей, которые можно изменить.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): OrderAlterAllowFieldsResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderAlterAllowFieldsResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
