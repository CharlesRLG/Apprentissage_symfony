<?php

namespace App\Manager;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Service\UserService;
use Doctrine\ORM\EntityManagerInterface;
use Exception;

class UserManager
{
/** @var EntityManagerInterface */
private $em;

/** @var UserService */
private $userService;

function __construct(EntityManagerInterface $em, UserService $userService) {
$this->em = $em;
$this->userService = $userService;
}

/**
* Rechercher d'un utilisateur avec sa description
*
* @param int $id
* @return User|false
* @throws Exception
*/
public function findOneWithDescription(int $id) {
    $user = $this->getRepo()->find($id);
    if (!$user) {
    throw new Exception('Utilisateur introuvable !', 422);
    }
    return $this->userService->updateUserDescription($user);
    }
    
    /**
    * Liste des utilisateurs avec leur description
    *
    * @return User[]
    */
    public function findAllWithDescription() {
    $usersWithDescription = [];
    $users = $this->getRepo()->findAll();
    foreach ($users as $user) {
    $usersWithDescription[] = $this->userService->updateUserDescription($user);
    }
    return $usersWithDescription;
    }
    
    /**
    * Récupération de notre Repository UserRepository
    *
    * @return UserRepository
    */
    public function getRepo(): UserRepository
    {
    return $this->em->getRepository(User::class);
    }
    /**
     * Sauvegarde d'un utilisateur
     * 
     * @param User $user
     * @throws Exception
     */
    public function saveUser($user): void {
        $this->em->persist($user);
        $this->em->flush();
    }

}
