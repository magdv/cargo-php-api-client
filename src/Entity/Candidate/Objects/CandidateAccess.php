<?php

/**
 * @file Внимание! Файл сгенерирован автоматически. Не вносить правки.
 */

declare(strict_types=1);

namespace Cargomart\ApiClient\Entity\Candidate\Objects;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Список доступа к объекту потенциальных сотрудников
 * source: candidate/objects/candidate-access.json
 *
 * @property bool $view
 * @property bool $update
 */
final class CandidateAccess extends AbstractEntity
{
    protected static $types = ['view' => ['bool'], 'update' => ['bool']];
    protected static $nullables = ['view' => false, 'update' => false];
}
