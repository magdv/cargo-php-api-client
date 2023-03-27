<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/expeditor/annex-to-contract/{contractUuid}/banking-details
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Expeditor\AnnexToContract\ContractUuid;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\EmptyDataResponse;

final class BankingDetailsPut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * @return EmptyDataResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): EmptyDataResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            EmptyDataResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
