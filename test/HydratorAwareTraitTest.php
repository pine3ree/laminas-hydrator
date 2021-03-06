<?php

/**
 * @see       https://github.com/laminas/laminas-hydrator for the canonical source repository
 * @copyright https://github.com/laminas/laminas-hydrator/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-hydrator/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace LaminasTest\Hydrator;

use PHPUnit\Framework\TestCase;

/**
 * @covers Laminas\Hydrator\HydratorAwareTrait
 */
class HydratorAwareTraitTest extends TestCase
{
    public function testSetHydrator(): void
    {
        $object = $this->getObjectForTrait('\Laminas\Hydrator\HydratorAwareTrait');

        $this->assertSame(null, $object->getHydrator());

        $hydrator = $this->getMockForAbstractClass('\Laminas\Hydrator\AbstractHydrator');

        $object->setHydrator($hydrator);

        $this->assertSame($hydrator, $object->getHydrator());
    }

    public function testGetHydrator(): void
    {
        $object = $this->getObjectForTrait('\Laminas\Hydrator\HydratorAwareTrait');

        $this->assertNull($object->getHydrator());

        $hydrator = $this->getMockForAbstractClass('\Laminas\Hydrator\AbstractHydrator');

        $object->setHydrator($hydrator);

        $this->assertEquals($hydrator, $object->getHydrator());
    }
}
