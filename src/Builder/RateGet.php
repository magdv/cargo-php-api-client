<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Rate\RateList;

class RateGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Вывод списка котировок.
     *
     * @return RateList
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): RateList
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            RateList::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
