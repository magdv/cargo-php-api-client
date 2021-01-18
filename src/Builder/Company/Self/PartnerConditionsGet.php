<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Self;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Responses\PartnerConditionsResponse;

class PartnerConditionsGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение условий партнёрства.
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): PartnerConditionsResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            PartnerConditionsResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
