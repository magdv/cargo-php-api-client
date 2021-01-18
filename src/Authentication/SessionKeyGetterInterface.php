<?php

namespace Cargomart\ApiClient\Authentication;

interface SessionKeyGetterInterface
{
    /**
     * Получение ключа для идентификации сессии.
     *
     * @return string
     */
    public function getSessionKey(): string;
}
