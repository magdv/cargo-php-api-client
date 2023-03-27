<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/expeditor-proposal/{id}/proxy/{proxyId}/sign
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorProposal\Id\Proxy\ProxyId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Expeditor\Requests\ProposalProxySignRequest;
use Cargomart\ApiClient\Entity\Expeditor\Responses\ProposalCardResponse;

final class SignPost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Подписать доверенность.
     *
     * @return ProposalCardResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(ProposalProxySignRequest $body): ProposalCardResponse
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
