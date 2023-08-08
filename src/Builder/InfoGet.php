<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Advert\Responses\AdItem;

class InfoGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение информационного (reclamnogo) сообщения.
     *
     * @return AdItem
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): AdItem
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            AdItem::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
