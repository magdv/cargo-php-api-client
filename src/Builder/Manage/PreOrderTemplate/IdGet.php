<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Manage\PreOrderTemplate;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Manage\PreOrder\Responses\PreOrderTemplateResponse;

class IdGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = [];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение шаблона предзаказа
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): PreOrderTemplateResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            PreOrderTemplateResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }
}
