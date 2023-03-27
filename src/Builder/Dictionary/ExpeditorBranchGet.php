<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/dictionary/expeditor-branch
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Dictionary;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Dictionary\Responses\BranchList;

final class ExpeditorBranchGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Вывод списка филиалов.
     *
     * @return BranchList
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): BranchList
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            BranchList::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
