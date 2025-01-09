<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\OrderDraftExpeditor;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Order\Common\Requests\OrderDraftExpeditorUpdateRequest;
use Cargomart\ApiClient\Entity\Order\Common\Responses\OrderDraftExpeditorValidateResponse;

class ValidatePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Бизнес валидация черновика.
     *
     * @return OrderDraftExpeditorValidateResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(OrderDraftExpeditorUpdateRequest $body): OrderDraftExpeditorValidateResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            OrderDraftExpeditorValidateResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
