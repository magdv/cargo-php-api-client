<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\ContractType;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\ContractType\Responses\ContractTypeItem;

class IdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение конкретного типа договора.
     *
     * @return ContractTypeItem
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): ContractTypeItem
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            ContractTypeItem::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
