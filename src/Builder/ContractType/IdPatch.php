<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/contract-type/{id}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ContractType;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\ContractType\Requests\ContractTypeRequest;
use Cargomart\ApiClient\Entity\ContractType\Responses\ContractTypeItem;

final class IdPatch extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Изменение типа договора.
     *
     * @return ContractTypeItem
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(ContractTypeRequest $body): ContractTypeItem
    {
        return $this->client->doRequest(
            'PATCH',
            $this->url,
            ContractTypeItem::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
