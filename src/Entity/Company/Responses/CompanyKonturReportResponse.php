<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: company/responses/company-kontur-report-response.json
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * Ссылка на отчет контура по компании
 * source: company/responses/company-kontur-report-response.json
 *
 * @property MessageV2[] $message
 * @property CompanyKonturReportResponseData $data
 */
final class CompanyKonturReportResponse extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyKonturReportResponseData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
