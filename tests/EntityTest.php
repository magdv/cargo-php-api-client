<?php

declare(strict_types=1);

namespace Cargomart\ApiClient\Tests;

use Cargomart\ApiClient\Tests\fixtures\UltraEntity;
use PHPUnit\Framework\TestCase;

class EntityTest extends TestCase
{
    public function testPropertyAccess(): void
    {
        $ultra = new UltraEntity();

        self::assertNull($ultra->i);
        self::assertFalse(isset($ultra->i));

        $i = random_int(0, 100000);
        $ultra->i = $i;
        self::assertEquals($i, $ultra->i);
        self::assertTrue(isset($ultra->i));

        $ultra->i = null;
        self::assertNull($ultra->i);
        self::assertTrue(isset($ultra->i));

        $this->expectException(\RuntimeException::class);
        $ultra->i = 'hello';

        self::assertNull($ultra->ch);
        self::assertFalse(isset($ultra->ch));

        $ultra->ch = [];
        self::assertEquals([], $ultra->ch);
        self::assertTrue(isset($ultra->ch));

        $this->expectException(\RuntimeException::class);
        $ultra->ch = null;

        unset($ultra->ch);
        self::assertNull($ultra->ch);
        self::assertFalse(isset($ultra->ch));
    }

    public function testDeserializeSerialize(): void
    {
        $values = [
            'i' => 123,
            'iList' => ['456', 789],
            'b' => true,
            's' => 'root',
            'lt' => [
                'i' => null,
                's' => 'hello',
            ],
            'rt' => [
                'i' => null,
                's' => 'world',
            ],
            'obj' => [
                'property' => null,
                'value' => 321,
            ],
            'ch' => [
                [
                    'i' => 1,
                    'b' => false,
                ],
                [
                    'i' => 2,
                    'b' => false,
                ],
            ],
        ];
        $ultra = UltraEntity::deserialize($values);

        self::assertTrue(isset($ultra->i));
        self::assertTrue(isset($ultra->rt->s));
        self::assertEquals('hello', $ultra->lt->s);
        self::assertEquals('world', $ultra->rt->s);

        self::assertCount(2, $ultra->iList);
        self::assertEquals(456, $ultra->iList[0]);
        self::assertEquals(789, $ultra->iList[1]);

        self::assertNotNull($ultra->obj);
        self::assertTrue(property_exists($ultra->obj, 'property'));
        self::assertNull($ultra->obj->property);
        self::assertTrue(property_exists($ultra->obj, 'value'));
        self::assertEquals(321, $ultra->obj->value);

        self::assertCount(2, $ultra->ch);
        self::assertEquals(1, $ultra->ch[0]->i);
        self::assertFalse($ultra->ch[0]->b);
        self::assertEquals(2, $ultra->ch[1]->i);
        self::assertFalse($ultra->ch[1]->b);

        $encoded = json_decode(json_encode($ultra), true);
        self::assertEquals($values, $encoded);
    }
}
