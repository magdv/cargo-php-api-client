<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company/self/settings
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Requests\SettingsDataRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanySettingsResponse;

final class SettingsPatch extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Сохранение настроек компании.
     *
     * @return CompanySettingsResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(SettingsDataRequest $body): CompanySettingsResponse
    {
        return $this->client->doRequest(
            'PATCH',
            $this->url,
            CompanySettingsResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
