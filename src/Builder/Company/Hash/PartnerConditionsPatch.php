<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Requests\PartnerConditionsRequest;
use Cargomart\ApiClient\Entity\Company\Responses\PartnerConditionsResponse;

class PartnerConditionsPatch extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод редактирует условия партнёрства.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
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
