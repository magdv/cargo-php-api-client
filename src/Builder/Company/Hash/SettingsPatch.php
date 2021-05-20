<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Requests\SettingsData;
use Cargomart\ApiClient\Entity\Company\Responses\CompanySettings;

class SettingsPatch extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Сохранение настроек компании.
     *
     * @return CompanySettings
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(SettingsData $body): CompanySettings
    {
        return $this->client->doRequest(
            'PATCH',
            $this->url,
            CompanySettings::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
