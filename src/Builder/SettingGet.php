<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Setting\Responses\SettingList;

class SettingGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение списка настроек пользователя
     *
     * @return SettingList
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): SettingList
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            SettingList::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
