<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder\Manage\PreOrderGroup\GroupId;

use Cargomart\ApiClient\AbstractRequest;
use Cargomart\ApiClient\Entity\Manage\PreOrder\Responses\PreOrderGroupChangingLogResponse;

class ChangingLogGet extends AbstractRequest
{
    /** @var string[][] */
    public $query = ['page' => 1, 'perPage' => 20];

    /** @var string[] */
    public $headers = [];

    /**
     * Получение истории изменения группы предзаказов
     *
     * @throws \Cargomart\ApiClient\exceptions\CargomartClientException
     */
    public function do(): PreOrderGroupChangingLogResponse
    {
        return $this->client->doRequest(
            'GET',
            $this->url,
            PreOrderGroupChangingLogResponse::class,
            http_build_query($this->query),
            null,
            $this->headers
        );
    }

    /**
     * Номер страницы для постраничной навигации
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qPage(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['page']);
        } else {
            $c->query['page'] = $value;
        }

        return $c;
    }

    /**
     * Количество элементов на страницу
     *
     * @var null|int $value
     *
     * @return self
     */
    public function qPerPage(?int $value): self
    {
        $c = clone $this;
        if (null === $value) {
            unset($c->query['perPage']);
        } else {
            $c->query['perPage'] = $value;
        }

        return $c;
    }
}
