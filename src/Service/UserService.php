<?php

namespace App\Service;

use App\Entity\User;

class UserService {

    /**
    * @param User $user
    * @return User
    */
    public function updateUserDescription(User $user) {
        $description = 'Je suis ' . ucfirst($user->getFirstName()) . ' ' .
        mb_strtoupper($user->getLastName()) . ', mon anniversaire est le ' .
        $user->getBirthday()->format('d/m/Y');
        $user->setDescription($description);
        return $user;
    }
}
