<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\ContractType\Requests\ContractTypeRequest;
use Cargomart\ApiClient\Entity\ContractType\Responses\ContractTypeItem;

class ContractTypePost extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Создание типа договора.
     *
     * @return ContractTypeItem
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(ContractTypeRequest $body): ContractTypeItem
    {
        return $this->client->doRequest(
            'POST',
            $this->url,
            ContractTypeItem::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
