<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Common\Responses\OrderSimpleDocumentResponse;

class SimpleDocumentGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение иформации для карточки заказа Экспедитора.
     *
     * @return OrderSimpleDocumentResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): OrderSimpleDocumentResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            OrderSimpleDocumentResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
