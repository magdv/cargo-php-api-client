<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ContractType;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\ContractType\Requests\ContractTypeRequest;
use Cargomart\ApiClient\Entity\ContractType\Responses\ContractTypeItem;

class IdPatch extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Изменение типа договора.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
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
