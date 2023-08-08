<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Builder;

use Cargomart\ApiClient\AbstractBuilder;
use Cargomart\ApiClient\Builder\Candidate\Count;
use Cargomart\ApiClient\Builder\Candidate\Id;

/**
 * url: /api/v2/candidate
 */
final class Candidate extends AbstractBuilder
{
    protected const URL = '/api/v2/candidate';

    public function count(): Count
    {
        return new Count($this->params, $this->client);
    }

    public function id(int $id): Id
    {
        $params = $this->params;
        $params['id'] = $id;
        return new Id($params, $this->client);
    }

    public function get(): CandidateGet
    {
        return new CandidateGet($this->client, $this->getUrl());
    }
}
