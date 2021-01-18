<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderSearch\Truck;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\MessageResponse;

class TruckIdDelete extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Удаление критерия поиска
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): MessageResponse
    {
        return $this->client->doRequest(
            'DELETE',
            $this->url,
            MessageResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
