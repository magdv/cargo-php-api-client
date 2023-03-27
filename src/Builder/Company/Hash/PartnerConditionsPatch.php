<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 * src: req:/api/v2/company/{hash}/partner-conditions
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Requests\PartnerConditionsRequest;
use Cargomart\ApiClient\Entity\Company\Responses\PartnerConditionsResponse;

final class PartnerConditionsPatch extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод редактирует условия партнёрства.
     *
     * @return PartnerConditionsResponse
     *
     * @throws \Cargomart\ApiClient\Exceptions\CargomartClientException
     */
    public function do(PartnerConditionsRequest $body): PartnerConditionsResponse
    {
        return $this->client->doRequest(
            'PATCH',
            $this->url,
            PartnerConditionsResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
