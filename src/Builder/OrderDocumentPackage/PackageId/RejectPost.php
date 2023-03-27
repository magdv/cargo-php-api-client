<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order-document-package/{packageId}/reject
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDocumentPackage\PackageId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\EmptyDataResponse;
use Cargomart\ApiClient\Entity\Order\Requests\OrderDocumentRejectPackageRequest;

final class RejectPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отклонение пакета сканов документов перевозчика
     *
     * @return EmptyDataResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderDocumentRejectPackageRequest $body): EmptyDataResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            EmptyDataResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
