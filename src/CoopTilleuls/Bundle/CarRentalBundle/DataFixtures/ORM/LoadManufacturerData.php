<?php
namespace CoopTilleuls\Bundle\CarRentalBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use CoopTilleuls\Bundle\CarRentalBundle\Entity\Manufacturer;

/**
 * LoadManufacturerData
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoadManufacturerData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load($manager)
    {
        $renault = new Manufacturer();
        $renault->setName('Renault');
        
        $peugeot = new Manufacturer();
        $peugeot->setName('Peugeot');
        
        $bmw = new Manufacturer();
        $bmw->setName('BMW');

        $manager->persist($renault);
        $manager->persist($peugeot);
        $manager->persist($bmw);
        $manager->flush();
        
        $this->addReference('manufacturer-renault', $renault);
        $this->addReference('manufacturer-peugeot', $peugeot);
        $this->addReference('manufacturer-bmw', $bmw);
    }
    
    public function getOrder()
    {
        return 1;
    }
}