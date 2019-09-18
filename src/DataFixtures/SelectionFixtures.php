<?php

namespace App\DataFixtures;

use App\Entity\Selection;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SelectionFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1 ; $i < 6 ; $i++) {
            $selection = new Selection();
            $selection->setTitle('Sélection fixture : '.$i);
            $selection->setDateStart(new \DateTime(''.$i.'/04/2020 00:00:00'));
            $selection->setDateEnd(new \DateTime(''.($i*2).'/04/2020 00:00:00'));
            $selection->setAddress(''.$i.',rue du Bonheur');
            $selection->setPostCode(11000+$i);
            $selection->setCity('Carcassonne');
            $selection->setStatus(false);
            $manager->persist($selection);
            $this->addReference('Selection'.'_'.$i, $selection);

        }
        $manager->flush();
    }
}
