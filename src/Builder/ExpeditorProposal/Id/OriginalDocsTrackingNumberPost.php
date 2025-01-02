<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Common\Responses\ProposalCardResponse;
use Cargomart\ApiClient\Entity\Order\Common\Requests\TrackingNumberRequest;

class OriginalDocsTrackingNumberPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Редактирование трек-номера перевозчика
     *
     * @return ProposalCardResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(TrackingNumberRequest $body): ProposalCardResponse
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            ProposalCardResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
