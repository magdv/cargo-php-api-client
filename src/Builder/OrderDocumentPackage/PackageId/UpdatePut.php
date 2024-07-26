<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDocumentPackage\PackageId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\OrderDocument\Requests\OrderDocumentUpdateAllRequest;
use Cargomart\ApiClient\Entity\Order\OrderDocument\Responses\OrderDocumentPackageResponse;

class UpdatePut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Валидация пакета документов перед сохранением файлов в документы заказа и отправкой на модерацию
     *
     * @return OrderDocumentPackageResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderDocumentUpdateAllRequest $body): OrderDocumentPackageResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            OrderDocumentPackageResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
