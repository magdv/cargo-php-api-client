<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\ContractType\Responses\ContractTypeList;

class ContractTypeGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение списка типов договоров.
     *
     * @return ContractTypeList
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): ContractTypeList
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            ContractTypeList::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
