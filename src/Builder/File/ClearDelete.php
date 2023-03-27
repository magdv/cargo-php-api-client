<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/file/clear
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\File;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Base\Responses\EmptyDataResponse;

final class ClearDelete extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Производится физическое удаление всех временных файлов пользователя, не привязанных к документам.
     *
     * @return EmptyDataResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(): EmptyDataResponse
    {
        return $this->client->doRequest(
            'DELETE',
            $this->url,
            EmptyDataResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
