<?php

namespace Cargomart\ApiClient;

use Cargomart\ApiClient\Http\Status;

abstract class AbstractResponse extends AbstractEntity
{
    /**
     * @var Status
     */
    public $status;

    /**
     * @var string[]
     */
    public $headers;
}
