<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('admin@simplon-carcassonne.com');
        $user->setName('Admin');
        $user->setSurname('Paul');
        /*$user->setRoles(array(
            'ROLE_ADMIN'
        ));*/
        $user->addRole('ROLE_ADMIN');
        //$user->addRole('ROLE_USER');
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            'admin'
        ));
        $manager->persist($user);

        $user2 = new User();
        $user2->setEmail('master@simplon-carcassonne.com');
        $user2->setName('Master');
        $user2->setSurname('Raymond');
        $user2->addRole('ROLE_MASTER');
        /*$user2->setRoles(array(
            'ROLE_MASTER'
        ));*/
        $user2->setPassword($this->passwordEncoder->encodePassword(
            $user2,
            'master'
        ));
        $manager->persist($user2);

        $user3 = new User();
        $user3->setEmail('jury@simplon-carcassonne.com');
        $user3->setName('Jury');
        $user3->setSurname('Martine');
        $user3->addRole('ROLE_JURY');
        /*$user3->setRoles(array(
            'ROLE_JURY'
        ));*/
        $user3->setPassword($this->passwordEncoder->encodePassword(
            $user3,
            'jury'
        ));
        $manager->persist($user3);

        $manager->flush();
    }
}
