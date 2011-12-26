<?php

namespace CoopTilleuls\Bundle\CarRentalBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use CoopTilleuls\Bundle\CarRentalBundle\Entity\Fuel;
/**
 * LoadFuelData
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoadFuelData implements FixtureInterface
{

    public function load($manager)
    {
        $sp95 = new Fuel();
        $sp95->setName('Sans plomb 95');
        
        $sp98 = new Fuel();
        $sp98->setName('Sans plomb 98');
        
        $diesel = new Fuel();
        $diesel->setName('Diesel');
        
        $gpl = new Fuel();
        $gpl->setName('GPL');

        $manager->persist($sp95);
        $manager->persist($sp98);
        $manager->persist($diesel);
        $manager->persist($gpl);
        $manager->flush();
    }
}