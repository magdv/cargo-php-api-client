<?php

declare(strict_types=1);

namespace Cargomart\ApiClient\Tests\fixtures;

use Cargomart\ApiClient\AbstractEntity;

/**
 * Class CheckEntity
 *
 * @package Cargomart\ApiClient\Tests\fixtures
 *
 * @property null|int         $i
 * @property int[]            $iList
 * @property string           $b
 * @property null|int         $s
 * @property null|UltraEntity $lt
 * @property null|UltraEntity $rt
 * @property \stdClass        $obj
 * @property UltraEntity[]    $ch
 */
class UltraEntity extends AbstractEntity
{
    protected static $types = [
        'i' => ['int'],
        'iList' => ['array', 'int'],
        'b' => ['bool'],
        's' => ['string'],
        'lt' => [self::class],
        'rt' => [self::class],
        'obj' => [\stdClass::class],
        'ch' => ['array', self::class],
    ];

    protected static $nullables = [
        'i' => true,
        'iList' => false,
        'b' => false,
        's' => true,
        'lt' => true,
        'rt' => true,
        'obj' => true,
        'ch' => false,
    ];
}
