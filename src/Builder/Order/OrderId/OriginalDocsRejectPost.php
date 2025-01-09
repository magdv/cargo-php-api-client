<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Order\OrderId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Common\Responses\OrderCardResponse;
use Cargomart\ApiClient\Entity\Order\OrderDocument\Requests\RejectDocumentRequest;

class OriginalDocsRejectPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Отклонить оригиналы документов.
     *
     * @return OrderCardResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(RejectDocumentRequest $body): OrderCardResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderCardResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
