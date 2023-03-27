<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/order-document-package/{packageId}/moderation
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDocumentPackage\PackageId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Responses\OrderDocumentPackageResponse;

final class ModerationPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отправка пакета документов на проверку
     *
     * @return OrderDocumentPackageResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderDocumentPackageResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderDocumentPackageResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
