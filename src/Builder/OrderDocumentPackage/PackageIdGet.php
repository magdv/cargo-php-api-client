<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDocumentPackage;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\OrderDocument\Responses\OrderDocumentPackageResponse;

class PackageIdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение пакета документов по заказу
     *
     * @return OrderDocumentPackageResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderDocumentPackageResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderDocumentPackageResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
