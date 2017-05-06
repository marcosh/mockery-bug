<?php

declare(strict_types=1);

final class Test extends \PHPUnit\Framework\TestCase
{
    public function testIsInstanceWithTwoDeclarations(): void
    {
        $em = Mockery::mock('Doctrine\Orm\EntityManager');
        $em = Mockery::mock(\Doctrine\ORM\EntityManager::class);

        self::assertInstanceOf(\Doctrine\ORM\EntityManagerInterface::class, $em);
    }
}
