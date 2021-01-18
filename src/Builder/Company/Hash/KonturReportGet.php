<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\CompanyKonturReportResponse;

class KonturReportGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение ссылки на отчет контура по компании.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): CompanyKonturReportResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            CompanyKonturReportResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
