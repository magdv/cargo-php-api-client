<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDocumentPackage\PackageId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Requests\OrderDocumentRejectPackageRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderDocumentPackageResponse;

class RejectPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отклонение пакета сканов документов перевозчика
     *
     * @return OrderDocumentPackageResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderDocumentRejectPackageRequest $body): OrderDocumentPackageResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderDocumentPackageResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
