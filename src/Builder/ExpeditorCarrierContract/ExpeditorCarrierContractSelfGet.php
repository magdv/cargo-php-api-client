<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/expeditor-carrier-contract/self
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ExpeditorCarrierContract;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\ExpeditorCarrierContract\Responses\ExpeditorCarrierContractList;

final class ExpeditorCarrierContractSelfGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получить список своих договоров с Экспедитором.
     *
     * @return ExpeditorCarrierContractList
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): ExpeditorCarrierContractList
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            ExpeditorCarrierContractList::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
