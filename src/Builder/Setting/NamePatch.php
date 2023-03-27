<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/setting/{name}
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Setting;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Setting\Requests\SettingRequest;
use Cargomart\ApiClient\Entity\Setting\Responses\SettingList;

final class NamePatch extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Изменение значения настройки
     *
     * @return SettingList
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
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
