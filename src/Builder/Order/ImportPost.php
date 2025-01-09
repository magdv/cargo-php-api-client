<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Common\Responses\OrderImport;

class ImportPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Импорт заказа из xlsx.
     *
     * @return OrderImport
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderImport
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderImport::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
