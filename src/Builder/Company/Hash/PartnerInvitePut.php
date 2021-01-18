<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Company\Hash;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Company\Requests\PartnerFormRequest;
use Cargomart\ApiClient\Entity\Company\Responses\PartnerStatusResponse;

class PartnerInvitePut extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Метод добавляет компанию в партнёры
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(PartnerFormRequest $body): PartnerStatusResponse
    {
        return $this->client->doRequest(
            'PUT',
            $this->url,
            PartnerStatusResponse::class,
            http_build_query($this->query),
            $body,
            $this->headers
        );
    }
}
