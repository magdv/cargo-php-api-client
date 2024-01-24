<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractEntity;
use Cargomart\ApiClient\AbstractResponse;

/**
 * Ссылка на отчет контура по компании
 * source: company/responses/company-kontur-report-response.json
 *
 * @property CompanyKonturReportResponseData $data
 */
final class CompanyKonturReportResponse extends AbstractResponse
{
    protected static $types = ['data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyKonturReportResponseData']];
    protected static $nullables = ['data' => false];
}
