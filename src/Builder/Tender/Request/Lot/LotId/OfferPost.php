<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Tender\Request\Lot\LotId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Tender\Requests\LotOfferPushRequest;
use Cargomart\ApiClient\Entity\Tender\Responses\TenderRequestLotOfferItemResponse;

class OfferPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Разместить отклик на лот
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(LotOfferPushRequest $body): TenderRequestLotOfferItemResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            TenderRequestLotOfferItemResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
