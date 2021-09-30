<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Company\Responses;

use Cargomart\ApiClient\AbstractResponse;
use Cargomart\ApiClient\Entity\Base\MessageV2;

/**
 * source: company/responses/company-document-list.json
 *
 * @property MessageV2[] $message
 * @property CompanyDocumentListData $data
 */
final class CompanyDocumentList extends AbstractResponse
{
    protected static $types = [
        'message' => ['array', 'Cargomart\ApiClient\Entity\Base\MessageV2'],
        'data' => ['Cargomart\ApiClient\Entity\Company\Responses\CompanyDocumentListData'],
    ];

    protected static $nullables = ['message' => false, 'data' => false];
}
