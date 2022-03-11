<?php

declare(strict_types=1);

namespace App\Service;


use App\Service\Interface\UserServiceInterface;

class UserService implements UserServiceInterface
{


    public function getInfoById(int $id)
    {
        return 'user4141';
    }

}
