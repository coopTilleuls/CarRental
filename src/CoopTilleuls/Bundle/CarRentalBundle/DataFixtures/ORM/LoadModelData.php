<?php
namespace CoopTilleuls\Bundle\CarRentalBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use CoopTilleuls\Bundle\CarRentalBundle\Entity\Model;

/**
 * LoadModelData
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoadModelData
{
    public function load($manager)
    {
        $clio = new Model();
        $clio->setName('Clio');
        $clio->setManufacturer($manager->merge($this->getReference('manufacturer-renault')));
        
        $twingo = new Model();
        $twingo->setName('Twingo');
        $twingo->setManufacturer($manager->merge($this->getReference('manufacturer-renault')));
        
        $p206 = new Model();
        $p206->setName('206');
        $p206->setManufacturer($manager->merge($this->getReference('manufacturer-peugeot')));
        
        $p307 = new Model();
        $p307->setName('307');
        $p307->setManufacturer($manager->merge($this->getReference('manufacturer-peugeot')));
        
        $z4 = new Model();
        $z4->setName('Z4');
        $z4->setManufacturer($manager->merge($this->getReference('manufacturer-bmw')));
        
        $x6 = new Model();
        $x6->setName('X6');
        $x6->setManufacturer($manager->merge($this->getReference('manufacturer-bmw')));
        
        $manager->persist($clio);
        $manager->persist($twingo);
        $manager->persist($p206);
        $manager->persist($p307);
        $manager->persist($z4);
        $manager->persist($x6);
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 2;
    }
}