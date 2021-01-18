<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Setting;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Setting\Requests\SettingRequest;
use Cargomart\ApiClient\Entity\Setting\Responses\SettingList;

class NamePatch extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Изменение значения настройки
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(SettingRequest $body): SettingList
    {
        return $this->client->doRequest(
            'PATCH',
            $this->url,
            SettingList::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
